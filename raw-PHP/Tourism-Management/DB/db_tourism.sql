-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2015 at 05:17 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_req_bandrban`
--

CREATE TABLE IF NOT EXISTS `tbl_req_bandrban` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `package` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `date` varchar(2) NOT NULL,
  `journy_time` varchar(4) NOT NULL,
  `discript` text NOT NULL,
  `money_transfer_medium` varchar(10) NOT NULL,
  `amount` float NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_req_bandrban`
--

INSERT INTO `tbl_req_bandrban` (`id`, `name`, `package`, `month`, `date`, `journy_time`, `discript`, `money_transfer_medium`, `amount`, `email`) VALUES
(1, 'ds', 1, '1', '1', '6pm', 'asdas', 'DDBL', 100.5, 'asd'),
(2, 'sad', 5, 'January', '1', '6 A.', 'sadasd', 'Bkash', 2000, 'asdasd'),
(3, 'coloum Farguson', 3, 'January', '1', '6 A.', 'dsfdsf weew ', 'Bkash', 3500, 'sdasd@something.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_req_coxbazar`
--

CREATE TABLE IF NOT EXISTS `tbl_req_coxbazar` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `package` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `date` varchar(2) NOT NULL,
  `journy_time` varchar(4) NOT NULL,
  `discript` text NOT NULL,
  `money_transfer_medium` varchar(10) NOT NULL,
  `amount` float NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_req_coxbazar`
--

INSERT INTO `tbl_req_coxbazar` (`id`, `name`, `package`, `month`, `date`, `journy_time`, `discript`, `money_transfer_medium`, `amount`, `email`) VALUES
(0, '', 3, 'January', '1', '6 A.', '', 'Bkash', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_req_rangamati`
--

CREATE TABLE IF NOT EXISTS `tbl_req_rangamati` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `package` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `date` varchar(2) NOT NULL,
  `journy_time` varchar(4) NOT NULL,
  `discript` text NOT NULL,
  `money_transfer_medium` varchar(10) NOT NULL,
  `amount` float NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_req_rangamati`
--

INSERT INTO `tbl_req_rangamati` (`id`, `name`, `package`, `month`, `date`, `journy_time`, `discript`, `money_transfer_medium`, `amount`, `email`) VALUES
(0, '', 3, 'January', '1', '6 A.', '', 'Bkash', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_req_shatgambuj`
--

CREATE TABLE IF NOT EXISTS `tbl_req_shatgambuj` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `package` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `date` varchar(2) NOT NULL,
  `journy_time` varchar(4) NOT NULL,
  `discript` text NOT NULL,
  `money_transfer_medium` varchar(10) NOT NULL,
  `amount` float NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_req_shatgambuj`
--

INSERT INTO `tbl_req_shatgambuj` (`id`, `name`, `package`, `month`, `date`, `journy_time`, `discript`, `money_transfer_medium`, `amount`, `email`) VALUES
(0, '', 0, '', '', '', '', '', 0, ''),
(0, '', 0, '', '', '', '', '', 0, ''),
(0, '', 0, '', '', '', '', '', 0, ''),
(0, '', 3, 'January', '1', '6 A.', '', 'Bkash', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_req_shylet`
--

CREATE TABLE IF NOT EXISTS `tbl_req_shylet` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `package` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `date` varchar(2) NOT NULL,
  `journy_time` varchar(4) NOT NULL,
  `discript` text NOT NULL,
  `money_transfer_medium` varchar(10) NOT NULL,
  `amount` float NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_req_sundarban`
--

CREATE TABLE IF NOT EXISTS `tbl_req_sundarban` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `package` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `date` varchar(2) NOT NULL,
  `journy_time` varchar(4) NOT NULL,
  `discript` text NOT NULL,
  `money_transfer_medium` varchar(10) NOT NULL,
  `amount` float NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_req_sundarban`
--

INSERT INTO `tbl_req_sundarban` (`id`, `name`, `package`, `month`, `date`, `journy_time`, `discript`, `money_transfer_medium`, `amount`, `email`) VALUES
(0, '', 3, 'January', '1', '6 A.', '', 'Bkash', 0, ''),
(0, '', 3, 'January', '1', '6 A.', '', 'Bkash', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'mehedi', '91ec8d992540095dccbaa04a3e5ba55f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_req_bandrban`
--
ALTER TABLE `tbl_req_bandrban`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_req_bandrban`
--
ALTER TABLE `tbl_req_bandrban`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
