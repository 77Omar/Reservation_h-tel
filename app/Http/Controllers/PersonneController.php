<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personne = \App\personne::orderBy('created_at', 'DESC')->get();
        return view('personne.index', compact('personne'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personne.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new \App\personne();
        $person->Nom = $request->input('Nom');
        $person->Prenom = $request->input('Prenom');
        $person->Adresse = $request->input('Adresse');
        $person->email = $request->input('email');

        $person->save();
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
        $personne = \App\personne::find($id);//on recupere
        return view('personne.edit', compact('personne'));
     
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
        
   $personne = \App\personne::find($id);
   if($personne){
       $personne->update([
           'Nom' => $request->input('Nom'),
           'Prenom' => $request->input('Prenom'),
           'Adresse' => $request->input('Adresse'),
           'email' => $request->input('email'),
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
        $personne = \App\personne::find($id);
        if($personne)
            $personne->delete();
        return redirect()->route('personne.index');
     
    }
}
