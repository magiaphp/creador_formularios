<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, opciones_campos_a_mostrar())) {
                                echo "<td>$opciones[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=opciones&c=ver&opciones_id='.$opciones_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=opciones&c=editar&opciones_id='.$opciones_id.'>'._tr("Editar").'</a>  
                      
                </td>';  