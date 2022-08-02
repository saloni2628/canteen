-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2020 at 11:08 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `additem`
--

CREATE TABLE IF NOT EXISTS `additem` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `item_price` float NOT NULL,
  `preparation_time` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `additem`
--


-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Phone_no` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Username`, `Phone_no`, `Email`, `Password`, `Confirm_password`) VALUES
(1, 'Saloni bansal', 'salbansal20', '7737359695', 'salonibandsal2828@gmail.com', 'admin1234', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `P_id` int(255) NOT NULL AUTO_INCREMENT,
  `P_name` varchar(255) NOT NULL,
  `P_image` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `P_price` float NOT NULL,
  PRIMARY KEY (`P_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_id`, `P_name`, `P_image`, `Description`, `P_price`) VALUES
(6, 'Golgappe', 'golgappe.jpg', '...', 20),
(1, 'honeychilli potato', 'download (1).jpg', '...', 40),
(2, 'Chowmein', 'download (3).jpg', '...', 40),
(3, 'Bhelpuri', 'download (4).jpg', '...', 20),
(4, 'pav-bhaji', 'img4.jpg', '...', 50),
(7, 'Idli-sambhar', 'idlisambhar.jpg', '...', 40),
(12, 'utpam', 'download (2).jpg', '...', 30),
(13, 'petiz', 'download (5).jpg', '...', 20);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_no` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_password` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Status` int(20) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `Name`, `Username`, `Email`, `Phone_no`, `Password`, `Confirm_password`, `Category`, `Status`) VALUES
(1, 'Saloni Bansal', 'bansal26', 'salonibansal2828@gmail.com', '07737359697', '12345678', '12345678', 'Student', 1),
(2, 'Saloni Agrawal', 'bans123', 'salonibansal@gmail.com', '07737359695', '09876543', '09876543', 'Student', 1),
(10, 'Saloni Bansal', 'aman24', 'salonibansal2828@gmail.com', '6767', '12qwerty', '12qwerty', 'Student', 0),
(3, 'shivani tyagi', 'tyagi18', 'shivanity12@gmail.com', '8504080265', '1234qwer', '1234qwer', 'Student', 1),
(5, 'Shruti jain', 'anshu', 'snahu24@gmail.com', '8756452352', '67891234', '67891234', 'Student', 1),
(6, '', '', '', '', '', '', 'Student', 0),
(7, 'Aman Bansal', 'aman24', 'tfXgcvzFRXDzr', '76363636', '1234rtyu', '1234rtyu', 'Student', 0),
(8, 'Aman Bansal', 'aman24', 'amanbansal1947@gmail.com', '7636363610', '12345678', '12345678', 'Student', 1),
(9, 'Aman Bansal', 'aman24', 'amanbansal2424@gmail.com', '', 'qwer1234', 'qwer1234', 'Student', 0),
(11, '', '', '', '', '', '', 'Student', 0),
(12, 'CHARU BANSAL', 'bansal28', 'charubansal428@gmail.com', '7690876771', 'dancer12', 'dancer12', 'Student', 0),
(16, 'mayank agrawal', 'mayank12', 'mynk3456@gmail.com', '8976543209', 'agrawal90', 'agrawal90', 'Student', 1),
(13, 'deepanshi', 'sharma23', 'dsph1234@gmail.com', '7689342190', 'qwer1234', 'qwer1234', 'Student', 0),
(14, 'Charu Bansal', 'bansal28', 'bansalcharu26@gmail.com', '8765439021', 'dancer12', 'dancer12', 'Student', 1),
(15, 'Manvi gupta', 'gupta12', 'manugupta45@gmail.com', '9654231890', 'asdf1234', 'asdf1234', 'Student', 1),
(17, 'Tannya Sharma', 'tany78', 'tannyasharma78@gmail.com', '9876540987', 'qwerasdf', 'qwerasdf', 'Student', 1),
(18, 'Sakshi', 'mann3456', 'sakshimann34@gmail.com', '7896543210', '7890yuio', '7890yuio', 'Student', 1),
(19, 'dtyuiol,mnb', '90okjnb', 'sertfvc4@gmail.com', '7890453216', '1234qwer', '1234qwer', 'Student', 1),
(20, 'kshama bansal', 'kb789', 'kshamab34@gmail.com', '9269724130', 'bittu2028', 'bittu2028', 'Teacher', 1),
(21, 'aman Agrawal', 'bansal1947', 'amanbansal25@gmail.com', '8107626590', '7890abcd', '7890abcd', 'Student', 0),
(22, 'Roohi', 'Mishra', 'roohi78@gmail.com', '8912349015', '12345678', '12345678', 'Student', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
