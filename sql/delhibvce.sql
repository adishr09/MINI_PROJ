-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2015 at 06:53 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

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
  `aut_id` int(100) NOT NULL,
  `first_name` varchar(24) NOT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `art_paper`
--

CREATE TABLE IF NOT EXISTS `art_paper` (
  `paper_id` int(100) NOT NULL,
  `paper_title` varchar(100) NOT NULL,
  `paper_abstract` varchar(600) NOT NULL,
  `aut_id` int(100) NOT NULL,
  `rev_id` int(100) NOT NULL,
  `response_words` varchar(200) DEFAULT NULL,
  `response_list` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `past_reviews` bigint(255) DEFAULT NULL,
  `contact_no` int(100) DEFAULT NULL,
  `rev_id` int(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art_author`
--
ALTER TABLE `art_author`
  ADD PRIMARY KEY (`aut_id`), ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `art_reviewer`
--
ALTER TABLE `art_reviewer`
  ADD PRIMARY KEY (`rev_id`), ADD UNIQUE KEY `email` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art_author`
--
ALTER TABLE `art_author`
  MODIFY `aut_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `art_reviewer`
--
ALTER TABLE `art_reviewer`
  MODIFY `rev_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
