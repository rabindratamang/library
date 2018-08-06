-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2018 at 07:22 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `fname`, `lname`, `password`, `address`, `phone`, `age`) VALUES
('wifwolf', '', '', '1234', '', '', 0),
('wifwolf', '', '', '1234', '', '', 0),
('wifwolf', '', '', '1234', '', '', 0),
('wifwolf', '', '', '1234', '', '', 0),
('wifwolf', '', '', '1234', '', '', 0),
('wifwolf', '', '', '1234', '', '', 0),
('wifwolf', '', '', '1234', '', '', 0),
('wifwolf', '', '', '1234', '', '', 0),
('wifwolf', '', '', '1234', '', '', 0),
('wifwolf', '', '', '1234', '', '', 0),
('wifwolf', '', '', '1234', '', '', 0),
('wifwolf', '', '', '1234', '', '', 0),
('wifwolf', '', '', '1234', '', '', 0),
('kanchan', '', '', '1234', '', '', 0),
('kanchan', '', '', '1234', '', '', 0),
('kanchan', '', '', '1234', '', '', 0),
('kanchan', '', '', '1234', '', '', 0),
('anji', 'Anjila', 'Gurung', '1234', 'nayabazaar', '651651651', 36),
('lol', 'lol', 'lol', 'lol', 'lol', '55', 45),
('aayushma', 'Aayushma', 'Shrestha', '1234', 'Balaju', '123456', 20),
('lolol', 'lolol', 'lolol', 'lolol', 'lolol', 'lolol', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
