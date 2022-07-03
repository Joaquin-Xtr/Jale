<?php
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
        <link rel="stylesheet" href="Css/main.css">

        <!-- CDN ICON -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css%22%3E">

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <title>Infografias</title>
    </head>

    <body>
    <section class="w-75 mx-auto text-center pt-5">
        <h4 class="p-3 fs-2 border-top border-3">Sección creada para ayudar con la utilización de los <span class="text-primary">principales sitios web</span></h4>
    </section>
    <br>
        <br>

        <section class="container-fluid">
            <div class="row w-75 mx-auto servicio-fila">

                <div class="card">
                    <div class="card-header">
                        Listado de Infografias
                    </div>
                    <div class="p-4">
                        <table class="table align-middle" width="50">
                            <tbody>
                            <?php
                            $sql = "SELECT * from infografia";
                            $result = mysqli_query($con, $sql);
                            $text = ['url'];
                            while ($mostrar = mysqli_fetch_array($result)) {
                            ?>
                                    <tr>
                                        <td>
                                            <img width="180px" height="160px" name="Foto" style="margin-top: 20px;" src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                                        </td>
                                        <td>
                                            <h3><?php echo $mostrar['nombre'] ?></h3>
                                            <?php $asd = $mostrar['url'] ?>
                                        <a href="<?php echo $asd ?>" class="link1" target="_blank">Ver más</a>
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
        </section>
	<br><br><br>

</body>

</html>

<?php
include("../Diseños/footer.html");
?>