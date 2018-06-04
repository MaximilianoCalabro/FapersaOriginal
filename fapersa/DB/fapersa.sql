-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2018 a las 15:23:12
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fapersa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fa_distribuidora`
--

CREATE TABLE `fa_distribuidora` (
  `iddistribuidora` int(11) NOT NULL,
  `video` varchar(250) COLLATE utf8_bin NOT NULL,
  `catalogo` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(250) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(50) COLLATE utf8_bin NOT NULL,
  `correo` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `fa_distribuidora`
--

INSERT INTO `fa_distribuidora` (`iddistribuidora`, `video`, `catalogo`, `direccion`, `telefono`, `correo`) VALUES
(1, 'Website Background Video.mp4', 'IJ00027705_1.pdf', 'Lamadrid 3065 (3000), Santa Fe, Argentina', '+54 (0342)4810810 / +54 (0342)4995936', 'fapersa@fapersaicsa.com.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fa_fabrica`
--

CREATE TABLE `fa_fabrica` (
  `idfabrica` int(11) NOT NULL,
  `imagen_fondo` varchar(50) COLLATE utf8_bin NOT NULL,
  `imagen_contacto` varchar(50) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(250) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(50) COLLATE utf8_bin NOT NULL,
  `correo` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `fa_fabrica`
--

INSERT INTO `fa_fabrica` (`idfabrica`, `imagen_fondo`, `imagen_contacto`, `direccion`, `telefono`, `correo`) VALUES
(1, 'blog_1920x600.jpg', 'wallpaper-naturaleza-1920x1200-1932-25fb33e1.jpg', 'Lamadrid 3065 (3000), Santa Fe, Argentina', '+54 (0342)4810810 / +54 (0342)4995936', 'fapersa@fapersaicsa.com.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fa_inicio`
--

CREATE TABLE `fa_inicio` (
  `idinicio` int(11) NOT NULL,
  `video` varchar(250) COLLATE utf8_bin NOT NULL,
  `imagen` varchar(50) COLLATE utf8_bin NOT NULL,
  `titulo` varchar(50) COLLATE utf8_bin NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL,
  `texto2` text COLLATE utf8_bin,
  `direccion` varchar(250) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(50) COLLATE utf8_bin NOT NULL,
  `correo` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `fa_inicio`
--

INSERT INTO `fa_inicio` (`idinicio`, `video`, `imagen`, `titulo`, `texto`, `texto2`, `direccion`, `telefono`, `correo`) VALUES
(1, 'Website Background Video.mp4', 'about_bg.jpg', 'LA EMPRESA', 'FAPERSA ICSA fue fundada el 1 de septiembre de 1963, por un grupo empresario dedicado a la comercialización de piezas de automóviles, con capitales nacionales, hace que sus principales pasos bajo licencia y la evaluación de Suko (Alemania).', 'La exportación en esos años fue de aproximadamente 5% de las ventas y participan México, EE.UU. y Colombia. La superficie ocupada fue 900m2. En los años ochenta, el aumento de las exportaciones subio un 35%, incluidos los clientes de Uruguay, Chile, Brasil y Perú.', 'Lamadrid 3065 (3000), Santa Fe, Argentina', '+54 (0342)4810810 / +54 (0342)4995936', 'fapersa@fapersaicsa.com.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fa_slider`
--

CREATE TABLE `fa_slider` (
  `idslider` int(11) NOT NULL,
  `imagen_slider` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `titulo_slider` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `texto_slider` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `fa_slider`
--

INSERT INTO `fa_slider` (`idslider`, `imagen_slider`, `titulo_slider`, `texto_slider`) VALUES
(1, '01.jpg', 'Nuestros Productos', 'Nuestro producto principal son pernos obtenidos por proceso de extrusión en frio. Rango alcanzado: 14mm hasta 55 mm diametro exterior. Otros productos: caliper de freno, ejes y otras partes extruidas. Servicios: Rectificación de acabado.'),
(4, '02.jpg', 'Sistema de Calidad', 'En FAPERSA I.C.S.A. buscamos mantener un alto nivel en la Fabricación de Pernos para Pistón y Piezas Forjadas en Frío de Revolución y Precisión.Nuestra empresa fue certificada ISO 9002 en abril de 1999 con Det Norske Veritas, y luego, siguiendo con nuestra política de mejora continua, en el año 2005, Fapersa certificó ISO TS 16949, el nivel internacional más alto en estándares de calidad para compañías automotrices en todo el mundo.'),
(5, '03.jpg', 'Capacidad Productiva', 'Hoy en día, la empresa tiene una capacidad productiva de aproximadamente 700.000 piezas mensuales, equivalentes a 120 toneladas de piezas terminadas, variando estas cantidades con la distribución del diámetro de las piezas fabricadas. Tenemos capacidad de máquinaria para obtener las tolerancias dimensionales de 0,0015 mm de diámetro exterior, 0,0005 mm en la redondez y 0,05 um de rugosidad de diámetro exterior.'),
(6, 'slider4.jpg', 'Clientes', 'Tenemos 40 años de experiencia en proveedores de partes a los mercados de equipos originales y de reemplazo, el suministro de algunos de los coches grandes y los fabricantes de pistones. En todos estos años, ha desarrollado Fapersa clientes en el mercado local e internacional. Fapersa exporta más que el 70% de la producción de pernos de pistón. Los destinos más importantes son: EE.UU., Brasil, Uruguay, Venezuela, México, Sudáfrica, así como en Europa y áfrica del Norte.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fa_distribuidora`
--
ALTER TABLE `fa_distribuidora`
  ADD PRIMARY KEY (`iddistribuidora`);

--
-- Indices de la tabla `fa_fabrica`
--
ALTER TABLE `fa_fabrica`
  ADD PRIMARY KEY (`idfabrica`);

--
-- Indices de la tabla `fa_inicio`
--
ALTER TABLE `fa_inicio`
  ADD PRIMARY KEY (`idinicio`);

--
-- Indices de la tabla `fa_slider`
--
ALTER TABLE `fa_slider`
  ADD PRIMARY KEY (`idslider`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fa_distribuidora`
--
ALTER TABLE `fa_distribuidora`
  MODIFY `iddistribuidora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fa_fabrica`
--
ALTER TABLE `fa_fabrica`
  MODIFY `idfabrica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fa_inicio`
--
ALTER TABLE `fa_inicio`
  MODIFY `idinicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fa_slider`
--
ALTER TABLE `fa_slider`
  MODIFY `idslider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
