<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = \App\Contact::orderBy('created_at', 'DESC')->get();
        return view('contact.index', compact('contact'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $contacter = new \App\Contact();
        $contacter->Nom = $request->input('Nom');
        $contacter->Email = $request->input('Email');
        $contacter->Objet = $request->input('Objet');
        $contacter->Message = $request->input('Message');

        $contacter->save();
        return redirect('/');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $contact = \App\Contact::find($id);//on recupere
        return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
              
   $contact = \App\Contact::find($id);
   if($contact){
       $contact->update([
           'Nom' => $request->input('Nom'),
           'Email' => $request->input('Email'),
           'Objet' => $request->input('Objet'),
           'Message' => $request->input('Message'),
       ]);
   }
   return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = \App\Contact::find($id);
        if($contact)
            $contact->delete();
        return redirect()->route('contact.index');
     
    }
}
