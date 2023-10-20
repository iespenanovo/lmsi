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
	$edad=$_GET['edad']??"";
	$fecha=$_GET['fecha']??"";
	$sexo=$_GET['sexo']??"";
	$F=$_GET['F']??"";
	$B=$_GET['B']??"";
	$N=$_GET['N']??"";
	$prov=$_GET['prov']??"";
	$so=$_GET['so']??array();
	$referencia=$_GET['referencia']??"";

	echo "<p>Nombre: $nombre</p>";
	echo "<p>Contraseña: $clave</p>";
	echo "<p>Correo electrónico: $correo</p>";
	echo "<p>Edad: $edad</p>";
	echo "<p>Fecha: $fecha</p>";
	echo "<p>Sexo: $sexo</p>";
	echo "<p>Fútbol: $F</p>";
	echo "<p>Baloncesto: $B</p>";
	echo "<p>Natación: $N</p>";
	echo "<p>Provincia: $prov</p>";
	echo "<p>Sistemas operativos:";
	//var_dump($so);
	foreach ($so as $valor) {
		echo "$valor ";
	}
	echo "</p>";
	echo "<p>Referencia: $referencia</p>";

	?>

	<p><a href="10-formularios.html">VOLVER</a></p>

</body>
</html>