-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 09:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `regs`
--

CREATE TABLE `regs` (
  `ID` int(10) NOT NULL,
  `Candidate` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Gender` enum('m','f','o') CHARACTER SET utf8mb4 NOT NULL,
  `Age` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Phone` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `Applied` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `College` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regs`
--

INSERT INTO `regs` (`ID`, `Candidate`, `Gender`, `Age`, `Email`, `Phone`, `Applied`, `College`, `Address`, `password`) VALUES
(1, 'shishir', 'm', '19', 'shishiralva20s@gmail.com', '7846982148', 'web development', 'Sahyadri College ', ' Mangalore', 'shishir'),
(2, 'vishnu', 'm', '19', 'shishiralvas2000@gmail.com', '7846582148', 'android', 'Sahyadri College ', ' Mangalore', 'tljLg6'),
(3, 'Shishiralva', 'm', '20', 'shishir.cs18@sahyadri.edu.in', '9746582148', 'intern', 'Sahyadri College ', ' Mangalore', 'paPXh3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regs`
--
ALTER TABLE `regs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regs`
--
ALTER TABLE `regs`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
