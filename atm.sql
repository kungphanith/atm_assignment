-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2016 at 10:12 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE IF NOT EXISTS `rate` (
  `khmer` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`khmer`) VALUES
(4100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_atm`
--

CREATE TABLE IF NOT EXISTS `tbl_user_atm` (
  `uid` int(15) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `pin_code` varchar(30) NOT NULL,
  `all_money` int(50) NOT NULL,
  `active` int(5) NOT NULL,
  `start_date` date NOT NULL,
  `c_type` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_atm`
--

INSERT INTO `tbl_user_atm` (`uid`, `first_name`, `last_name`, `gender`, `username`, `card_number`, `pin_code`, `all_money`, `active`, `start_date`, `c_type`) VALUES
(3, 'peoun', 'sareoun', 'male', 'sareoun', 'bc0012', '0000', 9000, 1, '2014-11-22', 'dollar'),
(2, 'phanith', 'kung', 'male', 'phanith', 'bc0011', '0000', 10000, 1, '2014-11-22', 'Dollar');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `uid` int(20) NOT NULL,
  `tr_type` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`uid`, `tr_type`, `amount`, `date`) VALUES
(1, 'add_money', 100, '2014-12-02'),
(1, 'add_money', 100, '2014-12-02'),
(1, 'add_money', 200, '2014-12-02'),
(1, 'withdrawal', 300, '2014-12-02'),
(1, 'withdrawal', 100, '2014-12-02'),
(1, 'withdrawal', 100, '2014-12-02'),
(1, 'add_money', 99, '2014-12-02'),
(2, 'add_money', 4.87805, '2014-12-02'),
(2, 'add_money', 8, '2014-12-02'),
(2, 'withdrawal', 2, '2014-12-02'),
(2, 'withdrawal', 5, '2014-12-02'),
(2, 'Recieved from x', 1.2, '2014-12-08'),
(1, 'Transfer to bc002', 3.2, '2014-12-08'),
(2, 'Recieved from ', 3.2, '2014-12-08'),
(1, 'Transfer to bc002', 10.44, '2014-12-08'),
(2, 'Recieved from bc0044', 10.44, '2014-12-08'),
(1, 'Transfer to bc002', 4.99, '2014-12-08'),
(2, 'Recieved from ', 4.99, '2014-12-08'),
(1, 'Transfer to bc002', 9.11, '2014-12-08'),
(2, 'Recieved from bc001', 9.11, '2014-12-08'),
(1, 'add_money', 8900, '2014-12-02'),
(1, 'add_money', 2.43902, '2014-12-02'),
(1, 'add_money', 0.00121951, '2014-12-02'),
(1, 'Transfer to bc002', 1.2, '2014-12-08'),
(1, 'Transfer to x', 2.2, '2014-12-08'),
(1, 'add_money', 1000, '2014-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `sex`, `dob`, `card_number`, `pin`, `email`, `phone`) VALUES
(1, 'kungphanith', 'male', '2014-11-29', 'bc001', '29031995', 'kungphanith79@gmail.com', '0967539818'),
(2, 'sareoun', 'male', '2014-11-29', 'bc002', 'abc', 'dalsjfajsdfjl;asdjf;', '093045345');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `acc_id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `money_dl` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`acc_id`, `uid`, `money_dl`) VALUES
(1, 1, 9902.4402439024),
(2, 2, 251.95804878049);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
