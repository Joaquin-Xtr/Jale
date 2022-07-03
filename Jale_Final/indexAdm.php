<?php
include("Session/validarSession.php");
include("Diseños/header.html");
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Administrador</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h2>BIENVENIDO ADMINISTRADOR!</h2>

    <br><br><br>
    <a href="Web/crudWeb.php" class="boton">Ingresar Sitio Web</a><br><br><br>
    <a href="Infografias/crudInfografias.php" class="boton">Ingresar Infografias</a><br><br><br>
    <a href="Formulario/verSugerencias.php" class="boton">Revisar Sugerencias</a><br><br><br>
    <a href="VistaAdmin/crudUsuarios.php" class="boton">Ingresar Usuario</a><br><br><br>
    <a href="VistaAdmin2/crudUsuarios1.php" class="boton">Ingresar Noticias</a><br><br><br>
    <a href="Session/killSession.php" class="boton">Cerrar Sesión</a><br><br><br>

    </form>
</body>

</html>

