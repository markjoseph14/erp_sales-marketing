-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 04:03 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `somstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `order_ID` int(255) NOT NULL,
  `Full_Name` varchar(25) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Postal_Code` varchar(55) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `Country` varchar(55) NOT NULL,
  `City` varchar(55) NOT NULL,
  `Phone` varchar(55) NOT NULL,
  `Warehouse_ID` int(255) NOT NULL,
  `Dilivery_Address` varchar(75) NOT NULL,
  `Total_Amount` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`order_ID`, `Full_Name`, `Email`, `Postal_Code`, `Address`, `Country`, `City`, `Phone`, `Warehouse_ID`, `Dilivery_Address`, `Total_Amount`) VALUES
(1, 'Mark joseph', 'mjsalgado02@gmail.com', '392843', 'Bilaran', 'PH', 'Batangas', '09979916654', 150, 'Bilaran', ''),
(3, 'Mark joseph', 'mjsalgado02@gmail.com', '392843', 'Bilaran', 'PH', 'Batangas', '09979916654', 150, 'Bilaran', ''),
(4, 'Mark joseph', 'mjsalgado02@gmail.com', '392843', 'Bilaran', 'PH', 'Batangas', '09979916654', 150, 'Bilaran', ''),
(5, 'Mark joseph', 'mjsalgado02@gmail.com', '392843', 'Bilaran', 'PH', 'Batangas', '09979916654', 150, 'Bilaran', ''),
(6, 'Mark joseph', 'mjsalgado02@gmail.com', '392843', 'Bilaran', 'PH', 'Batangas', '09979916654', 150, 'Bilaran', ''),
(7, 'Mark joseph', 'mjsalgado02@gmail.com', '392843', 'Bilaran', 'PH', 'Batangas', '09979916654', 150, 'Bilaran', ' Php 350'),
(8, 'Mark joseph', 'mjsalgado02@gmail.com', '392843', 'Bilaran', 'PH', 'Batangas', '9979916654', 7, 'Bilaran', ' Php 350'),
(9, 'Mark joseph', 'mjsalgado02@gmail.com', '392843', 'Bilaran', 'PH', 'Batangas', '9979916654', 150, 'Bilaran', ' Php 700'),
(10, 'Mark joseph', 'mjsalgado02@gmail.com', '392843', 'Bilaran', 'PH', 'Batangas', '9979916654', 150, 'Bilaran', ' Php 700');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(255) NOT NULL,
  `productName` varchar(77) NOT NULL,
  `Category_ID` int(255) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Warehouse_ID` int(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `productName`, `Category_ID`, `Model`, `Type`, `Warehouse_ID`, `Description`, `Price`, `Picture`, `quantity`) VALUES
(1, 'Black Tie', 44, 'clothes', 'Clothes', 7, '', '350.00', '33.png', 100),
(2, 'Business Casual', 44, 'clothes', 'clothes', 7, '', '250.00', '44.png', 100),
(3, 'Waistcoat', 44, 'clothes', 'clothes', 7, '', '250.00', '55.png', 100),
(4, 'Semi Formal', 42, 'clothes', 'clothes', 8, '', '300.00', '66.png', 100),
(5, 'Formal Wear', 42, 'clothes', 'clothes', 8, '', '200.00', '77.png', 100),
(6, 'Casual Wear', 42, 'clothes', 'clothes', 8, '', '400.00', '4.png', 100),
(7, 'Dress for kids', 42, 'clothes', 'clothes', 8, '', '180.00', '2.png', 100),
(8, 'T-Shirt for kids', 42, 'clothes', 'clothes', 8, '', '225.00', '3.png', 100),
(9, 'Kids Suit', 42, 'clothes', 'clothes', 8, '', '230.00', 't1.jpg', 100),
(10, 'Kids Suit', 42, 'clothes', 'clothes', 8, '', '350.00', 't2.jpg', 100),
(11, 'Kids Suit', 42, 'clothes', 'clothes', 8, '', '400.00', 't3.jpg', 100),
(12, 'Kids Suit', 42, 'clothes', 'clothes', 8, '', '435.00', 't5.jpg', 100),
(13, 'Casual Wear', 42, 'clothes', 'clothes', 8, '', '250.00', 't6.jpg', 100),
(14, 'Casual Wear', 42, 'clothes', 'clothes', 8, '', '300.00', 't7.jpg', 100),
(15, 'Casual Wear', 42, 'clothes', 'clothes', 8, '', '325.00', 't8.jpg', 100),
(16, 'Casual Wear for kids', 42, 'clothes', 'clothes', 8, '', '150.00', 't9.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`name`, `email`, `contact`, `subject`) VALUES
('Joseph', 'jsalgado02@gmail.com', '09556233938', 'basta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `attainment` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`fname`, `lname`, `birthday`, `gender`, `contact`, `email`, `work`, `skills`, `department`, `position`, `attainment`, `age`, `date`, `photo`) VALUES
('Mark', 'joseph', '2018-12-31', 'Male', '09979916654', 'mjsalgado02@gmail.com', '9979916654', 'programming', 'Marketing and Sales', 'Vice President for Marketing', 'College Undergraduate', 19, '2018-12-31', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sign`
--

CREATE TABLE `tb_sign` (
  `userid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sign`
--

INSERT INTO `tb_sign` (`userid`, `fname`, `lname`, `contact`, `email`, `address`, `username`, `password`) VALUES
(3, 'Mark', 'joseph', '09979916654', 'mjsalgado02@gmail.com', 'Bilaran', 'basta', 'basta');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `access`) VALUES
(1, 'admin', 'admin', 1),
(2, 'user', 'user', 2);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `Warehouse_ID` int(255) NOT NULL,
  `productname` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `PostalCode` varchar(55) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Warehouse` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`Warehouse_ID`, `productname`, `City`, `Address`, `PostalCode`, `Email`, `Warehouse`) VALUES
(7, 'blacktie', 'Hargeisa', 'Hargeisa', 'Hr103', 'dollarstore@dollor.com', 'Som Food Stuff'),
(8, '', 'Hargeisa', 'Hargeisa', 'Hr202', 'ominco@omar.com', 'Som Bavarages'),
(150, 'Philippines', 'Batangas', 'Bilaran', '4231', 'mjsalgado02', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`order_ID`) USING BTREE,
  ADD KEY `Warehouse_ID` (`Warehouse_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Category_ID` (`Category_ID`),
  ADD KEY `Warehouse_ID` (`Warehouse_ID`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`fname`);

--
-- Indexes for table `tb_sign`
--
ALTER TABLE `tb_sign`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `fullname` (`fname`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`Warehouse_ID`) USING BTREE,
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `PostalCode` (`PostalCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `order_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_sign`
--
ALTER TABLE `tb_sign`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `Warehouse_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Warehouse_ID`) REFERENCES `warehouse` (`Warehouse_ID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Category_ID`) REFERENCES `category` (`Category_ID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Warehouse_ID`) REFERENCES `warehouse` (`Warehouse_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
