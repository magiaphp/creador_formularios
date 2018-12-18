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
<th><?php _t("Basedatos"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "basedatos", $_usuarios_grupo)){
             //   include "./basedatos/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($basedatos = mysql_fetch_array($sql)) {
            include "./basedatos/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "basedatos", $_usuarios_grupo)){
                    include "./basedatos/vista/tr.php";
                   // include "./basedatos/vista/tr_editar.php";
                }else{
                    include "./basedatos/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "basedatos", $_usuarios_grupo)){
             //   include "./basedatos/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


