<?php
$url = "http://template_cmvp.test/";
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="resources/img/logo.png">
	<title>CMVP Tarapoto</title>
	<link rel="stylesheet" href="resources/css/app.css" />
	<link rel="stylesheet" href="resources/css/default.css" />
	<link rel="stylesheet" href="resources/css/header.css" />
	<link rel="stylesheet" href="resources/css/slider.css" />
	<link rel="stylesheet" href="resources/css/services.css" />
	<link rel="stylesheet" href="resources/css/institutional.css" />
	<link rel="stylesheet" href="resources/css/process.css" />
	<link rel="stylesheet" href="resources/css/events.css" />
	<link rel="stylesheet" href="resources/css/news.css" />
	<link rel="stylesheet" href="resources/css/contact.css" />
	<!--Pages-->
	<link rel="stylesheet" href="resources/css/about.css" />
	<link rel="stylesheet" href="resources/css/courses.css" />

	<!--Plugins-->
	<link rel="stylesheet" href="resources/plugins/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="resources/plugins/fontawesome/css/fontawesome.min.css" />
	<link rel="stylesheet" href="resources/plugins/fontawesome/css/brands.min.css" />
	<link rel="stylesheet" href="resources/plugins/fontawesome/css/solid.min.css" />
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400"
		rel="stylesheet" type="text/css" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
	<!--Owl Carousel-->

	<link rel="stylesheet" href="resources/plugins/owlcarousel/dist/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="resources/plugins/owlcarousel/dist/assets/owl.theme.default.min.css" />
</head>

<body>
	<div class="main" id="home">
		<div class="header">
			<nav class="navbar">
				<a class="navbar-brand" href="<?= $url; ?>">
					<img src="resources/img/logo_white.png" alt="" />
				</a>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= $url; ?>">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= $url; ?>process">Trámite</a>
					</li>
					<li class="nav-item menu-item">
						<a class="nav-link" href="<?= $url; ?>services">Servicios</a>
					</li>
					<li class="nav-item menu-item">
						<p class="nav-link m-0">
							Institucional <i class="fa fa-caret-down ml-2"></i>
						</p>
						<ul class="submenu border">
							<li class="nav-item">
								<a class="nav-link" href="<?= $url; ?>about">Sobre nosotros</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= $url; ?>docs">Documentos normativos</a>
							</li>
						</ul>
					</li>
					<li class="nav-item menu-item">
						<a class="nav-link" href="<?= $url; ?>news">Noticias</a>
					</li>
					<li class="nav-item intranet">
						<a class="nav-link" href="">Acceso Colegiado <i class="fa fa-user ml-2"></i></a>
					</li>
				</ul>
			</nav>
		</div>