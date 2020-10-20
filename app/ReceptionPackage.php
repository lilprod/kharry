<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceptionPackage extends Model
{
    protected $fillable = [
        'recipient_name', 'recipient_phone_number', 'recipient_email',
        'security_question', 'answer', 'package_id', 'package_code', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
