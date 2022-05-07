-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 08:58 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(100) NOT NULL,
  `cid` int(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `word` varchar(300) NOT NULL,
  `ppt` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `cid`, `title`, `name`, `word`, `ppt`, `video`, `status`) VALUES
(1, 1, 'Airline Reservation Management System', 'Anu Priya', 'Airline Reservation System.docx', 'Applet.pptx', 'Earning.flv', 'Approved'),
(2, 2, 'Bank Management System', 'Rakshana', 'Banking system for banks.docx', 'Bank Management System.pptx', 'Earning.flv', 'Rejected'),
(5, 2, 'Online Library Management System ', 'Rakshana', 'invitation ambily.doc', 'Deep Learning.pptx', 'Working Demo.flv', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `cid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `education` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`cid`, `name`, `mobile`, `mail`, `education`, `photo`, `pass`) VALUES
(1, 'Anu Priya', '9600936470', 'anu@gmail.com', 'B.Tech. IT', '1.jpg', 'Anu'),
(2, 'Rakshana', '9844564234', 'rakshana13rakshana@gmail.com', 'BE. ECE', 'girl.jpg', ''),
(3, 'Jenifer', '8996579878', 'jenifer1998@gmail.com', 'BE CSE', '1.jpg', ''),
(4, 'Durga', '984754576', 'durga@gmail.com', 'BE', 'Capture.JPG', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
