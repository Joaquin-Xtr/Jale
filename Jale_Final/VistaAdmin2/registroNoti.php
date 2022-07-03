
    <?php
    if (empty($_POST["oculto"]) || empty($_POST["titulo"]) || empty($_POST["fecha"]) || empty($_POST["url"])) {
        header('Location: crudUsuarios1.php?mensaje=falta');
        exit();
    }

    include_once '../Conexion/conexion.php';
    $imagen= addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $nombre = $_POST["titulo"];
    $fecha = $_POST["fecha"];
    $url = $_POST["url"];

    $todo = "INSERT INTO noticias(foto, titulo, fecha, url) VALUES ('$imagen','$nombre','$fecha','$url')";
    //$result = mysqli_query($con,$todo);

    //$sentencia = $con->prepare("INSERT INTO noticias(foto,titulo,fecha,url) VALUES (?,?,?,?);");
    //$resultado = $sentencia->execute([$imagen,$nombre,$fecha,$url]);

    if (mysqli_query($con,$todo)) {
        header('Location: ../VistaAdmin2/crudUsuarios1.php?mensaje=registrado');
    }else {
        header('Location: ../VistaAdmin2/crudUsuarios1.php?mensaje=error');
        exit();
    }

    ?>
