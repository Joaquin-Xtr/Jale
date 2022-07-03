<?php
if (!isset($_GET['idUsuario'])) {
    header('Location: crudUsuarios.php?mensaje=error');
    exit();
}

include_once '../Conexion/conexion.php';
$codigo = $_GET['idUsuario'];

$sentencia = $con->prepare("DELETE FROM usuario where idUsuario = ?;");
$resultado = $sentencia->execute([$codigo]);

if ($resultado === TRUE){
    header('Location: crudUsuarios.php?mensaje=eliminado');
}else{
    header('Location: crudUsuarios.php?mensaje=error');
    exit();
}

?>