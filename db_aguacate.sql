-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-08-2023 a las 15:56:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_aguacate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aguacate`
--

CREATE TABLE `aguacate` (
  `idpuesto` bigint(11) NOT NULL,
  `nombreCliente` varchar(50) NOT NULL,
  `documentoCliente` int(11) NOT NULL,
  `marcaVehiculo` varchar(11) NOT NULL,
  `placaVehiculo` varchar(11) NOT NULL,
  `color` varchar(11) NOT NULL,
  `ubicacion` varchar(11) NOT NULL,
  `horaIngreso` datetime NOT NULL DEFAULT current_timestamp(),
  `horaSalida` datetime NOT NULL,
  `estadoParqueadero` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aguacate`
--
ALTER TABLE `aguacate`
  ADD PRIMARY KEY (`idpuesto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aguacate`
--
ALTER TABLE `aguacate`
  MODIFY `idpuesto` bigint(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
