@extends('menu')
@section('content')
<br><br><br><br><br>
<form action="{{route('update_employer',['id'=>$employer->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="Type" class="form-control" placeholder="le type" value="{{$employer->Type}}"></div>
   <div><input type="text" name="Grade" class="form-control" placeholder="Le grade" value="{{$employer->Grade}}"> </div>
   <div> <textarea name="Chambre" id="Chambre" cols="30" rows="10" class="form-control" placeholder="La chambre">{{$employer->Chambre}}</textarea> </div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
@endsection