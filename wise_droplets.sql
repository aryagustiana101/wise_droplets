-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 03:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wise_droplets`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_water_pump`
--

CREATE TABLE `main_water_pump` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_water_pump`
--

INSERT INTO `main_water_pump` (`id`, `value`, `created_at`) VALUES
(1, 'ON', '2021-06-10 13:11:21'),
(2, 'ON', '2021-06-10 13:11:26'),
(3, 'ON', '2021-06-10 13:11:31'),
(4, 'ON', '2021-06-10 13:11:36'),
(5, 'ON', '2021-06-10 13:11:41'),
(6, 'ON', '2021-06-10 13:11:46'),
(7, 'ON', '2021-06-10 13:11:51'),
(8, 'ON', '2021-06-10 13:11:56'),
(9, 'ON', '2021-06-10 13:12:01'),
(10, 'ON', '2021-06-10 13:12:06'),
(11, 'ON', '2021-06-10 13:12:11'),
(12, 'ON', '2021-06-10 13:12:30'),
(13, 'ON', '2021-06-10 13:21:55'),
(14, 'ON', '2021-06-10 13:25:10'),
(15, 'ON', '2021-06-10 13:25:51'),
(16, 'ON', '2021-06-10 13:32:27'),
(17, 'ON', '2021-06-10 13:33:22'),
(18, 'ON', '2021-06-10 13:33:27'),
(19, 'ON', '2021-06-10 13:33:30'),
(20, 'ON', '2021-06-10 13:35:05'),
(21, 'ON', '2021-06-10 13:39:56'),
(22, 'ON', '2021-06-10 13:41:55'),
(23, 'ON', '2021-06-10 13:45:09'),
(24, 'ON', '2021-06-10 13:52:15'),
(25, 'ON', '2021-06-10 13:54:19'),
(26, 'ON', '2021-06-10 13:55:17'),
(27, 'ON', '2021-06-10 13:56:33'),
(28, 'ON', '2021-06-10 13:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `servo_feeder`
--

CREATE TABLE `servo_feeder` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servo_feeder`
--

INSERT INTO `servo_feeder` (`id`, `value`, `created_at`) VALUES
(1, 'ON', '2021-06-10 12:59:35'),
(2, 'ON', '2021-06-10 13:07:27'),
(3, 'ON', '2021-06-10 13:12:44'),
(4, 'ON', '2021-06-10 13:20:26'),
(5, 'ON', '2021-06-10 13:21:36'),
(6, 'ON', '2021-06-10 13:25:20'),
(7, 'ON', '2021-06-10 13:26:01'),
(8, 'ON', '2021-06-10 13:27:59'),
(9, 'ON', '2021-06-10 13:28:52'),
(10, 'ON', '2021-06-10 13:49:51'),
(11, 'ON', '2021-06-10 13:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `soil_moisture_sensor`
--

CREATE TABLE `soil_moisture_sensor` (
  `id` int(11) NOT NULL,
  `value_sensor` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soil_moisture_sensor`
--

INSERT INTO `soil_moisture_sensor` (`id`, `value_sensor`, `created_at`) VALUES
(1, 'hello world', '2021-06-10 15:28:21'),
(2, '185', '2021-06-10 15:28:37'),
(3, '375', '2021-06-10 15:41:06'),
(4, '345', '2021-06-10 15:41:52'),
(5, '345', '2021-06-10 15:41:54'),
(6, '756', '2021-06-20 23:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_unhash` varchar(255) NOT NULL,
  `password_default` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1,
  `phone_number` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'default-avatar.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `password_unhash`, `password_default`, `role`, `active`, `phone_number`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Root', 'root@email.com', '$2y$10$8cz2l1qgvVOQqLB35iHn3Om0dFFVSj3CdDhdWg5vHCexc4IjR3vB6', '123', '123', 'Root', 1, '081320199090', 'default-avatar.png', '2021-06-06 13:01:53', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_water_pump`
--
ALTER TABLE `main_water_pump`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servo_feeder`
--
ALTER TABLE `servo_feeder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_moisture_sensor`
--
ALTER TABLE `soil_moisture_sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_water_pump`
--
ALTER TABLE `main_water_pump`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `servo_feeder`
--
ALTER TABLE `servo_feeder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `soil_moisture_sensor`
--
ALTER TABLE `soil_moisture_sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
