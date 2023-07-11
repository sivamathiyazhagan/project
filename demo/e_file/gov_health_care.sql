-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2021 at 11:03 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gov_health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

DROP TABLE IF EXISTS `authority`;
CREATE TABLE IF NOT EXISTS `authority` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(233) NOT NULL,
  `pwd` varchar(233) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`id`, `name`, `pwd`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `health_car_provider`
--

DROP TABLE IF EXISTS `health_car_provider`;
CREATE TABLE IF NOT EXISTS `health_car_provider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `pwd` varchar(233) NOT NULL,
  `dob` varchar(233) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `role` varchar(233) NOT NULL,
  `state` varchar(233) NOT NULL,
  `country` varchar(233) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_car_provider`
--

INSERT INTO `health_car_provider` (`id`, `name`, `email`, `pwd`, `dob`, `gender`, `role`, `state`, `country`, `status`) VALUES
(2, 'Mani', 'mani@mail.com', '123', '2000-10-10', 'male', 'Insurance', 'tamilnadu', 'India', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `pwd` varchar(233) NOT NULL,
  `dob` varchar(233) NOT NULL,
  `gender` varchar(233) NOT NULL,
  `state` varchar(233) NOT NULL,
  `country` varchar(233) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `email`, `pwd`, `dob`, `gender`, `state`, `country`) VALUES
(1, 'Mani', 'mani@mail.com', '123', '2000-10-10', 'Gender', 'tamilnadu', 'country');

-- --------------------------------------------------------

--
-- Table structure for table `patient_file`
--

DROP TABLE IF EXISTS `patient_file`;
CREATE TABLE IF NOT EXISTS `patient_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(233) NOT NULL,
  `attribute` varchar(233) NOT NULL,
  `pid` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_file`
--

INSERT INTO `patient_file` (`id`, `fname`, `attribute`, `pid`, `data`, `date`) VALUES
(1, '', 'Insurance', 1, '', '20-02-21 05:39:43'),
(2, '', 'Insurance', 1, '', '20-02-21 05:40:41'),
(3, 'Sara', 'Insurance', 1, 'gov_health_care.sql', '20-02-21 05:44:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
