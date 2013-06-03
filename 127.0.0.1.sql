-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2013 at 07:47 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lnufileapplication`
--
CREATE DATABASE `lnufileapplication` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lnufileapplication`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounting`
--

CREATE TABLE IF NOT EXISTS `tbl_accounting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_accounting`
--

INSERT INTO `tbl_accounting` (`id`, `username`, `password`, `fname`, `mname`, `lname`) VALUES
(1, 'rocajohntemoty', '6116afedcb0bc31083935c1c262ff4c9', '123', '123', '123'),
(2, 'rocajohntemoty', '0144712dd81be0c3d9724f5e56ce6685', '123', '123', '123'),
(3, 'rocajohntemoty', '6116afedcb0bc31083935c1c262ff4c9', '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_administrator`
--

CREATE TABLE IF NOT EXISTS `tbl_administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=333 ;

--
-- Dumping data for table `tbl_administrator`
--

INSERT INTO `tbl_administrator` (`id`, `username`, `password`) VALUES
(332, 'admin', 'd033e22ae348aeb5660fc2140aec3585');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appforcertification`
--

CREATE TABLE IF NOT EXISTS `tbl_appforcertification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_applied` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` enum('1','0','2') NOT NULL COMMENT '1 for approved 0 for not yet approved 2 for canceled',
  `date_confirmed` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appforgm`
--

CREATE TABLE IF NOT EXISTS `tbl_appforgm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_applied` date NOT NULL,
  `status` enum('1','0','2') NOT NULL COMMENT '1 for approved 0 for pending and 2 for canceled',
  `date_confirmed` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_appforgm`
--

INSERT INTO `tbl_appforgm` (`id`, `user_id`, `date_applied`, `status`, `date_confirmed`) VALUES
(1, 1, '2013-06-03', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appfortor`
--

CREATE TABLE IF NOT EXISTS `tbl_appfortor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `date_applied` date NOT NULL,
  `status` enum('1','0','2') NOT NULL COMMENT '1 for approved 0 for pending and 2 for canceled',
  `date_confirmed` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appfortorreasons`
--

CREATE TABLE IF NOT EXISTS `tbl_appfortorreasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appforTORid` int(11) NOT NULL,
  `reasons` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicant`
--

CREATE TABLE IF NOT EXISTS `tbl_applicant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `citizenship` varchar(32) NOT NULL,
  `religion` varchar(32) NOT NULL,
  `civilStatus` varchar(32) NOT NULL,
  `contact` varchar(32) NOT NULL,
  `studentnumber` varchar(32) NOT NULL,
  `dob` date NOT NULL,
  `pob` text NOT NULL,
  `nameoffather` varchar(32) NOT NULL,
  `nameofmother` varchar(32) NOT NULL,
  `nameofspouse` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `nameOfElemSchool` varchar(255) NOT NULL,
  `dateOfElemGraduate` varchar(255) NOT NULL,
  `course` varchar(32) NOT NULL,
  `majorspecialization` varchar(32) NOT NULL,
  `firstattendance` varchar(32) NOT NULL,
  `lastattendance` varchar(32) NOT NULL,
  `numofsemsandsums` int(2) NOT NULL,
  `dogInLNU` varchar(8) NOT NULL,
  `nameOfSecSchool` varchar(255) NOT NULL,
  `dateOfSecGraduate` varchar(255) NOT NULL,
  `nameOfUnderGradSchool` varchar(255) NOT NULL,
  `dateOfUnderGradGraduate` varchar(255) NOT NULL,
  `nameOfGradSchool` varchar(255) NOT NULL,
  `dateOfGradGraduate` varchar(255) NOT NULL,
  `date_registered` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_applicant`
--

INSERT INTO `tbl_applicant` (`id`, `username`, `password`, `fname`, `mname`, `lname`, `citizenship`, `religion`, `civilStatus`, `contact`, `studentnumber`, `dob`, `pob`, `nameoffather`, `nameofmother`, `nameofspouse`, `address`, `nameOfElemSchool`, `dateOfElemGraduate`, `course`, `majorspecialization`, `firstattendance`, `lastattendance`, `numofsemsandsums`, `dogInLNU`, `nameOfSecSchool`, `dateOfSecGraduate`, `nameOfUnderGradSchool`, `dateOfUnderGradGraduate`, `nameOfGradSchool`, `dateOfGradGraduate`, `date_registered`) VALUES
(1, 'rocajohntemoty', '6116afedcb0bc31083935c1c262ff4c9', 'John Temoty ', 'Homeres', 'Roca', 'Filipino', 'Roman Catholic', 'Single', '09286638253', '0901293', '1990-02-13', 'Bulacan, Manila', 'Daniel Langahid Roca', 'Susan Homeres Roca', '', '                 Brgy.104 Salvacion Tacloban City                ', 'City Central School', '2005', 'BSIT ', 'Web Programmer', 'june 2013', '06/2010', 13, '02/2012', 'Leyte National High School', '2009', 'Leyte Normal University', '2013', '', '', '2013-05-30 03:42:03'),
(2, 'rocajohntemoty', '700c8b805a3e2a265b01c77614cd8b21', '1234', '123', '123', 'Filipino', 'Roman Catholic', 'Single', '09286638253', '', '1992-12-09', 'Bulacan Manila', 'Daniel Langahid Roca', 'Susan Homeres Roca', 'Angel Locsin', '                                   John Temoty Roca                                                                                                 ', 'City Central School', '2005', '', '', '', '', 0, '', 'Leyte National High School', '2005', 'Leyte Normal University', '2013', 'Eastern Visayas State University', '2016', '2013-05-30 13:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gradlibadmin`
--

CREATE TABLE IF NOT EXISTS `tbl_gradlibadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_gradlibadmin`
--

INSERT INTO `tbl_gradlibadmin` (`id`, `username`, `password`, `fname`, `mname`, `lname`) VALUES
(1, '123', '6116afedcb0bc31083935c1c262ff4c9', '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gsadmin`
--

CREATE TABLE IF NOT EXISTS `tbl_gsadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_gsadmin`
--

INSERT INTO `tbl_gsadmin` (`id`, `username`, `password`, `fname`, `mname`, `lname`) VALUES
(1, '123', '6116afedcb0bc31083935c1c262ff4c9', '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_osa`
--

CREATE TABLE IF NOT EXISTS `tbl_osa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_osa`
--

INSERT INTO `tbl_osa` (`id`, `username`, `password`, `fname`, `mname`, `lname`) VALUES
(1, 'asdsa', '174a9535b7fd93ceecbe1fc0392fa0f2', 'sadasda', 'sdsadas', 'dasdas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrar`
--

CREATE TABLE IF NOT EXISTS `tbl_registrar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_registrar`
--

INSERT INTO `tbl_registrar` (`id`, `username`, `password`, `fname`, `mname`, `lname`) VALUES
(1, '123', '6116afedcb0bc31083935c1c262ff4c9', '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_undergradlibadmin`
--

CREATE TABLE IF NOT EXISTS `tbl_undergradlibadmin` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_undergradlibadmin`
--

INSERT INTO `tbl_undergradlibadmin` (`id`, `username`, `password`, `fname`, `mname`, `lname`) VALUES
('', '123', '6116afedcb0bc31083935c1c262ff4c9', '123', '123', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
