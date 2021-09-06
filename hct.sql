-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 19-11-2020 a las 01:12:05
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hct`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

DROP TABLE IF EXISTS `avisos`;
CREATE TABLE IF NOT EXISTS `avisos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `empleado_id` int(10) DEFAULT NULL,
  `observacion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  `falta_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_aviso_empleado` (`empleado_id`),
  KEY `fk_aviso_faltaa` (`falta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `avisos`
--

INSERT INTO `avisos` (`id`, `empleado_id`, `observacion`, `fecha`, `falta_id`) VALUES
(2, 100, 'falta', '2020-11-03', 4),
(31, 100, ' no fustifica \r\n                  ', '2020-11-05', 4),
(32, 3, ' yaa\r\n                  ', '2020-11-05', 2),
(41, 3, ' \r\n    oooooooooo              ', '2020-11-09', 1),
(43, 93, 'sdds', '2020-11-09', 2),
(45, 101, 'kkk', '2020-11-11', 7),
(46, 101, 'kkk', '2020-11-11', 2),
(47, 93, 'kkk', '2020-11-11', 6),
(48, 3, 'tarde', '2020-11-12', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bases_cotizacion`
--

DROP TABLE IF EXISTS `bases_cotizacion`;
CREATE TABLE IF NOT EXISTS `bases_cotizacion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_base` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Bases_minimas` float(100,2) DEFAULT NULL,
  `Bases_maximas` float(200,2) DEFAULT NULL,
  `contingencia` float(100,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bases_cotizacion`
--

INSERT INTO `bases_cotizacion` (`id`, `nombre_base`, `Bases_minimas`, `Bases_maximas`, `contingencia`) VALUES
(1, 'Ingenieros y Licenciados', 1199.10, 3751.20, 0.40),
(2, 'Ingenieros TÃƒÂ©cnicos, Peritos y Ayudantes Titulados', 994.20, 3751.20, 0.34),
(3, 'Jefes Administrativos y de Taller', 864.90, 3751.20, 0.25),
(4, 'Ayudantes no Titulados', 858.60, 3751.20, 0.30),
(5, 'Oficiales Administrativos', 858.60, 3751.20, 0.24),
(6, 'Subalternos', 858.60, 3751.20, 0.22),
(7, 'Auxiliares Administrativos', 858.60, 3751.20, 0.21),
(8, 'Oficiales de primera y segunda', 28.62, 125.04, 0.19),
(9, 'Oficiales de tercera y Especialistas', 28.62, 125.04, 0.17),
(10, 'Peones', 28.62, 125.04, 0.15),
(11, 'Trabajadores menores de dieciocho aÃƒÂ±os, cualquiera que sea su categorÃƒÂ­a profesional', 28.62, 125.04, 0.11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

DROP TABLE IF EXISTS `contratos`;
CREATE TABLE IF NOT EXISTS `contratos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_contrato` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`id`, `nombre_contrato`) VALUES
(1, 'Contrato Indefinido'),
(2, 'Contrato Temporal'),
(3, 'Por Obra y Servicio'),
(4, 'Eventual'),
(5, 'De Interinidad'),
(6, 'De Relevo'),
(7, 'De Formacion Y Aprendizaje'),
(8, 'Contrato de Practicas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_departamento` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `horario` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre_departamento`, `horario`) VALUES
(1, 'DirecciÃƒÂ³n General', '09:00 AM a 18:00 PM '),
(2, 'Departamento Financiero', '\r\n09:00 AM a 18:00 PM'),
(3, 'Departamento Comercial', '	\r\n11:00 AM a 20:00 PM'),
(4, 'Departamento de LogÃƒÂ­stica y Operaciones', '06:00 AM a 14:00 PM Y 14:00 PM a 22:00 PM '),
(5, 'Departamento de Control de GestiÃƒÂ³n', '	\r\n07:00 AM a 15:00 PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `departamento_id` int(10) NOT NULL,
  `empresa_id` int(10) NOT NULL,
  `contrato_id` int(10) DEFAULT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` int(9) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date DEFAULT NULL,
  `bases_id` int(10) DEFAULT NULL,
  `online` enum('0','1') CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `bloqueo` enum('0','1') CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_empleado_departamento` (`departamento_id`) USING BTREE,
  KEY `fk_empleado_empresa` (`empresa_id`) USING BTREE,
  KEY `fk_empleado_contrato` (`contrato_id`),
  KEY `fk_empleado_base_cotizacion` (`bases_id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `departamento_id`, `empresa_id`, `contrato_id`, `nombre`, `apellidos`, `telefono`, `password`, `fecha_alta`, `fecha_baja`, `bases_id`, `online`, `bloqueo`) VALUES
(1, 3, 1, 1, 'admin', 'admin', 65456, '$2y$04$dQfrDoiUuUIpFLjYwnL9we/mZme6nq/g/LJ/TbRQtWoX.fIQ/d7nW', '2017-09-12', NULL, 2, '0', '1'),
(3, 1, 1, 1, 'Marlon', 'Briones Castro', 60123225, '$2y$04$dQfrDoiUuUIpFLjYwnL9we/mZme6nq/g/LJ/TbRQtWoX.fIQ/d7nW', '2020-01-27', NULL, 3, '0', '1'),
(93, 2, 1, 1, 'Rosa', 'briones flores ortiz', 654585485, '$2y$04$Tg69WMW86kBFd9D6Glg6gup8okFupXEhHHaQg6yFBP30o.xlSkO3W', '2020-05-05', NULL, 6, '1', '1'),
(100, 1, 2, 1, 'Liliana', 'Holguin Paz', 457846589, '$2y$04$dQfrDoiUuUIpFLjYwnL9we/mZme6nq/g/LJ/TbRQtWoX.fIQ/d7nW', '2019-01-20', '2020-11-19', 5, '0', '0'),
(101, 4, 4, 3, 'Mar', 'Pulido Benitez', 987654321, '$2y$04$dQfrDoiUuUIpFLjYwnL9we/mZme6nq/g/LJ/TbRQtWoX.fIQ/d7nW', '2020-11-03', NULL, 10, '0', '1'),
(102, 3, 2, 6, 'Alex', 'Garzon Villa', 987987956, '$2y$04$dQfrDoiUuUIpFLjYwnL9we/mZme6nq/g/LJ/TbRQtWoX.fIQ/d7nW', '2020-11-09', NULL, 1, '0', '1'),
(103, 4, 3, 3, 'Iria ', 'Oyague Oyague', 999878987, '$2y$04$dQfrDoiUuUIpFLjYwnL9we/mZme6nq/g/LJ/TbRQtWoX.fIQ/d7nW', '2020-11-11', NULL, 3, '0', '1'),
(104, 2, 4, 4, 'Andres', 'Sico Macias', 658985445, '$2y$04$dQfrDoiUuUIpFLjYwnL9we/mZme6nq/g/LJ/TbRQtWoX.fIQ/d7nW', '2020-11-12', NULL, 3, '0', '1'),
(105, 5, 4, 6, 'Freddy', 'MuÃ±oz Cordoba', 458965658, '$2y$04$dQfrDoiUuUIpFLjYwnL9we/mZme6nq/g/LJ/TbRQtWoX.fIQ/d7nW', '2020-11-12', NULL, 7, '0', '1'),
(106, 2, 3, 2, 'Carlos', 'Pazmino Castro', 458745589, '$2y$04$dQfrDoiUuUIpFLjYwnL9we/mZme6nq/g/LJ/TbRQtWoX.fIQ/d7nW', '2020-11-12', NULL, 3, '0', '1'),
(109, 1, 1, 1, 'lizz', 'Flores Holguin', 458458458, '$2y$04$dQfrDoiUuUIpFLjYwnL9we/mZme6nq/g/LJ/TbRQtWoX.fIQ/d7nW', '2020-11-12', '2020-11-19', 6, '0', '0'),
(110, 2, 3, 3, 'Karl K', 'Marx Gion', 458545, '$2y$04$H/ImT8sGvJlWD7UTugwvtO5xZ33OsivKG5eNKwRng0D6/zs/AEXdC', '2020-11-17', NULL, 1, '0', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `telefono` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre_empresa`, `direccion`, `ciudad`, `codigo_postal`, `telefono`) VALUES
(1, 'Retractil 91 (CENTRAL)', 'calle sabadell', 'barcelona', 8191, 605144592),
(2, 'Serviman', 'grupo poligono margoll# 22', 'Madrid', 8015, 69855475),
(3, 'CoroneOne', 'AVA. Martorell', 'Barcelona', 8965, 605447892),
(4, 'IDL Logistic', 'calle de la riera #45', 'Madrid', 8784, 985878445);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faltas`
--

DROP TABLE IF EXISTS `faltas`;
CREATE TABLE IF NOT EXISTS `faltas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_falta` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_sancion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `multa` float(100,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `faltas`
--

INSERT INTO `faltas` (`id`, `nombre_falta`, `nombre_sancion`, `multa`) VALUES
(1, 'ninguna', 'ninguna', 0.00),
(2, 'Primer Aviso', 'Advertencia', 30.00),
(3, 'Segundo Aviso', 'Advertencia', 50.00),
(4, 'Falta-Leve', '10 Dias ', 100.00),
(5, 'Falta-Grave', '20 Dias', 150.00),
(6, 'Falta-Muy Grave', '60 Dias', 200.00),
(7, 'Reincidente', '90 Dias', 300.00),
(8, 'falta no justificada', 'Aviso-Disiplinario', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

DROP TABLE IF EXISTS `incidencias`;
CREATE TABLE IF NOT EXISTS `incidencias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_incidencia` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id`, `nombre_incidencia`) VALUES
(1, 'Por Defecto'),
(2, 'Desayuno'),
(3, 'Almuerzo'),
(4, 'Merienda'),
(5, 'Auditoria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

DROP TABLE IF EXISTS `registros`;
CREATE TABLE IF NOT EXISTS `registros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `empleado_id` int(10) NOT NULL,
  `fecha` date DEFAULT NULL,
  `entrada` time DEFAULT NULL,
  `salida` time DEFAULT NULL,
  `incidencia_id` int(10) DEFAULT NULL,
  `tarea_id` int(10) DEFAULT NULL,
  `falta_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `empleado_id` (`empleado_id`,`fecha`),
  KEY `fk_registro_empleado` (`empleado_id`),
  KEY `fk_registro` (`incidencia_id`),
  KEY `fk_registro_tarea` (`tarea_id`),
  KEY `fk_falta` (`falta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=301 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `empleado_id`, `fecha`, `entrada`, `salida`, `incidencia_id`, `tarea_id`, `falta_id`) VALUES
(1, 1, '2020-10-08', '09:41:04', '18:00:00', 5, 1, 1),
(7, 1, '2020-10-28', '06:29:12', '18:00:00', 5, 3, 1),
(65, 93, '2020-10-26', '12:30:49', '22:30:24', 2, 8, 1),
(67, 93, '2020-10-27', '11:05:54', '18:00:00', 5, 4, 1),
(68, 100, '2020-10-27', '11:52:51', '18:00:00', 4, 8, 1),
(140, 3, '2020-10-26', '14:30:18', '18:00:00', 5, 4, 1),
(141, 3, '2020-10-30', '10:31:33', '17:07:10', 1, 11, 1),
(156, 3, '2020-11-03', '14:53:43', '22:30:24', 5, 6, 1),
(157, 3, '2020-11-01', '14:00:00', '22:00:02', 1, 8, 1),
(158, 3, '2020-11-02', '14:00:00', '22:00:02', 4, 4, 1),
(159, 93, '2020-11-01', '14:00:00', '22:00:02', 4, 4, 1),
(160, 93, '2020-11-02', '14:00:00', '22:00:02', 5, 2, 1),
(161, 93, '2020-11-06', '14:00:00', '22:00:02', 2, 4, 1),
(163, 3, '2020-11-04', '16:00:54', '22:00:00', 5, 3, 1),
(164, 3, '2020-11-05', '17:05:45', '18:00:00', 2, 4, 1),
(165, 3, '2020-11-09', '11:43:57', '15:00:00', 1, 1, 1),
(166, 93, '2020-11-09', '15:07:59', '15:08:13', 5, 4, 1),
(167, 3, '2020-11-10', '21:18:06', '21:18:23', 5, 10, 1),
(168, 3, '2020-11-11', '14:36:36', '22:16:45', 2, 6, 1),
(169, 100, '2020-11-12', '00:21:18', '00:21:31', 2, 3, 1),
(170, 100, '2020-11-13', '14:12:46', '22:16:45', 5, 1, 1),
(171, 3, '2020-11-13', '14:13:03', '22:16:45', 5, 1, 1),
(285, 100, '2020-11-17', '15:49:59', '22:16:45', 5, 1, 1),
(298, 100, '2020-11-18', '16:55:05', '19:57:58', 5, 1, 2),
(300, 93, '2020-11-18', '20:36:51', NULL, 5, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

DROP TABLE IF EXISTS `tareas`;
CREATE TABLE IF NOT EXISTS `tareas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_tarea` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `nombre_tarea`) VALUES
(1, 'Por Defecto'),
(2, 'Comercial (Ventas y Marketing)'),
(3, 'Administracion y Finanzas'),
(4, 'Contabilidad'),
(5, 'ProducciÃƒÂ³n'),
(6, 'Jefe de Taller'),
(7, 'Mosso de Almacen'),
(8, 'Informatica'),
(9, 'Sistemas y TecnologÃƒÂ­as'),
(10, 'Recursos Humanos'),
(11, 'Compras y Ventas'),
(12, 'LogÃƒÂ­stica y Abastecimiento'),
(13, 'Servicios Generales'),
(14, 'Otros');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD CONSTRAINT `fk_aviso_empleado` FOREIGN KEY (`empleado_id`) REFERENCES `empleados` (`id`),
  ADD CONSTRAINT `fk_aviso_faltaa` FOREIGN KEY (`falta_id`) REFERENCES `faltas` (`id`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_empleado_base_cotizacion` FOREIGN KEY (`bases_id`) REFERENCES `bases_cotizacion` (`id`),
  ADD CONSTRAINT `fk_empleado_contrato` FOREIGN KEY (`contrato_id`) REFERENCES `contratos` (`id`),
  ADD CONSTRAINT `fk_empleado_departamento` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_empleado_empresa` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `fk_falta` FOREIGN KEY (`falta_id`) REFERENCES `faltas` (`id`),
  ADD CONSTRAINT `fk_registro` FOREIGN KEY (`incidencia_id`) REFERENCES `incidencias` (`id`),
  ADD CONSTRAINT `fk_registro_empleado` FOREIGN KEY (`empleado_id`) REFERENCES `empleados` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_registro_tarea` FOREIGN KEY (`tarea_id`) REFERENCES `tareas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
