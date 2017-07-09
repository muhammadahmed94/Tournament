-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2017 at 02:58 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tournament`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_rep` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `team_rep`) VALUES
(1, 'ahmed', '');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `tournament_id` int(11) NOT NULL,
  `tournament_name` varchar(255) NOT NULL,
  `tournament_date` date DEFAULT '2017-07-05',
  `tournament_location` varchar(25) DEFAULT NULL,
  `tournament_opendate` date DEFAULT NULL,
  `tournament_enddate` date DEFAULT NULL,
  `tournament_longdescription` varchar(1000) DEFAULT NULL,
  `tournament_description` varchar(233) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`tournament_id`, `tournament_name`, `tournament_date`, `tournament_location`, `tournament_opendate`, `tournament_enddate`, `tournament_longdescription`, `tournament_description`) VALUES
(1, 'World Cup', '2017-07-06', NULL, '0000-00-00', '2017-07-22', NULL, NULL),
(23, 'Icc Champians', '2017-07-22', NULL, NULL, '1970-01-01', NULL, NULL),
(24, 'oops', '2017-07-12', 'asdfafasdf', NULL, '1970-01-01', NULL, 'oops');

-- --------------------------------------------------------

--
-- Table structure for table `tournament_teams`
--

CREATE TABLE `tournament_teams` (
  `id` int(11) NOT NULL,
  `tournament_team_id` varchar(122) NOT NULL,
  `tournament_id` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament_teams`
--

INSERT INTO `tournament_teams` (`id`, `tournament_team_id`, `tournament_id`) VALUES
(1, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagepath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobileno` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `imagepath`, `mobileno`, `user_role`) VALUES
(22, 'ahemd', 'rao1@rao.com', '$2y$10$Vcf4jflPOnbkEiARusg0SeXJMEjm0SxY2T9FiTUOTJWjUJfV7pfOq', 'qFL3VdYoZgGj8kbZ9lBBMJp8f1V7fxYStQf2sDcmavZzdMoXuaWtKVfzP0z1', '2017-07-01 17:11:01', '2017-07-01 17:11:01', 'ahemd', '17826387167', '2'),
(23, 'ahmed', 'admin@admin.com', '$2y$10$uzWkVG75fTlw3Fj9CFsdsew/uxyQOyvAewPGBo9eG./xhInJPjun.', 'ta9gCnZtdg9AuAkh5faRWW2JTsTDSlCzM01nuGGWGpKcAQPSXXE5eG5uOHF3', '2017-07-01 17:48:43', '2017-07-01 17:48:43', 'uploads/5d8923a7d8e7141f8da78d4fbd6c3c1e.jpg', '0998765678', '1'),
(24, 'abdullah', 'abdullah@abdullah.com', '$2y$10$R5mOqDb427oBjBKgWO.ZFOldlJAahuy0vayVTCBV0nz13YOyVi/dK', 'TMbXug2QBpfKQmrl9nwkN619ZELCztmQfN2lP6GbRlK1maX2F58zcsfmLyJc', '2017-07-01 18:52:32', '2017-07-01 18:52:32', 'abdullah', '033322', '2'),
(25, 'Muhammad Ahmed Ahmed', 'ahmed@gmail.com', '$2y$10$mgxm9COBOtKKRZ2CW6GHWuQRWtghihMjoMbDyV7S7z1GFvi9Muxhm', '2INMM8LWIQBqtzw9A234ZuhnAktraR8nrAWdLKpKi9YYU2f5UvIaOYox1uNu', '2017-07-02 14:40:12', '2017-07-02 14:40:12', 'uploads/5d8923a7d8e7141f8da78d4fbd6c3c1e.jpg', '098765432', '1'),
(26, 'Atif Taskeen', 'atif@gmail.com', '$2y$10$xQKz/GEL5IUU2jt1La4rZ.Fvs1QEDucv7W8nPPxIutbTz2Ww0Dr1.', NULL, '2017-07-02 20:44:12', '2017-07-02 20:44:12', 'Atif Taskeen', '09876543332', '1'),
(27, 'Ahmed', 'amaallick@folio3.com', '$2y$10$bTcGyl2eJba4RTw9szI.x.k6J7e.rOkaOeAIkmzYVp2p525SWCOAq', NULL, '2017-07-06 21:52:43', '2017-07-06 21:52:43', 'Ahmed', '098765432', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Team rep'),
(3, 'Director');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`tournament_id`);

--
-- Indexes for table `tournament_teams`
--
ALTER TABLE `tournament_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `tournament_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tournament_teams`
--
ALTER TABLE `tournament_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
