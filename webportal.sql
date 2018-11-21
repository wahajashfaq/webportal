-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 08:42 PM
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
(1, 'Husnain', 'Ajmal', 'husnain.ajmal80@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(2, 'Wahaj', 'Ashfaq', 'Wahaj.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(3, 'Ali', 'Ajmal', 'AliAjmal80@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(4, 'Werad', 'Ashfaq', 'Werad@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(5, 'Gulzaib', 'Malik', 'Gullo@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(6, 'Ali', 'Butt', 'Butt@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(7, 'Khawar', 'Hussain', 'Khawar@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(8, 'Arham', 'shah', 'Arham0@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(9, 'Mudasar', 'Zaman', 'Mudasar@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(10, 'Nomi', 'Shah', 'nomi@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(11, 'Ghauri', 'Mannan', 'Ghauri@gmail.com', '03030966241', 'Supplier', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(12, 'Test1', 'testing', 'Gullo@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(13, 'Test2', 'testing2', 'Butt@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(14, 'KhawarBhai', 'HussainBHai', 'Khawar@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(15, 'ArhamG', 'boss', 'Arham@gmail.com', '03030966241', 'Customer', 'Canal Bank', '2018-11-18 00:00:00', 'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging'),
(16, 'Ashar', 'Bhutta', 'Bhutta@gmail.com', '030303030', 'Customer', 'rfcxrfxcedfx', '2018-11-23 00:00:00', 'crfceerfxc');

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
  `EntryDate` datetime DEFAULT NULL
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
(10, 'Basit', 'Riaz', '123456', 'Basit@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(11, 'Usama', 'Muzammil', '123456', 'Usama@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(12, 'Ghulam', 'tajummul', '123456', 'Ghulam@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(13, 'Usman', 'Javaid', '123456', 'Mani@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-18 00:00:00'),
(14, 'Ajmal', 'Shad', '321123', 'Ajmal@gmail.com', '03030966241', 'Employee', 'Haraspura ringroad Lahore', '2018-11-21 00:00:00'),
(15, 'Ajmal', 'Shad', '321123', 'Ajmal@gmail.com', '03030966241', 'Admin', 'Haraspura ringroad Lahore', '2018-11-21 00:00:00'),
(16, 'Kami', 'Chatti', '12346', 'kami@gmail.com', '03036066003', NULL, 'ezedxex', '2018-11-23 00:00:00'),
(17, 'Owais', 'Dar', '123aaa', 'Owais@gmail.com', '03030303030', 'Admin', 'Karachi', '2018-11-02 00:00:00'),
(18, 'zainab', 'Butt', '3333333', 'Zainab@gmail.com', '0030303030', NULL, 'edxedxedx', '2018-11-23 00:00:00'),
(19, 'Afzaal', 'Saab', '1313', 'abc@gmail.com', '1616511', 'Admin', 'Rawalpindi Town maansehra bla bla bla', '2018-11-10 00:00:00'),
(20, 'Afzaal', 'Saab', '1313', 'Afzaal@gmail.com', '03074343683', 'Admin', 'canal Bank Housing scheme', '2018-11-21 00:00:00'),
(21, 'Afzaal', 'Saab', '1313', 'abc@gmail.com', '1616511', 'Admin', 'fcfcrfcrfcrf', '2018-11-16 00:00:00'),
(22, 'Afzaal', 'Saab', '1313', 'abc@gmail.com', '1616511', 'Admin', 'fcfcrfcrfcrf', '2018-11-22 00:00:00'),
(23, 'Ahmad', 'Riaz', '123456', 'Ahmad@gmail.com', '09007861', 'Employee', 'Johar Town', '2018-11-08 00:00:00'),
(24, 'admin', 'Admin', 'admin', 'Admin@gmail.com', '03030966241', 'Employee', 'Lahore', '2018-11-20 00:00:00'),
(25, 'Bilal', 'Khan', '1222123', 'khan@gmail.com', '03030966241', 'Admin', 'Taj Bagh', '2018-11-22 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
