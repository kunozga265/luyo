<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
//use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $subject="New Mail";
    public $name;
    public $email;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $name, $email, $msg)
    {
        $this->name=$name;
        $this->email=$email;
        $this->msg=$msg;

        if (isset($subject))
            $this->subject=$subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): ContactUs
    {
        $subject="Contact Us: ".$this->subject;
        return $this->view('contact-us-mail')->subject($subject);
    }
}
