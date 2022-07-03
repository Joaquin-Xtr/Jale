<?php
include("../Session/validarSession.php");
include("../Diseños/header.html");
?>
<?php

$conexion = mysqli_connect('localhost:3308', 'root', '', 'jale');

?>


<!DOCTYPE html>
<html>

<head>
    <title>Mostrar Sugerencias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Se eliminaron correctamente los datos.
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
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Lista de Sugerencias
                </div>
                <div class="p-4">
                    <table class="table align-middle" width="50" style="table-layout: fixed">
                        <tr>
                            <td>id</td>
                            <td>nombre</td>
                            <td>tipo</td>
                            <td>URL</td>
                            <td>descripcion</td>
                        </tr>

                        <?php
                        $sql = "SELECT * from sugerencias where activo = '1' ";
                        $result = mysqli_query($conexion, $sql);

                        while ($mostrar = mysqli_fetch_array($result)) {
                        ?>

                            <tr>
                                <td><?php echo $mostrar['idSuge'] ?></td>
                                <td><?php echo $mostrar['nombre'] ?></td>
                                <td><?php echo $mostrar['tipo'] ?></td>
                                <td><?php echo $mostrar['url'] ?></td>
                                <td><?php echo $mostrar['descripcion'] ?></td>
                                <td><a onclick="return confirm('¿Estas seguro de eliminar?');" class="text-danger" href="eliminarSuge.php?idSuge=<?php echo $mostrar['idSuge'] ?>"><i class="bi bi-trash3-fill"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <a href="../indexAdm.php" class="volver">Volver</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>