<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="basedatos">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Basedatos"><?php _t("Basedatos"); ?></label>
                      <input type="text" class="form-control" name="basedatos_basedatos" id="basedatos_basedatos" placeholder="<?php _t("Basedatos"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>