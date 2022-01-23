-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2022 at 01:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curl`
--

-- --------------------------------------------------------

--
-- Table structure for table `curl`
--

CREATE TABLE `curl` (
  `id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `gmailAddress` varchar(100) NOT NULL,
  `phoneNumber` double NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curl`
--

INSERT INTO `curl` (`id`, `fullName`, `gmailAddress`, `phoneNumber`, `address`) VALUES
(39, 'Rustam', 'rustam@gmail.co', 45678876543, 'Delhi IN'),
(40, 'Pranitha', 'pranitha@gmail.cc', 5678987654, 'AP IN'),
(42, 'Shubham', 'shubham@gdha.cjkbhsd', 9028305960, 'BENGALURU'),
(43, 'Rustam', 'rustam@gmail.co', 456788765436, 'Delhi'),
(44, 'Rustam', 'rustam@gmail.co', 45678876543, 'Delhi'),
(45, 'Pranitha', 'pranitha@gmail.cc', 5678987654, 'APn'),
(46, 'Rustam', 'rustam@gmail.co', 876545678876543, 'Delhi'),
(47, 'Shubham', 'shubham@gdha.cjkbhsd', 9028305960, 'MH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curl`
--
ALTER TABLE `curl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curl`
--
ALTER TABLE `curl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
