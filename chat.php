<?php
	function obtenerMensaje() {
		$query = "SELECT contenido, usuario FROM mensaje";
		$run = mysql_query($query);

		while($mensaje = mysql_fetch_assoc($run)) {
			$mensajes[] = array('Usuario'=>$mensajes['usuario'], 'Mensaje'=>$mensajes['contenido']);
		}

		return mensajes;
	}

	function enviarMensage($persona, $mensaje) {
		if(!empty($mensaje) && !empty($persona)) {
			$persona = mysql_real_escape_string($persona);
			$mensaje = mysql_real_escape_string($mensaje);

			$query = "INSERT INTO mensaje VALUES(null, $mensaje, $persona)";

			if($run = mysql_query($query)) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
?>