-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2015 at 11:26 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
  `specialization` varchar(100) DEFAULT NULL,
  `no_papers` int(10) DEFAULT NULL,
  `past_reviews` bigint(255) DEFAULT NULL,
  `qualification` int(255) DEFAULT NULL,
  `contact_no` int(100) DEFAULT NULL,
`auth_id` int(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art_reviewer`
--

INSERT INTO `art_reviewer` (`first_name`, `middle_name`, `last_name`, `email_id`, `pass`, `address`, `country`, `specialization`, `no_papers`, `past_reviews`, `qualification`, `contact_no`, `auth_id`) VALUES
('', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 3),
('e', 'e', 'e', 'e@w.com', 'ebe1b49e3c01a7ed012ed737235fcc', 'e', 'e', 'ml', 10, 10, 10, 909090909, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art_reviewer`
--
ALTER TABLE `art_reviewer`
 ADD PRIMARY KEY (`auth_id`), ADD UNIQUE KEY `email` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art_reviewer`
--
ALTER TABLE `art_reviewer`
MODIFY `auth_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
