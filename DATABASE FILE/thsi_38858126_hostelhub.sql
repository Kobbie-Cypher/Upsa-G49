-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql307.thsite.top
-- Generation Time: Jun 25, 2025 at 12:34 PM
-- Server version: 11.4.7-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thsi_38858126_hostelhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'admin@mail.com', 'D00F5D5217896FB7FD601412CB890830', '2020-09-08 20:31:45', '2021-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_sn` varchar(255) NOT NULL,
  `course_fn` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(4, 'BCOA55', 'BCA', 'Bachelor Of Computer Application', '2020-09-23 00:45:13'),
(5, 'MCA001', 'MCA', 'Master of Computer Application', '2020-09-23 00:47:13'),
(6, 'MBA777', 'MBA', 'Master In Business Administration', '2020-09-23 00:54:13'),
(7, 'BE069', 'BE', 'Bachelor of Engineering', '2020-09-23 00:59:13'),
(8, 'BIT353', 'BIT', 'Bachelors In Information Technology', '2021-03-07 06:59:05'),
(10, '446', 'PS', 'BSC. Physical Science', '2025-05-12 17:12:47'),
(11, 'BPRM123', 'BPRM', 'Bachelor of Arts in Public Relations Management', '2025-05-13 16:15:42'),
(12, 'BSA12', 'BSA', 'Bachelor of Science in Accounting', '2025-05-13 16:16:44'),
(13, 'BSAF123', 'BSAF', 'Bachelor of Science in Accounting and Finance', '2025-05-13 16:17:44'),
(14, 'BSBE1', 'BSBE', 'Bachelor of Science in Business Economics', '2025-05-13 16:18:38'),
(15, 'BSAS34', 'BSAS', 'Bachelor of Science in Actuarial Science', '2025-05-13 16:19:44'),
(16, 'BSBF5', 'BSBF', 'Bachelor of Science in Banking and Finance', '2025-05-13 16:20:41'),
(17, 'BBA7', 'BBA', 'Bachelor of Business Administration', '2025-05-13 16:21:15'),
(18, 'BSITM', 'BSITM', 'Bachelor of Science in Information Technology Management', '2025-05-13 16:22:15'),
(19, 'BSM334', 'BSM', 'Bachelor of Science in Marketing', '2025-05-13 16:23:16'),
(20, 'BSRE67', 'BSRE', 'Bachelor of Science in Real Estate Management and Finance', '2025-05-13 16:24:57'),
(21, '35', 'GG', 'GHBDS', '2025-05-13 17:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `hostel` varchar(50) DEFAULT NULL,
  `roomno` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `feespm` int(11) NOT NULL,
  `foodstatus` int(11) NOT NULL,
  `stayfrom` date NOT NULL,
  `duration` int(11) NOT NULL,
  `course` varchar(500) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `middleName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `egycontactno` bigint(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContactno` bigint(11) NOT NULL,
  `corresAddress` varchar(500) NOT NULL,
  `corresCIty` varchar(500) NOT NULL,
  `corresState` varchar(500) NOT NULL,
  `corresPincode` int(11) NOT NULL,
  `pmntAddress` varchar(500) NOT NULL,
  `pmntCity` varchar(500) NOT NULL,
  `pmnatetState` varchar(500) NOT NULL,
  `pmntPincode` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `hostel`, `roomno`, `seater`, `feespm`, `foodstatus`, `stayfrom`, `duration`, `course`, `regno`, `firstName`, `middleName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `postingDate`, `updationDate`) VALUES
(31, 'La Nyanteh Hotel', 201, 3, 1870, 0, '2025-04-29', 1, 'Bachelor  of Science', '10285070', 'Andrew', '', 'Acquah', 'Male', 546011267, 'acquahandrew2@gmail.com', 242752626, 'Kwabena ', 'Father ', 243217618, 'RPL/GC/L/80', 'Golf City ', '', 122, 'Community 7', 'Tema', '', 45, '2025-04-29 15:35:01', ''),
(32, 'La Nyanteh Hotel', 11, 4, 1870, 0, '2025-05-13', 1, 'Bachelors In Information Technology', '10285070', 'Andrew', '', 'Acquah', 'Male', 546011267, 'acquahandrew2@gmail.com', 242752626, 'Kwabena ', 'Father ', 243217618, 'RPL/GC/L/80', 'Tema', '', 122, 'RPL/GC/L/80', 'Tema', '', 122, '2025-05-13 15:52:58', ''),
(33, 'La Nyanteh Hotel', 200, 2, 500, 0, '2025-05-14', 2, 'Please Select...', '10286883', 'Cecil', 'Kobbie', 'Amuzu', 'Male', 200061018, 'lilphita1@gmail.com', 559951734, 'Cecil', 'Brother', 559951734, 'Teshie-Accra', 'Accra', '', 0, 'Teshie-Accra', 'Accra', '', 0, '2025-05-13 16:11:32', ''),
(34, NULL, 112, 1, 750, 0, '2025-05-13', 2, 'Bachelor of Arts in Public Relations Management', 'ET/CSC/12/002', 'john', 'ben', 'doe', 'male', 245314766, 'john@gmail.com', 554343921, 'John', 'Bro', 44577, 'Street Name, City, State, Country', 'Accra', '', 3555, 'Street Name, City, State, Country', 'Accra', '', 3555, '2025-05-13 17:46:00', ''),
(35, 'La Nyanteh Hotel', 201, 5, 910, 0, '2025-05-13', 5, 'Bachelor of Science in Banking and Finance', 'ET/CSC/12/002', 'louis', '', 'fobi', 'Male', 12345455, 'louis.fobi@agrocrown.com', 245314766, 'John', 'Bro', 44577, 'Street Name, City, State, Country', '2.0', '', 3555, 'Street Name, City, State, Country', '2.0', '', 3555, '2025-05-13 18:01:04', ''),
(36, NULL, 100, 2, 910, 0, '2025-05-20', 4, 'Bachelor of Engineering', '123456', 'louis', 'ben', 'fobi', 'male', 245314766, 'louis.fobi@agrocrown.com', 245314766, 'John', 'Bro', 44577, 'Street Name, City, State, Country', 'Accra', '', 3555, 'Street Name, City, State, Country', 'Accra', '', 3555, '2025-05-13 18:30:51', ''),
(37, 'Abrempong Hostel', 205, 2, 910, 0, '2025-05-13', 5, 'Bachelor of Science in Accounting and Finance', 'ET3478', 'ODE', 'MID', 'GA', 'Male', 2345678, 'test@gmail.com', 245314766, 'John', 'Bro', 44577, 'Street Name, City, State, Country', 'Accra', '', 3555, 'Street Name, City, State, Country', 'Accra', '', 3555, '2025-05-13 18:38:57', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `fees`, `posting_date`) VALUES
(1, 5, 100, 1990, '2020-09-20 04:24:06'),
(2, 4, 201, 1650, '2020-09-20 04:24:06'),
(3, 2, 200, 910, '2020-09-20 04:33:06'),
(4, 3, 112, 1300, '2020-09-20 04:33:30'),
(5, 5, 132, 1990, '2020-09-20 04:28:52'),
(6, 4, 11, 1650, '2021-03-07 05:01:02'),
(7, 2, 269, 910, '2022-04-03 14:39:22'),
(8, 1, 310, 750, '2022-04-03 14:41:36'),
(9, 1, 330, 750, '2022-04-03 14:41:53'),
(10, 2, 205, 3000, '2025-03-19 14:24:22'),
(11, 5, 600, 90, '2025-03-20 12:56:23'),
(12, 4, 555, 567, '2025-05-13 17:47:59'),
(13, 4, 123, 56, '2025-05-13 18:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Alabama'),
(2, 'Alaska'),
(3, 'Arizona'),
(4, 'Arkansas'),
(5, 'California'),
(6, 'Colorado'),
(7, 'Connecticut'),
(8, 'Delaware'),
(9, 'Florida'),
(10, 'Georgia'),
(11, 'Hawaii'),
(12, 'Idaho'),
(13, 'Illinois'),
(14, 'Iowa'),
(15, 'Kansas'),
(16, 'Kentucky'),
(17, 'Louisiana'),
(18, 'Maine'),
(19, 'Marryland'),
(20, 'Massachusetts'),
(21, 'Michigan'),
(22, 'Minnesota'),
(23, 'Mississippi'),
(24, 'Missouri'),
(25, 'Nevada'),
(26, 'New Jersey'),
(27, 'New York'),
(28, 'North Carolina'),
(29, 'North Dakota'),
(30, 'Ohio'),
(31, 'Oklahoma'),
(32, 'South Carolina'),
(33, 'South Dakota'),
(34, 'Texas'),
(35, 'Virginia'),
(36, 'Washington'),
(37, 'Ghana');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(9, 10, 'terry@mail.com', 0x3a3a31, '', '', '2021-03-05 04:12:00'),
(10, 10, 'terry@mail.com', 0x3a3a31, '', '', '2021-03-05 04:14:44'),
(11, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-05 04:19:52'),
(12, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-05 08:53:33'),
(13, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-05 17:35:34'),
(14, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-06 02:43:01'),
(15, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-06 15:18:49'),
(16, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-07 09:35:23'),
(17, 21, 'ross@mail.com', 0x3a3a31, '', '', '2021-03-07 09:59:55'),
(18, 22, 'colin@gmail.com', 0x3a3a31, '', '', '2021-06-16 14:51:24'),
(19, 22, 'colin@gmail.com', 0x3a3a31, '', '', '2021-12-12 15:31:50'),
(20, 22, 'colin@gmail.com', 0x3a3a31, '', '', '2022-04-02 16:01:31'),
(21, 21, 'ross@mail.com', 0x3a3a31, '', '', '2022-04-02 16:52:47'),
(22, 20, 'richards@mail.com', 0x3a3a31, '', '', '2022-04-03 13:15:00'),
(23, 24, 'jennifer@mail.com', 0x3a3a31, '', '', '2022-04-03 14:32:09'),
(24, 24, 'jennifer@mail.com', 0x3a3a31, '', '', '2022-04-03 14:34:17'),
(25, 19, 'bruce@mail.com', 0x3a3a31, '', '', '2022-04-03 14:44:31'),
(26, 27, 'nancy@mail.com', 0x3a3a31, '', '', '2022-04-03 15:00:46'),
(27, 32, 'liamoore@mail.com', 0x3a3a31, '', '', '2022-04-03 15:48:35'),
(28, 32, 'liamoore@mail.com', 0x3a3a31, '', '', '2022-04-03 15:51:34'),
(29, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-19 08:54:05'),
(30, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-19 10:17:26'),
(31, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-19 11:54:58'),
(32, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-19 11:57:14'),
(33, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-19 11:59:25'),
(34, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-19 12:00:20'),
(35, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-19 12:02:37'),
(36, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-19 12:03:18'),
(37, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-19 12:03:30'),
(38, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-19 12:06:19'),
(39, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-19 14:15:17'),
(40, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-20 12:57:04'),
(41, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-23 22:09:40'),
(42, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-23 22:41:56'),
(43, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-24 09:59:16'),
(44, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-27 16:23:09'),
(45, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-27 16:32:47'),
(46, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-03-27 16:51:09'),
(47, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-04-10 13:14:23'),
(48, 34, 'fobilouisstone@gmail.com', 0x3a3a31, '', '', '2025-04-25 19:20:55'),
(49, 39, 'acquahandrew2@gmail.com', 0x3135342e3136302e31382e3637, 'Accra', 'Ghana', '2025-04-29 15:25:01'),
(50, 39, 'acquahandrew2@gmail.com', 0x3130322e3137362e36352e323433, 'Accra', 'Ghana', '2025-04-29 15:27:40'),
(51, 40, 'lilphita1@gmail.com', 0x3132392e3232342e3230312e323137, 'Accra', 'Ghana', '2025-05-12 14:22:09'),
(52, 39, 'acquahandrew2@gmail.com', 0x3132392e3232342e3230312e313539, 'Accra', 'Ghana', '2025-05-12 17:29:36'),
(53, 39, 'acquahandrew2@gmail.com', 0x3132392e3232342e3230312e313034, 'Accra', 'Ghana', '2025-05-13 15:49:55'),
(54, 40, 'lilphita1@gmail.com', 0x3139372e3235312e3234302e323437, 'Accra', 'Ghana', '2025-05-13 16:07:33'),
(55, 43, 'louis.fobi@agrocrown.com', 0x3132392e3232342e3230312e3836, 'Accra', 'Ghana', '2025-05-13 17:59:16'),
(56, 43, 'louis.fobi@agrocrown.com', 0x3132392e3232342e3230312e3836, 'Accra', 'Ghana', '2025-05-13 18:02:54'),
(57, 44, 'test@gmail.com', 0x3132392e3232342e3230312e3836, 'Accra', 'Ghana', '2025-05-13 18:36:41'),
(58, 44, 'test@gmail.com', 0x3132392e3232342e3230312e3836, 'Accra', 'Ghana', '2025-05-13 18:41:37'),
(59, 40, 'lilphita1@gmail.com', 0x3132392e3232342e3230312e313836, 'Accra', 'Ghana', '2025-05-14 09:07:19'),
(60, 44, 'test@gmail.com', 0x3132392e3232342e3230312e313233, 'Accra', 'Ghana', '2025-05-20 07:21:17'),
(61, 46, 'test2@gmail.com', 0x3132392e3232342e3230312e313233, 'Accra', 'Ghana', '2025-05-20 07:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(39, '10285070', 'Andrew', '', 'Acquah', 'Male', 546011267, 'acquahandrew2@gmail.com', '202cb962ac59075b964b07152d234b70', '2025-04-29 14:27:44', '', ''),
(40, '10286883', 'Cecil', 'Kobbie', 'Amuzu', 'Male', 200061018, 'lilphita1@gmail.com', '11159fde958c84b3231038400e06f3cc', '2025-05-12 14:21:04', '', ''),
(41, '10285070', 'Andrew ', '', 'Acquah', 'Male', 204164126, 'acquahandrew2@gmail.com', '202cb962ac59075b964b07152d234b70', '2025-05-13 15:46:57', '', ''),
(44, 'ET3478', 'ODE', 'MID', 'GA', 'Male', 2345678, 'test@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2025-05-13 18:27:04', '', '13-05-2025 01:41:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
