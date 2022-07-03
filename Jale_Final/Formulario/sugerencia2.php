<?php
include("../Diseños/header.html");
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sugerencia Registrada</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php
        $Tipo=$_POST["Tipo"]; 
        $conexion = mysqli_connect("localhost:3308","root","","jale") or
                die("Problema de conexión");
        for ($i=0;$i<count($Tipo);$i++) 
      	{ 
      

        mysqli_query($conexion, "insert into sugerencias(nombre,tipo,url,descripcion,activo) values"
                . "('$_REQUEST[nombre]','$Tipo[$i]','$_REQUEST[url]','$_REQUEST[descripcion]',1)")
                or die("Error en consulta ". mysqli_error($conexion));

        mysqli_close($conexion);
        echo "<h1>La sugerencia fue realizada correctamente</h1> <br>";
        echo "<h1>Ahora será revisada por el equipo de Administración</h1> <br>";
        $Tipo[$i]; 
    } 
        ?>
        <a href="../indexUser.php" class="volver">Volver</a>

    </body>
</html>