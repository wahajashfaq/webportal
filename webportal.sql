-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2019 at 11:02 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

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

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Utype` varchar(20) DEFAULT NULL,
  `uaddress` varchar(100) DEFAULT NULL,
  `EntryDate` datetime DEFAULT NULL,
  `comments` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `Name`, `Lname`, `Email`, `Utype`, `uaddress`, `EntryDate`, `comments`) VALUES
(-1, 'Default ', 'User', 'non@gmail.com', 'Supplier', 'Non', '2019-01-01 00:00:00', 'NOn'),
(13, 'Wahaj', 'Ashfaq', 'WahajAshfaq.com', 'Supplier', 'Canal Bank', '2019-02-02 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging               '),
(16, 'Gulzaib', 'Malik', 'Gullo@gmail.com', 'Customer', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(32, 'Ali', 'Butt', 'Butt@gmail.com', 'Customer', 'Canal Bank', '2018-11-23 00:00:00', '     Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging     '),
(35, 'Mudasar', 'Zaman', 'Mudasar@gmail.com', 'Supplier', 'H# 7 St# 12 Canal Bank Housing scheme Harbanspura Lahore ', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging                    '),
(36, 'Nomi', 'Shah', 'nomi@gmail.com', 'Supplier', 'Canal Bank', '2019-02-02 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging               '),
(45, 'Werad', 'Ashfaq', 'Werad@gmail.com', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging     '),
(48, 'Khawar', 'Hussain', 'Khawar@gmail.com', 'Customer', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(50, 'Mudasar', 'Zaman', 'Mudasar@gmail.com', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(51, 'Nomi', 'Shah', 'nomi@gmail.com', 'Supplier', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(56, 'ArhamG', 'boss', 'Arham@gmail.com', 'Customer', 'Canal Bank', '2018-11-23 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(57, 'shayan', 'Bhutta', 'shayan.Bhutta@gmail.com', 'Supplier', 'bahria town B Block Near Eiffel tower and Bilawal house', '2019-02-05 00:00:00', 'No comments                         ');

-- --------------------------------------------------------

--
-- Table structure for table `member_contacts`
--

DROP TABLE IF EXISTS `member_contacts`;
CREATE TABLE IF NOT EXISTS `member_contacts` (
  `m_id` int(11) NOT NULL,
  `contacts` varchar(30) NOT NULL,
  KEY `m_id` (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_contacts`
--

INSERT INTO `member_contacts` (`m_id`, `contacts`) VALUES
(56, '03014402040'),
(56, '03030966241'),
(13, '030144921148'),
(36, '0325599622'),
(35, '03244992996'),
(35, '0303099574'),
(57, '03456598525');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `oid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `NetWeight` float DEFAULT NULL,
  `NetValue` float DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `Reference` varchar(50) DEFAULT NULL,
  `CustomerID` int(11) NOT NULL,
  `OrderDate` datetime DEFAULT NULL,
  `DeliverDate` datetime DEFAULT NULL,
  `Discount` float DEFAULT NULL,
  `GrandTotal` float NOT NULL,
  `Due_Payment` float NOT NULL,
  `comments` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

DROP TABLE IF EXISTS `productdetails`;
CREATE TABLE IF NOT EXISTS `productdetails` (
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
(5, 2, 'Stock 1', 10, 90, 10, 100);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` int(12) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(50) DEFAULT 'Default Product',
  `QuantityProduced` int(12) DEFAULT '0',
  `QuantityIssued` int(12) DEFAULT '0',
  `QuantityAvailable` int(12) DEFAULT '0',
  `PriceperKG` float DEFAULT '0',
  `ProductDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `comments` varchar(500) DEFAULT 'No Comments',
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `QuantityProduced`, `QuantityIssued`, `QuantityAvailable`, `PriceperKG`, `ProductDate`, `comments`) VALUES
(5, 'product1', 100, 0, 100, 1, '2019-03-08 00:00:00', 'No Comments');

-- --------------------------------------------------------

--
-- Table structure for table `productsname`
--

DROP TABLE IF EXISTS `productsname`;
CREATE TABLE IF NOT EXISTS `productsname` (
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productsname`
--

INSERT INTO `productsname` (`name`) VALUES
('product1'),
('product2');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `StockID` int(12) NOT NULL AUTO_INCREMENT,
  `SupplierID` int(11) NOT NULL,
  `StockName` varchar(30) DEFAULT NULL,
  `QuantityPurchased` int(12) DEFAULT NULL,
  `QuantityIssued` int(12) DEFAULT NULL,
  `QuantityAvailable` int(12) DEFAULT NULL,
  `PriceperKG` float DEFAULT NULL,
  `TotalPrice` float DEFAULT NULL,
  `owe` int(11) DEFAULT NULL,
  `StockDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `comments` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`StockID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`StockID`, `SupplierID`, `StockName`, `QuantityPurchased`, `QuantityIssued`, `QuantityAvailable`, `PriceperKG`, `TotalPrice`, `owe`, `StockDate`, `comments`) VALUES
(2, 13, 'Stock 1', 100, 10, 90, 10, 1000, 1000, '2019-03-09 00:00:00', 'stock 1'),
(3, 35, 'Stock 2', 100, 0, 100, 10, 1000, 1000, '2019-03-09 00:00:00', 'stock 2');

-- --------------------------------------------------------

--
-- Table structure for table `stocksname`
--

DROP TABLE IF EXISTS `stocksname`;
CREATE TABLE IF NOT EXISTS `stocksname` (
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocksname`
--

INSERT INTO `stocksname` (`name`) VALUES
('Stock 1'),
('Stock 2');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`name`) VALUES
('kg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `u_pass` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `ContactNumber` varchar(50) DEFAULT NULL,
  `Utype` varchar(20) DEFAULT NULL,
  `uaddress` varchar(100) DEFAULT NULL,
  `EntryDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_ID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

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
(24, 'admin', 'Admin', 'admin', 'Admin@gmail.com', '03030966241', 'Admin', 'Canal Bank Lahore', '2018-11-20 00:00:00'),
(25, 'Bilal', 'Khan', '1222123', 'khan@gmail.com', '03030966241', 'Admin', 'Taj Bagh', '2018-11-22 00:00:00'),
(27, 'Ali', 'Ajmal', '123', 'ali@gmail.com', '0303030303', 'Employee', 'kanjar khana', '2018-11-20 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
