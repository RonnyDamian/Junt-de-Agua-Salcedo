-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2020 a las 22:59:20
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `junta_agua`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonos`
--

CREATE TABLE `abonos` (
  `id_abono` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_ovalo` int(11) NOT NULL,
  `id_lote` int(11) NOT NULL,
  `cantidad_abono` double NOT NULL,
  `fecha_abono` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `estado_asistencia` varchar(2) NOT NULL,
  `fecha_asistencia` date DEFAULT NULL,
  `id_cliente` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `estado_asistencia`, `fecha_asistencia`, `id_cliente`) VALUES
(1, 'NO', '2020-04-14', 3),
(2, 'SI', '2020-04-14', 2),
(3, 'NO', '2020-04-14', 4),
(4, 'NO', '2020-04-14', 1),
(5, 'NO', '2020-04-14', 5),
(6, 'NO', '2020-04-14', 3),
(7, 'SI', '2020-04-14', 2),
(8, 'SI', '2020-04-14', 4),
(9, 'NO', '2020-04-14', 1),
(10, 'NO', '2020-04-14', 5),
(11, 'NO', '2020-04-14', 3),
(12, 'SI', '2020-04-14', 2),
(13, 'NO', '2020-04-14', 4),
(14, 'NO', '2020-04-14', 1),
(15, 'NO', '2020-04-14', 5),
(16, 'NO', '2020-04-14', 3),
(17, 'SI', '2020-04-14', 2),
(18, 'NO', '2020-04-14', 4),
(19, 'NO', '2020-04-14', 1),
(20, 'NO', '2020-04-14', 5),
(21, 'SI', '2020-04-14', 3),
(22, 'SI', '2020-04-14', 2),
(23, 'SI', '2020-04-14', 4),
(24, 'SI', '2020-04-14', 1),
(25, 'SI', '2020-04-14', 5),
(26, 'SI', '2020-04-14', 3),
(27, 'SI', '2020-04-14', 2),
(28, 'NO', '2020-04-14', 4),
(29, 'NO', '2020-04-14', 1),
(30, 'NO', '2020-04-14', 5),
(31, 'SI', '2020-04-14', 3),
(32, 'SI', '2020-04-14', 2),
(33, 'SI', '2020-04-14', 4),
(34, 'SI', '2020-04-14', 1),
(35, 'SI', '2020-04-14', 5),
(36, 'SI', '2020-04-14', 3),
(37, 'SI', '2020-04-14', 2),
(38, 'SI', '2020-04-14', 4),
(39, 'SI', '2020-04-14', 1),
(40, 'SI', '2020-04-14', 5),
(41, 'NO', '2020-04-14', 3),
(42, 'SI', '2020-04-14', 2),
(43, 'SI', '2020-04-14', 4),
(44, 'NO', '2020-04-14', 1),
(45, 'NO', '2020-04-14', 5),
(46, 'SI', '2020-04-25', 3),
(47, 'NO', '2020-04-25', 2),
(48, 'NO', '2020-04-25', 4),
(49, 'NO', '2020-04-25', 1),
(50, 'NO', '2020-04-25', 5),
(51, 'SI', '2020-04-26', 3),
(52, 'SI', '2020-04-26', 2),
(53, 'SI', '2020-04-26', 4),
(54, 'SI', '2020-04-26', 1),
(55, 'SI', '2020-04-26', 5),
(56, 'NO', '2020-08-28', 15),
(57, 'SI', '2020-08-28', 12),
(58, 'NO', '2020-08-28', 8),
(59, 'SI', '2020-08-28', 2),
(60, 'NO', '2020-08-28', 7),
(61, 'SI', '2020-08-28', 6),
(62, 'SI', '2020-08-28', 5),
(63, 'SI', '2020-08-28', 10),
(64, 'SI', '2020-08-28', 4),
(65, 'SI', '2020-08-28', 18),
(66, 'SI', '2020-08-28', 21),
(67, 'SI', '2020-08-28', 3),
(68, 'SI', '2020-08-28', 22),
(69, 'SI', '2020-08-28', 19),
(70, 'SI', '2020-08-28', 13),
(71, 'SI', '2020-08-28', 17),
(72, 'SI', '2020-08-28', 1),
(73, 'SI', '2020-08-28', 20),
(74, 'NO', '2020-08-28', 9),
(75, 'NO', '2020-08-28', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistenciasesion`
--

CREATE TABLE `asistenciasesion` (
  `id_asistencia` int(11) NOT NULL,
  `estado_asistencia` varchar(2) NOT NULL,
  `fecha_asistencia` date DEFAULT NULL,
  `id_cliente` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistenciasesion`
--

INSERT INTO `asistenciasesion` (`id_asistencia`, `estado_asistencia`, `fecha_asistencia`, `id_cliente`) VALUES
(1, 'SI', '2020-04-17', 3),
(2, 'NO', '2020-04-16', 3),
(3, 'SI', '2020-04-16', 2),
(4, 'NO', '2020-04-16', 4),
(5, 'SI', '2020-04-16', 1),
(6, 'NO', '2020-04-16', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(4) NOT NULL,
  `nombre_cliente` varchar(25) NOT NULL,
  `apellido_cliente` varchar(25) NOT NULL,
  `sexo_cliente` varchar(7) NOT NULL,
  `direccion_cliente` varchar(200) NOT NULL,
  `telefono_cliente` char(10) DEFAULT NULL,
  `email_cliente` varchar(200) NOT NULL,
  `cedula_cliente` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `apellido_cliente`, `sexo_cliente`, `direccion_cliente`, `telefono_cliente`, `email_cliente`, `cedula_cliente`) VALUES
(1, 'JORGE', 'TAIPE UNAPUCHA', 'HOMBRE', 'asd', '22', 'sadsaAS', '0502952443'),
(2, 'SEGUNDO ANTONIO', 'CALLATASIG CHILUISA', 'HOMBRE', 'as', '988', 'asas', '1508488552'),
(3, 'JORGE', 'IZA CURAY', 'HOMBRE', 'as', '988222', 'asas44', '0502255698'),
(4, 'MANUEL', 'CANDO TENORIO', 'HOMBRE', 'as', '988', 'asas', '0502965248'),
(5, 'JUAN LUIS', 'CANDO', 'HOMBRE', 'Quito', '998679276', 'asdasd@gmail.com', '0502965247'),
(6, 'MANUEL MARIA', 'CANDO', 'MUJER', 'AASS', '0998858', 'ASAS@F.COM', '0502965247'),
(7, 'ROSA', 'CANDO', 'MUJER', 'quilajalo', '0999858558', 's@ss.com', '0535333838'),
(8, 'PEDRO', 'CAIZAHUANO UNAPUCH', 'HOMBRE', 'Mulalillo', '2131231231', 'a@k.com', '0555505050'),
(9, 'HERMELINDA', 'TOAPANTA CHIQUITO', 'MUJER', 'ASDA', '56545465', 'a@k.com', '5685335535'),
(10, 'JUAN', 'CANDO CANDO', 'HOMBRE', 'PILALO', '0958653323', 'a@k.com', '5646835465'),
(12, 'ANTONIO', 'CAHUANO', 'HOMBRE', 'PILALO', '088665665', 'a@k.com', '5783838688'),
(13, 'JOSE', 'MULLO SANGUCHO', 'HOMBRE', 'PILALO', '56868886', 'a@k.com', '5453438838'),
(14, 'MARIA JOSEFINA', 'TOASA T', 'MUJER', 'PILALO', '8769876897', 'a@k.com', '2324324234'),
(15, 'ANGEL', 'ALCOCER', 'HOMBRE', 'PILALO', '6578907689', 'a@k.com', '0502935353'),
(17, 'ASUNCION', 'TAIPE', 'MUJER', 'PILALO', '58563265', 'a@k.com', '6953266853'),
(18, 'JUAN LUIS', 'CANDO TENORIO', 'HOMBRE', 'PILALO', '09585885', 'a@k.com', '05152505'),
(19, 'ARMANDO', 'MORENO', 'HOMBRE', 'PILALO', '985686565', 'a@k.com', '0865365368'),
(20, 'VERONICA', 'TINTÍN', 'MUJER', 'AMBATO', '0992398237', 'vptintin@gmail.com', '1801221886'),
(21, 'JORGE', 'GUAMAN', 'HOMBRE', 'AMBATO', '0992398237', 'jorge@gmail.com', '1805252555'),
(22, 'CARLOS', 'MASABANDA', 'HOMBRE', 'AMBATO', '0992398237', 'carlos@gmail.com', '1805252555');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id_gasto` int(11) NOT NULL,
  `descripcion_gasto` varchar(500) NOT NULL,
  `fecha_gasto` date NOT NULL,
  `responsable_gasto` varchar(200) NOT NULL,
  `unidad_gasto` double NOT NULL,
  `unidadTotal_gasto` double NOT NULL,
  `cantidad_gasto` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id_gasto`, `descripcion_gasto`, `fecha_gasto`, `responsable_gasto`, `unidad_gasto`, `unidadTotal_gasto`, `cantidad_gasto`) VALUES
(1, 'asas', '2020-07-08', 'brayan chiluisa', 3, 60, 20),
(2, 'asasas', '2020-08-20', 'brayan chiluisa', 4, 80, 20),
(3, 'pollos', '2020-08-20', 'adriana casa', 7, 84, 12),
(4, 'panes', '2020-08-27', 'brayan chiluisa', 10, 500, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarioriego`
--

CREATE TABLE `horarioriego` (
  `id_hora` int(11) NOT NULL,
  `tiempo_hora` varchar(5) NOT NULL,
  `inicio_hora` varchar(5) NOT NULL,
  `fin_hora` varchar(5) NOT NULL,
  `dia_hora` varchar(12) NOT NULL,
  `inicio2_hora` varchar(5) NOT NULL,
  `fin2_hora` varchar(5) NOT NULL,
  `dia2_hora` varchar(12) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_lote` int(11) NOT NULL,
  `id_ovalo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarioriego`
--

INSERT INTO `horarioriego` (`id_hora`, `tiempo_hora`, `inicio_hora`, `fin_hora`, `dia_hora`, `inicio2_hora`, `fin2_hora`, `dia2_hora`, `id_cliente`, `id_lote`, `id_ovalo`) VALUES
(8, '6', '00H00', '06H00', '01-16', '12H00', '18H00', '08-23', 2, 1, 1),
(9, '6', '06H00', '12H00', '01-16', '16H00', '00H00', '08-23', 1, 2, 1),
(10, '6:45', '12H00', '18H45', '01-16', '00H00', '06H45', '09-24', 3, 2, 1),
(11, '7:45', '07H45', '18H45', '01/02-16/17', '06H45', '14H30', '09-24', 4, 6, 1),
(12, '1:45', '02H30', '04H15', '02-17', '14H30', '16H15', '09-24', 5, 7, 1),
(13, '6:30', '04H15', '10H45', '02-17', '16H15', '22H45', '09-24', 6, 8, 1),
(14, '1:45', '10H45', '12H30', '02-17', '22H45', '00H30', '09/10-24/25', 7, 9, 1),
(15, '9', '12H30', '21H30', '02-17', '00H30', '09H30', '10-25', 8, 10, 1),
(16, '5:45', '21H30', '03H15', '02/03-17/18', '09H30', '15H15', '10-25', 9, 11, 1),
(17, '6', '03H15', '09H4', '03-18', '15H15', '21H15', '10-25', 10, 12, 1),
(18, '8:15', '09H15', '17H30', '03-18', '21H15', '05H30', '10/11-25/26', 4, 13, 1),
(19, '4', '17H30', '21H30', '03-18', '05H30', '09H30', '11-26', 12, 14, 1),
(20, '4', '21H30', '01H30', '03/04-18/19', '09H30', '13H30', '11-26', 13, 15, 1),
(21, '15', '01H30', '16H30', '04-19', '13H30', '04H30', '11/12-26/27', 14, 16, 1),
(22, '7:30', '16H30', '00H00', '04-19', '04H30', '12H00', '12-27', 15, 17, 1),
(23, '00:45', '00H00', '00H45', '05-20', '12H00', '12H45', '12-27', 17, 18, 1),
(24, '9', '00H45', '09H45', '05-20', '12H45', '21H45', '12-27', 18, 19, 1),
(25, '01:30', '09H45', '11H15', '05-20', '21H45', '23H15', '12-27', 19, 20, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotes`
--

CREATE TABLE `lotes` (
  `id_lote` int(4) NOT NULL,
  `clave_lote` int(5) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `superficie_lote` double NOT NULL,
  `precio_lote` double NOT NULL,
  `id_ovalo` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lotes`
--

INSERT INTO `lotes` (`id_lote`, `clave_lote`, `id_cliente`, `superficie_lote`, `precio_lote`, `id_ovalo`) VALUES
(1, 31000, 2, 2800, 0.28, 1),
(2, 31010, 1, 0, 0.24, 1),
(3, 31020, 3, 0, 0.27, 1),
(6, 31030, 4, 0, 0.31, 1),
(7, 31040, 5, 0, 0.07, 1),
(8, 31050, 6, 0, 0.26, 1),
(9, 31060, 7, 0, 0.07, 1),
(10, 31070, 8, 0, 0.36, 1),
(11, 31080, 9, 0, 0.23, 1),
(12, 31090, 10, 0, 0.24, 1),
(13, 31100, 4, 0, 0.33, 1),
(14, 31110, 12, 0, 0.16, 1),
(15, 31120, 13, 0, 0.16, 1),
(16, 31130, 14, 0, 0.59, 1),
(17, 31140, 15, 0, 0.3, 1),
(18, 31150, 17, 0, 0.03, 1),
(19, 31160, 18, 0, 0.36, 1),
(20, 31170, 19, 0, 0.06, 1),
(21, 31000, 20, 0, 0.24, 1),
(22, 31000, 20, 731, 0.0731, 1),
(23, 31000, 2, 5000, 0.5, 1),
(24, 8500, 12, 2800, 0.28, 1),
(25, 31010, 10, 3000, 0.3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id_notifif` int(4) NOT NULL,
  `fecha_notifi` datetime NOT NULL,
  `descripcion_notifi` text NOT NULL,
  `tipo_notifi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id_notifif`, `fecha_notifi`, `descripcion_notifi`, `tipo_notifi`) VALUES
(1, '2020-04-08 23:28:00', 'furhfhrgot\n', 'SESIÓN'),
(2, '2020-04-08 23:31:00', 'ghjj', 'SESIÓN'),
(3, '2020-04-08 23:56:00', 'hiio', 'MINGA'),
(4, '2020-04-09 00:10:00', 'gun\nghjkk', 'SESIÓN'),
(5, '2020-04-09 05:24:00', 'ttt', 'SESIÓN'),
(6, '2020-04-09 05:50:00', 'asdads', 'SESIÓN'),
(7, '2020-04-09 05:51:00', 'asdasdasd', 'SESIÓN'),
(8, '2020-04-09 07:45:00', 'aSDASDasdaSDAsdasdaSDAsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'SESIÓN'),
(9, '2020-04-18 04:40:00', 'end all dire\n', 'SESIÓN'),
(10, '2020-04-10 23:44:00', 'haiakakajabsisi', 'SESIÓN'),
(11, '2020-04-10 23:59:00', 'hahsjsjsn', 'SESIÓN'),
(12, '2020-04-11 05:02:00', 'asdasdas', 'MINGA'),
(13, '2020-04-09 05:05:00', 'ffff', 'SESIÓN'),
(14, '2020-04-11 00:06:00', 'hshshsj', 'MINGA'),
(15, '2020-04-17 00:08:00', '6eududu', 'MINGA'),
(16, '2020-04-11 00:10:00', 'h', 'SESIÓN'),
(17, '2020-04-11 00:11:00', 'yj', 'SESIÓN'),
(18, '2020-04-11 00:36:00', 'gjjbg', 'MINGA'),
(19, '2020-04-11 01:00:00', 'jjjn', 'SESIÓN'),
(20, '2020-04-11 01:14:00', 'h', 'SESIÓN'),
(21, '2020-04-11 01:16:00', 'hjii', 'MINGA'),
(22, '2020-04-11 01:17:00', 'h', 'SESIÓN'),
(23, '2020-04-11 01:26:00', 'hbh', 'SESIÓN'),
(24, '2020-04-11 01:27:00', 'iii', 'SESIÓN'),
(25, '2020-04-11 01:28:00', 'yui', 'SESIÓN'),
(26, '2020-04-11 01:30:00', 'hhgh', 'SESIÓN'),
(27, '2020-04-11 01:35:00', 'bjjj', 'SESIÓN'),
(28, '2020-04-11 01:41:00', 'thjk', 'SESIÓN'),
(29, '2020-04-11 01:49:00', 'hwhsjsj', 'SESIÓN'),
(30, '2020-04-11 01:57:00', 'hhhjji', 'SESIÓN'),
(31, '2020-04-14 02:05:00', 'hehej', 'SESIÓN'),
(32, '2020-04-11 07:15:00', 'yh', 'SESIÓN'),
(33, '2020-04-11 07:23:00', 'asdfasf', 'SESIÓN'),
(34, '2020-04-08 07:25:00', 'gggg', 'SESIÓN'),
(35, '2020-04-16 07:38:00', 'asdads', 'SESIÓN'),
(36, '2020-04-11 07:40:00', 'asdas', 'MINGA'),
(37, '2020-04-14 01:36:00', 'kjhjkhljkhljkh', 'SESIÓN'),
(38, '2020-04-14 01:44:00', 'ffff', 'MINGA'),
(39, '2020-04-14 01:47:00', 'asdasd', 'SESIÓN'),
(40, '2020-04-15 01:42:00', 'ggg', 'MINGA'),
(41, '2020-04-14 20:25:00', 'hshsjsjjss', 'SESIÓN'),
(42, '2020-04-14 20:48:00', 'hj', 'MINGA'),
(43, '2020-04-15 01:59:00', 'g', 'SESIÓN'),
(44, '2020-04-14 21:05:00', 'hjn', 'SESIÓN'),
(45, '2020-04-14 21:13:00', 'j', 'SESIÓN'),
(46, '2020-04-14 21:18:00', 'hjnjjjj', 'SESIÓN'),
(47, '2020-04-14 21:22:00', 'vhh', 'SESIÓN'),
(48, '2020-04-26 21:28:00', 'jjn', 'SESIÓN'),
(49, '2020-04-14 21:30:00', 'hn', 'SESIÓN'),
(50, '2020-04-14 22:41:00', 'hhhhh\nnm', 'SESIÓN'),
(51, '2020-04-25 08:00:00', '<p>\n	asdasdasdasdasdasdasdasdasda</p>\n', 'MINGA'),
(52, '2020-04-25 08:21:00', 'ghfujjbk', 'SESIÓN'),
(53, '2020-04-25 08:00:00', 'nisgsbahzhshsgjdjxj', 'MINGA'),
(54, '2020-04-30 10:00:00', '<p>\n	etrygyhui</p>\n', 'SESION'),
(55, '2020-08-27 21:36:00', 'Se convoca a todos Los socios a large session question ', 'SESIÓN'),
(56, '2020-08-27 21:40:00', 'se convoca a reunion', 'SESIÓN'),
(57, '2020-08-28 20:07:00', 'see can tartar ', 'SESIÓN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ovalos`
--

CREATE TABLE `ovalos` (
  `id_ovalo` int(11) NOT NULL,
  `toma_ovalo` int(2) NOT NULL,
  `d_ovalo` int(2) NOT NULL,
  `cd_ovalo` int(2) NOT NULL,
  `s_ovalo` int(2) NOT NULL,
  `dotacion_ovalo` varchar(50) NOT NULL,
  `superficie_ovalo` varchar(50) NOT NULL,
  `caudal_ovalo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ovalos`
--

INSERT INTO `ovalos` (`id_ovalo`, `toma_ovalo`, `d_ovalo`, `cd_ovalo`, `s_ovalo`, `dotacion_ovalo`, `superficie_ovalo`, `caudal_ovalo`) VALUES
(1, 5, 15, 3, 2, '0.60', '19.13', '11.48'),
(4, 5, 14, 3, 2, '0.60', '10.67', '6.40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `codigo_per` bigint(10) NOT NULL,
  `nombre_per` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`codigo_per`, `nombre_per`) VALUES
(1, 'ADMINISTRADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `id_tari` int(11) NOT NULL,
  `total_tari` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`id_tari`, `total_tari`) VALUES
(1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codigo_usu` bigint(10) NOT NULL,
  `nombre_usu` varchar(100) DEFAULT NULL,
  `apellido_usu` varchar(100) DEFAULT NULL,
  `cedula_usu` varchar(10) NOT NULL,
  `celular_usu` varchar(10) NOT NULL,
  `convencional_usu` varchar(9) NOT NULL,
  `direccion_usu` varchar(200) NOT NULL,
  `email_usu` varchar(100) DEFAULT NULL,
  `password_usu` varchar(500) DEFAULT NULL,
  `codigo_per` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo_usu`, `nombre_usu`, `apellido_usu`, `cedula_usu`, `celular_usu`, `convencional_usu`, `direccion_usu`, `email_usu`, `password_usu`, `codigo_per`) VALUES
(1, 'brayan', 'chiluisa', '0502965247', '0988558555', '032729652', 'Pilalo', 'brayanchi', '12', 1),
(2, 'Veronica', 'Tintín', '0504282534', '0984917761', '000000000', 'Pilalo', 'vptintin', '12345', 1),
(3, 'Adriana', 'Casa', '0502965247', '0985857555', '032725225', 'Pilalo', 'jl@jl.com', '123', 1),
(5, 'VERONICA', 'TINTÍN', '1801221888', '0985857555', '032729635', 'Ambato', 'vptintin@espe.edu.ec', '1234', NULL),
(8, 'Maria', 'Casa', '0502965247', '0988558555', '032726850', 'Salcedo', 'vptintin@espe.edu.ec.', '1234', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valorpagar`
--

CREATE TABLE `valorpagar` (
  `id_pago` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_ovalo` int(11) NOT NULL,
  `id_lote` int(11) NOT NULL,
  `id_asistenciasesion` int(11) NOT NULL,
  `id_asistenciaminga` int(11) NOT NULL,
  `id_abono` int(11) NOT NULL,
  `fecha_pago` date NOT NULL,
  `total_pago` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD PRIMARY KEY (`id_abono`),
  ADD KEY `idx_abonos` (`id_cliente`),
  ADD KEY `idx_abonos_0` (`id_lote`),
  ADD KEY `idx_abonos_1` (`id_ovalo`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `idx_asistencia` (`id_cliente`);

--
-- Indices de la tabla `asistenciasesion`
--
ALTER TABLE `asistenciasesion`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `idx_asistencia` (`id_cliente`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gasto`);

--
-- Indices de la tabla `horarioriego`
--
ALTER TABLE `horarioriego`
  ADD PRIMARY KEY (`id_hora`),
  ADD KEY `idx_horarioriego` (`id_lote`),
  ADD KEY `idx_horarioriego_0` (`id_ovalo`),
  ADD KEY `idx_horarioriego_1` (`id_cliente`);

--
-- Indices de la tabla `lotes`
--
ALTER TABLE `lotes`
  ADD PRIMARY KEY (`id_lote`),
  ADD KEY `idx_lotes` (`id_ovalo`),
  ADD KEY `idx_lotes_0` (`id_cliente`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id_notifif`);

--
-- Indices de la tabla `ovalos`
--
ALTER TABLE `ovalos`
  ADD PRIMARY KEY (`id_ovalo`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`codigo_per`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`id_tari`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo_usu`),
  ADD UNIQUE KEY `usuario_usu` (`email_usu`);

--
-- Indices de la tabla `valorpagar`
--
ALTER TABLE `valorpagar`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `idx_valorpagar` (`id_abono`),
  ADD KEY `idx_valorpagar_0` (`id_asistenciaminga`),
  ADD KEY `idx_valorpagar_1` (`id_asistenciasesion`),
  ADD KEY `idx_valorpagar_2` (`id_cliente`),
  ADD KEY `idx_valorpagar_3` (`id_ovalo`),
  ADD KEY `idx_valorpagar_4` (`id_lote`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abonos`
--
ALTER TABLE `abonos`
  MODIFY `id_abono` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `asistenciasesion`
--
ALTER TABLE `asistenciasesion`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `horarioriego`
--
ALTER TABLE `horarioriego`
  MODIFY `id_hora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `lotes`
--
ALTER TABLE `lotes`
  MODIFY `id_lote` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id_notifif` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `ovalos`
--
ALTER TABLE `ovalos`
  MODIFY `id_ovalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `codigo_per` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `id_tari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo_usu` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `valorpagar`
--
ALTER TABLE `valorpagar`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD CONSTRAINT `fk_abonos_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_abonos_lotes` FOREIGN KEY (`id_lote`) REFERENCES `lotes` (`id_lote`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_abonos_ovalos` FOREIGN KEY (`id_ovalo`) REFERENCES `ovalos` (`id_ovalo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `fk_asistencia_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asistenciasesion`
--
ALTER TABLE `asistenciasesion`
  ADD CONSTRAINT `fk_asistenciasesion_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `horarioriego`
--
ALTER TABLE `horarioriego`
  ADD CONSTRAINT `fk_horarioriego_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horarioriego_lotes` FOREIGN KEY (`id_lote`) REFERENCES `lotes` (`id_lote`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horarioriego_ovalos` FOREIGN KEY (`id_ovalo`) REFERENCES `ovalos` (`id_ovalo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `lotes`
--
ALTER TABLE `lotes`
  ADD CONSTRAINT `fk_lotes_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lotes_ovalos` FOREIGN KEY (`id_ovalo`) REFERENCES `ovalos` (`id_ovalo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `valorpagar`
--
ALTER TABLE `valorpagar`
  ADD CONSTRAINT `fk_valorpagar_abonos` FOREIGN KEY (`id_abono`) REFERENCES `abonos` (`id_abono`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_valorpagar_asistencia` FOREIGN KEY (`id_asistenciaminga`) REFERENCES `asistencia` (`id_asistencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_valorpagar_asistenciasesion` FOREIGN KEY (`id_asistenciasesion`) REFERENCES `asistenciasesion` (`id_asistencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_valorpagar_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_valorpagar_lotes` FOREIGN KEY (`id_lote`) REFERENCES `lotes` (`id_lote`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_valorpagar_ovalos` FOREIGN KEY (`id_ovalo`) REFERENCES `ovalos` (`id_ovalo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
