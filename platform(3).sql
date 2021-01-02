-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 01:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Comment` text COLLATE utf8_bin NOT NULL,
  `User_id` int(10) NOT NULL,
  `Commentor_id` int(10) NOT NULL,
  `Comment_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Comment`, `User_id`, `Commentor_id`, `Comment_id`, `rating`) VALUES
('00', 43, 40, 258, 4),
('sifo lkharay hada 02', 47, 47, 262, 0),
('65656565', 40, 46, 263, 4),
('2000', 40, 46, 264, 4),
('0/', 40, 52, 265, 0),
('0303', 52, 52, 266, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `id`) VALUES
('riyadh.derbale99@gmail.com', '68d1b59348979896802ae591330c410148dfdd8c509a4a4d563ab7083a36245a6ef67760615f5637dc053b37971d33134181', 4),
('riyadh15@gmail.com', 'd69c8303ec37b801bddf8a4b2fd2755a1a39305d3bcf48c83db676a20a930a626f4edf40ffe12d10924884d9c7a4bd0c8bb1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `Photo_Path` text COLLATE utf8_bin NOT NULL,
  `User_id` int(10) NOT NULL,
  `Photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `profile_visitors`
--

CREATE TABLE `profile_visitors` (
  `Profile_id` int(8) NOT NULL,
  `Visitor_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `profile_visitors`
--

INSERT INTO `profile_visitors` (`Profile_id`, `Visitor_id`) VALUES
(54, 56),
(54, 56);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `Name` varchar(30) COLLATE utf8_bin NOT NULL,
  `Email` varchar(90) COLLATE utf8_bin NOT NULL,
  `Report` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`Name`, `Email`, `Report`) VALUES
('', 'riyadh.derbale@gmail.com', 'iugsiuzhnf\r\n'),
('riyadh', 'ahmed@gmail.com', 'hygzduj'),
('oussama sofi', 'oussama00@gmail.com', '02020200000000000000000000000000000000000000000000000000000');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `Username` varchar(40) COLLATE utf8_bin NOT NULL,
  `Session_Nbr` int(8) NOT NULL,
  `Search` int(8) NOT NULL,
  `Myprofile` int(8) NOT NULL,
  `ProfileEdit` int(8) NOT NULL,
  `ResetPass` int(8) NOT NULL,
  `EnterEmail` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`Username`, `Session_Nbr`, `Search`, `Myprofile`, `ProfileEdit`, `ResetPass`, `EnterEmail`) VALUES
('jalile', 2, 6, 5, 2, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `indexing` text COLLATE utf8_bin DEFAULT NULL,
  `id` int(11) NOT NULL,
  `First_Name` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Last_Name` varchar(20) COLLATE utf8_bin NOT NULL,
  `Username` varchar(50) COLLATE utf8_bin NOT NULL,
  `Password` text COLLATE utf8_bin NOT NULL,
  `Email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `EmailCheck` varchar(3) COLLATE utf8_bin DEFAULT NULL,
  `Phone` varchar(15) COLLATE utf8_bin NOT NULL,
  `Job` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `Wilaya` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `Daira` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Commune` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Type` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Birthday` date NOT NULL,
  `Profile_Pic` text COLLATE utf8_bin DEFAULT NULL,
  `Rating` double NOT NULL,
  `Description` text COLLATE utf8_bin DEFAULT NULL,
  `Facebook` text COLLATE utf8_bin DEFAULT NULL,
  `Instagram` text COLLATE utf8_bin DEFAULT NULL,
  `Gender` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`indexing`, `id`, `First_Name`, `Last_Name`, `Username`, `Password`, `Email`, `EmailCheck`, `Phone`, `Job`, `Wilaya`, `Daira`, `Commune`, `Type`, `Birthday`, `Profile_Pic`, `Rating`, `Description`, `Facebook`, `Instagram`, `Gender`) VALUES
('  RYT TRBL RYT M0K  TBS TRKMLKM', 54, 'riyadh', 'derbale', 'riyadh', '$2y$10$iML.qCuzcAwrtXXRxV5i3u1CSYL0ayRt/cE3crvL9rQ6yi7qY58g2', 'der15@gmail.com', 'yes', '0101', 'موثق\r\n ', 'تبسة', '', '', 'worker', '0000-00-00', 'default.png', 0, '', '', '', NULL),
('  JLL JLL JLL JLLKMLKM', 56, 'jalile', 'jalile', 'jalile', '$2y$10$6k0fdBQ5ehPqLUAxDUOaXebYiFI4nShJXrNbBYv7YILGH0CAFXcfm', 'jalile15@gmail.com', NULL, '', '', '', NULL, NULL, 'client', '0000-00-00', 'default.png', 0, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Comment_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`Photo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `Photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=325;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
