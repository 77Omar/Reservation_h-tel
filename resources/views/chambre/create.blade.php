

       <div class="container">
            <form action="{{route('chambre.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="Numero_chambre" class="form-control" placeholder="Numero chambre">
               </div>
               <div>
                   <input type="text" name="prix_chambre" class="form-control" placeholder="Prix Chambre">
               </div>
               <div>
                   <input type="text" name="Nbr_de_lit" class="form-control" placeholder="Nombre de lit">
               </div>
               <div>
                   <textarea name="typechambre_id" id="typechambre_id" cols="30" rows="10" class="form-control" placeholder="typechambre id"></textarea>
               </div>
               <div>
                <select name="typechambre_id" id="typechambre_id" class="form-control">
                    <option value=""></option>
                    @foreach($typechambres as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
                </div>
                    


               <div>
   
               </div>

               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>
