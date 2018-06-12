-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 07:53 AM
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
(17, 0, 'Alson John', 'English101', 'Grade 4', '1', '2014-2015'),
(18, 0, 'Alvins', 'Math', 'Grade 3', '1', '2015-2016'),
(19, 3, 'Alson John', 'Math', 'Grade 3', '1', '2014-2015'),
(20, 1, 'Alvins', 'Math', 'Grade 2', '1', '2015-2016');

-- --------------------------------------------------------

--
-- Table structure for table `tblprincipal`
--

CREATE TABLE `tblprincipal` (
  `principal_id` int(100) NOT NULL,
  `principal_name` varchar(100) NOT NULL,
  `principal_designation` varchar(100) NOT NULL,
  `principal_years` varchar(100) NOT NULL,
  `principal_teacher` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprincipal`
--

INSERT INTO `tblprincipal` (`principal_id`, `principal_name`, `principal_designation`, `principal_years`, `principal_teacher`) VALUES
(1, 'Aniano Patalita SR.', 'Principal 1', '1959-1982', 0),
(9, 'Ma. Constancia D. Mondia', 'Principal 1', '2010-2015', 17),
(10, 'Grace M. Zamora', 'Principal 1', '2012-2013', 18),
(12, 'Eduardo Celiz', 'Principal 2', '2012-2013', 20),
(14, 'Alvin L. Yanson', 'Principal 2', '2013-2014', 30),
(31, 'vcvcx', 'qweq', '', 56);

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
  `teacher_original` varchar(100) NOT NULL,
  `teacher_permanency` varchar(100) NOT NULL,
  `teacher_latest` varchar(100) NOT NULL,
  `teacher_position` varchar(100) NOT NULL,
  `teacher_plantilla` int(100) NOT NULL,
  `teacher_bp` int(100) NOT NULL,
  `teacher_attainment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`teacher_id`, `teacher_name`, `teacher_mid`, `teacher_last`, `teacher_bday`, `teacher_tin`, `teacher_original`, `teacher_permanency`, `teacher_latest`, `teacher_position`, `teacher_plantilla`, `teacher_bp`, `teacher_attainment`) VALUES
(1, 'Alvin L. Yanson', '', '', 'July 30, 1996', '1009169696', 'Test', 'Test', 'Test', 'Guidance', 10010, 69696969, 'MAED'),
(3, 'Alson John R. Bayon-on', '', '', '2018-06-06', '10012', 'Test', 'Test', 'Test', 'Guidance Counselor', 10021, 1010121, 'MAED'),
(6, 'qeqe', 'eqweq', 'qweq', '2018-05-30', '123123', '12312', '131', '1231', 'Guidance Counselor', 1231, 131, '13131'),
(7, 'qeqe ', 'eqweq ', 'qweq', '2018-06-11', '12-1212121', '1213', '131', '1321', 'Assistant Principal', 12312, 1231, 'PhD');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `user_id` int(50) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_id`, `user_username`, `user_password`, `user_role`) VALUES
(1, 'alvin', 'password', 'Principal'),
(3, 'Alson', 'Alson123', 'Principal'),
(6, 'admins', 'qwertyuiop', 'Principal');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sub_assign`
--
ALTER TABLE `sub_assign`
  MODIFY `assign_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tblprincipal`
--
ALTER TABLE `tblprincipal`
  MODIFY `principal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `teacher_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
