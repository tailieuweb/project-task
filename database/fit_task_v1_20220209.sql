-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 09:37 AM
-- Server version: 10.4.19-MariaDB-log
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit_task_v1_20220209`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL COMMENT 'Primary key',
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `categories`
--

TRUNCATE TABLE `categories`;
--
-- Dumping data for table `categories`
--

INSERT DELAYED IGNORE INTO `categories` (`category_id`, `context_id`, `category_id_parent`, `category_id_parent_str`, `category_id_child_str`, `category_name`, `category_order`, `category_slug`, `category_url`, `category_icon`, `category_overview`, `category_description`, `category_image`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, 'Student', 1, 'student', '1', '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', NULL, NULL, NULL, 1, 1, NULL, '2022-03-02 02:38:00', '2022-03-02 02:38:00'),
(2, 1, NULL, NULL, NULL, 'Teacher', 1, 'teacher', '1', '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', NULL, NULL, NULL, 1, 1, NULL, '2022-03-02 02:38:19', '2022-03-02 02:38:19'),
(3, 5, NULL, NULL, NULL, 'Ôn luyện thi', 1, 'on-luyen-thi', '1', '1', 'Tổ chức thi Lập trình viên website giỏi cấp trường', '<p>Tổ chức thi Lập tr&igrave;nh vi&ecirc;n website giỏi cấp trường</p>', NULL, NULL, NULL, 1, 1, NULL, '2022-03-03 00:08:19', '2022-03-03 00:08:19'),
(4, 5, NULL, NULL, NULL, 'Họp', 1, 'hop', '1', '1', 'Tổ chức thi Lập trình viên website giỏi cấp trường', '<p>Họp</p>', NULL, NULL, NULL, 1, 1, NULL, '2022-03-03 00:09:16', '2022-03-03 00:09:16'),
(5, 5, NULL, NULL, NULL, 'Nghiên cứu khoa học', 1, 'nghien-cuu-khoa-hoc', '1', '1', 'Tổ chức thi Lập trình viên website giỏi cấp trường', '<p>Nghi&ecirc;n cứu khoa học</p>', NULL, NULL, NULL, 1, 1, NULL, '2022-03-03 00:10:04', '2022-03-03 00:10:04'),
(6, 5, NULL, NULL, NULL, 'Cập nhật chương trình đào tạo', 1, 'cap-nhat-chuong-trinh-dao-tao', '1', '1', 'Tổ chức thi Lập trình viên website giỏi cấp trường', '<p>C&acirc;̣p nh&acirc;̣t chương trình đào tạo</p>', NULL, NULL, NULL, 1, 1, NULL, '2022-03-03 00:10:25', '2022-03-03 00:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `contexts`
--

DROP TABLE IF EXISTS `contexts`;
CREATE TABLE `contexts` (
  `context_id` int(10) UNSIGNED NOT NULL COMMENT 'Primary key',
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `contexts`
--

TRUNCATE TABLE `contexts`;
--
-- Dumping data for table `contexts`
--

INSERT DELAYED IGNORE INTO `contexts` (`context_id`, `context_name`, `context_ref`, `context_key`, `context_slug`, `context_notes`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'User level', 'user/level', 'ab7e417e2dddc5e5240b586d454e', NULL, NULL, 99, NULL, 1, 1, NULL, '2022-03-02 02:23:26', '2022-03-02 02:23:26'),
(2, 'User department', 'user/department', 'ab7e417e2dddc5e5240b586d454f', NULL, NULL, 99, NULL, 1, 1, NULL, '2022-03-02 02:23:26', '2022-03-02 02:23:26'),
(3, 'Admin posts', 'admin/posts', 'ab7e417e2dddc5240b586d454e', NULL, NULL, 99, NULL, 1, 1, NULL, '2022-03-02 02:23:26', '2022-03-02 02:23:26'),
(4, 'Admin slideshows', 'admin/slideshows', 'ab7e417e2dddc5e5240b586d454f', NULL, NULL, 99, NULL, 1, 1, NULL, '2022-03-02 02:23:26', '2022-03-02 02:23:26'),
(5, 'Admin task', 'admin/task', 'taskab7e417e2dddc5e5240b586d454e', NULL, NULL, 99, NULL, 1, 1, NULL, '2022-03-02 02:28:44', '2022-03-02 02:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `failed_jobs`
--

TRUNCATE TABLE `failed_jobs`;
-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `groups`
--

TRUNCATE TABLE `groups`;
--
-- Dumping data for table `groups`
--

INSERT DELAYED IGNORE INTO `groups` (`id`, `name`, `permissions`, `protected`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '{\"_superadmin\":1}', 0, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:23:24', '2022-03-02 02:23:24'),
(2, 'editor', '{\"_user-editor\":1,\"_group-editor\":1}', 0, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:23:24', '2022-03-02 02:23:24'),
(3, 'base admin', '{\"_user-editor\":1}', 0, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:23:24', '2022-03-02 02:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `migrations`
--

TRUNCATE TABLE `migrations`;
--
-- Dumping data for table `migrations`
--

INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(2, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(3, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(4, '2016_06_01_000004_create_oauth_clients_table', 1),
(5, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2021_02_23_084351_create_categories_table', 1),
(9, '2021_02_23_084351_create_posts_table', 1),
(10, '2021_02_23_084351_create_slideshow_styles_table', 1),
(11, '2021_02_23_084351_create_slideshows_table', 1),
(12, '2021_02_23_084421_create_contexts_table', 1),
(13, '2021_02_24_095545_create_users_table', 1),
(14, '2021_02_24_095623_create_user_groups_table', 1),
(15, '2021_02_24_095637_create_groups_table', 1),
(16, '2021_02_24_100000_create_password_resets_table', 1),
(17, '2021_02_24_122145_create_profile_field_types', 1),
(18, '2021_02_24_122150_create_user_profile_table', 1),
(19, '2021_02_24_122155_create_profile_field', 1),
(20, '2021_02_24_160516_create_permission_table', 1),
(21, '2021_02_24_225988_migration_cartalyst_sentry_install_throttle', 1),
(22, '2021_09_11_084351_create_pexcels_table', 1),
(26, '2022_02_11_084351_create_task_user_table', 2),
(27, '2022_02_11_084351_create_tasks_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `oauth_access_tokens`
--

TRUNCATE TABLE `oauth_access_tokens`;
--
-- Dumping data for table `oauth_access_tokens`
--

INSERT DELAYED IGNORE INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0037c1cdf95a41ac283cabb036ec607888e132a6bbba1ffaedf2df3e59429e2b35721d221bb406a6', 1, 1, 'API Token', '[]', 0, '2022-03-02 23:32:47', '2022-03-02 23:32:47', '2023-03-03 06:32:47'),
('16c11d6616a5b0673408043cfa3067301ae8cfe176ad315b14b1f057ddb57e9d23e6f93304028cd1', 1, 1, 'API Token', '[]', 0, '2022-03-02 19:52:59', '2022-03-02 19:52:59', '2023-03-03 02:52:59'),
('1976724793df6043c4c82a918805212af6a1439e2620b681f1a38672b5088e0019aef5ab66f30853', 1, 1, 'API Token', '[]', 0, '2022-03-02 23:33:10', '2022-03-02 23:33:10', '2023-03-03 06:33:10'),
('24a1c554821f7851d9896d1cb6ad69f109fd049c7dae695ce9c35504610419ef885cd0fe63b2cf88', 1, 1, 'API Token', '[]', 0, '2022-03-02 22:26:18', '2022-03-02 22:26:18', '2023-03-03 05:26:18'),
('49d921b8e0813bd1ab553dc36e33603d4cd5ea441fd24f0fe0dc8b9b82ec1ebdb5ad5bb3ff364a11', 1, 1, 'API Token', '[]', 0, '2022-03-02 23:32:29', '2022-03-02 23:32:29', '2023-03-03 06:32:29'),
('6ed531b79634cbf1f8aa1ed3ab25f3bc43ab3fa81ed6ee1ece711fab89a45840b31ab9413b128d64', 1, 1, 'API Token', '[]', 0, '2022-03-02 22:25:54', '2022-03-02 22:25:54', '2023-03-03 05:25:54'),
('835e04c41548d13f24f48eec67a9323902370ec2d6660eff257d86c76fe9211f5a2afc5775ca3d7b', 1, 1, 'API Token', '[]', 0, '2022-03-10 01:36:57', '2022-03-10 01:36:57', '2023-03-10 08:36:57'),
('e09fb5126061ec989834f00663fed97475d0c52a92fb6816969e482106549ce03dc34f4274641eb1', 1, 1, 'API Token', '[]', 0, '2022-03-10 01:34:14', '2022-03-10 01:34:14', '2023-03-10 08:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `oauth_auth_codes`
--

TRUNCATE TABLE `oauth_auth_codes`;
-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `oauth_clients`
--

TRUNCATE TABLE `oauth_clients`;
--
-- Dumping data for table `oauth_clients`
--

INSERT DELAYED IGNORE INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'koyVDZW8CRQdFWZsZFZvptjBl9o6m7ArdaBGAjgA', NULL, 'http://localhost', 1, 0, 0, '2022-03-02 19:52:50', '2022-03-02 19:52:50'),
(2, NULL, 'Laravel Password Grant Client', 'pFxogmKNodpz47k3iZQgLkXOCy5OBTunFYBqP1p2', 'users', 'http://localhost', 0, 1, 0, '2022-03-02 19:52:50', '2022-03-02 19:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `oauth_personal_access_clients`
--

TRUNCATE TABLE `oauth_personal_access_clients`;
--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT DELAYED IGNORE INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-03-02 19:52:50', '2022-03-02 19:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `oauth_refresh_tokens`
--

TRUNCATE TABLE `oauth_refresh_tokens`;
-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `password_resets`
--

TRUNCATE TABLE `password_resets`;
-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE `permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL COMMENT 'Category ID',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Permission name',
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Permission slug',
  `protected` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Permission description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `permission`
--

TRUNCATE TABLE `permission`;
--
-- Dumping data for table `permission`
--

INSERT DELAYED IGNORE INTO `permission` (`id`, `category_id`, `name`, `permission`, `protected`, `description`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'superadmin', '_superadmin', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:23:23', '2022-03-02 02:23:23'),
(2, NULL, 'user editor', '_user-editor', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:23:23', '2022-03-02 02:23:23'),
(3, NULL, 'group editor', '_group-editor', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:23:23', '2022-03-02 02:23:23'),
(4, NULL, 'permission editor', '_permission-editor', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:23:23', '2022-03-02 02:23:23'),
(5, NULL, 'profile type editor', '_profile-editor', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:23:23', '2022-03-02 02:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `personal_access_tokens`
--

TRUNCATE TABLE `personal_access_tokens`;
-- --------------------------------------------------------

--
-- Table structure for table `pexcels`
--

DROP TABLE IF EXISTS `pexcels`;
CREATE TABLE `pexcels` (
  `pexcel_id` int(10) UNSIGNED NOT NULL COMMENT 'Primary key',
  `category_id` int(11) NOT NULL COMMENT 'Category ID',
  `pexcel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
  `pexcel_range_data` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Range data',
  `pexcel_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Json value',
  `pexcel_file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'File path',
  `pexcel_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `pexcels`
--

TRUNCATE TABLE `pexcels`;
-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `post_id` int(10) UNSIGNED NOT NULL COMMENT 'Primary key',
  `category_id` int(11) DEFAULT NULL COMMENT 'Category ID',
  `slideshow_id` int(11) DEFAULT NULL COMMENT 'Slideshow ID',
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post name',
  `post_order` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `post_slug` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slug in URL',
  `post_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post overview',
  `post_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post description',
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `post_files` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The list of attachment filenames',
  `post_cache_comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Comments of post',
  `post_cache_other_posts` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The post id of related posts ',
  `post_cache_time` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `posts`
--

TRUNCATE TABLE `posts`;
-- --------------------------------------------------------

--
-- Table structure for table `profile_field`
--

DROP TABLE IF EXISTS `profile_field`;
CREATE TABLE `profile_field` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `profile_field_type_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `profile_field`
--

TRUNCATE TABLE `profile_field`;
-- --------------------------------------------------------

--
-- Table structure for table `profile_field_type`
--

DROP TABLE IF EXISTS `profile_field_type`;
CREATE TABLE `profile_field_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `profile_field_type`
--

TRUNCATE TABLE `profile_field_type`;
-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

DROP TABLE IF EXISTS `slideshows`;
CREATE TABLE `slideshows` (
  `slideshow_id` int(10) UNSIGNED NOT NULL COMMENT 'Primary key',
  `category_id` int(11) NOT NULL COMMENT 'Category ID',
  `style_id` int(11) NOT NULL COMMENT 'Style ID',
  `slideshow_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow name',
  `slideshow_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow overview',
  `slideshow_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow description',
  `slideshow_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `slideshow_images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'List of image paths',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `slideshows`
--

TRUNCATE TABLE `slideshows`;
-- --------------------------------------------------------

--
-- Table structure for table `slideshow_styles`
--

DROP TABLE IF EXISTS `slideshow_styles`;
CREATE TABLE `slideshow_styles` (
  `style_id` int(10) UNSIGNED NOT NULL COMMENT 'Primary key',
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `slideshow_styles`
--

TRUNCATE TABLE `slideshow_styles`;
-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `task_id` int(10) UNSIGNED NOT NULL COMMENT 'Primary key',
  `category_id` int(11) DEFAULT NULL COMMENT 'Category ID',
  `task_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Task name',
  `task_start_date` date DEFAULT NULL COMMENT 'Task start date',
  `task_end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Task end date',
  `task_size` tinyint(4) DEFAULT NULL COMMENT 'Task size',
  `task_priority` tinyint(4) DEFAULT NULL COMMENT 'Task priority',
  `task_order` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `task_slug` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slug in URL',
  `task_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post overview',
  `task_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post description',
  `task_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `task_files` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The list of attachment filenames',
  `task_cache_comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Comments of post',
  `task_cache_other_posts` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The post id of related posts ',
  `task_cache_time` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `tasks`
--

TRUNCATE TABLE `tasks`;
--
-- Dumping data for table `tasks`
--

INSERT DELAYED IGNORE INTO `tasks` (`task_id`, `category_id`, `task_name`, `task_start_date`, `task_end_date`, `task_size`, `task_priority`, `task_order`, `task_slug`, `task_overview`, `task_description`, `task_image`, `task_files`, `task_cache_comments`, `task_cache_other_posts`, `task_cache_time`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 'Họp trực tuyến với Freesia', '2022-02-17', '2022-02-17', 1, 3, NULL, 'hop-truc-tuyen-voi-freesia', 'Họp trực tuyến với Freesia có BGH tham dự', '<p>Tham gia bu&ocirc;̉i họp tại h&ocirc;̣i trường B, GV Khoa CNTT tham gia đ&acirc;̀y đủ</p>\r\n<p>Bu&ocirc;̉i họp có BGH tham dự</p>', NULL, '[]', NULL, NULL, NULL, 99, NULL, 1, 1, NULL, '2022-03-03 20:22:07', '2022-03-07 00:55:44'),
(2, 6, 'Cập nhật chương trình đào tạo ngành CNTT thường năm 2022', '2022-03-13', '2022-03-16', 1, 1, NULL, 'cap-nhat-chuong-trinh-dao-tao-nganh-cntt-thuong-nam-2022', '222222222222222222222222', '<p>222222222222222222222222</p>', NULL, NULL, NULL, NULL, NULL, 3, NULL, 2, 2, NULL, '2022-03-03 20:27:17', '2022-03-07 02:50:06'),
(3, NULL, 'Xử lý hồ sơ thực tập doanh nghiệp', '2022-01-01', '2022-01-20', 1, 2, NULL, 'xu-ly-ho-so-thuc-tap-doanh-nghiep', '222222222222222222222222', '<p>222222222222222222222222</p>', NULL, '[]', NULL, NULL, NULL, 99, NULL, 1, 1, NULL, '2022-03-06 21:43:53', '2022-03-06 21:44:41'),
(4, NULL, 'Xử lý/import hồ sơ thực tập tốt nghiệp', '2022-01-01', '2022-01-20', 1, 2, NULL, 'xu-ly-ho-so-thuc-tap-doanh-nghiep', '222222222222222222222222', '<p>222222222222222222222222</p>', NULL, '[]', NULL, NULL, NULL, 99, NULL, 1, 1, NULL, '2022-03-06 21:44:59', '2022-03-06 21:44:59'),
(5, NULL, 'Hội đồng xét duyệt đề cương NCKH của SV 2021-2022', '2022-01-01', '2022-01-20', 1, 2, NULL, 'xu-ly-ho-so-thuc-tap-doanh-nghiep', '222222222222222222222222', '<p>222222222222222222222222</p>', NULL, '[]', NULL, NULL, NULL, 99, NULL, 1, 1, NULL, '2022-03-06 21:45:06', '2022-03-06 21:45:06'),
(6, NULL, 'Thực hiện đề tài NCKH 21-22', '2022-01-01', '2022-01-20', 1, 2, NULL, 'thuc-hien-de-tai-nckh-21-22', '222222222222222222222222', '<p>222222222222222222222222</p>', NULL, '[]', NULL, NULL, NULL, 99, NULL, 1, 1, NULL, '2022-03-06 21:45:13', '2022-03-06 21:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `task_user`
--

DROP TABLE IF EXISTS `task_user`;
CREATE TABLE `task_user` (
  `assignee_id` int(10) UNSIGNED NOT NULL COMMENT 'Primary key',
  `user_id` int(11) NOT NULL COMMENT 'User id',
  `task_id` int(11) NOT NULL COMMENT 'Task id',
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Task notes',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `task_user`
--

TRUNCATE TABLE `task_user`;
--
-- Dumping data for table `task_user`
--

INSERT DELAYED IGNORE INTO `task_user` (`assignee_id`, `user_id`, `task_id`, `notes`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'vắng', 4, NULL, 2, 2, '2022-03-10 00:38:18', '2022-03-03 20:22:07', '2022-03-10 00:38:18'),
(2, 3, 1, NULL, 99, NULL, 3, 3, '2022-03-10 00:38:18', '2022-03-03 20:22:07', '2022-03-10 00:38:18'),
(3, 2, 2, '222222222222222222222', 3, NULL, 2, 2, NULL, '2022-03-03 20:27:17', '2022-03-07 02:50:06'),
(4, 1, 1, NULL, 99, NULL, 1, 1, NULL, '2022-03-10 00:26:42', '2022-03-10 00:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT 0,
  `suspended` tinyint(1) NOT NULL DEFAULT 0,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `throttle`
--

TRUNCATE TABLE `throttle`;
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'User id',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User email',
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'User name',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User password',
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `activation_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT DELAYED IGNORE INTO `users` (`id`, `email`, `user_name`, `password`, `permissions`, `activated`, `banned`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `protected`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'admin', '$2y$10$b0spyewY6I3KejkSFKP8jON67EohAocQuc/7DSd.m.0.q3l/zxTGi', NULL, 1, 0, NULL, NULL, '2022-03-10 00:26:17', '$2y$10$8i0HeACKrlj6C/ERxvIiNeZpzZQBYHQbTdn/vYbJ6YBsi9Y6Zb6zG', NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:23:24', '2022-03-10 00:26:17'),
(2, 'ptnhuan@tdc.edu.vn', NULL, '$2y$10$VFsHXQN01utR3GdH/R..1u8aKGTdG8TcaecsaDzMZtmljHjOR/3gK', NULL, 1, 0, NULL, NULL, '2022-03-07 02:49:49', '$2y$10$sv8xOC.pbrJTreQJ7biWou5VVfqvD8jHgSnI1l6RKmBoZ6yxPqW.O', NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:37:17', '2022-03-07 02:49:49'),
(3, 'thept@tdc.edu.vn', NULL, '$2y$10$2vCMlwqJFUCVaGYmLe9nW.Rg4VhcmVddQAsOSGhZwGNy/LHkgIxTu', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:39:09', '2022-03-02 02:39:09'),
(4, 'cuongtk@tdc.edu.vn', NULL, '$2y$10$EDLlHy4YZChl2cbmKGe7teOly53FdwaxYvckzsx899q.H7FoyeH.a', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:39:13', '2022-03-07 00:39:13'),
(5, 'hoanghn@tdc.edu.vn', NULL, '$2y$10$Xl8/G8ek2vsCmOEb5GYraumH6zgAcod21wr.Vueu5UVKioNNKRD5.', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:39:33', '2022-03-07 00:39:33'),
(6, 'mynth@tdc.edu.vn', NULL, '$2y$10$8faYCjheaENouUYTqT3HdegZjV4fsoLzOLITtw4Ea35Shrq02SnXa', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:39:51', '2022-03-07 00:39:51'),
(7, 'nguyennh@tdc.edu.vn', NULL, '$2y$10$4EEFUM5Jdyl9MdUy8q1sReWu3dJY5sRNOJEyUb216HQt95VM8xKpa', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:40:12', '2022-03-07 00:40:12'),
(8, 'phuocpg@tdc.edu.vn', NULL, '$2y$10$oQAmoLxgKgkAwyJ967qnPe3KjGXhenxlZPIRmRkBAjiIWhDyr/FVW', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:40:34', '2022-03-07 00:40:34'),
(9, 'thaitb@tdc.edu.vn', NULL, '$2y$10$4JcqGX/jyayHvSC7UsuxzOBnjv7N.ESgnvtGtYjpXZtAb91xhwFPG', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:40:51', '2022-03-07 00:40:51'),
(10, 'thaobtp@tdc.edu.vn', NULL, '$2y$10$/SSW6jtWU3mEFyU2SVyvQeXUvq7wKQPgH7h5MgevfIubfhOcSysrO', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:41:10', '2022-03-07 00:41:10'),
(11, 'thol@tdc.edu.vn', NULL, '$2y$10$/heXwIExZ1dPLIamv8CyEeGk3KcYiqMktFM4VzjUu9z9WpfnOg5LO', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:41:29', '2022-03-07 00:41:29'),
(12, 'thuyhtp@tdc.edu.vn', NULL, '$2y$10$jCL9Zb/N1MYi8cFZKtgkgOTvJraX68tQxyTm/ZWAm0kDfYQlbnRjS', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:41:44', '2022-03-07 00:41:44'),
(13, 'thunma@tdc.edu.vn', NULL, '$2y$10$EitOe.xDU3x.LXpA8uGmYewHcGR3m1Y29s6t7ExaLFv4gJDS/mhgG', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:42:00', '2022-03-07 00:42:00'),
(14, 'tuyenmk@tdc.edu.vn', NULL, '$2y$10$P..L0Um7EEIRvDtRU6yDrexa4wTk7Q0eikI5exmnMBDq9vId/HlWC', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:42:19', '2022-03-07 00:42:19'),
(15, 'trinhhc@tdc.edu.vn', NULL, '$2y$10$o7a..BewGDIpqbg4gQPxOOC86lKFPypsHozRMlgXNlxknIMpqPvZ.', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:42:35', '2022-03-07 00:42:35'),
(16, 'trinhpt@tdc.edu.vn', NULL, '$2y$10$JiOQRPn9HSk6izYsYhyiWe8EdPygz9otv1.ka21STHVqxmdQORnla', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:42:56', '2022-03-07 00:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `users_groups`
--

TRUNCATE TABLE `users_groups`;
--
-- Dumping data for table `users_groups`
--

INSERT DELAYED IGNORE INTO `users_groups` (`user_id`, `group_id`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE `user_profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_token` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `avatar` blob DEFAULT NULL,
  `code` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` smallint(6) NOT NULL DEFAULT 0,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `user_profile`
--

TRUNCATE TABLE `user_profile`;
--
-- Dumping data for table `user_profile`
--

INSERT DELAYED IGNORE INTO `user_profile` (`id`, `user_id`, `first_name`, `last_name`, `phone`, `device_token`, `category_id`, `level_id`, `avatar`, `code`, `vat`, `state`, `city`, `country`, `sex`, `address`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'System', NULL, 'eWZwPl9RSH-Ao7oGyx38-4:APA91bGTH0xn1pv7Q5GubUXLikfyApZBm73ET0hRZx-4Oi94izVbKJp                                                                                                             ZBJvEKbXW2BCqDUYXXIV1EBtAlPkXmHNLhj6YZ8rqNZT5h6oAQ2CNRmGbcIk7ALG3zcEhRE1OlpbAAAS', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:23:25', '2022-03-10 01:34:12'),
(2, 2, 'Phan Thanh', 'Nhuần', NULL, 'eow6lTobRh-ScVfa_ZRIhv:APA91bGuGqZ3X9B1yUSTKmkl8FZb483WBnHkDUb3iymMkPsgzxry1QTt8upSPg61NHmBG8Jfs_Q-kL6Uej_57lrZl4ekE6nr6ZQPriz5jGpIqt_EpEiAD_MSZCjPzJY2SAjisnUpGaf8', NULL, 2, NULL, 'admin', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:37:17', '2022-03-02 19:48:21'),
(3, 3, 'Phan Thị', 'Thể', NULL, 'eow6lTobRh-ScVfa_ZRIhv:APA91bGuGqZ3X9B1yUSTKmkl8FZb483WBnHkDUb3iymMkPsgzxry1QTt8upSPg61NHmBG8Jfs_Q-kL6Uej_57lrZl4ekE6nr6ZQPriz5jGpIqt_EpEiAD_MSZCjPzJY2SAjisnUpGaf8', NULL, 2, NULL, 'thept@tdc.edu.vn', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 02:39:09', '2022-03-02 02:39:26'),
(4, 4, 'Tiêu Kim', 'Cương', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:39:13', '2022-03-07 00:39:13'),
(5, 5, 'Nguyễn Huy', 'Hoàng', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:39:33', '2022-03-07 00:39:33'),
(6, 6, 'Nguyễn Thị Hồng', 'Mỹ', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:39:51', '2022-03-07 00:39:51'),
(7, 7, 'Nguyễn Hoàng', 'Nguyên', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:40:12', '2022-03-07 00:40:12'),
(8, 8, 'Phan Gia', 'Phước', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:40:34', '2022-03-07 00:40:34'),
(9, 9, 'Trương Bá', 'Thái', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:40:51', '2022-03-07 00:40:51'),
(10, 10, 'Bùi Thị Phương', 'Thảo', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:41:10', '2022-03-07 00:41:10'),
(11, 11, 'Lê', 'Thọ', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:41:29', '2022-03-07 00:41:29'),
(12, 12, 'Huỳnh Thị Phương', 'Thủy', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:41:44', '2022-03-07 00:41:44'),
(13, 13, 'Ngô Minh Anh', 'Thư', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:42:00', '2022-03-07 00:42:00'),
(14, 14, 'Mai Kỷ', 'Tuyên', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:42:19', '2022-03-07 00:42:19'),
(15, 15, 'Hoàng Công', 'Trình', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:42:35', '2022-03-07 00:42:35'),
(16, 16, 'Phan Thị', 'Trinh', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 00:42:56', '2022-03-07 00:42:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contexts`
--
ALTER TABLE `contexts`
  ADD PRIMARY KEY (`context_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pexcels`
--
ALTER TABLE `pexcels`
  ADD PRIMARY KEY (`pexcel_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `profile_field`
--
ALTER TABLE `profile_field`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profile_field_profile_id_profile_field_type_id_unique` (`profile_id`,`profile_field_type_id`),
  ADD KEY `profile_field_profile_field_type_id_foreign` (`profile_field_type_id`),
  ADD KEY `profile_field_profile_id_index` (`profile_id`);

--
-- Indexes for table `profile_field_type`
--
ALTER TABLE `profile_field_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`slideshow_id`);

--
-- Indexes for table `slideshow_styles`
--
ALTER TABLE `slideshow_styles`
  ADD PRIMARY KEY (`style_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `task_user`
--
ALTER TABLE `task_user`
  ADD PRIMARY KEY (`assignee_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_activation_code_index` (`activation_code`),
  ADD KEY `users_reset_password_code_index` (`reset_password_code`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profile_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contexts`
--
ALTER TABLE `contexts`
  MODIFY `context_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pexcels`
--
ALTER TABLE `pexcels`
  MODIFY `pexcel_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `profile_field`
--
ALTER TABLE `profile_field`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_field_type`
--
ALTER TABLE `profile_field_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `slideshow_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `slideshow_styles`
--
ALTER TABLE `slideshow_styles`
  MODIFY `style_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key';

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `task_user`
--
ALTER TABLE `task_user`
  MODIFY `assignee_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'User id', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile_field`
--
ALTER TABLE `profile_field`
  ADD CONSTRAINT `profile_field_profile_field_type_id_foreign` FOREIGN KEY (`profile_field_type_id`) REFERENCES `profile_field_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_field_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `user_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
