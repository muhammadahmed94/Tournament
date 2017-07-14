-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 04:18 PM
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
  `phone#1` varchar(250) DEFAULT NULL,
  `phone#2` varchar(250) DEFAULT NULL,
  `Organization Name` varchar(250) DEFAULT NULL,
  `Billing Address` varchar(250) DEFAULT NULL,
  `Website URL` varchar(250) DEFAULT NULL,
  `City` varchar(250) DEFAULT NULL,
  `State` varchar(250) DEFAULT NULL,
  `team_rep_email` varchar(50) DEFAULT NULL,
  `Zone` varchar(250) DEFAULT NULL,
  `Country` varchar(250) DEFAULT NULL,
  `Facebook` varchar(250) DEFAULT NULL,
  `Instagram` varchar(250) DEFAULT NULL,
  `Twitter` varchar(250) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `tournament_id`, `team_rep`, `phone#1`, `phone#2`, `Organization Name`, `Billing Address`, `Website URL`, `City`, `State`, `team_rep_email`, `Zone`, `Country`, `Facebook`, `Instagram`, `Twitter`, `user_id`) VALUES
(15, 'jhon', 10, 'jhon', '231', '124512', 'jhon', 'jhon', 'www.google.com', 'karachi', 'karchi', 'jhon@yahoo.com', '1231raea', 'pakistan', 'paksina gdajsks fkjh', 'nadfhahy2r89', '2LKALKDHALSFLKA', 32),
(17, 'street11', 10, 'jhon', '03332256193', '03332256194', 'jhon', 'jhon', 'www.google.com', 'karachi', 'paksitn', 'rao.noman786@outlook.com', 'malir', 'paksitan', 'www.facebook.com', 'www.instagram.com', 'www.twiter.com', 32),
(18, 'street11', 10, 'jhon', '03332256193', '03332256194', 'jhon', 'jhon', 'www.google.com', 'karachi', 'paksitn', 'rao.noman786@outlook.com', 'malir', 'paksitan', 'www.facebook.com', 'www.instagram.com', 'www.twiter.com', 33),
(21, 'jhon', 10, 'jhon', '231', '124512', 'jhon', 'jhon', 'www.google.com', 'karachi', 'karchi', 'jhon@yahoo.com', '1231raea', 'pakistan', 'paksina gdajsks fkjh', 'nadfhahy2r89', '2LKALKDHALSFLKA', 32),
(22, 'jhon', 10, 'jhon', '231', '124512', 'jhon', 'jhon', 'www.google.com', 'karachi', 'karchi', 'jhon@yahoo.com', '1231raea', 'pakistan', 'paksina gdajsks fkjh', 'nadfhahy2r89', '2LKALKDHALSFLKA', 32),
(23, 'jhon', 10, 'jhon', '231', '124512', 'jhon', 'jhon', 'www.google.com', 'karachi', 'karchi', 'jhon@yahoo.com', '1231raea', 'pakistan', 'paksina gdajsks fkjh', 'nadfhahy2r89', '2LKALKDHALSFLKA', 32),
(26, 'rao', 2, 'rao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31),
(28, 'rao', 2, 'rao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31),
(30, 'rao', 10, 'rao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31),
(33, 'jhon', 9, 'jhon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31);

-- --------------------------------------------------------

--
-- Table structure for table `team_registration`
--

CREATE TABLE `team_registration` (
  `teams_team_id` int(100) NOT NULL,
  `tournament_id` int(100) NOT NULL,
  `Deposit` varchar(250) NOT NULL,
  `Payment_status` varchar(250) NOT NULL,
  `Hotel_selector` varchar(250) NOT NULL,
  `Hotel_reservation` varchar(250) NOT NULL,
  `Certified_roster` varchar(250) NOT NULL,
  `Travel_permit` varchar(250) NOT NULL,
  `Program_book_roster` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_registration`
--

INSERT INTO `team_registration` (`teams_team_id`, `tournament_id`, `Deposit`, `Payment_status`, `Hotel_selector`, `Hotel_reservation`, `Certified_roster`, `Travel_permit`, `Program_book_roster`) VALUES
(26, 2, '2000$', '1', '1', '1', '1', '1', '1');

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
(2, 'CCM WORLD 3', '2017-07-05', NULL, '2017-07-05', 'All asian teams included', 'karachi'),
(9, 'CCM WORLD', '2017-07-26', 'CCM WORLD', '2017-08-26', 'CCM WORLD', 'CCM WORLD USA'),
(10, 'ICC', '2017-07-26', 'CCM WORLD 2', '2017-07-31', 'CCM WORLD 2', 'CCM WORLD 2');

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
(22, 'Rao', 'rao1@rao.com', '$2y$10$Vcf4jflPOnbkEiARusg0SeXJMEjm0SxY2T9FiTUOTJWjUJfV7pfOq', 'VV7ncgdoxT4wQZmVrwYza6dwRlpNlwYb9ndIdGsb1eWt7CE6ODeNMBIBtlnO', '2017-07-01 17:11:01', '2017-07-01 17:11:01', 'uploads/988835_902781583074594_1208426149315960087_n.jpg', '17826387167', '1'),
(24, 'abdullah', 'abdullah@abdullah.com', '$2y$10$R5mOqDb427oBjBKgWO.ZFOldlJAahuy0vayVTCBV0nz13YOyVi/dK', 'YLIncJvAlvrugtFoDkPVtNhXRJuEHtS4EP4au3Mheqn0EtLOGaJr9dEy80dr', '2017-07-01 18:52:32', '2017-07-01 18:52:32', 'abdullah', '033322', '2'),
(25, 'Muhammad Ahmed', 'ahmed@gmail.com', '$2y$10$mgxm9COBOtKKRZ2CW6GHWuQRWtghihMjoMbDyV7S7z1GFvi9Muxhm', 'Ft9XSZm5SsCmbWTh5IqUdy0GR7tuHJyo8h8MiyZFw6GndRZpLixOOY4dh7mz', '2017-07-02 14:40:12', '2017-07-02 14:40:12', 'uploads/10857987_918634924822593_5323139220083156903_n.jpg', '098765432', '1'),
(26, 'testy', 'team@hotmail.com1', '$2y$10$nPNy1vAhTPYJ4KjqHr3JbedKWSZPxit0YD3au7t.0VxIjMQ.bXWtW', '22J1QaXSLxcWWdIIbaQQI3AMwbFdJLzOGylKxcCt45MQBnskjyUiSekxc8aa', '2017-07-03 05:00:35', '2017-07-03 05:00:35', 'uploads/IMG-20151012-WA0005.jpg', '03332256193', '2'),
(27, 'tr', 't@t.com', '$2y$10$su0nF0RzSDZwrumCQv3NH.LUpcfNrqLFA1c2ztq62yk5BCBFa2TXi', '7taOPbZsQyejJ7hwou1AjKxwK4XVLRbQCCcVZrHFTzGR71dYwF3n1mE7xBax', '2017-07-03 06:37:32', '2017-07-03 06:37:32', 'tr', '23424', '2'),
(28, 'admin', 'admin@hotmail.com', '$2y$10$q9L/tieRZJ65qcDQm7PRke5c0dlOWM34CHQ9dQWUqwRaBnO9Uypgy', '5wB0RzhwiYTzWMlh0zvwRiocUoXBqUGataO09MC43CqFdNqrgsZDO9UYUJEK', '2017-07-06 10:26:05', '2017-07-06 10:26:05', 'uploads/13349090_1018877974834541_41359803_n.jpg', '03332256193', '1'),
(29, 'team', 'team1@hotmail.com', '$2y$10$jfDyZgmjYLMwymZdonKcHufcI5xVO8atNkmodc09zb4uZRy9ybWpu', 'XpUtMAZGinre29GAJm7SIdOMkhtGj1vyvfFMs45CqqBVEUnm98x3unSw1VBE', '2017-07-08 07:42:34', '2017-07-08 07:42:34', 'uploads/IMG-20151012-WA0002.jpg', '03332256193', '1'),
(30, 'directors', 'director@hotmail.com', '$2y$10$K3batIRz579hsFD9BStm/O7zy4Jt.fdilYk.2uJSy52wPK.aYNfx.', 'ExpoyAWaolrVUOigMmsJUzse90PBKR3yp8nLazTj08pUmEAJM32mIJbDyoCG', '2017-07-08 13:58:37', '2017-07-08 13:58:37', 'director', '03332256193', '3'),
(31, 'team', 'rao@hotmail.com', '$2y$10$noe5MeZJISkimUw7QvCkVuKCAtDuLQEj0kpYhcLIJ.2DfBwzclxKG', 'N1AO5zyYt95K7k48NZyotV1R3efhfKG66gVIjU6x5HOk2nvErz8yZ8t08aeV', '2017-07-11 13:50:29', '2017-07-11 13:50:29', 'team', '21414', '2'),
(32, 'test', 'test@team.com', '$2y$10$qJIoBHsADVJ5IWBKH4vSSubEWTbU6qTYVzbxqfsQskPMRW1xEhRvm', 'HTfzD92lxyCwafIzYaEj0GUSTYlRE3sfbmOFqAKh3JgmfvMp6Ju2mnXrJK6y', '2017-07-12 10:40:43', '2017-07-12 10:40:43', 'test', '123', '2');

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
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `tournament_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tournament_teams`
--
ALTER TABLE `tournament_teams`
  MODIFY `tournament_team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
