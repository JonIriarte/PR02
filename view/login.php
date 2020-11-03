<!DOCTYPE html>
<html>

<head>
	<title>Deux Moulins</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

<div class="header">
	<div>Deux<span>Moulins</span></div>
</div>
<br>
<div>
  <form action="../controller/login_controller.php" method="POST">
  <h2>Inicio de sesión</h2>
    <label for="nombre">Email:</label>
    <input type="text" id="nombre" name="nombre">

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password">
  
    <input type="submit" id="submit" value="Submit">
  </form>
  <div id="message" style="color: red;"></div>
</div>

</body>
</html>