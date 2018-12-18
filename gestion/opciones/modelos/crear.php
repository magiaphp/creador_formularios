 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO opciones ( 
 campo 
 ,  opcion 
 ,  valor 
 ,  orden 
 ,  estatus 
 ) VALUES ( 
 :campo 
 ,  :opcion 
 ,  :valor 
 ,  :orden 
 ,  :estatus 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":campo"=>"$opciones_campo" 
 ,  ":opcion"=>"$opciones_opcion" 
 ,  ":valor"=>"$opciones_valor" 
 ,  ":orden"=>"$opciones_orden" 
 ,  ":estatus"=>"$opciones_estatus" 
             ) 
 ); 


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