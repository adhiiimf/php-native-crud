-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 02:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yoihalo`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataku`
--

CREATE TABLE `dataku` (
  `no_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `hp` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataku`
--

INSERT INTO `dataku` (`no_id`, `nama`, `username`, `alamat`, `hp`, `email`, `pass`) VALUES
(23, 'yoimapren', 'yoisk', 'yoimapren street 52', 2147483647, 'yoimapren27@gmail.com', 'e593f1b003f2c1f3e7aaf9d7aa858cb9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataku`
--
ALTER TABLE `dataku`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataku`
--
ALTER TABLE `dataku`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
