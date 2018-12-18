<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?>

</h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Base_datos"); ?></th> 
<th><?php _t("Tabla"); ?></th> 
<th><?php _t("Campo"); ?></th> 
<th><?php _t("Label"); ?></th> 
<th><?php _t("Tipo"); ?></th> 
<th><?php _t("Clase"); ?></th> 
<th><?php _t("Nombre"); ?></th> 
<th><?php _t("Identificador"); ?></th> 
<th><?php _t("Marca_agua"); ?></th> 
<th><?php _t("Valor"); ?></th> 
<th><?php _t("Solo_lectura"); ?></th> 
<th><?php _t("Obligatorio"); ?></th> 
<th><?php _t("Seleccionado"); ?></th> 
<th><?php _t("Desactivado"); ?></th> 
<th><?php _t("Orden"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "campos", $_usuarios_grupo)){
             //   include "./campos/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($campos = mysql_fetch_array($sql)) {
            include "./campos/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "campos", $_usuarios_grupo)){
                    include "./campos/vista/tr.php";
                   // include "./campos/vista/tr_editar.php";
                }else{
                    include "./campos/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "campos", $_usuarios_grupo)){
             //   include "./campos/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


