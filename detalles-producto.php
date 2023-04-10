<?php
include 'db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detalles del producto</title>
    <link href="styles-item.css" rel="stylesheet" />

</head>
<body>
        <nav>
            <a href="./" class="logo"><img src="./images/prodigy/logo.jpeg"></a>
            <a href="./" class="active">Inicio</a>
            <a href="#">Carrito</a>
            <a href="#">Contacto</a>
        </nav>
    <?php
        // Consulta los datos del producto
        // Recibe el identificador del producto como parámetro
        $idProducto = $_GET["id"];
        $sql = "SELECT * FROM producto WHERE idProducto = $idProducto";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Obtiene los datos del primer (y en teoría único) resultado
            $row = $result->fetch_assoc();
    
            // Asigna los valores a las variables correspondientes
            $nombreProducto = $row["nombreProducto"];
            $descripcionProducto = $row["descripcionProducto"];
            $imagenProducto = $row["imagenProducto"];
            $precioProducto = $row["precioProducto"];
        } else {
            // Si no se encontraron resultados, muestra un mensaje de error
            echo "No se encontró el producto con ID $idProducto.";
        }
    
        // Cierra la conexión con la base de datos
        $conn->close();
    ?>
    <h1><?php echo $nombreProducto; ?></h1>
    <img src="<?php echo $imagenProducto; ?>" alt="<?php echo $nombreProducto; ?>" height="400">
    <p><?php echo $descripcionProducto; ?></p>
    <p>Precio: $<?php echo $precioProducto; ?></p>
</body>
</html>
