<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="opciones">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Campo"><?php _t("Campo"); ?></label>
                      <input type="text" class="form-control" name="opciones_campo" id="opciones_campo" placeholder="<?php _t("Campo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Opcion"><?php _t("Opcion"); ?></label>
                      <input type="text" class="form-control" name="opciones_opcion" id="opciones_opcion" placeholder="<?php _t("Opcion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Valor"><?php _t("Valor"); ?></label>
                      <input type="text" class="form-control" name="opciones_valor" id="opciones_valor" placeholder="<?php _t("Valor"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Orden"><?php _t("Orden"); ?></label>
                      <input type="text" class="form-control" name="opciones_orden" id="opciones_orden" placeholder="<?php _t("Orden"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="opciones_estatus" id="opciones_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>