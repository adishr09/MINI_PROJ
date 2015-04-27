-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2015 at 10:10 PM
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
(0, 'hello', 'hello', 0, 0, NULL, NULL, '', '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
