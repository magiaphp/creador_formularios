<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="basedatos"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="basedatos_basedatos" class="col-sm-2 control-label"><?php _t("Basedatos");?></label> 
       <input type="text" class="form-control" name="basedatos_basedatos" id="basedatos_basedatos" placeholder="<?php _t("Basedatos"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
