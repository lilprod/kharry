<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'title', 'weight', 'content', 'sender_email', 'recipient_name', 'recipient_phone_number', 'recipient_email',
        'security_question', 'answer', 'status', 'user_id', 'trip_id', 'package_code',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function trip()
    {
        return $this->belongsTo('App\TripAnnounce');
    }
}
