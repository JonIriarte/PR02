

CREATE TABLE `mantenimiento` (
  `id_mantenimiento` int(11) NOT NULL  PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `mantenimiento` (`id_mantenimiento`, `nombre`, `password`) VALUES
(1, 'mantenimiento1', '1fa3356b1eb65f144a367ff8560cb406'),
(2, 'mantenimiento2', '1fa3356b1eb65f144a367ff8560cb406');