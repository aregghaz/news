-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Խնամորդը՝ localhost
-- Generation Time: Նյմ 25, 2019թ. ժ. 08:30
-- Սպասարկչի տարբերակը՝ 10.1.31-MariaDB
-- PHP-ի տարբերակը՝ 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Տվյալների բազան՝ `news`
--

-- --------------------------------------------------------

--
-- Աղյուսակի կառուցվածքը `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`) VALUES
(1, 'Hot', NULL),
(2, 'Travel', NULL),
(3, 'News', NULL);

-- --------------------------------------------------------

--
-- Աղյուսակի կառուցվածքը `langs`
--

CREATE TABLE `langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `name`) VALUES
(1, 'am'),
(2, 'en'),
(3, 'ru');

-- --------------------------------------------------------

--
-- Աղյուսակի կառուցվածքը `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_14_075007_create_roles_table', 1),
(4, '2019_11_14_075255_create_permissions_table', 1),
(5, '2019_11_14_075341_create_categories_table', 1),
(6, '2019_11_14_075511_create_news_table', 1),
(7, '2019_11_14_075602_create_news_translations_table', 1),
(8, '2019_11_14_165205_create_langs_table', 1);

-- --------------------------------------------------------

--
-- Աղյուսակի կառուցվածքը `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'hayeren1333', 3, '2019-11-22 11:52:16', '2019-11-23 04:36:42'),
(3, 'hayeren2', 1, '2019-11-22 11:53:38', '2019-11-22 12:02:07'),
(4, 'English', 2, '2019-11-25 03:29:21', '2019-11-25 03:29:21');

-- --------------------------------------------------------

--
-- Աղյուսակի կառուցվածքը `news_translations`
--

CREATE TABLE `news_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_translations`
--

INSERT INTO `news_translations` (`id`, `title`, `description`, `news_id`, `lang_id`) VALUES
(4, 'hayeren133', 'hayeren2', 2, 1),
(5, 'hayeren1', 'hayeren1', 2, 2),
(6, 'hayeren1', 'hayeren1', 2, 3),
(7, 'hayeren2', 'hayeren2', 3, 1),
(8, 'hayeren2', 'hayeren2', 3, 2),
(9, 'hayeren2', 'hayeren2', 3, 3),
(10, 'Հայերեն', 'Հայերեն', 4, 1),
(11, 'English', 'English Description', 4, 2);

-- --------------------------------------------------------

--
-- Աղյուսակի կառուցվածքը `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Աղյուսակի կառուցվածքը `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Աղյուսակի կառուցվածքը `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `prefix` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `prefix`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'moderator');

-- --------------------------------------------------------

--
-- Աղյուսակի կառուցվածքը `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `email`, `phone`, `address`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'admin@admin.com', NULL, NULL, 1, NULL, '$2y$12$UMFF8WLaUb51E4uOKse/rudjxjPm5K5D4VaPRGptZNeLDM8DRMGfK', NULL, '2019-11-22 11:44:16', '2019-11-22 11:44:16'),
(2, NULL, NULL, 'admin2@admin.com', NULL, NULL, 2, NULL, '$2y$12$UMFF8WLaUb51E4uOKse/rudjxjPm5K5D4VaPRGptZNeLDM8DRMGfK', NULL, '2019-11-22 11:44:16', '2019-11-22 11:44:16'),
(3, NULL, NULL, 'admin3@admin.com', NULL, NULL, 3, NULL, '$2y$12$UMFF8WLaUb51E4uOKse/rudjxjPm5K5D4VaPRGptZNeLDM8DRMGfK', NULL, '2019-11-22 11:44:16', '2019-11-22 11:44:16');

--
-- Պահպանված աղյուսակների ցուցակագրերը
--

--
-- Աղյուսակի ցուցակագրերը `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Աղյուսակի ցուցակագրերը `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Աղյուսակի ցուցակագրերը `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Աղյուսակի ցուցակագրերը `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Աղյուսակի ցուցակագրերը `news_translations`
--
ALTER TABLE `news_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_translations_news_id_foreign` (`news_id`);

--
-- Աղյուսակի ցուցակագրերը `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Աղյուսակի ցուցակագրերը `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Աղյուսակի ցուցակագրերը `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Աղյուսակի ցուցակագրերը `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT՝ պահպանված աղյուսակների համար
--

--
-- AUTO_INCREMENT՝ աղյուսակի համար `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT՝ աղյուսակի համար `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT՝ աղյուսակի համար `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT՝ աղյուսակի համար `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT՝ աղյուսակի համար `news_translations`
--
ALTER TABLE `news_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT՝ աղյուսակի համար `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT՝ աղյուսակի համար `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT՝ աղյուսակի համար `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news_translations`
--
ALTER TABLE `news_translations`
  ADD CONSTRAINT `news_translations_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
