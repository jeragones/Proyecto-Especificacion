<?php
	$db_host = 'localhost'	;
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'prueba1';

	if($conexion = mysql_connect($db_host,$db_user,$db_pass)) {
		echo 'conectado a la base de datos <br/>';

		if($database = mysql_select_db($db_name,$conexion)) {
			echo 'base de datos seleccionada <br/>';	
		} else {
			echo 'error al seleccionar la BD <br/>';	
		}
	} else {
		echo 'imposible conetar a sql server <br/>';	
	}

?>