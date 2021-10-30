<?php
	
	require 'conexion.php';
	
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$estado_civil = $_POST['estado_civil'];
	$hermanos = isset($_POST['hermanos']) ? $_POST['hermanos'] : 0;
	$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;
	
	$arrayintereses = null;
	
	$num_array = count($intereses);
	$contador = 0;
	
	if($num_array>0){
		foreach ($intereses as $key => $value) {
			if ($contador != $num_array-1)
			$arrayintereses .= $value.' ';
			else
			$arrayintereses .= $value;
			$contador++;
		}
	}
	
	$sql = "INSERT INTO universitarios (nombre, correo, telefono, estado_civil, hermanos, intereses) VALUES ('$nombre', '$correo', '$telefono', '$estado_civil', '$hermanos', '$arrayintereses')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>