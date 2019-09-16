-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2019 at 12:46 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tablica`
--

-- --------------------------------------------------------

--
-- Table structure for table `mnozenje`
--

CREATE TABLE `mnozenje` (
  `id` int(11) NOT NULL,
  `number1` int(6) NOT NULL,
  `number2` int(6) NOT NULL,
  `operation` varchar(2) NOT NULL,
  `result` int(6) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mnozenje`
--

INSERT INTO `mnozenje` (`id`, `number1`, `number2`, `operation`, `result`, `date`) VALUES
(1, 3, 8, '*', 24, '2017-09-19 12:29:30'),
(2, 5, 2, '*', 10, '2017-09-19 12:30:30'),
(3, 2, 5, '*', 10, '2017-09-19 12:32:30'),
(4, 3, 3, '*', 9, '2017-09-19 12:35:30'),
(5, 6, 4, '*', 24, '2017-09-19 12:37:30'),
(6, 10, 10, '*', 100, '2017-09-19 12:41:30'),
(7, 5, 1, '*', 5, '2017-09-19 12:00:30'),
(8, 6, 2, '*', 12, '2017-09-19 12:01:30'),
(9, 5, 10, '*', 50, '2017-09-19 12:03:30'),
(10, 4, 6, '*', 24, '2017-09-19 12:04:30'),
(11, 4, 5, '*', 20, '2017-09-19 12:05:30'),
(12, 1, 2, '*', 2, '2017-09-19 12:07:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mnozenje`
--
ALTER TABLE `mnozenje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mnozenje`
--
ALTER TABLE `mnozenje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
