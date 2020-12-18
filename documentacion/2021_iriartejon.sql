-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2020 a las 18:26:17
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `2021_iriartejon`
--
CREATE DATABASE IF NOT EXISTS `2021_iriartejon` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `2021_iriartejon`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_extra`
--

CREATE TABLE `tbl_extra` (
  `id_extras` int(11) NOT NULL,
  `tipo_extra` enum('Silla','Silla Bebe') NOT NULL,
  `id_reserva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_incidencia`
--

CREATE TABLE `tbl_incidencia` (
  `id_inci` int(11) NOT NULL,
  `desc_inci` text NOT NULL,
  `estado_inci` enum('1-Abierta','2-En reparacion','3-Cerrada','4-Abandonada') NOT NULL,
  `fecha_inci` date NOT NULL DEFAULT current_timestamp(),
  `id_mesa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mesa`
--

CREATE TABLE `tbl_mesa` (
  `id_mesa` int(11) NOT NULL,
  `plazas_mesa` enum('1','2','4') NOT NULL,
  `lugar_mesa` enum('Terraza','Barra','Sala 1','Sala 2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_mesa`
--

INSERT INTO `tbl_mesa` (`id_mesa`, `plazas_mesa`, `lugar_mesa`) VALUES
(1, '1', 'Barra'),
(2, '1', 'Barra'),
(3, '1', 'Barra'),
(4, '1', 'Barra'),
(5, '1', 'Barra'),
(6, '1', 'Barra'),
(7, '1', 'Barra'),
(8, '1', 'Barra'),
(9, '2', 'Sala 1'),
(10, '2', 'Sala 1'),
(11, '4', 'Sala 1'),
(12, '4', 'Sala 1'),
(13, '4', 'Sala 1'),
(14, '4', 'Sala 1'),
(15, '2', 'Sala 2'),
(16, '2', 'Sala 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reserva`
--

CREATE TABLE `tbl_reserva` (
  `id_reserva` int(11) NOT NULL,
  `fecha_reserva` date NOT NULL,
  `hora_reserva` enum('13','14','15','20','21') NOT NULL,
  `nombre_reserva` varchar(255) NOT NULL,
  `telf_reserva` text NOT NULL,
  `id_mesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_reserva`
--

INSERT INTO `tbl_reserva` (`id_reserva`, `fecha_reserva`, `hora_reserva`, `nombre_reserva`, `telf_reserva`, `id_mesa`) VALUES
(2, '2020-12-25', '20', 'Sergio Jimenez', '666777999', 15),
(4, '2020-12-26', '14', 'Mel Stila', '666555444', 10),
(15, '2020-12-20', '21', 'Danny Larrea', '666999888', 16),
(43, '2020-12-21', '13', 'Pepe Perez', '555666777', 2),
(44, '2020-12-22', '13', 'Pepe Perez', '555666777', 8),
(45, '2020-12-30', '13', 'Jon', '666666666', 4),
(46, '2020-12-24', '13', 'Jon Iriarte', '666777888', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `nombre_user` varchar(255) NOT NULL,
  `apellido_user` varchar(255) NOT NULL,
  `status_user` enum('Baja','Vacaciones','Trabaja') NOT NULL,
  `profile_user` enum('Administrador','Mantenimiento','Camarero') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `email_user`, `password_user`, `nombre_user`, `apellido_user`, `status_user`, `profile_user`) VALUES
(1, 'admin@correo.com', '6512bd43d9caa6e02c990b0a82652dca', 'Jon', 'Iriarte', 'Trabaja', 'Administrador'),
(2, 'amaia@correo.com', '6512bd43d9caa6e02c990b0a82652dca', 'Amaia', 'Urra', 'Vacaciones', 'Camarero'),
(3, 'Judit@correo.com', '6512bd43d9caa6e02c990b0a82652dca', 'Judit', 'Castedo', 'Vacaciones', 'Camarero'),
(4, 'carlos@piedras.com', '6512bd43d9caa6e02c990b0a82652dca', 'Carlos', 'Piedras', 'Trabaja', 'Mantenimiento'),
(8, 'sonia@correo.com', '6512bd43d9caa6e02c990b0a82652dca', 'Sonia', 'Prieto', 'Trabaja', 'Camarero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_extra`
--
ALTER TABLE `tbl_extra`
  ADD PRIMARY KEY (`id_extras`),
  ADD KEY `FK_id_extra` (`id_reserva`);

--
-- Indices de la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  ADD PRIMARY KEY (`id_inci`),
  ADD KEY `id_mesa` (`id_mesa`),
  ADD KEY `FK_id_incidencia` (`id_user`);

--
-- Indices de la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  ADD PRIMARY KEY (`id_mesa`);

--
-- Indices de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `fk_id_mesa` (`id_mesa`);

--
-- Indices de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `UK_email_user` (`email_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_extra`
--
ALTER TABLE `tbl_extra`
  MODIFY `id_extras` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  MODIFY `id_inci` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_extra`
--
ALTER TABLE `tbl_extra`
  ADD CONSTRAINT `FK_id_extra` FOREIGN KEY (`id_reserva`) REFERENCES `tbl_reserva` (`id_reserva`);

--
-- Filtros para la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  ADD CONSTRAINT `FK_id_donde` FOREIGN KEY (`id_mesa`) REFERENCES `tbl_mesa` (`id_mesa`),
  ADD CONSTRAINT `FK_id_incidencia` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Filtros para la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD CONSTRAINT `fk_id_mesa` FOREIGN KEY (`id_mesa`) REFERENCES `tbl_mesa` (`id_mesa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
