<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class VerifyController extends Controller
{
    public function getVerify()
    {
        return view('verify');
    }

    public function postVerify(Request $request)
    {
        if ($user = User::where('code', $request->code)->first()) {
            $user->is_activated = 1;
            $user->code = null;
            $user->save();

            return redirect()->route('login')->with('verif_success', 'Your account is activated');
        } else {
            return back()->with('verif_error', 'Error');
        }
    }
}
