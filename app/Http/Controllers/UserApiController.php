<?php

namespace App\Http\Controllers;

use App\User;
use App\SendCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class UserApiController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token];

                return response($response, 200);
            } else {
                $response = 'Password missmatch';

                return response($response, 422);
            }
        } else {
            $response = 'User does not exist';

            return response($response, 422);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'firstname' => ['required', 'string', 'max:255'],
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone_number' => ['required', 'string', 'min:8'],
            'city' => ['required', 'string'],
            'is_activated' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        $request['password'] = Hash::make($request['password']);
        $user = User::create($request->toArray());

        if ($user) {
            $user->code = $this::sendCode($user->email, $user->phone_number);
            $user->save();
        }

        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        $response = ['token' => $token];

        return response($response, 200);
    }

    public static function sendCode($email, $phone_number)
    {
        $code = rand(1111, 9999);
        Mail::to($email)->send(new SendMailable($code));

        $basic = new \Nexmo\Client\Credentials\Basic('81de9211', '2uK4uXgfutl3LgtC');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => $phone_number,
            'from' => '14373703901',
            'text' => 'Code de Vérification: '.$code,
        ]);

        return $code;
    }

    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();

        $response = 'You have been succesfully logged out!';

        return response($response, 200);
    }

    public function postVerify(Request $request)
    {
        if ($user = User::where('code', $request->code)->first()) {
            $user->is_activated = 1;
            $user->code = null;
            $user->save();

            $response = 'Your account is actived';

            return response($response, 200);
        } else {
            $response = 'Verify code is not correct, Please try it again';

            return response($response, 422);
        }
    }
}
