-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2019 a las 17:32:41
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL,
  `operacion` varchar(10) DEFAULT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `host` varchar(30) NOT NULL,
  `modificado` datetime DEFAULT NULL,
  `tabla` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `operacion`, `usuario`, `host`, `modificado`, `tabla`) VALUES
(1, 'INSERTAR', 'root', 'localhost', '2019-04-30 11:21:20', 'MAESTROS'),
(2, 'INSERTAR', 'root', 'localhost', '2019-04-30 11:21:20', 'MAESTROS'),
(3, 'ELIMINAR', 'root', 'localhost', '2019-04-30 11:21:33', 'MAESTROS'),
(4, 'INSERTAR', 'root', 'localhost', '2019-04-30 11:22:44', 'MAESTROS'),
(5, 'ELIMINAR', 'root', 'localhost', '2019-04-30 11:23:04', 'MAESTROS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `clave_carrera` int(11) NOT NULL,
  `nom_carrera` varchar(20) NOT NULL,
  `num_depto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Disparadores `carrera`
--
DELIMITER $$
CREATE TRIGGER `bit_carr_del` AFTER DELETE ON `carrera` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ELIMINAR", NOW(), "CARRERA")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bit_carr_upd` AFTER UPDATE ON `carrera` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ACTUALIZAR", NOW(), "CARRERA")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora` AFTER INSERT ON `carrera` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "INSERTAR", NOW(), "CARRERA")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `num_departamento` int(11) NOT NULL,
  `nombre_dept` varchar(20) NOT NULL,
  `jefe_num_tarjet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Disparadores `departamento`
--
DELIMITER $$
CREATE TRIGGER `bit_depto_del` AFTER DELETE ON `departamento` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ELIMINAR", NOW(), "DEPARTAMENTO")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bit_depto_ins` AFTER INSERT ON `departamento` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "INSERTAR", NOW(), "DEPARTAMENTO")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bit_depto_upd` AFTER UPDATE ON `departamento` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ACTUALIZAR", NOW(), "DEPARTAMENTO")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `num_tarjeta` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`num_tarjeta`, `nombre`) VALUES
(1112, 'pedro');

--
-- Disparadores `maestros`
--
DELIMITER $$
CREATE TRIGGER `bit_mae_del` AFTER DELETE ON `maestros` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ELIMINAR", NOW(), "MAESTROS")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bit_mae_ins` AFTER INSERT ON `maestros` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "INSERTAR", NOW(), "MAESTROS")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bit_mae_upd` AFTER UPDATE ON `maestros` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ACTUALIZAR", NOW(), "MAESTROS")
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`clave_carrera`),
  ADD KEY `num_depto` (`num_depto`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`num_departamento`),
  ADD KEY `jefe_num_tarjet` (`jefe_num_tarjet`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`num_tarjeta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
