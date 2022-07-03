<!doctype html>
<?php
include("../Session/sessionUser.php");
include("../Diseños/header.html");
?>
<html>

<head>
<meta charset="UTF-8">
        <title>Eliminar Usuario</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <form method="post" action="eliminar2.php">
  <h3>Ingrese su contraseña:</h3>
    <input type="password" name="codigo" required="" placeholder="Contraseña">
    <br>
    <input type="submit" value="Eliminar">
  </form>
</body>

</html>