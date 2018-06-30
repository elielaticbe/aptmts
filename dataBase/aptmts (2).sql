-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 03:46 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aptmts`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `busid` int(225) NOT NULL,
  `companyid` int(11) NOT NULL,
  `routeid` int(11) NOT NULL,
  `busNumber` varchar(10) NOT NULL,
  `busTerminal` varchar(50) NOT NULL,
  `departureTime` time NOT NULL,
  `arrivalTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busid`, `companyid`, `routeid`, `busNumber`, `busTerminal`, `departureTime`, `arrivalTime`) VALUES
(3, 0, 0, 'UAE 123 A', 'qualicel', '12:00:00', '02:00:00'),
(6, 5, 0, 'UAE 123 A', 'qualicel', '12:00:00', '07:00:00'),
(7, 5, 0, 'UAR 123B', 'Namayiba', '12:00:00', '05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `chiefadministrator`
--

CREATE TABLE `chiefadministrator` (
  `id` int(225) NOT NULL,
  `companyid` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `accesslevel` int(3) NOT NULL,
  `branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chiefadministrator`
--

INSERT INTO `chiefadministrator` (`id`, `companyid`, `fName`, `image`, `lName`, `email`, `userName`, `password`, `sex`, `accesslevel`, `branch`) VALUES
(1, 0, '', '', '', '', 'ADMIN', 'admin', '', 0, ''),
(2, 0, 'Elijah', '', 'Laticbe', 'elielaticbe@gmail.com', 'elie', '1234', 'Male', 0, ''),
(3, 0, 'eliya', '', 'laticbe', 'elaticbe@gmail.com', 'elie', 'baby', 'Male', 0, ''),
(4, 0, 'fff', '', 'ggg', 'fg@gmail.com', 'try', '2345', 'male', 2, ''),
(5, 0, 'admini', '', 'john', 'john@gmail.com', 'jn', '12345', 'Male', 1, ''),
(6, 0, 'john', '', 'doe', 'doe@gmail.com', '', '', '', 2, 'Gulu'),
(7, 0, 'jadmin', '', 'admin', 'ad@gmail.com', 'fff', '343d9040a671c45832ee5381860e2996', 'female', 2, 'entebe'),
(8, 0, 'Elijah', 'C:xampp	mpphp9690.tmp', 'Laticbe', 'elijahlaticbe@yahoo.com', 'elie', '6848d756da66e55b42f79c0728e351ad', 'Male', 1, ''),
(9, 0, 'okiror', 'C:xampp	mpphp687B.tmp', 'frank', 'okirorfrank@gmail.com', 'frank', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 1, ''),
(10, 0, 'emong', '', 'isaac', 'isaac@gmail.com', 'em', '81dc9bdb52d04dc20036dbd8313ed055', 'male', 2, 'gulu'),
(11, 0, 'ocom', 'C:xampp	mpphpB380.tmp', 'emmanuel', 'ocom\"gmail.com', 'oc', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyid` int(225) NOT NULL,
  `logo` varchar(40) NOT NULL,
  `companyName` varchar(40) NOT NULL,
  `companyBusType` varchar(30) NOT NULL,
  `numberOfBranches` int(11) NOT NULL,
  `mobileMoneyNumber` varchar(14) NOT NULL,
  `creditCardNumber` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyid`, `logo`, `companyName`, `companyBusType`, `numberOfBranches`, `mobileMoneyNumber`, `creditCardNumber`, `email`) VALUES
(1, '', 'Gaaga', 'Long distance bus', 5, '+256 784090599', '1235634252435272', 'elielaticbe@gmail.com'),
(2, '', 'KK', 'Long distance bus', 2, '+256 784090589', '35466666666', 'info@kk.com'),
(3, 'C:xampp	mpphp3894.tmp', 'Akamba', 'Long distance bus', 4, '+256 784090599', 'we787654545uty', 'elaticbe@gmail.com'),
(4, 'C:xampp	mpphp871B.tmp', 'gaagaa', 'Long distance bus', 4, '0781564622', '1234', 'gaagaa@gmail.com'),
(5, 'C:xampp	mpphp486E.tmp', 'gaagaa', 'Comutor bus', 3, '0781564622', '1234', 'gaagaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(225) NOT NULL,
  `companyid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `venue` varchar(60) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `companyid`, `name`, `description`, `venue`, `startDate`, `endDate`) VALUES
(1, 0, 'Tulumbe Nambole', 'Come lets board to Nambole and support the cranes', 'Mandela National Stadium', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `junioradministrator`
--

CREATE TABLE `junioradministrator` (
  `id` int(225) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idNumber` varchar(20) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `accesslevel` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `junioradministrator`
--

INSERT INTO `junioradministrator` (`id`, `fName`, `lName`, `email`, `idNumber`, `branch`, `gender`, `accesslevel`) VALUES
(1, 'Frank', '', 'fokiror@gmail.com', '13/u/511/eve', 'Main', '0', 0),
(2, 'Benjamin', '', 'bokiror@gmail.com', '13/u/521/eve', 'Gulu', '0', 0),
(3, 'Benjamin', '', 'bokiror@gmail.com', '13/u/521/eve', 'Gulu', '0', 0),
(4, 'Frank', 'Junior', 'fjunior@gmail.com', '13/u/531/eve', 'main', '0', 0),
(5, 'Benie', 'Man', 'bman@gmail.com', '1233A', 'Gulu', 'press', 0),
(6, 'Frank', 'okiror', 'okirorfrank3@gmail.com', '234', 'kampala', 'press', 2),
(7, 'lukenge', 'henry', 'lukenge@gmail.com', '1234', 'mbale', 'press', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(225) NOT NULL,
  `companyid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `duration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `companyid`, `name`, `description`, `duration`) VALUES
(1, 0, 'Chrismas offer', 'Ten percent discount for every ticket purchased', 'one month ');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `routeid` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  `departingarea` text NOT NULL,
  `destinationarea` text NOT NULL,
  `routefare` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`routeid`, `companyid`, `departingarea`, `destinationarea`, `routefare`) VALUES
(3, 0, 'soroti', 'kampala', '20000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busid`);

--
-- Indexes for table `chiefadministrator`
--
ALTER TABLE `chiefadministrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `junioradministrator`
--
ALTER TABLE `junioradministrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`routeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `busid` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `chiefadministrator`
--
ALTER TABLE `chiefadministrator`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyid` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `junioradministrator`
--
ALTER TABLE `junioradministrator`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `routeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
