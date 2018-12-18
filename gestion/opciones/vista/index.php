<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("opciones"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=opciones&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php $ganchos=array(); opciones_thead($ganchos); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "opciones", $_usuarios_grupo)){
             //   include "./opciones/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($opciones = mysql_fetch_array($sql)) {

                    include "./opciones/reg/reg.php";

                    $campo_disponibles = opciones_campos_disponibles();

                    echo "<tr>";
                    include "./opciones/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "opciones", $_usuarios_grupo)){
                            //   include "./opciones/vista/tr_anadir.php";

                           }
                  ?>
                   <?php opciones_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>