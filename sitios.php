<?php
    session_start();
    include("conexionBD.php");
    
    echo 'mierda<br>';    
    //$temp=0;
    ?>
         <script>!window.jQuery && document.write(unescape('%3Cscript src="jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>  
         <script type="text/javascript">
            var temp = document.URL.split('?', 2)[0];
            <?php
                $algo = print("document.write(temp)");
                echo $algo;
            ?>
        </script>
    <?php
    echo 'mierda';
?>