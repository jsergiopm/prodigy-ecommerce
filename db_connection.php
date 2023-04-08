<?php
$dsn = "mysql:host=localhost;dbname=ecommerce";
$username = "root";
$password = "";

try {
    $dbh = new PDO($dsn, $username, $password);
    // Configura el modo de errores para que lance excepciones en caso de errores
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}
?>
