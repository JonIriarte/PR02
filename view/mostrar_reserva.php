<!DOCTYPE html>
<html>
<head>
	<title>Estadísticas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="../css/estadis.css">
</head>

<body>

<div class="body"></div>

	<?php 
		require_once '../controller/session_controller.php'; 
	?>

	<div id=volver><h2><a href="./zona.admin.php">VOLVER</h2></a></div>  
	<table cellpadding="6" cellspacing="6" class="est">
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

	</table>

	<br>

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


