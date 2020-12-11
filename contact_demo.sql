-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 12:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `primary_phone` varchar(20) NOT NULL,
  `secondary_phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `middle_name`, `last_name`, `primary_phone`, `secondary_phone`, `email`, `image`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'test', '3434', NULL, 's@gmail.com', '1607657147.jpg', 1, '2020-12-10 21:55:47', '2020-12-10 21:55:47'),
(2, 's', 'dsf', 'dsf', '4234', '324', 'data@gmail.com', '1607657395.jpg', 1, '2020-12-10 21:59:55', '2020-12-10 21:59:55'),
(4, 'cvb', 'cvb', 'cvb', '3435', '435', 'rr@gmail.com', '1607661423.jpg', 1, '2020-12-10 23:07:03', '2020-12-10 23:07:03'),
(5, 'fdg', 'fdg', 'gd', '454545454', NULL, 'rruuuuu@gmail.com', NULL, 1, '2020-12-11 00:12:05', '2020-12-11 00:12:05'),
(7, 'ee', 'ee', 'ee', '34534543', '34535', 'test@gmail.com', NULL, 1, '2020-12-11 00:36:37', '2020-12-11 00:36:37');

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
(4, '2019_04_11_082737_create_jobs_table', 2),
(5, '2016_06_01_000001_create_oauth_auth_codes_table', 3),
(6, '2016_06_01_000002_create_oauth_access_tokens_table', 3),
(7, '2016_06_01_000003_create_oauth_refresh_tokens_table', 3),
(8, '2016_06_01_000004_create_oauth_clients_table', 3),
(9, '2016_06_01_000005_create_oauth_personal_access_clients_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

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
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('10bb3968069b8ec63f2601c047e2e1b3593a50e6810f41f0dec2f8ea76d239c303067d17d63ccaea', 7, 1, 'Secret', '[]', 0, '2020-08-24 04:33:47', '2020-08-24 04:33:47', '2021-08-24 10:03:47'),
('118c276438e818de4e564c54d34a2513f4432bbb4929d3480376c21c5dfbadda971882c43cdf5e31', 1, 1, 'Secret', '[]', 0, '2020-08-24 03:41:49', '2020-08-24 03:41:49', '2021-08-24 09:11:49'),
('2265290db795b8d2943d65b59ff715965bc83b09d9781f08f33eaa5350e39d5d35f43d7edba5a480', 6, 1, 'Secret', '[]', 0, '2020-08-24 04:16:42', '2020-08-24 04:16:42', '2021-08-24 09:46:42'),
('23c8e99a66a67ad8e7653267f15daef5baa683bfca634c86c31d5681f151ce15db97b1827fd8351b', 7, 1, 'Secret', '[]', 0, '2020-08-24 04:17:59', '2020-08-24 04:17:59', '2021-08-24 09:47:59'),
('248d5d29adca9e4aecadb69a37706ec930a2432a3cacf784b7aad3bd1f3ca16debbccacf8d1ed52e', 7, 1, 'Secret', '[]', 0, '2020-08-24 04:18:19', '2020-08-24 04:18:19', '2021-08-24 09:48:19'),
('2aa20009882bc30d9adcb2e030af92ea926106333c14fc291b784151d8a348a6cd6725c9eaa5720f', 1, 1, 'Secret', '[]', 0, '2020-08-23 07:56:59', '2020-08-23 07:56:59', '2021-08-23 13:26:59'),
('3355e9fb458eda37e6067056afb50c6bf909df1d475aa412375e70348c41eae33817d4bb2585abbf', 1, 1, 'Secret', '[]', 0, '2020-08-24 03:24:33', '2020-08-24 03:24:33', '2021-08-24 08:54:33'),
('39b93254a48bc1ef649540adbff981a04ef9a833d7fc6813cd5fc282050b043a84efa593173e2035', 1, 1, 'Secret', '[]', 0, '2020-08-23 07:39:43', '2020-08-23 07:39:43', '2021-08-23 13:09:43'),
('4c3e14145ea0539143c6f6be56f70ae79a845b8aba4720bb9498f5c71cee11a5b7325c4a31a44541', 7, 1, 'Secret', '[]', 0, '2020-08-24 04:17:13', '2020-08-24 04:17:13', '2021-08-24 09:47:13'),
('4c5162b45977f6fa4b77f3ffaa0419fc131cc1b411207ca94a31711da8b20102f9e0e3951c61a82c', 1, 1, 'Secret', '[]', 0, '2020-08-24 03:36:00', '2020-08-24 03:36:00', '2021-08-24 09:06:00'),
('54c82fe855ecbd0ae475ae50d85b2d4248fb6c1eb94b89741e842cae8ac91ccafa20dbdf774bff14', 3, 1, 'Secret', '[]', 0, '2020-08-24 04:00:38', '2020-08-24 04:00:38', '2021-08-24 09:30:38'),
('7ebed37d2e85fea17c0481281229576425aaa370b5dbd52ed49cb985e3a9076bdb33bb1f974f4e78', 3, 1, 'Secret', '[]', 0, '2020-08-24 04:00:53', '2020-08-24 04:00:53', '2021-08-24 09:30:53'),
('82a5aaedb9546033671c1cd49d5e7972a944644a419c247318ff9c1dd0bc2181c579815e49090173', 7, 1, 'Secret', '[]', 0, '2020-08-24 04:27:57', '2020-08-24 04:27:57', '2021-08-24 09:57:57'),
('8aa6a360abb699da36e6222ef58615cb6468fdc7116c8144bf7db496b293189e2dd0f769eaf32b04', 7, 1, 'Secret', '[]', 0, '2020-08-24 04:27:21', '2020-08-24 04:27:21', '2021-08-24 09:57:21'),
('978e43e5d906a3ac248b0767cc87cc1e339666620a476acbcc1e9072d4848ab5ea3654fc0489edd5', 1, 1, 'Secret', '[]', 0, '2020-08-23 08:00:56', '2020-08-23 08:00:56', '2021-08-23 13:30:56'),
('a359470a401ade0f669442d34e202023cf59b16a761aea702ceebad3b33e7d94db566858ecf245af', 1, 1, 'Secret', '[]', 0, '2020-08-23 07:59:33', '2020-08-23 07:59:33', '2021-08-23 13:29:33'),
('b82100699f05abeb1fb13361aa79c9eff802c2226b865b798802d11cde9c15e45f60a4ba971618ba', 1, 1, 'Secret', '[]', 0, '2020-08-23 07:56:50', '2020-08-23 07:56:50', '2021-08-23 13:26:50'),
('bf7c59da42b20476f317bd203e12f9da8f8578e3063e9af481a2a2937b01b810f0f1cdf70ac836a8', 1, 1, 'Secret', '[]', 0, '2020-08-23 08:02:32', '2020-08-23 08:02:32', '2021-08-23 13:32:32'),
('c1b8870428e11fa97d77cede7e0a0e3d07b78a337f98c7be1d63f2774e3896ed129b84c0267509d8', 6, 1, 'Secret', '[]', 0, '2020-08-24 04:01:55', '2020-08-24 04:01:55', '2021-08-24 09:31:55'),
('cc7feec5c16692ebe0ca69c77e6458d1dd9a15b61e6aa31604afcfdac144c4c6f6141e7dde26b9b3', 6, 1, 'Secret', '[]', 0, '2020-08-24 04:08:49', '2020-08-24 04:08:49', '2021-08-24 09:38:49'),
('df178403d1308a7ff162d7ad0f4f897a808ab2c65f1bebe4f8ee23d7151b9e17848d33c0cbad9b05', 3, 1, 'Secret', '[]', 0, '2020-08-24 04:01:11', '2020-08-24 04:01:11', '2021-08-24 09:31:11'),
('e5cfad70534d28ac09448307e99a8a2776379238e4869a676e5df06be5307b11ccdf7ac5b13ddf37', 6, 1, 'Secret', '[]', 0, '2020-08-24 04:09:06', '2020-08-24 04:09:06', '2021-08-24 09:39:06'),
('e5eb72fb2e193821d4bfc239210b4a74223164c3caa6fa5e115f2520b9fb7ad4128c02ef044f95fe', 3, 1, 'Secret', '[]', 0, '2020-08-24 03:53:01', '2020-08-24 03:53:01', '2021-08-24 09:23:01'),
('e697b3c8c017157d8db6adcfa2957b171043f7bfcf398b2a3a1fb5e20889c23b69466b63d90ec1bb', 1, 1, 'MyApp', '[]', 0, '2020-08-23 07:39:15', '2020-08-23 07:39:15', '2021-08-23 13:09:15'),
('eb9ca804fcdf15679a3a1f694bdbd97dc3fbabd7e0733adf6ddaff552b7db9bf7177458a9bd0ef6d', 1, 1, 'Secret', '[]', 0, '2020-08-23 07:59:25', '2020-08-23 07:59:25', '2021-08-23 13:29:25'),
('ed11acfaab1566e0f03d29c3c4bb993ca179e84c261ac9de55ec72ed4f3eb3548de4795127f9a05b', 1, 1, 'Secret', '[]', 0, '2020-08-24 03:42:50', '2020-08-24 03:42:50', '2021-08-24 09:12:50'),
('edf98cf799b414c1c08078a947a3cba427269e5e999af288490be6bf89a94d5613f986cba9590607', 6, 1, 'Secret', '[]', 0, '2020-08-24 04:09:01', '2020-08-24 04:09:01', '2021-08-24 09:39:01'),
('ef6af49362cefbaf89812853aad53a3b82eb50df28b4fb2cc8bee533bfb0158a8aaaf164a8aa58a5', 1, 1, 'Secret', '[]', 0, '2020-08-23 08:32:27', '2020-08-23 08:32:27', '2021-08-23 14:02:27'),
('f9ec743d123d623c7526839e42ba993f258fafe30940388f6e70c268003eb78df54775f010d7ea6c', 1, 1, 'Secret', '[]', 0, '2020-08-23 07:59:51', '2020-08-23 07:59:51', '2021-08-23 13:29:51'),
('ff836ec7352997a249a5fac2b0f025017afc47d37f01d4bfd0a57bd34d5ed7b036079aa6597c10b0', 6, 1, 'Secret', '[]', 0, '2020-08-24 04:16:51', '2020-08-24 04:16:51', '2021-08-24 09:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

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
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'ozdWpZVn71ekkAkbIAKg8TJij7kn8VrKv0PCez5F', NULL, 'http://localhost', 1, 0, 0, '2020-08-23 06:36:03', '2020-08-23 06:36:03'),
(2, NULL, 'Laravel Password Grant Client', 'uJxSff5I6zMQG5qhPBb9usfABZgZ82GYLZKZoKvP', 'users', 'http://localhost', 0, 1, 0, '2020-08-23 06:36:03', '2020-08-23 06:36:03'),
(3, 1, 'sceret', 'GczTHdGxBrQOxXbP4HJwQU8Rd8rJ33aj0i40z2mQ', NULL, 'na', 0, 0, 0, '2020-08-23 06:58:02', '2020-08-23 06:58:02'),
(4, 1, 'secret', 'EkjvtH0SQmkM6J9yzSe9A87vLeSaAJkS4vksqxAy', NULL, 'http://localhost/auth/callback', 0, 0, 0, '2020-08-23 07:03:13', '2020-08-23 07:03:13'),
(5, NULL, 'secret', 'B5G6MiXotCuUqrkzz8l8vY7DPatmM4NKe9XRS1iv', 'users', 'http://localhost', 0, 1, 0, '2020-08-23 07:04:21', '2020-08-23 07:04:21'),
(6, 1, 'admin', 'z7qRnkM3cBiciys4Pj4C3Qj6uUEvZ6QIbIPIvNIK', NULL, 'http://localhost/auth/callback', 0, 0, 0, '2020-08-23 07:15:23', '2020-08-23 07:15:23'),
(7, NULL, 'admin', '9mrGcGkpsCmu69WnT5lmPYIAkUOAw8xuHOEEPM4p', NULL, '', 0, 0, 0, '2020-08-23 07:17:31', '2020-08-23 07:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-08-23 06:36:03', '2020-08-23 06:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@material.com', NULL, 'admin', '2020-08-20 05:56:10', '$2y$10$TCe6whYRd/9v8hby4nXVz.E6nxhH6.LPyS09arWPbuD9vDW2acxKu', NULL, '2020-08-20 05:56:10', '2020-08-21 02:27:23'),
(2, 'test', 'test@gmail.com', NULL, 'user', '2020-08-20 05:56:10', '$2y$10$TCe6whYRd/9v8hby4nXVz.E6nxhH6.LPyS09arWPbuD9vDW2acxKu', '20FwlQj0z3uR7lr9aO0IyL22nyDtuq0TrLnyM1JApmKqKbfuNkCL0tqeVn04', '2020-08-20 05:56:10', '2020-08-20 05:56:10'),
(3, 'testo', 'testo@gmail.com', NULL, 'user', NULL, '$2y$10$j3nNg1y3PWioE1PB0quz5.lXQVwAtTf9xjTnA25mR.RWtxp/dywK6', NULL, '2020-08-24 03:53:01', '2020-08-24 03:53:01'),
(6, 'reer', 'testo1@gmail.com', NULL, 'user', '2020-08-24 04:16:51', '$2y$10$/rii9vi1dwMTHolNi/qAPO2yYbIWBYD1Go31Wws1j2cOsgoLCn6tO', NULL, '2020-08-24 04:01:55', '2020-08-24 04:16:51'),
(7, 'rahul', 'rahul@gmail.com', '345677543333', 'user', '2020-08-24 04:33:47', '$2y$10$upY4d9Z4Ndznpv4gMrUCY.wzagTmhJyraqx1hQmADD9WpADp5/JkG', NULL, '2020-08-24 04:17:13', '2020-08-24 04:33:47'),
(8, 'me', 'me@gmail.com', NULL, 'admin', NULL, '$2y$10$TMleFZRWpQJg94wq8lkoduNRGaNZhJi1VLcOSJpiIA.p4sJtD2mUa', NULL, '2020-12-10 11:16:30', '2020-12-10 11:16:30'),
(9, 'shekhar', 'shekhar@gmail.com', NULL, 'admin', NULL, '$2y$10$TQlGEzsKYRRlC9HiG3W6N.khRnrvb.XE8d.Ta6h7Rfg/J9wnanRny', NULL, '2020-12-10 11:19:45', '2020-12-10 11:19:45'),
(10, 'test', 'maya@gmail.com', NULL, 'admin', NULL, '$2y$10$tG5/LwVX/CEjNiwtVPMXO.ZevKoHWmyHR14BCQtDNFJE7h9YdN39y', NULL, '2020-12-10 11:34:41', '2020-12-10 11:34:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
