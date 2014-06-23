-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2014 a las 16:49:03
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--
CREATE DATABASE IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `proyecto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_usuarios` int(10) NOT NULL,
  `id_tema` int(10) NOT NULL,
  `comentarios` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_pub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_usuarios`, `id_tema`, `comentarios`, `fecha_pub`) VALUES
(1, 1, 1, 'Buena', '2014-02-26 18:06:20'),
(2, 2, 2, 'Buena', '2014-02-26 18:06:20'),
(3, 1, 3, 'No me Interesa', '2014-02-26 18:06:20'),
(4, 0, 0, '', '2014-02-26 18:06:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_pub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comentarios` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id`, `id_usuario`, `titulo`, `fecha_pub`, `comentarios`) VALUES
(1, 1, 'La vida', '2014-02-26 18:05:26', 'El término vida (latín: vita )?, desde el punto de vista de la biología, hace referencia a aquello que distingue a los reinos animal, vegetal, hongos, protistas, arqueas y bacterias del resto de realidades naturales. Implica las capacidades de nacer, crecer, reproducirse y morir, y a lo largo de sucesivas generaciones, evolucionar. A pesar de que no puede indicarse con precisión, la evidencia sugiere que la vida en la Tierra ha existido por aproximadamente 3700 millones de años,1 2 cuyas huellas fósiles más antiguas datan hace 3,4 millardos de años.3'),
(2, 2, 'La Muerte', '2014-02-26 18:05:26', 'En español además del nombre propio de La Muerte es común emplear el término La Parca proveniente de la mitología romana. A partir del siglo XV comenzó a ser representado como una figura esquelética que lleva con capucha. También se da el nombre del Ángel de la Muerte. En rigor no hay ninguna mención en la Biblia del Ángel de la Muerte, sin embargo, hay una mención de Abbaddon (El Destructor) un ángel cuya verdadera identidad es un misterio; y que corresponde al Ángel del Abismo.'),
(3, 1, 'La Tierra', '2014-02-26 18:05:26', 'La Tierra (de Terra, nombre latino de Gea, deidad griega de la feminidad y la fecundidad) es un planeta del Sistema Solar que gira alrededor de su estrella en la tercera órbita más interna. Es el más denso y el quinto mayor de los ocho planetas del Sistema Solar. También es el mayor de los cuatro terrestres.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `tipo`) VALUES
(1, 'carlos', 'carlos1', '', 0),
(2, 'rey', '1234', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
