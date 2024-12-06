-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 01:26 PM
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
-- Database: `refugees_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE `bank_account` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(30) NOT NULL,
  `details` text NOT NULL,
  `head_of_family` varchar(255) NOT NULL,
  `wife` varchar(255) DEFAULT NULL,
  `children` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `account_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `head_of_family` varchar(255) NOT NULL,
  `wife` varchar(255) DEFAULT NULL,
  `children` text DEFAULT NULL,
  `business` varchar(255) NOT NULL,
  `clinic_other` varchar(255) DEFAULT NULL,
  `labor` varchar(255) DEFAULT NULL,
  `shop` varchar(255) DEFAULT NULL,
  `since_when` date NOT NULL,
  `total_monthly_income` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE `camps` (
  `id` int(11) NOT NULL,
  `district_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`id`, `district_id`, `name`, `address`) VALUES
(1, 2, 'Hassan', 'C ASC ASH CHASHC ');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `date_of_birth` date NOT NULL,
  `education` varchar(100) NOT NULL,
  `educational_institution_year` varchar(150) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `disability` varchar(100) DEFAULT NULL,
  `refugee_number` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `name`, `date_of_birth`, `education`, `educational_institution_year`, `occupation`, `disability`, `refugee_number`, `created_at`, `updated_at`) VALUES
(2, 'Ethan Welch', '0000-00-00', 'Dolore eum odio dicta praesentium eu possimus qui sint temporibus occaecat deserunt', '2017', 'Quis vel natus qui nulla', 'Quis exercitationem tenetur recusandae Vel enim sunt nihil rerum mollit nisi commodi nostrud laboru', '288', '2024-11-29 09:41:18', '2024-11-29 09:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `children_kashmir_education`
--

CREATE TABLE `children_kashmir_education` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `current_information` text NOT NULL,
  `job_or_college` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `children_spouse`
--

CREATE TABLE `children_spouse` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `husband_wife_name` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `date_of_nikah` date DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `institution_year` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `local_or_migrant` varchar(50) DEFAULT NULL,
  `kids_name_age` text DEFAULT NULL,
  `disability` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'scvasc', 122, '2024-11-05 10:31:37', '2024-11-05 10:31:37'),
(2, 'asvcgvasgc', 122, '2024-11-05 10:40:06', '2024-11-05 10:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `economy`
--

CREATE TABLE `economy` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(30) NOT NULL,
  `monthly_income` decimal(10,2) NOT NULL,
  `subsistence_allowance` decimal(10,2) DEFAULT NULL,
  `da` decimal(10,2) DEFAULT NULL,
  `requested_financial_assistance` decimal(10,2) DEFAULT NULL,
  `total_monthly_income` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foreign_travel`
--

CREATE TABLE `foreign_travel` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(30) NOT NULL,
  `details` text NOT NULL,
  `personal_private` varchar(255) NOT NULL,
  `wife` varchar(255) DEFAULT NULL,
  `children` varchar(255) DEFAULT NULL,
  `passport_number` varchar(50) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `purpose_of_travel` varchar(255) NOT NULL,
  `date_of_departure` date NOT NULL,
  `date_of_return` date DEFAULT NULL,
  `occupation_abroad` varchar(255) DEFAULT NULL,
  `income` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `govt_job`
--

CREATE TABLE `govt_job` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `head_of_family` varchar(255) NOT NULL,
  `wife` varchar(255) DEFAULT NULL,
  `children` text DEFAULT NULL,
  `department` varchar(255) NOT NULL,
  `date_of_employment` date NOT NULL,
  `designation_position` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `salary` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iijok_guest`
--

CREATE TABLE `iijok_guest` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(30) NOT NULL,
  `details` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `relation` enum('guest','relative','visit') NOT NULL,
  `date_of_arrival` date NOT NULL,
  `date_of_return` date DEFAULT NULL,
  `purpose_of_arrival` varchar(255) NOT NULL,
  `date_of_departure` date DEFAULT NULL,
  `purpose_of_departure` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inlaw`
--

CREATE TABLE `inlaw` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(50) NOT NULL,
  `relation` enum('father-in-law','mother-in-law') NOT NULL,
  `name` varchar(255) NOT NULL,
  `alive_deceased` enum('Alive','Deceased') NOT NULL,
  `cnic` varchar(15) DEFAULT NULL,
  `current_address_or_burial` text DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1730793851),
('m241105_102644_create_district_table', 1730802546),
('m241105_102750_create_camps_table', 1730802546),
('m241105_103733_create_camps_table', 1730803119),
('m241105_112118_create_refugee_table', 1730806556),
('m241106_083620_create_users_table', 1730882591),
('m241118_104933_create_refugee_table', 1731928277),
('m241126_080948_create_spouse_table', 1732609378),
('m241126_122423_create_children_table', 1732626116),
('m241129_115428_create_children_spouse_table', 1732881788),
('m241129_120723_create_siblings_table', 1732882485),
('m241129_122212_create_inlaw_table', 1732883263),
('m241129_122838_create_scholarship_table', 1732884122),
('m241129_132305_create_children_kashmir_education_table', 1732887189),
('m241129_133413_create_govt_job_table', 1732887768),
('m241129_140503_create_private_job_table', 1732889331),
('m241129_140932_create_business_table', 1732889815),
('m241202_105147_create_economy_table', 1733136813),
('m241202_105517_create_economy_table', 1733136956),
('m241202_105735_create_rental_house_table', 1733137197),
('m241202_110133_create_property_table', 1733140791),
('m241202_120036_create_bank_account_table', 1733140981),
('m241202_120348_create_foreign_travel_table', 1733141482),
('m241202_121235_create_IIJOK_guest_table', 1733142022),
('m241202_122106_create_police_case_table', 1733142354);

-- --------------------------------------------------------

--
-- Table structure for table `police_case`
--

CREATE TABLE `police_case` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(30) NOT NULL,
  `details` text NOT NULL,
  `FIR_crime` varchar(255) NOT NULL,
  `bail` decimal(10,2) DEFAULT NULL,
  `date_of_arrest` date NOT NULL,
  `date_of_release` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `private_job`
--

CREATE TABLE `private_job` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `head_of_family` varchar(255) NOT NULL,
  `wife` varchar(255) DEFAULT NULL,
  `department` varchar(255) NOT NULL,
  `date_of_employment` date NOT NULL,
  `designation_position` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `salary` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(30) NOT NULL,
  `detail` text NOT NULL,
  `personal_private` varchar(255) NOT NULL,
  `wife` varchar(255) DEFAULT NULL,
  `children` varchar(255) DEFAULT NULL,
  `house` varchar(255) DEFAULT NULL,
  `plot` varchar(255) DEFAULT NULL,
  `jewellery` varchar(255) DEFAULT NULL,
  `car` varchar(255) DEFAULT NULL,
  `shop` varchar(255) DEFAULT NULL,
  `miscellaneous` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refugee`
--

CREATE TABLE `refugee` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `father_guardian` varchar(60) NOT NULL,
  `birth_date` date NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `refugee_number` varchar(30) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `education` varchar(100) DEFAULT NULL,
  `caste` varchar(50) DEFAULT NULL,
  `disability` varchar(100) DEFAULT NULL,
  `marital_status` varchar(20) DEFAULT NULL,
  `is_women_guardian` tinyint(1) DEFAULT NULL,
  `passport_no` varchar(20) DEFAULT NULL,
  `temporary_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `iiojk_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `refugee`
--

INSERT INTO `refugee` (`id`, `name`, `father_guardian`, `birth_date`, `cnic`, `refugee_number`, `phone_no`, `education`, `caste`, `disability`, `marital_status`, `is_women_guardian`, `passport_no`, `temporary_address`, `permanent_address`, `iiojk_address`) VALUES
(24, 'Melanie Bennett', 'Magni adipisci perspiciatis sunt quis cum qui quidem ipsa ', '1999-01-13', 'Sed laborum Archite', '288', '1212131231', 'Inventore laudantium natus magni sequi modi ex', 'Elit aut exercitation voluptatem fuga Asperiore', 'Amet et Nam sed maxime in aspernatur vel', 'Dignissimos velit l', NULL, 'Alias odit aut facer', 'Dolore sint incidunt saepe vel magna est nesciunt deserunt architecto ut reiciendis ratione enim', 'Ad in molestias omnis ab neque molestias omnis in magnam veniam labore eum rem est', 'Omnis est eos sed ex accusantium voluptates occaecat voluptatem dolorem tenetur quisquam minima tenetur enim ut sequi ipsum expedita'),
(25, 'Hilel Gay', 'Nihil temporibus qui aliquip sed ex consectetur cumque ut qu', '1996-05-06', 'Ut laborum Sit enim', '59', '1211212', 'Veritatis aliqua Mollitia vel in cum saepe ex magni nemo optio quia omnis iste cum sed magnam comm', 'Commodo id do ut aliqua Quis temporibus dignissi', 'Placeat praesentium nulla ducimus natus', 'Fugit obcaecati non', 0, 'Tempore et distinct', 'Ex incidunt aliquam quia sed cupiditate quas qui commodi enim aut aliquam occaecat est libero ut ipsam elit in anim', 'Dignissimos sapiente cupiditate consequatur error sed distinctio Quo sed saepe dolore', 'Aliquip commodo rerum pariatur Consequatur Cumque consequuntur aut');

-- --------------------------------------------------------

--
-- Table structure for table `rental_house`
--

CREATE TABLE `rental_house` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(30) NOT NULL,
  `house_owner_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `monthly_rent` decimal(10,2) NOT NULL,
  `phone_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `head_of_family` varchar(255) NOT NULL,
  `children_name` varchar(255) NOT NULL,
  `scholarship` varchar(255) NOT NULL,
  `p_type` varchar(255) NOT NULL,
  `self` varchar(255) DEFAULT NULL,
  `institution` varchar(255) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siblings`
--

CREATE TABLE `siblings` (
  `id` int(11) NOT NULL,
  `refugee_number` varchar(50) NOT NULL,
  `relation` enum('father','mother') NOT NULL,
  `name` varchar(255) NOT NULL,
  `alive_deceased` enum('Alive','Deceased') NOT NULL,
  `cnic` varchar(15) DEFAULT NULL,
  `current_address_or_burial` text DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spouse`
--

CREATE TABLE `spouse` (
  `id` int(11) NOT NULL,
  `wife_first_name` varchar(60) NOT NULL,
  `wife_second_name` varchar(60) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `refugee_number` varchar(30) NOT NULL,
  `date_of_nikah` date NOT NULL,
  `local_or_migrant` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spouse`
--

INSERT INTO `spouse` (`id`, `wife_first_name`, `wife_second_name`, `cnic`, `refugee_number`, `date_of_nikah`, `local_or_migrant`, `created_at`, `updated_at`) VALUES
(15, 'Lester', 'Cochran', 'Eum in voluptates ul', '288', '0000-00-00', 'Velit et deserunt qu', '2024-11-29 09:41:12', '2024-11-29 09:41:12'),
(16, 'Orson', 'Becker', 'Iusto modi odio fugi', '59', '0000-00-00', 'Quaerat voluptatem ', '2024-11-29 11:29:55', '2024-11-29 11:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('super','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `phone`, `password`, `user_type`, `created_at`, `updated_at`) VALUES
(2, 'Hassan', 'Hassan', 'Hassan786@gmail.com', '0333123456', 'e9149d57a451475d65638ef3b170c33e', 'super', '2024-11-06 12:15:25', '2024-11-06 12:15:25'),
(4, 'sheharyar', 'shari', 'shari123@gmail.com', '0333123456', '12345678', 'user', '2024-11-14 12:28:28', '2024-11-14 12:28:28'),
(5, 'Sohail Maroof', 'sohail', 'sohail@gmail.com', '1234555', 'Pass@1234', 'user', '2024-11-14 12:50:44', '2024-11-14 12:50:44'),
(6, 'ali sheraz', 'ali', 'ali123@gmail.com', '018123123123', '12345678', 'super', '2024-11-15 13:24:24', '2024-11-15 13:24:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refugee_number` (`refugee_number`),
  ADD UNIQUE KEY `account_number` (`account_number`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-business-refugee_number` (`refugee_number`);

--
-- Indexes for table `camps`
--
ALTER TABLE `camps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-camps-district_id` (`district_id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-children-refugee_number` (`refugee_number`);

--
-- Indexes for table `children_kashmir_education`
--
ALTER TABLE `children_kashmir_education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-children_kashmir_education-refugee_number` (`refugee_number`);

--
-- Indexes for table `children_spouse`
--
ALTER TABLE `children_spouse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-children_spouse-refugee_number` (`refugee_number`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `economy`
--
ALTER TABLE `economy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refugee_number` (`refugee_number`);

--
-- Indexes for table `foreign_travel`
--
ALTER TABLE `foreign_travel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refugee_number` (`refugee_number`),
  ADD UNIQUE KEY `passport_number` (`passport_number`);

--
-- Indexes for table `govt_job`
--
ALTER TABLE `govt_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-govt_job-refugee_number` (`refugee_number`);

--
-- Indexes for table `iijok_guest`
--
ALTER TABLE `iijok_guest`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refugee_number` (`refugee_number`);

--
-- Indexes for table `inlaw`
--
ALTER TABLE `inlaw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-inlaw-refugee_number` (`refugee_number`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `police_case`
--
ALTER TABLE `police_case`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refugee_number` (`refugee_number`);

--
-- Indexes for table `private_job`
--
ALTER TABLE `private_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-private_job-refugee_number` (`refugee_number`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refugee_number` (`refugee_number`);

--
-- Indexes for table `refugee`
--
ALTER TABLE `refugee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnic` (`cnic`),
  ADD UNIQUE KEY `refugee_number` (`refugee_number`),
  ADD UNIQUE KEY `passport_no` (`passport_no`);

--
-- Indexes for table `rental_house`
--
ALTER TABLE `rental_house`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refugee_number` (`refugee_number`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-scholarship-refugee_number` (`refugee_number`);

--
-- Indexes for table `siblings`
--
ALTER TABLE `siblings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-siblings-refugee_number` (`refugee_number`);

--
-- Indexes for table `spouse`
--
ALTER TABLE `spouse`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnic` (`cnic`),
  ADD KEY `fk-spouse-refugee_number` (`refugee_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_account`
--
ALTER TABLE `bank_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `camps`
--
ALTER TABLE `camps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `children_kashmir_education`
--
ALTER TABLE `children_kashmir_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `children_spouse`
--
ALTER TABLE `children_spouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `economy`
--
ALTER TABLE `economy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foreign_travel`
--
ALTER TABLE `foreign_travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `govt_job`
--
ALTER TABLE `govt_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iijok_guest`
--
ALTER TABLE `iijok_guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inlaw`
--
ALTER TABLE `inlaw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `police_case`
--
ALTER TABLE `police_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `private_job`
--
ALTER TABLE `private_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `refugee`
--
ALTER TABLE `refugee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rental_house`
--
ALTER TABLE `rental_house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siblings`
--
ALTER TABLE `siblings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spouse`
--
ALTER TABLE `spouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD CONSTRAINT `fk-bank_account-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `business`
--
ALTER TABLE `business`
  ADD CONSTRAINT `fk-business-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `camps`
--
ALTER TABLE `camps`
  ADD CONSTRAINT `fk-camps-district_id` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `children`
--
ALTER TABLE `children`
  ADD CONSTRAINT `fk-children-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `children_kashmir_education`
--
ALTER TABLE `children_kashmir_education`
  ADD CONSTRAINT `fk-children_kashmir_education-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `children_spouse`
--
ALTER TABLE `children_spouse`
  ADD CONSTRAINT `fk-children_spouse-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `economy`
--
ALTER TABLE `economy`
  ADD CONSTRAINT `fk-economy-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foreign_travel`
--
ALTER TABLE `foreign_travel`
  ADD CONSTRAINT `fk-foreign_travel-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `govt_job`
--
ALTER TABLE `govt_job`
  ADD CONSTRAINT `fk-govt_job-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `iijok_guest`
--
ALTER TABLE `iijok_guest`
  ADD CONSTRAINT `fk-IIJOK_guest-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inlaw`
--
ALTER TABLE `inlaw`
  ADD CONSTRAINT `fk-inlaw-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `police_case`
--
ALTER TABLE `police_case`
  ADD CONSTRAINT `fk-police_case-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `private_job`
--
ALTER TABLE `private_job`
  ADD CONSTRAINT `fk-private_job-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `fk-property-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rental_house`
--
ALTER TABLE `rental_house`
  ADD CONSTRAINT `fk-rental_house-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD CONSTRAINT `fk-scholarship-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siblings`
--
ALTER TABLE `siblings`
  ADD CONSTRAINT `fk-siblings-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spouse`
--
ALTER TABLE `spouse`
  ADD CONSTRAINT `fk-spouse-refugee_number` FOREIGN KEY (`refugee_number`) REFERENCES `refugee` (`refugee_number`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
