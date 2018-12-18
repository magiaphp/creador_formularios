<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="basedatos"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="basedatos_id" value="<?php echo $basedatos_id; ?>"> 
 <div class="form-group"> 
     <label for="basedatos_basedatos" class="col-sm-2 control-label"><?php _t("Basedatos"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="basedatos_basedatos" id="basedatos_basedatos" placeholder="<?php _t("Basedatos"); ?>" value="<?php echo $basedatos_basedatos; ?>"  disabled > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=basedatos&c=txt&basedatos_id=<?php echo $basedatos_id; ?>">Formato texto</a> 
