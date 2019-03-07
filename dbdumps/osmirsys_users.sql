-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: osmirsys
-- ------------------------------------------------------
-- Server version	5.7.25

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `status_id` tinyint(3) unsigned NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `created_by` int(11) unsigned NOT NULL,
  `updated_by` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `salt_UNIQUE` (`salt`),
  UNIQUE KEY `first_name_last_name` (`first_name`,`last_name`),
  KEY `fk_users_status_id_idx` (`status_id`),
  KEY `fk_users_created_by_idx` (`created_by`),
  KEY `fk_users_updated_by_idx` (`updated_by`),
  CONSTRAINT `fk_users_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_users_status_id` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_users_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','4c6b216322baceefe18674196bf6cb079b4acc162a281f00e0625f09ce4c5ab1','d3AINYEfsn','System','Administrator','2019-03-07 06:47:38',1,'2019-03-07 11:06:00',NULL,1,NULL),(2,'nalopez','1b3c6291494dfa732d33331df626f458de675ccd23e0a619d5283b8f9ccbe447','Sn4RDrMFOH','Nicole Anne','Lopez','2019-03-07 03:35:05',1,'2019-03-06 11:12:00',NULL,1,NULL),(3,'elopez','b10e87d3b0ab9081d6510cb46aed979236b1b8e3b8bb824db8315ff718ad54ac','gmTKfHlp9T','Esperanza','Lopez','2019-03-07 03:35:33',1,'2019-03-06 18:08:00',NULL,1,NULL),(4,'rlopez','15de9f51b197478e62066ca612019eb846c242044edb2a20d69b570879bdba98','Jn9Nd4EYqu','Reynaldo','Lopez',NULL,1,'2019-03-07 03:38:51',NULL,3,NULL),(5,'odizon','ace4da0d3746f6f03aa13a4b5bf3027bb37dc3939e433ec12fe9004a7db577ff','a5QI3TqfRF','Oscar','Dizon',NULL,1,'2019-03-07 06:36:44',NULL,3,NULL);
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

-- Dump completed on 2019-03-07 15:07:48
