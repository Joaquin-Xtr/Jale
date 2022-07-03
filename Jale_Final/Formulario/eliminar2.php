<!doctype html>
<html>

<head>
<title>Eliminar Usuario</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<?php
             $conexion = mysqli_connect("localhost:3308","root","","jale") or
                die("Problema de conexión");
             $registros = mysqli_query($conexion,"select pass from usuario "
                     . "where pass='$_REQUEST[codigo]'") or
                     die("ERROR: en el select");
             if($reg = mysqli_fetch_array($registros)){
                 mysqli_query($conexion, "delete from usuario "
                         . "where pass='$_REQUEST[codigo]'") or 
                         die("ERROR: en el select");
                         echo "<h1>La cuenta de usuario fue borrada</h1> <br>";
             } else{
                echo '<script language="javascript">alert("Error en la contraseña!");window.location.href="../Formulario/eliminar.php"</script>';
             }
             mysqli_close($conexion);
        ?>
        
</body>
<a href="ingresar.php" class="volver">Volver</a>
</html>