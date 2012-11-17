<?php
	session_start();
    include("conexionBD.php");
	if(isset($_SESSION['usuario'])) {
		$select = "SELECT usuario, mensaje FROM chat ORDER BY id DESC";
		$query = mysql_query($select,$conexion);
		$rows = mysql_num_rows($query);
		if($rows>0) {
			while($row = mysql_fetch_array($query)) {
				if(isset($_SESSION['usuario']) && isset($_SESSION['permiso']) == 2) {
					?>
						<a href="borrar.php"><font color="red">Borrar</font></a>
					<?
				} else {
					?>
						&nbsp;
					<?php		
				}

				$usuario = $row['usuario'];
				$mensaje = $row['mensaje'];
				?>
					<strong><?php echo $usuario.": "; ?></strong> <?php echo $mensaje ?> <br><br>
				<?php
			}
		} else {
			?>
				&nbsp;
			<?php
		}
	}
	header('refresh: 2; mensajes.php');
?>