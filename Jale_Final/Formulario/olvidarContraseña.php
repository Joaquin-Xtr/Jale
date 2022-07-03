<?php
include("../Diseños/header.html");
?>

<!DOCTYPE html>

<html lang="es-CL">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/main.css">

    <!-- CDN ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../Css//main.css">

    <!--
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    -->
    <title>Recuperar Email</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Encabezado -->
    <div class="global-container">
        <div class="card login-form" style="width:800px; height:400px;">
            <div class="card-body">
                <h3 class="card-title text-center text-primary">Recupere su Contraseña</h3>
                <h5 class="card-title text-center text-secundary">Escriba su correo para poder enviar su nueva contraseña</h5>
                <img src="../Imagenes//emailVector.jpg" class="d-block w-90" style="height: 200px;">

                <div class="card-text">
                    <!-- A DONDE ENVIAR EL CORREO INTRODUCIDO -->
                    <form action="../Correo/correo.php" method="POST">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo Electrónico</label>
                            <input type="email" name="emailPass" class="form-control form-control-sm" aria-describedby="emailHelp" placeholder="Ejemplo@gmail.com">
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block container">Enviar</button>

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


