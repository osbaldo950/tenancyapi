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
-- Table structure for table `use_cfdis_sat`
--

-- DROP TABLE IF EXISTS `use_cfdis_sat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
-- CREATE TABLE `use_cfdis_sat` (
--   `id` bigint unsigned NOT NULL AUTO_INCREMENT,
--   `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `physical` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `moral` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `receptor_fiscal_regime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `use_cfdis_sat`
--

LOCK TABLES `use_cfdis_sat` WRITE;
/*!40000 ALTER TABLE `use_cfdis_sat` DISABLE KEYS */;
INSERT INTO `use_cfdis_sat` VALUES (1,'G01','Adquisición de mercancías.','Sí','Sí','601, 603, 606, 612, 620, 621, 622, 623, 624, 625,626',NULL,NULL),(2,'G02','Devoluciones, descuentos o bonificaciones.','Sí','Sí','601, 603, 606, 612, 616, 620, 621, 622, 623, 624, 625,626',NULL,NULL),(3,'G03','Gastos en general.','Sí','Sí','601, 603, 606, 612, 620, 621, 622, 623, 624, 625, 626',NULL,NULL),(4,'I01','Construcciones.','Sí','Sí','601, 603, 606, 612, 620, 621, 622, 623, 624, 625, 626',NULL,NULL),(5,'I02','Mobiliario y equipo de oficina por inversiones.','Sí','Sí','601, 603, 606, 612, 620, 621, 622, 623, 624, 625, 626',NULL,NULL),(6,'I03','Equipo de transporte.','Sí','Sí','601, 603, 606, 612, 620, 621, 622, 623, 624, 625, 626',NULL,NULL),(7,'I04','Equipo de computo y accesorios.','Sí','Sí','601, 603, 606, 612, 620, 621, 622, 623, 624, 625, 626',NULL,NULL),(8,'I05','Dados, troqueles, moldes, matrices y herramental.','Sí','Sí','601, 603, 606, 612, 620, 621, 622, 623, 624, 625, 626',NULL,NULL),(9,'I06','Comunicaciones telefónicas.','Sí','Sí','601, 603, 606, 612, 620, 621, 622, 623, 624, 625, 626',NULL,NULL),(10,'I07','Comunicaciones satelitales.','Sí','Sí','601, 603, 606, 612, 620, 621, 622, 623, 624, 625, 626',NULL,NULL),(11,'I08','Otra maquinaria y equipo.','Sí','Sí','601, 603, 606, 612, 620, 621, 622, 623, 624, 625, 626',NULL,NULL),(12,'D01','Honorarios médicos, dentales y gastos hospitalarios.','Sí','No','605, 606, 608, 611, 612, 614, 607, 615, 625',NULL,NULL),(13,'D02','Gastos médicos por incapacidad o discapacidad.','Sí','No','605, 606, 608, 611, 612, 614, 607, 615, 625',NULL,NULL),(14,'D03','Gastos funerales.','Sí','No','605, 606, 608, 611, 612, 614, 607, 615, 625',NULL,NULL),(15,'D04','Donativos.','Sí','No','605, 606, 608, 611, 612, 614, 607, 615, 625',NULL,NULL),(16,'D05','Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación).','Sí','No','605, 606, 608, 611, 612, 614, 607, 615, 625',NULL,NULL),(17,'D06','Aportaciones voluntarias al SAR.','Sí','No','605, 606, 608, 611, 612, 614, 607, 615, 625',NULL,NULL),(18,'D07','Primas por seguros de gastos médicos.','Sí','No','605, 606, 608, 611, 612, 614, 607, 615, 625',NULL,NULL),(19,'D08','Gastos de transportación escolar obligatoria.','Sí','No','605, 606, 608, 611, 612, 614, 607, 615, 625',NULL,NULL),(20,'D09','Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones.','Sí','No','605, 606, 608, 611, 612, 614, 607, 615, 625',NULL,NULL),(21,'D10','Pagos por servicios educativos (colegiaturas).','Sí','No','605, 606, 608, 611, 612, 614, 607, 615, 625',NULL,NULL),(22,'S01','Sin efectos fiscales.  ','Sí','Sí','601, 603, 605, 606, 608, 610, 611, 612, 614, 616, 620, 621, 622, 623, 624, 607, 615, 625, 626',NULL,NULL),(23,'CP01','Pagos','Sí','Sí','601, 603, 605, 606, 608, 610, 611, 612, 614, 616, 620, 621, 622, 623, 624, 607, 615, 625, 626',NULL,NULL),(24,'CN01','Nómina','Sí','No','605',NULL,NULL);
/*!40000 ALTER TABLE `use_cfdis_sat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-21 15:23:29
