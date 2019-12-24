@extends('layout')
@section('content')
<section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Galerie</h2>
                <p class="wow fadeInDown">Golden hôtel est l'un des meilleurs hôtel d'afrique<br>. Un cadre paradisiatique en face de l'atlantique<br>. Un personnel accueillant et un service à la hauteur de nos attentes.</p>
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
                        <img class="img-responsive" src="{{asset('images/portfolio/31.jpg')}}" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="{{asset('images/portfolio/31.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
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
@endsection