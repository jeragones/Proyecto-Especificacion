<?php     
    session_start();     
    include("../conexionBD.php");     
    $select = 'SELECT nombre FROM links';     
    $query = mysql_query($select,$conexion);
    $rows = mysql_num_rows($query);
    while($row=mysql_fetch_array($query,$rows)){         
        echo '<div><strong>'.$row['nombre'].'</strong><br></div>';     
    }  
?>
		






