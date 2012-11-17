<?php
	session_start();
    include("conexionBD.php");
	if(isset($_SESSION['usuario'])) {
		$select = "SELECT usuario, mensaje FROM chat ORDER BY id DESC";
		$query = mysql_query($select,$conexion);
		$rows = mysql_num_rows($query);
		if($rows>0) {
			while($row = mysql_fetch_array($query)) {
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
?>