<?php
include("../Session/validarSession.php");
include("../Diseños/header.html");
?>

<?php
$conexion = mysqli_connect('localhost:3308', 'root', '', 'jale');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../Css/main.css">

<!-- CDN ICON -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<!-- 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="../Css/style.css">
-->

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <!-- Inicio mensaje de alerta -->
            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Rellena todos los campos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Noticia Registrada!</strong> Se agregaron los datos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Noticia Editada</strong> Se editaron correctamente los datos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

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

            <!-- Fin mensaje de alerta -->

            <div class="card">
                <div class="card-header">
                    Lista de Noticias
                </div>
                <div class="p-4">
                    <table class="table align-middle" width="50">
                        <thead>
                            <tr>
                                <th scope="col1">#</th>
                                <th scope="col1">Titulo</th>
                                <th scope="col1">Fecha</th>
                                <th scope="col1">url</th>
                                <th scope="col1" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * from noticias";
                            $result = mysqli_query($conexion, $sql);

                            while ($mostrar = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $mostrar['idNoti'] ?></td>
                                    <td><?php echo $mostrar['titulo'] ?></td>
                                    <td><?php echo $mostrar['fecha'] ?></td>
                                    <td><?php echo $mostrar['url'] ?></td>
                                    <td><a class="text-success" href="editarUsuario.php?idNoti=<?php echo $mostrar['idNoti'] ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a onclick="return confirm('¿Estas seguro de eliminar?');" class="text-danger" href="eliminarUsuario.php?idNoti=<?php echo $mostrar['idNoti'] ?>"><i class="bi bi-trash3-fill"></i></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


        <!-- Formulario para registrar noticias -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form action="registroNoti.php" class="p-4" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Titulo: </label>
                        <input type="text" class="form-control" name="titulo" placeholder="Ingresar nombre" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen: </label>
                        <input type="file" accept="image/*" class="form-control-file" name="foto" id="foto" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha: </label>
                        <input type="date" class="form-control" name="fecha" placeholder="Ingresar fecha" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">url: </label>
                        <input type="url" class="form-control" name="url" placeholder="Ingresar url" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
                <a href="../indexAdm.php" class="volver">Volver</a>
            </div>
        </div>
    </div>
</div>
<?php
include("../Diseños/footer.html");
?>