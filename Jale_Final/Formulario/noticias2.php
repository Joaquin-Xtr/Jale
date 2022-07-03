<?php
include("../Diseños/header.html");
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuario Registrado</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php
        $conexion = mysqli_connect("localhost:3308","root","","jale") or
                die("Problema de conexión");
        mysqli_query($conexion, "insert into noticias(titulo,fecha,url) values"
                . "('$_REQUEST[titulo]','$_REQUEST[fecha]','$_REQUEST[url]')")
                or die("Error en consulta ". mysqli_error($conexion));
        mysqli_close($conexion);
        echo "<h1>El usuario se ingreso correctamente</h1> <br>";
        ?>
        <a href="ingresar.php" class="volver">Volver</a>
    </body>
</html>
