 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "basedatos"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $basedatos_id 		= mysql_real_escape_string($_REQUEST['basedatos_id']); 
 include "./basedatos/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
