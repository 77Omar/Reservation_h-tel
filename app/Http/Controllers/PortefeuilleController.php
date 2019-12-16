<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortefeuilleController extends Controller
{
    public function portefeuille(){
        return view("portefeuille"); 
        }
}
