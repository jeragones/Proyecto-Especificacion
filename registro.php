<?php
    session_start();
    include("conexionBD.php");

    $usuario = $_POST['usuarioReg'];
    $pass = $_POST['passReg'];
    $email = $_POST['emailReg'];
    $pais = $_POST['paisReg'];
    
    $select = "SELECT usuario FROM usuarios WHERE usuario = '".$usuario."'";
    $query = mysql_query($select,$conexion);

    while($row = mysql_fetch_array($query))
    {
        ?>
        <script type="text/javascript">
            alert("El usuario <?php echo $_POST['usuarioReg']; ?> ya ha sido registrado");
            history.back();
        </script>
        <?php
     }
     if($usuario!="" && $email!="" && $pais!="" && $pass!="") {
        mysql_query("INSERT INTO usuarios (usuario, correo, pais, pass, permiso) VALUES ('".$usuario."', '".$email."', '".$pais."', '".$pass."', 0)");
     } else {
        ?>
        <script type="text/javascript">
            alert("Existen campos vacios");
        </script>
        <?php
     }
    mysql_close($conexion);
    header('Location: index.php');
?>