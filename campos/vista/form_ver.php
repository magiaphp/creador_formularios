<?php /**
  magia_version: 0.0.11
 * */ ?>
<?php include "tabs.php"; ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Fomulario"); ?> 
    
</h2>



<form class="form-horizontal">
    
    
    <?php
        $i = 1; // cuenta lineas
        while ($campos = mysql_fetch_array($sql)) {

            include "./campos/reg/reg.php";

            $campo_disponibles = campos_campos_disponibles();
            
            $solo_lectura   = ($campos_solo_lectura)?' readonly="" ': '' ;
            $requerido      = ($campos_obligatorio)?' required="" ': '' ;
            $seleccionado   = ($campos_seleccionado)?' selected ': '' ;
            $desactivado    = ($campos_desactivado)?' disabled="" ': '' ;

            switch ($campos_tipo) {
                case 'text':                
                case 'password':
                    include "./campos/vista/tr_form_ver.php";
                    break;
                
                case 'info':                
                case 'password':
                    include "./campos/vista/tr_form_ver_info.php";
                    break;
                
                case 'textarea':                                
                    include "./campos/vista/tr_form_ver_textarea.php";
                    break;
                
                case 'date':                
                    include "./campos/vista/tr_form_ver_date.php";
                    break;
                
                case 'checkbox':
                    include "./campos/vista/tr_form_ver_checkbox.php";
                    break;
                
                case 'radio':
                    include "./campos/vista/tr_form_ver_radio.php";
                    break;
                
                case 'select':
                    include "./campos/vista/tr_form_ver_select.php";
                    break;

                default:
                    break;
            }
            
            
            $i++;
        }
        ?>
    
    
    
    
   
    
    
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
    
    
</form>



