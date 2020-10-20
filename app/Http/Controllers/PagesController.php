<?php

namespace App\Http\Controllers;

use App\TripAnnounce;
use App\User;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->toDateString();

        $date_now = Carbon::now();

        //Carbon::setLocale('fr');
        //setlocale(LC_TIME, 'fr');
        

        $tripannounces = TripAnnounce::where('departure_date', '>=', $date)
                            ->orderBy('id', 'desc')
                            ->limit(6)
                            ->get(); //show only 5 items at a time in descending order

        $nbre = count($tripannounces);

        foreach($tripannounces as $tripannounce){
            $user = User::findOrFail($tripannounce->user_id);
            $tripannounce->username = $user->name.' '.$user->firstname;
            $tripannounce->departure = Carbon::parse($tripannounce->departure_date);
            
            $date1 = Carbon::parse($tripannounce->departure_date);
            setlocale(LC_TIME, 'fr_FR', 'French');
            $tripannounce->depart = utf8_encode(strftime("%A %d %B %Y", strtotime($date1)));
        }

        //dd($nbre);

        
        return view('pages.index', compact('tripannounces', 'date', 'nbre'));
    }

    public function show($id)
    {
        $tripannounce = TripAnnounce::findOrFail($id);
        $user = User::findOrFail($tripannounce->user_id);
        $tripannounce->username = $user->name.' '.$user->firstname;
        $tripannounce->departure = Carbon::parse($tripannounce->departure_date);
        $tripannounce->arrival = Carbon::parse($tripannounce->arrival_date);

        return view('pages.detail', compact('tripannounce'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function condition()
    {
        return view('pages.use_condition');
    }
}
