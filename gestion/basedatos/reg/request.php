<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
    $basedatos_id = (isset($_REQUEST['basedatos_id']))?mysql_real_escape_string($_REQUEST['basedatos_id']):null;   
    $basedatos_basedatos = (isset($_REQUEST['basedatos_basedatos']))?mysql_real_escape_string($_REQUEST['basedatos_basedatos']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }