-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2023 a las 01:12:42
-- Versión del servidor: 10.11.2-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pictowrap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `color`) VALUES
(1, 'comida', '#DE1F59'),
(2, 'hogar', '#DE1FAA'),
(3, 'ropa', '#B01FDE'),
(4, 'Juegos', '#681FDE'),
(5, 'Viajes', '#1FAADE'),
(6, 'Ejemplo', '#466114'),
(7, 'estilo', '#db94d5'),
(8, 'Cursos', '#9aa60e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expenses`
--

CREATE TABLE `expenses` (
  `id` int(20) NOT NULL,
  `title` varchar(150) NOT NULL,
  `category_id` int(5) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `expenses`
--

INSERT INTO `expenses` (`id`, `title`, `category_id`, `amount`, `date`, `id_user`) VALUES
(1, 'prueba', 3, 12.40, '2020-03-21', 5),
(2, 'starbucks', 1, 60.00, '2020-03-21', 5),
(4, 'Regalo de cumpleaños mamá', 2, 1200.00, '2020-03-22', 5),
(5, 'Nintendo Switch', 4, 4600.00, '2020-03-26', 5),
(6, 'Viaje a Nueva York', 5, 20000.00, '2020-01-25', 5),
(7, 'Chocolates Ferrero', 1, 140.00, '2020-03-27', 5),
(10, 'sdsdsd', 1, 2323.00, '2020-04-03', 5),
(11, 'sadas', 1, 232.00, '2020-04-03', 5),
(12, 'sadas', 3, 11.00, '2020-04-03', 5),
(13, 'sdsd', 5, 23.00, '2020-04-03', 5),
(14, 'sdsd', 5, 23.00, '2020-04-03', 5),
(19, 'Chilis', 1, 300.00, '2020-01-01', 5),
(20, 'juego de Halo', 4, 1100.00, '2020-04-04', 5),
(21, 'Uñas', 3, 200.00, '2020-04-09', 6),
(23, 'pastillas para la tos', 2, 21.00, '2020-06-06', 5),
(24, 'Ropa nueva', 3, 300.00, '2020-06-04', 5),
(25, 'juego Nintendo', 4, 200.00, '2023-05-02', 1),
(26, 'mmm', 2, 100.00, '2023-05-03', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `name`, `author`, `date`, `path`) VALUES
(11, 'Field', 'Luis Saavedra', '2021-07-14', 'images/user/field.png'),
(12, 'Castle', 'Anonymous', '2019-03-22', 'images/user/castle.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `budget` float(10,2) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `budget`, `photo`, `name`) VALUES
(1, '1375', '$2y$10$siwQ/n8P9UxQygtEoc9o/Oxe7fixiE5U9JCpvXpqsAqqFkQFkKxJq', 'user', 1500.00, '', 'Jorge Salazar'),
(2, 'Ulises', '$2y$10$5AAAWuEMhXo27MrdNuYyDeNcyWSaUCiozwxHeMmIaupDezDcLmlIK', 'user', 0.00, '', 'Ulises 5P'),
(4, 'courtney', '$2y$10$5TkwkK0CKjks/4liSe2uVeqFx6zJAG.3bPAIAVJSn5vzhyXmpE8Di', 'user', 0.00, '', ''),
(5, 'root', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0.00, '', 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_expense` (`id_user`),
  ADD KEY `id_category_expense` (`category_id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
