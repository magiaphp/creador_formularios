<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "campos"=>[ "id"=>"$campos_id",  
 "base_datos"=>"$campos_base_datos",  
 "tabla"=>"$campos_tabla",  
 "campo"=>"$campos_campo",  
 "label"=>"$campos_label",  
 "tipo"=>"$campos_tipo",  
 "clase"=>"$campos_clase",  
 "nombre"=>"$campos_nombre",  
 "identificador"=>"$campos_identificador",  
 "marca_agua"=>"$campos_marca_agua",  
 "valor"=>"$campos_valor",  
 "solo_lectura"=>"$campos_solo_lectura",  
 "obligatorio"=>"$campos_obligatorio",  
 "seleccionado"=>"$campos_seleccionado",  
 "desactivado"=>"$campos_desactivado",  
 "orden"=>"$campos_orden",  
 "estatus"=>"$campos_estatus",  
                ]
        ];  $html = str_replace('%campos_id%',       $datos['campos']['id'], $html); 
  $html = str_replace('%campos_base_datos%',       $datos['campos']['base_datos'], $html); 
  $html = str_replace('%campos_tabla%',       $datos['campos']['tabla'], $html); 
  $html = str_replace('%campos_campo%',       $datos['campos']['campo'], $html); 
  $html = str_replace('%campos_label%',       $datos['campos']['label'], $html); 
  $html = str_replace('%campos_tipo%',       $datos['campos']['tipo'], $html); 
  $html = str_replace('%campos_clase%',       $datos['campos']['clase'], $html); 
  $html = str_replace('%campos_nombre%',       $datos['campos']['nombre'], $html); 
  $html = str_replace('%campos_identificador%',       $datos['campos']['identificador'], $html); 
  $html = str_replace('%campos_marca_agua%',       $datos['campos']['marca_agua'], $html); 
  $html = str_replace('%campos_valor%',       $datos['campos']['valor'], $html); 
  $html = str_replace('%campos_solo_lectura%',       $datos['campos']['solo_lectura'], $html); 
  $html = str_replace('%campos_obligatorio%',       $datos['campos']['obligatorio'], $html); 
  $html = str_replace('%campos_seleccionado%',       $datos['campos']['seleccionado'], $html); 
  $html = str_replace('%campos_desactivado%',       $datos['campos']['desactivado'], $html); 
  $html = str_replace('%campos_orden%',       $datos['campos']['orden'], $html); 
  $html = str_replace('%campos_estatus%',       $datos['campos']['estatus'], $html); 
