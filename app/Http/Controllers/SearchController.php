<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TripAnnounce;
use Carbon\Carbon;

class SearchController extends Controller
{
    public function getSearch()
    {
        return view('pages.search');
    }

    public function postSearch(Request $request)
    {
        $departure_city = $request->input('departure_city');
        $arrival_city = $request->input('arrival_city');
        $departure_date = $request->input('departure_date');
        $date = Carbon::now()->toDateString();

        if (($departure_city != '') && ($arrival_city != '') && ($departure_date != '')) {
            $trip = TripAnnounce::where('departure_city', 'LIKE', '%'.$departure_city.'%')
                                    ->where('arrival_city', 'LIKE', '%'.$arrival_city.'%')
                                    ->where('departure_date', 'LIKE', '%'.$departure_date.'%')
                                    ->where('number_kilo', '>', 0)
                                    ->get();

            if (count($trip) > 0) {
                return view('pages.search')->withDetails($trip)->withQuery('details', $departure_city, $arrival_city, $departure_date);
            }

            return view('pages.search')->withMessage('Error');
        }

        if (($departure_city != '') && ($arrival_city != '') && ($departure_date == '')) {
            $trip = TripAnnounce::where('departure_city', 'LIKE', '%'.$departure_city.'%')
                                    ->where('arrival_city', 'LIKE', '%'.$arrival_city.'%')
                                    ->where('departure_date', '>=', $date)
                                    ->where('number_kilo', '>', 0)
                                    ->get();

            if (count($trip) > 0) {
                return view('pages.search')->withDetails($trip)->withQuery('details', $departure_city, $arrival_city, $departure_date);
            }

            return view('pages.search')->withMessage('Error');
        }

        if ($departure_city != '') {
            $trip = TripAnnounce::where('departure_city', 'LIKE', '%'.$departure_city.'%')
                                    ->where('departure_date', '>=', $date)
                                    ->where('number_kilo', '>', 0)
                                    ->get();

            if (count($trip) > 0) {
                return view('pages.search')->withDetails($trip)->withQuery('details', $departure_city, $arrival_city, $departure_date);
            }

            return view('pages.search')->withMessage('Error');
        }

        if ($arrival_city != '') {
            $trip = TripAnnounce::where('arrival_city', 'LIKE', '%'.$arrival_city.'%')
                                    ->where('departure_date', '>=', $date)
                                    ->where('number_kilo', '>', 0)
                                    ->get();

            if (count($trip) > 0) {
                return view('pages.search')->withDetails($trip)->withQuery('details', $departure_city, $arrival_city, $departure_date);
            }

            return view('pages.search')->withMessage('Error');
        }

        if ($departure_date != '') {
            $trip = TripAnnounce::where('departure_date', '>=', $date)
                                    ->where('number_kilo', '>', 0)
                                    ->get();

            if (count($trip) > 0) {
                return view('pages.search')->withDetails($trip)->withQuery('details', $departure_city, $arrival_city, $departure_date);
            }

            return view('pages.search')->withMessage('Error');
        }
    }
}
