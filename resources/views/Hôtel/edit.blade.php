@extends('menu')
@section('content')
<br><br><br><br>

<form action="{{route('update_Hôtel',['id'=>$hotel->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="nom" class="form-control" placeholder="le nom de l'hôtel" value="{{$hotel->nom}}"></div>
   <div><input type="text" name="adresse" class="form-control" placeholder="l'adresse de l'hôtel" value="{{$hotel->adresse}}"> </div>
   <div><input type="text" name="categories" class="form-control" placeholder="Le categorie de l'hôtel" value="{{$hotel->categories}}"> </div>
   <div><input type="text" name="type" class="form-control" placeholder="Le type de l'hôtel" value="{{$hotel->type}}"> </div>
   <div> <textarea name="nombre_etoile" id="nombre_etoile" cols="30" rows="10" class="form-control" placeholder="le nombre d'étoile">{{$hotel->nombre_etoile}}</textarea> </div>
   <div> <button class="btn btn-primary">Enregistrement</button> </div>
</form>
@endsection