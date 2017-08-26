-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2017 at 07:49 PM
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
-- Database: `redline`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `mobile` bigint(10) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `dob` date NOT NULL,
  `haddress` varchar(50) NOT NULL,
  `hcity` varchar(25) NOT NULL,
  `waddress` varchar(50) NOT NULL,
  `wcity` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`mobile`, `pin`, `name`, `bloodgroup`, `dob`, `haddress`, `hcity`, `waddress`, `wcity`) VALUES
(6, 'sfg', 'dsdfg', 'B+', '5555-05-25', 'Sg Paliya', 'hcity', '', ''),
(61, 'adsf', 'dsdfg', 'B+', '5555-05-25', 'Sg Paliya', 'hcity', '', ''),
(6135, 'sfg', 'dsdfg', 'B+', '5555-05-25', 'Sg Paliya', 'hcity', '', ''),
(98745, 'sta', 'Sta 1', ' ', '0000-00-00', 'n', 'hcity', '', ''),
(98746, 'o', 'Sta 1', ' ', '0000-00-00', 'n', 'hcity', '', ''),
(9654781230, 'lak', 'Lakshman', 'B-', '1998-10-10', 'Malleshwarem', 'hcity', 'S', 'Bangalore'),
(9654785213, 'st', 'Stanly', 'O+', '1986-11-05', 'Bangalore', 'hcity', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`mobile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
