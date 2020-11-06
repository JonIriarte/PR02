
CREATE TABLE `camarero` (
  `id_camarero` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `camarero` (`nombre`, `password`) VALUES
('david', '1fa3356b1eb65f144a367ff8560cb406'),
('camarero1', '1fa3356b1eb65f144a367ff8560cb406'),
('camarero2', '1fa3356b1eb65f144a367ff8560cb406'),
('camarero3', '1fa3356b1eb65f144a367ff8560cb406');


CREATE TABLE `mesa` (
  `id_mesa` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `disponible_mesa` tinyint(1) NOT NULL,
  `plazas_mesa` enum('1','2','4') NOT NULL,
  `lugar_mesa` enum('Terraza','Barra','Sala','Sofá') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `incidencia` (
  `id_incidencia` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `descripcion_incidencia` text NOT NULL,
  `estado_incidencia` enum('abierta','solucionada') NOT NULL,
  `fecha_incidencia` datetime NOT NULL,
  `id_mesa` int(11) NOT NULL COMMENT 'Depende de la tabla "Mesa"', 
  Constraint fk_id_incidencia FOREIGN KEY (id_mesa)
  references mesa(id_mesa)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





INSERT INTO `mesa` (`disponible_mesa`, `plazas_mesa`, `lugar_mesa`) VALUES
(1, '1', 'Barra'),
(1, '1', 'Barra'),
(1, '1', 'Barra'),
(1, '1', 'Barra'),
(1, '1', 'Barra'),
(1, '1', 'Barra'),
(1, '1', 'Barra'),
(1, '1', 'Barra'),
(1, '4', 'Sofá'),
(1, '4', 'Sofá'),
(1, '4', 'Sofá'),
(1, '4', 'Sofá'),
(1, '4', 'Sofá'),
(1, '4', 'Sofá'),
(1, '4', 'Sala'),
(1, '4', 'Sala'),
(1, '4', 'Sala'),
(1, '4', 'Sala'),
(1, '4', 'Sala'),
(1, '4', 'Sala'),
(1, '4', 'Sala'),
(1, '4', 'Sala'),
(1, '4', 'Sala'),
(1, '2', 'Sala'),
(1, '2', 'Sala'),
(1, '2', 'Sala'),
(1, '2', 'Sala'),
(1, '2', 'Sala'),
(1, '2', 'Sala'),
(1, '4', 'Terraza'),
(1, '4', 'Terraza'),
(1, '4', 'Terraza'),
(1, '4', 'Terraza'),
( 1, '4', 'Terraza'),
(1, '4', 'Terraza');


CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fecha_reserva` datetime NOT NULL,
  `fin_reserva` datetime DEFAULT NULL,
 CONSTRAINT `ch_reserva` CHECK (`fecha_reserva`< `fin_reserva`),
  `id_camarero` int(11) NOT NULL COMMENT 'Depende de la tabla "camarero"',
  `id_mesa` int(11) NOT NULL COMMENT 'Depende de la tabla "mesa"', 
  Constraint fk_id_camarero FOREIGN KEY (id_camarero)
  references camarero(id_camarero), 
  CONSTRAINT fk_id_reserva FOREIGN KEY (id_mesa)
  REFERENCES mesa (id_mesa) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `mantenimiento` (
  `id_mantenimiento` int(11) NOT NULL  PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `mantenimiento` (`id_mantenimiento`, `nombre`, `password`) VALUES
(1, 'mantenimiento1', '1fa3356b1eb65f144a367ff8560cb406'),
(2, 'mantenimiento2', '1fa3356b1eb65f144a367ff8560cb406');