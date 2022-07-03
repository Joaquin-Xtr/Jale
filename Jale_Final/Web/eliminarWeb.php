<?php
if (!isset($_GET['idWeb'])) {
    header('Location: crudWeb.php?mensaje=error');
    exit();
}

include_once '../Conexion/conexion.php';
$codigo = $_GET['idWeb'];

date_default_timezone_set('America/Santiago');
$fecha_actual=date("Y-m-d H:i:s");


$sentencia = $con->prepare("UPDATE web SET activo = 0, reco = 0, fecha_borrado = '$fecha_actual' where idWeb = ?;");
$resultado = $sentencia->execute([$codigo]);

if ($resultado === TRUE){
    header('Location: crudWeb.php?mensaje=eliminado');
}else{
    header('Location: crudWeb.php?mensaje=error');
    exit();
}

?>