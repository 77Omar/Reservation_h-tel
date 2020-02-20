<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypechambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typechambre= \App\Typechambre::orderBy('created_at', 'DESC')->get();
        return view('type_chambre.index', compact('typechambre'));
      }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type_chambre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Type = new \App\Typechambre();
        $Type->chambre_de_luxe = $request->input('chambre_de_luxe');
        $Type->chambre_de_famille = $request->input('chambre_de_famille');
        $Type->chambre_superieur = $request->input('chambre_superieur');
        

        $Type->save();
        //return redirect('/');
        $typechambre= \App\Typechambre::orderBy('created_at', 'DESC')->get();
 return view('type_chambre.index', compact('typechambre'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typechambre = \App\Typechambre::find($id);//on recupere
        return view('type_chambre.edit', compact('typechambre'));
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
            
   $typechambre = \App\Typechambre::find($id);
   //dd($typechambre);
   if($typechambre){
       $typechambre->update([
           'chambre_de_luxe' => $request->input('chambre_de_luxe'),
           'chambre_de_famille' => $request->input('chambre_de_famille'),
           'chambre_superieur' => $request->input('chambre_superieur'),
]);
 }
 // return redirect()->back();

 $typechambre= \App\Typechambre::orderBy('created_at', 'DESC')->get();
 return view('type_chambre.index', compact('typechambre'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typechambre = \App\Typechambre::find($id);
        if($typechambre)
            $typechambre->delete();
        return redirect()->route('typechambre.index');
    }
}
