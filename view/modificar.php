<!DOCTYPE html>
<html>
<head>
	<title>Reservar mesa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="../css/mesas.css">
</head>
<body>

    <h1 class="titulo">Reservar mesa</h1>

	<?php
		require_once '../controller/session_controller.php';
		$id_camarero=$_SESSION['nombre']->getIdCamarero();
	?>
	
	<?php
	require_once "../model/mesaDAO.php";
    require_once "../model/incidenciaDAO.php";
    $mesadao = new MesaDao();
    $mesa1=$_GET['id_mesa'];
    //$mesa=$mesadao->lecturamesa($_GET['id_mesa']);
    $mesa=$mesadao->lecturamesa($mesa1);
    if ($mesa['disponible_mesa']==1) {
        $boton="Reservar mesa";
    } else if ($mesa['disponible_mesa']==0) {
        $boton="Liberar mesa";
    }
    if (isset($_POST['b_actualizar'])) {
    	$actdisponible= new MesaDao();
    	$actualizar=$actdisponible->updateDisponible();
    }
    if (!empty($_POST['descripcion_incidencia'])){
        $insertIncidencia= new IncidenciaDao();
        $insertar=$insertIncidencia->insertIncidencia();
    } 
  	?>
    <h2 class="volver"><a href="./zona.admin.php">Volver atrás</h2></a>

	<form action="./modificar.php" method="POST" class="reser">
    	<div class="id"><label for="id_mesa">Mesa:</label><br></div>
    	<input type="text" name="" value="<?php echo $mesa1;?>" disabled><br><br>
    	<input type="hidden" name="disponible_mesa" id="disponible_mesa" value="<?php echo $mesa['disponible_mesa'];?>"><br><br>
    	<input type="hidden" name="id_mesa" value="<?php echo $mesa1;?>" >
    	<input type="hidden" name="id_camarero" value="<?php echo $id_camarero;?>" >
    	<input type="submit" value="<?php echo $boton;?>" name="b_actualizar">
	</form>
     <form action="./modificar.php" method="POST" class="inci">
        <div class="id"><label for="id_mesa">Mesa:</label><br></div>
        <input style="margin-bottom: 5%;" type="text" name="" value="<?php echo $mesa1;?>" disabled><br>
        <div class="disp"><label for="descripcion_incidencia">Descripción:</label><br></div>
        <input class="caja" type="text" name="descripcion_incidencia" placeholder="Descripción incidencia" required><br>
        <input type="hidden" name="disponible_mesa" id="disponible_mesa" value="<?php echo $mesa['disponible_mesa'];?>"><br><br>
        <input type="hidden" name="id_mesa" value="<?php echo $mesa1;?>" >
        <input type="hidden" name="id_camarero" value="<?php echo $id_camarero;?>" >
        <input type="submit" value="Incidencia" name="b_incidencia">
    </form>  
    <br><br>
	<div class="body"></div>
</body>
</html>


