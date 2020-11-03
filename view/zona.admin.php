<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
</head>
<body>
	<?php
		require_once '../controller/session_controller.php';
	?>
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
			echo "<option value='Todos'>Todos</option>";
		echo "</select><br><br>";
		?>
	<input type="checkbox" id="disponible" name="disponible" value="disponible">
	<label for="disponible"> Disponible</label><br><br>
	<input type="submit" value="Filtrar" name="b_filtro"><br><br>
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
        	$filtros_alu->filtroLugar();
 		}
	?>
</body>
</html>