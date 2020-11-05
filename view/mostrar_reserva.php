<!DOCTYPE html>
<html>
<head>
	<title>Estadísticas</title>
</head>
<body>

	<?php 
		require_once '../controller/session_controller.php'; 
	?>
	<div id=volver><h2><a href="./zona.admin.php">VOLVER</h2></a></div>  
	<table cellpadding="6" cellspacing="6">
		<tr>
			<th>Mesa</th>
			<th>Lugar mesa</th>
			<th>Veces reservada</th>
		</tr>
	<?php
		include '../model/reservaDAO.php';
		$mostrar_reserva=new ReservaDao;
		echo $mostrar_reserva->contarReservas();
	?>
	<table cellpadding="6" cellspacing="6">
		<tr>
			<th>ID Reserva</th>
			<th>Fecha Reserva</th>
			<th>Fin Reserva</th>
			<th>Nombre camarero</th>
			<th>Mesa</th>
		</tr>
	<?php
		$mostrar_reserva=new ReservaDao;
		echo $mostrar_reserva->mostrarReservas();
	?>
	</table>
	<br>
	
</body>
</html>


