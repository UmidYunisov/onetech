<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrdersMail extends Mailable
{
    use Queueable, SerializesModels;

    public $owner;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($owner_message)
    {
        $this->owner = $owner_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.orders_message');
    }
}
