@extends('layout')
@section('content')
<section id="contact-us">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Contactez-nous</h2>
                <p class="wow fadeInDown">Golden hôtel est l'un des meilleurs hôtel d'afrique<br>. Un cadre paradisiatique en face de l'atlantique<br>. Un personnel accueillant et un service à la hauteur de nos attentes.</p>
            </div>
        </div>
  
        <div class="container">
            <div class="container contact-info">
                <div class="row">
				  <div class="col-sm-4 col-md-4">
                        <div class="contact-form">
                            <h3>Information de contact</h3>

                            <address>
                              <strong>L'hôtel est situé.</strong><br>
                              sur la péninsule des almadies<br>
                              à l'extrémité de la côte ouest du sénégal<br>
                              <abbr title="Phone">tel:</abbr> +221 33 869 69 69
                            </address>
					</div></div>
                    <div class="col-sm-8 col-md-8">
                        <div class="contact-form">
                       
                            <form id="main-contact-form" name="contact-form" method="post" action="/Contact/contact">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="Nom" class="form-control" placeholder="Nom" required>
                                </div>
                                <div class="form-group">
                                    <input type="Email" name="Email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Objet" class="form-control" placeholder="Objet" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="Message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Envoyer un message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
   </section><!--/#bottom-->
@endsection