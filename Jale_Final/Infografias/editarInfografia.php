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
if (!isset($_GET['idInfo'])) {
    header('Location: crudInfografias.php?mensaje=error');
}

include_once '../Conexion/conexion.php';
$codigo = $_GET['idInfo'];

//$sentencia = $con->prepare("select * from usuario where idUsuario = $codigo;");
//$sentencia->execute([$codigo]);
//$persona = $sentencia->fetch(PDO::FETCH_OBJ);

$sql = "SELECT * from infografia where idInfo = $codigo;";
$result = mysqli_query($con, $sql);

$mostrar = mysqli_fetch_array($result);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar Infografia:
                </div>
                <form action="editarProceso.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" required value="<?php echo $mostrar['nombre']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Url: </label>
                        <input type="url" class="form-control" name="url"  required value="<?php echo $mostrar['url']; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $mostrar['idInfo']; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>