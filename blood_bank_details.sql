-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2017 at 01:55 PM
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
-- Table structure for table `blood_bank_details`
--

CREATE TABLE `blood_bank_details` (
  `b_username` varchar(20) NOT NULL,
  `pin` varchar(25) NOT NULL,
  `bloodbank_name` varchar(20) NOT NULL,
  `contact1` bigint(12) NOT NULL,
  `contact2` bigint(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `h_lat` double NOT NULL,
  `h_lon` double NOT NULL,
  `r_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_bank_details`
--

INSERT INTO `blood_bank_details` (`b_username`, `pin`, `bloodbank_name`, `contact1`, `contact2`, `address`, `h_lat`, `h_lon`, `r_date`, `last_login`, `email`) VALUES
('567456', '1234', '345', 1234567890, 456734567, 'sg palya', 12.9309643, 77.6049218, '2017-09-02 16:50:40', '2017-09-02 11:20:40', '4'),
('ads', '122', '', 0, 0, '', 0, 0, '2017-09-01 11:43:40', '2017-09-01 06:16:14', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_bank_details`
--
ALTER TABLE `blood_bank_details`
  ADD PRIMARY KEY (`b_username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
