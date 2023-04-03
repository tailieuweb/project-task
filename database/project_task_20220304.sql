-- MySQL dump 10.13  Distrib 5.7.36, for Linux (x86_64)
--
-- Host: localhost    Database: project_task
-- ------------------------------------------------------
-- Server version	5.7.36

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
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `context_id` int(11) NOT NULL COMMENT 'Context ID',
  `category_id_parent` int(11) DEFAULT NULL COMMENT 'ID of category parent',
  `category_id_parent_str` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'List of ids of category parent',
  `category_id_child_str` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'List of ids of category child',
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category name',
  `category_order` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `category_slug` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Slug in URL',
  `category_url` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Category url',
  `category_icon` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Category icon',
  `category_overview` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Category overview',
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category description',
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,6,NULL,NULL,NULL,'Đề chương môn học',1,'de-chuong-mon-hoc','1','1','Đề chương môn học','<p>Đề chương m&ocirc;n học</p>',NULL,NULL,NULL,1,1,NULL,'2022-02-10 21:10:24','2022-02-10 21:10:24'),(2,6,NULL,NULL,NULL,'Đề thi',1,'de-thi','1','1','Đề chương môn học','<p>Đề chương m&ocirc;n học</p>',NULL,NULL,NULL,1,1,NULL,'2022-02-10 21:10:41','2022-02-10 21:10:41'),(3,6,NULL,NULL,NULL,'Họp Khoa',1,'hop-khoa','1','1','Đề chương môn học','<p>Đề chương m&ocirc;n học</p>',NULL,NULL,NULL,1,1,NULL,'2022-02-10 21:10:55','2022-02-10 21:10:55'),(4,6,NULL,NULL,NULL,'Họp tổ bộ môn',1,'hop-to-bo-mon','1','1','Đề chương môn học','<p>Đề chương m&ocirc;n học</p>',NULL,NULL,NULL,1,1,NULL,'2022-02-10 21:11:23','2022-02-10 21:11:23'),(5,1,NULL,NULL,NULL,'Teacher',1,'teacher','Category Slug','1','Category SlugCategory SlugCategory Slug','<p>Category SlugCategory Slug</p>',NULL,NULL,NULL,1,1,NULL,'2022-02-12 19:30:47','2022-02-12 19:30:47'),(6,1,NULL,NULL,NULL,'Student',1,'student','Category Slug','1','Category SlugCategory SlugCategory Slug','<p>Category SlugCategory Slug</p>',NULL,NULL,NULL,1,1,NULL,'2022-02-12 19:31:01','2022-02-12 19:31:01');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contexts`
--

DROP TABLE IF EXISTS `contexts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contexts` (
  `context_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `context_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context name',
  `context_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context references',
  `context_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context key',
  `context_slug` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Context slug',
  `context_notes` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Category overview',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`context_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contexts`
--

LOCK TABLES `contexts` WRITE;
/*!40000 ALTER TABLE `contexts` DISABLE KEYS */;
INSERT INTO `contexts` VALUES (1,'User level','user/level','ab7e417e2dddc5e5240b586d454e',NULL,NULL,99,NULL,1,1,NULL,'2022-02-10 18:43:29','2022-02-10 18:43:29'),(2,'User department','user/department','ab7e417e2dddc5e5240b586d454f',NULL,NULL,99,NULL,1,1,NULL,'2022-02-10 18:43:29','2022-02-10 18:43:29'),(3,'Admin posts','admin/posts','ab7e417e2dddc5240b586d454e',NULL,NULL,99,NULL,1,1,NULL,'2022-02-10 18:43:29','2022-02-10 18:43:29'),(4,'Admin slideshows','admin/slideshows','ab7e417e2dddc5e5240b586d454f',NULL,NULL,99,NULL,1,1,NULL,'2022-02-10 18:43:29','2022-02-10 18:43:29'),(5,'Admin pexcel','admin/pexcel','fde0118752a5ffc00dd7a06760eef',NULL,NULL,99,NULL,1,1,NULL,'2022-02-10 18:56:03','2022-02-10 18:56:03'),(6,'Admin task','admin/task','taskab7e417e2dddc5e5240b586d454e',NULL,NULL,99,NULL,1,1,NULL,'2022-02-10 20:49:43','2022-02-10 20:49:43');
/*!40000 ALTER TABLE `contexts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
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
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'superadmin','{\"_superadmin\":1}',0,NULL,NULL,NULL,NULL,NULL,'2022-02-10 18:43:28','2022-02-10 18:43:28'),(2,'editor','{\"_user-editor\":1,\"_group-editor\":1}',0,NULL,NULL,NULL,NULL,NULL,'2022-02-10 18:43:28','2022-02-10 18:43:28'),(3,'base admin','{\"_user-editor\":1}',0,NULL,NULL,NULL,NULL,NULL,'2022-02-10 18:43:28','2022-02-10 18:43:28');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_08_19_000000_create_failed_jobs_table',1),(2,'2019_12_14_000001_create_personal_access_tokens_table',1),(3,'2021_02_23_084351_create_categories_table',1),(4,'2021_02_23_084421_create_contexts_table',1),(5,'2021_02_24_095545_create_users_table',1),(6,'2021_02_24_095623_create_user_groups_table',1),(7,'2021_02_24_095637_create_groups_table',1),(8,'2021_02_24_100000_create_password_resets_table',1),(9,'2021_02_24_122145_create_profile_field_types',1),(10,'2021_02_24_122150_create_user_profile_table',1),(11,'2021_02_24_122155_create_profile_field',1),(12,'2021_02_24_160516_create_permission_table',1),(13,'2021_02_24_225988_migration_cartalyst_sentry_install_throttle',1),(14,'2021_02_23_084351_create_posts_table',2),(15,'2021_02_23_084351_create_slideshow_styles_table',2),(16,'2021_02_23_084351_create_slideshows_table',2),(17,'2021_09_11_084351_create_pexcels_table',3),(18,'2022_02_11_084351_create_tasks_table',4),(19,'2022_02_11_084351_create_task_user_table',5),(20,'2016_06_01_000001_create_oauth_auth_codes_table',6),(21,'2016_06_01_000002_create_oauth_access_tokens_table',6),(22,'2016_06_01_000003_create_oauth_refresh_tokens_table',6),(23,'2016_06_01_000004_create_oauth_clients_table',6),(24,'2016_06_01_000005_create_oauth_personal_access_clients_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
INSERT INTO `oauth_access_tokens` VALUES ('1c65612748dcf57a986e7177debc74e3724f703296525d1e20e44068b990e9ef3160ed2e0130212e',1,1,'API Token','[]',0,'2022-03-03 02:25:25','2022-03-03 02:25:25','2023-03-03 09:25:25'),('217a8122667ff81501c8e9959bc20bdbf852fd22c9c647c65c20e12acfe20c375a0b2f08564c93d7',1,1,'API Token','[]',0,'2022-03-01 11:03:43','2022-03-01 11:03:43','2023-03-01 18:03:43'),('224ee34b27ddd42331ab93cc0202606bdd4bb4b481f521df63aa14fd4797e4176834a7d08cb4b4e5',1,1,'API Token','[]',0,'2022-03-01 06:55:19','2022-03-01 06:55:19','2023-03-01 13:55:19'),('31cde307a3008c79b55fe8e2f8251680033ba6e975cc93fbf0255023336dd5cc7b98b0ed60b69fe8',1,1,'API Token','[]',0,'2022-03-01 01:54:32','2022-03-01 01:54:32','2023-03-01 08:54:32'),('38f05e80c47ddbce0ba82c6d66adfdb1421d29cd3962358cede127c86d1dd74c4f4a22a2dcede9fe',1,1,'API Token','[]',0,'2022-02-26 21:17:59','2022-02-26 21:17:59','2023-02-27 04:17:59'),('3e6557cd2185b335847860f82723321b11b4c42e083879ea83015e1872ce090189f3217567f4719d',1,1,'API Token','[]',0,'2022-03-02 00:17:23','2022-03-02 00:17:23','2023-03-02 07:17:23'),('446c0c8a9308de402b94a350819ef753b7cda68b3619612a07a9d016bfdff54b5d0dc671444986d5',1,1,'API Token','[]',0,'2022-03-01 11:00:28','2022-03-01 11:00:28','2023-03-01 18:00:28'),('44cd8ff2d6cb861bc4f0f271cd658d07fa8fbaa20d572f3eb39fb7a9447d9e2f0477d6dcd43db3bb',1,1,'API Token','[]',0,'2022-03-01 06:44:20','2022-03-01 06:44:20','2023-03-01 13:44:20'),('4f051bb1c19f85703e65e949b0b3ab99bc886f80836373faa17d7e81c60fb6a06080d74f8f4ab4ee',1,1,'API Token','[]',0,'2022-03-02 11:00:31','2022-03-02 11:00:31','2023-03-02 18:00:31'),('5506df5f4be5ba9344123a459da2ee7f5cbb6ab584a9356e49c907d1726df0dd340910fab86a7ff0',1,1,'API Token','[]',0,'2022-03-01 11:00:46','2022-03-01 11:00:46','2023-03-01 18:00:46'),('5ff3523ac4f5e82f99bfddd61036b53034668472f7c93ffd2a55b62b4e831aa8f6f99efe04ba0c34',1,1,'API Token','[]',0,'2022-03-01 09:47:30','2022-03-01 09:47:30','2023-03-01 16:47:30'),('61e3f0d8a27f8324d14d0131f9f13de22aa1e20dade0813a41ea2ad7cad874bb93ee454ad8715aa0',1,1,'API Token','[]',0,'2022-02-28 03:12:32','2022-02-28 03:12:32','2023-02-28 10:12:32'),('63bed1676b8dea267192cbc8350af2edd06fdc0c7f30d91c944dc044937c2beddeedf72c0173bec5',1,1,'API Token','[]',0,'2022-03-02 11:06:56','2022-03-02 11:06:56','2023-03-02 18:06:56'),('752478dd7eda6f23b98195a8becce2ebe9d2c5d6fe67da752b7a1328687c46ca9bf495648875c52d',1,1,'API Token','[]',0,'2022-03-02 02:55:58','2022-03-02 02:55:58','2023-03-02 09:55:58'),('798e55ee67877fe412d717c1a2811b76800baa3bbe0ab8c2025fa92e3c8f73018a33c78e6bb2ba31',1,1,'API Token','[]',0,'2022-03-01 12:39:01','2022-03-01 12:39:01','2023-03-01 19:39:01'),('7e71285d22845cfe63861f7c8a4f7919de370c36cd086a443e7f3032cb6e2ef02477dfff331da5fd',1,1,'API Token','[]',0,'2022-03-02 04:51:50','2022-03-02 04:51:50','2023-03-02 11:51:50'),('8327b415c426586b4a911e789af8fc1fbcd3351d7d80991f749a517bbcd972fdfea102fd6b3ad19a',1,1,'API Token','[]',0,'2022-03-03 02:32:48','2022-03-03 02:32:48','2023-03-03 09:32:48'),('83dcd425066ef2e2e935c3db19ad741ba2171a0031ce1df9bb9fdcb591238ebaced5d1e5f72b4991',1,1,'API Token','[]',0,'2022-02-26 21:16:41','2022-02-26 21:16:41','2023-02-27 04:16:41'),('88843c268b84fdab0da694db75a84337d86a9b8eefaa467689d8c69423a040a2a2345ba62dc92370',1,1,'API Token','[]',0,'2022-02-26 21:34:30','2022-02-26 21:34:30','2023-02-27 04:34:30'),('8bf37cdd30cde17217c615673758ed68037ce0683342454e534bdd9380cf974d8729df9e00804085',1,1,'API Token','[]',0,'2022-03-02 04:51:41','2022-03-02 04:51:41','2023-03-02 11:51:41'),('8c6d394cb8bd7590c2e2e5cdf12df9d91545473cf865a60631f8aaae256f2047cbf0542c44b2890a',1,1,'API Token','[]',0,'2022-02-26 21:33:32','2022-02-26 21:33:32','2023-02-27 04:33:32'),('91691b79db8dfa65ce8062e1ea6ec51f37ba778e29145feced925b825cfa01de4dd54e15c59d907d',1,1,'API Token','[]',0,'2022-03-02 02:56:13','2022-03-02 02:56:13','2023-03-02 09:56:13'),('91e46f19bd72b244a1980c51255a2a4ef8f782f36e87f730d56242a9a83c996b2418626a696b2ffb',1,1,'API Token','[]',0,'2022-03-01 06:39:07','2022-03-01 06:39:07','2023-03-01 13:39:07'),('96a2aa84036eac0958270e78ebc77a0cc808281a0f8578e24a211ca94d8c82b53d150881606c0c8c',1,1,'API Token','[]',0,'2022-03-01 12:39:13','2022-03-01 12:39:13','2023-03-01 19:39:13'),('9773f9c982d78804642d0b12731b0756e8cd64f0dc30c43ddf34f6fa507062f7fb26b23e6d8f2f40',1,1,'API Token','[]',0,'2022-03-01 06:41:02','2022-03-01 06:41:02','2023-03-01 13:41:02'),('9825930b1ad15d07c3ecd0ea543353927c22d5d070f8fee248cf3bc6b9a5e8b3a2b3c621204d9337',1,1,'API Token','[]',0,'2022-03-01 06:58:03','2022-03-01 06:58:03','2023-03-01 13:58:03'),('99f995b7e06cfb5142df76d772ecdee8e455389202dffb234dcff82ac831659e7998cf55a4e340e0',1,1,'API Token','[]',0,'2022-03-01 11:03:22','2022-03-01 11:03:22','2023-03-01 18:03:22'),('9bee4c3745433f02e119ee8ce2a87131cb5aaa4618906e558bb4d937faaeb373b1c2034821fdfe16',1,1,'API Token','[]',0,'2022-02-26 21:16:11','2022-02-26 21:16:11','2023-02-27 04:16:11'),('a91256775f2bedfde93d430d440a55a1a1e6b693cec4085b1a70be188b7dda1467dce3bbf9c1b6c4',1,1,'API Token','[]',0,'2022-02-26 21:19:23','2022-02-26 21:19:23','2023-02-27 04:19:23'),('b702194ec566c09f0b737775187a5ee1c7de91ad5c4f75af9dccd27a367a0e8ae1757db1052c1091',1,1,'API Token','[]',0,'2022-03-02 04:59:29','2022-03-02 04:59:29','2023-03-02 11:59:29'),('bb24daf6422cd94cb81cec984d56745eac626e55fa7ebc8348f4ccb79912a0eb209adf9f408cc110',1,1,'API Token','[]',0,'2022-03-02 02:40:57','2022-03-02 02:40:57','2023-03-02 09:40:57'),('c9d9de976420450a5128d6087461ddfe78b51b199dafa6de8c367ddad0d0bd2b96272de68d9ec0e8',1,1,'API Token','[]',0,'2022-03-01 09:47:10','2022-03-01 09:47:10','2023-03-01 16:47:10'),('d5a2e46abcfe39e093c8337e839139ce8e2811309cc74686cae7d01017104bd53af98835dbe0247a',1,1,'API Token','[]',0,'2022-03-02 11:03:09','2022-03-02 11:03:09','2023-03-02 18:03:09'),('d68a738f1b4b47cfc1a4618349b005f760111dc26b9e330ad3d64040d243bd582ed00180378a0ee8',1,1,'API Token','[]',0,'2022-02-26 21:18:51','2022-02-26 21:18:51','2023-02-27 04:18:51'),('e49daa4ab0de7706a21b078ea7abfd06dc91a7a85e339a8a8a9aed16648bd6fb52eb1b19bc2e58ef',1,1,'API Token','[]',0,'2022-03-01 01:45:23','2022-03-01 01:45:23','2023-03-01 08:45:23'),('e5bb88aa27b2f0947220c3ff84140898039c5ac3294983a2e5be2619e0649d30af0eb51111e25950',1,1,'API Token','[]',0,'2022-03-01 06:55:33','2022-03-01 06:55:33','2023-03-01 13:55:33'),('e92bba6eb1a90ad2e11f1d216dc2690ba74b1fd69e79aa5cd1628501a60da295f30ad28814e69873',1,1,'API Token','[]',0,'2022-03-02 04:59:18','2022-03-02 04:59:18','2023-03-02 11:59:18'),('ed661574c64265d7387114fda2ac838cbf01da1661e0eaf01a554ea31dc5fe297163a9ee888ec6be',1,1,'API Token','[]',0,'2022-03-01 22:06:30','2022-03-01 22:06:30','2023-03-02 05:06:30'),('fca112d221fb463c7393a549dc315865d6c1244c3cd17abc848ed3c4754ad2894c0d65efca8e97d3',1,1,'API Token','[]',0,'2022-03-02 10:51:54','2022-03-02 10:51:54','2023-03-02 17:51:54');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` VALUES (1,NULL,'Laravel Personal Access Client','ZYreVmD1uSrwo1Uf288KEJOxJarElcGPGOVjR0rm',NULL,'http://localhost',1,0,0,'2022-02-26 20:36:55','2022-02-26 20:36:55'),(2,NULL,'Laravel Password Grant Client','kheDbX7h3Ti8ksNWPh8npXkX2Y9d4uGbeDsSihiE','users','http://localhost',0,1,0,'2022-02-26 20:36:55','2022-02-26 20:36:55');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` VALUES (1,1,'2022-02-26 20:36:55','2022-02-26 20:36:55');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
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
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL COMMENT 'Category ID',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Permission name',
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Permission slug',
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci COMMENT 'Permission description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission`
--

LOCK TABLES `permission` WRITE;
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
INSERT INTO `permission` VALUES (1,NULL,'superadmin','_superadmin',0,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-10 18:43:28','2022-02-10 18:43:28'),(2,NULL,'user editor','_user-editor',0,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-10 18:43:28','2022-02-10 18:43:28'),(3,NULL,'group editor','_group-editor',0,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-10 18:43:28','2022-02-10 18:43:28'),(4,NULL,'permission editor','_permission-editor',0,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-10 18:43:28','2022-02-10 18:43:28'),(5,NULL,'profile type editor','_profile-editor',0,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-10 18:43:28','2022-02-10 18:43:28');
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pexcels`
--

DROP TABLE IF EXISTS `pexcels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pexcels` (
  `pexcel_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) NOT NULL COMMENT 'Category ID',
  `pexcel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
  `pexcel_range_data` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Range data',
  `pexcel_value` text COLLATE utf8mb4_unicode_ci COMMENT 'Json value',
  `pexcel_file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'File path',
  `pexcel_description` text COLLATE utf8mb4_unicode_ci COMMENT 'Description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pexcel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pexcels`
--

LOCK TABLES `pexcels` WRITE;
/*!40000 ALTER TABLE `pexcels` DISABLE KEYS */;
/*!40000 ALTER TABLE `pexcels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) DEFAULT NULL COMMENT 'Category ID',
  `slideshow_id` int(11) DEFAULT NULL COMMENT 'Slideshow ID',
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post name',
  `post_order` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `post_slug` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slug in URL',
  `post_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post overview',
  `post_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post description',
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `post_files` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The list of attachment filenames',
  `post_cache_comments` text COLLATE utf8mb4_unicode_ci COMMENT 'Comments of post',
  `post_cache_other_posts` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The post id of related posts ',
  `post_cache_time` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_field`
--

DROP TABLE IF EXISTS `profile_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `profile_id` int(10) unsigned NOT NULL,
  `profile_field_type_id` int(10) unsigned NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profile_field_profile_id_profile_field_type_id_unique` (`profile_id`,`profile_field_type_id`),
  KEY `profile_field_profile_field_type_id_foreign` (`profile_field_type_id`),
  KEY `profile_field_profile_id_index` (`profile_id`),
  CONSTRAINT `profile_field_profile_field_type_id_foreign` FOREIGN KEY (`profile_field_type_id`) REFERENCES `profile_field_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `profile_field_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `user_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_field`
--

LOCK TABLES `profile_field` WRITE;
/*!40000 ALTER TABLE `profile_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_field_type`
--

DROP TABLE IF EXISTS `profile_field_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_field_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_field_type`
--

LOCK TABLES `profile_field_type` WRITE;
/*!40000 ALTER TABLE `profile_field_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile_field_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slideshow_styles`
--

DROP TABLE IF EXISTS `slideshow_styles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slideshow_styles` (
  `style_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `style_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Style name',
  `style_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Style image',
  `style_view_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'View file',
  `style_js_file` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Js file',
  `style_css_file` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Css file',
  `style_view_content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'View content',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slideshow_styles`
--

LOCK TABLES `slideshow_styles` WRITE;
/*!40000 ALTER TABLE `slideshow_styles` DISABLE KEYS */;
/*!40000 ALTER TABLE `slideshow_styles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slideshows`
--

DROP TABLE IF EXISTS `slideshows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slideshows` (
  `slideshow_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) NOT NULL COMMENT 'Category ID',
  `style_id` int(11) NOT NULL COMMENT 'Style ID',
  `slideshow_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow name',
  `slideshow_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow overview',
  `slideshow_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow description',
  `slideshow_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `slideshow_images` text COLLATE utf8mb4_unicode_ci COMMENT 'List of image paths',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`slideshow_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slideshows`
--

LOCK TABLES `slideshows` WRITE;
/*!40000 ALTER TABLE `slideshows` DISABLE KEYS */;
/*!40000 ALTER TABLE `slideshows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task` (
  `task_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) DEFAULT NULL COMMENT 'Category ID',
  `task_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post name',
  `task_order` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `task_slug` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slug in URL',
  `task_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post overview',
  `task_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post description',
  `task_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `task_files` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The list of attachment filenames',
  `task_cache_comments` text COLLATE utf8mb4_unicode_ci COMMENT 'Comments of post',
  `task_cache_other_posts` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The post id of related posts ',
  `task_cache_time` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task_user`
--

DROP TABLE IF EXISTS `task_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task_user` (
  `assignee_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `user_id` int(11) NOT NULL COMMENT 'User id',
  `task_id` int(11) NOT NULL COMMENT 'Task id',
  `notes` text COLLATE utf8mb4_unicode_ci COMMENT 'Task notes',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`assignee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task_user`
--

LOCK TABLES `task_user` WRITE;
/*!40000 ALTER TABLE `task_user` DISABLE KEYS */;
INSERT INTO `task_user` VALUES (1,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-27 03:04:43'),(2,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-27 03:04:43'),(3,3,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-27 03:04:43'),(4,4,1,'11',1,NULL,4,4,NULL,NULL,'2022-03-02 00:18:49'),(15,2,2,NULL,99,NULL,2,2,NULL,'2022-02-28 01:37:53','2022-02-28 01:50:10'),(16,3,3,NULL,99,NULL,3,3,NULL,'2022-02-28 01:37:53','2022-02-28 01:37:53'),(17,3,3,NULL,99,NULL,3,3,NULL,'2022-02-28 01:38:11','2022-02-28 01:38:11'),(18,3,3,NULL,99,NULL,3,3,NULL,'2022-02-28 01:38:31','2022-02-28 01:38:31'),(19,3,3,NULL,99,NULL,3,3,NULL,'2022-02-28 01:42:56','2022-02-28 01:42:56'),(20,3,2,NULL,99,NULL,3,3,NULL,'2022-02-28 01:47:22','2022-02-28 01:50:10'),(21,2,6,NULL,99,NULL,2,2,NULL,'2022-02-28 01:56:23','2022-02-28 01:56:52'),(22,3,6,NULL,99,NULL,3,3,NULL,'2022-02-28 01:56:23','2022-02-28 01:56:52'),(23,2,6,NULL,99,NULL,2,2,NULL,'2022-02-28 01:57:03','2022-02-28 01:57:03'),(24,1,6,NULL,99,NULL,3,3,NULL,'2022-02-28 01:57:03','2022-02-28 01:57:03');
/*!40000 ALTER TABLE `task_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `task_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) DEFAULT NULL COMMENT 'Category ID',
  `task_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post name',
  `task_order` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `task_slug` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slug in URL',
  `task_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post overview',
  `task_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post description',
  `task_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `task_files` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The list of attachment filenames',
  `task_cache_comments` text COLLATE utf8mb4_unicode_ci COMMENT 'Comments of post',
  `task_cache_other_posts` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The post id of related posts ',
  `task_cache_time` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (1,3,'asdfasdf',NULL,'asdfasdf','asdfasdf','<p>adsfasdfasdf</p>','/photos/1/backgroud.png','[\"\\/files\\/1\\/backgroud.png\"]',NULL,NULL,NULL,33,NULL,1,1,NULL,'2022-02-10 21:31:27','2022-02-11 00:21:40'),(2,1,'asdfasdf asdf asfda dfasdf',NULL,'asdfasdf-asdf-asfda-dfasdf','asdf asdf','<p>asdf asdf asdfad fasdf asdfasdf&nbsp;</p>',NULL,'[]',NULL,NULL,NULL,99,NULL,1,1,NULL,'2022-02-26 20:07:17','2022-02-26 20:07:17'),(3,1,'tdfasd fasdf asd',NULL,'tdfasd-fasdf-asd','asd fasdf asdf','<p>asf dasdf asdf asdf</p>',NULL,'[]',NULL,NULL,NULL,99,NULL,1,1,NULL,'2022-02-28 01:51:39','2022-02-28 01:51:39'),(4,1,'asdfasdf',NULL,'asdfasdf','asdf asdf','<p>asdf asdasdf asdf asdf</p>',NULL,'[]',NULL,NULL,NULL,99,NULL,1,1,NULL,'2022-02-28 01:52:24','2022-02-28 01:52:24'),(5,1,'adsfa df',NULL,'adsfa-df','adsf asdf asdf','<p>ada dsf asdf asdf</p>',NULL,'[]',NULL,NULL,NULL,99,NULL,1,1,NULL,'2022-02-28 01:54:33','2022-02-28 01:54:33'),(6,1,'1111',NULL,'1111','adsf asdf asdf','<p>ada dsf asdf asdf</p>',NULL,'[]',NULL,NULL,NULL,99,NULL,1,1,NULL,'2022-02-28 01:56:23','2022-02-28 03:04:16');
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `throttle`
--

LOCK TABLES `throttle` WRITE;
/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;
/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `avatar` blob,
  `code` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` smallint(6) NOT NULL DEFAULT '0',
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_profile_user_id_index` (`user_id`),
  CONSTRAINT `user_profile_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_profile`
--

LOCK TABLES `user_profile` WRITE;
/*!40000 ALTER TABLE `user_profile` DISABLE KEYS */;
INSERT INTO `user_profile` VALUES (1,1,'11111','11111',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-10 18:43:29','2022-02-10 18:43:29'),(2,2,'22222','22222',NULL,NULL,5,NULL,'admin',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-12 19:28:30','2022-02-12 19:32:39'),(3,3,'33333','33333',NULL,NULL,5,NULL,'admin',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-12 19:29:20','2022-02-12 19:32:55'),(4,4,NULL,NULL,NULL,NULL,5,NULL,'admin@admin.com',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-28 17:30:43','2022-02-28 17:32:27');
/*!40000 ALTER TABLE `user_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'User id',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User email',
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'User name',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User password',
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin@admin.com','admin','$2y$10$ebLtjeQ1oXYcTo1UnLIQh.be5atp9FdmElP.oQezFdj9/vvvYFZfK',NULL,1,0,NULL,NULL,'2022-03-01 11:36:06','$2y$10$LI/CmjHvzCCDobJFP2boV.zb2L1l.3peQNri2CY1W02qQ4abDCYLO',NULL,0,NULL,NULL,NULL,NULL,NULL,'2022-02-10 18:43:29','2022-03-01 11:36:06'),(2,'noteacher@gmail.com',NULL,'$2y$10$xBwMJfj55SUVwue.fUMWXuPcKsIpetg4g/9g8HnhSbVSokab/frt6',NULL,1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2022-02-12 19:28:30','2022-02-12 19:28:51'),(3,'teacher@gmail.com',NULL,'$2y$10$dIbVr4FBRota49piKzQQxOfNIoKV/RaQXTVMququ3BeDfNAfIWdEi',NULL,1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2022-02-12 19:29:20','2022-02-12 19:29:20'),(4,'ptnhuan@tdc.edu.vn',NULL,'$2y$10$BZ..Qq/HGgjH/bPdrGeZ9eKNkH6n82EqiklFLXLeeMMG3lcY/INzm',NULL,1,0,NULL,NULL,'2022-02-28 17:35:55','$2y$10$Ui/VsO8ngW1A7DKWfhFtv.UTAFWWz8vUFR7YCArNUeFjsK07TxRr6',NULL,0,NULL,NULL,NULL,NULL,NULL,'2022-02-28 17:30:43','2022-02-28 17:35:55');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-04 21:02:31
