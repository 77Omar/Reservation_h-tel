@extends('menu')
@section('content')
<br><br><br><br>
<table class="table table-striped">
       <tr>
           <th>.Nom du client</th><th></th><th></th><th></th><th></th><th></th>
           <th>.Prenom du client</th><th></th><th></th><th></th><th></th><th></th> 
           <th>.Date d'arrivé</th><th></th><th></th><th></th><th></th><th></th>
           <th>.Date de départ</th><th></th><th></th><th></th><th></th><th></th>
           <th>.Nbr de nuit</th><th></th><th></th><th></th><th></th><th></th>
           <th>.Statu</th><th></th><th></th><th></th><th></th><th></th>
       </tr>
       


@foreach($reservation as $reserver)
   <tr>

  <!-- <img src="{{$reserver->images ? asset($reserver->images) : asset('uploads/images/default.png')}}" alt="{{$reserver->name}}" width="100"></th> -->
       <th>{{$reserver->nom_du_client}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>{{$reserver->prenom_du_client}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>{{$reserver->date_arrivé}}</th><th></th><th></th><th></th><th></th><th></th>  
       <th>{{$reserver->date_depart}}</th><th></th><th></th><th></th><th></th><th></th>  
       <th>{{$reserver->Nbr_nuit}}</th><th></th><th></th><th></th><th></th><th></th>  
       <th>{{$reserver->statu}}</th><th></th><th></th><th></th><th></th><th></th>  

       <th>
           <p><a href="{{route('editer_reservation',['id'=>$reserver->id])}}" class="btn btn-primary">Editer</a></p>

           <form action="reservation/{{$reserver->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>
          
       </th>
 
   </tr>
@endforeach

   </table>
   <p><a href="{{route('Ajouter_reservation',['id'=>$reserver->id])}}" class="btn btn-primary">Ajouter</a></p>
@endsection