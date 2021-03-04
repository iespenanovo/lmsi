<!-- no tocar -->
<div id="menu" >
	<div id="menu-cont">
			<div >
				<a href="index.php">
					<img src="img/logo.png">
				</a>
			</div>

			<div >
				<div class="btn-group btn-group-justified" role="group" aria-label="...">
					<a href="index.php" class="btn btn-info">Inicio</a>
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalCursos">
						Cursos
					</a>
				</div>
			</div>
			
			<div class="oculto"></div>

			<div>
				<div class="btn-group btn-group-justified" role="group" aria-label="...">
					<a href="contacto.php" class="btn btn-warning">Contacto</a>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							Categorías
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Categoría A</a></li>
							<li><a href="#">Categoría B</a></li>
							<li class="divider"></li>
							<li><a href="#">Categoría C</a></li>
						</ul>
					</div>

				</div>
			</div>
	</div>
</div>
<?php include("modal-cursos.php") ?>
