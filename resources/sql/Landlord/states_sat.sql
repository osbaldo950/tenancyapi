-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: perzona_tenant_beb946f5-6f22-4fdf-8e17-c9c3b976aed1
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `states_sat`
--

/*DROP TABLE IF EXISTS `states_sat`;*/
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
/*
CREATE TABLE `states_sat` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
*/
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states_sat`
--

LOCK TABLES `states_sat` WRITE;
/*!40000 ALTER TABLE `states_sat` DISABLE KEYS */;
INSERT INTO `states_sat` VALUES (1,'AGU','MEX','Aguascalientes',NULL,NULL),(2,'BCN','MEX','Baja California',NULL,NULL),(3,'BCS','MEX','Baja California Sur',NULL,NULL),(4,'CAM','MEX','Campeche',NULL,NULL),(5,'CHP','MEX','Chiapas',NULL,NULL),(6,'CHH','MEX','Chihuahua',NULL,NULL),(7,'COA','MEX','Coahuila',NULL,NULL),(8,'COL','MEX','Colima',NULL,NULL),(9,'CMX','MEX','Ciudad de México',NULL,NULL),(10,'DUR','MEX','Durango',NULL,NULL),(11,'GUA','MEX','Guanajuato',NULL,NULL),(12,'GRO','MEX','Guerrero',NULL,NULL),(13,'HID','MEX','Hidalgo',NULL,NULL),(14,'JAL','MEX','Jalisco',NULL,NULL),(15,'MEX','MEX','Estado de México',NULL,NULL),(16,'MIC','MEX','Michoacán',NULL,NULL),(17,'MOR','MEX','Morelos',NULL,NULL),(18,'NAY','MEX','Nayarit',NULL,NULL),(19,'NLE','MEX','Nuevo León',NULL,NULL),(20,'OAX','MEX','Oaxaca',NULL,NULL),(21,'PUE','MEX','Puebla',NULL,NULL),(22,'QUE','MEX','Querétaro',NULL,NULL),(23,'ROO','MEX','Quintana Roo',NULL,NULL),(24,'SLP','MEX','San Luis Potosí',NULL,NULL),(25,'SIN','MEX','Sinaloa',NULL,NULL),(26,'SON','MEX','Sonora',NULL,NULL),(27,'TAB','MEX','Tabasco',NULL,NULL),(28,'TAM','MEX','Tamaulipas',NULL,NULL),(29,'TLA','MEX','Tlaxcala',NULL,NULL),(30,'VER','MEX','Veracruz',NULL,NULL),(31,'YUC','MEX','Yucatán',NULL,NULL),(32,'ZAC','MEX','Zacatecas',NULL,NULL),(33,'AL','USA','Alabama',NULL,NULL),(34,'AK','USA','Alaska',NULL,NULL),(35,'AZ','USA','Arizona',NULL,NULL),(36,'AR','USA','Arkansas',NULL,NULL),(37,'CA','USA','California',NULL,NULL),(38,'NC','USA','Carolina del Norte',NULL,NULL),(39,'SC','USA','Carolina del Sur',NULL,NULL),(40,'CO','USA','Colorado',NULL,NULL),(41,'CT','USA','Connecticut',NULL,NULL),(42,'ND','USA','Dakota del Norte',NULL,NULL),(43,'SD','USA','Dakota del Sur',NULL,NULL),(44,'DE','USA','Delaware',NULL,NULL),(45,'FL','USA','Florida',NULL,NULL),(46,'GA','USA','Georgia',NULL,NULL),(47,'HI','USA','Hawái',NULL,NULL),(48,'ID','USA','Idaho',NULL,NULL),(49,'IL','USA','Illinois',NULL,NULL),(50,'IN','USA','Indiana',NULL,NULL),(51,'IA','USA','Iowa',NULL,NULL),(52,'KS','USA','Kansas',NULL,NULL),(53,'KY','USA','Kentucky',NULL,NULL),(54,'LA','USA','Luisiana',NULL,NULL),(55,'ME','USA','Maine',NULL,NULL),(56,'MD','USA','Maryland',NULL,NULL),(57,'MA','USA','Massachusetts',NULL,NULL),(58,'MI','USA','Míchigan',NULL,NULL),(59,'MN','USA','Minnesota',NULL,NULL),(60,'MS','USA','Misisipi',NULL,NULL),(61,'MO','USA','Misuri',NULL,NULL),(62,'MT','USA','Montana',NULL,NULL),(63,'NE','USA','Nebraska',NULL,NULL),(64,'NV','USA','Nevada',NULL,NULL),(65,'NJ','USA','Nueva Jersey',NULL,NULL),(66,'NY','USA','Nueva York',NULL,NULL),(67,'NH','USA','Nuevo Hampshire',NULL,NULL),(68,'NM','USA','Nuevo México',NULL,NULL),(69,'OH','USA','Ohio',NULL,NULL),(70,'OK','USA','Oklahoma',NULL,NULL),(71,'OR','USA','Oregón',NULL,NULL),(72,'PA','USA','Pensilvania',NULL,NULL),(73,'RI','USA','Rhode Island',NULL,NULL),(74,'TN','USA','Tennessee',NULL,NULL),(75,'TX','USA','Texas',NULL,NULL),(76,'UT','USA','Utah',NULL,NULL),(77,'VT','USA','Vermont',NULL,NULL),(78,'VA','USA','Virginia',NULL,NULL),(79,'WV','USA','Virginia Occidental',NULL,NULL),(80,'WA','USA','Washington',NULL,NULL),(81,'WI','USA','Wisconsin',NULL,NULL),(82,'WY','USA','Wyoming',NULL,NULL),(83,'ON','CAN','Ontario ',NULL,NULL),(84,'QC','CAN',' Quebec ',NULL,NULL),(85,'NS','CAN',' Nueva Escocia',NULL,NULL),(86,'NB','CAN','Nuevo Brunswick',NULL,NULL),(87,'MB','CAN',' Manitoba',NULL,NULL),(88,'BC','CAN',' Columbia Británica',NULL,NULL),(89,'PE','CAN',' Isla del Príncipe Eduardo',NULL,NULL),(90,'SK','CAN',' Saskatchewan',NULL,NULL),(91,'AB','CAN',' Alberta',NULL,NULL),(92,'NL','CAN',' Terranova y Labrador',NULL,NULL),(93,'NT','CAN',' Territorios del Noroeste',NULL,NULL),(94,'YT','CAN',' Yukón',NULL,NULL),(95,'UN','CAN',' Nunavut',NULL,NULL);
/*!40000 ALTER TABLE `states_sat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-04 15:58:21
