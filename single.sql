-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 07:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `single`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `designation`, `image`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nazrul Islam', 'admin@gmail.com', 'Professional Graphics Designer', 'public/backend/images/admin_profile/5fbb8c0b5d78c.png', '+8801911970156', NULL, '$2y$10$DjppIKYGVP4vNSJiboIxaux17uqpvTFx7R3p1RDac7wO4icmo.YzW', 'ZgFyhsqhtxLc65y8eMrIuL4ZdfWVkpC83DUWF1VJYLEZfFY8S8jX4fkPHBrF', NULL, '2020-12-07 02:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Business Card', '2020-12-07 23:48:50', '2020-12-07 23:49:14'),
(2, '3D Logo', '2020-12-07 23:49:48', '2020-12-08 06:55:11'),
(3, 'Vector Logo', '2020-12-07 23:49:59', '2020-12-07 23:49:59'),
(4, '3D Book Mockup', '2020-12-07 23:50:28', '2020-12-08 06:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(240) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `name`, `degree`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(2, 'Bangladesh Open University', 'B.B.S', '2017-02-03', '2020-12-08', '2020-12-07 12:22:48', '2020-12-09 14:24:12'),
(3, 'Bangladesh Open University', 'HSC', '2013-04-01', '2015-08-01', '2020-12-07 12:28:25', '2020-12-09 14:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_ads` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `company_name`, `company_ads`, `designation`, `start_date`, `end_date`, `details`, `created_at`, `updated_at`) VALUES
(3, 'Learn Hunter', 'Dhaka, Bangladesh', 'Graphics Designer', '2019-02-23', '12/07/2020', '<p>I m 29 yers pld</p>', '2020-12-07 06:22:43', '2020-12-07 10:31:41'),
(4, 'Learn Hunter', 'Dhaka, Bangladesh', 'Graphics Designer', '2017-07-07', 'Run', '<p>I m Nijwel</p>', '2020-12-07 10:28:25', '2020-12-07 10:28:25'),
(5, 'Learn Hunter', 'Dhaka, Bangladesh', 'Graphics Designer', '2017-07-07', 'Run', '<p>I m Nijwel</p>', '2020-12-07 10:29:08', '2020-12-07 10:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messeges`
--

CREATE TABLE `messeges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messege` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messeges`
--

INSERT INTO `messeges` (`id`, `name`, `phone`, `email`, `subject`, `messege`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Nazrul Islam', '01911970156', 'nijwel09@gmail.com', 'Messege', 'jjdjdddjdd', 1, '2020-12-09 09:43:22', '2020-12-10 11:59:01'),
(4, 'Nazrul Islam', '01911970156', 'nijwel09@gmail.com', 'Messege', 'jjdjdddjdddhdhdhdh', 1, '2020-12-09 09:43:25', '2020-12-09 12:28:37'),
(5, 'Nazrul Isla', '01911970156', 'nijwel09@gmail.com', 'Messege', 'jjdjdddjdddhdhdhdh', 1, '2020-12-09 09:43:31', '2020-12-09 12:40:11'),
(6, 'Nazrul Isla', '01911970156', 'nijwel09@gmail.com', 'Messege', 'jjdjdddjdddhdhdhdh', 1, '2020-12-09 09:43:32', '2020-12-09 12:46:53'),
(7, 'Nazrul Isla', '01911970156', 'nijwel09@gmail.con', 'Messegeg', 'jjdjdddjdddhdhdhdh', 1, '2020-12-09 09:43:44', '2020-12-09 12:48:25'),
(8, 'Nazrul Islam', '01911970156', 'nijwel09@gmail.com', 'Messege', 'dhgdhdhhd', 1, '2020-12-09 09:45:33', '2020-12-09 12:51:07'),
(9, 'ecommerce', '01671668631', 'admin@gmail.com', 'Messege', 'ddjdjdjdj', 1, '2020-12-09 09:51:57', '2020-12-09 12:54:10'),
(10, 'Nazrul Islam', '01911970156', 'nijwel09@gmail.com', 'Messege', 'bggkb,b,b,', 1, '2020-12-09 09:53:09', '2020-12-09 12:54:16'),
(11, 'Nazrul Islam', '01911970156', 'nijwel09@gmail.com', 'Messege', 'sxxxbxb', 1, '2020-12-09 09:53:28', '2020-12-09 13:00:48'),
(12, 'Dhaka', '01911970156', 'nijwel09@gmail.con', 'xbxbxbxb', 'xbxbxbxbxb', 1, '2020-12-09 09:54:33', '2020-12-10 11:36:58'),
(13, 'Nazrul Islam', '01911970156', 'nijwel09@gmail.com', 'Messege', 'jjfjf', 1, '2020-12-10 11:38:14', '2020-12-10 11:58:44'),
(14, 'Dhaka', '01671668631', 'admin@gmail.com', 'Messege', 'gkgkkk', 0, '2020-12-10 12:01:03', '2020-12-10 12:01:03'),
(15, 'Nazrul Islam', '01911970156', 'nijwel09@gmail.com', 'Messege', 'n..n.nn.n.n.', 0, '2020-12-10 12:02:33', '2020-12-10 12:02:33'),
(16, 'Sohidul Islam', '01911970156', 'nijwel09@gmail.com', 'Messege', 'bxcbxbxbxb', 0, '2020-12-10 12:04:01', '2020-12-10 12:04:01'),
(17, 'Sohidul Islam', '01911970156', 'nijwel09@gmail.com', 'Messege', 'xbxxbxbxb', 0, '2020-12-10 12:04:35', '2020-12-10 12:04:35'),
(18, 'Nazrul Islam', '01911970156', 'nijwel09@gmail.com', 'zcccc', 'cccccccccc', 0, '2020-12-10 12:05:15', '2020-12-10 12:05:15'),
(19, 'Nazrul Islam', '01911970156', 'admin@gmail.com', 'Messege', 'zvzzvzvzvzv', 0, '2020-12-10 12:05:40', '2020-12-10 12:05:40'),
(20, 'Sohidul Islam', '01671668631', 'nijwel09@gmail.con', 'Messege', 'vzvzvzvzvzvzv', 0, '2020-12-10 12:06:18', '2020-12-10 12:06:18'),
(21, 'Nazrul Islam', '01671668631', 'nijwel09@gmail.com', 'xbxbxbxb', 'xbxbxxxbxb', 0, '2020-12-10 12:06:31', '2020-12-10 12:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_21_200034_create_admins_table', 2),
(5, '2020_12_07_072503_create_profiles_table', 3),
(6, '2020_12_07_113109_create_experiences_table', 4),
(7, '2020_12_07_163236_create_educations_table', 5),
(8, '2020_12_07_190153_create_skills_table', 6),
(9, '2020_12_08_053902_create_categories_table', 7),
(10, '2020_12_08_061700_create_products_table', 8),
(11, '2020_12_09_142735_create_recommends_table', 9),
(12, '2020_12_09_143453_create_messeges_table', 9),
(13, '2020_12_09_193241_create_seos_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$kTRFwgXZVQ50EPIafjxz1eXXJ1QU0.5ocaeWLw2.wpDzz5s70vZV.', '2020-11-21 13:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `image`, `code`, `link`, `created_at`, `updated_at`) VALUES
(1, 4, 'public/backend/images/product/5fcf72a5bc343.png', 'B-001', 'http://', '2020-12-08 00:56:03', '2020-12-08 06:51:31'),
(2, 3, 'public/backend/images/product/5fcf72908bcfe.jpg', 'V-001', 'http://', '2020-12-08 04:28:49', '2020-12-08 06:33:20'),
(3, 1, 'public/backend/images/product/5fcf775fa597f.png', 'B-002', 'http://', '2020-12-08 06:53:52', '2020-12-09 08:23:12'),
(4, 2, 'public/backend/images/product/5fcf786e5a8c7.png', 'L-001', 'http://', '2020-12-08 06:58:22', '2020-12-08 06:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkdin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `address`, `company_name`, `designation`, `image`, `details`, `dob`, `phone`, `marital`, `nationality`, `email`, `skype`, `facebook`, `instagram`, `linkdin`, `created_at`, `updated_at`) VALUES
(1, 'Nazrul Islam', 'Dhaka, Bangladesh', 'Learn Hunter', 'Professional Graphics Designer', 'public/backend/images/profile/5fd130617437c.png', '<p>\r\n\r\n</p><p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p><div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida. Vivamus vitae dui non lorem euismod pretium. Morbi congue sem sed ex iaculis, nec mattis felis pretium. Nullam molestie libero id odio blandit sodales. Suspendisse non mauris et felis molestie placerat aliquet a risus. Aliquam ac leo tempus, hendrerit eros mollis, gravida est.</p><p>Proin euismod ipsum a tellus condimentum dapibus. Integer porttitor felis elit, eget rutrum ligula commodo quis. Praesent ultricies neque eu mi congue blandit. Nulla feugiat feugiat aliquet. Morbi sed mattis erat. Nullam scelerisque molestie eros, id tristique felis iaculis non. Duis pellentesque neque eget iaculis varius. Donec at nisl semper, aliquam est id, tincidunt lacus. Donec at erat purus.</p><p>Morbi tincidunt nunc non diam porta, at fermentum orci bibendum. Donec arcu nisi, ornare nec commodo vitae, sollicitudin sed magna. Cras sit amet justo et nulla pulvinar laoreet. Phasellus scelerisque, metus id posuere vulputate, diam tellus iaculis sapien, eget scelerisque ipsum libero convallis velit. Duis lorem ligula, faucibus quis tellus nec, fringilla ultricies leo. Etiam tempus congue magna. Suspendisse porta dictum tortor, eu volutpat ipsum eleifend nec. Aliquam dapibus lorem luctus, cursus libero imperdiet, mattis nunc. Sed in ipsum diam. Quisque efficitur metus purus, vitae fermentum lacus venenatis id.</p></div>\r\n\r\n<br><p></p>', '1991-02-18', '+8801911970156', 'Married', 'Bangladeshi', 'nijwel09@gmail.com', 'nijwel', 'http://www.facebook.com/nijwel', 'http://www.instagram.com/nijwel', 'https://www.linkedin.com/in/nazrul-islam-471b96157/', NULL, '2020-12-09 14:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `recommends`
--

CREATE TABLE `recommends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recommends`
--

INSERT INTO `recommends` (`id`, `details`, `name`, `designation`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida.</p>', 'Sohidul Islam', 'web developer', '2020-12-09 09:00:42', '2020-12-09 09:13:47'),
(3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida.</p><p></p>', 'Jewel', 'Professional Graphics Designer', '2020-12-09 09:07:59', '2020-12-09 09:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `being_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alexa_analytic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_description`, `meta_keyword`, `google_verification`, `being_verification`, `google_analytic`, `alexa_analytic`, `meta_icon`, `created_at`, `updated_at`) VALUES
(1, 'Resume of Nazrul Islam', 'learn hunter', 'this is a portfolio side. created by learn hunter developer co.', NULL, NULL, NULL, NULL, NULL, 'public/backend/images/icon/5fd1312d463c1.png', NULL, '2020-12-09 14:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percent`, `created_at`, `updated_at`) VALUES
(1, 'HTML', '70', '2020-12-07 13:16:50', '2020-12-09 14:25:11'),
(2, 'CSS', '60', '2020-12-07 13:23:24', '2020-12-09 14:25:18'),
(3, 'PHP (Laravel)', '30', '2020-12-07 13:23:56', '2020-12-09 14:25:01'),
(4, 'Bootstrap', '70', '2020-12-07 13:24:16', '2020-12-09 14:25:41'),
(5, 'Graphics D.', '75', '2020-12-09 14:26:09', '2020-12-09 14:27:20'),
(6, 'M/S Office', '80', '2020-12-09 14:27:39', '2020-12-09 14:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nazrul Islam', 'nijwel09@gmail.com', NULL, '$2y$10$/lvbjf/M0osgE285voGfSO1Dga6.91e2cvxNFY4jqTmwPLmjQygXm', 'A13J7kj3Y7lw7geiRtVK92ZjxuWW4iCyXC3CbaV5w675ioNjU1x2ltp5vE8F', '2020-11-21 11:05:39', '2020-11-23 03:37:54'),
(2, 'Sohidul Islam', 'sohidulislam@gmail.com', NULL, '$2y$10$AA56wKkVLXVaTMq9lQm7ee.ALcm1PqVYPWEH.zgm6SaXDQGmfq9um', NULL, '2020-11-21 12:46:10', '2020-11-21 12:46:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messeges`
--
ALTER TABLE `messeges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommends`
--
ALTER TABLE `recommends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messeges`
--
ALTER TABLE `messeges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recommends`
--
ALTER TABLE `recommends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
