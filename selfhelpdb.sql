-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 04:59 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `selfhelpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` varchar(15) NOT NULL,
  `a_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_password`) VALUES
('a11', 'admin12'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `mh_user_info`
--

CREATE TABLE IF NOT EXISTS `mh_user_info` (
  `mh_user_id` varchar(20) NOT NULL,
  `mh_user_ic` varchar(30) NOT NULL,
  `mh_quest_1` varchar(100) NOT NULL,
  `mh_ans_1` varchar(50) NOT NULL,
  `mh_quest_2` varchar(100) NOT NULL,
  `mh_ans_2` varchar(50) NOT NULL,
  PRIMARY KEY (`mh_user_id`),
  UNIQUE KEY `mh_user_ic` (`mh_user_ic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mh_user_info`
--

INSERT INTO `mh_user_info` (`mh_user_id`, `mh_user_ic`, `mh_quest_1`, `mh_ans_1`, `mh_quest_2`, `mh_ans_2`) VALUES
('abc11', 'ADM12345', 'Random 1', 'Answer 1', 'Random 2', 'Answer 2'),
('deejay11', 'ADM1234', 'Random 1', 'Answer 1', 'Random 2', 'Answer 2');

-- --------------------------------------------------------

--
-- Table structure for table `selfhelpdata`
--

CREATE TABLE IF NOT EXISTS `selfhelpdata` (
  `d_Date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `u_date` int(2) NOT NULL,
  `u_Month` varchar(15) NOT NULL,
  `u_Year` int(4) NOT NULL,
  `u_UserID` varchar(15) NOT NULL,
  `u_Department` varchar(50) NOT NULL,
  `u_Action` varchar(10) NOT NULL,
  PRIMARY KEY (`u_UserID`),
  KEY `u_UserID` (`u_UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selfhelpdata`
--

INSERT INTO `selfhelpdata` (`d_Date`, `u_date`, `u_Month`, `u_Year`, `u_UserID`, `u_Department`, `u_Action`) VALUES
('2017-05-08 20:57:45.000000', 9, '5', 2017, 'abc11', 'HR', 'Action2'),
('2017-05-08 13:38:46.000000', 8, '5', 2017, 'deejay11', 'Technical', 'Action1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(30) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `age` int(4) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `userid`, `age`, `address`, `phone`, `email`, `password`, `gender`) VALUES
('Dhananjay Gambhir', 'deejay11', 20, 'Ag-83 Shalimar Bagh', '9811575437', 'dhgambhir@gmail.com', 'dhananjay', 'Male');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `selfhelpdata`
--
ALTER TABLE `selfhelpdata`
  ADD CONSTRAINT `selfhelpdata_ibfk_1` FOREIGN KEY (`u_UserID`) REFERENCES `mh_user_info` (`mh_user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
