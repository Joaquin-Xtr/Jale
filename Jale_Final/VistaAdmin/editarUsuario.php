<?php
include("../Session/validarSession.php");
include("../Diseños/header.html");
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="../Css/style.css">
-->

<?php
if (!isset($_GET['idUsuario'])) {
    header('Location: crudUsuarios.php?mensaje=error');
}

include_once '../Conexion/conexion.php';
$codigo = $_GET['idUsuario'];

//$sentencia = $con->prepare("select * from usuario where idUsuario = $codigo;");
//$sentencia->execute([$codigo]);
//$persona = $sentencia->fetch(PDO::FETCH_OBJ);

$sql = "SELECT * from usuario where idUsuario = $codigo;";
$result = mysqli_query($con, $sql);

$mostrar = mysqli_fetch_array($result);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form action="editarProceso.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" required value="<?php echo $mostrar['nombre']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email: </label>
                        <input type="email" class="form-control" name="email" required value="<?php echo $mostrar['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="text" class="form-control" name="pass" required value="<?php echo $mostrar['pass']; ?>">
                    </div>
                    <h3>Seleccione el nivel del usuario:</h3>
                    <select multiple name="Tipo[]">
            <option value="99">Administrador</option>
            <option value="0">Usuario Normal</option>
        </select><br>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $mostrar['idUsuario']; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>