<?php

session_start();

unset($_SESSION['idUsuario']);
unset($_SESSION['email']);
unset($_SESSION['pass']);

unset($_SESSION['idUsuarioUser']);
unset($_SESSION['emailUser']);
unset($_SESSION['passUser']);

session_destroy();

header("Location:../index.php");

?>