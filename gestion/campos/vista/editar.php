<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="campos"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="campos_id" value="<?php echo $campos_id; ?>"> 

 <?php 
                        $campos = array(array(
"type" => "text",
"name" => "campos_base_datos",
"value" => "$campos_base_datos",                                                                        
    
"for" => "campos_base_datos",
"label" => "base_datos",
"class" => "form-control",
"id" => "campos_base_datos",
"placeholder" => "base_datos",
                    ),array(
"type" => "text",
"name" => "campos_tabla",
"value" => "$campos_tabla",                                                                        
    
"for" => "campos_tabla",
"label" => "tabla",
"class" => "form-control",
"id" => "campos_tabla",
"placeholder" => "tabla",
                    ),array(
"type" => "text",
"name" => "campos_campo",
"value" => "$campos_campo",                                                                        
    
"for" => "campos_campo",
"label" => "campo",
"class" => "form-control",
"id" => "campos_campo",
"placeholder" => "campo",
                    ),array(
"type" => "text",
"name" => "campos_label",
"value" => "$campos_label",                                                                        
    
"for" => "campos_label",
"label" => "label",
"class" => "form-control",
"id" => "campos_label",
"placeholder" => "label",
                    ),array(
"type" => "text",
"name" => "campos_tipo",
"value" => "$campos_tipo",                                                                        
    
"for" => "campos_tipo",
"label" => "tipo",
"class" => "form-control",
"id" => "campos_tipo",
"placeholder" => "tipo",
                    ),array(
"type" => "text",
"name" => "campos_clase",
"value" => "$campos_clase",                                                                        
    
"for" => "campos_clase",
"label" => "clase",
"class" => "form-control",
"id" => "campos_clase",
"placeholder" => "clase",
                    ),array(
"type" => "text",
"name" => "campos_nombre",
"value" => "$campos_nombre",                                                                        
    
"for" => "campos_nombre",
"label" => "nombre",
"class" => "form-control",
"id" => "campos_nombre",
"placeholder" => "nombre",
                    ),array(
"type" => "text",
"name" => "campos_identificador",
"value" => "$campos_identificador",                                                                        
    
"for" => "campos_identificador",
"label" => "identificador",
"class" => "form-control",
"id" => "campos_identificador",
"placeholder" => "identificador",
                    ),array(
"type" => "text",
"name" => "campos_marca_agua",
"value" => "$campos_marca_agua",                                                                        
    
"for" => "campos_marca_agua",
"label" => "marca_agua",
"class" => "form-control",
"id" => "campos_marca_agua",
"placeholder" => "marca_agua",
                    ),array(
"type" => "text",
"name" => "campos_valor",
"value" => "$campos_valor",                                                                        
    
"for" => "campos_valor",
"label" => "valor",
"class" => "form-control",
"id" => "campos_valor",
"placeholder" => "valor",
                    ),array(
"type" => "text",
"name" => "campos_solo_lectura",
"value" => "$campos_solo_lectura",                                                                        
    
"for" => "campos_solo_lectura",
"label" => "solo_lectura",
"class" => "form-control",
"id" => "campos_solo_lectura",
"placeholder" => "solo_lectura",
                    ),array(
"type" => "text",
"name" => "campos_obligatorio",
"value" => "$campos_obligatorio",                                                                        
    
"for" => "campos_obligatorio",
"label" => "obligatorio",
"class" => "form-control",
"id" => "campos_obligatorio",
"placeholder" => "obligatorio",
                    ),array(
"type" => "text",
"name" => "campos_seleccionado",
"value" => "$campos_seleccionado",                                                                        
    
"for" => "campos_seleccionado",
"label" => "seleccionado",
"class" => "form-control",
"id" => "campos_seleccionado",
"placeholder" => "seleccionado",
                    ),array(
"type" => "text",
"name" => "campos_desactivado",
"value" => "$campos_desactivado",                                                                        
    
"for" => "campos_desactivado",
"label" => "desactivado",
"class" => "form-control",
"id" => "campos_desactivado",
"placeholder" => "desactivado",
                    ),array(
"type" => "text",
"name" => "campos_orden",
"value" => "$campos_orden",                                                                        
    
"for" => "campos_orden",
"label" => "orden",
"class" => "form-control",
"id" => "campos_orden",
"placeholder" => "orden",
                    ),array(
"type" => "text",
"name" => "campos_estatus",
"value" => "$campos_estatus",                                                                        
    
"for" => "campos_estatus",
"label" => "estatus",
"class" => "form-control",
"id" => "campos_estatus",
"placeholder" => "estatus",
                    ),);

        foreach ($campos as $key => $value) {

        // echo var_dump($value);


        switch ($value['type']) {
            /**
             * hidden
             */
            case 'hidden':
                echo ' <input type="hidden" name="' . $value['name'] . '" value="' . $value['value'] . '">  ';
                break;
            /**
             * P
             * 
             */
            case 'p':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                               <p class="form-control-static">'.$value['value'].'</p>
                            </div> 
                          </div> ';


                break;
            /**
             * Texto
             */
            case 'text':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                              <input 
                                  type="text" 
                                  class="form-control" 
                                  name="' . $value['name'] . '" 
                                  id="' . $value['id'] . '" 
                                  placeholder="' . _tr($value['placeholder']) . '" 
                                  value="' . $value['value'] . '"  
                                  > 
                            </div> 
                          </div> ';


                break;
            /**
             * Email
             */
            case 'email':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                              <input 
                                  type="email" 
                                  class="form-control" 
                                  name="' . $value['name'] . '" 
                                  id="' . $value['id'] . '" 
                                  placeholder="' . _tr($value['placeholder']) . '" 
                                  value="' . $value['value'] . '"  
                                  > 
                            </div> 
                          </div> ';


                break;
            case 'textarea':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                              <textarea class="form-control" >' . $value['value'] . '</textarea> 
                            </div> 
                          </div> ';


                break;
            /**
             * Campo tipo menu deruante 
             * <select></select>
             */
            case 'select':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                                <select class="' . $value['class'] . '" name="' . $value['name'] . '" id="' . $value['id'] . '">
                                    ';
                foreach ($value['options'] as $option_key => $option_value) {
                    $selected = ( $value['selected'] == $option_key ) ? " selected=\"\" " : "";
                    echo '<option value="' . $option_key . '" ' . $selected . ' >' . $option_value . '</option>';
                }
                echo '
                                </select>
                            </div> 
                          </div> ';
                break;
            /**
             * 
             */
            case 'checkbox':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> ';

                foreach ($value['options'] as $checkbox_key => $checkbox_value) {

                    $checked = ( in_array($checkbox_key, $value['selected']) ) ? " checked=\"\" " : "";

                    echo '<input type="checkbox" value="' . $checkbox_key . '" ' . $checked . '> ' . $checkbox_value . '<br>';
                }
                echo '
                                
                            </div> 
                          </div> ';

                break;
                /**
                 * 
                 */
            case 'radio':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> ';

                foreach ($value['options'] as $radio_key => $radio_value) {


                    $checked = ( in_array($radio_key, $value['selected']) ) ? " checked=\"\" " : "";

                    echo '    <input type="radio" name="'.$value['name'].'" value="'.$value['value'].'" '.$checked.'> ' .$radio_value . '<br>'; 
                }
                echo '
                                
                            </div> 
                          </div> ';

                break;



            /**
             * Submit
             */
            case 'submit':
                echo '<div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                    <button type="submit" class="' . $value['class'] . '">' . _tr($value['label']) . '</button> 
                </div> 
            </div>  ';
                break;
            /**
             * reset
             */
            case 'reset':
                echo '<div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                    <button type="reset" class="' . $value['class'] . '">' . _tr($value['label']) . '</button> 
                </div> 
            </div>  ';
                break;


            default:
                break;
        }
        
    }
    
?>

   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
