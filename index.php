<?php include 'header.php'; ?>
<div class="bs-slider">
	<div id="sliderAutomatic" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="resources/img/slider1.jpg" class="d-block w-100" alt="" />
				<div class="carousel-caption">
					<h1>Hello, world1!</h1>
					<p>Some representative plceholder content for the first slide.</p>
					<a href="#institutional"><i class="fa fa-info-circle mt-1 mr-2"></i> Información
						Institucional</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="resources/img/slider2.jpg" class="d-block w-100" alt="" />
				<div class="carousel-caption">
					<h1>Hello, world2!</h1>
					<p>Some representative placeholder content for the first slide.</p>
					<a href="#institutional"><i class="fa fa-info-circle mt-1 mr-2"></i> Información
						Institucional</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="resources/img/slider1.jpg" class="d-block w-100" alt="" />
				<div class="carousel-caption">
					<h1>Hello, world3!</h1>
					<p>Some representative placeholder content for the first slide.</p>
					<a href="#institutional"><i class="fa fa-info-circle mt-1 mr-2"></i> Información
						Institucional</a>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-target="#sliderAutomatic" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-target="#sliderAutomatic" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</button>
	</div>
</div>
<section class="section-events container-fluid" id="events">
	<div class="events container">
		<div class="wrapper">
			<div class="col-md-6">
				<div class="box">
					<img src="resources/img/women.png" alt="" />
					<div class="context">
						<h1>Cursos</h1>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quasi alias
							voluptatem vitae mollitia ullam optio exercitationem, quis facere ipsa quos
							doloremque. Sint rerum, reiciendis aliquam animi culpa tenetur necessitatibus.</p>
						<a href="<?= $url ?>courses">
							<i class="fa fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box">
					<img src="resources/img/man.png" alt="" />
					<div class="context">
						<h1>Eventos</h1>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quasi alias
							voluptatem vitae mollitia ullam optio exercitationem, quis facere ipsa quos
							doloremque. Sint rerum, reiciendis aliquam animi culpa tenetur necessitatibus.</p>
						<a href="<?= $url ?>events">
							<i class="fa fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-process container-fluid" id="process"
	style="background-image: url('resources/img/process.jpg')">
	<div class="process container">
		<div class="text-center mb-5">
			<h1 class="section-title text-white">Trámites</h1>
			<h6 class="section-subtitle">INFORMACIÓN DE REQUISITOS SOBRE LOS TRÁMITES</h6>
		</div>
		<div class="col">
			<div class="popup-gallery-ajax">
				<div class="owl-carousel owl-theme mb-0">
					<div class="featured-box featured-box-primary featured-box-effect-3">
						<div class="box-content">
							<span>
								<i class="fa fa-user"></i>
							</span>
							<h4 class="pt-4 text-brown font-weight-light">
								Nueva <br />
								<strong style="font-weight: 900">Colegiatura</strong>
							</h4>
							<p class="text-black font-weight-light">Proceso y requerimeintos para trámite de
								Colegiatura.</p>
							<a href=""><i class="fa fa-eye"></i></a>
						</div>
					</div>
					<div class="featured-box featured-box-primary featured-box-effect-3">
						<div class="box-content">
							<span>
								<i class="fa fa-user"></i>
							</span>
							<h4 class="pt-4 text-brown font-weight-light">
								Nueva <br />
								<strong style="font-weight: 900">Colegiatura</strong>
							</h4>
							<p class="text-black font-weight-light">Proceso y requerimeintos para trámite de
								Colegiatura.</p>
							<a href=""><i class="fa fa-eye"></i></a>
						</div>
					</div>
					<div class="featured-box featured-box-primary featured-box-effect-3">
						<div class="box-content">
							<span>
								<i class="fa fa-user"></i>
							</span>
							<h4 class="pt-4 text-brown font-weight-light">
								Nueva <br />
								<strong style="font-weight: 900">Colegiatura</strong>
							</h4>
							<p class="text-black font-weight-light">Proceso y requerimeintos para trámite de
								Colegiatura.</p>
							<a href=""><i class="fa fa-eye"></i></a>
						</div>
					</div>
					<div class="featured-box featured-box-primary featured-box-effect-3">
						<div class="box-content">
							<span>
								<i class="fa fa-user"></i>
							</span>
							<h4 class="pt-4 text-brown font-weight-light">
								Nueva <br />
								<strong style="font-weight: 900">Colegiatura</strong>
							</h4>
							<p class="text-black font-weight-light">Proceso y requerimeintos para trámite de
								Colegiatura.</p>
							<a href=""><i class="fa fa-eye"></i></a>
						</div>
					</div>
					<div class="featured-box featured-box-primary featured-box-effect-3">
						<div class="box-content">
							<span>
								<i class="fa fa-user"></i>
							</span>
							<h4 class="pt-4 text-brown font-weight-light">
								Nueva <br />
								<strong style="font-weight: 900">Colegiatura</strong>
							</h4>
							<p class="text-black font-weight-light">Proceso y requerimeintos para trámite de
								Colegiatura.</p>
							<a href=""><i class="fa fa-eye"></i></a>
						</div>
					</div>
					<!-- Repite para cada elemento -->
				</div>
			</div>
			<div class="more-divider">
			<a href="<?= $url ?>services" class="bg-white text-brown">Ver más <i class="fa fa-arrow-right ml-2"></i></a>
		</div>
		</div>
	</div>
</section>
<section class="section-services container-fluid" id="services">
	<div class="services container">
		<div class="text-center mb-5">
			<h1 class="section-title text-brown">Servicios</h1>
			<h6 class="section-subtitle">NUESTROS SERVICIOS A SU DISPOSICIÓN</h6>
		</div>
		<div class="wrapper">
			<div class="stack">
				<div class="icon">
					<i class="fa fa-user"></i>
				</div>
				<div class="text">
					<a href="">Asociaciones</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis egestas, metus sit amet
						scelerisque euismod, nunc nunc ligula.</p>
				</div>
			</div>
			<div class="stack">
				<div class="icon">
					<i class="fa fa-user"></i>
				</div>
				<div class="text">
					<a href="">Asociaciones</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis egestas, metus sit amet
						scelerisque euismod, nunc nunc ligula.</p>
				</div>
			</div>
			<div class="stack">
				<div class="icon">
					<i class="fa fa-user"></i>
				</div>
				<div class="text">
					<a href="">Asociaciones</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis egestas, metus sit amet
						scelerisque euismod, nunc nunc ligula.</p>
				</div>
			</div>
		</div>
		<div class="more-divider">
			<a href="<?= $url ?>services">Ver más <i class="fa fa-arrow-right ml-2"></i></a>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>