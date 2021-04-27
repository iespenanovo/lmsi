<!-- no tocar -->
<div id="menu" class="bg-info">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-2">
				<a href="index.php">
					<img src="img/logo.png" class="img-fluid" width="200">
				</a>
			</div>
			<div class="col-md-5 col-sm-8">
				<div class="btn-group w-100" role="group" aria-label="...">
					<a href="index.php" class="btn btn-light">Inicio</a>
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalCursos">
						Cursos
					</a>
				</div>
			</div>

			<div class="col-md-5 offset-md-0 col-sm-8 offset-sm-4 ">
				<div class="btn-group w-100" role="group" aria-label="...">
					<a href="contacto.php" class="btn btn-warning" >Contacto</a>
					<div class="btn-group" role="group" >
						<button id="btn1" type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							Categorías
							<!-- <span class="caret"></span> -->
						</button>
						<ul class="dropdown-menu" aria-labelledby="btn1">
							<li><a class="dropdown-item" href="#">Categoría A</a></li>
							<li><a class="dropdown-item" href="#">Categoría B</a></li>
							<!-- <li class="divider"></li> -->
							<li><a class="dropdown-item" href="#">Categoría C</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<?php include("modal-cursos.php") ?>
