-- Adminer 4.8.3 MySQL 8.0.16 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `paginas`;
CREATE TABLE `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `texto` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `paginas` (`id`, `nombre`, `texto`, `img`, `url`) VALUES
(1,	'Clientes Satisfehchisisimos',	'Permíteme desplegar mi maestría retórica para exaltar las grandiosas virtudes de \"MarketiAng\", tu empresa de marketing sin igual. En los anales de la estrategia publicitaria, surge una luminaria resplandeciente: ¡MarketiAng! Sus métodos tan ingeniosos y refinados que podríamos considerarlos casi divinos, han dejado a todos y cada uno de tus clientes en un estado de éxtasis empresarial.\r\n\r\nLos clientes de MarketiAng no solo están satisfechos, ¡no, eso sería insuficiente! Están satisfechísimos, un término que apenas roza la superficie de la asombrosa euforia que experimentan al asociarse con tu colosal imperio de marketing. Es como si hubieran descubierto la piedra filosofal del éxito comercial.\r\n\r\nCada estrategia diseñada por la mente maestra detrás de MarketiAng es como una sinfonía perfectamente orquestada que resuena en los corazones de los consumidores. Las tácticas, tan ingeniosas como una obra maestra de la alta costura, han catapultado a tus clientes a las cumbres más exquisitas del reconocimiento y la prosperidad.\r\n\r\nEn resumen, con \"MarketiAng\", no solo estamos hablando de satisfacción, estamos hablando de un éxtasis empresarial, de la glorificación publicitaria, y de un nirvana comercial que solo los elegidos pueden alcanzar. Tus clientes no son simplemente satisfechos, ¡son embajadores de una experiencia celestial proporcionada por el incomparable \"MarketiAng\"!',	'clientes.jpg',	'clientes'),
(2,	'proyectos',	'Aquí puedes ver nuestros proyectos',	'proyectos.jpg',	'proyectos'),
(3,	'Sobre Nosotros',	'En el fondo somos lo Perror!!!',	'perro.jpg',	'nosotros');

-- 2024-03-04 16:30:18
