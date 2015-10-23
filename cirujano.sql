-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2015 a las 01:46:53
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

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
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombres_contacto` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `servicio` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_movil_contacto` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_contacto` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `asunto_contacto` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_contacto` text COLLATE utf8_spanish_ci,
  `fecha_contacto` date NOT NULL,
  `visto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombres_contacto`, `servicio`, `telefono_movil_contacto`, `email_contacto`, `asunto_contacto`, `descripcion_contacto`, `fecha_contacto`, `visto`) VALUES
(2, 'Maria lujan', 'Mamoplastia', '04123596241', 'maria.lujan@gmail.com', 'Cita para contactar mamoplastia.', 'Hol esta es una pruaba blablbalbalablbalbalalbala', '0000-00-00', 1),
(3, 'zddsff', 'Wordpress', '3243243243', 'zdfdsf@gmail.com', 'dsfdsfsd', 'xzcxczx', '2015-10-20', 1),
(4, 'Maria ', 'PHP / MySQL', '04241489032', 'mari.petra@gmail.com', 'hola como estas', 'hola fsalkmfmdsmfkdsmfds', '2015-10-21', 0),
(5, 'pepe', 'Mamoplastia portugues', '9020292922', 'pepe@gmail.com', 'sdsadsad', 'sadsadsa', '2015-10-21', 0),
(6, 'marta', 'Mamoplastia portugues', '32432432432', 'marta@gmail.com', 'plaoaa', 'zdvzxdvzdv', '2015-10-21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido_curriculum`
--

CREATE TABLE `contenido_curriculum` (
  `id_contenido_curriculum` int(11) NOT NULL,
  `id_curriculum` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `curriculum_completo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contenido_curriculum`
--

INSERT INTO `contenido_curriculum` (`id_contenido_curriculum`, `id_curriculum`, `id_idioma`, `curriculum_completo`) VALUES
(1, 1, 1, 'El Dr. Julio Reyes desde que inicio sus estudios de Otorrinolaringologia en la Universidad del Valle, se intereso por la Cirugía Plástica Facial y en especial por la Rinoplastia pasión que creció rápidamente y continúa hasta hoy.\r\n\r\nAhora es el jefe de la Clínica de Cirugía Plástica Facial del Departamento de Otorrinolaringologia de la Universidad del Valle y su dedicación y fascinación por la Cirugía Plástica Facial y la Rinoplastia continua.\r\n\r\nComo médico Cirujano Plástico Facial y Otorrinolaringologo analiza tanto la función como la forma estética, bajo parámetros científicos y antropométricos, preservando o mejorando, tanto la funcionalidad, como la estética preexistente, Además es profesor e investigador en esta area, asiste continuamente a seminarios y conferencias nacionales e internacionales como conferencista y como asistente, esta actualización constante le ha permitido mejorar continuamente sus técnicas y así brindar un mejor servicio a la comunidad.'),
(2, 1, 2, 'Dr. Julio Reyes desde o início de seus estudos de otorrinolaringologia da Universidade del Valle, estava interessado em Cirurgia Plástica Facial e especialmente Rinoplastia paixão que cresceu rapidamente e continua até hoje.\r\n\r\nAgora ele é o chefe da Clínica de Cirurgia Plástica Facial do Departamento de Otorrinolaringologia da Universidade del Valle e sua dedicação e fascínio Facial Cirurgia Plástica Rinoplastia e contínua.\r\n\r\nComo cirurgião plástico facial e otorrinolaringólogo analisa tanto a função e forma estética , sob parâmetros científicos e antropométricos , preservando ou melhorando a funcionalidade que a estética existentes , também é professor e investigador nesta área , de forma contínua freqüenta seminários e conferências falante nacional e internacional e como um assistente, essa atualização constante permitiu-lhe melhorar continuamente suas habilidades e proporcionar um melhor serviço à comunidade .');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido_procedimiento`
--

CREATE TABLE `contenido_procedimiento` (
  `id_contenido_procedimiento` int(11) NOT NULL,
  `id_procedimiento` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `titulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `sub_titulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `detalle` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contenido_procedimiento`
--

INSERT INTO `contenido_procedimiento` (`id_contenido_procedimiento`, `id_procedimiento`, `id_idioma`, `titulo`, `sub_titulo`, `detalle`) VALUES
(3, 2, 1, 'Mamoplastia', 'Sub mamaria español', 'se inserta un implante mamario.\r\n						'),
(4, 2, 2, 'Mamoplastia portugues', 'sub_portugues', 'se inserta un implante mamario.\r\n						\r\n						'),
(5, 3, 1, 'Rinoplastia', 'sdsadas', 'se quita la nariz y se pone otra\r\n						'),
(6, 3, 2, 'Rinoplastique', 'sadasdsa', 'se quita la nariz y se pone otra\r\n						\r\n						');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curriculum_doc`
--

CREATE TABLE `curriculum_doc` (
  `id_curriculum` int(11) NOT NULL,
  `img_curriculum` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `curriculum_doc`
--

INSERT INTO `curriculum_doc` (`id_curriculum`, `img_curriculum`) VALUES
(1, 'doctor.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_contacto`
--

CREATE TABLE `datos_contacto` (
  `id_datos_contacto` int(11) NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `fax` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `facebook` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `twitter` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `instagram` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `gloogleplus` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `id_idioma` int(11) NOT NULL,
  `idioma` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`id_idioma`, `idioma`) VALUES
(1, 'spanish'),
(2, 'portugues');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_procedimientos`
--

CREATE TABLE `img_procedimientos` (
  `id_img_procedimiento` int(11) NOT NULL,
  `id_procedimiento` int(5) DEFAULT NULL,
  `img_antes` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `img_despues` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `img_procedimientos`
--

INSERT INTO `img_procedimientos` (`id_img_procedimiento`, `id_procedimiento`, `img_antes`, `img_despues`) VALUES
(1, 2, 'Desert.jpg', 'Penguins.jpg'),
(2, 3, 'Koala.jpg', 'Jellyfish.jpg'),
(3, 3, 'jennifer.jpg', 'rinoplastia_20131008_1267281930.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_testimonios`
--

CREATE TABLE `img_testimonios` (
  `id_img_testimonio` int(11) NOT NULL,
  `id_testimonio` int(5) DEFAULT NULL,
  `nombre_img` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedimientos`
--

CREATE TABLE `procedimientos` (
  `id_procedimiento` int(11) NOT NULL,
  `img_principal_procedimiento` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `procedimientos`
--

INSERT INTO `procedimientos` (`id_procedimiento`, `img_principal_procedimiento`) VALUES
(2, 'my_menu_bootstrap.PNG'),
(3, 'Koala.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE `testimonios` (
  `id_testimonio` int(11) NOT NULL,
  `nombres_del_descriptor` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_del_descriptor` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_testimonio` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `detalle_testimonio` text COLLATE utf8_spanish_ci,
  `img_principal_testimonio` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `aprobado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`id_testimonio`, `nombres_del_descriptor`, `email_del_descriptor`, `titulo_testimonio`, `detalle_testimonio`, `img_principal_testimonio`, `aprobado`) VALUES
(2, 'MAria Lujan', 'maria.lujan@gmail.com', 'Operación satisfactoria', 'Hoola esta es una prueba de testimonio del demonnio.', 'koala.jpg', 1),
(3, 'Pepe guilarte', 'dhshfbsd@gmail.com', 'Cirujia de prueba', 'dsfgsdfgsdjknfjnjsdnjkfnjknds\r\n sdn njsdkan dfkmsdklmflkdslkmflkmldskmlkfmkldsmmfkldsmklfmkldmlkfmkmdskmfkldmkf', 'Jellyfish.jpg', 0),
(4, 'Katiuska', 'katy@gmail.com', 'dsfknndsn', 'jknjknjknjnfdgf', 'Penguins.jpg', 1),
(5, 'Emperatriz', 'emperatriz@gmail.com', 'prueba test', 'Hola este es un nuevo testimonio.', 'Hydrangeas.jpg', 1),
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

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `clave` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombres` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `nombres`, `apellidos`, `rol`) VALUES
(1, 'doctor', '8cb2237d0679ca88db6464eac60da96345513964', 'Jhonny', 'Vasquez', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `contenido_curriculum`
--
ALTER TABLE `contenido_curriculum`
  ADD PRIMARY KEY (`id_contenido_curriculum`);

--
-- Indices de la tabla `contenido_procedimiento`
--
ALTER TABLE `contenido_procedimiento`
  ADD PRIMARY KEY (`id_contenido_procedimiento`);

--
-- Indices de la tabla `curriculum_doc`
--
ALTER TABLE `curriculum_doc`
  ADD PRIMARY KEY (`id_curriculum`);

--
-- Indices de la tabla `datos_contacto`
--
ALTER TABLE `datos_contacto`
  ADD PRIMARY KEY (`id_datos_contacto`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id_idioma`);

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
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `contenido_curriculum`
--
ALTER TABLE `contenido_curriculum`
  MODIFY `id_contenido_curriculum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `contenido_procedimiento`
--
ALTER TABLE `contenido_procedimiento`
  MODIFY `id_contenido_procedimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `curriculum_doc`
--
ALTER TABLE `curriculum_doc`
  MODIFY `id_curriculum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `datos_contacto`
--
ALTER TABLE `datos_contacto`
  MODIFY `id_datos_contacto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id_idioma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `img_procedimientos`
--
ALTER TABLE `img_procedimientos`
  MODIFY `id_img_procedimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `img_testimonios`
--
ALTER TABLE `img_testimonios`
  MODIFY `id_img_testimonio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `procedimientos`
--
ALTER TABLE `procedimientos`
  MODIFY `id_procedimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `id_testimonio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
