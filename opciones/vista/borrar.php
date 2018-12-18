<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2><?php _t("Atencion"); ?></h2>
                <p><?php _t("Ud esta a por borrar definiticamente este registro, desea hacerlo?"); ?></p>
                <a class="btn btn-danger" href="index.php?p=opciones&c=borrar&opciones_id=<?php echo $opciones_id; ?>"><?php _t("Si,borrar"); ?></a>