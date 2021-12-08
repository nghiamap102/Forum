-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2021 at 05:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forumdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Id` int(11) NOT NULL,
  `Title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `Active` tinyint(1) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `TagId` int(11) NOT NULL,
  `Created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Id`, `Title`, `Content`, `Active`, `UserId`, `TagId`, `Created_date`) VALUES
(1, 'test', 'test blog', 1, NULL, 1, '2021-12-03 16:41:30'),
(2, 'blog test', '<h2>sadas</h2><p>dadasd</p><figure class=\"image\"><img src=\"/ckfinder/userfiles/files/7E3654FC-83B9-42E6-81FF-244AC6CCDD43_1_201_a(5).jpeg\"></figure>', 1, NULL, 1, '2021-12-04 00:34:53'),
(3, 'sdfsdf', '<p>dsasdasd</p>', 0, NULL, 1, '2021-12-04 00:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `BlogId` int(11) NOT NULL,
  `Created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`Id`, `Name`, `Created_date`) VALUES
(1, 'Tin tức', '2021-12-03 16:35:48'),
(2, 'Lập trình Web', '2021-12-03 16:35:48'),
(3, 'Lập trình CSDL', '2021-12-03 16:37:22'),
(4, 'Thực tập', '2021-12-03 16:37:22'),
(5, 'Lập trình Java', '2021-12-03 16:37:22'),
(6, 'Cơ sở lập trình', '2021-12-03 16:37:22'),
(7, 'Thiết kế Web', '2021-12-03 17:44:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
