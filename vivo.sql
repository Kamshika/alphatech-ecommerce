-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2022 at 03:28 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vivo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aemail` varchar(500) NOT NULL,
  `apass` varchar(100) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aemail`, `apass`) VALUES
(1, 'alpha@gmail.com', '123456789'),
(2, 'achchu@gmail.com', '123456789'),
(3, 'milky@sliit.lk', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL,
  `cadd` varchar(200) NOT NULL,
  `ctelno` varchar(11) NOT NULL,
  `cpic` varchar(500) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `cname`, `cemail`, `cpass`, `cadd`, `ctelno`, `cpic`) VALUES
(8, 'Alpha', 'alpha@sliit.lk', 'alpha', 'Colombo 2', '0111111112', 'resources/images/dove.png'),
(9, 'Duck', 'duck@sliit.lk', 'duck', 'Colombo 7', '0111111113', 'resources/images/duck.png'),
(10, 'Flamingo', 'flamingo@sliit.lk', 'flamingo', 'Colombo 4', '0111111114', 'resources/images/flamingo.png'),
(11, 'Owl', 'owl@sliit.lk', 'owl', 'Colombo 5', '0111111115', 'resources/images/owl.png');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fq` varchar(1000) NOT NULL,
  `fa` varchar(1000) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`fid`, `fq`, `fa`) VALUES
(1, 'How can I change my shipping address?', 'By default, the last used shipping address will be saved into to your Sample Store account. When you are checking out your order, the default shipping address will be displayed and you have the option to amend it if you need to.'),
(3, 'How do you ship my orders?', 'All your orders are sent via post');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `ptitle` varchar(1000) NOT NULL,
  `pdesc` varchar(1000) NOT NULL,
  `pimg` varchar(1000) NOT NULL,
  `pcat` varchar(20) NOT NULL,
  `pprice` int(11) NOT NULL,
  `pstock` int(11) NOT NULL,
  `pslug` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `ptitle`, `pdesc`, `pimg`, `pcat`, `pprice`, `pstock`, `pslug`) VALUES
(27, 'Samsung Galaxy M13 6GB 128GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P3.jpg', 'samsung', 79977, 10, ''),
(26, 'Apple iPhone 14 Pro Max 1TB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P2.jpg', 'apple', 810926, 16, ''),
(25, 'Apple iPhone 14 Plus 256GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P1.png', 'apple', 440000, 23, ''),
(28, 'Samsung Galaxy S21 FE 5G 8GB 128GB', 'iscing elit, sed do eiusmod tempo', 'resources/images/P4.jpg', 'Shirt', 268878, 12, ''),
(29, 'OnePlus 10 Pro 8GB 256GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P5.jpg', 'oneplus', 292906, 16, ''),
(30, 'OnePlus Nord 2T 8GB 128GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P6.jpg', 'oneplus', 181715, 23, ''),
(31, 'Vivo V21e 8GB 128GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P7.jpg', 'vivo', 86829, 15, ''),
(32, 'Vivo Y20s 4GB 128GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P8.jpg', 'vivo', 49071, 17, ''),
(33, 'Huawei Nova 9 SE 8GB 128GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P9.jpg', 'huawei', 147597, 28, ''),
(34, 'Huawei P50 Pro 8GB 256GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P10.jpg', 'huawei', 411429, 19, ''),
(35, 'Apple iPhone 13 Mini 256GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P11.jpg', 'apple', 387429, 16, ''),
(36, 'Apple iPhone 12 Pro Max 256GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P12.jpg', 'apple', 400290, 23, ''),
(37, 'Samsung Galaxy F13 4GB 64GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P13.jpg', 'samsung', 70366, 40, ''),
(38, 'Samsung Galaxy A22 5G 8GB 128GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P14.jpg', 'samsung', 102402, 25, ''),
(39, 'Vivo V17 Pro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P15.jpg', 'vivo', 106546, 14, ''),
(40, 'OnePlus Nord CE 2 5G 8GB 128GB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P16.jpg', 'oneplus', 144572, 28, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
