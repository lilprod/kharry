<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PagesController@index')->name('index');

Route::get('/verify', 'VerifyController@getVerify')->name('getVerify');

Route::post('/verify', 'VerifyController@postVerify')->name('verify');

Route::get('/search', 'SearchController@getSearch')->name('getSearch');

Route::post('/search', 'SearchController@postSearch')->name('search');

Route::post('/updatepassword', 'ProfilController@updatePassword')->name('updatepassword');

Route::get('/receivepackage', 'PackageController@receivePackage')->name('receivepackage');

Route::post('/receivepackage', 'PackageController@postreceivePackage')->name('postreceivepackage');

Route::get('/packagereceived', 'PackageController@packageReceived')->name('packagereceived');

Route::get('/packagedelivered', 'PackageController@packagesDelivered')->name('packagedelivered');

Route::get('/pendingpackage', 'PackageController@pendingPackages')->name('pendingpackage');

Route::post('paypal', 'PaymentController@payWithpaypal')->name('paypal');

Route::get('status', 'PaymentController@getPaymentStatus')->name('status');

Route::get('payments', 'PaymentController@index')->name('payments');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/faq', 'PagesController@faq')->name('faq');

Route::get('/terms', 'PagesController@condition')->name('terms');

Route::get('package/{id}/details', ['as' => 'pages.newpackage', 'uses' => 'PackageController@createpackage']);

Route::get('trip/{id}/details', ['as' => 'pages.detail', 'uses' => 'PagesController@show']);

Route::get('package/{id}/review', ['as' => 'pages.verifpackage', 'uses' => 'PackageController@verifpackage']);

Route::get('/discussions', 'AdminManagerController@discussions')->name('discussions');

Route::get('/announcesTrips', 'AdminManagerController@announcesTrip')->name('announcestrips');

Route::get('/adminPendingpackages', 'AdminManagerController@pendingadminPackages')->name('adminPendingpackages');

Route::get('/adminSentpackages', 'AdminManagerController@sentadminPackages')->name('adminSentpackages');

Route::delete('admin/tripannounce/{id}', 'AdminManagerController@deleteTrip')->name('deleteTrip');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('currencies', 'CurrencyController');

Route::resource('transports', 'TransportController');

Route::resource('tripannounces', 'TripannounceController');

Route::resource('packages', 'PackageController');

Route::resource('historiques', 'HistoriqueController');

Route::resource('profils', 'ProfilController');

Route::resource('forum', 'DiscussionController');

Route::resource('answers', 'AnswerController');

Route::post('/contact', 'ContactController@store')->name('contact');

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);

    return redirect()->back();
});

/*Route::get('/create_role_permission', function () {
    $role = Role::create(['name' => 'Administrer']);
    $permission = Permission::create(['name' => 'Roles Administration & Permission']);
    auth()->user()->assignRole('Administrer');
    auth()->user()->givePermissionTo('Roles Administration & Permission');
});*/
