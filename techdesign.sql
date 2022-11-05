-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-11-2022 a las 14:55:35
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `techdesign`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_p`, `producto`, `precio`, `cantidad`) VALUES
(1, 'jabon', 2000, 3),
(2, 'olla', 20, 88),
(3, 'jabon', 2000, 3),
(4, 'olla', 2000, 3),
(5, 'olla', 2000, 3),
(6, 'olla', 2000, 3),
(7, 'jabon', 20, 88),
(8, 'olla', 2000, 3),
(9, 'df', 34, 34),
(10, 'olla', 20, 545),
(11, 'olla', 20, 3),
(12, 'olla', 2000, 3),
(13, 'jabon', 20, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `mensaje` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `direccion`, `telefono`, `correo`, `mensaje`) VALUES
(1, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'holi'),
(2, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'camilita'),
(3, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'gty'),
(4, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'gty'),
(5, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'gty'),
(6, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'hola'),
(7, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'hola'),
(8, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'hola'),
(9, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'hola'),
(10, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'hola'),
(11, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'hola'),
(12, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'hola'),
(13, 'camila', 'calle', '2535623', 'camimcp21@gmail.com', 'we');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
