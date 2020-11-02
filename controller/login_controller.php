<?php
include '../model/camarero.php';
include '../model/camareroDAO.php';
if (isset($_POST['nombre'])) {
    $camarero = new Admin($_POST['nombre'], md5($_POST['password']));
    $camareroDAO = new AdminDAO();
    if($camareroDAO->login($camarero)){
        echo 'perfect';
        // establecer sesiones
        // redirección a la zona de administración mesas
        header('Location: ../admin.page.php');
    }else {
        header('Location: ../login.php');//sino está bien hecho el login volvemos a la página de login.
        echo "fallo";
    }
}else {
    header('Location: ../login.php');
    //echo "no entra en el primer if";
}