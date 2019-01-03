-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 10:35 PM
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
(32, 'Ali', 'Butt', 'Butt@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-23 00:00:00', '     Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging     '),
(35, 'Mudasar', 'Zaman', 'Mudasar@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(36, 'Nomi', 'Shah', 'nomi@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging     '),
(45, 'Werad', 'Ashfaq', 'Werad@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(48, 'Khawar', 'Hussain', 'Khawar@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(50, 'Mudasar', 'Zaman', 'Mudasar@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(51, 'Nomi', 'Shah', 'nomi@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(56, 'ArhamG', 'boss', 'Arham@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(1111111111, 'Default ', 'User', 'non@gmail.com', '00000000', 'Supplier', 'Non', NULL, 'NOn');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `oid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `NetWeight` float DEFAULT NULL,
  `NetValue` float DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`oid`, `pid`, `Name`, `NetWeight`, `NetValue`, `price`) VALUES
(10, 12, 'AlfhaBeta', 11, 1100, 100),
(10, 13, 'Head&Shoulder', 10, 10000, 1000),
(9, 10, 'AlfhaBeta', 10, 2000, 200),
(9, 12, 'AlfhaBeta', 5, 1000, 200),
(9, 8, 'Head&Shoulder', 10, 1000, 100),
(9, 11, 'Brighto Paints', 2, 200, 100),
(11, 12, 'AlfhaBeta', 2, 2000, 1000),
(11, 14, 'PaintFant', 10, 10000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `Reference` varchar(50) DEFAULT NULL,
  `CustomerID` int(11) NOT NULL,
  `OrderDate` datetime DEFAULT NULL,
  `DeliverDate` datetime DEFAULT NULL,
  `Discount` float DEFAULT NULL,
  `GrandTotal` float NOT NULL,
  `Due_Payment` float NOT NULL,
  `comments` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `Reference`, `CustomerID`, `OrderDate`, `DeliverDate`, `Discount`, `GrandTotal`, `Due_Payment`, `comments`) VALUES
(9, 'Raffaan Order', 32, '2018-11-29 00:00:00', '2019-01-04 00:00:00', 0, 4200, 0, 'No Comments'),
(10, 'Arham Production 101', 48, '2019-01-05 00:00:00', '2019-01-25 00:00:00', 200, 10900, 6000, 'No Comments'),
(11, 'Texas order', 48, '2018-12-30 00:00:00', '2019-02-02 00:00:00', 200, 11800, 4000, 'No Comments');

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
(8, 14, 'Alumunium', 20, 80, 20, 2000),
(8, 12, 'Liquid Nitrogen', 22, 8, 22, 2200),
(8, 8, 'Sulphuric Acid', 22, 28, 22, 264),
(9, 12, 'Liquid Nitrogen', 30, 0, 8, 800),
(9, 13, 'Liquid Nitrogen', 2, 10, 2, 10),
(9, 14, 'Alumunium', 50, 50, 30, 3000),
(9, 8, 'Sulphuric Acid', 37, 13, 15, 180),
(9, 11, 'Sodium carbonate Pentahidrate', 5, 7, 5, 100),
(10, 11, 'Sodium carbonate Pentahidrate', 12, 0, 7, 140),
(10, 14, 'Alumunium', 80, 20, 30, 3000),
(11, 13, 'Liquid Nitrogen', 12, 0, 10, 50),
(11, 10, 'Liquid Nitrogen', 5, 5, 5, 50),
(11, 14, 'Alumunium', 90, 10, 10, 1000),
(11, 8, 'Sulphuric Acid', 50, 0, 13, 156),
(11, 9, 'Sulphuric Acid', 7, 5, 7, 70),
(12, 14, 'Alumunium', 95, 5, 5, 500),
(12, 9, 'Sulphuric Acid', 10, 2, 3, 30),
(12, 10, 'Liquid Nitrogen', 9, 1, 4, 40),
(13, 14, 'Alumunium', 100, 0, 5, 500),
(13, 10, 'Liquid Nitrogen', 10, 0, 1, 10),
(13, 9, 'Sulphuric Acid', 12, 0, 2, 20),
(14, 15, 'Salt(NACL)', 30, 0, 30, 300),
(14, 17, 'Salt(NACL)', 20, 30, 10, 200),
(14, 18, 'KOH', 20, 0, 20, 400);

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
(8, 'Head&Shoulder', 10, 10, 0, 446.4, '2018-12-06 00:00:00', 'No Comments'),
(9, 'Sunsilk', 120, 0, 120, 34.0833, '2018-12-07 00:00:00', 'No Comments'),
(10, 'AlfhaBeta', 10, 10, 0, 314, '2018-12-05 00:00:00', 'No Comments'),
(11, 'Brighto Paints', 10, 2, 8, 132.6, '2018-12-14 00:00:00', 'No Comments'),
(12, 'AlfhaBeta', 20, 18, 2, 28.5, '2018-12-07 00:00:00', 'No Comments'),
(13, 'Head&Shoulder', 15, 10, 5, 35.3333, '2018-12-07 00:00:00', 'No Comments'),
(14, 'PaintFant', 120, 10, 110, 7.5, '2018-12-14 00:00:00', 'No Comments');

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
  `PriceperKG` float DEFAULT NULL,
  `TotalPrice` float DEFAULT NULL,
  `owe` int(11) DEFAULT NULL,
  `StockDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`StockID`, `SupplierID`, `StockName`, `QuantityPurchased`, `QuantityIssued`, `QuantityAvailable`, `PriceperKG`, `TotalPrice`, `owe`, `StockDate`, `comments`) VALUES
(8, 35, 'Sulphuric Acid', 50, 50, 0, 12, 600, 1050, '2018-11-08 00:00:00', 'y6gtfrdyhgtfredy6gtfred            '),
(9, 13, 'Sulphuric Acid', 12, 12, 0, 10, 120, 1000, '2018-11-17 00:00:00', 'vrfcdbtvrcfex'),
(10, 45, 'Liquid Nitrogen', 10, 10, 0, 10, 100, 1050, '2018-11-24 00:00:00', 'hbtgvcrfedx'),
(11, 51, 'Sodium carbonate Pentahidrate', 12, 12, 0, 20, 240, 1000, '2018-11-01 00:00:00', 'No Comments'),
(12, 36, 'Liquid Nitrogen', 30, 30, 0, 100, 3000, 1050, '2018-11-01 00:00:00', 'No Comments                  '),
(13, 13, 'Liquid Nitrogen', 12, 12, 0, 5, 60, 1000, '2018-11-14 00:00:00', 'No Comments'),
(14, 13, 'Alumunium', 100, 100, 0, 100, 10000, 1050, '2018-12-19 00:00:00', 'No Comments'),
(15, 13, 'Salt(NACL)', 30, 30, 0, 10, 300, 1000, '2018-12-12 00:00:00', 'No Comments'),
(16, 13, 'KOH', 20, 0, 20, 20, 400, 1050, '2018-12-22 00:00:00', 'No Comments'),
(17, 45, 'Salt(NACL)', 50, 20, 30, 20, 1000, 5000, '2018-12-29 00:00:00', 'No Comments      '),
(18, 35, 'KOH', 20, 20, 0, 20, 400, 1050, '2018-12-21 00:00:00', 'No Comments');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `StockID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
