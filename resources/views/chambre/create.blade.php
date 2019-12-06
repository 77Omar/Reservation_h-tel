


       <div class="container">
            <form action="{{route('chambre.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="Numero_chambre" class="form-control" placeholder="Numero Chambre">
               </div>
               <div>
                   <input type="text" name="prix_chambre" class="form-control" placeholder="Prix Chambre">
               </div>
               <div>
                   <textarea name="Nbr_de_lit" id="Nbr_de_lit" cols="30" rows="10" class="form-control" placeholder="Nbr de lit"></textarea>
               </div>
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>
