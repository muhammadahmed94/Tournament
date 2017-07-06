-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 10:26 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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
-- Table structure for table `organisation_info`
--

CREATE TABLE `organisation_info` (
  `user_id` int(10) NOT NULL,
  `OrganizationName` varchar(250) NOT NULL,
  `BillingAddress` varchar(250) NOT NULL,
  `WebsiteURL` varchar(250) NOT NULL,
  `City` varchar(25) NOT NULL,
  `State` varchar(25) NOT NULL,
  `Zone` varchar(25) NOT NULL,
  `Country` varchar(25) NOT NULL,
  `Facebbok` varchar(250) NOT NULL,
  `Instagram` varchar(250) NOT NULL,
  `Twitter` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_info`
--

INSERT INTO `organisation_info` (`user_id`, `OrganizationName`, `BillingAddress`, `WebsiteURL`, `City`, `State`, `Zone`, `Country`, `Facebbok`, `Instagram`, `Twitter`) VALUES
(27, 'test', 'teatteatteatd23442', 'www.google.com', 'karachi', 'sindh', 'malir', 'pakistan', 'www.facebook.com', 'www.instagram.com', 'www.twiter.com');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `tournament_id` int(25) NOT NULL,
  `team_rep` varchar(250) NOT NULL,
  `team_rep_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `tournament_id`, `team_rep`, `team_rep_email`) VALUES
(1, 'Pakistan', 1, 'Ahmed', 'rao.noman786@outlook.com'),
(2, 'India', 1, 'Ali', 'rao.noman786@outlook.com'),
(3, 'Bangladesh', 2, 'Yosuf', 'rao.noman786@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `tournament_id` int(11) NOT NULL,
  `tournament_name` varchar(255) NOT NULL,
  `tournament_date` date DEFAULT '2017-07-05',
  `tournament_longdescription` varchar(250) DEFAULT NULL,
  `tournament_dateend` date DEFAULT NULL,
  `tournament_description` varchar(250) DEFAULT NULL,
  `tournament_location` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`tournament_id`, `tournament_name`, `tournament_date`, `tournament_longdescription`, `tournament_dateend`, `tournament_description`, `tournament_location`) VALUES
(1, 'World Cup 121', '2017-07-05', 'chgdhgdhgdhgd', '2017-05-05', 'affdafasgs', 'karachi'),
(2, 'asia cup', '2017-07-05', 'asia cup ', '2017-07-05', 'All asian teams included', 'Dubai');

-- --------------------------------------------------------

--
-- Table structure for table `tournament_teams`
--

CREATE TABLE `tournament_teams` (
  `tournament_team_id` int(11) NOT NULL,
  `tournament_ids` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament_teams`
--

INSERT INTO `tournament_teams` (`tournament_team_id`, `tournament_ids`) VALUES
(1, '1'),
(2, '1'),
(3, '2');

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
(22, 'Rao', 'rao1@rao.com', '$2y$10$Vcf4jflPOnbkEiARusg0SeXJMEjm0SxY2T9FiTUOTJWjUJfV7pfOq', 'e86z6GvbLylwRRDftYqSXjmkGIIq2WfreUK7JiwcN8J4b479g1dYdyKMThP1', '2017-07-01 17:11:01', '2017-07-01 17:11:01', 'uploads/988835_902781583074594_1208426149315960087_n.jpg', '17826387167', '1'),
(23, 'admin', 'admin@admin.com', '$2y$10$uzWkVG75fTlw3Fj9CFsdsew/uxyQOyvAewPGBo9eG./xhInJPjun.', 'ZzM6WOJtxBlVZ3s60C2h4E5Zm3kog98qmmBiHzKRu9czftLMfhlhGmbVNosl', '2017-07-01 17:48:43', '2017-07-01 17:48:43', 'admin', '0998765678', '1'),
(24, 'abdullah', 'abdullah@abdullah.com', '$2y$10$R5mOqDb427oBjBKgWO.ZFOldlJAahuy0vayVTCBV0nz13YOyVi/dK', 'YLIncJvAlvrugtFoDkPVtNhXRJuEHtS4EP4au3Mheqn0EtLOGaJr9dEy80dr', '2017-07-01 18:52:32', '2017-07-01 18:52:32', 'abdullah', '033322', '2'),
(25, 'Muhammad Ahmed', 'ahmed@gmail.com', '$2y$10$mgxm9COBOtKKRZ2CW6GHWuQRWtghihMjoMbDyV7S7z1GFvi9Muxhm', 'Ft9XSZm5SsCmbWTh5IqUdy0GR7tuHJyo8h8MiyZFw6GndRZpLixOOY4dh7mz', '2017-07-02 14:40:12', '2017-07-02 14:40:12', 'uploads/10857987_918634924822593_5323139220083156903_n.jpg', '098765432', '1'),
(26, 'test', 'team@team.com', '$2y$10$nPNy1vAhTPYJ4KjqHr3JbedKWSZPxit0YD3au7t.0VxIjMQ.bXWtW', 'oFeTpt3J0LMdMhaCoD12o1geODwxhzFEmBYSfNstHBoY9c7QxzZWAcucwt2x', '2017-07-03 05:00:35', '2017-07-03 05:00:35', 'test', '03332256193', '2'),
(27, 'tr', 't@t.com', '$2y$10$su0nF0RzSDZwrumCQv3NH.LUpcfNrqLFA1c2ztq62yk5BCBFa2TXi', 'NGoUivvn0GA4isjhLVhrMOG2iSdjWnIZl17l9ASY0oehrKPSl21VanUI7LZ2', '2017-07-03 06:37:32', '2017-07-03 06:37:32', 'tr', '23424', '2');

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
  ADD PRIMARY KEY (`tournament_team_id`);

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
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `tournament_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tournament_teams`
--
ALTER TABLE `tournament_teams`
  MODIFY `tournament_team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
