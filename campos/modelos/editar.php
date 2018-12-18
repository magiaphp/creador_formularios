 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE campos SET  
 base_datos = '$campos_base_datos'  
 ,  tabla = '$campos_tabla'  
 ,  campo = '$campos_campo'  
 ,  label = '$campos_label'  
 ,  tipo = '$campos_tipo'  
 ,  clase = '$campos_clase'  
 ,  nombre = '$campos_nombre'  
 ,  identificador = '$campos_identificador'  
 ,  marca_agua = '$campos_marca_agua'  
 ,  valor = '$campos_valor'  
 ,  solo_lectura = '$campos_solo_lectura'  
 ,  obligatorio = '$campos_obligatorio'  
 ,  seleccionado = '$campos_seleccionado'  
 ,  desactivado = '$campos_desactivado'  
 ,  orden = '$campos_orden'  
 ,  estatus = '$campos_estatus'  
 WHERE id = '$campos_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$campos_id"=>"$campos_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }