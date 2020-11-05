<?php 
require_once '../model/camarero.php';
session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location:../view/login.php');//Si no está seteada la variable nombre_camarero volvemos al login.
}
echo '<div><h1>Bienvenid@, '.$_SESSION['nombre']->getNombre().'</h1><h2 style="text-align:right;"><a href="../controller/logout_controller.php">Cerrar sesión</a></h2></div>';

?>