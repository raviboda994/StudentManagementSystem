-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2019 at 02:53 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_student_mgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `emailid` varchar(35) NOT NULL,
  `a_photo` varchar(100) NOT NULL,
  `loginid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `mobile`, `emailid`, `a_photo`, `loginid`, `password`) VALUES
(1, 'Drashti Parvadiya', '7574045217', 'drashtiparvadiya11@gmail.com', 'd.jpg', '111', '111'),
(2, 'Uday Gadhiya', '8866229903', 'udayphp2009@gmail.com', 'u.jpg', '123', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `c_name`) VALUES
(1, 'BCA'),
(2, 'BBA'),
(3, 'BCOM'),
(4, 'BSCIT');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `emailid` varchar(35) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `master_sub` varchar(50) NOT NULL,
  `f_photo` varchar(100) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`fid`, `name`, `mobile`, `emailid`, `qualification`, `experience`, `master_sub`, `f_photo`) VALUES
(1, 'NEHAL PATEL', '7574054217', 'nehalpatel@gmail.com', 'MCA', '2 year', 'JAVA', 'index.jfif'),
(2, 'NIKUNJ JANI', '8866673788', 'nikunjjani@gmail.com', 'MCOM', '3 YEAR', 'BUSI COMM', 'images.jfif'),
(3, 'PARESH PARMAR', '7878787133', 'pareshparmar@gmail.com', 'BSCIT', '6 YEAR', 'JAVA', '1200px-James_Simons_2007.jpg'),
(4, 'MAHESH SHAH', '8574962314', 'maheshshah@gmail.com', 'BCOM', '5 YEAR', 'BUSI COMM', 'Male-teacher.jpg'),
(5, 'SHAM TRIVEDI', '9876543210', 'shamtrivedi@gmail.com', 'BBA', '6 YEAR', 'BUSI COMM', 'Older-male-teacher-at-chalkboard.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `emailid` varchar(35) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `inquiry`
--


-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE IF NOT EXISTS `papers` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `p_file` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`pid`, `c_name`, `sem`, `sub_name`, `p_file`) VALUES
(1, 'BBA', 'SEM1', 'BUSI COMM', 'BBA SEM -2 - 20238 - OCT - 2018 -  BUSI COMM.pdf'),
(2, 'BCA', 'SEM2', 'ADVC', 'BCA SEM -2 - 20207 - OCT -2018 - ADV C PROG.pdf'),
(3, 'BCA', 'SEM1', 'MATHS', 'BCA SEM - 1 - 20201 - NOV - 2018-  MATHS.pdf'),
(4, 'BCA', 'SEM1', 'RDBMS', 'BCA SEM -1 - 20200 - NOV -2018 - RDBMS.pdf'),
(5, 'BCA', 'SEM3', 'C++', 'BCA SEM - 3 - 20632 - NOV - 2018 - OPP WITH C++.pdf'),
(6, 'BCA', 'SEM2', 'WEB DESIGN', 'BCA SEM -2 - 20206 - OCT - 2018 - WEB DESIGN.pdf'),
(7, 'BCA', 'SEM3', 'SAD', 'BCA SEM -3 - 20633 - NOV - 2018 -  SAD.pdf'),
(8, 'BCA', 'SEM2', 'PRACTICAL', 'BCA SEM-2 -20209- OCT-2018- PRACTICAL.pdf'),
(9, 'BCOM', 'SEM1', 'BUSI STAT', 'BCOM ( HON) SEM -1 - 21319 - DEC - 2018 - BUSI STAT(1).pdf'),
(10, 'BCOM', 'SEM5', 'ENGLISH VERSION', 'BCOM SEM - 5 - 21523 - ENGLISH VERSION(1).pdf'),
(11, 'BCOM', 'SEM1', 'BUSINES ECO', 'BCOM SEM -1 - 20245 - APRIL -2018 - BUSINES ECO.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE IF NOT EXISTS `syllabus` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `s_file` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`sid`, `c_name`, `sem`, `sub_name`, `s_file`) VALUES
(2, 'BCA', 'SEM1', 'RDBMS', 'B.C.A. (FC-Business Coummunication) Sem.V & VI-2018.pdf'),
(4, 'BCOM', 'SEM1', 'ENGLISH', 'B.Com. (Honors) Sem.I & II-2018.pdf'),
(5, 'BSCIT', 'SEM1', 'COURE JAVA', 'B.Sc. (I.T.) (Elective) Sem.V & VI-2018.pdf'),
(9, 'BBA', 'SEM1', 'BUSI COMM', 'BBA.pdf');
