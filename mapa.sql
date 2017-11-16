-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2017 a las 03:29:59
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mapa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `matricula` int(11) NOT NULL,
  `e11` int(11) NOT NULL,
  `e12` int(11) NOT NULL,
  `e13` int(11) NOT NULL,
  `e14` int(11) NOT NULL,
  `e15` int(11) NOT NULL,
  `e16` int(11) NOT NULL,
  `e17` int(11) NOT NULL,
  `e18` int(11) NOT NULL,
  `e21` int(11) NOT NULL,
  `e22` int(11) NOT NULL,
  `e23` int(11) NOT NULL,
  `e24` int(11) NOT NULL,
  `e25` int(11) NOT NULL,
  `e26` int(11) NOT NULL,
  `e27` int(11) NOT NULL,
  `e28` int(11) NOT NULL,
  `e29` int(11) NOT NULL,
  `e32` int(11) NOT NULL,
  `e33` int(11) NOT NULL,
  `e36` int(11) NOT NULL,
  `e37` int(11) NOT NULL,
  `e39` int(11) NOT NULL,
  `e41` int(11) NOT NULL,
  `e42` int(11) NOT NULL,
  `e43` int(11) NOT NULL,
  `e44` int(11) NOT NULL,
  `e45` int(11) NOT NULL,
  `e46` int(11) NOT NULL,
  `e48` int(11) NOT NULL,
  `e410` int(11) NOT NULL,
  `e53` int(11) NOT NULL,
  `e54` int(11) NOT NULL,
  `e55` int(11) NOT NULL,
  `e56` int(11) NOT NULL,
  `e57` int(11) NOT NULL,
  `e58` int(11) NOT NULL,
  `e59` int(11) NOT NULL,
  `e510` int(11) NOT NULL,
  `e65` int(11) NOT NULL,
  `e67` int(11) NOT NULL,
  `e68` int(11) NOT NULL,
  `e78` int(11) NOT NULL,
  `e79` int(11) NOT NULL,
  `e710` int(11) NOT NULL,
  `e81` int(11) NOT NULL,
  `e82` int(11) NOT NULL,
  `e83` int(11) NOT NULL,
  `e84` int(11) NOT NULL,
  `e91` int(11) NOT NULL,
  `e92` int(11) NOT NULL,
  `variable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`matricula`, `e11`, `e12`, `e13`, `e14`, `e15`, `e16`, `e17`, `e18`, `e21`, `e22`, `e23`, `e24`, `e25`, `e26`, `e27`, `e28`, `e29`, `e32`, `e33`, `e36`, `e37`, `e39`, `e41`, `e42`, `e43`, `e44`, `e45`, `e46`, `e48`, `e410`, `e53`, `e54`, `e55`, `e56`, `e57`, `e58`, `e59`, `e510`, `e65`, `e67`, `e68`, `e78`, `e79`, `e710`, `e81`, `e82`, `e83`, `e84`, `e91`, `e92`, `variable`) VALUES
(201215381, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(201215382, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(200) NOT NULL,
  `matricula` int(200) NOT NULL,
  `contrasena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `matricula`, `contrasena`) VALUES
('juan', 201215381, 'max'),
('pete', 201215382, '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
