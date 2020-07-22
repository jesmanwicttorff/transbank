# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                 127.0.0.1
# Database:             webpay
# Server version:       8.0.19
# Server OS:            Win64
# Target-Compatibility: MySQL 4.0
# Extended INSERTs:     Y
# max_allowed_packet:   1048576
# HeidiSQL version:     3.0 Revision: 572
# --------------------------------------------------------

/*!40100 SET CHARACTER SET latin1*/;


#
# Database structure for database 'webpay'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `webpay` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `webpay`;


#
# Table structure for table 'payment'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `payment` (
  `id_pay` int NOT NULL AUTO_INCREMENT,
  `token_sw` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `monto` varchar(50) DEFAULT NULL,
  `response_Code` int DEFAULT NULL,
  `orden_compra` varchar(50) DEFAULT NULL,
  `authorization_codigo` varchar(50) DEFAULT NULL,
  `commerceCode` varchar(50) DEFAULT NULL,
  `tipo_tarjeta` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_pay`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



#
# Dumping data for table 'payment'
#

/*!40000 ALTER TABLE `payment` DISABLE KEYS*/;
LOCK TABLES `payment` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `payment` ENABLE KEYS*/;
