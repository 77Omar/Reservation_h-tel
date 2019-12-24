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
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif] -->   
    <link rel="shortcut icon" href="images/ico/favicon.ico"> 
</head> 

<body id="home">
    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                   
                    <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="{{route('chambre')}}">Chambre</a></li>  
                        <li class="scroll"><a href="{{route('service')}}">Services</a></li>

                        <li class="scroll"><a href="{{route('notre_equipe')}}">Notre_Equipe</a></li>
					            	<li class="scroll"><a href="{{route('portefeuille')}}">Portefeuille</a></li>
                        <li class="scroll"><a href="{{route('reservation')}}">Reservation</a></li>
                        <li class="scroll"><a href="{{route('contact')}}">Contact</a></li>                        
                    </ul>


                  

        @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
        {{session()->get('message')}}
        </div>
        @endif

                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
    


    @yield('content')

 
    
                
            <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Golden Hôtel</h2>
              <p>Entouré de jardins,Golden hôtel est situé sur la péninsule des almadies,<br>à l'extrémité de la côte ouest du sénégal.<br>Il comprend des chambres,un restaurant,un bar,des équipements,une assistance voyage,un service de blanchisserie...<br> Un petit-déjeuner est disponible tous les jours.<br> Des repas lègers sont servis tout au long de la journée au bar-salon.<br> L'établissement se trouve à 25km du centre de Dakar. <br>Un parking privée est disponible gratuitement sur place.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
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
          <div class="col-md">
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
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Avoir des Questions?</h2>
             <li><span class="icon icon-map-marker"></span><span class="text">Adresse</span></li>
	                <li><a href="{{route('contact')}}"><span class="icon icon-phone"></span><span class="text">Numéro fixe</span></a></li><li><a href="{{route('contact')}}"><span class="icon icon-envelope"></span><span class="text">Email</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div> 
        <div class="row">


          <div class="col-md-12 text-center">



            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> <span style="color:#b69100;">KING FAHD PALACE</span> | Tous droits réservés.
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
              
               
         

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