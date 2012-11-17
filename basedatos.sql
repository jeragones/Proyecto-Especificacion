-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-11-2012 a las 20:29:58
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `basedatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(120) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `mensaje`, `usuario`) VALUES
(1, 'hola', 'jeragones'),
(2, 'mijo', 'jeragones'),
(3, 'gordo', 'jeragones'),
(4, 'hola', 'jeragones'),
(5, 'jojojo', 'jeragones'),
(6, 'juas', 'jeragones'),
(7, 'nooo', 'jeragones'),
(8, 'pfffff', 'jeragones'),
(9, 'jaus', 'jeragones'),
(10, 'mierda', 'jeragones'),
(11, 'noooooo', 'jeragones'),
(12, 'tome que rico', 'jeragones'),
(13, 'no puede ser', 'jeragones'),
(14, 'juas', 'jeragones'),
(15, 'no puede ser', 'jeragones'),
(16, 'no sirve', 'jeragones'),
(17, 'pavo !!!', 'usuario1'),
(18, 'esta vara ya funciona !!!', 'usuario1'),
(19, 'bueno ya fue ...', 'usuario1'),
(20, 'coma mierda', 'usuario1'),
(21, 'su abuela', 'jeragones'),
(22, 'jajajajajajaja', 'jeragones'),
(23, 'no me hace gracia', 'usuario1'),
(24, 'y ud piensa que a mi me importa ?', 'jeragones'),
(25, 'pucha', 'usuario1'),
(26, 'no se puede asÃ­', 'usuario1'),
(27, 'habia una vez un mae que no sabia por que estaba trabajando si ya se iba a acabar el mundo asi que decidio ya no trabaja', 'usuario1'),
(28, 'mijo', 'usuario1'),
(29, 'no joda', 'jeragones'),
(31, 'jajajajajajajajaja', 'jeragones'),
(32, 'no se burle de mi', 'usuario1'),
(33, 'yo hago lo que me da la gana', 'jeragones'),
(34, 'jejejeje', 'usuario1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(20) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `pais` varchar(20) DEFAULT 'Costa Rica',
  `pass` varchar(20) DEFAULT NULL,
  `permiso` int(11) DEFAULT '0',
  PRIMARY KEY (`usuario`),
  UNIQUE KEY `correo` (`correo`),
  KEY `correo_2` (`correo`),
  KEY `correo_3` (`correo`),
  KEY `correo_4` (`correo`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `Nombre`, `correo`, `pais`, `pass`, `permiso`) VALUES
('jeragones', 'Jorge', 'jeragones@hotmail.com', 'Costa Rica', '123', 2),
('usuario1', 'mijo', 'mijo@hotmail.com', 'Costa Rica', '123', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
