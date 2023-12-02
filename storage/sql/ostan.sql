-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: irangeo3
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `ostan`
--

DROP TABLE IF EXISTS `ostan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ostan` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `amar_code` varchar(50) DEFAULT NULL,
    PRIMARY KEY (`id`),
    FULLTEXT KEY `name_txt` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ostan`
--

/*!40000 ALTER TABLE `ostan` DISABLE KEYS */;
INSERT INTO `ostan` VALUES (1,'آذربایجان شرقی','3');
INSERT INTO `ostan` VALUES (2,'آذربایجان غربی','4');
INSERT INTO `ostan` VALUES (3,'اردبیل','24');
INSERT INTO `ostan` VALUES (4,'اصفهان','10');
INSERT INTO `ostan` VALUES (5,'البرز','30');
INSERT INTO `ostan` VALUES (6,'ایلام','16');
INSERT INTO `ostan` VALUES (7,'بوشهر','18');
INSERT INTO `ostan` VALUES (8,'تهران','23');
INSERT INTO `ostan` VALUES (9,'چهارمحال وبختیاری','14');
INSERT INTO `ostan` VALUES (10,'خراسان جنوبی','29');
INSERT INTO `ostan` VALUES (11,'خراسان رضوی','9');
INSERT INTO `ostan` VALUES (12,'خراسان شمالی','28');
INSERT INTO `ostan` VALUES (13,'خوزستان','6');
INSERT INTO `ostan` VALUES (14,'زنجان','19');
INSERT INTO `ostan` VALUES (15,'سمنان','20');
INSERT INTO `ostan` VALUES (16,'سیستان وبلوچستان','11');
INSERT INTO `ostan` VALUES (17,'فارس','7');
INSERT INTO `ostan` VALUES (18,'قزوین','26');
INSERT INTO `ostan` VALUES (19,'قم','25');
INSERT INTO `ostan` VALUES (20,'کردستان','12');
INSERT INTO `ostan` VALUES (21,'کرمان','8');
INSERT INTO `ostan` VALUES (22,'کرمانشاه','5');
INSERT INTO `ostan` VALUES (23,'کهگیلویه وبویراحمد','17');
INSERT INTO `ostan` VALUES (24,'گلستان','27');
INSERT INTO `ostan` VALUES (25,'گیلان','1');
INSERT INTO `ostan` VALUES (26,'لرستان','15');
INSERT INTO `ostan` VALUES (27,'مازندران','2');
INSERT INTO `ostan` VALUES (28,'مرکزی','0');
INSERT INTO `ostan` VALUES (29,'هرمزگان','22');
INSERT INTO `ostan` VALUES (30,'همدان','13');
INSERT INTO `ostan` VALUES (31,'یزد','21');
/*!40000 ALTER TABLE `ostan` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-21 20:34:49
