
    <?php
    if (empty($_POST["oculto"]) || empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["pass"])) {
        header('Location: crudUsuarios.php?mensaje=falta');
        exit();
    }

    include_once '../Conexion/conexion.php';
    $nombre = $_POST["nombre"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];

    $sentencia = $con->prepare("INSERT INTO usuario(nombre,pass,email) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$pass,$email]);

    if ($resultado === TRUE) {
        header('Location: ../VistaAdmin/crudUsuarios.php?mensaje=registrado');
    }else {
        header('Location: ../VistaAdmin/crudUsuarios.php?mensaje=error');
        exit();
    }

    ?>
