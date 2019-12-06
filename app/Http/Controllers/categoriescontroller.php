<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class categoriescontroller extends Controller
{
   /*
    public function index(){
        return "je suis la page controller";
    }
    public function index(id){
        return "je suis le Reservateur";
    }

*/



    public function index(){
        return view("Reservation.index");
    }
    
     public function show($id){
        return view("Reservation.show", compact("id"));
    }

    
    
    


}

