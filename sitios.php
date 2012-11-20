<?php
    session_start();
    include("conexionBD.php");
    $temp=0;
    ?><script>
        switch(document.URL.split('%', 2)[1]) {
            case "x=1":
                </script><?
                    $temp=1;
                ?><script>
                break;
            case "x=2":
                </script><?
                    $temp=2;
                ?><script>
                break;
            case "x=3":
                </script><?
                    $temp=3;
                ?><script>
                break;
            case "x=4":
                </script><?
                    $temp=4;
                ?><script>
                break;
            case "x=5":
                </script><?
                    $temp=5;
                ?><script>
                break;
        }
    </script><?php
    $select = "SELECT ID,nombre,url,imagen FROM links WHERE tipo=".$temp." ORDER BY nombre ASC";
    //$select = "SELECT ID,nombre,url,imagen FROM links WHERE tipo=".$temp." ORDER BY nombre ASC";
    $query = mysql_query($select,$conexion);
    $cont = 0;
    echo '<div>';
    echo '<table border="1">';
    
    while($row = mysql_fetch_array($query)) {
        $cont = 0;
        echo '<tr>';
        while($cont<3) {
            echo '<td><a href="videos.php%'.$row['nombre'].'%'.$row['url'].'%'.$row['imagen'].'">'.$row['nombre'].'</a></td>';
            $cont++;
        }
        echo '</tr>';
        $cont = 0;
    }
    echo '<tr> hola   </tr>';
    echo '<tr>    </tr>';
    echo '<tr>    </tr>';
    echo '<tr>    </tr>';
    echo '<tr>    </tr>';
    echo '<tr>    </tr>';
    echo '<tr>    </tr>';
    echo '<tr>    </tr>';
    echo '<tr>    </tr>';
    echo '</table>';
    echo '</div>';
?>