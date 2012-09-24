<?php
    
	$usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    session_start();
    if($_POST) {
    	require_once 'libs/ez_sql_core.php';
    	require_once 'libs/ez_sql_mysql1.php';

    	&conn = new ezSQL_mysql('root','','prueba1');

    	$usuario = &conn->get_row("SELECT nombre, apellido1 FROM usuarios WHERE usuario='" . $usuario ."' AND pass='" . $pass . "'");

    }
?>