<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendReceptionAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name_sender;
    public $name;
    public $email;
    public $phone_number;
    public $deliveryman_name;
    public $deliveryman_email;
    public $deliveryman_phone_number;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name_sender, $name, $email, $phone_number, $deliveryman_name, $deliveryman_email, $deliveryman_phone_number)
    {
        $this->name_sender = $name_sender;
        $this->name = $name;
        $this->email = $email;
        $this->phone_number = $phone_number;
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
        return $this->view('mail.adminreception_notif');
    }
}
