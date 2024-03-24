-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 10:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymdbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(5) NOT NULL,
  `role` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `role`, `username`, `password`, `email`, `phoneno`) VALUES
(1, 'Admin', 'Akshay', '1234', 'admin@gmail.com', '7498312048');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `customername` varchar(50) NOT NULL,
  `customerimage` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `aadharno` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `branchname` varchar(25) NOT NULL,
  `instructorname` varchar(50) NOT NULL,
  `programtime` varchar(20) NOT NULL,
  `joindate` date NOT NULL,
  `place` varchar(15) NOT NULL,
  `member` varchar(10) NOT NULL,
  `programname` varchar(50) NOT NULL,
  `package` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `bloodgroup` varchar(8) NOT NULL,
  `height` varchar(8) NOT NULL,
  `weight` varchar(8) NOT NULL,
  `heart` varchar(20) DEFAULT NULL,
  `asthma` varchar(20) DEFAULT NULL,
  `gout` varchar(20) DEFAULT NULL,
  `cardio` varchar(30) DEFAULT NULL,
  `pressure` varchar(20) DEFAULT NULL,
  `familyhx` varchar(20) DEFAULT NULL,
  `dizziness` varchar(20) DEFAULT NULL,
  `arthritis` varchar(20) DEFAULT NULL,
  `infection` varchar(20) DEFAULT NULL,
  `blackouts` varchar(20) DEFAULT NULL,
  `diabetes` varchar(20) DEFAULT NULL,
  `fainting` varchar(20) DEFAULT NULL,
  `fits` varchar(20) DEFAULT NULL,
  `other` varchar(20) DEFAULT NULL,
  `otherdesc` varchar(70) NOT NULL,
  `knees` varchar(20) DEFAULT NULL,
  `lowerback` varchar(20) DEFAULT NULL,
  `neck` varchar(20) DEFAULT NULL,
  `hips` varchar(20) DEFAULT NULL,
  `flexibility` varchar(20) DEFAULT NULL,
  `others` varchar(20) DEFAULT NULL,
  `yes` varchar(20) DEFAULT NULL,
  `no` varchar(20) DEFAULT NULL,
  `weeks` varchar(20) DEFAULT NULL,
  `physical` varchar(50) DEFAULT NULL,
  `surgery` varchar(50) DEFAULT NULL,
  `smoke` varchar(50) DEFAULT NULL,
  `medication` varchar(50) DEFAULT NULL,
  `totalamount` varchar(20) NOT NULL,
  `paidamount` varchar(20) NOT NULL,
  `pendingamount` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customername`, `customerimage`, `date`, `gender`, `phoneno`, `aadharno`, `email`, `address`, `occupation`, `city`, `branchname`, `instructorname`, `programtime`, `joindate`, `place`, `member`, `programname`, `package`, `status`, `reference`, `bloodgroup`, `height`, `weight`, `heart`, `asthma`, `gout`, `cardio`, `pressure`, `familyhx`, `dizziness`, `arthritis`, `infection`, `blackouts`, `diabetes`, `fainting`, `fits`, `other`, `otherdesc`, `knees`, `lowerback`, `neck`, `hips`, `flexibility`, `others`, `yes`, `no`, `weeks`, `physical`, `surgery`, `smoke`, `medication`, `totalamount`, `paidamount`, `pendingamount`) VALUES
(1, 'adi', '', '2022-02-15', 'male', '9874578231', '', 'adi@gmail.com', 'sangli', 'business', 'pune', 'rajarampuri', 'Ramesh', 'morning', '2022-02-01', 'kolhapur', 'morning', 'Face Pulls', '3', '', 'articles', 'b+', '6.0', '70', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'rekha', '', '2022-02-03', 'female', '9874578111', '', 'pooja@gmail.com', 'sangli', 'businee', 'pune', 'rajarampuri', 'aditya', 'evening', '2022-01-30', 'kolhapur', 'customer', 'Face Pulls', '6', '', 'websites', 'A+', '6.0', '80', 'on', 'on', NULL, NULL, 'on', NULL, NULL, NULL, 'on', NULL, NULL, NULL, 'on', NULL, '', NULL, 'on', NULL, 'on', NULL, NULL, NULL, 'on', '', 'yes,', 'no', 'no', 'no', '', '', ''),
(4, 'rekha', '', '2022-02-03', 'select', '9874578111', '', 'pooja@gmail.com', 'sangli', 'businee', 'kolhapur', 'select branch name', 'select instruct', 'select p', '2022-01-30', 'kolhapur', 'select mem', 'select program joine', '6', '', 'select referenc', 'A+', '6.0', '80', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Blackouts', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Weeks', 'Physical', 'Surgery', 'Smoke', 'Medication', '', '', ''),
(7, 'rekha', '', '2022-02-08', 'female', '8796543200', '', 'pooja@gmail.com', 'Kolhapur', '', '', 'rajarampuri', 'aditya', 'morning', '2022-02-09', '', 'customer', 'Face Pulls', '8', '', 'websites', '', '', '', NULL, NULL, NULL, NULL, 'High/Low Blood Press', NULL, NULL, NULL, NULL, NULL, NULL, 'Fainting', NULL, NULL, '', NULL, NULL, 'Neck/Shoulder', NULL, NULL, NULL, NULL, 'No', 'Weeks', 'Physical', 'Surgery', 'Smoke', 'Medication', '', '', ''),
(8, 'adi', '', '2022-02-15', 'male', '9874578000', '', 'adi@gmail.com', '', '', '', 'rajarampuri', 'aditya', 'morning', '2022-02-03', '', 'member', 'Deadlift', '8 Month', '', 'other', '', '', '', 'Heart Disease', NULL, NULL, NULL, 'High/Low Blood Press', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Weeks', 'Physical', 'Surgery', 'Smoke', 'Medication', '', '', ''),
(9, 'rekha', '', '2022-02-25', 'female', '9874578111', '', 'shourya@gmail.com', 'karad', 'businee', 'belgaum', 'rajarampuri', 'aditya', 'morning', '2022-02-25', 'kolhapur', 'member', 'Face Pulls', 'hangi', '', 'social media', 'A+', '5.0', '65', 'Heart Disease', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Knees', NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, 'Weeks1', 'Physical1', 'Surgery1', 'Smoke1', 'Medication1', '', '', ''),
(10, 'test', '', '2022-02-25', 'female', '8796543209', '', 'shourya@gmail.com', 'karad', 'business', 'belgaum', 'shahupuri', 'aditya', 'morning', '2022-02-25', 'kolhapur', 'customer', 'Face Pulls', '7 Month', '', 'articles', 'A+', '6.0', '65', NULL, 'Asthma', NULL, 'Cardiovascular condi', NULL, NULL, NULL, 'Arthritis', 'Infectious Disease', NULL, NULL, 'Fainting', NULL, NULL, '', NULL, 'Lower Back', NULL, NULL, 'Flexibility', NULL, NULL, 'No', 'Weeks', 'Physical', 'no', 'no', 'no', '', '', ''),
(11, 'test1', '', '2022-02-25', 'female', '8796543209', '', 'radhika23a@gmail.com', '', '', '', 'rajarampuri', 'Ramesh', 'morning', '2022-02-25', '', 'member', 'lat pulldowns', '11 Month', '', 'other', '', '', '', NULL, NULL, 'Gout', 'Cardiovascular condion', NULL, NULL, 'Dizziness', NULL, 'Infectious Disease', NULL, 'Diabetes', NULL, 'Epilepsy/Fits', NULL, '', NULL, 'Lower Back', NULL, NULL, 'Flexibility', NULL, 'Yes', NULL, '2 month', 'yes,', 'no', 'no', 'no', '', '', ''),
(12, 'test', '', '2022-02-06', 'male', '8796543200', '', 'shourya@gmail.com', 'Kolhapur', 'business', 'kolhapur', 'rajarampuri', 'aditya', 'morning', '2022-02-08', 'kolhapur', 'member', 'Pull Ups', '6 Month', '', 'websites', '', '', '', NULL, NULL, NULL, 'Cardiovascular condition', NULL, NULL, NULL, 'Arthritis', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Weeks', '', '', '', '', '', '', ''),
(13, 'test2', '', '2022-03-02', 'female', '9874578231', '', 'adi@gmail.com', 'karad', 'business', 'kolhapur', 'shahupuri', 'santosh', 'morning', '2022-04-01', 'kolhapur', 'customer', 'weight gain', '3 Month', '', 'websites', 'A+', '6.0', '70', NULL, NULL, 'Gout', NULL, NULL, NULL, NULL, 'Arthritis', NULL, 'Blackouts', NULL, NULL, NULL, NULL, '', 'Knees', 'Lower Back', NULL, NULL, NULL, NULL, NULL, 'No', 'Weeks', 'yes,', 'no', 'no', 'no', '', '', ''),
(14, 'test2', '', '2022-03-02', 'female', '9874578231', '', 'adi@gmail.com', 'karad', 'business', 'kolhapur', 'shahupuri', 'santosh', 'morning', '2022-04-01', 'kolhapur', 'customer', 'weight gain', '3 Month', '', 'websites', 'A+', '6.0', '70', NULL, NULL, 'Gout', NULL, NULL, NULL, NULL, 'Arthritis', NULL, 'Blackouts', NULL, NULL, NULL, NULL, '', 'Knees', 'Lower Back', NULL, NULL, NULL, NULL, NULL, 'No', 'Weeks', 'yes,', 'no', 'no', 'no', '', '', ''),
(15, 'test2', '', '2022-03-02', 'female', '9874578231', '', 'adi@gmail.com', 'karad', 'business', 'kolhapur', 'shahupuri', 'santosh', 'morning', '2022-04-01', 'kolhapur', 'customer', 'weight gain', '3 Month', '', 'websites', 'A+', '6.0', '70', NULL, NULL, 'Gout', NULL, NULL, NULL, NULL, 'Arthritis', NULL, 'Blackouts', NULL, NULL, NULL, NULL, '', 'Knees', 'Lower Back', NULL, NULL, NULL, NULL, NULL, 'No', 'Weeks', 'yes,', 'no', 'no', 'no', '', '', ''),
(16, 'test2', '', '2022-03-02', 'female', '9874578231', '', 'adi@gmail.com', 'karad', 'business', 'kolhapur', 'shahupuri', 'santosh', 'morning', '2022-04-01', 'kolhapur', 'customer', 'weight gain', '3 Month', '', 'websites', 'A+', '6.0', '70', NULL, NULL, 'Gout', NULL, NULL, NULL, NULL, 'Arthritis', NULL, 'Blackouts', NULL, NULL, NULL, NULL, '', 'Knees', 'Lower Back', NULL, NULL, NULL, NULL, NULL, 'No', 'Weeks', 'yes,', 'no', 'no', 'no', '', '', ''),
(17, 'test2', '', '2022-03-02', 'female', '9874578231', '', 'adi@gmail.com', 'karad', 'business', 'kolhapur', 'shahupuri', 'santosh', 'morning', '2022-04-01', 'kolhapur', 'customer', 'weight gain', '3 Month', '', 'websites', 'A+', '6.0', '70', NULL, NULL, 'Gout', NULL, NULL, NULL, NULL, 'Arthritis', NULL, 'Blackouts', NULL, NULL, NULL, NULL, '', 'Knees', 'Lower Back', NULL, NULL, NULL, NULL, NULL, 'No', 'Weeks', 'yes,', 'no', 'no', 'no', '', '', ''),
(18, 'test2', '', '2022-03-02', 'female', '9874578231', '', 'adi@gmail.com', 'karad', 'business', 'kolhapur', 'shahupuri', 'santosh', 'morning', '2022-04-01', 'kolhapur', 'customer', 'weight gain', '3 Month', '', 'websites', 'A+', '6.0', '70', NULL, NULL, 'Gout', NULL, NULL, NULL, NULL, 'Arthritis', NULL, 'Blackouts', NULL, NULL, NULL, NULL, '', 'Knees', 'Lower Back', NULL, NULL, NULL, NULL, NULL, 'No', 'Weeks', 'yes,', 'no', 'no', 'no', '', '', ''),
(19, 'testing', 'D:\\wamp\\tmp\\php33C7.tmp', '2022-03-02', 'female', '9874578000', '453219876543', 'test@gmail.com', 'nippani', 'business', 'belgaum', 'shahupuri', 'santosh', 'evening', '2022-04-06', 'kolhapur', 'customer', 'lifting', '2 Month', '', 'social media', '0 +', '5.0', '70', NULL, 'Asthma', NULL, NULL, NULL, NULL, 'Dizziness', NULL, 'Infectious Disease', NULL, NULL, 'Fainting', NULL, NULL, '', 'Knees', NULL, NULL, 'Hips/Pelvis', NULL, NULL, 'Yes', NULL, '3 months', 'no', 'no', 'no', 'no', '', '', ''),
(20, 'testing', 'profile.jpg', '2022-03-02', 'female', '9874578000', '453219876543', 'test@gmail.com', 'nippani', 'business', 'belgaum', 'shahupuri', 'santosh', 'evening', '2022-04-06', 'kolhapur', 'customer', 'lifting', '2 Month', '', 'social media', '0 +', '5.0', '70', NULL, 'Asthma', NULL, NULL, NULL, NULL, 'Dizziness', NULL, 'Infectious Disease', NULL, NULL, 'Fainting', NULL, NULL, '', 'Knees', NULL, NULL, 'Hips/Pelvis', NULL, NULL, 'Yes', NULL, '3 months', 'no', 'no', 'no', 'no', '', '', ''),
(21, 'test', 'profile.png', '2022-03-02', 'female', '9874578111', '453219876543', 'pooja@gmail.com', 'sangli', 'business', 'pune', 'rajarampuri 4th', 'select instructor name', 'evening', '2022-04-07', 'kolhapur', 'member', 'lifting', '4 Month', 'select status', 'articles', 'b+', '5.5', '80', NULL, NULL, 'Gout', NULL, NULL, NULL, NULL, NULL, 'Infectious Disease', NULL, NULL, NULL, NULL, NULL, '', NULL, 'Lower Back', NULL, NULL, NULL, NULL, NULL, 'No', 'Weeks', 'no', 'no', 'no', 'no', '', '', ''),
(22, 'Bhagyashree S Khot', 'profile.png', '2022-03-02', 'female', '9874578231', '453219876543', 'deepa@gmail.com', 'sangli', 'business', 'pune', 'rajarampuri 4th', 'sakshi', 'morning', '2022-04-08', 'kolhapur', 'customer', 'lifting', '4 Month', '', 'articles', 'b+', '5.0', '65', NULL, 'Asthma', NULL, NULL, NULL, NULL, 'Dizziness', NULL, NULL, NULL, 'Diabetes', NULL, NULL, NULL, '', NULL, 'Lower Back', NULL, NULL, NULL, NULL, NULL, 'No', '', 'no', 'no', 'no', 'no', '5000', '2000', '3000'),
(24, 'Mortal', 'profile.jpg', '2022-03-07', 'male', '9874578231', '453219876543', 'mortal@gmail.com', 'nippani', 'business', 'mumbai', '', 'select instructor name', 'morning', '2022-03-25', 'kolhapur', 'customer', 'weight gain', '3 Month', 'active', 'social media', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Arthritis', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Hips/Pelvis', NULL, NULL, NULL, 'No', '', 'No', 'No', 'No', 'No', '', '', ''),
(25, 'Rega', 'profile.jpg', '2022-03-09', 'male', '9874578231', '453219876543', 'adi@gmail.com', 'bgmi', 'businee', 'kolhapur', '', 'select instructor name', 'evening', '2022-03-30', 'kolhapur', 'customer', 'weight gain', '2 Month', 'active', 'websites', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Blackouts', NULL, NULL, NULL, NULL, '', NULL, 'Lower Back', NULL, NULL, NULL, NULL, NULL, 'No', '', 'yes', '', '', '', '', '', ''),
(27, 'Goldy', 'profile.jpg', '1997-02-28', 'male', '6565656565', '126383629275', 'Rega@gmail.com', 'Kolhapur', 'Player', 'jdhsf', 'WWW', 'manish', 'morning', '2022-05-01', 'Kolhapur', 'customer', 'weight gain', '8 Month', 'active', 'websites', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(28, 'Mortal', 'profile.jpg', '2007-06-21', 'male', '6565656565', '126383629275', 'mortal@gmail.com', 'Kolhapur', 'Youtuber', 'Kolhapur', 'WWW', 'select instructor name', 'evening', '2022-05-01', 'Kolhapur', 'customer', 'weight gain', '3 Month', 'active', 'social media', 'A+', '165', '53', NULL, NULL, NULL, NULL, NULL, NULL, 'Dizziness', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Knees', NULL, NULL, NULL, NULL, NULL, NULL, 'No', '-', 'No', 'No', 'No', 'No', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gymlocation`
--

CREATE TABLE `gymlocation` (
  `id` int(10) NOT NULL,
  `branchname` varchar(50) NOT NULL,
  `ownername` varchar(50) NOT NULL,
  `branchaddress` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `landline` varchar(12) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gymlocation`
--

INSERT INTO `gymlocation` (`id`, `branchname`, `ownername`, `branchaddress`, `email`, `landline`, `phoneno`, `city`, `pincode`, `state`, `country`) VALUES
(1, 'GOLD', 'Aniruddha Yadav', 'Sambhajinager', 'aniruddha@gmail.com', '456168555', '7498819084', 'Kolhapur', '416012', 'Maharashtra', 'India'),
(2, 'Guruddatta Fitness Center', 'Nilesh Girigosavi', 'Unchgoan', 'nilesh@gmail.com', '465416545', '7498819084', 'Kolhapur', '416012', 'Maharashtra', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `gymsetting`
--

CREATE TABLE `gymsetting` (
  `id` int(11) NOT NULL,
  `gymname` varchar(50) NOT NULL,
  `ownername` varchar(50) NOT NULL,
  `landline` varchar(12) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `emailone` varchar(30) NOT NULL,
  `emailtwo` varchar(20) NOT NULL,
  `billingaddress` varchar(50) NOT NULL,
  `billingcity` varchar(20) NOT NULL,
  `billingpincode` varchar(10) NOT NULL,
  `billingstate` varchar(30) NOT NULL,
  `billingcountry` varchar(20) NOT NULL,
  `shippingaddress` varchar(50) NOT NULL,
  `shippingcity` varchar(50) NOT NULL,
  `shippingpincode` varchar(20) NOT NULL,
  `shippingstate` varchar(20) NOT NULL,
  `shippingcountry` varchar(20) NOT NULL,
  `gstno` varchar(15) NOT NULL,
  `gstimage` varchar(250) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `regimage` varchar(250) NOT NULL,
  `panno` varchar(10) NOT NULL,
  `panimage` varchar(250) NOT NULL,
  `award` varchar(25) NOT NULL,
  `awardimage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gymsetting`
--

INSERT INTO `gymsetting` (`id`, `gymname`, `ownername`, `landline`, `phoneno`, `emailone`, `emailtwo`, `billingaddress`, `billingcity`, `billingpincode`, `billingstate`, `billingcountry`, `shippingaddress`, `shippingcity`, `shippingpincode`, `shippingstate`, `shippingcountry`, `gstno`, `gstimage`, `regno`, `regimage`, `panno`, `panimage`, `award`, `awardimage`) VALUES
(1, 'Gurudatta Fitness Center', 'Nilesh Girigosavi', '125711811', '7498819084', 'nileshgirigosavi@gmail.com', 'nilesh@gmail.com', 'Unchgoan', 'Kolhapur', '416012', 'Maharashtra', 'India', 'Unchgoan', 'Kolhapur', '416012', 'Maharashtra', 'India', '29ABCDE1234F2Z5', '', '1', '', 'ASKD38HS', '', '-', ''),
(2, 'GOLD', 'Aniruddha Yadav', '165974655', '7498819084', 'aniruddha@gmail.com', 'aniruddha21@gmail.co', 'Sambhajinager', 'Kolhapur', '416012', 'Maharashtra', 'India', 'Sambhajinager', 'Kolhapur', '416012', 'Maharashtra', 'India', '29ABCDE1234F2Z5', '', '1', '', 'ASKD38HS', '', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `gymstaff`
--

CREATE TABLE `gymstaff` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `employeename` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `gender` varchar(8) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `place` varchar(50) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `height` varchar(8) NOT NULL,
  `weight` varchar(8) NOT NULL,
  `branchname` varchar(50) NOT NULL,
  `time` varchar(8) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `joindate` date DEFAULT NULL,
  `status` varchar(15) NOT NULL,
  `trainfor` varchar(40) NOT NULL,
  `aadharno` varchar(12) NOT NULL,
  `aadharimage` varchar(250) NOT NULL,
  `panno` varchar(10) NOT NULL,
  `panimage` varchar(250) NOT NULL,
  `employeeimage` varchar(250) NOT NULL,
  `bankname` varchar(50) NOT NULL,
  `accountno` varchar(20) NOT NULL,
  `accounttype` varchar(15) NOT NULL,
  `ifsc` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gymstaff`
--

INSERT INTO `gymstaff` (`id`, `role`, `employeename`, `password`, `date`, `gender`, `phoneno`, `email`, `place`, `bloodgroup`, `height`, `weight`, `branchname`, `time`, `designation`, `joindate`, `status`, `trainfor`, `aadharno`, `aadharimage`, `panno`, `panimage`, `employeeimage`, `bankname`, `accountno`, `accounttype`, `ifsc`) VALUES
(1, 'gym trainer', '', '123', NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', 'D:\\wamp\\tmp\\php4220.tmp', '', 'D:\\wamp\\tmp\\php4221.tmp', 'D:\\wamp\\tmp\\php421F.tmp', '', '', '', ''),
(2, 'gym trainer', '', '123', NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', 'aadhar.jpg', '', 'pan.jpg', 'employee.jpg', '', '', '', ''),
(3, 'gym trainer', 'Regaltos S8UL', '2106', '2022-05-09', 'male', '7498819084', 'avy@gmail.com', 'kolhapur', 'A+', '160', '55', 'WWW', 'evening', 'trainer', '2022-05-06', 'working', 'both', '283807257539', 'aadhar.jpg', 'ASKD38HS', 'pan.jpg', 'employee.jpg', 'Maharashtra Bank', '-', '-', '-'),
(4, 'gym trainer', 'Aniruddha Yadav', 'andy', '2003-06-21', 'male', '7498819084', 'aniruddha@gmail.com', 'kolhapur', 'A+', '160', '55', 'GOLD', 'morning', 'manager', '2003-06-21', 'working', 'both', '283807257539', 'aadhar.jpg', 'ASKD38HS', 'pan.jpg', 'employee.jpg', 'Maharashtra Bank', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `id` int(11) NOT NULL,
  `machinename` varchar(50) NOT NULL,
  `machineno` varchar(20) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `branchname` varchar(50) NOT NULL,
  `purchasecost` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `machinetype` varchar(25) NOT NULL,
  `purchasetype` varchar(25) NOT NULL,
  `purchaseno` varchar(20) NOT NULL,
  `insurance` varchar(10) NOT NULL,
  `insuranceno` varchar(20) NOT NULL,
  `insurancename` varchar(50) NOT NULL,
  `purchasedate` date NOT NULL,
  `renewdate` date NOT NULL,
  `depreciation` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`id`, `machinename`, `machineno`, `brand`, `branchname`, `purchasecost`, `date`, `machinetype`, `purchasetype`, `purchaseno`, `insurance`, `insuranceno`, `insurancename`, `purchasedate`, `renewdate`, `depreciation`) VALUES
(1, 'dumbell', '342165', 'abcd', 'rajarampuri 4th', '5000', '2022-01-30', 'Movable Purchase', 'Prepaid', '432', 'No', '43216', 'abc', '2022-03-12', '2022-04-06', '10%'),
(2, 'dumbellone', '342165', 'abc', '', '5000', '2022-01-30', ' Select Machine Type', ' Select Purchase Type', '432', 'Have Insur', '43216', 'abc', '2022-03-12', '2022-04-06', '10%'),
(3, 'deadlift', '342165', 'abc', 'shahupuri', '20000', '2022-01-30', ' Select Machine Type', ' Select Purchase Type', '432', 'Have Insur', '43216', 'abc', '2022-02-20', '2022-03-12', '10%'),
(4, 'deadlift', '342165', 'abc', ' rajarampuri', '20000', '2022-02-15', ' digital purchase', 'emi', '432', 'yes', '43216', 'abc', '2022-02-26', '2022-03-12', '10%');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(10) NOT NULL,
  `programname` varchar(50) NOT NULL,
  `fee` varchar(10) NOT NULL,
  `weightgain` varchar(30) DEFAULT NULL,
  `weightloss` varchar(30) DEFAULT NULL,
  `personal` varchar(30) DEFAULT NULL,
  `cardio` varchar(30) DEFAULT NULL,
  `cycling` varchar(30) DEFAULT NULL,
  `lifting` varchar(30) DEFAULT NULL,
  `programdescription` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `programname`, `fee`, `weightgain`, `weightloss`, `personal`, `cardio`, `cycling`, `lifting`, `programdescription`) VALUES
(1, 'weight gain', '2500', NULL, NULL, NULL, NULL, NULL, NULL, 'weight\r\n													\r\n													'),
(3, 'lifting', '3000', NULL, 'Weight Loss', 'Personal Training', 'Cardio Area', 'Cycling Studio', NULL, 'lifting																																									');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gymlocation`
--
ALTER TABLE `gymlocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gymsetting`
--
ALTER TABLE `gymsetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gymstaff`
--
ALTER TABLE `gymstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `gymlocation`
--
ALTER TABLE `gymlocation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gymsetting`
--
ALTER TABLE `gymsetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gymstaff`
--
ALTER TABLE `gymstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
