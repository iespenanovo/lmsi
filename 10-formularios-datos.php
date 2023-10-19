<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Datos recibidos del formulario</title>
</head>
<body>
	<h1>Datos recibidos del formulario 10-formularios.html :</h1>

	<?php //aquí va código PHP, para generación de HTML dinámico:

	$nombre=$_GET['nombre']??"";
	$clave=$_GET['clave']??"";
	$correo=$_GET['correo']??"";


	echo "<p>Nombre: $nombre</p>";
	echo "<p>Contraseña: $clave</p>";
	echo "<p>Correo electrónico: $correo</p>";


	?>

</body>
</html>