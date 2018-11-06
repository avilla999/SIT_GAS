-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2018 a las 00:37:20
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receptores`
--

CREATE TABLE `receptores` (
  `id` int(4) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `receptores`
--

INSERT INTO `receptores` (`id`, `nombre`) VALUES
(1, 'Ramon Maraboto'),
(2, 'Danielito Rodriguez Gonzalez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vales`
--

CREATE TABLE `vales` (
  `id` int(5) NOT NULL,
  `monto` int(8) NOT NULL,
  `folio` int(8) NOT NULL,
  `estatus` varchar(25) NOT NULL,
  `empresa` varchar(70) NOT NULL,
  `gasolina` varchar(20) NOT NULL,
  `vehiculo` varchar(25) NOT NULL,
  `fecharec` date NOT NULL,
  `fechauso` date NOT NULL,
  `ticket` int(10) NOT NULL,
  `orden` varchar(75) NOT NULL,
  `factura` int(20) NOT NULL,
  `receptor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vales`
--

INSERT INTO `vales` (`id`, `monto`, `folio`, `estatus`, `empresa`, `gasolina`, `vehiculo`, `fecharec`, `fechauso`, `ticket`, `orden`, `factura`, `receptor`) VALUES
(3, 355, 14534, '0', 'La empresa', 'Premium', 'Grande', '0000-00-00', '0000-00-00', 1494481, '', 0, 'Danielito Rodriguez Gonzalez'),
(4, 500, 44444, 'P', 'papapapa', 'magna', 'ninguno', '2018-11-06', '0000-00-00', 99999, '', 0, 'Ramon Maraboto'),
(5, 0, 0, 'P', '', '', '', '0000-00-00', '0000-00-00', 0, '', 0, 'Ramon Maraboto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `receptores`
--
ALTER TABLE `receptores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vales`
--
ALTER TABLE `vales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `receptores`
--
ALTER TABLE `receptores`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vales`
--
ALTER TABLE `vales`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
