<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmContactMail extends Mailable
{
    use Queueable, SerializesModels, \Cache;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->confirmation_number=Cache::get('confirmation_number');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME'),'SENTJE')
                    ->view('emails.confirmation',['url'=>route('contacts.confirm',['confirmation_number'=>$confirmation_number])]);
    }
}
