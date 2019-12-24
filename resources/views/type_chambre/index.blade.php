@extends('layout')
@section('content')
<table class="table table-striped">
       <tr>
        
           <th>.Chambre de luxe</th><th></th><th></th><th></th><th></th><th></th>        
           <th>.Chambre de famille</th><th></th><th></th><th></th><th></th><th></th>     
           <th>.Chambre superieur</th><th></th><th></th><th></th><th></th><th></th>  
           
       </tr>

    
@foreach($typechambre as $Type)
   <tr>

       <img src="{{$Type->images ? asset($Type->images) : asset('uploads/images/default.png')}}" alt="{{$Type->name}}" width="100"></th>
       <th>{{$Type->chambre_de_luxe}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>{{$Type->chambre_de_famille}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>{{$Type->chambre_superieur}}</th><th></th><th></th><th></th><th></th><th></th>  
         
       <th>
           <p><a href="{{route('editer_typechambre',['id'=>$Type->id])}}" class="btn btn-primary">Editer</a></p>

           <form action="typechambre/{{$Type->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>

       </th>
      
@endforeach


   </table>

   <p><a href="{{route('Ajouter_typechambre',['id'=>$Type->id])}}" class="btn btn-primary">Ajouter</a></p>
@endsection