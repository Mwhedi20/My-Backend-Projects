-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 12:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cisjops`
--

-- --------------------------------------------------------

--
-- Table structure for table `jops`
--

CREATE TABLE `jops` (
  `id` int(11) NOT NULL,
  `jname` varchar(100) NOT NULL,
  `jloc` varchar(100) NOT NULL,
  `jdescr` varchar(500) NOT NULL,
  `edu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jops`
--

INSERT INTO `jops` (`id`, `jname`, `jloc`, `jdescr`, `edu`) VALUES
(1, '', '', '', ''),
(2, '', '', '', 'bak'),
(3, '', '', '', 'dp'),
(4, 'مدرس', 'غزة', 'تدريس', 'sch'),
(5, 'مدرس', 'غزة', 'تدريس', 'sch'),
(6, 'مدرس', 'غزة', 'تدريس', 'sch'),
(7, 'مدرس', 'غزة', 'تدريس', 'sch'),
(8, 'مدرس', 'غزة', 'تدريس', 'sch'),
(9, 'مدرس', 'غزة', 'تدريس', 'sch'),
(10, 'مدرس', 'غزة', 'تدريس', 'sch'),
(11, 'مدرس', 'غزة', 'تدريس', 'sch'),
(12, 'مهندس', 'رفح', 'ااا', 'bakalorios');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jops`
--
ALTER TABLE `jops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jops`
--
ALTER TABLE `jops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
