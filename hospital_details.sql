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
-- Table structure for table `hospital_details`
--

CREATE TABLE `hospital_details` (
  `uname` varchar(6) CHARACTER SET latin1 NOT NULL,
  `pin` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `address` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `city` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `mobile` bigint(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital_details`
--

INSERT INTO `hospital_details` (`uname`, `pin`, `name`, `address`, `city`, `mobile`) VALUES
('hos001', 'hospital001', 'Sagar ', 'Tilak', 'Bangalore', 80),
('hos002', 'hospital002', 'Sparsh hospital-Infantry Road', 'Infantry Road', 'Bangalore', 80),
('hos003', 'hospital003', 'Mallya Hospital', 'Vittal Mallya Road', 'Bangalore', 9567994891),
('hos004', 'hospital004', 'Victoria Hospital', 'Near City Market, Fort Road,', 'Bangalore', 80),
('hos005', 'hospital005', 'Northside Manipal Hospital OPD', '11th Main Road, Opp Railway Station', 'Bangalore', 80),
('hos006', 'hospital006', 'Bangalore Hospital', 'Basavanagudi', 'Bangalore', 80),
('hos007', 'hospital007', 'Bangalore Hospital', 'Rashtriya Vidyalaya Road, Basavanagudi', 'Bangalore', 0),
('hos008', 'hospital008', 'Santosh Hospital', 'Promenade Road', 'Bangalore', 80),
('hos009', 'hospital009', 'Chiraayu Hospital', 'Pemme Gowda Rd', 'Bangalore', 80),
('hos010', 'hospital010', 'Apollo Specialty Hospital', '', 'Bangalore', 7410037367),
('hos011', 'hospital011', 'Manipal Hospital', 'HAL Road', 'Bangalore', 7410037367),
('hos012', 'hospital012', 'Madhu Hospital', '58m Muniyappa Complex, Agrahara Dasarahalli Road', 'Bangalore', 0),
('hos013', 'hospital013', 'Columbia Asia Hospital ', 'Kirloskar Business Park, Hebbal', 'Bangalore', 7410037367),
('hos014', 'hospital014', 'Bangalore Baptist Hospital', 'Bellary Road', 'Bangalore', 80),
('hos015', 'hospital015', 'Bangalore Baptist Hospital', 'Bellary Road, Next To Canara Bank', 'Bangalore', 9448496602),
('hos016', 'hospital016', 'Hosmat Hospital', 'Magrath Road, Off Richmond Road', 'Bangalore', 7410037367),
('hos017', 'hospital017', 'Fortis La Femme', 'Richmond Road', 'Bangalore', 80674),
('hos018', 'hospital018', 'Life Care Hospital', 'Gangothri Circle, Om Complex,?', 'Bangalore', 9620388839),
('hos019', 'hospital019', 'Greenview Medical Center', 'Sector V, Oppo. Agara Lake', 'Bangalore', 80),
('hos020', 'hospital020', 'Sagar Hospital', '30\'th Cross, Tilak Nagar', 'Bangalore', 80),
('hos021', 'hospital021', 'Apollo Dental Clinic', '3rd Block, Near Bda Complex', 'Bangalore', 7410037367),
('hos022', 'hospital022', 'Vikram Hospital', 'Millers Road, Opposite To St. Annes School', 'Bangalore', 80),
('hos023', 'hospital023', 'Fortis Hospital', 'Cunningham Rd,', 'Bangalore', 80),
('hos024', 'hospital024', 'M S Ramaiah Memorial Hospital?', 'New Bel Road', 'Bangalore', 80),
('hos025', 'hospital025', 'M S Ramaiah Memorial Hospital?', 'New Bel Road, M S Ramaiah Nagar', 'Bangalore', 80),
('hos026', 'hospital026', 'Columbia Asia Referral Hospital?', 'Brigade Gateway', 'Bangalore', 7410037367),
('hos027', 'hospital027', 'BGS Global Hospital', 'BGS Health & Education City,', 'Bangalore', 80),
('hos028', 'hospital028', 'BGS Global Hospital', 'BGS Health & Education City, Uttarahalli Main Road', 'Bangalore', 80),
('hos029', 'hospital029', 'Nava Chethana Hospital', 'Opposite Railwheel Factory, Yelahanka New Town', 'Bangalore', 0),
('hos030', 'hospital030', 'Apurva Mother And Child Hospital', 'B B Road, Yelahanka Old Town', 'Bangalore', 80),
('hos031', 'hospital031', 'Dr. Malathi Manipal Hospital', '', 'Bangalore', 7410037367),
('hos032', 'hospital032', 'Dr Agarwals Eye Hospital?', 'Pavanadhama, 80 feet road', 'Bangalore', 7410037367),
('hos033', 'hospital033', 'Fortis Hospital', '80 Feet Road', 'Bangalore', 80),
('hos034', 'hospital034', 'Apollo Hospitals', 'Opposite IIM', 'Bangalore', 80),
('hos035', 'hospital035', 'Agarwal Eye Hospital', 'C K Emerald No, N.S. Palya', 'Bangalore', 7410037367),
('hos036', 'hospital036', 'Fortis Hospital - Bannerghatta?', 'Bannerghatta Road', 'Bangalore', 80662),
('hos037', 'hospital037', 'Apollo Hospitals?', 'Opposite IIM, Bannerghatta Road', 'Bangalore', 80),
('hos038', 'hospital038', 'Sagar Hospital', 'Banashankari?', 'Bangalore', 80),
('hos039', 'hospital039', 'Dr Agarwals Eye Hospital', 'C K Emerald No, N.S. Palya', 'Bangalore', 0),
('hos040', 'hospital040', 'Vasavi Hospital', '70th Cross Road Kumaraswamy Layout', 'Bangalore', 0),
('hos041', 'hospital041', 'Indira IVF?', 'Woody\'s Building,  J P Nagar,', 'Bangalore', 0),
('hos042', 'hospital042', 'Dr Agarwals Eye Hospital?', 'KADE Complex, Basaveshwara Nagar', 'Bangalore', 0),
('hos043', 'hospital043', 'BHARATHY HOSPITAL', 'Nagarbhavi Main Road, Prashanth Nagar', 'Bangalore', 2348),
('hos044', 'hospital044', 'Fortis Hospital', 'West of Chord Road', 'Bangalore', 80),
('hos045', 'hospital045', 'Aster CMI Hospital', 'New Airport Road', 'Bangalore', 7410037367),
('hos046', 'hospital046', 'Sparsh Hospital?', 'Bommasandra', 'Bangalore', 80),
('hos047', 'hospital047', 'Apollo White Dental Clinic', 'Hosur-Sarjapur Road', 'Bangalore', 0),
('hos048', 'hospital048', 'Apollo White Dental Clinic', 'Hosur-Sarjapur Road', 'Bangalore', 7410037367),
('hos049', 'hospital049', 'Sakra World Hospital?', 'Varthur Hobli', 'Bangalore', 0),
('hos050', 'hospital050', 'Sakra World Hospital ', 'Varthur Hobli, Opp Intel', 'Bangalore', 80),
('hos051', 'hospital051', 'Leena Multispeciality Hospital?', 'Budigere Road, Devanahalli,', 'Bangalore', 0),
('hos052', 'hospital052', 'Dr. B.R. Ambeker Medical College & Hospital', 'Kadugondanahalli,', 'Bangalore', 2547),
('hos053', 'hospital053', 'Appollo Hospitals', 'Bannerghatta Road,', 'Bangalore', 26304050),
('hos054', 'hospital054', 'Appollo Hospitals', 'Platform Road, Near Mantri Mall,', 'Bangalore', 46688999),
('hos055', 'hospital055', 'Adarsh Multi Speciality Hospital', 'Near Andhra Bank, Kengeri Satellite Town,', 'Bangalore', 2848),
('hos056', 'hospital056', 'Nayak Hospital', '5th Cross Road, Gayatrinagar,', 'Bangalore', 80),
('univer', 'uni', 'Christ', 'ban', 'Bangalore', 9632587410);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital_details`
--
ALTER TABLE `hospital_details`
  ADD PRIMARY KEY (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
