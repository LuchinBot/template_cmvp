<?php include 'header.php'; ?>
<section class="section-about container-fluid" style="background-image: url('resources/img/example.jpg');">
	<div class="container">
		<div class="wrapper">
			<h1>Trámite <small style="font-weight: 300;">Nueva Colegiatura</small></h1>
			<span>
				Volver <i class="fa fa-angle-right mx-1"></i>
				<a href="<?= $url; ?>">Trámites</a>
			</span>
		</div>
	</div>
</section>
<section class="section-process-select">
	<div class="container p-0">
		<div class="col p-0 d-flex">
			<div class="col-md-9">
				<h2 class="title">REQUISITOS</h2>
				<div class="context">
					<table class="table">
						<thead>
							<tr>
								<th>Descripción</th>
								<th class="text-center"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Acta de Nacimiento</td>
								<td class="text-center">
									<a href="resources/img/example.jpg" target="_blank">
										<i class="fa fa-file-pdf"></i>
									</a>
								</td>
							</tr>
							<tr>
								<td>Acta de Nacimiento</td>
								<td class="text-center">
									<i class="fa-solid fa-ban text-muted"></i>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-3">
				<h2 class="title">COSTO</h2>
				<div class="context">
					<h6 class="font-weight-bold mb-0">5% de la UIT</h6>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>