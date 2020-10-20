<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Package;
use App\TripAnnounce;
use App\Historique;
use App\ReceptionPackage;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Package as PackageResource;
use Auth;
use App\Mail\SendReceptionAdminMail;
use App\Mail\SendReceptionMail;
use Carbon\Carbon;


class PackageController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function packages()
    {
        $packages = Package::paginate(3);

        return PackageResource::collection($packages);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;

        $receptionpackages = DB::table('reception_packages')
             ->where('sender_id','=', $user_id)
             ->get();
        return view('packages.index', compact('receptionpackages'));
    }

    public function createpackage(int $id)
    {
        $trip = TripAnnounce::findOrFail($id); //Find trip of id = $id

        $user_id = auth()->user()->id;                                

        if ($user_id == $trip->user_id){

            return redirect()->route('profils.index')->with('package_error', 'Operation Denied');

        } else {

            return view('pages.newpackage', compact('trip'));

        }  

       // return view('pages.newpackage', compact('trip'));
        
    }

    public function receivePackage()
    {
        return view('packages.receivepackage');
    }

    public function postreceivePackage(Request $request)
    {
        $this->validate($request, [
            'recipient_name' => 'required',
            'package_code' => 'required',
        ]);

        
        $code = $request->input('package_code');

        $package = Package::where('package_code', '=', $code)
                            ->first();
         

        if ($package) {

            $user_id = auth()->user()->id; 
            
            $trip = TripAnnounce::findOrFail($package->trip_id);

            //if (($user_id == $package->user_id) || ($user_id == $trip->user_id)){
            if ($user_id == $package->user_id){

                return redirect()->route('profils.index')->with('error_owner', 'Operation Denied');

            } else {

                if($package->status == 1){
                    
                    return redirect()->route('receivepackage')->with('error', 'Package has been already delivered');
                }

                $reception_package = new ReceptionPackage();
    
                $reception_package->recipient_name = $package->recipient_name;
                $reception_package->recipient_phone_number = $package->recipient_phone_number;
                $reception_package->recipient_email = $package->recipient_email;
                $reception_package->package_code = $code;
                $reception_package->package_id = $package->id;
                $reception_package->user_id = auth()->user()->id;
    
                $user = User::findOrFail($package->user_id);
    
                $reception_package->sender_id = $user->id;
                $reception_package->sender_name = $user->name.' '.$user->firstname;
                $reception_package->sender_email = $user->email;
                $reception_package->sender_phone_number = $user->phone_number;
    
                $trip = TripAnnounce::findOrFail($package->trip_id);
    
                $user_trip = User::findOrFail($trip->user_id);
    
                $reception_package->deliveryman_id = $trip->user_id;
                
                $deliveryman_name = $user_trip->name.' '.$user_trip->firstname;
                $deliveryman_email = $user_trip->email;
                $deliveryman_phone_number = $user_trip->phone_number;
    
                $reception_package->deliveryman_name = $deliveryman_name;
                $reception_package->deliveryman_email = $deliveryman_email;
                $reception_package->deliveryman_phone_number = $deliveryman_phone_number;
    
                $name = $reception_package->recipient_name;
                $name_sender = $reception_package->sender_name;
                $email_sender = $reception_package->sender_email;
                $email = $reception_package->recipient_email;
                $phone_number = $reception_package->recipient_phone_number;
                
                $package_new = Package::findOrFail($package->id);
                
                $reception_package->save();
    
                Mail::to('payments@kharry.com')->send(new SendReceptionAdminMail($name_sender, $name, $email, $phone_number, $deliveryman_name, $deliveryman_email, $deliveryman_phone_number));
    
                Mail::to($email_sender)->send(new SendReceptionMail($name, $deliveryman_name, $deliveryman_email, $deliveryman_phone_number));
    
                $package_new->status = 1;
                $package_new->save();
    
                return redirect()->route('packagereceived')->with('success_package', 'Package Received');
                //return redirect()->route('packagedelivered')->with('success_package', 'Package Received');

            }

            
        } else {
            return redirect()->route('receivepackage')->with('error_code', 'Package Code is not correct');
        }
    }

    public function verifpackage(int $id)
    {
        $package = Package::findOrFail($id); //Find trip of id = $id

        $trip = TripAnnounce::findOrFail($package->trip_id);

        $total = ($package->weight * $trip->price_kilo);
        $currency = $trip->currency;

        return view('pages.verifpackage', compact('package', 'total', 'currency'));
    }

    public function packageReceived()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('packages.packagereceived')->with('receptionpackages', $user->receptionpackages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'weight' => 'required',
            'content' => 'required',
            'sender_email' => 'required',
            'recipient_name' => 'required',
            'recipient_phone_number' => 'required',
            'recipient_email' => 'required',
        ]);

        $package = new Package();

        $package->trip_id = $request->input('trip_id');

        $trip = TripAnnounce::findOrFail($package->trip_id);

        $user = User::findOrFail($trip->user_id);

        $package->weight = $request->input('weight');
        $package->content = $request->input('content');
        $package->deliveryman_id = $user->id;
        $package->deliveryman_name = $user->name;
        $package->deliveryman_firstname = $user->firstname;
        $package->deliveryman_email = $user->email;
        $package->deliveryman_phone = $user->phone_number;
        $package->sender_name= auth()->user()->name.' '.auth()->user()->firstname;
        $package->sender_email = auth()->user()->email;
        $package->sender_phone_number = auth()->user()->phone_number;
        $package->recipient_name = $request->input('recipient_name');
        $package->recipient_phone_number = $request->input('recipient_phone_number');
        $package->recipient_email = $request->input('recipient_email');
        $package->status = 0;
        $package->user_id = auth()->user()->id;
        $package->trip_departure_city = $trip->departure_city;	
        $package->trip_arrival_city	= $trip->arrival_city;
        $package->trip_departure_date = $trip->departure_date;
        $package->trip_arrival_date = $trip->arrival_date;
        

        $dt = Carbon::now();
        Carbon::parse($dt);

        // These getters specifically return integers, ie intval()
        $code = intval($dt->year.''.$dt->month.''.$dt->day); 
        $package->package_code = $code;
        $random = substr(str_shuffle("0123456789"), 0, 4);
        //dd($code.$random);

        $historique = new Historique();
        $historique->action = 'Create';
        $historique->table = 'Package';
        $historique->user_id = auth()->user()->id;
        $package->save();

        $package = Package::findOrFail($package->id);
        $package->package_code = $code.$package->id.$random;
        $package->save();
        $historique->save();

        return redirect()->route('pages.verifpackage',
        $package->id);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id); //Find tripannounce of id = $id

        return view('packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'weight' => 'required',
            'content' => 'required',
            'sender_email' => 'required',
            'recipient_name' => 'required',
            'recipient_phone_number' => 'required',
            'recipient_email' => 'required',
            //'cover_image' =>'image|nullable|max:1999',
        ]);

        $package = Package::findOrFail($id);

        $package->package_code = $package->package_code;

        $package->trip_id = $package->trip_id;

        $trip = TripAnnounce::findOrFail($package->trip_id);
        
        $user = User::findOrFail($trip->user_id);
        
        $package->weight = $request->input('weight');
        $package->content = $request->input('content');
        $package->deliveryman_id = $user->id;
        $package->deliveryman_name = $user->name;
        $package->deliveryman_firstname = $user->firstname;
        $package->deliveryman_email = $user->email;
        $package->deliveryman_phone = $user->phone_number;
        $package->sender_name= auth()->user()->name.' '.auth()->user()->firstname;
        $package->sender_email = auth()->user()->email;
        $package->sender_phone_number = auth()->user()->phone_number;
        $package->recipient_name = $request->input('recipient_name');
        $package->recipient_phone_number = $request->input('recipient_phone_number');
        $package->recipient_email = $request->input('recipient_email');
        $package->status = 0;
        $package->user_id = auth()->user()->id;
        $package->trip_departure_city = $trip->departure_city;	
        $package->trip_arrival_city	= $trip->arrival_city;
        $package->trip_departure_date = $trip->departure_date;
        $package->trip_arrival_date = $trip->arrival_date;
        

        $historique = new Historique();
        $historique->action = 'Edit';
        $historique->table = 'Package';
        $historique->user_id = auth()->user()->id;
        $package->save();

        $historique->save();

        return redirect()->route('pages.verifpackage',
        $package->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function pendingPackages(){
        $user_id = auth()->user()->id;
        $packages = DB::table('packages')
            ->where(function ($query) use($user_id) {
                $query->where('user_id','=', $user_id)
                ->where('status','=', 0);
            })->orWhere(function($query)use($user_id) {
                $query->where('deliveryman_id','=', $user_id)
                ->where('status','=', 0);
            })
            ->get();

            /* $packages = DB::table('packages')
                            ->where('status','=', 0)
                            ->get(); */

             //dd($packages);
        return view('packages.pendingpackage', compact('packages'));
    }


    public function packagesDelivered(){

        $user_id = auth()->user()->id;

        $receptionpackages = DB::table('reception_packages')
             ->where('deliveryman_id','=', $user_id)
             ->get();
        return view('packages.packagedelivered', compact('receptionpackages'));
    }

    public function packagesReceived(){

        $user_id = auth()->user()->id;

        $user = User::find($user_id);

        return view('packages.packagereceived')->with('receptionpackages', $user->receptionpackages);
    }
}
