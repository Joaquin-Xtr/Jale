<?php
include("../Diseños/header.html");
//$pregunta = $con->prepare("SELECT * FROM estrellas WHERE idUsua = '$idUser' AND idWeb = '$idWeb';");
?>

<!DOCTYPE html>

<html lang="es-CL">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/style.css">

    <!-- CDN ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!--
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    -->
    <title>Valorar Sitio Web</title>
</head>

<body>

    <!-- Encabezado -->
    <div class="global-container">
        <div class="card login-form" style="width:800px; height:400px;">
            <div class="card-body">
                <h3 class="card-title text-center text-primary">Valorice el Sitio Web</h3>
                <h5 class="card-title text-center text-secundary">De 1 a 5 estrellas, que tanto le gusto el sitio web.</h5>

                <div class="card-text">

                    <!-- POR DONDE RECIBE LAS ESTRELLAS -->
                    <form method="POST" action="calificar.php">
                        <input type="hidden" value="<?php echo $_GET['idWeb']; ?>" name="idWeb">
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5">
                            <label for="radio1">★</label>
                            <input id="radio2" type="radio" name="estrellas" value="4">
                            <label for="radio2">★</label>
                            <input id="radio3" type="radio" name="estrellas" value="3">
                            <label for="radio3">★</label>
                            <input id="radio4" type="radio" name="estrellas" value="2">
                            <label for="radio4">★</label>
                            <input id="radio5" type="radio" name="estrellas" value="1">
                            <label for="radio5">★</label>
                        </p>
                        <input type="submit" value="valorar"><br>
                        <a href="verWeb.php" class="btn btn-primary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
include("../Diseños/footer.html");
?>