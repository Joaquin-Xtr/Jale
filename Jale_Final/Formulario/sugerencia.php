<?php
include("../Session/sessionUser.php");
include("../Diseños/header.html");
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Sugerencias para agregar Links al catalogo</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <form action="sugerencia2.php" method="POST">

        <h3>Ingrese Nombre del sitio web:</h3>
        <input type="text" name="nombre" required="" placeholder="Ingresar nombre" />
        <h3>Seleccione la categoria a la cual pertenece su sugerencia de pagina Web:</h3>
        <select multiple name="Tipo[]">
            <option value="Entretencion">Entretencion</option>
            <option value="Deportes">Deportes</option>
            <option value="Noticias">Noticias</option>
            <option value="Ocio">Ocio</option>
            <option value="Otros">Otros</option>
        </select><br>
        <h3>Ingrese la url del sitio web:</h3>
        <input type="url" name="url" required="" placeholder="Ingresar url" />
        <h3>Ingrese una breve descripcion del sitio web:</h3>
        <textarea name="descripcion" cols="40" rows="4" required="" placeholder="Ingresar descripcion">
            </textarea>

        <br>
        <br>
        <input type="submit" value="INGRESAR" />

    </form>
</body>

</html>