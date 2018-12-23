-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 11:26 PM
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
  `NetValue` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`oid`, `pid`, `Name`, `NetWeight`, `NetValue`) VALUES
(3, 12, 'AlfhaBeta', 10, 285),
(3, 13, 'Head&Shoulder', 5, 176.667),
(5, 10, 'AlfhaBeta', 4, 1256),
(5, 11, 'Brighto Paints', 5, 663),
(5, 8, 'Head&Shoulder', 8, 3571.2),
(5, 14, 'PaintFant', 20, 150),
(5, 9, 'Sunsilk', 30, 1022.5),
(6, 10, 'AlfhaBeta', 6, 1884),
(6, 11, 'Brighto Paints', 3, 397.8),
(6, 8, 'Head&Shoulder', 2, 892.8),
(6, 13, 'Head&Shoulder', 3, 106),
(6, 14, 'PaintFant', 20, 150),
(6, 9, 'Sunsilk', 30, 1022.5),
(7, 11, 'Brighto Paints', 2, 265.2),
(7, 13, 'Head&Shoulder', 7, 247.333),
(7, 14, 'PaintFant', 20, 150),
(7, 9, 'Sunsilk', 10, 340.833),
(8, 12, 'AlfhaBeta', 5, 142.5),
(8, 9, 'Sunsilk', 10, 340.833),
(8, 14, 'PaintFant', 20, 150);

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
  `Selling_Price` float NOT NULL,
  `comments` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `Reference`, `CustomerID`, `OrderDate`, `DeliverDate`, `Discount`, `GrandTotal`, `Selling_Price`, `comments`) VALUES
(3, 'Texas order', 48, '2018-12-01 00:00:00', '2018-12-26 00:00:00', 20, 441.667, 6000, 'No Comments'),
(5, 'Raffaan Order', 16, '2018-11-28 00:00:00', '2019-01-05 00:00:00', 88, 6574.7, 7500, 'No Comments'),
(6, 'Arham Production 101', 48, '2018-11-25 00:00:00', '2018-11-30 00:00:00', 20, 4433.1, 10000, 'No Comments'),
(7, 'Dairy Wall Street Order ', 56, '2018-11-24 00:00:00', '2019-01-03 00:00:00', 22, 981.366, 80800, 'No Comments'),
(8, 'Gulzaib @101_Order', 16, '2018-11-25 00:00:00', '2018-11-30 00:00:00', 100, 533.333, 10000, 'No Comments');

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
(9, 'Sunsilk', 120, 80, 40, 34.0833, '2018-12-07 00:00:00', 'No Comments'),
(10, 'AlfhaBeta', 10, 10, 0, 314, '2018-12-05 00:00:00', 'No Comments'),
(11, 'Brighto Paints', 10, 10, 0, 132.6, '2018-12-14 00:00:00', 'No Comments'),
(12, 'AlfhaBeta', 20, 15, 5, 28.5, '2018-12-07 00:00:00', 'No Comments'),
(13, 'Head&Shoulder', 15, 15, 0, 35.3333, '2018-12-07 00:00:00', 'No Comments'),
(14, 'PaintFant', 120, 80, 40, 7.5, '2018-12-14 00:00:00', 'No Comments');

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
  `StockDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`StockID`, `SupplierID`, `StockName`, `QuantityPurchased`, `QuantityIssued`, `QuantityAvailable`, `PriceperKG`, `TotalPrice`, `StockDate`, `comments`) VALUES
(8, 35, 'Sulphuric Acid', 50, 50, 0, 12, 600, '2018-11-08 00:00:00', 'y6gtfrdyhgtfredy6gtfred            '),
(9, 13, 'Sulphuric Acid', 12, 12, 0, 10, 120, '2018-11-17 00:00:00', 'vrfcdbtvrcfex'),
(10, 45, 'Liquid Nitrogen', 10, 10, 0, 10, 100, '2018-11-24 00:00:00', 'hbtgvcrfedx'),
(11, 51, 'Sodium carbonate Pentahidrate', 12, 12, 0, 20, 240, '2018-11-01 00:00:00', 'No Comments'),
(12, 36, 'Liquid Nitrogen', 30, 30, 0, 100, 3000, '2018-11-01 00:00:00', 'No Comments                  '),
(13, 13, 'Liquid Nitrogen', 12, 12, 0, 5, 60, '2018-11-14 00:00:00', 'No Comments'),
(14, 13, 'Alumunium', 100, 100, 0, 100, 10000, '2018-12-19 00:00:00', 'No Comments'),
(15, 13, 'Salt(NACL)', 30, 30, 0, 10, 300, '2018-12-12 00:00:00', 'No Comments'),
(16, 13, 'KOH', 20, 0, 20, 20, 400, '2018-12-22 00:00:00', 'No Comments'),
(17, 45, 'Salt(NACL)', 50, 20, 30, 20, 1000, '2018-12-29 00:00:00', 'No Comments'),
(18, 35, 'KOH', 20, 20, 0, 20, 400, '2018-12-21 00:00:00', 'No Comments');

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
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
