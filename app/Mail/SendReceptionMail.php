<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendReceptionMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $deliveryman_name;
    public $deliveryman_email;
    public $deliveryman_phone_number;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $deliveryman_name, $deliveryman_email, $deliveryman_phone_number)
    {
        $this->name = $name;
        $this->deliveryman_name = $deliveryman_name;
        $this->deliveryman_email = $deliveryman_email;
        $this->deliveryman_phone_number = $deliveryman_phone_number;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.reception_notif');
    }
}
