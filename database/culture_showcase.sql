-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 05:51 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `culture_showcase`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` varchar(30) NOT NULL,
  `CategoryName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`) VALUES
('category1', 'Clothes'),
('category2', 'Instruments'),
('category3', 'Woodcurving'),
('category4', 'Lacquerware'),
('category5', 'Painting'),
('category6', 'Blacksmith');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phno` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Name`, `Email`, `Phno`, `Address`, `Password`) VALUES
('customer1', 'Mg Mg', 'mg@gmail.com', '09256577934', 'Monywa', 'mgmg1221'),
('customer2', 'Mya Mya', 'mya@gmail.com', '09976568347', 'Mandalay', 'myamya1221'),
('customer3', 'Aye Aye', 'aye@gmail.com', '09440607823', 'Yangon', 'ayeaye1221'),
('customer4', 'Hla Hla', 'hla@gmail.com', '09343253423', 'Yangon', 'hlahla1221'),
('customer5', 'Mg Mya', 'mgmya@gmail.com', '09987776345', 'Pathein', 'mgmya1221'),
('customer6', 'naing', 'naing1212@gmail.com', '09987776345', 'Monywa', 'nainglinn'),
('19', 'aaaaaaa', 'a@gmail.com', '1', 'w', '7ef554e8fd58275180c70b02d13c87'),
('23', 'x', 'x@gmail.com', 'a', 'a', 'aaaaaa'),
('24', 'aa', 's@gmail.com', 's', 's', '24071be1d50298ad79e18d861f8f403f'),
('24', 'aaaaaa', 'd@gmail.com', 'w', 'w', '68a809165bb32667d55b62677b2cccb9'),
('24', 'htet', 'htet@gmail.com', '4', 'ee', '14e1b600b1fd579f47433b88e8d85291'),
('24', 'naing', 'naing@gmail.com', '774568322', 'four mile', '14e1b600b1fd579f47433b88e8d85291');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `DeliveryID` varchar(30) NOT NULL,
  `OrderID` varchar(30) NOT NULL,
  `DeliveryDate` date NOT NULL,
  `IsDeliver` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`DeliveryID`, `OrderID`, `DeliveryDate`, `IsDeliver`) VALUES
('gfgfdg', 'dfgfd', '2018-11-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `OrderID` varchar(30) NOT NULL,
  `CustomerID` varchar(30) NOT NULL,
  `TotalPrice` int(20) NOT NULL,
  `TotalQty` int(30) NOT NULL,
  `OrderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OrderdetailID` varchar(30) NOT NULL,
  `OrderID` varchar(30) NOT NULL,
  `ProductID` varchar(30) NOT NULL,
  `SubTotalPrice` int(15) NOT NULL,
  `SubTotalQty` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `OwnerID` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(30) NOT NULL,
  `CategoryID` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` int(20) NOT NULL,
  `Description` varchar(600) NOT NULL,
  `OwnerID` varchar(30) NOT NULL,
  `Picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `CategoryID`, `Name`, `Price`, `Description`, `OwnerID`, `Picture`) VALUES
(3, 'category2', 'Oozi', 10000, 'The pot-drum (ou:zi) is a single-headed drum on a long hollow stalk which is flared at the bottom. The single head has a membrane tightly stretched over a round frame. The pot drum is tuned by sticking a piece of tuning dough (pa’sa) made of rice and ash to the head.', 'owner2', 'ÿØÿà\0JFIF\0\0\0ÿí„Photoshop 3.0\08BIMí\0\0\0\0\0\0\0\0\0\0\0\0\08BIM\r\0\0\0\0\0\0\0\0x8BIMó\0\0\0\0\0\0\0\0\0\0\0\0\08BIM\n\0\0\0\0\0\0\08BIM\'\0\0\0\0\0\n\0\0\0\0\0\0\0\08BIMõ\0\0\0\0\0H\0/ff\0\0lff\0\0\0\0\0\0\0/ff\0\0¡™š\0\0\0\0\0\0\02\0\0\0\0Z\0\0\0\0\0\0\0\0\05\0\0\0\0-\0\0\0\0\0\0\0\08BIMø\0\0\0\0\0p\0\0ÿÿÿÿÿÿÿÿÿÿÿÿÿÿ'),
(4, '', 'bmw', 500000, 'bmw', '', 'bmw.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`DeliveryID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderdetailID`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`OwnerID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
