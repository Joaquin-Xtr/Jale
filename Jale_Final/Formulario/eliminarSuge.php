<?php


include_once '../Conexion/conexion.php';
$codigo = $_GET['idSuge'];
$sentencia = $con->prepare("UPDATE sugerencias SET activo = '0' where idSuge = ?;");
$resultado = $sentencia->execute([$codigo]);


if ($resultado === TRUE){
    header('Location: verSugerencias.php?mensaje=eliminado');
}else{
    header('Location: verSugerencias.php?mensaje=error');
    exit();
}

?>