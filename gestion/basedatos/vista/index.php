<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("basedatos"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=basedatos&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php $ganchos=array(); basedatos_thead($ganchos); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "basedatos", $_usuarios_grupo)){
             //   include "./basedatos/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($basedatos = mysql_fetch_array($sql)) {

                    include "./basedatos/reg/reg.php";

                    $campo_disponibles = basedatos_campos_disponibles();

                    echo "<tr>";
                    include "./basedatos/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "basedatos", $_usuarios_grupo)){
                            //   include "./basedatos/vista/tr_anadir.php";

                           }
                  ?>
                   <?php basedatos_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>