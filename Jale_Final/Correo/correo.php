<?php
include('../Conexion/conexion.php');

//generat unique string
$uniqidStr = md5(uniqid(mt_rand()));;

$emailPass = $_POST["emailPass"];
$resetPassLink = 'http://localhost/Jale_Final/Formulario/resetPass.php?fp_code=' . $uniqidStr;
$consulta = "SELECT * from usuario WHERE email = '" . $emailPass . "' ";
$resultado = mysqli_query($con, $consulta);
$arrayDatos = mysqli_fetch_array($resultado);

if (is_array($arrayDatos)) {
    if ($arrayDatos['email'] == ($emailPass)) {
        $_SESSION["testPass"] = $arrayDatos['pass'];

        $to = $emailPass;
        $subject = 'Solicitud de Cambio de Contraseña';
        $message = 'Saludos, Estimad@  Usuari@ '.'
        <br/><br/>Recientemente se envió una solicitud para ver su contraseña para su cuenta. Si esto fue un error, simplemente ignore este correo electrónico y no pasará nada.
        <br/>Su contraseña es la siguiente: <span style="color: #ed1b24">' . $_SESSION["testPass"] . '</span>
        <br/><br/>Recuerde no compartir su contraseña con terceros.
        <br/>Atentamente, el Equipo J.A.L.E.';;

        //set content-type header for sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: EquipoJale@gmail.com' . "\r\n" .
        'Reply-To: EquipoJale@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        if (mail($to, $subject, $message, $headers)) {
            echo '<script language="javascript">alert("¡Felicidades! tu correo se ha enviado correctamente.");window.location.href="../Formulario/ingresar.php"</script>';

        } else {
            echo '<script language="javascript">alert("¡No se ha encontrado su correo! vuelva a ingresar su correo.");window.location.href="../Formulario/olvidarContraseña.php"</script>';
        
        }

    } else {
        echo '<script language="javascript">alert("¡No se ha encontrado su correo! vuelva a ingresar su correo.");window.location.href="../Formulario/olvidarContraseña.php"</script>';
    }
} else {
    echo '<script language="javascript">alert("¡No se ha encontrado su correo! vuelva a ingresar su correo.");window.location.href="../Formulario/olvidarContraseña.php"</script>';
}



?>



