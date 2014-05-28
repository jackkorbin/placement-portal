-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2014 at 01:20 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `logger`
--

-- --------------------------------------------------------

--
-- Table structure for table `actionlogger`
--

CREATE TABLE IF NOT EXISTS `actionlogger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `by_rollnum` varchar(10) NOT NULL,
  `action` varchar(6) NOT NULL,
  `matter` varchar(15) NOT NULL,
  `matter_id` varchar(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `actionlogger`
--

INSERT INTO `actionlogger` (`id`, `by_rollnum`, `action`, `matter`, `matter_id`, `time`, `ip_address`) VALUES
(11, 'IIT2013123', 'delete', 'announcement', '24', '2014-05-28 07:51:52', '127.0.0.1'),
(12, 'IIT2013123', 'add', 'announcement', '25', '2014-05-28 07:51:59', '127.0.0.1'),
(13, 'IIT2013123', 'add', 'company', '11', '2014-05-28 07:52:12', '127.0.0.1'),
(14, 'IIT2013123', 'Remove', 'company', '11', '2014-05-28 07:53:01', '127.0.0.1'),
(15, 'IIT2013123', 'update', 'company', '10', '2014-05-28 07:53:28', '127.0.0.1'),
(16, 'IIT2013123', 'add', 'admin', '0', '2014-05-28 07:54:38', '127.0.0.1'),
(17, 'IIT2013123', 'delete', 'admin', '12', '2014-05-28 07:54:59', '127.0.0.1'),
(18, 'IIT2013123', 'add', 'admin', '0', '2014-05-28 07:58:05', '127.0.0.1'),
(19, 'IIT2013123', 'add', 'admin', '0', '2014-05-28 07:58:18', '127.0.0.1'),
(21, 'IIT2013123', 'delete', 'admin', '15', '2014-05-28 07:59:10', '127.0.0.1'),
(22, 'IIT2013123', 'delete', 'admin', '13', '2014-05-28 07:59:12', '127.0.0.1'),
(23, 'IIT2013113', 'add', 'company', '12', '2014-05-28 10:04:29', '127.0.0.1'),
(24, 'IIT2013113', 'add', 'company', '13', '2014-05-28 10:08:20', '127.0.0.1'),
(25, 'IIT2013113', 'update', 'company', '13', '2014-05-28 10:09:02', '127.0.0.1'),
(26, 'IIT2013113', 'update', 'company', '13', '2014-05-28 10:10:53', '127.0.0.1'),
(27, 'IIT2013113', 'update', 'company', '1', '2014-05-28 10:11:20', '127.0.0.1'),
(28, 'IIT2013113', 'add', 'company', '14', '2014-05-28 10:12:39', '127.0.0.1'),
(29, 'IIT2013113', 'update', 'company', '14', '2014-05-28 10:13:12', '127.0.0.1'),
(30, 'IIT2013113', 'update', 'company', '14', '2014-05-28 10:14:23', '127.0.0.1'),
(31, 'IIT2013113', 'add', 'company', '15', '2014-05-28 10:20:17', '127.0.0.1'),
(32, 'IIT2013113', 'update', 'company', '15', '2014-05-28 10:20:58', '127.0.0.1'),
(33, 'IIT2013113', 'update', 'company', '15', '2014-05-28 10:35:36', '127.0.0.1'),
(34, 'IIT2013113', 'add', 'announcement', '26', '2014-05-28 10:42:02', '127.0.0.1'),
(35, 'IIT2013113', 'delete', 'announcement', '26', '2014-05-28 10:45:26', '127.0.0.1'),
(36, 'IIT2013113', 'delete', 'announcement', '26', '2014-05-28 10:46:22', '127.0.0.1'),
(37, 'IIT2013113', 'add', 'admin', 'iit2013145', '2014-05-28 10:56:47', '127.0.0.1'),
(38, 'IIT2013113', 'delete', 'admin', '16', '2014-05-28 10:57:44', '127.0.0.1'),
(39, 'IIT2013113', 'add', 'admin', 'iit2013113', '2014-05-28 10:58:05', '127.0.0.1'),
(40, 'IIT2013113', 'delete', 'admin', '17', '2014-05-28 10:58:08', '127.0.0.1'),
(41, 'IIT2013113', 'add', 'admin', 'iit2013113', '2014-05-28 11:05:22', '127.0.0.1'),
(42, 'IIT2013113', 'add', 'admin', 'IIT2013123', '2014-05-28 11:05:47', '127.0.0.1'),
(43, 'IIT2013113', 'delete', 'admin', '19', '2014-05-28 11:05:51', '127.0.0.1'),
(44, 'IIT2013113', 'add', 'admin', 'IIT2013123', '2014-05-28 11:05:58', '127.0.0.1'),
(45, 'IIT2013113', 'add', 'admin', 'iit2014123', '2014-05-28 11:07:15', '127.0.0.1'),
(46, 'IIT2013113', 'add', 'admin', 'iit2015124', '2014-05-28 11:07:37', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `loginlogger`
--

CREATE TABLE IF NOT EXISTS `loginlogger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admrollnum` varchar(10) NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `loginlogger`
--

INSERT INTO `loginlogger` (`id`, `admrollnum`, `ip_address`, `login_time`) VALUES
(1, '', '127.0.0.1', '2014-05-28 06:58:57'),
(2, '', '127.0.0.1', '2014-05-28 06:59:10'),
(3, 'IIT2013113', '127.0.0.1', '2014-05-28 07:00:22'),
(4, 'IIT2013113', '127.0.0.1', '2014-05-28 07:01:22'),
(5, 'IIT2013113', '127.0.0.1', '2014-05-28 07:04:01'),
(6, 'IIT2013113', '127.0.0.1', '2014-05-28 07:05:06'),
(7, 'IIT2013113', '127.0.0.1', '2014-05-28 07:22:15'),
(8, 'IIT2013123', '127.0.0.1', '2014-05-28 07:49:46'),
(9, 'IIT2013113', '127.0.0.1', '2014-05-28 07:59:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
