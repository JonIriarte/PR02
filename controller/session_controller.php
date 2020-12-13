<?php 
require_once '../model/usuario.php';
require_once '../model/usuarioDAO.php'; 
session_start();
if (!isset($_SESSION['nombre'])) {
   header('Location:../view/login.php');//Si no está seteada la variable nombre volvemos al login.
}
echo '<div style="margin-right:2%"><h1 style="text-align: right; margin-top: 3%;">Bienvenid@, '.$_SESSION['nombre'].'</h1><h2 style="text-align: center; background-color: grey; border: 2px solid black; width: 15%; border-radius: 30px; margin-left: 85%;"><a href="../controller/logout_controller.php">Cerrar Sesión</a></h2></div>';

?>