-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 06:16 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_iba`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_clients`
--

CREATE TABLE `all_clients` (
  `id` int(11) NOT NULL,
  `clientID` varchar(40) NOT NULL,
  `reg_date` varchar(20) DEFAULT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `otherphonenumber` varchar(20) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
 
-- --------------------------------------------------------

--
-- Table structure for table `monthlyloans`
--

CREATE TABLE `monthlyloans` (
  `id` int(11) NOT NULL,
  `regDate` varchar(10) DEFAULT NULL,
  `clientID` varchar(20) NOT NULL,
  `firstname` text,
  `lastname` text,
  `funds_invested` double DEFAULT NULL,
  `subscription` double DEFAULT NULL,
  `investment` double DEFAULT NULL,
  `previous_loan` double DEFAULT '0',
  `newLoan` double DEFAULT NULL,
  `total_1` double DEFAULT NULL,
  `interest` double DEFAULT NULL,
  `total_2` double DEFAULT NULL,
  `payment` double DEFAULT NULL,
  `balance` double NOT NULL,
  `slag` int(5) NOT NULL COMMENT 'if 0 then client those not owe else 1 the clients owes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` text NOT NULL,
  `user_username` text NOT NULL,
  `user_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fullname`, `user_username`, `user_password`) VALUES
(1, 'Jane Mapalane', 'mapalanej', '46332fc16e28cb1ee7d85e91135900bf'),
(2, 'Mabonolo Nthako', 'mabonolon', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_clients`
--
ALTER TABLE `all_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthlyloans`
--
ALTER TABLE `monthlyloans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_clients`
--
ALTER TABLE `all_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `monthlyloans`
--
ALTER TABLE `monthlyloans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
