-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 04:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
('0001', 'ishara lakshitha', 'ishara@gmail.com', '11010001#');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(3) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `class` varchar(10) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `class`, `description`) VALUES
(1, 'web 1', 'Nine', 'tharaka sir teaching'),
(2, 'oosad', 'Six', 'Vishmi miss teaching');

-- --------------------------------------------------------

--
-- Table structure for table `edit_student`
--

CREATE TABLE `edit_student` (
  `id` varchar(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `p_address` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `sl` int(3) NOT NULL,
  `id` varchar(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(3) NOT NULL,
  `notice` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `time`) VALUES
(1, 'this is from taecher to fellow students', '2023-08-21 12:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `slno` int(11) NOT NULL,
  `id` varchar(4) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(70) NOT NULL,
  `gender` varchar(70) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`slno`, `id`, `name`, `email`, `mobile`, `gender`, `dob`, `password`) VALUES
(1, '0001', 'Miss Saduni', 'saduni@gmail.com', '0713341058', 'female', '1980-09-16', '11010001#');

-- --------------------------------------------------------

--
-- Table structure for table `officernotice`
--

CREATE TABLE `officernotice` (
  `noticeid` int(4) NOT NULL,
  `noticetitle` varchar(40) NOT NULL,
  `noticedetails` varchar(200) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `day` varchar(50) NOT NULL,
  `10:00-11:00` varchar(50) NOT NULL,
  `11:00-12:00` varchar(50) NOT NULL,
  `12:00-01:00` varchar(50) NOT NULL,
  `01:00-02:00` varchar(50) NOT NULL,
  `02:00-03:00` varchar(50) NOT NULL,
  `03:00-04:00` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`day`, `10:00-11:00`, `11:00-12:00`, `12:00-01:00`, `01:00-02:00`, `02:00-03:00`, `03:00-04:00`) VALUES
('Saturday', 'Physics', 'English', 'Math', 'SAD', 'SAD', 'DBMS'),
('Sunday', 'OOSAD', 'IELTS', 'Math', 'OOPC', 'OOSAD', 'English'),
('Monday', 'Chemistry', 'English', 'Physics', 'Math', 'MCS', 'DDBMS'),
('Tuesday', 'English', 'ReactNative', 'Physics', 'Math', 'MCS', 'Hardware Networking'),
('Wednesday', 'SAD', 'English', 'SAD', 'Math', 'DBMS', 'ReactNative'),
('Thursday', 'SAD', 'ReactNative', 'Math', 'OOPC', 'English', 'SAD');

-- --------------------------------------------------------

--
-- Table structure for table `school_notice`
--

CREATE TABLE `school_notice` (
  `id` int(3) NOT NULL,
  `notice` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_notice`
--

INSERT INTO `school_notice` (`id`, `notice`, `time`) VALUES
(5, 'this is from ishara....', '2023-08-21 12:32:53'),
(6, 'this is from academic officer miss sanduni', '2023-08-21 14:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(70) NOT NULL,
  `gender` varchar(70) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `roll` varchar(70) NOT NULL,
  `p_address` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `marks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `mobile`, `gender`, `dob`, `class`, `section`, `roll`, `p_address`, `password`, `marks`) VALUES
('0001', 'pasindu kalhara', 'pasi@mail.com', '0719833082', 'female', '2000-07-12', 'Nine', 'B', '01', 'Kurunegala', '11010001#', '100'),
('0002', 'Sahan Kumara', 'sahan@gmail.com', '0719714946', 'male', '1975-04-12', 'Nine', 'A', '02', 'Gampaha', '11010001#', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` varchar(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(70) NOT NULL,
  `gender` varchar(70) NOT NULL,
  `dob` date NOT NULL,
  `subject` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `mobile`, `gender`, `dob`, `subject`, `password`) VALUES
('0001', 'Dr Tharaka', 'tharakasir@gmail.com', '0714577387', 'male', '1974-06-11', 'ReactNative', '11010001#'),
('1111', 'Dawn Schneider', 'vavi@mailinator.com', '0717511643', 'other', '1972-08-05', 'CombinedMaths', '11010001#');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_notes`
--

CREATE TABLE `teacher_notes` (
  `id` int(11) NOT NULL,
  `notes` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edit_student`
--
ALTER TABLE `edit_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `officernotice`
--
ALTER TABLE `officernotice`
  ADD PRIMARY KEY (`noticeid`);

--
-- Indexes for table `school_notice`
--
ALTER TABLE `school_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_notes`
--
ALTER TABLE `teacher_notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `sl` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `officernotice`
--
ALTER TABLE `officernotice`
  MODIFY `noticeid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school_notice`
--
ALTER TABLE `school_notice`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher_notes`
--
ALTER TABLE `teacher_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
