<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPaymentMail extends Mailable
{
    use Queueable, SerializesModels;
    public $payer_name;
    public $payer_email;
    public $payer_number;


    /**
     * Create a new message instance.
     */
    public function __construct($payer_name, $payer_email, $payer_number)
    {
        $this->payer_name = $payer_name;
        $this->payer_email = $payer_email;
        $this->payer_number = $payer_number;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.payment_notif');
    }
}
