<?php
    $con = mysql_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    $usuario = $_POST['usuarioReg'];
    $pass = $_POST['passReg'];
    $email = $_POST['emailReg'];
    $pais = $_POST['paisReg'];
    mysql_select_db("usuarios", $con); 
    $query = mysql_query("SELECT usuario FROM usuarios WHERE usuario = '".$usuario."'");

    while($row = mysql_fetch_array($query))
    {
        ?>
        <script type="text/javascript">
            alert("El usuario <?php echo $_POST['usuarioReg']; ?> ya ha sido registrado");
            history.back();
        </script>
        <?php
    }  
    mysql_query("INSERT INTO usuarios (Usuario, Password, Email, Pais) VALUES ('".$usuario."', '".$pass."', '".$email."', '".$pais."')");
    mysql_close($con);

   
?>