<?php
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass']; 
                
    if ($_POST['ingresar'] && $usuario == 'jeragones' && $pass == 'pass') {                 
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Error!</p>';
    }
    if ($_POST['ingresar']) {
        if ($usuario != '' && $pass != '') {
            echo '<p>Your message has been sent!</p>'; 
        } else {
            echo '<p>You need to fill in all required fields!!</p>';
        }
    }
?>