<?php
include("../Diseños/header.html");
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <form action="../Session/session.php" method="POST">

        <h3>Ingresar Email:</h3>
        <input type="email" name="email" required placeholder="Ingresar email" />
        <h3>Ingresar contraseña:</h3>
        <a href="./olvidarContraseña.php">¿Olvidó su contraseña?</a>
        <input type="password" name="pass" required placeholder="Ingresar contraseña" /><br><br>

        <input type="submit" value="INGRESAR" />

    </form>
</body>

</html>