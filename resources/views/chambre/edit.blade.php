@extends('menu')
@extends('menu')
@section('content')
<br><br><br><br><br>

<form action="{{route('update_chambre',['id'=>$chambres->id])}}
" method="post">
   @csrf
   @method('patch')
              <div>
                   <input type="text" name="Numero_chambre" class="form-control" placeholder="Numero Chambre" value="{{$chambres->Numero_chambre}}" >
               </div>
               <div>
                   <input type="text" name="prix_chambre" class="form-control" placeholder="Prix Chambre" value="{{$chambres->prix_chambre}}" >
               </div>
               <div>
                   <input type="text" name="Nbr_de_lit" class="form-control" placeholder="Nombre de lit" value="{{$chambres->Nbr_de_lit}}" >
               </div>
               <div>
                   <textarea name="typechambre_id" id="typechambre_id" cols="30" rows="10" class="form-control" placeholder="typechambre_id"></textarea>
               </div>
               <select name="typechambre_id" id="typechambre_id" class="form-control">
                    <option value=""></option>
                    @foreach($chambres as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
               <div>
   
               </div>

               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
   </form>
@endsection