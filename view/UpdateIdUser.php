<?php
require_once '../controller/session_controller.php';
 $nombre=$_POST['nombre']; 
 $apellido=$_POST['apellido']; 
 $email=$_POST['email']; 
 $password=$_POST['password']; 
 $status=$_POST['status']; 
 $profile=$_POST['profile']; 
$id=$_POST['id']; 


$mostrar_usuario=New UsuarioDao; 
$mostrar_usuario->updateIdUser($id,$nombre,$apellido,$email,$password,$status,$profile) 

?>