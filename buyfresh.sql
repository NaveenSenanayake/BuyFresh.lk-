-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2022 at 02:25 AM
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
-- Database: `buyfresh`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Path` varchar(500) NOT NULL,
  `Post` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Email`, `Name`, `Price`, `Path`, `Post`) VALUES
(49, 'pipins365@gmail.com', 'Cabbage', 'Rs : 120', 'uploads/index1.jpg', 0),
(48, 'pipins365@gmail.com', 'Leek', 'Rs : 60', 'uploads/index.jpg', 1),
(47, 'pipins365@gmail.com', 'Carrot', 'Rs : 80', 'uploads/carrot-icon-cartoon-style-on-white-background-vector-8177752.jpg', 1),
(46, 'pipins365@gmail.com', 'Broccoli', 'Rs : 30', 'uploads/broccoli-vegetable-cartoon-vector-1268538.jpg', 1),
(45, 'pipins365@gmail.com', 'Beetroot', 'Rs : 50', 'uploads/beetroot-cartoon-style-vegetarian-fresh-food-vector-14097247.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `productb`
--

DROP TABLE IF EXISTS `productb`;
CREATE TABLE IF NOT EXISTS `productb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Path` varchar(500) NOT NULL,
  `Post` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productb`
--

INSERT INTO `productb` (`id`, `Email`, `Name`, `Price`, `Path`, `Post`) VALUES
(3, 'pipins365@gmail.com', 'Cake', 'Rs : 1800', 'uploads/delicious-cake-cartoon-vector-illustration-served-sweet-pastry-creamy-bakery-flat-color-object-confection-baked-sugary-dessert-188028083.jpg', 0),
(4, 'pipins365@gmail.com', 'Muffin', 'Rs : 120', 'uploads/isolated-blueberry-muffin-white-background-drawing-illustration-133615606.jpg', 0),
(5, 'pipins365@gmail.com', 'Cookie', 'Rs : 125', 'uploads/sweet-cookie-cartoon-vector-24442879.jpg', 0),
(6, 'pipins365@gmail.com', 'Rolls', 'Rs : 120', 'uploads/360_F_427659028_5dsX7Jt7uxew1SeBpfdzA5bVGvtctZYp.jpg', 0),
(7, 'pipins365@gmail.com', 'Bread', 'Rs : 150', 'uploads/cartoon-illustration-isolated-object-delicious-flour-food-bakery-bread-whole-grain-toast-vector.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `productl`
--

DROP TABLE IF EXISTS `productl`;
CREATE TABLE IF NOT EXISTS `productl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Path` varchar(500) NOT NULL,
  `Post` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productl`
--

INSERT INTO `productl` (`id`, `Email`, `Name`, `Price`, `Path`, `Post`) VALUES
(6, 'pipins365@gmail.com', 'Bacardi', 'Rs : 2400', 'uploads/bacardi-razz-1l.jpg', 1),
(5, 'pipins365@gmail.com', 'Arrack', 'Rs : 1800', 'uploads/scsl-exta-special.png', 1),
(7, 'pipins365@gmail.com', 'Campari', 'Rs : 3000', 'uploads/images.jpg', 0),
(8, 'pipins365@gmail.com', 'Frenet Brance', 'Rs : 2000', 'uploads/08038cf00114189c3b5e923017b377d3.jpg', 0),
(9, 'pipins365@gmail.com', 'TripaleSec', 'Rs : 2900', 'uploads/pol_pl_Triple-Sec-Coloniale-Liker-Barmanski-40-1-0l-7732_1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `productm`
--

DROP TABLE IF EXISTS `productm`;
CREATE TABLE IF NOT EXISTS `productm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Path` varchar(500) NOT NULL,
  `Post` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productm`
--

INSERT INTO `productm` (`id`, `Email`, `Name`, `Price`, `Path`, `Post`) VALUES
(3, 'pipins365@gmail.com', 'Beef', 'Rs : 1800', 'uploads/bbq-steak-icon-flat-style-vector-20612902.jpg', 0),
(4, 'pipins365@gmail.com', 'Mutton', 'Rs : 1500', 'uploads/cartoon-leg-lamb-vector-38434210.jpg', 0),
(5, 'pipins365@gmail.com', 'Crab', 'Rs : 1600', 'uploads/cartoon-red-crab-vector-4043286.jpg', 0),
(6, 'pipins365@gmail.com', 'Pork', 'Rs : 1000', 'uploads/pork-meat-skin-icon-cartoon-style-vector-31776504.jpg', 0),
(7, 'pipins365@gmail.com', 'Chicken', 'Rs : 1200', 'uploads/whole-roast-chicken-isolated-vector-15345611.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Fullname` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Cnumber` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `utype` varchar(10) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Fullname`, `Email`, `Cnumber`, `Password`, `utype`) VALUES
('Naveen Senanayake', 'pipins365@gmail.com', 778455138, '1234', 'admin'),
('java', 'java@gmail.com', 11, '555', 'customer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
