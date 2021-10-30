<?php
	
	require 'conexion.php';
	
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	
	$contador = 0;

	
	$sql = "INSERT INTO Users (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link rel="stylesheet" href="css/styles.css">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="rowMio3">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3 class="h3Mio2">REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3 class="h3Mio2">ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>