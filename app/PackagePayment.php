<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackagePayment extends Model
{
    protected $fillable = [
        'payer_name', 'payer_email', 'payer_phone_number',
            'receiver_name', 'receiver_email', 'receiver_phone_number',
                'amount', 'user_id', 'trip_id', 'package_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
