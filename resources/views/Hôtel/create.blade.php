
     <div class="container">
<div><h1>{{('Sauvegarder les informations')}}</h1></div>

       <div class="container">
           <form action="{{route('Hôtel.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="nom" class="form-control" placeholder="le nom de l'hôtel">
               </div>
               <div>
                   <input type="text" name="adresse" class="form-control" placeholder="l'adresse de l'hôtel">
               </div>
               <div>
                   <input type="text" name="categories" class="form-control" placeholder="Le categorie de l'hôtel">
               </div>
               <div>
                   <input type="text" name="type" class="form-control" placeholder="Le type de l'hôtel">
               </div>
               <div>
                   <textarea name="nombre_etoile" id="nombre_etoile" cols="30" rows="10" class="form-control" placeholder="le nombre d'étoile"></textarea>
               </div>
               <div>
                   <button class="btn btn-primary">Enregistrements</button>
               </div>
           </form>
