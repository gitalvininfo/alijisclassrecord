-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 07:06 AM
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
  `grade` varchar(10) NOT NULL,
  `section` int(10) NOT NULL,
  `sy` varchar(20) NOT NULL,
  `teacher_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollstudent`
--

INSERT INTO `enrollstudent` (`enroll_id`, `lrn`, `name`, `gender`, `subject_name`, `grade`, `section`, `sy`, `teacher_id`) VALUES
(50, 1000, 'Bethanie Cox', 'Female', 'Aral Pan', '1', 1, '2016-2017', 1),
(51, 1001, 'Jacque Cooley', 'Male', 'Aral Pan', '1', 1, '2016-2017', 1),
(52, 1002, 'Elwood Samuels', 'Female', 'Aral Pan', '1', 1, '2016-2017', 1),
(53, 1003, 'Marina Collier', 'Male', 'Aral Pan', '1', 1, '2016-2017', 1),
(54, 1004, 'Damian Conrad', 'Female', 'Aral Pan', '1', 1, '2016-2017', 1),
(55, 1005, 'Isaac Mckinney', 'Male', 'Aral Pan', '1', 1, '2016-2017', 1),
(56, 1006, 'Eshaan Hines', 'Female', 'Aral Pan', '1', 1, '2016-2017', 1),
(57, 1007, 'Haroon Leon', 'Male', 'Aral Pan', '1', 1, '2016-2017', 1),
(58, 1008, 'Monica Flower', 'Female', 'Math', '2', 1, '2016-2017', 1),
(59, 1009, 'Kerry Petersen', 'Male', 'Math', '2', 1, '2016-2017', 1),
(60, 1010, 'Wallace Rawlings', 'Female', 'Math', '2', 1, '2016-2017', 1),
(61, 1011, 'Mark Bowes', 'Male', 'Math', '2', 1, '2016-2017', 1),
(62, 1012, 'Ethan Lott', 'Female', 'Math', '2', 1, '2016-2017', 1),
(63, 1013, 'Beulah Bate', 'Male', 'Math', '2', 1, '2016-2017', 1),
(64, 1014, 'Taylan Medina', 'Female', 'Math', '2', 1, '2016-2017', 1),
(65, 1015, 'Hina Mcconnell', 'Male', 'Math', '2', 1, '2016-2017', 1),
(66, 1016, 'Zaina Donald', 'Female', 'English 101', '3', 1, '2016-2017', 1),
(67, 1017, 'Lena Derrick', 'Male', 'English 101', '3', 1, '2016-2017', 1),
(68, 1018, 'Jayden-Lee Riddle', 'Female', 'English 101', '3', 1, '2016-2017', 1),
(69, 1019, 'Damon Short', 'Male', 'English 101', '3', 1, '2016-2017', 1),
(70, 1020, 'Samira Zimmerman', 'Female', 'English 101', '3', 1, '2016-2017', 1),
(71, 1021, 'Bruno Hawes', 'Male', 'Science1001', '4', 1, '2016-2017', 1),
(72, 1022, 'Paloma Wu', 'Female', 'Science1001', '4', 1, '2016-2017', 1),
(73, 1023, 'Ava-Mai Santana', 'Male', 'Science1001', '4', 1, '2016-2017', 1),
(74, 1024, 'Bobbie Potts', 'Female', 'Science1001', '4', 1, '2016-2017', 1),
(75, 1025, 'Jac Mac', 'Male', 'Science1001', '4', 1, '2016-2017', 1),
(76, 1026, 'Heath Gutierrez', 'Female', 'Science1001', '4', 1, '2016-2017', 1),
(77, 1027, 'Tala Phelps', 'Male', 'Science1001', '4', 1, '2016-2017', 1),
(78, 1028, 'Donnell Goodman', 'Female', 'Science1001', '4', 1, '2016-2017', 1),
(79, 1029, 'Zion Mckenna', 'Male', 'Science1001', '4', 1, '2016-2017', 1),
(80, 1030, 'Krista Halliday', 'Female', 'Science1001', '4', 1, '2016-2017', 1),
(81, 1031, 'Eloisa Griffith', 'Male', 'REED4', '5', 1, '2016-2017', 1),
(82, 1032, 'Ashwin Roach', 'Female', 'REED4', '5', 1, '2016-2017', 1),
(83, 1033, 'Ariella Mahoney', 'Male', 'REED4', '5', 1, '2016-2017', 1),
(84, 1034, 'Asa Berry', 'Female', 'REED4', '5', 1, '2016-2017', 1),
(85, 1035, 'Meadow Lee', 'Male', 'REED4', '5', 1, '2016-2017', 1),
(86, 1036, 'Frankie Hutton', 'Female', 'REED4', '5', 1, '2016-2017', 1),
(87, 1037, 'Haroon Villegas', 'Male', 'SPECOM', '6', 1, '2016-2017', 1),
(88, 1038, 'Humairaa Hart', 'Female', 'SPECOM', '6', 1, '2016-2017', 1),
(89, 1039, 'Ricardo Berger', 'Male', 'SPECOM', '6', 1, '2016-2017', 1),
(90, 1040, 'Krystal Merritt', 'Female', 'SPECOM', '6', 1, '2016-2017', 1),
(91, 1041, 'Ivor Erickson', 'Male', 'SPECOM', '6', 1, '2016-2017', 1),
(92, 1042, 'Stanley Dyer', 'Female', 'SPECOM', '6', 1, '2016-2017', 1),
(93, 1043, 'Breanna Lozano', 'Male', 'SPECOM', '6', 1, '2016-2017', 1),
(94, 1044, 'Jana Rennie', 'Female', 'SPECOM', '6', 1, '2016-2017', 1),
(95, 1045, 'Mai Schultz', 'Male', 'SPECOM', '6', 1, '2016-2017', 1),
(96, 1046, 'Yaqub Whitehouse', 'Female', 'SPECOM', '6', 1, '2016-2017', 1),
(97, 1047, 'Eileen Pate', 'Female', 'Aral Pan', '1', 1, '2017-2018', 1),
(99, 1049, 'Anisha Sanders', 'Female', 'Aral Pan', '1', 1, '2017-2018', 1),
(100, 1050, 'Beatrice Beltran', 'Male', 'Aral Pan', '1', 1, '2017-2018', 1),
(101, 1051, 'Naomi Alfaro', 'Female', 'Math', '2', 1, '2017-2018', 1),
(102, 1052, 'Shyla Hughes', 'Male', 'Math', '2', 1, '2017-2018', 1),
(103, 1053, 'Kiefer Mendoza', 'Female', 'Math', '2', 1, '2017-2018', 1),
(104, 1054, 'Sarah-Jayne Thomas', 'Male', 'Math', '2', 1, '2017-2018', 1),
(105, 1055, 'Kaden Gordon', 'Female', 'Math', '2', 1, '2017-2018', 1),
(106, 1056, 'Ace Ward', 'Male', 'Math', '2', 1, '2017-2018', 1),
(107, 1057, 'Teegan Moss', 'Female', 'Math', '2', 1, '2017-2018', 1),
(108, 1058, 'Jedd Greer', 'Male', 'Math', '2', 1, '2017-2018', 1),
(109, 1059, 'Lucien Robin', 'Female', 'Math', '2', 1, '2017-2018', 1),
(110, 1060, 'Mercedes Bob', 'Male', 'Math', '2', 1, '2017-2018', 1),
(111, 1061, 'Jemma Riggs', 'Female', 'Math', '2', 1, '2017-2018', 1),
(112, 1062, 'Sebastien Holding', 'Male', 'Math', '2', 1, '2017-2018', 1),
(113, 1063, 'Kristie Mohamed', 'Female', 'English 101', '3', 1, '2017-2018', 1),
(114, 1064, 'Madelyn Wainwright', 'Male', 'English 101', '3', 1, '2017-2018', 1),
(115, 1065, 'Kelly Mcgregor', 'Female', 'English 101', '3', 1, '2017-2018', 1),
(116, 1066, 'Gerrard Connolly', 'Male', 'English 101', '3', 1, '2017-2018', 1),
(117, 1067, 'Stefan Davies', 'Female', 'English 101', '3', 1, '2017-2018', 1),
(118, 1068, 'Muhammed Witt', 'Male', 'English 101', '3', 1, '2017-2018', 1),
(119, 1069, 'Jim Neal', 'Female', 'English 101', '3', 1, '2017-2018', 1),
(120, 1070, 'Aras Haworth', 'Male', 'English 101', '3', 1, '2017-2018', 1),
(121, 1071, 'Amira Payne', 'Female', 'English 101', '3', 1, '2017-2018', 1),
(122, 1072, 'Esmee Cartwright', 'Male', 'Science1001', '4', 1, '2017-2018', 1),
(123, 1073, 'Lucy Conway', 'Female', 'Science1001', '4', 1, '2017-2018', 1),
(124, 1074, 'Erik Sexton', 'Male', 'Science1001', '4', 1, '2017-2018', 1),
(125, 1075, 'Moesha Schmitt', 'Female', 'Science1001', '4', 1, '2017-2018', 1),
(126, 1076, 'Anees Grant', 'Male', 'Science1001', '4', 1, '2017-2018', 1),
(127, 1077, 'Kendal Boyle', 'Female', 'Science1001', '4', 1, '2017-2018', 1),
(128, 1078, 'Dillan Mcdaniel', 'Male', 'REED4', '5', 1, '2017-2018', 1),
(129, 1079, 'Anas Ahmad', 'Female', 'REED4', '5', 1, '2017-2018', 1),
(130, 1080, 'Alan Crowther', 'Male', 'REED4', '5', 1, '2017-2018', 1),
(131, 1081, 'Layla-Mae Correa', 'Female', 'REED4', '5', 1, '2017-2018', 1),
(132, 1082, 'Lilian Li', 'Male', 'REED4', '5', 1, '2017-2018', 1),
(133, 1083, 'Hope Villalobos', 'Female', 'REED4', '5', 1, '2017-2018', 1),
(134, 1084, 'Malaikah Mackay', 'Male', 'REED4', '5', 1, '2017-2018', 1),
(135, 1085, 'Kalvin Rhodes', 'Female', 'REED4', '5', 1, '2017-2018', 1),
(136, 1086, 'Tea Byers', 'Male', 'REED4', '5', 1, '2017-2018', 1),
(137, 1087, 'Charlotte Burn', 'Female', 'REED4', '5', 1, '2017-2018', 1),
(138, 1088, 'Ellie-Louise Underwood', 'Male', 'REED4', '5', 1, '2017-2018', 1),
(139, 1089, 'Amara Hicks', 'Female', 'REED4', '5', 1, '2017-2018', 1),
(140, 1090, 'Betty Costa', 'Male', 'SPECOM', '6', 1, '2017-2018', 1),
(141, 1091, 'Madison Woods', 'Female', 'SPECOM', '6', 1, '2017-2018', 1),
(142, 1092, 'Gianluca Gilmour', 'Male', 'SPECOM', '6', 1, '2017-2018', 1),
(143, 1093, 'Pearl Church', 'Female', 'SPECOM', '6', 1, '2017-2018', 1),
(144, 1094, 'Ronny Whitaker', 'Female', 'Aral Pan', '1', 1, '2018-2019', 1),
(145, 1095, 'Riccardo Malone', 'Male', 'Aral Pan', '1', 1, '2018-2019', 1),
(146, 1096, 'Tayla Plummer', 'Female', 'Aral Pan', '1', 1, '2018-2019', 1),
(147, 1097, 'Nikolas Plant', 'Male', 'Aral Pan', '1', 1, '2018-2019', 1),
(148, 1098, 'Sufyan Pierce', 'Female', 'Aral Pan', '1', 1, '2018-2019', 1),
(149, 1099, 'Dilan Larson', 'Male', 'Aral Pan', '1', 1, '2018-2019', 1),
(150, 1100, 'Leoni Mcdowell', 'Female', 'Aral Pan', '1', 1, '2018-2019', 1),
(151, 1101, 'Stacie Ventura', 'Male', 'Aral Pan', '1', 1, '2018-2019', 1),
(152, 1102, 'Emmanuel Dougherty', 'Female', 'Math', '2', 1, '2018-2019', 1),
(153, 1103, 'Lowri Dunn', 'Male', 'Math', '2', 1, '2018-2019', 1),
(154, 1104, 'Conall Bostock', 'Female', 'Math', '2', 1, '2018-2019', 1),
(155, 1105, 'Lorelai Carroll', 'Male', 'Math', '2', 1, '2018-2019', 1),
(156, 1106, 'Wesley Cooper', 'Female', 'Math', '2', 1, '2018-2019', 1),
(157, 1107, 'Harvey-Lee Hurst', 'Male', 'Math', '2', 1, '2018-2019', 1),
(158, 1108, 'Rachelle Richardson', 'Female', 'English 101', '3', 1, '2018-2019', 1),
(159, 1109, 'Afsana Singleton', 'Male', 'English 101', '3', 1, '2018-2019', 1),
(160, 1110, 'Mary Stubbs', 'Female', 'English 101', '3', 1, '2018-2019', 1),
(161, 1111, 'Maleeha Paul', 'Male', 'English 101', '3', 1, '2018-2019', 1),
(162, 1112, 'Leona Lennon', 'Female', 'English 101', '3', 1, '2018-2019', 1),
(163, 1113, 'Amman Baxter', 'Male', 'English 101', '3', 1, '2018-2019', 1),
(164, 1114, 'Ciaron Nolan', 'Female', 'English 101', '3', 1, '2018-2019', 1),
(165, 1115, 'Kelan Phillips', 'Male', 'English 101', '3', 1, '2018-2019', 1),
(166, 1116, 'May Buck', 'Female', 'Science1001', '4', 1, '2018-2019', 1),
(167, 1117, 'Keeva Kennedy', 'Male', 'Science1001', '4', 1, '2018-2019', 1),
(168, 1118, 'Suzanne Ochoa', 'Female', 'Science1001', '4', 1, '2018-2019', 1),
(169, 1119, 'Tasneem Sullivan', 'Male', 'Science1001', '4', 1, '2018-2019', 1),
(170, 1120, 'Brett Page', 'Female', 'Science1001', '4', 1, '2018-2019', 1),
(171, 1121, 'Hamzah Greene', 'Male', 'Science1001', '4', 1, '2018-2019', 1),
(172, 1122, 'Zackary Leech', 'Female', 'Science1001', '4', 1, '2018-2019', 1),
(173, 1123, 'Josephine Cullen', 'Male', 'Science1001', '4', 1, '2018-2019', 1),
(174, 1124, 'Hailie Person', 'Female', 'Science1001', '4', 1, '2018-2019', 1),
(175, 1125, 'Mitchel Thornton', 'Male', 'REED4', '5', 1, '2018-2019', 1),
(176, 1126, 'Athena Richmond', 'Female', 'REED4', '5', 1, '2018-2019', 1),
(177, 1127, 'Stan Nicholson', 'Male', 'REED4', '5', 1, '2018-2019', 1),
(178, 1128, 'Aleksandra Jenkins', 'Female', 'REED4', '5', 1, '2018-2019', 1),
(179, 1129, 'Charles Lawrence', 'Male', 'REED4', '5', 1, '2018-2019', 1),
(180, 1130, 'Sumayya O''Quinn', 'Female', 'REED4', '5', 1, '2018-2019', 1),
(181, 1131, 'Braden Bray', 'Male', 'REED4', '5', 1, '2018-2019', 1),
(182, 1132, 'Katelyn Bernal', 'Female', 'REED4', '5', 1, '2018-2019', 1),
(183, 1133, 'Kabir Mahoney', 'Male', 'SPECOM', '6', 1, '2018-2019', 1),
(184, 1134, 'Miriam Mccormack', 'Female', 'SPECOM', '6', 1, '2018-2019', 1),
(185, 1135, 'Rimsha Powell', 'Male', 'SPECOM', '6', 1, '2018-2019', 1),
(186, 1136, 'Arabella Booth', 'Female', 'SPECOM', '6', 1, '2018-2019', 1),
(187, 1137, 'Matylda Dowling', 'Male', 'SPECOM', '6', 1, '2018-2019', 1),
(188, 1138, 'Vincenzo Glover', 'Female', 'SPECOM', '6', 1, '2018-2019', 1),
(189, 1139, 'Rubie Winter', 'Male', 'SPECOM', '6', 1, '2018-2019', 1),
(190, 1140, 'Ravi Serrano', 'Female', 'SPECOM', '6', 1, '2018-2019', 1);

-- --------------------------------------------------------

--
-- Table structure for table `schoolyear`
--

CREATE TABLE `schoolyear` (
  `entry_id` int(10) NOT NULL,
  `school_year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`entry_id`, `school_year`) VALUES
(4, '2018-2019'),
(5, '2017-2018'),
(6, '2016-2017');

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
(43, 1, 'Alvins', 'Aral Pan', '1', '1', '2016-2017'),
(44, 1, 'Alvins', 'Math', '2', '1', '2016-2017'),
(45, 1, 'Alvins', 'English101', '3', '1', '2016-2017'),
(46, 1, 'Alvins', 'Science1001', '4', '1', '2016-2017'),
(47, 1, 'Alvins', 'REED4', '5', '1', '2016-2017'),
(48, 1, 'Alvins', 'SPECOM', '6', '1', '2016-2017'),
(49, 1, 'Alvins', 'Aral Pan', '1', '1', '2017-2018'),
(50, 1, 'Alvins', 'Math', '2', '1', '2017-2018'),
(51, 1, 'Alvins', 'English101', '3', '1', '2017-2018'),
(52, 1, 'Alvins', 'Science1001', '4', '1', '2017-2018'),
(53, 1, 'Alvins', 'REED4', '5', '1', '2017-2018'),
(54, 1, 'Alvins', 'SPECOM', '6', '1', '2017-2018'),
(55, 1, 'Alvins', 'Aral Pan', '1', '1', '2018-2019'),
(56, 1, 'Alvins', 'Math', '2', '1', '2018-2019'),
(57, 1, 'Alvins', 'English101', '3', '1', '2018-2019'),
(58, 1, 'Alvins', 'Science1001', '4', '1', '2018-2019'),
(59, 1, 'Alvins', 'REED4', '5', '1', '2018-2019'),
(60, 1, 'Alvins', 'SPECOM', '6', '1', '2018-2019');

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
(3, 'Alson John R. Bayon-on', '', '', '2018-06-06', '10012', 'Guidance Counselor', 10021, 1010121, 'MAED', 'Registered'),
(4, 'Steven', 'S', 'Saludares', 'May 28, 2018', '31-2312321', 'Adviser', 231231, 1231231, 'MAED', 'Registered'),
(5, 'Keir', 'S', 'Velez', 'June 03, 2018', '12-3124234', 'Adviser', 231231, 3213, 'MAED', 'Registered'),
(6, 'Leonel', 'C', 'Entes', 'June 03, 2018', '31-2321312', 'Adviser', 1232131, 131231, 'PhD', 'Registered'),
(7, 'Mark', 'S', 'Sombilla', 'June 03, 2018', '12-3123131', 'Adviser', 31231, 31231231, 'PhD', 'Registered');

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
(19, 36, 'sample', 'sample', 'Principal'),
(20, 4, 'steven', 'steven', 'Teacher'),
(21, 5, 'keirve', 'keirve', 'Teacher'),
(22, 6, 'leonel', 'leonel', 'Teacher'),
(23, 7, 'markso', 'markso', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `writtenworks`
--

CREATE TABLE `writtenworks` (
  `entry_id` int(10) NOT NULL,
  `highest_score` varchar(10) NOT NULL,
  `number` varchar(10) NOT NULL,
  `teacher_id` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writtenworks`
--

INSERT INTO `writtenworks` (`entry_id`, `highest_score`, `number`, `teacher_id`, `subject_name`) VALUES
(11, '10', '1', '1', 'Math');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrollstudent`
--
ALTER TABLE `enrollstudent`
  ADD PRIMARY KEY (`enroll_id`);

--
-- Indexes for table `schoolyear`
--
ALTER TABLE `schoolyear`
  ADD PRIMARY KEY (`entry_id`);

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
-- Indexes for table `writtenworks`
--
ALTER TABLE `writtenworks`
  ADD PRIMARY KEY (`entry_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrollstudent`
--
ALTER TABLE `enrollstudent`
  MODIFY `enroll_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
--
-- AUTO_INCREMENT for table `schoolyear`
--
ALTER TABLE `schoolyear`
  MODIFY `entry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sub_assign`
--
ALTER TABLE `sub_assign`
  MODIFY `assign_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
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
  MODIFY `teacher_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `register_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `writtenworks`
--
ALTER TABLE `writtenworks`
  MODIFY `entry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
