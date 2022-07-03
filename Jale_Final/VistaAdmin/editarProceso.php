<?php
print_r($_POST);
if (!isset($_POST['codigo'])) {

    header('Location: editarUsuario.php?mensaje=error');
   
}

include '../Conexion/conexion.php';
$conexion = mysqli_connect('localhost:3308', 'root', '', 'jale');

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$Tipo=$_POST["Tipo"];
for ($i=0;$i<count($Tipo);$i++) { 

$sentencia = $con->prepare("UPDATE usuario SET nombre = ?, email = ?, pass = ?, nivel = ? where idUsuario = ?;");
$resultado = $sentencia->execute([$nombre, $email, $pass, $Tipo[$i], $codigo]);

if ($resultado === TRUE){
    header('Location: crudUsuarios.php?mensaje=editado');
}else{
    header('Location: crudUsuarios.php?mensaje=error');
    exit();
}
}

?>