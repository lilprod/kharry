<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TripAnnounce;
use App\Historique;
use Carbon\Carbon;
use App\User;
use App\Rules\Captcha;
use Auth;
use App\Http\Resources\TripAnnounce as TripAnnounceResource;

class TripannounceController extends Controller
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

    //Get Trips
    public function trips()
    {
        $tripannounces = TripAnnounce::paginate(3);

        return TripAnnounceResource::collection($tripannounces);
    }

    //Get Trip
    public function showtrip($id)
    {
        $tripannounce = TripAnnounce::findOrFail($id);

        return new TripAnnounceResource($tripannounce);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function addtrip(Request $request)
    {
        //Add Trip
        $tripannounce = $request->isMethod('put') ? TripAnnounce::findOrFail($request->tripannounce_id) : new TripAnnounce();

        $tripannounce->id = $request->input('tripannounce_id');
        $tripannounce->departure_city = $request->input('departure_city');
        $tripannounce->arrival_city = $request->input('arrival_city');
        $tripannounce->departure_date = $request->input('departure_date');
        $tripannounce->arrival_date = $request->input('arrival_date');
        $tripannounce->number_kilo = $request->input('number_kilo');

        $price = $request->input('price_kilo');
        $tripannounce->price_kilo = ($price + $price * 0.1);
        $tripannounce->currency = $request->input('currency');
        $tripannounce->transport = $request->input('transport');
        $paypal_info = $request->input('paypal_info');
        $paypal_info1 = $request->input('paypal_info1');
        if ($paypal_info == '') {
            $tripannounce->paypal_info = $paypal_info1;
        } else {
            $tripannounce->paypal_info = $paypal_info;
        }
        $tripannounce->user_id = $request->input('user_id');

        if ($tripannounce->save()) {
            return new TripAnnounceResource($tripannounce);
        }
    }

    //Delete Trip
    public function destroytrip($id)
    {
        $tripannounce = TripAnnounce::findOrFail($id);

        if ($tripannounce->delete()) {
            return new TripAnnounceResource($tripannounce);
        }
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $this->getTrips($user->tripannounces);

        return view('tripannounces.index')->with('tripannounces', $user->tripannounces);
    }

    

    public function getTrips($trips)
    {
        //dd(json_encode($trips));

        return json_encode($trips);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = Carbon::now()->toDateString();

        return view('tripannounces.create')->with('date', $date);
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
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required',
            'number_kilo' => 'required',
            'price_kilo' => 'required',
            'currency' => 'required',
            'transport' => 'required',
            //'paypal_info' => 'required',
            //'g-recaptcha-response' => new Captcha(),
            //'cover_image' =>'image|nullable|max:1999',
        ]);

        $tripannounce = new TripAnnounce();
        $tripannounce->departure_city = $request->input('departure_city');
        $tripannounce->arrival_city = $request->input('arrival_city');
        $tripannounce->departure_date = $request->input('departure_date');
        $tripannounce->arrival_date = $request->input('arrival_date');
        $tripannounce->number_kilo = $request->input('number_kilo');

        $price = $request->input('price_kilo');
        $tripannounce->price_kilo = ($price + ($price * 0.06) + ($price * 0.039) + 0.3);
        $tripannounce->currency = $request->input('currency');
        $tripannounce->transport = $request->input('transport');
        $paypal_info = $request->input('paypal_info');
        $paypal_info1 = $request->input('paypal_info1');
        if ($paypal_info == '') {
            $tripannounce->paypal_info = $paypal_info1;
        } else {
            $tripannounce->paypal_info = $paypal_info;
        }
        $tripannounce->user_id = auth()->user()->id;

        $historique = new Historique();
        $historique->action = 'Create';
        $historique->table = 'TripAnnounce';
        $historique->user_id = auth()->user()->id;

        $tripannounce->save();
        $historique->save();

        return redirect('tripannounces')->with('addtrip_success', 'Trip Announce created');
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
        $tripannounce = TripAnnounce::findOrFail($id); //Find tripannounce of id = $id

        return view('tripannounces.show', compact('tripannounce'));
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
        $tripannounce = TripAnnounce::findOrFail($id); //Find tripannounce of id = $id

        return view('tripannounces.edit', compact('tripannounce'));
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
        $tripannounce = TripAnnounce::findOrFail($id);

        $this->validate($request, [
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required',
            'number_kilo' => 'required',
            'price_kilo' => 'required',
            'currency' => 'required',
            'transport' => 'required',
            //'paypal_info' => 'required',
            //'g-recaptcha-response' => new Captcha(),
            //'cover_image' =>'image|nullable|max:1999',
        ]);

        $tripannounce->departure_city = $request->input('departure_city');
        $tripannounce->arrival_city = $request->input('arrival_city');
        $tripannounce->departure_date = $request->input('departure_date');
        $tripannounce->arrival_date = $request->input('arrival_date');
        $tripannounce->number_kilo = $request->input('number_kilo');

        $price = $request->input('price_kilo');

        if ($price == $tripannounce->price_kilo) {
            $tripannounce->price_kilo = $price;
        } else {
            $tripannounce->price_kilo = ($price + ($price * 0.06) + ($price * 0.039) + 0.3);
        }

        $tripannounce->currency = $request->input('currency');
        $tripannounce->transport = $request->input('transport');
        $paypal_info = $request->input('paypal_info');
        $paypal_info1 = $request->input('paypal_info1');
        if ($paypal_info == '') {
            $tripannounce->paypal_info = $paypal_info1;
        } else {
            $tripannounce->paypal_info = $paypal_info;
        }
        $tripannounce->user_id = auth()->user()->id;

        $historique = new Historique();
        $historique->action = 'Update';
        $historique->table = 'TripAnnounce';
        $historique->user_id = auth()->user()->id;

        $tripannounce->save();
        $historique->save();

        return redirect()->route('tripannounces.index')->with('edittrip_success', 'Trip Announce successfully edited.');
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
        $tripannounce = TripAnnounce::findOrFail($id);
        $tripannounce->delete();

        return redirect()->route('tripannounces.index')
            ->with('deletetrip_success',
             'Trip Announce successfully deleted');
    }

}
