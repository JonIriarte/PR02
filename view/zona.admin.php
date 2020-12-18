<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <title>Administración</title>
</head>
<body id="body">
<?php
		require_once '../controller/session_controller.php';
	?>

    <h1 class="titulo">ADMINISTRACIÓN</h1>

    <?php
		$mostrar_usuarios=new UsuarioDao;
        echo $mostrar_usuarios->readUser();
	?>

    <h3>CREAR USUARIO</h3>
    <form action="crearUsuario.php" method="POST" id="crear">
        <label for="nombre"></label>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <label for="apellido"></label>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <label for="email"></label>
        <br><br>
        <input type="text" id="email" name="email" placeholder="Correo" required>
        
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="Contraseña" required> 
        <br><br>
        <select name="profile" id="profile" required>
            <option value="Administrador">Administrador</option>
            <option value="Mantenimiento">Manteniminento</option>
            <option value="Camarero">Camarero</option>
        </select>
        <select name="status" id="status" required>
            <option value="Baja">Baja</option>
            <option value="Vacaciones">Vacaciones</option>
            <option value="Trabaja">Trabaja</option>
        </select>
        <br>
        <input type="submit" id="submit" value="Crear">
        </form>
        <br><br>
    <h3>USUARIOS</h3>
</body>
</html>