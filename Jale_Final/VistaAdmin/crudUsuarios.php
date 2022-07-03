<?php
include("../Session/validarSession.php");
include("../Diseños/header.html");
include("../Conexion/conexion.php");
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../Css/main.css">

<!-- CDN ICON -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<!-- 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="../Css/style.css">
-->

<div class="container-global mt-5">
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
                    <strong>Registrado!</strong> Se agregaron los datos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Usuario editado!</strong> Se editaron correctamente los datos.
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
                <div class="table-responsive">
                    <div class="card-header">
                        Lista de personas
                    </div>
                    <div class="p-4">
                        <table class="table align-middle table-hover" width="50">
                            <thead>
                                <tr>
                                    <th scope="col1">#</th>
                                    <th scope="col1">Nombre</th>
                                    <th scope="col1">Pass</th>
                                    <th scope="col1">Email</th>
                                    <th scope="col1">Nivel</th>
                                    <th scope="col1" colspan="2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * from usuario";
                                $result = mysqli_query($con, $sql);

                                while ($mostrar = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $mostrar['idUsuario'] ?></td>
                                        <td><?php echo $mostrar['nombre'] ?></td>
                                        <td><?php echo $mostrar['pass'] ?></td>
                                        <td><?php echo $mostrar['email'] ?></td>
                                        <td><?php echo $mostrar['nivel'] ?></td>
                                        <td><a class="text-success" href="editarUsuario.php?idUsuario=<?php echo $mostrar['idUsuario'] ?>"><i class="bi bi-pencil-square"></i></a></td>
                                        <td><a onclick="return confirm('¿Estas seguro de eliminar?');" class="text-danger" href="eliminarUsuario.php?idUsuario=<?php echo $mostrar['idUsuario'] ?>"><i class="bi bi-trash3-fill"></i></a></td>
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
        
        <!-- Formulario para registrar usuario -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form action="registroAdmin.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingresar nombre" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email: </label>
                        <input type="email" class="form-control" name="email" placeholder="Ingresar email" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="text" class="form-control" name="pass" placeholder="Ingresar contraseña" autofocus required>
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