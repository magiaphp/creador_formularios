<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="opciones"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="opciones_campo" class="col-sm-2 control-label"><?php _t("Campo");?></label> 
       <input type="text" class="form-control" name="opciones_campo" id="opciones_campo" placeholder="<?php _t("Campo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="opciones_opcion" class="col-sm-2 control-label"><?php _t("Opcion");?></label> 
       <input type="text" class="form-control" name="opciones_opcion" id="opciones_opcion" placeholder="<?php _t("Opcion"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="opciones_valor" class="col-sm-2 control-label"><?php _t("Valor");?></label> 
       <input type="text" class="form-control" name="opciones_valor" id="opciones_valor" placeholder="<?php _t("Valor"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="opciones_orden" class="col-sm-2 control-label"><?php _t("Orden");?></label> 
       <input type="text" class="form-control" name="opciones_orden" id="opciones_orden" placeholder="<?php _t("Orden"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="opciones_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="opciones_estatus" id="opciones_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
