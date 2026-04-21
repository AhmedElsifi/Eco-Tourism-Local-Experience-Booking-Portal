-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2026 at 12:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eco_tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `addon`
--

CREATE TABLE `addon` (
  `addon_id` int(11) NOT NULL,
  `tour_version_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `log_id` bigint(20) NOT NULL,
  `entity_type` varchar(50) NOT NULL,
  `entity_id` int(11) NOT NULL,
  `action` enum('create','update','delete','view') NOT NULL,
  `field_changed` varchar(100) DEFAULT NULL,
  `old_value` text DEFAULT NULL,
  `new_value` text DEFAULT NULL,
  `changed_by` int(11) NOT NULL,
  `changed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `audit_logs`
--

INSERT INTO `audit_logs` (`log_id`, `entity_type`, `entity_id`, `action`, `field_changed`, `old_value`, `new_value`, `changed_by`, `changed_at`) VALUES
(1, 'tour', 1, 'update', 'status', 'draft', 'active', 4, '2026-04-19 18:13:22'),
(2, 'guide', 2, 'update', 'status', 'pending', 'verified', 3, '2026-04-19 18:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `traveler_id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `tour_version_id` int(11) NOT NULL,
  `carbon_offset` decimal(10,2) DEFAULT 0.00,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `status` enum('pending','confirmed','completed','cancelled') DEFAULT 'pending',
  `cancelled_at` timestamp NULL DEFAULT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_addons`
--

CREATE TABLE `booking_addons` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `addon_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT 1,
  `price_at_booking` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_resources`
--

CREATE TABLE `booking_resources` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eco_certifications`
--

CREATE TABLE `eco_certifications` (
  `id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `certificate_name` varchar(150) NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `status` enum('pending','verified','expired','rejected') DEFAULT 'pending',
  `reviewed_by` int(11) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `field_reports`
--

CREATE TABLE `field_reports` (
  `report_id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `content_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `guide_id` int(11) NOT NULL,
  `identity_verification_path` varchar(255) DEFAULT NULL,
  `verified_at` timestamp NULL DEFAULT NULL,
  `country_of_residence` varchar(100) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `years_of_experience` int(11) DEFAULT 0,
  `join_date` date NOT NULL,
  `status` enum('pending','verified','suspended','inactive') DEFAULT 'pending',
  `sustainability_score` decimal(3,2) DEFAULT 0.00,
  `cancellation_rate` decimal(5,2) DEFAULT 0.00,
  `visibility_score` decimal(3,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guide_badges`
--

CREATE TABLE `guide_badges` (
  `id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `badge` varchar(100) NOT NULL,
  `awarded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guide_languages`
--

CREATE TABLE `guide_languages` (
  `id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `proficiency_level` enum('basic','intermediate','advanced','native') DEFAULT 'intermediate',
  `status` enum('pending','verified','expired') DEFAULT 'pending',
  `certificate_path` varchar(255) DEFAULT NULL,
  `verified_by` int(11) DEFAULT NULL,
  `verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guide_residency`
--

CREATE TABLE `guide_residency` (
  `id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guide_shadowing`
--

CREATE TABLE `guide_shadowing` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `senior_guide_id` int(11) NOT NULL,
  `trainee_guide_id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `status` enum('scheduled','in_progress','completed','cancelled') DEFAULT 'scheduled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guide_wallet`
--

CREATE TABLE `guide_wallet` (
  `guide_id` int(11) NOT NULL,
  `pending_balance` decimal(10,2) DEFAULT 0.00,
  `available_balance` decimal(10,2) DEFAULT 0.00,
  `withdrawn_balance` decimal(10,2) DEFAULT 0.00,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `itinerary_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `language_id` int(11) DEFAULT NULL,
  `version` int(11) DEFAULT 1,
  `content` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `language_id` int(11) NOT NULL,
  `language_name` varchar(100) NOT NULL,
  `language_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`language_id`, `language_name`, `language_code`) VALUES
(1, 'English', 'en'),
(2, 'Spanish', 'es'),
(3, 'Portuguese', 'pt');

-- --------------------------------------------------------

--
-- Table structure for table `language_certifications`
--

CREATE TABLE `language_certifications` (
  `id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `certificate_name` varchar(150) NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `status` enum('pending','verified','expired','rejected') DEFAULT 'pending',
  `reviewed_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(150) NOT NULL,
  `country` varchar(100) NOT NULL,
  `region` varchar(100) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `country`, `region`, `latitude`, `longitude`, `created_at`) VALUES
(1, 'Amazon Rainforest', 'Brazil', 'South America', -3.46530000, -62.21590000, '2026-04-19 18:13:22'),
(2, 'Great Barrier Reef', 'Australia', 'Oceania', -18.28710000, 147.69920000, '2026-04-19 18:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `location_seasons`
--

CREATE TABLE `location_seasons` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `month` enum('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec') NOT NULL,
  `status` enum('available','unavailable','restricted') DEFAULT 'available',
  `reason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `location_seasons`
--

INSERT INTO `location_seasons` (`id`, `location_id`, `month`, `status`, `reason`) VALUES
(1, 1, 'Jun', 'available', 'Dry season, optimal trekking'),
(2, 1, 'Dec', 'unavailable', 'Heavy rainfall & flooding');

-- --------------------------------------------------------

--
-- Table structure for table `platform_settings`
--

CREATE TABLE `platform_settings` (
  `id` int(11) NOT NULL,
  `platform_fee_percent` decimal(5,2) DEFAULT 10.00,
  `local_tax_percent` decimal(5,2) DEFAULT 0.00,
  `currency` varchar(3) DEFAULT 'USD',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `platform_settings`
--

INSERT INTO `platform_settings` (`id`, `platform_fee_percent`, `local_tax_percent`, `currency`, `updated_at`) VALUES
(1, 10.00, 5.00, 'USD', '2026-04-19 18:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `regional_auditor`
--

CREATE TABLE `regional_auditor` (
  `auditor_id` int(11) NOT NULL,
  `assigned_region` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `resource_id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `total_quantity` int(11) DEFAULT 0,
  `unit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`resource_id`, `location_id`, `name`, `total_quantity`, `unit`) VALUES
(1, 1, 'Eco-Canoes', 10, 'units'),
(2, 2, 'Snorkel Kits', 25, 'units');

-- --------------------------------------------------------

--
-- Table structure for table `route_stops`
--

CREATE TABLE `route_stops` (
  `id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `stop_name` varchar(150) NOT NULL,
  `stop_order` int(11) NOT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(150) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `tour_type` enum('eco','adventure','cultural','wildlife','mixed') DEFAULT 'eco',
  `status` enum('draft','active','paused','archived') DEFAULT 'draft',
  `carbon_footprint` decimal(10,2) DEFAULT NULL,
  `waste_management` text DEFAULT NULL,
  `local_hiring` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_certificate`
--

CREATE TABLE `tour_certificate` (
  `tour_certificate_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `certificate_path` varchar(255) NOT NULL,
  `issued_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_impact_tag`
--

CREATE TABLE `tour_impact_tag` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `tag_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_routes`
--

CREATE TABLE `tour_routes` (
  `route_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `route_name` varchar(150) NOT NULL,
  `total_distance_km` decimal(8,2) DEFAULT NULL,
  `estimated_emission` decimal(10,2) DEFAULT NULL,
  `eco_score` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_version`
--

CREATE TABLE `tour_version` (
  `tour_version_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `version_name` varchar(100) NOT NULL,
  `price_per_person` decimal(10,2) NOT NULL,
  `max_capacity` int(11) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traveler`
--

CREATE TABLE `traveler` (
  `traveler_id` int(11) NOT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `total_carbon_offset` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` enum('traveler','guide','auditor','super_admin') NOT NULL,
  `profile_picture_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `date_of_birth`, `phone`, `password_hash`, `role`, `profile_picture_url`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Elsifi', 'ahmed@gmail.com', '2006-02-10', '+201099911188', '$2y$10$4d18uwr3d.05bU4W06uvpOTTP8tIqxtwkzIDreloIeqUyjdyGIl36', 'super_admin', NULL, '2026-04-21 21:44:18', '2026-04-21 21:44:18'),
(2, 'Shahd Elghandour', 'shahd@gmail.com', '2006-02-10', '+201012345678', '$2y$10$7d77dqA1yfZGHnfloRBHFOjpb3dal6XwSxHQL/xOReOGm.mqx2Aii', 'traveler', NULL, '2026-04-21 21:46:11', '2026-04-21 21:46:11'),
(3, 'Abdo Said', 'Abdo@gmail.com', '2006-02-10', '+201012345678', '$2y$10$wJGFaNXnvJDB59021fOq6Oeel9QuTeNWUuiPyO.xFSLWuE/BHKKbS', 'traveler', NULL, '2026-04-21 21:47:18', '2026-04-21 21:47:18'),
(4, 'Jana Belal', 'Jana@gmail.com', '2006-02-10', '+201012345678', '$2y$10$0oVVKYnN44myZCEDzUQUh.5knWcOxQWA2pvCZtfQu4.52L7A58.5q', 'traveler', NULL, '2026-04-21 21:48:43', '2026-04-21 21:48:43'),
(5, 'Samah Waleed', 'samah@gmail.com', '2006-02-10', '+201012345678', '$2y$10$xP.a9tjBlEu8ixXCPk.vIuS1CRuOYFq0gQRG5lqhnlV..WavjLU3m', 'traveler', NULL, '2026-04-21 21:50:11', '2026-04-21 21:50:11'),
(6, 'Ali Mohamed', 'ali@gmail.com', '2006-02-10', '+201012345678', '$2y$10$l9djReX52RGgiVTlqRKM7eDSUXm/16.VIThMqvoEo3pVp0.DPDCpS', 'guide', NULL, '2026-04-21 21:51:01', '2026-04-21 21:52:05'),
(7, 'Arwa Mahmoud', 'arwa@gmail.com', '2006-02-10', '+201012345678', '$2y$10$Bq.EQhjBJ1WJDCzD9c14FOrBnktqlzVxZ28lonj/Pr5/Ltk5q28rC', 'auditor', NULL, '2026-04-21 21:51:40', '2026-04-21 21:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal_requests`
--

CREATE TABLE `withdrawal_requests` (
  `request_id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` enum('pending','approved','rejected','processed') DEFAULT 'pending',
  `requested_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `processed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addon`
--
ALTER TABLE `addon`
  ADD PRIMARY KEY (`addon_id`),
  ADD KEY `tour_version_id` (`tour_version_id`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `idx_entity` (`entity_type`,`entity_id`),
  ADD KEY `idx_changed_by` (`changed_by`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `traveler_id` (`traveler_id`),
  ADD KEY `guide_id` (`guide_id`),
  ADD KEY `tour_version_id` (`tour_version_id`);

--
-- Indexes for table `booking_addons`
--
ALTER TABLE `booking_addons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `addon_id` (`addon_id`);

--
-- Indexes for table `booking_resources`
--
ALTER TABLE `booking_resources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `resource_id` (`resource_id`);

--
-- Indexes for table `eco_certifications`
--
ALTER TABLE `eco_certifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guide_id` (`guide_id`),
  ADD KEY `reviewed_by` (`reviewed_by`);

--
-- Indexes for table `field_reports`
--
ALTER TABLE `field_reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `guide_id` (`guide_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`guide_id`);

--
-- Indexes for table `guide_badges`
--
ALTER TABLE `guide_badges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guide_id` (`guide_id`);

--
-- Indexes for table `guide_languages`
--
ALTER TABLE `guide_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_guide_language` (`guide_id`,`language_id`),
  ADD KEY `language_id` (`language_id`),
  ADD KEY `verified_by` (`verified_by`);

--
-- Indexes for table `guide_residency`
--
ALTER TABLE `guide_residency`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guide_id` (`guide_id`);

--
-- Indexes for table `guide_shadowing`
--
ALTER TABLE `guide_shadowing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_id` (`tour_id`),
  ADD KEY `senior_guide_id` (`senior_guide_id`),
  ADD KEY `trainee_guide_id` (`trainee_guide_id`);

--
-- Indexes for table `guide_wallet`
--
ALTER TABLE `guide_wallet`
  ADD PRIMARY KEY (`guide_id`);

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`itinerary_id`),
  ADD KEY `tour_id` (`tour_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`language_id`),
  ADD UNIQUE KEY `language_name` (`language_name`);

--
-- Indexes for table `language_certifications`
--
ALTER TABLE `language_certifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guide_id` (`guide_id`),
  ADD KEY `language_id` (`language_id`),
  ADD KEY `reviewed_by` (`reviewed_by`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `location_seasons`
--
ALTER TABLE `location_seasons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_location_month` (`location_id`,`month`);

--
-- Indexes for table `platform_settings`
--
ALTER TABLE `platform_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regional_auditor`
--
ALTER TABLE `regional_auditor`
  ADD PRIMARY KEY (`auditor_id`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`resource_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `route_stops`
--
ALTER TABLE `route_stops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_route_stop_order` (`route_id`,`stop_order`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `guide_id` (`guide_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `tour_certificate`
--
ALTER TABLE `tour_certificate`
  ADD PRIMARY KEY (`tour_certificate_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `tour_impact_tag`
--
ALTER TABLE `tour_impact_tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_tour_tag` (`tour_id`,`tag_name`);

--
-- Indexes for table `tour_routes`
--
ALTER TABLE `tour_routes`
  ADD PRIMARY KEY (`route_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `tour_version`
--
ALTER TABLE `tour_version`
  ADD PRIMARY KEY (`tour_version_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `traveler`
--
ALTER TABLE `traveler`
  ADD PRIMARY KEY (`traveler_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `withdrawal_requests`
--
ALTER TABLE `withdrawal_requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `guide_id` (`guide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addon`
--
ALTER TABLE `addon`
  MODIFY `addon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `log_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_addons`
--
ALTER TABLE `booking_addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_resources`
--
ALTER TABLE `booking_resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eco_certifications`
--
ALTER TABLE `eco_certifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `field_reports`
--
ALTER TABLE `field_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guide_badges`
--
ALTER TABLE `guide_badges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guide_languages`
--
ALTER TABLE `guide_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guide_residency`
--
ALTER TABLE `guide_residency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guide_shadowing`
--
ALTER TABLE `guide_shadowing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `itinerary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `language_certifications`
--
ALTER TABLE `language_certifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location_seasons`
--
ALTER TABLE `location_seasons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `route_stops`
--
ALTER TABLE `route_stops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tour_certificate`
--
ALTER TABLE `tour_certificate`
  MODIFY `tour_certificate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tour_impact_tag`
--
ALTER TABLE `tour_impact_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tour_routes`
--
ALTER TABLE `tour_routes`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tour_version`
--
ALTER TABLE `tour_version`
  MODIFY `tour_version_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `withdrawal_requests`
--
ALTER TABLE `withdrawal_requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addon`
--
ALTER TABLE `addon`
  ADD CONSTRAINT `addon_ibfk_1` FOREIGN KEY (`tour_version_id`) REFERENCES `tour_version` (`tour_version_id`) ON DELETE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`traveler_id`) REFERENCES `traveler` (`traveler_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`guide_id`) REFERENCES `guide` (`guide_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`tour_version_id`) REFERENCES `tour_version` (`tour_version_id`) ON DELETE CASCADE;

--
-- Constraints for table `booking_addons`
--
ALTER TABLE `booking_addons`
  ADD CONSTRAINT `booking_addons_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_addons_ibfk_2` FOREIGN KEY (`addon_id`) REFERENCES `addon` (`addon_id`) ON DELETE CASCADE;

--
-- Constraints for table `booking_resources`
--
ALTER TABLE `booking_resources`
  ADD CONSTRAINT `booking_resources_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_resources_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `resource` (`resource_id`) ON DELETE CASCADE;

--
-- Constraints for table `eco_certifications`
--
ALTER TABLE `eco_certifications`
  ADD CONSTRAINT `eco_certifications_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `guide` (`guide_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `eco_certifications_ibfk_2` FOREIGN KEY (`reviewed_by`) REFERENCES `regional_auditor` (`auditor_id`) ON DELETE SET NULL;

--
-- Constraints for table `field_reports`
--
ALTER TABLE `field_reports`
  ADD CONSTRAINT `field_reports_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `guide` (`guide_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `field_reports_ibfk_2` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`) ON DELETE SET NULL;

--
-- Constraints for table `guide`
--
ALTER TABLE `guide`
  ADD CONSTRAINT `guide_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `guide_badges`
--
ALTER TABLE `guide_badges`
  ADD CONSTRAINT `guide_badges_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `guide` (`guide_id`) ON DELETE CASCADE;

--
-- Constraints for table `guide_languages`
--
ALTER TABLE `guide_languages`
  ADD CONSTRAINT `guide_languages_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `guide` (`guide_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `guide_languages_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`language_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `guide_languages_ibfk_3` FOREIGN KEY (`verified_by`) REFERENCES `regional_auditor` (`auditor_id`) ON DELETE SET NULL;

--
-- Constraints for table `guide_residency`
--
ALTER TABLE `guide_residency`
  ADD CONSTRAINT `guide_residency_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `guide` (`guide_id`) ON DELETE CASCADE;

--
-- Constraints for table `guide_shadowing`
--
ALTER TABLE `guide_shadowing`
  ADD CONSTRAINT `guide_shadowing_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `guide_shadowing_ibfk_2` FOREIGN KEY (`senior_guide_id`) REFERENCES `guide` (`guide_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `guide_shadowing_ibfk_3` FOREIGN KEY (`trainee_guide_id`) REFERENCES `guide` (`guide_id`) ON DELETE CASCADE;

--
-- Constraints for table `guide_wallet`
--
ALTER TABLE `guide_wallet`
  ADD CONSTRAINT `guide_wallet_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `guide` (`guide_id`) ON DELETE CASCADE;

--
-- Constraints for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD CONSTRAINT `itinerary_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `itinerary_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`language_id`) ON DELETE SET NULL;

--
-- Constraints for table `language_certifications`
--
ALTER TABLE `language_certifications`
  ADD CONSTRAINT `language_certifications_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `guide` (`guide_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `language_certifications_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`language_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `language_certifications_ibfk_3` FOREIGN KEY (`reviewed_by`) REFERENCES `regional_auditor` (`auditor_id`) ON DELETE SET NULL;

--
-- Constraints for table `location_seasons`
--
ALTER TABLE `location_seasons`
  ADD CONSTRAINT `location_seasons_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE CASCADE;

--
-- Constraints for table `regional_auditor`
--
ALTER TABLE `regional_auditor`
  ADD CONSTRAINT `regional_auditor_ibfk_1` FOREIGN KEY (`auditor_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `resource`
--
ALTER TABLE `resource`
  ADD CONSTRAINT `resource_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE SET NULL;

--
-- Constraints for table `route_stops`
--
ALTER TABLE `route_stops`
  ADD CONSTRAINT `route_stops_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `tour_routes` (`route_id`) ON DELETE CASCADE;

--
-- Constraints for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD CONSTRAINT `super_admin_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `guide` (`guide_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tour_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_certificate`
--
ALTER TABLE `tour_certificate`
  ADD CONSTRAINT `tour_certificate_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_impact_tag`
--
ALTER TABLE `tour_impact_tag`
  ADD CONSTRAINT `tour_impact_tag_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_routes`
--
ALTER TABLE `tour_routes`
  ADD CONSTRAINT `tour_routes_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_version`
--
ALTER TABLE `tour_version`
  ADD CONSTRAINT `tour_version_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`) ON DELETE CASCADE;

--
-- Constraints for table `traveler`
--
ALTER TABLE `traveler`
  ADD CONSTRAINT `traveler_ibfk_1` FOREIGN KEY (`traveler_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `withdrawal_requests`
--
ALTER TABLE `withdrawal_requests`
  ADD CONSTRAINT `withdrawal_requests_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `guide` (`guide_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
