-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 04:48 PM
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
-- Database: `inmar`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `name` text NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `uemail` varchar(30) NOT NULL,
  `groupname` varchar(20) NOT NULL,
  `groupid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`name`, `cemail`, `phoneno`, `uemail`, `groupname`, `groupid`) VALUES
('harsha', 'harsha@inmar.com', '7548965478', 'ratnam@inmar.com', 'mansion', '4567'),
('deekshith', 'agss@inmar.com', '8308308458', 'ratnam@inmar.com', 'mansion', '4567'),
('srinivas', 'mannem@inmar.com', '8008714209', 'ratnam@inmar.com', 'inmar', '52364'),
('ahmed', 'hasan@inmar.com', '7894562588', 'ratnam@inmar.com', '', ''),
('pavan', 'nadipi@inmar.com', '9063251066', 'rajan@inmar.com', 'pavan', '14501A1278'),
('deekshith', 'agss@inmar.com', '7896230414', 'rajan@inmar.com', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `groupname` varchar(20) NOT NULL,
  `groupid` varchar(10) NOT NULL,
  `uemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`groupname`, `groupid`, `uemail`) VALUES
('pavan', '14501A1278', 'rajan@inmar.com'),
('mansion', '4567', 'ratnam@inmar.com'),
('inmar', '52364', 'ratnam@inmar.com'),
('mouni', '8754', 'ratnam@inmar.com');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`fname`, `lname`, `email`, `aadhar`, `phoneno`, `password`) VALUES
('mani', 'msnjabf', 'jbhsdschb@inmar.com', '875452455254', '7254625485', 'wqdvgA1@'),
('kumajbw', 'kahkjnc', 'ksdj@inmar.com', '811245878585', '4597547855', 'ms@Q1yujahddjej'),
('asjhb', 'mannnjd', 'man@inmar.com', '758447845885', '7545888745', 'bcbsdb!2A'),
('raju', 'mani', 'mani@inmar.com', '785469857458', '8965745698', 'M@13srgu'),
('ravi', 'rajan', 'rajan@inmar.com', '896574524575', '9974587548', 'rajan@123'),
('mani', 'ratnam', 'ratnam@inmar.com', '874596857845', '9897969594', 'Mani123@'),
('syam', 'sandep', 'saym@inmar.com', '789654123123', '9676931355', 'ASDqwe@1'),
('mouni', 'vinnu', 'vinnu@inmar.com', '754896541230', '8542457812', 'mounI@78');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`groupid`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
