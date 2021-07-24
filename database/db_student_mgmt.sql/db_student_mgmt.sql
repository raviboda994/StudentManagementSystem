-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2021 at 04:51 PM
-- Server version: 8.0.21
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_student_mgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `emailid` varchar(35) NOT NULL,
  `a_photo` varchar(100) NOT NULL,
  `loginid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `mobile`, `emailid`, `a_photo`, `loginid`, `password`) VALUES
(1, 'Ravi Boda', '9409512994', 'ravib@example.com', 'smile.jpg', '111', '111'),
(2, 'Darshak Akbari', '9409370701', 'dako@example.com', 'download.jpg', '123', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int NOT NULL,
  `c_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `c_name`) VALUES
(5, 'Computer'),
(6, 'IT'),
(7, 'Mechanical');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `fid` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `emailid` varchar(35) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `master_sub` varchar(50) NOT NULL,
  `f_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`fid`, `name`, `mobile`, `emailid`, `qualification`, `experience`, `master_sub`, `f_photo`) VALUES
(7, 'Amruta Soni', '5555544444', 'amruta.soni@gmail.com', 'IT', '5', 'Hardware Networking', 'user-icon-female-.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `iid` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `emailid` varchar(35) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`iid`, `name`, `mobile`, `emailid`, `comments`) VALUES
(1, 'ravi', '9409512994', 'ravi.b@shd.com', 'hello \r\nmy name is ravi\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `pid` int NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `p_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `sid` int NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `s_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`sid`, `c_name`, `sem`, `sub_name`, `s_file`) VALUES
(11, 'COMPUTER', '6', 'AJAVA', '3360701-AJAVA.pdf'),
(12, 'Computer', '6', 'NMA', '3360703-NMA.pdf'),
(13, 'Computer', '6', 'PPUD', '3360702-PPUD.pdf'),
(14, 'Computer', '6', 'MCAD', '3360704-MCAD.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `fid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `iid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `pid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `sid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
