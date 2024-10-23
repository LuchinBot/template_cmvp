<?php
$active = "";
include 'header.php'; ?>
<section class="section-about container-fluid" style="background-image: url('resources/img/example.jpg');">
	<div class="container">
		<div class="wrapper">
			<h1>Contáctenos <small style="font-weight: 300;">para más información</small></h1>
			<span>
				Volver <i class="fa fa-angle-right mx-1"></i>
				<a href="<?= $url; ?>">Inicio</a>
			</span>
		</div>
	</div>
</section>
<section class="section-form pt-4 container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form action="" class="form-contact">
					<div class="form-group">
						<label for="name">Nombre y apellidos <small class="text-muted">(*)</small></label>
						<input type="text" class="form-control" id="name">
					</div>
					<div class="d-flex">
						<div class="form-group col-6 pl-0 pr-2">
							<label for="email">Correo electrónico <small class="text-muted">(*)</small></label>
							<input type="email" class="form-control" id="email">
						</div>
						<div class="form-group col-6 px-0">
							<label for="email">Número de contacto <small class="text-muted">(*)</small></label>
							<input type="text" maxlength="12" class="form-control" id="email">
						</div>
					</div>
					<div class="form-group">
						<label for="subject">Asunto <small class="text-muted">(*)</small></label>
						<input type="text" class="form-control" id="subject">
					</div>
					<div class="form-group">
						<label for="message">Mensaje <small class="text-muted">(*)</small></label>
						<textarea class="form-control" id="message"></textarea>
					</div>
					<div class="form-group px-4">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
						<label class="form-check-label" for="defaultCheck1">
							Acepto la política de privacidad
						</label>
					</div>
					<div class="form-group d-flex justify-content-between align-items-center">
						<button class="btn bg-brown-opac text-white px-5 font-weight-bold">Enviar</button>
						<small class="text-danger mb-0">(*) Todos los campos son obligatorios</small>
					</div>
				</form>
			</div>
			<div class="col-md-4 w-100">
				<iframe class="iframe-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.9664403869983!2d-76.35863698957635!3d-6.496238293468762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ba0dcccfd2668d%3A0xc91cf9a74e7c54c5!2sColegio%20M%C3%A9dico%20Veterinario%20de%20San%20Mart%C3%ADn!5e1!3m2!1ses-419!2spe!4v1729704057835!5m2!1ses-419!2spe" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>