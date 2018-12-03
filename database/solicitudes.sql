DROP DATABASE IF EXISTS solicitudes;
CREATE DATABASE solicitudes;
USE solicitudes;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `Solicitudes` (
  `id_solicitud` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `servicio` varchar(15) NOT NULL,
  `velocidad` varchar(5) NOT NULL,
  `periodo` varchar(15) NOT NULL,
  `tecnologia` varchar(15) NOT NULL,
  PRIMARY KEY (id_solicitud)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `Clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `whatsapp` varchar(10) NOT NULL,
  `facebook` varchar(25) NOT NULL,
  `ocupacion` varchar(25) NOT NULL,
  `direccion_de_trabajo` varchar(40) NOT NULL,
  `estado_civil` varchar(10) NOT NULL,
  `nombre_conyugue` varchar(25) NOT NULL,
  `telefono_conyugue` varchar(10) NOT NULL,
  `ocupacion_conyugue` varchar(25) NOT NULL,
  `Solicitudes_id_solicitud` int NOT NULL,
  PRIMARY KEY (id_cliente),
  FOREIGN KEY (Solicitudes_id_solicitud) REFERENCES Solicitudes(id_solicitud)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `Contactos` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre1` varchar(25) NOT NULL,
  `telefono1` varchar(10) NOT NULL,
  `direccion1` varchar(40) NOT NULL,
  `parentesco1` varchar(10) NOT NULL,
  `nombre2` varchar(25) NOT NULL,
  `telefono2` varchar(10) NOT NULL,
  `direccion2` varchar(40) NOT NULL,
  `parentesco2` varchar(10) NOT NULL,
  `nombre3` varchar(25) NOT NULL,
  `telefono3` varchar(10) NOT NULL,
  `direccion3` varchar(40) NOT NULL,
  `parentesco3` varchar(10) NOT NULL,
  Clientes_id_cliente int NOT NULL,
  PRIMARY KEY (id_contacto),
  FOREIGN KEY (Clientes_id_cliente) REFERENCES Clientes(id_cliente)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Estructura de tabla para la tabla vendedor

CREATE TABLE `Vendedores` (
  `id_vendedor` int(11) NOT NULL AUTO_INCREMENT,
  `vendedor` varchar(15) NOT NULL,
  `dependencia` varchar(15) NOT NULL,
  Contactos_id_contacto int NOT NULL,
  PRIMARY KEY (id_vendedor),
  FOREIGN KEY (Contactos_id_contacto) REFERENCES Contactos(id_contacto)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE Solicitudes AUTO_INCREMENT=1;
ALTER TABLE Clientes AUTO_INCREMENT=1;
ALTER TABLE Contactos AUTO_INCREMENT=1;
ALTER TABLE Vendedores AUTO_INCREMENT=1;
