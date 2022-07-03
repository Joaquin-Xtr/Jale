<?php
if (!isset($_GET['idInfo'])) {
    header('Location: crudInfografias.php?mensaje=error');
    exit();
}

include_once '../Conexion/conexion.php';
$codigo = $_GET['idInfo'];

$sentencia = $con->prepare("DELETE FROM infografia where idInfo = ?;");
$resultado = $sentencia->execute([$codigo]);

if ($resultado === TRUE){
    header('Location: crudInfografias.php?mensaje=eliminado');
}else{
    header('Location: crudInfografias.php?mensaje=error');
    exit();
}

?>