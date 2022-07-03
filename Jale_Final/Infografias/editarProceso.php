<?php
print_r($_POST);
if (!isset($_POST['codigo'])) {

    header('Location: editarInfografias.php?mensaje=error');
   
}

include '../Conexion/conexion.php';
$conexion = mysqli_connect('localhost:3308', 'root', '', 'jale1');

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$url = $_POST['url'];

$sentencia = $con->prepare("UPDATE infografia SET nombre = ?, url = ? where idInfo = ?;");
$resultado = $sentencia->execute([$nombre, $url, $codigo]);

if ($resultado === TRUE){
    header('Location: crudInfografias.php?mensaje=editado');
}else{
    header('Location: crudInfografias.php?mensaje=error');
    exit();
}

?>