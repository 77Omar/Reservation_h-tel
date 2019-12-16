@extends('layout')
@section('content')
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
@endsection