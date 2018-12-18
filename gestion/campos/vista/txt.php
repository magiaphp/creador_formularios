<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
campos_id : %campos_id%
campos_base_datos : %campos_base_datos%
campos_tabla : %campos_tabla%
campos_campo : %campos_campo%
campos_label : %campos_label%
campos_tipo : %campos_tipo%
campos_clase : %campos_clase%
campos_nombre : %campos_nombre%
campos_identificador : %campos_identificador%
campos_marca_agua : %campos_marca_agua%
campos_valor : %campos_valor%
campos_solo_lectura : %campos_solo_lectura%
campos_obligatorio : %campos_obligatorio%
campos_seleccionado : %campos_seleccionado%
campos_desactivado : %campos_desactivado%
campos_orden : %campos_orden%
campos_estatus : %campos_estatus%
";

                include "./campos/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>