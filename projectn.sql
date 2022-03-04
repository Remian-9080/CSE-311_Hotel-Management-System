-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 07:25 PM
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
-- Database: `projectn`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookroom`
--

CREATE TABLE `bookroom` (
  `UserID` varchar(45) DEFAULT NULL,
  `RoomID` char(7) DEFAULT NULL,
  `CheckIN` date DEFAULT NULL,
  `CheckOUT` date DEFAULT NULL,
  `No_of_days` int(11) NOT NULL,
  `Person` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookroom`
--

INSERT INTO `bookroom` (`UserID`, `RoomID`, `CheckIN`, `CheckOUT`, `No_of_days`, `Person`) VALUES
('Saifur', 'room001', '2021-12-02', '2021-12-10', 8, 2),
('Rakib', 'room003', '2021-12-03', '2021-12-11', 8, 2),
('Saifur', 'room002', '2021-12-03', '2021-12-05', 2, 2),
('Saifur', 'room003', '2021-12-03', '2021-12-31', 28, 2),
('rakib', 'room003', '2021-12-01', '2021-12-02', 1, 3),
('Saifur', 'room002', '2022-01-01', '2022-01-05', 4, 2),
('Saifur', 'room002', '2021-12-16', '2021-12-17', 1, 2),
('Saifur', 'room002', '2021-12-03', '2021-12-09', 6, 4),
('Saifur', 'room002', '2021-12-03', '2021-12-05', 2, 3),
('Tanha', 'room003', '2021-12-09', '2021-12-19', 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `UserID` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `First_Name` varchar(45) DEFAULT NULL,
  `Last_Name` varchar(45) DEFAULT NULL,
  `Phone_Number` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`UserID`, `Password`, `First_Name`, `Last_Name`, `Phone_Number`, `Email`) VALUES
('Saifur', 'jahangir', 'Saifur', 'Rubayet', '01679599850', 'saifur.rubayet@northsouth.edu'),
('Rakib', 'rakib', 'Rakib', 'Hasan', '01620680352', 'rakib@northsouth.edu'),
('jahangir', '111', 'jahangir', 'alam', '112', 'eee'),
('Rabbi', '111', 'Shahidur', 'Rahman', '01713030479', 'rabbi@northsouth.edu'),
('Tafsir', 'qaz', 'Tafsir', 'Hossain', '01786421090', 'tafsir@northsouth.edu'),
('Fardin12', '222', 'Fardin', 'Ahmed', '01657896000', 'fardin@gmail.com'),
('Tanha', 'tanha', 'Tanha', 'Tasni', '01711111111', 'tanha@northsouth.edu');

-- --------------------------------------------------------

--
-- Table structure for table `roomdes`
--

CREATE TABLE `roomdes` (
  `RoomID` char(7) DEFAULT NULL,
  `Description` varchar(35) DEFAULT NULL,
  `Air_Condition` enum('Yes','no') DEFAULT NULL,
  `Number_of_Bed` int(11) DEFAULT NULL,
  `Max_People` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomdes`
--

INSERT INTO `roomdes` (`RoomID`, `Description`, `Air_Condition`, `Number_of_Bed`, `Max_People`, `Price`) VALUES
('room001', 'Single Bed Bedroom', 'Yes', 1, 2, 800),
('room002', 'Double Bed Bedroom', 'Yes', 2, 4, 1500),
('room003', 'Royal Suite', 'Yes', 1, 2, 3000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
