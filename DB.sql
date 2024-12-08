-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table stream_social_db.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.admins: ~3 rows (approximately)
INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$mlKyYOBLDFdtGYgw83pFgeFBIgDZ.mrhx3MCtcZSZ7u3FYjqGiaty', NULL, NULL, NULL),
	(2, 'Editor', 'editor@editor.com', NULL, '$2y$10$/T/JZDco9F3hcP1q8ijco.h50oM31qpbnDmkd9EhOMQrQB3a6NI02', NULL, NULL, NULL),
	(3, 'Author', 'author@author.com', NULL, '$2y$10$lufkiZca9vFaoR/YxaiW8.PLfRGvi./c/HhVhCZHTSWuIJ247NiTu', NULL, NULL, NULL);

-- Dumping structure for table stream_social_db.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_id` int NOT NULL,
  `user_id` int NOT NULL,
  `content` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table stream_social_db.comments: ~6 rows (approximately)
INSERT INTO `comments` (`id`, `post_id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
	(1, 13, 5, 'Hi Nice Post', '2024-11-15 09:01:54', '2024-11-15 09:01:54'),
	(2, 13, 5, 'i like it', '2024-11-15 09:04:41', '2024-11-15 09:04:41'),
	(3, 8, 4, 'this is my post', '2024-11-15 09:30:29', '2024-11-15 09:30:29'),
	(4, 10, 4, 'hi', '2024-11-18 07:28:44', '2024-11-18 07:28:44'),
	(5, 18, 7, 'nice photo', '2024-11-30 11:24:53', '2024-11-30 11:24:53'),
	(6, 18, 10, 'thank you', '2024-11-30 11:25:41', '2024-11-30 11:25:41');

-- Dumping structure for table stream_social_db.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table stream_social_db.friend_requests
CREATE TABLE IF NOT EXISTS `friend_requests` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` bigint unsigned NOT NULL,
  `receiver_id` bigint unsigned NOT NULL,
  `status` enum('pending','accepted','declined') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `friend_requests_sender_id_foreign` (`sender_id`),
  KEY `friend_requests_receiver_id_foreign` (`receiver_id`),
  CONSTRAINT `friend_requests_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `friend_requests_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.friend_requests: ~2 rows (approximately)
INSERT INTO `friend_requests` (`id`, `sender_id`, `receiver_id`, `status`, `created_at`, `updated_at`) VALUES
	(6, 7, 7, 'declined', '2024-12-02 07:03:57', '2024-12-02 07:04:20'),
	(7, 7, 6, 'accepted', '2024-12-02 07:04:32', '2024-12-02 07:10:12');

-- Dumping structure for table stream_social_db.likes
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_id` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table stream_social_db.likes: ~12 rows (approximately)
INSERT INTO `likes` (`id`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(7, 11, 5, '2024-11-15 09:25:56', '2024-11-15 09:25:56'),
	(8, 9, 5, '2024-11-15 09:26:04', '2024-11-15 09:26:04'),
	(9, 11, 4, '2024-11-15 09:26:23', '2024-11-15 09:26:23'),
	(10, 13, 4, '2024-11-18 07:18:09', '2024-11-18 07:18:09'),
	(11, 10, 4, '2024-11-18 07:28:37', '2024-11-18 07:28:37'),
	(14, 15, 6, '2024-11-25 11:38:56', '2024-11-25 11:38:56'),
	(15, 18, 7, '2024-11-30 11:24:29', '2024-11-30 11:24:29'),
	(16, 17, 7, '2024-11-30 11:24:39', '2024-11-30 11:24:39'),
	(17, 22, 7, '2024-12-04 05:51:00', '2024-12-04 05:51:00'),
	(18, 26, 7, '2024-12-04 06:08:36', '2024-12-04 06:08:36'),
	(20, 25, 7, '2024-12-04 06:09:41', '2024-12-04 06:09:41'),
	(21, 16, 7, '2024-12-04 06:11:26', '2024-12-04 06:11:26'),
	(22, 23, 7, '2024-12-04 06:11:46', '2024-12-04 06:11:46');

-- Dumping structure for table stream_social_db.media
CREATE TABLE IF NOT EXISTS `media` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_id` int NOT NULL,
  `media_url` text COLLATE utf8mb4_general_ci,
  `media_type` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table stream_social_db.media: ~15 rows (approximately)
INSERT INTO `media` (`id`, `post_id`, `media_url`, `media_type`, `created_at`, `updated_at`) VALUES
	(1, 8, 'posts/1731409704.jpg', 'image/jpeg', '2024-11-12 06:08:24', '2024-11-12 06:08:24'),
	(2, 9, 'posts/1731410019.jpg', 'image/jpeg', '2024-11-12 06:13:39', '2024-11-12 06:13:39'),
	(3, 11, 'posts/1731416064.jpg', 'image/jpeg', '2024-11-12 07:54:24', '2024-11-12 07:54:24'),
	(4, 12, 'posts/1731416085.jpg', 'image/jpeg', '2024-11-12 07:54:45', '2024-11-12 07:54:45'),
	(5, 13, 'posts/1731674097.jpg', 'image/jpeg', '2024-11-15 07:34:57', '2024-11-15 07:34:57'),
	(6, 14, 'posts/1732364230.jpg', 'image/jpeg', '2024-11-23 07:17:10', '2024-11-23 07:17:10'),
	(7, 15, 'posts/1732552731.jpg', 'image/jpeg', '2024-11-25 11:38:51', '2024-11-25 11:38:51'),
	(8, 16, 'posts/1732787022.jpg', 'image/jpeg', '2024-11-28 04:43:42', '2024-11-28 04:43:42'),
	(9, 17, 'posts/1732787038.jpg', 'image/jpeg', '2024-11-28 04:43:58', '2024-11-28 04:43:58'),
	(10, 18, 'posts/1732983650.jpg', 'image/jpeg', '2024-11-30 11:20:50', '2024-11-30 11:20:50'),
	(11, 19, 'posts/1732984496.jpg', 'image/jpeg', '2024-11-30 11:34:56', '2024-11-30 11:34:56'),
	(12, 20, 'posts/1732984508.jpg', 'image/jpeg', '2024-11-30 11:35:08', '2024-11-30 11:35:08'),
	(13, 21, 'posts/1732984523.jpg', 'image/jpeg', '2024-11-30 11:35:23', '2024-11-30 11:35:23'),
	(15, 23, 'posts/1733309260.jpg', 'image/jpeg', '2024-12-04 05:47:40', '2024-12-04 05:47:40'),
	(17, 25, 'posts/1733309805.mp4', 'video/mp4', '2024-12-04 05:56:45', '2024-12-04 05:56:45'),
	(18, 26, 'posts/1733309831.mp4', 'video/mp4', '2024-12-04 05:57:11', '2024-12-04 05:57:11');

-- Dumping structure for table stream_social_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.migrations: ~12 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2014_10_12_100000_create_password_resets_table', 2),
	(6, '2021_09_11_101603_create_admins_table', 2),
	(7, '2021_09_28_150557_create_roles_table', 2),
	(8, '2021_09_28_150603_create_permissions_table', 2),
	(9, '2021_09_28_150804_create_users_permission_table', 2),
	(10, '2021_09_28_150837_create_users_roles_table', 2),
	(11, '2021_09_28_151026_create_roles_permissions_table', 2),
	(12, '2021_10_12_151812_create_posts_table', 2),
	(13, '2024_11_18_123610_create_friend_requests_table', 3),
	(14, '2024_11_25_101638_create_schedules_table', 4),
	(15, '2024_11_28_104134_create_user_attendances_table', 5);

-- Dumping structure for table stream_social_db.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.password_resets: ~0 rows (approximately)

-- Dumping structure for table stream_social_db.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table stream_social_db.payments
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `trx_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table stream_social_db.payments: ~2 rows (approximately)
INSERT INTO `payments` (`id`, `trx_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(3, 'pi_3QQtafRvrhESRVaD1qjkPcm8', 10, '2024-11-30 11:32:21', '2024-11-30 11:32:21');

-- Dumping structure for table stream_social_db.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.permissions: ~2 rows (approximately)
INSERT INTO `permissions` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Add Post', 'add-post', NULL, NULL),
	(2, 'Delete Post', 'delete-post', NULL, NULL);

-- Dumping structure for table stream_social_db.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table stream_social_db.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `content` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table stream_social_db.posts: ~14 rows (approximately)
INSERT INTO `posts` (`id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
	(8, 4, 'image my', '2024-11-12 06:08:24', '2024-11-12 06:08:24'),
	(9, 4, 'Hi i am Hammad Khan', '2024-11-12 06:13:39', '2024-11-12 06:13:39'),
	(10, 4, 'Hello', '2024-11-12 06:14:22', '2024-11-12 06:14:22'),
	(11, 4, 'no thing in my mind', '2024-11-12 07:54:24', '2024-11-12 07:54:24'),
	(12, 4, 'yes there is something in my mind', '2024-11-12 07:54:45', '2024-11-12 07:54:45'),
	(13, 5, 'this is in my mind', '2024-11-15 07:34:57', '2024-11-15 07:34:57'),
	(14, 7, 'hi look my awesome image', '2024-11-23 07:17:10', '2024-11-23 07:17:10'),
	(15, 6, 'my new pic', '2024-11-25 11:38:51', '2024-11-25 11:38:51'),
	(16, 8, 'My Profile Pic', '2024-11-28 04:43:42', '2024-11-28 04:43:42'),
	(17, 9, 'How is my Profile pic', '2024-11-28 04:43:58', '2024-11-28 04:43:58'),
	(23, 7, 'my new picture', '2024-12-04 05:47:40', '2024-12-04 05:47:40'),
	(25, 7, 'New Pilly Videos', '2024-12-04 05:56:45', '2024-12-04 05:56:45'),
	(26, 7, 'sda', '2024-12-04 05:57:11', '2024-12-04 05:57:11');

-- Dumping structure for table stream_social_db.replies
CREATE TABLE IF NOT EXISTS `replies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `comment_id` int NOT NULL,
  `user_id` int NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table stream_social_db.replies: ~0 rows (approximately)

-- Dumping structure for table stream_social_db.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.roles: ~3 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin', NULL, NULL),
	(2, 'Editor', 'editor', NULL, NULL),
	(3, 'Author', 'author', NULL, NULL);

-- Dumping structure for table stream_social_db.roles_permissions
CREATE TABLE IF NOT EXISTS `roles_permissions` (
  `role_id` bigint unsigned NOT NULL,
  `permission_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.roles_permissions: ~4 rows (approximately)
INSERT INTO `roles_permissions` (`role_id`, `permission_id`) VALUES
	(1, 1),
	(1, 2),
	(2, 1),
	(3, 1);

-- Dumping structure for table stream_social_db.schedules
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `date` date NOT NULL,
  `schedule` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `schedules_user_id_foreign` (`user_id`),
  CONSTRAINT `schedules_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.schedules: ~0 rows (approximately)

-- Dumping structure for table stream_social_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `profile_picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.users: ~9 rows (approximately)
INSERT INTO `users` (`id`, `profile_picture`, `first_name`, `last_name`, `username`, `type`, `email`, `email_verified_at`, `password`, `bio`, `status`, `remember_token`, `membership`, `created_at`, `updated_at`) VALUES
	(4, 'user_profiles/1731773359_profile_pic.jpg', 'Hammad', 'Khanam', 'hammy', 'player', 'hammad1@gmail.com', NULL, '$2y$10$9jxvAEt5FKbp10yNjj0jvuI5ulIxoCp1/O8SzL8Bvnb8uJ5eRdzaS', NULL, 'Verified', 'IwdEBMqPYnWKKe1nquICf7SVxIw1jECwhu8LSoviuMwu4uMpKR2GqNgfTF7C', 0, '2024-11-09 07:36:57', '2024-11-16 11:09:19'),
	(5, 'user_profiles/profile image 3333.jpg', 'Hammad', 'Khan', 'hammad2@gmail.com', 'player', 'hammad2@gmail.com', NULL, '$2y$10$DKzIhBXsY47UF7PeMNSzmeSLYLacXDEapbJP.PAhQrpu1SzDDeIFS', NULL, 'Verified', NULL, 0, '2024-11-15 07:34:30', '2024-11-15 07:34:30'),
	(6, 'user_profiles/1732532374_462105302_2078531709208703_5042179445574189842_n.jpg', 'Ahmed', 'Ali', 'ahmed', 'coach', 'ahmed@gmail.com', NULL, '$2y$10$6ngiMNYUemNCxcc5Avpute8EfUhERDvpQqklrTwzK9LpBKNevF1.O', NULL, 'Pending', NULL, 0, '2024-11-18 07:08:08', '2024-11-25 05:59:34'),
	(7, 'user_profiles/profile image 3333.jpg', 'Shahruk', 'Arain', 'shahrukh', 'player', 'hammad@gmail.com', NULL, '$2y$10$OA6fl/OExLHK7CyDUN81CekLTXi5YfDbDYLhzz79SfOwPRrzYDU9C', 'this is the bio now this is the bio now this is the bio now this is the bio now this is the bio now this is the bio now this is the bio now s is the bio now this is the bio now', 'Verified', NULL, 0, '2024-11-21 06:02:58', '2024-12-06 06:30:27'),
	(8, 'user_profiles/1732984106_462105302_2078531709208703_5042179445574189842_n.jpg', 'The', 'Coach', 'thecoach', 'coach', 'thecoach@gmail.com', NULL, '$2y$10$FIonqtqEhpA3N/7S0nshXuF0wXvVKzNnlJ3veEj1YCovrZcDBFV1y', 'this is the bio i add this is the bio i add this is the bio i add this is the bio i add this is the bio i add this is the bio i add this is the bio i add', 'Rejected', NULL, 0, '2024-11-28 04:42:34', '2024-12-06 10:12:59'),
	(9, 'user_profiles/profile_pic.jpg', 'The', 'Player', 'theplayer', 'player', 'theplayer@gmail.com', NULL, '$2y$10$HZU572ozf6dDoJYNWVEODuJiIEdSKYRpMudxVSiwDnQF834cRJBjW', NULL, 'Verified', 'TWGL8r7Z7UHOFPgS4VSwOuu87I6j7PRhDSC6Ht80weZfRx9cDUzfBa6mpVHj', 1, '2024-11-28 04:43:27', '2024-11-29 11:37:51'),
	(14, 'user_profiles/67530c8233b25_profile_pic.jpg', 'Hammad', 'Khan', 'hammy234', 'coach', 'hk7856231@gmail.com', NULL, '$2y$10$s1yIcQdMcrNyCUSBy9uffOQN4WJrKvnx/D2f6B/ClRO6hRSDIw7Ve', 'this is the bio of my profile i can write here anything this is the bio of my profile i can write here anything this is the bio of my profile i can write here anything this is the bio of my profile i', 'Verified', 'xzKc3tWf728OiXFcdWmYxxssEd3S3li6lkLao40pe6yleq4j7r19FB8Q8cVr', 0, '2024-12-06 09:39:25', '2024-12-07 04:57:28'),
	(15, 'user_profiles/675418a779252_profile_pic.jpg', 'Hamy', 'khan', 'hamy12312', 'coach', 'myemail123@gmail.com', NULL, '$2y$10$UoSdaLOEu7BheO7c9SRj5uvTr90HNlWykvmY/VCf.jhnvvquar.0m', NULL, 'Pending', NULL, 0, '2024-12-07 04:43:03', '2024-12-07 04:43:03'),
	(16, 'user_profiles/6754191072934_profile_pic.jpg', 'my', 'namw', 'myname12@gmail.com', 'coach', 'myemail238497@gmail.com', NULL, '$2y$10$Lfk5g6U5pGY2UFdrF/VEmOteNK7w6bMfOo/Po5WQ/LPHDWtj01yX.', NULL, 'Verified', NULL, 0, '2024-12-07 04:44:48', '2024-12-07 04:48:26'),
	(17, 'user_profiles/6754195854082_profile_pic.jpg', 'Player', 'Player', 'player384', 'coach', 'player2349@gmail.com', NULL, '$2y$10$0Ku33AusS6wp.QjqtzL4.OjLOdvS7AGgXUxOV.r4qGdA1uDOcIbm2', NULL, 'Pending', NULL, 0, '2024-12-07 04:46:00', '2024-12-07 04:46:00'),
	(18, 'user_profiles/6754197fc8654_profile_pic.jpg', 'Player', 'player', 'player3490', 'player', 'player98234@gmail.com', NULL, '$2y$10$BPaVatmR7B/GClTBxeXMge6jzAG1F58ZBLuFYCgefzCrGeKfSzWVO', NULL, 'Verified', NULL, 0, '2024-12-07 04:46:39', '2024-12-07 04:46:39');

-- Dumping structure for table stream_social_db.users_permissions
CREATE TABLE IF NOT EXISTS `users_permissions` (
  `admin_id` bigint unsigned NOT NULL,
  `permission_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`admin_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.users_permissions: ~0 rows (approximately)

-- Dumping structure for table stream_social_db.users_roles
CREATE TABLE IF NOT EXISTS `users_roles` (
  `admin_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`admin_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.users_roles: ~2 rows (approximately)
INSERT INTO `users_roles` (`admin_id`, `role_id`) VALUES
	(1, 1),
	(2, 2),
	(3, 3);

-- Dumping structure for table stream_social_db.user_attendances
CREATE TABLE IF NOT EXISTS `user_attendances` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `schedule_holder_id` bigint unsigned NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_attendances_user_id_foreign` (`user_id`),
  CONSTRAINT `user_attendances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stream_social_db.user_attendances: ~2 rows (approximately)
INSERT INTO `user_attendances` (`id`, `user_id`, `schedule_holder_id`, `date`, `created_at`, `updated_at`) VALUES
	(21, 8, 10, '2024-11-01', '2024-11-30 11:30:56', '2024-11-30 11:30:56'),
	(22, 8, 10, '2024-11-22', '2024-11-30 11:31:13', '2024-11-30 11:31:13');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
