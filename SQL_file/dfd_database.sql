-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 07:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dfd_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `attandence`
--

CREATE TABLE `attandence` (
  `semester` varchar(20) DEFAULT NULL,
  `date_at` varchar(20) DEFAULT NULL,
  `course_code` varchar(15) DEFAULT NULL,
  `email_teacher` varchar(30) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `number_student` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attandence`
--

INSERT INTO `attandence` (`semester`, `date_at`, `course_code`, `email_teacher`, `dept`, `number_student`) VALUES
('spring-2017', '2017-07-20', 'CSE-400', 'mjnayem@diu.edu.bd', 'CSE', 'numberofstudent'),
('spring-2017', '2017-07-20', 'CSE-300', 'mjnayem@diu.edu.bd', 'CSE', '45');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details_student`
--

CREATE TABLE `contact_details_student` (
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `father_num` varchar(15) DEFAULT NULL,
  `phone_1` varchar(15) DEFAULT NULL,
  `phone_2` varchar(15) DEFAULT NULL,
  `email_father` varchar(30) DEFAULT NULL,
  `personal_email` varchar(30) DEFAULT NULL,
  `present_address` varchar(30) DEFAULT NULL,
  `present_address_post` varchar(30) DEFAULT NULL,
  `present_address_police` varchar(30) DEFAULT NULL,
  `present_address_city` varchar(30) DEFAULT NULL,
  `present_address_division` varchar(30) DEFAULT NULL,
  `present_address_country` varchar(30) DEFAULT NULL,
  `present_address_zip_code` varchar(15) DEFAULT NULL,
  `permanent_address` varchar(30) DEFAULT NULL,
  `permanent_address_post` varchar(30) DEFAULT NULL,
  `permanent_address_police` varchar(30) DEFAULT NULL,
  `permanent_address_city` varchar(30) DEFAULT NULL,
  `permanent_address_division` varchar(30) DEFAULT NULL,
  `permanent_address_country` varchar(30) DEFAULT NULL,
  `permanent_address_zip_code` varchar(15) DEFAULT NULL,
  `other_address` varchar(30) DEFAULT NULL,
  `hostel_address` varchar(30) DEFAULT NULL,
  `Mess_address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details_student`
--

INSERT INTO `contact_details_student` (`email`, `mobile`, `father_num`, `phone_1`, `phone_2`, `email_father`, `personal_email`, `present_address`, `present_address_post`, `present_address_police`, `present_address_city`, `present_address_division`, `present_address_country`, `present_address_zip_code`, `permanent_address`, `permanent_address_post`, `permanent_address_police`, `permanent_address_city`, `permanent_address_division`, `permanent_address_country`, `permanent_address_zip_code`, `other_address`, `hostel_address`, `Mess_address`) VALUES
('adnan@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('adnanany@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ango@diu.edu.bd', '01720598745', '01672589654', '12558', '', 'ango@gmail.com', 'ango@gmail.com', 'gopalgonj', 'N', 'nn', 'n', 'n', '', '', '', '', '', '', '', '55', '123', '', '', ''),
('mjnayem1111@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mjnayem1@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mjnayem209319@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mjnayem@diu.edu.bd', '01720209319', 'hhh', '1558996', '4555', 'Update Information', 'dfgggh', 'Update Information', 'Update Information', 'gghhh', 'Update Information', 'Update Information', 'Update Information', 'jdgshkdh', 'Update Information', 'Update Information', 'Update Information', 'Update Information', 'Update Information', 'kjshgiuerhy', 'Update Informat', 'Update Information', 'gieryet', 'fgsdg'),
('mjnayemewgehhh@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('nayem@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `id` int(11) NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `credit` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`id`, `code`, `title`, `credit`) VALUES
(1, 'CSE-300', 'Signal processing', '3'),
(2, 'CSE-301', 'Signal processing Lab', '3'),
(3, 'CSE-303', 'Digital Logic Design', '2'),
(4, 'CSE-304', 'Digital Logic design Lab', '1'),
(5, 'CSE-350', 'Automata theory', '2'),
(6, 'CSE-351', 'Automata Theory Lab', '1'),
(7, 'CSE-400', 'Image processing', '3'),
(8, 'CSE-401', 'Image processing Lab', '1');

-- --------------------------------------------------------

--
-- Table structure for table `education_student`
--

CREATE TABLE `education_student` (
  `email` varchar(30) NOT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `degree_name` varchar(50) DEFAULT NULL,
  `name_of_institute` varchar(50) DEFAULT NULL,
  `university_board` varchar(50) DEFAULT NULL,
  `passing_year` varchar(15) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `cgpa` varchar(10) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_student`
--

INSERT INTO `education_student` (`email`, `degree`, `degree_name`, `name_of_institute`, `university_board`, `passing_year`, `grade`, `cgpa`, `remarks`) VALUES
('adnan@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('adnanany@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ango@diu.edu.bd', 'H.S.C', 'H.S.C', 'AUKSMC', 'COMILLA', '2012', 'A+', '5', 'N'),
('mjnayem1111@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mjnayem1@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mjnayem209319@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mjnayem@diu.edu.bd', 'Hons.', 'H.S.C', 'BUET', 'DHAKA', '2017', 'A+', '4.00', 'Me....'),
('mjnayemewgehhh@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('nayem@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `father_mother_student`
--

CREATE TABLE `father_mother_student` (
  `email` varchar(30) NOT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `f_num` varchar(15) DEFAULT NULL,
  `f_occupation` varchar(20) DEFAULT NULL,
  `f_disganation` varchar(20) DEFAULT NULL,
  `f_employ` varchar(20) DEFAULT NULL,
  `f_income` varchar(20) DEFAULT NULL,
  `m_name` varchar(30) DEFAULT NULL,
  `m_num` varchar(15) DEFAULT NULL,
  `m_occupation` varchar(20) DEFAULT NULL,
  `m_designation` varchar(20) DEFAULT NULL,
  `m_employ` varchar(20) DEFAULT NULL,
  `m_income` varchar(20) DEFAULT NULL,
  `parents_address` varchar(50) DEFAULT NULL,
  `local_guardiant` varchar(30) DEFAULT NULL,
  `relationship` varchar(20) DEFAULT NULL,
  `local_guardiant_address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `father_mother_student`
--

INSERT INTO `father_mother_student` (`email`, `f_name`, `f_num`, `f_occupation`, `f_disganation`, `f_employ`, `f_income`, `m_name`, `m_num`, `m_occupation`, `m_designation`, `m_employ`, `m_income`, `parents_address`, `local_guardiant`, `relationship`, `local_guardiant_address`) VALUES
('adnanany@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ango@diu.edu.bd', 'Bisnu Chandra Barman', '01720256585', 'Fisherman', 'N', 'Fisherman', '20000', 'Santi lota', '012589963', 'N', 'N', 'House wife', '50000', 'Gopalgonj', 'Hamdu mia', 'Uncle', 'Nobinbag'),
('mjnayem1111@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mjnayem1@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mjnayem209319@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mjnayem@diu.edu.bd', 'Moti miya', '1555', 'asdd', 'ddfg', 'dfgh', '', '', '', '', '', '', '', '', '', '', ''),
('mjnayemewgehhh@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('nayem@diu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `money_pin`
--

CREATE TABLE `money_pin` (
  `id` int(11) NOT NULL,
  `pin` varchar(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money_pin`
--

INSERT INTO `money_pin` (`id`, `pin`, `amount`) VALUES
(19, 'Ashik', 0),
(121, '624331', 1500),
(123, '787145', 1500),
(124, '979363', 1500),
(125, '836698', 1500),
(126, '925460', 1500),
(128, '302745', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `payment_student`
--

CREATE TABLE `payment_student` (
  `id` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `student_id` varchar(20) DEFAULT NULL,
  `sub_date` varchar(20) DEFAULT NULL,
  `disc` varchar(300) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `other` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_student`
--

INSERT INTO `payment_student` (`id`, `email`, `student_id`, `sub_date`, `disc`, `amount`, `other`) VALUES
(1, 'mjnayem@diu.edu.bd', '20131101002', '2017-02-02', 'Semester fees', '4000', ''),
(2, 'mjnayem@diu.edu.bd', '20131101002', 'dhdh', 'dkhihe', '2000', 'fgj'),
(3, 'mjnayem1@diu.edu.bd', '20131101050', '2017-07-25', 'mmm', '2000', 'kkk'),
(4, 'mjnayem1@diu.edu.bd', '20131101050', '2017-07-25', 'hyj', '2000', 'fgj'),
(5, 'mjnayem1@diu.edu.bd', '20131101050', '2017-07-25', 'dkhihe', '2000', 'fgj'),
(6, 'mjnayem1@diu.edu.bd', '20131101050', '2017-07-25', 'dkhihe', 'jtyj', 'kkk'),
(7, 'mjnayem1@diu.edu.bd', '20131101050', '2017-07-25', 'dkhihe', '1500', 'fgj'),
(8, 'mjnayem1@diu.edu.bd', '20131101050', '2017-07-25', 'dkhihe', '1500', 'kkk'),
(9, 'adnanany@diu.edu.bd', '201325691', 'gbghntyj', 'tyjrkj', '1500', 'ujukj'),
(10, 'adnanany@diu.edu.bd', '201325691', 'hfjmyfj', 'tyryuj', '1500', 'tghy');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info_student`
--

CREATE TABLE `personal_info_student` (
  `email` varchar(30) NOT NULL DEFAULT 'email',
  `f_name` varchar(20) DEFAULT NULL,
  `m_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL,
  `n_name` varchar(20) DEFAULT NULL,
  `d_o_b` varchar(20) NOT NULL DEFAULT '2017-07-01',
  `p_o_b` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `marital_status` varchar(20) DEFAULT NULL,
  `blood` varchar(10) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `national_id` varchar(50) DEFAULT NULL,
  `passport` varchar(50) DEFAULT NULL,
  `im` varchar(50) DEFAULT NULL,
  `social_id` varchar(200) DEFAULT NULL,
  `about_u` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info_student`
--

INSERT INTO `personal_info_student` (`email`, `f_name`, `m_name`, `l_name`, `n_name`, `d_o_b`, `p_o_b`, `gender`, `marital_status`, `blood`, `religion`, `nationality`, `national_id`, `passport`, `im`, `social_id`, `about_u`) VALUES
('adnan@diu.edu.bd', NULL, NULL, NULL, NULL, '2017-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('adnanany@diu.edu.bd', 'Aj', 'Adnan', '', '', '2017-07-01', '', 'male', 'fff', 'o+', 'reg', '', '', '', '', '', ''),
('ango@diu.edu.bd', 'Anga', 'Chandra', 'Barman', 'Ango', '1992-05-05', 'Mymansingh', 'Male', 'Marit', 'A+', 'Hindu', 'Bangladeshi', 'N', 'N', 'N', 'FB', 'simple'),
('email', 'Nayem', 'sssd', 'ddfggh', 'ffff', '2017-07-01', '', '', '', '', '', '', '', '', '', '', ''),
('mjnayem1111@diu.edu.bd', NULL, NULL, NULL, NULL, '2017-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mjnayem1@diu.edu.bd', NULL, NULL, NULL, NULL, '2017-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mjnayem209319@diu.edu.bd', NULL, NULL, NULL, NULL, '2017-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mjnayem@diu.edu.bd', 'Mj', 'Nayem', '', 'Nayem', '1994-02-01', 'Ashuganj', 'male', 'Unmarit', 'O++', 'Islam', 'Bangladeshi', 'N', 'N', 'N', 'FB', 'Simple'),
('mjnayemewgehhh@diu.edu.bd', NULL, NULL, NULL, NULL, '2017-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('nayem@diu.edu.bd', NULL, NULL, NULL, NULL, '2017-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pro_pic`
--

CREATE TABLE `pro_pic` (
  `email` varchar(30) NOT NULL,
  `pic_name` varchar(200) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_pic`
--

INSERT INTO `pro_pic` (`email`, `pic_name`) VALUES
('adnan@diu.edu.bd', 'default.jpg'),
('adnanany@diu.edu.bd', 'default.jpg'),
('ango@diu.edu.bd', 'default.jpg'),
('mjnayem1111@diu.edu.bd', 'default.jpg'),
('mjnayem1@diu.edu.bd', 'default.jpg'),
('mjnayem209319@diu.edu.bd', 'default.jpg'),
('mjnayem@diu.edu.bd', '17157663_1255377344570493_2358075242670266192_o.jpg'),
('mjnayemewgehhh@diu.edu.bd', 'default.jpg'),
('nayem@diu.edu.bd', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `student_id` varchar(30) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `balance` varchar(20) DEFAULT NULL,
  `receiveable` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`student_id`, `email`, `password`, `status`, `balance`, `receiveable`) VALUES
(NULL, 'Nayem@diu.edu.bd', '159951', 'Student', NULL, NULL),
(NULL, 'tony@diu.edu.bd', '15963', 'Student', NULL, NULL),
(NULL, '201311@diu.edu.bd', '209319', 'Student', NULL, NULL),
(NULL, 'sam@diu.edu.bd', '158741', 'Student', NULL, NULL),
(NULL, 'jj@diu.edu.bd', '122', 'Student', NULL, NULL),
(NULL, 'll@diu.edu.bd', '14', 'Student', NULL, NULL),
(NULL, 'fff@diu.edu.bd', 'df', 'Student', NULL, NULL),
(NULL, 'adnan@diu.edu.bd', 'adnan', 'Student', NULL, NULL),
('20131101002', 'mjnayem@diu.edu.bd', '209319', 'Student', '96000', '0'),
('20131101050', 'ango@diu.edu.bd', 'ango', 'Student', '1000', '0'),
('20131101050', 'mjnayem1@diu.edu.bd', '12345', 'Student', '1000', '0'),
('201311010100', 'mjnayem209319@diu.edu.bd', '159', 'Student', NULL, NULL),
('ffgg', 'mjnayem1111@diu.edu.bd', 'nhj', 'Student', NULL, NULL),
('mjnayem@diu.edu.bd', 'mjnayemewgehhh@diu.edu.bd', '158974586', 'Student', NULL, NULL),
('201311025', 'nayem@diu.edu.bd', '123456789', 'Student', NULL, NULL),
('201325691', 'adnanany@diu.edu.bd', '123456789', 'Student', '1000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stu201311025`
--

CREATE TABLE `stu201311025` (
  `id` int(10) NOT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `sub_code` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `credit` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `grade_point` varchar(10) DEFAULT NULL,
  `drop_semi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu201325691`
--

CREATE TABLE `stu201325691` (
  `id` int(10) NOT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `sub_code` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `credit` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `grade_point` varchar(10) DEFAULT NULL,
  `drop_semi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu201325691`
--

INSERT INTO `stu201325691` (`id`, `student_id`, `email`, `semester`, `sub_code`, `title`, `credit`, `grade`, `grade_point`, `drop_semi`) VALUES
(1, '201325691', 'adnanany@diu.edu.bd', 'summer-2017', 'CSE-400', 'Image processing', '3', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stu20131101002`
--

CREATE TABLE `stu20131101002` (
  `id` int(10) NOT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `sub_code` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `credit` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `grade_point` varchar(10) DEFAULT NULL,
  `drop_semi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu20131101002`
--

INSERT INTO `stu20131101002` (`id`, `student_id`, `email`, `semester`, `sub_code`, `title`, `credit`, `grade`, `grade_point`, `drop_semi`) VALUES
(3, '20131101002', 'mjnayem@diu.edu.bd', 'spring-2017', 'CSE-400', 'Image processing', '3', NULL, NULL, NULL),
(4, '20131101002', 'mjnayem@diu.edu.bd', 'spring-2017', 'CSE-301', 'Signal processing Lab', '3', NULL, NULL, NULL),
(8, '20131101002', 'mjnayem@diu.edu.bd', 'spring-2017', 'CSE-300', 'Signal processing', '3', NULL, NULL, NULL),
(9, '20131101002', 'mjnayem@diu.edu.bd', 'spring-2017', 'CSE-350', 'Automata theory', '2', NULL, NULL, NULL),
(10, '20131101002', 'mjnayem@diu.edu.bd', 'spring-2017', 'CSE-301', 'Signal processing Lab', '3', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stu20131101050`
--

CREATE TABLE `stu20131101050` (
  `id` int(10) NOT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `sub_code` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `credit` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `grade_point` varchar(10) DEFAULT NULL,
  `drop_semi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu20131101050`
--

INSERT INTO `stu20131101050` (`id`, `student_id`, `email`, `semester`, `sub_code`, `title`, `credit`, `grade`, `grade_point`, `drop_semi`) VALUES
(1, '20131101050', 'ango@diu.edu.bd', 'spring-2017', 'CSE-400', 'Image processing', '3', NULL, NULL, NULL),
(2, '20131101050', 'mjnayem1@diu.edu.bd', 'spring-2017', 'CSE-400', 'Image processing', '3', NULL, NULL, NULL),
(5, '20131101050', 'mjnayem1@diu.edu.bd', 'spring-2017', 'CSE-350', 'Automata theory', '2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stu201311010100`
--

CREATE TABLE `stu201311010100` (
  `id` int(10) NOT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `sub_code` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `credit` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `grade_point` varchar(10) DEFAULT NULL,
  `drop_semi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_suggestion`
--

CREATE TABLE `student_suggestion` (
  `id` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `catagory` varchar(20) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_suggestion`
--

INSERT INTO `student_suggestion` (`id`, `email`, `catagory`, `message`) VALUES
(1, 'mjnayem@diu.edu.bd', 'Hostal', 'Not god...'),
(2, 'ango@diu.edu.bd', 'Hostal', 'Very bad .Need to change this system.');

-- --------------------------------------------------------

--
-- Table structure for table `stuffgg`
--

CREATE TABLE `stuffgg` (
  `id` int(10) NOT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `sub_code` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `credit` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `grade_point` varchar(10) DEFAULT NULL,
  `drop_semi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `teacher_id` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `post` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`teacher_id`, `email`, `password`, `name`, `dept`, `post`) VALUES
('20131101002', 'mjnayem@diu.edu.bd', '241316', 'Mj Nayem', 'CSE', 'Lecturer'),
('20131101005', 'nayem@diu.edu.bd', '12345', 'Nayem', 'CSE', 'Lecterar'),
('gndgjh', 'mj@diu.edu.bd', '54321', 'pppp', 'CSE', 'ehgrht');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_details_student`
--
ALTER TABLE `contact_details_student`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_student`
--
ALTER TABLE `education_student`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `father_mother_student`
--
ALTER TABLE `father_mother_student`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `money_pin`
--
ALTER TABLE `money_pin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_student`
--
ALTER TABLE `payment_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info_student`
--
ALTER TABLE `personal_info_student`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pro_pic`
--
ALTER TABLE `pro_pic`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `stu201311025`
--
ALTER TABLE `stu201311025`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu201325691`
--
ALTER TABLE `stu201325691`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu20131101002`
--
ALTER TABLE `stu20131101002`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu20131101050`
--
ALTER TABLE `stu20131101050`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu201311010100`
--
ALTER TABLE `stu201311010100`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_suggestion`
--
ALTER TABLE `student_suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stuffgg`
--
ALTER TABLE `stuffgg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_info`
--
ALTER TABLE `course_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `money_pin`
--
ALTER TABLE `money_pin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `payment_student`
--
ALTER TABLE `payment_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `stu201311025`
--
ALTER TABLE `stu201311025`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stu201325691`
--
ALTER TABLE `stu201325691`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stu20131101002`
--
ALTER TABLE `stu20131101002`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `stu20131101050`
--
ALTER TABLE `stu20131101050`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `stu201311010100`
--
ALTER TABLE `stu201311010100`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_suggestion`
--
ALTER TABLE `student_suggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stuffgg`
--
ALTER TABLE `stuffgg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
