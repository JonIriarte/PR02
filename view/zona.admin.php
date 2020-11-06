<!DOCTYPE html>
<html lang="es">
<head>
	<title>Deux Moulins</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>

<h1 class="titulo">Página Principal</h1>

	<?php
		require_once '../controller/session_controller.php';
	?>
	<button><a href="./mostrar_reserva.php">Reservas</a></button>

	<form action="./zona.admin.php" method="POST">
		<?php
  		include '../model/connection.php';
		$sql="SELECT distinct lugar_mesa FROM mesa";
		$sentencia=$pdo->prepare($sql);
		$sentencia->execute();
		$lista_filtro=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		echo "<select name='lugares' style='float:left';>";
		foreach ($lista_filtro as $lugar) {
			echo "<option value='".$lugar['lugar_mesa']."'>".$lugar['lugar_mesa']."</option>";
		}
			echo "<option selected value='Todos'>Todos</option>";
		echo "</select><br>";
		?>
	<div class="form">
		<input type="checkbox" id="disponible" name="disponible" value="disponible">
	</div>
	<label for="disponible"> Disponible</label><br>
	<input type="submit" value="Filtrar" name="b_filtro">
	</form>
	<?php
		include '../model/mesaDAO.php';
		if (empty($_POST['b_filtro'])){
			$mostrar_mesa=new MesaDao;
			echo $mostrar_mesa->mostrar();
		} else if ($_POST['lugares']=='Todos') {
    		$mostrar_mesa=new MesaDao;
			echo $mostrar_mesa->mostrar();
		} else if ($_POST['lugares']!='Todos'){
        	$filtros_alu=new MesaDao;
        	echo $filtros_alu->filtroLugar();
 		}
	?>
	<div class="body"></div>
</body>
</html>