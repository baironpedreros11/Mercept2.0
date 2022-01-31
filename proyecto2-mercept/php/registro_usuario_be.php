<?php 

	include 'conexion_be.php';

	$Nombre_completo = $_POST['Nombre_completo'];
	$Correo = $_POST['Correo'];
	$Usuario = $_POST['Usuario'];
	$Contrasena = $_POST['Contrasena'];

	$query = "INSERT INTO usuarios(Nombre_completo, Correo, Usuario, Contrasena)
		VALUES('$Nombre_completo', '$Correo', 'Usuario', 'Contrasena')";

		$ejecutar = mysqli_query($conexion, $query);


?>