-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 12:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sassydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladvertisement`
--

CREATE TABLE `tbladvertisement` (
  `advertisementID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(11) NOT NULL,
  `publish` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `imagePath` varchar(5000) NOT NULL,
  `contactNumber` int(15) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladvertisement`
--

INSERT INTO `tbladvertisement` (`advertisementID`, `productName`, `description`, `price`, `publish`, `category`, `imagePath`, `contactNumber`, `email`) VALUES
(23, 'DENIM', 'Material: 100% cotton', '4500/=', 1, 'Pants', 'uploads/item_16.jpg', 123456789, 'minura@gmail.com'),
(24, 'PATCH DENIM', 'Material: 100% cotton', '5000/=', 1, 'Pants', 'uploads/Denimset01.jpg', 123456789, 'minura@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `email` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactNumber` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`email`, `name`, `contactNumber`, `password`) VALUES
('minura@gmail.com', 'minura', '0714563984', '123'),
('pathum@gmail.com', 'pathum', '1234567890', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladvertisement`
--
ALTER TABLE `tbladvertisement`
  ADD PRIMARY KEY (`advertisementID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladvertisement`
--
ALTER TABLE `tbladvertisement`
  MODIFY `advertisementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
