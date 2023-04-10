<?php
// $dsn = "mysql:host=localhost;dbname=ecommerce";
// $username = "root";
// $password = "";

// try {
//     $dbh = new PDO($dsn, $username, $password);
//     // Configura el modo de errores para que lance excepciones en caso de errores
//     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo "Error al conectar a la base de datos: " . $e->getMessage();
// }
// Recibe el identificador del producto como parámetro
$idProducto = $_GET["id"];

// Establece la conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
