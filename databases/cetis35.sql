-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2023 a las 07:58:05
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cetis35`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ci` varchar(20) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(12) NOT NULL,
  `rol` enum('usuario','administrador','tecnico') NOT NULL,
  `auth` varchar(255) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `auth`
--

INSERT INTO `auth` (`id`, `nombre`, `ci`, `user`, `email`, `password`, `rol`, `auth`, `id_cargo`) VALUES
(1, 'Marcos Guntiñas', '30663415', 'marcosjw100', 'marcosjw@gmail.com', '1234567', 'usuario', 'email', 1),
(2, 'admin', '123456789', 'admin', 'admin@gmail.com', '92dc6269', 'administrador', 'username', 1),
(3, 'Manuel Perez', '26352131', 'mPerez', 'manuelperez@gmail.com', '12345678', 'administrador', '12345678', 3),
(4, 'Admin 2', '9999999', 'admin2', 'admin@example.com', '22953055', 'administrador', 'username', 1),
(5, 'Javier Gomez', '28451213', 'jgomez1514', 'javiergomez@gmail.com', '$2y$10$5fxq/', 'administrador', 'username', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id` int(11) NOT NULL,
  `n_control` int(40) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `parcial1` int(8) NOT NULL,
  `parcial2` int(8) NOT NULL,
  `parcial3` int(8) NOT NULL,
  `promedio` float(8,0) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `carrera` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  `semestre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id`, `n_control`, `nombre`, `parcial1`, `parcial2`, `parcial3`, `promedio`, `estado`, `carrera`, `materia`, `grupo`, `semestre`) VALUES
(1, 2147483647, 'Avendano Hernandez Claudia Michelle', 0, 0, 0, 0, '', '', '', '', ''),
(2, 2147483647, 'Azpeitia Casarez Jesus', 0, 0, 0, 0, '', '', '', '', ''),
(3, 2147483647, 'Bravo Llanos Miguel Angel', 0, 0, 0, 0, '', '', '', '', ''),
(4, 2147483647, 'Callejas Ruiz Leticia Belen', 0, 0, 0, 0, '', '', '', '', ''),
(5, 2147483647, 'Camilo Aguilar Oswaldo', 0, 0, 0, 0, '', '', '', '', ''),
(6, 2147483647, 'Ceballos Bolanos Bayron ', 0, 0, 0, 0, '', '', '', '', ''),
(7, 2147483647, 'Dorantes Vega Frida', 0, 0, 0, 0, '', '', '', '', ''),
(8, 2147483647, 'Flores Loredo Carlos Alberto', 0, 0, 0, 0, '', '', '', '', ''),
(9, 2147483647, 'Galvan Rocha Felix Uriel', 0, 0, 0, 0, '', '', '', '', ''),
(10, 2147483647, 'Garcia Calzada Paola Elizabeth', 0, 0, 0, 0, '', '', '', '', ''),
(11, 2147483647, 'Hernandez Dominguez Diego Eduardo', 0, 0, 0, 0, '', '', '', '', ''),
(12, 2147483647, 'Hernandez Torres Wendy Michelle', 0, 0, 0, 0, '', '', '', '', ''),
(13, 2147483647, 'Izurieta Silva Alison Alexa', 0, 0, 0, 0, '', '', '', '', ''),
(14, 2147483647, 'Juarez Valtierra Erick Mizael', 0, 0, 0, 0, '', '', '', '', ''),
(15, 2147483647, 'Lara Tenorio Jessica Astrid', 0, 0, 0, 0, '', '', '', '', ''),
(16, 2147483647, 'Macias Guzman Margarita', 0, 0, 0, 0, '', '', '', '', ''),
(17, 2147483647, 'Martinez Jimenez Alberto Isaac', 0, 0, 0, 0, '', '', '', '', ''),
(18, 2147483647, 'Melendez Garcia Paulina', 0, 0, 0, 0, '', '', '', '', ''),
(19, 2147483647, 'Nicio Ulises Nicolas', 0, 0, 0, 0, '', '', '', '', ''),
(20, 2147483647, 'Nuncio Delgado Polo Sebastian', 0, 0, 0, 0, '', '', '', '', ''),
(21, 2147483647, 'Olguin Monroy Diego', 0, 0, 0, 0, '', '', '', '', ''),
(22, 2147483647, 'Olivares Vidal Evelyn', 0, 0, 0, 0, '', '', '', '', ''),
(23, 2147483647, 'Ordonez Sierra Gabriel', 0, 0, 0, 0, '', '', '', '', ''),
(24, 2147483647, 'Ortega Osorio Mario Antonio', 0, 0, 0, 0, '', '', '', '', ''),
(25, 2147483647, 'Pacheco Rodriguez Ivan Joshua', 0, 0, 0, 0, '', '', '', '', ''),
(26, 2147483647, 'Pedraza Lara Fatima', 0, 0, 0, 0, '', '', '', '', ''),
(27, 2147483647, 'Porras Fuentes Gabriel De Martin', 0, 0, 0, 0, '', '', '', '', ''),
(28, 2147483647, 'Ramirez Arellano Emilio', 0, 0, 0, 0, '', '', '', '', ''),
(29, 2147483647, 'Reyes Fernanda', 0, 0, 0, 0, '', '', '', '', ''),
(30, 2147483647, 'Rocha Rodriguez Carlo Jair', 0, 0, 0, 0, '', '', '', '', ''),
(31, 2147483647, 'Rodriguez Reyes Roberto', 0, 0, 0, 0, '', '', '', '', ''),
(32, 2147483647, 'Rojas Calles Claudio', 0, 0, 0, 0, '', '', '', '', ''),
(33, 2147483647, 'Ruiz Ferrer Luis Alberto', 0, 0, 0, 0, '', '', '', '', ''),
(34, 2147483647, 'Ruiz Galindo Frida', 0, 0, 0, 0, '', '', '', '', ''),
(35, 2147483647, 'Sanchez Mayoral Yoselin', 0, 0, 0, 0, '', '', '', '', ''),
(36, 2147483647, 'Sanchez Palacios Jafet', 0, 0, 0, 0, '', '', '', '', ''),
(37, 2147483647, 'Sebastian Olmos Noemi Alexia', 0, 0, 0, 0, '', '', '', '', ''),
(38, 2147483647, 'Trejo Vasquez Dulce Regina', 0, 0, 0, 0, '', '', '', '', ''),
(39, 2147483647, 'Villegas Hernandez Kassandra ', 0, 0, 0, 0, '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
