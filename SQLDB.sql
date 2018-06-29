-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-06-2018 a las 18:57:35
-- Versión del servidor: 10.0.34-MariaDB-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

--
-- Estructura de tabla para la tabla `Calendario`
--

CREATE TABLE `Calendario` (
  `id_calendario` int(11) NOT NULL,
  `maquina` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `periodo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `trabajo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `subtrabajo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detalle` text COLLATE utf8_unicode_ci NOT NULL,
  `fechaVence` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Email`
--

CREATE TABLE `Email` (
  `id` int(11) DEFAULT NULL,
  `protocol` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_host` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_port` int(11) DEFAULT NULL,
  `smtp_user` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_pass` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailtype` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `charset` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigoEncargado` int(11) DEFAULT NULL,
  `codigoCC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Email`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MAN_Seguimiento`
--

CREATE TABLE `MAN_Seguimiento` (
  `idMan_Tecnico` int(11) NOT NULL,
  `NroSolicitud` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `clasificacion` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_detencion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `MAN_Seguimiento`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MAN_Solicitud`
--

CREATE TABLE `MAN_Solicitud` (
  `orden` int(11) NOT NULL,
  `NroSolicitud` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cod_detecta` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maquina` varchar(255) CHARACTER SET utf8 NOT NULL,
  `detalle` text CHARACTER SET utf8 NOT NULL,
  `fechasolicitud` date NOT NULL,
  `horasolicitud` time NOT NULL,
  `tipomantencion` varchar(255) CHARACTER SET utf8 NOT NULL,
  `estado` varchar(255) CHARACTER SET utf8 NOT NULL,
  `urgente` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tipotrabajo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `CodArea` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `generacion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `MAN_Solicitud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Maquinas`
--


--
-- Estructura de tabla para la tabla `Seguimiento_Detalle`
--

CREATE TABLE `Seguimiento_Detalle` (
  `id_detalle` int(11) NOT NULL,
  `id_man_tecnico` int(11) NOT NULL,
  `horaInicio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `horaTermino` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HM` float NOT NULL,
  `HH` float NOT NULL,
  `Int_Prod` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Comentario` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Seguimiento_Detalle`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tecnico_Seguimiento`
--

CREATE TABLE `Tecnico_Seguimiento` (
  `id_tecnico` int(11) NOT NULL,
  `id_detalle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Tecnico_Seguimiento`
--



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--


--
-- Indices de la tabla `Calendario`
--
ALTER TABLE `Calendario`
  ADD PRIMARY KEY (`id_calendario`);

--
-- Indices de la tabla `MAN_Seguimiento`
--
ALTER TABLE `MAN_Seguimiento`
  ADD PRIMARY KEY (`idMan_Tecnico`);

--
-- Indices de la tabla `MAN_Solicitud`
--
ALTER TABLE `MAN_Solicitud`
  ADD PRIMARY KEY (`orden`);

--
-- Indices de la tabla `Maquinas`
--


--
-- Indices de la tabla `personal`
--


--
-- Indices de la tabla `Seguimiento_Detalle`
--
ALTER TABLE `Seguimiento_Detalle`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `Tecnico_Seguimiento`
--
ALTER TABLE `Tecnico_Seguimiento`
  ADD KEY `fk_detalle_idx` (`id_detalle`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `MAN_Seguimiento`
--
ALTER TABLE `MAN_Seguimiento`
  MODIFY `idMan_Tecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5920;
--
-- AUTO_INCREMENT de la tabla `MAN_Solicitud`
--
ALTER TABLE `MAN_Solicitud`
  MODIFY `orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51234;
--
-- AUTO_INCREMENT de la tabla `Maquinas`
--

--
-- AUTO_INCREMENT de la tabla `Seguimiento_Detalle`
--
ALTER TABLE `Seguimiento_Detalle`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5919;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Tecnico_Seguimiento`
--
ALTER TABLE `Tecnico_Seguimiento`
  ADD CONSTRAINT `fk_detalle` FOREIGN KEY (`id_detalle`) REFERENCES `Seguimiento_Detalle` (`id_detalle`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
