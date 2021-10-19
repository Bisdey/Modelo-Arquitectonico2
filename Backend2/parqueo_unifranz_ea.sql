-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2021 a las 23:54:41
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parqueo_unifranz_ea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aministrador`
--

CREATE TABLE `aministrador` (
  `usuario` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aministrador`
--

INSERT INTO `aministrador` (`usuario`, `nombre`, `apellido`, `email`, `password`, `id`) VALUES
('Bisdey', 'Bismark Deynor', 'Condori Ruiz', 'bisdey99@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libre`
--

CREATE TABLE `libre` (
  `id` int(50) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `hora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libre`
--

INSERT INTO `libre` (`id`, `estado`, `hora`) VALUES
(1, 'ocupado', '2021-10-15 20:36:56'),
(2, 'Libre', NULL),
(3, 'libre', '2021-10-17 17:52:27'),
(4, 'ocupado', '2021-10-15 20:47:42'),
(5, 'Libre', NULL),
(6, 'Libre', NULL),
(7, 'libre', '2021-10-15 20:47:34'),
(8, 'ocupado', '2021-10-17 17:52:46'),
(9, 'Libre', NULL),
(10, 'Libre', NULL),
(11, 'libre', '2021-10-17 17:52:40'),
(12, 'Libre', NULL),
(13, 'Libre', NULL),
(14, 'Libre', NULL),
(15, 'ocupado', '2021-10-17 17:52:34'),
(16, 'Libre', NULL),
(17, 'Libre', NULL),
(18, 'Libre', NULL),
(19, 'Libre', NULL),
(20, 'ocupado', '2021-10-17 17:52:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupado`
--

CREATE TABLE `ocupado` (
  `codigo` int(50) DEFAULT NULL,
  `hora ingreso` varchar(50) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `hora salida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id` int(50) NOT NULL,
  `turno` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `ci` int(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id`, `turno`, `nombre`, `apellido`, `direccion`, `ci`, `estado`) VALUES
(1, 'Mañana', 'Franz', 'Mamani', 'Villa Alina', 9984126, 'Activo'),
(2, 'Mañana', 'Deynor', 'condori', 'Achocalla', 11, 'Activo'),
(4, 'Mañana', 'c', 's', 'a', 12, 'inactivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aministrador`
--
ALTER TABLE `aministrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libre`
--
ALTER TABLE `libre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aministrador`
--
ALTER TABLE `aministrador`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
