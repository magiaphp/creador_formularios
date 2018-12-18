<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, campos_campos_a_mostrar())) {
                                echo "<td>$campos[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=campos&c=ver&campos_id='.$campos_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=campos&c=editar&campos_id='.$campos_id.'>'._tr("Editar").'</a>  
                      
                </td>';  