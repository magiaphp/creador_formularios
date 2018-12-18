<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function basedatos_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM basedatos WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function basedatos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($basedatos = mysql_fetch_array($sql)) {
        //include "../gestion/basedatos/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $basedatos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $basedatos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$basedatos[$campo]\">$basedatos[$campo]</option> \n";
    }
}

function basedatos_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM basedatos  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($basedatos = mysql_fetch_array($sql)) {
    
        include "../gestion/basedatos/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$basedatos[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$basedatos[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$basedatos[0]\">$basedatos[0]</option>";
   echo "value=\"$basedatos[0]\">$basedatos_basedatos</option>";
} 
}
/**/
function basedatos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM basedatos   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function basedatos_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM basedatos  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
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
function basedatos_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'basedatos_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function basedatos_thead($ganchos=array()){
    
    $campo_disponibles = basedatos_campos_disponibles();   
    $basedatos_campos_a_mostrar = basedatos_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $basedatos_campos_a_mostrar)){
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
function basedatos_tfoot(){    
   basedatos_thead();
}


