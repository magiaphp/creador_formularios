 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" 
 DELETE FROM  
 campos  
 WHERE id = '$campos_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__); 
  
 $mensaje = "Realizado"; 
