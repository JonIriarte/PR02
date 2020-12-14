<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR USUARIO</title>
</head>
<body>
        <?php
         require_once '../controller/session_controller.php';
         $id=$_GET['id_user']; 
        $mostrar_usuario=New UsuarioDao; 
         echo $mostrar_usuario->readIdUser($id); 
        ?>
        <form action="UpdateIdUser.php" method="POST">
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
        <br><br>
        <input type="hidden" name="id" value="<?php echo $id;?>"><br>
        <input type="submit" id="submit" value="Entrar">
        </form>
</body>
</html>