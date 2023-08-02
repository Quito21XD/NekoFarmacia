<?php
// Conexión a la base de datos (reemplaza con tus datos de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$database = "sis_venta";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los datos de los productos
$sql = "SELECT descripcion, info FROM producto";
$resultado = $conn->query($sql);

if ($resultado === false) {
    die("Error al ejecutar la consulta: " . $conn->error);
}

// Obtener los datos de los productos en un array
$productos = array();
while ($row = $resultado->fetch_assoc()) {
    $productos[] = $row;
}

// Devolver los datos en formato JSON
header("Content-Type: application/json");
echo json_encode($productos);

$conn->close();
?>
