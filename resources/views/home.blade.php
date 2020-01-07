@extends('layout')
@section('content')

<div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/13.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/13.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
    
<!--
    

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
  
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/13.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
   
            


                <section class="ftco-section bg-light ftco-no-pb">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
			  <br><br>
          	<span class="subheading"><h1>les chambres de l'hôtel golden</h1></span>
            <h2 class="mb-4">Les Types de Chambres:</h2>
          </div>
        </div>  
    		<div class="row no-gutters">
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
                        
                    <img class="img-responsive" src="{{asset('images/portfolio/04.jpg')}}" alt="">
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">100000f</span> <span class="per">Par nuit

									</span></p>
	    						<h3 class="mb-3"><a href="rooms-single.html">Chambre de luxe</a></h3>
	    						<p class="pt-1"><a href="rooms-single.html" class="btn-custom px-3 py-2">Voir les détails de la chambre <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
                        
                    <img class="img-responsive" src="{{asset('images/portfolio/05.jpg')}}" alt="">
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">105000f</span> <span class="per">Par nuit</span></p>
	    						<h3 class="mb-3"><a href="rooms-single.html">Chambre superieur</a></h3>
	    						<p class="pt-1"><a href="rooms-single.html" class="btn-custom px-3 py-2">Voir les détails de la chambre <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
                    
                    <img class="img-responsive" src="{{asset('images/portfolio/018.jpg')}}" alt="">
    					<div class="half right-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">110000f</span> <span class="per">Par nuit</span></p>
	    						<h3 class="mb-3"><a href="rooms-single.html">Chambre de famille</a></h3>
	    						<p class="pt-1"><a href="rooms-single.html" class="btn-custom px-3 py-2">Voir les détails de la chambre<span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
                        
                    <img class="img-responsive" src="{{asset('images/portfolio/017.jpg')}}" alt="">
    					<div class="half right-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">100000f</span> <span class="per">Par nuit</span></p>
	    						<h3 class="mb-3"><a href="rooms-single.html">Chambre classique</a></h3>
	    						<p class="pt-1"><a href="rooms-single.html" class="btn-custom px-3 py-2">Voir les détails de la chambre <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
                        
                    <img class="img-responsive" src="{{asset('images/portfolio/20.jpg')}}" alt="">
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">110000f</span> <span class="per">Par nuit</span></p>
	    						<h3 class="mb-3"><a href="rooms-single.html">Chambre de famille</a></h3>
	    						<p class="pt-1"><a href="rooms-single.html" class="btn-custom px-3 py-2">Voir les détails de la chambre <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
                        
                    <img class="img-responsive" src="{{asset('images/portfolio/21.jpg')}}" alt="">
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">100000f</span> <span class="per">Par nuit</span></p>
	    						<h3 class="mb-3"><a href="rooms-single.html"></a>Chambre de luxe</h3>
	    						<p class="pt-1"><a href="rooms-single.html" class="btn-custom px-3 py-2">Voir les détails de la chambre <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
				
    </section><!--/#main-slider-->


    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Notre Service</h2>
                <p class="wow fadeInDown">Golden hôtel est l'un des meilleurs hôtel d'afrique<br>. Un cadre paradisiatique en face de l'atlantique<br>. Un personnel accueillant et un service à la hauteur de nos attentes.</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                               <!-- <i class="fa fa-futbol-o"></i>-->
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Restaurant & Bar</h4>
                                <p>Située dans le centre-ville de la capitale Sénégalais Golden hôtel est l'un des meilleurs restaurants de Dakar</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="portfolio-item designing">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/03.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/03.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->


                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <!--<i class="fa fa-compass"></i>-->
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">chambres luxueuses</h4>
                                <p>Les chambres de l'hôtel sont idéales pour ceux qui voyages pour affaires ou pour loisirs et qui apprécient le luxe de l'espace.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/04.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/04.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item designing development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/05.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/05.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <!--<i class="fa fa-database"></i>-->
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Banquet </h4>
                                <p>Le service de restauration de l'hôtel offre un menu variée;il est ouvert de midi à 00h.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                
                   
                <div class="portfolio-item designing development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/09.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/09.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item designing development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/10.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/10.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item designing development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/11.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/11.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item designing development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/12.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/12.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->


                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bar-chart"></i>
                            </div>
                            
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <!--<i class="fa fa-paper-plane-o"></i>-->
                            </div>
                           
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

  
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


   
<section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Bienvenue à Golden hôtel</span>
            <h2 class="mb-4">Une nouvelle vision de l'hôtel de luxe</h2>
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
                <h3 class="heading mb-3">Service amical</h3>
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
                <h3 class="heading mb-3">Prendre le petit-déjeuner</h3>
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
                <h3 class="heading mb-3">Services de transfert</h3>
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
                <h3 class="heading mb-3">Chambres confortables</h3>
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
          	<span class="subheading">Témoignage</span>
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
		                    <p class="mb-4">Hôtel tout confort,décoration intérieure et extérieure magnifique,personnel très aimable,petit déjeuner exceptionnel,très grande piscine,jardin avec vue sur la mer .</p>
		                    <p class="name">Babacar</p>
		                    <span class="position">client</span>
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


 
<section id="hero-action-section" class="hero-action-section">
		<!-- .Container -->
		<div class="container ow-section">
			<h3 class="hero-action-subtitle">Nous concevons vos rêves impressionnants</h3>
			
			<p class="hero-action-description">Entouré de jardins,Golden hôtel est situé sur la péninsule des almadies,<br>à l'extrémité de la côte ouest du sénégal.<br>Il comprend des chambres,un restaurant,un bar,des équipements,une assistance voyage,un service de blanchisserie...<br> Un petit-déjeuner est disponible tous les jours.<br> Des repas lègers sont servis tout au long de la journée au bar-salon.<br> L'établissement se trouve à 25km du centre de Dakar. <br>Un parking privée est disponible gratuitement sur place.
			</p>
			<p><a href="#" class="get-started">Obtenez le maintenant!</a></p>
		</div><!-- /.Container -->
	</section>
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
       
	
   
  <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Gallery</h2>
                <p class="wow fadeInDown">Golden hôtel est l'un des meilleurs <br> hôtel d'afrique.</p>
            </div>

            <div class="text-center" style="display:none;">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">All Works</a></li>
                    <li><a href="#" data-filter=".designing">Designing</a></li>
                    <li><a href="#" data-filter=".mobile">Mobile App</a></li>
                    <li><a href="#" data-filter=".development">Development</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item designing">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/30.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/30.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/02.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/02.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item designing">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/03.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/03.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/04.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/04.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item designing development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/05.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/05.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/06.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/06.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item designing development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/015.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/015.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/portfolio/32.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/32.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->
<!--reservation-->
   <!-- Booking -->
   <section class="section-booking bg1-pattern p-t-100 p-b-110">
		<div class="container">
			<div class="row">
				<div class="col-lg-40 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center"> 
							<br><br><br><br>
							<h1>Reservation<h1>
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
						  Table de livre
						</h3>
					</div>

					<form id="main-reservation-form" name="reservation-form" method="post" action="/Reservation/reservation">
                                @csrf


						<div class="row">
							<div class="col-md-6">
								<!-- Date -->
								<span class="txt9">
									nom_du_client
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="nom_du_client" placeholder="Nom du client">
									<!--<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>-->
								</div>

								<!-- Time -->
								<span class="txt9">
									Nbr_nuit
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="Nbr_nuit">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
										<option>13</option>
										<option>14</option>
										<option>15</option>
										<option>16</option>
										<option>17</option>
										<option>18</option>
										<option>19</option>
										<option>20</option>
									</select>
								</div>

								<!-- People -->
								<span class="txt9">
									statu
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="statu">
										<option>personne</option>
										<option>En attente</option>
										<option>En consommation</option>
										<option>En annulation</option>
										
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<!-- Name -->
								<span class="txt9">
									prenom_du_client
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="prenom_du_client" placeholder="Prenom du client">
								</div>

								<!-- Phone -->
								<span class="txt9">
									date_arrivé
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="date_arrivé" placeholder="date d'arrivé">
								</div>

								<!-- Email -->
								<span class="txt9">
									date_depart
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="date_depart" placeholder="date de depart">
								</div>
							</div>
						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn btn-primary">Enregistrement</button>
						</div>
					</form>
				</div>

				<div class="col-lg-6 p-b-30 p-t-18">
					<div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="{{asset('images/booking-01.jpg')}}" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>
	
	

    <!--/#reservation-->
   
   

    <section id="business-stats">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Rapport de l'hôtel</h2>
                <p class="wow fadeInDown">Golden hôtel est l'un des meilleurs hôtel d'afrique<br>. Un cadre paradisiatique en face de l'atlantique<br>. Un personnel accueillant et un service à la hauteur de nos attentes.</p>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="business-stats" data-digit="6850" data-duration="1000"></div>
                        <strong>Les clients</strong>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="business-stats" data-digit="1465" data-duration="1000"></div>
                        <strong>Pièces</strong>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="business-stats" data-digit="4325" data-duration="1000"></div>
                        <strong></strong>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="business-stats" data-digit="2568" data-duration="1000"></div>
                        <strong>Des soirées</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#business-stats-->

  
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
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
   </section><!--/#bottom-->
@endsection