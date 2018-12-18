 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "opciones"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $opciones_id 		= mysql_real_escape_string($_REQUEST['opciones_id']);   
     include "./opciones/modelos/ver.php"; 
     include "./opciones/reg/reg.php"; 
     include "./opciones/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
