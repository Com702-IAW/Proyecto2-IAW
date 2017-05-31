@extends('layouts.headerProducto')

<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->

 <head>
        <!-- BASICS -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>RR Computer</title>
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/isotope.css')}}" media="screen" />
        <link rel="stylesheet" href="{{URL::to('js/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen" />
        <link rel="stylesheet" href="{{URL::to('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{URL::to('css/bootstrap-theme.css')}}">
        <link href="{{URL::to('css/responsive-slider.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::to('css/animate.css')}}">
        <link rel="stylesheet" href="{{URL::to('css/style.css')}}">

        <link rel="stylesheet" href="{{URL::to('css/font-awesome.min.css')}}">
        <!-- skin -->
        <link rel="stylesheet" href="{{URL::to('skin/default.css')}}">

    </head>

<body>

<section id="testimonials-4" class="section" data-stellar-background-ratio="0.5">
</section>

<section id="section-about">
		<div class="container" style= "background:white">

			<div class="container" style= "background:white">

            <div class="row well" style= "background:white" >
                <!-- Lugar donde va la imagen que describe el producto -->
                <div class="col-md-7 col-xs-12">
                    <a class="thumbnail col-xs-12" id="panelgeneral">
                        <div>
                            <img id="imagen0" src = {{$p->urlMonitor}} />
                            <img id="imagen3" src = {{$p->urlParlante}} />
                        </div>
                        <div>
                            <img id="imagen1" src = {{$p->urlTeclado}} />
                            <img id="imagen2" src = {{$p->urlMouse}}  />
                        </div>
                        <div id = "preciototal">  </div>
                    </a>
                </div>

            </div>
        </div>

		</div>
	</section>

    <section id="footer" class="section footer">
        <div class="container">
            <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
                <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="row align-center copyright">
                    <div class="col-sm-12">
                        <p>&copy; GREEN Theme</p>
                        <div class="credits">
                            <!--
                                All the links in the footer should remain intact.
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Green
                            -->
                            <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
            </div>
        </div>

    </section>

	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/jquery-1.11.0.min.js')}}"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::to('js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    <script src="{{URL::to('js/jquery.js')}}"></script>
    <script src="{{URL::to('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{URL::to('js/jquery.isotope.min.js')}}"></script>
    <script src="{{URL::to('js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{URL::to('js/fancybox/jquery.fancybox.pack.js')}}"></script>
    <script src="{{URL::to('js/skrollr.min.js')}}"></script>
    <script src="{{URL::to('js/jquery.scrollTo-1.4.3.1-min.js')}}"></script>
    <script src="{{URL::to('js/jquery.localscroll-1.2.7-min.js')}}"></script>
    <script src="{{URL::to('js/stellar.js')}}"></script>
    <script src="{{URL::to('js/responsive-slider.js')}}"></script>
    <script src="{{URL::to('js/jquery.appear.js')}}"></script>
    <script src="{{URL::to('js/grid.js')}}"></script>
    <script src="{{URL::to('js/wow.min.js')}}"></script>
    <script>wow = new WOW({}).init();</script>

</body>