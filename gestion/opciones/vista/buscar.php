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
<th><?php _t("Campo"); ?></th> 
<th><?php _t("Opcion"); ?></th> 
<th><?php _t("Valor"); ?></th> 
<th><?php _t("Orden"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "opciones", $_usuarios_grupo)){
             //   include "./opciones/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($opciones = mysql_fetch_array($sql)) {
            include "./opciones/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "opciones", $_usuarios_grupo)){
                    include "./opciones/vista/tr.php";
                   // include "./opciones/vista/tr_editar.php";
                }else{
                    include "./opciones/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "opciones", $_usuarios_grupo)){
             //   include "./opciones/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


