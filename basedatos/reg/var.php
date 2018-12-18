<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "basedatos"=>[ "id"=>"$basedatos_id",  
 "basedatos"=>"$basedatos_basedatos",  
                ]
        ];  $html = str_replace('%basedatos_id%',       $datos['basedatos']['id'], $html); 
  $html = str_replace('%basedatos_basedatos%',       $datos['basedatos']['basedatos'], $html); 
