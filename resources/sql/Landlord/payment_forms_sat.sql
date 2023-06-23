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
-- Table structure for table `payment_forms_sat`
--

-- DROP TABLE IF EXISTS `payment_forms_sat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
-- CREATE TABLE `payment_forms_sat` (
--   `id` bigint unsigned NOT NULL AUTO_INCREMENT,
--   `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `bankable` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `operation_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_forms_sat`
--

LOCK TABLES `payment_forms_sat` WRITE;
/*!40000 ALTER TABLE `payment_forms_sat` DISABLE KEYS */;
INSERT INTO `payment_forms_sat` VALUES (1,'01','Efectivo','No','Opcional',NULL,NULL),(2,'02','Cheque nominativo','Sí','Opcional',NULL,NULL),(3,'03','Transferencia electrónica de fondos','Sí','Opcional',NULL,NULL),(4,'04','Tarjeta de crédito','Sí','Opcional',NULL,NULL),(5,'05','Monedero electrónico','Sí','Opcional',NULL,NULL),(6,'06','Dinero electrónico','Sí','Opcional',NULL,NULL),(7,'08','Vales de despensa','No','Opcional',NULL,NULL),(8,'12','Dación en pago','No','Opcional',NULL,NULL),(9,'13','Pago por subrogación','No','Opcional',NULL,NULL),(10,'14','Pago por consignación','No','Opcional',NULL,NULL),(11,'15','Condonación','No','Opcional',NULL,NULL),(12,'17','Compensación','No','Opcional',NULL,NULL),(13,'23','Novación','No','Opcional',NULL,NULL),(14,'24','Confusión','No','Opcional',NULL,NULL),(15,'25','Remisión de deuda','No','Opcional',NULL,NULL),(16,'26','Prescripción o caducidad','No','Opcional',NULL,NULL),(17,'27','A satisfacción del acreedor','No','Opcional',NULL,NULL),(18,'28','Tarjeta de débito','Sí','Opcional',NULL,NULL),(19,'29','Tarjeta de servicios','Sí','Opcional',NULL,NULL),(20,'30','Aplicación de anticipos','No','Opcional',NULL,NULL),(21,'31','Intermediario pagos','No','Opcional',NULL,NULL),(22,'99','Por definir','Opcional','Opcional',NULL,NULL);
/*!40000 ALTER TABLE `payment_forms_sat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-21 12:38:26
