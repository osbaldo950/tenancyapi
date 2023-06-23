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
-- Table structure for table `fiscal_regimes_sat`
--

-- DROP TABLE IF EXISTS `fiscal_regimes_sat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
-- CREATE TABLE `fiscal_regimes_sat` (
--   `id` bigint unsigned NOT NULL AUTO_INCREMENT,
--   `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `physical` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `moral` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fiscal_regimes_sat`
--

LOCK TABLES `fiscal_regimes_sat` WRITE;
/*!40000 ALTER TABLE `fiscal_regimes_sat` DISABLE KEYS */;
INSERT INTO `fiscal_regimes_sat` VALUES (1,'601','General de Ley Personas Morales','No','Sí',NULL,NULL),(2,'603','Personas Morales con Fines no Lucrativos','No','Sí',NULL,NULL),(3,'605','Sueldos y Salarios e Ingresos Asimilados a Salarios','Sí','No',NULL,NULL),(4,'606','Arrendamiento','Sí','No',NULL,NULL),(5,'607','Régimen de Enajenación o Adquisición de Bienes','Sí','No',NULL,NULL),(6,'608','Demás ingresos','Sí','No',NULL,NULL),(7,'610','Residentes en el Extranjero sin Establecimiento Permanente en México','Sí','Sí',NULL,NULL),(8,'611','Ingresos por Dividendos (socios y accionistas)','Sí','No',NULL,NULL),(9,'612','Personas Físicas con Actividades Empresariales y Profesionales','Sí','No',NULL,NULL),(10,'614','Ingresos por intereses','Sí','No',NULL,NULL),(11,'615','Régimen de los ingresos por obtención de premios','Sí','No',NULL,NULL),(12,'616','Sin obligaciones fiscales','Sí','No',NULL,NULL),(13,'620','Sociedades Cooperativas de Producción que optan por diferir sus ingresos','No','Sí',NULL,NULL),(14,'621','Incorporación Fiscal','Sí','No',NULL,NULL),(15,'622','Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras','No','Sí',NULL,NULL),(16,'623','Opcional para Grupos de Sociedades','No','Sí',NULL,NULL),(17,'624','Coordinados','No','Sí',NULL,NULL),(18,'625','Régimen de las Actividades Empresariales con ingresos a través de Plataformas Tecnológicas','Sí','No',NULL,NULL),(19,'626','Régimen Simplificado de Confianza','Sí','Sí',NULL,NULL);
/*!40000 ALTER TABLE `fiscal_regimes_sat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-21 12:38:03
