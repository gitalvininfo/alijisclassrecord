-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2018 at 06:27 AM
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
-- Table structure for table `tblprincipal`
--

CREATE TABLE `tblprincipal` (
  `principal_id` int(100) NOT NULL,
  `principal_name` varchar(100) NOT NULL,
  `principal_designation` varchar(100) NOT NULL,
  `principal_years` varchar(100) NOT NULL,
  `principal_enrollment` int(100) NOT NULL,
  `principal_teacher` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprincipal`
--

INSERT INTO `tblprincipal` (`principal_id`, `principal_name`, `principal_designation`, `principal_years`, `principal_enrollment`, `principal_teacher`) VALUES
(1, 'Aniano Patalita SR.', 'Principal 1', '1959-1982', 0, 0),
(9, 'Ma. Constancia D. Mondia', 'Principal 1', '2010-2015', 641, 17),
(10, 'Grace M. Zamora', 'Principal 1', '2015-Present', 675, 18),
(11, 'Lebron James', 'Principal', '2011-2012', 5000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `teacher_id` int(100) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_mid` varchar(255) NOT NULL,
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
(1, 'Alvin', 'L', 'Yanson', 'July 30, 1996', '1009169696', 'Test', 'Test', 'Test', 'Guidance', 10010, 69696969, 'MAED'),
(3, 'Alson John', 'R', 'Bayon-on', '2018-06-06', '10012', 'Test', 'Test', 'Test', 'Guidance Counselor', 10021, 1010121, 'MAED');

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
(3, 'Alson', 'Alson123', 'Principal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblprincipal`
--
ALTER TABLE `tblprincipal`
  ADD PRIMARY KEY (`principal_id`);

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
-- AUTO_INCREMENT for table `tblprincipal`
--
ALTER TABLE `tblprincipal`
  MODIFY `principal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `teacher_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
