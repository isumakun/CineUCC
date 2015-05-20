-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2015 a las 08:44:50
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
`idPelicula` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `idSala` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`idPelicula`, `nombre`, `imagen`, `idSala`) VALUES
(1, 'Vengadores 2', 'http://t0.gstatic.com/images?q=tbn:ANd9GcRlGeugacRkKznDOtRhUCVt0AkrOTPbaaKwF9xgGZgNViyC_Xko', 1),
(2, 'MadMax', 'http://cdn.wegotthiscovered.com/wp-content/uploads/Mad.jpg', 2),
(3, 'Dragon Ball Z: La resurreciÃ³n de Freezer', 'http://www.dragonball2015.com/common/images/main.jpg', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
`idReserva` int(11) NOT NULL,
  `idPelicula` int(11) NOT NULL,
  `cedula_usuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`idReserva`, `idPelicula`, `cedula_usuario`) VALUES
(3, 3, 12622023),
(5, 1, 12622023);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
`idSala` int(11) NOT NULL,
  `numero_filas` int(11) NOT NULL,
  `numero_sillas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`idSala`, `numero_filas`, `numero_sillas`) VALUES
(1, 10, 100),
(2, 20, 200),
(3, 15, 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sillas`
--

CREATE TABLE IF NOT EXISTS `sillas` (
`idSilla` int(11) NOT NULL,
  `fila` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL DEFAULT 'vacia',
  `sala_idsala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
`idTicket` int(11) NOT NULL,
  `idReserva` int(11) NOT NULL,
  `precio` double NOT NULL DEFAULT '10000'
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`idTicket`, `idReserva`, `precio`) VALUES
(1, 3, 10000),
(2, 3, 10000),
(3, 3, 10000),
(4, 3, 10000),
(5, 3, 10000),
(30, 4, 10000),
(31, 4, 10000),
(32, 4, 10000),
(33, 4, 10000),
(34, 4, 10000),
(35, 4, 10000),
(36, 4, 10000),
(37, 4, 10000),
(38, 5, 10000),
(39, 5, 10000),
(40, 5, 10000),
(41, 5, 10000),
(42, 5, 10000),
(43, 5, 10000);

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
  `tipo` varchar(45) NOT NULL DEFAULT 'cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `nombre`, `apellido`, `telefono`, `password`, `tipo`) VALUES
(100100, 'John', 'Doe', '4555555', '1234', 'admin'),
(12345678, 'Ana', 'Alvarez', '4223435', '1234', 'cliente'),
(12622023, 'zed', 'shen', '4220096', '1234', 'cliente'),
(324559696, 'Kakaroto', 'Mondo', '4220808', '1234', 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `idventas` int(11) NOT NULL,
  `cliente_cedula_cliente` int(11) NOT NULL,
  `operario_cedula_operario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
 ADD PRIMARY KEY (`idPelicula`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
 ADD PRIMARY KEY (`idReserva`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
 ADD PRIMARY KEY (`idSala`);

--
-- Indices de la tabla `sillas`
--
ALTER TABLE `sillas`
 ADD PRIMARY KEY (`idSilla`), ADD KEY `fk_sillas_sala1_idx` (`sala_idsala`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
 ADD PRIMARY KEY (`idTicket`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
 ADD PRIMARY KEY (`idventas`), ADD KEY `fk_ventas_cliente1_idx` (`cliente_cedula_cliente`), ADD KEY `fk_ventas_operario1_idx` (`operario_cedula_operario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
MODIFY `idSala` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sillas`
--
ALTER TABLE `sillas`
MODIFY `idSilla` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
MODIFY `idTicket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
