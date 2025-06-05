-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2025 at 06:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_in_sri_lanka`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_form`
--

CREATE TABLE `booking_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `guests` int(11) DEFAULT NULL,
  `arrivals` date DEFAULT NULL,
  `leaving` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_form`
--

INSERT INTO `booking_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`, `created_at`) VALUES
(3, 'user', 'user@gmail.com', '2344', 'fdfdg', 'dfgdgh', 5, '2025-06-20', '2025-06-22', '2025-06-04 08:41:28'),
(4, 'admin', 'admin@gmail.com', '3435', 'fdfdg', 'bbg', 6, '2025-06-19', '2025-06-28', '2025-06-04 09:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`, `created_at`) VALUES
(2, 'user', 'user@gmail.com', 'good', '2025-06-04 10:37:13'),
(3, 'user', 'user@gmail.com', 'good', '2025-06-04 10:50:55'),
(4, 'asd', 'wow@gmail.com', 'wow', '2025-06-04 11:00:46'),
(5, 'asd', 'wow@gmail.com', 'wow', '2025-06-04 11:13:28'),
(6, 'asd', 'wow@gmail.com', 'wow', '2025-06-04 11:13:31'),
(10, 'qs', 'user@gmail.com', 'good', '2025-06-04 11:31:48'),
(11, 'qs', 'user@gmail.com', 'good', '2025-06-04 11:32:44'),
(12, 'qs', 'user@gmail.com', 'good', '2025-06-04 11:32:49'),
(13, 'dff', 'dff@gmail.com', 'fsgv', '2025-06-04 12:13:04'),
(15, 'sssss', 'user@gmail.com', 'good', '2025-06-04 12:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_image`
--

CREATE TABLE `gallery_image` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `description`, `price`, `duration`, `location`, `created_at`, `updated_at`) VALUES
(2, '', '', 0.00, '', '', '2025-06-03 08:21:08', '2025-06-03 08:21:08'),
(3, 'kegalle', 'asdjsbjvb', 240.00, '7', 'dfgdgh', '2025-06-03 08:21:08', '2025-06-03 08:21:08'),
(4, 'sdskf', 'asdjsbjvb', 240.00, '7', 'dfgdgh', '2025-06-03 08:21:41', '2025-06-03 08:21:41'),
(5, 'dfvsv', 'vdfv', 233.00, 'dsvd', 'dvf', '2025-06-03 08:48:42', '2025-06-03 08:48:42'),
(6, 'kegalle', 'sc', 123.00, '7', 'csd', '2025-06-03 08:49:54', '2025-06-03 08:49:54'),
(7, 'ffs', 'ffaf', 123.00, '6', 'efw', '2025-06-03 10:57:27', '2025-06-03 10:57:27'),
(8, 'ffs', 'ffaf', 566.00, '6', 'efw', '2025-06-03 11:01:25', '2025-06-03 11:01:25'),
(9, 'Test Package', 'Sample description', 100.00, '3 Days', 'Colombo', '2025-06-03 11:07:34', '2025-06-03 11:07:34'),
(10, 'fdf', 'dfd', 100.00, '5', 'bbg', '2025-06-03 16:31:44', '2025-06-03 16:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `package_images`
--

CREATE TABLE `package_images` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `role`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$Qn2NwG08c5gmNpboXMgWkuDJaFyW6ZcgmP.8lX.IqWyMOuG4dfsEe', 'user'),
(2, 'admin', 'admin@gmail.com', '$2y$10$k8u6DU4s6F6SQEa0b69VF.xO805I0N7cYMUyWiYib1YRiwwNPEurG', 'admin'),
(3, 'sithara', 'sithara@gmail.com', '$2y$10$ckKQk5EYC1nqyZjpbE2lfOMEVRDVFMx97G4nCq02kC3OzP7c9rggK', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_form`
--
ALTER TABLE `booking_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_image`
--
ALTER TABLE `gallery_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_images`
--
ALTER TABLE `package_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_form`
--
ALTER TABLE `booking_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package_images`
--
ALTER TABLE `package_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `package_images`
--
ALTER TABLE `package_images`
  ADD CONSTRAINT `package_images_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
