-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2015 a las 21:55:31
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gestiongrupos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alugrupos`
--

CREATE TABLE IF NOT EXISTS `alugrupos` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alugrupos`
--

INSERT INTO `alugrupos` (`id`, `id_alumno`, `id_grupo`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 6),
(6, 1, 7),
(7, 1, 6),
(8, 1, 5),
(9, 1, 8),
(10, 1, 9),
(11, 1, 10),
(12, 2, 1),
(13, 2, 2),
(14, 2, 3),
(15, 2, 4),
(16, 2, 5),
(17, 2, 6),
(18, 2, 7),
(19, 2, 8),
(20, 2, 9),
(21, 2, 10),
(22, 3, 1),
(23, 3, 2),
(24, 3, 3),
(25, 3, 4),
(26, 3, 5),
(27, 3, 6),
(28, 3, 7),
(29, 3, 8),
(30, 3, 9),
(31, 3, 10),
(32, 4, 1),
(33, 4, 2),
(34, 4, 3),
(35, 4, 4),
(36, 4, 5),
(37, 4, 6),
(38, 4, 7),
(39, 4, 8),
(40, 4, 9),
(41, 4, 10),
(42, 5, 1),
(43, 5, 2),
(44, 5, 3),
(45, 5, 4),
(46, 5, 5),
(47, 5, 6),
(48, 5, 7),
(49, 5, 8),
(50, 5, 9),
(51, 5, 10),
(52, 6, 1),
(53, 6, 2),
(54, 6, 3),
(55, 6, 4),
(56, 6, 5),
(57, 6, 6),
(58, 6, 7),
(59, 6, 8),
(60, 6, 9),
(61, 6, 10),
(62, 7, 1),
(63, 7, 2),
(64, 7, 3),
(65, 7, 4),
(66, 7, 5),
(67, 7, 6),
(68, 7, 7),
(69, 7, 8),
(70, 7, 9),
(71, 7, 10),
(72, 8, 1),
(73, 8, 2),
(74, 8, 3),
(75, 8, 4),
(76, 8, 5),
(77, 8, 6),
(78, 8, 7),
(79, 8, 8),
(80, 8, 9),
(81, 8, 10),
(82, 9, 1),
(83, 9, 2),
(84, 9, 3),
(85, 9, 4),
(86, 9, 5),
(87, 9, 6),
(88, 9, 7),
(89, 9, 8),
(90, 9, 9),
(91, 9, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carrera` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `carrera`) VALUES
(1, 'Jose Luis Ortega Arana', 'Ing. Sistemas Computacionales'),
(2, 'Manuel Rojas', 'Ing. Sistemas'),
(3, 'Chuy Dominguez', 'Ing. Sistemas'),
(4, 'Felipe Cazares', 'Ing. Sistemas'),
(5, 'Luis Baldez', 'Ing. Sistemas'),
(6, 'Juan Camaney', 'Ing. Sistemas'),
(7, 'Plutacio Diaz', 'Ing. Sistemas'),
(8, 'Ricardo Salinas', 'Ing. Sistemas'),
(9, 'Rodrigo Lopez', 'Ing. Sistemas'),
(10, 'Laura Mejia', 'Ing. Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenedor`
--

CREATE TABLE IF NOT EXISTS `contenedor` (
  `id` int(10) unsigned NOT NULL,
  `nom_maestro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_aula` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_materia` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contenedor`
--

INSERT INTO `contenedor` (`id`, `nom_maestro`, `nom_aula`, `nom_materia`) VALUES
(1, 'Gerardo Clemente', 'EASS', 'ING. WEB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(10) unsigned NOT NULL,
  `id_maestro` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `aula` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `id_maestro`, `id_materia`, `aula`) VALUES
(1, 1, 1, 'EASS'),
(2, 2, 2, 'EB02'),
(3, 3, 3, 'EB03'),
(4, 4, 4, 'EB04'),
(5, 5, 5, 'EB05'),
(6, 6, 6, 'EB06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE IF NOT EXISTS `maestros` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id`, `nombre`) VALUES
(1, 'Gerardo Clemente'),
(2, 'Marcos Rodriguez'),
(3, 'Maria del Rosario Quevedo'),
(4, 'Fausto Nevarez'),
(5, 'Joaquin Quevedo'),
(6, 'Jose Luis Cazares Contreras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`) VALUES
(1, 'ING. WEB'),
(2, 'TESEBADA'),
(3, 'LENG. DE INTERFAZ'),
(4, 'REDES'),
(5, 'INTELIGENCIA ARTIFICIAL'),
(6, 'TALLER DE BD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_06_30_205822_create_maestros_table', 1),
('2015_06_30_211003_create_materias_table', 2),
('2015_06_30_211523_create_alumnos_table', 2),
('2015_06_30_212124_create_grupos_table', 3),
('2015_06_30_212801_create_alumgrupos_table', 3),
('2015_07_01_053625_create_contenedor_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alugrupos`
--
ALTER TABLE `alugrupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenedor`
--
ALTER TABLE `contenedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alugrupos`
--
ALTER TABLE `alugrupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `contenedor`
--
ALTER TABLE `contenedor`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
