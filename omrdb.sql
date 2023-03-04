-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 06:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omrdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_details`
--

CREATE TABLE `buyer_details` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyer_details`
--

INSERT INTO `buyer_details` (`Id`, `Name`, `Username`, `Password`, `Address`, `Contact`) VALUES
(1, 'Stains', 'stains', '123', '14/961,Tenkasi', '6382826910'),
(2, 'Rajadurai', 'raju ', '1234', '22, Madurai', '8220204460'),
(3, 'Stains', 'stains', 'stains', '12,chennai', '56+89+23'),
(4, 'Regson', 'rex', '123456789', '32,Dindukal', '9876543211'),
(5, 'Solomon', 'solo1', 'asdf', 'sadfas', '789456132');

-- --------------------------------------------------------

--
-- Table structure for table `inst_details`
--

CREATE TABLE `inst_details` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Pic` varchar(50) NOT NULL,
  `Seller_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inst_details`
--

INSERT INTO `inst_details` (`Id`, `Name`, `Price`, `Type`, `Pic`, `Seller_name`) VALUES
(22, 'Guitar', 5000, 'string', '63f63e916ffb82.25988767.jpg', ''),
(23, 'Midi', 20000, 'electric', '63f64642365bb8.79357147.jpg', ''),
(24, 'Trumpet', 1500, 'wind', '63f66b9c43da79.94906019.jpg', ''),
(25, 'Mic ', 16000, 'electric', '63f6f19a30e256.47967209.jpg', ''),
(26, 'guitar Strings ', 300, 'wind', '63f6f20bee9a04.38512418.jpg', ''),
(27, 'Pick', 200, 'wind', '63f6fbc3bdc706.86048968.jpg', ''),
(28, 'Violin', 6500, 'wind', '63f6fbda949929.23203897.jpg', ''),
(29, 'Xylophone', 1500, 'wind', '63f6fc1d2ba1d0.66373864.jpg', ''),
(30, 'Drums ', 33000, 'skin', '63f9aa9877e5d0.72979935.jpg', ''),
(44, 'Pick ', 150, 'wind', '63fe435a90c5b7.40576867.jpg', 'solo'),
(46, 'Headphones', 1250, 'electric', '6400d29620fef9.74220541.jpg', 'solo');

-- --------------------------------------------------------

--
-- Table structure for table `rajadurai_table`
--

CREATE TABLE `rajadurai_table` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Pic` varchar(255) DEFAULT NULL,
  `Seller_name` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regson_table`
--

CREATE TABLE `regson_table` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Pic` varchar(255) DEFAULT NULL,
  `Seller_name` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regson_table`
--

INSERT INTO `regson_table` (`Id`, `Name`, `Price`, `Type`, `Pic`, `Seller_name`, `Quantity`) VALUES
(1, 'Midi', '20000', 'electric', '63f64642365bb8.79357147.jpg', '', 1),
(2, 'Trumpet', '1500', 'wind', '63f66b9c43da79.94906019.jpg', '', 1),
(3, 'Mic ', '16000', 'electric', '63f6f19a30e256.47967209.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller_details`
--

CREATE TABLE `seller_details` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_details`
--

INSERT INTO `seller_details` (`Id`, `Name`, `Username`, `Password`, `Contact`) VALUES
(1, 'Solomon', 'solo', '123', '6382826910');

-- --------------------------------------------------------

--
-- Table structure for table `solomon_table`
--

CREATE TABLE `solomon_table` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Pic` varchar(255) DEFAULT NULL,
  `Seller_name` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solomon_table`
--

INSERT INTO `solomon_table` (`Id`, `Name`, `Price`, `Type`, `Pic`, `Seller_name`, `Quantity`) VALUES
(1, 'Guitar', '5000', 'string', '63f63e916ffb82.25988767.jpg', '', NULL),
(2, 'Midi', '20000', 'electric', '63f64642365bb8.79357147.jpg', '', NULL),
(3, 'Trumpet', '1500', 'wind', '63f66b9c43da79.94906019.jpg', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stains_table`
--

CREATE TABLE `stains_table` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Pic` varchar(255) DEFAULT NULL,
  `Seller_name` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stains_table`
--

INSERT INTO `stains_table` (`Id`, `Name`, `Price`, `Type`, `Pic`, `Seller_name`, `Quantity`) VALUES
(1, 'Guitar', '5000', 'string', '63f63e916ffb82.25988767.jpg', '', NULL),
(2, 'Trumpet', '1500', 'wind', '63f66b9c43da79.94906019.jpg', '', NULL),
(3, 'Mic ', '16000', 'electric', '63f6f19a30e256.47967209.jpg', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `buyer_details`
--
ALTER TABLE `buyer_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `inst_details`
--
ALTER TABLE `inst_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rajadurai_table`
--
ALTER TABLE `rajadurai_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `regson_table`
--
ALTER TABLE `regson_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `seller_details`
--
ALTER TABLE `seller_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `solomon_table`
--
ALTER TABLE `solomon_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `stains_table`
--
ALTER TABLE `stains_table`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyer_details`
--
ALTER TABLE `buyer_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inst_details`
--
ALTER TABLE `inst_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `rajadurai_table`
--
ALTER TABLE `rajadurai_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regson_table`
--
ALTER TABLE `regson_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller_details`
--
ALTER TABLE `seller_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solomon_table`
--
ALTER TABLE `solomon_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stains_table`
--
ALTER TABLE `stains_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
