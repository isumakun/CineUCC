-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2015 a las 18:36:30
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cineucc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE IF NOT EXISTS `pelicula` (
  `idPelicula` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(250) NOT NULL,
  `idSala` int(11) NOT NULL,
  PRIMARY KEY (`idPelicula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `ticket_idticket` int(11) NOT NULL,
  `cliente_cedula_cliente` int(11) NOT NULL,
  `sillas_idsillas` int(11) NOT NULL,
  `ventas_idventas` int(11) NOT NULL,
  `operario_cedula_operario` int(11) NOT NULL,
  KEY `fk_reserva_ticket_idx` (`ticket_idticket`),
  KEY `fk_reserva_cliente1_idx` (`cliente_cedula_cliente`),
  KEY `fk_reserva_sillas1_idx` (`sillas_idsillas`),
  KEY `fk_reserva_ventas1_idx` (`ventas_idventas`),
  KEY `fk_reserva_operario1_idx` (`operario_cedula_operario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
  `idsala` int(11) NOT NULL,
  `numero_filas` varchar(45) NOT NULL,
  `numero_sillas` varchar(45) NOT NULL,
  PRIMARY KEY (`idsala`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sillas`
--

CREATE TABLE IF NOT EXISTS `sillas` (
  `idsillas` int(11) NOT NULL,
  `fila` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `sala_idsala` int(11) NOT NULL,
  PRIMARY KEY (`idsillas`),
  KEY `fk_sillas_sala1_idx` (`sala_idsala`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `idticket` int(11) NOT NULL,
  `precio` varchar(45) NOT NULL,
  PRIMARY KEY (`idticket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tipo` varchar(45) NOT NULL DEFAULT 'cliente',
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `nombre`, `apellido`, `telefono`, `password`, `tipo`) VALUES
(100100, 'John', 'Doe', '4555555', '1234', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `idventas` int(11) NOT NULL,
  `cliente_cedula_cliente` int(11) NOT NULL,
  `operario_cedula_operario` int(11) NOT NULL,
  PRIMARY KEY (`idventas`),
  KEY `fk_ventas_cliente1_idx` (`cliente_cedula_cliente`),
  KEY `fk_ventas_operario1_idx` (`operario_cedula_operario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
