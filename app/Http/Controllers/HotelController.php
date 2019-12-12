<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel= \App\Hotel::orderBy('created_at', 'DESC')->get();
        return view('Hôtel.index', compact('hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Hôtel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hote = new \App\Hotel();
   $hote->nom = $request->input('nom');
   $hote->adresse = $request->input('adresse');
   $hote->categories = $request->input('categories');
   $hote->type = $request->input('type');
   $hote->nombre_etoile = $request->input('nombre_etoile');
   
   $hote->save();
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
        $hotel = \App\Hotel::find($id);//on recupere
        return view('Hôtel.edit', compact('hotel'));
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
        $hotel = \App\Hotel::find($id);
   if($hotel){
       $hotel->update([
           'nom' => $request->input('nom'),
           'adresse' => $request->input('adresse'),
           'categories' => $request->input('categories'),
           'type' => $request->input('type'),
           'nombre_etoile' => $request->input('nombre_etoile'),
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
        $hotel = \App\Hotel::find($id);
        if($hotel)
            $hotel->delete();
        return redirect()->route('Hôtel.index');
     
    }
}
