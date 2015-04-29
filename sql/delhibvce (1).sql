-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2015 at 08:49 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art_author`
--

INSERT INTO `art_author` (`aut_id`, `first_name`, `middle_name`, `last_name`, `email_id`, `pass`, `contact_no`, `address`, `country`) VALUES
(2, 'Priyansh', 'The', 'Great', 'lol@lol.com', 'b6d78e18e10fc1aa0b2f3eb068b658', 1234567890, 'lpllpllp', 'india'),
(3, 'asd', 'fasd', 'asdfa', 'asdf@adf.com', 'a7bbc53512c0539c7fffa4033d75a2', 1234567890, 'iugiuygiu', 'iyugyu'),
(4, 'a', 's', 's', 's', '03c7c0ace395d80182db07ae2c30f0', 0, 's', 's'),
(8, 'P', 's', 'l', 'c@c.com', 'e86fdc2283aff4717103f2d44d0610', 909090909, 'jhnkh ', 'in'),
(9, 'w', 'w', 'w', 'w@w.com', '9e356bfe126a8e1fe108a92611872f', 909090909, 'w', 'w'),
(10, 'l', 'l', 'l', 'l@w.com', '007f6a7040011de3ed1a1124969425', 909090909, 'jhnkh ', 'in'),
(12, 'e', 'e', 'e', 'e@w.com', 'ebe1b49e3c01a7ed012ed737235fcc', 909090909, 'e', 'e'),
(13, 'P', 'o', 'l', 't@w.com', '45fcaeafd8ebec14bece68f7f00ca1', 909090909, 'jhnkh ', 'in');

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
  `paper_type` varchar(20) DEFAULT NULL,
  `tags` varchar(100) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art_paper`
--

INSERT INTO `art_paper` (`paper_id`, `paper_title`, `paper_abstract`, `aut_id`, `rev_id`, `response_words`, `response_list`, `sub_cat`, `paper_type`, `tags`) VALUES
(1, 'hh', '2h', 2, 2, 'ghj', 'hgj', 'ghj', 'gh', 'ml');

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
`aut_id` int(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art_reviewer`
--

INSERT INTO `art_reviewer` (`first_name`, `middle_name`, `last_name`, `email_id`, `pass`, `address`, `country`, `specialization`, `no_papers`, `past_reviews`, `qualification`, `contact_no`, `aut_id`) VALUES
('', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 3),
('e', 'e', 'e', 'priyansh.singh.delhi@gmail.com', 'ebe1b49e3c01a7ed012ed737235fcc', 'e', 'e', 'ml', 10, 10, 10, 909090909, 4),
('o', 'o', 'l', 'l@w.com', '007f6a7040011de3ed1a1124969425', 'jhnkh ', 'in', 'ss', 9, 9, 9, 909090909, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art_author`
--
ALTER TABLE `art_author`
 ADD PRIMARY KEY (`aut_id`), ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `art_paper`
--
ALTER TABLE `art_paper`
 ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `art_reviewer`
--
ALTER TABLE `art_reviewer`
 ADD PRIMARY KEY (`aut_id`), ADD UNIQUE KEY `email` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art_author`
--
ALTER TABLE `art_author`
MODIFY `aut_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `art_paper`
--
ALTER TABLE `art_paper`
MODIFY `paper_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `art_reviewer`
--
ALTER TABLE `art_reviewer`
MODIFY `aut_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
