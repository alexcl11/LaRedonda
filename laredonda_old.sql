-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2025 a las 12:19:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laredonda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `name`, `password`) VALUES
(1, 'aleecanovaslopez@gmail.com', 'Alejandro', '$2y$10$WEFEHsMdl6deZx0Y3WDifuAj4dyWV4.xHQkwZKSyZNtQ.gFrMrEdu'),
(2, 'alex@gmail.com', 'Alex', '$2y$10$xElanN0qikm9Yv5A3kaf0urKOoNJu6z6L/SUsaqHaWOKj2rsOnGsi'),
(3, 'val@gmail.com', 'Val', '$2y$10$suNNZWDFuKuHmdxrDo/EV.Aa1HiuOz/b6KLC0o.z9/XNm09vsDNiO'),
(10, 'jorge.canovas@gmail.com', 'Jorge', '$2y$10$UHMRHTRzMNBA1FQ/LzoSLO3sK2bMyXfzSSTkNxk.E0illaaZUO4zG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_favoritos`
--

CREATE TABLE `usuario_favoritos` (
  `id_usuario` int(11) NOT NULL,
  `id_favorito` int(11) NOT NULL,
  `nombre_favorito` varchar(255) NOT NULL,
  `tipo_favorito` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario_favoritos`
--

INSERT INTO `usuario_favoritos` (`id_usuario`, `id_favorito`, `nombre_favorito`, `tipo_favorito`) VALUES
(3, 133739, 'Barcelona', 'equipo'),
(3, 133729, 'Atletico Madrid', 'equipo'),
(1, 133729, 'Atletico Madrid', 'equipo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_favoritos`
--
ALTER TABLE `usuario_favoritos`
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario_favoritos`
--
ALTER TABLE `usuario_favoritos`
  ADD CONSTRAINT `usuario_favoritos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
