@extends('layouts.estilo')
@extends('layouts.headerHome')

<!DOCTYPE html>
 <html class="no-js"> <!--<![endif]-->

<body>
<div class="slider">
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="img/1.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
								<h2><span>RR - Computer</span></h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
									<p>La computadora indicada para la persona indicada</p>
								</div>
							</div>
						</div>
				    </div>

				    <div class="item">
						<img src="img/2.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
								<h2>Calidad y Satisfaccion</h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
									<p>Un cliente contento es un objetivo cumplido para la empresa</p>
								</div>
							</div>
						</div>
				    </div>
				</div>

				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>

				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->

		<!-- services -->
		<section id="services" class="section pad-bot5 bg-white">
		<div class="container">
				<div class="row mar-bot5">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
						<div class="wow bounceIn"data-animation-delay="7.8s">

							<h2 class="section-heading animated"  >Nuestro Servicio</h2>
							<h4>Empresa Nº1 en la la venta de computadoras personalizadas para su talla.</h4>

						</div>
						</div>
					</div>
				</div>
			<div class="row mar-bot40">
				<div class="col-lg-4" >
					<div class="wow bounceIn">
						<div class="align-center">

							<div class="wow rotateIn">
								<div class="service-col">
									<div class="service-icon">
										<figure><i class="fa fa-cog"></i></figure>
									</div>
										<h2><a href="#">Asistencia las 24Hs del día</a></h2>
										<p>Garantia de 4 años. Posibilidad de cambiar productos dentro de un plazo estipulado de 1 semana. Asistencia telefonica continua.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4" >
					<div class="align-center">
						<div class="wow bounceIn">

							<div class="wow rotateIn">
								<div class="service-col">
									<div class="service-icon">
										<figure><i class="fa fa-desktop"></i></figure>
									</div>
										<h2><a href="#">Alta Calidad de Producto</a></h2>
										<p>Contamos con los mejores productos del mundo fabricados en nuestro propio país que cumplen con todos los estandares de calidad.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4" >
					<div class="align-center">
						<div class="wow bounceIn">
							<div class="service-col">
								<div class="service-icon">
									<figure><i class="fa fa-dropbox"></i></figure>
								</div>
									<h2><a href="#">Envio Puerta a Puerta</a></h2>
									<p>Contamos con envio a todo el pais las 24 hs los 365 días del año sin importarl el lugar donde esté. No se le aplican cargos adicionales.</p>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
		</section>

		<section id="testimonials-3" class="section" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
					<div class="col-lg-12">
							<div class="align-center">
										<div class="testimonial pad-top40 pad-bot40 clearfix">
											<h5>
												"Es genial trabajar con ordenadores. No discuten, lo recuerdan todo y no se beben tu cerveza"

											</h5>
											<br/>
											<span class="author">&mdash; -- Paul Leary </span>
										</div>

								</div>
							</div>
					</div>

			</div>

		</section>
		<!--/services-->

		<!-- spacer section:testimonial --

		<!-- team -->
		<section id="team" class="team-section appear clearfix">
		<div class="container">

				<div class="row mar-bot10">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
						<div class="wow bounceIn">

							<h2 class="section-heading animated" data-animation="bounceInUp">Nuestro Equipo</h2>
							<p>Grandes profesionales con una vision distinta de como satisfacer las necesidades de las personas.</p>

						</div>
						</div>
					</div>
				</div>

					<div class="row align-center mar-bot45">
						<div class="col-md-6">

							<div class="wow bounceIn">
							<div class="team-member">
								<div class="profile-picture">
									<figure><img src="img/members1.jpg" alt=""></figure>
									<div class="profile-overlay"></div>
										<div class="profile-social">
											<div class="icons-wrapper">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
												<a href="#"><i class="fa fa-pinterest"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
											</div>
										</div>
								</div>
								<div class="team-detail">
									<h4>Manuel Rios</h4>
									<span>CEO - RR Computer</span>
								</div>
								<div class="team-bio">
								<p>Es un empresario, informático y filántropo argentino, cofundador de la empresa RR Computers.Su fortuna está estimada en 86.900 millones de dólares según la revista Forbes.</p>
								</div>
							</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="wow bounceIn">
							<div class="team-member">
								<div class="profile-picture">
									<figure><img src="img/members2.jpg" alt=""></figure>
									<div class="profile-overlay"></div>
										<div class="profile-social">
											<div class="icons-wrapper">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
												<a href="#"><i class="fa fa-pinterest"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
											</div>
										</div>
								</div>
								<div class="team-detail">
									<h4>Conztanza Morillo</h4>
									<span>CEO - RR Computer</span>
								</div>
								<div class="team-bio">
								<p>Es una empresaria y filántropa argentina. Se graduó en Informática y Economía por la Universidad de Duke. Forma parte del directorio del diario The Washington Post.</p>
								</div>
							</div>
							</div>
						</div>

					</div>

		</div>
		</section>
		<!-- /team -->

		<!-- spacer section:stats -->


		<!-- spacer section:testimonial -->
		<section id="testimonials-2" class="section" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
					<div class="col-lg-12">
							<div class="align-center">
										<div class="testimonial pad-top40 pad-bot40 clearfix">
											<h5>
												"Hay sólo dos clases de lenguajes de programación: aquellos de los que la gente está siempre quejándose y aquellos que nadie usa"

											</h5>
											<br/>
											<span class="author">-- Bjarne Stroustrup</span>
										</div>

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

</body>
</html>
