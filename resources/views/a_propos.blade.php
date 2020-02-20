@extends('layout')
@section('content')
<br><br><br>
<section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title wow fadeInDown">A Propos de nous</h2>
                <p class="wow fadeInDown">Golden hôtel est l'un des meilleurs hôtel d'afrique<br>. Un cadre paradisiatique en face de l'atlantique<br>. Un personnel accueillant et un service à la hauteur de nos attentes.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                  <img class="img-responsive" src="{{asset('images/about2.jpg')}}" alt="">
                </div>
               
                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Notre hôtel</h3>
                   <h4><p>Entouré de jardins,Golden hôtel est situé sur la péninsule des almadies,<br>à l'extrémité de la côte ouest du sénégal.<br>Il comprend des chambres,un restaurant,un bar,des équipements,une assistance voyage,un service de blanchisserie...<br> Un petit-déjeuner est disponible tous les jours.<br> Des repas lègers sont servis tout au long de la journée au bar-salon.<br> L'établissement se trouve à 25km du centre de Dakar. <br>Un parking privée est disponible gratuitement sur place.</p></h4>
                   <br>
<ul class="listarrow">
<h4><li><i class="fa fa-angle-double-right"></i>Service en chambre</li></h4>
<h4><li><i class="fa fa-angle-double-right"></i>Facilité Dailing directe</li></h4>
<h4><li><i class="fa fa-angle-double-right"></i>service de blanchisserie</li></h4>
<h4><li><i class="fa fa-angle-double-right"></i>Assistance Voyage</li> </h4>
<h4><li><i class="fa fa-angle-double-right"></i>Bar & Restaurant</li></h4>
</ul> 

                </div>
            </div>
</div>


   
<section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading"><h2 class="mb-4">Bienvenue à Golden hôtel</h2></span>s
            
            <h2 class="mb-4">Une nouvelle vision de l'hôtel de luxe:</h2>
          </div>
        </div>  
        <div class="row d-flex">
          <div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-reception-bell"></span>
              	</div>
              </div>
              <div class="media-body">
               <!-- <h3 class="heading mb-3">Service amical</h3>-->
                <h2 class="mb-4">Service amical</h2>
              </div>
            </div>      
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-serving-dish"></span>
              	</div>
              </div>
              <div class="media-body">
              
                <h2 class="mb-4">Prendre le petit-déjeuner</h2>
              </div>
            </div>    
          </div>
          <div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-car"></span>
              	</div>
              </div>
              <div class="media-body">
                <h2 class="mb-4">Services de transfert</h2>
              </div>
            </div>      
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-spa"></span>
              	</div>
              </div>
              
            </div>      
          </div>
          <div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="ion-ios-bed"></span>
              	</div>
              </div>
              <div class="media-body">
                <h2 class="mb-4">Chambres confortables</h2>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading"><h2 class="mb-4">Témoignage</h2></span>
            <h2 class="mb-4">Notre invité heureux dit...</h2>
          </div>
        </div>  
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		          
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>

		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
                        <img class="img-responsive" src="{{asset('images/about1.jpg')}}" alt="">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                  	<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
		                    <h4><p class="mb-4">Hôtel tout confort,décoration intérieure et extérieure magnifique,personnel très aimable,petit déjeuner exceptionnel,très grande piscine,jardin avec vue sur la mer .</p></h4>
		                    <p class="name">Babacar</p>
		                    <span class="position"><h2 class="mb-4">clients</h2></span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>
    </section><!--/#about-->


 
@endsection