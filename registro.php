<?php
    session_start();
    include("conexionBD.php");
    if(isset($_POST['ingresar'])) {
    	$usuario = $_POST['usuario'];
    	$pass = $_POST['pass'];
        $email = $_POST['email'];
        $pais = $_POST['pais'];
    	$select = "SELECT usuario FROM usuarios WHERE usuario = '".$usuario."'";
    	$query = mysql_query($select,$conexion);
        if ($query == $usuario) {
            ?>
            <script type="text/javascript">
                $('#usuarioReg')val("");
                alert("Este nombre de usuario ya ha sido registrado");
            </script>
            <?               
        } else {
            mysql_query("INSERT INTO usuarios VALUES ('"$usuario"', '"$pass"', '"$email"', '"$pais"')");
            mysql_close($conexion);
        }
    }
?>