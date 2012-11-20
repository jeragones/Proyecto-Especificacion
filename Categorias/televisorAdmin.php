<?php     
    session_start();     
    include("../conexionBD.php");     
    $select = 'SELECT nombre FROM links';     
    $query = mysql_query($select,$conexion);
    $rows = mysql_num_rows($query);
    //$rows = mysql_both($query);

    //while(){
    if($rows>0) {
        while($row = mysql_fetch_array($query)) {
            $nombre = $row['nombre'];
            /*?>
                <div><strong> <? echo $nombre ?></strong><br></div>
            <?*/
            echo '<div><strong>'.$nombre.'</strong><br></div>';     
        }
    } else {
        ?>
            &nbsp;
        <?php
    }        
        //$row=mysql_fetch_array($query)
        
    //}
    mysql_free_result($query);  
?>
		






