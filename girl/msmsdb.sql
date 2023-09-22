-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 04:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `Type` tinyint(4) NOT NULL,
  `Mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`ID`, `Name`, `Email`, `Message`, `Type`, `Mobile`) VALUES
(2, 'gvsdgv', 'test@gmail.com', 'gbnvbn g ', 1, 0),
(4, 'Test', 'Test@gmail.com', 'fbfdbfd', 1, 0),
(5, 'Test 1', 'Test@gmail.com', 'TEST 1', 1, 0),
(6, 'Test', 'Test@gmail.com', 'rgrfgbrf', 1, 0),
(7, 'Test p', 'Testp@gmail.com', 'Test p', 3, 0),
(8, 'Test cacke', 'testcacke@gmail.com', 'testcacke', 1, 116585245),
(9, 'Test product', 'testproduct@gmail.com', 'Test product', 3, 116585254),
(10, 'Test Flower', 'testFlower@gmail.com', 'Test Flower', 2, 115685126);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 7898799798, 'tester1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2019-07-25 06:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE `tblappointment` (
  `ID` int(10) NOT NULL,
  `AptNumber` varchar(80) DEFAULT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `PhoneNumber` bigint(11) DEFAULT NULL,
  `AptDate` varchar(120) DEFAULT NULL,
  `AptTime` varchar(120) DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `RemarkDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`ID`, `AptNumber`, `Name`, `Email`, `PhoneNumber`, `AptDate`, `AptTime`, `Services`, `ApplyDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(1, '100', 'Anusha dilhansi', 'anu@gmail.com', 713456789, '10/30/2022', '1:30pm', 'Nail', '2022-08-02 16:13:13', 'Selected', '1', '2022-08-02 12:24:48'),
(2, '200', 'chathuri sudeshika', 'chathu@gmail.com', 7734235423, '8/27/2022', '1:30pm', 'v shape long hair', '2022-08-08 16:14:14', '', '', '2022-09-06 09:35:25'),
(3, '673615255', '22ee22222', 'fddgdvds@gmail.com', 343434, '2023-01-31', '12:02', 'Face Treatment', '2023-01-31 13:37:04', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Gender` enum('Female','Male','Transgender') DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`ID`, `Name`, `Email`, `MobileNumber`, `Gender`, `Details`, `CreationDate`, `UpdationDate`) VALUES
(2, 'hansi prabha', 'hansi@gmail.com', 78474474, 'Female', 'nail arts', '2022-07-11 06:10:02', '2022-10-25 07:00:49'),
(5, 'Test user', 'testuser@gmail.com', 1234567890, 'Female', 'Test', '2022-08-19 16:24:53', '2022-08-31 16:25:11'),
(8, 'dulkani  dilmini', 'dul@gmail.com', 777820369, 'Female', 'details..... this is detail.', '2022-10-06 13:47:25', NULL),
(9, 'user A', 'usera@gmail.com', 777820369, 'Female', 'hiiii', '2022-10-14 06:38:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(1, 2, 7, 600922156, '2022-07-18 05:48:58'),
(2, 2, 9, 600922156, '2021-07-21 07:48:58'),
(3, 5, 7, 777590972, '2021-07-23 05:16:41'),
(4, 5, 9, 777590972, '2021-07-23 05:16:41'),
(6, 7, 9, 631074383, '2021-07-25 17:26:51'),
(7, 7, 15, 631074383, '2021-07-25 17:26:51'),
(8, 2, 17, 653908739, '2022-10-14 07:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '        Our main focus is on quality and hygiene. Our salon is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you with a luxurious experience that leave you feeling relaxed and stress free. The specialities in the salon are, apart from regular bleachings and Facials, many types of hairstyles, Bridal and cine make-up and different types of Facials & fashion hair colourings. Confidently state that our company is a company that has kept its name since 5years. Our company has introduced many valuable products of very high quality manufactured under quality management. Largest number of clients have joined it. And through our company, you can get wedding planning, flower decoration, dress rent, cake products and beauty products for festive occasions. \r\n', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '        No:24/A, Blossom Salon & Spa, Colombo 07, Srilanka.', 'BlossomSalon@Gmail.Com', 1154665008, NULL, '8:30 am to 9:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Cost` varchar(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `Description`, `Cost`, `CreationDate`) VALUES
(1, 'Hair Cuting', 'Normal Cuting                                ', '500', '2022-07-10 07:22:38'),
(2, 'Layer', '', '1200', '2022-07-10 06:22:53'),
(3, 'V Shape', '', '900', '2019-07-25 11:23:10'),
(4, 'Hair Coloring', 'Long Hair', '6000', '2022-07-10 08:23:34'),
(5, 'Short Hair', '', '3500', '2022-07-10 10:23:47'),
(6, 'Hair Straightening', 'Changes the prices with hair type.', '-', '2022-07-10 11:24:01'),
(7, 'Hair Relaxing', 'Changes the prices with hair type.', '-', '2022-07-10 11:24:19'),
(8, 'Hair Setting', 'Changes the prices with hair type.', '-', '2022-07-10 11:24:38'),
(9, 'Hair Curly', 'Changes the prices with hair type.', '-', '2022-07-10 11:24:53'),
(10, 'Hair Treatment', 'You can get all the hair treatment unit from our salon. Changes the prices with hair type.', '-', '2022-07-10 11:25:08'),
(11, 'Facial', 'Full Facial', '2000', '2022-07-10 11:25:35'),
(12, 'Clean up', '', '1000', '2022-08-07 13:36:27'),
(13, 'Gold Facial', '', '2500', '2022-08-07 15:45:50'),
(14, 'Face Treatment', '', '1800', '2022-08-07 16:23:23'),
(15, 'Whitening Treatment', '', '4500', '2022-07-10 07:37:40'),
(16, 'Manicure', 'To get a beautiful nail line as you wish', '15 000', '2022-07-10 07:38:02'),
(17, 'Pedicure', 'You can get a high quality pedicure service.', '12 000', '2022-07-10 07:38:20'),
(18, 'Nail Arts', 'You can get all of nail arts in our salon.                              ', '10 000', '2022-07-10 07:22:38'),
(19, 'Threading', 'We give the high quality service you need.', '1000', '2022-10-09 08:03:02'),
(20, 'Waxing', 'We give the high quality service you need.', '1500', '2022-10-09 08:03:02'),
(21, 'Bride Dressing', 'Kandy Bride', '80 000', '2022-10-09 08:07:13'),
(22, 'Indian Bride', '', '90 000', '2022-10-09 08:07:13'),
(24, 'Makeup', 'Simple makeup', '800', '2022-10-06 08:19:39'),
(25, 'piecing', 'Ear and nose point', '1000', '2022-10-09 08:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscriber`
--

CREATE TABLE `tblsubscriber` (
  `ID` int(5) NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `DateofSub` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubscriber`
--

INSERT INTO `tblsubscriber` (`ID`, `Email`, `DateofSub`) VALUES
(1, 'ani@gmail.com', '2021-07-16 07:32:33'),
(2, 'rahul@gmail.com', '2021-07-16 07:32:33'),
(3, 'ganesh@gmail.com', '2021-07-21 07:36:46'),
(4, 'ak@gmail.com', '2021-07-25 17:25:29'),
(5, 'usera@gmail.com', '2022-10-06 09:56:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblappointment`
--
ALTER TABLE `tblappointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsubscriber`
--
ALTER TABLE `tblsubscriber`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblappointment`
--
ALTER TABLE `tblappointment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblsubscriber`
--
ALTER TABLE `tblsubscriber`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
