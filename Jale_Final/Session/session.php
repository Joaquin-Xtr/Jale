<?php

include("../Conexion/conexion.php");

session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];

$consulta = "SELECT * from usuario WHERE email = '" . $email . "' AND pass = '" . $pass . "'";

$resultado = mysqli_query($con, $consulta);

$arrayDatos = mysqli_fetch_array($resultado);
if (is_array($arrayDatos)) {

    if ($arrayDatos['email'] == ($email) && $arrayDatos['pass'] == ($pass)) {
        if ($arrayDatos['nivel'] == 99) {

            $_SESSION['idUsuario'] = $arrayDatos['idUsuario'];
            $_SESSION['email'] = $arrayDatos['email'];
            $_SESSION['pass'] = $arrayDatos['pass'];

            header("Location:../indexAdm.php");
        }
        if ($arrayDatos['nivel'] == 0) {

            $_SESSION['idUsuarioUser'] = $arrayDatos['idUsuario'];
            $_SESSION['emailUser'] = $arrayDatos['email'];
            $_SESSION['passUser'] = $arrayDatos['pass'];

            header("Location:../indexUser.php");
        }
    }
} else {
    echo '<script language="javascript">alert("USUARIO NO ENCONTRADO!");window.location.href="/Jale_Final/Formulario/ingresar.php"</script>';
}

?>