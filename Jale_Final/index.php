<!DOCTYPE html>
<?php
include("Diseños/header.html");
?>

<html lang="es-CL">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/main.css">

    <!-- CDN ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!--
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../Css/style.css">
    -->
    <title>Bienvenido a J.A.L.E</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <!-- Slider de Imagenes -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="3000">
                <img src="Imagenes/slide-1.jpg" class="d-block w-100" alt="slide1">
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="Imagenes/slide-2.jpg" class="d-block w-100" alt="slide2">
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="Imagenes/slide-3.jpg" class="d-block w-100" alt="slide3">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Intro -->
    <section class="w-50 mx-auto text-center pt-5" id="intro">
        <h1 class="p-3 fs-2 border-top border-3">Sitio web creado para ayudar a personas de la <span class="text-primary">Tercera Edad</span></h1>
        <p class="p-3 fs-4"><span class="text-primary">J.A.L.E</span> es un proyecto dedicado a la recopilación de sitios web importantes y útiles, además de contar con ayudantías virtuales.</p>
    </section>

    <section class="w-50 mx-auto text-center pt-5" id="intro">
        <h1 class="p-3 fs-2 border-top border-3">Iniciar Sesión</h1>
        <a href="Formulario/ingresar.php">Ingresar</a> o
    <a href="Formulario/registro.php">Crear usuario</a>
    <br>
    <a href="Formulario/registro.php">¿Olvido su contraseña?</a>

    <h4>¿Que desea hacer?</h4>


    <!-- Servicios -->
    <section class="container-fluid">
        <div class="row w-75 mx-auto servicio-fila">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap">
                <img src="Imagenes/desarrollo.png" alt="desarrollo" width="180" height="160">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Desarrollo</h3>
                    <p class="px-4">Desarrollo de aplicaciones WEB, moviles y ecomerce</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap">
                <img src="Imagenes/desarrollo.png" alt="desarrollo" width="180" height="160">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Desarrollo</h3>
                    <p class="px-4">Desarrollo de aplicaciones WEB, moviles y ecomerce</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap">
                <img src="Imagenes/desarrollo.png" alt="desarrollo" width="180" height="160">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Desarrollo</h3>
                    <p class="px-4">Desarrollo de aplicaciones WEB, moviles y ecomerce</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap">
                <img src="Imagenes/desarrollo.png" alt="desarrollo" width="180" height="160">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Desarrollo</h3>
                    <p class="px-4">Desarrollo de aplicaciones WEB, moviles y ecomerce</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Acerca de nosotros -->
    <section>
        <div class="w-75 m-auto text-center" id="equipo">
            <h1 class="mb-5 fs-2">Equipo pequeño con <span class="text-primary">Resultados Grandes</span></h1>
            <p class="fs-4">JALE es un portal web el cual podrá facilitarte la visita a todos tus sitios de interés además de presentar guías y tutoriales acerca de toda la navegación y por supuesto muy fácil de utilizar. <span></span></p>
        </div>
    </section>

</body>
<?php
include("Diseños/footer.html");
?>

</html>