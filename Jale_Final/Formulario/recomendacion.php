<!DOCTYPE html>
<?php
//include("../Session/sessionUser.php");
include("../Conexion/conexion.php");
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

    <title>Sitema Recomendar</title>
</head>


<h1 class="p-4 fs-4 border-bottom border-3">¡SISTEMA RECOMENDAR!</h1>

<!-- Comienza muestra de Noticias -->
<body>
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Se ha eliminado correctamente el sitio web de su perfil
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

    <br>
    <section class="container-fluid">
        <div class="row w-75 mx-auto servicio-fila">

            <div class="card">
                <div class="card-header">
                    Sitios Web
                </div>
                <div class="p-4">
                    <table class="table align-middle" width="50">
                        <tbody>
                            <?php
                            $sql = "SELECT * from web where activo = idWeb ";
                            $result = mysqli_query($con, $sql);
                            $text = ['url'];
                            while ($mostrar = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td>
                                        <img width="180px" height="160px" name="Foto" style="margin-top: 20px;" src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                                    </td>
                                    <td>
                                        <h2><?php echo $mostrar['nombre'] ?></h2>
                                        <h4><?php echo $mostrar['tipo'] ?></h4>
                                        <h6><?php echo $mostrar['descripcion'] ?></h6>
                                        <?php $asd = $mostrar['url'] ?>
                                        <a href="<?php echo $asd ?>" class="link1" target="_blank">Visitar Sitio</a>

                                    </td>

                                    <input type="hidden" name="codigo" value="<?php echo $mostrar['idWeb']; ?>">
                                    <td><a onclick="return confirm('¿Desea desvincular este sitio web de su perfil?');" class="text-primary" href="eliminarWeb.php?idWeb=<?php echo $mostrar['idWeb'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                            </svg></a></td> <?php
                                                        }
                                                            ?>
                        </tbody>
                    </table>
                </div>
                
            </div>

        </div>
    </section>
    <section class="container-fluid">
        <div class="row w-75 mx-auto servicio-fila">
            
            <div class="card">
                <div class="card-header">
                    Recomendaciones de acuerdo a sus preferencias
                </div>
                <div class="p-4">
                    <table class="table align-middle" width="50">
                        <tbody>
                            <?php

                            $sql = "SELECT * from web where reco = '1' and tipo=tipo ";
                            $result = mysqli_query($con, $sql);
                            $text = ['url'];                 
                            while ($mostrar = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td>
                                        <img width="180px" height="160px" name="Foto" style="margin-top: 20px;" src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                                    </td>
                                    <td>
                                        <h2><?php echo $mostrar['nombre'] ?></h2>
                                        <h4><?php echo $mostrar['tipo'] ?></h4>
                                        <h6><?php echo $mostrar['descripcion'] ?></h6>
                                        <?php $asd = $mostrar['url'] ?>
                                        <a href="<?php echo $asd ?>" class="link1" target="_blank">Visitar Sitio</a>

                                    </td>

                                    <input type="hidden" name="codigo" value="<?php echo $mostrar['idWeb']; ?>">
                                    <td><a onclick="return confirm('¿Desea agregar este Sitio Web?');" class="text-primary" href="agregarWeb.php?idWeb=<?php echo $mostrar['idWeb'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/> </svg></a></td>                                </tr>                      
                                            </svg></a></td> <?php
                                                        }
                                                            ?>
                        </tbody>
                    </table>
                </div>
                
                
            </div>

        </div>
    </section>
    <a href="../indexAdm.php" class="volver">Volver</a>
</body>

</html>





<article class="m-5">
    <?php
    $sql = "SELECT * from noticias";
    $result = mysqli_query($con, $sql);
    $text = ['url'];
    while ($mostrar = mysqli_fetch_array($result)) {
    ?>
        <div class="card-group">
            <div class="card" style="width: 30rem;">
                <img width="180px" height="160px" name="Foto" style="margin-top: 20px; margin-left: 20px;" src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $mostrar['titulo'] ?></h5>
                    <p class="card-text"><?php $asd = $mostrar['url'] ?></p>
                    <p class="card-text"><small class="text-muted">Fecha de publicación: <?php echo $mostrar['fecha'] ?></small></p>
                </div>
            </div>

        <?php
    }
        ?>
        </div>
</article>