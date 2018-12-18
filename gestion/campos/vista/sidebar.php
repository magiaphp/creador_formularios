<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="campos"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="campos_base_datos" class="col-sm-2 control-label"><?php _t("Base_datos");?></label> 
       <input type="text" class="form-control" name="campos_base_datos" id="campos_base_datos" placeholder="<?php _t("Base_datos"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_tabla" class="col-sm-2 control-label"><?php _t("Tabla");?></label> 
       <input type="text" class="form-control" name="campos_tabla" id="campos_tabla" placeholder="<?php _t("Tabla"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_campo" class="col-sm-2 control-label"><?php _t("Campo");?></label> 
       <input type="text" class="form-control" name="campos_campo" id="campos_campo" placeholder="<?php _t("Campo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_label" class="col-sm-2 control-label"><?php _t("Label");?></label> 
       <input type="text" class="form-control" name="campos_label" id="campos_label" placeholder="<?php _t("Label"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_tipo" class="col-sm-2 control-label"><?php _t("Tipo");?></label> 
       <input type="text" class="form-control" name="campos_tipo" id="campos_tipo" placeholder="<?php _t("Tipo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_clase" class="col-sm-2 control-label"><?php _t("Clase");?></label> 
       <input type="text" class="form-control" name="campos_clase" id="campos_clase" placeholder="<?php _t("Clase"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_nombre" class="col-sm-2 control-label"><?php _t("Nombre");?></label> 
       <input type="text" class="form-control" name="campos_nombre" id="campos_nombre" placeholder="<?php _t("Nombre"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_identificador" class="col-sm-2 control-label"><?php _t("Identificador");?></label> 
       <input type="text" class="form-control" name="campos_identificador" id="campos_identificador" placeholder="<?php _t("Identificador"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_marca_agua" class="col-sm-2 control-label"><?php _t("Marca_agua");?></label> 
       <input type="text" class="form-control" name="campos_marca_agua" id="campos_marca_agua" placeholder="<?php _t("Marca_agua"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_valor" class="col-sm-2 control-label"><?php _t("Valor");?></label> 
       <input type="text" class="form-control" name="campos_valor" id="campos_valor" placeholder="<?php _t("Valor"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_solo_lectura" class="col-sm-2 control-label"><?php _t("Solo_lectura");?></label> 
       <input type="text" class="form-control" name="campos_solo_lectura" id="campos_solo_lectura" placeholder="<?php _t("Solo_lectura"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_obligatorio" class="col-sm-2 control-label"><?php _t("Obligatorio");?></label> 
       <input type="text" class="form-control" name="campos_obligatorio" id="campos_obligatorio" placeholder="<?php _t("Obligatorio"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_seleccionado" class="col-sm-2 control-label"><?php _t("Seleccionado");?></label> 
       <input type="text" class="form-control" name="campos_seleccionado" id="campos_seleccionado" placeholder="<?php _t("Seleccionado"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_desactivado" class="col-sm-2 control-label"><?php _t("Desactivado");?></label> 
       <input type="text" class="form-control" name="campos_desactivado" id="campos_desactivado" placeholder="<?php _t("Desactivado"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_orden" class="col-sm-2 control-label"><?php _t("Orden");?></label> 
       <input type="text" class="form-control" name="campos_orden" id="campos_orden" placeholder="<?php _t("Orden"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="campos_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="campos_estatus" id="campos_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
