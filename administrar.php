<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11-strict.dtd">
<html lang="en">
<head>  
    <!--<meta charset ="UTF-8">-->
    <title id="title">Administrador</title>
    <link rel="shortcut icon" href="crflag.gif" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="script.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
</head>  
<body>  
    <inicio class="inicio">
        <ul>
            <!-- src="index.php" onclick="index.php" -->
            <li><input type="button" value="Inicio" href="index.php"   class="btnInicio"/></li>
            <li><input id="contact" type="button" value="Contactar" class="btnInicio" data-type="zoomout"/></li>
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
            <ul>
                <li><a onclick="cargarAjax('Categorias/televisorAdmin.php','contenido')">Televisoras</a></li>
                <li><a onclick="cargarAjax('Categorias/radioAdmin.php','contenido')">Radios</a></li>
                <li><a onclick="cargarAjax('Categorias/periodicoAdmin.php','contenido')">Periodicos</a></li>
                <li><a onclick="cargarAjax('Categorias/deporteAdmin.php','contenido')">Deportes</a></li>
                <li><a onclick="cargarAjax('Categorias/herenciaAdmin.php','contenido')">Herencia</a></li>
                <li><a onclick="cargarAjax('Categorias/pronosticoAdmin.php','contenido')">Pronostico</a></li>              
            </ul>
        </nav>   
        <section class="contenido">
            <article class="content">   
            
            </article>  
        </section>          
        
        <footer>         
            <div class="copyRight">
                <p>Copyright © Doutico | doutico.com. All rights reserved | Design by Fabricio Salazar Espinoza, Jorge Rojas Aragon&eacutes, Harvey Sand&iacute S&aacutenchez, Marvin Sandoval Ugalde</p>
            </div>
        </footer>      
    </div>
</body>  
</html>  