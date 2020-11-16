<!DOCTYPE html>
<html lang="gl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recibe datos</title>
</head>
<body>
	<h1>Recibe datos de 09-formularios.php</h1>

<?php
	$nome = $_GET["nome"] ?? "";
	$clave = $_GET["clave"] ?? "";
	$idade = $_GET["idade"] ?? "";
	$sexo = $_GET["sexo"] ?? "";
	$dep = $_GET["dep"] ?? array();
	$prov = $_GET["prov"] ?? "";
	$so = $_GET["so"] ?? array();

	echo "<p>Nome: $nome</p>";
	echo "<p>Clave: $clave</p>";
	echo "<p>Idade: $idade</p>";
	echo "<p>Sexo: $sexo</p>";
	echo "<p>Deportes:";
	foreach ($dep as $value) {
		echo "$value ";
	}
	echo "</p>";
	echo "<p>Provincia: $prov</p>";

	echo "<p>Sistemas Operativos:";
	foreach ($so as $value) {
		echo "$value ";
	}
	echo "</p>";

?>	

	<p>
		<a href="09-formularios.html">Volver</a>
	</p>
	
</body>
</html>