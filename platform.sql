-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 05:24 PM
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
  `Comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Comment`, `User_id`, `Commentor_id`, `Comment_id`) VALUES
('ccomment for riyadh', 2, 1, 1),
('comment 01 riyadh', 2, 1, 2),
('comment for  oussama', 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `Photo_Path` text COLLATE utf8_bin NOT NULL,
  `User_id` int(10) NOT NULL,
  `Photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`Photo_Path`, `User_id`, `Photo_id`) VALUES
('20200430_235849.jpg', 8, 57),
('20200430_195906.jpg', 8, 58);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `indexing` text COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL,
  `First_Name` varchar(20) COLLATE utf8_bin NOT NULL,
  `Last_Name` varchar(20) COLLATE utf8_bin NOT NULL,
  `Username` varchar(50) COLLATE utf8_bin NOT NULL,
  `Password` text COLLATE utf8_bin NOT NULL,
  `Email` varchar(25) COLLATE utf8_bin NOT NULL,
  `Phone` varchar(15) COLLATE utf8_bin NOT NULL,
  `Job` varchar(30) COLLATE utf8_bin NOT NULL,
  `Location` text COLLATE utf8_bin NOT NULL,
  `Type` varchar(20) COLLATE utf8_bin NOT NULL,
  `Birthday` date NOT NULL,
  `Profile_Pic` text COLLATE utf8_bin NOT NULL,
  `Rating` double NOT NULL,
  `Description` text COLLATE utf8_bin NOT NULL,
  `Facebook` text COLLATE utf8_bin NOT NULL,
  `Instagram` text COLLATE utf8_bin NOT NULL,
  `Gender` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`indexing`, `id`, `First_Name`, `Last_Name`, `Username`, `Password`, `Email`, `Phone`, `Job`, `Location`, `Type`, `Birthday`, `Profile_Pic`, `Rating`, `Description`, `Facebook`, `Instagram`, `Gender`) VALUES
(' RYT  TRBL RYT RYT   ', 2, 'riyadh  derbale', 'riyadh', 'riyadh01', 'b59c67bf196a4758191e42f76670ceba', 'sofiousama0@gmail.com', '0', '1100', '0', '00', '0000-00-00', '1.jpg', 0, '', '', '', ''),
(' R R R   ', 8, 'rr', 'rr', 'rr', '4a7d1ed414474e4033ac29ccb8653d9b', '0000', '0000', '0000', '0000', '00', '0000-00-00', '20200430_195924.jpg', 0, '0000000', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Comment_id`);

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
  MODIFY `Comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `Photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
