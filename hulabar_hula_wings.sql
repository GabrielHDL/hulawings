-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-07-2021 a las 11:18:19
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hulabar_hula_wings`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bajon`
--

CREATE TABLE `bajon` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `bajon`
--

INSERT INTO `bajon` (`id`, `nombre`, `cantidad`, `descripcion`, `precio`, `img`) VALUES
(1, 'Alitas', '5 Piezas', '', 65, 'alitas.png'),
(2, 'Alitas', '10 Piezas', '', 120, 'alitas.png'),
(3, 'Alitas', '20 Piezas', '', 200, 'alitas.png'),
(5, 'Papas', 'Orden', '', 40, 'papas.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `drinks`
--

CREATE TABLE `drinks` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `desc_corta` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `drinks`
--

INSERT INTO `drinks` (`id`, `nombre`, `descripcion`, `desc_corta`, `img`) VALUES
(1, 'Mojito', 'El preferido por los piratas para evitar el escorbuto llega a ti con la mezcla perfecta de limon, azucar y la frescura de la hierbabuena, sabemos que necesitas uno aunque no seas un \"Pirata\" Arrgh!', 'El cubano favorito.', 'mojito.png'),
(2, 'Piña Colada', 'La historia más fiable sobre el cóctel cuenta que su padre fue Ramón Marrero, barman del hotel Caribe Hilton de Puerto Rico en el año 1954. En medio del boom de los combinados tropicales del tipo Mai Tai, procedentes de la cultura polinesia, los caribeños empezaron a crear mezclas por aquella época revolucionarias. Preparados como la Piña Colada, junto a la batidora, supusieron la mayor revolución', 'Puro sabor caribeño.', 'pngegg.png'),
(3, 'Michelada', 'Una popular versión de su origen apunta a la ciudad de San Luis Potosí, concretamente al Club Deportivo Potosino, pues se cuenta que un socio de nombre Michel Ésper (originario de Ciudad Valles) acostumbraba pedir una cerveza con limón, hielo, sal y popote en una copa llamada chabela como si fuera una limonada de cerveza, eventualmente originando el nombre de la bebida (En aquel entonces nadie tom', 'La clásica atrevida.', 'miche.png'),
(4, 'Electric Blue', 'La deliciosa combinación mortal entre vodka, limon y licor curacao, perfecta para disfrutar en un día calido, o dejar de sentir frio, you know what I mean 😉', 'Limonada exótica.', 'electric.png'),
(5, 'Cosa', 'Una variante de Electric Blue con un delicioso toque de fresa.', 'Creación de la casa.', 'cosa.png'),
(6, 'Rojo', 'Deliciosa bebida de frutos rojos.', 'Clásicos.', 'rojo.png'),
(7, 'Azul', 'Exhuberante combinación de vodka y curacao.', 'Clásicos.', 'azul.png'),
(9, 'Daikirí', 'Un frappe con efectos secundarios.', 'Alcoholicamente helado.', 'daikiri.png'),
(10, 'Berrita', 'La galardonada Margarita con Cerveza disponible para todos los gustos.', 'Beerita pero HULA 😎.', 'berrita.png'),
(11, 'Pantera Rosa', 'Exquisita versión de la piña colada, llamada así por su caracteristico color.', 'Prima de la piña.', 'pantera.png'),
(12, 'Dios', 'Combinación religiosa entre vodka y ron con sabores de moras, descubre porque se llama dios.', '¿Porque se llama así?', 'dios.png'),
(13, 'Paloma', 'Una bebida tipica mexicana, claro que ya la conoces 😉.', 'Ya la conoces 😉.', 'paloma.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bajon`
--
ALTER TABLE `bajon`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bajon`
--
ALTER TABLE `bajon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
