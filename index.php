<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11-strict.dtd">
<html lang="en">
<head>  
    <!--<meta charset ="UTF-8">-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="Keywords" content="Futbol,Costa Rica,Televisión,Radio,Música,Deportes,Partidos,Juegos" >
    <meta name="Description" content="descripción de la página" > <!-- FALTA -->
    <meta name="Robots" content="all" >
    <title id="title">Doutico</title>
    <link rel="shortcut icon" href="crflag.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
    <script>!window.jQuery && document.write(unescape('%3Cscript src="jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
    <script type="text/javascript" src="contact.js"></script>
    <script type="text/javascript" src="login.js"></script>

    <!--<script type="text/javascript">

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

        function contactar(nombre,correo,mensaje) {
            
        }

    </script>-->
</head>  
<body>  
    <inicio class="inicio">
        <ul>
            <li><input type="button" value="Inicio" class="btnInicio"/></li>
            <li><input id="contact" type="button" value="Contactar" class="btnInicio" data-type="zoomout"/></li>
            <li><input id="login" type="button" value="Sesión" class="btnInicio" data-type="zoomout"/></li>
            <li><input type="button" value="Registrarse" class="btnInicio"/></li>
        </ul>
    </inicio>
    <div class="main">
        <header class = "header">  
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="32" height="32">
                <param name="movie" value="DouticoHeader.swf" />
                <param name="quality" value="high" />
                <embed src="DouticoHeader.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="1100" height="110"></embed>
            </object>
        </header>  
        <nav class="navegacion">  
            <ul><li><a onclick="">Televisoras</a></li>
                <li><a onclick="">Radios</a></li>
                <li><a onclick="">Periodicos</a></li>
                <li><a onclick="">Deportes</a></li>
                <li><a onclick="">Herencia</a></li>
                <li><a onclick="">Pronostico</a></li>              
            </ul>
        </nav> 
        <div class="banner">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="32" height="32">
                <param name="movie" value="MangBruncBanner.swf" />
                <param name="quality" value="high" />
                <embed src="MangBruncBanner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="160" height="397"></embed>
            </object>
        </div>               
        <article>   
            <?
                session_start();
                include("conexionBD.php");
                if(isset($_SESSiON['usuario'])) {
                    ?>
                    <table with="300" height="500">
                        <form class="chat" method="POST" action="chat.php">
                            <tr>
                                <td><iframe class="mensajes" src="mensajes.php" name="chatFrame" width="250" height="400"></iframe></td>
                            </tr>
                            <tr>
                                <td><input class="txtMensaje" type="text" name="mensaje"/> 
                                    <button class="btnInicio" type="submit" name="enviar">Enviar</button></td>    
                            </tr>
                            <tr>
                                <? $usuario = $_SESSiON['usuario']; ?>
                                <td>Esta conectado como <strong><?php echo $usuario; ?></strong></td>
                            </tr>
                        </form>
                    </table>
                    <?
                } else {
                    ?>debes iniciar sesión para poder utilizar el chat<?
                }
            
            ?>  
        </article>  
        
        <footer>         
            <div class="copyRight">
                <p>Copyright © Doutico | doutico.com. All rights reserved | Design by Fabricio Salazar Espinoza, Jorge Rojas Aragon&eacutes, Harvey Sand&iacute S&aacutenchez, Marvin Sandoval Ugalde</p>
            </div>
        </footer>      
    </div>

    <div class="contenedor-login">
        <form class="ventana-login zoomout" action="login.php" method="POST">
            <ul>
                <label>Usuario:</label>
                <input id="usuario" class="txtLogin" name="usuario" placeholder="Usuario:"/>
            </ul>
            <ul>
                <label>Contraseña:</label>
                <input id="pass" class="txtLogin" name="pass" placeholder="Contrasena:" type="password"/>
            </ul>    
            <ul>
                <input id="ingresar" type="submit" class="btnLogin" name="ingresar" value="Ingresar">
                <input id="cerrarL" type="Button" class="btnLogin" value="Cerrar"/>
            </ul>
        </form>
    </div>
    <div class="contenedor-contact">
        <div class="ventana-contact zoomout">
            <form method="POST" action="inicio.php">
                <label>Nombre:</label>
                <input id="nombre" class="txtContact" name="usuario" placeholder="Nombre Completo:"/>
            
                <label>Correo:</label>
                <input id="correo" class="txtContact" name="correo" placeholder="Correo Electrónico:" type="email"/>
              
                <label>Mensaje:</label>
                <input id="mensaje" rows="10" cols="20" class="txtContact" name="mensaje" placeholder="Mensaje:"/> 
              
                <input id="enviar" onclick="Contactar(nombre.value,correo.value,mensaje.value)" type="Button" class="btnContact" name="enviar" value="Enviar">
                <input id="cerrarC" type="Button" class="btnContact" value="Cerrar"/>
            </form>
        </div>
    </div>
</body>  
</html>  