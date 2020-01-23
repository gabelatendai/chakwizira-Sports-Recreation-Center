-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 01:57 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csrc`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `role`, `pnumber`, `information`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Gaza', 'Manager', '0777318344', 'Our Team Manager', 'images/techteam/1546550158logo2.png', '2019-01-03 19:15:37', '2019-01-23 18:01:55'),
(2, 'Zoche', 'Sponsor', '+447450370004', 'Our Sponsor', 'images/techteam/1546557482new.jpg', '2019-01-03 20:11:48', '2019-01-23 18:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `headline`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Hammers Football Club', 'Chakwizira Sports &  Recreation Centre', 'images/banners/1546527148new.jpg', '2019-01-03 07:59:17', '2019-01-17 19:13:23'),
(3, 'About Us', 'Chakwizira', 'images/banners/1547759693NGHK5346.jpg', '2019-01-03 19:19:48', '2019-01-17 19:14:53'),
(4, 'The Boys', 'The boys are always at their best', 'images/banners/154770739420180908_164300.jpg', '2019-01-17 04:43:14', '2019-01-17 04:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `caption`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Players', 'the boys at work', 'images/gallery/1547718184NGHK5346.jpg', '2019-01-02 16:16:16', '2019-01-17 07:43:04'),
(2, 'customers', 'hhdhs hshhshjj hshs  sh', 'images/gallery/1547293796new.jpg', '2019-01-12 09:49:56', '2019-01-12 09:49:56'),
(3, 'Players', 'The boys before the game', 'images/gallery/154771811920180908_164300.jpg', '2019-01-17 07:41:59', '2019-01-17 07:41:59'),
(4, 'Techteam', 'Our Team\'s president ,Manager and Commit Member', 'images/gallery/1547718243CORC5604.JPG', '2019-01-17 07:44:03', '2019-01-17 07:44:03'),
(5, 'Players', 'our team', 'images/gallery/1547718420AUPN3667 (1).jpg', '2019-01-17 07:47:00', '2019-01-17 07:47:00'),
(6, 'Players', '2017 when the team was launched', 'images/gallery/1547718469CSJH5263.jpg', '2019-01-17 07:47:49', '2019-01-17 07:47:49'),
(7, 'Techteam', 'Line Up', 'images/gallery/1547718494LJJL7681.jpg', '2019-01-17 07:48:14', '2019-01-17 07:48:14'),
(8, 'Supporters', 'boys', 'images/gallery/1547718522QPOD1158.jpg', '2019-01-17 07:48:42', '2019-01-17 07:48:42'),
(9, 'Players', 'Team', 'images/gallery/1547718546USLE9802.jpg', '2019-01-17 07:49:06', '2019-01-17 07:49:06'),
(10, 'Players', 'Line up', 'images/gallery/1547718566VTVJ7068.jpg', '2019-01-17 07:49:26', '2019-01-17 07:49:26'),
(11, 'Players', 'computer school', 'images/gallery/1547802624bg (2).jpg', '2019-01-18 07:10:24', '2019-01-18 07:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(10) UNSIGNED NOT NULL,
  `home` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `away` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
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
(3, '2019_01_02_145719_create_settings_table', 2),
(4, '2019_01_02_151210_create_services_table', 2),
(5, '2019_01_02_151503_create_players_table', 2),
(6, '2019_01_02_152236_create_galleries_table', 2),
(7, '2019_01_02_152654_create_news_table', 2),
(9, '2019_01_03_091230_create_static_banners_table', 3),
(10, '2019_01_03_093031_create_matches_table', 3),
(11, '2019_01_02_152855_create_banners_table', 4),
(12, '2019_01_03_170821_create_abouts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `msg`, `slug`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'win win situation for the boys', 'CSRC mission is to establish an academic and sporting centre of excellence that enables the youth to show case their talent .CSRC aims to provide opportunities to all the youth regardless of their background, hence nurturing them in a bid to achieve their dream of becoming successful professional. CSRC youth will also play an important role in community development, problem solving and environment conservation. CSRC also aim to top talent from under privileged promising youth in a bid to realise their dreams.\r\n1)	Develop a netball and football academy that caters for the development of youth talent, as well as installing important inter-personal skills, psycho-social skills and their academic.\r\n2)	Provide key essentials of life: Education- set up a computer school to enhance youth I T skills\r\n3)	Provide a platform for the academy graduates to expose their talent to professional sport organisations and higher education institutions \r\n4)	To turn CSRC into a centre of excellence that work effectively by integrating with all the relevant institutions in Zimbabwe and the world as a whole.\r\n5)	Establish a health centre that will benefit the community.', 'win-win-situation-for-the-boys', 'Games', 'images/news/1546453750IMG_2268.jpg', '2019-01-02 16:29:10', '2019-01-02 16:29:10'),
(2, 'stadium development', 'the stadium for chakwizira fc', 'stadium-development', 'Games', 'images/news/1546826114new.jpg', '2019-01-06 23:55:14', '2019-01-06 23:55:14'),
(3, 'Another win aganst Mubaiwa', 'Win recorded', 'another-win-aganst-mubaiwa', 'Netball', 'images/news/1546827932IMG_2285.jpg', '2019-01-07 00:25:32', '2019-01-12 20:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('gabrielmusodza@gmail.com', '$2y$10$eMv1mDxuYiRjkpUcnaC2tO78KPTIK4D2u.B6BqdPR9b.cUQLGrE96', '2019-01-01 17:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdNum` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `information`, `dob`, `position`, `pnumber`, `IdNum`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Gabriel T Musodza', 'He is the best', '2019-01-03', 'midfieldr', '0773629299', '48-134787v48', 'images/team/1548274269gbl.jpg', '2019-01-02 17:33:51', '2019-01-23 18:11:09'),
(2, 'Fungai Matingwina', 'he is the best defender come Central midfielder', '1988-11-02', 'defender', '0773024041', '43-124787v44', 'images/team/1548275009EXFK8265.JPG', '2019-01-23 18:23:29', '2019-01-23 18:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mans Soccer Team', 'We have a senior  man soccer team', 'mans-soccer-team', 'images/services/1546531802new.jpg', '2019-01-02 16:36:33', '2019-01-03 14:10:02'),
(2, 'Netball Team', 'We are Developing a Netball Team', 'netball-team', 'images/services/1546533038new.jpg', '2019-01-03 14:30:38', '2019-01-18 08:57:34'),
(3, 'computer science', 'Education- set up a computer school to enhance youth I T skills', 'computer-science', 'images/services/1547774708bg.jpg', '2019-01-03 14:31:18', '2019-01-17 23:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnumber2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `about`, `description`, `address`, `email`, `pnumber`, `image`, `mission`, `vision`, `pnumber2`, `created_at`, `updated_at`) VALUES
(1, 'Chakwizira Sports & Recreation Centre', 'Chakwizira Sports and Recreation Centre (CSRC) aims to provide a platform \r\n            form the development of youth by offering high \r\n            levels of educational and sporting programmes. ..', 'Chakwizira Sports and Recreation Centre (CSRC) is a\r\n             community based sport and academic project that \r\n            aims to improve the socio-economic wellbeing of the youth \r\n            as well as develop their inter-personal skills.', 'Chakwizira Village Harava \r\nDistrict Council Ward 2 Seke', 'info@csrc.co.zw', '+263 777 318344', 'images/settings/1547627681red.png', 'CSRC mission is to establish an academic and sporting centre of excellence that enables the youth to show case their talent .CSRC aims to provide opportunities to all the youth regardless of their background, hence nurturing them in a bid to achieve their dream of becoming successful professional. CSRC youth will also play an important role in community development, problem solving and environment conservation. CSRC also aim to top talent from under privileged promising youth in a bid to realise their dreams.', 'It is our vision to provide answers to the traditional and perennial socio-economic difficulties that the youth face in their day to day lives in the society Chakwizira Sports and Recreation Centre (CSRC). Aims to provide a platform for youth to gain skills by offering dynamic world leading sports programmes that encompass pivotal academic, nutritional and social systems, the platform will also allow the youth to showcase their talent hence transforming them into men and woman of strong calibre.', '+447450370004', '2019-01-02 13:41:45', '2019-01-17 23:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `static_banners`
--

CREATE TABLE `static_banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static_banners`
--

INSERT INTO `static_banners` (`id`, `headline`, `pagename`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'About', 'Chakwizira Football Club', 'images/static/1546550791new.jpg', '2019-01-03 19:26:31', '2019-01-03 19:30:32'),
(3, 'Our News & Events', 'Blog', 'Our News & Events', 'images/static/1546585882new.jpg', '2019-01-04 05:11:22', '2019-01-04 05:11:22'),
(4, 'Contact Us', 'Contact', 'Get in Touch with us', 'images/static/1546616353new.jpg', '2019-01-04 13:39:13', '2019-01-04 13:39:13'),
(5, 'What We do', 'Services', 'our services for you', 'images/static/1547654137new.jpg', '2019-01-16 13:55:37', '2019-01-16 13:55:37'),
(6, 'Our Portfolio Our Pride', 'Portfolio', 'Our Gallery', 'images/static/1547769691VTVJ7068.jpg', '2019-01-17 22:01:31', '2019-01-17 22:01:31'),
(7, 'Meet Our Team', 'Team', 'Meet our Technical Team The Players', 'images/static/1548275316NGHK5346.jpg', '2019-01-18 09:17:09', '2019-01-23 18:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gabriel Musodza', 'gabrielmusodza@gmail.com', NULL, '$2y$10$wZz84trTXTfzdEOYhzmlXONfBRGHXeEcv6ge4m5/uzL3nqFZ2kC5K', 1, 'loEMgjmGFYnuArWwlV88Nete22i9dhy22rzV91cTyGh2ILP6zR1WWpMWmarp', '2018-12-31 18:26:21', '2019-01-01 15:57:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_banners`
--
ALTER TABLE `static_banners`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `static_banners`
--
ALTER TABLE `static_banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
