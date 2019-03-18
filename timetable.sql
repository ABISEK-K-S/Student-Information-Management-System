-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 07:39 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

--
-- Dumping data for table `civil`
--

INSERT INTO `civil` (`m1`, `m2`, `m3`, `roll_no`) VALUES
(88, 57, 69, 160501470),
(100, 50, 45, 160501471),
(65, 89, 88, 160501472);

--
-- Dumping data for table `cse`
--

INSERT INTO `cse` (`m1`, `m2`, `m3`, `roll_no`) VALUES
(57, 87, 97, 160501008),
(58, 68, 98, 160501009),
(45, 75, 95, 160501010),
(45, 85, 100, 160401007);

--
-- Dumping data for table `ece`
--

INSERT INTO `ece` (`m1`, `m2`, `m3`, `roll_no`) VALUES
(33, 56, 89, 160201040),
(33, 56, 89, 160201041),
(78, 98, 44, 160201043),
(98, 78, 99, 160201048);

--
-- Dumping data for table `eee`
--

INSERT INTO `eee` (`m1`, `m2`, `m3`, `roll_no`) VALUES
(25, 65, 98, 160301002),
(52, 62, 32, 160301003),
(78, 47, 58, 160301004);

--
-- Dumping data for table `mech`
--

INSERT INTO `mech` (`m1`, `m2`, `m3`, `roll_no`) VALUES
(69, 36, 34, 160401100),
(15, 25, 35, 160401101),
(100, 100, 100, 160401102),
(88, 55, 66, 160401103),
(78, 78, 79, 16050108);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
