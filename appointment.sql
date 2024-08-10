-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2024 at 01:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `slot_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `first_name`, `last_name`, `email`, `doctor_id`, `slot_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 'sharma', 'admin@gmail.com', 1, 1, '2023-12-26', '2023-12-17 02:04:41', '2023-12-17 02:04:41'),
(2, 'janvi', 'janvi', 'janvi@gmail.com', 1, 1, '2023-12-17', '2023-12-17 02:08:02', '2023-12-17 02:08:02'),
(3, 'asdfasdf', 'aaa', 'ss@gmail.com', 2, 1, '2023-12-17', '2023-12-17 02:08:33', '2023-12-17 02:08:33'),
(4, 'Test', 'test', 'test@gmail.com', 4, 1, '2023-12-26', '2023-12-17 03:10:09', '2023-12-17 03:10:09'),
(6, 'sam', 'sam', 'sam@gmail.com', 4, 4, '2023-12-26', '2023-12-17 03:21:27', '2023-12-17 03:21:27'),
(7, 'pain', 'pain', 'pain@gmail.com', 1, 2, '2023-12-18', '2023-12-17 06:10:23', '2023-12-17 06:10:23'),
(8, 'Bala', 'bala', 'bala@gmail.com', 1, 4, '2023-12-18', '2023-12-17 06:36:48', '2023-12-17 06:36:48'),
(9, 'sarwan', 'Verma', 'sarwan.makkpress@gmail.com', 1, 2, '2023-12-17', '2023-12-17 09:04:10', '2023-12-17 09:04:10'),
(10, 'sarwan', 'Verma', 'vishal@gmail.com', 4, 2, '2023-12-29', '2023-12-23 03:01:15', '2023-12-23 03:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Karan', '2023-12-16 16:30:31', '2023-12-16 16:30:31'),
(2, 'Amit', '2023-12-16 16:30:31', '2023-12-16 16:30:31'),
(3, 'Sunil', '2023-12-16 16:30:31', '2023-12-16 16:30:31'),
(4, 'Pradeep', '2023-12-16 16:30:31', '2023-12-16 16:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_16_043248_roles', 2),
(10, '2023_12_16_161756_create_doctors_table', 5),
(12, '2023_12_16_171020_create_slots_table', 7),
(13, '2023_12_16_100640_create_appointments_table', 8),
(14, '2014_10_12_000000_create_users_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slot` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `slot`, `created_at`, `updated_at`) VALUES
(1, '09:00 TO 11:00', '2023-12-16 17:13:16', '2023-12-16 17:13:16'),
(2, '12:00 TO 02:00', '2023-12-16 17:13:16', '2023-12-16 17:13:16'),
(3, '04:00 TO 06:00', '2023-12-16 17:13:16', '2023-12-16 17:13:16'),
(4, '07:00 TO 09:00', '2023-12-16 17:13:16', '2023-12-16 17:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Karan', 'karan@gmail.com', 1, NULL, '$2y$12$HWoXXt2jZFj7DShN/W9n6OnRuA62JYOgYK5yTGv7.xy5Atz.JylN6', NULL, '2023-12-17 01:58:44', '2023-12-17 01:58:44'),
(2, 'Amit', 'amit@gmail.com', 1, NULL, '$2y$12$KG03p/FEeEglD5HKIzBYL.bYTwwENzqFWK3r2NS8/TmWVMJR4/22G', NULL, '2023-12-17 01:59:06', '2023-12-17 01:59:06'),
(3, 'Sunil', 'sunil@gmail.com', 1, NULL, '$2y$12$y6aSNhftXspDeUXgetmJg.HA7vmnRMi4iQam6DlRgHOB3LOOPGuLW', NULL, '2023-12-17 01:59:30', '2023-12-17 01:59:30'),
(4, 'Pradeep', 'pradeep@gmail.com', 1, NULL, '$2y$12$CAC/r7b0oxsGMFwySkSV9eLLR/jN22xc6qvulkaJiu891YNt1oyoO', NULL, '2023-12-17 02:00:09', '2023-12-17 02:00:09'),
(5, 'staff', 'staff@gmail.com', 2, NULL, '$2y$12$07RMgWDeQJ1UpV/eoW4PGussemFc1VqbGPPaTk99cc4cA7mSQqGXK', NULL, '2023-12-17 02:10:48', '2023-12-17 02:10:48'),
(6, 'demo', 'sarwan.makkpress@gmail.com', 2, NULL, '$2y$12$koEANGlZecuDeeXR9NYtROesmSLlyzb8wFMmhCaAVJqmyigTvSyVC', NULL, '2023-12-17 09:07:07', '2023-12-17 09:07:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
