-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 06:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `weight` int(100) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `weight`, `mobile_number`, `address`, `blood_group`, `dob`) VALUES
(3, 'Shivani Zele', 'shivani@gmail.com', '2a2f8c93ffaf76b54f8eae4f5c6c16b6', 0, '0', '', '', '0000-00-00'),
(6, 'Ssz', 'xyz@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, '0', '', '', '0000-00-00'),
(7, 'Swara', 'Swar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '0', '', '', '0000-00-00'),
(8, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '0', '', '', '0000-00-00'),
(11, 'Ranjit', 'ranjit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 50, '9988998899', 'Warje Pune', 'O+', '2009-06-18'),
(12, 'Shivani z', 'zss@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 39, '6645332312', 'Warje Pune', 'AB+', '2021-06-16'),
(13, 'vssss', 'vss@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 72, '3423215467', 'Warje Pune', 'AB+', '2021-06-20'),
(14, 'Sherya', 'shreya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 38, '4536443544', 'Warje Pune', 'A+', '2012-02-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
