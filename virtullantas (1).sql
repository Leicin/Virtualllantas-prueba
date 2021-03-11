-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2021 a las 19:42:56
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `virtullantas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info`
--

CREATE TABLE `info` (
  `Id` int(11) NOT NULL,
  `Titulo` text NOT NULL,
  `Dirre_correo` varchar(100) NOT NULL,
  `Foto` longblob NOT NULL,
  `Contenido` varchar(200) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `info`
--

INSERT INTO `info` (`Id`, `Titulo`, `Dirre_correo`, `Foto`, `Contenido`, `fecha_registro`) VALUES
(30, 'juan david', 'juandavid@gmail.com', 0x2e2e2f55706c6f6164732f5573756172696f732f31363135343739323530636170747572612064652070616e74616c6c612e706e67, 'Fechas', '2021-03-11 16:14:10'),
(31, 'optimus tucana', 'optimus@gmail.com', 0x2e2e2f55706c6f6164732f5573756172696f732f3136313534383735373850616e656c436f6e74726f6c2e706e67, 'Información relevante de Optimus', '2021-03-11 18:32:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `User`, `Clave`) VALUES
(1, 'juan', 'juan'),
(2, 'estiven', 'estiven2019'),
(3, 'daniel', 'daniel2021');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `info`
--
ALTER TABLE `info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
