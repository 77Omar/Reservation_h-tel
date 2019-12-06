<form action="{{route('chambre.update',['id'=>$chambre->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="Numero_chambre" class="form-control" placeholder="Numero Chambre" value="{{$chambre->Numero_chambre}}"></div>
   <div><input type="text" name="prix_chambre" class="form-control" placeholder="Prix Chambre" value="{{$chambre->prix_chambre}}"> </div>
   <div> <textarea name="Nbr_de_lit" id="Nbr_de_lit" cols="30" rows="10" class="form-control" placeholder="Nbr de lit">{{$chambre->Nbr_de_lit}}</textarea> </div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>

<form action="{{route('update_chambre',['id'=>$chambre->id])}}
" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="Numero_chambre" class="form-control" placeholder="Numero Chambre" value="{{$chambre->Numero_chambre}}"></div>
   <div><input type="text" name="prix_chambre" class="form-control" placeholder="Prix Chambre" value="{{$chambre->prix_chambre}}"> </div>
   <div> <textarea name="Nbr_de_lit" id="Nbr_de_lit" cols="30" rows="10" class="form-control" placeholder="Nbr de lit">{{$chambre->Nbr_de_lit}}</textarea> </div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
