<?php
include("../Diseños/header.html");
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Registar Usuario</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <form action="registro2.php" method="POST">
            
            <h3>Ingresar nombre:</h3>
            <input type="text" name="nombre" required="" placeholder="Ingresar nombre"/>
            <h3>Ingresar Email:</h3>
            <input type="email" name="email" required="" placeholder="Ingresar email"/>
            <h3>Ingresar contraseña:</h3>
            <input type="password" name="pass" required="" placeholder="Contraseña"/>
            <h3>Ingresar contraseña nuevamente:</h3>
            <input type="password" name="pass2" required="" placeholder="Contraseña"/>
            <br>
            <br>
            <input type="submit" value="INGRESAR" />
            
        </form>
    </body>
</html>
