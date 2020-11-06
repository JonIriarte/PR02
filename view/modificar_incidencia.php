<!DOCTYPE html>
<html>
<head>
	<title>Acabar incidencia</title>
</head>
<body>
	<?php 
	require_once "../model/mesaDAO.php";
    require_once "../model/incidenciaDAO.php";
	$mesadao = new MesaDao();
	$mesa1=$_GET['id_mesa'];
    //$mesa=$mesadao->lecturamesa($_GET['id_mesa']);
    $mesa=$mesadao->lecturamesa($mesa1);

    if (isset($_POST['b_incidencia'])) {
    	$updateIncidencia= new IncidenciaDao();
    	$update=$updateIncidencia->modificarIncidencia();
    }
 
	?>

<h2 class="volver"><a href="./zona.mantenimiento.php">Volver atrás</h2></a>

	<form action="./modificar_incidencia.php" method="POST" class="reser">
    	<div class="id"><label for="id_mesa">Mesa:</label><br></div>
    	<input type="text" name="" value="<?php echo $mesa1;?>" disabled><br><br>
    	<input type="hidden" name="id_mesa" value="<?php echo $mesa1;?>" >
    	<input type="submit" value="Mesa arreglada" name="b_incidencia">
	</form>
</body>
</html>