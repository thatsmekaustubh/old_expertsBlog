-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2010 at 08:11 PM
-- Server version: 5.0.81
-- PHP Version: 5.3.1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `expertsblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `kj_articleu`
--

CREATE TABLE IF NOT EXISTS `kj_articleu` (
  `PID` int(10) NOT NULL,
  `ID` int(11) NOT NULL,
  `Title` varchar(150) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Details` varchar(30000) NOT NULL,
  `Images` varchar(300) NOT NULL,
  `Links` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kj_articleu`
--

INSERT INTO `kj_articleu` (`PID`, `ID`, `Title`, `Category`, `Details`, `Images`, `Links`) VALUES
(1, 1, 'My article', 'Science', 'My article on science', '', ''),
(1, 2, 'My article', 'Engineering', 'My article on Engineering', '', ''),
(1, 4, 'My article', 'Health', 'My article on Helath', '', ''),
(3, 5, 'My article', 'Health', 'Article', '', ''),
(5, 6, 'Chets article', 'Science', 'This is my article.', '', ''),
(5, 7, 'My article', 'Engineering', 'This is my article.', '', ''),
(5, 8, 'C Article', 'Litreature', 'This is literature related articles.', '', ''),
(5, 9, 'Chetans Article', 'Health', 'This is health related article.', '', ''),
(4, 10, 'My article', 'Science', 'This is chets article', '', ''),
(4, 11, 'C Article', 'Engineering', 'I am an Engg.', '', ''),
(4, 12, 'Patils Article', 'Litreature', 'This is my article.', '', ''),
(4, 13, 'Chetan Patils Article', 'Health', 'This is my article.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kj_blogu`
--

CREATE TABLE IF NOT EXISTS `kj_blogu` (
  `PID` int(10) NOT NULL,
  `ID` int(10) NOT NULL,
  `Title` varchar(150) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Details` varchar(30000) NOT NULL,
  `Images` varchar(300) NOT NULL,
  `Links` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kj_blogu`
--

INSERT INTO `kj_blogu` (`PID`, `ID`, `Title`, `Category`, `Details`, `Images`, `Links`) VALUES
(1, 1, 'My Blog', 'Science', 'Blllllllllllllllllllllllllllllllllllllllllllllllllllllll\r\ndsf\r\nds\r\nfds\r\nf\r\ndsf\r\nds\r\nfsdf\r\nsd\r\nfsd\r\nf\r\nds\r\nfds\r\nf\r\nds\r\nfd\r\nsf\r\ndsf\r\nds\r\nf\r\nsd\r\nfsd\r\nfds\r\nf\r\nds\r\nfd\r\nsf\r\nds\r\nf\r\nsd\r\nf', '', ''),
(1, 2, 'My Blog', 'Engineering', 'My blog on Engineering', '', ''),
(1, 4, 'My Blog', 'Health', 'My Blog on Health', '', ''),
(2, 5, 'Blog 1', 'Engineering', 'Blog 1 is blog dssfsdfdsfdsfdsfdsfdsffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff\r\ndf\r\nf\r\nf\r\n', '', ''),
(4, 6, 'My Blog', 'Science', 'This my blog n i wanna see it', '', ''),
(5, 8, 'Chetans Blog', 'Engineering', 'My blog is this one', '', ''),
(5, 9, 'C Blog', 'Litreature', 'My Litreature kadhi vachun bagh', '', ''),
(5, 10, 'Chets blog', 'Health', 'Health is wealth.', '', ''),
(5, 11, 'My Blog', 'Science', 'This is my blog.', '', ''),
(4, 12, 'Patils blog', 'Engineering', 'This is an engg. blog.', '', ''),
(4, 13, 'Chetan Patils Blog', 'Litreature', 'This is Chetan Patils blog.', '', ''),
(4, 14, 'C Blog', 'Health', 'Health is wealth.', '', ''),
(7, 15, 'BE Positive & have Patience', 'Litreature', 'Take up an Idea,\r\nDevote Urself,\r\nStruugle on in a patience,\r\nSun will  rise For U.\r\n\r\n\r\n\r\n', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kj_loginu`
--

CREATE TABLE IF NOT EXISTS `kj_loginu` (
  `Uname` varchar(20) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `RememberMe` varchar(10) NOT NULL,
  `IP` varchar(50) NOT NULL,
  `LoginTime` varchar(20) NOT NULL,
  `LogoutTime` varchar(20) NOT NULL,
  `PID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kj_loginu`
--

INSERT INTO `kj_loginu` (`Uname`, `Pass`, `RememberMe`, `IP`, `LoginTime`, `LogoutTime`, `PID`) VALUES
('error', 'code', '', '', '', '', '1'),
('kags', 'kags', '', '', '', '', '2'),
('rahul', '1234', '', '', '', '', '3'),
('chetan', '123', '', '', '', '', '4'),
('chetanS', '123', '', '', '', '', '5'),
('patilS', '123', '', '', '', '', '6'),
('jorvekarG', '123', '', '', '', '', '7'),
('shetkatV', '123', '', '', '', '', '8'),
('japeP', '123', '', '', '', '', '9'),
('meghna', '123', '', '', '', '', '10');

-- --------------------------------------------------------

--
-- Table structure for table `kj_profileimagesu`
--

CREATE TABLE IF NOT EXISTS `kj_profileimagesu` (
  `PID` int(10) NOT NULL,
  `SRC` varchar(100) NOT NULL,
  `Hieght` int(4) NOT NULL,
  `Width` int(4) NOT NULL,
  `AltText` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kj_profileimagesu`
--

INSERT INTO `kj_profileimagesu` (`PID`, `SRC`, `Hieght`, `Width`, `AltText`) VALUES
(1, 'My photo.jpg', 85, 98, 'User Photo'),
(2, 'C ACTS.gif', 85, 98, 'User Photo'),
(3, 'kanade.jpg', 85, 98, 'User Photo'),
(4, 'CP.jpg', 85, 98, 'User Photo'),
(5, 'CS.jpg', 85, 98, 'User Photo'),
(6, 'Patil sir.jpg', 85, 98, 'User Photo'),
(7, 'Jorvekar Sir.jpg', 85, 98, 'User Photo'),
(8, 'shetkar sir.jpg', 85, 98, 'User Photo'),
(9, 'Brad.jpg', 85, 98, 'User Photo'),
(10, 'Jorvekar Sir.jpg', 85, 98, 'User Photo');

-- --------------------------------------------------------

--
-- Table structure for table `kj_signupu`
--

CREATE TABLE IF NOT EXISTS `kj_signupu` (
  `PID` varchar(10) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Zip` int(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `PhoneNo` bigint(20) NOT NULL,
  `UserID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `CachyLine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kj_signupu`
--

INSERT INTO `kj_signupu` (`PID`, `FirstName`, `LastName`, `Email`, `Address`, `Zip`, `Country`, `DateOfBirth`, `PhoneNo`, `UserID`, `Password`, `CachyLine`) VALUES
('1', 'Kaustubh', 'Joshi', 'rockingkags@gmail.com', '"Parishram",\r\nOm nagar,\r\nTakli Road,\r\nKopargaon', 423601, 'India', '1990-02-21', 8087898862, 'error', 'code', 'cachy line'),
('2', 'Kaustubh', 'Joshi', 'rockingkags@gmail.com', 'Address', 423601, 'India', '1990-05-02', 9762654210, 'kags', 'kags', 'my cachy line'),
('3', 'Rahul', 'Kanade', 'rahul@a.com', 'address', 423601, 'India', '1990-02-02', 1223, 'rahul', '123', 'rahul kanade'),
('4', 'Chetan', 'Patil', 'c.patil555@gmail.com', 'adreess', 423601, 'India', '1990-05-02', 9422226655, 'chetan', '123', 'chetan'),
('5', 'Chetan', 'Sangule', 'chetansangule@gmail.com', 'At Post-Savalivihir,Tal-Rahata,Dist-Ahmednagar.', 423109, 'India', '1988-12-18', 9096580548, 'chetanS', '123', 'cachy line'),
('6', 'Sandip', 'Patil', 'samns_006@gmail.com', 'address', 423601, 'India', '1990-02-02', 111, 'patilS', '123', 'cachy line'),
('7', 'Ganesh', 'Jorvekar', 'ganesh.jorvekar@gmail.com', 'address', 423601, 'India', '1990-02-02', 1111, 'jorvekarG', '123', 'cachy line'),
('8', 'Vishal', 'Shetkar', 'shetkar@gmail.com', 'add', 423601, 'India', '1990-02-02', 7272, 'shetkatV', '123', 'cachy line'),
('9', 'Pritam', 'Jape', 'jape@gmail.com', 'address', 423601, 'India', '1990-02-02', 213, 'japeP', '123', 'cachy line'),
('10', 'meghna', 'daware', 'meghna_dawre@yahoo.com', 'sangamner', 413714, 'India', '1990-04-06', 9404209063, 'meghna', '123', 'luv');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
