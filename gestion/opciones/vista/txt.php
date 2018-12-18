<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
opciones_id : %opciones_id%
opciones_campo : %opciones_campo%
opciones_opcion : %opciones_opcion%
opciones_valor : %opciones_valor%
opciones_orden : %opciones_orden%
opciones_estatus : %opciones_estatus%
";

                include "./opciones/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>