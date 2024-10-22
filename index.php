<?php include 'header.php'; ?>
<div class="bs-slider">
	<div id="sliderAutomatic" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="resources/img/slider1.jpg" class="d-block w-100" alt="" />
				<div class="carousel-caption">
					<div class="context">
						<h1>JUNTA DIRECTIVA PERDIODO 2022 – 2024 </h1>
						<p>Ceremonia de Juramentación Virtual Periodo 2022 – 2024</p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="resources/img/slider2.jpg" class="d-block w-100" alt="" />
				<div class="carousel-caption">
					<div class="context">
						<h1>Juramentación de Junta Directiva</h1>
						<p>Ceremonia de Juramentación de Junta Directiva 2022 -2024 del Consejo Departamental de San Martín</p>

					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="resources/img/news.jpg" class="d-block w-100" alt="" />
				<div class="carousel-caption">
					<div class="context">
						<h1>DESFILE CÍVICO POR DEL DÍA DEL MVP – 2024</h1>
						<p>Ceremonia del Desfile Cívico en conmemoración del Día del Médico Veterinario del Perú - 2024</p>
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-target="#sliderAutomatic" data-slide="prev">
			<span class="base-icon">
				<span class="carousel-control-prev-icon icon" aria-hidden="true"></span>
			</span>
			<span class="sr-only">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-target="#sliderAutomatic" data-slide="next">
			<span class="base-icon">
				<span class="carousel-control-next-icon icon" aria-hidden="true"></span>
			</span>
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
						<p>Explora nuestra variada oferta de cursos diseñados para profesionales y estudiantes teresados en actualizar y profundizar sus conocimientos en diversas áreas.</p>
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
						<p>Mantente al día con los próximos eventos dedicados a la comunidad veterinaria. Participa en seminarios, conferencias y talleres diseñados para expandir tu red profesional.</p>
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
			<div class="all-process">
				<div class="col-md-3">
					<div class="featured-box featured-box-primary featured-box-effect-3">
						<div class="box-content">
							<span>
								<i class="fa-solid fa-id-badge"></i>
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
				</div>
				<div class="col-md-3 mb-2">
					<div class="featured-box featured-box-primary featured-box-effect-3">
						<div class="box-content">
							<span>
								<i class="fa-solid fa-certificate"></i>
							</span>
							<h4 class="pt-4 text-brown font-weight-light">
								Certificado <br />
								<strong style="font-weight: 900">de Habilidad</strong>
							</h4>
							<p class="text-black font-weight-light">Acredita la aptitud para ejercer la profesión.</p>
							<a href=""><i class="fa fa-eye"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-2">
					<div class="featured-box featured-box-primary featured-box-effect-3">
						<div class="box-content">
							<span>
								<i class="fa-solid fa-id-card"></i>
							</span>
							<h4 class="pt-4 text-brown font-weight-light">
								Duplicado <br />
								<strong style="font-weight: 900">de Carnet</strong>
							</h4>
							<p class="text-black font-weight-light">Reemisión del carnet oficial por pérdida o deterioro.</p>
							<a href=""><i class="fa fa-eye"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-2">
					<div class="featured-box featured-box-primary featured-box-effect-3">
						<div class="box-content">
							<span>
								<i class="fa-solid fa-money-bill-transfer"></i>
							</span>
							<h4 class="pt-4 text-brown font-weight-light">
								Traslado <br />
								<strong style="font-weight: 900">de Colegiado</strong>
							</h4>
							<p class="text-black font-weight-light">Cambio de inscripción entre sedes departamentales.</p>
							<a href=""><i class="fa fa-eye"></i></a>
						</div>
					</div>
				</div>
				<!-- Repite para cada elemento -->
			</div>
			<div class="more-divider">
				<a href="<?= $url ?>process" class="bg-white text-brown">Ver más <i class="fa fa-arrow-right ml-2"></i></a>
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
					<i class="fa-solid fa-book-open"></i>
				</div>
				<div class="text">
					<a href="">Mesa de partes Virtual</a>
					<p>Permite a los colegiados y ciudadanos en general realizar trámites administrativos de manera completamente en línea.</p>
				</div>
			</div>
			<div class="stack">
				<div class="icon">
					<i class="fa-solid fa-magnifying-glass"></i>
				</div>
				<div class="text">
					<a href="">Búsqueda colegiados</a>
					<p>Este servicio permite a los usuarios consultar el registro oficial de los médicos veterinarios colegiados en nuestra institución.</p>
				</div>
			</div>
			<div class="stack">
				<div class="icon">
					<i class="fa-solid fa-magnifying-glass"></i>
				</div>
				<div class="text">
					<a href="">Búsqueda Certificados</a>
					<p>El sistema de Búsqueda de Certificados permite verificar la validez de los certificados emitidos por el Colegio, como los de “Salud de Menores”, etc.</p>
				</div>
			</div>
		</div>
		<div class="more-divider">
			<a href="<?= $url ?>services">Ver más <i class="fa fa-arrow-right ml-2"></i></a>
		</div>
	</div>
</section>
<section class="section-news overlay container-fluid" id="news"
	style="background-image: url('resources/img/news.jpg')">
	<div class="news container">
		<div class="text-center mb-5">
			<h1 class="section-title text-white">Comunicados y Pronunciamientos</h1>
			<h6 class="section-subtitle">Conoce los comunicados y pronunciamientos del CMVDSM</h6>
		</div>
		<div class="wrapper">
			<div class="col-md-6">
				<div class="box">
					<div class="image">
						<img src="resources/img/example.jpg" alt="">
					</div>
					<div class="context">
						<div class="float-date">
							<span>15 Jun 2024</span>
						</div>
						<h3><a href="comun">Comunicado del día de la semana hola hola hola hola hola vvvhola holahola </a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda repudiandae modi,
							eius illum aspernatur quo nemo alias dolore ducimus! Amet corporis itaque assumenda
							minus reprehenderit sint fugiat error numquam nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<span>
							<a href="comun">
								<i class="fa fa-plus mr-2"></i>
								<small></small>
								<small> Leer más</small>
							</a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box">
					<div class="image">
						<img src="resources/img/example.jpg" alt="">
					</div>
					<div class="context">
						<div class="float-date">
							<span>15 Jun 2024</span>
						</div>
						<h3><a href="pronun">Pronunciamiento del día de hoy</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda repudiandae modi,
							eius illum aspernatur quo nemo alias dolore ducimus! Amet corporis itaque assumenda
							minus reprehenderit sint fugiat error numquam nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<span>
							<a href="pronun">
								<i class="fa fa-plus mr-2"></i>
								<small> Leer más</small>
							</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>