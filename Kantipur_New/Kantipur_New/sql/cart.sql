-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 11:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kantipur`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL,
  `date` varchar(63) NOT NULL,
  `userId` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartId`, `date`, `userId`, `Pid`, `status`) VALUES
(1, '29 Sep 2021 ', 5, 11, 0),
(2, '30 Sep 2021 ', 7, 43, 0),
(3, '30 Sep 2021 ', 7, 53, 0),
(4, '1 Oct 2021 ', 7, 12, 0),
(5, '1 Oct 2021 ', 7, 12, 0),
(6, '1 Oct 2021 ', 7, 12, 0),
(7, '1 Oct 2021 ', 7, 12, 0),
(8, '1 Oct 2021 ', 7, 11, 0),
(9, '1 Oct 2021 ', 7, 13, 0),
(10, '1 Oct 2021 ', 7, 14, 0),
(11, '1 Oct 2021 ', 7, 11, 0),
(12, '1 Oct 2021 ', 7, 42, 0),
(13, '1 Oct 2021 ', 7, 11, 0),
(14, '1 Oct 2021 ', 7, 41, 0),
(15, '1 Oct 2021 ', 7, 11, 0),
(16, '1 Oct 2021 ', 7, 11, 0),
(17, '1 Oct 2021 ', 7, 21, 0),
(18, '1 Oct 2021 ', 7, 42, 0),
(19, '1 Oct 2021 ', 7, 11, 0),
(20, '1 Oct 2021 ', 7, 41, 0),
(21, '1 Oct 2021 ', 7, 12, 0),
(22, '1 Oct 2021 ', 7, 11, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
