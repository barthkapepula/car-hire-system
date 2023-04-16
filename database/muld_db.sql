-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 10:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Muldrided Car dealership`
--
CREATE TABLE `bank` (
  `nbank` varchar(100) NOT NULL,
  `bankacc` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `pnumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `bank` (`nbank`, `bankacc`, `branch`, `pnumber`, `email`) VALUES
('Absa', '0023930','cAIRO','90909234', 'B@GMAIL.COM');
-- --------------------------------------------------------
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `DOB` varchar(200) NOT NULL,
  `nrc` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `town` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `surname`, `DOB`, `NRC`,`contact`, `email`,`address`, `town`, `province`, `country`, `sex`, `category`) VALUES
('draisma', 'mudili', '3344', '45456', '+260978995', 'draisma@gmail.com', '198Greatest road', 'lusaka', 'lusaka', 'Zambia', 'male', 'student');

--


--

-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
