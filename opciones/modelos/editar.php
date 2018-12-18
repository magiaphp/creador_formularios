 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE opciones SET  
 campo = '$opciones_campo'  
 ,  opcion = '$opciones_opcion'  
 ,  valor = '$opciones_valor'  
 ,  orden = '$opciones_orden'  
 ,  estatus = '$opciones_estatus'  
 WHERE id = '$opciones_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$opciones_id"=>"$opciones_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }