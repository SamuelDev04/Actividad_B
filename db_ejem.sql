-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2022 a las 16:55:56
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ejem`
--
CREATE DATABASE IF NOT EXISTS `db_ejem` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_ejem`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `spConsultUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spConsultUser` (IN `_code` INT(5))  BEGIN

SELECT code,name,lastName,password FROM `user` WHERE code = _code;


END$$

DROP PROCEDURE IF EXISTS `spDeleteUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spDeleteUser` (IN `_code` INT(5))  BEGIN

DELETE FROM `user` WHERE CODE = _code;

END$$

DROP PROCEDURE IF EXISTS `spInsertUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertUser` (IN `_name` VARCHAR(25), IN `_lastName` VARCHAR(25), IN `_user` VARCHAR(25), IN `_password` VARCHAR(25))  BEGIN

INSERT INTO user(NAME, LASTNAME, USERP, PASSWORD) VALUES (_name, _lastName, _user, _password);

END$$

DROP PROCEDURE IF EXISTS `spSearchAllUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spSearchAllUser` ()  BEGIN

SELECT CODE, NAME, LASTNAME, USERP, PASSWORD FROM user;

END$$

DROP PROCEDURE IF EXISTS `spUpdateUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spUpdateUser` (IN `_code` INT(5), IN `_name` VARCHAR(25), IN `_lastName` VARCHAR(25), IN `_userp` VARCHAR(25), IN `_password` VARCHAR(25))  BEGIN

UPDATE user SET NAME = _name,
LASTNAME = _lastName,
USERP = _userp,
PASSWORD = _password
WHERE CODE = _code ;	

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

DROP TABLE IF EXISTS `aprendiz`;
CREATE TABLE IF NOT EXISTS `aprendiz` (
  `codigo` int(3) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

DROP TABLE IF EXISTS `matricula`;
CREATE TABLE IF NOT EXISTS `matricula` (
  `codigoMatricula` int(3) NOT NULL,
  `fechaMatricula` date NOT NULL,
  `nombreCentro` varchar(150) NOT NULL,
  `costo` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `codigoPrograma` int(3) NOT NULL,
  `codigoAprendiz` int(3) NOT NULL,
  PRIMARY KEY (`codigoMatricula`),
  KEY `codigoAprendiz` (`codigoAprendiz`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `code` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `userP` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`code`, `name`, `lastName`, `userP`, `password`) VALUES
(1, 'Samuel', 'Yepes', 'DIR', '2255451'),
(6, 'carlos', 'mario', 'c', '02'),
(53, '1', '1', '67', '57'),
(54, '2', '4', '2', '2'),
(56, '77', '77', '77', '77'),
(60, '22', '22', '22', '22');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`codigoAprendiz`) REFERENCES `aprendiz` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
