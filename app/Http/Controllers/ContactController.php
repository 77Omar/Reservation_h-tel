<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view("contact"); 
        }


        public function store(Request $request)
        {
            
            $contact = new \App\Contact();
            $contact->Nom = $request->input('Nom');
            $contact->Email = $request->input('Email');
            $contact->Objet = $request->input('Objet');
            $contact->Message = $request->input('Message');
    
            $contact->save();
            return redirect('/');
         

         Mail::to('administrateur@chezmoi.com')->send(new Contact($request->except('_token')));

         return view('confirm')->with('message','Votre message a bien été envoyé.');
        }
}

 
  