<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;
use App\Mail\AbonnementMail;
use Mail;
class ReservationController extends Controller
{
    public function reservation(){
        return view("reservation"); 
        }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
       $reservation = \App\Reservation::orderBy('created_at', 'DESC')->get();
          return view('reservation.index', compact('reservation'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservation.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email=Auth::user()->email;
        $Reservation = new \App\Reservation();
        $Reservation->nom_du_client = $request->input('nom_du_client');
        $Reservation->prenom_du_client = $request->input('prenom_du_client');
        $Reservation->date_arrivé = $request->input('date_arrivé');
        $Reservation->date_depart = $request->input('date_depart');
        $Reservation->Nbr_nuit = $request->input('Nbr_nuit');
        $Reservation->statu = $request->input('statu');
        $Reservation->save();

        //declaration
        $name=$Reservation->nom_du_client;
        $prenom=$Reservation->prenom_du_client;
        //declaration tableau
        $data=array(
        "name"=>$name ,
        "prenom"=>$prenom,
    );
        Mail::send('mail',$data,function($message) use($name,$email,$prenom){
            $message->to($email)->subject('lessai subject');
        });
       
       return('merci de votre confiance');
       //return redirect('/');

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
        $reservation = \App\Reservation::find($id);//on recupere 
        return view('reservation.edit', compact('reservation'));
     
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
        $reservation = \App\Reservation::find($id);
        if($reservation){
            $reservation->update([
                'nom_du_client' => $request->input('nom_du_client'),
                'prenom_du_client' => $request->input('prenom_du_client'),
                'date_arrivé' => $request->input('date_arrivé'),
                'date_depart' => $request->input('date_depart'),
                'Nbr_nuit' => $request->input('Nbr_nuit'),
                'statu' => $request->input('statu'),
            ]);
        }
        //return redirect()->back();
        $reservation= \App\Reservation::orderBy('created_at', 'DESC')->get();
        // dd($chambre);
         return view('reservation.index', compact('$reservation'));
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = \App\Reservation::find($id);
        if($reservation)
            $reservation->delete();
        return redirect()->route('reservation.index');
    }
}
