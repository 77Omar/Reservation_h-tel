<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AbonnementMail extends Mailable
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
    public function build()
    {
        return $this->from('djeinaba08@gmail.com')->subject('New Customer Equiry')
        ->view('abonnement.mail-expired')->with('data', $this->data);
    }
}
