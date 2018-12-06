<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $name;
    protected $telephone;
    protected $email;
    protected $message;

    public function __construct($name, $telephone, $email, $message)
    {
        $this->name = $name;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->bodyMessage = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->from('noreply@oceanprideml.com.ng')
            ->subject('An Inquiry From OceanPrideML Website Contact Form')
            ->with('name', $this->name)
            ->with('telephone', $this->telephone)
            ->with('email', $this->email)
            ->with('bodyMessage', $this->bodyMessage)
            ->view('emails.contact-us');
    }
}
