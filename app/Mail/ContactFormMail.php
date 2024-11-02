<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Wanda Cute Contact Form')
            ->view('emails.contact_form')
            ->with('data', $this->data);
    }


/**
     * Get the message envelope.
     */


    /**
     * Get the message content definition.
     */

}
