-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2019 a las 21:18:47
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qualityprocess`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demeritos`
--

CREATE TABLE `demeritos` (
  `id_demerito` int(20) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `No_carroceria` varchar(10) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `segmento` varchar(20) NOT NULL,
  `no_conformidad` varchar(100) NOT NULL,
  `componente` varchar(100) NOT NULL,
  `complemento` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `demeritos`
--

INSERT INTO `demeritos` (`id_demerito`, `mes`, `fecha`, `No_carroceria`, `modelo`, `segmento`, `no_conformidad`, `componente`, `complemento`) VALUES
(1, 'NOVIEMBRE', '12/11/2019', 'PX00010200', 'TORINO', 'URBANO', 'FUGA', 'TANQUE', 'FUGA'),
(3, 'NOVIEMBRE', '12/11/2019', 'PX00010201', 'BOXER', 'URBANO', 'NO FUNCIONA', 'LUCES', 'DELANTERAS'),
(4, 'NOVIEMBRE', '12/11/2019', 'PX00010202', 'BOXER', 'URBANO', 'NO FUNCIONA', 'LUZ', 'LD'),
(5, 'NOVIEMBRE', '12/11/2019', 'PX00010202', 'BOXER', 'URBANO', 'NO FUNCIONA', 'LUCES', 'Laterales'),
(6, 'NOVIEMBRE', '12/11/2019', 'PX00010202', 'BOXER', 'URBANO', 'NO FUNCIONA', 'LUZ', 'TRASERA'),
(7, 'DICIEMBRE', '01/12/2019', 'PX00010205', 'TORINO', 'URBANOS', 'FUGA', 'PISTON', '3'),
(8, 'DICIEMBRE', '01/12/2019', 'PX00010206', 'TORINO', 'URBANOS', 'FUGA', 'PISTON', '3'),
(9, 'DICIEMBRE', '01/12/2019', 'PX00010207', 'TORINO', 'URBANO', '10', '20', '30'),
(10, 'DICIEMBRE', '01/12/2019', 'PX00010208', 'TORINO', 'URBANO', '10', '20', '30'),
(11, 'DICIEMBRE', '01/12/2019', 'PX00010209', 'TORINO', 'URBANO', '10', '20', '30'),
(12, 'DICIEMBRE', '01/12/2019', 'PX00010210', 'TORINO', 'URBANO', '10', '20', '30'),
(13, 'DICIEMBRE', '01/12/2019', 'PX00010211', 'TORINO', 'URBANO', '11', '21', '30'),
(14, 'DICIEMBRE', '01/12/2019', 'PX00010212', 'TORINO', 'URBANO', '12', '20', '30'),
(15, 'DICIEMBRE', '01/12/2019', 'PX00010213', 'TORINO', 'URBANO', '122', '201', '30'),
(16, 'DICIEMBRE', '01/12/2019', 'PX00010214', 'TORINO', 'URBANO', '1022', '2011', '30'),
(17, 'DICIEMBRE', '01/12/2019', 'PX00010300', 'TORINO', 'URBANO', '120', '202', '30'),
(18, 'DICIEMBRE', '01/12/2019', 'PX00010301', 'TORINO', 'URBANO', '105', '208', '30'),
(19, 'DICIEMBRE', '01/12/2019', 'PX00010302', 'TORINO', 'URBANO', '10', '2051', '3065'),
(20, 'DICIEMBRE', '01/12/2019', 'PX00010303', 'TORINO', 'URBANO', '10', '2660', '3660'),
(21, 'DICIEMBRE', '01/12/2019', 'PX00010304', 'TORINO', 'URBANO', '1660', '2550', '30'),
(22, 'DICIEMBRE', '01/12/2019', 'PX00010305', 'TORINO', 'URBANO', '1084185', '205456', '3610'),
(23, 'DICIEMBRE', '01/12/2019', 'PX00010306', 'TORINO', 'URBANO', '1410', '25150', '30'),
(24, 'DICIEMBRE', '01/12/2019', 'PX00010307', 'TORINO', 'URBANO', '1110', '20515', '30'),
(25, 'DICIEMBRE', '01/12/2019', 'PX00010308', 'TORINO', 'URBANO', '18580', '20828', '30'),
(26, 'DICIEMBRE', '01/12/2019', 'PX00010309', 'TORINO', 'URBANO', '120', '2280', '30'),
(27, 'DICIEMBRE', '01/12/2019', 'PX00010310', 'TORINO', 'URBANO', '1028', '285280', '30'),
(28, 'NOVIEMBRE', '12/11/2019', 'PX00010205', 'BOXER', 'URBANO', 'ACABADOS', 'MASCARA', 'TRASERA'),
(29, 'NOVIEMBRE', '12/11/2019', 'PX00010301', 'BOXER', 'URBANO', 'ACABADOS', 'LUCES', 'TRASERA'),
(30, 'NOVIEMBRE', '12/11/2019', 'PX00010200', 'TORINO', 'URBANO', 'FUGA', 'LUCES', 'FUGA'),
(31, 'NOVIEMBRE', '12/11/2019', 'PX00010205', 'TORINO', 'URBANO', 'NO FUNCIONA', 'LUZ', 'LD'),
(32, 'NOVIEMBRE', '12/11/2019', 'PX00010202', 'BOXER', 'URBANO', 'FUGA', 'MASCARA', 'Laterales'),
(33, 'NOVIEMBRE', '12/11/2019', 'PX00010201', 'BOXER', 'URBANOs', 'ACABADOS', 'LUZ', 'trasera 2'),
(34, 'DICIEMBRE', '12/11/2019', 'PX00010201', 'BOXER', 'URBANOs', 'FUGA', 'LUZ', 'trasera 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE `tbl_documentos` (
  `id_documento` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` mediumtext,
  `tamanio` int(200) UNSIGNED DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_documentos`
--

INSERT INTO `tbl_documentos` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`, `categoria`) VALUES
(11, 'InspecciÃ³n Unidades ForÃ¡neas', 'InspecciÃ³n Unidades ForÃ¡neas', 1131330, 'application/pdf', 'Inspeccion Unidades Foraneas.pdf', 'INSTRUCTIVOS DE TRABAJO'),
(12, 'InspecciÃ³n Unidades Urbanas', 'InspecciÃ³n Unidades Urbanas', 1565831, 'application/pdf', 'InspecciÃ³n Unidades Urbanas.pdf', 'INSTRUCTIVOS DE TRABAJO'),
(13, 'Manual InspecciÃ³n de Fibra de Vidrio', 'Manual InspecciÃ³n de Fibra de Vidrio', 1378204, 'application/pdf', 'Manual InspecciÃ³n de Fibra de Vidrio.pdf', 'INSTRUCTIVOS DE TRABAJO'),
(14, '09-05-2017', 'protecciÃ³n a filos en central elÃ©ctrica ', 613256, 'application/pdf', '09-05-2017.pdf', 'AYUDAS VISUALES'),
(15, '28-04-2017', 'espejos retrovisores desalineados provocando poca visibilidad', 518842, 'application/pdf', '28-04-2017.pdf', 'AYUDAS VISUALES'),
(16, '001-17', 'diferencia en cortes de molduras en las esquinas de los escalones', 550639, 'application/pdf', '001-17.pdf', 'ESTANDARES DE CALIDAD'),
(17, '002-17', 'debido a que la base de porta vasos de operador esta muy pegado a mampara, este provoca ruido cuando la unidad esta en movimiento ', 553524, 'application/pdf', '002-17.pdf', 'ESTANDARES DE CALIDAD'),
(19, '04-08-2016', 'personal pisa la columna de direccion para rutear arneses y mangueras, daÃ±ando conectores y seguro de posiciÃ³n de volante', 481917, 'application/pdf', '04-08-2016.pdf', 'ALERTAS DE CALIDAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `numero_empleado` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `numero_empleado`, `email`, `contrasena`, `rol`) VALUES
(12, 'Alejandro', 'Granados', 11125, 'admin_prueba@polomex.com', 'admin', 'ADMINISTRADOR'),
(41, 'Ruben', 'Villalpando', 58665480, 'ruben@polomex.com', 'ruben', 'EMPLEADO'),
(57, 'Alejandro', 'Granados', 21315, 'granados.alejandro1996@hotmail.com', '12345', 'ADMINISTRADOR'),
(58, 'Ruben1', 'Villalpando', 58665480, 'prueva1@mail.com', 'ruben', 'EMPLEADO'),
(59, 'Susana1', 'Horia', 124560, 'prueva2@mail.com', '12345', 'EMPLEADO'),
(60, 'Alejandro1', 'Granados', 21315, 'prueva2@mail.com', '12345', 'ADMINISTRADOR'),
(61, 'Ruben1', 'Villalpando', 58665480, 'prueva1@mail.com', 'ruben', 'EMPLEADO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `demeritos`
--
ALTER TABLE `demeritos`
  ADD PRIMARY KEY (`id_demerito`);

--
-- Indices de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `demeritos`
--
ALTER TABLE `demeritos`
  MODIFY `id_demerito` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  MODIFY `id_documento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
