-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: mhwxr
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `post_comments`
--

DROP TABLE IF EXISTS `post_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_comments` (
  `post_id` bigint(20) NOT NULL,
  `content` mediumtext NOT NULL,
  `uid` bigint(20) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_comments`
--

LOCK TABLES `post_comments` WRITE;
/*!40000 ALTER TABLE `post_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `province` varchar(24) NOT NULL,
  `city` varchar(24) NOT NULL,
  `birthday` datetime NOT NULL,
  `gender` bit(1) NOT NULL,
  `description` mediumtext NOT NULL,
  `task` varchar(50) NOT NULL,
  `rewards` float NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL,
  `creator` bigint(20) NOT NULL,
  `duration` varchar(45) NOT NULL,
  `imgurl` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (27,'aa','安徽','安徽','1982-01-01 00:00:00','','222','查QQ',100,'2014-09-14 16:02:27','',0,'1','/uploads/5415bc137209a.'),(362,'bb','安徽','安徽','1982-01-01 00:00:00','','222','查QQ',100,'2014-09-14 16:03:41','',0,'1','/uploads/5415bc5dc16a0.'),(6817,'cc','安徽','安徽','1982-01-01 00:00:00','','222','查QQ',100,'2014-09-14 16:03:48','',0,'1',NULL),(75266308,'aa','安徽','安徽','1982-01-01 00:00:00','','111','查QQ',100,'0000-00-00 00:00:00','',0,'1','/uploads/5415bba261acc.');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `identity` varchar(25) NOT NULL,
  `province` varchar(24) DEFAULT NULL,
  `city` varchar(24) DEFAULT NULL,
  `birthday` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gender` bit(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `description` text,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `idpic1` mediumtext,
  `idpic2` mediumtext,
  `register_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`email`,`identity`,`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (0,'aaa','aaa','aaa','aaa','aaa','aaa','2014-09-13 17:00:27','\0','aaa',NULL,'ä½ æœ€å–œæ¬¢çš„æ˜Žæ˜Ÿæ˜¯è°?','aaa',NULL,NULL,'0000-00-00 00:00:00',''),(244,'123','123123','123123','1231','123123','123','2014-09-13 17:16:58','\0','123123',NULL,'','111',NULL,NULL,'0000-00-00 00:00:00',''),(329,'aaa','aaa','11','1231','11','11','2014-09-14 09:41:04','\0','47bce5c74f589f4867dbd57e9ca9f808',NULL,'ä½ æœ€å–œæ¬¢çš„æ˜Žæ˜Ÿæ˜¯è°?','111',NULL,NULL,'0000-00-00 00:00:00',''),(494,'aa','asdf','123','123','123','123','2014-09-13 17:14:08','\0','123',NULL,'','123',NULL,NULL,'0000-00-00 00:00:00',''),(32490,'aaa','aaa','aaa','aaa','aaa','aaa','2014-09-13 17:13:26','\0','aaa',NULL,'ä½ æœ€å–œæ¬¢çš„æ˜Žæ˜Ÿæ˜¯è°?','aaa',NULL,NULL,'0000-00-00 00:00:00',''),(94685,'123','bbb','bb','bbb','bbb','bb','2014-09-13 17:17:09','\0','bb',NULL,'ä½ æœ€å–œæ¬¢çš„æ˜Žæ˜Ÿæ˜¯è°?','bb',NULL,NULL,'0000-00-00 00:00:00','');
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

-- Dump completed on 2014-09-15  0:34:00