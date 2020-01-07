@extends('layout')
@section('content')

<table class="table table-striped">
       <tr>
          <th>.nom</th><th></th><th></th><th></th><th></th><th></th>
          <th>.adresse</th><th></th><th></th><th></th><th></th><th></th>
          <th>.categories</th><th></th><th></th><th></th><th></th><th></th>
          <th>.type</th><th></th><th></th><th></th><th></th><th></th>          
          <th>.nombre_etoile</th><th></th><th></th><th></th><th></th><th></th>
       </tr>



@foreach($hotel as $hote)
   <tr>
  
   <img src="{{$hote->images ? asset($hote->images) : asset('uploads/images/default.png')}}" alt="{{$hote->name}}" width="100"></th> 
       <th>{{$hote->nom}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>{{$hote->adresse}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>{{$hote->categories}}</th><th></th><th></th><th></th><th></th><th></th>  
       <th>{{$hote->type}}</th><th></th><th></th><th></th><th></th><th></th>  
       <th>{{$hote->nombre_etoile}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>
           <p><a href="{{route('editer_Hôtel',['id'=>$hote->id])}}" class="btn btn-primary">Editer</a></p>
           <form action="hotel/{{$hote->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>
           
       </th>
     
   </tr>

@endforeach

   </table>
     <p><a href="{{route('Ajouter_Hôtel',['id'=>$hote->id])}}" class="btn btn-primary">Ajouter</a></p>
@endsection

