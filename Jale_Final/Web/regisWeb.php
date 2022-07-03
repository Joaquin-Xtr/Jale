
    <?php
    if (empty($_POST["oculto"]) || empty($_POST["nombre"]) || empty($_POST["url"])) {
        header('Location: crudWeb.php?mensaje=falta');
        exit();
    }

    include_once '../Conexion/conexion.php';
    $imagen = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $nombre = $_POST['nombre'];
    $url = $_POST['url'];
    $descripcion = $_POST['descripcion'];
    $Tipo = $_POST["Tipo"];
    for ($i = 0; $i < count($Tipo); $i++) {
        $todo = "INSERT INTO web (nombre, url, foto, tipo, descripcion, activo, reco, catalogo_idCatalogo) VALUES ('$nombre','$url','$imagen','$Tipo[$i]','$descripcion',1,1,1)";

        //$sentencia = $con->prepare("INSERT INTO noticias(foto,titulo,fecha,url) VALUES (?,?,?,?);");
        //$resultado = $sentencia->execute([$imagen,$nombre,$pass,$email]);

        if (mysqli_query($con, $todo)) {
            header('Location: ../Web/crudWeb.php?mensaje=registrado');
        } else {
            header('Location: ../Web/crudWeb.php?mensaje=error');
            exit();
        }
    }
    ?>



