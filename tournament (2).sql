-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2017 at 04:53 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

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
  `tournament_id` varchar(250) NOT NULL,
  `team_name` varchar(255) DEFAULT NULL,
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
  `birth_year` varchar(250) DEFAULT NULL,
  `player_level` varchar(250) DEFAULT NULL,
  `head_coach_name` varchar(250) DEFAULT NULL,
  `head_coach_email` varchar(250) DEFAULT NULL,
  `head_coach_phone` varchar(250) DEFAULT NULL,
  `certified_roster` varchar(250) DEFAULT NULL,
  `travel_permit` varchar(250) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `tournament_id`, `team_name`, `team_rep`, `phone#1`, `phone#2`, `Organization Name`, `Billing Address`, `Website URL`, `City`, `State`, `team_rep_email`, `Zone`, `Country`, `Facebook`, `Instagram`, `Twitter`, `birth_year`, `player_level`, `head_coach_name`, `head_coach_email`, `head_coach_phone`, `certified_roster`, `travel_permit`, `user_id`) VALUES
(37, '89', 'saddas', 'adad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33);

-- --------------------------------------------------------

--
-- Table structure for table `team_players`
--

CREATE TABLE `team_players` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL,
  `team_id` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_players`
--

INSERT INTO `team_players` (`id`, `name`, `title`, `position`, `team_id`) VALUES
(1, 'giugjk', '1', 'khpoi[;p', '25'),
(2, 'fdsfsd', '1', 'sdfsdfs', '25'),
(3, 'fdsfsd', '2', 'sdfsdfs', '25'),
(4, 'giugjk', '1', 'khpoi[;p', '25'),
(5, 'fdsfsd', '1', 'sdfsdfs', '25'),
(6, 'fdsfsd', '2', 'sdfsdfs', '25'),
(7, 'asdasd', '1', 'asdasd', '25'),
(8, 'asdsad', '-', 'asdasd', '25'),
(9, 'asdsad', '1', 'asdasd', '25'),
(10, 'asdasd', '1', 'asdasd', '25'),
(11, 'dsfaf', '1', 'asdas', '25');

-- --------------------------------------------------------

--
-- Table structure for table `team_registration`
--

CREATE TABLE `team_registration` (
  `reg_id` int(11) NOT NULL,
  `teams_team_id` int(100) NOT NULL,
  `tournament_id` int(100) NOT NULL,
  `Deposit` varchar(250) DEFAULT NULL,
  `Payment_status` varchar(250) DEFAULT NULL,
  `Hotel_selector` varchar(250) DEFAULT NULL,
  `Hotel_reservation` varchar(250) DEFAULT NULL,
  `Certified_roster` varchar(250) DEFAULT NULL,
  `Travel_permit` varchar(250) DEFAULT NULL,
  `Program_book_roster` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `user_id` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_registration`
--

INSERT INTO `team_registration` (`reg_id`, `teams_team_id`, `tournament_id`, `Deposit`, `Payment_status`, `Hotel_selector`, `Hotel_reservation`, `Certified_roster`, `Travel_permit`, `Program_book_roster`, `status`, `user_id`) VALUES
(1, 25, 89, '500', '', '', '', '', '', '', '1', '32'),
(2, 26, 89, '', '', '', '', '.env', '', '7.jpg', '', ''),
(3, 36, 90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 37, 89, NULL, NULL, NULL, NULL, 'b.htm', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team_representative`
--

CREATE TABLE `team_representative` (
  `team_rep_id` int(25) NOT NULL,
  `user_id` int(25) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `phone#1` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone#2` varchar(250) DEFAULT NULL,
  `organization_name` varchar(250) DEFAULT NULL,
  `billing_address` varchar(250) DEFAULT NULL,
  `website_url` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `zone` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `instagram` varchar(250) DEFAULT NULL,
  `twitter` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_representative`
--

INSERT INTO `team_representative` (`team_rep_id`, `user_id`, `name`, `phone#1`, `email`, `phone#2`, `organization_name`, `billing_address`, `website_url`, `city`, `state`, `zone`, `country`, `facebook`, `instagram`, `twitter`) VALUES
(16, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 32, 'qeqweq', '12312', 'mishalkhan73@hotmail.com', '1312321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 32, 'qeqweq', '12312', 'mishalkhan73@hotmail.com', '1312321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 32, 'qeqweq', '12312', 'mishalkhan73@hotmail.com', '1312321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 32, 'qeqweq', '12312', 'mishalkhan73@hotmail.com', '1312321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 32, 'qeqweq', '12312', 'mishalkhan73@hotmail.com', '1312321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 32, 'asdda', '343412341241', 'mishalkhan73@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 32, 'abkaskj', 'dfjhkjahfkjahskf', 'mishalkhan73@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 32, 'adas', 'a34', 'team@hotmail.com', 'das', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 32, 'adas', 'a34', 'team@hotmail.com', 'das', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `tournament_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date_start` date DEFAULT '2017-07-05',
  `description` varchar(250) DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `user_id` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`tournament_id`, `title`, `date_start`, `description`, `date_end`, `comment`, `location`, `user_id`) VALUES
(89, 'Chi Town Shuffle', '2017-07-25', 'Chi Town Shuffle', '2017-07-07', NULL, '2017-07-25', '28'),
(90, 'opp', '2017-07-30', 'sadasd', '2017-07-29', 'asdas', '2017-07-30', '28');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments_divisions`
--

CREATE TABLE `tournaments_divisions` (
  `division_title` varchar(250) DEFAULT NULL,
  `birth_year` varchar(250) DEFAULT NULL,
  `boys/girls` varchar(250) DEFAULT NULL,
  `limit_division` varchar(250) DEFAULT NULL,
  `level` varchar(250) DEFAULT NULL,
  `entry_fee` varchar(250) DEFAULT NULL,
  `early_bid` varchar(250) DEFAULT NULL,
  `mutli_team` varchar(250) DEFAULT NULL,
  `balance_due` varchar(250) DEFAULT NULL,
  `balance_team_disc` varchar(250) DEFAULT NULL,
  `tournament_id` varchar(250) NOT NULL,
  `division_id` int(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournaments_divisions`
--

INSERT INTO `tournaments_divisions` (`division_title`, `birth_year`, `boys/girls`, `limit_division`, `level`, `entry_fee`, `early_bid`, `mutli_team`, `balance_due`, `balance_team_disc`, `tournament_id`, `division_id`) VALUES
('abc', 'sdasda', 'asdasda', 'sdasd', 'sada', 's', 'adsasd', 'a', 'asdad', 'asd', '90', 11),
('xyz', 'sdasda', 'asdasda', 'sdasd', 'sada', 'a', 'adsasd', 'd', 'asdad', 'asd', '90', 10),
('2009 Ellite Boys AAA', '2009', 'boys', '15', 'mid', '2000', '200', '1', '800', '1,1500', '89', 7),
('2009 Ellite Gilrs AAA', '2010', 'girls', '15', 'mid', '4000', '200', '1', '800', '1,1500', '89', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tournament_teams`
--

CREATE TABLE `tournament_teams` (
  `team_id` int(11) NOT NULL,
  `tournament_id` varchar(255) NOT NULL,
  `division_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament_teams`
--

INSERT INTO `tournament_teams` (`team_id`, `tournament_id`, `division_id`) VALUES
(37, '89', 'Select');

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
(28, 'admin', 'admin@hotmail.com', '$2y$10$q9L/tieRZJ65qcDQm7PRke5c0dlOWM34CHQ9dQWUqwRaBnO9Uypgy', 'P2Lc7fSYXIDq1gGeB9zrKrmJzdyUPKaRtJO1CedZ0eyDdFEKxMVfnfevV60x', '2017-07-06 10:26:05', '2017-07-06 10:26:05', 'uploads/13349090_1018877974834541_41359803_n.jpg', '03332256193', '1'),
(29, 'team', 'team1@hotmail.com', '$2y$10$jfDyZgmjYLMwymZdonKcHufcI5xVO8atNkmodc09zb4uZRy9ybWpu', 'XpUtMAZGinre29GAJm7SIdOMkhtGj1vyvfFMs45CqqBVEUnm98x3unSw1VBE', '2017-07-08 07:42:34', '2017-07-08 07:42:34', 'uploads/IMG-20151012-WA0002.jpg', '03332256193', '1'),
(30, 'directors', 'director@hotmail.com', '$2y$10$K3batIRz579hsFD9BStm/O7zy4Jt.fdilYk.2uJSy52wPK.aYNfx.', 'ExpoyAWaolrVUOigMmsJUzse90PBKR3yp8nLazTj08pUmEAJM32mIJbDyoCG', '2017-07-08 13:58:37', '2017-07-08 13:58:37', 'director', '03332256193', '3'),
(31, 'team', 'rao@hotmail.com', '$2y$10$noe5MeZJISkimUw7QvCkVuKCAtDuLQEj0kpYhcLIJ.2DfBwzclxKG', 'N1AO5zyYt95K7k48NZyotV1R3efhfKG66gVIjU6x5HOk2nvErz8yZ8t08aeV', '2017-07-11 13:50:29', '2017-07-11 13:50:29', 'team', '21414', '2'),
(32, 'test', 'test@team.com', '$2y$10$qJIoBHsADVJ5IWBKH4vSSubEWTbU6qTYVzbxqfsQskPMRW1xEhRvm', 'h9NbGlgaYPousgkJLUkjUMyT7KaBLRwAy5VZjg4IOfSYQOE2N4Dfbnuo3jl7', '2017-07-12 10:40:43', '2017-07-12 10:40:43', 'uploads/IMG-20151012-WA0007.jpg', '123', '2'),
(33, 'team', 'team@hotmail.com', '$2y$10$IySrlQ9OPFXjXIi40UT6d.WL68b6jK69PxAOwJs1KlDBmUCeqCeU6', 'OnIODJjhlBlsY6D7QzsM3CD9lYtF4BjM5DNtlFnDoOWU7fIucJ41dPPbUfMm', '2017-07-18 06:56:09', '2017-07-18 06:56:09', 'team', '123', '2');

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
-- Indexes for table `team_players`
--
ALTER TABLE `team_players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_registration`
--
ALTER TABLE `team_registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `team_representative`
--
ALTER TABLE `team_representative`
  ADD PRIMARY KEY (`team_rep_id`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`tournament_id`);

--
-- Indexes for table `tournaments_divisions`
--
ALTER TABLE `tournaments_divisions`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `tournament_teams`
--
ALTER TABLE `tournament_teams`
  ADD PRIMARY KEY (`team_id`);

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
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `team_players`
--
ALTER TABLE `team_players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `team_registration`
--
ALTER TABLE `team_registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `team_representative`
--
ALTER TABLE `team_representative`
  MODIFY `team_rep_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `tournament_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `tournaments_divisions`
--
ALTER TABLE `tournaments_divisions`
  MODIFY `division_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tournament_teams`
--
ALTER TABLE `tournament_teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
