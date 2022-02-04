-- MySQL dump 10.13  Distrib 8.0.16, for macos10.14 (x86_64)
--
-- Host: localhost    Database: email_upload
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `contact_form` (
  `name` char(50) NOT NULL,
  `company` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_form`
--

LOCK TABLES `contact_form` WRITE;
/*!40000 ALTER TABLE `contact_form` DISABLE KEYS */;
INSERT INTO `contact_form` VALUES ('','','','','',''),('Bob Dylan','Grateful Company','bob@aol.com','07785634212','Just another test','test'),('Bob Gibson','Bellybones inc','bob@gmail.com','+441844214849','Just another test','Just go home'),('Bob Weir','Grateful Company','weir@aol.com','07774532412','Test','Just checking in. '),('Christina Rose','Florist','rose@gmail.com','01844653278','Just another test','Test.'),('Craig','craiginc','craig@aol.com','+441844214849','Just another test','Test'),('Geoff','Bellybones inc','wilbersears@gmail.com','+441844214849','Fifi fee thumb','Hi there'),('Henry','craiginc','craig@aol.com','+441844214849','674838543£££$$','Test'),('Jorge Jones','Crew clothing','funkydude@aol.com','0995637298','This is a test again','Hi there,\r\n\r\nI hope that this finds you well.\r\n\r\nRegards,\r\n\r\nJorge'),('Lucy Hilton','Bellybones inc','wilbersears@gmail.com','+441844214849','Just another test','test'),('Patricia','Bellybones inc','wilbersears@gmail.com','+441844214849','Just another test','test'),('Paul Brady','Folk inc','brady@aol.com','07765436427','Just another test','test'),('Pete Gilford','Gilfords','gilford@hotmail.com','0777832345','Just another test','test'),('Peter Davidson','Actors ','davidson@gmail.com','077765467342','Just another test','Test.'),('Sue Sears','Sue inc','wilbersears@gmail.com','+441844214849','Just another test','Test'),('Wilber Sears','Bellybones inc','wilbersears@gmail.com','+441844214849','Test','Hi there, perhaps this will work?'),('will Sears','Bellybones inc','wilbersears@gmail.com','+441844214849','test','www'),('William Sears','Bellybones inc','wilbersears@gmail.com','+441844214849','Just another test','test');
/*!40000 ALTER TABLE `contact_form` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-04 14:36:37
