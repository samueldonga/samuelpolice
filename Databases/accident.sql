-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2022 at 06:19 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accident`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident_info`
--

DROP TABLE IF EXISTS `accident_info`;
CREATE TABLE IF NOT EXISTS `accident_info` (
  `S/N` int(10) NOT NULL AUTO_INCREMENT,
  `Area` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` varchar(150) NOT NULL,
  `evidence` varchar(150) NOT NULL,
  `deaths` int(3) NOT NULL,
  `injured` int(3) NOT NULL,
  PRIMARY KEY (`S/N`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `accident_info`
--

INSERT INTO `accident_info` (`S/N`, `Area`, `date`, `time`, `description`, `evidence`, `deaths`, `injured`) VALUES
(1, 'Eyoo', '2022-06-28', '11:17:00', 'Terrible', 'evidences/da.jpg', 0, 4),
(2, 'kikopo', '2022-03-28', '03:29:00', 'The two drivers were over speeding from both directions so they crushed at a junction', 'evidences/da.jpg', 1, 5),
(3, 'Tim', '2022-06-28', '14:47:00', 'fdhgf', 'evidences/da.jpg', 1, 2),
(5, 'Kampala', '2022-04-06', '20:17:00', 'Bad', 'evidences/index.jpg', 1, 14),
(6, 'Obuyu road', '2022-03-02', '20:58:00', 'The bus collided and crushed the  taxi badly', 'evidences/wr.jpg', 0, 17);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `S/N` int(10) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) NOT NULL,
  `SEX` enum('male','female','other','') NOT NULL,
  `NIN` varchar(20) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `CONTACT` varchar(10) NOT NULL,
  PRIMARY KEY (`S/N`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`S/N`, `NAME`, `SEX`, `NIN`, `EMAIL`, `CONTACT`) VALUES
(1, 'Akello rosemary', 'female', 'CF1234567890', 'akellorose@gmail.com', '0703449307'),
(2, 'Billy Nikolas', 'female', 'CM234sdfg5', 'bill@gmail.com', '077234563'),
(3, 'Keneddy', 'male', 'cmmerdm2345', 'keneddy@gmail.com', '0700234561'),
(4, 'Timo', 'male', 'CMzxjetqerdm2345', 'timo@gmail.com', '0703449368');

-- --------------------------------------------------------

--
-- Table structure for table `reporters_info`
--

DROP TABLE IF EXISTS `reporters_info`;
CREATE TABLE IF NOT EXISTS `reporters_info` (
  `S/N` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `r_Sex` enum('Male','Female','Other','') NOT NULL,
  `nin` varchar(30) NOT NULL,
  `r_email` varchar(30) NOT NULL,
  `r_location` varchar(10) NOT NULL,
  `r_contact` varchar(10) NOT NULL,
  `w_name` varchar(30) NOT NULL,
  `w_sex` enum('Male','Female','Other','') NOT NULL,
  `w_contact` varchar(10) NOT NULL,
  PRIMARY KEY (`S/N`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `reporters_info`
--

INSERT INTO `reporters_info` (`S/N`, `Name`, `r_Sex`, `nin`, `r_email`, `r_location`, `r_contact`, `w_name`, `w_sex`, `w_contact`) VALUES
(1, 'lula', 'Male', 'Cm293401htry56', 'lula@gmail.com', 'Dosa', '0790234567', 'mumu', 'Female', '077345678'),
(11, 'Mutungi Fredrick', 'Male', 'Cm293401htry56', 'Fre@gmail.com', 'yuio', '0790234563', 'Okodan Alex', 'Male', '0701234560'),
(9, 'Achiengi Lydia', 'Female', 'Cm293401htry56', 'lydia@gmail.com', 'Nakawa', '0790234567', 'Timothy paul', 'Male', '0701234565'),
(10, 'Billy', 'Male', 'Cm293401htry56', 'billy@gmail.com', 'Kaliro', '0705342341', 'Geoff', 'Male', '0752345566');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
