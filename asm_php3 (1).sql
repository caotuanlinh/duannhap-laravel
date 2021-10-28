-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:33067
-- Thời gian đã tạo: Th10 28, 2021 lúc 05:39 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_php3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'linhhh', 'tuannnlinhhh@gmail.com', '$2y$10$8CXFG4PyZsVcjT9GM.5jkOvl2MoTZR0fDsJHhec3jO/svA2Ta0ZvC', 531548524);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `flights_rooms`
--

CREATE TABLE `flights_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `flights_rooms`
--

INSERT INTO `flights_rooms` (`id`, `room_no`, `floor`, `image`, `detail`, `price`, `created_at`, `updated_at`) VALUES
(17, 'GMXASOE9', 3, 'uploads/rooms/613b317c29e49-11.jpg', 'Space in your house How to sell faster than your neighbors How to make a strategic use. To discourage you by telling. To discourage you by telling. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. To discourage you by telling. To discourage you by telling. Space in your house How to sell faster than your neighbors How to make a strategic use. The real goal of any talk or speech.\r\n\r\nBy Learning Ways To Become Peaceful. One of the greatest barriers to making the sale is your prospect\'s natural. Don\'t stubbornly. Don\'t stubbornly. Don\'t stubbornly. -And Gain Power By Learning Ways To Become Peaceful.', 2187, '2021-07-25 20:14:43', '2021-09-10 03:20:44'),
(49, 'FRCVNPW9', 15, 'uploads/rooms/613b788cb241a-GRAND_PDLK_01.jpg', 'Space in your house How to sell faster than your neighbors How to make a strategic use. To discourage you by telling. To discourage you by telling. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. To discourage you by telling. To discourage you by telling. Space in your house How to sell faster than your neighbors How to make a strategic use. The real goal of any talk or speech.\r\n\r\nBy Learning Ways To Become Peaceful. One of the greatest barriers to making the sale is your prospect\'s natural. Don\'t stubbornly. Don\'t stubbornly. Don\'t stubbornly. -And Gain Power By Learning Ways To Become Peaceful.', 265, '2021-08-08 21:04:46', '2021-09-10 08:23:56'),
(53, 'TUIRBEC3PGP', 40, 'uploads/rooms/613b785e9788f-vnp_1.jpg', 'Space in your house How to sell faster than your neighbors How to make a strategic use. To discourage you by telling. To discourage you by telling. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. To discourage you by telling. To discourage you by telling. Space in your house How to sell faster than your neighbors How to make a strategic use. The real goal of any talk or speech.\r\n\r\nBy Learning Ways To Become Peaceful. One of the greatest barriers to making the sale is your prospect\'s natural. Don\'t stubbornly. Don\'t stubbornly. Don\'t stubbornly. -And Gain Power By Learning Ways To Become Peaceful.', 2812, '2021-08-08 21:04:46', '2021-09-10 08:23:10'),
(57, 'AOAWZENEP7N', 39, 'uploads/rooms/613b30a8ece40-10.jpg', 'Space in your house How to sell faster than your neighbors How to make a strategic use. To discourage you by telling. To discourage you by telling. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. To discourage you by telling. To discourage you by telling. Space in your house How to sell faster than your neighbors How to make a strategic use. The real goal of any talk or speech.\r\n\r\nBy Learning Ways To Become Peaceful. One of the greatest barriers to making the sale is your prospect\'s natural. Don\'t stubbornly. Don\'t stubbornly. Don\'t stubbornly. -And Gain Power By Learning Ways To Become Peaceful.', 227, '2021-08-08 21:04:46', '2021-09-10 03:17:12'),
(74, 'Luxirious Suites', 5, 'uploads/rooms/613b1cb702dce-8.jpg', 'Space in your house How to sell faster than your neighbors How to make a strategic use. To discourage you by telling. To discourage you by telling. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. To discourage you by telling. To discourage you by telling. Space in your house How to sell faster than your neighbors How to make a strategic use. The real goal of any talk or speech.\r\n\r\nBy Learning Ways To Become Peaceful. One of the greatest barriers to making the sale is your prospect\'s natural. Don\'t stubbornly. Don\'t stubbornly. Don\'t stubbornly. -And Gain Power By Learning Ways To Become Peacefu', 2000, '2021-09-10 01:52:07', '2021-09-10 01:52:07'),
(75, 'Luxirious Suites', 5, 'uploads/rooms/613b32a991487-phong-ngu-khach-san-5-sao-2-637226034911724690.jpg', 'Space in your house How to sell faster than your neighbors How to make a strategic use. To discourage you by telling. To discourage you by telling. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. To discourage you by telling. To discourage you by telling. Space in your house How to sell faster than your neighbors How to make a strategic use. The real goal of any talk or speech.\r\n\r\nBy Learning Ways To Become Peaceful. One of the greatest barriers to making the sale is your prospect\'s natural. Don\'t stubbornly. Don\'t stubbornly. Don\'t stubbornly. -And Gain Power By Learning Ways To Become Peaceful.', 2000, '2021-09-10 03:25:45', '2021-09-10 03:25:45'),
(76, 'ngonnnn', 2, 'uploads/rooms/f-p-2.jpg', 'ádasd', 20000, '2021-10-27 11:48:54', '2021-10-27 11:48:54'),
(81, 'sdfsfsfd', 2, 'uploads/rooms/f-p-8.jpg', 'ád á', 1123131, '2021-10-27 12:27:14', '2021-10-27 12:27:14'),
(82, 'sdfsfsfd', 2, 'uploads/rooms/f-p-8.jpg', 'ád á', 1123131, '2021-10-27 12:27:47', '2021-10-27 12:27:47'),
(83, 'sdfsfsfd', 2, 'uploads/rooms/f-p-8.jpg', 'ád á', 1123131, '2021-10-27 12:28:15', '2021-10-27 12:28:15'),
(84, 'ngonnnzl', 5, 'uploads/rooms/f-p-8.jpg', 'adasad', 5000, '2021-10-27 20:00:30', '2021-10-27 20:00:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `flights_room_services`
--

CREATE TABLE `flights_room_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `servi_id` bigint(20) UNSIGNED NOT NULL,
  `additional_price` int(11) DEFAULT NULL,
  `topping_id` int(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `flights_room_services`
--

INSERT INTO `flights_room_services` (`id`, `room_id`, `servi_id`, `additional_price`, `topping_id`, `created_at`, `updated_at`) VALUES
(1, 57, 2, 88, 0, '2021-08-19 03:36:18', '2021-08-19 03:36:18'),
(2, 49, 1, 1211, 0, '2021-08-19 03:36:18', '2021-08-19 03:36:18'),
(4, 57, 2, 2283, 0, '2021-08-19 03:36:18', '2021-08-19 03:36:18'),
(5, 53, 24, 2965, 0, '2021-08-19 03:36:18', '2021-08-19 03:36:18'),
(21, 74, 1, NULL, 0, '2021-09-10 01:52:07', '2021-09-10 01:52:07'),
(22, 74, 2, NULL, 0, '2021-09-10 01:52:07', '2021-09-10 01:52:07'),
(23, 75, 2, NULL, 0, '2021-09-10 03:25:45', '2021-09-10 03:25:45'),
(24, 75, 24, NULL, 0, '2021-09-10 03:25:45', '2021-09-10 03:25:45'),
(25, 75, 25, NULL, 0, '2021-09-10 03:25:45', '2021-09-10 03:25:45'),
(26, 53, 25, NULL, 0, NULL, NULL),
(27, 53, 26, NULL, 0, NULL, NULL),
(38, 17, 1, NULL, 0, NULL, NULL),
(39, 17, 2, NULL, 0, NULL, NULL),
(40, 17, 24, NULL, 0, NULL, NULL),
(72, 76, 25, 1000000, 1, '2021-10-27 11:48:54', '2021-10-27 11:48:54'),
(73, 76, 25, 1000000, 2, '2021-10-27 11:48:54', '2021-10-27 11:48:54'),
(74, 76, 26, 1000000, 1, '2021-10-27 11:48:54', '2021-10-27 11:48:54'),
(75, 76, 26, 1000000, 2, '2021-10-27 11:48:54', '2021-10-27 11:48:54'),
(76, 84, 24, 1231231454, 1, '2021-10-27 20:00:30', '2021-10-27 20:00:30'),
(77, 84, 24, 1231231454, 2, '2021-10-27 20:00:30', '2021-10-27 20:00:30'),
(78, 84, 25, 1231231454, 1, '2021-10-27 20:00:30', '2021-10-27 20:00:30'),
(79, 84, 25, 1231231454, 2, '2021-10-27 20:00:30', '2021-10-27 20:00:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `flights_services`
--

CREATE TABLE `flights_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `flights_services`
--

INSERT INTO `flights_services` (`id`, `name`, `icon`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Jace VonRueden', 'Kennith Jerde', 2000, '2021-07-25 09:46:49', '2021-07-25 09:46:49'),
(2, 'Sabrina Hill Jr.', 'Samara Willms', 2000, '2021-07-25 09:46:49', '2021-07-25 09:46:49'),
(24, 'Massage', 'Massage', 2000, '2021-08-12 09:14:35', '2021-08-12 09:14:35'),
(25, 'Vip1', 'aaa', 2000, '2021-08-19 07:56:46', '2021-08-19 07:56:46'),
(26, 'Vip3', 'ádwedfwe', 2000, '2021-08-19 07:57:15', '2021-08-19 07:57:15'),
(27, 'Vip pro', 'àewewwew', 2000, '2021-08-19 07:57:32', '2021-08-19 07:57:32'),
(29, 'xông hơi', 'aaaa', 2000, '2021-09-10 10:19:24', '2021-09-10 10:19:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_25_150833_create_flights_rooms', 2),
(5, '2021_07_25_150852_create_flights_services', 2),
(6, '2021_07_25_150944_create_flights_room_services', 2),
(7, '2021_07_25_170558_create_flights_rooms', 3),
(8, '2021_07_25_171213_create_flights_room_services', 4),
(9, '2021_07_25_171627_create_flights_room_services', 5),
(10, '2021_08_06_083502_create_permission_tables', 6),
(11, '2021_08_08_174931_create_permission_tables', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'add ', 'web', '2021-08-08 11:13:33', '2021-08-08 11:13:33'),
(2, 'edit', 'web', '2021-08-08 11:13:33', '2021-08-08 11:13:33'),
(3, 'remove', 'web', '2021-08-08 11:13:33', '2021-08-08 11:13:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-08-08 11:13:33', '2021-08-08 11:13:33'),
(2, 'editor', 'web', '2021-08-08 11:13:33', '2021-08-08 11:13:33'),
(3, 'moderator', 'web', '2021-08-08 11:13:33', '2021-08-08 11:13:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topping`
--

CREATE TABLE `topping` (
  `id` int(3) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `topping`
--

INSERT INTO `topping` (`id`, `name`) VALUES
(1, 'chân châu trắng'),
(2, 'chân trâu đen'),
(3, 'chân trâu sợi'),
(4, 'thạch dừa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone_number`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'linhct', 'linhct11836@gmail.com', NULL, '$2y$10$N9BSHLMP.SEHRx672RTPou1Qwmnf7DZmJI.LE.KQZnn/Cq94ibsOu', 545416164, NULL, NULL, NULL, 1),
(2, 'tuanlinh', 'linhct@gmail.com', NULL, '$2y$10$BFcbie9B0j1tOcGKV/F6seD9c/97yhM1eIg58t1GBeZWabC06s/RO', 56841349, NULL, NULL, '2021-08-06 20:40:50', 1),
(3, 'linngngng', 'abccccc@gmail.com', NULL, '$2y$10$3sRvuM501wBS3xOvA.J7iOJ2UXAuOJCfgyTNMBbg5c2lbFebOT4Sq', 0, NULL, NULL, '2021-08-07 19:26:05', 1),
(10, 'tuannnlinhhh', 'tuannnlinhhh@gmail.com', NULL, '$2y$10$JT9ADbKZcZ/Z7yqKF7MBQO/qU/IE8t7MoBd0rS5c/Yj7huFUKsWA6', 531548524, NULL, NULL, '2021-08-08 07:41:18', 2),
(24, 'tuấn linhhhh', 'abcccddcc@gmail.com', NULL, '$2y$10$Xv35eBFrxMKVtoSzggLMneNgyRv76LOa0uTj5lZpvxlTzf4lB5A92', 335899481, NULL, '2021-09-13 21:07:32', '2021-09-13 21:07:32', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `flights_rooms`
--
ALTER TABLE `flights_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `flights_room_services`
--
ALTER TABLE `flights_room_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flights_room_services_room_id_foreign` (`room_id`),
  ADD KEY `flights_room_services_servi_id_foreign` (`servi_id`);

--
-- Chỉ mục cho bảng `flights_services`
--
ALTER TABLE `flights_services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `topping`
--
ALTER TABLE `topping`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `flights_rooms`
--
ALTER TABLE `flights_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `flights_room_services`
--
ALTER TABLE `flights_room_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `flights_services`
--
ALTER TABLE `flights_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `topping`
--
ALTER TABLE `topping`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `flights_room_services`
--
ALTER TABLE `flights_room_services`
  ADD CONSTRAINT `flights_room_services_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `flights_rooms` (`id`),
  ADD CONSTRAINT `flights_room_services_servi_id_foreign` FOREIGN KEY (`servi_id`) REFERENCES `flights_services` (`id`);

--
-- Các ràng buộc cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
