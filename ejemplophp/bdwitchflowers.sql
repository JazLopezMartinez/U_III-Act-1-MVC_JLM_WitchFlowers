-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2023 a las 21:56:43
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdwitchflowers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpedido_flores`
--

CREATE TABLE `tblpedido_flores` (
  `idpedido` int(10) NOT NULL,
  `idcliente` int(10) NOT NULL,
  `idproducto` int(10) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `cantidad` int(2) NOT NULL,
  `numtelefono` varchar(10) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `tipopago` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblpedido_flores`
--
ALTER TABLE `tblpedido_flores`
  ADD PRIMARY KEY (`idpedido`),
  ADD UNIQUE KEY `idpedido` (`idpedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblpedido_flores`
--
ALTER TABLE `tblpedido_flores`
  MODIFY `idpedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
