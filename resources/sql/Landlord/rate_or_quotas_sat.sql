-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: propietario
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `rate_or_quotas_sat`
--

-- DROP TABLE IF EXISTS `rate_or_quotas_sat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
-- CREATE TABLE `rate_or_quotas_sat` (
--   `id` bigint unsigned NOT NULL AUTO_INCREMENT,
--   `range_or_fixed` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `max_value` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
--   `min_value` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
--   `tax` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `factor` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `transferred` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `retention` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rate_or_quotas_sat`
--

LOCK TABLES `rate_or_quotas_sat` WRITE;
/*!40000 ALTER TABLE `rate_or_quotas_sat` DISABLE KEYS */;
INSERT INTO `rate_or_quotas_sat` VALUES (1,'Fijo','','0.000000 ','IVA','Tasa','Sí','No',NULL,NULL),(2,'Fijo','','0.160000 ','IVA','Tasa','Sí','No',NULL,NULL),(3,'Rango','0.000000 ','0.160000 ','IVA','Tasa','No','Sí',NULL,NULL),(4,'Fijo','','0.080000 ','IVA Crédito aplicado del 50%','Tasa','Sí','No',NULL,NULL),(5,'Fijo','','0.265000 ','IEPS','Tasa','Sí','Sí',NULL,NULL),(6,'Fijo','','0.300000 ','IEPS','Tasa','Sí','Sí',NULL,NULL),(7,'Fijo','','0.530000 ','IEPS','Tasa','Sí','Sí',NULL,NULL),(8,'Fijo','','0.500000 ','IEPS','Tasa','Sí','Sí',NULL,NULL),(9,'Fijo','','1.600000 ','IEPS','Tasa','Sí','Sí',NULL,NULL),(10,'Fijo','','0.304000 ','IEPS','Tasa','Sí','Sí',NULL,NULL),(11,'Fijo','','0.250000 ','IEPS','Tasa','Sí','Sí',NULL,NULL),(12,'Fijo','','0.090000 ','IEPS','Tasa','Sí','Sí',NULL,NULL),(13,'Fijo','','0.080000 ','IEPS','Tasa','Sí','Sí',NULL,NULL),(14,'Fijo','','0.070000 ','IEPS','Tasa','Sí','Sí',NULL,NULL),(15,'Fijo','','0.060000 ','IEPS','Tasa','Sí','Sí',NULL,NULL),(16,'Fijo','','0.030000 ','IEPS','Tasa','Sí','No',NULL,NULL),(17,'Fijo','','0.000000 ','IEPS','Tasa','Sí','No',NULL,NULL),(18,'Rango','0.000000 ','59.144900 ','IEPS','Cuota','Sí','Sí',NULL,NULL),(19,'Rango','0.000000 ','0.350000 ','ISR','Tasa','No','Sí',NULL,NULL);
/*!40000 ALTER TABLE `rate_or_quotas_sat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-21 16:56:30
