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
	$sexo = $_GET["sexo"] ?? "";

	echo "<p>Nome: $nome</p>";
	echo "<p>Clave: $clave</p>";
	echo "<p>Sexo: $sexo</p>";

?>	

	<p>
		<a href="09-formularios.html">Volver</a>
	</p>
	
</body>
</html>