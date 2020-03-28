-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-03-2020 a las 20:42:40
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `semillero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participante`
--

DROP TABLE IF EXISTS `participante`;
CREATE TABLE IF NOT EXISTS `participante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(15) DEFAULT NULL COMMENT 'Almacena el numero de documento del participante',
  `nombre` varchar(50) NOT NULL COMMENT 'Almacena el nombre del participante',
  `fechanacimiento` date DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `codigo` varchar(10) DEFAULT NULL COMMENT 'Almacena el codigo institucional del participante',
  `clave` varchar(50) DEFAULT NULL COMMENT 'Almacena la clave encriptada del participante.  La encriptacion puede ser HASH o MD5, se deb definir.',
  `foto` varchar(50) DEFAULT NULL COMMENT 'Almacena el nombre del archivo de la dirección de la foto',
  `tipo` int(11) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IXFK_participante_tipo` (`tipo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Almacena la información del participante que hace parte de los semilleros.  Un participante puede pertenecer a diversos semilleros de información con la misma información.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

DROP TABLE IF EXISTS `tipo`;
CREATE TABLE IF NOT EXISTS `tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Corresponde a la tipologia de los participantes de los semilleros';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
