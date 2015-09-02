CREATE DATABASE  IF NOT EXISTS `ecommers_one` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ecommers_one`;
-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: ecommers_one
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (2,'Cloth','2015-09-02 00:58:58','2015-09-02 08:55:47'),(5,'Shoes','2015-09-02 01:43:28','2015-09-02 01:43:28'),(6,'Ayakgap','2015-09-02 01:47:55','2015-09-02 01:47:55'),(7,'Koshek','2015-09-02 01:48:07','2015-09-02 01:48:07');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` longtext,
  `price` decimal(10,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (6,'Yelp','Yolla yolla',0.01,NULL,NULL,'2015-09-01 22:12:46','2015-09-01 22:56:37'),(7,'Towshan','Towhanwww ',1.00,NULL,NULL,'2015-09-01 22:57:12','2015-09-01 22:57:12'),(9,'addme','aaddme',222.00,NULL,NULL,'2015-09-01 23:12:41','2015-09-01 23:12:41'),(10,'addme','ddddd ad',23.00,14,NULL,'2015-09-01 23:14:04','2015-09-01 23:14:04'),(11,'addme','22222',25.00,1,NULL,'2015-09-01 23:14:37','2015-09-02 00:48:56'),(12,'New one','that new update with category',12.00,14,NULL,'2015-09-02 09:09:59','2015-09-02 09:09:59'),(13,'New one','that new update with category',9.00,14,7,'2015-09-02 09:12:23','2015-09-02 10:27:57'),(14,'Tomato','ttt',13.00,14,0,'2015-09-02 09:13:08','2015-09-02 10:26:57');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'www','www','wow@wow.com','2015-09-01 19:40:10','2015-09-01 19:40:10'),(2,NULL,NULL,NULL,'2015-09-01 19:40:47','2015-09-01 19:40:47'),(3,'www','www','wow@wow.com','2015-09-01 19:40:58','2015-09-01 19:40:58'),(4,NULL,NULL,NULL,'2015-09-01 19:41:03','2015-09-01 19:41:03'),(5,NULL,NULL,NULL,'2015-09-01 19:45:02','2015-09-01 19:45:02'),(6,'rrr','rrr','rgurdov@gmail.com','2015-09-01 19:46:14','2015-09-01 19:46:14'),(7,NULL,NULL,NULL,'2015-09-01 19:46:42','2015-09-01 19:46:42'),(8,NULL,NULL,NULL,'2015-09-01 19:46:43','2015-09-01 19:46:43'),(9,NULL,NULL,NULL,'2015-09-01 19:47:00','2015-09-01 19:47:00'),(10,NULL,NULL,NULL,'2015-09-01 19:47:12','2015-09-01 19:47:12'),(11,'w1','w1','wow@wow1.com','2015-09-01 19:47:32','2015-09-01 19:47:32'),(12,NULL,'dsa','wow@wow.com','2015-09-01 20:08:06','2015-09-01 20:08:06'),(13,NULL,'dsadas','wow@wow.com','2015-09-01 20:08:25','2015-09-01 20:08:25'),(14,'r','r','rr@ggg.com','2015-09-01 20:16:48','2015-09-01 20:16:48'),(15,'r','r','rr@ggg.com','2015-09-01 20:17:05','2015-09-01 20:17:05'),(16,'r','r','rgurdov@gmail.com','2015-09-01 20:27:26','2015-09-01 20:27:26'),(17,'w','w','wow@wow2.com','2015-09-01 20:29:24','2015-09-01 20:29:24');
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

-- Dump completed on 2015-09-02 10:47:56
