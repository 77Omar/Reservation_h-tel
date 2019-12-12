@extends('layout')
@section('content')

<div class="container">
<div><h1>{{('Sauvegarder les informations')}}</h1></div>

       <div class="container">
           <form action="{{route('personne.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="Nom" class="form-control" placeholder="le nom du personne">
               </div>
               <div>
                   <input type="text" name="Prenom" class="form-control" placeholder="Le prenom du personne">
               </div>
               <div>
                   <input type="text" name="Adresse" class="form-control" placeholder="L'adresse du personne">
               </div>
               <div>
                   <textarea name="email" id="email" cols="30" rows="10" class="form-control" placeholder="email du personne"></textarea>
               </div>
               <div>
                   <button class="btn btn-primary">Enregistrements</button>
               </div>
           </form>
@endsection
