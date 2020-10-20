<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfilController extends Controller
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
    public function index()
    {
        return view('pages.profil');
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
        //Validate name, email and password fields
        $this->validate($request, [
            'name' => 'required|max:120',
            'firstname' => 'required|max:120',
            'email' => 'required|email',
            'city' => 'required',
            'phone_number' => 'required',
        ]);

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $name = $request->input('name');
        $firstname = $request->input('firstname');
        $email = $request->input('email');
        $city = $request->input('city');
        $phone_number = $request->input('phone_number');

        User::where('id', $user_id)
                    ->update([
                            'name' => $name,
                            'firstname' => $firstname,
                            'email' => $email,
                            'city' => $city,
                            'phone_number' => $phone_number,
                        ]);

        return redirect('profils')->with('success_notif', 'Profil updated');
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
    }

    public function updatePassword(Request $request)
    {
        //Validate password fields
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
        ]);

        $user_id = auth()->user()->id;
        $user = User::findOrFail($user_id); //Get user specified by id

        $user->password = $request->input('password');
        $user->save();

        return redirect('profils')->with('password_success', 'Password updated');
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
}
