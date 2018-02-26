<?php
include("layouts/principal.php");
?>
	
		<!-- end header -->
		<section id="featured" class="bg">
			<!-- start slider -->


			<!-- start slider -->
			<div class="container">



				<div class="row">
					<div class="col-lg-12">
						<!-- Slider -->
						<div id="main-slider" class="main-slider flexslider">
							<ul class="slides">
								<li>
									<img src="img/slides/flexslider/1.jpg" alt="" />
									<div class="flex-caption">
										<h3>Diseño moderno</h3>
										<p>Utilización de las ultimas tecnologías en el desarrollo de sitios web</p>
										<!--<a href="#" class="btn btn-theme">Learn More</a>-->
									</div>
								</li>
								<li>
									<img src="img/slides/flexslider/2.jpg" alt="" />
									<div class="flex-caption">
										<h3>Full Responsivo</h3>
										<p>Los sitios se acomodan a cualquier dispositivo</p>
										<!--<a href="#" class="btn btn-theme">Learn More</a>-->
									</div>
								</li>
								<li>
									<img src="img/slides/flexslider/3.jpg" alt="" />
									<div class="flex-caption">
										<h3>Desarrollo ágil</h3>
										<p>Nuestro equipo trabaja de forma rápida y eficiente</p>
										<!--<a href="#" class="btn btn-theme">Learn More</a>-->
									</div>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</section>

		<section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="cta-text">
							<h2>Soluciones<span> informáticas</span> empresas</h2>
							<p>Somos especialistas en el desarrollo de soluciones para las empresas, integración de servicios, desarrollo de sitios responsivos y de alta calidad</p>
						</div>
					</div>
					<!--<div class="col-lg-4">
						<div class="cta-btn">
							<a href="#" class="btn btn-theme btn-lg">Grab it now <i class="fa fa-angle-right"></i></a>
						</div>
					</div>-->
				</div>
			</div>
		</section>


		<section id="content">

			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h4>SERVICIOS</h4>
					</div>
					<div class="col-lg-4">
						<div class="pricing-box-alt">
							<div class="pricing-heading">
								<h3>Sitio<strong> Básico</strong></h3>
							</div>
							<div class="pricing-terms">
								<h6>$200.000 pesos</h6>
							</div>
							<div class="pricing-content">
								<ul>
									<li><i class="icon-ok"></i> 3 módulos</li>
									<li><i class="icon-ok"></i> Soporte por 3 meses</li>
									<li><i class="icon-ok"></i> Información estática</li>
									<li><i class="icon-ok"></i> Diseño responsivo</li>
									<li><i class="icon-ok"></i> Formulario de contacto</li>
								</ul>
							</div>
							<div class="pricing-action">
							<?php
							$articulo = 1;
							include("layouts/components/comprar.php");
							?>					
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pricing-box-alt special">
							<div class="pricing-heading">
								<h3>Sitio<strong> Pyme</strong></h3>
							</div>
							<div class="pricing-terms">
								<h6>$300.000 pesos</h6>
							</div>
							<div class="pricing-content">
								<ul>
									<li><i class="icon-ok"></i> 4 módulos</li>
									<li><i class="icon-ok"></i> Soporte por 6 meses</li>
									<li><i class="icon-ok"></i> Información estática</li>
									<li><i class="icon-ok"></i> Diseño responsivo</li>
									<li><i class="icon-ok"></i> Formulario de contacto - galeria de imagenes</li>
								</ul>
							</div>
							<div class="pricing-action">
							<?php
							$articulo = 2;
							include("layouts/components/comprar.php");
							?>	
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pricing-box-alt">
							<div class="pricing-heading">
								<h3>Sitio <strong>Empresa</strong></h3>
							</div>
							<div class="pricing-terms">
								<h6>$400.000 pesos</h6>
							</div>
							<div class="pricing-content">
								<ul>
									<li><i class="icon-ok"></i> 4 módulos </li>
									<li><i class="icon-ok"></i> Soporte por 6 meses </li>
									<li><i class="icon-ok"></i> Información dinámica auto administrable</li>
									<li><i class="icon-ok"></i> Diseño responsivo y administrable</li>
									<li><i class="icon-ok"></i> Formulario de acceso, contacto y administración</li>
								</ul>
							</div>
							<div class="pricing-action">
							<?php
							$articulo = 3;
							include("layouts/components/comprar.php");
							?>	
							</div>
						</div>
					</div>
				</div>
				<!-- divider -->
				<div class="row">
					<div class="col-lg-12">
						<div class="solidline">
						</div>
					</div>
				</div>
			</div>

			<section id="sobreNosotros">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="text-center">
								<h2>Usamos las más <span class="highlight"> modernas</span> tecnologías de desarrollo</h2>
								<p>Somos un empresa preocupada de entregar un servicio de calidad a nuestros clientes, aplicando las más actuales tecnologías de desarrollo web, para así lograr un producto de alto nivel que cubra las necesidades de nuestros comsumidores.</p>
							</div>
						</div>
					</div>
				</div>
			



				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-sm-3 col-md-3 col-lg-3">
									<div class="box">
										<div class="aligncenter">
											<div class="icon">
												<i class="fa fa-desktop fa-5x"></i>
											</div>
											<h4>Full responsivo</h4>
										</div>
									</div>
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3">
									<div class="box">
										<div class="aligncenter">
											<div class="icon">
												<i class="fa fa-file-code-o fa-5x"></i>
											</div>
											<h4>Ultimas tecnologías</h4>
										</div>
									</div>
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3">
									<div class="box">
										<div class="aligncenter">
											<div class="icon">
												<i class="fa fa-paper-plane-o fa-5x"></i>
											</div>
											<h4>Desarrollo ágil</h4>
										</div>
									</div>
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3">
									<div class="box">
										<div class="aligncenter">
											<div class="icon">
												<i class="fa fa-cubes fa-5x"></i>
											</div>
											<h4>Sistemas escalables</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>

			<!-- divider -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="solidline">
						</div>
					</div>
				</div>
			</div>
			<!-- end divider -->

			<!-- clients -->
			<section class="clientes">

			<div class="container">
				<div class="row">
				<div class="col-lg-12 aligncenter">
							<h3>Nuestros <span>Clientes</span></h3>
				</div>
				</div>
			</div>

				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="solidline">
							</div>
						</div>
					</div>
				</div>


				<div class="container">


				<div class="row">
				

					<div class="col-lg-2">
						
					</div>

					<div class="col-lg-2 col-xs-3 col-md-2 aligncenter client">
						<img alt="logo" src="img/clients/logo1.png" class="img-responsive" />
					</div>

					<div class="col-lg-2 col-xs-3 col-md-2 aligncenter client">
						<img alt="logo" src="img/clients/logo2.png" class="img-responsive" />
					</div>

					<div class="col-lg-2 col-xs-3 col-md-2 aligncenter client">
						<img alt="logo" src="img/clients/logo3.png"  class="img-responsive" />
					</div>

					<div class="col-lg-2 col-xs-3 col-md-2 aligncenter client">
						<img alt="logo" src="img/clients/logo4.png"  class="img-responsive" />
					</div>

					<div class="col-lg-2">
						
					</div>
	

				</div>

			
			</div>
			</section>


			<!-- divider -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="blankline">
						</div>
					</div>
				</div>
			</div>
			<!-- end divider -->

			<section id="contacto">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2>Contáctanos</h2>
							<!--<hr class="colorgraph">-->
							<div id="sendmessage">Tu mensaje ha sido enviado correctamente!</div>
							<div id="errormessage">El mensaje no se pudo enviar</div>
							<form method="post" action="" role="form" class="contactForm">
								<div class="form-group">
									<input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Porfavor ingresa más de cuatro carácteres" />
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Ingresa un mail válido" />
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="El largo del mensaje debe ser mayor a 8 caracteres" />
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Ingresa un mensaje" placeholder="Mensaje"></textarea>
									<div class="validation"></div>
								</div>

								<div class="text-center"><button  type="submit" class="btn btn-theme btn-block btn-md">Enviar mensaje</button></div>
							</form>
							<!--<hr class="colorgraph">-->

						</div>
					</div>
				</div>
			</section>

		</section>


<?php
include("layouts/final.php");
?>