<?php
	session_start();
	include("conexionBD.php");
	if(isset($_POST['enviar'])) {
		$usuario = $_SESSION['usuario'];
		$mensaje = $_POST['mensaje'];
		if($mensaje!="") {
			
			$insert = "INSERT INTO chat (usuario,mensaje) VALUES ('".$usuario."','".$mensaje."')";	
			mysql_query($insert,$conexion);
		}
		header("Location: index.php");
	}
?>