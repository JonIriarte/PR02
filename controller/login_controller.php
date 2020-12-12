<?php
//Incluir las rutas de las clases necesarias para hacer conexión
include '../model/usuario.php'; 
include '../model/usuarioDAO.php';
//Función para ver de qué trabaja el usuario: 
echo "fuera del login()"; 
if (isset($_POST['email'])) {
    $usuario = new Usuario($_POST['email'], md5($_POST['password']));
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
        
    }
} else {
   header('Location: ../view/login.php');
   
}
}

?>