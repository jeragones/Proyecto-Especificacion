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
    <script type="text/javascript" src="/jwplayer/jwplayer.js"></script>

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

        function contactar(nombre,correo,mensaje) {
            
        }

    </script>-->
</head>  
<body> 
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script> 
    <inicio class="inicio">
        <ul>
            <li><input type="button" value="Inicio" class="btnInicio"/></li>
            <li><input id="contact" type="button" value="Contactar" class="btnInicio" data-type="zoomout"/></li>
            <li><input id="login" type="button" value="Sesión" class="btnInicio" data-type="zoomout"/></li>
            <li><input id="regist" type="button" value="Registrarse" class="btnInicio" data-type="zoomout"/></li>
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
                <li><a href="sitios.php?x=2">Radios</a></li>
                <li><a href="sitios.php?x=3">Peri&oacutedicos</a></li>
                <li><a href="sitios.php?x=4">Deportes</a></li>
                <li><a href="sitios.php?x=5">Herencia</a></li>
                <li><a href="sitios.php?x=6">Pron&oacutestico</a></li>              
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
            <table border ="2">
                <tr>
                <td>                     
                     <div class="fb-like" data-href="https://www.facebook.com/pages/Douticocom/313709275307261?fref=ts" data-send="false" data-width="400" data-show-faces="true"></div>        
                </td>
                <td>
                    <section class="chat">
                    <?
                        session_start();
                        include("conexionBD.php");
                        if(isset($_SESSiON['usuario'])) {
                        ?>
                            <table width="300" height="400">
                            <form method="POST" action="chat.php">
                                <tr>
                                    <td><iframe class="mensajes" src="mensajes.php" name="chatFrame" width="250" height="300"></iframe></td>
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
                </td>
            </tr>
            
            </tr>
            </table>
            <table border="2">
                <tr>
                    <td>
                        <iframe width="560" height="315" src="http://www.youtube.com/embed/5ISxxiU4Ypo" frameborder="0" allowfullscreen></iframe>
                    </td>
                    <td>
                        <table class="posiciones" border = "2" cellspacing = "5px">
                            <tr>                   
                                <th>Posición</th>
                                <th>Equipo</th>
                                <th>Pts</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Saprissa</td>
                                <td>40</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Alajuela</td>
                                <td>40</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Heredia</td>
                                <td>34</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Limón</td>
                                <td>33</td>
                            </tr> 
                            <tr>
                                <td>5</td>
                                <td>Pérez Zeledón</td>
                                <td>29</td>
                            </tr> 
                            <tr>
                                <td>6</td>
                                <td>Santos</td>
                                <td>28</td>
                            </tr> 
                            <tr>
                                <td>7</td>
                                <td>Belén</td>
                                <td>28</td>
                            </tr> 
                            <tr>
                                <td>8</td>
                                <td>Uruguay</td>
                                <td>27</td>
                            </tr> 
                            <tr>
                                <td>9</td>
                                <td>Carmelita</td>
                                <td>25</td>
                            </tr> 
                            <tr>
                                <td>10</td>
                                <td>Cartago</td>
                                <td>20</td>
                            </tr> 
                            <tr>
                                <td>11</td>
                                <td>San Carlos</td>
                                <td>20</td>
                            </tr> 
                            <tr>
                                <td>12</td>
                                <td>Puntarenas</td>
                                <td>19</td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>   
        </article>  
         
        <footer>         
        <div class="copyRight">
            <p>Copyright © Doutico | doutico.com. All rights reserved | Design by Fabricio Salazar Espinoza, Jorge Rojas Aragon&eacutes, Harvey Sand&iacute S&aacutenchez, Marvin Sandoval Ugalde</p>
        </div>
        </footer>        
    </div>    
    <div class="contenedor-registro">
        <form class="ventana-registro zoomout" action="registro.php" method="POST">
            <ul>
                <label>Usuario:</label>
                <input id="usuarioReg" class="txtLogin" name="usuarioReg" placeholder="Usuario:"/>
            </ul>
            <ul>
                <label>Contraseña:</label>
                <input id="passReg" class="txtLogin" name="passReg" placeholder="Contraseña:"/>
            </ul>
            <ul>
                <label>Correo Electr&oacutenico:</label>
                <input id="emailReg" class="txtLogin" name="emailReg" placeholder="Correo Electrónico:"/>
            </ul>
             <ul>
                <label>Pa&iacutes:</label>
                <input id="paisReg" class="txtLogin" name="paisReg" placeholder="País:"/>
            </ul>           
            <ul>
                <input id="ingresarReg" type="submit" class="btnLogin" name="ingresarReg" value="Ingresar">
                <input id="cerrarReg" type="Button" class="btnLogin" value="Cerrar"/>
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