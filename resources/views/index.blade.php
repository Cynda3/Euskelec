@extends('layouts.layout')

			@section('title', 'Euskelec')

			@section('sidebar')
			@parent

			@endsection


			@section('contenido')
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
				<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
					<div class="active-banner-carousel">
						<div class="banner-content col-lg-12 col-md-12">
							<h1>
								Euskelec <br>
							</h1>
							
						</div>
						<div class="banner-content col-lg-12 col-md-12">
							<h1>
								Torneos <br>
							</h1>
							<h2>
								Participa en torneos en equipo.
							</h2>
							
						</div>
						<div class="banner-content col-lg-12 col-md-12">
							<h1>
								Administra tus<br>
								sensores y coches
							</h1>
							
						</div>
					</div>
											<div class="carousel-trigger">
							<div class="next-trigger"><span class="lnr lnr-arrow-up"></span></span></div>
							<div class="prev-trigger"><span class="lnr lnr-arrow-down"></span></span></div>
						</div>
				</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start service Area -->
			<section class="service-area section-gap" id="facilities">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Colaboración con Euskelec</h1>
							<p>
								Ofrecemos nuestra página a los alumnos de Don Bosco <br> para ayudarles con sus coches
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 single-service">
						  <div class="content">
						    <a href="http://euskelec.eus/" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/f1.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Visita la pagina oficial de euskelec</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-4 col-md-4 single-service"">
						  <div class="content">
						    <a href="http://euskelec.eus/" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/f2.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Visita la pagina oficial de euskelec</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-4 col-md-4 single-service"">
						  <div class="content">
						    <a href="http://euskelec.eus/" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/f3.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Visita la pagina oficial de euskelec</h3>
						      </div>
						    </a>
						  </div>
						</div>
					</div>
				</div>
			</section>
			<!-- End service Area -->

			<!-- Start about Area -->
			<section class="about-area" id="coches">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-left no-padding">
							<img id="about-img" class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-12 about-right">
							<h1>Administra tus coches <br>
							facilmente</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
							</p>
							<button class="btn btn-black">Ve a coches </button>
						</div>
					</div>
				</div>
			</section>
			<section class="about-area" id="sensores">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-right">
							<h1>Comprueba tus sensores <br>
							desde la web</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
							</p>
							<button class="btn btn-black">Ve a sensores </button>
						</div>
						<div class="col-lg-6 col-md-12 about-left no-padding">
							<img id="about-img" class="img-fluid" src="img/about-img2.jpg" alt="">
						</div>
					</div>
				</div>
			</section>
			<section class="about-area" id="grupos">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-left no-padding">
							<img id="about-img" class="img-fluid" src="img/about-img3.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-12 about-right">
							<h1>Gestiona tus grupos <br>
							para unirte a torneos</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
							</p>
							<button class="btn btn-black">Ve a grupos </button>
						</div>
					</div>
				</div>
			</section>

			<!-- Start booking Area -->
			<section class="booking-area">
				<div class="container">
					<div class="row">
						<div class="booking-wrap col-lg-12">
							<div class="row d-flex justify-content-center">
								<div class="col-md-10 pb-80 header-text">
									<h1>Formulario de contacto</h1>
									<p>
										¿Tiéne alguna sugerencia?
									</p>
								</div>
							</div>
					  		<form class="booking-form" action="enviar" method="POST" onsubmit="return alert('Datos enviados!');">
					  			@csrf
								 <div class="row">
								    <div class="col-lg-6 col-md-12">
								    	<div class="row">
									    	<div class="col-lg-6">
												<input type="text" name="nombre" class="single-in form-control" placeholder="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" required="">
											</div>
									    	<div class="icons" id="icon-name">
									    	</div>
									    	<div class="col-lg-6">
									    		<input class="single-in form-control" name="email" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
									    	</div>
									    	<div class="icons" id="icon-mail">
									    	</div>
								    	</div>
								    </div>
								    <div class="col-lg-6 col-md-12">
								      	<textarea class="single-in form-control" name="mensaje" placeholder="Mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensaje'" required=""></textarea>
								    </div>
										<div class="col-lg-12 d-flex justify-content-center send-btn">
										<button class="primary-btn mt-20 text-uppercase ">Enviar<span class="lnr lnr-arrow-right"></span></button>
									</div>

									<div class="alert-msg"></div>
								  </div>
					  		</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End booking Area -->

			@endsection
		