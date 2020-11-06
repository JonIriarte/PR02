<!DOCTYPE html>
<html>
<head>
	<title>Control de incidencias</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="../css/mantenimiento.css">
</head>
<body>
<div class="body"></div>

<h1 class="titulo">Control de incidencias</h1>

    <?php
        require_once '../controller/session_controller.php';
    ?>
	<?php 
	require_once "../model/mesaDAO.php";
    require_once "../model/incidenciaDAO.php";
	$incidenciadao = new IncidenciaDao();
	$incidencia1=$_GET['id_mesa'];
    $incidencia=$incidenciadao->lecturaincidencia($incidencia1);

    if (isset($_POST['b_incidencia'])) {
    	$updateIncidencia= new IncidenciaDao();
    	$update=$updateIncidencia->modificarIncidencia();
    }
 
	?>

<h2 class="volver"><a href="./zona.mantenimiento.php">Volver atrás</h2></a>

	<form action="./modificar_incidencia.php" method="POST" class="reser">
    	<div class="id"><label for="id_mesa">Mesa:</label><br></div>
    	<input type="text" name="" value="<?php echo $incidencia1;?>" disabled><br><br>
    	<div class="id"><label for="descripcion_incidencia">Descripcion:</label><br></div>
    	<input type="text" name="" value="<?php echo $incidencia['descripcion_incidencia'];?>" disabled><br><br>
    	<input type="hidden" name="descripcion_incidencia" value="<?php $incidencia['descripcion_incidencia'];?>" >
    	<input type="hidden" name="id_mesa" value="<?php echo $incidencia1;?>" >
    	<input type="submit" value="Mesa arreglada" name="b_incidencia">
	</form>
</body>
</html>