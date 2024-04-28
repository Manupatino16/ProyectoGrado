-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2021 a las 00:18:35
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `patitas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(20) NOT NULL,
  `fecha_vacunacion` date NOT NULL,
  `lugar_vacunacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_esterilizacion` date NOT NULL,
  `lugar_esterilizacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_adopcion` date NOT NULL,
  `lugar_adopcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `requisitos_adopcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `fecha_vacunacion`, `lugar_vacunacion`, `fecha_esterilizacion`, `lugar_esterilizacion`, `fecha_adopcion`, `lugar_adopcion`, `requisitos_adopcion`) VALUES
(4, '2021-09-07', 'el coliseo', '2021-09-14', 'la veterinaria ', '2021-09-02', 'la sala de su casa', ''),
(5, '2021-08-30', 'El parque', '2021-09-17', 'el Hospital', '2021-09-10', 'el refugio', ''),
(6, '2021-09-14', 'el coliseo', '2021-09-15', 'la veterinaria ', '2021-09-07', 'la sala de su casa', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `id` int(20) NOT NULL,
  `especie` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `raza` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `edad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `caracteristicas` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`id`, `especie`, `nombre`, `raza`, `edad`, `sexo`, `caracteristicas`) VALUES
(3, 'perro', 'caramelo', '2 años', 'Gato- criollo', 'Macho', 'amarillo'),
(4, 'marrano', 'Vino', '2 años', 'criollo', 'Macho', 'feo'),
(5, '', 'Maria Sorany', 'Gato- criollo', '', '2021-08-31', 'negro con rayas'),
(7, '', 'caramelo', 'Gato- criollo', '3 años', 'Macho', 'amarillo cpn blanco , vacunado, castrado'),
(8, '', 'bruno', 'Gato- criollo', '3 años', 'Macho', 'feo'),
(9, 'rata', 'luis', 'hamster', '2 meses', 'Macho', 'es feo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

CREATE TABLE `donaciones` (
  `id` int(20) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cuenta_donaciones` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dir_donaciones` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `donaciones`
--

INSERT INTO `donaciones` (`id`, `nombre`, `telefono`, `correo`, `cuenta_donaciones`, `dir_donaciones`) VALUES
(1, 'Patricia Vega Mendoza', '3146967942', 'pattyvega6@gmail.com', '123456789-9', 'Calle 10 No. 23-55'),
(2, 'Patricia Vega Mendoza', '3146967942', 'pattyvega6@gmail.com', '123456789-9', 'Calle 10 No. 23-55'),
(3, 'Maria Sorany Arenas', '3146967942', 'yineth@gmail.com', '123456789-9', 'Calle 10 No. 23-55'),
(4, 'Vino', '3146967942', 'yeisondelavega@gmail.com', '123456789-9', 'Calle 10 No. 23-55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
