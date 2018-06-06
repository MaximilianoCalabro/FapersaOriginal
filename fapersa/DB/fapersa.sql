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
-- Estructura de tabla para la tabla `admin_access`
--

CREATE TABLE `admin_access` (
  `id` int(6) NOT NULL,
  `admin_id` int(6) NOT NULL DEFAULT '0',
  `add_date` int(14) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `admin_access`
--

INSERT INTO `admin_access` (`id`, `admin_id`, `add_date`) VALUES
(1, 1, 1249999967);4

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(5) NOT NULL,
  `add_date` int(14) NOT NULL DEFAULT '0',
  `admin_id` int(6) NOT NULL DEFAULT '0',
  `complete_name` varchar(60) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `username` varchar(15) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `god` int(1) NOT NULL DEFAULT '0',
  `deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `admin_users`
--

INSERT INTO `admin_users` (`id`, `add_date`, `admin_id`, `complete_name`, `username`, `password`, `god`, `deleted`) VALUES
(1, 0, 0, 'Administrador', 'admin', '36d5d8ebbbbe29210fbbfe3e0d63d1d9', 1, 0);

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `contents_main`
--

CREATE TABLE `contents_main` (
  `id` int(6) NOT NULL,
  `name` varchar(100) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `tags` varchar(120) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `internal_link` varchar(255) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `description` text COLLATE latin1_spanish_ci NOT NULL,
  `href` varchar(100) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `position` int(6) NOT NULL DEFAULT '0',
  `lang_id` int(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `contents_main`
--

INSERT INTO `contents_main` (`id`, `name`, `tags`, `internal_link`, `description`, `href`, `position`, `lang_id`) VALUES
(1, 'Nuestra Empresa', 'fapersa, partes de motor, repuestos, AMC, AJUSA, KING, NB, tarabusi, subconjuntos, conjuntos, importadora, juntas', '', '<p><o:p>&nbsp;</o:p></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><strong>FAPERSA DISTRIBUIDORA, es una empresa del grupo FAPERSA ICSA, que naci&oacute; a principios de la d&eacute;cada del 90 con un claro desaf&iacute;o, ser <st1:personname w:st=\"on\" productid=\"la Importadora\">la Importadora</st1:personname> y Distribuidora de autopartes para motor mas completa del pa&iacute;s, cubriendo el mercado de veh&iacute;culos livianos, utilitarios y pesados, teniendo como principales aliados a productos de primeras marcas a nivel mundial.</strong><o:p></o:p></p>\r\n<p><strong>Esta actividad se inicio con la distribuci&oacute;n exclusiva de marcas como MAHLE, AJUSA, AMC, TARABUSI, COJINETES KING y NB entre otras. Paralelamente continuamos incorporando productos de origen importado, los cuales nos permiten&nbsp; ampliar nuestra carpeta de productos.</strong><o:p></o:p></p>\r\n<p><strong>En la actualidad FAPERSA DISTRIBUIDORA est&aacute; ubicada en Lamadrid 3065&nbsp;Santa Fe. Desde ah&iacute; atendemos a todos nuestros clientes, brindando un servicio de entrega con alcance nacional en un plazo de 24 o 48 horas dependiendo el punto de destino.</strong><o:p></o:p></p>\r\n<p><strong>Nuestro horario de atenci&oacute;n es de lunes a viernes de 8:00 a 18:00 hs.</strong></p>\r\n<p><strong>Para cualquier consulta que desee realizar  puede comunicarse al </strong><strong> (342) 481-0810, </strong>v<strong>entas (342) 483-9393, por mail a pedidos@fapersa.com o a trav&eacute;s de esta p&aacute;gina WEB.</strong><o:p></o:p></p>\r\n<p>&nbsp;<o:p></o:p></p>\r\n<p>&nbsp;<o:p></o:p></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'nuestra_empresa', 1, 1),
(2, 'Nuestros productos', 'productos, pernos, tapas de cilindro, juntas', '', '<p><strong>FAPERSA DISTRIBUIDORA, comercializa la mayor&iacute;a de sus productos  en forma exclusiva, en la actualidad la  carpeta de productos esta formada por partes internas de motor de aplicaci&oacute;n en veh&iacute;culos livianos, utilitarios y pesados.</strong></p>\r\n<p><strong>A trav&eacute;s de esta p&aacute;gina o comunicandose por correo electr&oacute;nico a </strong><strong><u><span style=\"color: rgb(0, 0, 255);\"><a href=\"javascript:location.href=&#039;mailto:&#039;+String.fromCharCode(112,101,100,105,100,111,115,64,102,97,112,101,114,115,97,46,99,111,109,46,97,114)+&#039;?subject=Contacto%20Web&#039;\">pedidos@fapersa.com</a></span></u><span style=\"color: rgb(0, 0, 255);\">&nbsp;</span></strong><strong>o por tel&eacute;fono al 0342-483-9393 ustede podr&aacute; adquirir cualquiera de nuestros productos, los cuales se detallan a continuaci&oacute;n:</strong></p>\r\n<ul>\r\n    <li><strong>Arboles de levas Susin Francescutti</strong></li>\r\n    <li><strong>Botadores STH</strong></li>\r\n    <li><strong>Bulones para tapa de cilindros ELRING</strong></li>\r\n    <li><strong>Cigue&ntilde;ales Susin Francescutti</strong></li>\r\n    <li><strong>Cigue&ntilde;ales STH</strong></li>\r\n    <li><strong>Cojinetes KING</strong></li>\r\n    <li><strong>Cojinetes KS</strong></li>\r\n    <li><strong>Conjuntos y Subconjuntos KS</strong></li>\r\n    <li><strong>Juntas y Juegos de junta ELRING</strong></li>\r\n    <li><strong>Tapa de Cilindros STH</strong></li>\r\n    <li><strong>Pernos FAPERSA</strong></li>\r\n</ul>\r\n<p><strong>FAPERSA, departamento comercial</strong></p>', 'nuestros_productos', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctlg_clients_bancarias`
--

CREATE TABLE `ctlg_clients_bancarias` (
  `add_date` int(14) NOT NULL DEFAULT '0',
  `client_id` int(7) NOT NULL DEFAULT '0',
  `banco` varchar(50) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `sucursal` varchar(120) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `cuenta` varchar(120) COLLATE latin1_spanish_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ctlg_clients_bancarias`
--

INSERT INTO `ctlg_clients_bancarias` (`add_date`, `client_id`, `banco`, `sucursal`, `cuenta`) VALUES
(1470793125, 103, 'bica', '5', '354365716'),
(1470793125, 103, 'macro', '291', '789456321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctlg_clients_comerciales`
--

CREATE TABLE `ctlg_clients_comerciales` (
  `add_date` int(14) NOT NULL DEFAULT '0',
  `client_id` int(7) NOT NULL DEFAULT '0',
  `name` varchar(50) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `direccion` varchar(120) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `telefono` varchar(50) COLLATE latin1_spanish_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ctlg_clients_comerciales`
--

INSERT INTO `ctlg_clients_comerciales` (`add_date`, `client_id`, `name`, `direccion`, `telefono`) VALUES
(1470793125, 103, 'monica', 'calle publica', '428558');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctlg_clients_contacts`
--

CREATE TABLE `ctlg_clients_contacts` (
  `add_date` int(14) NOT NULL DEFAULT '0',
  `client_id` int(7) NOT NULL DEFAULT '0',
  `contact_type` tinyint(1) NOT NULL DEFAULT '0',
  `contact_name` varchar(50) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `contact_email` varchar(120) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `notify` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ctlg_clients_contacts`
--

INSERT INTO `ctlg_clients_contacts` (`add_date`, `client_id`, `contact_type`, `contact_name`, `contact_email`, `notify`) VALUES
(1512998336, 103, 2, 'Fapersa ICSA', 'fapersa@fapersa.com.ar', 1),
(1516975560, 600016, 3, 'Cristian Coitinho', 'ccoitin@arcore.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctlg_clients_contacts_new`
--

CREATE TABLE `ctlg_clients_contacts_new` (
  `add_date` int(14) NOT NULL DEFAULT '0',
  `client_id` int(7) NOT NULL DEFAULT '0',
  `contact_type` tinyint(1) NOT NULL DEFAULT '0',
  `contact_name` varchar(50) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `contact_email` varchar(120) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `contact_celular` varchar(120) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `notify` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ctlg_clients_contacts_new`
--

INSERT INTO `ctlg_clients_contacts_new` (`add_date`, `client_id`, `contact_type`, `contact_name`, `contact_email`, `contact_celular`, `notify`) VALUES
(1470793125, 103, 2, 'mengano', 'mengano@noka.com.ar', '15312145', 0),
(1470793125, 103, 1, 'fulano', 'fulano@noka.com.ar', '156214521', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctlg_clients_discounts`
--

CREATE TABLE `ctlg_clients_discounts` (
  `id` int(8) NOT NULL,
  `client_id` int(7) NOT NULL DEFAULT '0',
  `brand_code_id` smallint(3) NOT NULL DEFAULT '0',
  `discount_1` smallint(3) NOT NULL DEFAULT '0',
  `discount_2` smallint(3) NOT NULL DEFAULT '0',
  `discount_3` smallint(3) NOT NULL DEFAULT '0',
  `discount_4` smallint(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ctlg_clients_discounts`
--

INSERT INTO `ctlg_clients_discounts` (`id`, `client_id`, `brand_code_id`, `discount_1`, `discount_2`, `discount_3`, `discount_4`) VALUES
(1, 0, 22, 10, 0, 0, 0),
(2, 0, 8, 10, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctlg_clients_history`
--

CREATE TABLE `ctlg_clients_history` (
  `id` int(6) NOT NULL,
  `client_id` int(7) NOT NULL DEFAULT '0',
  `add_date` int(14) NOT NULL DEFAULT '0',
  `rid` tinyint(1) NOT NULL DEFAULT '0',
  `receipt_number` int(9) NOT NULL DEFAULT '0',
  `mid` int(3) NOT NULL DEFAULT '0',
  `iid` tinyint(1) NOT NULL DEFAULT '0',
  `imputation_number` int(9) NOT NULL DEFAULT '0',
  `pc_id` tinyint(2) NOT NULL DEFAULT '0',
  `debit` double(9,2) NOT NULL DEFAULT '0.00',
  `credit` double(9,2) NOT NULL DEFAULT '0.00',
  `total` double(9,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ctlg_clients_history`
--

INSERT INTO `ctlg_clients_history` (`id`, `client_id`, `add_date`, `rid`, `receipt_number`, `mid`, `iid`, `imputation_number`, `pc_id`, `debit`, `credit`, `total`) VALUES
(1, 90004, 1359342000, 3, 61470, 0, 3, 61470, 0, 0.00, 5429.60, -5429.60),
(2, 90004, 1372561200, 3, 62576, 0, 3, 62576, 0, 0.00, -5429.60, 5429.60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctlg_clients_history_old`
--

CREATE TABLE `ctlg_clients_history_old` (
  `id` int(6) NOT NULL,
  `client_id` int(7) NOT NULL DEFAULT '0',
  `add_date` int(14) NOT NULL DEFAULT '0',
  `rid` tinyint(1) NOT NULL DEFAULT '0',
  `receipt_number` int(9) NOT NULL DEFAULT '0',
  `mid` int(3) NOT NULL DEFAULT '0',
  `exp_date` int(14) NOT NULL DEFAULT '0',
  `debit` double(9,2) NOT NULL DEFAULT '0.00',
  `credit` double(9,2) NOT NULL DEFAULT '0.00',
  `total` double(9,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ctlg_clients_history_old`
--

INSERT INTO `ctlg_clients_history_old` (`id`, `client_id`, `add_date`, `rid`, `receipt_number`, `mid`, `exp_date`, `debit`, `credit`, `total`) VALUES
(1, 90000, 1231466400, 3, 55048, 2, 0, 0.00, 153203.29, 2836268.78),
(2, 90000, 1231812000, 2, 1305, 9, 0, 1819.20, 0.00, 2838087.98);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctlg_clients_history_totals`
--

CREATE TABLE `ctlg_clients_history_totals` (
  `client_id` int(7) NOT NULL DEFAULT '0',
  `balance` double(9,2) NOT NULL DEFAULT '0.00',
  `checks` double(9,2) NOT NULL DEFAULT '0.00',
  `total` double(9,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ctlg_clients_history_totals`
--

INSERT INTO `ctlg_clients_history_totals` (`client_id`, `balance`, `checks`, `total`) VALUES
(600016, 396058.10, 9999999.99, 9999999.99),
(600026, -9900.70, 767195.77, 757295.07);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctlg_clients_info`
--

CREATE TABLE `ctlg_clients_info` (
  `client_id` int(7) NOT NULL DEFAULT '0',
  `add_date` int(14) NOT NULL DEFAULT '0',
  `address` varchar(40) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `zip` varchar(10) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `city` varchar(25) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `phone` varchar(20) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `fax` varchar(20) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE latin1_spanish_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ctlg_clients_info`
--

INSERT INTO `ctlg_clients_info` (`client_id`, `add_date`, `address`, `zip`, `city`, `phone`, `fax`, `email`) VALUES
(103, 1250018357, 'Lamadrid 3065', '3000', 'Santa Fe', '0342 4810810', '4995932', 'fapersa@fapersa.com.ar'),
(600016, 1250687037, 'LAMADRID 3085', '3000', 'SANTA FE', '4503300', '', 'arcore@arcore.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctlg_clients_info_new`
--

CREATE TABLE `ctlg_clients_info_new` (
  `client_id` int(7) NOT NULL DEFAULT '0',
  `add_date` int(14) NOT NULL DEFAULT '0',
  `address` varchar(40) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `zip` varchar(10) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `city` varchar(25) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `phone` varchar(20) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `fax` varchar(20) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE latin1_spanish_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ctlg_clients_info_new`
--

INSERT INTO `ctlg_clients_info_new` (`client_id`, `add_date`, `address`, `zip`, `city`, `phone`, `fax`, `email`) VALUES
(103, 1470227645, 'LAMADRID', '3000', 'SANTA FE', '', '4995932fax-tool', 'martin@nkstudios.net'),
(103, 1470321033, 'LAMADRID', '3000', 'SANTA FE', '', '4995932fax-tool', 'martin@nkstudios.net');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctlg_clients_log`
--

CREATE TABLE `ctlg_clients_log` (
  `id` int(14) NOT NULL,
  `start_date` int(14) NOT NULL DEFAULT '0',
  `client_id` int(7) NOT NULL DEFAULT '0',
  `add_date` int(14) NOT NULL DEFAULT '0',
  `comments` text COLLATE latin1_spanish_ci NOT NULL,
  `href` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ctlg_clients_log`
--

INSERT INTO `ctlg_clients_log` (`id`, `start_date`, `client_id`, `add_date`, `comments`, `href`) VALUES
(1, 1250018269, 103, 1250018357, 'Modificación de perfil', '/clientes/perfil.html?'),
(2, 1250018269, 103, 1250018496, 'Incorporaciones', '/clientes/incorporaciones.html?');



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
