<?php
include '../model/usuario.php'; 
include '../model/usuarioDAO.php';
if (isset($_POST['nombre'])) {
    $usuario = new Usuario($_POST['email'], md5($_POST['password']),($_POST['profile']);
    $usuarioDAO = new UsuarioDao();
   
    if($UsuarioDAO->login($usuario)){
        echo 'perfect';
        // establecer sesiones
        // redirección a la zona de administración mesas
        header('Location: ../view/zona.admin.php');

    } else if ($mantenimientoDAO->login($mantenimiento)) {
        echo 'perfect';
        // establecer sesiones
        // redirección a la zona de de mantenimiento
        header('Location: ../view/zona.mantenimiento.php');
    } else {
       header('Location: ../view/login.php');//sino está bien hecho el login volvemos a la página de login.
        //echo "fallo";
    }
} else {
   header('Location: ../view/login.php');
    //echo "no entra en el primer if";
}