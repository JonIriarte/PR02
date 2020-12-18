<?php
           require_once '../controller/session_controller.php';
           include '../model/reservaDAO.php'; 
        if (isset($_POST['dia']) && isset($_POST['hora']) && isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['mesa']) && ($_POST['dia']!="") && ($_POST['hora']!="")&& ($_POST['nombre']!="")&& ($_POST['telefono']!="")&& ($_POST['mesa']!="")  ){
            $dia=$_POST['dia']; 
            $hora=$_POST['hora'];
            $nombre=$_POST['nombre']; 
            $telefono=$_POST['telefono']; 
            $id_mesa=$_POST['mesa']; 
            

            $mostrar_reserva=new reservaDAO; 
            $mostrar_reserva->hacerReserva($dia,$hora,$nombre,$telefono,$id_mesa); 

        } else {
            header('Location:./zona.camareros.php'); 
        }
?>