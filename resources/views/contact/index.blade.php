@extends('layout')
@section('content')



<table class="table table-striped">
    <tr>

       <th>.Nom</th><th></th><th></th><th></th><th></th><th></th>
       <th>.Email<th></th><th></th><th></th><th></th><th></th>
       <th>.Objet</th><th></th><th></th><th></th><th></th><th></th>
       <th>.Message</th><th></th><th></th><th></th><th></th><th></th>
    </tr>

    
@foreach($contact as $contacter)
   <tr>

   <img src="{{$contacter->images ? asset($contacter->images) : asset('uploads/images/default.png')}}" alt="{{$contacter->name}}" width="100"></th>
       <th>{{$contacter->Nom}}</th><th></th><th></th><th></th><th></th><th></th>  
       <th>{{$contacter->Email}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>{{$contacter->Objet}}</th><th></th><th></th><th></th><th></th><th></th>   
       <th>{{$contacter->Message}}</th><th></th><th></th><th></th><th></th><th></th>   

       
       <th>
           <p><a href="{{route('editer_contact',['id'=>$contacter->id])}}" class="btn btn-primary">Editer</a></p>

           <form action="contact/{{$contacter->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>

       </th>
      
   </tr>
@endforeach

</table>
 <p><a href="{{route('Ajouter_contact',['id'=>$contacter->id])}}" class="btn btn-primary">Ajouter</a></p>
</body>
</html>
@endsection