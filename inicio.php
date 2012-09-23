<?php
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass']; 
    $ingresar = $_POST['ingresar'];
                
    if ($_POST['ingresar']) {
        if ($usuario != '' && $pass != '') {
            if ($_POST['ingresar'] && $usuario == 'jeragones' && $pass == 'pass') {                 
                echo '<p>Your message has been sent!</p>';
            } else {
                echo '<p>Error!</p>';
            }
        } else {
            echo '<p>You need to fill in all required fields!!</p>';
        }
    }
?>