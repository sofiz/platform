-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 02:48 AM
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
  `Comment` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `User_id` int(10) NOT NULL,
  `Commentor_id` int(10) NOT NULL,
  `Comment_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `daily_visits`
--

CREATE TABLE `daily_visits` (
  `Date` varchar(50) COLLATE utf8_bin NOT NULL,
  `Visitors` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `Photo_Path` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `User_id` int(10) NOT NULL,
  `Photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Post_id` int(8) NOT NULL,
  `User_id` int(8) DEFAULT NULL,
  `Txt` text COLLATE utf8_bin DEFAULT NULL,
  `Photo_1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Photo_2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Photo_3` varchar(210) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `posts_comments`
--

CREATE TABLE `posts_comments` (
  `Post_id` int(11) NOT NULL,
  `Comment_id` int(11) NOT NULL,
  `Commentor_id` int(11) NOT NULL,
  `Comment` varchar(260) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `profile_visitors`
--

CREATE TABLE `profile_visitors` (
  `Profile_id` int(8) NOT NULL,
  `Visitor_id` int(8) NOT NULL,
  `Num` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Email` varchar(90) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Report` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `Username` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Session_Nbr` int(8) DEFAULT NULL,
  `Search` int(8) DEFAULT NULL,
  `Myprofile` int(8) DEFAULT NULL,
  `ProfileEdit` int(8) DEFAULT NULL,
  `ResetPass` int(8) DEFAULT NULL,
  `EnterEmail` int(8) DEFAULT NULL,
  `Referral` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `indexing` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `First_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Last_Name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Password` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `EmailCheck` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'no',
  `Phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Job` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Wilaya` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Daira` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Commune` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Type` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Ad` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Profile_Pic` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Rating` double DEFAULT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Facebook` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Instagram` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Gender` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `Date` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Time` varchar(50) COLLATE utf8_bin NOT NULL,
  `Points` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(8) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Allvisitors` int(8) DEFAULT NULL,
  `Users` int(8) DEFAULT NULL,
  `Unkown` int(8) DEFAULT NULL,
  `Indexvisit` int(8) DEFAULT NULL,
  `Searchvisit` int(10) NOT NULL,
  `Signinvisit` int(10) NOT NULL,
  `Signupvisit` int(10) NOT NULL,
  `enter_emailvisit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Post_id`);

--
-- Indexes for table `posts_comments`
--
ALTER TABLE `posts_comments`
  ADD PRIMARY KEY (`Comment_id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `Photo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts_comments`
--
ALTER TABLE `posts_comments`
  MODIFY `Comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
