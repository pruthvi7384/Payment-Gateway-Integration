-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 10:15 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment_gatway_integration`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `amount` int(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `donate_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `email_id`, `phone_number`, `amount`, `payment_status`, `payment_id`, `donate_on`) VALUES
(1, 'Pruthviraj Rajput', 'pruthviraj.rajput011@gmail.com', '8767286769', 200, 'Complete', 'pay_I7F0UAYBf1Eq0W', '2021-10-09 12:39:53'),
(2, 'Rajesh Patil', 'pruthvirajrajput575@gmail.com', '8767286769', 200, 'Complete', 'pay_I7Y1o1vavQ66rV', '2021-10-10 07:16:17'),
(3, 'Gaurav Rajput', 'pruthvirajrajput575@gmail.com', '7720993937', 2000, 'Complete', 'pay_I7Ya1NqrS78CHG', '2021-10-10 07:48:40'),
(4, 'Bhumika Pawar', 'pruthvirajrajput575@gmail.com', '8767286869', 120, 'Complete', 'pay_I7Yco5UpXpzSIH', '2021-10-10 07:51:44'),
(5, 'Raj Rajput', 'pruthvirajrajput575@gmail.com', '7720993937', 100, 'Complete', 'pay_I7YiPrNHGHMpzK', '2021-10-10 07:57:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
