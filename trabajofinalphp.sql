-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2020 a las 22:07:07
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajofinalphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendaservicio`
--

CREATE TABLE `agendaservicio` (
  `IdAgendaServicio` int(11) NOT NULL,
  `IdServicio` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agendaservicio`
--

INSERT INTO `agendaservicio` (`IdAgendaServicio`, `IdServicio`, `Fecha`) VALUES
(1, 1, '2020-06-22'),
(2, 4, '2020-06-22'),
(3, 4, '2020-06-22'),
(4, 3, '2020-06-22'),
(5, 3, '2020-06-22'),
(6, 3, '2020-06-22'),
(7, 3, '2020-06-22'),
(8, 3, '2020-06-22'),
(9, 0, '2020-06-22'),
(10, 5, '2020-06-22'),
(11, 5, '2020-06-22'),
(12, 1, '2020-06-22'),
(13, 1, '2020-06-22'),
(14, 1, '2020-06-22'),
(15, 1, '2020-06-22'),
(16, 1, '2020-06-22'),
(17, 1, '2020-06-22'),
(18, 1, '2020-06-22'),
(19, 1, '2020-06-22'),
(20, 3, '2020-06-22'),
(21, 3, '2020-06-22'),
(22, 3, '2020-06-22'),
(23, 5, '2020-06-22'),
(24, 5, '2020-06-22'),
(25, 5, '2020-06-22'),
(26, 1, '2020-06-22'),
(27, 0, '2020-06-22'),
(28, 0, '2020-06-22'),
(29, 1, '2020-06-22'),
(30, 1, '2020-06-22'),
(31, 1, '2020-06-22'),
(32, 1, '2020-06-22'),
(33, 1, '2020-06-22'),
(34, 1, '2020-06-22'),
(35, 1, '2020-06-22'),
(36, 1, '2020-06-22'),
(37, 1, '2020-06-22'),
(38, 1, '2020-06-22'),
(39, 1, '2020-06-22'),
(40, 1, '2020-06-22'),
(41, 1, '2020-06-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `IdContacto` int(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido_1` varchar(20) NOT NULL,
  `Apellido_2` varchar(20) NOT NULL,
  `Documento` int(13) NOT NULL,
  `Estado` int(1) NOT NULL,
  `IdCorreo` varchar(80) NOT NULL,
  `IdTelefono` int(15) NOT NULL,
  `Cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`IdContacto`, `Nombre`, `Apellido_1`, `Apellido_2`, `Documento`, `Estado`, `IdCorreo`, `IdTelefono`, `Cargo`) VALUES
(1, 'Olmeiro', 'Orozco', 'Ortiz', 1026140756, 2, 'olme.orozco@gmail.com', 2147483647, 'estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleagendaservicio`
--

CREATE TABLE `detalleagendaservicio` (
  `IdDetalleAgendaServicio` int(11) NOT NULL,
  `IdServicio` int(11) NOT NULL,
  `IdOperario` int(11) NOT NULL,
  `Tarea1` varchar(50) NOT NULL,
  `Tarea2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `IdEstado` int(11) NOT NULL,
  `Estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`IdEstado`, `Estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operario`
--

CREATE TABLE `operario` (
  `IdOperario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Documento` int(15) NOT NULL,
  `Celular` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `operario`
--

INSERT INTO `operario` (`IdOperario`, `Nombre`, `Apellido`, `Documento`, `Celular`) VALUES
(1, 'Albertin', 'Gomez', 569874589, 2147483647),
(3, 'Didier', 'Orozco', 71397767, 313525487);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `IdServicio` int(11) NOT NULL,
  `NombreObra` varchar(50) NOT NULL,
  `IdEstadoServicio` int(11) NOT NULL,
  `IdCotizacion` int(11) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`IdServicio`, `NombreObra`, `IdEstadoServicio`, `IdCotizacion`, `FechaInicio`, `FechaFin`) VALUES
(1, 'fenix', 1, 1, '2020-06-10', '2020-07-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Clave` varchar(20) NOT NULL,
  `TipoUsuario` varchar(20) NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nombre`, `Clave`, `TipoUsuario`, `Estado`) VALUES
(0, 'olme', '123', 'admin', 1),
(1, 'olme', '123', 'admin', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendaservicio`
--
ALTER TABLE `agendaservicio`
  ADD PRIMARY KEY (`IdAgendaServicio`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`IdContacto`),
  ADD KEY `FK_contacto_estado` (`Estado`);

--
-- Indices de la tabla `detalleagendaservicio`
--
ALTER TABLE `detalleagendaservicio`
  ADD PRIMARY KEY (`IdDetalleAgendaServicio`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IdEstado`);

--
-- Indices de la tabla `operario`
--
ALTER TABLE `operario`
  ADD PRIMARY KEY (`IdOperario`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`IdServicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendaservicio`
--
ALTER TABLE `agendaservicio`
  MODIFY `IdAgendaServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `IdContacto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalleagendaservicio`
--
ALTER TABLE `detalleagendaservicio`
  MODIFY `IdDetalleAgendaServicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `IdEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `operario`
--
ALTER TABLE `operario`
  MODIFY `IdOperario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `IdServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `FK_contacto_estado` FOREIGN KEY (`Estado`) REFERENCES `estado` (`IdEstado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
