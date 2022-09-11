-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2022 a las 08:31:25
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `referencia` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `precio` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `peso` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `categoria` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `stock` int(10) NOT NULL,
  `fecha` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fecha`) VALUES
(1, 'Brewed Coffe', '001', '4400', '200g', 'Gourmet Beverages', 97, '2022-09-11'),
(2, 'Cappuccino', '002', '14000', '750g', 'Gourmet Beverages', 90, '2022-09-11'),
(3, 'Latte', '003', '18000', '140g', 'Gourmet Beverages', 96, '2022-09-11'),
(4, 'Single Espresso', '004', '9500', '50g', 'Gourmet Beverages', 99, '2022-09-11'),
(5, 'Double Espresso', '005', '45000', '890g', 'Gourmet Beverages', 98, '2022-09-11'),
(6, 'Iced Coffee', '006', '7400', '950g', 'Cold Beverages', 78, '2022-09-11'),
(7, 'Iced Tea', '007', '3600', '180g', 'Cold Beverages', 85, '2022-09-11'),
(8, 'Chocolate', '008', '1500', '90g', 'Flovor Shots', 26, '2022-09-11'),
(9, 'Vanilla', '009', '600', '33g', 'Flovor Shots', 0, '2022-09-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `precio` int(100) NOT NULL,
  `cant` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `id_producto`, `precio`, `cant`) VALUES
(1, 1, 13200, 3),
(2, 4, 9500, 1),
(3, 8, 9000, 6),
(4, 5, 90000, 2),
(5, 2, 140000, 10),
(6, 8, 12000, 8),
(7, 8, 18000, 12),
(8, 8, 18000, 12),
(9, 8, 15000, 10),
(10, 8, 15000, 10),
(11, 8, 1500, 1),
(12, 3, 36000, 2),
(13, 6, 14800, 2),
(14, 3, 36000, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
