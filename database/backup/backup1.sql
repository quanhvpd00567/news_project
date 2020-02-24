-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cheeryfame
-- ------------------------------------------------------
-- Server version	8.0.17

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `isDelete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (8,'Sản phẩm','Sản phẩm','sản-phẩm-77640.html',1,'2020-02-22 14:12:24','2020-02-23 02:12:41',NULL,0),(9,'Trái cây','Dried fruits','trai-cay-83283.html',1,'2020-02-22 16:48:42','2020-02-23 02:12:02',8,1),(10,'Về Cheer Farm','Cheer Farm','về-cheer-farm-6394.html',1,'2020-02-22 17:28:16','2020-02-23 02:13:08',NULL,1),(11,'Mứt','Jam','mứt-30943.html',1,'2020-02-23 01:56:35','2020-02-23 02:12:11',10,0);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_page`
--

DROP TABLE IF EXISTS `home_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `home_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text_block_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_block_1_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_block_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_block_2_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_block_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isShowBlock_2` tinyint(4) NOT NULL,
  `text_block_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_block_3_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_block_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isShowBlock_3` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content_block_2_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_block_3_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_page`
--

LOCK TABLES `home_page` WRITE;
/*!40000 ALTER TABLE `home_page` DISABLE KEYS */;
INSERT INTO `home_page` VALUES (1,'Nội dung 1:1','Nội dung 1 (Tiếng anh):','<p>&nbsp;</p>\r\n\r\n<p>Giới thiệu:</p>\r\n\r\n<p><a href=\"javascript:void(\'%C4%90%E1%BA%ADm\')\" id=\"cke_36\" onclick=\"CKEDITOR.tools.callFunction(4,this);return false;\" tabindex=\"-1\" title=\"Đậm (Ctrl+B)\">&nbsp;</a><a href=\"javascript:void(\'Nghi%C3%AAng\')\" id=\"cke_37\" onclick=\"CKEDITOR.tools.callFunction(7,this);return false;\" tabindex=\"-1\" title=\"Nghiêng (Ctrl+I)\">&nbsp;</a><a href=\"javascript:void(\'G%E1%BA%A1ch ch%C3%A2n\')\" id=\"cke_38\" onclick=\"CKEDITOR.tools.callFunction(10,this);return false;\" tabindex=\"-1\" title=\"Gạch chân (Ctrl+U)\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u ch%E1%BB%AF\')\" id=\"cke_40\" onclick=\"CKEDITOR.tools.callFunction(13,this);return false;\" tabindex=\"-1\" title=\"Màu chữ\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u n%E1%BB%81n\')\" id=\"cke_41\" onclick=\"CKEDITOR.tools.callFunction(16,this);return false;\" tabindex=\"-1\" title=\"Màu nền\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa li%C3%AAn k%E1%BA%BFt\')\" id=\"cke_43\" onclick=\"CKEDITOR.tools.callFunction(19,this);return false;\" tabindex=\"-1\" title=\"Chèn/Sửa liên kết (Ctrl+K)\">&nbsp;</a><a href=\"javascript:void(\'Xo%C3%A1 li%C3%AAn k%E1%BA%BFt\')\" id=\"cke_44\" onclick=\"CKEDITOR.tools.callFunction(22,this);return false;\" tabindex=\"-1\" title=\"Xoá liên kết\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa %C4%91i%E1%BB%83m neo\')\" id=\"cke_45\" onclick=\"CKEDITOR.tools.callFunction(25,this);return false;\" tabindex=\"-1\" title=\"Chèn/Sửa điểm neo\">&nbsp;</a></p>','<p>&nbsp;</p>\r\n\r\n<p>Giới thiệu&nbsp;(Tiếng anh):</p>\r\n\r\n<p><a href=\"javascript:void(\'%C4%90%E1%BA%ADm\')\" id=\"cke_66\" onclick=\"CKEDITOR.tools.callFunction(33,this);return false;\" tabindex=\"-1\" title=\"Đậm (Ctrl+B)\">&nbsp;</a><a href=\"javascript:void(\'Nghi%C3%AAng\')\" id=\"cke_67\" onclick=\"CKEDITOR.tools.callFunction(36,this);return false;\" tabindex=\"-1\" title=\"Nghiêng (Ctrl+I)\">&nbsp;</a><a href=\"javascript:void(\'G%E1%BA%A1ch ch%C3%A2n\')\" id=\"cke_68\" onclick=\"CKEDITOR.tools.callFunction(39,this);return false;\" tabindex=\"-1\" title=\"Gạch chân (Ctrl+U)\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u ch%E1%BB%AF\')\" id=\"cke_70\" onclick=\"CKEDITOR.tools.callFunction(42,this);return false;\" tabindex=\"-1\" title=\"Màu chữ\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u n%E1%BB%81n\')\" id=\"cke_71\" onclick=\"CKEDITOR.tools.callFunction(45,this);return false;\" tabindex=\"-1\" title=\"Màu nền\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa li%C3%AAn k%E1%BA%BFt\')\" id=\"cke_73\" onclick=\"CKEDITOR.tools.callFunction(48,this);return false;\" tabindex=\"-1\" title=\"Chèn/Sửa liên kết (Ctrl+K)\">&nbsp;</a><a href=\"javascript:void(\'Xo%C3%A1 li%C3%AAn k%E1%BA%BFt\')\" id=\"cke_74\" onclick=\"CKEDITOR.tools.callFunction(51,this);return false;\" tabindex=\"-1\" title=\"Xoá liên kết\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa %C4%91i%E1%BB%83m neo\')\" id=\"cke_75\" onclick=\"CKEDITOR.tools.callFunction(54,this);return false;\" tabindex=\"-1\" title=\"Chèn/Sửa điểm neo\">&nbsp;</a></p>','/images/images/cam3.jpg','Nhập link video youtube','Tiêu đề block 1:','Tiêu đề block 1 (Tiếng anh):','<p>&nbsp;</p>\r\n\r\n<p>Nội dung cho block 1:</p>\r\n\r\n<p><a href=\"javascript:void(\'%C4%90%E1%BA%ADm\')\" id=\"cke_124\" onclick=\"CKEDITOR.tools.callFunction(91,this);return false;\" tabindex=\"-1\" title=\"Đậm (Ctrl+B)\">&nbsp;</a><a href=\"javascript:void(\'Nghi%C3%AAng\')\" id=\"cke_125\" onclick=\"CKEDITOR.tools.callFunction(94,this);return false;\" tabindex=\"-1\" title=\"Nghiêng (Ctrl+I)\">&nbsp;</a><a href=\"javascript:void(\'G%E1%BA%A1ch ch%C3%A2n\')\" id=\"cke_126\" onclick=\"CKEDITOR.tools.callFunction(97,this);return false;\" tabindex=\"-1\" title=\"Gạch chân (Ctrl+U)\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u ch%E1%BB%AF\')\" id=\"cke_128\" onclick=\"CKEDITOR.tools.callFunction(100,this);return false;\" tabindex=\"-1\" title=\"Màu chữ\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u n%E1%BB%81n\')\" id=\"cke_129\" onclick=\"CKEDITOR.tools.callFunction(103,this);return false;\" tabindex=\"-1\" title=\"Màu nền\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa li%C3%AAn k%E1%BA%BFt\')\" id=\"cke_131\" onclick=\"CKEDITOR.tools.callFunction(106,this);return false;\" tabindex=\"-1\" title=\"Chèn/Sửa liên kết (Ctrl+K)\">&nbsp;</a><a href=\"javascript:void(\'Xo%C3%A1 li%C3%AAn k%E1%BA%BFt\')\" id=\"cke_132\" onclick=\"CKEDITOR.tools.callFunction(109,this);return false;\" tabindex=\"-1\" title=\"Xoá liên kết\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa %C4%91i%E1%BB%83m neo\')\" id=\"cke_133\" onclick=\"CKEDITOR.tools.callFunction(112,this);return false;\" tabindex=\"-1\" title=\"Chèn/Sửa điểm neo\">&nbsp;</a></p>',1,'Tiêu đề block 2:','Tiêu đề block 2 (Tiếng anh):','<p>&nbsp;</p>\r\n\r\n<p>Nội dung cho block 2:</p>\r\n\r\n<p><a href=\"javascript:void(\'%C4%90%E1%BA%ADm\')\" id=\"cke_182\" onclick=\"CKEDITOR.tools.callFunction(149,this);return false;\" tabindex=\"-1\" title=\"Đậm (Ctrl+B)\">&nbsp;</a><a href=\"javascript:void(\'Nghi%C3%AAng\')\" id=\"cke_183\" onclick=\"CKEDITOR.tools.callFunction(152,this);return false;\" tabindex=\"-1\" title=\"Nghiêng (Ctrl+I)\">&nbsp;</a><a href=\"javascript:void(\'G%E1%BA%A1ch ch%C3%A2n\')\" id=\"cke_184\" onclick=\"CKEDITOR.tools.callFunction(155,this);return false;\" tabindex=\"-1\" title=\"Gạch chân (Ctrl+U)\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u ch%E1%BB%AF\')\" id=\"cke_186\" onclick=\"CKEDITOR.tools.callFunction(158,this);return false;\" tabindex=\"-1\" title=\"Màu chữ\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u n%E1%BB%81n\')\" id=\"cke_187\" onclick=\"CKEDITOR.tools.callFunction(161,this);return false;\" tabindex=\"-1\" title=\"Màu nền\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa li%C3%AAn k%E1%BA%BFt\')\" id=\"cke_189\" onclick=\"CKEDITOR.tools.callFunction(164,this);return false;\" tabindex=\"-1\" title=\"Chèn/Sửa liên kết (Ctrl+K)\">&nbsp;</a><a href=\"javascript:void(\'Xo%C3%A1 li%C3%AAn k%E1%BA%BFt\')\" id=\"cke_190\" onclick=\"CKEDITOR.tools.callFunction(167,this);return false;\" tabindex=\"-1\" title=\"Xoá liên kết\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa %C4%91i%E1%BB%83m neo\')\" id=\"cke_191\" onclick=\"CKEDITOR.tools.callFunction(170,this);return false;\" tabindex=\"-1\" title=\"Chèn/Sửa điểm neo\">&nbsp;</a></p>',1,'2020-02-24 18:11:26','2020-02-24 18:18:50','<p>&nbsp;</p>\r\n\r\n<p>Nội dung cho block 1&nbsp;(Tiếng anh):</p>\r\n\r\n<p><a href=\"javascript:void(\'%C4%90%E1%BA%ADm\')\" id=\"cke_95\" onclick=\"CKEDITOR.tools.callFunction(62,this);return false;\" tabindex=\"-1\" title=\"Đậm (Ctrl+B)\">&nbsp;</a><a href=\"javascript:void(\'Nghi%C3%AAng\')\" id=\"cke_96\" onclick=\"CKEDITOR.tools.callFunction(65,this);return false;\" tabindex=\"-1\" title=\"Nghiêng (Ctrl+I)\">&nbsp;</a><a href=\"javascript:void(\'G%E1%BA%A1ch ch%C3%A2n\')\" id=\"cke_97\" onclick=\"CKEDITOR.tools.callFunction(68,this);return false;\" tabindex=\"-1\" title=\"Gạch chân (Ctrl+U)\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u ch%E1%BB%AF\')\" id=\"cke_99\" onclick=\"CKEDITOR.tools.callFunction(71,this);return false;\" tabindex=\"-1\" title=\"Màu chữ\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u n%E1%BB%81n\')\" id=\"cke_100\" onclick=\"CKEDITOR.tools.callFunction(74,this);return false;\" tabindex=\"-1\" title=\"Màu nền\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa li%C3%AAn k%E1%BA%BFt\')\" id=\"cke_102\" onclick=\"CKEDITOR.tools.callFunction(77,this);return false;\" tabindex=\"-1\" title=\"Chèn/Sửa liên kết (Ctrl+K)\">&nbsp;</a><a href=\"javascript:void(\'Xo%C3%A1 li%C3%AAn k%E1%BA%BFt\')\" id=\"cke_103\" onclick=\"CKEDITOR.tools.callFunction(80,this);return false;\" tabindex=\"-1\" title=\"Xoá liên kết\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa %C4%91i%E1%BB%83m neo\')\" id=\"cke_104\" onclick=\"CKEDITOR.tools.callFunction(83,this);return false;\" tabindex=\"-1\" title=\"Chèn/Sửa điểm neo\">&nbsp;</a></p>','<p>&nbsp;</p>\r\n\r\n<p>Nội dung cho block 2&nbsp;(Tiếng anh):</p>\r\n\r\n<p><a href=\"javascript:void(\'%C4%90%E1%BA%ADm\')\" id=\"cke_153\" onclick=\"CKEDITOR.tools.callFunction(120,this);return false;\" tabindex=\"-1\" title=\"Đậm (Ctrl+B)\">&nbsp;</a><a href=\"javascript:void(\'Nghi%C3%AAng\')\" id=\"cke_154\" onclick=\"CKEDITOR.tools.callFunction(123,this);return false;\" tabindex=\"-1\" title=\"Nghiêng (Ctrl+I)\">&nbsp;</a><a href=\"javascript:void(\'G%E1%BA%A1ch ch%C3%A2n\')\" id=\"cke_155\" onclick=\"CKEDITOR.tools.callFunction(126,this);return false;\" tabindex=\"-1\" title=\"Gạch chân (Ctrl+U)\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u ch%E1%BB%AF\')\" id=\"cke_157\" onclick=\"CKEDITOR.tools.callFunction(129,this);return false;\" tabindex=\"-1\" title=\"Màu chữ\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u n%E1%BB%81n\')\" id=\"cke_158\" onclick=\"CKEDITOR.tools.callFunction(132,this);return false;\" tabindex=\"-1\" title=\"Màu nền\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa li%C3%AAn k%E1%BA%BFt\')\" id=\"cke_160\" onclick=\"CKEDITOR.tools.callFunction(135,this);return false;\" tabindex=\"-1\" title=\"Chèn/Sửa liên kết (Ctrl+K)\">&nbsp;</a><a href=\"javascript:void(\'Xo%C3%A1 li%C3%AAn k%E1%BA%BFt\')\" id=\"cke_161\" onclick=\"CKEDITOR.tools.callFunction(138,this);return false;\" tabindex=\"-1\" title=\"Xoá liên kết\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa %C4%91i%E1%BB%83m neo\')\" id=\"cke_162\" onclick=\"CKEDITOR.tools.callFunction(141,this);return false;\" tabindex=\"-1\" title=\"Chèn/Sửa điểm neo\">&nbsp;</a></p>');
/*!40000 ALTER TABLE `home_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(4) DEFAULT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (6,4,1,NULL,NULL,1,'/images/images/quy.jpg','/images/images/oi.jpg','/images/images/cam3.jpg',NULL,'/images/images/cam3.jpg',NULL,NULL,NULL,'/images/images/oi.jpg','/images/images/cam3.jpg'),(12,1,1,'2020-02-24 15:41:06','2020-02-24 16:11:53',2,'/images/images/cam3.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,1,1,'2020-02-24 16:14:21','2020-02-24 16:14:21',3,NULL,NULL,NULL,'/images/images/cam3.jpg',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `introduces`
--

DROP TABLE IF EXISTS `introduces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `introduces` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `introduces`
--

LOCK TABLES `introduces` WRITE;
/*!40000 ALTER TABLE `introduces` DISABLE KEYS */;
INSERT INTO `introduces` VALUES (1,'ádasd','Tên sản phẩm (Tiếng anh):','/images/images/cam3.jpg','<p>&aacute;dasd</p>',NULL,1,'2020-02-24 14:30:49','2020-02-24 16:10:53',NULL,NULL,'adasd-22116.html'),(2,'ádasd','Tên sản phẩm (Tiếng anh):','/images/images/albums/quy.jpg','<p>&aacute;dasdasd</p>','<p>&aacute;dasdasd<img alt=\"\" src=\"/images/images/albums/quy.jpg\" style=\"height:960px; width:720px\" /></p>',1,'2020-02-24 14:32:55','2020-02-24 14:32:55','Từ khóa tiếng việt cách n,ádasd','Từ khóa tiếng việt cách n,ádasd12121212','adasd-96657.html'),(3,'ádasd','Tên sản phẩm (Tiếng anh):',NULL,NULL,NULL,0,'2020-02-24 14:38:22','2020-02-24 14:38:22',NULL,NULL,'adasd-38376.html'),(4,'Hoang Van Quan','Tên sản phẩm (Tiếng anh):',NULL,NULL,NULL,0,'2020-02-24 14:39:09','2020-02-24 14:39:09',NULL,NULL,'hoang-van-quan-79918.html'),(5,'giới','thiệu ádasd','/images/images/cam3.jpg','<p>&aacute;dsadasd</p>','<p>&aacute;dasdsad</p>',1,'2020-02-24 16:08:38','2020-02-24 16:08:38','121','321321','giới-73755.html');
/*!40000 ALTER TABLE `introduces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manufacturer`
--

DROP TABLE IF EXISTS `manufacturer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `manufacturer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manufacturer`
--

LOCK TABLES `manufacturer` WRITE;
/*!40000 ALTER TABLE `manufacturer` DISABLE KEYS */;
INSERT INTO `manufacturer` VALUES (1,'Tên sản phẩm:','Tên sản phẩm (Tiếng anh):','Mô tả:','Mô tả (Tiếng anh):','/images/images/cam3.jpg','<p><img alt=\"\" src=\"/images/images/albums/quy.jpg\" style=\"height:960px; width:720px\" /></p>','<p><img alt=\"\" src=\"/images/images/oi.jpg\" style=\"height:900px; width:675px\" /></p>',1,'2020-02-24 15:03:13','2020-02-24 15:15:08','ten-sản-phẩm:-79755.html','việt cá','2121');
/*!40000 ALTER TABLE `manufacturer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(11,'2020_02_21_000233_menus',2),(12,'2020_02_21_000401_settings',2),(13,'2020_02_21_000517_images',2),(14,'2020_02_21_000526_products',2),(15,'2020_02_21_000608_contact',2),(16,'2020_02_22_000230_categories',2),(17,'2020_02_23_000230_introduces_table',3),(18,'2020_02_23_000230_manufacturing_table',4),(19,'2020_02_23_000230_home_page_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `purpose` text COLLATE utf8mb4_unicode_ci,
  `purpose_en` text COLLATE utf8mb4_unicode_ci,
  `nutrition` text COLLATE utf8mb4_unicode_ci,
  `nutrition_en` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  `isDelete` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (3,'Tên sản phẩm:','Tên sản phẩm (Tiếng anh):','Mô tả:','Mô tả (Tiếng anh):','/images/images/cam3.jpg','/images/images/quy.jpg','việt , 1','anh , 2','<p>1<img alt=\"\" src=\"/images/images/quy.jpg\" style=\"height:960px; width:720px\" /></p>\r\n\r\n<p>&nbsp;</p>','<p>2<img alt=\"\" src=\"/images/images/oi.jpg\" style=\"height:900px; width:675px\" /></p>',NULL,NULL,NULL,NULL,'ten-sản-phẩm:-92961.html',NULL,'2020-02-23 09:01:40','2020-02-24 18:57:34',11,0),(4,'Tên sản phẩm:212','Tên sản phẩm (Tiếng anh):213123','Mô tả:','Mô tả (Tiếng anh):','/images/images/oi.jpg','/images/images/quy.jpg','việt , 15','anh , 2','<p>1<img alt=\"\" src=\"/images/images/quy.jpg\" style=\"height:960px; width:720px\" /></p>\r\n\r\n<p>&nbsp;</p>','<p>2<img alt=\"\" src=\"/images/images/oi.jpg\" style=\"height:900px; width:675px\" /></p>','<p><a href=\"https://www.youtube.com/watch?v=6-QJMRG_VgA\">https://www.youtube.com/watch?v=6-QJMRG_VgA</a></p>',NULL,NULL,NULL,'ten-sản-phẩm:212-54392.html',1,'2020-02-23 09:01:40','2020-02-24 18:58:30',9,0),(5,'ádasd','Tên sản phẩm (Tiếng anh):',NULL,NULL,'/images/images/cam3.jpg','/images/images/oi.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'adasd-56792.html',NULL,'2020-02-24 19:04:44','2020-02-24 19:04:44',9,0),(6,'ádasd','Tên sản phẩm (Tiếng anh):',NULL,NULL,'/images/images/cam3.jpg','/images/images/oi.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'adasd-98266.html',NULL,'2020-02-24 19:04:52','2020-02-24 19:04:52',9,0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `background_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_branch_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factory_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warehouse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warehouse_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_driver` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_encryption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (2,NULL,'Số 157-159 Hàm Nghi, Q. Thanh Khê, Tp. Đà Nẵng, Việt Nam','No. 157-159 Ham Nghi, Thanh Khe dist., Da Nang City, Vietnam','221 An Ninh, Bình An, huyện Châu Thành, tỉnh Kiên Giang, Việt Nam','221 An Ninh, Binh An ward, Chau Thanh dist., Kien Giang, Vietnam','Số 152 Tân Mai, quận Hoàng Mai, Hà Nội, Việt Nam','152 Tan Mai Str., Hoang Mai dist, Ha Noi, Vietnam','CheeryFarm','+84 (0) 236 3898 803','+84 (0) 236 3898 802','+84 (0)984 825 584','info@cheerfarm.com','http://fb.com/cheeryfarm','http://youtube.com/channel/UCLBvZEXw1uhwQ-9mGNSrw4w',NULL,'aasdasdasd','smtp','smtp.mailtrap.io','2525','321ea23a9a071d','4dfde0eb59c7ab','tls','2020-02-22 05:22:53','2020-02-23 13:13:24');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `birth_of_day` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_me` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_block` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 la bi block, 0 chua block',
  `is_delete` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 la da xoa, 0 la chua xoa',
  `count_login` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2020-02-25  2:07:39
