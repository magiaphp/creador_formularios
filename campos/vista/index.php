<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("campos"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=campos&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php $ganchos=array(); campos_thead($ganchos); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "campos", $_usuarios_grupo)){
             //   include "./campos/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($campos = mysql_fetch_array($sql)) {

                    include "./campos/reg/reg.php";

                    $campo_disponibles = campos_campos_disponibles();

                    echo "<tr>";
                    include "./campos/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "campos", $_usuarios_grupo)){
                            //   include "./campos/vista/tr_anadir.php";

                           }
                  ?>
                   <?php campos_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>