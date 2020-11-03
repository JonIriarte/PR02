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
		include '../model/mesaDAO.php';
		$mostrar_mesa=new MesaDao;
		echo $mostrar_mesa->mostrar();
	?>
</body>
</html>