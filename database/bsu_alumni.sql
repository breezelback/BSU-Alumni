-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 05:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `forum_comments`
--

CREATE TABLE `forum_comments` (
  `id` int(11) NOT NULL,
  `forum_comment` longtext NOT NULL,
  `forum_id` int(11) NOT NULL,
  `commentator_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`id`, `forum_comment`, `forum_id`, `commentator_id`, `status`, `date_uploaded`) VALUES
(1, 'test', 1, 4, 0, '2021-10-03 10:12:02'),
(2, 'test', 2, 4, 0, '2021-10-06 16:59:34'),
(3, 'ee', 1, 4, 0, '2021-10-06 17:21:49'),
(4, 'gg', 1, 4, 0, '2021-10-06 17:23:40'),
(5, 'gg', 2, 4, 0, '2021-10-06 17:24:15');

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
  `date_request` varchar(50) NOT NULL,
  `year_graduated` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sr_request`
--

INSERT INTO `sr_request` (`id`, `name`, `lastname`, `middlename`, `email`, `address`, `mobile_no`, `department`, `course`, `date_request`, `year_graduated`) VALUES
(2, 'a', 'a', 'a', 'a@gmail.com', 'a', 'a', 'cab', 'BACHELOR OF SCIENCE IN MANAGEMENT ACCOUNTING ', '19-11-2021', 0),
(3, 'a', 'a', 'a', 'a@gmail.com', '93 Tetrick Road', '8133606122', 'cit', 'AUTOMOTIVE TECHNOLOGY', '19-11-2021', 0),
(4, 'a', 'a', 'a', 'a@gmail.com', '93 Tetrick Road', '8133606122', 'cit', 'AUTOMOTIVE TECHNOLOGY', '19-11-2021', 0),
(5, 'a', 'a', 'a', 'a@gmail.com', '93 Tetrick Road', '8133606122', 'cit', 'AUTOMOTIVE TECHNOLOGY', '19-11-2021', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = active,\r\n1 = inactive',
  `date_uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`id`, `contact_name`, `contact_email`, `contact_message`, `status`, `date_uploaded`) VALUES
(1, 'Lorkan Luke', 'a@gmail.com', 'test', 0, '2021-10-03 10:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracking`
--

CREATE TABLE `tbl_tracking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `year_graduated` varchar(255) NOT NULL,
  `masters_program` varchar(255) NOT NULL,
  `masters_school` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `is_employed` varchar(255) NOT NULL,
  `working_status` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `employment_status` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date_uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tracking`
--

INSERT INTO `tbl_tracking` (`id`, `user_id`, `degree`, `program`, `year_graduated`, `masters_program`, `masters_school`, `name`, `age`, `gender`, `civil_status`, `address`, `is_employed`, `working_status`, `company_name`, `position`, `company_address`, `employment_status`, `status`, `date_uploaded`) VALUES
(3, 27, 'other', 'it', '2022b', 'a', 'b', 'b', 'b', 'other', 'widower', 'b', 'no', 'na', 'b', 'b', 'b', 'fulltime', 0, '2021-11-18 23:26:50'),
(4, 35, 'undergraduate', 'BS Comscie', '2022', 'a', 'a', 'a', 'a', 'other', 'single', 'a', 'yes', 'regular', 'a', 'a', 'a', 'fulltime', 0, '2021-11-19 06:38:53');

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
  `employment_status` varchar(40) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `date_register` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `name`, `lastname`, `middle_name`, `email_address`, `department`, `mobile_number`, `course`, `sr_code`, `account_password`, `account_status`, `employment_status`, `profile_pic`, `date_register`) VALUES
(5, 'lance', 'cabiscuelas', 'update', 'ladrera21@gmail.com', 'it', '09307980536', 'ir updated', '', '123', 'alumni', '', '', '2021-10-30'),
(6, 'lance', 'cabiscuelas', 'ladrera', 'ladrera21@gmail.com', 'it', '09307980536', 'ghj', ' b', '123', 'alumni', 'employed', '', '2021-10-30'),
(7, 'lance', 'cabiscuelas', '', 'ladrera21@gmail.com', 'it', '09307980536', 'it', '345', '123', 'user', '', '', '2021-10-30'),
(8, 'lance', 'cabiscuelas', 'f', 'ladrera21@gmail.com', 'dfdg', '09307980536', 'dfd', '', 'lance21', 'user', '', '', '2021-10-30'),
(9, 'lance', 'ladrera', 'l', 'ladrera21@gmail.com', 'it', '092345678', 'it', '123', '123', 'admin', 'unemployed', '9_1633783737844.PNG', '2021-10-30'),
(10, 'lance', 'cabiscuelas', 'ladrera', '123', 'rew', '09307980536', 'wr', 's29495', '123', 'user', 'employed', '', '2021-10-29'),
(11, 'lance', 'cabiscuelas', 'sf', '123', 'sdf', '09307980536', 'sfd', 'sdf', '123', 'user', 'unemployed', '', '2021-10-30'),
(15, 'lance', 'cabiscuelas', 'ladrera', '123', 'it', '09307980536', 'it', 'fds', '123', 'user', 'employed', '', '2021-11-3'),
(35, 'lorkan1', 'luke1', 'a', 'breezelback@gmail.com', 'cics', '8133606122', 'BACHELOR OF SCIENCE IN COMPUTER SCIENCE', 'a', 'a', 'alumni', '', '', '2021-11-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_comments`
--
ALTER TABLE `forum_comments`
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
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tracking`
--
ALTER TABLE `tbl_tracking`
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
-- AUTO_INCREMENT for table `forum_comments`
--
ALTER TABLE `forum_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tracking`
--
ALTER TABLE `tbl_tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
