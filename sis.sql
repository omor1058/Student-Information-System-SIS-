-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 03:38 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `sis`
--

CREATE TABLE IF NOT EXISTS `sis` (
  `image` text NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `rn` varchar(16) NOT NULL,
  `department` varchar(5) NOT NULL,
  `dbms` varchar(5) NOT NULL,
  `cgp` varchar(5) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sis`
--

INSERT INTO `sis` (`image`, `fname`, `lname`, `rn`, `department`, `dbms`, `cgp`, `dob`) VALUES
('profile-images/Muslim-Female.png', 'Rubaiya', 'Begum', '1301020002', 'cse', 'A+', 'A+', '1994-03-27'),
('profile-images/sahida.jpg', 'Shahida ', 'Forhana Ahsan', '1301020003', 'cse', 'A', 'A', '2015-01-19'),
('profile-images/omrana.jpg', 'Omrana', ' Hasan', '1301020005', 'cse', 'A+', 'A+', '2015-01-19'),
('profile-images/fahmida.jpg', 'Fahmeda ', 'Yesmin Chowdhur', '1301020006', 'cse', 'A', 'A', '2015-01-19'),
('profile-images/prabal.jpg', 'Prabal ', 'Bhattacharjee', '1301020007', 'cse', 'A+', 'A+', '2015-01-19'),
('profile-images/azad.jpg', 'Abul ', 'Kalam', '1301020008', 'cse', 'A', 'A', '2015-01-19'),
('profile-images/abid.jpg', 'MD.OMOR', 'FARUK', '1301020009', 'cse', 'A+', 'A+', '2015-01-19'),
('profile-images/emdad.jpg', 'Syed ', 'Amdad Hussain', '1301020011', 'cse', 'A-', 'A-', '0000-00-00'),
('profile-images/image.jpg', 'S.M. Imtiaz ', 'Hussain Image', '1301020012', 'cse', 'A+', 'A+', '2015-01-19'),
('profile-images/Muslim-Female.png', 'Nishat ', 'Anjum Moure', '1301020013', 'cse', 'A', 'A', '2015-01-19'),
('profile-images/modern-female.png', 'Urmi ', 'Munshi', '1301020014', 'cse', 'A+', 'A+', '2015-01-19'),
('profile-images/jaber.jpg', 'Jaber ', 'Ahmed', '1301020015', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/sumon.jpg', 'Sumon ', 'Saha', '1301020016', 'cse', 'A', 'A', '0000-00-00'),
('profile-images/maruf.jpg', 'Ahmed', ' Maruf', '1301020017', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/fahmid.jpg', 'Fahmid', ' Ahmed', '1301020018', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/bulbul.jpg', 'Bahlul', ' Siddiquee', '1301020019', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/jony.jpg', 'Md.Tajul ', 'Islam Jony', '1301020020', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/salma.jpg', 'Jorina ', 'Rahman Salma', '1301020021', 'cse', 'A', 'A', '0000-00-00'),
('profile-images/santush.jpg', 'Santush ', 'Deb Nath', '1301020022', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/dip.jpg', 'Sudipto ', 'Chowdhury', '1301020023', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/nadia.jpg', 'Nadia ', 'Rahman Chowdhur', '1301020024', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/modern-female.png', 'Sweety ', 'Rani Dash', '1301020025', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/oroni.jpg', 'Oroni ', 'Azad', '1301020026', 'cse', 'A-', 'A-', '0000-00-00'),
('profile-images/malika.png', 'Malika ', 'Das', '1301020027', 'cse', 'A', 'A', '0000-00-00'),
('profile-images/omi.jpg', 'Arifa ', 'Sultana Omi', '1301020028', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/ajoy.jpg', 'Ajoy ', 'Sarkar', '1301020030', 'cse', 'A', 'A', '0000-00-00'),
('profile-images/roni.jpg', 'Omor ', 'Faruk Chowdhury', '1301020031', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/borna.jpg', 'Borna ', 'Roy', '1301020032', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/sourav.jpg', 'Sourav ', 'Acharjee', '1301020033', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/kanij.jpg', 'Kanij ', 'Fatema', '1301020034', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/hasina.jpg', 'Hasina ', 'Begum', '1301020035', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/Muslim-Female.png', 'Jakia ', 'Sultana', '1301020036', 'cse', 'A+', 'A+', '0000-00-00'),
('profile-images/monjur.jpg', 'Md.Monjur  ', 'Hussain', '1301020038', 'cse', 'A+', 'A+', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
