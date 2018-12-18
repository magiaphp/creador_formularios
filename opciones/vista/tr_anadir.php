<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="opciones">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="opciones_campo" value="" placeholder="<?php _t("Campo"); ?>"></td> 
 <td><input class="form-control" type="text" name="opciones_opcion" value="" placeholder="<?php _t("Opcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="opciones_valor" value="" placeholder="<?php _t("Valor"); ?>"></td> 
 <td><input class="form-control" type="text" name="opciones_orden" value="" placeholder="<?php _t("Orden"); ?>"></td> 
 <td><input class="form-control" type="text" name="opciones_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 