-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 11:38 AM
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Pid` int(11) NOT NULL,
  `prdPos` int(11) NOT NULL,
  `prdImg` varchar(64) NOT NULL,
  `prdName` varchar(64) NOT NULL,
  `prdPrice` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Pid`, `prdPos`, `prdImg`, `prdName`, `prdPrice`, `Quantity`) VALUES
(1, 11, 'golbon.jpg', 'Golbon(1kg)', 990, 63),
(2, 12, 'kit_kat.jpg', 'KitKat', 50, 14),
(3, 13, 'deluxe.jpg', 'Deluxe(Small)', 300, 51),
(4, 14, 'gudpak3.jpg', 'Gudpaak', 275, 23),
(5, 21, 'evliya.jpg', 'Evliya', 950, 48),
(6, 22, 'maxsweet.jpg', 'MaxSweet(T-5)', 275, 13),
(7, 23, 'vigos.jpg', 'Vigos', 975, 38),
(8, 31, 'magicbox2.jpg', 'Magic Box', 450, 28),
(9, 32, 'dates2.jpg', 'Dates(Khajur)', 450, 50),
(10, 33, 'pustakari.jpg', 'Pustakari', 275, 30),
(11, 41, 'milk.jpg', 'Milk(1kg)', 950, 8),
(12, 42, 'dates.jpg', 'Dates(Fard)', 750, 9),
(13, 43, 'titaura.jpg', 'Titaura Candy', 75, 50),
(14, 51, 'dairy.jpg', 'DairyMilk(Bubbly)', 150, 12),
(15, 52, 'box.jpg', 'Sultan Box', 500, 19),
(16, 53, 'kismis.jpg', 'Kismis(500g)', 320, 26),
(17, 61, 'drymeat.jpg', 'Drymeat(500g)', 950, 12),
(18, 62, 'truffle.jpg', 'Truffle(1kg)', 1200, 56),
(19, 63, 'titauraa.jpg', 'Titaura Piro', 75, 50),
(20, 71, 'cashew.jpg', 'Cashew(500g)', 800, 21),
(21, 72, 'soanpapdi.jpg', 'SoanPapdi(500g)', 200, 45),
(22, 73, 'almond.jpg', 'Almond(500g)', 750, 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
