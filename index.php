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
    <script type="text/javascript" src="registro.js"></script>

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
            <li><input id="regist" type="button" value="Registrarse" class="btnInicio"/></li>
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
            <ul><li><a href="sitios.php?x=1">Televisoras</a></li>
                <li><a href="cargarAjax('sitios.php%2','contenido')">Radios</a></li>
                <li><a href="cargarAjax('sitios.php%3','contenido')">Peri&oacutedicos</a></li>
                <li><a href="cargarAjax('sitios.php%4','contenido')">Deportes</a></li>
                <li><a href="cargarAjax('sitios.php%5','contenido')">Herencia</a></li>
                <li><a href="cargarAjax('sitios.php%6','contenido')">Pron&oacutestico</a></li>              
            </ul>
        </nav> 
        <div class="banner">
            <div class = "banner1">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="32" height="32">
                    <param name="movie" value="Banner1.swf" />
                    <param name="quality" value="high" />
                    <embed src="Banner1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="160" height="397"></embed>
                </object> 
            </div>
            <div class = "banner2">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="32" height="32">
                    <param name="movie" value="Banner2.swf" />
                    <param name="quality" value="high" />
                    <embed src="Banner2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="160" height="397"></embed>
                </object> 
            </div>                 
        </div>               
        <article id="contenido">   
              
        </article>  
        <section class="chat">
            <?
                session_start();
                include("conexionBD.php");
                if(isset($_SESSiON['usuario'])) {
                    ?>
                    <table with="300" height="500">
                        <form method="POST" action="chat.php">
                            <tr>
                                <td><iframe class="mensajes" src="mensajes.php" name="chatFrame" width="250" height="400"></iframe></td>
                            </tr>
                            <tr>
                                <td><input class="txtMensaje" type="text" name="mensaje"/> 
                                    <button class="btnInicio" type="submit" name="enviar">Enviar</button></td>    
                            </tr>
                        </form>
                    </table>
                    <?
                }
            ?>    
        </section>          
    </div>
    <footer>         
        <div class="copyRight">
            <p>Copyright © Doutico | doutico.com. All rights reserved | Design by Fabricio Salazar Espinoza, Jorge Rojas Aragon&eacutes, Harvey Sand&iacute S&aacutenchez, Marvin Sandoval Ugalde</p>
        </div>
    </footer>
    <div class="contenedor-registro">
        <form class="ventana-registro zoomout" action="registro.php" method="POST">
            <ul>
                <label>Usuario:</label>
                <input id="usuarioReg" class="txtRegistro" name="usuarioReg" placeholder="Usuario:"/>
            </ul>
            <ul>
                <label>Contraseña:</label>
                <input id="passReg" class="txtRegistro" name="passReg" placeholder="Contraseña:"/>
            </ul>
            <ul>
                <label>Correo Electr&oacutenico:</label>
                <input id="emailReg" class="txtRegistro" name="emailReg" placeholder="Correo Electr&oacutenico:"/>
            </ul>
             <ul>
                <label>Pa&iacutes:</label>
                <input id="paisReg" class="txtRegistro" name="paisReg" placeholder="Pa&iacutes:"/>
            </ul>           
            <ul>
                <input id="ingresarReg" type="submit" class="btnRegistro" name="ingresarReg" value="Ingresar">
                <input id="cerrarReg" type="Button" class="btnRegistro" value="Cerrar"/>
            </ul>
        </form>
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
            <form action="email.php" method="post">
                <ul>
                    <label>De:</label>
                    <input id="email" class="txtContact" name="email" placeholder="Correo Electrónico:" type="email"/>
                </ul>
                <ul>
                    <label>Asunto:</label>
                    <input id="asunto" class="txtContact" name="asunto" placeholder="Asunto"/>
                </ul>
                <ul>
                    <label>Mensaje:</label>
                    <input id="mensaje" rows="10" cols="20" class="txtContact" name="mensaje" placeholder="Mensaje:"/></li> 
                </ul>
                <ul>
                    <input name="submit" type="submit" class="btnContact" value="Enviar">
                    <input id="cerrarC" type="Button" class="btnContact" value="Cerrar"/>   
                </ul>
            </form>
        </div>
    </div>
</body>  
</html>  