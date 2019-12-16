@extends('layout')
@section('content')
<section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title wow fadeInDown">A Propos de nous</h2>
                <p class="wow fadeInDown">Golden hôtel est l'un des meilleurs hôtel d'afrique<br>. Un cadre paradisiatique en face de l'atlantique<br>. Un personnel accueillant et un service à la hauteur de nos attentes.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                  <img class="img-responsive" src="{{asset('images/about.jpg')}}" alt="">
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Notre hôtel</h3>
                    <p>Entouré de jardins,Golden hôtel est situé sur la péninsule des almadies,<br>à l'extrémité de la côte ouest du sénégal.<br>Il comprend des chambres,un restaurant,un bar,des équipements,une assistance voyage,un service de blanchisserie...<br> Un petit-déjeuner est disponible tous les jours.<br> Des repas lègers sont servis tout au long de la journée au bar-salon.<br> L'établissement se trouve à 25km du centre de Dakar. <br>Un parking privée est disponible gratuitement sur place.</p>
<ul class="listarrow">
<li><i class="fa fa-angle-double-right"></i>Service en chambre</li>
<li><i class="fa fa-angle-double-right"></i>Facilité Dailing directe</li>
<li><i class="fa fa-angle-double-right"></i>service de blanchisserie</li>
<li><i class="fa fa-angle-double-right"></i>Assistance Voyage</li> 
<li><i class="fa fa-angle-double-right"></i>Bar & Restaurant</li>
</ul> 

                </div>
            </div>
        </div>
    </section><!--/#about-->
@endsection