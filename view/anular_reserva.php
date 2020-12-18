<?php
    require_once '../controller/session_controller.php';
    include '../model/reservaDAO.php';  
if (isset($_POST['telefono'])){
    $mostrar=new ReservaDao; 
    echo $mostrar->MostrarAnularReserva($_POST['telefono']); 
    
    
    

}else{
    header('Location:./zona.camareros.php');
}
if(isset($_GET['id_reserva'])){
$anular=new ReservaDao(); 
echo $anular->AnularReserva($_GET['id_reserva']); 
}
?>

