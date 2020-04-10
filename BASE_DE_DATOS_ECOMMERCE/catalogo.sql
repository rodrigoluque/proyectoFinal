-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.62-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para catalogo
DROP DATABASE IF EXISTS `catalogo`;
CREATE DATABASE IF NOT EXISTS `catalogo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `catalogo`;

-- Volcando estructura para tabla catalogo.categorias
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `catNombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla catalogo.categorias: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`idCategoria`, `catNombre`) VALUES
	(1, 'Campera'),
	(2, 'Chaleco'),
	(3, 'Tapado'),
	(4, 'Abrigo'),
	(5, 'Sweater'),
	(6, 'Camperon');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla catalogo.marcas
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `marcas` (
  `idMarca` int(11) NOT NULL AUTO_INCREMENT,
  `mkNombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idMarca`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla catalogo.marcas: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` (`idMarca`, `mkNombre`) VALUES
	(1, 'Kosiuko'),
	(2, 'Zara'),
	(3, '47 Street'),
	(4, 'Americanino'),
	(5, 'Desiderata'),
	(6, 'Levi\'s'),
	(7, 'Mossimo'),
	(9, 'Newport'),
	(10, 'Roberto Cavalli'),
	(11, 'Stefano Cocci'),
	(12, 'Sweet Victorian'),
	(13, 'Sybilla'),
	(14, 'Try me'),
	(15, 'Adidas'),
	(16, 'Zimuari'),
	(17, 'Louis');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;

-- Volcando estructura para tabla catalogo.productos
DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `prdNombre` varchar(30) NOT NULL,
  `prdPrecio` double NOT NULL,
  `idMarca` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `prdPresentacion` text NOT NULL,
  `prdStock` int(6) NOT NULL,
  `prdImagen` tinytext,
  PRIMARY KEY (`idProducto`),
  KEY `Marca` (`idMarca`),
  KEY `Rubro` (`idCategoria`),
  CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla catalogo.productos: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`idProducto`, `prdNombre`, `prdPrecio`, `idMarca`, `idCategoria`, `prdPresentacion`, `prdStock`, `prdImagen`) VALUES
	(2, 'Hooded Coat', 500, 11, 2, 'cotton,women', 200, 'img1_cuero.jpg'),
	(3, 'Kuat Impermeable', 1500, 3, 3, 'Impermeable con capucha', 15, 'abrigo.jpg'),
	(4, 'Wantdo Abrigo', 3500, 5, 3, 'Doble Botonadura con Cinturón,', 27, '5HEsNRoYijmu1QrBDecEvBptug6siwDViyPaif0Q.jpeg'),
	(5, 'Long Sleeve', 4500, 6, 3, 'Collar Buttons Coats, de paño', 45, 'l3EEb4TUqhTdcIH1G4iE8PseItehNqvtFATiZqGv.jpeg'),
	(6, 'Parka', 2800, 3, 1, 'Impermeable', 35, 'mqba3xoshT9yowvq0J7TkXmtkTSkzs2sjG4KZmuu.jpeg'),
	(7, 'Lunch Cooler Bag', 1200, 9, 2, 'Customizeable,negro', 80, 'JqZGgv2YiXL5vb3CuDea9obS61CXTB6iWJJKifGB.jpeg'),
	(8, 'Roya Puffer', 4500, 12, 1, 'Pongee down filled puffer,blanco', 5, 'DJeFGeZ41gOSotSExQowg8T2S9x9j7kqOFzndKbk.jpeg'),
	(9, 'Kie Sweet', 8000, 12, 1, 'Sweet cotton', 10, 'img3.jpg'),
	(10, 'Kirk blue', 3200, 10, 1, 'Tela jean', 36, 'mmZEeLxnbp3nRTw26l3ja1Klk4LPg3f4mHHJ96nE.jpeg'),
	(11, 'Adidas fit', 3200, 15, 1, 'Ropa para entrenamiento', 50, 'campera adidas.jpg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla catalogo.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `usuNombre` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usuEstado` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuEmail_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla catalogo.users: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `usuNombre`, `email`, `password`, `usuEstado`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'rodrigo', 'rodrigo@gmail.com', '$2y$10$K6S1bM1CVGMOemJPKnay6.CfYA1jvlbGVbs8Xrtnq1CI0Tw.lRLGu', 2, NULL, '2020-03-30 19:40:36', '2020-03-30 02:50:52'),
	(2, 'soporte', 'soporte@gmail.com', '$2y$10$2Z4qUR7HnR8RmPEMfeFUguLhL6FQvXTLiAwDoQkB44jCxzKz5hZtS', 2, NULL, '2020-03-30 19:40:36', '2020-03-30 02:56:07'),
	(5, 'admin', 'admin@gmail.com', '$2y$10$8RvPNO6ys4dxC2Akm2aTEutqKj0ebUwvOWdt6WcQDOtuDzknzsmjC', 1, NULL, '2020-03-30 20:41:55', '2020-03-30 23:41:21'),
	(6, 'tamara', 'tamara@gmail.com', '$2y$10$C7488GghaM6IpwMfCi58JOcw.POjaBpj1zXuHkJxhWLbvRdI4.WjW', 2, NULL, '2020-03-31 03:13:40', '2020-03-31 06:12:07'),
	(7, 'eduardo', 'eduardo@gmail.com', '$2y$10$nhfRNHz6f/7QQjJ6qZNcfu22/cF3.daF6jPnJoKbODTSIP6mzghkK', 2, NULL, '2020-04-01 10:32:27', '2020-04-01 13:32:10'),
	(8, 'herni', 'herni@gmail.com', '$2y$10$kE5V8Anxg4gdb3pIDgDYxudh2B2yHC5Vl08.YcfFWy8CKVM4CYrji', 2, NULL, '2020-04-01 19:49:04', '2020-04-01 22:47:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
