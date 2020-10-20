<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles,Notifiable,HasApiTokens;

    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'firstname', 'email', 'password', 'phone_number', 'city', 'code', 'is_activated',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::needsRehash($password) ? Hash::make($password) : $password;
    }

    public function tripannounces()
    {
        return $this->hasMany('App\TripAnnounce');
    }

    public function packages()
    {
        return $this->hasMany('App\Package');
    }

    public function package_payments()
    {
        return $this->hasMany('App\PackagePayment');
    }

    public function receptionpackages()
    {
        return $this->hasMany('App\ReceptionPackage');
    }

    public function discussions()
    {
        return $this->hasMany('App\Discussion');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
