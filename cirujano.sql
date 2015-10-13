-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2015 a las 17:12:46
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cirujano`
--
CREATE DATABASE IF NOT EXISTS `cirujano` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `cirujano`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cirujias`
--

CREATE TABLE IF NOT EXISTS `cirujias` (
  `id_cirujia` int(11) NOT NULL,
  `nombre_cirujia` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `detalle_cirujia` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `img_principal_cirujia` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `costo_cirujia` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `formas_pago` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombres_contacto` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `servicio` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_movil_contacto` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_contacto` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `asunto_contacto` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_contacto` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombres_contacto`, `servicio`, `telefono_movil_contacto`, `email_contacto`, `asunto_contacto`, `descripcion_contacto`) VALUES
(2, 'Maria lujan', 'Mamoplastia', '04123596241', 'maria.lujan@gmail.com', 'Cita para contactar mamoplastia.', 'Hol esta es una pruaba blablbalbalablbalbalalbala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curriculum_doc`
--

CREATE TABLE IF NOT EXISTS `curriculum_doc` (
  `id_curriculum` int(11) NOT NULL,
  `curriculum_completo` text COLLATE utf8_spanish_ci NOT NULL,
  `img_curriculum` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `datos_personales` text COLLATE utf8_spanish_ci,
  `estudios_realizados` text COLLATE utf8_spanish_ci,
  `cursos_realizados` text COLLATE utf8_spanish_ci,
  `experiencia_laboral` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `curriculum_doc`
--

INSERT INTO `curriculum_doc` (`id_curriculum`, `curriculum_completo`, `img_curriculum`, `datos_personales`, `estudios_realizados`, `cursos_realizados`, `experiencia_laboral`) VALUES
(1, '<h1>Curriculum Dr. Julio Reyes&nbsp;</h1>\r\n\r\n<hr />\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>Estudios Realizados</td>\r\n			<td>Universidad pepe</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cursos Realizados</td>\r\n			<td>sfjnsajkfn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Experiencia</td>\r\n			<td>dsflsdklfmkadkfmd</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><img alt="" src="http://www.billboard.com/files/styles/promo_650/public/media/shakira-billboard-cover-650c.jpg" style="height:132px; width:200px" /></p>\r\n', 'foto.jpg', 'sdkjnfsdjknfsdjnfnjksdnjnfjknasdf', 'jsdnjfnjksdkjnfsdjk', 'njnnjknkjnjkjknj', 'jknjknjjj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `id_galeria` int(11) NOT NULL,
  `nombre_img` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id_galeria`, `nombre_img`, `titulo`) VALUES
(1, '11892116_10153609988559658_1060985035743962673_n.jpg', NULL),
(2, 'Ajedrez-venezolano.jpg', NULL),
(3, 'algo2.png', NULL),
(4, 'cagando.jpg', NULL),
(5, 'Wallpaper_SMTT_V9.1_1920x1080.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_procedimientos`
--

CREATE TABLE IF NOT EXISTS `img_procedimientos` (
  `id_img_procedimiento` int(11) NOT NULL,
  `id_procedimiento` int(5) DEFAULT NULL,
  `titulo_img` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_img` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_testimonios`
--

CREATE TABLE IF NOT EXISTS `img_testimonios` (
  `id_img_testimonio` int(11) NOT NULL,
  `id_testimonio` int(5) DEFAULT NULL,
  `nombre_img` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedimientos`
--

CREATE TABLE IF NOT EXISTS `procedimientos` (
  `id_procedimiento` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sub_titulo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `detalle` text COLLATE utf8_spanish_ci,
  `img_principal_procedimiento` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `procedimientos`
--

INSERT INTO `procedimientos` (`id_procedimiento`, `titulo`, `sub_titulo`, `detalle`, `img_principal_procedimiento`) VALUES
(1, 'Mamoplastia', 'yaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Se inserta una protesis mamaria para el busto.', 'Jellyfish.jpg'),
(2, 'Rinoplastia', 'se arregla nariz', 'la operación se quita la nariz para desmantelarla :D', 'Koala.jpg'),
(4, 'Narizplastia', 'operacion de nariz', 'se quita la nariz para probar							\r\n						', 'Penguins.jpg'),
(5, 'Clastomania', 'fngjnjn', 'editado clastomania		', 'Chrysanthemum.jpg'),
(6, 'NeuroMania', 'jdsfgnsdj', 'dsjnfjnsdfsdf							\r\n						', '8483546751_86494ae914_b.jpg'),
(7, 'Pruebamania', 'dsjfgdsn', 'jnjnjknjn							\r\n						', '8971419780_cb88b22947_b.jpg'),
(8, 'PoliFaceto oplkn', 'HGGGVvg', 'dsfgbsdbgfdgfd							\r\n						', 'Lighthouse.jpg'),
(9, 'dfgdfg', 'dfgfd', 'fgdfgdsfgfdg					\r\n						', 'Desert.jpg'),
(10, 'dfhgdfngj', 'jhbhjbbhj', 'jhbjhbjh							\r\n						', 'Penguins.jpg'),
(11, 'hbjjhbjhb', 'jhbjhbhj', 'hjbjhbjhbjhb							\r\n						', 'Tulips.jpg'),
(12, 'fdvgbfdv', 'xcvxcvxcv', 'dfgdfxcvxcbfdhdfh					\r\n						', 'Hydrangeas.jpg'),
(13, 'dfgdfgfdgghgj', 'gfhfgh', 'shggf							\r\n		fgh				', 'Lighthouse.jpg'),
(14, 'position', 'position', '	position						\r\n						', 'Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE IF NOT EXISTS `testimonios` (
  `id_testimonio` int(11) NOT NULL,
  `nombres_del_descriptor` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_del_descriptor` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_testimonio` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `detalle_testimonio` text COLLATE utf8_spanish_ci,
  `img_principal_testimonio` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `aprobado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`id_testimonio`, `nombres_del_descriptor`, `email_del_descriptor`, `titulo_testimonio`, `detalle_testimonio`, `img_principal_testimonio`, `aprobado`) VALUES
(2, 'MAria Lujan', 'maria.lujan@gmail.com', 'Operación satisfactoria', 'Hoola esta es una prueba de testimonio del demonnio.', 'koala.jpg', 1),
(3, 'Pepe guilarte', 'dhshfbsd@gmail.com', 'Cirujia de prueba', 'dsfgsdfgsdjknfjnjsdnjkfnjknds\r\n sdn njsdkan dfkmsdklmflkdslkmflkmldskmlkfmkldsmmfkldsmklfmkldmlkfmkmdskmfkldmkf', 'Jellyfish.jpg', 0),
(4, 'Katiuska', 'katy@gmail.com', 'dsfknndsn', 'jknjknjknjnfdgf', 'Penguins.jpg', 1),
(5, 'Emperatriz', 'emperatriz@gmail.com', 'prueba test', 'Hola este es un nuevo testimonio.', 'Hydrangeas.jpg', 0),
(6, 'persona v.', 'persona @gmail.com', 'persona ', '\r\nLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'Desert.jpg', 0),
(7, 'persona 2', 'persona 2gmail.com', 'dfgdfg', 'e textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación ', '8483546751_86494ae914_b.jpg', 0),
(8, 'Kasparov', 'gdfgdfgdf@gmail.com', 'gdfgdf', 'fdhgdfghdf', 'Chrysanthemum.jpg', 0),
(9, 'Polgar Judit', 'gdfgfdgfd@gmail.com', 'fdgdfg', 'fdsgdfgdf', 'Lighthouse.jpg\r\n', 0),
(10, 'Pepe', 'gdfgdfgdf@gmail.com', 'gdfgdf', 'fdhgdfghdf', '8971419780_cb88b22947_b.jpg', 0),
(11, 'MArta', 'gdfgfdgfd@gmail.com', 'fdgdfg', 'fdsgdfgdf', 'logo1.png\n', 0),
(12, 'Maria', 'gdfgdfgdf@gmail.com', 'gdfgdf', 'fdhgdfghdf', '8971419780_cb88b22947_b.jpg', 0),
(13, 'Luna', 'gdfgfdgfd@gmail.com', 'fdgdfg', 'fdsgdfgdf', 'logo1.png\r\n', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `clave` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombres` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `nombres`, `apellidos`, `rol`) VALUES
(1, 'doctor', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Jhonny', 'Vasquez', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cirujias`
--
ALTER TABLE `cirujias`
  ADD PRIMARY KEY (`id_cirujia`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `curriculum_doc`
--
ALTER TABLE `curriculum_doc`
  ADD PRIMARY KEY (`id_curriculum`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id_galeria`);

--
-- Indices de la tabla `img_procedimientos`
--
ALTER TABLE `img_procedimientos`
  ADD PRIMARY KEY (`id_img_procedimiento`);

--
-- Indices de la tabla `img_testimonios`
--
ALTER TABLE `img_testimonios`
  ADD PRIMARY KEY (`id_img_testimonio`);

--
-- Indices de la tabla `procedimientos`
--
ALTER TABLE `procedimientos`
  ADD PRIMARY KEY (`id_procedimiento`);

--
-- Indices de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  ADD PRIMARY KEY (`id_testimonio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cirujias`
--
ALTER TABLE `cirujias`
  MODIFY `id_cirujia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `curriculum_doc`
--
ALTER TABLE `curriculum_doc`
  MODIFY `id_curriculum` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id_galeria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `img_procedimientos`
--
ALTER TABLE `img_procedimientos`
  MODIFY `id_img_procedimiento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `img_testimonios`
--
ALTER TABLE `img_testimonios`
  MODIFY `id_img_testimonio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `procedimientos`
--
ALTER TABLE `procedimientos`
  MODIFY `id_procedimiento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `id_testimonio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
