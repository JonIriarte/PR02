<?php
if (isset($_POST['telefono'])){
    echo $_POST['telefono']; 

    $anular=new ReservaDao
    $anular->anularReserva($_POST['telefono']); 

}else{
    header('Location:./zona.camareros.php');
}


?>