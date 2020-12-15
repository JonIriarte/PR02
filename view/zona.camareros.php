<!DOCTYPE html>
<html lang="es">
<head>
	<title>Deux Moulins</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>

<h1 class="titulo">Página principal</h1>

	<?php
		require_once '../controller/session_controller.php';
	?>
	<!-- Formulairo para hacer reservas -->
	<form action="./hacer_reserva.php" method="POST">
		<label for="dia">DÍA</label>
		<input type="date" id="dia" name="dia" required>
		<label for="hora">HORA</label >
		<select name="hora" id="hora" required>
			<option >-----</option>
			<option value="13">13:00</option>
			<option value="14">14:00</option>
			<option value="15">15:00</option>
			<option value="20">20:00</option>
			<option value="21">21:00</option>
		</select>
		<br>
		<label for="mesa">MESA</label>
		<select name="mesa" id="mesa" required>
			<option >-----</option>
			<option value="1">1 -1 plaza</option>
			<option value="2">2 -1 plaza</option>
			<option value="3">3 -1 plaza</option>
			<option value="4">4 -1 plaza</option>
			<option value="5">5 -2 plazas</option>
			<option value="6">6 -2 plazas</option>
			<option value="7">7 -2 plazas</option>
			<option value="8">8 -2 plazas</option>
			<option value="9">9 -2 plazas</option>
			<option value="10">10 -2 plazas</option>
			<option value="11">11 -4 plazas</option>
			<option value="12">12 -4 plazas</option>
			<option value="13">13 -4 plazas</option>
			<option value="14">14 -4 plazas</option>
			<option value="15">15 -2 plazas</option>
			<option value="16">16 -2 plazas</option>
		</select>
		<br>
		<label for="nombre">NOMBRE</label>
		<input type="text" id="nombre" name="nombre" required><br>
		<label for="telefono">TELÉFONO</label>
		<input type="number" name="telefono" id="telefono" required>
		<input type="submit" value="Reservar" >
	</form>

	<div class="body">
		<div class="column" >
			<h2>RESERVAS</h2>
			<p>Aquí se van a mostrar las resevras</p>
  		</div>
	</div>
</body>
</html>