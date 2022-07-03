<?php
include('../Conexion/conexion.php');
$mysqli = mysqli_connect('localhost:3308', 'root', '', 'jale1');

$salida = "";
$query = "SELECT * FROM web ORDER By idWeb";

if (isset($_POST['consulta'])) {
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT idWeb, nombre, url, tipo, descripcion FROM web WHERE nombre LIKE '%" . $q . "%' OR url LIKE '%" . $q . "%' OR tipo LIKE '%" . $q . "%' AND activo = '1'";
}

$resultado = $mysqli->query($query);


if ($resultado->num_rows > 0) {
    $salida.= "<table class='table table-hover tabla_datos'>
        <thead>
            <tr>
            <th scope='col1'>#</th>
            <th scope='col1'>nombre</th>
            <th scope='col1'>url</th>
            <th scope='col1'>tipo</th>
            <th scope='col1'>descripción</th>
            <th scope='col1' colspan='2'>Opciones</th>
            </tr>
        </thead>
        <tbody>";
    while ($fila = $resultado->fetch_assoc()) {
        
        $sql = "SELECT * from web where activo = 1";
        $result = mysqli_query($con, $sql);

        $mostrar = mysqli_fetch_array($result);
        
            $salida.= "<tr>
            <td>".$fila['idWeb']."</td>
            <td>".$fila['nombre']."</td>
            <td>".$fila['url']."</td>
            <td>".$fila['tipo']."</td>
            <td>".$fila['descripcion']." </td width='50'>
            <td><a class='text-success' href='editarWeb.php?idWeb=". $fila['idWeb'] ."'><i class='bi bi-pencil-square'></i></a></td>
            <td><a onclick='return confirm('¿Estas seguro de eliminar?');' class='text-danger' href='eliminarWeb.php?idWeb=". $fila['idWeb'] ."'><i class='bi bi-trash3-fill'></i></a>
            </tr>";
        
    }
    $salida.= "</tbody></table>";
} else {
    $salida.= "No hay datos que coincidan :c";
}

echo $salida;
$mysqli->close();
?>