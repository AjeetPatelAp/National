-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2018 at 10:47 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `national`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'ajeet@gmail.com', 'ajeet');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `ques_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`ans_id`, `ques_id`, `patient_id`, `answer`, `date`) VALUES
(1, 1, 2, 'It is a programing language.', '2018-07-27'),
(2, 2, 2, 'ye bhi wahi hai', '2018-07-27'),
(3, 1, 2, 'developed by dennice retche', '2018-07-27'),
(4, 1, 2, 'It is a programing language.', '2018-07-27'),
(5, 1, 2, 'what is c++ ?', '2018-07-27'),
(6, 4, 2, 'pythen is a programin language', '2018-07-30'),
(7, 5, 2, 'ajeet', '2018-07-31'),
(8, 7, 2, 'Ajeet', '2018-08-17'),
(9, 8, 11, 'hi', '2018-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appoiment`
--

CREATE TABLE IF NOT EXISTS `tbl_appoiment` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `status` varchar(2) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_appoiment`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE IF NOT EXISTS `tbl_contactus` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_contactus`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE IF NOT EXISTS `tbl_doctor` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `specialist` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `fees` varchar(10) NOT NULL,
  `timing` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`doctor_id`, `name`, `fname`, `gender`, `email`, `password`, `photo`, `qualification`, `mobile`, `specialist`, `address`, `fees`, `timing`, `date`) VALUES
(25, 'Shilpa verma', 'bd verma', 'female', 'shilpa@gmail.com', 'shilpa', 'IMG_20160326_170317.jpg', 'mbbs', '7518193302', 'ortho', 'sholepur faizabad', '1000', '11:00', '2018-08-17'),
(23, 'priyanshi verma', 'bd verma', 'female', 'priyanshi@gmail.com', 'priyanshi', 'priyanci di.jpg', 'mbbs', '8174906875', 'dentist', 'Shonawa ambedkar nagar', '1000', '10:00', '2018-08-17'),
(22, 'Arvind patel', 'bd verma', 'male', 'arvind@gmail.com', 'arvind', 'arvind bhai.jpg', 'mbbs', '8174906875', 'surgeon', 'shonawa ambedkar nagar', '100000', '10:00', '2018-08-17'),
(21, 'Ankita patel', 'jb verma', 'female', 'ankita@gmail.com', 'ankita', 'ankita di.jpg', 'mbbs', '8174906875', 'dentist', 'lucknow', '1000', '10:00', '2018-08-17'),
(20, 'Ajeet patel', 'jb verma', 'male', 'ajeetpatel1199@gmail.com', 'ajeet', 'ajeet.jpg', 'phd', '8174906875', 'surgeon', 'Tanda ambedkar nagar', '100000', '10:00', '2018-08-17'),
(17, 'ravi  patel', 'rd verma', 'male', 'ravi@gmail.com', 'ravi', 'BeautyPlus_20180126111018_save.jpg', 'phd', '7518193302', 'physician', 'lucknow', '1000', '05:07', '2018-08-03'),
(26, 'Shivangi verma', 'rd verma', 'female', 'shivangi@gmail.com', 'shivangi', 'shivangi di.jpg', 'msc', '9517606586', 'cardiologi', 'Shonawa ambedkar nagar', '1200', '10:00', '2018-08-17'),
(27, 'Simran verma', 'rd verma', 'female', 'simran@gmail.com', 'simran', 'annu.jpg', 'phd', '8174906875', 'surgeon', 'lucknow', '80000', '10:00', '2018-08-17'),
(28, 'Kiran verma', 'bd verma', 'female', 'kiran@gmail.com', 'kiran', 'kiran di.jpg', 'msc', '8765838539', 'cardiologi', 'akbarpur ambedkar nagar', '1000', '13:00', '2018-08-17'),
(29, 'ankur patel', 'jb verma', 'male', 'ankur1199@gmail.com', 'ankur', 'ankur.jpg', 'mbbs', '7518193302', 'ortho', 'lucknow', '800', '10:00', '2018-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE IF NOT EXISTS `tbl_patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `address` varchar(60) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`patient_id`, `name`, `fname`, `gender`, `email`, `password`, `mobile`, `address`, `pin`, `date`) VALUES
(8, 'Ram lal', 'shamlal', 'male', 'ramlal@gmail.com', 'ram', '7518193302', 'lucknow', '4567', '2018-07-31'),
(2, 'shivpal  ', 'RN yadav', 'male', 'shivpal@gmail.com', '1234', '8174906875', 'gwapar balia', '4567', '2018-07-22'),
(7, 'SHIVAM AGRAHARI', 'DD AGRAHARI', 'male', 'shivamagrahari0786@gmail.com', '8765838539', '8765838539', 'ambedker nagar', '224122', '2018-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `ques_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`ques_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`ques_id`, `question`, `patient_id`, `date`) VALUES
(1, 'what is c language ?', 2, '2018-07-26'),
(2, 'what is java ??', 5, '2018-07-26'),
(3, 'what is php?', 5, '2018-07-26'),
(4, 'what is pythen ???', 2, '2018-07-30'),
(5, 'what is that', 2, '2018-07-31'),
(6, 'hello', 0, '2018-08-03'),
(7, 'who is admin ???', 2, '2018-08-17'),
(8, 'hello', 11, '2018-08-21');
