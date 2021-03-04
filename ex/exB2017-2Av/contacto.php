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

	<div id="contacto">
		

		<div id="contacto-cont">
			<h1>Contacto</h1>
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.008915432643!2d-7.68532808398138!3d43.293134979135424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd31e6bcba5bf0db%3A0xff377d1433ad89d6!2sIES%20Lois%20Pe%C3%B1a%20Novo!5e0!3m2!1ses!2ses!4v1584988922764!5m2!1ses!2ses" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>

			<div>
				<form action="">
					<div class="campo">
						<label for="nombre">Nombre</label>
						<input id="nombre" type="text" name="nombre">
					</div>

					<div class="campo">
						<label for="correo">Correo electrónico</label>
						<input id="correo" type="email" name="correo">
					</div>

					<div class="campo">
						<label for="telefono">Teléfono</label>
						<input id="telefono" type="text" name="telefono">
					</div>

					<div class="campo">
						<input id="ofertas" type="checkbox" name="ofertas">
						<label for="ofertas" class="enlinea">Deseo que me envíen ofertas de cursos</label>
					</div>

					<div class="campo">
						<label for="comentario">Comentario</label>
						<textarea name="comentario" id="comentario" cols="30" rows="2"></textarea>
					</div>

					<div class="campo">
						<input type="submit" value="Enviar">
					</div>
					
				</form>
			</div>

		</div>
		
	</div>

	<!-- final de la zona  -->

	<?php include("pie.php") ?>  

</body>
</html>
