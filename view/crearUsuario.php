<?php
    require_once '../controller/session_controller.php';
    
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $status=$_POST['status']; 
    $profile=$_POST['profile']; 

    $crear_usuario=new UsuarioDao; 
    $crear_usuario->createUser($nombre,$apellido,$email,$password,$status,$profile);