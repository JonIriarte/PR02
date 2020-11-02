<?php 
require_once './model/camarero.php';
session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location:./login.php');//sino está seteada la variable nombre_camarero volvemos al login.
}
echo '<div><h1>Bienvenido '.$_SESSION['nombre']->getNombre().'</h1><h1 style="float: right;"><a href="./controller/logout_controller.php">Logout</a></h1></div>';   
?>