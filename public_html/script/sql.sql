-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.7.14


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema dh_store
--

CREATE DATABASE IF NOT EXISTS dh_store;
USE dh_store;

--
-- Definition of table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `Codigo` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Estado` char(1) DEFAULT NULL,
  `Imagen` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;


--
-- Definition of table `categoria_producto`
--

DROP TABLE IF EXISTS `categoria_producto`;
CREATE TABLE `categoria_producto` (
  `Codigo` int(11) NOT NULL,
  `Descripcion` varchar(95) DEFAULT NULL,
  `Estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria_producto`
--

/*!40000 ALTER TABLE `categoria_producto` DISABLE KEYS */;
INSERT INTO `categoria_producto` (`Codigo`,`Descripcion`,`Estado`) VALUES 
 (1,'Audifonos','1'),
 (2,'usb','1'),
 (3,'parlantes','1'),
 (4,'power bank','1'),
 (5,'celulares','2');
/*!40000 ALTER TABLE `categoria_producto` ENABLE KEYS */;


--
-- Definition of table `correo`
--

DROP TABLE IF EXISTS `correo`;
CREATE TABLE `correo` (
  `Codigo` int(11) NOT NULL,
  `correo` varchar(65) DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `correo`
--

/*!40000 ALTER TABLE `correo` DISABLE KEYS */;
/*!40000 ALTER TABLE `correo` ENABLE KEYS */;


--
-- Definition of table `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE `marca` (
  `Codigo` int(11) NOT NULL,
  `Descripcion` varchar(60) DEFAULT NULL,
  `Estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marca`
--

/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` (`Codigo`,`Descripcion`,`Estado`) VALUES 
 (1,'Bluedio','1'),
 (2,'Sansung','1'),
 (3,'Nokia','1');
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;


--
-- Definition of table `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `Codigo` int(11) NOT NULL,
  `Desc_Larga` varchar(95) DEFAULT NULL,
  `Desc_Corta` varchar(45) DEFAULT NULL,
  `Precio` decimal(5,2) DEFAULT NULL,
  `Descuento` decimal(5,2) DEFAULT NULL,
  `Imagen` varchar(300) DEFAULT NULL,
  `Duracion` int(11) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Etiqueta` char(1) DEFAULT NULL,
  `Fecha_Agregada` datetime DEFAULT NULL,
  `Fecha_Modificado` datetime DEFAULT NULL,
  `Estado` char(1) DEFAULT NULL,
  `categoria_producto_Codigo` int(11) NOT NULL,
  `Marca_Codigo` int(11) NOT NULL,
  PRIMARY KEY (`Codigo`),
  KEY `fk_producto_categoria_producto_idx` (`categoria_producto_Codigo`),
  KEY `fk_producto_Marca1_idx` (`Marca_Codigo`),
  CONSTRAINT `fk_producto_Marca1` FOREIGN KEY (`Marca_Codigo`) REFERENCES `marca` (`Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_categoria_producto` FOREIGN KEY (`categoria_producto_Codigo`) REFERENCES `categoria_producto` (`Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producto`
--

/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`Codigo`,`Desc_Larga`,`Desc_Corta`,`Precio`,`Descuento`,`Imagen`,`Duracion`,`Fecha`,`Etiqueta`,`Fecha_Agregada`,`Fecha_Modificado`,`Estado`,`categoria_producto_Codigo`,`Marca_Codigo`) VALUES 
 (1,'Formulario de Prueba 1','Formulario de Prueba 1','12.00',NULL,'dh_store_20170110110106.png',NULL,'2017-01-10 11:21:06','1','2017-01-10 11:21:06',NULL,'1',0,0),
 (2,'Formulario de Prueba 2','Formulario de Prueba 2','12.00',NULL,'dh_store_20170110110103.png',NULL,'2017-01-10 11:22:03','1','2017-01-10 11:22:03',NULL,'1',0,0),
 (3,'Formulario de Prueba 3','Formulario de Prueba 3','1.00',NULL,'dh_store_20170110110124.png',NULL,'2017-01-10 11:22:24','1','2017-01-10 11:22:24',NULL,'1',0,0),
 (4,'Skull Candy','naranja','13.00',NULL,'dh_store_20170112120140.png',NULL,'2017-01-12 12:16:40','1','2017-01-12 12:16:40',NULL,'1',1,0);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;


--
-- Definition of table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `Codigo` int(11) NOT NULL,
  `Titulo` varchar(30) NOT NULL,
  `Contenido` varchar(80) NOT NULL,
  `Imagen` varchar(50) NOT NULL,
  `Precio` decimal(4,2) DEFAULT NULL,
  `Link` varchar(60) DEFAULT NULL,
  `Estado` char(1) NOT NULL,
  `Fecha_Publicacion` datetime DEFAULT NULL,
  `Fecha_Actualizacion` datetime DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`Codigo`,`Titulo`,`Contenido`,`Imagen`,`Precio`,`Link`,`Estado`,`Fecha_Publicacion`,`Fecha_Actualizacion`) VALUES 
 (1,'Teraware - Tablet 7\" 8GB Negra','Tablet con pantalla de 1024*600 de 7\" con teclado.','dh_store_20170112100158.jpg','19.00','producto/teraware - tablet 7\" 8gb negra/1','1','2017-01-12 10:30:58',NULL),
 (2,'HP - Memoria USB de 8GB Morada','Memoria USB compacta con almacenamiento de 8GB.','dh_store_20170112100102.jpg','24.90','producto/hp - memoria usb de 8gb morada/2','1','2017-01-12 10:59:02',NULL);
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;


--
-- Definition of table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `Codigo` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Usuario` varchar(45) DEFAULT NULL,
  `Contrasena` varchar(45) DEFAULT NULL,
  `Contrasena_Encrip` varchar(45) DEFAULT NULL,
  `Estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
