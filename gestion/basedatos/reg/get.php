<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$basedatos_id = mysql_real_escape_string($_GET['basedatos_id']); 
    $basedatos_basedatos = (isset($_GET['basedatos_basedatos']))?mysql_real_escape_string($_GET['basedatos_basedatos']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }