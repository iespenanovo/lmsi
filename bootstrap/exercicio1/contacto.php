<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<?php include("css.php") ?>
</head>
<body>
	<?php include("menu.php") ?>  

	<!-- Aquí debes crear el contenido de la página de contacto: -->

	<div id="contacto" class="bg-primary">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Contacto</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.0089154326497!2d-7.6853280841539195!3d43.29313497913527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd31e6bcba5bf0db%3A0xff377d1433ad89d6!2sIES%20Lois%20Pe%C3%B1a%20Novo!5e0!3m2!1ses!2ses!4v1619448962374!5m2!1ses!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="col-md-6">
					<form action="">
						<div class="mb-2">
							<label for="nome" class="form-label">Nombre:</label>
							<input type="text" class="form-control" id="nome" name="nome">
						</div>
						<div class="mb-2">
							<label for="email" class="form-label">Correo electrónico:</label>
							<input id="email" type="text" class="form-control" name="email">
						</div>	
						<div class="mb-2">
							<label for="tfno" class="form-label">Teléfono:</label>
							<input type="text" class="form-control" id="tfno" name="tfno">
						</div>
						<div class="mb-2">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="oferta" name="oferta">
								<label for="oferta" class="form-check-label">Deseo que me envíen ofertas de cursos</label>
							</div>
						</div>
						<div class="mb-2">
							<label for="coment" class="form-label">Comentario:</label>
							<textarea name="coment" id="coment" rows="4" class="form-control"></textarea>
						</div>
						<div class="mb-2">
							<input type="submit" class="btn btn-light" value="Enviar" >
						</div>


					</form>
				</div>
			</div>
		</div>
		
	</div>	




	<!-- final de la zona  -->

	<?php include("pie.php") ?>  

</body>
</html>
