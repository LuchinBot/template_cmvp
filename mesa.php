<?php
$active = "process";
include 'header.php'; ?>
<section class="section-about container-fluid" style="background-image: url('resources/img/example.jpg');">
	<div class="container">
		<div class="wrapper">
			<h1>Mesa<small style="font-weight: 300;"> de Partes</small></h1>
			<span>
				Volver <i class="fa fa-angle-right mx-1"></i>
				<a href="<?= $url; ?>">Inicio</a>
			</span>
		</div>
	</div>
</section>
<section class="section-mesa bg-opac pt-3 container-fluid">
	<div class="container d-flex">
		<div class="section-info active-info" id="si1" >
			<p class="m-0"><i class="fa-solid fa-info-circle mr-2"></i>Información</p>
		</div>
		<div class="section-info" id="si2">
			<p class="m-0"><i class="fa-solid fa-info-circle mr-2"></i>Realizar trámite</p>
		</div>
		<div class="section-info" id="si3">
			<p class="m-0"><i class="fa-solid fa-info-circle mr-2"></i>Consultar trámite</p>
		</div>
	</div>
	<div class="container mesa-wrapper my-3">
		<div class="collapse show" data-parent="si1">
			<div class="bg-white rounded p-3">
				<p>
					Ponemos a disposición de nuestros colegiados, empresas y público en general, nuestra plataforma virtual, con la finalidad de facilitar la presentación y recepción de documentos de manera virtual.

					La plataforma virtual implementa un formulario para el registro de información y carga de archivos digital de manera obligatoria como requisitos para poder admitir a trámite su registro. Tenga en cuenta que usted, será el responsable directo del contenido y registro de información, así mismo de los documentos que remita adjunto al presente formulario.

					<br> <br> <strong>Consideraciones a tener en cuenta:

					</strong>
				<ul>
					<li>La carga de archivos debe ser digital.</li>
					<li>La carga de archivos debe ser digital.</li>
					<li>La carga de archivos debe ser digital.</li>
					<li>La carga de archivos debe ser digital.</li>
					<li>La carga de archivos debe ser digital.</li>
					<li>La carga de archivos debe ser digital.</li>
					<li>La carga de archivos debe ser digital.</li>
					<li>La carga de archivos debe ser digital.</li>
					<li>La carga de archivos debe ser digital.</li>
				</ul>
				</p>
			</div>
		</div>
		<div class="collapse" data-parent="si2">
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
		<div class="collapse w-100" data-parent="si3">
			<form action="" class="form-contact d-flex w-100">
				<div class="form-group d-flex col-9">
					<label for="name" class="w-100 mt-2">Código: CIP-CDP-xxxxxxx-xxxx <small class="text-muted">(*)</small></label>
					<input type="text" class="form-control" id="name">
				</div>
				<div class="form-group col-3 d-flex justify-content-between align-items-center">
					<button class="btn bg-brown-opac text-white px-5 font-weight-bold">Consultar</button>
				</div>
			</form>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>