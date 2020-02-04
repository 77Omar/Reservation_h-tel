@extends('menu')
@section('content')
<br><br><br><br>
<form action="{{route('typechambre.update',['id'=>$typechambre->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="chambre_de_luxe" class="form-control" placeholder="chambre de luxe" value="{{$typechambre->chambre_de_luxe}}"></div>
   
   <div><input type="text" name="chambre_de_famille" class="form-control" placeholder="chambre de famille" value="{{$typechambre->chambre_de_famille}}"> </div>



   <div> <textarea name="chambre_superieur" id="chambre_superieur" cols="30" rows="10" class="form-control" placeholder="chambre superieur">{{$typechambre->chambre_superieur}}</textarea> </div>
   <div> <button class="btn btn-primary">Enregistrement</button> </div>
</form>
@endsection