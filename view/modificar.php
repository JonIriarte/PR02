<!DOCTYPE html>
<html>
<head>
	<title>Reservar mesa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="../css/mesas.css">
</head>
<body>

	<?php
		require_once '../controller/session_controller.php';
		$id_camarero=$_SESSION['nombre']->getIdCamarero();
	?>
	
	
	<?php
	require_once "../model/mesaDAO.php";
	$mesadao = new MesaDao();
	$mesa1=$_GET['id_mesa'];
    //$mesa=$mesadao->lecturamesa($_GET['id_mesa']);
    $mesa=$mesadao->lecturamesa($mesa1);
    if ($mesa['disponible_mesa']==1) {
        $boton="Reservar mesa";
    } else if ($mesa['disponible_mesa']==0) {
        $boton="Liberar mesa";
    }
    if (isset($_POST['disponible_mesa'])) {
    	$actdisponible= new MesaDao();
    	$actualizar=$actdisponible->updateDisponible();
    }
  	?><div id="volver"><h2><a href="./zona.admin.php">VOLVER</h2></a></div>

	<form action="./modificar.php" method="POST" class="reser">
    	<div class="id"><label for="id_mesa">Mesa:</label><br></div>
    	<input type="text" name="" value="<?php echo $mesa1;?>" disabled><br><br>
    	<input type="hidden" name="disponible_mesa" id="disponible_mesa" value="<?php echo $mesa['disponible_mesa'];?>"><br><br>
    	<input type="hidden" name="id_mesa" value="<?php echo $mesa1;?>" >
    	<input type="hidden" name="id_camarero" value="<?php echo $id_camarero;?>" >
    	<input type="submit" value="<?php echo $boton;?>" name="b_actualizar">
	</form> 
	<div class="body"></div>
</body>
</html>


