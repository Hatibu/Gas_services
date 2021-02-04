-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 05:10 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinegasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_tbl`
--

CREATE TABLE IF NOT EXISTS `account_tbl` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Administrator','Accountant','SuperDealer','Dealer','StoreKeeper') NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `account_tbl`
--

INSERT INTO `account_tbl` (`ID`, `username`, `password`, `level`) VALUES
(1, 'hatibu', '5bcce3e02f8ea6116255e095c7788610', 'Administrator'),
(11, '1000', '5bcce3e02f8ea6116255e095c7788610', 'Dealer'),
(12, '10007', '5bcce3e02f8ea6116255e095c7788610', 'Accountant'),
(14, '10008', '5bcce3e02f8ea6116255e095c7788610', 'StoreKeeper'),
(15, '1001', '0010cfdb261d7bc6408a8553e9d04bbd', 'Dealer'),
(16, '10009', '5bcce3e02f8ea6116255e095c7788610', 'SuperDealer'),
(17, '10009', '3d3aebc369ab7e0ce503f3079fdcb502', 'SuperDealer'),
(18, '1002', '26a3fa5d73d35519ce5066b349038620', 'Dealer'),
(19, '1003', 'c787cc66b45acc59e7c69f05eb669ffc', 'Dealer'),
(20, '1004', '8f771a18cc557dea86915f9a7779f58c', 'Dealer');

-- --------------------------------------------------------

--
-- Table structure for table `dealers_tbl`
--

CREATE TABLE IF NOT EXISTS `dealers_tbl` (
  `dealer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `p_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dealer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1016 ;

--
-- Dumping data for table `dealers_tbl`
--

INSERT INTO `dealers_tbl` (`dealer_id`, `first_name`, `middle_name`, `last_name`, `gender`, `age`, `nationality`, `location`, `p_number`, `email`, `image`, `created`) VALUES
(1000, 'hatibu', 'tom', 'julius', 'M', 35, 'tanga', 'tanga', '255672354802', 'kiwelu@gmail.com', '17191312_1936481113249963_7215776240419649685_n.png', '2018-06-21 13:04:45'),
(1001, 'Elly', 'James', 'Elly', 'M', 40, 'Tanzania', 'Kagera', '0767047376', 'ellylee@gmail.com', 'images.jpg', '2018-06-25 07:36:54'),
(1002, 'Navu', 'Aminiel', 'Mbaga', 'M', 39, 'Tanzania', 'Tabora', '0687356127', 'aminielmbaga@gmail.com', 'images77.jpg', '2018-06-25 07:40:01'),
(1003, 'Thomson', 'Kiwelu', 'Thomason', 'M', 20, 'Tanzania', 'Mtwara', '0767676767', 'kiwelu@gmail.com', 'contact.jpg', '2018-06-25 07:44:47'),
(1009, 'hatibu', 'kiwelu', 'Mbise', 'M', 23, '', 'Tabora', '09876526748', 'siri@yahoo.com', '', '2018-06-25 21:08:09'),
(1010, 'navu', 'eminieli', 'Andrew', 'M', 23, 'Tanzania', 'mbeya', '0748364753', 'herman@yahoo.com', '', '2018-06-25 21:39:18'),
(1015, 'thomson', 'peter', 'Andrew', 'M', 28, 'Uganda', 'mbeya', '0748364753', 'kiwelu@gmail.com', '', '2018-06-26 02:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `employees_tbl`
--

CREATE TABLE IF NOT EXISTS `employees_tbl` (
  `ID_employee` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `p_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_employee`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10014 ;

--
-- Dumping data for table `employees_tbl`
--

INSERT INTO `employees_tbl` (`ID_employee`, `first_name`, `middle_name`, `last_name`, `gender`, `age`, `nationality`, `p_number`, `email`, `position`, `create_time`) VALUES
(10007, 'thomson', 'tomason', 'kiwelu', 'M', 0, 'Tanzania', '324567890', 'kiwelu@gmail.com', 'Accountant', '2018-06-05 23:31:56'),
(10008, 'felixs', 'Mbaga', 'Mbaga', 'M', 20, 'Tanzania', '078000444', 'herman@yahoo.com', 'storekeeper', '2018-06-05 23:57:57'),
(10009, 'tom', 'tom', 'kiwelu', 'M', 45, 'Tanzania', '009', 'siri@yahoo.com', 'Manager', '2018-06-17 07:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `new_applicant_tbl`
--

CREATE TABLE IF NOT EXISTS `new_applicant_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `p_number` varchar(255) NOT NULL,
  `business_expe` varchar(255) NOT NULL,
  `capital` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `new_applicant_tbl`
--

INSERT INTO `new_applicant_tbl` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `age`, `nationality`, `location`, `p_number`, `business_expe`, `capital`, `email`, `image`, `status`) VALUES
(1, 'hatibu', 'kiwelu', 'Mbise', 'M', 23, '', 'Tabora', '09876526748', '2', 2000000, 'siri@yahoo.com', 'Capture.PNG', 1),
(2, 'navu', 'eminieli', 'Andrew', 'M', 23, 'Tanzania', 'mbeya', '0748364753', '2', 2000000, 'herman@yahoo.com', 'Capture.PNG', 1),
(3, 'thomson', 'tom', 'tomason', 'M', 34, 'Tanzania', 'mbeya', '0748364753', '5', 2000000, 'kiwelu@gmail.com', '620_521b2e6781b65.jpg', 0),
(19, 'thomson', 'peter', 'Andrew', 'M', 28, 'Uganda', 'mbeya', '0748364753', '2', 1000000, 'kiwelu@gmail.com', 'hqdefault.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification_tbl`
--

CREATE TABLE IF NOT EXISTS `notification_tbl` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Message` text NOT NULL,
  `To_user` varchar(255) NOT NULL,
  `User_from_type` varchar(255) NOT NULL,
  `Description_user` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  `Create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `notification_tbl`
--

INSERT INTO `notification_tbl` (`ID`, `Message`, `To_user`, `User_from_type`, `Description_user`, `Status`, `Create_time`) VALUES
(68, 'JSTRJ', 'Administrator', '1000', 'hatibu', 1, '2018-06-25 11:02:48'),
(72, 'do u have any problem', '1000', 'Accountant', 'Accountant', 1, '2018-06-25 12:42:16'),
(73, 'yes there is a problem with my order', 'Accountant', '1000', 'hatibu', 1, '2018-06-25 12:45:35'),
(75, 'kuelewa', '1000', 'Administrator', 'Administrator', 1, '2018-06-25 13:03:35'),
(77, 'niambie', 'Administrator', 'Accountant', 'Accountant', 1, '2018-06-25 13:04:37'),
(78, ' Sorry You Will Receive Your Order Tomorrow From Online Gas Service', '1000', 'New Info', '', 1, '2018-06-25 16:59:02'),
(80, ' Sorry You Will Receive Your Order Tomorrow From Online Gas Service', '1000', 'New Info', '', 1, '2018-06-25 17:10:31'),
(81, 'There Is New Order From hatibu juliusAnd the Order ID Is 85', 'Accountant', 'New Order', 'New Order', 1, '2018-06-25 17:31:43'),
(82, 'There Is Are New Process Order The Order Number(order_ID) Is 85', 'StoreKeeper', 'New Process Order', 'New Process Order', 1, '2018-06-25 17:33:56'),
(84, 'There Is Request Accepted With ID', 'Administrator', 'Request Accepted', 'Request Accepted', 1, '2018-06-25 20:01:31'),
(85, 'There Is Request Accepted With ID', 'Administrator', 'Request Accepted', 'Request Accepted', 1, '2018-06-25 20:03:31'),
(86, 'There Is Request Accepted With ID1', 'Administrator', 'Request Accepted', 'Request Accepted', 1, '2018-06-25 20:04:46'),
(87, 'There Is Request Accepted With ID1', 'Administrator', 'Request Accepted', 'Request Accepted', 1, '2018-06-25 20:04:55'),
(88, 'There Is Request Accepted With ID1', 'Administrator', 'Request Accepted', 'Request Accepted', 1, '2018-06-25 20:12:27'),
(89, 'There Is Request Accepted With ID 2', 'Administrator', 'Request Accepted', 'Request Accepted', 1, '2018-06-25 21:38:10'),
(98, 'There Is New Applicant', 'SuperDealer', 'New Applicant', 'New Applicant', 1, '2018-06-25 23:55:47'),
(100, 'There Is New Applicant', 'SuperDealer', 'New Applicant', 'New Applicant', 1, '2018-06-25 23:57:05'),
(102, 'There Is New Applicant', 'SuperDealer', 'New Applicant', 'New Applicant', 1, '2018-06-26 02:19:55'),
(103, 'There Is New Applicant ', 'SuperDealer', 'New Applicant', 'New Applicant', 1, '2018-06-26 02:32:50'),
(104, 'There Is New Applicant 18', 'SuperDealer', 'New Applicant', 'New Applicant', 1, '2018-06-26 02:34:30'),
(105, 'There Is New Applicant The ID Number Is  19', 'SuperDealer', 'New Applicant', 'New Applicant', 1, '2018-06-26 02:37:28'),
(106, 'There Is Request Accepted With ID 19', 'Administrator', 'Request Accepted', 'Request Accepted', 1, '2018-06-26 02:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE IF NOT EXISTS `order_tbl` (
  `order_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type1` varchar(255) DEFAULT NULL,
  `Type2` varchar(255) DEFAULT NULL,
  `Amount1` varchar(255) DEFAULT NULL,
  `Amount2` varchar(255) DEFAULT NULL,
  `Quntity1` int(10) DEFAULT NULL,
  `Quntity2` int(10) DEFAULT NULL,
  `Total` int(10) DEFAULT NULL,
  `dealer_id` int(11) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_date` date NOT NULL,
  `order_month` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`order_ID`),
  KEY `dealer_id` (`dealer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`order_ID`, `Type1`, `Type2`, `Amount1`, `Amount2`, `Quntity1`, `Quntity2`, `Total`, `dealer_id`, `date_time`, `order_date`, `order_month`, `status`) VALUES
(59, '6kg', '15kg', '636000', '2200000', 12, 22, 2836000, 1000, '2018-06-18 08:30:21', '2018-06-13', '2018-05', 1),
(60, '6kg', '15kg', '53000', '2300000', 1, 23, 2353000, 1001, '2018-06-18 08:34:18', '2018-06-17', '2018-06', 1),
(81, '6kg', '15kg', '106000', '200000', 2, 2, 306000, 1000, '2018-06-23 08:30:55', '2018-06-23', '2018-06', 1),
(82, '6kg', '15kg', '100000', '100000', 4, 4, 200000, 1002, '2018-06-25 07:53:28', '2018-06-25', '2018-06', 0),
(83, '6kg', '15kg', '100000', '300000', 2, 3, 400000, 1000, '2018-06-25 08:38:55', '2018-06-25', '2018-06', 1),
(84, '6kg', '15kg', '150000', '400000', 3, 4, 550000, 1000, '2018-06-25 10:38:45', '2018-06-25', '2018-06', 1),
(85, '6kg', '15kg', '1150000', '300000', 23, 3, 1450000, 1000, '2018-06-25 17:30:16', '2018-06-25', '2018-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `price_tbl`
--

CREATE TABLE IF NOT EXISTS `price_tbl` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(255) NOT NULL,
  `Price` int(120) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `price_tbl`
--

INSERT INTO `price_tbl` (`ID`, `Type`, `Price`, `Description`, `Image`) VALUES
(1, '6kg', 53000, 'SDFGHVJKGKIUJYSRTH', '1.jpg'),
(2, '15kg', 100000, 'fdshdnwryh', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `process_tbl`
--

CREATE TABLE IF NOT EXISTS `process_tbl` (
  `process_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `Quantity(Kg6)` int(11) NOT NULL,
  `Quantity(Kg15)` int(11) NOT NULL,
  `order_ID` int(11) DEFAULT NULL,
  `dealer_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_process` date NOT NULL,
  PRIMARY KEY (`process_id`),
  KEY `order_ID` (`order_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `process_tbl`
--

INSERT INTO `process_tbl` (`process_id`, `first_name`, `last_name`, `location`, `Quantity(Kg6)`, `Quantity(Kg15)`, `order_ID`, `dealer_id`, `status`, `date_process`) VALUES
(9, 'hatibu', 'julius', 'tanga', 12, 22, 59, '1000', 1, '2018-06-28'),
(10, 'Elly', 'Elly', 'bara 7', 1, 23, 60, '1001', 0, '0000-00-00'),
(11, 'hatibu', 'julius', 'tanga', 2, 2, 81, '1000', 0, '0000-00-00'),
(12, 'hatibu', 'julius', 'tanga', 2, 3, 83, '1000', 0, '0000-00-00'),
(13, 'hatibu', 'julius', 'tanga', 3, 4, 84, '1000', 1, '2018-06-26'),
(14, 'hatibu', 'julius', 'tanga', 23, 3, 85, '1000', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `store_tbl`
--

CREATE TABLE IF NOT EXISTS `store_tbl` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT,
  `Type1` varchar(255) NOT NULL,
  `Type2` varchar(255) NOT NULL,
  `Quantity1` int(11) NOT NULL,
  `Quantity2` int(11) NOT NULL,
  `Date_store` date NOT NULL,
  `mouth_store` varchar(250) NOT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`store_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `store_tbl`
--

INSERT INTO `store_tbl` (`store_id`, `Type1`, `Type2`, `Quantity1`, `Quantity2`, `Date_store`, `mouth_store`, `CreateTime`) VALUES
(9, '6kg', '15kg', 23, 23, '2018-06-21', '2018-06', '2018-06-21 12:31:38'),
(10, '6kg', '15kg', 23, 36, '2018-06-22', '2018-06', '2018-06-22 08:23:31'),
(11, '6kg', '15kg', 12, 34, '2018-06-23', '2018-06', '2018-06-23 09:49:47'),
(12, '6kg', '15kg', 30, 30, '2018-06-25', '2018-06', '2018-06-25 07:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `token_tbl`
--

CREATE TABLE IF NOT EXISTS `token_tbl` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `verify_code` varchar(255) DEFAULT NULL,
  `dealer_id` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `dealer_id` (`dealer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=320 ;

--
-- Dumping data for table `token_tbl`
--

INSERT INTO `token_tbl` (`ID`, `verify_code`, `dealer_id`, `active`) VALUES
(181, 'e7305354', 1000, 1),
(187, '8390e47a', 1000, 1),
(188, 'bf3678af', 1000, 1),
(191, 'c9a6493c', 1000, 1),
(195, 'fcd73592', 1000, 1),
(196, 'd858249f', 1000, 1),
(198, 'b99cbacf', 1000, 1),
(218, '4f88ae93', 1000, 1),
(230, 'a4c49adf', 1000, 1),
(232, '4b9771e2', 1000, 1),
(233, 'd460cc56', 1000, 1),
(251, '84dbb88b', 1000, 1),
(258, '533cb2d0', 1000, 1),
(259, '39733676', 1000, 1),
(266, '39e4d3e2', 1001, 1),
(267, 'ee649a91', 1000, 1),
(273, 'b788a781', 1000, 1),
(274, '791601af', 1001, 1),
(275, '0034c7aa', 1001, 1),
(282, 'c4852db6', 1000, 1),
(286, '9ccbf998', 1000, 1),
(287, '5e3471cc', 1000, 1),
(288, '12e717ec', 1000, 1),
(292, 'd9dc5b6c', 1000, 1),
(295, 'd6cf0be5', 1000, 1),
(299, 'f6ed86a7', 1000, 1),
(301, 'f0bb6911', 1001, 0),
(307, '7f77dde9', 1000, 1),
(311, '959b842e', 1002, 0),
(313, '1750ce92', 1000, 1),
(315, '1fe7c42e', 1000, 1),
(319, 'be932661', 1000, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD CONSTRAINT `order_tbl_ibfk_1` FOREIGN KEY (`dealer_id`) REFERENCES `dealers_tbl` (`dealer_id`);

--
-- Constraints for table `process_tbl`
--
ALTER TABLE `process_tbl`
  ADD CONSTRAINT `process_tbl_ibfk_1` FOREIGN KEY (`order_ID`) REFERENCES `order_tbl` (`order_ID`);

--
-- Constraints for table `token_tbl`
--
ALTER TABLE `token_tbl`
  ADD CONSTRAINT `token_tbl_ibfk_1` FOREIGN KEY (`dealer_id`) REFERENCES `dealers_tbl` (`dealer_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
