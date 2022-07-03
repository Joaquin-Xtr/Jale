

<?php
include_once '../Conexion/conexion.php';
$codigo = $_GET['idWeb'];
$sentencia = $con->prepare("UPDATE web SET activo = '0', reco ='1' where idWeb = ?;");
$resultado = $sentencia->execute([$codigo]);


if ($resultado === TRUE){
    header('Location: verWebsListadas.php?mensaje=eliminado');
}else{
    header('Location: verWebsListadas.php?mensaje=error');
    exit();
}

?>