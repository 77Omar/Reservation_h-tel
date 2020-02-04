@extends('menu')
@section('content')
<br><br><br><br><br>
<form action="{{route('personne.update',['id'=>$personne->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="Nom" class="form-control" placeholder="le nom du personne" value="{{$personne->Nom}}"></div>
   <div><input type="text" name="Prenom" class="form-control" placeholder="Le prenom du personne" value="{{$personne->Prenom}}"> </div>
   <div><input type="text" name="Adresse" class="form-control" placeholder="L'adresse du personne" value="{{$personne->Adresse}}"> </div>

   <div> <textarea name="email" id="email" cols="30" rows="10" class="form-control" placeholder="email du personne">{{$personne->email}}</textarea> </div>
   <div> <button class="btn btn-primary">Enregistrement</button> </div>
</form>
@endsection