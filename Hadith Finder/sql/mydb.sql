-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 07:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`email`, `pass`, `Name`, `Phone`) VALUES
('shoieb@gmail.com', '12345', 'Shoieb Alam', '01234566789'),
('user@gmail.com', '12345', 'USER NAME', '12312312');

-- --------------------------------------------------------

--
-- Table structure for table `hadith`
--

CREATE TABLE `hadith` (
  `reference` varchar(30) NOT NULL,
  `hadith` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hadith`
--

INSERT INTO `hadith` (`reference`, `hadith`) VALUES
('iman', 'It was narrated that Abu Darda\' said:\r\n\"Faith increases and decreases.\"'),
('salah', 'Narrated `Aisha:\r\nthe mother of believers: Allah enjoined the prayer when He enjoined it, it was two rak`at only (in every prayer) both when in residence or on journey. Then the prayers offered on journey remained the same, but (the rak`at of) the prayers for non-travelers were increased.'),
('zakah', 'It was narrated from Salman bin \'Amir that the Prophet said:\r\n\"Giving charity to a poor person is charity, and (giving) to a relative is two things, charity and upholding the ties of kinship.\"\r\n'),
('hajj', 'A\'isha (Allah be pleased with her) said:\r\nSome among us put on Ihram for Hajj alone (Hajj Mufrad) ; some of us for Hajj and Umra together (Qiran), and some of us for Tamattal (first for Umra and after completing it for Hajj).\r\n'),
('siam', 'Abu Hurairah narrated that :\r\nthe Prophet said: \"The fast is the day the people fast, the breaking of the fast is the day the people break their fast, and the sacrifice is the day the people sacrifice.\"');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
