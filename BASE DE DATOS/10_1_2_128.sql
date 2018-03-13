-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 10.1.2.128
-- Tiempo de generación: 13-03-2018 a las 07:52:22
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u637171583_vayne`
--
CREATE DATABASE IF NOT EXISTS `u637171583_vayne` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `u637171583_vayne`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialdecontacto`
--

CREATE TABLE `historialdecontacto` (
  `id_contacto` int(10) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `historialdecontacto`
--

INSERT INTO `historialdecontacto` (`id_contacto`, `nombre`, `email`, `comentario`) VALUES
(1, 'alberto', 'dcibeto@gmail.com', 'hala		'),
(2, 'roberto', 'rigo@hotmail.com', 'segundo comentario en server				'),
(3, 'alfredo', 'asdasd@adadasd.com', 'tercer comentario de prueba				');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historialdecontacto`
--
ALTER TABLE `historialdecontacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historialdecontacto`
--
ALTER TABLE `historialdecontacto`
  MODIFY `id_contacto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
