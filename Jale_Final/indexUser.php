<?php
include("Session/sessionUser.php");
include("Diseños/header.html");
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Usuario</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h2>Bienvenid@ al sistema</h2>
    <form action="" method="POST">
        <br><br><br>
        <a href="Formulario/modificarperfil.php" class="boton">Modificar Perfil</a><br><br><br>
        <a href="Formulario/sugerencia.php" class="boton">Agregar Sugerencias</a><br><br><br>
        <a href="Formulario/eliminar.php" class="boton">Eliminar Cuenta</a><br><br><br>
        <a href="Session/killSession.php" class="boton">Cerrar Sesión</a><br><br><br>

    </form>
</body>

</html>
