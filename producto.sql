-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2023 a las 06:00:33
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(50) NOT NULL,
  `descripcionProducto` varchar(200) NOT NULL,
  `imagenProducto` varchar(200) NOT NULL,
  `precioProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `descripcionProducto`, `imagenProducto`, `precioProducto`) VALUES
(1, 'Camiseta básica', 'Una camiseta perfecta para los días calidos!', './images/products/p1.jpg', 35000),
(2, 'Conjunto deportivo', 'Perfecto para entrenar', 'images/products/p2.jpg', 55000),
(3, 'Pantaloneta Licra ', 'Perfecta para tus entrenamientos y actividades deportivas', 'images/products/p3.jpg', 45000),
(4, 'Top malla', 'Perfecta para lucir cómoda y fresca en cualquier ocasion', 'images/products/p4.jpg', 35000),
(5, 'Polo Dri-Fit', 'Prenda perfecta para tus entrenamientos', 'images/products/p5.jpg', 55000),
(6, 'Top efecto cuero', 'Pefecto para entrenar!', 'images/products/p6.jpg', 25000),
(7, 'Gorras', 'Perfectas para tus outfits casuales', 'images/products/p7.jpg', 35000),
(8, 'Tennis', 'Perfectos para cualquier ocasión', 'images/products/p8.jpg', 110000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
