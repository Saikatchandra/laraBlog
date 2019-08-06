-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2019 at 03:52 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Editor', 'editor@gmail.com', '$2y$10$81I0VhljvMAOavXNcFxWEen6IsYBkbsz3YtQNHFB.WqdeQ.eIZTzS', '0118798989', '1', '2019-07-30 18:02:54', '2019-07-30 20:42:36'),
(4, 'she ed', 'sm@gmail.com', '$2y$10$cKdRIntNF7dmVi5.e4d6cuj8BNZCkHgYKBj6ayH8aSit2fn9xese2', '252525125125', '1', '2019-07-30 16:33:12', '2019-07-30 16:55:21'),
(6, 'write', 'rit@gmail.com', '$2y$10$cpOH972TsU1nPbPeEP995eYRzNHcexHI/BvERixcRZZ8Ae2kC5HOu', '92873947294', '1', '2019-07-30 18:07:54', '2019-07-30 18:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

DROP TABLE IF EXISTS `admin_roles`;
CREATE TABLE IF NOT EXISTS `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `admin_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 4, 2, NULL, NULL),
(2, 5, 1, NULL, NULL),
(3, 6, 3, NULL, NULL),
(4, 6, 2, NULL, NULL),
(5, 6, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'old ed', 'old', '2019-07-31 17:12:53', '2019-07-31 17:13:00'),
(2, 'nw', 'new', '2019-08-04 10:52:46', '2019-08-04 10:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

DROP TABLE IF EXISTS `category_posts`;
CREATE TABLE IF NOT EXISTS `category_posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `category_posts_post_id_index` (`post_id`),
  KEY `category_posts_category_id_index` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-07-31 17:17:53', '2019-07-31 17:17:53'),
(2, 1, '2019-08-02 19:27:10', '2019-08-02 19:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(52, '2014_10_12_000000_create_users_table', 1),
(53, '2014_10_12_100000_create_password_resets_table', 1),
(54, '2019_07_26_054932_create_posts_table', 1),
(55, '2019_07_26_055310_create_tags_table', 1),
(56, '2019_07_26_055407_create_categories_table', 1),
(57, '2019_07_26_055518_create_category_posts_table', 1),
(58, '2019_07_26_055626_create_post_tags_table', 1),
(59, '2019_07_26_060027_create_admins_table', 1),
(60, '2019_07_26_060237_create_roles_table', 1),
(61, '2019_07_26_060325_create_admin_roles_table', 1),
(62, '2019_07_30_064050_create_permissions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `for`, `created_at`, `updated_at`) VALUES
(1, 'Post-create', 'post', '2019-07-30 15:26:35', '2019-07-30 15:26:35'),
(2, 'Post delete', 'post', '2019-07-30 15:26:44', '2019-07-30 15:26:44'),
(3, 'post update', 'post', '2019-07-30 15:26:53', '2019-07-30 15:26:53'),
(4, 'Post-publish', 'post', '2019-07-30 15:27:03', '2019-07-30 15:27:03'),
(5, 'User-create', 'user', '2019-07-30 15:27:15', '2019-07-30 15:27:15'),
(6, 'User-delete', 'user', '2019-07-30 15:27:24', '2019-07-30 15:27:24'),
(7, 'User-update', 'user', '2019-07-30 15:27:32', '2019-07-30 15:27:32'),
(8, 'Tag-CRUD', 'other', '2019-07-30 15:37:09', '2019-07-30 15:37:09'),
(9, 'Category-CRUD', 'other', '2019-07-30 15:37:20', '2019-07-30 15:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 2),
(1, 9),
(2, 4),
(2, 1),
(2, 2),
(2, 3),
(2, 8),
(4, 7),
(4, 1),
(4, 2),
(4, 8),
(4, 9),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `posted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dislike` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `slug`, `body`, `status`, `posted_by`, `image`, `like`, `dislike`, `created_at`, `updated_at`) VALUES
(1, 'dengu', 'dengu', 'dengu', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, NULL, 'public/ZBCjkee1UK5yO7lhRjGQ1X6HvQ6UUfs7KpC7PtOG.jpeg', NULL, NULL, '2019-07-31 17:17:53', '2019-07-31 17:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
CREATE TABLE IF NOT EXISTS `post_tags` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `post_tags_post_id_index` (`post_id`),
  KEY `post_tags_tag_id_index` (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-07-31 17:17:53', '2019-07-31 17:17:53'),
(2, 1, '2019-08-02 19:27:10', '2019-08-02 19:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Editor', '2019-07-30 15:25:54', '2019-07-30 15:25:54'),
(2, 'Publisher', '2019-07-30 15:26:03', '2019-07-30 15:26:03'),
(3, 'Writer', '2019-07-30 15:26:09', '2019-07-30 15:26:09'),
(4, 'new rol', '2019-07-30 18:19:18', '2019-07-30 18:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'health', 'health', '2019-07-31 17:16:42', '2019-07-31 17:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$f1GTrYO/h31S.AmQwAUxVOJHk.19DBIgpptMw7K5RRgoyvsJqPeRC', 'KXUu310pMmb0QwJelb55KB7cDoaKtMZiIKiYJCEp7CCex9tpiiPIlWy9rtJW', '2019-07-30 20:12:15', '2019-07-30 20:12:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
