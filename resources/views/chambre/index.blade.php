@extends('layout')
@section('content')



<table class="table table-striped">
    <tr>

       <th>.Numero Chambre</th><th></th><th></th><th></th><th></th><th></th>
       <th>.Prix Chambre</th><th></th><th></th><th></th><th></th><th></th>
       <th>.Nbr de lit</th><th></th><th></th><th></th><th></th><th></th>
       <th>.Type chambre</th><th></th><th></th><th></th><th></th><th></th>

    </tr>

    
@foreach($chambres as $chambre)
   <tr>

   <img src="{{$chambre->images ? asset($chambre->images) : asset('uploads/images/default.png')}}" alt="{{$chambre->name}}" width="100"></th>
       <th>{{$chambre->Numero_chambre}}</th><th></th><th></th><th></th><th></th><th></th>  
       <th>{{$chambre->prix_chambre}}</th><th></th><th></th><th></th><th></th><th></th> 
       <th>{{$chambre->Nbr_de_lit}}</th><th></th><th></th><th></th><th></th><th></th>   
       <th>{{$chambre->typechambre_id}}</th><th></th><th></th><th></th><th></th><th></th>  

       
       <th>
           <p><a href="{{route('editer_Chambre',['id'=>$chambre->id])}}" class="btn btn-primary">Editer</a></p>

           <form action="chambre/{{$chambre->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>

       </th>
       
   
   </tr>
@endforeach

</table>
<p><a href="{{route('Ajouter_Chambre',['id'=>$chambre->id])}}" class="btn btn-primary">Ajouter</a></p>

@endsection