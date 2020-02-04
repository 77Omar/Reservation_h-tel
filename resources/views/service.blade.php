@extends('layout')
@section('content')
<br><br>
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
                                <i class="fa fa-futbol-o"></i>
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
                                <i class="fa fa-compass"></i>
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
                                <i class="fa fa-database"></i>
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
                                <i class="fa fa-paper-plane-o"></i>
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
    

@endsection