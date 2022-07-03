

<?php
include_once '../Conexion/conexion.php';
$codigo = $_GET['idWeb'];
$reco = 0;
$sentencia = $con->prepare("UPDATE web SET activo = ?, reco = ? where idWeb = ?;");
$resultado = $sentencia->execute([$codigo, $reco, $codigo]);


if ($resultado === TRUE){
    header('Location: verWeb.php?mensaje=eliminado');
}else{
    header('Location: verWeb.php?mensaje=error');
    exit();
}

?>