<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="campos"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="campos_id" value="<?php echo $campos_id; ?>"> 
 <div class="form-group"> 
     <label for="campos_base_datos" class="col-sm-2 control-label"><?php _t("Base datos"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="campos_base_datos" id="campos_base_datos" placeholder="<?php _t("Base datos"); ?>" value="<?php echo $campos_base_datos; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_tabla" class="col-sm-2 control-label"><?php _t("Tabla"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="campos_tabla" id="campos_tabla" placeholder="<?php _t("Tabla"); ?>" value="<?php echo $campos_tabla; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_campo" class="col-sm-2 control-label"><?php _t("Campo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="campos_campo" id="campos_campo" placeholder="<?php _t("Campo"); ?>" value="<?php echo $campos_campo; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_label" class="col-sm-2 control-label"><?php _t("Label"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="campos_label" id="campos_label" placeholder="<?php _t("Label"); ?>" value="<?php echo $campos_label; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_tipo" class="col-sm-2 control-label"><?php _t("Tipo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="campos_tipo" id="campos_tipo" placeholder="<?php _t("Tipo"); ?>" value="<?php echo $campos_tipo; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_clase" class="col-sm-2 control-label"><?php _t("Clase"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="campos_clase" id="campos_clase" placeholder="<?php _t("Clase"); ?>" value="<?php echo $campos_clase; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_nombre" class="col-sm-2 control-label"><?php _t("Nombre"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="campos_nombre" id="campos_nombre" placeholder="<?php _t("Nombre"); ?>" value="<?php echo $campos_nombre; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_identificador" class="col-sm-2 control-label"><?php _t("Identificador"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="campos_identificador" id="campos_identificador" placeholder="<?php _t("Identificador"); ?>" value="<?php echo $campos_identificador; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_marca_agua" class="col-sm-2 control-label"><?php _t("Marca agua"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="campos_marca_agua" id="campos_marca_agua" placeholder="<?php _t("Marca agua"); ?>" value="<?php echo $campos_marca_agua; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_valor" class="col-sm-2 control-label"><?php _t("Valor"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="campos_valor" id="campos_valor" placeholder="<?php _t("Valor"); ?>" value="<?php echo $campos_valor; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_solo_lectura" class="col-sm-2 control-label"><?php _t("Solo lectura"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="campos_solo_lectura" value="1" <?php echo "$campos_solo_lectura_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="campos_solo_lectura" value="0"  <?php echo "$campos_solo_lectura_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_obligatorio" class="col-sm-2 control-label"><?php _t("Obligatorio"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="campos_obligatorio" value="1" <?php echo "$campos_obligatorio_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="campos_obligatorio" value="0"  <?php echo "$campos_obligatorio_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_seleccionado" class="col-sm-2 control-label"><?php _t("Seleccionado"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="campos_seleccionado" value="1" <?php echo "$campos_seleccionado_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="campos_seleccionado" value="0"  <?php echo "$campos_seleccionado_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_desactivado" class="col-sm-2 control-label"><?php _t("Desactivado"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="campos_desactivado" value="1" <?php echo "$campos_desactivado_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="campos_desactivado" value="0"  <?php echo "$campos_desactivado_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_orden" class="col-sm-2 control-label"><?php _t("Orden"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="campos_orden" id="campos_orden" placeholder="<?php _t("Orden"); ?>" value="<?php echo $campos_orden; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="campos_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="campos_estatus" value="1" <?php echo "$campos_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="campos_estatus" value="0"  <?php echo "$campos_estatus_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=campos&c=txt&campos_id=<?php echo $campos_id; ?>">Formato texto</a> 
