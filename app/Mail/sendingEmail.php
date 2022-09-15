<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendingEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $emails;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emails)
    {
        $this->emails = $emails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Message from Visitor')
                    ->view('email_template')
                    ->with('emails', $this->emails);
        // return $this->view('view.name');
    }
}
