<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Examen LMSI 3ª Evaluación</title>
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap-5.0.1-dist/css/bootstrap.min.css">

<style>
	/* pon aquí tus estilos propios si los necesitas */
	#l-sexo, #l-jornada, #l-dep {
		margin-right: 15px;
	}

	#error {
		display: none;
	}
	.container {
		padding-top: 50px;
	}
	body {
		background-image: url("img/fondo.jpg");
	}
	.col {
		background-color: rgb(186,213,242);
		padding: 50px 20px;
	}
</style>
</head>
<body>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col col-md-8 col-lg-6">

			<h3 class="text-center">Formulario</h3>

			<div id="error" class="alert alert-danger" role="alert" ></div> 

			<form name="formulario1" action="registro.php" method="post">
				<div class="form-group">
					<label  id="l-nombre" for="nombre">Nombre:</label>
					<input id="nombre" type="text" name="nombre" value="" class="form-control">
					<div class="invalid-feedback">Completa tu nombre</div>
				</div>
				<div class="form-group">
					<label  id="l-clave1" for="clave1">Contraseña:</label>
					<input id="clave1" type="password" name="clave1" value="" class="form-control">
					<div class="invalid-feedback">Contraseña mínimo 8 caracteres</div>
				</div>
				<div class="form-group">
					<label  id="l-clave2" for="clave2">Repite Contraseña:</label>
					<input id="clave2" type="password" name="clave2" value="" class="form-control">
					<div class="invalid-feedback">Contraseña mínimo 8 caracteres</div>
				</div>


				<div class="form-group">
					<div class="form-check form-check">
						<input class="form-check-input" id="terminos" type="checkbox" name="terminos" value="SI">
						<label id="l-terminos" for="terminos">Aceptar términos</label>
						<div class="invalid-feedback">Debe aceptar los términos para registrarse</div>
					</div>	
				</div>

				<div class="form-group">
					<label  id="l-comentario" for="comentario">Comentario:</label>
					<textarea class="form-control" id="comentario" name="comentario" rows="2" cols="25"></textarea>
					<div class="invalid-feedback">Indica otros deportes</div>

				</div>

				<input class="btn btn-primary mt-3" type="submit" name="enviar" value="Enviar registro">
			</form>
		</div>
	</div>
</div>


</body>
</html> 