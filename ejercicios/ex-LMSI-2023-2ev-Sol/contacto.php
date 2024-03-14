<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contacto</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- hoja personal de css -->
    <link href="css/mis-estilos.css" rel="stylesheet">
</head>
<body>
	<!-- incluimos menú -->
	<?php include("menu.php") ?>  

	
	<div id="contacto">
		<!-- Aquí debes crear el contenido de la página de contacto: -->
		<div id="contacto-cont">
			<h1>Contacto</h1>
			<div>
				<img src="img/mapa.jpg" alt="mapa">
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

		<!-- final de la zona  -->
	</div>


	<!-- incluimos pie de página -->
	<?php include("pie.php") ?>  

</body>
</html>
