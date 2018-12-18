<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "campos", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=campos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="campos">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="campos_id" value="<?php echo $campos_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="campos_base_datos" value="<?php echo $campos_base_datos; ?>" placeholder="<?php _t("Base_datos"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_tabla" value="<?php echo $campos_tabla; ?>" placeholder="<?php _t("Tabla"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_campo" value="<?php echo $campos_campo; ?>" placeholder="<?php _t("Campo"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_label" value="<?php echo $campos_label; ?>" placeholder="<?php _t("Label"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_tipo" value="<?php echo $campos_tipo; ?>" placeholder="<?php _t("Tipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_clase" value="<?php echo $campos_clase; ?>" placeholder="<?php _t("Clase"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_nombre" value="<?php echo $campos_nombre; ?>" placeholder="<?php _t("Nombre"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_identificador" value="<?php echo $campos_identificador; ?>" placeholder="<?php _t("Identificador"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_marca_agua" value="<?php echo $campos_marca_agua; ?>" placeholder="<?php _t("Marca_agua"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_valor" value="<?php echo $campos_valor; ?>" placeholder="<?php _t("Valor"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_solo_lectura" value="<?php echo $campos_solo_lectura; ?>" placeholder="<?php _t("Solo_lectura"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_obligatorio" value="<?php echo $campos_obligatorio; ?>" placeholder="<?php _t("Obligatorio"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_seleccionado" value="<?php echo $campos_seleccionado; ?>" placeholder="<?php _t("Seleccionado"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_desactivado" value="<?php echo $campos_desactivado; ?>" placeholder="<?php _t("Desactivado"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_orden" value="<?php echo $campos_orden; ?>" placeholder="<?php _t("Orden"); ?>"></td> 
 <td><input class="form-control" type="text" name="campos_estatus" value="<?php echo $campos_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 