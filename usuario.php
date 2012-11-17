<?php
    session_start();
    include("conexionBD.php");
    if(isset($_SESSION['usuarios'])) {
    	?>
    	Hola <? = $_SESSION['usuarios'] ?> Ya has iniciado sesión <a href="logout.php">Cerrar sesión</a>
    	<?
    } else {
        <script type="text/javascript">

            function validar(user,pass) {
                <?php
                    $usuario = print("document.write(user)");
                    $pass = print("document.write(pass)"); 
                    $ingresar = $_POST['ingresar'];
                                
                    if ($_POST['ingresar']) {
                        if ($usuario != '' && $pass != '') {
                            if ($_POST['ingresar'] && $usuario == 'jeragones' // consulta a la BD
                                && $pass == 'pass' // consulta a la BD
                                ) {                 
                                echo '<p>Your message has been sent!</p>';
                                
                            } else {
                                echo '<p>Error!</p>';
                            }
                        } else {
                            echo '<p>You need to fill in all required fields!!</p>';
                        }
                    }
                ?>
            }
        </script>
    }
?>