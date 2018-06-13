-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: jaas
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `CarBookings`
--

DROP TABLE IF EXISTS `CarBookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CarBookings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `carID` int(11) NOT NULL,
  `userID` int(10) unsigned NOT NULL,
  `returned` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userID` (`userID`),
  KEY `userID_2` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CarBookings`
--

LOCK TABLES `CarBookings` WRITE;
/*!40000 ALTER TABLE `CarBookings` DISABLE KEYS */;
INSERT INTO `CarBookings` VALUES (1,'Audi A5','Flinders Street Station','1111-11-11 01:01:01',1,4,0,'2018-05-12 23:26:02',NULL),(2,'Audi A5','Flinders Street Station','1111-11-11 01:01:01',1,4,0,'2018-05-12 23:43:32',NULL),(3,'Audi A5','Flinders Street Station','1111-11-11 01:01:01',1,4,0,'2018-05-12 23:46:57',NULL),(4,'Audi A5','Flinders Street Station','1111-11-11 01:01:01',1,4,0,'2018-05-12 23:51:11',NULL),(5,'BMW X2','Southern Cross Station','2018-05-19 01:00:00',2,1,0,'2018-05-18 17:01:24',NULL),(6,'Audi A5','Flinders Street Station','1111-11-11 01:01:01',1,4,0,'2018-05-21 16:11:25',NULL),(7,'Audi A5','Flinders Street Station','4567-01-23 09:00:00',1,4,0,'2018-05-21 16:26:04',NULL),(8,'Audi A5','Flinders Street Station','1111-11-11 01:01:01',1,4,0,'2018-05-21 16:55:45',NULL),(9,'Audi A5','Flinders Street Station','1111-11-11 01:01:01',1,4,0,'2018-05-21 17:03:03',NULL),(10,'Audi A5','Flinders Street Station','1111-11-11 01:01:01',1,4,0,'2018-05-21 17:04:49',NULL),(11,'Audi A5','Flinders Street Station','1234-11-11 11:11:00',1,4,0,'2018-05-21 17:09:36',NULL),(12,'Audi A5','Flinders Street Station','1111-11-11 23:23:00',1,4,0,'2018-05-21 17:12:23',NULL),(13,'Audi A5','Flinders Street Station','1234-04-21 11:11:00',1,4,0,'2018-05-21 17:13:01',NULL),(14,'Audi A5','Flinders Street Station','1111-11-11 11:11:00',1,4,0,'2018-05-21 17:21:45',NULL),(15,'Audi A5','Flinders Street Station','1234-11-11 11:11:00',1,4,0,'2018-05-21 17:23:37',NULL),(16,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,4,0,'2018-05-21 17:24:27',NULL),(17,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,4,0,'2018-05-21 17:27:01',NULL),(18,'Audi A5','Flinders Street Station','1111-11-11 11:11:00',1,4,0,'2018-05-21 17:27:14',NULL),(19,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,17,0,'2018-05-26 19:20:55',NULL),(20,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,8,0,'2018-05-26 19:21:35',NULL),(21,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,18,0,'2018-05-26 19:23:04',NULL),(22,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,19,0,'2018-05-26 19:23:06',NULL),(23,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,4,0,'2018-05-26 19:25:27',NULL),(24,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,20,0,'2018-05-26 19:26:38',NULL),(25,'Audi A5','Flinders Street Station','1234-12-21 12:23:00',1,4,0,'2018-05-26 19:27:24',NULL),(26,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,21,0,'2018-05-26 19:27:42',NULL),(27,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,22,0,'2018-05-26 19:28:07',NULL),(28,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,23,0,'2018-05-26 19:28:54',NULL),(29,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,24,0,'2018-05-26 19:29:01',NULL),(30,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,25,0,'2018-05-26 19:29:10',NULL),(31,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,26,0,'2018-05-26 19:29:13',NULL),(32,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,29,0,'2018-05-26 19:32:58',NULL),(33,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 19:33:24',NULL),(34,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 19:33:55',NULL),(35,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,30,0,'2018-05-26 19:35:05',NULL),(36,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 19:35:18',NULL),(37,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 19:35:42',NULL),(38,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,31,0,'2018-05-26 19:35:55',NULL),(39,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,32,0,'2018-05-26 19:41:25',NULL),(40,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,33,0,'2018-05-26 19:41:29',NULL),(41,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,34,0,'2018-05-26 19:44:53',NULL),(42,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,35,0,'2018-05-26 19:45:03',NULL),(43,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,36,0,'2018-05-26 19:52:04',NULL),(44,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 20:01:16',NULL),(45,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 20:02:43',NULL),(46,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 20:04:39',NULL),(47,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 20:04:59',NULL),(48,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 20:06:07',NULL),(49,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 20:07:37',NULL),(50,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 20:08:20',NULL),(51,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,41,0,'2018-05-26 20:10:47',NULL),(52,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,42,0,'2018-05-26 20:13:51',NULL),(53,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,43,0,'2018-05-26 20:14:19',NULL),(54,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,44,0,'2018-05-26 20:15:32',NULL),(55,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,45,0,'2018-05-26 20:15:52',NULL),(56,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,46,0,'2018-05-26 20:16:27',NULL),(57,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 20:17:57',NULL),(58,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,47,0,'2018-05-26 20:18:45',NULL),(59,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,48,0,'2018-05-26 20:18:47',NULL),(60,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 20:20:09',NULL),(61,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 20:20:57',NULL),(62,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,49,0,'2018-05-26 20:21:47',NULL),(63,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 20:24:08',NULL),(64,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,28,0,'2018-05-26 20:25:56',NULL),(65,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,50,0,'2018-05-26 20:35:20',NULL),(66,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,51,0,'2018-05-26 20:37:03',NULL),(67,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,52,0,'2018-05-26 20:37:40',NULL),(68,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,53,0,'2018-05-26 20:44:34',NULL),(69,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,54,0,'2018-05-26 20:45:18',NULL),(70,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,55,0,'2018-05-26 20:55:12',NULL),(71,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,56,0,'2018-05-26 20:55:25',NULL),(72,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,57,0,'2018-05-26 20:56:30',NULL),(73,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,58,0,'2018-05-26 20:56:44',NULL),(74,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,59,0,'2018-05-26 21:01:02',NULL),(75,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,60,0,'2018-05-26 21:01:54',NULL),(76,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,61,0,'2018-05-26 21:04:59',NULL),(77,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,62,0,'2018-05-26 21:05:11',NULL),(78,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,63,0,'2018-05-26 21:05:32',NULL),(79,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,64,0,'2018-05-26 21:05:45',NULL),(80,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,65,0,'2018-05-26 21:05:47',NULL),(81,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,66,0,'2018-05-26 21:05:48',NULL),(82,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,67,0,'2018-05-26 21:05:49',NULL),(83,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,68,0,'2018-05-26 21:06:18',NULL),(84,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,69,0,'2018-05-26 21:08:19',NULL),(85,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,70,0,'2018-05-26 21:17:00',NULL),(86,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,71,0,'2018-05-26 21:24:07',NULL),(87,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,72,0,'2018-05-26 21:45:01',NULL),(88,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,73,0,'2018-05-26 21:46:06',NULL),(89,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,74,0,'2018-05-26 21:46:35',NULL),(90,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,75,0,'2018-05-26 21:48:11',NULL),(91,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,77,0,'2018-05-27 01:44:53',NULL),(92,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,78,0,'2018-05-27 01:44:56',NULL),(93,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,79,0,'2018-05-27 02:02:18',NULL),(94,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,80,0,'2018-05-27 02:02:20',NULL),(95,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,81,0,'2018-05-27 02:02:37',NULL),(96,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,82,0,'2018-05-27 02:03:19',NULL),(97,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,83,0,'2018-05-27 02:03:52',NULL),(98,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,84,0,'2018-05-27 02:04:30',NULL),(99,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,85,0,'2018-05-27 02:11:43',NULL),(100,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,4,0,'2018-05-27 14:51:28',NULL),(101,'Audi A5','Flinders Street Station','1111-11-11 01:01:00',1,4,0,'2018-05-27 14:52:03',NULL),(102,'Audi A5','Flinders Street Station','2020-12-31 01:02:00',1,86,0,'2018-05-27 15:06:29',NULL),(103,'Audi A5','Flinders Street Station','2018-05-27 09:24:00',1,88,0,'2018-05-27 19:21:29',NULL),(104,'Audi A5','Watergardens Station','2018-05-27 09:31:00',4,88,0,'2018-05-27 19:26:50',NULL);
/*!40000 ALTER TABLE `CarBookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `Available` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'Audi A5','Flinders Street Station',-37.81827,144.96706,0,NULL,'2018-05-27 19:26:32'),(2,'BMW X2','Southern Cross Station',-37.81828,144.95278,0,NULL,'2018-05-18 17:01:35'),(3,'Mercedes AMG CG3','Richmond Station',-37.8248,144.99093,1,NULL,'2018-05-08 12:50:03'),(4,'Audi A5','Watergardens Station',-37.70118,144.77447,0,NULL,'2018-05-27 19:27:03'),(5,'BMW X2','Sunshine Station',-37.78722,144.83276,1,NULL,'2018-05-07 21:12:09'),(6,'Mercedes AMG CG3','Footscray Station',-37.80097,144.90246,1,NULL,'2018-05-05 20:16:55'),(7,'Audi A5','Jolimont Station',-37.81634,144.98482,0,NULL,NULL),(8,'BMW X2','Aspendale Station',-38.02683,145.10241,0,NULL,NULL),(9,'Mercedes AMG CG3','Mordialloc Station',-38.00586,145.08755,0,NULL,NULL),(10,'Audi A5','Williamstown Station',-37.86765,144.90535,0,NULL,NULL),(11,'BMW X2','Altona Station',-37.86733,144.83007,0,NULL,NULL),(12,'Mercedes AMG CG3','Werribee Station',-37.89858,144.66121,0,NULL,NULL),(13,'Audi A5','South Yarra Station',-37.83905,144.99212,0,NULL,NULL),(14,'BMW X2','Rod Laver Arena',-37.8195,144.97883,0,NULL,NULL),(15,'Mercedes AMG CG3','Brighton Beach Station',-37.92776,144.99054,0,NULL,NULL),(16,'Audi A5','Prahan Station',-37.85132,144.98973,0,NULL,NULL),(17,'BMW X2','Malvern Station',-37.86432,145.0281,0,NULL,NULL),(18,'Mercedes AMG CG3','Caulfield Station',-37.87644,145.04183,0,NULL,NULL),(19,'Audi A5','Essendon Station',-37.75588,144.91658,0,NULL,NULL),(20,'BMW X2','Monnee Ponds Station',-37.76601,144.91917,0,NULL,NULL),(21,'Mercedes AMG CG3','Kensington Station',-37.79389,144.93071,0,NULL,NULL),(22,'Audi A5','Lygon Street',-37.79961,144.96718,0,NULL,NULL),(23,'BMW X2','RMIT University',-37.80782,144.96294,0,NULL,NULL),(24,'Mercedes AMG CG3','Station Pier',-37.84264,144.9318,0,NULL,NULL),(25,'Audi A5','Melbourne Airport',-37.66974,144.84881,1,NULL,'2018-05-09 16:54:47'),(26,'BMW X2','Highpoint Shopping Centre',-37.77325,144.8822,0,NULL,NULL),(27,'Mercedes AMG CG3','Preston Station',-37.73778,145.00143,0,NULL,NULL),(28,'Audi A5','Clayton Station',-37.92447,145.12011,0,NULL,NULL),(29,'BMW X2','Heidelberg Station',-37.75727,145.06136,0,NULL,NULL),(30,'Mercedes AMG CG3','Etihad Stadium',-37.81456,144.94658,0,NULL,NULL),(31,'Audi A5','North Melbourne Station',-37.80681,144.94264,0,NULL,NULL),(32,'BMW X2','AAMI Park',-37.82414,144.98686,0,NULL,NULL),(33,'Mercedes AMG CG3','Sunbury Station',-37.57742,144.72607,1,'2018-05-19 19:51:14','2018-05-19 20:12:56'),(34,'Mercedes AMG CG3','Glen Waverly Station',-37.87954,145.16259,1,'2018-05-21 16:10:12','2018-05-21 16:10:12'),(43,'Audi A5','Hawthorn Station',-37.82129,145.02458,1,NULL,NULL),(44,'BMW X2','Station Street',-37.77147,145.01939,1,NULL,NULL),(57,'Mercedes AMG CG3','The Royal Melbourne Hospital',-37.79941,144.95563,1,'2018-05-26 21:30:24','2018-05-26 21:30:24'),(58,'Audi A5','The Alfred Hospital',-37.84512,144.9817,1,'2018-05-26 21:31:18','2018-05-26 21:31:18'),(59,'BMW X2','St Vincent\'s Hospital',-37.80809,144.97254,1,'2018-05-26 21:31:57','2018-05-26 21:31:57'),(60,'Audi A5','South Melbourne Market',-37.83188,144.95714,1,NULL,'2018-05-26 21:33:36'),(61,'Mercedes AMG CG3','Collins Street',-37.81622,144.96407,1,'2018-05-26 21:33:06','2018-05-26 21:33:06'),(62,'BMW X2','Melbourne Sports & Aquatic Centre',-37.84058,144.96146,1,'2018-05-26 21:34:08','2018-05-26 21:34:08'),(63,'Mercedes AMG CG3','Luna Park',-37.86702,144.97695,1,'2018-05-26 21:34:33','2018-05-26 21:34:33'),(64,'Audi A5','Federation Square',-37.81826,144.96775,1,'2018-05-26 21:35:21','2018-05-26 21:35:21'),(65,'BMW X2','Eureka Skydeck 88',-37.82125,144.96471,1,'2018-05-26 21:35:56','2018-05-26 21:35:56'),(66,'Mercedes AMG CG3','National Gallery of Victoria',-37.82257,144.96896,1,'2018-05-26 21:36:20','2018-05-26 21:36:20'),(67,'BMW X2','Royal Botanic Gardens',-37.82986,144.9753,1,'2018-05-26 21:36:44','2018-05-26 21:36:44'),(68,'Audi A5','Shrine of Remembrance',-37.82983,144.97432,1,'2018-05-26 21:37:08','2018-05-26 21:37:08'),(69,'BMW X2','Melbourne Aquarium',-37.82023,144.95805,1,'2018-05-26 21:37:40','2018-05-26 21:37:40'),(70,'Audi A5','Flagstaff Station',-37.81172,144.95611,1,'2018-05-26 21:38:15','2018-05-26 21:38:15'),(71,'Mercedes AMG CG3','Parliament Station',-37.81228,144.97431,1,'2018-05-26 21:38:40','2018-05-26 21:38:40'),(72,'BMW X2','St Patrick\'s Cathedral',-37.81007,144.97643,1,'2018-05-26 21:39:06','2018-05-26 21:39:06'),(73,'Audi A5','Melbourne Central',-37.81157,144.96503,1,'2018-05-26 21:40:25','2018-05-26 21:40:25'),(74,'BMW X2','Melbourne Airport',-37.66974,144.84881,1,'2018-05-26 21:41:20','2018-05-26 21:41:20'),(75,'Mercedes AMG CG3','Melbourne Star',-37.81107,144.93688,1,'2018-05-26 21:42:05','2018-05-26 21:42:05'),(76,'Audi A5','Melbourne Cricket Ground',-37.81994,144.98345,1,'2018-05-26 21:43:55','2018-05-26 21:43:55'),(79,'Mercedes AMG CG3','Melbourne Showgrounds',-37.7803,144.91482,1,'2018-05-26 21:45:13','2018-05-26 21:45:13'),(81,'Audi A5','Melbourne Zoo',-37.78331,144.95478,1,'2018-05-26 21:46:21','2018-05-26 21:46:21'),(83,'BMW X2','Collingwood Station',-37.80444,144.99364,1,'2018-05-26 21:46:37','2018-05-26 21:46:37'),(84,'Mercedes AMG CG3','Melbourne Museum',-37.80597,144.97356,1,'2018-05-26 21:47:35','2018-05-26 21:47:35'),(85,'Audi A5','Royal Exhibition Building',-37.80456,144.97165,1,'2018-05-26 21:47:56','2018-05-27 19:07:20');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locationName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'RMIT University',NULL,NULL),(2,'Flinders Station',NULL,NULL),(3,'Southern Cross Station',NULL,NULL);
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_03_18_035310_create_cars_table',1),(5,'2018_03_26_101438_create_locations_table',2),(6,'2018_04_05_005324_create_bookings_table',3),(7,'2018_04_05_025501_create_table__car_bookings',4),(8,'2018_04_05_051229_add_returned_to__car_bookings',5),(9,'2018_04_05_052248_drop_table_bookings',6),(10,'2018_04_05_054419_drop_table__car_booking',7),(11,'2018_04_05_054906_create_table_cars',8),(12,'2018_04_05_060402_create_table__car_bookings',9),(13,'2018_04_27_090526_create_table_car_bookings',10),(14,'2018_04_27_101345_create_table_car_bookings',11),(15,'2018_04_27_101952_create_table_car_bookings',12),(16,'2018_05_01_063306_create_sessions_table',13);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('s3546818@student.rmit.edu.au','$2y$10$PbfO03J/Grxd98mia6xfN.9P3W0ufgfGQ/d1ssgpA0tZOFot7uASe','2018-04-22 01:06:15'),('aprilrose.canete93@gmail.com','$2y$10$DSTMLekUhOYqcu1gk2lL.uY2R/H7sI2EyCcllCG0rFHaVzQMzCW.u','2018-05-18 17:04:59');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'April','aprilrose.canete93@gmail.com','$2y$10$tCcivaBLq1.VKFdIGjITO.tOFimQFZzKzIYFeuKw1XYi6Y8f1OyOC','','YVGIrV5QNeH2G4TLpRZdkfWHYadKPAdpWb029nMBQ0HWr6H1Pgaq5o1vE0Gv','2018-03-21 03:39:30','2018-03-21 03:39:30'),(2,'josh','1@live.com','$2y$10$UtPiKLRbYWwosYOPK7VZ1ueOCSZe/cVI.V9wdti5whdj1/e24Z8Ju','','hax5l5ruCbsv32Z5jH0R5S5R1sOTw6GC3YXUVTzHzX7DE9RerwaLCw4zp4G2','2018-03-22 01:44:31','2018-03-22 01:44:31'),(3,'Sarah Pignatelli','s3546818@student.rmit.edu.au','$2y$10$ztIjEYxO5yWEW2fdv49eIertXbO474Kb8sr0DAn2EYpO5/K/GPOaq','','qqJvDfJDrS5H8cUegMItb3ZzEN4TzlqiacnpA6lQPnDgWCR2UjXM5oNG28r0','2018-03-23 01:25:54','2018-03-23 01:25:54'),(4,'Test Name','name.test@gmail.com','$2y$10$e832/8SWJi1qm8dNk7IP6evzgKHbXdYnYXN5PiOhuK3XKQMTilDwW','','8cPHqWrAkg7nP1wnBOvoYY4ttA3HRJCXzzBHjDKTk563QgfmOMTWjmIhdUzt','2018-03-26 10:25:45','2018-03-26 10:25:45'),(5,'Mobiletest','mobiletest@gmail.com','$2y$10$sulMaMvUFwplM6dbX0AMlecxEu3sCbiIb8f10r9t.51v4Ub1qRT52','','VvQjS1xrPv4lPNzmTLBIwf85rAmGYymdizHpvqskroSINyTeqO5huamhUXLD','2018-04-22 05:02:47','2018-04-22 05:02:47'),(6,'bob','bob@live.com','$2y$10$fiZC6mpKq9vLGdTVqUfsY.O.XLy/Kpu40OnWw9M0n8sm01E0ZX3X.','',NULL,'2018-05-07 18:22:21','2018-05-07 18:22:21'),(7,'April','heylie428.ac@gmail.com','$2y$10$/yIcM6u/cPjnhb4b6M8UWeiCIANnMsQkLcrFt9rQlsr/h3LtF0nk2','',NULL,'2018-05-09 16:47:12','2018-05-09 16:47:12'),(9,'test','test@test.com','$2y$10$VP/NglbZCz0z9LqBpITIxepOw4Csft4TTV0VAKqbEtWjHx6IPpnzy','default','0rC4M2OEnJi6uqpOop6BajZ32xlJ2LTjG4tHKrDVLxIoN0vT2aStkLXM3fuM','2018-05-21 21:04:47','2018-05-21 21:04:47'),(27,'Admin','sarah@admin.com','$2y$10$R7OH1HP5UtN8ECNfe5I5/.0q8./94XK2d57WJkwMkqAJAhPFSJLs.','admin','BD4yECSx4iANitVyt2TERXKM3k1upyDPCGOsCcNeoaeBv0VWU6bT9xhE0Gds','2018-05-26 19:30:14','2018-05-26 19:30:14'),(28,'Admin','admin@admin.com','$2y$10$xCl8MTLOAUdD5w8dWk6Hw./oWgnzsFS0QQkNojBwIaJQ7EIsXgbl2','admin','UcCmb3I4nRa295Jm6LSWLJ1kFRmqDNYEj9ZVIRcbV1AHdN34k6lCuepj69rR','2018-05-26 19:31:45','2018-05-26 19:31:45'),(86,'LOGIN TEST','qwerty@uiop.com','$2y$04$UbfWsPxE22G8oZlSL7l4LuSvRIapNpcNqsocJLmKP.SkMeLMK.Ef6','default',NULL,'2018-05-27 15:06:29','2018-05-27 15:06:29'),(87,'jim','josh@admin.com','$2y$10$.Fu1n.KQXuIDq5VcRCXomufehc24vePySz4muH8CYQ59eXdS7EC8i','default','Xik7OX2ribiPXa8gGD1d0EMAg6EOJTiPKT2Wvc87zeoZDREyW4zTovQJ7RKM','2018-05-27 19:17:40','2018-05-27 19:17:40'),(88,'josh','josh@josh.com','$2y$10$bOkcW/tQUhKlKrBhr64l1OtJW/45DGf4HEDaYIPA.1eo.gVMwfD3y','default','VMf6FBUhA5u1zz1lYI42wbvlZ8rEGCeXQvI4wJQjLDor0eDR4s19iqccmPlr','2018-05-27 19:21:09','2018-05-27 19:21:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-27 12:32:40
