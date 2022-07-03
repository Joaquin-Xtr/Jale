<?php
include_once '../Conexion/conexion.php';
include_once '../Session/sessionUser.php';

$estrellas = $_POST['estrellas'];
$idUser = $_SESSION['idUsuarioUser'];
$idWeb = $_POST['idWeb'];

//$sentencia = $con->prepare("INSERT INTO estrellas(cantidad,idUsua,idWeb) VALUES (?,?,?);");
//$resultado = $sentencia->execute([$estrellas, $idUser, $idWeb]);
$pregunta = $con->prepare("SELECT idWeb FROM estrellas WHERE idWeb = '$idWeb';");

if ($pregunta == $idWeb) {
    $sentencia = $con->prepare("UPDATE web SET valoracion = ? where idWeb = '$idWeb';");
    $resultado = $sentencia->execute([$estrellas]);
}else {
    $sentencia = $con->prepare("INSERT INTO estrellas (cantidad,idUsua,idWeb) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$estrellas, $idUser, $idWeb]);
}

if ($resultado == TRUE) {
    $sentencia = $con->prepare("UPDATE web SET valoracion = ? where idWeb = '$idWeb';");
    $resultado = $sentencia->execute([$estrellas]);
    header('Location: verWeb.php');
} else {
    header('Location: verWeb.php');
    exit();
}


?>
