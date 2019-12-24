<div class="container">
<div><h1>{{('Sauvegarder les informations')}}</h1></div>

       <div class="container">
           <form action="{{route('typechambre.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="chambre_de_luxe" class="form-control" placeholder="chambre de luxe">
               </div>
               <div>
                   <input type="text" name="chambre_de_famille" class="form-control" placeholder="chambre de famille">
               </div>
              
               <div>
                   <textarea name="chambre_superieur" id="chambre_superieur" cols="30" rows="10" class="form-control" placeholder="chambre superieur"></textarea>
               </div>
               <div>
                   <button class="btn btn-primary">Enregistrements</button>
               </div>
           </form>
