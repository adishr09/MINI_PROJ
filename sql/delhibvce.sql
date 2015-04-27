-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2015 at 12:17 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `delhibvce`
--

-- --------------------------------------------------------

--
-- Table structure for table `art_author`
--

CREATE TABLE IF NOT EXISTS `art_author` (
  `aut_id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(24) NOT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `country` varchar(30) NOT NULL,
  PRIMARY KEY (`aut_id`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `art_author`
--

INSERT INTO `art_author` (`aut_id`, `first_name`, `middle_name`, `last_name`, `email_id`, `pass`, `contact_no`, `address`, `country`) VALUES
(2, 'Priyansh', 'The', 'Great', 'lol@lol.com', 'b6d78e18e10fc1aa0b2f3eb068b658', 1234567890, 'lpllpllp', 'india'),
(3, 'asd', 'fasd', 'asdfa', 'asdf@adf.com', 'a7bbc53512c0539c7fffa4033d75a2', 1234567890, 'iugiuygiu', 'iyugyu'),
(4, 'a', 's', 's', 's', '03c7c0ace395d80182db07ae2c30f0', 0, 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `art_paper`
--

CREATE TABLE IF NOT EXISTS `art_paper` (
  `paper_id` int(100) NOT NULL,
  `paper_title` varchar(100) NOT NULL,
  `paper_abstract` varchar(600) NOT NULL,
  `aut_id` int(100) NOT NULL,
  `rev_id` int(100) DEFAULT NULL,
  `response_words` varchar(200) DEFAULT NULL,
  `response_list` varchar(40) DEFAULT NULL,
  `sub_cat` varchar(20) NOT NULL,
  `paper_type` varchar(20) NOT NULL,
  `tags` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art_paper`
--

INSERT INTO `art_paper` (`paper_id`, `paper_title`, `paper_abstract`, `aut_id`, `rev_id`, `response_words`, `response_list`, `sub_cat`, `paper_type`, `tags`) VALUES
(1, 'hello', 'hello', 0, 0, NULL, NULL, 'Sub1', '', NULL),
(1, 'hello', 'hello', 0, 0, NULL, NULL, 'Sub1', '', NULL),
(1, 'hello', 'hello', 0, 0, NULL, NULL, 'Sub1', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `art_reviewer`
--

CREATE TABLE IF NOT EXISTS `art_reviewer` (
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `country` varchar(30) NOT NULL,
  `specialization` varchar(25) NOT NULL,
  `no_papers` int(10) DEFAULT NULL,
  `contact_no` int(100) DEFAULT NULL,
  `rev_id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`rev_id`),
  UNIQUE KEY `email` (`email_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
