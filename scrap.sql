-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 04:01 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scrap`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `mobileno` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sellerid` int(20) NOT NULL,
  `type` varchar(25) NOT NULL,
  `weight` int(25) NOT NULL,
  `zip` int(25) NOT NULL,
  `adress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `cname`, `mobileno`, `email`, `sellerid`, `type`, `weight`, `zip`, `adress`) VALUES
(18, 'nale sainath m', '08421138437', 'nalesainath@gmail.co', 2, 'paper', 0, 0, 'sangrul'),
(19, 'amol nal', '9765678893', 'nalesainath@gmail.co', 3, 'still', 58, 416024, 'sangrul'),
(20, 'nale sainath m', '08421138437', 'nalesainath@gmail.co', 22, 'paper', 123, 416024, 'sangru;'),
(21, 'nale sainath b', '08421138437', 'nalesainath@gmail.co', 22, 'paper', 123, 416024, 'sangru;'),
(22, '', '', '', 0, 'paper', 0, 0, ''),
(23, 'dsssss', '2315453', 'nalesainath@gmail.co', 1, 'paper', 52, 416024, 'sangrul');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `shope` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `zip` int(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`, `type`, `fullname`, `shope`, `mobile`, `zip`, `country`, `state`, `addr`) VALUES
(1, 'sainath123', 'nalesainath@gmail.com', 'Sawre@123', 0, 'nale sainath m', 'shri hari', 2147483647, 416204, 'india', '0', 'sangrul'),
(2, 'sainath123', 'nalesainath@gmail.com', '124Sainath@', 0, 'nale sainath m', 'shri hari', 2147483647, 416204, 'india', '0', 'sangrul'),
(3, 'sainath', 'nalesai@gmail.com', 'Nalesainath@123', 0, 'nale sainath m', 'shri hari', 2147483647, 416204, 'india', '0', 'sangrul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
