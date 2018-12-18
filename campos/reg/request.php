<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
    $campos_id = (isset($_REQUEST['campos_id']))?mysql_real_escape_string($_REQUEST['campos_id']):null;   
    $campos_base_datos = (isset($_REQUEST['campos_base_datos']))?mysql_real_escape_string($_REQUEST['campos_base_datos']):null;   
    $campos_tabla = (isset($_REQUEST['campos_tabla']))?mysql_real_escape_string($_REQUEST['campos_tabla']):null;   
    $campos_campo = (isset($_REQUEST['campos_campo']))?mysql_real_escape_string($_REQUEST['campos_campo']):null;   
    $campos_label = (isset($_REQUEST['campos_label']))?mysql_real_escape_string($_REQUEST['campos_label']):null;   
    $campos_tipo = (isset($_REQUEST['campos_tipo']))?mysql_real_escape_string($_REQUEST['campos_tipo']):null;   
    $campos_clase = (isset($_REQUEST['campos_clase']))?mysql_real_escape_string($_REQUEST['campos_clase']):form-control;   
    $campos_nombre = (isset($_REQUEST['campos_nombre']))?mysql_real_escape_string($_REQUEST['campos_nombre']):null;   
    $campos_identificador = (isset($_REQUEST['campos_identificador']))?mysql_real_escape_string($_REQUEST['campos_identificador']):null;   
    $campos_marca_agua = (isset($_REQUEST['campos_marca_agua']))?mysql_real_escape_string($_REQUEST['campos_marca_agua']):null;   
    $campos_valor = (isset($_REQUEST['campos_valor']))?mysql_real_escape_string($_REQUEST['campos_valor']):null;   
    $campos_solo_lectura = (isset($_REQUEST['campos_solo_lectura']))?mysql_real_escape_string($_REQUEST['campos_solo_lectura']):null;   
    $campos_obligatorio = (isset($_REQUEST['campos_obligatorio']))?mysql_real_escape_string($_REQUEST['campos_obligatorio']):null;   
    $campos_seleccionado = (isset($_REQUEST['campos_seleccionado']))?mysql_real_escape_string($_REQUEST['campos_seleccionado']):null;   
    $campos_desactivado = (isset($_REQUEST['campos_desactivado']))?mysql_real_escape_string($_REQUEST['campos_desactivado']):null;   
    $campos_orden = (isset($_REQUEST['campos_orden']))?mysql_real_escape_string($_REQUEST['campos_orden']):null;   
    $campos_estatus = (isset($_REQUEST['campos_estatus']))?mysql_real_escape_string($_REQUEST['campos_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }