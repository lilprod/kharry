<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:api']], function () {
    Route::post('/logout', 'UserApiController@logout');
});*/

Route::group(['middleware' => ['forceJsonResponse']], function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    // public routes
    Route::post('/login', 'UserApiController@login')->name('login.api');
    Route::post('/register', 'UserApiController@register')->name('register.api');

    // private routes
    Route::middleware('auth:api')->group(function () {
        Route::get('/logout', 'UserApiController@logout')->name('logout');
    });
});

Route::post('/verify', 'UserApiController@postVerify')->name('verify');

Route::get('tripannounces', 'TripannounceController@trips');

Route::get('tripannounce/{id}', 'TripannounceController@showtrip');

Route::post('tripannounce', 'TripannounceController@addtrip');

Route::put('tripannounce', 'TripannounceController@addtrip');

Route::delete('tripannounce/{id}', 'TripannounceController@destroytrip');

Route::get('packages', 'PackageController@packages');
