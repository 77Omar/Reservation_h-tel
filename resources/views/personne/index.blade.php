@extends('menu')
@section('content')
<br><br><br><br>
 <table class="table table-striped">
       <tr>
        
           <th>.Nom</th><th></th><th></th><th></th><th></th><th></th>        
           <th>.Prenom</th><th></th><th></th><th></th><th></th><th></th>     
           <th>.Adresse</th><th></th><th></th><th></th><th></th><th></th>  
           <th>.Email</th><th></th><th></th><th></th><th></th><th></th>  
       </tr>

    
@foreach($personne as $person)

   <tr>
  
       <!--<img src="{{$person->images ? asset($person->images) : asset('uploads/images/default.png')}}" alt="{{$person->name}}" width="100"></th> -->
       <th>{{$person->Nom}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>{{$person->Prenom}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>{{$person->Adresse}}</th><th></th><th></th><th></th><th></th><th></th>  
       <th>{{$person->email}}</th><th></th><th></th><th></th><th></th><th></th>  
    
       <th>
       
           <p><a href="{{route('editer_personne',['id'=>$person->id])}}" class="btn btn-primary">Editer</a></p>

           <form action="personne/{{$person->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>

      
   </tr>
@endforeach


   </table>
   <p><a href="{{route('Ajouter_personne',['id'=>$person->id])}}" class="btn btn-primary">Ajouter</a></p>
@endsection
</th>
