-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2015 at 09:26 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eye_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feed` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `education` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `user_id`, `date`, `name`, `blood`, `email`, `mobile`, `state`, `city`, `address`, `education`, `occupation`, `dob`, `gender`) VALUES
(12, 38, '2015-04-24', 'naren', 'A+', 'naren@gmail.com', '8888888888', 'karnataka', 'bangalore', 'domlur', 'MCA', 'SE', '18-02-1990', 'Male'),
(13, 42, '2015-02-12', 'Prabal', 'A+', 'prabal@gmail.com', '8888888888', 'Karnataka', 'Bangalore', 'Marathalli', 'MCA', 'SE', '17-02-1990', 'Male'),
(14, 44, '2014-04-24', 'Madhu', 'AB-', 'madhu@gmail.com', '8888888888', 'Karnataka', 'Bangalore', 'Vijay Nagar', 'BE', 'SE', '11-08-1992', 'Male'),
(15, 45, '2014-02-24', 'Sumesh', 'A+', 'sumesh@gmail.com', '8888888888', 'Kerala', 'cochin', 'srirampura', 'Diploma', 'SE', '12-02-1987', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `quest` int(10) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `quest`, `answer`, `password`) VALUES
(50, 'sfsdf', '', 0, '', ''),
(47, 'john', 'john@gmail.com', 1, 'rajini', 'john'),
(45, 'Sumesh', 'sumesh@gmail.com', 1, 'vijay', 'naren'),
(44, 'Madhu', 'madhu@gmail.com', 3, 'jism2', 'madhu'),
(43, 'prabal', 'prabal@gmail.com', 2, 'rice', 'prabal'),
(42, 'prabal', 'prabal@gmail.com', 2, 'rice', 'prabal'),
(38, 'Naren', 'naren@gmail.com', 1, 'vijay', 'naren');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
