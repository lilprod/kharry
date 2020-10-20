<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripAnnounce extends Model
{
    protected $fillable = [
        'departure_city', 'arrival_city', 'departure_date', 'arrival_date',
        'number_kilo', 'price_kilo', 'currency', 'transport', 'paypal_info',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function packages()
    {
        return $this->hasMany('App\Package');
    }

    public function date_convert($date){
        return mb_convert_encoding($date, "UTF-8", mb_detect_encoding($date, "UTF-8, ISO-8859-1, ISO-8859-15", true));
    }
}
