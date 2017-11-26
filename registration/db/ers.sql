-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2013 at 12:19 PM
-- Server version: 5.1.36-community-log
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ers`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_member`
--

CREATE TABLE IF NOT EXISTS `reg_member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `c_number` varchar(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `age` int(2) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `reg_member`
--

INSERT INTO `reg_member` (`member_id`, `firstname`, `lastname`, `address`, `email`, `c_number`, `gender`, `date`, `age`) VALUES
(5, 'john kevin', 'lorayna', 'bago city', 'jkevlorayna@yahoo.com', '901331344421', 'Male', '2013-04-22 18:07:16', 19),
(4, 'Stephanie', 'Villanueva', 'Saravia', 'ztephie_19@yahoo.com', '1234567890', 'Female', '2013-04-22 17:59:37', 17),
(6, 'Brian Paul', 'Sablan', 'Bacolod City', 'xiaboh@yahoo.com', '839123781481', 'Male', '2013-04-22 18:08:16', 20),
(7, 'Achilles', 'Palma', 'Talisay City', 'akimusdie@yahoo.com', '13284617461', 'Male', '2013-04-22 18:08:56', 24),
(8, 'Christian ', 'Sausa', 'Talisay City', 'pooly@yahoo.com', '7823718371', 'Male', '2013-04-22 18:09:28', 21),
(9, 'Shiera Mae', 'Tuting', 'Talisay City', 'tuting@yahoo.com', '738273817487', 'Female', '2013-04-22 18:10:22', 22);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `username`, `password`, `firstname`, `lastname`) VALUES
(5, 'jk', 'jk', 'john kevin', 'lorayna'),
(4, 'teph', 'teph', 'stephanie', 'villanueva'),
(6, 'tk', 'tk', 'tephkev', 'tephkev');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
