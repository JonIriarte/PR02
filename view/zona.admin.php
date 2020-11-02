<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		require_once '../controller/session_controller.php';
	?>
	<table width='40%'>
		<tr>
        	<th>Lugar mesa</th>
        	<th>Cantidad sillas mesa</th>
        	<th>Disponibilidad</th>
     	</tr>
	<?php
		include '../model/mesaDAO.php';
		$mostrar_mesa=new MesaDao;
		echo $mostrar_mesa->mostrar();
	?>
	</table>
</body>
</html>