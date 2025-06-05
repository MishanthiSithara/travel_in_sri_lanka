-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2025 at 11:44 AM
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
  `pakage_id` int(255) DEFAULT NULL,
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

INSERT INTO `booking_form` (`id`, `pakage_id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`, `created_at`) VALUES
(4, NULL, 'admin', 'admin@gmail.com', '3435', 'fdfdg', 'bbg', 6, '2025-06-19', '2025-06-28', '2025-06-04 09:05:50'),
(6, NULL, 'Kessie ', 'huxu@mailinator.com', '85', 'Autem ipsa unde rer', 'Qui maiores magni an', 32, '1979-01-16', '1970-03-05', '2025-06-05 03:41:56'),
(8, NULL, 'August Stein', 'jemygiq@mailinator.com', '77', 'Consequat Ut irure ', 'Corporis voluptates ', 74, '2005-02-16', '1997-11-21', '2025-06-05 04:55:31'),
(9, NULL, 'Alec Cash', 'cujikec@mailinator.com', '72', 'Et quo fuga Volupta', 'Aliquid elit volupt', 26, '1981-08-16', '1996-06-16', '2025-06-05 04:56:35'),
(10, NULL, 'Reese Kirkland', 'pakyf@mailinator.com', '57', 'Velit dolor alias oc', 'Consequat Incididun', 66, '1996-12-13', '2022-05-05', '2025-06-05 05:06:11'),
(11, 0, 'Lucy Poole', 'wyrodib@mailinator.com', '9', 'Nobis maiores quis c', 'Quis culpa et eos a', 53, '1985-06-28', '2011-01-05', '2025-06-05 05:08:51'),
(12, 0, 'Joel Black', 'vagalusyh@mailinator.com', '4', 'Aut pariatur Except', 'Impedit fugiat fug', 63, '1995-08-03', '1988-12-26', '2025-06-05 05:09:18'),
(13, 0, 'Cassady Richmond', 'ruve@mailinator.com', '80', 'Similique accusantiu', 'Ex explicabo Et dol', 69, '1987-03-26', '2023-03-05', '2025-06-05 05:10:13'),
(14, 0, 'Vernon Hayden', 'cuvin@mailinator.com', '96', 'Accusamus nostrud en', 'Harum assumenda aute', 83, '2010-01-27', '1984-02-16', '2025-06-05 05:10:54'),
(15, 16, 'Todd Copeland', 'tikiwa@mailinator.com', '76', 'Commodo sit qui non ', 'Itaque sit maiores ', 96, '1997-12-18', '2017-07-03', '2025-06-05 05:19:40'),
(16, 17, 'Jacob Cole', 'zaregocak@mailinator.com', '17', 'Ipsam pariatur Dese', 'Soluta autem dolorum', 94, '1987-04-04', '2003-11-06', '2025-06-05 05:21:57');

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

--
-- Dumping data for table `gallery_image`
--

INSERT INTO `gallery_image` (`id`, `image_path`, `uploaded_at`) VALUES
(4, 'uploads/gallery/gallery_1749114166.jpg', '2025-06-05 05:32:46'),
(5, 'uploads/gallery/gallery_1749114372.jpeg', '2025-06-05 05:36:12'),
(9, 'uploads/gallery/gallery_1749115246.jpeg', '2025-06-05 05:50:46'),
(10, 'uploads/gallery/gallery_1749115262.jpg', '2025-06-05 05:51:02'),
(11, 'uploads/gallery/gallery_1749115280.jpeg', '2025-06-05 05:51:20'),
(12, 'uploads/gallery/gallery_1749115300.jpeg', '2025-06-05 05:51:40'),
(13, 'uploads/gallery/gallery_1749115324.jpg', '2025-06-05 05:52:04'),
(14, 'uploads/gallery/gallery_1749115826.jpg', '2025-06-05 06:00:26'),
(15, 'uploads/gallery/gallery_1749115937.jpg', '2025-06-05 06:02:17');

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
  `image_path` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `description`, `price`, `duration`, `location`, `image_path`, `created_at`, `updated_at`) VALUES
(15, 'Non sint saepe moles', 'Nisi sunt unde quam ', 318.00, 'Sapiente iure quos e', 'Commodi sapiente et ', 'ambuluwawa2.jpg', '2025-06-05 13:25:58', '2025-06-05 13:25:58'),
(16, 'Dicta quia rem aut e', 'Omnis magna commodi ', 847.00, 'Cumque ad laborum di', 'Enim impedit maiore', 'batticlo dutch fort.jpg', '2025-06-05 13:30:47', '2025-06-05 13:30:47'),
(17, 'Elit labore minima ', 'Possimus est delect', 490.00, 'Mollitia sint nostr', 'Eos reprehenderit ', 'batticlo dutch fort.jpg', '2025-06-05 13:31:49', '2025-06-05 13:31:49');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
