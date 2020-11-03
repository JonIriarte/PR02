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
	require_once "../model/mesaDAO.php";
	$mesadao = new MesaDao();
    $mesa = $mesadao->lecturamesa($_GET['id_mesa']);
    if (isset($_POST['disponible_mesa'])) {
    	$actdisponible= new MesaDao();
    	$actualizar=$actdisponible->updateDisponible();
    }
  	?>
	<form action="./modificar.php" method="POST">
		<label for="id_mesa">ID:</label><br>
    	<input type="text" name="id_mesa" value="<?php echo $_GET['id_mesa'];?>"><br>
    	<label for="disponible_mesa">Disponible:</label><br>
    	<input type="text" name="disponible_mesa" id="disponible_mesa" value="<?php echo $mesa['disponible_mesa'];?>"><br><br>
    	<input type="submit" value="Submit" name="b_actualizar">
    </form> 
</body>
</html>


