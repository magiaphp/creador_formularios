<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
    $opciones_id = (isset($_REQUEST['opciones_id']))?mysql_real_escape_string($_REQUEST['opciones_id']):null;   
    $opciones_campo = (isset($_REQUEST['opciones_campo']))?mysql_real_escape_string($_REQUEST['opciones_campo']):null;   
    $opciones_opcion = (isset($_REQUEST['opciones_opcion']))?mysql_real_escape_string($_REQUEST['opciones_opcion']):null;   
    $opciones_valor = (isset($_REQUEST['opciones_valor']))?mysql_real_escape_string($_REQUEST['opciones_valor']):null;   
    $opciones_orden = (isset($_REQUEST['opciones_orden']))?mysql_real_escape_string($_REQUEST['opciones_orden']):null;   
    $opciones_estatus = (isset($_REQUEST['opciones_estatus']))?mysql_real_escape_string($_REQUEST['opciones_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }