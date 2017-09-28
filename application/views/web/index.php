<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body>

		<div class="encapsulador">
			<div class="contenido">
				<div class="container">
					<div class="row neutralizador-row contenido-principal">
						<div class="col-3">
						</div>
						<div class="col-6">
							<h2>Eres Nuevo en Twitter</h2>
							<h4>Registrate</h4>

							<hr>
							<input type="text" class="form-control" id="inputNombre" placeholder="Nombre Completo">
							<input type="email" class="form-control" id="inputCorreo" placeholder="Correo Electronico">
							<input type="password" class="form-control" id="inputContrasena" placeholder="Contraseña">

							<button id="btnRegistrar" class="btn btn-primary btn-lg">Registrate en Twitter</button>

							<div id="outputErrores"></div>
						</div>

					</div>
				</div>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

		<script type="text/javascript">
			var base_url = "<?php print base_url(); ?>";
		</script>
		<script src="<?php print base_url(); ?>assets/js/script.js"></script>
	</body>
</html>
