<div class="container">
<div><h1>{{('Sauvegarder les informations')}}</h1></div>
<div class="container">
            <form action="{{route('employer.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="Type" class="form-control" placeholder="type">
               </div>
               <div>
                   <input type="text" name="Grade" class="form-control" placeholder="grade">
               </div>
               <div>
                   <textarea name="Chambre" id="Chambre" cols="30" rows="10" class="form-control" placeholder="chambre"></textarea>
               </div>
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>
