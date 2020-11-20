-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 04:30 AM
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
('la liga.png', 1, 34),
('my pic.jpg', 1, 35),
('', 1, 41),
('', 1, 42),
('', 1, 43),
('', 1, 44);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
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

INSERT INTO `users` (`id`, `First_Name`, `Last_Name`, `Username`, `Password`, `Email`, `Phone`, `Job`, `Location`, `Type`, `Birthday`, `Profile_Pic`, `Rating`, `Description`, `Facebook`, `Instagram`, `Gender`) VALUES
(1, 'aaa', 'derbale', 'riyadh99', '4a7d1ed414474e4033ac29ccb8653d9b', 'aaa', 'aaa', 'aaa', 'aaa', '00', '0000-00-00', 'my pic.jpg ', 0, '   aaa ', '', '', ''),
(2, '00000', 'oussama', 'sofiz', 'b59c67bf196a4758191e42f76670ceba', 'sofiousama0@gmail.com', '0', '1100', '0', '00', '0000-00-00', '', 0, '', '', '', '');

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
  MODIFY `Comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `Photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
