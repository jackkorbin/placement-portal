-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2014 at 02:18 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iiitapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admRollNum` varchar(10) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `added_by` varchar(10) NOT NULL,
  `modified_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `admRollNum`, `isActive`, `isDeleted`, `added_on`, `added_by`, `modified_on`, `modified_by`) VALUES
(18, 'iit2013113', 1, 0, '2014-05-28 11:05:22', 'IIT2013113', '2014-05-28 11:05:22', ''),
(19, 'IIT2013123', 1, 1, '2014-05-28 11:05:47', 'IIT2013113', '2014-05-28 11:05:51', 'IIT2013113'),
(20, 'IIT2013123', 1, 0, '2014-05-28 11:05:57', 'IIT2013113', '2014-05-28 11:05:57', ''),
(21, 'iit2014123', 1, 1, '2014-05-28 11:07:15', 'IIT2013113', '2014-05-28 11:33:55', 'IIT2013113'),
(22, 'iit2015124', 1, 1, '2014-05-28 11:07:37', 'IIT2013113', '2014-05-28 11:39:19', 'IIT2013113'),
(23, 'iit2013456', 1, 1, '0000-00-00 00:00:00', 'IIT2013113', '2014-05-28 12:09:49', 'IIT2013113');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ann_text` text NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `added_by` varchar(10) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `ann_text`, `isActive`, `isDeleted`, `added_on`, `added_by`, `modified_on`, `modified_by`) VALUES
(1, 'this is First Announcement.\r\nand this is cool!', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(2, 'hello', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(3, 'hello', 1, 1, '2014-05-17 14:07:24', '', '0000-00-00 00:00:00', ''),
(4, 'hello this is Second announcement. hwz u doing guys?? :D', 1, 0, '2014-05-17 14:13:10', '', '0000-00-00 00:00:00', ''),
(6, 'sdfsdfasdfasd', 1, 1, '2014-05-17 14:18:16', '', '0000-00-00 00:00:00', ''),
(7, 'tanuj sharma', 1, 1, '2014-05-17 14:19:37', '', '0000-00-00 00:00:00', ''),
(8, 'tanuj sharma', 1, 1, '2014-05-17 14:19:39', '', '0000-00-00 00:00:00', ''),
(9, 'sdfsdfasdfasd', 1, 1, '2014-05-17 14:20:00', '', '0000-00-00 00:00:00', ''),
(10, 'sdfasdfasdf', 1, 1, '2014-05-17 14:20:32', '', '0000-00-00 00:00:00', ''),
(11, 'sdfsadfsadf', 1, 1, '2014-05-17 14:20:51', '', '0000-00-00 00:00:00', ''),
(12, 'sadfsadfs\nsdf\nsadf\nasd', 1, 1, '2014-05-17 14:21:44', '', '0000-00-00 00:00:00', ''),
(13, 'm cool', 1, 1, '2014-05-17 14:22:00', '', '0000-00-00 00:00:00', ''),
(14, 'tanuj sharma tanuj sharma tanuj sharma', 1, 1, '2014-05-17 14:23:48', '', '0000-00-00 00:00:00', ''),
(15, 'tanuj sharma is cool 8|', 1, 0, '2014-05-17 14:24:51', '', '0000-00-00 00:00:00', ''),
(16, 'hello this is thord announcement. hwz u doing guys?? :D', 1, 1, '2014-05-17 14:38:05', '', '0000-00-00 00:00:00', ''),
(17, 'hello this is 4th announcement. hwz u doing guys?? 8|', 1, 1, '2014-05-19 14:10:00', '', '0000-00-00 00:00:00', ''),
(18, 'gfdfgsdf', 1, 1, '2014-05-28 07:24:19', '', '0000-00-00 00:00:00', ''),
(19, 'gfdfgsdf', 1, 1, '2014-05-28 07:24:23', '', '0000-00-00 00:00:00', ''),
(20, 'gfdfgsdf', 1, 1, '2014-05-28 07:24:25', '', '0000-00-00 00:00:00', ''),
(21, 'vbcv', 1, 1, '2014-05-28 07:30:21', '', '0000-00-00 00:00:00', ''),
(22, 'fdgdf', 1, 1, '2014-05-28 07:31:57', '', '0000-00-00 00:00:00', ''),
(23, 'aasd', 1, 1, '2014-05-28 07:33:10', '', '0000-00-00 00:00:00', ''),
(24, 'hey this is 113 !! XD', 1, 1, '2014-05-28 07:50:14', '', '0000-00-00 00:00:00', ''),
(25, 'hey this is 113 XD', 1, 0, '2014-05-28 07:51:59', '', '0000-00-00 00:00:00', ''),
(26, 'hiii', 1, 1, '2014-05-28 10:42:02', 'IIT2013113', '2014-05-28 10:46:21', 'IIT2013113');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `mincgpa` float NOT NULL,
  `lastDate` date NOT NULL,
  `jobProfile` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `added_by` varchar(10) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `description`, `mincgpa`, `lastDate`, `jobProfile`, `link`, `isActive`, `isDeleted`, `added_on`, `added_by`, `modified_on`, `modified_by`) VALUES
(1, 'FacebooKK', 'this is google. and its cool.', 5.7, '2014-08-28', 'haha', 'www.google.com', 1, 0, '2014-05-13 18:30:00', '', '2014-05-28 10:11:20', ''),
(2, 'google', 'hello COOL', 5.9, '2014-05-31', 'sdfsdfsd', 'www.baccha.com', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(3, 'Microsoft', 'Bhaukali company. ana h to aao .varna GM', 2.3, '2014-11-30', 'Ghanta.', 'www.bhaukal.com', 1, 0, '0000-00-00 00:00:00', 'IIT2013453', '0000-00-00 00:00:00', ''),
(4, 'tanuj304', 'tsdf', 34, '2014-05-08', 'coder', 'www.lykpic.com', 1, 0, '2014-05-16 18:30:00', '1234567890', '0000-00-00 00:00:00', ''),
(5, 'vikas', 'tsdf', 3.4, '2011-05-08', 'coder', 'www.lykpic.com', 1, 0, '2014-05-16 18:30:00', '1234567890', '0000-00-00 00:00:00', ''),
(6, 'Jackkorbin', 'Cool!', 2, '2014-05-31', 'hahaha', 'www.lykpic.com', 1, 0, '2014-05-16 18:30:00', '1234567890', '0000-00-00 00:00:00', ''),
(7, 'vipro', 'Vipro is Indias best IT company.', 8.4, '2014-07-31', 'Developer, Coder and student.', 'http//:vipro.in', 1, 0, '2014-05-18 18:30:00', '1231231234', '0000-00-00 00:00:00', ''),
(8, 'dataInch', 'Best!', 6.7, '2014-06-30', 'Coder, Develoepr', 'hahaha', 1, 1, '2014-05-18 18:30:00', '1231231234', '0000-00-00 00:00:00', ''),
(9, 'Apple', 'Company founded by steve jobs.\r\naana h to aao bhaaaag.', 7.5, '2014-06-11', 'developer.', 'www.apple.com', 1, 0, '2014-05-18 18:30:00', '1231231234', '0000-00-00 00:00:00', ''),
(10, 'Nokia', 'sd', 4, '0000-00-00', 'sdf', 'haha', 1, 0, '2014-05-27 18:30:00', '', '0000-00-00 00:00:00', ''),
(11, 'this is 113 xD', 'hahahahha', 0, '0000-00-00', '', '', 1, 1, '2014-05-27 18:30:00', '', '0000-00-00 00:00:00', ''),
(12, 'hello', '', 0, '0000-00-00', '', '', 1, 0, '2014-05-27 18:30:00', '', '0000-00-00 00:00:00', ''),
(13, 'gaddafu', '', 6, '2014-07-18', '', '', 1, 0, '2014-05-27 18:30:00', 'IIT2013113', '2014-05-28 10:10:53', ''),
(14, 'good comany', '', 5, '2014-04-07', '', '', 1, 0, '2014-05-28 10:12:38', 'IIT2013113', '2014-05-28 10:14:23', ''),
(15, 'Samsung', '', 5, '2014-03-12', '', 'www,samsung.com', 1, 0, '2014-05-28 10:20:16', 'IIT2013113', '2014-05-28 12:17:51', 'IIT2013113');

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE IF NOT EXISTS `relationship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StuRollNum` varchar(20) NOT NULL,
  `companyid` varchar(40) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `added_by` varchar(10) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mofidied_by` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `relationship`
--

INSERT INTO `relationship` (`id`, `StuRollNum`, `companyid`, `isActive`, `isDeleted`, `added_on`, `added_by`, `modified_on`, `mofidied_by`) VALUES
(1, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(14, 'IIT2013113', '2', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(15, 'IIT2013113', '3', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(16, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(17, 'IIT2013113', '2', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(18, 'IIT2013113', '3', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(19, 'IIT2013113', '3', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(20, 'IIT2013113', '2', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(21, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(22, 'IIT2013113', '2', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(23, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(24, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(25, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(26, 'IIT2013123', '2', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(27, 'IIT1234567', '1', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(28, 'IIT2013113', '1', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(29, '123456UIOK', '2', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(30, 'ZXCVBNMASD', '3', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(31, 'ZXCVBNMASD', '2', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(32, 'IIT2013113', '6', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(33, 'IIT2013113', '3', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(34, 'TANUJSHARM', '2', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(35, 'TANUJSHARM', '6', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(36, 'TANUJSHARM', '2', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(37, 'TANUJSHARM', '3', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(38, 'IIT20131GH', '2', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(39, 'IIT20131GH', '3', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(40, 'IIT20131GH', '6', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(41, 'IIT20131GH', '3', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(42, 'QWEASDZXCV', '1', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(43, 'QWEASDZXCV', '2', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(44, 'QWEASDZXCV', '7', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(45, 'QWEASDZXCV', '9', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(46, 'QWEASDZXCV', '6', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(47, 'QWEASDZXCV', '3', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(48, '123456789N', '1', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(49, '123456789N', '3', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(50, '123456789N', '6', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(51, '123456789N', '9', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(52, '123456789N', '8', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(53, 'IIT2013113', '3', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(54, 'IIT2013113', '9', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentsdata`
--

CREATE TABLE IF NOT EXISTS `studentsdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rollnum` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `alternateEmail` varchar(40) NOT NULL,
  `institute` varchar(5) NOT NULL,
  `currentSemester` int(11) NOT NULL,
  `cgpa` float NOT NULL,
  `education` text NOT NULL,
  `technicalExperience` text NOT NULL,
  `projects` text NOT NULL,
  `areaOfIntrest` text NOT NULL,
  `isProfileComplete` tinyint(1) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `added_by` varchar(10) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mofidied_by` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rollnum` (`rollnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `studentsdata`
--

INSERT INTO `studentsdata` (`id`, `rollnum`, `name`, `birthdate`, `sex`, `alternateEmail`, `institute`, `currentSemester`, `cgpa`, `education`, `technicalExperience`, `projects`, `areaOfIntrest`, `isProfileComplete`, `isActive`, `isDeleted`, `added_on`, `added_by`, `modified_on`, `mofidied_by`) VALUES
(1, 'IIT2013113', 'jack korbin', '1420-05-01', 'Male', 'jack@gmail.com', 'IIITA', 3, 7.9645, 'hello i am good\r\nwho ar u?', 'hello i am good\r\nhello', 'hello i am good\r\nhello', 'hello i am good\r\nhello', 1, 1, 0, '2014-05-28 10:17:01', '', '2014-05-28 10:17:46', ''),
(6, 'IIT2013123', 'tanuj', '0000-00-00', 'Male', '', 'IIITA', 1, 0, '', '', '', '', 1, 1, 0, '2014-05-15 18:30:00', '', '0000-00-00 00:00:00', ''),
(7, 'IIT1234567', 'tushar.k', '2014-05-16', 'Male', '', 'IIITA', 7, 8, 'haha get lost 8|', 'nope.', 'script&lt;b&gt;', '', 1, 1, 0, '2014-05-15 18:30:00', '', '0000-00-00 00:00:00', ''),
(8, '123456UIOK', 'Golu!', '0000-00-00', 'Male', '', 'IIITA', 1, 0, 'sdfsdf', '', '', '', 1, 1, 0, '2014-05-15 18:30:00', '', '2014-05-15 18:30:00', ''),
(9, 'ZXCVBNMASD', 'yolu', '1996-05-06', 'Male', 'adsf@gmail.com', 'IIITA', 3, 4.6, 'sdf', 'sdf', 'sdfsd', 'fsdf', 1, 1, 0, '2014-05-16 18:30:00', '', '0000-00-00 00:00:00', ''),
(10, 'IIT20131RT', 'yagistan', '2014-05-02', 'Male', '', 'RGIT', 7, 4.5, 'sdfsdf', 'fdsdf', 'sdfa', 'sd', 1, 1, 0, '2014-05-16 18:30:00', '', '2014-05-16 18:30:00', ''),
(11, 'TANUJSHARM', 'jack hai mera naam', '0000-00-00', 'Male', '', 'IIITA', 1, 0, '', '', '', '', 1, 1, 0, '2014-05-17 18:30:00', '', '2014-05-17 18:30:00', ''),
(12, 'IIT20131GH', 'rifa khan', '0000-00-00', 'Male', '', 'IIITA', 1, 0, '', '', '', '', 1, 1, 0, '2014-05-17 18:30:00', '', '2014-05-17 18:30:00', ''),
(13, 'QWEASDZXCV', 'Tushar', '1996-05-30', 'Male', '', 'RGIT', 6, 8.1, 'ghanta.', 'haha', 'nope.', '', 1, 1, 0, '2014-05-18 18:30:00', '', '2014-05-18 18:30:00', ''),
(14, 'IIT20131WE', 'Yanda madala', '0000-00-00', 'Male', '', 'IIITA', 1, 0, '', '', '', '', 1, 1, 0, '2014-05-18 18:30:00', '', '2014-05-18 18:30:00', ''),
(15, '123456789N', 'aditya narayan', '2014-05-23', 'Male', '', 'IIITA', 5, 8, '', '', '', '', 1, 1, 0, '2014-05-19 22:52:49', '', '0000-00-00 00:00:00', ''),
(16, '123456UIOG', 'done', '0000-00-00', 'Male', '', 'IIITA', 1, 0, '', '', '', '', 1, 1, 0, '2014-05-26 14:32:13', '', '0000-00-00 00:00:00', ''),
(17, '1231231235', 'motu', '0000-00-00', 'Male', '', 'IIITA', 1, 0, '', '', '', '', 1, 1, 0, '2014-05-27 12:05:16', '', '2014-05-27 12:05:16', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
