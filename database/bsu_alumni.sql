-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 09:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsu_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `admin_id` int(20) NOT NULL,
  `date_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `topic`, `description`, `admin_id`, `date_created`) VALUES
(1, 'sadad', 'sdfsd', 2, 'September 11, 2021'),
(2, 'Zx', 'X', 2, 'September 11, 2021'),
(3, 'test', 'tesr', 2, 'October 3, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `date_posted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_name`, `date_posted`) VALUES
(1, 'suggest part2.PNG', '2021-10-10'),
(2, 'Zoom BG 1.1.jpg', '2021-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `admin_id` varchar(50) NOT NULL,
  `date_posted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `company`, `description`, `salary`, `admin_id`, `date_posted`) VALUES
(2, 'test', 'google', 'test', '123', '2', 'October 2, 2021'),
(3, 'web developer', '', 'develop website using react and firebase', '23000-39000', '9', 'October 29, 2021'),
(4, 'IT System developer', 'facebook', 'upgarde old software', '50000', '9', 'October 29, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `sr_request`
--

CREATE TABLE `sr_request` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `date_request` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `mobile_number` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `sr_code` varchar(50) NOT NULL,
  `account_password` varchar(100) NOT NULL,
  `account_status` varchar(40) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `date_register` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `name`, `lastname`, `middle_name`, `email_address`, `department`, `mobile_number`, `course`, `sr_code`, `account_password`, `account_status`, `profile_pic`, `date_register`) VALUES
(5, 'lance', 'cabiscuelas', 'update', 'ladrera21@gmail.com', 'it', '09307980536', 'ir updated', '', '123', 'alumni', '', ''),
(6, 'lance', 'cabiscuelas', 'ladrera', 'ladrera21@gmail.com', 'it', '09307980536', 'ghj', '5678', '123', 'alumni', '', ''),
(7, 'lance', 'cabiscuelas', '', 'ladrera21@gmail.com', 'it', '09307980536', 'it', '345', '123', 'user', '', ''),
(8, 'lance', 'cabiscuelas', 'f', 'ladrera21@gmail.com', 'dfdg', '09307980536', 'dfd', '', 'lance21', 'user', '', ''),
(9, 'lance', 'ladrera', 'l', 'ladrera21@gmail.com', 'it', '092345678', 'it', '123', '123', 'admin', '9_1633783737844.PNG', ''),
(10, 'lance', 'cabiscuelas', 'ladrera', '123', 'rew', '09307980536', 'wr', 's29495', '123', 'user', '', '2021-10-29'),
(11, 'lance', 'cabiscuelas', 'sf', '123', 'sdf', '09307980536', 'sfd', 'sdf', '123', 'user', '', '2021-10-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_request`
--
ALTER TABLE `sr_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sr_request`
--
ALTER TABLE `sr_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
