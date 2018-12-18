<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, basedatos_campos_a_mostrar())) {
                                echo "<td>$basedatos[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=basedatos&c=ver&basedatos_id='.$basedatos_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=basedatos&c=editar&basedatos_id='.$basedatos_id.'>'._tr("Editar").'</a>  
                      
                </td>';  