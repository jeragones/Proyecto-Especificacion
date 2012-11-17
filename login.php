<?php
    session_start();
    include("conexionBD.php");
    if(isset($_POST['ingresar'])) {
    	$usuario = $_POST['usuario'];
    	$pass = $_POST['pass'];
    	$select = "SELECT usuario,permiso FROM usuarios WHERE usuario = '".$usuario."' AND pass = '".$pass."'";
    	
    	$query = mysql_query($select,$conexion);
    	$rows = mysql_num_rows($query);
    	if($row = mysql_fetch_array($query, $rows)) {
    		$_SESSION['usuario'] = $row['usuario'];
            if($row['permiso']==2) {
                header('Location: administrar.php');
            } else {
                header('Location: index.php');    
            }
    		
    	} else {
    		echo "no existe el usuario";
    		header('Refresh:2; index.php');
    	}
    } 
?>