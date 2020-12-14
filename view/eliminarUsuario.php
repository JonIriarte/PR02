<?php
require_once '../controller/session_controller.php';

$id=$_GET['id_user']; 

 $borrar_usuario=new UsuarioDao; 
 $borrar_usuario->deleteUser($id); 

 
?>