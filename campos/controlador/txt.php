 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "campos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $campos_id 		= mysql_real_escape_string($_REQUEST['campos_id']);   
     include "./campos/modelos/ver.php"; 
     include "./campos/reg/reg.php"; 
     include "./campos/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
