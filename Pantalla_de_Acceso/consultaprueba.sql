-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2020 a las 03:44:39
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultaprueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nombre` varchar(45) NOT NULL,
  `primerapellido` varchar(45) NOT NULL,
  `segundoapellido` varchar(45) NOT NULL,
  `edad` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  `sucursalcliente` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `primerapellido`, `segundoapellido`, `edad`, `celular`, `sucursalcliente`) VALUES
('aratt', 'gaytan', 'flores', 16, 2147483647, 'norte'),
('belinda', 'diaz', 'fernandes', 25, 2147483647, 'norte'),
('beto', 'gomez', 'padilla', 35, 2147483647, 'oriente'),
('bryan', 'roque', 'valdez', 18, 2147483647, 'norte'),
('carmen', 'de la torre', '', 20, 2147483647, 'oriente'),
('fernando', 'olvera', 'cruz', 32, 2147483647, 'norte'),
('gerardo daniel', 'guitierrez', 'cruz', 17, 2147483647, 'sur'),
('hector', 'calderon', 'del sur', 34, 2147483647, 'sur'),
('jesus angel', 'roque', 'gamez', 16, 2147483647, 'norte'),
('jose', 'montañez', 'cruz', 42, 2147483647, 'centro'),
('josefina', 'estrada', 'medina', 28, 2147483647, 'centro'),
('juan carlos', 'rodriguez', 'fernandes', 28, 2147483647, 'oriente'),
('luis', 'arreola', 'montoya', 22, 2147483647, 'centro'),
('lupita', 'robles', 'reyes', 19, 2147483647, 'centro'),
('maria', 'roque', 'estrada', 21, 2147483647, 'sur'),
('mateo', 'martine', 'arreola', 36, 2147483647, 'oriente'),
('pablo', 'gaytan', 'flores', 23, 2147483647, 'oriente'),
('pepe', 'gomez', 'cruz', 20, 2147483647, 'sur'),
('ramon', 'diaz', 'gonzales', 46, 2147483647, 'sur'),
('rocio', 'de rosario', 'martinez', 25, 2147483647, 'centro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `sucursales` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`sucursales`) VALUES
('centro'),
('norte'),
('oriente'),
('sur');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'Admin', '4dm1n_t3st');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`sucursales`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
