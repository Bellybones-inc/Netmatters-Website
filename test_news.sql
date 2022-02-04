-- MySQL dump 10.13  Distrib 8.0.16, for macos10.14 (x86_64)
--
-- Host: localhost    Database: test
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
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `news` (
  `title` char(100) NOT NULL,
  `image` varchar(60) NOT NULL,
  `description` char(200) NOT NULL,
  `person` char(50) NOT NULL,
  `date` varchar(45) NOT NULL,
  `profile image` varchar(45) NOT NULL,
  PRIMARY KEY (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES ('Digital Marketing Consultant','/img/now-hiring-2.jpeg','Salary Range £25k+ per annum + Bonus +\n                                Benefits Hours 40 hours per week,\n                                Monday – Friday Location Wy...','Lydia Whitney','29/07/2021','/img/lydia-whitney.jpeg'),('IT Project Manager','/img/now-hiring-3.jpeg','Salary Range £20k-£23k + Bonuses Hours 40 hours per week, Monday – Friday (Core hours are 8-5 until...','Netmatters Ltd','20/01/2022','/img/netmatters-mini.png'),('Project Manager','/img/now-hiring-1.jpeg','Salary Range £24k-£30k + Bonuses +\n                                Pension Hours 40 hours per week,\n                                Monday - Friday Location Wymondh...','Tom Lancaster','28/07/2021','/img/tom-lancaster.jpeg'),('SCS Graduates January 2022','/img/now-hiring-2.jpeg','Our SCS scheme here at Netmatters was initially designed to bridge the ever-growing gap in the tech...','Lydia Whitney','27/01/2022','/img/lydia-whitney.jpeg'),('Which Is Best For You? Mailchimp vs Klaviyo','/img/now-hiring-3.jpeg','When it comes to digital activity, there is no doubt within the industry that email marketing is one...','Netmatters Ltd','21/01/2022','/img/netmatters-mini.png'),('Why Shopify Is The Ecommerce Platform f...','/img/now-hiring-1.jpeg','Shopify is an all-in-one eCommerce platform\n                                to start, run and grow a business. It currently powers o...','Tom Lancaster','20/07/2021','/img/tom-lancaster.jpeg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
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
