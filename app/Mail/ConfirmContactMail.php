<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use \Cache;

class ConfirmContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $confirmation_number, $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($confirmation_number)
    {
        $this->confirmation_number=$confirmation_number;
        $this->user=auth()->user();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME'),'SENTJE')
                    ->markdown('emails.confirmation',['url'=>route('contacts.confirm',['confirmation_number'=>$this->confirmation_number]),'user'=>$this->user]);
    }
}
