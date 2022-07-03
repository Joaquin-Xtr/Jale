
    <?php
    if (empty($_POST["oculto"]) || empty($_POST["nombre"]) || empty($_POST["url"])) {
        header('Location: crudInfografias.php?mensaje=falta');
        exit();
    }

    include_once '../Conexion/conexion.php';
    $imagen= addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $nombre = $_POST["nombre"];
    $email = $_POST["url"];
    $todo = "INSERT INTO infografia (foto, nombre, url) VALUES ('$imagen','$nombre','$email')";

    //$sentencia = $con->prepare("INSERT INTO noticias(foto,titulo,fecha,url) VALUES (?,?,?,?);");
    //$resultado = $sentencia->execute([$imagen,$nombre,$pass,$email]);

if (mysqli_query($con,$todo)) {
        header('Location: ../Infografias/crudInfografias.php?mensaje=registrado');
    }else {
        header('Location: ../Infografias/crudInfografias.php?mensaje=error');
        exit();
    }

    ?>
