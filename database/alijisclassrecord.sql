-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2018 at 03:01 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alijisclassrecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrollstudent`
--

CREATE TABLE `enrollstudent` (
  `enroll_id` int(10) NOT NULL,
  `lrn` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `grade` int(10) NOT NULL,
  `section` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollstudent`
--

INSERT INTO `enrollstudent` (`enroll_id`, `lrn`, `name`, `gender`, `subject_name`, `grade`, `section`, `teacher_id`) VALUES
(5, 1031031, 'Brench Armas', 'Male', 'Math', 3, 1, 1),
(8, 3123123, 'Alvin Yanson', 'Male', 'Math', 3, 1, 1),
(10, 3131321, 'Gabriel Banua', 'Male', 'English101', 2, 3, 1),
(11, 12131231, 'Alessander Neal Rubiato', 'Male', 'English101', 2, 3, 1),
(12, 131231231, 'Alson John Bayon-on', 'Male', 'Math', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_assign`
--

CREATE TABLE `sub_assign` (
  `assign_id` int(100) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `sy` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_assign`
--

INSERT INTO `sub_assign` (`assign_id`, `teacher_id`, `teacher_name`, `subject_name`, `grade`, `section`, `sy`) VALUES
(19, 3, 'Alson John', 'Math', '3', '1', '2014-2015'),
(20, 1, 'Alvins', 'Math', '3', '1', '2015-2016'),
(21, 1, 'Alvins', 'English101', '2', '3', '2015-2016');

-- --------------------------------------------------------

--
-- Table structure for table `tblprincipal`
--

CREATE TABLE `tblprincipal` (
  `principal_id` int(100) NOT NULL,
  `principal_name` varchar(100) NOT NULL,
  `principal_designation` varchar(100) NOT NULL,
  `principal_years` varchar(100) NOT NULL,
  `principal_teacher` int(100) NOT NULL,
  `registration_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprincipal`
--

INSERT INTO `tblprincipal` (`principal_id`, `principal_name`, `principal_designation`, `principal_years`, `principal_teacher`, `registration_status`) VALUES
(35, 'Principals', 'Principal 2', 'Array', 300, 'Registered'),
(36, 'Test Principal', 'Principal 3', '2015-2016', 400, 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `subject_id` int(10) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_room` varchar(50) NOT NULL,
  `subject_schedule` varchar(50) NOT NULL,
  `subject_grade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`subject_id`, `subject_name`, `subject_room`, `subject_schedule`, `subject_grade`) VALUES
(2, 'Aral Pan', 'LC201', '8:30=9:30', 'Grade 1'),
(3, 'Math', 'SEL02', '8:30=9:30', 'Grade 2'),
(4, 'English101', 'SEL03', '10:00-11:00', 'Grade 3'),
(5, 'Science1001', 'SEL04', '11:00-12:00', 'Grade 4'),
(6, 'REED4', 'SEL05', '1:00-2:00', 'Grade 5'),
(7, 'SPECOM', 'SEL06', '2:00-3:00', 'Grade 6');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `teacher_id` int(100) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_mid` varchar(100) NOT NULL,
  `teacher_last` varchar(100) NOT NULL,
  `teacher_bday` varchar(100) NOT NULL,
  `teacher_tin` varchar(100) NOT NULL,
  `teacher_position` varchar(100) NOT NULL,
  `teacher_plantilla` int(100) NOT NULL,
  `teacher_bp` int(100) NOT NULL,
  `teacher_attainment` varchar(100) NOT NULL,
  `registration_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`teacher_id`, `teacher_name`, `teacher_mid`, `teacher_last`, `teacher_bday`, `teacher_tin`, `teacher_position`, `teacher_plantilla`, `teacher_bp`, `teacher_attainment`, `registration_status`) VALUES
(1, 'Alvins', 'Lapid', 'Yanson', 'July 30, 1996', '1009169696', 'Guidance', 10010, 69696969, 'MAED', 'Registered'),
(3, 'Alson John R. Bayon-on', '', '', '2018-06-06', '10012', 'Guidance Counselor', 10021, 1010121, 'MAED', 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `register_id` int(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`register_id`, `user_id`, `user_username`, `user_password`, `user_role`) VALUES
(8, 3, 'alsons', 'password123', 'Teacher'),
(14, 1, 'alvins', 'password789', 'Teacher'),
(18, 35, 'iamprincipal', 'iamprincipal', 'Principal'),
(19, 36, 'sample', 'sample', 'Principal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrollstudent`
--
ALTER TABLE `enrollstudent`
  ADD PRIMARY KEY (`enroll_id`);

--
-- Indexes for table `sub_assign`
--
ALTER TABLE `sub_assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `tblprincipal`
--
ALTER TABLE `tblprincipal`
  ADD PRIMARY KEY (`principal_id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`register_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrollstudent`
--
ALTER TABLE `enrollstudent`
  MODIFY `enroll_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `sub_assign`
--
ALTER TABLE `sub_assign`
  MODIFY `assign_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tblprincipal`
--
ALTER TABLE `tblprincipal`
  MODIFY `principal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `teacher_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `register_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
