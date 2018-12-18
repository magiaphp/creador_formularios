<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="opciones"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="opciones_id" value="<?php echo $opciones_id; ?>"> 
 <div class="form-group"> 
     <label for="opciones_campo" class="col-sm-2 control-label"><?php _t("Campo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="opciones_campo" id="opciones_campo" placeholder="<?php _t("Campo"); ?>" value="<?php echo $opciones_campo; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="opciones_opcion" class="col-sm-2 control-label"><?php _t("Opcion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="opciones_opcion" id="opciones_opcion" placeholder="<?php _t("Opcion"); ?>" value="<?php echo $opciones_opcion; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="opciones_valor" class="col-sm-2 control-label"><?php _t("Valor"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="opciones_valor" id="opciones_valor" placeholder="<?php _t("Valor"); ?>" value="<?php echo $opciones_valor; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="opciones_orden" class="col-sm-2 control-label"><?php _t("Orden"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="opciones_orden" value="1" <?php echo "$opciones_orden_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="opciones_orden" value="0"  <?php echo "$opciones_orden_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


 <div class="form-group"> 
     <label for="opciones_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="opciones_estatus" value="1" <?php echo "$opciones_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="opciones_estatus" value="0"  <?php echo "$opciones_estatus_0"; ?>  >
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
 <a href="index.php?p=opciones&c=txt&opciones_id=<?php echo $opciones_id; ?>">Formato texto</a> 
