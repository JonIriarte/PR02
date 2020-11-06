<!DOCTYPE html>
<html>
<head>
	<title>Mantenimiento</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="../css/mantenimiento.css">
</head>
<body>
	<?php
		require_once '../controller/session_controller.php';
	?>
	<?php
	    require_once "../model/incidenciaDAO.php";
		$mostrar_mesa=new IncidenciaDao;
		echo $mostrar_mesa->mostrar();
	?>
</body>
</html>