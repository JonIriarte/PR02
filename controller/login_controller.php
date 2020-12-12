<?php
include '../model/usuario.php'; 
include '../model/usuarioDAO.php';
if (isset($_POST['nombre'])) {
    $usuario = new Usuario($_POST['nombre'], md5($_POST['password']));
    $usuarioDAO = new UsuarioDao();
   
    if($usuarioDAO->login($usuario)){
        echo "Primer if"; 
       if($usuario->getProfile()=='Administrador'){
       // establecer sesiones
        // redirección a la zona de  administración
        header('Location: ../view/zona.admin.php');

    } else if ($usuario->getProfile()== 'Mantenimiento') {
        echo 'perfect';
        // establecer sesiones
        // redirección a la zona de  mantenimiento
        header('Location: ../view/zona.mantenimiento.php');
    } else if ($usuario->getProfile()== 'Camarero') {
        echo 'perfect';
        // establecer sesiones
        // redirección a la zona de de camareros
        header('Location: view\zona.camareros.php');    
    } else {
       header('Location: ../view/login.php');//sino está bien hecho el login volvemos a la página de login.
        //echo "fallo";
    }
} else {
   header('Location: ../view/login.php');
    //echo "no entra en el primer if";
}
}

?>