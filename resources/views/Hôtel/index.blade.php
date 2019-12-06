<table class="table table-striped">
       <tr>
           <th>#</th>          <th>nom</th>           <th>adresse</th>           <th>categories</th>
           <th>type</th>           <th>nombre etoile</th>
       </tr>
       @foreach($hotel as $hote)
           <tr>
               <th>#</th>
               <th>{{$hote->nom}}</th>
               <th>{{$hote->adresse}}</th>
               <th>{{$hote->categories}}</th>
               <th>{{$hote->type}}</th>
               <th>{{$hote->nombre_etoile}}</th>
               <th></th>
           </tr>
       @endforeach
   </table>


