-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 10:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowledgefx`
--

-- --------------------------------------------------------

--
-- Table structure for table `kfx_community_trading_`
--

DROP TABLE IF EXISTS `kfx_community_trading_`;
CREATE TABLE `kfx_community_trading_` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kfx_live_tech_analysis`
--

DROP TABLE IF EXISTS `kfx_live_tech_analysis`;
CREATE TABLE `kfx_live_tech_analysis` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `currecy` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kfx_user`
--

DROP TABLE IF EXISTS `kfx_user`;
CREATE TABLE `kfx_user` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kfx_user`
--

INSERT INTO `kfx_user` (`id`, `name`, `email`, `password`, `confirm_password`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Admin', 'admin@knowledgetradesfx.com', '123456', '123456', 0, '2023-06-07 20:30:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kfx_weekly_mapping`
--

DROP TABLE IF EXISTS `kfx_weekly_mapping`;
CREATE TABLE `kfx_weekly_mapping` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `currecy` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kfx_community_trading_`
--
ALTER TABLE `kfx_community_trading_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kfx_live_tech_analysis`
--
ALTER TABLE `kfx_live_tech_analysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kfx_user`
--
ALTER TABLE `kfx_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kfx_weekly_mapping`
--
ALTER TABLE `kfx_weekly_mapping`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kfx_community_trading_`
--
ALTER TABLE `kfx_community_trading_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kfx_live_tech_analysis`
--
ALTER TABLE `kfx_live_tech_analysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kfx_user`
--
ALTER TABLE `kfx_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kfx_weekly_mapping`
--
ALTER TABLE `kfx_weekly_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
