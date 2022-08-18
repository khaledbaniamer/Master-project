-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 12:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `association`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'khaled bani amer', 'khaled@mail.com', 'eyJpdiI6IkRBajZMMXM4WjZHK0FsQjNReUh0Znc9PSIsInZhbHVlIjoiUzRYME5XbllHMTA3dGZ3KzNLM1BMckF1dGREYTBRRUxqcHQ2aGFIcXFtbz0iLCJtYWMiOiI0OWExYWYxMDk4ZmQ2ZjM2ZDUzOWE3M2IxODg4ZDcxYWYyM2E5YTUyYzViMDk4MDNhMzc4ZmNjMGQ3YjgzZjRmIiwidGFnIjoiIn0=', '0795914123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `associations`
--

CREATE TABLE `associations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assoc_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assoc_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assoc_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assoc_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assoc_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assoc_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assoc_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assoc_manager_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `associations`
--

INSERT INTO `associations` (`id`, `assoc_name`, `assoc_image`, `assoc_location`, `assoc_phone`, `assoc_description`, `assoc_email`, `assoc_date`, `assoc_manager_id`, `created_at`, `updated_at`) VALUES
(1, 'Irhaba Charitable Society', 'storage/association_images/Jh1C4vYszaRKqCW5yiNCrjxKa9EscSYYNrY6KjcV.jpg', 'Irbed', '0795916825', 'Irhaba Charitable Society is a association that start  in 1999 by two  persons and grow up to help society in different filed such as health care, educational care, humanitarian aid, development projects', 'hebaduxin@mailinator.com', '19-May-1999', 1, NULL, NULL),
(2, 'Charitable Cooperation Association', 'storage/association_images/Jk4D6CwgsulNmhJ2SRnu3O6HkRKwdtH5MzAVTf6E.jpg', 'Amman', '0795916828', 'Charitable Cooperation Association is a association that start  in 2002 by two  persons and grow up to help society in different filed such as health care, educational care, humanitarian aid, development projects', 'dyvije@mailinator.com', '29-Oct-2002', 2, NULL, NULL),
(4, 'Jamalia Brooks', 'storage/association_images/vNo8L2ASvZH56dVjctY4xRri1jQ94tB74ahWNBnP.jpg', 'Sed omnis dolor quos', '0774412333', 'Mollit quo amet et', 'dojaz@mailinator.com', '15-Oct-1994', 4, '2022-08-11 10:46:07', '2022-08-11 10:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prod_quantity` int(11) NOT NULL,
  `prod_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_price` double NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `prod_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'Foods', 'storage/product_images/gcfLTCYxK3ii0em4xB5AfLQt0gPQPaf4twFNx1lf.jpg', NULL, NULL),
(2, 'Clothes', 'storage/product_images/GfxooIQLIojmcXuPdQ35CG0hZnS4SuAIt8ifA6oD.jpg', NULL, NULL),
(3, 'Handcraft', 'storage/product_images/BMtL5r4MPkU5oESq9jkAmv8siIm0HCmDHrAN3Vno.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manager_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `manager_name`, `manager_email`, `manager_password`, `manager_phone`, `created_at`, `updated_at`) VALUES
(1, 'Mohammed Ahmad', 'laravelassociation@gmail.com', 'eyJpdiI6IkZ4RDVPNHJpTEI5NmtkRXVwOGpoUVE9PSIsInZhbHVlIjoiMWh1bStXeXlGM0Rlb0MvWUFueUhnTzhzd0pVcjhPN1dtdFJuSUp5MmNvaz0iLCJtYWMiOiJkMDFlMDc0OTVhMzMxZTFiZjhlYmM2MTk2YjY5MTliZjJjZTg5NjZiNDcwNmFiMDI1Zjg3NTBhYjgwOGQyMmM2IiwidGFnIjoiIn0=', '0775916882', NULL, NULL),
(2, 'Ali Mohammad', 'managerassocc2@gmail.com', 'eyJpdiI6InBDQzY4L2R4T3ZGMVFmT3JiTzE0a0E9PSIsInZhbHVlIjoiZENUOVNtOEFLMkZVUTV1QStyUTZRc1RIRlFKa21kczVQTEFNMUYvNEpBVT0iLCJtYWMiOiIyMGIwNzczY2U2YzI3OGJiNjk3MzQ5NDRjMWIwNWFiZWNhYzlkN2ZjNGM0NGNiZTZmMzhlNzI5MTgwYjgyMTAyIiwidGFnIjoiIn0=', '0795916817', NULL, NULL),
(4, 'Khaled', 'assocmanager1@gmail.com', 'eyJpdiI6IjQ4dy8yK25BMm5KWWNVQnp0N3hpWnc9PSIsInZhbHVlIjoiQlh5SFd2aW1aWXFlOW9yZWRTRnBJMERHZytiVTJzTzVZazMyS0xxZG1icz0iLCJtYWMiOiJjMDZkZjdlOGMxMzE5MDUxYjEyZDMwZTAzYTc2YzIyODk5NmY1ODhhOTYwNGMxOGNmZGMzOGNiMzgzOGZjMzkxIiwidGFnIjoiIn0=', '0775916222', '2022-08-11 10:46:07', '2022-08-11 10:46:07');

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
(21, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(22, '2022_06_26_114432_create_orders_table', 1),
(23, '2022_06_26_114735_create_categories_table', 1),
(24, '2022_06_26_114753_create_managers_table', 1),
(25, '2022_06_26_114837_create_associations_table', 1),
(26, '2022_06_26_114901_create_products_table', 1),
(27, '2022_06_26_114925_create_admins_table', 1),
(28, '2022_06_26_115102_create_users_table', 1),
(29, '2022_06_26_115123_create_carts_table', 1),
(30, '2022_06_26_115150_create_order_histories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_total_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_total_amount`, `total_quantity`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '22.5', '3', '1', '2022-07-27 08:02:43', '2022-07-27 08:02:43'),
(4, '15.2', '2', '1', '2022-07-27 08:37:48', '2022-07-27 08:37:48'),
(5, '20.1', '2', '1', '2022-08-11 10:44:35', '2022-08-11 10:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `order_histories`
--

CREATE TABLE `order_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prod_quantity` int(11) NOT NULL,
  `prod_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_price` double NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `prod_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_histories`
--

INSERT INTO `order_histories` (`id`, `prod_quantity`, `prod_name`, `prod_image`, `prod_price`, `user_id`, `prod_id`, `created_at`, `updated_at`) VALUES
(13, 1, 'empty', 'empty', 12.5, 1, 1, '2022-07-27 08:02:43', '2022-07-27 08:02:43'),
(14, 2, 'empty', 'empty', 5, 1, 2, '2022-07-27 08:02:43', '2022-07-27 08:02:43'),
(15, 2, 'empty', 'empty', 7.6, 1, 3, '2022-07-27 08:37:48', '2022-07-27 08:37:48'),
(16, 1, 'empty', 'empty', 12.5, 1, 1, '2022-08-11 10:44:35', '2022-08-11 10:44:35'),
(17, 1, 'empty', 'empty', 7.6, 1, 3, '2022-08-11 10:44:35', '2022-08-11 10:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prod_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_price` double NOT NULL,
  `prod_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `assoc_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prod_name`, `prod_description`, `prod_price`, `prod_image`, `category_id`, `assoc_id`, `created_at`, `updated_at`) VALUES
(1, 'Red shemagh', 'Red shemagh is one of traditional Jordan clothes', 12.5, 'storage/product_images/xZ7qix4sh2Vqf1TCtL8mXjvZgyl19FXk7qSADndD.jpg', 2, 1, NULL, NULL),
(2, 'olives', 'pickled olives made in house with natural materials', 5, 'storage/product_images/agkgJ0MJyLRkW7XViZ39LccLr8II8i3wYEytAouC.jpg', 1, 1, NULL, NULL),
(3, 'straw basket', 'straw basket made from straw as new handcraft using to save and picked things', 7.6, 'storage/product_images/BM0nBn2Gkt2hxux7Sg4NFiQ0CY67xtMSSat7i3Ly.jpg', 3, 1, NULL, NULL),
(4, 'Traditional dress', 'Traditional dress made by hand refers to Jordanian culture', 60, 'storage/product_images/WECkFZUVm7aIJawXFvaGIRSWNeZNNaRyQQZ8cMGf.jpg', 2, 2, NULL, NULL),
(5, 'Olive oil', 'Olive oil useful, healthy and can use with all foods', 7, 'storage/product_images/oFmOcTZzVJJo6fcJkz8dRsMw6tzOkVLxYSuuXJyS.jpg', 1, 2, NULL, NULL),
(6, 'Soap', 'Soap made of 100% natural ingredients that are beneficial for the skin and does not cause any skin allergies', 4, 'storage/product_images/TrTzI2nzt8AWqIW82mOFD0a3RNKNMPbxkLmSSVIf.jpg', 3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_location`, `user_password`, `user_image`, `user_phone`, `created_at`, `updated_at`) VALUES
(1, 'telyjiaaaa', 'bycoz@mailinator.com', 'Ea nostrud tempor qu', 'eyJpdiI6IlhmTDFvR2VFYzZ1RGYyS1JkSzl4T3c9PSIsInZhbHVlIjoiSjdyOHBNbkhpc1IvNzVoL2FjeHorMzRyM3hlejM0cnhqbXY0UTNwNEpaQT0iLCJtYWMiOiI4MGY1MGE3YTdkNDY0MmQ4MjFhNjQ5NmJhZTZlOTg2YjU5MzdmNWJiNWRlNjdjMjQ2N2E5NzQwYjU2ZWJhYmFlIiwidGFnIjoiIn0=', NULL, '0795914133', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `associations`
--
ALTER TABLE `associations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `associations_assoc_manager_id_foreign` (`assoc_manager_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_prod_id_foreign` (`prod_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_histories`
--
ALTER TABLE `order_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_histories_user_id_foreign` (`user_id`),
  ADD KEY `order_histories_prod_id_foreign` (`prod_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_assoc_id_foreign` (`assoc_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `associations`
--
ALTER TABLE `associations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_histories`
--
ALTER TABLE `order_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `associations`
--
ALTER TABLE `associations`
  ADD CONSTRAINT `associations_assoc_manager_id_foreign` FOREIGN KEY (`assoc_manager_id`) REFERENCES `managers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_histories`
--
ALTER TABLE `order_histories`
  ADD CONSTRAINT `order_histories_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_assoc_id_foreign` FOREIGN KEY (`assoc_id`) REFERENCES `associations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
