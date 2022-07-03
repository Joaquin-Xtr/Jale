<?php
include("../Session/sessionUser.php");
include("../Diseños/header.html");
include("../Conexion/conexion.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css%22%3E">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- SCRIPTS JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/verWeb.js"></script>

    <title>Sitios Web</title>
</head>

<body>
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Se ha añadido exitosamente</strong> Revisa la pestaña mis links para ver mis links
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>

    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ERROR!</strong> Vuelva a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>

    <section class="w-75 mx-auto text-center pt-5">
        <h4 class="p-3 fs-2 border-top border-3">Sección creada para revisar los <span class="text-primary">principales sitios web</span></h4>
    </section>
    <br>
    <br>

    <!-- Buscador -->
    <div class="form-1-2">
        <label for="caja_busqueda">Buscar:</label>
        <input type="text" name="caja_busqueda" id="caja_busqueda"></input>
    </div>
    <br>

    <section class="container" id="datos">
        <div class="row w-75 mx-auto servicio-fila">

           <!--
        <div class="card">
                <div class="card-header">
                    Sitios Web
                </div>
                <div class="p-4">
                    <table class="table align-middle" width="50">
                        <tbody>
                            <?php
                            //$sql = "SELECT * from web where activo = '1' or '3'";
                            //$result = mysqli_query($con, $sql);
                            //$text = ['url'];
                            //while ($mostrar = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td>
                                        <img width="180px" height="160px" name="Foto" style="margin-top: 20px;" src="data:image/jpg;base64, <?php //echo base64_encode($mostrar["foto"]); ?>">
                                    </td>
                                    <td>
                                        <h2><?php //echo $mostrar['nombre'] ?></h2>
                                        <h4><?php //echo $mostrar['tipo'] ?></h4>
                                        <h6><?php //echo $mostrar['descripcion'] ?></h6>
                                        <?php //$asd = $mostrar['url'] ?>
                                        <a href="<?php //echo $asd ?>" class="link1" target="_blank">Visitar Sitio</a>

                                    </td>

                                    <input type="hidden" name="codigo" value="<?php //echo $mostrar['idWeb']; ?>">
                                    <td><a onclick="return confirm('¿Desea agregar este Sitio Web?');" class="text-primary" href="agregarWeb.php?idWeb=<?php //echo $mostrar['idWeb'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                            </svg></a></td>
                                </tr>
                            <?php
                           // }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
                        -->

        </div>
    </section>

    <br>
</body>

</html>