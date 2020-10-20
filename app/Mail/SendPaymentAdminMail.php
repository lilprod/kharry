<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPaymentAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $amount;
    public $payer_name;
    public $receiver_name;
    public $weight;

    /**
     * Create a new message instance.
     */
    public function __construct($amount, $payer_name, $receiver_name, $weight)
    {
        $this->amount = $amount;
        $this->payer_name = $payer_name;
        $this->receiver_name = $receiver_name;
        $this->weight = $weight;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.payment_notifadmin');
    }
}
