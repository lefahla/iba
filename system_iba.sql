-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2021 at 01:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_iba`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `anotherONe` ()  BEGIN
select * from monthlyloans;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `anotherONed` ()  BEGIN
select * from monthlyloans;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `anotherONedd` ()  BEGIN
select * from monthlyloans;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `testing` ()  BEGIN 
	SELECT * FROM monthlyloans;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `thabo` ()  BEGIN
select * from monthloans;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tshabo` ()  BEGIN
select * from monthloans;
END$$

DELIMITER ;

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

--
-- Dumping data for table `all_clients`
--

INSERT INTO `all_clients` (`id`, `clientID`, `reg_date`, `firstname`, `lastname`, `gender`, `phonenumber`, `otherphonenumber`, `email`, `address`, `city`) VALUES
(1, 'IBA20170001', '23rd May 2017', 'Limpho', 'Sehlabo', 'Female', '+26658525456', '+26657202548', 'limphosehlabo@gmail.com', 'Leribe Hlotse', 'Leribe'),
(2, 'IBA20170002', '23rd May 2017', 'Thabo', 'nth', 'Male', '+26622222222', '', 'lefahla@gmail.com', 'Koalabata ', 'Berea'),
(3, 'IBA20170003', '23rd May 2017', 'rethabiseng ', 'nth', 'Female', '+26622222222', '', 'retha@yahoo.com', 'Koalabata tlasa ntate Lefasa', 'Berea'),
(4, 'IBA20170004', '23rd May 2017', 'nolo', 'nth', 'Female', '+26650450139', '+26663288667', 'cleo@gmail.com', 'Ha Matala pela tribute Guest House', 'Maseru'),
(5, 'IBA20170005', '23rd May 2017', 'bear', 'nth', 'Female', '+26650450139', '+26622222222', 'boni@gmail.com', 'Koalabata pela ntate Lefasa', 'Maseru'),
(6, 'IBA20170006', '3rd June 2017', 'Relebohile', 'Motsoeneng', 'Female', '+26656322536', '', 'motsoenengrdm@gmail.com', 'Ha Hoohlo', 'Maseru'),
(7, 'IBA20170007', '3rd June 2017', 'Lerotholi', 'Mpeoa', 'Female', '+26622222222', '', 'lerotholi@gam.ls', 'Koalabata hona tjena', 'Maseru'),
(8, 'IBA20170008', '3rd June 2017', 'Lerotholinyane', 'Mpeoa', 'Female', '+26622222222', '', 'lerotholi@gam.ls', 'Koalabata hona tjena', 'Maseru'),
(9, 'IBA20170009', '13th June 2017', 'Rethabile', 'Mosoai', 'Female', '+26650545878', '+26622222222', 'retha@gmail.com', 'Matlameng Ha motsatsa', 'Leribe'),
(10, 'IBA20170010', '13th June 2017', 'thabo', 'rantjako', 'Female', '+26622222222', '', 're.t@gmail.com', 'Koalbata', 'Masse'),
(11, 'IBA20170011', '13th June 2017', 'Leo', 'leo', 'Female', '+26656202158', '', 'leo@gmail.com', 'ha matala', 'Maseru'),
(12, 'IBA20170012', '20th June 2017', 'thaiso', 'nth', 'Female', '+26663635423', '', 'blaza.nth@gmail.com', 'Koalabata Cenez Corner', 'Maseru'),
(15, 'IBA20180001', '14th March 2018', 'libata', 'libata', 'Male', '562032145', '56201424', 'lefahla@gmail.com', 'khubetsoana', 'maseru'),
(16, 'IBA20180001', '14th March 2018', 'shakhane', 'tso', 'Female', '22222222', '5968547', 'mtso@pedaids.org', 'maseru sehlabeng', 'maseru'),
(17, 'IBA20180017', '14th March 2018', 'reabetsoe ', 'nth', 'Female', '56565656', '58546215', 'thabo.nth@gmail.cm', 'masrukhubetsoana\r\n', 'Maseru'),
(18, 'IBA20180018', '14th March 2018', 'matlaeng', 'matlameng', 'Female', '5555555', '55554545', 'matlamenghc@gmail.com', 'Leribe Malameng Leshoht', 'Leribe'),
(19, 'IBA20180019', '14th May 2018', 'Molorane', 'Sello', 'Female', '56256313', '', 'morale@gmail.com', 'Matlameng Ha Letsie', 'Leribe'),
(20, 'IBA20180020', '20th May 2018', 'Thabang', 'Molapo', 'Male', '22222222', '69000977', 'molapo@pedaids.org', 'Linotsing\r\nThabana morena', 'Mafeteng'),
(21, 'IBA20180021', '20th May 2018', 'Seba', 'Seba', 'Male', '+26622222222', '', 'lefahla@gmail.com', 'aldfsldfajs', 'Maseru'),
(22, 'IBA20180022', '20th May 2018', 'Morapeli', 'Leboea', 'Male', '+26622222222', '', 'leboea@gmail.com', 'Mafeteng pela ntate bereng oa morena', 'Mafeteng'),
(23, 'IBA20180023', '20th May 2018', 'Asdfsdf', 'Sdfsadf', 'Male', '0026656202104', '', 'sdfsfda@gmai.com', 'sfas', 'Maseru'),
(24, 'IBA20180024', '20th May 2018', 'Moefe', 'Moefe', 'Male', '+26656584572', '', 'moefe@gmail.com', 'Koalabata', 'Maseru'),
(25, 'IBA20180025', '20th May 2018', 'MoreeemO', 'MOREE', 'Male', '+26656895626', '', 'lefahla@gmail.com', 'sdfsf', 'Maseru'),
(26, 'IBA20180026', '20th May 2018', 'Asdf', 'Sdfa', 'Male', '+26659548745', '', 'sfa@gmai.com', 'dsfasdf', 'Maseru'),
(27, 'IBA20180027', '20th May 2018', 'Sss', 'Sfsf', 'Male', '+26656565656', '', 't@gmail.com', 'sfa', 'Maseru'),
(28, 'IBA20180028', '20th May 2018', 'Thabo', 'NTHKO', 'Male', '+26665620215', '', 'SFAS@GMAIL.COM', 'SFSDFA', 'Maseru'),
(29, 'IBA20180029', '21st May 2018', 'Sdf', 'Sdfsdf', 'Mafeteng', '+26656203215', '', 'sfa@gmail.com', 'sdfs', 'Maseru'),
(30, 'IBA20180030', '6th June 2018', 'Malibe ', 'Malibenyane', 'Male', '+26655555555', '+26655555555', 'lefahl@gmail.com', 'dsfsf', 'Maseru'),
(31, 'IBA20180031', '11th June 2018', 'blaza', 'Ramothamo', 'Male', '+26658585858', '+26696969696', 'rblaza@gmail.com', 'Koalabata pela ha ntate morena', 'Berea'),
(32, 'IBA20190030', '2019-12-21', 'Rapelang', 'nth', 'Male', '+26634343434', '+26634324343', 'leafhla@gmail.com', 'Koalabata', 'Maseru');

-- --------------------------------------------------------

--
-- Table structure for table `monthlyloans`
--

CREATE TABLE `monthlyloans` (
  `id` int(11) NOT NULL,
  `regDate` varchar(10) DEFAULT NULL,
  `clientID` varchar(20) NOT NULL,
  `firstname` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `funds_invested` double DEFAULT NULL,
  `subscription` double DEFAULT NULL,
  `investment` double DEFAULT NULL,
  `previous_loan` double DEFAULT 0,
  `newLoan` double DEFAULT NULL,
  `total_1` double DEFAULT NULL,
  `interest` double DEFAULT NULL,
  `total_2` double DEFAULT NULL,
  `payment` double DEFAULT NULL,
  `balance` double NOT NULL,
  `slag` int(5) NOT NULL COMMENT 'if 0 then client those not owe else 1 the clients owes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthlyloans`
--

INSERT INTO `monthlyloans` (`id`, `regDate`, `clientID`, `firstname`, `lastname`, `funds_invested`, `subscription`, `investment`, `previous_loan`, `newLoan`, `total_1`, `interest`, `total_2`, `payment`, `balance`, `slag`) VALUES
(1, '10-10-2017', 'IBA20170004', 'Leo', 'leo', 1000, 200, 554, 600, NULL, 500, 100, 600, NULL, 600, 1),
(2, '12-06-2017', 'IBA20170011', 'nolo', 'nth', 1000, 200, 554, 1000, NULL, 1000, 200, 1200, NULL, 1200, 1),
(3, '16-07-2017', 'IBA20170011', 'Leo', 'leo', 50000, 4545, 4145454, 600, NULL, 600, 120, 720, NULL, 720, 1),
(4, '25-02-2018', 'IBA20170011', 'Leo', 'leo', 50000, 4545, 4145454, 720, NULL, 720, 144, 864, NULL, 864, 1),
(5, '01-03-2018', 'IBA20170007', 'Lerotholi', 'Mpeoa', 50000, 4545, 4145454, 0, 8000, 8000, 1600, 9600, NULL, 9600, 1),
(6, '01-03-2018', 'IBA20170005', 'bear', 'nth', 50000, 4545, 4145454, 100, 100, 100, 20, 120, NULL, 120, 1),
(7, '22-05-2018', 'IBA20170005', 'bear', 'nth', 29, 4545, 4145454, 120, 500, 620, 124, 744, NULL, 744, 1),
(8, '29-06-2018', 'IBA20170007', 'Lerotholi', 'Mpeoa', 50000, 4545, 4145454, 0, 500, 500, 100, 600, NULL, 600, 1),
(9, '29-06-2018', 'IBA20180023', 'Asdfsdf', 'Sdfsadf', 50000, 4545, 4145454, 0, 500, 500, 100, 600, NULL, 600, 1),
(10, '10-07-2018', 'IBA20170002', 'Thabo', 'nth', 50000, 4545, 4145454, 0, 500, 500, 100, 600, NULL, 600, 1),
(11, '11-07-2018', 'IBA20170011', 'Leo', 'leo', 50000, 4545, 4145454, 864, 2000, 2864, 572.8000000000001, 3436.8, NULL, 3436.8, 1),
(12, '21-07-2018', 'IBA20180023', 'Asdfsdf', 'Sdfsadf', 50000, 4545, 4145454, 600, 100, 700, 140, 840, NULL, 840, 1);

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
(1, 'Jane leo', 'leoj', '46332fc16e28cb1ee7d85e91135900bf'),
(2, 'nolo nth', 'nolon', '81dc9bdb52d04dc20036dbd8313ed055'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `monthlyloans`
--
ALTER TABLE `monthlyloans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
