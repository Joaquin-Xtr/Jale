<?php

session_start();

if (isset($_SESSION['idUsuarioUser']) && isset($_SESSION['emailUser']) && isset($_SESSION['passUser'])) {
} else {
    echo '<script language="javascript">alert("No has iniciado sesion!");window.location.href="/Jale_Final/Formulario/ingresar.php"</script>';
}

?>