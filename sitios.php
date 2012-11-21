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
        <article class="sitios">
            <?php
            echo '<div>';
                echo '<table class="posiciones1">';
            
                while($row = mysql_fetch_array($query)) {
                    echo '<tr>';
                        echo '<td><a href="'.$row['url'].'" value="'.$row['nombre'].'"><img src="'.$row['imagen'].'" width="200" height="200""/></a><br><h3><p align="center"><a href="'.$row['url'].'" target="_blank">'.$row['nombre'].'</a></p></h3></td>';
                    echo '</tr>';
                }
                echo '</div>';
            echo '</table>';
            ?>
        </article>
    </div>
    
?>
