<?php
    
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Televisoras</title>
	<link rel="shortcut icon" href="crflag.jpg" type="image/x-icon"/>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="/jwplayer/jwplayer.js"></script>
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
            <ul><li><a onclick="">Radios</a></li>
                <li><a onclick="">Periodicos</a></li>
                <li><a onclick="">Deportes</a></li>
                <li><a onclick="">Herencia</a></li>
                <li><a onclick="">Pronostico</a></li>              
            </ul>
        </nav> 


  

        <article ID="reproductor"> 

            <aside ID="linksTV">
                <nav>
                   <ul>
                     <h1>Televisora Nacional</h1>  
                     <li><a href="canal6.html" title="">Repretel   </a><img src="img/C_6.png" alt=""></li>
                     <li><a href="canal4.html" title="">Repretel   </a><img src="img/C_4.png" alt=""></li>
                     <li><a href="canal11.html" title="">Repretel   </a><img src="img/C_11.png" alt=""></li>
                     <li><a href="canal15.html" title="">U.C.R.     </a><img src="img/C_15.png" alt=""></li>
                     <li><a href="canal42.html" title="">Extra TV   </a><img src="img/C_42.png" alt=""></li>
                     <li><a href="canal14.html" title="">T.V.N      </a><img src="img/C_14.png" alt=""></li>
                     <li><a href="canal13.html" title="">SINART     </a><img src="img/C_13.png" alt=""></li>
                     </ul>
                </nav>
          </aside>
            
         <video id="container" controls poster="img/canal7.jpg"       width="633" height="530">   
                <source src="Videos/teletica.mp4" type='video/mp4; codecs="avc1,mp4a"'></source>
                <source src="Videos/teletica.ogv" type='video/ogg; codecs="theora,vorbis"' />
                <source src="Videos/teletica.webm" type='video/webm; codecs="vp8,vorbis"' /> d
            </video>
            <script type="text/javascript">
                jwplayer("container").setup();  
         </script>
          
        
        <aside ID="chat">
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
                    ?>Debes iniciar sesión para poder utilizar el chat<?
                }
            
            ?> 
         
       </aside>
  </article>  

     
        
       
    

    <article ID="banner_video">
        
           
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="32" height="32">
                    <param name="movie" value="Banner1.swf" />
                    <param name="quality" value="high" />
                    <embed src="Banner1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="160" height="397"></embed>
                </object>           
      
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="32" height="32">
                    <param name="movie" value="Banner2.swf" />
                    <param name="quality" value="high" />
                    <embed src="Banner2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="160" height="397"></embed>
                </object> 

                <!--RENTA-->

                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="32" height="32">
                    <param name="movie" value="Banner1.swf" />
                    <param name="quality" value="high" />
                    <embed src="Banner1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="160" height="397"></embed>
                </object>           
      
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="32" height="32">
                    <param name="movie" value="Banner2.swf" />
                    <param name="quality" value="high" />
                    <embed src="Banner2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="160" height="397"></embed>
                </object> 

                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="32" height="32">
                    <param name="movie" value="Banner1.swf" />
                    <param name="quality" value="high" />
                    <embed src="Banner1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="160" height="397"></embed>
                </object>           
      
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="32" height="32">
                    <param name="movie" value="Banner2.swf" />
                    <param name="quality" value="high" />
                    <embed src="Banner2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="160" height="397"></embed>
                </object>                               
    </article>     
        <footer>         
            <div class="copyRight">
                <p>Copyright © Doutico | doutico.com. All rights reserved | Design by Fabricio Salazar Espinoza, Jorge Rojas Aragon&eacutes, Harvey Sand&iacute S&aacutenchez, Marvin Sandoval Ugalde</p>
            </div>
        </footer>  	
</body>
</html>