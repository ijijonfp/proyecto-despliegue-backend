<?php
$servername = getenv('MYSQLHOST');
$username = getenv('MYSQLUSER');
$password = getenv('MYSQLPASSWORD');
$dbname = getenv('MYSQLDATABASE');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Leer el archivo SQL y ejecutar cada consulta
$sql = file_get_contents(__DIR__ . "/oldvinyl.sql");

if ($conn->multi_query($sql)) {
    echo "Base de datos importada correctamente.";
} else {
    echo "Error en la importación: " . $conn->error;
}

$conn->close();

?>