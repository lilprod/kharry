<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $package_code;

    /**
     * Create a new message instance.
     */
    public function __construct($package_code)
    {
        $this->package_code = $package_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.code_mail');
    }
}
