<?php
    require_once '../controller/session_controller.php';
    include '../model/reservaDAO.php';  
if (isset($_POST['telefono'])){
    $mostrar=new ReservaDao; 
    echo $mostrar->MostrarAnularReserva($_POST['telefono']); 
    
    
    // $anular=new ReservaDao(); 
    // echo $anular->AnularReserva($_GET['id_reserva']); 

}else{
    header('Location:./zona.camareros.php');
}
echo $_GET['id_reserva']; 
?>

