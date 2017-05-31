@extends('layouts.estilo')
@extends('layouts.headerProducto')

<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
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
                            <img id="imagen0" />
                            <img id="imagen3" />
                        </div>
                        <div>
                            <img id="imagen1"  />
                            <img id="imagen2"  />
                        </div>
                        <div id = "preciototal">  </div>
                    </a>
                </div>

                <!-- Lugar donde van los componentes para personalizar el producto -->
                <div class="col-md-5 col-xs-12">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading" id = "monitor">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse0">Monitor</a>
                                </h4>
                            </div>
                            <div id="collapse0" class="panel-collapse collapse">
                            </div>
                            <div class="panel-heading" id ="teclado">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse1">Teclado</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                            </div>
                            <div class="panel-heading" id ="mouse">
                         <!--      <img src ="src/mousemicro.png" align = "right"/> -->
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse2">Mouse</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                            </div>
                            <div class="panel-heading" id ="parlantes">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse3">Parlantes</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                            </div>
                        </div>
                    </div>
                 @if (!Auth::guest())
                    <div align = "right">
                       <p> Link: <input size = "50" id = "linkCompartido" type="text" ></input>
                       </p>
                    </div>
                @endif
                <br><br>
                </div>

                <div class="col-md-12" align = "right">
                    <button id = "generarPDF" type="submit" class="btn btn-primary" >
                        Generar Comprobante de Compra
                    </button>
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

    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/vistaComponentes.js"></script>
    <script type="text/javascript" src="js/controlador.js"></script>
    <script type="text/javascript" src="js/carrito.js"></script>
    <script type="text/javascript" src="js/jspdf.min.js"></script>

</body>