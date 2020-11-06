<!DOCTYPE html>
<html>
<head>
	<title>Mantenimiento</title>
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