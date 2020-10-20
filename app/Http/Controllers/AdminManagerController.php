<?php

namespace App\Http\Controllers;

use App\Package;
use App\ReceptionPackage;
use App\TripAnnounce;
use App\Discussion;
use App\Historique;
use Illuminate\Http\Request;

class AdminManagerController extends Controller
{
    
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }

    public function discussions()
    {
        $discussions = Discussion::orderby('id', 'desc')->paginate(5); //show only 5 items at a time in descending order; //show only 5 items at a time in descending order

        return view('forum.discussions', compact('discussions'));
    }

    public function sentadminPackages()
    {
        $receptionpackages = ReceptionPackage::all();

        return view('packages.adminsent', compact('receptionpackages'));
    }

    public function pendingadminPackages()
    {
        $packages = Package::where('status', 0)
                            ->get();

        return view('packages.adminpending', compact('packages'));
    }

    public function announcesTrip()
    {
        $tripannounces = TripAnnounce::orderBy('id', 'desc')
                            ->get(); //show only 5 items at a time in descending order

        return view('tripannounces.announces', compact('tripannounces'));

    }

    public function deleteTrip($id)
    {
        $tripannounce = TripAnnounce::findOrFail($id);
        $tripannounce->delete();

        return redirect()->route('announcestrips')
            ->with('success', 'Annonce de voyage supprimé');
    }
}
