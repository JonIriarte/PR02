<?php
include '../model/camarero.php';
include '../model/camareroDAO.php';
include '../model/mantenimiento.php';
include '../model/mantenimientoDAO.php';
if (isset($_POST['nombre'])) {
    $camarero = new Camarero($_POST['nombre'], md5($_POST['password']));
    $camareroDAO = new CamareroDao();
    $mantenimiento = new Mantenimiento($_POST['nombre'], md5($_POST['password']));
    $mantenimientoDAO = new MantenimientoDao();
    if($camareroDAO->login($camarero)){
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