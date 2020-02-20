@extends('menu')
@section('content')
<br><br><br><br>
<table class="table table-striped">
       <tr>  
             <th>.Type</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>      
             <th>.Grade</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>    
             <th>.Chambre</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th> 
       </tr>
       @if(!empty($employer)) 
@foreach($employer as $emploie)
   <tr>
   <!--<img src="{{$emploie->images ? asset($emploie->images) : asset('uploads/images/default.png')}}" alt="{{$emploie->name}}" width="100"></th>-->
      
       <th>{{$emploie->Type}}</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>  
       <th>{{$emploie->Grade}}</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>  
       <th>{{$emploie->Chambre}}</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>   
       
       <th>
           <p><a href="{{route('editer_employer',['id'=>$emploie->id])}}" class="btn btn-primary">Editer</a></p>

           <form action="employer/{{$emploie->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>

       </th>
     
   </tr>
@endforeach
@endif



   </table>

   <p><a href="/employer/create/" class="btn btn-primary">Ajouter</a></p>

   <br><br><br><br><br>
   @endsection