<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailOnOrder extends Mailable
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

        $file = asset('assets/site/assets/OtherFiles/Handelsbetingelser-og-vilkar-Samlet.pdf');
        $subject = "Din ordre " . $this->data->product->name . ' fra DanPanel ';
        return $this->from('noreply@danpanel.dk', 'DanPanel ')
            ->subject($subject)
            ->view('layouts.email.on-order-mail')->with('data', $this->data)
            ->attach('Handelsbetingelser-og-vilkar-Samlet.pdf')
            ->attach('Cookie-og-privatlivspolitik-DanPanel.pdf');
    }
}
