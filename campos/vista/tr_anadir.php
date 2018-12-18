<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="campos">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="campos_base_datos" value="" placeholder="<?php _t("Base_datos"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_tabla" value="" placeholder="<?php _t("Tabla"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_campo" value="" placeholder="<?php _t("Campo"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_label" value="" placeholder="<?php _t("Label"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_tipo" value="" placeholder="<?php _t("Tipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_clase" value="" placeholder="<?php _t("Clase"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_nombre" value="" placeholder="<?php _t("Nombre"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_identificador" value="" placeholder="<?php _t("Identificador"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_marca_agua" value="" placeholder="<?php _t("Marca_agua"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_valor" value="" placeholder="<?php _t("Valor"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_solo_lectura" value="" placeholder="<?php _t("Solo_lectura"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_obligatorio" value="" placeholder="<?php _t("Obligatorio"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_seleccionado" value="" placeholder="<?php _t("Seleccionado"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_desactivado" value="" placeholder="<?php _t("Desactivado"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_orden" value="" placeholder="<?php _t("Orden"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 