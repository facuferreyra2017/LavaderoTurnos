<?php
	
	include 'conexion_be.php';

	$nombre_completo = $_POST['nombre_completo'];
	$correo = $_POST['correo'];
	$datos = $_POST['datos'];
	$tiempo = $_POST['tiempo'];

	$query = "INSERT INTO usuarios(nombre_completo, correo, datos, tiempo)
			VALUES('$nombre_completo','$correo', '$datos', '$tiempo')";

	$ejecutar = mysqli_query($conexion, $query);

	if($ejecutar){
		echo '
			<script>
			alert("Usuario almacenado exitosamente");
			window.location = "../index.php";
			</script>
		';
	}else{
		echo'
		<script>
		alert("Intentalo de nuevo,Usuario no Registrado");
		window.location = "../index.php";
		</script>
		';
	}


?>