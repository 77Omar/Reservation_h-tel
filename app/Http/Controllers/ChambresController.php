<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ChambresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $chambres= \App\Chambre::orderBy('created_at', 'DESC')->get();
        //dd($chambres);
        return view('chambre.index', compact('chambres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\HTTp\response
     */
    public function create()
    {
        $chambres= \App\Chambre::orderBy('created_at', 'DESC')->first();
        $typechambres = \App\Typechambre::pluck('chambre_de_luxe','id');
        return view('chambre.create', compact('chambres','typechambres'));

    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chambre = new \App\Chambre();
        $chambre->Numero_chambre = $request->input('Numero_chambre');
        $chambre->prix_chambre = $request->input('prix_chambre');
        $chambre->Nbr_de_lit = $request->input('Nbr_de_lit');
        $chambre->typechambre_id = $request->input("typechambre_id");

        $chambre->save();
        //return redirect('/');
        $chambre= \App\Chambre::orderBy('created_at', 'DESC')->get();
        // dd($chambre);
         return view('chambre.index', compact('chambre'));
     
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
    

            $chambres = \App\Chambre::find($id);//on recupere
            return view('chambre.edit', compact('chambres'));

            $chambres= \App\Chambre::orderBy('created_at', 'DESC')->first();
            $typechambres = \App\Typechambre::pluck('typechambre','id');
            return view('chambre.edit', compact('chambres','typechambres'));

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
        $chambre = \App\Chambre::find($id);
   if($chambre){
       $chambre->update([
           'Numero_chambre' => $request->input('Numero_chambre'),
           'prix_chambre' => $request->input('prix_chambre'),
           'Nbr_de_lit' => $request->input('Nbr_de_lit'),
           'typechambre_id' => $request->input('typechambre_id')

        
           
       ]);
   }
   //return redirect()->back();

   $chambre= \App\Chambre::orderBy('created_at', 'DESC')->get();
  // dd($chambre);
   return view('chambre.index', compact('chambre'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chambre = \App\Chambre::find($id);
        if($chambre)
            $chambre->delete();
        return redirect()->route('chambre.index');
    }
}
