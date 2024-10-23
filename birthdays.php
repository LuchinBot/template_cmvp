<?php include 'header.php'; ?>
<section class="section-about container-fluid" style="background-image: url('resources/img/example.jpg');">
	<div class="container">
		<div class="wrapper">
			<h1>Cumpleaños <small style="font-weight: 300;"> hoy día</small></h1>
			<span>
				Volver <i class="fa fa-angle-right mx-1"></i>
				<a href="<?= $url; ?>">Inicio</a>
			</span>
		</div>
	</div>
</section>
<section class="container-birthdays container-fluid">
	<div class="container">
		<div class="all-birthdays">
			<div class="col-md-4">
				<div class="box">
					<div class="img-person" style="background-image: url('resources/img/luis.png') ;"></div>
					<div class="text">
						<h3>Luis José Hidalgo Rodríguez</h3>
						<p class="m-0">CMVP: 5724</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<div class="img-person" style="background-image: url('resources/img/hugo.png') ;"></div>
					<div class="text">
						<h3>Hugo Sanchez Cárdenas</h3>
						<p class="m-0">CMVP: 3333</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<div class="img-person" style="background-image: url('resources/img/gretal.png') ;"></div>
					<div class="text">
						<h3>Gretell Mabel López del Aguila</h3>
						<p class="m-0">CMVP: 9900</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php'; ?>