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
  `wcity` varchar(15) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `r_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`mobile`, `pin`, `name`, `bloodgroup`, `dob`, `haddress`, `hcity`, `waddress`, `wcity`, `lat`, `lon`, `r_date`, `last_login`) VALUES
(6565784002, '34434', '12', 'A+', '1995-02-12', 'BRIDGE STREET, NELLIKKUNNU TRISSUR KERALA', '', 'fghgjb', '', 10.5191229, 76.2419003, '2017-09-02 15:50:17', '2017-09-02 10:20:17'),
(6565784522, '546', '12', 'A+', '1995-02-12', 'BRIDGE STREET, NELLIKKUNNU TRISSUR KERALA', '', '', '', 10.5191229, 76.2419003, '2017-09-02 15:16:20', '2017-09-02 09:46:20'),
(6565784525, '4355', '12', 'A+', '1995-02-12', 'sg palya bangalore', '', '', '', 12.9309643, 77.6049218, '2017-09-02 15:13:54', '2017-09-02 09:43:54'),
(7844554521, 'rff', '12', 'A+', '1995-02-12', 'mysore', '', '', '', 12.2958104, 76.6393805, '2017-09-02 15:11:45', '2017-09-02 09:41:45'),
(7844554522, '23455', '12', 'A+', '1995-02-12', 'sg palya', '', '', '', 12.9309643, 77.6049218, '2017-09-02 15:12:51', '2017-09-02 09:42:51'),
(9567994833, '23', 'stanley', 'A+', '1986-04-12', 'malleswaram', 'TRISSUR', 'ASFDN', 'DSDF', 13.0030624, 77.5642928, '2017-09-01 10:38:23', '2017-09-01 04:40:32'),
(9567994891, '123', 'stanley', 'A+', '1986-04-12', 'BRIDGE STREET, NELLIKKUNNU TRISSUR KERALA', 'TRISSUR', 'ASFDN', 'DSDF', 10.519123077392578, 76.24189758300781, '2017-09-01 10:38:23', '2017-09-01 04:14:24'),
(9567994899, '53465', 'stanley', 'A+', '1986-04-12', 'sg palya bangalore', 'TRISSUR', 'ASFDN', 'DSDF', 12.930964469909668, 77.60491943359375, '2017-09-01 10:38:23', '2017-09-01 04:37:48'),
(9966332211, 'qwefdg', 'ght', 'A-', '1995-02-22', 'dubai', '', 'fghgjb', '', 25.2048493, 55.2707828, '2017-09-02 15:08:25', '2017-09-02 09:38:25'),
(9966332214, '3243545', 'ght', 'A-', '1995-02-22', 'dubai', '', 'fghgjb', '', 25.2048493, 55.2707828, '2017-09-02 15:09:11', '2017-09-02 09:39:11'),
(9967258869, '1234567', 'harsha ', 'AB+', '1994-05-04', 'nandhi layout', '', 'null', '', 13.0159906, 77.5338233, '2017-09-02 16:58:11', '2017-09-02 11:28:11'),
(9988776655, '123', 'name', 'A-', '1996-05-04', 'sg palya', 'bangalore', '', '', 12.930964469909668, 77.60491943359375, '2017-09-01 10:38:23', '2017-08-31 21:31:21');

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
