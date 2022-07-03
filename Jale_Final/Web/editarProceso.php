<?php
print_r($_POST);
if (!isset($_POST['codigo'])) {

    header('Location: editarWeb.php?mensaje=error');
   
}

include '../Conexion/conexion.php';
$conexion = mysqli_connect('localhost', 'root', '', 'jale');

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$url = $_POST['url'];
$descripcion = $_POST['descripcion'];
$Tipo=$_POST["Tipo"];
for ($i=0;$i<count($Tipo);$i++) { 

$sentencia = $con->prepare("UPDATE web SET nombre = ?, url = ?, descripcion = ?, tipo = ? where idWeb = ?;");
$resultado = $sentencia->execute([$nombre, $url, $descripcion, $Tipo[$i], $codigo]);

if ($resultado === TRUE){
    header('Location: crudWeb.php?mensaje=editado');
}else{
    header('Location: crudWeb.php?mensaje=error');
    exit();
}
}
?>