<!DOCTYPE html>
<?php
include("../Diseños/header.html");
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../Css/style.css">
    -->
    <title>Bienvenido a J.A.L.E</title>
</head>


<body>
    <section class="w-75 mx-auto text-center pt-5">
        <h4 class="p-3 fs-2 border-top border-3">Sección creada para revisar los <span class="text-primary">principales sitios web</span></h4>
    </section>
    <br>
    <br>

    <section>
        <div class="container w-75 mx-auto">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        Sitios WEB
                    </div>

                    <div class="col-md-3 col-sm-12 p-4">

                        <table class="table align-middle" width="50">
                            <tbody>
                                <?php
                                $sql = "SELECT * from web where activo = '1' or '3'";
                                $result = mysqli_query($con, $sql);
                                $text = ['url'];
                                while ($mostrar = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="row">

                                            </div>

                                            <img width="180px" height="160px" name="Foto" style="margin-top: 20px;" src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                                            <h3><?php echo $mostrar['nombre'] ?></h3>
                                            <h3><?php echo $mostrar['tipo'] ?></h3>
                                            <p><?php echo $mostrar['descripcion'] ?></p>
                                            <?php $asd = $mostrar['url'] ?>
                                            <a href="<?php echo $asd ?>" class="link1" target="_blank">Visitar Sitio</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>

        </div>

    </section>

    <!-- Comienza muestra de Noticias -->
    <article class="m-5">
        <?php
        $sql = "SELECT * from web where activo = '1' or '3'";
        $result = mysqli_query($con, $sql);
        $text = ['url'];
        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
            <div class="card-group">
                <div class="card" style="width: 30rem;">
                    <img width="180px" height="160px" name="Foto" style="margin-top: 20px; margin-left: 20px;" src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                    <div class="card-body">
                        <h5 class="card-title fs-4"><strong><?php echo $mostrar['nombre'] ?></strong></h5>
                        <p class="card-text"><?php echo $mostrar['descripcion'] ?></p>
                        <p class="card-text"><small class="text-muted"><?php echo $mostrar['tipo'] ?></small></p>
                        <?php $asd = $mostrar['url'] ?>
                        <a href="<?php echo $asd ?>" class="link1" target="_blank">Visitar Sitio</a>
                    </div>
                </div>

            <?php
        }
            ?>
            </div>
    </article>
<br><br>
</body>