<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chambre</title>
</head>
<body>
<table class="table table-striped">
    <tr>
    <th>#</th>
<th>Numero Chambre</th>
<th>Prix Chambre</th>
<th>Nbr de lit</th>
</tr>

@foreach($chambres as $chambre)
<tr>
<th>#</th> 
<th>{{$chambre->Numero_chambre}}</th>
<th>{{$chambre->prix_chambre}}</th>
 <th>{{$chambre->Nbr_de_lit}}</th>
            </tr>
    @endforeach




    @foreach($chambres as $chambre)
   <tr>
       <th>#</th>
       <th>{{$chambre->Numero_chambre}}</th>
       <th>{{$chambre->prix_chambre}}</th>
       <th>{{$chambre->Nbr_de_lit}}</th>
       <th>
           <p><a href="{{route('editer_Chambre',['id'=>$chambre->id])}}">Editer</a>
</p>
       </th>
   </tr>
@endforeach




@foreach($chambres as $chambre)
   <tr>
       <th>#</th>
       <th>{{$chambre->Numero_chambre}}</th>
       <th>{{$chambre->prix_chambre}}</th>
       <th>{{$chambre->Nbr_de_lit}}</th>
       
       <th>
           <p><a href="{{route('editer_Chambre',['id'=>$chambre->id])}}">Editer</a>
</p>
       </th>
   </tr>
@endforeach

    
</table>

</body>
</html>