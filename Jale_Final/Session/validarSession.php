<?php

session_start();

if (isset($_SESSION['idUsuario']) && isset($_SESSION['email']) && isset($_SESSION['pass'])) {
} else {
    echo '<script language="javascript">alert("No has iniciado sesion!");window.location.href="/Jale_Final/Formulario/ingresar.php"</script>';
}

?>