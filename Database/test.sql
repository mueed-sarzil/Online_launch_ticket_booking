-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 05:29 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `username`, `password`) VALUES
(1, 'sarzil', '1846699646', 'admin', 'admin123'),
(7, 'mueed', '01688719519', 'Hasan', 'mueed123');

-- --------------------------------------------------------

--
-- Table structure for table `cabininfo`
--

CREATE TABLE `cabininfo` (
  `id` int(15) NOT NULL,
  `cclass` varchar(20) NOT NULL,
  `seatno` int(15) NOT NULL,
  `fare` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `cabinno` int(20) NOT NULL,
  `launchname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabininfo`
--

INSERT INTO `cabininfo` (`id`, `cclass`, `seatno`, `fare`, `status`, `cabinno`, `launchname`) VALUES
(3, 'Double AC', 2, '1800', 'available', 12, 'parabat 12'),
(7, 'Single AC', 1, '1000-1200', 'available', 5, 'parabat 12');

-- --------------------------------------------------------

--
-- Table structure for table `cabinlist`
--

CREATE TABLE `cabinlist` (
  `id` int(10) NOT NULL,
  `cabinname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabinlist`
--

INSERT INTO `cabinlist` (`id`, `cabinname`) VALUES
(1, 'S-312');

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `id` int(10) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `transection` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancel`
--

INSERT INTO `cancel` (`id`, `mobile`, `transection`) VALUES
(1, '01747049043', 'tsd435');

-- --------------------------------------------------------

--
-- Table structure for table `fare`
--

CREATE TABLE `fare` (
  `id` int(10) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `cclass` varchar(20) NOT NULL,
  `price` varchar(15) NOT NULL,
  `charge` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fare`
--

INSERT INTO `fare` (`id`, `lname`, `cclass`, `price`, `charge`) VALUES
(8, 'parabat 10', 'Cabin Class', '1265', '80');

-- --------------------------------------------------------

--
-- Table structure for table `linfo`
--

CREATE TABLE `linfo` (
  `id` int(15) NOT NULL,
  `route` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `lmobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linfo`
--

INSERT INTO `linfo` (`id`, `route`, `lname`, `lmobile`) VALUES
(4, 'dhaka-barisal', 'parabat12', '01846699646'),
(5, 'dhaka-barisal', 'sundorban10', '01632099410');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `text`) VALUES
(5, 'All launch schedule is cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `paymentinfo`
--

CREATE TABLE `paymentinfo` (
  `id` int(10) NOT NULL,
  `merchantno` varchar(12) NOT NULL,
  `transection` varchar(12) NOT NULL,
  `refno` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentinfo`
--

INSERT INTO `paymentinfo` (`id`, `merchantno`, `transection`, `refno`) VALUES
(55, '01846699646', '67423', 234);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `rdate` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `mobile`, `email`, `password`, `rdate`, `gender`, `address`) VALUES
(2, 'sarzil', 'hasan', '1846699646', 'mueeddic@gmail.com', 'mueed123', '2018-09-13', 'male', 'Banasree');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(10) NOT NULL,
  `launchname` varchar(30) NOT NULL,
  `route` varchar(30) NOT NULL,
  `launchdate` date NOT NULL,
  `launchtime` time(6) NOT NULL,
  `portname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `launchname`, `route`, `launchdate`, `launchtime`, `portname`) VALUES
(77, 'parabat12', 'dhaka-barisal', '2018-08-22', '20:00:00.000000', 'barisal');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `umobile` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `cabclass` varchar(20) NOT NULL,
  `number` int(15) NOT NULL,
  `cabnum` varchar(30) NOT NULL,
  `broading` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `uname`, `gender`, `umobile`, `email`, `lname`, `cabclass`, `number`, `cabnum`, `broading`) VALUES
(4, 'mueed', '2018-08-22', '01846699646', 'mueeddic@gmail.com', 'parabat 12', 'Single AC', 1, '312', 'Sadarghat(8.0PM)');

-- --------------------------------------------------------

--
-- Table structure for table `varify`
--

CREATE TABLE `varify` (
  `id` int(10) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `transection` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `varify`
--

INSERT INTO `varify` (`id`, `mobile`, `transection`) VALUES
(1, '01846699646', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabininfo`
--
ALTER TABLE `cabininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabinlist`
--
ALTER TABLE `cabinlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fare`
--
ALTER TABLE `fare`
  ADD PRIMARY KEY (`id`,`lname`);

--
-- Indexes for table `linfo`
--
ALTER TABLE `linfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  ADD PRIMARY KEY (`id`,`refno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`,`launchdate`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`,`umobile`);

--
-- Indexes for table `varify`
--
ALTER TABLE `varify`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cabininfo`
--
ALTER TABLE `cabininfo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cabinlist`
--
ALTER TABLE `cabinlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cancel`
--
ALTER TABLE `cancel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fare`
--
ALTER TABLE `fare`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `linfo`
--
ALTER TABLE `linfo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `varify`
--
ALTER TABLE `varify`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
