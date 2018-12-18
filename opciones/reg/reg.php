<?php 
 /**  
 magia_version: 0.0.11 
 **/ 

  $opciones_id = $opciones['id']; 
  $opciones_campo = $opciones['campo']; 
  $opciones_opcion = $opciones['opcion']; 
  $opciones_valor = $opciones['valor']; 
  $opciones_orden = $opciones['orden']; 
 $opciones_orden_0 = "";   $opciones_orden_1 = "";      if($opciones_orden==0){
      $opciones_orden_0 = " checked "; 
      $opciones_orden_1 = ""; 
  }else {
      $opciones_orden_0 = ""; 
      $opciones_orden_1 = "checked";       
  }  
  $opciones_estatus = $opciones['estatus']; 
 $opciones_estatus_0 = "";   $opciones_estatus_1 = "";      if($opciones_estatus==0){
      $opciones_estatus_0 = " checked "; 
      $opciones_estatus_1 = ""; 
  }else {
      $opciones_estatus_0 = ""; 
      $opciones_estatus_1 = "checked";       
  }  
