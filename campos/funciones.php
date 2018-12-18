<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function campos_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM campos WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function campos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($campos = mysql_fetch_array($sql)) {
        //include "../gestion/campos/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $campos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $campos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$campos[$campo]\">$campos[$campo]</option> \n";
    }
}

function campos_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM campos  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($campos = mysql_fetch_array($sql)) {
    
        include "../gestion/campos/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$campos[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$campos[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$campos[0]\">$campos[0]</option>";
   echo "value=\"$campos[0]\">$campos_campos</option>";
} 
}
/**/
function campos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM campos   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function campos_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM campos  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    while ($reg = mysql_fetch_array($sql)) {
        $data[$reg[0]] = $reg[0];
    }
    
    return $data;
}
/**
 * Son los campos que se debe mostrar en la tabla del index
 * @global type $conexion
 * @return type
 */
function campos_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'campos_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function campos_thead($ganchos=array()){
    
    $campo_disponibles = campos_campos_disponibles();   
    $campos_campos_a_mostrar = campos_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $campos_campos_a_mostrar)){
            echo "<th>"._tr($value)."</th> "; 
        }        
    }
    

    if ($ganchos) {
        $i = 0;
        while ($i < count($ganchos)) {
            echo "<th>$ganchos[$i]</th>";
            $i++;
        }
    }
    



    echo "<th>"._tr("Acción")."</th> "; // accion             
    echo "    </tr>
    </thead>"; 
}
/**
 * 
 */
function campos_tfoot(){    
   campos_thead();
}


