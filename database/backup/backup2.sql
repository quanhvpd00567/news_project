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
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'/images/images/albums/quy.jpg','screen_home',1,'2020-03-22 14:02:37','2020-03-22 14:02:37'),(2,'/images/images/albums/quy.jpg','screen_product',1,'2020-03-22 14:02:37','2020-03-22 14:02:37'),(3,'/images/images/albums/quy.jpg','screen_about_us',1,'2020-03-22 14:02:37','2020-03-22 14:02:37'),(4,'/images/images/albums/quy.jpg','screen_gallery',1,'2020-03-22 14:02:37','2020-03-22 14:02:37'),(5,'/images/images/albums/quy.jpg','screen_manufacturer',1,'2020-03-22 14:02:37','2020-03-22 14:02:37'),(6,'/images/images/albums/quy.jpg','screen_contact',1,'2020-03-22 14:02:37','2020-03-22 14:02:37');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (8,'Sản phẩm','Sản phẩm','san-pham-55485.html',0,'2020-02-22 14:12:24','2020-03-03 14:24:53',NULL,0),(9,'Trái cây','Dried fruits','trai-cay-83283.html',1,'2020-02-22 16:48:42','2020-02-23 02:12:02',NULL,1),(10,'Về Cheer Farm','Cheer Farm','về-cheer-farm-6394.html',1,'2020-02-22 17:28:16','2020-02-23 02:13:08',NULL,1),(11,'Mứt','Mứt','mut-32482.html',1,'2020-02-23 01:56:35','2020-02-27 17:24:52',NULL,0),(12,'2121','3123','2121-73355.html',1,'2020-03-03 14:10:58','2020-03-03 14:10:58',NULL,0),(13,'asd','asd','asd-37067.html',1,'2020-03-03 14:15:27','2020-03-03 14:15:27',NULL,0),(14,'ádasd','Tên sản phẩm (Tiếng anh):','adasd-6630.html',1,'2020-03-03 14:15:38','2020-03-03 14:15:38',NULL,0);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Van Quan Hoang','Ông','asd','Lien Chieu','asdasd',2,'2020-02-28 20:36:20','2020-02-28 20:36:20'),(2,'Van Quan Hoang','Ông','asd','Lien Chieu','asdasd',2,'2020-02-28 20:36:46','2020-02-28 20:36:46'),(3,'Van Quan Hoang','Ông','quanlybanthan@gmail.com','Lien Chieu','3123123123',2,'2020-02-28 20:43:10','2020-02-28 20:43:10'),(4,'Van Quan Hoang','Ông','Title','Lien Chieu','adasd',2,'2020-02-28 20:43:41','2020-02-28 20:43:41');
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
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'/images/images/albums/quy.jpg',NULL,NULL),(2,'/images/images/albums/quy.jpg',NULL,NULL);
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_page`
--

DROP TABLE IF EXISTS `home_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `home_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text_block_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_block_1_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_block_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_block_2_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_block_2` text COLLATE utf8mb4_unicode_ci,
  `isShowBlock_2` tinyint(4) DEFAULT NULL,
  `text_block_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_block_3_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_block_3` text COLLATE utf8mb4_unicode_ci,
  `isShowBlock_3` tinyint(4) DEFAULT NULL,
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
INSERT INTO `home_page` VALUES (1,'Chúng tôi phát triền nông nghiệp bền vững, vì môi trường; chúng tôi mang lại những sản phẩm tốt nhất cho khách hàng và hỗ trợ nông dân ổn định cuộc sống','We love farming, we respect nature, we serve our customers with the best products and services; and we support our farmers in bettering their lives.','<p><span style=\"font-size:20px\"><strong><a href=\"https://cheerfarm.com/about-us.html\"><span style=\"color:#c0392b\">CH&Agrave;O MỪNG ĐẾN VỚI CHEER FARM</span></a></strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&quot;<span style=\"color:#e74c3c\">Cheer Farm</span>&nbsp;l&agrave; nh&agrave; sản xuất tr&aacute;i c&acirc;y chế biến tự nhi&ecirc;n h&agrave;ng đầu Việt Nam. N&ocirc;ng trại v&agrave; nh&agrave; m&aacute;y đặt tại huyện Ch&acirc;u Th&agrave;nh, tỉnh Ki&ecirc;n Giang. Ch&uacute;ng t&ocirc;i canh t&aacute;c thuận tự nhi&ecirc;n, kh&ocirc;ng thuốc trừ s&acirc;u; kh&ocirc;ng sử dụng sulfur, kh&ocirc;ng phụ gia, kh&ocirc;ng chất bảo quản trong qu&aacute; tr&igrave;nh chế biến. V&igrave; vậy, sản phẩm Cheer Farm mang hương vị ho&agrave;n to&agrave;n tự nhi&ecirc;n v&agrave; rất tốt cho sức khỏe. Ch&uacute;ng t&ocirc;i cam kết sản xuất v&agrave; đưa tới người ti&ecirc;u d&ugrave;ng c&aacute;c sản phẩm tự nhi&ecirc;n nhất, chất lượng cao nhất. Cam kết chia sẻ tầm nh&igrave;n, gi&aacute; trị, v&agrave; hỗ trợ n&ocirc;ng d&acirc;n cải thiện cuộc sống.&quot;</em></span></p>','<p><span style=\"font-size:20px\"><strong><a href=\"https://cheerfarm.com/\"><span style=\"color:#c0392b\">WELCOME TO CHEER FARM</span></a></strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">&ldquo;<span style=\"color:#e74c3c\"><em><strong>Cheer Farm</strong></em></span>&nbsp;<em>is one of the top fruit-processing producers in Vietnam. We are dedicated to manufacturing and delivering Vietnamese premium natural dried fruit products. Our farm and factory are located in Kien Giang province, Mekong Delta region of Vietnam. All our products are natural-tasting and nutritious because we grow our fruits naturally and pesticide-free. In the fruit processing, we neither use sulfur, addictives nor preservatives. We endeavor to improve the living conditions of smallholder farmers in Mekong Vietnam with whom we share the same philosophy and form mutual commitments.&rdquo;</em></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>','/images/images/cam3.jpg','QymIt5Kmq-w','Tiêu đề block 1:','Tiêu đề block 1 (Tiếng anh):','<p style=\"text-align:center\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:26px\">Nội dung cho block 1:</span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:26px\"><a href=\"http://google.com\">hello</a></span></p>',1,'Tiêu đề block 2:','Tiêu đề block 2 (Tiếng anh):','<p style=\"text-align:center\">Nội dung cho block 2:</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"javascript:void(\'%C4%90%E1%BA%ADm\')\">&nbsp;</a><a href=\"javascript:void(\'Nghi%C3%AAng\')\">&nbsp;</a><a href=\"javascript:void(\'G%E1%BA%A1ch ch%C3%A2n\')\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u ch%E1%BB%AF\')\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u n%E1%BB%81n\')\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa li%C3%AAn k%E1%BA%BFt\')\">&nbsp;</a><a href=\"javascript:void(\'Xo%C3%A1 li%C3%AAn k%E1%BA%BFt\')\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa %C4%91i%E1%BB%83m neo\')\">&nbsp;</a></p>',1,'2020-02-24 18:11:26','2020-03-22 13:27:44','<p style=\"text-align:center\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:26px\">Nội dung cho block 1 en:</span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:26px\"><a href=\"http://google.com\">hello</a></span></p>','<p style=\"text-align:center\">Nội dung cho block 2&nbsp;(Tiếng anh):</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"javascript:void(\'%C4%90%E1%BA%ADm\')\">&nbsp;</a><a href=\"javascript:void(\'Nghi%C3%AAng\')\">&nbsp;</a><a href=\"javascript:void(\'G%E1%BA%A1ch ch%C3%A2n\')\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u ch%E1%BB%AF\')\">&nbsp;</a><a href=\"javascript:void(\'M%C3%A0u n%E1%BB%81n\')\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa li%C3%AAn k%E1%BA%BFt\')\">&nbsp;</a><a href=\"javascript:void(\'Xo%C3%A1 li%C3%AAn k%E1%BA%BFt\')\">&nbsp;</a><a href=\"javascript:void(\'Ch%C3%A8n/S%E1%BB%ADa %C4%91i%E1%BB%83m neo\')\">&nbsp;</a></p>');
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
  `product_id` int(10) unsigned DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (6,4,1,NULL,NULL,1,'/images/images/quy.jpg','/images/images/oi.jpg','/images/images/cam3.jpg',NULL,'/images/images/cam3.jpg',NULL,NULL,NULL,'/images/images/oi.jpg','/images/images/cam3.jpg'),(12,1,1,'2020-02-24 15:41:06','2020-02-24 16:11:53',2,'/images/images/cam3.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,1,1,'2020-02-24 16:14:21','2020-02-24 16:14:21',3,NULL,NULL,NULL,'/images/images/cam3.jpg',NULL,NULL,NULL,NULL,NULL,NULL),(15,3,1,'2020-02-26 16:44:09','2020-02-26 16:54:25',1,'/images/images/cam3.jpg',NULL,'/images/images/oi.jpg',NULL,NULL,NULL,'/images/images/quy.jpg',NULL,NULL,NULL),(17,3,1,'2020-02-27 16:18:18','2020-02-27 16:18:18',3,'/images/images/banner/IMG_9208_2.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,NULL,NULL,'2020-02-28 19:57:47','2020-02-28 19:57:47',4,'/images/images/albums/quy.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,5,1,'2020-03-22 13:49:59','2020-03-22 13:49:59',2,'/images/images/albums/quy.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `introduces`
--

LOCK TABLES `introduces` WRITE;
/*!40000 ALTER TABLE `introduces` DISABLE KEYS */;
INSERT INTO `introduces` VALUES (1,'ádasd','Tên sản phẩm (Tiếng anh):','/images/images/banner/IMG_9208_2.jpg','<div style=\"text-align:center\">\r\n<figure class=\"image\" style=\"display:inline-block\"><img alt=\"ádasdasd\" height=\"143\" src=\"/images/images/banner/IMG_9208_2.jpg\" width=\"972\" />\r\n<figcaption>Nh&atilde;n</figcaption>\r\n</figure>\r\n</div>\r\n\r\n<p><strong>C&Ocirc;NG TY</strong></p>\r\n\r\n<p>Cheer Farm l&agrave; c&ocirc;ng ty xuất khẩu n&ocirc;ng sản v&agrave; tư vấn ph&aacute;t triển dự &aacute;n n&ocirc;ng nghiệp.Ch&uacute;ng t&ocirc;i đưa người n&ocirc;ng d&acirc;n v&agrave;o chuỗi gi&aacute; trị cung ứng bằng việc kết nối trực tiếptừ n&ocirc;ng trường đến nh&agrave; m&aacute;y chế biến v&agrave; kh&aacute;ch h&agrave;ng để tạo ra c&aacute;c sản phẩm đạt ti&ecirc;u<br />\r\nchuẩn quốc tế. Đồng thời, ch&uacute;ng t&ocirc;i c&ograve;n l&agrave; nh&agrave; tư vấn quản l&yacute; v&agrave; ph&aacute;t triển c&aacute;c dự &aacute;nn&ocirc;ng nghiệp cho c&aacute;c nh&agrave; đầu tư trong v&agrave; ngo&agrave;i nước, hướng tới c&aacute;c m&ocirc; h&igrave;nh sản xuấtn&ocirc;ng nghiệp ph&aacute;t triển bền vững.</p>\r\n\r\n<p><strong><a id=\"SỨ MỆNH VÀ GIÁ TRỊ CỐT LÕI\" name=\"SỨ MỆNH VÀ GIÁ TRỊ CỐT LÕI\"></a>SỨ MỆNH V&Agrave; GI&Aacute; TRỊ CỐT L&Otilde;I</strong></p>\r\n\r\n<p>Cheer Farm cam kết cung cấp c&aacute;c sản phẩm chất lượng tốt theo hệ thống ti&ecirc;u chuẩn<br />\r\nquốc tế; đồng h&agrave;nh v&agrave; c&ugrave;ng ph&aacute;t triển với c&aacute;c đối t&aacute;c tr&ecirc;n cơ sở x&acirc;y dựng c&aacute;c gi&aacute; trị<br />\r\ncốt l&otilde;i:<br />\r\n<img alt=\"\" height=\"29\" src=\"https://cheerfarm.com/files/Uploads/About%20US/vay_ca_map_edited_1.png\" width=\"17\" />&nbsp;Chất lượng v&agrave; sự cải tiến<br />\r\n<img alt=\"\" height=\"29\" src=\"https://cheerfarm.com/files/Uploads/About%20US/vay_ca_map_edited_1.png\" width=\"17\" />Kỷ luật<br />\r\n<img alt=\"\" height=\"29\" src=\"https://cheerfarm.com/files/Uploads/About%20US/vay_ca_map_edited_1.png\" width=\"17\" />Bền vững<br />\r\n&nbsp;<img alt=\"\" height=\"29\" src=\"https://cheerfarm.com/files/Uploads/About%20US/vay_ca_map_edited_1.png\" width=\"17\" />Tr&aacute;ch nhiệm x&atilde; hội</p>\r\n\r\n<p><strong><a id=\"TẦM NHÌN\" name=\"TẦM NHÌN\"></a>TẦM NH&Igrave;N</strong><br />\r\nCheer Farm hướng tới l&agrave; nh&agrave; cung cấp h&agrave;ng đầu c&aacute;c n&ocirc;ng sản chất lượng tốt, gi&aacute;<br />\r\ntrị cao, l&agrave; đối t&aacute;c uy t&iacute;n của c&aacute;c nh&agrave; đầu tư v&agrave; n&ocirc;ng d&acirc;n Việt nam.</p>\r\n\r\n<p><strong><a id=\"MÔ HÌNH HOẠT ĐỘNG\" name=\"MÔ HÌNH HOẠT ĐỘNG\"></a>M&Ocirc; H&Igrave;NH HOẠT ĐỘNG</strong></p>\r\n\r\n<p><strong>Cheer farm l&agrave; nh&agrave; tư vấn x&acirc;y dựng v&agrave; quản l&yacute; dự &aacute;n n&ocirc;ng nghiệp</strong></p>','<p><a id=\"our-company\" name=\"our-company\"><strong>OUR COMPANY</strong></a></p>\r\n\r\n<p>Cheer Farm JSC is an export-oriented agro-company. We are&nbsp;dedicated to manufacturing and delivering Vietnamese agro-products of premium quality. Our farms are located in Dak Lak province, the Central Highlands of Vietnam. In addition, we provide consulting services regard to development and management of agro-projects. We endeavor to improve the living conditions of smallholder farmers in Vietnam with whom we share the same values&nbsp;and form mutual commitments.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a id=\"our-mission-and-values\" name=\"our-mission-and-values\"><strong>OUR MISSION AND VALUES</strong></a></p>\r\n\r\n<p>We are committed to producing&nbsp;and delivering the prime agro-products in compliance with globally competitive standards to our customers. We believe that a business just can be viewed as success&nbsp;when all partners involved can fairly benefit from it. We uphold values which reflect our business performance and guide our works:</p>\r\n\r\n<p><img alt=\"\" src=\"https://cheerfarm.com/files/Uploads/About%20US/vay_ca_map_edited_1.png\" />&nbsp; &nbsp; Quality and Innovation</p>\r\n\r\n<p><img alt=\"\" src=\"https://cheerfarm.com/files/Uploads/About%20US/vay_ca_map_edited_1.png\" />&nbsp; &nbsp; Austerity</p>\r\n\r\n<p><img alt=\"\" src=\"https://cheerfarm.com/files/Uploads/About%20US/vay_ca_map_edited_1.png\" />&nbsp; &nbsp; Sustainability</p>\r\n\r\n<p><img alt=\"\" src=\"https://cheerfarm.com/files/Uploads/About%20US/vay_ca_map_edited_1.png\" />&nbsp;&nbsp;&nbsp;&nbsp;Social Responsibility</p>\r\n\r\n<p>&nbsp;</p>',1,'2020-02-24 14:30:49','2020-02-28 17:17:13',NULL,NULL,'adasd-96559.html'),(3,'ádasd','Tên sản phẩm (Tiếng anh):','/images/images/banner/IMG_9208_2.jpg',NULL,NULL,0,'2020-02-24 14:38:22','2020-02-27 16:24:05',NULL,NULL,'adasd-61828.html'),(6,'ád','ád','','<p>&aacute;d</p>',NULL,0,'2020-03-22 13:32:06','2020-03-22 13:32:06','xác sống','áda','ad-46038.html');
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manufacturer`
--

LOCK TABLES `manufacturer` WRITE;
/*!40000 ALTER TABLE `manufacturer` DISABLE KEYS */;
INSERT INTO `manufacturer` VALUES (5,'ádasd','ád','ádsad','ádsad','/images/images/albums/quy.jpg','<p>&aacute;dasd&aacute;dasd</p>','<p>&aacute;dasd</p>',1,'2020-03-22 13:45:30','2020-03-22 13:55:16','adasd-29910.html','ádsad','ádsad','/images/images/albums/quy.jpg');
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(11,'2020_02_21_000233_menus',2),(12,'2020_02_21_000401_settings',2),(13,'2020_02_21_000517_images',2),(14,'2020_02_21_000526_products',2),(15,'2020_02_21_000608_contact',2),(16,'2020_02_22_000230_categories',2),(17,'2020_02_23_000230_introduces_table',3),(18,'2020_02_23_000230_manufacturing_table',4),(19,'2020_02_23_000230_home_page_table',5),(20,'2020_03_10_000230_gallery_table',6),(21,'2020_03_22_151135_create_banner_table',7);
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
  `description` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
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
INSERT INTO `products` VALUES (3,'DỨA SẤY DẺO NỮ HOÀNG','PREMIUM SOFT DRIED PINEAPPLE','<h2 style=\"font-style:italic\">100% DỨA QUEEN CH&Iacute;N C&Acirc;Y<br />\r\nKH&Ocirc;NG TH&Ecirc;M ĐƯỜNG<br />\r\nKH&Ocirc;NG PHỤ GIA<br />\r\nKH&Ocirc;NG CHẤT BẢO QUẢN</h2>','<h2 style=\"font-style:italic\">100% QUEEN PINEAPPLE<br />\r\nNO ADDED SUGAR<br />\r\nNO ADDITIVES<br />\r\nNO PRESERVATIVES</h2>','/images/images/cam3.jpg','/images/images/quy.jpg','việt , 1','anh , 2','<p>&nbsp;Dứa sấy dẻo Nữ ho&agrave;ng</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i sử dụng những tr&aacute;i dứa thuộc giống dứa Queen nổi tiếng của tỉnh Ki&ecirc;n Giang, Việt Nam. Dứa Queen được trồng sạch v&agrave; tự nhi&ecirc;n tr&ecirc;n một h&ograve;n đảo nhỏ của tỉnh Ki&ecirc;n Giang. Đ&acirc;y l&agrave; một giống dứa đặc biệt v&agrave; được đ&aacute;nh gi&aacute; l&agrave; loại dứa ngon nhất cả nước. To&agrave;n bộ qu&aacute; tr&igrave;nh từ thu hoạch, ph&acirc;n loại, gọt vỏ đến cắt th&aacute;i đều được l&agrave;m bằng tay để chọn lọc ra c&aacute;c phần dứa tốt nhất cho qu&aacute; tr&igrave;nh sấy. Sau đ&oacute;, ch&uacute;ng t&ocirc;i sấy dứa theo một quy tr&igrave;nh b&agrave;i bản v&agrave; kỹ c&agrave;ng để đảm bảo m&ugrave;i vị, m&agrave;u sắc được giữ nguy&ecirc;n, tự nhiện nhất. Đ&aacute;ng ch&uacute; &yacute; ở đ&acirc;y, ch&uacute;ng t&ocirc;i kh&ocirc;ng sử dụng đường v&agrave; bất k&igrave; một chất bảo quản n&agrave;o.Đ&oacute; cũng l&agrave; l&yacute; do chung t&ocirc;i rất tự h&agrave;o rằng sản phẩm dứa sấy dẻo Cheer Farm l&agrave; sản phẩm ngon thơm nhất trong số c&aacute;c sản phẩm dứa sấy dẻo kh&aacute;c.</p>\r\n\r\n<p><strong><em>K&iacute;ch cỡ:</em></strong><em>&nbsp;</em>100g</p>\r\n\r\n<p><u>QUY TR&Igrave;NH SẤY TỰ NHI&Ecirc;N</u></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" height=\"931\" src=\"/images/images/Quy%20trinh%20SX/QUY%20TRINH%20SAY%20TU%20NHIEN02%20(Large)2.jpg\" width=\"700\" /></p>\r\n\r\n<p><u>Chứng nhận SGS</u></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" height=\"382\" src=\"/images/images/Ch%E1%BB%A9ng%20nh%E1%BA%ADn/SGS%20D.jpg\" width=\"800\" /></p>\r\n\r\n<p>&nbsp;</p>','<h1>Premium Dried Pineapple Queen - Your healthy tasty snack</h1>\r\n\r\n<p>Our pineapple is one of the Queen group and is organically grown on a beautiful island in Kien Giang province, Vietnam. From the freshest pineapple, we craft these delicious soft-dried pineapple slices, ideal for snacking, mixing with yoghurt, trail mix or baked goods etc.</p>\r\n\r\n<p><strong>Our soft-dried Pineapple Queen is both tasty and beneficial to your health:</strong></p>\r\n\r\n<ul>\r\n	<li>The process from harvesting, sorting, peeling to slicing is done by hand to select the best part of pineapple for drying.</li>\r\n	<li>A sophisticated mechanical drying process to keep its original flavor and colors. Hence, soft-dried still tastes fresh!</li>\r\n	<li>No added addictives nor sugar</li>\r\n	<li>It&rsquo;s nutrient dense, a rich source of bromelain, insoluble fibers and antioxidants</li>\r\n</ul>\r\n\r\n<p><strong><em>Available</em></strong><em>:&nbsp;</em>100g</p>',NULL,NULL,NULL,NULL,'dua-say-deo-nu-hoang-64322.html',1,'2020-02-23 09:01:40','2020-03-12 14:25:19',9,0),(4,'Tên sản phẩm:212','Tên sản phẩm (Tiếng anh):213123','<p>M&ocirc; tả:</p>','<p>M&ocirc; tả (Tiếng anh):</p>','/images/images/oi.jpg','/images/images/quy.jpg','việt , 15','anh , 2','<p>1<img alt=\"\" height=\"960\" src=\"/images/images/quy.jpg\" width=\"720\" /></p>\r\n\r\n<p>&nbsp;</p>','<p>2<img alt=\"\" height=\"900\" src=\"/images/images/oi.jpg\" width=\"675\" /></p>','<p><a href=\"https://www.youtube.com/watch?v=6-QJMRG_VgA\">https://www.youtube.com/watch?v=6-QJMRG_VgA</a></p>',NULL,NULL,NULL,'ten-san-pham:212-37203.html',1,'2020-02-23 09:01:40','2020-03-09 14:51:15',10,0),(5,'ádasd','Tên sản phẩm (Tiếng anh):',NULL,NULL,'/images/images/cam3.jpg','/images/images/oi.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'adasd-68705.html',1,'2020-02-24 19:04:44','2020-02-26 15:13:01',9,0);
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
INSERT INTO `settings` VALUES (2,NULL,'Số 157-159 Hàm Nghi, Q. Thanh Khê, Tp. Đà Nẵng, Việt Nam','No. 157-159 Ham Nghi, Thanh Khe dist., Da Nang City, Vietnam','221 An Ninh, Bình An, huyện Châu Thành, tỉnh Kiên Giang, Việt Nam','221 An Ninh, Binh An ward, Chau Thanh dist., Kien Giang, Vietnam','Số 152 Tân Mai, quận Hoàng Mai, Hà Nội, Việt Nam','152 Tan Mai Str., Hoang Mai dist, Ha Noi, Vietnam','CheeryFarm','+84 (0) 236 3898 803','+84 (0) 236 3898 802','+84 (0)984 825 584','info@cheerfarm.com','http://fb.com/cheeryfarm','http://youtube.com/channel/UCLBvZEXw1uhwQ-9mGNSrw4w',NULL,'aasdasdasd','smtp','smtp.mailtrap.io','2525','321ea23a9a071d','4dfde0eb59c7ab','tls','2020-02-22 05:22:53','2020-02-28 18:26:09');
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_me` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `is_block` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 la bi block, 0 chua block',
  `is_delete` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 la da xoa, 0 la chua xoa',
  `count_login` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'administrator',1,'admin@cheerfarm.com','$2y$10$hhUl5p1WLqLpEWugzg.FYeROTtDKfnM4kVDHsohjxIduGxPA9ue2y',NULL,2,0,0,0,'2020-02-27 14:17:24','2020-02-27 14:17:24','oNf4y9ORGJozoFB4QlrNwGik2dIA5EBaJMuUSKwfVOMi5N0BpMjnAt81VaR3');
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

-- Dump completed on 2020-03-23 20:23:00
