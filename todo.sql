-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2017 at 02:31 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(64) NOT NULL,
  `completed` tinyint(1) DEFAULT '0',
  `priority` int(6) UNSIGNED NOT NULL,
  `createdBy` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `title`, `completed`, `priority`, `createdBy`) VALUES
(184, 'glög', 1, 2, 'Mariia'),
(189, 'sova', 1, 21, 'steffe'),
(191, 'Läsa en bok', 0, 32, 'Mariia'),
(192, 'gå på promenad', 0, 3, 'Lisa'),
(193, 'Äta smörgås', 1, 1, 'Robin'),
(194, 'Spela datorspel', 0, 1, 'Aurelia'),
(195, 'Laga surfplattan', 0, 4, 'Malin'),
(196, 'Göra matlåda', 1, 5, 'Gina'),
(197, 'Dricka öl', 1, 8, 'Henke'),
(198, 'Åka båt', 0, 3, 'Malin'),
(199, 'Surfa', 0, 1, 'Stefan'),
(200, 'Hämta biljetter till concert', 0, 2, 'Mariia'),
(201, 'Leka med katten', 0, 1, 'Linnéa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
