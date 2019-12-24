
    

<div class="container">
<div><h1>{{('Sauvegarder les informations')}}</h1></div>

       <div class="container">
           <form action="{{route('contact.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="Nom" class="form-control" placeholder="Nom">
               </div>
               <div>
                   <input type="text" name="Email" class="form-control" placeholder="Email">
               </div>
               <div>
                   <input type="text" name="Objet" class="form-control" placeholder="Objet">
               </div>
               <div>
                   <textarea name="Message" id="Message" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
               </div>
               <div>
                   <button class="btn btn-primary">Enregistrements</button>
               </div>
           </form>
