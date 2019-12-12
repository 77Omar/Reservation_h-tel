<div class="container">
<div><h1>{{('Enregistrement des clients')}}</h1></div>

       <div class="container">
           <form action="{{route('reservation.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="nom_du_client" class="form-control" placeholder="le nom du client">
               </div>
               <div>
                   <input type="text" name="prenom_du_client" class="form-control" placeholder="Le prenom du client">
               </div>
               <div>
                   <input type="text" name="date_arrivé" class="form-control" placeholder="la date d'arrivé">
               </div>
               <div>
                   <input type="text" name="date_depart" class="form-control" placeholder="La date de depart">
               </div>
               <div>
                   <input type="text" name="Nbr_nuit" class="form-control" placeholder="Nombre de nuit">
               </div>
               <div>
                   <textarea name="statu" id="statu" cols="30" rows="10" class="form-control" placeholder="statu"></textarea>
               </div>
               <div>
                   <button class="btn btn-primary">Sauvegarder</button>
               </div>
           </form>
