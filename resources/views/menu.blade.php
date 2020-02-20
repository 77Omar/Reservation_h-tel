<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="webthemez">
    <title>Golden-Hotel-Free-HTML5-Bootstrap-Web-Template</title>
	<!-- core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/slider-style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/slider-custom.css')}}" />
		<script type="text/javascript" src="{{asset('js/modernizr.custom.79639.js')}}></script>
    <!--[if lt IE 9]>
    <!--<script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif] -->   
    <link rel="shortcut icon" href="images/ico/favicon.ico"> 
</head> 

<body id="home">
    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                   
                    <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                
                    <ul class="nav navbar-nav">
                       <!-- <li class="scroll active"><a href="{{route('chambre')}}">Chambre</a></li>  
                        <li class="scroll"><a href="{{route('service')}}">Services</a></li>
                        <li class="scroll"><a href="{{route('a_propos')}}">A propos</a></li>
                        <li class="scroll"><a href="{{route('notre_equipe')}}">Notre_Equipe</a></li>
					            	<li class="scroll"><a href="{{route('portefeuille')}}">Portefeuille</a></li>
                        <li class="scroll"><a href="{{route('reservation')}}">Reservation</a></li>
                        <li class="scroll"><a href="{{route('contact')}}">Contact</a></li> 
                        <li class="scroll"><a href="{{route('login')}}">Connecter</a></li> -->
                        
                      <!--  <li><a href="{{route('login')}}">Se connecter</a></li> -->
                       @guest
                           <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __("S'inscrire") }}</a>
                                </li>
                            @endif-->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        -->
                      <!-- commentaire parti Admin
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                        Admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div> <a class="dropdown-item" id="navbarDropdown" href="/chambre">Chambres</a></div>
                        <div> <a class="dropdown-item" href="/typechambre">Typechambre</a></div>
                        <div> <a class="dropdown-item" href="/reservation">Reservations</a></div>
                        <div> <a class="dropdown-item" href="/Hôtel">Hotel</a></div>
                        <div> <a class="dropdown-item" href="/employer">Employers</a></div>
                        <div> <a class="dropdown-item" href="/contact">Contact</a></div>
                        
                        <div> <a class="dropdown-item" href="/personne">Personne</a></div>
                        </div>
                      </li>-->

                    </ul>
                    
                </div>
                   


        @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
        {{session()->get('message')}}
        </div>
        @endif

      
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
    @yield('content')

    	<!-- Footer -->
        <footer class="page-footer font-small unique-color-dark">

<div style="background-color: #6351ce;">
  <div class="container">

	<!-- Grid row-->
	<div class="row py-4 d-flex align-items-center">

	  <!-- Grid column -->
	  <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
		<!--<h6 class="mb-0">Connectez-vous avec nous sur les réseaux sociaux

</h6>
	  </div>
	  <!-- Grid column -->

	  <!-- Grid column -->
	  <!--<div class="col-md-6 col-lg-7 text-center text-md-right">


		<!-- Facebook -->
    
		<a class="fb-ic">
		  <i class="fab fa-facebook-f white-text mr-4"> </i>
		</a>
		<!-- Twitter -->
		<a class="tw-ic">
		  <i class="fab fa-twitter white-text mr-4"> </i>
		</a>
		<!-- Google +-->
		<a class="gplus-ic">
		  <i class="fab fa-google-plus-g white-text mr-4"> </i>
		</a>
		<!--Linkedin -->
		<a class="li-ic">
		  <i class="fab fa-linkedin-in white-text mr-4"> </i>
		</a>
		<!--Instagram-->
		<a class="ins-ic">
		  <i class="fab fa-instagram white-text"> </i>
		</a>

	  </div>
	  <!-- Grid column -->

	</div>
	<!-- Grid row-->

  </div>
</div>

<!-- Footer Links -->
<!--<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <!--<div class="row mt-3">

	<!-- Grid column -->
	<!--<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

	  <!-- Content --> <!--commentaire-->
	  <!--<h6 class="text-uppercase font-weight-bold">Golden Hôtel</h6>
	  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <p>Entouré de jardins,Golden hôtel est situé sur la péninsule des almadies,<br>à l'extrémité de la côte ouest du sénégal.<br>Il comprend des chambres,un restaurant,un bar,des équipements,une assistance voyage,un service de blanchisserie...<br> Un petit-déjeuner est disponible tous les jours.<br> Des repas lègers sont servis tout au long de la journée au bar-salon.<br> L'établissement se trouve à 25km du centre de Dakar. <br>Un parking privée est disponible gratuitement sur place.</p>

	</div>
	<!-- Grid column -->

	<!-- Grid column -->
	<!--div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

	  <!-- Links -->
   <!--<div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">les liens utiles</h2>
              <ul class="list-unstyled">
                <li><a href="{{route('service')}}" class="py-2 d-block"> Nos Services</a></li>
                <li><a href="{{route('chambre')}}" class="py-2 d-block">Des Chambres</a></li>
                <li><a href="{{route('notre_equipe')}}" class="py-2 d-block">Notre Equipe</a></li>
                <li><a href="{{route('portefeuille')}}" class="py-2 d-block">Nos portefeuilles</a></li>
              </ul>
            </div>
          </div>

	</div>
	<!-- Grid column -->

	<!-- Grid column -->
	<!--<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

	  <!-- Links -->
	  <!--<div class="col-md">
             <div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Intimité</h2>
							<ul class="list-unstyle">
                <li><a href="{{route('notre_equipe')}}" class="py-2 d-block">Carrière</a></li>
                <li><a href="{{route('a_propos')}}" class="py-2 d-block">A propos de nous</a></li>
                <li><a href="{{route('contact')}}" class="py-2 d-block">Contactez-nous</a></li>
                <li><a href="#" class="py-2 d-block">Prestation de service</a></li>
              </ul>
            </div>
          </div>

	</div>
	<!-- Grid column -->

	<!-- Grid column -->
	<!--<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

	  <!-- Links -->
    <!--<div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Avoir des Questions?</h2>
             <li><span class="icon icon-map-marker"></span><span class="text">Adresse</span></li>
	                <li><a href="{{route('contact')}}"><span class="icon icon-phone"></span><span class="text">Numéro fixe</span></a></li><li><a href="{{route('contact')}}"><span class="icon icon-envelope"></span><span class="text">Email</span></a></li>
	              </ul>
	            </div>
            </div>
	</div>
	<!-- Grid column -->

  <!--</div>
  <!-- Grid row -->

<!--</div>
<!-- Footer Links -->

<!-- Copyright -->
<!--<div class="footer-copyright text-center py-3">© 2019 Copyright:
  <a href="https://mdbootstrap.com/education/bootstrap/"> Golden Hôtel</a>
</div>
<!-- Copyright -->

<!--</footer>
<!-- Footer -->
         

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script> 
    <script src="{{asset('js/mousescroll.js')}}"></script>
    <script src="{{asset('js/smoothscroll.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.ba-cond.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.slitslider.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/slitslider-custom.js')}}"></script>
    <script src="{{asset('js/custom-scripts.js')}}"></script>
</body>
</html>