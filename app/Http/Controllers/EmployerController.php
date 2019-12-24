<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       $employer = \App\Employer::orderBy('created_at', 'DESC')->get();
       return view('employer.index', compact('employer'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emploie = new \App\Employer();
        $emploie->Type = $request->input('Type');
        $emploie->Grade = $request->input('Grade');
        $emploie->Chambre = $request->input('Chambre');
        $emploie->save();
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
        $employer = \App\Employer::find($id);//on recupere
        return view('employer.edit', compact('employer'));
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
        $employer = \App\Employer::find($id);
   if($employer){
       $employer->update([
           'Type' => $request->input('Type'),
           'Grade' => $request->input('Grade'),
           'Chambre' => $request->input('Chambre'),
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
        $employer = \App\Employer::find($id);
        if($employer)
            $employer->delete();
        return redirect()->route('employer.index');
     
    }
}
