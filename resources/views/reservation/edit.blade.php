@extends('menu')
@section('content')
<br><br><br><br>
<form action="{{route('update_reservation',['id'=>$reservation->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="nom_du_client" class="form-control" placeholder="le nom du client" value="{{$reservation->nom_du_client}}"></div>
   <div><input type="text" name="prenom_du_client" class="form-control" placeholder="le prenom du client" value="{{$reservation->prenom_du_client}}"></div>
   <div><input type="text" name="date_arrivé" class="form-control" placeholder="La date d'arrivé" value="{{$reservation->date_arrivé}}"></div>
   <div><input type="text" name="date_depart" class="form-control" placeholder="la date de depart" value="{{$reservation->date_depart}}"></div>
   <div><input type="text" name="Nbr_nuit" class="form-control" placeholder="Le nombre de nuit" value="{{$reservation->Nbr_nuit}}"> </div>
   <div> <textarea name="statu" id="statu" cols="30" rows="10" class="form-control" placeholder="statu">{{$reservation->statu}}</textarea> </div>
   <div> <button class="btn btn-primary">Enregistrement des clients</button> </div>
</form>
@endsection