@extends('menu')
@section('content')
<br><br><br><br>
<table class="table table-striped">
       <tr>
          <th>.nom</th><th></th><th></th><th></th><th></th><th></th>
          <th>.adresse</th><th></th><th></th><th></th><th></th><th></th>
          <th>.categories</th><th></th><th></th><th></th><th></th><th></th>
          <th>.type</th><th></th><th></th><th></th><th></th><th></th>          
          <th>.nombre_etoile</th><th></th><th></th><th></th><th></th><th></th>
       </tr>


    @if(!empty($hotel)) 
@foreach($hotel as $hote)
   <tr>
  
   <!--<img src="{{$hote->images ? asset($hote->images) : asset('uploads/images/default.png')}}" alt="{{$hote->name}}" width="100"></th> -->
       <th>{{$hote->nom}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>{{$hote->adresse}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>{{$hote->categories}}</th><th></th><th></th><th></th><th></th><th></th>  
       <th>{{$hote->type}}</th><th></th><th></th><th></th><th></th><th></th>  
       <th>{{$hote->nombre_etoile}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>
           <p><a href="{{route('editer_Hôtel',['id'=>$hote->id])}}" class="btn btn-primary">Editer</a></p>
           <form action="Hôtel/{{$hote->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>
           
       </th>
     
   </tr>

@endforeach
@endif

   </table>
   <p><a href="/Hôtel/create/" class="btn btn-primary">Ajouter</a></p>
   
   <br><br><br><br><br>
@endsection

