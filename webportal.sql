-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 12:01 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `ContactNumber` varchar(50) DEFAULT NULL,
  `Utype` varchar(20) DEFAULT NULL,
  `uaddress` varchar(100) DEFAULT NULL,
  `EntryDate` datetime DEFAULT NULL,
  `comments` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `Name`, `Lname`, `Email`, `ContactNumber`, `Utype`, `uaddress`, `EntryDate`, `comments`) VALUES
(13, 'Wahaj', 'Ashfaq', 'Wahaj.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(16, 'Gulzaib', 'Malik', 'Gullo@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(32, 'Ali', 'Butt', 'Butt@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(33, 'Khawar', 'Hussain', 'Khawar@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(35, 'Mudasar', 'Zaman', 'Mudasar@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(36, 'Nomi', 'Shah', 'nomi@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging     '),
(45, 'Werad', 'Ashfaq', 'Werad@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(48, 'Khawar', 'Hussain', 'Khawar@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(50, 'Mudasar', 'Zaman', 'Mudasar@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(51, 'Nomi', 'Shah', 'nomi@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(56, 'ArhamG', 'boss', 'Arham@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(65, 'Mudasar', 'Zaman', 'Mudasar@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(66, 'Nomi', 'Shah', 'nomi@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(1111111111, 'Default ', 'User', 'non@gmail.com', '00000000', 'Supplier', 'Non', NULL, 'NOn');

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE `productdetails` (
  `pid` int(12) NOT NULL,
  `sid` int(12) NOT NULL,
  `name` varchar(50) DEFAULT 'Default Product',
  `issued` int(12) DEFAULT '0',
  `available` int(12) DEFAULT '0',
  `NetWeight` int(12) DEFAULT '0',
  `NetValue` int(12) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`pid`, `sid`, `name`, `issued`, `available`, `NetWeight`, `NetValue`) VALUES
(1, 12, 'Liquid Nitrogen', 20, 0, 10, 1000),
(1, 13, 'Liquid Nitrogen', 10, 2, 5, 25),
(1, 8, 'Sulphuric Acid', 10, 0, 10, 120),
(1, 11, 'Sodium carbonate Pentahidrate', 10, 2, 10, 200);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(12) NOT NULL,
  `ProductName` varchar(50) DEFAULT 'Default Product',
  `QuantityProduced` int(12) DEFAULT '0',
  `QuantityIssued` int(12) DEFAULT '0',
  `QuantityAvailable` int(12) DEFAULT '0',
  `PriceperKG` float DEFAULT '0',
  `ProductDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `comments` varchar(500) DEFAULT 'No Comments'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `QuantityProduced`, `QuantityIssued`, `QuantityAvailable`, `PriceperKG`, `ProductDate`, `comments`) VALUES
(1, 'Head&Shoulder', 100, 0, 100, 13.45, '2018-12-13 00:00:00', 'No Comments'),
(2, 'AlfhaBeta', 100, 0, 100, 1.5, '2018-12-05 00:00:00', 'No Comments');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `StockID` int(12) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `StockName` varchar(30) DEFAULT NULL,
  `QuantityPurchased` int(12) DEFAULT NULL,
  `QuantityIssued` int(12) DEFAULT NULL,
  `QuantityAvailable` int(12) DEFAULT NULL,
  `PriceperKG` int(12) DEFAULT NULL,
  `TotalPrice` int(12) DEFAULT NULL,
  `StockDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`StockID`, `SupplierID`, `StockName`, `QuantityPurchased`, `QuantityIssued`, `QuantityAvailable`, `PriceperKG`, `TotalPrice`, `StockDate`, `comments`) VALUES
(8, 35, 'Sulphuric Acid', 10, 10, 0, 12, 120, '2018-11-08 00:00:00', 'y6gtfrdyhgtfredy6gtfred'),
(9, 13, 'Sulphuric Acid', 12, -4, 4, 10, 120, '2018-11-17 00:00:00', 'vrfcdbtvrcfex'),
(10, 45, 'Liquid Nitrogen', 10, -8, 8, 10, 100, '2018-11-24 00:00:00', 'hbtgvcrfedx'),
(11, 51, 'Sodium carbonate Pentahidrate', 12, -1, 1, 20, 240, '2018-11-01 00:00:00', 'No Comments'),
(12, 36, 'Liquid Nitrogen', 20, 20, 0, 100, 2000, '2018-11-01 00:00:00', 'No Comments'),
(13, 13, 'Liquid Nitrogen', 12, -2, 2, 5, 60, '2018-11-14 00:00:00', 'No Comments');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `u_pass` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `ContactNumber` varchar(50) DEFAULT NULL,
  `Utype` varchar(20) DEFAULT NULL,
  `uaddress` varchar(100) DEFAULT NULL,
  `EntryDate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_ID`, `Name`, `Lname`, `u_pass`, `Email`, `ContactNumber`, `Utype`, `uaddress`, `EntryDate`) VALUES
(1, 'Sohaib', 'Afzal', '123123', 'Sohaib@gmail.com', '03030966241', 'Admin', 'Canal Bank', '2018-11-18 00:00:00'),
(2, 'Husnain', 'Ajmal', 'a1b1c1', 'husnain.ajmal80@gmail.com', '03030966241', 'Admin', 'Canal Bank', '2018-11-18 00:00:00'),
(3, 'Wahaj', 'Asfaq', 'Pak123', 'Wahaj@gmail.com', '03030966241', 'Admin', 'Canal Bank', '2018-11-18 00:00:00'),
(4, 'Ahmad', 'Riaz', '123456', 'Ahmad@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(5, 'Owais', 'Ahmad', '123456', 'OwaisAhmad@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(6, 'Basit', 'Riaz', '123456', 'Basit@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(7, 'Haseeb', 'ELahi', '123456', 'Haseeb@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(8, 'Daniyal', 'Noor', '123456', 'Dany@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(9, 'Ibrahim', 'Noor', '123456', 'Ibrahim@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(11, 'Usama', 'Muzammil', '123456', 'Usama@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(12, 'Ghulam', 'tajummul', '123456', 'Ghulam@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(13, 'Usman', 'Javaid', '123456', 'Mani@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(14, 'Ajmal', 'Shad', '321123', 'Ajmal@gmail.com', '03030966241', 'Employee', 'Haraspura ringroad Lahore', '2018-11-21 00:00:00'),
(17, 'Owais', 'Dar', '123aaa', 'Owais@gmail.com', '03030303030', 'Admin', 'Karachi', '2018-11-02 00:00:00'),
(19, 'Afzaal', 'Saab', '1313', 'abc@gmail.com', '1616511', 'Admin', 'Rawalpindi Town maansehra bla bla bla', '2018-11-10 00:00:00'),
(24, 'admin', 'Admin', 'admin', 'Admin@gmail.com', '03030966241', 'Employee', 'Canal Bank Lahore', '2018-11-20 00:00:00'),
(25, 'Bilal', 'Khan', '1222123', 'khan@gmail.com', '03030966241', 'Admin', 'Taj Bagh', '2018-11-22 00:00:00'),
(27, 'Ali', 'Ajmal', '123', 'ali@gmail.com', '0303030303', 'Employee', 'kanjar khana', '2018-11-20 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`StockID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111111112;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `StockID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
