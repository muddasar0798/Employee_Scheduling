-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 07:27 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp_scheduling`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `emp_details`
-- (See below for the actual view)
--
CREATE TABLE `emp_details` (
`id` int(11)
,`f_name` varchar(255)
,`l_name` varchar(255)
,`name` varchar(511)
,`username` varchar(255)
,`password` varchar(255)
,`phone` varchar(255)
,`email` varchar(255)
,`address` varchar(255)
,`license` varchar(255)
,`expiry` date
,`current_time` timestamp
,`status` tinyint(1)
,`position` tinyint(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `status`) VALUES
(1, 'Muddasar', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `license` varchar(255) NOT NULL,
  `expiry` date NOT NULL,
  `current_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `position` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `f_name`, `l_name`, `username`, `password`, `phone`, `email`, `address`, `license`, `expiry`, `current_time`, `status`, `position`) VALUES
(7, 'Mohammed Muddasar Ahmed', 'Quadri', 'Muddasar', 'myWebsite', '6475079885', 'mohammed.muddasar18@gmail.com', '79 Thorncliffe', '1234324312', '2023-01-18', '2022-11-10 20:57:10', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `timesheet`
--

CREATE TABLE `timesheet` (
  `id` int(11) NOT NULL,
  `log_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `shift_start_time` time NOT NULL,
  `shift_end_time` time NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `hrs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timesheet`
--

INSERT INTO `timesheet` (`id`, `log_date_time`, `shift_start_time`, `shift_end_time`, `emp_name`, `date`, `hrs`) VALUES
(395, '2022-11-11 04:53:09', '23:52:00', '00:52:00', '1', '2022-11-01', '2'),
(396, '2022-11-11 04:53:09', '13:52:00', '14:53:00', '3', '2022-11-01', '3');

-- --------------------------------------------------------

--
-- Structure for view `emp_details`
--
DROP TABLE IF EXISTS `emp_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `emp_details`  AS SELECT `sign_up`.`id` AS `id`, `sign_up`.`f_name` AS `f_name`, `sign_up`.`l_name` AS `l_name`, concat(`sign_up`.`f_name`,' ',`sign_up`.`l_name`) AS `name`, `sign_up`.`username` AS `username`, `sign_up`.`password` AS `password`, `sign_up`.`phone` AS `phone`, `sign_up`.`email` AS `email`, `sign_up`.`address` AS `address`, `sign_up`.`license` AS `license`, `sign_up`.`expiry` AS `expiry`, `sign_up`.`current_time` AS `current_time`, `sign_up`.`status` AS `status`, `sign_up`.`position` AS `position` FROM `sign_up``sign_up`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `timesheet`
--
ALTER TABLE `timesheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
