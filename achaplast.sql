-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-08-2018 a las 09:31:34
-- Versión del servidor: 10.1.31-MariaDB-cll-lve
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `osolelar_achaplast`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidades`
--

CREATE TABLE `calidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `ruta` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `calidades`
--

INSERT INTO `calidades` (`id`, `titulo`, `descripcion`, `imagen`, `ruta`, `orden`, `created_at`, `updated_at`) VALUES
(1, '<p><em>Asumiento un compromiso<br />\r\nde excelencia en la calidad<br />\r\nde nuestros productos</em></p>', '<p>Diatex es una empresa que desde sus inicios se ha dedicado a brindar a sus clientes productos de calidad y otorgarles todo el apoyo t&eacute;cnico que estos requieran. Hemos tomado un compromiso de calidad y eficiencia que quedan demostrados en cada uno de nuestros pasos.<br />\r\n<br />\r\nDiatex cuenta con una extensa variedad de productos para distintos tipos de industria. Entre los mismos podemos dividirlos y enumerarlos en dos: La rama textil y otra dedicada a la fabricaci&oacute;n de adhesivos industriales de diferentes caracter&iacute;sticas.</p>', 'imagen1.png', 'ruta', 'AA', NULL, '2018-06-13 08:04:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci,
  `ruta` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `titulo`, `imagen`, `ruta`, `orden`, `created_at`, `updated_at`) VALUES
(2, 'Platos', 'achaplast_categorias__platotranp_chico.jpg', NULL, 'BB', '2018-08-15 22:13:23', '2018-08-15 22:13:23'),
(3, 'Bandejas', 'achaplast_categorias__bandeja2_azul.jpg', NULL, 'CC', '2018-08-15 22:14:01', '2018-08-15 22:56:29'),
(4, 'Cubiertos', 'achaplast_categorias__cucharahelado.png', NULL, 'DD', '2018-08-15 22:14:20', '2018-08-15 22:14:20'),
(7, 'Vasos y Copas', 'achaplast_categorias__no-image.jpg', NULL, 'AA', '2018-08-17 20:33:15', '2018-08-17 20:33:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `titulo`, `texto`, `created_at`, `updated_at`) VALUES
(1, '<p>Excelencia y Calidad en Vajilla Descartable</p>', '<p style=\"text-align:center\">Achaplast S.A. tiene adem&aacute;s una nueva direcci&oacute;n y un equipo de alta resoluci&oacute;n compenetrados con los requerimientos de los clientes y las necesidades del mercado, utilizando materias primas de empresas de primer nivel para obtener la mas pura calidad en los productos terminados, formando esto tambi&eacute;n parte de un alto nivel de responsabilidad para el servicio al cliente.</p>', NULL, '2018-08-14 22:10:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

CREATE TABLE `correos` (
  `id` int(11) NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci,
  `texto` text COLLATE utf8_spanish_ci,
  `orden` text COLLATE utf8_spanish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `correos`
--

INSERT INTO `correos` (`id`, `titulo`, `texto`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'GENERAL', 'diatex@diatexsrl.com.ar', 'AA', '2018-06-13 04:59:19', '2018-06-13 15:01:15'),
(3, 'VENTAS', 'ventas@diatexsrl.com.ar', 'BB', '2018-06-13 15:01:32', '2018-06-13 15:01:32'),
(4, 'PEDIDOS', 'pedidos@diatexsrl.com.ar', 'CC', '2018-06-13 15:01:41', '2018-06-13 15:01:41'),
(5, 'Walter Campodonico', 'wcampodonico@diatexsrl.com.ar', 'DD', '2018-06-13 15:01:50', '2018-06-13 15:01:50'),
(6, 'Esteban Campodonico', 'ecampodonico@diatexsrl.com.ar', 'EE', '2018-06-13 15:02:01', '2018-06-13 15:02:01'),
(7, 'Martín Campodonico', 'mcampodonico@diatexsrl.com.ar', 'FF', '2018-06-13 15:02:14', '2018-06-13 15:02:14'),
(8, 'Jorge Gómez', 'jgomez@diatexsrl.com.ar', 'GG', '2018-06-13 15:02:32', '2018-06-13 15:02:32'),
(9, 'Cristian Mateyka', 'cmateyka@diatexsrl.com.ar', 'HH', '2018-06-13 15:02:42', '2018-06-13 15:02:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `nombre`, `email`, `contrasena`, `created_at`, `updated_at`) VALUES
(1, 'PABLO OSOLE', 'pablo@osole.es', 'pablo', '2018-06-03 09:50:41', '2018-06-03 09:50:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `tipo`, `texto`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'direccion', 'Tres Arroyos 329, B1706FWC Haedo, Buenos Aires', 'aa', NULL, '2018-08-14 16:34:22'),
(2, 'telefono', '+54 11 4627 3506', 'bb', NULL, '2018-08-14 17:48:56'),
(3, 'correo', 'info@achaplast.com.ar', 'cc', NULL, '2018-08-14 22:17:57'),
(4, 'fax', '+54 11 4627 3506', 'dd', NULL, '2018-08-14 22:19:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE `descargas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `subtitulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `descargas`
--

INSERT INTO `descargas` (`id`, `titulo`, `subtitulo`, `texto`, `imagen`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'ISO 9001:2015', 'Ver Certificación', '', 'descargas__diatex-empresa-certificada-2017.pdf', 'aa', NULL, '2018-06-19 18:48:25'),
(2, 'Política de Calidad', 'Ver Certificación', '', 'descargas__diatex-empresa-certificada-2017.pdf', 'bbb', NULL, '2018-06-19 18:48:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE `destacados` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `ruta` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id`, `titulo`, `texto`, `imagen`, `ruta`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'Empresa', '<p>Acha Plast S.A. tiene adem&aacute;s una nueva direcci&oacute;n y un equipo de alta resoluci&oacute;n compenetrados con los requerimientos de los clientes y las necesidades del mercado, utilizando materias primas de empresas de primer nivel para obtener la mas pura calidad en los productos terminados, formando esto tambi&eacute;n parte de un alto nivel de responsabilidad para el servicio al cliente.&nbsp;</p>', 'destacados__dest-003.jpg', 'empresa', 'AA', NULL, '2018-08-17 17:40:08'),
(2, 'Productos', '<p>Contamos con un amplio cat&aacute;logo de productos de la mejor calidad y a precios competentes. Para m&aacute;s informaci&oacute;n, no dude en enviarnos un mensaje.</p>', 'destacados__slider-achaplas-001z.jpg', 'achaplasts', 'BB', NULL, '2018-08-17 17:40:11'),
(3, 'Matricería', '<p>Hoy en dia esta concentrada transitoriamente en la producci&oacute;n de cucharas sundae, cucharitas para helados y copas sundae, contando para la producci&oacute;n de las mismas con potentes y muy veloces maquinas inyectoras b.m.b. de 270 y 350 toneladas respectivamente de ultima generaci&oacute;n.</p>', 'destacados__dest-004.jpg', 'matriceria', 'CC', NULL, '2018-08-17 17:40:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `titulo2` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `texto2` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen2` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `titulo`, `titulo2`, `texto`, `texto2`, `imagen`, `imagen2`, `created_at`, `updated_at`) VALUES
(1, '<p>Acha Plast S.A.</p>', '', '<p>Acha Plast S.A. tiene adem&aacute;s una nueva direcci&oacute;n y un equipo de alta resoluci&oacute;n compenetrados con los requerimientos de los clientes y las necesidades del mercado, utilizando materias primas de empresas de primer nivel para obtener la mas pura calidad en los productos terminados, formando esto tambi&eacute;n parte de un alto nivel de responsabilidad para el servicio al cliente.&nbsp;<br />\r\n<br />\r\nHoy en dia esta concentrada transitoriamente en la producci&oacute;n de cucharas sundae, cucharitas para helados y copas sundae, contando para la producci&oacute;n de las mismas con potentes y muy veloces maquinas inyectoras b.m.b. de 270 y 350 toneladas respectivamente de ultima generaci&oacute;n.</p>', '', 'empresa__img-empresa.jpg', 'empresa__img-contenido.jpg', NULL, '2018-08-14 22:13:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id` int(11) NOT NULL,
  `imagen` text,
  `ruta` text,
  `orden` text,
  `id_producto` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE `listas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `pdf` text COLLATE utf8_unicode_ci NOT NULL,
  `orden` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `listas`
--

INSERT INTO `listas` (`id`, `titulo`, `pdf`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'Titulo', 'PDF', 'ord', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci,
  `tipo` text COLLATE utf8_unicode_ci,
  `orden` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `nombre`, `imagen`, `tipo`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'header', 'logos__logo.png', 'header', 'AA', NULL, '2018-08-14 16:50:08'),
(2, 'footer', 'logos__logo-footer.png', 'footer', 'BB', NULL, '2018-08-16 14:29:25'),
(4, 'favicon', 'logos__favicon.png', 'favicon', 'DD', NULL, '2018-08-17 21:02:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadatos`
--

CREATE TABLE `metadatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `keyword` text COLLATE utf8_unicode_ci,
  `seccion` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `orden` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `metadatos`
--

INSERT INTO `metadatos` (`id`, `keyword`, `seccion`, `description`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'home', 'home', 'home', 'AA', NULL, '2018-06-21 17:40:22'),
(2, 'empresa', 'empresa', 'empresa', 'BB', NULL, NULL),
(3, 'categorias', 'categorias', 'categorias', 'CC', NULL, NULL),
(4, 'productos', 'productos', 'productos', 'DD', NULL, NULL),
(5, 'matriceria', 'matriceria', 'matriceria', 'EE', NULL, NULL),
(6, 'contacto', 'contacto', 'contacto', 'FF', NULL, NULL),
(7, 'buscador', 'buscador', 'buscador', 'GG', NULL, '2018-06-12 21:25:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_29_213140_create_redes_table', 1),
(4, '2018_04_29_213158_create_metadatos_table', 1),
(5, '2018_04_29_213216_create_sliders_table', 1),
(6, '2018_04_29_213239_create_destacados_table', 1),
(7, '2018_04_29_213253_create_datos_table', 1),
(8, '2018_04_29_213310_create_logos_table', 1),
(9, '2018_04_29_213326_create_empresas_table', 1),
(10, '2018_04_29_213344_create_equipamientos_table', 1),
(11, '2018_04_29_213400_create_servicios_table', 1),
(12, '2018_04_29_213418_create_clientes_table', 1),
(13, '2018_04_29_213549_create_descargas_table', 1),
(14, '2018_04_29_213638_create_home_clientes_table', 1),
(15, '2018_05_10_185158_create_productos_table', 1),
(18, '2018_05_17_145758_create_contenidos_table', 1),
(19, '2018_05_17_145826_create_categorias_table', 1),
(20, '2018_05_17_151858_create_listas_table', 1),
(22, '2018_05_10_185258_create_cuentas_table', 3),
(27, '2018_05_10_185258_create_productos_table', 4),
(28, '2018_05_10_185258_create_galerias_table', 5),
(29, '2018_05_10_185258_create_novedades_table', 5),
(30, '2018_05_10_185258_create_calidades_table', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `breve` text COLLATE utf8_unicode_ci,
  `resena` text COLLATE utf8_unicode_ci,
  `texto1` text COLLATE utf8_unicode_ci,
  `texto2` text COLLATE utf8_unicode_ci,
  `pdf` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci,
  `imagen1` text COLLATE utf8_unicode_ci,
  `imagen2` text COLLATE utf8_unicode_ci,
  `id_categoria` int(11) DEFAULT NULL,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `titulo`, `breve`, `resena`, `texto1`, `texto2`, `pdf`, `imagen`, `imagen1`, `imagen2`, `id_categoria`, `orden`, `created_at`, `updated_at`) VALUES
(5, 'Cucharita Helado', 'Colores Surtidos | Bolsón por 10k', NULL, '<p>Colores Surtidos | Bols&oacute;n por 10k</p>\r\n\r\n<p>555555555</p>', NULL, NULL, '1_cucharitas helado.jpg', NULL, NULL, 4, 'AA', '2018-08-15 22:19:40', '2018-08-21 18:10:20'),
(6, 'Cuchara Sundae', 'Colores Surtidos | Caja por 1000u.', NULL, '<p>Colores Surtidos | Caja por 1000u.</p>\r\n\r\n<p>Banco</p>', NULL, NULL, '6_cucharas2.jpg', '6_cucharas1.jpg', NULL, 4, 'BB', '2018-08-15 22:20:09', '2018-08-21 17:12:10'),
(7, 'Cubiertos Descartables', 'Cuchillo | Tenedor | Cuchara Sopera', NULL, '<p>Cuchillo</p>\r\n\r\n<p>Caja x 1000u.</p>\r\n\r\n<p>Tenedor</p>\r\n\r\n<p>Caja x 1000u.</p>\r\n\r\n<p>Cuchara Sopera</p>\r\n\r\n<p>Caja x 1000u.</p>', NULL, NULL, '7_cubiertos-descartables.jpg', NULL, NULL, 4, 'DD', '2018-08-15 22:30:34', '2018-08-15 22:30:34'),
(8, 'Bandeja Individual', 'Merienda | Desayuno', NULL, '<p>Merienda</p>\r\n\r\n<p>Desayuno</p>\r\n\r\n<p>27x33cm</p>\r\n\r\n<p>Caja por 50 unid.</p>', NULL, NULL, '8_bandeja1_azul.jpg', '8_bandeja1_negra.jpg', '8_bandeja1_roja.jpg', 3, 'AA', '2018-08-15 22:37:10', '2018-08-17 18:39:55'),
(9, 'Bandeja Burger', 'Fast Food', NULL, '<p>Fast Food</p>\r\n\r\n<p>30x40cm</p>\r\n\r\n<p>Caja por 25 unid.</p>', NULL, NULL, '9_bandeja2_verde.jpg', '9_bandeja2_roja.jpg', '9_bandeja2_naranja.jpg', 3, 'BB', '2018-08-15 22:42:01', '2018-08-17 18:40:36'),
(10, 'Plato Playo', 'Colores Surtidos 22diam.', NULL, '<p>Colores Surtidos</p>\r\n\r\n<p>22diam.</p>\r\n\r\n<p>Caja por 100 unid.</p>', NULL, NULL, '10_platonegro_grande.jpg', '10_platorojo_grande.jpg', '10_platoroj_grande.jpg', 2, 'CC', '2018-08-15 22:46:23', '2018-08-17 18:44:41'),
(11, 'Plato Hondo', 'Colores Surtidos | 19 diam.', NULL, '<p>Colores Surtidos | 19 diam.</p>', NULL, NULL, '11_platotranp_chico.jpg', '11_platoverde_chico.jpg', '11_platorojo_chico.jpg', 2, 'BB', '2018-08-15 22:48:09', '2018-08-17 18:43:56'),
(12, 'Plato Octogonales', 'Grande 23.5cm | Chico 18cm', NULL, '<p>Grande</p>\r\n\r\n<p>23.5cm</p>\r\n\r\n<p>Caja por 160 unid.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chico 18cm</p>\r\n\r\n<p>18cm</p>\r\n\r\n<p>Caja por 100 unid.</p>', NULL, NULL, '12_platohex_verde.jpg', '12_platohex_rojo.jpg', '12_platohex_negro.jpg', 2, 'AA', '2018-08-15 22:50:02', '2018-08-17 18:42:52'),
(14, 'Vaso Whisky', 'Cristal | 300cm<sup>3</sup>', NULL, '<p>Cristal</p>\r\n\r\n<p>300cm3</p>\r\n\r\n<p>caja por 100 unid.</p>', NULL, NULL, '13_no-image.jpg', '13_no-image.jpg', '13_no-image.jpg', 7, 'AA', '2018-08-17 20:36:23', '2018-08-17 20:41:39'),
(15, 'Vaso de Agua / Soda', 'Cristal | 280cm<sup>3</sup>', NULL, '<p>Cristal</p>\r\n\r\n<p>280cm3</p>\r\n\r\n<p>caja por 240 unid.</p>', NULL, NULL, '15_no-image.jpg', '15_no-image.jpg', '15_no-image.jpg', 7, 'BB', '2018-08-17 20:37:33', '2018-08-17 20:39:20'),
(16, 'Copa Copetin', 'Cristal | 180cm<sup>3</sup>', NULL, '<p>Cristal</p>\r\n\r\n<p>180cm3</p>\r\n\r\n<p>caja por 140 unid.</p>', NULL, NULL, '16_no-image.jpg', '16_no-image.jpg', '16_no-image.jpg', 7, 'CC', '2018-08-17 20:40:10', '2018-08-17 20:41:17'),
(17, 'Copa Trago Largo', 'Cristal  360cm<sup>3</sup>', NULL, '<p>Cristal</p>\r\n\r\n<p>360cm</p>\r\n\r\n<p>caja por 200 unid.</p>', NULL, NULL, '17_no-image.jpg', '17_no-image.jpg', '17_no-image.jpg', 7, 'DD', '2018-08-17 20:43:37', '2018-08-17 20:43:37'),
(18, 'Vaso Trago Largo', 'Cristal | 380cm<sup>3</sup>', NULL, '<p>Cristal</p>\r\n\r\n<p>380cm3</p>\r\n\r\n<p>caja por 120 unid.</p>', NULL, NULL, '18_no-image.jpg', '18_no-image.jpg', '18_no-image.jpg', 7, 'EE', '2018-08-17 20:44:58', '2018-08-17 20:44:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci,
  `ruta` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `nombre`, `imagen`, `ruta`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'facebook.png', 'https://www.facebook.com', '1', NULL, '2018-08-14 18:23:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  `orden` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo`, `imagen`, `texto`, `orden`, `created_at`, `updated_at`) VALUES
(4, 'Catálogo de Productos', '1_Listas_de_precios.pdf', 'Catálogo de Productos', 'AA', '2018-05-30 15:01:07', '2018-05-30 15:01:07'),
(6, 'Lista Arandelas de Hierro Zincadas', '1_Listas_de_precios.pdf', 'Lista Arandelas de Hierro Zincadas', 'CC', '2018-05-30 15:01:57', '2018-05-30 15:01:57'),
(7, 'Lista Arandelas de Hierro Zincadas', '1_Listas_de_precios.pdf', 'Lista Arandelas de Hierro Zincadas', 'BB', '2018-05-30 15:01:07', '2018-05-30 15:01:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `subtitulo` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `seccion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `titulo`, `subtitulo`, `imagen`, `seccion`, `orden`, `created_at`, `updated_at`) VALUES
(1, '<p>Acha Plast S.A.</p>', '', 'sliders__slider-achaplas-001z.jpg', NULL, 'AA', '2018-06-01 20:11:35', '2018-08-16 16:10:20'),
(2, '<p>Acha Plast S.A.</p>', NULL, 'sliders__slider-achaplas-002.jpg', NULL, 'BB', '2018-08-14 18:12:44', '2018-08-16 16:10:26'),
(3, '<p>Acha Plast S.A.</p>', NULL, 'sliders__slider-achaplas-003.jpg', NULL, 'CC', '2018-08-14 18:12:55', '2018-08-16 16:12:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soluciones`
--

CREATE TABLE `soluciones` (
  `id` int(11) NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci,
  `imagen` text COLLATE utf8_spanish_ci,
  `descripcion` text COLLATE utf8_spanish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `soluciones`
--

INSERT INTO `soluciones` (`id`, `titulo`, `imagen`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Matricería', 'matriceria__img-empresa.jpg', '<p style=\"text-align:center\">Hoy en dia esta concentrada transitoriamente en la producci&oacute;n de cucharas sundae, cucharitas para helados y copas sundae, contando para la producci&oacute;n de las mismas con potentes y muy veloces maquinas inyectoras b.m.b. de 270 y 350 toneladas respectivamente de ultima generaci&oacute;n.</p>', NULL, '2018-08-17 20:46:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` text COLLATE utf8_unicode_ci,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `tipo`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pablo', 'pablo', NULL, '$2y$10$XlOopRLeg45MV4WTZsevmungGPfpyvO3puI6hRGlAjdm2XPIqFQlO', 'T24dOFcoUxZ5uBopzeIRItozCAl379e8WaPAFMjRYLe3692dn4gdN04K8mmW', NULL, '2018-06-04 16:47:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calidades`
--
ALTER TABLE `calidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `correos`
--
ALTER TABLE `correos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listas`
--
ALTER TABLE `listas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `soluciones`
--
ALTER TABLE `soluciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_unique` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calidades`
--
ALTER TABLE `calidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `correos`
--
ALTER TABLE `correos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `destacados`
--
ALTER TABLE `destacados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `listas`
--
ALTER TABLE `listas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `soluciones`
--
ALTER TABLE `soluciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
