<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "opciones"=>[ "id"=>"$opciones_id",  
 "campo"=>"$opciones_campo",  
 "opcion"=>"$opciones_opcion",  
 "valor"=>"$opciones_valor",  
 "orden"=>"$opciones_orden",  
 "estatus"=>"$opciones_estatus",  
                ]
        ];  $html = str_replace('%opciones_id%',       $datos['opciones']['id'], $html); 
  $html = str_replace('%opciones_campo%',       $datos['opciones']['campo'], $html); 
  $html = str_replace('%opciones_opcion%',       $datos['opciones']['opcion'], $html); 
  $html = str_replace('%opciones_valor%',       $datos['opciones']['valor'], $html); 
  $html = str_replace('%opciones_orden%',       $datos['opciones']['orden'], $html); 
  $html = str_replace('%opciones_estatus%',       $datos['opciones']['estatus'], $html); 
