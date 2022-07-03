<?php
if (!isset($_GET['idNoti'])) {
    header('Location: crudUsuarios1.php?mensaje=error');
    exit();
}

include_once '../Conexion/conexion.php';
$codigo = $_GET['idNoti'];

$sentencia = $con->prepare("DELETE FROM noticias where idNoti = ?;");
$resultado = $sentencia->execute([$codigo]);

if ($resultado === TRUE){
    header('Location: crudUsuarios1.php?mensaje=eliminado');
}else{
    header('Location: crudUsuarios1.php?mensaje=error');
    exit();
}

?>