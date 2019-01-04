-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2018 at 01:56 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounting_manager`
--

CREATE TABLE `accounting_manager` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting_manager`
--

INSERT INTO `accounting_manager` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`) VALUES
(1, 'acc_manager', '$2y$10$501QVMK0Pm.nWBGOoFyvbOGeEy44mERMjIJy4w1tpmxRhxQsiG/1e', 'Accounting', 'Manager', 'IMG_20170922_135750_221.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'admin', '$2y$10$501QVMK0Pm.nWBGOoFyvbOGeEy44mERMjIJy4w1tpmxRhxQsiG/1e', 'Admin', ''),
(2, 'admin', 'admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(200) NOT NULL,
  `date` text NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES
(10, 'GHS039657841', '2018-12-20', '22:50:45', 0, '00:00:00', 0),
(11, 'GFS012457698', '2018-12-26', '23:08:14', 0, '00:00:00', 0),
(12, 'GHS039657841', '2018-12-21', '19:36:15', 0, '00:00:00', 0),
(13, 'GFS012457698', '2018-12-21', '19:36:56', 0, '00:00:00', 0),
(14, 'DUT894273160', '2018-12-22', '01:00:00', 0, '01:35:04', 0.58333333333333);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashadvance`
--

CREATE TABLE `cashadvance` (
  `id` int(11) NOT NULL,
  `date_advance` date NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `category_name`) VALUES
(1, 'Laptops'),
(2, 'Desktop PC\'s'),
(3, 'Tablets');

-- --------------------------------------------------------

--
-- Table structure for table `cfo`
--

CREATE TABLE `cfo` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cfo`
--

INSERT INTO `cfo` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`) VALUES
(1, 'cfo', '$2y$10$501QVMK0Pm.nWBGOoFyvbOGeEy44mERMjIJy4w1tpmxRhxQsiG/1e', 'Chief Financial', 'Officer', 'IMG_20170922_135750_221.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `userid` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userid`, `customer_name`, `address`, `contact`) VALUES
(10, 'pwde humigi na damit', 'Nasugbu,Batangas', '09354803361');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `description`, `amount`) VALUES
(1, 'SSS', 100),
(2, 'Pagibig', 150),
(3, 'PhilHealth', 150),
(4, 'Late', 15),
(5, 'Absence', 150),
(6, 'Undertime', 15);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(255) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `dep` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `username`, `password`, `fname`, `lname`, `dep`) VALUES
(1, 'marketing', 'sales', '', '', 'Marketing & Sales'),
(2, 'Human Resource', 'Management', '', '', 'Human Resource Management'),
(3, 'Supply Chain', 'Management', '', '', 'Supply Chain Management'),
(4, 'Accounting', 'Finance', '', '', 'Account and Finance');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `skills` text NOT NULL,
  `edu_attain` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `age` int(100) NOT NULL,
  `birthday` date NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` text NOT NULL,
  `position_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `approved` text NOT NULL,
  `approved_date` date NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_apply` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `del_status` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_id`, `password`, `firstname`, `lastname`, `skills`, `edu_attain`, `address`, `email`, `age`, `birthday`, `contact_info`, `gender`, `department`, `position_id`, `schedule_id`, `approved`, `approved_date`, `photo`, `date_apply`, `del_status`, `start_date`, `end_date`) VALUES
(7, 'DUT894273160', 'iyamiyam123', 'iyam', 'dastas', 'mage', 'Elementary Undergraduate', 'Mulingbayan St. Barangay VI Na', 'gilbertbryansimon@gmail.com', 14, '1938-12-21', '09068157319', 'Female', 'Accounting and Finance', 5, 1, 'Yes', '2014-12-18', '', '2018-12-21 04:39:19', 'Permanent', '0000-00-00', '0000-00-00'),
(8, 'GHS039657841', 'danty123', 'dan', 'martin', 'mage', 'High School Undergraduate', 'Mulingbayan St. Barangay VI Na', 'gilbertbryansimon@gmail.com', 12, '2018-12-12', '09068157319', 'Male', 'Supply Chain Management', 17, 3, 'Yes', '2018-12-18', '', '2018-12-21 10:20:36', 'Permanent', '0000-00-00', '0000-00-00'),
(9, 'OMQ501428936', 'giosryanreloj12', 'gios', 'reloj', 'assasin', 'High School Undergraduate', 'Mulingbayan St. Barangay VI Na', 'giosreloj@gmail.com', 14, '2018-12-27', '09068157319', 'Male', 'Human Resource Management', 18, 0, 'Yes', '2018-12-19', '', '2018-12-19 08:01:57', '', '0000-00-00', '0000-00-00'),
(10, 'GFS012457698', '123', 'jayson', 'martisano', 'assasin', 'Elementary Undergraduate', 'Mulingbayan St. Barangay VI Na', 'gilbertbryansimon@gmail.com', 12, '2019-01-18', '09068157319', 'Female', 'Supply Chain Management', 18, 3, 'Yes', '2018-12-19', '', '2018-12-21 04:54:17', 'Temporary', '2018-12-12', '2018-12-29'),
(17, '', 'simonsimon', 'mon', 'dastas', 'sadas', 'Elementary Graduate', 'Mulingbayan St. Barangay VI Na', 'gilbertbryansimon@gmail.com', 15, '2018-12-21', '09068157319', 'Male', 'Supply Chain Management', 9, 0, '', '0000-00-00', '', '2018-12-22 00:19:12', '', '0000-00-00', '0000-00-00'),
(18, '', 'mavinravela', 'ravela', 'dastas', 'asda', 'High School Undergraduate', 'Mulingbayan St. Barangay VI Na', 'gilbertbryansimon@gmail.com', 11, '2018-12-07', '09068157319', 'Female', 'Supply Chain Management', 18, 0, '', '0000-00-00', '', '2018-12-22 00:48:05', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `headhr`
--

CREATE TABLE `headhr` (
  `id` int(255) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `department` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headhr`
--

INSERT INTO `headhr` (`id`, `username`, `password`, `department`) VALUES
(1, 'headhr', 'headhr', 'Human Resource Management');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventoryid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `action` varchar(50) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `inventory_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventoryid`, `userid`, `action`, `productid`, `quantity`, `inventory_date`) VALUES
(1, 2, 'Purchase', 4, 10, '2017-09-18 09:32:01'),
(2, 2, 'Purchase', 20, 10, '2017-09-18 09:32:01'),
(3, 2, 'Purchase', 1, 99, '2017-09-18 09:32:01'),
(4, 2, 'Purchase', 2, 20, '2017-09-18 09:32:01'),
(5, 2, 'Purchase', 2, 10, '2017-09-18 09:34:29'),
(6, 2, 'Purchase', 2, 10, '2017-09-18 11:09:21'),
(7, 2, 'Purchase', 3, 12, '2017-09-18 11:09:22'),
(8, 2, 'Purchase', 4, 8, '2017-09-18 11:09:22'),
(9, 1, 'Add Product', 27, 10, '2017-09-18 13:59:25'),
(10, 1, 'Update quantity', 27, 20, '2017-09-18 14:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(255) NOT NULL,
  `employee_id` text NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `reason` text NOT NULL,
  `department` text NOT NULL,
  `dep_status` text NOT NULL,
  `hr_status` text NOT NULL,
  `headhr_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `employee_id`, `date_start`, `date_end`, `reason`, `department`, `dep_status`, `hr_status`, `headhr_status`) VALUES
(2, 'LPH619703525', '2018-12-19', '2018-12-28', 'Nagsusuka at tae', 'Marketing & Sales', 'Approved', 'Approved', 'Approved'),
(3, 'GHS039657841', '2018-12-27', '2018-12-27', 'aabay ', 'Supply Chain Management', 'Approved', 'Approved', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `hours` double NOT NULL,
  `rate` double NOT NULL,
  `date_overtime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `department` text NOT NULL,
  `description` varchar(150) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `department`, `description`, `rate`) VALUES
(4, 'Accounting & Finance', 'System Admin', 300),
(5, 'Accounting & Finance', 'Accountant', 100),
(6, 'Accounting & Finance', 'Accounting Assistant', 200),
(7, 'Accounting & Finance', 'Accounting Manager', 500),
(8, 'Accounting & Finance', 'Account Payable Clerk', 400),
(9, 'Accounting & Finance', 'Account Receivable Clerk', 400),
(10, 'Accounting & Finance', 'Book Keeping', 250),
(11, 'Accounting & Finance', 'Budget Analyst', 300),
(12, 'Accounting & Finance', 'Certified Internal Auditor', 300),
(13, 'Accounting & Finance', 'Chief Financial Officer', 1000),
(14, 'Accounting & Finance', 'CPA', 350),
(15, 'Accounting & Finance', 'Forensic Accounting', 300),
(16, 'Accounting & Finance', 'Government Accounting', 500),
(17, 'Accounting & Finance', 'Payroll Clerk', 400),
(18, 'Accounting & Finance', 'Staff Accountant', 300),
(19, 'Accounting & Finance', 'Tax Accountant', 300),
(20, 'Human Resource Management ', 'Administrative Assistant.', 100),
(21, 'Human Resource Management ', 'Administrative Manager', 200),
(22, 'Human Resource Management', 'Application Specialist', 300),
(23, 'Human Resource Management', 'Assistant Director, Employee', 200),
(24, 'Human Resource Management', 'Assistant Director  of Human Resources', 200),
(25, 'Human Resource Management', 'Assistant HR Manager', 300),
(26, 'Human Resource Management', 'HR Manager', 400),
(27, 'Supply Chain Management', 'Planner', 200),
(28, 'Supply Chain Management', 'Buyer Planner', 300),
(29, 'Supply Chain Management', 'Master Scheduler', 350),
(30, 'Supply Chain Management', 'Supply Chain Manager', 400),
(31, 'Supply Chain Management', 'Logistic Manager', 400),
(32, 'Supply Chain Management', 'Materials Manager', 300),
(33, 'Supply Chain Management', 'Purchasing Manager', 350),
(34, 'Supply Chain Management', 'Procurement Manager', 300);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` double NOT NULL,
  `product_qty` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `supplierid` int(11) NOT NULL,
  `supplier_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `product_name`, `product_price`, `product_qty`, `photo`, `supplierid`, `supplier_name`) VALUES
(37, 'Letsong Kawali', 1000, 10, '', 0, 'adidas'),
(39, 'Letsong Kawali', 0, 0, '', 0, ''),
(40, 'Letsong Kawali', 0, 0, '', 0, ''),
(41, 'Letsong Kawali', 0, 0, '', 0, ''),
(42, 'Letsong Kawali', 0, 0, '', 0, ''),
(43, 'Letsong Kawali', 1000, 3, '', 0, 'adidas');

-- --------------------------------------------------------

--
-- Table structure for table `product_marketing`
--

CREATE TABLE `product_marketing` (
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
-- Dumping data for table `product_marketing`
--

INSERT INTO `product_marketing` (`Product_ID`, `productName`, `Category_ID`, `Model`, `Type`, `Warehouse_ID`, `Description`, `Price`, `Picture`, `quantity`) VALUES
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
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `productname` text NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `productname`, `qty`, `price`, `date`) VALUES
(1, 'SAbon', 2, 150, '2018-12-21 22:55:07'),
(2, 'Black Tie ', 2, 350, '2018-12-22 00:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(255) NOT NULL,
  `supplier` text NOT NULL,
  `department` text NOT NULL,
  `name` text NOT NULL,
  `photo` blob NOT NULL,
  `description` text NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` double NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text NOT NULL,
  `status_sc` text NOT NULL,
  `status_af` text NOT NULL,
  `status_haf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `supplier`, `department`, `name`, `photo`, `description`, `quantity`, `price`, `date`, `status`, `status_sc`, `status_af`, `status_haf`) VALUES
(1, 'adidas', 'Supply Chain Management', 'Letsong Kawali', 0x75706c6f61642f494d475f3238373120325f313534353433343437332e6a7067, 'hahah', 3, 1000, '2018-12-21 23:22:11', '', '', 'Approved', 'Approved'),
(3, '', 'Human Resource Management', 'DELL Inspiron 15 5000 15', '', 'asdasd', 3, 0, '2018-12-21 23:37:10', '', '', '', ''),
(4, '', 'Marketing & Sales', 'Letsong Kawali', '', 'sadas', 2, 0, '2018-12-22 00:09:02', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `request_employee`
--

CREATE TABLE `request_employee` (
  `id` int(255) NOT NULL,
  `position_id` int(255) NOT NULL,
  `gender` text NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_employee`
--

INSERT INTO `request_employee` (`id`, `position_id`, `gender`, `schedule_id`, `status`) VALUES
(1, 18, 'Female', 1, 'Approved'),
(2, 15, 'Female', 1, 'Approved'),
(3, 4, 'Female', 3, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `sales_total` double NOT NULL,
  `sales_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesid`, `userid`, `sales_total`, `sales_date`) VALUES
(1, 2, 34, '2017-09-16 16:23:38'),
(2, 2, 18, '2017-09-16 16:25:28'),
(3, 2, 6, '2017-09-16 16:27:31'),
(4, 2, 1014244, '2017-09-16 16:44:01'),
(5, 2, 9588, '2017-09-18 09:06:29'),
(6, 2, 88779, '2017-09-18 09:08:42'),
(7, 2, 15579, '2017-09-18 09:09:34'),
(8, 2, 112361, '2017-09-18 09:32:00'),
(9, 2, 7990, '2017-09-18 09:34:29'),
(10, 2, 18370, '2017-09-18 11:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `sales_detail`
--

CREATE TABLE `sales_detail` (
  `sales_detailid` int(11) NOT NULL,
  `salesid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `sales_qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_detail`
--

INSERT INTO `sales_detail` (`sales_detailid`, `salesid`, `productid`, `sales_qty`) VALUES
(1, 2, 1, 12),
(2, 2, 2, 10),
(3, 3, 3, 11),
(4, 4, 2, 50),
(5, 4, 1, 106),
(6, 4, 5, 1000),
(7, 5, 2, 12),
(8, 6, 5, 101),
(9, 7, 1, 10),
(10, 7, 3, 11),
(11, 8, 4, 10),
(12, 8, 20, 10),
(13, 8, 1, 99),
(14, 8, 2, 20),
(15, 9, 2, 10),
(16, 10, 2, 10),
(17, 10, 3, 12),
(18, 10, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `time_in`, `time_out`) VALUES
(1, '07:00:00', '16:00:00'),
(2, '08:00:00', '17:00:00'),
(3, '09:00:00', '18:00:00'),
(4, '10:00:00', '19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `userid` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_address` varchar(150) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`userid`, `company_name`, `company_address`, `contact`) VALUES
(4, 'Dell Computer Corporation', 'One Dell WayRound Rock, Texas 78682', '1-800-WWW-DELL');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_product`
--

CREATE TABLE `supplier_product` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` double NOT NULL,
  `product_qty` double NOT NULL,
  `photo` blob NOT NULL,
  `supplierid` int(11) NOT NULL,
  `supplier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_product`
--

INSERT INTO `supplier_product` (`productid`, `product_name`, `product_price`, `product_qty`, `photo`, `supplierid`, `supplier`) VALUES
(37, 'T-Shirt Red', 1000, 10, 0x75706c6f61642f6a7065675f313534353336323033332e6a7067, 17, 'lindexl'),
(38, 'Letsong Kawali', 1000, 100, 0x75706c6f61642f315f313534353431303432362e6a7067, 11, 'adidas');

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
('Mark joseph', 'mjsalgado02@gmail.com', '2147483647', 'jkhj');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sign`
--

CREATE TABLE `tb_sign` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sign`
--

INSERT INTO `tb_sign` (`fname`, `lname`, `contact`, `email`, `username`, `password`) VALUES
('Mark', 'joseph', '09979916654', 'mjsalgado02@gmail.com', 'basta', 'basta');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `productid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` double NOT NULL,
  `product_qty` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `supplierid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`productid`, `categoryid`, `product_name`, `product_price`, `product_qty`, `photo`, `supplierid`) VALUES
(1, 1, 'DELL Inspiron 15 7000 15.6', 899, 891, 'upload/1.jpg', 4),
(2, 1, 'MICROSOFT Surface Pro 4 & Typecover - 128 GB\r\n', 799, 948, 'upload/2.jpg', 0),
(3, 2, 'DELL Inspiron 15 5000 15.6', 599, 977, 'upload/3.jpg', 4),
(4, 1, 'LENOVO Ideapad 320s-14IKB 14\" Laptop - Grey', 399, 982, 'upload/4.jpg', 0),
(5, 1, 'APPLE MacBook Air 13.3\" (2017)', 879, 9900, 'upload/5.jpg', 0),
(6, 1, 'DELL Inspiron 15 5000 15', 449.99, 1000, 'upload/6.jpg', 4),
(8, 1, 'ASUS Transformer Mini T102HA 10.1\" 2 in 1 - Silver', 549.99, 1000, 'upload/8.jpg', 0),
(9, 2, 'PC SPECIALIST Vortex Core Lite Gaming PC', 599.99, 1000, 'upload/9.jpg', 0),
(10, 2, 'DELL Inspiron 5675 Gaming PC - Recon Blue', 599.99, 1000, 'upload/10.jpg', 4),
(11, 2, 'HP Barebones OMEN X 900-099nn Gaming PC', 489.98, 1000, 'upload/11.jpg', 0),
(12, 2, 'ACER Aspire GX-781 Gaming PC', 749.99, 1000, 'upload/12.jpg', 0),
(13, 2, 'HP Pavilion Power 580-015na Gaming PC', 799.99, 1000, 'upload/13.jpg', 0),
(14, 2, 'LENOVO Legion Y520 Gaming PC', 899.99, 1000, 'upload/14.jpg', 0),
(15, 2, 'PC SPECIALIST Vortex Minerva XT-R Gaming PC', 999.99, 1000, 'upload/15.jpg', 0),
(16, 2, 'C SPECIALIST Vortex Core II Gaming PC', 649.99, 1000, 'upload/16.jpg', 0),
(17, 3, 'AMAZON Fire 7 Tablet with Alexa (2017) - 8 GB, Black', 49.99, 1000, 'upload/17.jpg', 0),
(18, 3, 'AMAZON Fire HD 8 Tablet with Alexa (2017) - 16 GB, Black', 79.99, 1000, 'upload/18.jpg', 0),
(19, 3, 'AMAZON Fire HD 8 Tablet with Alexa (2017) - 32 GB, Black', 99.99, 1000, 'upload/19.jpg', 0),
(20, 3, 'APPLE 9.7\" iPad - 32 GB, Space Grey', 339, 990, 'upload/20.jpg', 0),
(21, 3, 'APPLE 9.7\" iPad - 32 GB, Gold', 339, 1000, 'upload/21.jpg', 0),
(22, 3, 'APPLE 10.5\" iPad Pro - 64 GB, Space Grey (2017)', 619, 1000, 'upload/22.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `train_id` int(255) NOT NULL,
  `employee_id` text NOT NULL,
  `department` text NOT NULL,
  `training_location` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`train_id`, `employee_id`, `department`, `training_location`, `start_date`, `end_date`, `start_time`, `end_time`, `status`) VALUES
(5, 'GHS039657841', 'Supply Chain Management', 'Nasugbu', '2018-12-20', '2018-12-31', '07:00:00', '17:00:00', 'Approved'),
(6, 'GFS012457698', 'Supply Chain Management', 'SutherLand', '2018-12-26', '2018-12-29', '05:00:00', '19:00:00', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `access`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(4, 'supplier', '99b0e8da24e29e4ccb5d7d76e677c2ac', 3),
(10, 'users', '827ccb0eea8a706c4c34a16891f84e7b', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounting_manager`
--
ALTER TABLE `accounting_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `cashadvance`
--
ALTER TABLE `cashadvance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `cfo`
--
ALTER TABLE `cfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headhr`
--
ALTER TABLE `headhr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventoryid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`order_ID`) USING BTREE,
  ADD KEY `Warehouse_ID` (`Warehouse_ID`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `product_marketing`
--
ALTER TABLE `product_marketing`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Category_ID` (`Category_ID`),
  ADD KEY `Warehouse_ID` (`Warehouse_ID`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_employee`
--
ALTER TABLE `request_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesid`);

--
-- Indexes for table `sales_detail`
--
ALTER TABLE `sales_detail`
  ADD PRIMARY KEY (`sales_detailid`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `supplier_product`
--
ALTER TABLE `supplier_product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `tb_sign`
--
ALTER TABLE `tb_sign`
  ADD PRIMARY KEY (`fname`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`train_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounting_manager`
--
ALTER TABLE `accounting_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cashadvance`
--
ALTER TABLE `cashadvance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cfo`
--
ALTER TABLE `cfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `headhr`
--
ALTER TABLE `headhr`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `order_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product_marketing`
--
ALTER TABLE `product_marketing`
  MODIFY `Product_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request_employee`
--
ALTER TABLE `request_employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sales_detail`
--
ALTER TABLE `sales_detail`
  MODIFY `sales_detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `supplier_product`
--
ALTER TABLE `supplier_product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `train_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
