-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 07:17 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
('1001', 'Anirban Saha', 'anirban@gmail.com', '1234567@'),
('1002', 'Anik', 'anik@gmial.com', '1234'),
('1005', 'karim', 'karim@gmail.com', 'anik@anik');

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `sl` int(11) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `title` varchar(70) NOT NULL,
  `author` varchar(70) NOT NULL,
  `edition` varchar(70) NOT NULL,
  `categories` varchar(100) NOT NULL,
  `bookfile` varchar(50) NOT NULL,
  `bookcopy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`sl`, `isbn`, `title`, `author`, `edition`, `categories`, `bookfile`, `bookcopy`) VALUES
(1, '1250773429', 'A Prayer for Owen Meany', 'John Irving', '3rd edition', 'Bildungsroman', '', '5'),
(2, '1250773563', 'A Tree Grows in Brooklyn', 'Betty Smith', '14th edition', 'semi-autobiographical ', '', '7'),
(3, '1250773888', 'The Alchemist', 'Paulo Coelho', '4th edition', 'Quest, adventure, fantasy', '', '3'),
(4, '1250773970', 'Get Real and Get In: How to Get Into the College of Your Dreams by Bei', 'Dr. Aviva Legatt', '3rd edition', 'Fiction', '', '22'),
(5, '1250773975', 'A Child Called \"It\" : One Child\'s Courage To Survive', 'elzer, David J', '2n edition', 'Fiction', '', '12'),
(6, '1250773980', 'I Know Why The Caged Bird Sings', 'Angelou, Maya', '9th edition\r\n', 'Autobiography, Biography', '', '9'),
(7, '1250773990', 'Aristotle and Dante Discover the Secrets of the Universe', 'Benjamin Alire Sáenz', '12th edition', 'Novel, Young adult fiction, Bildungsroman', '', '29');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(3) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `class` varchar(10) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `class`, `description`) VALUES
(1, 'Bangla 2nd Paper', 'Eight', 'Text Book Approved by NCTB'),
(3, 'Bangla 2nd paper', 'Six', 'Text Book Approved by NCTB'),
(4, 'English 1st paper', 'Six', 'Text Book Approved by NCTB'),
(5, 'English 2nd Paper', 'Six', 'Text Book Approved by NCTB'),
(6, 'General math', 'Eight', 'Text Book Approved by NCTB');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edit_student`
--

INSERT INTO `edit_student` (`id`, `name`, `email`, `mobile`, `gender`, `dob`, `p_address`) VALUES
('4002', 'Arko', 'arko@gmail.com', '01769451236', 'male	', '1997-11-20', 'Dhaka, Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `issuedbookdetails`
--

CREATE TABLE `issuedbookdetails` (
  `serialno` int(3) NOT NULL,
  `isbn` int(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `id` int(4) NOT NULL,
  `issuesdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `returndate` date NOT NULL,
  `returnstatus` int(2) NOT NULL,
  `fine` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`sl`, `id`, `name`, `leave_from`, `leave_to`, `action`) VALUES
(1, '3004', 'Rahim', '2021-04-13', '2021-04-15', 'Accepted'),
(2, '4001', 'anik saha', '2021-04-13', '2021-04-17', 'Rejected'),
(4, '3005', 'Badhon', '2021-04-22', '2021-04-25', 'Accepted'),
(5, '3001', 'anindo saha', '2021-04-23', '2021-04-26', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `Officer`
--

CREATE TABLE `Officer` (
  `slno` int(11) NOT NULL,
  `id` varchar(4) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(70) NOT NULL,
  `gender` varchar(70) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Officer`
--

INSERT INTO `Officer` (`slno`, `id`, `name`, `email`, `mobile`, `gender`, `dob`, `password`) VALUES
(1, '7001', 'akasha', 'akash@gmail.com', '01776304248', 'male', '1998-07-16', '123'),
(2, '7002', 'arnob', 'arnob@gmail.com', '01756855555', 'male', '2003-02-05', '12341234@'),
(3, '7003', 'rahim', 'rahim@gmail.com', '01715846752', 'male', '1988-06-27', '1234'),
(4, '7004', 'Pranto', 'pranto@gmail.com', '017564214582', 'male', '1991-10-13', '1234'),
(5, '7005', 'Labony', 'labony@gmail.com', '01845694525', 'female', '1983-09-12', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `Officernotice`
--

CREATE TABLE `Officernotice` (
  `noticeid` int(4) NOT NULL,
  `noticetitle` varchar(40) NOT NULL,
  `noticedetails` varchar(200) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Officernotice`
--

INSERT INTO `Officernotice` (`noticeid`, `noticetitle`, `noticedetails`, `time`) VALUES
(1, 'New books now available on our library', 'New books now available on our library. Please bring your student id along to borrow books', '2021-04-14 00:00:00'),
(3, 'Php and mysql with web', 'learn webdevelopment to read Php and mysql  book.Available in our library.', '2021-04-14 00:00:00'),
(4, 'learn webdevelopment', 'learn webdevelopmentlearn webdevelopmentlearn webdevelopmentlearn webdevelopment', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `notes`, `time`) VALUES
(1, 'wp522 (2).jpg', '2021-04-12 21:12:32'),
(5, 'beautiful.jpg', '2021-04-18 02:08:42'),
(6, 'BT2-HEART-SURVEY-HEADER-02022021-1-1200x429.jpg', '2021-04-22 14:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(3) NOT NULL,
  `notice` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `time`) VALUES
(1, 'There is no class tomorrow (07/04/2021)', '2021-04-06 13:34:32'),
(3, 'Home Test 1\r\nDate: 12/4/2021 at 9.30 AM Sharply\r\n', '2021-04-10 15:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `requestbook`
--

CREATE TABLE `requestbook` (
  `sl` int(11) NOT NULL,
  `isbn` varchar(70) NOT NULL,
  `title` varchar(70) NOT NULL,
  `author` varchar(70) NOT NULL,
  `edition` varchar(70) NOT NULL,
  `id` int(4) NOT NULL,
  `requestdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestbook`
--

INSERT INTO `requestbook` (`sl`, `isbn`, `title`, `author`, `edition`, `id`, `requestdate`) VALUES
(19, '1250773563', 'A Tree Grows in Brooklyn', 'Betty Smith', '14th edition', 5019, '2021-04-24 14:33:04');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`day`, `10:00-11:00`, `11:00-12:00`, `12:00-01:00`, `01:00-02:00`, `02:00-03:00`, `03:00-04:00`) VALUES
('Saturday', 'Bangla', 'English', 'Math', 'Bangladesh and global studies', 'Religion', 'Physical education and health'),
('Sunday', 'Physical education and health', 'Religion', 'Math', 'Bangla', 'Bangladesh and global studies', 'English'),
('Monday', 'Bangla', 'English', 'Bangladesh and global studies', 'Math', 'Religion', 'Physical education and health'),
('Tuesday', 'English', 'Bangla', 'Bangladesh and global studies', 'Math', 'Physical education and health', 'Religion'),
('Wednesday', 'Bangladesh and global studies', 'English', 'Bangla', 'Math', 'Religion', 'Physical education and health'),
('Thursday', 'Bangladesh and global studies', 'Bangla', 'Math', 'Religion', 'English', 'Physical education and health');

-- --------------------------------------------------------

--
-- Table structure for table `school_notice`
--

CREATE TABLE `school_notice` (
  `id` int(3) NOT NULL,
  `notice` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_notice`
--

INSERT INTO `school_notice` (`id`, `notice`, `time`) VALUES
(1, 'It is to notify to all concerned that the School will remain closed (including all online classes) on Tuesday, March 30th 2021 due to Shab e-Barat, 2021.  ', '2021-04-22 11:23:55'),
(3, 'It is to notify to all concerned that the School will remain closed (including all online classes) on Sunday, February 21,  2021 due to Language Movement Day 2021.  ', '2021-04-22 11:24:04');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `mobile`, `gender`, `dob`, `class`, `section`, `roll`, `p_address`, `password`, `marks`) VALUES
('3001', 'anindo saha', 'anindo@gmail.com', '01711811411', 'male', '2006-02-02', 'Seven', 'B', '25', 'Ullapara,Sirajganj', '12345678@', '98'),
('3002', 'karim', 'karim@gmil.com', '01758631248', 'male', '2004-11-29', 'Eight', 'B', '22', 'khulna', '12345678@', '55'),
('3004', 'Rahim ali', 'rahim@a.com', '01745693625', 'male', '2009-02-02', 'Seven', 'B', '55', 'ullapara', '12341234@', '88'),
('4001', 'anik saha', 'anik@gmail.com', '01756551234', 'male', '2004-06-16', 'Seven', 'B', '24', 'nikunja-2', '2554', '45'),
('4003', 'Ella', 'ella@gmail.com', '01776584213', 'female', '2004-02-13', 'Eight', 'B', '19', 'dhaka', '12345678@', '96'),
('4004', 'Laura', 'l@gmail.com', '01772541167', 'female', '2003-09-11', 'Seven', 'B', '65', 'khulna', '12345678@', '66');

-- --------------------------------------------------------

--
-- Table structure for table `studentslibraryaccount`
--

CREATE TABLE `studentslibraryaccount` (
  `serialno` int(3) NOT NULL,
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentslibraryaccount`
--

INSERT INTO `studentslibraryaccount` (`serialno`, `id`, `name`, `mail`, `gender`) VALUES
(25, 4001, 'Robin Datta', 'robindatta@gmail.com', 'male'),
(62, 4002, 'Kowsik dash', 'kowsik@gmail.com', 'male');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `mobile`, `gender`, `dob`, `subject`, `password`) VALUES
('2001', 'Kowshik Chakraborty', 'kowshik@gmail.com', '01764199181', 'male', '1984-08-09', '', '4567'),
('2002', 'nahin all', 'nahin@gmail.com', '01711845611', 'male', '2009-07-15', '', '1234@1234'),
('2003', 'anik saha', 'a@gmail.com', '01745361245', 'male', '2016-02-09', '', '12341234@'),
('2006', 'kowshik sss', 's@s.com', '01756984231', 'male', '2013-01-02', 'Math', '12345@@123'),
('2008', 'John', 'john@gmail.com', '01758964512', 'male', '2021-04-23', '', '1234567!'),
('2009', 'Kowshik Chakraborty', 'kowshik@gmail.com', '01754697845', 'Male', '2013-06-23', 'Math', '1234567@'),
('2011', 'anirban', 'anirban@gmaill.com', '01711814155', 'male', '2019-03-16', '', '12345678@'),
('2013', 'anirban Saha', 'anirban@gmail.com', '01711811415', 'male', '2014-03-20', '', '12345678@'),
('2014', 'anik', 'a@a.com', '01776304244', 'female', '2021-03-31', '', '1234567@@');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_notes`
--

CREATE TABLE `teacher_notes` (
  `id` int(11) NOT NULL,
  `notes` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_notes`
--

INSERT INTO `teacher_notes` (`id`, `notes`, `time`) VALUES
(3, 'canvas.png', '2021-04-22 15:45:35'),
(5, 'dhaka-map.jpg', '2021-04-22 15:40:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`sl`);

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
-- Indexes for table `issuedbookdetails`
--
ALTER TABLE `issuedbookdetails`
  ADD PRIMARY KEY (`serialno`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `Officer`
--
ALTER TABLE `Officer`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `Officernotice`
--
ALTER TABLE `Officernotice`
  ADD PRIMARY KEY (`noticeid`);

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
-- Indexes for table `requestbook`
--
ALTER TABLE `requestbook`
  ADD PRIMARY KEY (`sl`);

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
-- Indexes for table `studentslibraryaccount`
--
ALTER TABLE `studentslibraryaccount`
  ADD PRIMARY KEY (`serialno`);

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
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `issuedbookdetails`
--
ALTER TABLE `issuedbookdetails`
  MODIFY `serialno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `sl` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Officer`
--
ALTER TABLE `Officer`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `Officernotice`
--
ALTER TABLE `Officernotice`
  MODIFY `noticeid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requestbook`
--
ALTER TABLE `requestbook`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `school_notice`
--
ALTER TABLE `school_notice`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentslibraryaccount`
--
ALTER TABLE `studentslibraryaccount`
  MODIFY `serialno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `teacher_notes`
--
ALTER TABLE `teacher_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
