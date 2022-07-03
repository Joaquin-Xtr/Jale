<?php
include("../Diseños/header.html");
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Añadir Noticias</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <form action="noticias2.php" method="POST">
            
            <h3>Ingrese Titulo de la Noticia:</h3>
            <input type="text" name="titulo" required="" placeholder="Ingresar nombre"/>
            <h3>Ingrese la fecha:</h3>
            <input type="date" name="fecha" required="" placeholder="Ingresar tipo"/>
            <h3>Ingrese la url del sitio web:</h3>
            <input type="url" name="url" required="" placeholder="Ingresar url"/>
            <br>
            <br>
            <input type="submit" value="INGRESAR" />
            
        </form>
    </body>
</html>
