<?php
    session_start();
    include("conexionBD.php");

    $x=$_GET['x'];
    //$select = "";
    $select = "SELECT nombre,url,imagen FROM links WHERE tipo=$x ORDER BY nombre ASC";
    $query = mysql_query($select,$conexion);

    ?>
    <link rel="stylesheet" href="style.css">
    <inicio class="inicio">
        <ul>
            <li><a href="index.php"><input type="button" value="Inicio" class="btnInicio"/></a></li>
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
                <li><a href="cargarAjax('sitios.php?x=2','contenido')">Radios</a></li>
                <li><a href="cargarAjax('sitios.php?x=3','contenido')">Peri&oacutedicos</a></li>
                <li><a href="cargarAjax('sitios.php?x=4','contenido')">Deportes</a></li>
                <li><a href="cargarAjax('sitios.php?x=5','contenido')">Herencia</a></li>
                <li><a href="cargarAjax('sitios.php?x=6','contenido')">Pron&oacutestico</a></li>              
            </ul>
        </nav>
        <article>
            <?php
            echo '<div>';
                echo '<table class="posiciones">';
            
                while($row = mysql_fetch_array($query)) {
                    echo '<tr>';
                        echo '<td><a href="'.$row['url'].'" value="'.$row['nombre'].'"><img src="'.$row['imagen'].'" width="80" height="80""/></a></td>';
                        echo '<td><a href="'.$row['url'].'">'.$row['nombre'].'</a></td>';
                    echo '</tr>';
                }
                echo '</div>';
            echo '</table>';
            ?>
        </article>
    </div>
    
?>
