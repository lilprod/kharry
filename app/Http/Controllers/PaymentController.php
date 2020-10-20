<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
/**All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use App\PackagePayment;
use App\Package;
use App\TripAnnounce;
use App\User;
use App\Mail\SendCodeMail;
use App\Mail\SendPaymentMail;
use App\Mail\SendPaymentAdminMail;
use Auth;
use Redirect;
use Session;
use URL;

class PaymentController extends Controller
{
    private $_api_context;

    public function __construct()
    {
        $this->middleware('auth');
        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function payWithpaypal(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Item 1') /* item name **/
            ->setCurrency($request->input('currency'))
            ->setQuantity(1)
            ->setPrice($request->input('amount')); /** unit price **/
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency($request->input('currency'))
            ->setTotal($request->input('amount'));

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Payment Kharry Package');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('status')) /* Specify return URL **/
            ->setCancelUrl(URL::route('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /* dd($payment->create($this->_api_context));exit; **/
        try {
            $payment->create($this->_api_context);

            $package_payment = new PackagePayment();
            $package_payment->payer_name = $request->input('sender_name');
            $package_payment->payer_email = $request->input('sender_email');
            $package_payment->payer_phone_number = $request->input('sender_phone_number');
            $package_payment->receiver_name = $request->input('recipient_name');
            $package_payment->receiver_email = $request->input('recipient_email');
            $package_payment->receiver_phone_number = $request->input('recipient_phone_number');
            $package_payment->amount = $request->input('amount');
            $package_payment->user_id = auth()->user()->id;
            $package_payment->trip_id = $request->input('trip_id');
            $package_payment->package_id = $request->input('package_id');

            $package_payment->save();
		/* add Package payment ID to session **/
        Session::put('package_payment_id', $package_payment->id);
		Session::put('package_id', $package_payment->package_id);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error', 'Connection timeout');

                return Redirect::route('payments');
            } else {
                \Session::put('error', 'Some error occur, sorry for inconvenient');

                return Redirect::route('payments');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        /* add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {
            /* redirect to paypal **/
            return Redirect::away($redirect_url);
        }

        \Session::put('error', 'Unknown error occurred');

        return Redirect::route('payments');
    }

    public function getPaymentStatus()
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
		
		$package_payment_id = Session::get('package_payment_id');
		$package_id = Session::get('package_id');

        /* clear the session payment ID **/
        Session::forget('paypal_payment_id');
		Session::forget('package_payment_id');
		Session::forget('package_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            /*\Session::put('error', 'Payment failed'); */

            $package_payment = PackagePayment::findOrFail($package_payment_id);;

            if ($package_payment) {
                PackagePayment::where('id', $package_payment->id)->delete();
				Package::where('id', $package_id)->delete();
            }

            return Redirect::route('payments')->with('error','Payment failed!');
        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {
            \Session::put('success', 'Payment success');

            $package_payment = PackagePayment::findOrFail($package_payment_id);

            $package = Package::findOrFail($package_payment->package_id);

            $trip = TripAnnounce::findOrFail($package_payment->trip_id);

            $weight = $package->weight;
            
            $new_kilo = ($trip->number_kilo - $weight);
            TripAnnounce::where('id', $package_payment->trip_id)
                    ->update([
                            'number_kilo' => $new_kilo,
                        ]);

            $package_code = $package->package_code;
            $security_question = $package->security_question;
            $answer = $package->answer;
            $amount = $package_payment->amount;
            $weight = $package->weight;

            $user = User::findOrFail($trip->user_id);
			
            Mail::to($package_payment->payer_email)->send(new SendCodeMail($package_code));

            $payer_name = $package_payment->payer_name;

            $payer_email = $package_payment->payer_email;

            $payer_number = $package_payment->payer_phone_number;

            $receiver_name = $user->name.' '.$user->firstname;

            Mail::to($user->email)->send(new SendPaymentMail($payer_name, $payer_email, $payer_number));

            Mail::to('payments@kharry.com')->send(new SendPaymentAdminMail($amount, $payer_name, $receiver_name,$weight));

            $basic = new \Nexmo\Client\Credentials\Basic('81de9211', '2uK4uXgfutl3LgtC');
            $client = new \Nexmo\Client($basic);

            $client->message()->send([
                'to' => $package_payment->payer_phone_number,
                'from' => '14373703901',
                'text' => 'Veuillez enregistrer le Code de votre Paquet: '.$package_code,
            ]);

            return Redirect::route('payments');
        }

        /*\Session::put('error', 'Payment failed');*/

        $package_payment = PackagePayment::findOrFail($package_payment_id);

        if ($package_payment) {
            PackagePayment::where('id', $package_payment->id)->delete();
			Package::where('id', $package_id)->delete();
        }

        return Redirect::route('payments')->with('error','Payment failed!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('payments.index')->with('package_payments', $user->package_payments);
    }
}
