<?php
include 'db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detalles del producto</title>
</head>
<body>
    <?php
        // Recibe el identificador del producto como parámetro
        $idProducto = $_GET["id"];

        // Aquí puedes buscar la información del producto en una base de datos o en algún otro lugar
        // Por ejemplo:
        $nombreProducto = "Pantaloneta licra importada";
        $descripcionProducto = "Perfecta para tus entrenamientos y actividades deportivas.";
        $imagenProducto = "images/products/p3.jpg";
        $precioProducto = "$45.000";
    ?>
    <h1><?php echo $nombreProducto; ?></h1>35
    <img src="<?php echo $imagenProducto; ?>" alt="<?php echo $nombreProducto; ?>">
    <p><?php echo $descripcionProducto; ?></p>
    <p>Precio: <?php echo $precioProducto; ?></p>
</body>
</html>
