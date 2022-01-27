-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2022 at 07:35 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paris`
--

-- --------------------------------------------------------

--
-- Table structure for table `allclasses`
--

CREATE TABLE `allclasses` (
  `id` int(11) NOT NULL,
  `classname` varchar(255) DEFAULT NULL,
  `stu_name` varchar(255) DEFAULT NULL,
  `stu_lastname` varchar(255) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `num1` int(11) DEFAULT NULL,
  `num2` int(11) DEFAULT NULL,
  `num3` int(11) DEFAULT NULL,
  `num4` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allclasses`
--

INSERT INTO `allclasses` (`id`, `classname`, `stu_name`, `stu_lastname`, `sex`, `num1`, `num2`, `num3`, `num4`, `created_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-04 19:54:10'),
(2, 'software', 'sajjad', 'eftekhari', 'M', 20, 19, 18, 17, '2022-01-04 20:06:39'),
(3, 'software', 'sajjad', 'eftekhari', 'M', 20, 70, 40, 80, '2022-01-04 21:45:04'),
(4, 'software', 'sajjad', 'eftekhari', 'M', 20, 70, 40, 80, '2022-01-04 21:45:08'),
(5, 'software', 'sajjad', 'eftekhari', 'M', 20, 70, 40, 80, '2022-01-04 21:45:11'),
(6, 'Physics', 'Physics', 'Physics', 'M', 20, 21, 21, 21, '2022-01-04 21:46:55'),
(8, 'Physics', 'Physics', 'Physics', 'F', 20, 21, 21, 21, '2022-01-04 21:47:00'),
(9, 'Physics', 'Physics', 'Physics', 'M', 20, 21, 21, 21, '2022-01-04 21:47:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allclasses`
--
ALTER TABLE `allclasses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allclasses`
--
ALTER TABLE `allclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
