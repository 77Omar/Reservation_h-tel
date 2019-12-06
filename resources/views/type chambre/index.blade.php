<table class="table table-striped">
       <tr>
           <th>#</th>     
         <th>type chambre</th>           
       </tr>
       @foreach($typechambre as $Type)
           <tr>
               <th>#</th>
               <th>{{$Type->typechambre}}</th>
               
           
           </tr>
       @endforeach
   </table>
