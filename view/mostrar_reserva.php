<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		require_once '../controller/session_controller.php'; 
	?>
	<?php
		include '../model/reservaDAO.php';
		$mostrar_reserva=new ReservaDao;
		echo $mostrar_reserva->mostrarReservas();
	?>
	<br>
	<button><a href="./zona.admin.php">Volver atrás</button></a>
</body>
</html>


