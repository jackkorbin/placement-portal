-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2014 at 04:45 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `admRollNum`, `isActive`, `isDeleted`, `added_on`, `added_by`, `modified_on`, `modified_by`) VALUES
(1, 'iit2013113', 1, 0, '0000-00-00 00:00:00', '', '2014-05-28 20:29:09', ''),
(25, 'IIT2013114', 1, 0, '2014-05-28 20:34:31', 'iit2013113', '2014-05-28 20:34:31', ''),
(26, 'iit2012001', 1, 1, '2014-05-28 20:36:31', 'iit2013113', '2014-05-28 20:36:48', 'iit2013113');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `ann_text`, `isActive`, `isDeleted`, `added_on`, `added_by`, `modified_on`, `modified_by`) VALUES
(1, 'this is First Announcement.\r\nand this is cool!', 1, 1, '0000-00-00 00:00:00', '', '2014-05-28 20:47:42', 'iit2013113'),
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
(15, 'tanuj sharma is cool 8|', 1, 1, '2014-05-17 14:24:51', '', '2014-06-07 13:54:52', 'iit2013113'),
(16, 'hello this is thord announcement. hwz u doing guys?? :D', 1, 1, '2014-05-17 14:38:05', '', '0000-00-00 00:00:00', ''),
(17, 'hello this is 4th announcement. hwz u doing guys?? 8|', 1, 1, '2014-05-19 14:10:00', '', '0000-00-00 00:00:00', ''),
(18, 'gfdfgsdf', 1, 1, '2014-05-28 07:24:19', '', '0000-00-00 00:00:00', ''),
(19, 'gfdfgsdf', 1, 1, '2014-05-28 07:24:23', '', '0000-00-00 00:00:00', ''),
(20, 'gfdfgsdf', 1, 1, '2014-05-28 07:24:25', '', '0000-00-00 00:00:00', ''),
(21, 'vbcv', 1, 1, '2014-05-28 07:30:21', '', '0000-00-00 00:00:00', ''),
(22, 'fdgdf', 1, 1, '2014-05-28 07:31:57', '', '0000-00-00 00:00:00', ''),
(23, 'aasd', 1, 1, '2014-05-28 07:33:10', '', '0000-00-00 00:00:00', ''),
(24, 'hey this is 113 !! XD', 1, 1, '2014-05-28 07:50:14', '', '0000-00-00 00:00:00', ''),
(25, 'hey this is 113 XD', 1, 1, '2014-05-28 07:51:59', '', '2014-06-07 12:44:05', 'iit2013113'),
(26, 'hiii', 1, 1, '2014-05-28 10:42:02', 'IIT2013113', '2014-05-28 10:46:21', 'IIT2013113'),
(27, 'hola', 1, 1, '0000-00-00 00:00:00', 'IIT2013113', '2014-05-28 16:17:54', 'IIT2013113'),
(28, 'hola', 1, 1, '0000-00-00 00:00:00', 'IIT2013113', '2014-05-28 16:23:39', 'IIT2013113'),
(29, 'ggyh', 1, 1, '0000-00-00 00:00:00', 'IIT2013113', '2014-05-28 16:23:33', 'IIT2013113'),
(30, 'fftgh', 1, 1, '0000-00-00 00:00:00', 'IIT2013113', '2014-05-28 16:23:32', 'IIT2013113'),
(31, 'hola!!', 1, 1, '2014-05-28 16:27:37', 'IIT2013113', '2014-05-28 21:22:11', 'iit2013113'),
(32, 'hello!', 1, 1, '2014-05-28 20:47:53', 'iit2013113', '2014-05-28 21:22:16', 'iit2013113');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `mincgpa` float NOT NULL,
  `lastDate` datetime NOT NULL,
  `jobProfile` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `added_by` varchar(10) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `organization`, `email`, `password`, `contact`, `designation`, `description`, `mincgpa`, `lastDate`, `jobProfile`, `link`, `approved`, `isActive`, `isDeleted`, `added_on`, `added_by`, `modified_on`, `modified_by`) VALUES
(1, 'FacebooKK', '', '', '', 0, '', 'this is google. and its cool.', 5.7, '2014-06-07 18:38:46', 'haha', 'www.google.com', 1, 1, 0, '2014-05-13 18:30:00', '', '2014-06-28 20:01:14', ''),
(2, 'google', '', '', '', 0, '', 'hello COOL', 5.9, '2014-05-31 00:00:00', 'sdfsdfsd', 'www.baccha.com', 1, 1, 0, '0000-00-00 00:00:00', '', '2014-06-28 20:01:14', ''),
(3, 'Microsoft', '', '', '', 0, '', 'Bhaukali company. ana h to aao .varna GM', 2.3, '2014-06-07 18:33:52', 'Ghanta.', 'www.bhaukal.com', 1, 0, 0, '0000-00-00 00:00:00', 'IIT2013453', '2014-06-28 20:01:48', ''),
(4, 'tanuj304', '', '', '', 0, '', 'tsdf', 34, '2014-05-08 00:00:00', 'coder', 'www.lykpic.com', 1, 1, 0, '2014-05-16 18:30:00', '1234567890', '2014-06-28 20:01:14', ''),
(5, 'vikas', '', '', '', 0, '', 'tsdf', 3.4, '2011-05-08 00:00:00', 'coder', 'www.lykpic.com', 1, 1, 0, '2014-05-16 18:30:00', '1234567890', '2014-06-28 20:01:14', ''),
(6, 'Jackkorbin', '', '', '', 0, '', 'Cool!', 2, '2014-05-31 00:00:00', 'hahaha', 'www.lykpic.com', 1, 1, 0, '2014-05-16 18:30:00', '1234567890', '2014-06-28 20:01:14', ''),
(7, 'vipro', '', '', '', 0, '', 'Vipro is Indias best IT company.', 8.4, '2014-06-07 18:38:40', 'Developer, Coder and student.', 'http//:vipro.in', 1, 1, 0, '2014-05-18 18:30:00', '1231231234', '2014-06-28 20:01:14', ''),
(8, 'dataInch', '', '', '', 0, '', 'Best!', 6.7, '2014-06-30 00:00:00', 'Coder, Develoepr', 'hahaha', 1, 1, 1, '2014-05-18 18:30:00', '1231231234', '2014-06-28 20:01:14', ''),
(9, 'Apple', '', '', '', 0, '', 'Company founded by steve jobs.\r\naana h to aao bhaaaag.', 7.5, '2014-06-07 18:33:18', 'developer.', 'www.apple.com', 1, 1, 0, '2014-05-18 18:30:00', '1231231234', '2014-06-28 20:01:14', ''),
(10, 'Nokia', '', '', '', 0, '', 'sd', 4, '0000-00-00 00:00:00', 'sdf', 'haha', 1, 1, 0, '2014-05-27 18:30:00', '', '2014-06-28 20:01:14', ''),
(11, 'this is 113 xD', '', '', '', 0, '', 'hahahahha', 0, '0000-00-00 00:00:00', '', '', 1, 1, 1, '2014-05-27 18:30:00', '', '2014-06-28 20:01:14', ''),
(12, 'hello', '', '', '', 0, '', '', 0, '0000-00-00 00:00:00', '', '', 1, 1, 0, '2014-05-27 18:30:00', '', '2014-06-28 20:01:14', ''),
(13, 'gaddafu', '', '', '', 0, '', '', 6, '2014-06-07 18:11:02', '', '', 1, 0, 0, '2014-05-27 18:30:00', 'IIT2013113', '2014-06-28 20:01:48', ''),
(14, 'good comany', '', '', '', 0, '', '', 5, '2014-04-07 00:00:00', '', '', 1, 1, 0, '2014-05-28 10:12:38', 'IIT2013113', '2014-06-28 20:01:14', ''),
(15, 'Samsung', '', '', '', 0, '', '', 5, '2014-03-12 00:00:00', 'hh', 'www,samsung.com', 1, 1, 0, '2014-05-28 10:20:16', 'IIT2013113', '2014-06-28 20:01:14', 'IIT2013113'),
(16, 'tanuj', '', '', '', 0, '', '', 0, '2014-06-07 18:24:47', '', '', 1, 0, 0, '0000-00-00 00:00:00', 'IIT2013113', '2014-06-28 20:01:48', ''),
(17, 'Pirates', '', '', '', 0, '', '', 5, '2016-00-00 00:00:00', '', '', 1, 1, 0, '0000-00-00 00:00:00', 'IIT2013113', '2014-06-28 20:01:14', 'iit2013113'),
(18, 'Flipcart', '', '', '', 0, '', '', 4, '2014-06-07 17:41:16', '', '', 1, 0, 0, '2014-05-28 19:53:24', 'IIT2013113', '2014-06-28 20:01:48', ''),
(19, 'testing', '', '', '', 0, '', '', 8.5, '2016-00-00 00:00:00', '', '', 1, 1, 1, '2014-05-28 21:10:35', 'iit2013113', '2014-06-28 20:01:14', 'iit2013113'),
(20, 'Jack korbin', '', '', '', 0, '', '', 4, '2014-06-07 18:34:01', '', '', 1, 0, 0, '2014-05-28 22:42:25', 'iit2013113', '2014-06-28 20:01:48', ''),
(21, 'No name', '', '', '', 0, '', '', 0, '2014-06-07 18:33:49', '', '', 1, 0, 0, '2014-05-28 22:44:37', 'iit2013113', '2014-06-28 20:01:48', 'iit2013113'),
(22, 'Jack and jill', '', '', '', 0, '', 'dsf', 8, '2014-06-07 17:40:54', 'fd', 'sd', 1, 1, 0, '2014-05-29 08:53:09', 'iit2013113', '2014-06-28 20:01:14', ''),
(23, '', 'IMDB', 'tanuj.304@gmail.com', '12345', 9810080485, 'sdf', '', 0, '0000-00-00 00:00:00', '', '', 1, 0, 0, '2014-06-28 18:27:52', '', '2014-06-29 16:35:23', 'iit2013113');

-- --------------------------------------------------------

--
-- Table structure for table `jnf`
--

CREATE TABLE IF NOT EXISTS `jnf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `Organization` varchar(100) DEFAULT NULL,
  `buisness` varchar(100) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `contact_number` bigint(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `intrestedin` varchar(100) DEFAULT NULL,
  `cgpa` int(11) DEFAULT NULL,
  `elegiblity` varchar(100) DEFAULT NULL,
  `infrastructural` varchar(200) DEFAULT NULL,
  `agreement` varchar(200) DEFAULT NULL,
  `profile` varchar(200) DEFAULT NULL,
  `salary` int(100) DEFAULT NULL,
  `allowance` varchar(200) DEFAULT NULL,
  `perks` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `Joining` datetime DEFAULT NULL,
  `insurance` varchar(200) DEFAULT NULL,
  `ctc` varchar(200) DEFAULT NULL,
  `stock` varchar(200) DEFAULT NULL,
  `facility` varchar(200) DEFAULT NULL,
  `accomodation` varchar(200) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` varchar(20) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jnf`
--

INSERT INTO `jnf` (`id`, `company_id`, `Organization`, `buisness`, `name`, `designation`, `contact_number`, `email`, `intrestedin`, `cgpa`, `elegiblity`, `infrastructural`, `agreement`, `profile`, `salary`, `allowance`, `perks`, `location`, `Joining`, `insurance`, `ctc`, `stock`, `facility`, `accomodation`, `isActive`, `isDeleted`, `added_on`, `added_by`, `modified_on`, `modified_by`) VALUES
(1, 23, 'datainch', 'sdfasdf', 'Sharma', 'dfsa', 0, 'tanuj.304@gmail.com', '', 0, '', '', '', 'sadfas', 234, 'df', 'sdfa', 'sdfas', '2014-06-04 00:00:00', 'sdf', 'asdf', 'sdf', 'dfa', '', 1, 0, '2014-06-30 18:15:41', '', '0000-00-00 00:00:00', ''),
(2, 0, 'dta', 'sdfa', 'Sharma', 'dfsa', 0, 'jackkorbin304@gmail.com', 'B.tech', 0, 'sdf', '', '', 'fasd', 23423, 'sdf', 'asdfsa', 'sdfs', '0000-00-00 00:00:00', 'sdfas', 'dfsad', 'sdf', '', 'Yes', 1, 0, '2014-06-30 18:24:54', '', '0000-00-00 00:00:00', ''),
(3, 0, 'IMDB', 'Buisness', 'Tanuj Sharma', 'Poen', 8802647275, 'tanuj.304@gmail.com', 'Btech', 6, 'no', 'nil', 'no', 'nil', 32, 'no', 'no', 'sillicon valley', '2014-06-13 00:00:00', 'taata', 'ctc', 'no', 'no', 'no', 1, 0, '2014-06-30 19:41:49', '', '0000-00-00 00:00:00', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `relationship`
--

INSERT INTO `relationship` (`id`, `StuRollNum`, `companyid`, `isActive`, `isDeleted`, `added_on`, `added_by`, `modified_on`, `mofidied_by`) VALUES
(1, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '2014-05-28 21:21:26', ''),
(14, 'IIT2013113', '2', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(15, 'IIT2013113', '3', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(16, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '2014-05-28 21:21:26', ''),
(17, 'IIT2013113', '2', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(18, 'IIT2013113', '3', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(19, 'IIT2013113', '3', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(20, 'IIT2013113', '2', 1, 1, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(21, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '2014-05-28 21:21:26', ''),
(22, 'IIT2013113', '2', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(23, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '2014-05-28 21:21:26', ''),
(24, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '2014-05-28 21:21:26', ''),
(25, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '2014-05-28 21:21:26', ''),
(26, 'IIT2013123', '2', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(27, 'IIT1234567', '1', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(28, 'IIT2013113', '1', 1, 1, '0000-00-00 00:00:00', '', '2014-05-28 21:21:26', ''),
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
(54, 'IIT2013113', '9', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(55, 'IIT2013113', '13', 1, 1, '0000-00-00 00:00:00', '', '2014-05-28 16:36:02', ''),
(56, 'IIT2013113', '13', 1, 1, '0000-00-00 00:00:00', '', '2014-05-28 16:36:02', ''),
(57, 'IIT2013113', '13', 1, 1, '2014-05-28 16:35:49', '', '2014-05-28 16:36:02', ''),
(58, 'IIT2013113', '13', 1, 1, '2014-05-28 16:35:50', '', '2014-05-28 16:36:02', ''),
(59, 'iit2013113', '18', 1, 1, '2014-05-28 21:20:56', '', '2014-06-07 13:07:52', ''),
(60, 'iit2013113', '8', 1, 1, '2014-05-28 21:21:14', '', '2014-05-28 21:21:31', ''),
(61, 'iit2013113', '18', 1, 1, '2014-06-07 11:42:57', '', '2014-06-07 13:07:52', ''),
(62, 'iit2013113', '18', 1, 1, '2014-06-07 11:42:59', '', '2014-06-07 13:07:52', ''),
(63, 'iit2013113', '18', 1, 0, '2014-06-07 13:07:53', '', '2014-06-07 13:07:53', ''),
(64, 'iit2013113', '17', 1, 1, '2014-06-28 15:40:42', '', '2014-06-28 15:40:43', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

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
(17, '1231231235', 'motu', '0000-00-00', 'Male', '', 'IIITA', 1, 0, '', '', '', '', 1, 1, 0, '2014-05-27 12:05:16', '', '2014-05-27 12:05:16', ''),
(18, '1234567897', '', '0000-00-00', 'Male', '', 'IIITA', 1, 0, '', '', '', '', 1, 1, 0, '2014-05-28 21:52:47', '', '0000-00-00 00:00:00', ''),
(19, '12312312op', 'tanuj', '0000-00-00', 'Male', 'jack@gmail.com', 'IIITA', 1, 1, '', '', '', '', 1, 1, 0, '2014-05-28 21:55:50', '', '0000-00-00 00:00:00', ''),
(20, 'iit201311p', 'Jack korbin', '1996-05-01', 'Male', 'jack@gmail.com', 'IIITA', 2, 8.2, 'hola', '', '', '', 1, 1, 0, '2014-05-28 21:57:16', '', '2014-05-28 22:39:00', ''),
(21, '7894563695', 'motu', '2014-06-11', 'Male', 'motu@pichku.com', 'IIITA', 1, 5, '', '', '', '', 1, 1, 0, '2014-06-07 08:09:36', '', '0000-00-00 00:00:00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
