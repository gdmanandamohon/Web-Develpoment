-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2016 at 07:01 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_remote_e_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `aa`
--

CREATE TABLE IF NOT EXISTS `aa` (
  `aa` varchar(10) NOT NULL,
  `bb` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aa`
--

INSERT INTO `aa` (`aa`, `bb`) VALUES
('aaaa', 'aaaa'),
('username', 'referer');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_09_12_071947_tbl_patient', 1),
('2015_09_12_072203_tbl_hp_mm_admin', 1),
('2015_10_05_121300_tbl_patients_measuerment', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hp_mm_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_hp_mm_admin` (
  `id` int(10) unsigned NOT NULL,
  `admin_uName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `admin_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE IF NOT EXISTS `tbl_patient` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allot_room_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `patient_age` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `p_guard_cnt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `p_guard_add` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`id`, `name`, `allot_room_no`, `patient_id`, `patient_age`, `p_guard_cnt`, `p_guard_add`, `created_at`, `updated_at`) VALUES
(1, 'Ananda ', '101', 'XOR11', '22', '06594989854', 'kba hall', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patients_measurement`
--

CREATE TABLE IF NOT EXISTS `tbl_patients_measurement` (
  `id` int(10) unsigned NOT NULL,
  `patient_body_temp` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `patient_ecg` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `patient_r_temp` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `patient_r_humidity` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `patient_r_light` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `patient_r_position` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `patient_r_touch` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_patients_measurement`
--

INSERT INTO `tbl_patients_measurement` (`id`, `patient_body_temp`, `patient_id`, `patient_ecg`, `patient_r_temp`, `patient_r_humidity`, `patient_r_light`, `patient_r_position`, `patient_r_touch`, `created_at`, `updated_at`) VALUES
(1, '38.9F', 'XOR11', '1.2,1.3,1.4,1.5,1.6,1.8,1.9,2.2,2.0,2,1.2,1.3,1.4', '36C', '67%', '100L', 'sleep', 'NO', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aa`
--
ALTER TABLE `aa`
  ADD PRIMARY KEY (`aa`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tbl_hp_mm_admin`
--
ALTER TABLE `tbl_hp_mm_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_patient_allot_room_no_unique` (`allot_room_no`);

--
-- Indexes for table `tbl_patients_measurement`
--
ALTER TABLE `tbl_patients_measurement`
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
-- AUTO_INCREMENT for table `tbl_hp_mm_admin`
--
ALTER TABLE `tbl_hp_mm_admin`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_patients_measurement`
--
ALTER TABLE `tbl_patients_measurement`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
