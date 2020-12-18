<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <title>ANULAR RESERVAS</title>
</head>
<body>
<a href="./zona.camareros.php" id="volver">VOLVER</a>
<div class="reservas">
    <?php
//¿Qué tal si integro esto en una página HTML con el estilo del resto de la app?
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
</div>


