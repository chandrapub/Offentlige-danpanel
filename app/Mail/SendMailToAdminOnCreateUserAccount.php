<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailToAdminOnCreateUserAccount extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->data->name . ' Created At Danpanel.dk';
        return $this->from('noreply@danpanel.dk', 'DanPanel')
            ->subject($subject)
            ->view('layouts.email.new-user-registerd')->with('data', $this->data);
    }
}
