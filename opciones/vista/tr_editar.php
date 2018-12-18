<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "opciones", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=opciones&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="opciones">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="opciones_id" value="<?php echo $opciones_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="opciones_campo" value="<?php echo $opciones_campo; ?>" placeholder="<?php _t("Campo"); ?>"></td> 
 <td><input class="form-control" type="text" name="opciones_opcion" value="<?php echo $opciones_opcion; ?>" placeholder="<?php _t("Opcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="opciones_valor" value="<?php echo $opciones_valor; ?>" placeholder="<?php _t("Valor"); ?>"></td> 
 <td><input class="form-control" type="text" name="opciones_orden" value="<?php echo $opciones_orden; ?>" placeholder="<?php _t("Orden"); ?>"></td> 
 <td><input class="form-control" type="text" name="opciones_estatus" value="<?php echo $opciones_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 