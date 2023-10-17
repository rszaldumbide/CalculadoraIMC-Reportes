-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2023 a las 19:23:15
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examenimc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosusuario`
--

CREATE TABLE `datosusuario` (
  `u_id` int(11) NOT NULL,
  `u_nombre` varchar(100) NOT NULL,
  `u_apellido` varchar(100) NOT NULL,
  `u_cedula` varchar(25) NOT NULL,
  `u_genero` varchar(25) NOT NULL,
  `u_edad` int(11) NOT NULL,
  `u_valorimc` varchar(100) NOT NULL,
  `u_rangoimc` varchar(50) NOT NULL,
  `u_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosusuario`
--

INSERT INTO `datosusuario` (`u_id`, `u_nombre`, `u_apellido`, `u_cedula`, `u_genero`, `u_edad`, `u_valorimc`, `u_rangoimc`, `u_estado`) VALUES
(1, 'Cristian', 'Recalde', '1002003001', 'Masculino', 22, '29.87', 'Obesidad grado 1', 1),
(8, 'Carlo', 'Magno', '1002003002', 'Masculino', 33, '30,96', 'Obesidad grado 1', 1),
(11, 'Maicol', 'Arteaga', '1002003003', 'Masculino', 54, '36.76', 'Obesidad grado 2', 1),
(12, 'Maria', 'Coello', '1002003004', 'Femenino', 27, '23', 'Peso normal', 1),
(13, 'Luis', 'Zaldumbide', '1003627864', 'Masculino', 29, '30', 'Obesidad grado 1', 1),
(14, 'Marco', 'Munioz', '102003006', 'Masculino', 28, '28.41 ', 'Sobrepeso', 1),
(15, 'Jeff', 'Jordan', '1005002001', 'Masculino', 17, '14.74', 'Peso bajo', 1),
(16, 'Orlo', 'Montesdeoca', '0014005002', 'Masculino', 21, '20.75', 'Peso normal', 1),
(17, 'Esperanza', 'Manosalvas', '0145633452', 'Masculino', 56, '40.06', 'Obesidad grado 3', 1),
(18, 'jeremy', 'cano', '1201031312', 'Masculino', 13, '29.30', 'Sobrepeso', 1),
(19, 'hyfyrf', 'yguyg', '123456789', 'Masculino', 23, '34.78', 'Obesidad grado 1', 1),
(20, 'Segundo', 'Pusda', '1002005001', 'Masculino', 38, '32.87', 'Obesidad grado 1', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosusuario`
--
ALTER TABLE `datosusuario`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosusuario`
--
ALTER TABLE `datosusuario`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
