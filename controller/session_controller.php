<?php 
require_once '../model/camarero.php';
require_once '../model/mantenimiento.php';
session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location:../view/login.php');//Si no está seteada la variable nombre_camarero volvemos al login.
}
echo '<div style="margin-right:2%"><h1 style="text-align: right; margin-top: 3%;">Bienvenid@, '.$_SESSION['nombre']->getNombre().'</h1><h2 style="text-align: center; background-color: grey; border: 2px solid black; width: 15%; border-radius: 30px; margin-left: 75%"><a href="../controller/logout_controller.php">Cerrar Sesión</a></h2></div>';

?>