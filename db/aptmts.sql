-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2017 at 02:44 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyid` int(225) NOT NULL,
  `logo` varchar(40) NOT NULL,
  `companyName` varchar(40) NOT NULL,
  `companyBusType` varchar(30) NOT NULL,
  `mobileMoneyNumber` varchar(14) NOT NULL,
  `companyemail` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `chiefemail` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `accesslevel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(50) NOT NULL,
  `AgencyType` varchar(50) NOT NULL,
  `AgencyName` varchar(50) NOT NULL,
  `PointOfDeparture` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `passengerName` varchar(50) NOT NULL,
  `uniqueTicketCode` varchar(50) NOT NULL,
  `ticketdateOfCreation` date NOT NULL,
  `ticketValidity` varchar(50) NOT NULL,
  `ticketPaymentConfirmation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `busid` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chiefadministrator`
--
ALTER TABLE `chiefadministrator`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyid` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `routeid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(50) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
