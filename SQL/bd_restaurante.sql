-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2020 a las 19:27:40
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_restaurante`
--
CREATE DATABASE bd_restaurante;
USE DATABASE  bd_restaurante; 
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camarero`
--

CREATE TABLE `camarero` (
  `id_camarero` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia`
--

CREATE TABLE `incidencia` (
  `id_incidencia` int(11) NOT NULL,
  `descripcion_incidencia` text NOT NULL,
  `estado_incidencia` enum('abierta','solucionada','en progreso','cerrada') NOT NULL,
  `fecha_incidencia` datetime NOT NULL,
  `id_mesa` int(11) NOT NULL COMMENT 'Depende de la tabla "Mesa"'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id_mesa` int(11) NOT NULL,
  `disponible_mesa` tinyint(1) NOT NULL,
  `plazas_mesa` enum('1','2','4') NOT NULL,
  `lugar_mesa` enum('Terraza','Barra','Sala') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `fecha_reserva` datetime NOT NULL,
  `fin_reserva` datetime DEFAULT NULL,
  `id_camarero` int(11) NOT NULL COMMENT 'Depende de la tabla "camarero"',
  `id_mesa` int(11) NOT NULL COMMENT 'Depende de la tabla "mesa"'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camarero`
--
ALTER TABLE `camarero`
  ADD PRIMARY KEY (`id_camarero`);

--
-- Indices de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD PRIMARY KEY (`id_incidencia`),
  ADD KEY `fk_id_mesa` (`id_mesa`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id_mesa`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `fk_id_mesa` (`id_mesa`) USING BTREE,
  ADD KEY `fk_id_camarero` (`id_camarero`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camarero`
--
ALTER TABLE `camarero`
  MODIFY `id_camarero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD CONSTRAINT `fk_id_mesa` FOREIGN KEY (`id_mesa`) REFERENCES `mesa` (`id_mesa`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_id_camarer` FOREIGN KEY (`id_camarero`) REFERENCES `camarero` (`id_camarero`),
  ADD CONSTRAINT `fk_id_camarero` FOREIGN KEY (`id_camarero`) REFERENCES `camarero` (`id_camarero`),
  ADD CONSTRAINT `fk_id_mes` FOREIGN KEY (`id_mesa`) REFERENCES `mesa` (`id_mesa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
