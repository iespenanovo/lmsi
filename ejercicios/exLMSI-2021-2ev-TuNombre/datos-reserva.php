<!DOCTYPE html>
<html lang="gl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Datos de reserva</title>
	<style>
		#contenedor {
			width: 70%; 
			max-width: 400px;
			border: 1px solid blue;
			margin:60px auto;
			padding: 10px;
		}
	</style>
</head>
<body>
	<div id="contenedor">
		<h1>Datos recibidos de reserva hotel</h1>


		<?php
		$nombre = $_GET["nombre"] ?? "";
		$tipohab = $_GET["tipohab"] ?? "";
		$extras = $_GET["extras"] ?? array();
		$fpago = $_GET["fpago"] ?? "";
		$coment = $_GET["coment"] ?? "";

		echo "<p>Nombre: $nombre</p>";
		echo "<p>Tipo habitación: $tipohab</p>";
		echo "<p>Extras:";
		foreach ($extras as $value) {
			echo "<br>&nbsp;&nbsp;&nbsp; $value";
		}
		echo "</p>";

		echo "<p>Forma de pago: $fpago</p>";
		echo "<p>Comentario: $coment</p>";

		?>	

		<p>
			<a href="ejer2.html">Volver</a>
		</p>

	</div>
	
</body>
</html>