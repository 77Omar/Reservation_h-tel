@extends('menu')
@section('content')
<br><br><br><br>
<form action="{{route('contact.update',['id'=>$contact->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="Nom" class="form-control" placeholder="Nom" value="{{$contact->Nom}}"></div>
   <div><input type="text" name="Email" class="form-control" placeholder="Email" value="{{$contact->Email}}"> </div>
   <div><input type="text" name="Objet" class="form-control" placeholder="Objet" value="{{$contact->Objet}}"> </div>

   <div> <textarea name="Message" id="Message" cols="30" rows="10" class="form-control" placeholder="Message">{{$contact->Message}}</textarea> </div>
   <div> <button class="btn btn-primary">Enregistrement</button> </div>
</form>
@endsection