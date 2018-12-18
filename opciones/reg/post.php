<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
  //$opciones_id = mysql_real_escape_string($_POST['opciones_id']); 
    $opciones_campo = (isset($_POST['opciones_campo']))?mysql_real_escape_string($_POST['opciones_campo']):null;   
    $opciones_opcion = (isset($_POST['opciones_opcion']))?mysql_real_escape_string($_POST['opciones_opcion']):null;   
    $opciones_valor = (isset($_POST['opciones_valor']))?mysql_real_escape_string($_POST['opciones_valor']):null;   
    $opciones_orden = (isset($_POST['opciones_orden']))?mysql_real_escape_string($_POST['opciones_orden']):null;   
    $opciones_estatus = (isset($_POST['opciones_estatus']))?mysql_real_escape_string($_POST['opciones_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }