<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AbonnementMail;



class AbonnementController extends Controller
{
    public function expired(){
        $nom_du_client = "faye";
        $prenom_du_client = "Omar";
        $date_arrivé = "24-01-2020";
        $date_depart = "30-01-2020";
       Mail::to('fayeomzolive@gmail.com')->send(new AbonnementMail($nom_du_client,$prenom_du_client,$date_arrivé , $date_depart));
        return "Message envoyé";
     }
     
}

