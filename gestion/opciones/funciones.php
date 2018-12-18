<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function opciones_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM opciones WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function opciones_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($opciones = mysql_fetch_array($sql)) {
        //include "../gestion/opciones/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $opciones[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $opciones[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$opciones[$campo]\">$opciones[$campo]</option> \n";
    }
}

function opciones_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM opciones  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($opciones = mysql_fetch_array($sql)) {
    
        include "../gestion/opciones/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$opciones[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$opciones[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$opciones[0]\">$opciones[0]</option>";
   echo "value=\"$opciones[0]\">$opciones_opciones</option>";
} 
}
/**/
function opciones_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM opciones   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function opciones_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM opciones  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
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
function opciones_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'opciones_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function opciones_thead($ganchos=array()){
    
    $campo_disponibles = opciones_campos_disponibles();   
    $opciones_campos_a_mostrar = opciones_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $opciones_campos_a_mostrar)){
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
function opciones_tfoot(){    
   opciones_thead();
}


