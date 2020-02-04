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

    public $nom_du_client;
    public $prenom_du_client;
    public $date_arrivé;
    public $date_depart ;
   public function __construct($nom_du_client, $prenom_du_client ,$date_arrivé, $date_depart)
   {
       $this->nom_du_client = $nom_du_client;
       $this->prenom_du_client = $prenom_du_client;
       $this->date_arrivé = $date_arrivé;
       $this->date_depart  = $date_depart ;
   }
   public function build()
   {
       return $this->view('abonnement.mail-expired');
   }
}
