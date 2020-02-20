@extends('layout')
@section('content')
<br><br><br>
<section id="our-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Nos formateurs</h2>
<p class="wow fadeInDown">Golden hôtel est l'un des meilleurs hôtel d'afrique<br>. Un cadre paradisiatique en face de l'atlantique<br>. Un personnel accueillant et un service à la hauteur de nos attentes.</p> 
            </div>
			
			 	
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="{{asset('images/team/06.jpg')}}" alt="">
                        </div>
                        <div class="team-info">
                            <h3>EL hadji faye</h3>
                            <span>Fondateur</span> 
                        </div> 
                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive" src="{{asset('images/team/05.jpg')}}" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Mareme faye</h3>
                            <span>Présidente</span> 
                        </div> 
                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive" src="{{asset('images/team/07.jpg')}}" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Babacar ndiaye</h3>
                            <span>Directeur principal</span> 
                        </div> 
                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="{{asset('images/team/08.jpg')}}" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Nabou ndiaye</h3>
                            <span>Directrice</span> 
                        </div> 
                        
                    </div>
                </div>
            </div>

        </div>
    </section><!--/#our-team-->
@endsection