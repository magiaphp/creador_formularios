<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "basedatos", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=basedatos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="basedatos">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="basedatos_id" value="<?php echo $basedatos_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="basedatos_basedatos" value="<?php echo $basedatos_basedatos; ?>" placeholder="<?php _t("Basedatos"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 