<!DOCTYPE html>
<html>

<head>
	<title>Deux Moulins</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="../js/code.js"></script>
</head>

<body>

<h2>Inicio de sesión</h2>

<div class="body"></div>
  <div class="header">
    Deux<span>Moulins</span>
  </div>
<br>
  <div class="login">
    <form action="../controller/login_controller.php" method="POST" onsubmit="return validacionForm()">
      <label for="email"></label>
      <input type="text" id="email" name="email" placeholder="Usuario">
    <br><br>
      <label for="password"></label>
      <input type="password" id="password" name="password" placeholder="Contraseña">
      <br><br>
      <input type="submit" id="submit" value="Entrar">
    </form>
    <div id="message" style="color: red;"></div>
  </div>

</body>
</html>