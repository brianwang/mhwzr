-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: mhwxr
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_apply`
--

DROP TABLE IF EXISTS `post_apply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postid` bigint(20) DEFAULT NULL,
  `apply_uid` int(11) DEFAULT NULL,
  `apply_username` varchar(45) DEFAULT NULL,
  `apply_time` timestamp NULL DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_apply`
--

LOCK TABLES `post_apply` WRITE;
/*!40000 ALTER TABLE `post_apply` DISABLE KEYS */;
INSERT INTO `post_apply` VALUES (2,2795,244,'666666','2014-11-14 16:29:27','申请中'),(3,508,244,'666666','2014-11-18 15:09:41','申请中'),(4,3453,244,'666666','2014-11-18 16:14:03','拒绝申请'),(5,826860,244,'666666','2014-11-18 16:16:46','申请中'),(6,11155,244,'666666','2014-11-21 15:16:31','申请中'),(7,3453,61429,'aaa','2014-11-21 15:16:51','申请成功');
/*!40000 ALTER TABLE `post_apply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_comments`
--

DROP TABLE IF EXISTS `post_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) NOT NULL,
  `content` mediumtext NOT NULL,
  `uid` bigint(20) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(45) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_comments`
--

LOCK TABLES `post_comments` WRITE;
/*!40000 ALTER TABLE `post_comments` DISABLE KEYS */;
INSERT INTO `post_comments` VALUES (1,2795,'aaaa',244,'2014-11-18 16:02:20','666666',-1),(2,2795,'bbb',244,'2014-11-18 16:02:25','666666',-1),(3,2795,'asdfdsaf',244,'2014-11-18 16:02:31','666666',1),(4,2795,'adsfdsaf',244,'2014-11-18 16:02:36','666666',1),(5,3453,'test',244,'2014-11-18 16:14:13','666666',-1),(6,3453,'test111',244,'2014-11-18 16:15:01','666666',-1),(7,3453,'这个好。我能申请这个项目',244,'2014-11-18 16:15:44','666666',-1),(8,3453,'特殊他',244,'2014-11-18 16:15:56','666666',5),(9,3453,'爱上地方的',244,'2014-11-18 16:16:03','666666',6),(10,3453,'123123213',244,'2014-11-18 16:16:08','666666',7),(11,3453,'是吗？',244,'2014-11-21 16:06:18','666666',7),(12,3453,'不好了',244,'2014-11-21 16:06:25','666666',6),(13,3453,'你好，我想申请这个项目',244,'2014-11-21 16:06:38','666666',-1),(14,11155,'爱上地方但是',244,'2014-11-21 16:17:05','666666',-1);
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
  `name` varchar(45) DEFAULT NULL,
  `province` varchar(24) DEFAULT NULL,
  `city` varchar(24) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` bit(1) DEFAULT NULL,
  `description` mediumtext NOT NULL,
  `rewards` float DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(50) DEFAULT 'going',
  `creator` varchar(255) NOT NULL,
  `duration` varchar(45) NOT NULL,
  `imgurl` text,
  `type` varchar(45) DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `area` varchar(45) DEFAULT NULL,
  `phone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `posttype` varchar(45) NOT NULL,
  `ispublic` bit(1) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (508,'','北京市','北京市',0,'\0','寻找户口本',0,'2014-11-20 15:32:11','going','0','30',NULL,'公益找人','帮着寻找户口本','东城区','123456','123456@qq.com','t','\0',244),(2304,'re','北京市','北京市',20,'\0','测试i',0,'2014-11-21 14:34:13','进行中','666666','30',NULL,'公益找人','测试寻找人相关信息你','东城区','123123','123123','s','\0',244),(2795,'',NULL,NULL,0,'\0','寻找汽车',0,'2014-11-20 15:32:12','going','666666','50',NULL,'','寻找汽车',NULL,'123123','123123','t','\0',244),(3134,'小明','北京市','北京市',30,'\0','寻找他人',0,'2014-11-21 14:33:08','进行中','666666','30',NULL,'公益找人','寻找他人','东城区','123123','123123','s','\0',244),(3289,'测试寻人','北京市','北京市',30,'\0','测试寻人',0,'2014-11-21 14:33:48','进行中','666666','30',NULL,'公益找人','测试寻人','东城区','123123','123123','s','\0',244),(3453,'test','北京市','北京市',45,'\0','test',0,'2014-11-20 15:32:12','going','666666','50',NULL,'公益找人','test','东城区','123123','123123','s','\0',244),(11155,'徐明','北京市','北京市',32,'\0','他在北京走势',0,'2014-11-20 15:32:12','going','0','30',NULL,'公益找人','寻找徐明','东城区','0371-556555555','123456@qq.com','s','\0',244),(48657,'',NULL,NULL,0,'\0','寻找小明',0,'2014-11-20 15:47:30','','666666','30',NULL,'','寻找小明',NULL,'123123','123123','t','\0',244),(121902,'',NULL,NULL,0,'\0','寻找户口本',0,'2014-11-21 14:34:42','进行中','666666','30',NULL,'','寻找户口本',NULL,'123123','123123','t','\0',244),(826860,'张盆子','河南省','郑州市',25,'\0','他在哪里',5000,'2014-11-20 15:32:12','going','0','30',NULL,'悬赏找人','他在哪里啊','管城回族区','00000000','000000','s','\0',244),(1452742,'小明','天津市','天津市',20,'\0','123123123123',0,'2014-11-20 15:46:52','','666666','30',NULL,'公益找人','寻找小明','河西区','123123','123123','s','\0',244),(1513943,'小白','北京市','北京市',30,'\0','小白在哪里？',0,'2014-11-20 15:32:12','going','666666','30',NULL,'公益找人','小白是个好哈子','东城区','123123','123123','s','',244),(379366713,'',NULL,NULL,0,'\0','寻找小明',0,'2014-11-20 15:48:45','进行中','666666','30',NULL,'','寻找小明',NULL,'123123','123123','t','\0',244);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recharges`
--

DROP TABLE IF EXISTS `recharges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recharges` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `c_time` timestamp NULL DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recharges`
--

LOCK TABLES `recharges` WRITE;
/*!40000 ALTER TABLE `recharges` DISABLE KEYS */;
/*!40000 ALTER TABLE `recharges` ENABLE KEYS */;
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
  `headurl` text,
  PRIMARY KEY (`id`,`email`,`identity`,`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (244,'666666','123123','123123','1231','123123','123','2014-09-13 16:00:00','\0','e10adc3949ba59abbe56e057f20f883e',NULL,'你最喜欢的明星是谁?','111',NULL,NULL,'0000-00-00 00:00:00','',NULL),(494,'aa','asdf','123','123','123','123','2014-09-13 17:14:08','\0','123',NULL,'','123',NULL,NULL,'0000-00-00 00:00:00','',NULL),(1374,'bbb','bbb@bbb.com','','',NULL,NULL,'2014-11-04 14:28:10','\0','08f8e0260c64418510cefb2b06eee5cd',NULL,'你最喜欢的明星是谁?','bbb',NULL,NULL,'0000-00-00 00:00:00','',NULL),(2265,'eee','eee@eee.com','','',NULL,NULL,'2014-11-04 14:44:50','\0','e10adc3949ba59abbe56e057f20f883e',NULL,'你最喜欢的明星是谁?','eee',NULL,NULL,'0000-00-00 00:00:00','',NULL),(7690,'hhh','hhh@hhh.com','','',NULL,NULL,'2014-11-04 14:46:23','\0','a3aca2964e72000eea4c56cb341002a4',NULL,'你最喜欢的明星是谁?','hhh',NULL,NULL,'0000-00-00 00:00:00','',NULL),(13726,'aaa','aa123@qq.com','4','4','3','3','1981-12-31 16:00:00','\0','698d51a19d8a121ce581499d7b701668',NULL,'你最喜欢的明星是谁?','111',NULL,NULL,'0000-00-00 00:00:00','',NULL),(61429,'aaa','aaa@aaa.com','','',NULL,NULL,'2014-10-22 16:07:19','\0','e10adc3949ba59abbe56e057f20f883e',NULL,'你最喜欢的明星是谁?','aaa',NULL,NULL,'0000-00-00 00:00:00','',NULL),(732653,'ccc','ccc@ccc.com','','',NULL,NULL,'2014-11-04 14:40:17','\0','e10adc3949ba59abbe56e057f20f883e',NULL,'你最喜欢的明星是谁?','ccc',NULL,NULL,'0000-00-00 00:00:00','',NULL),(14674275,'ddd','ddd@dd.com','','',NULL,NULL,'2014-11-04 14:44:29','\0','e10adc3949ba59abbe56e057f20f883e',NULL,'你最喜欢的明星是谁?','ddd',NULL,NULL,'0000-00-00 00:00:00','',NULL);
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

-- Dump completed on 2014-11-24  0:08:56
