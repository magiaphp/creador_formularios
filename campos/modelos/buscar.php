 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM campos  
 WHERE  
 base_datos like '%$campos_base_datos%'    
 AND  tabla like '%$campos_tabla%'    
 AND  campo like '%$campos_campo%'    
 AND  label like '%$campos_label%'    
 AND  tipo like '%$campos_tipo%'    
 AND  clase like '%$campos_clase%'    
 AND  nombre like '%$campos_nombre%'    
 AND  identificador like '%$campos_identificador%'    
 AND  marca_agua like '%$campos_marca_agua%'    
 AND  valor like '%$campos_valor%'    
 AND  solo_lectura like '%$campos_solo_lectura%'    
 AND  obligatorio like '%$campos_obligatorio%'    
 AND  seleccionado like '%$campos_seleccionado%'    
 AND  desactivado like '%$campos_desactivado%'    
 AND  orden like '%$campos_orden%'    
 AND  estatus like '%$campos_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);  
 $total_items = mysql_num_rows(mysql_query("$comando ", $conexion)); 


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }