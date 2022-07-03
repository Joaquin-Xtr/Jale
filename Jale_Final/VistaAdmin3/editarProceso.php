<?php
print_r($_POST);
if (!isset($_POST['codigo'])) {

    header('Location: editarUsuario.php?mensaje=error');
   
}

include '../Conexion/conexion.php';
$conexion = mysqli_connect('localhost:3308', 'root', '', 'jale');

$codigo = $_POST['codigo'];
$nombre = $_POST['titulo'];
$email = $_POST['fecha'];
$pass = $_POST['url'];

$sentencia = $con->prepare("UPDATE noticias SET titulo = ?, fecha = ?, url = ? where idNoti = ?;");
$resultado = $sentencia->execute([$nombre, $email, $pass, $codigo]);

if ($resultado === TRUE){
    header('Location: crudUsuarios1.php?mensaje=editado');
}else{
    header('Location: crudUsuarios1.php?mensaje=error');
    exit();
}

?>