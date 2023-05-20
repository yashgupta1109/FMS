-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 07:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `designation`, `password`) VALUES
(1, 'Ved', 'Prakash', 'test3@gmail.com', 'Principal', '5c428d8875d2948607f3e3fe134d71b4'),
(2, 'Dr. Vineeta', 'Khemchandani', 'Vkhemcandani@jssaten.ac.in', 'HOD', 'Test@12345');

-- --------------------------------------------------------

--
-- Table structure for table `courseoutcomes`
--

CREATE TABLE `courseoutcomes` (
  `sno` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `CO1` varchar(200) DEFAULT NULL,
  `CO2` varchar(200) DEFAULT NULL,
  `CO3` varchar(200) DEFAULT NULL,
  `CO4` varchar(200) DEFAULT NULL,
  `CO5` varchar(200) DEFAULT NULL,
  `CO6` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courseoutcomes`
--

INSERT INTO `courseoutcomes` (`sno`, `year`, `semester`, `subject`, `CO1`, `CO2`, `CO3`, `CO4`, `CO5`, `CO6`) VALUES
(1, NULL, NULL, 'Maths', 'Classify partial differential equations and transform into canonical form and solve linear and nonlinear partial differential equations of first order.', 'Apply the knowledge of partial differential equations to Engineering, sciences & technology.', 'Introduce measures of central tendency and various forecasting techniques.', 'To develop an understanding of the theory of probability, rules of probability and Probability distributions.', 'Understand the meaning and process of hypothesis testing including T-test, F-test, Chi-Square test, ANOVA, Quality Control chart.', NULL),
(2, NULL, NULL, 'Universal Human Value', 'Explain the need and basic content of fundamentals of value education.', 'Demonstrate harmony at various levels of human living.', 'Develop the ability to live in harmony with family and society for continuous happiness.', 'Build the appropriate relationship between nature and human life.', 'Apply the holistic approach of values and ethics in professional life.', NULL),
(3, 2, 3, 'Energy Science Course', ' Explain main components, services, types and structure of Operating Systems.', 'Apply the various algorithms and techniques to handle the various concurrency control issues.', 'Compare and apply various CPU scheduling algorithms for process execution.', 'Identify occurrence of deadlock and describe ways to handle it.', 'Explain and apply various memory, I/O and disk management techniques.', NULL),
(4, NULL, NULL, 'Theory Of Automata And Computation', 'Design deterministic and nondeterministic automata and regular expressions for specified regular languages', 'Convert among various notations for a regular language, such as DFAs, NFAs, and regular expressions.', 'Design grammar and PDA for CFL and state and prove their equivalence.', 'Design TM to recognize language and compute functions.', 'State and prove properties of regular, context free, recursive and recursive enumerable languages.', 'Explain the significance of the Universal Turing machine, Church-Turing thesis and concept of Undecidability.'),
(5, 2, 3, 'Data Structure', 'Describe how arrays, linked lists, stacks, queues, trees, and graphs are represented in memory, used by the algorithms and their common applications.', 'Discuss the computational efficiency of the sorting and searching algorithms.', 'Implementation of Trees and Graphs and perform various operations on these data structure.', 'Understanding the concept of recursion, application of recursion and its implementation and\nremoval of recursion.', 'Identify the alternative implementations of data structures with respect to its performance to\nsolve a real world problem.', NULL),
(6, 2, 3, 'Computer Organization And Architecture', 'Study of the basic structure and operation of a digital computer system.', 'Analysis of the design of arithmetic & logic unit and understanding of the fixed point and floating-\r\npoint arithmetic operations.', 'Implementation of control unit techniques and the concept of Pipelining', 'Understanding the hierarchical memory system, cache memories and virtual memory', 'Understanding the different ways of communicating with I/O devices and standard I/O interfaces', NULL),
(7, 2, 3, 'Discrete Structure And Theory Of Logic', 'Write an argument using logical notation and determine if the argument is or is not valid.', 'Understand the basic principles of sets and operations in sets.', 'Demonstrate an understanding of relations and functions and be able to determine their\r\nproperties.', 'Demonstrate different traversal methods for trees and graphs.', 'Model problems in Computer Science using graphs and trees.', NULL),
(8, 2, 3, 'Technical Communication', 'Students will be enabled to understand the nature and objective of Technical\r\nCommunication relevant for the work place as Engineers', 'Students will utilize the technical writing for the purposes of Technical Communication\r\nand its exposure in various dimensions. ', 'Students would imbibe inputs by presentation skills to enhance confidence in face of\r\ndiverse audience. \r\n', 'Technical communication skills will create a vast know-how of the application of the\r\nlearning to promote their technical competence. ', 'It would enable them to evaluate their efficacy as fluent & efficient communicators by\r\nlearning the voice-dynamics. ', NULL),
(9, 2, 3, 'Computer System Security', 'To discover software bugs that pose cyber security threats and to explain how to fix the bugs to\r\nmitigate such threats', 'To discover cyber attack scenarios to web browsers and web servers and to explain how to\r\nmitigate such threats', 'To discover and explain mobile software bugs posing cyber security threats, explain and\r\nrecreate exploits, and to explain mitigation techniques', 'To articulate the urgent need for cyber security in critical computer systems, networks, and\r\nworld wide web, and to explain various threat scenarios', 'To articulate the well known cyber attack incidents, explain the attack scenarios, and explain\r\nmitigation techniques.', NULL),
(10, 2, 3, 'Data Structures Using C LAB', 'Write and execute programs for searching and sorting arrays.', 'Write and execute programs for various operations (insert, delete, append and\r\nConcatenate etc.) on arrays and linked lists.', 'Write and execute programs for representing various data structures like Stacks,\r\nQueues and Trees using both arrays as well as linked lists.', 'Write and execute programs for using Binary Search Trees for searching for a key.', 'Write and execute programs for representation and traversal of graphs.', NULL),
(11, 2, 3, 'Computer Organization LAB', 'Design and verify combinational circuits (adder, code converter, decoder,\r\nmultiplexer) using basic gates.', 'Design and verify various flip-flops.', 'Design I/O system and ALU.', 'Demonstrate a simple instruction set computer .', 'Null', NULL),
(12, 2, 3, 'Discrete Structure And Logic LAB', 'Write and execute C function and maple commands related to mathematical and set\r\noperations.', 'Apply recursive approach to solve basic problems', 'Write and execute the basic and inductive step of mathematical induction', 'Solve basic counting and combinatorial problems', 'Compare and contrast experimental and theoretical problems such as birthday\r\nproblem, basket ball problem and hand poker’s problem', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `subjectalloted` varchar(255) DEFAULT NULL,
  `laballoted` varchar(255) NOT NULL,
  `section` varchar(55) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fname`, `lname`, `email`, `designation`, `subjectalloted`, `laballoted`, `section`, `img`, `password`) VALUES
(1, 'Mona', 'Malik', 'test2@gmail.com', 'HOD', NULL, '', NULL, NULL, '5c428d8875d2948607f3e3fe134d71b4'),
(2, 'Dr. Vineeta', 'Khemchandani', 'Vkhemcandani@jssaten.ac.in', 'HOD', NULL, '', NULL, NULL, 'Test@12345'),
(3, 'Dr. Seema', 'Shukla', 'seemashukla@jssaten.ac.in', 'Associate Professor', 'Data Structure', 'Data Structures Using C LAB', 'IT-1', NULL, 'Test@12345'),
(4, 'Dr. Jyoti', 'Gautam', 'jyotig@jssaten.ac.in', 'Associate Professor', NULL, '', NULL, NULL, 'Test@12345'),
(5, 'Dr. Dhiraj', 'Pandey', 'dhirajpandey@jssaten.ac.in', 'Associate Professor', NULL, '', NULL, NULL, 'Test@12345'),
(6, 'Dr. Meena', 'Arora', 'meenaarora@jssaten.ac.in', 'Associate Professor', NULL, '', NULL, NULL, 'Test@12345'),
(8, 'Dr. Gunjan', 'Ansari', 'gunjanansari@jssaten.ac.in', 'AP-3', NULL, '', NULL, NULL, 'Test@12345'),
(9, 'Dr. Birendra Kumar', 'Verma', 'birendraverma@jssaten.ac.in', 'AP-2', NULL, '', NULL, NULL, 'Test@12345'),
(10, 'Dr. Neha', 'Gupta', 'nehagupta@gmail.com', 'AP-2', 'Computer Organization And Architecture', 'Computer Organization LAB', 'IT-2', NULL, 'Test@12345'),
(11, 'Dr. Prachi', 'Chabra', 'prachichhabra@jssaten.ac.in', 'AP-2', 'Discrete Structure And Theory Of Logic', 'Discrete Structure And Logic LAB', 'IT-1', NULL, 'Test@12345'),
(12, 'Dr. Manoj', 'Kumar', 'manojkumar@jssaten.ac.in', 'AP-2', 'Discrete Structure And Theory Of Logic', '', 'IT-2', NULL, 'Test@12345'),
(13, 'Dr. Sukhendra', 'Singh', 'sukhendrasingh@jssaten.ac.in', 'AP-2', NULL, 'Data Structures Using C LAB', 'IT-1', NULL, 'Test@12345'),
(14, 'Dr. Shikha', 'Verma', 'shikhaverma@jssaten.ac.in', 'AP-2', 'Computer Organization And Architecture', 'Computer Organization LAB', 'IT-1', NULL, 'Test@12345'),
(15, 'Dr. Megha', 'Jain', 'meghajain@jssaten.ac.in', 'AP-2', 'Data Structure', 'Data Structures Using C LAB', 'IT-2', NULL, 'Test@12345'),
(16, 'Dr. Aparna', 'Srivastava', 'aparnashrivastava@jssaten.ac.in', 'AP-2', NULL, '', NULL, NULL, 'Test@12345'),
(19, 'Mr Kapil', 'Dev', 'kapil@gmail.com', NULL, 'Energy Science Course', '', 'IT-1', NULL, 'Test@12345'),
(20, 'Dr. Kalika', 'Singh', 'kalika@gmail.com', NULL, 'Technical Communication', '', 'IT-1', NULL, 'Test@12345'),
(21, 'Ms. Shilpi', 'Gupta', 'shilpi@gmail.com', NULL, 'Computer System Security', 'Discrete Structure And Logic LAB', 'IT-1', NULL, 'Test@12345'),
(22, 'Mr Rudresha', 'S.', 'rudresha@gmail.com', NULL, 'Energy Science Course', '', 'IT-2', NULL, 'Test@12345'),
(23, 'Ms. Pivali', 'Gope', 'pivali@gmail.com', NULL, 'Technical Communication', '', 'IT-2', NULL, 'Test@12345'),
(24, 'Ms. Ujjwala', 'Thakur', 'ujjwala@gmail.com', NULL, NULL, 'Computer Organization LAB', 'IT-1', NULL, 'Test@12345');

-- --------------------------------------------------------

--
-- Table structure for table `respone`
--

CREATE TABLE `respone` (
  `id` int(11) NOT NULL,
  `usersemail` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `facultyemail` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `co1` int(11) DEFAULT NULL,
  `co2` int(11) DEFAULT NULL,
  `co3` int(11) DEFAULT NULL,
  `co4` int(11) DEFAULT NULL,
  `co5` int(11) DEFAULT NULL,
  `co6` int(11) DEFAULT NULL,
  `co7` int(11) DEFAULT NULL,
  `sb1` int(11) DEFAULT NULL,
  `sb2` int(11) DEFAULT NULL,
  `sb3` int(11) DEFAULT NULL,
  `sb4` int(11) DEFAULT NULL,
  `sb5` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `respone`
--

INSERT INTO `respone` (`id`, `usersemail`, `facultyemail`, `subject`, `co1`, `co2`, `co3`, `co4`, `co5`, `co6`, `co7`, `sb1`, `sb2`, `sb3`, `sb4`, `sb5`) VALUES
(105, 'test11@gmail.com', 'shikhaverma@jssaten.ac.in', 'COA', 1, 2, 3, 2, 2, 0, NULL, 1, 2, 3, 2, 2),
(106, 'nimesh.dixit.26@gmail.com', 'seemashukla@jssaten.ac.in', 'DS', 2, 3, 2, 3, 3, 0, NULL, 3, 4, 4, 3, 4),
(107, 'nimesh.dixit.26@gmail.com', 'kalika@gmail.com', 'TC', 2, 3, 3, 3, 2, 0, NULL, 2, 3, 3, 4, 3),
(108, 'nimesh.dixit.26@gmail.com', 'prachichhabra@jssaten.ac.in', 'DSTL', 2, 3, 1, 1, 1, 0, NULL, 2, 1, 1, 1, 1),
(109, 'nimesh.dixit.26@gmail.com', 'shilpi@gmail.com', 'CSS', 2, 3, 2, 3, 3, 0, NULL, 1, 1, 1, 1, 1),
(110, 'nimesh.dixit.26@gmail.com', 'kapil@gmail.com', 'ESC', 2, 3, 2, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(111, 'nimesh.dixit.26@gmail.com', '', 'DS LAB', 1, 2, 2, 3, 3, 0, NULL, 1, 2, 2, 2, 2),
(112, 'nimesh.dixit.26@gmail.com', '', 'COA LAB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'rockstaramanm@gmail.com', 'meghajain@jssaten.ac.in', 'DS', 2, 2, 2, 3, 2, 0, NULL, 2, 3, 3, 3, 3),
(116, 'rockstaramanm@gmail.com', 'pivali@gmail.com', 'TC', 2, 2, 2, 2, 2, 0, NULL, 2, 2, 2, 2, 2),
(117, 'rockstaramanm@gmail.com', 'Manojkumar@jssaten.ac.in', 'DSTL', 3, 3, 3, 3, 3, 0, NULL, 3, 3, 3, 3, 3),
(118, 'rockstaramanm@gmail.com', 'nehagupta@gmail.com', 'COA', 2, 2, 2, 2, 2, 0, NULL, 2, 2, 2, 2, 2),
(119, 'rockstaramanm@gmail.com', '', 'CSS', 2, 2, 2, 2, 2, 0, NULL, 4, 4, 4, 4, 4),
(120, 'rockstaramanm@gmail.com', 'rudresha@gmail.com', 'ESC', 3, 3, 3, 3, 3, 0, NULL, 4, 4, 4, 4, 4),
(121, 'test11@gmail.com', '', 'DSTL LAB', 3, 3, 3, 3, 3, 0, NULL, 2, 2, 2, 2, 2),
(122, 'test11@gmail.com', '', 'DSTL LAB', 3, 3, 3, 3, 3, 0, NULL, 4, 4, 4, 4, 4),
(123, 'test11@gmail.com', 'prachichhabra@jssaten.ac.in', 'DSTL', 3, 3, 3, 3, 3, 0, NULL, 4, 4, 4, 4, 4),
(124, 'test11@gmail.com', 'shikhaverma@jssaten.ac.in', 'COA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 'test11@gmail.com', 'seemashukla@jssaten.ac.in', 'DS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, 'test11@gmail.com', 'seemashukla@jssaten.ac.in', 'DS', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(127, 'test11@gmail.com', 'kalika@gmail.com', 'TC', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(128, 'test11@gmail.com', 'prachichhabra@jssaten.ac.in', 'DSTL', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(129, 'test11@gmail.com', 'shikhaverma@jssaten.ac.in', 'COA', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(130, 'test11@gmail.com', 'shilpi@gmail.com', 'CSS', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(131, 'test11@gmail.com', 'kapil@gmail.com', 'ESC', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(132, 'test11@gmail.com', '', 'DS LAB', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(133, 'test11@gmail.com', '', '', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(134, 'test11@gmail.com', '', '', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(135, 'test11@gmail.com', 'seemashukla@jssaten.ac.in', 'Data Structure', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(136, 'test11@gmail.com', 'kalika@gmail.com', 'Technical Communication', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(137, 'test11@gmail.com', 'prachichhabra@jssaten.ac.in', 'Discrete Structure And Th', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(138, 'test11@gmail.com', 'shikhaverma@jssaten.ac.in', 'Computer Organization And', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(139, 'test11@gmail.com', 'shilpi@gmail.com', 'Computer System Security', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(140, 'test11@gmail.com', 'kapil@gmail.com', 'Energy Science Course', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(141, 'test11@gmail.com', '', 'Data Structures Using C L', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(142, 'test11@gmail.com', '', 'Computer Organization LAB', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(143, 'test11@gmail.com', '', 'Discrete Structure And Lo', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(144, 'test11@gmail.com', 'seemashukla@jssaten.ac.in', 'Data Structure', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(145, 'test11@gmail.com', 'kalika@gmail.com', 'Technical Communication', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(146, 'test11@gmail.com', 'prachichhabra@jssaten.ac.in', 'Discrete Structure And Theory Of Logic', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(147, 'test11@gmail.com', 'shikhaverma@jssaten.ac.in', 'Computer Organization And Architecture', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(148, 'test11@gmail.com', 'shilpi@gmail.com', 'Computer System Security', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(149, 'test11@gmail.com', 'kapil@gmail.com', 'Energy Science Course', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(150, 'test11@gmail.com', '', 'Data Structures Using C LAB', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(151, 'test11@gmail.com', '', 'Computer Organization LAB', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(152, 'test11@gmail.com', '', 'Discrete Structure And Logic LAB', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(153, 'test11@gmail.com', 'seemashukla@jssaten.ac.in', 'Data Structure', 3, 3, 2, 3, 3, 0, NULL, 1, 1, 1, 1, 1),
(154, 'test11@gmail.com', 'kalika@gmail.com', 'Technical Communication', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(155, 'qwer@gmail.com', 'shikhaverma@jssaten.ac.in', 'Computer Organization And Architecture', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(156, 'test11@gmail.com', 'seemashukla@jssaten.ac.in', 'Data Structure', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(157, 'test11@gmail.com', 'kalika@gmail.com', 'Technical Communication', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(158, 'test11@gmail.com', 'prachichhabra@jssaten.ac.in', 'Discrete Structure And Theory Of Logic', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(159, 'test11@gmail.com', 'prachichhabra@jssaten.ac.in', 'Discrete Structure And Theory Of Logic', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(160, 'test11@gmail.com', 'prachichhabra@jssaten.ac.in', 'Discrete Structure And Theory Of Logic', 1, 1, 1, 1, 1, 0, NULL, 1, 1, 1, 1, 1),
(161, 'test11@gmail.com', '', '', 1, 1, 1, 1, 1, 0, NULL, 1, 4, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `say`
--

CREATE TABLE `say` (
  `a` varchar(2000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `say`
--

INSERT INTO `say` (`a`) VALUES
('??-?: Describe how arrays, linked lists, stacks, queues, trees, and graphs are represented in memory, used by the algorithms and their common applications.\r\n??-2: Discuss the computational efficiency of the sorting and searching algorithms.\r\n??-3: Implementation of Trees and Graphs and perform various operations on these data structure.\r\n??-4: Understanding the concept of recursion, application of recursion and its implementation and removal of recursion.\r\n??-5: Identify the alternative implementations of data structures with respect to its performance to solve a real world problem.');

-- --------------------------------------------------------

--
-- Table structure for table `selectedsubjects`
--

CREATE TABLE `selectedsubjects` (
  `sno` int(11) NOT NULL,
  `usersemail` varchar(255) CHARACTER SET latin1 NOT NULL,
  `facultyemail` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `subjectcode` varchar(255) CHARACTER SET latin1 NOT NULL,
  `subjectname` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selectedsubjects`
--

INSERT INTO `selectedsubjects` (`sno`, `usersemail`, `facultyemail`, `subjectcode`, `subjectname`) VALUES
(1, 'test111@gmail.com', '', 'KAS105', 'Soft Skill'),
(2, 'test111@gmail.com', '', 'KAS105', 'Soft Skill'),
(3, 'test111@gmail.com', '', 'KAS105', 'Soft Skill'),
(4, 'test111@gmail.com', '', 'BAS101', 'Engineering Physics'),
(5, 'test111@gmail.com', 'zkansari@gmail.com', 'BAS103', 'Engineering Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sem_type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `facultyemail` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_`, `sem_type`, `facultyemail`) VALUES
('2022-2023', 'ODD', 'test2@gmail.com'),
('2022-2023', 'ODD', 'Vkhemcandani@jssaten.ac.in'),
('2022-2023', 'ODD', 'seemashukla@jssaten.ac.in'),
('2022-2023', 'ODD', 'jyotig@jssaten.ac.in'),
('2022-2023', 'ODD', 'dhirajpandey@jssaten.ac.in'),
('2022-2023', 'ODD', 'meenaarora@jssaten.ac.in'),
('2022-2023', 'ODD', 'gunjanansari@jssaten.ac.in'),
('2022-2023', 'ODD', 'birendraverma@jssaten.ac.in'),
('2022-2023', 'ODD', 'nehagupta@gmail.com'),
('2022-2023', 'ODD', 'prachichhabra@jssaten.ac.in'),
('2022-2023', 'ODD', 'Manojkumar@jssaten.ac.in'),
('2022-2023', 'ODD', 'sukhendrasingh@jssaten.ac.in'),
('2022-2023', 'ODD', 'shikhaverma@jssaten.ac.in'),
('2022-2023', 'ODD', 'meghajain@jssaten.ac.in'),
('2022-2023', 'ODD', 'aparnashrivastava@jssaten.ac.in'),
('2022-2023', 'ODD', 'kapil@gmail.com'),
('2022-2023', 'ODD', 'kalika@gmail.com'),
('2022-2023', 'ODD', 'shilpi@gmail.com'),
('2022-2023', 'ODD', 'rudresha@gmail.com'),
('2022-2023', 'ODD', 'pivali@gmail.com'),
('2022-2023', 'ODD', 'ujjwala@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subjectalloted`
--

CREATE TABLE `subjectalloted` (
  `sno` int(11) NOT NULL,
  `facultyemail` varchar(255) CHARACTER SET latin1 NOT NULL,
  `year` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `section` varchar(255) CHARACTER SET latin1 NOT NULL,
  `suballoted` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjectalloted`
--

INSERT INTO `subjectalloted` (`sno`, `facultyemail`, `year`, `semester`, `section`, `suballoted`) VALUES
(1, 'kirti@gmail.com', 1, 2, 'IT-1', 'BAS102'),
(2, 'zkansari@gmail.com', 1, 2, 'IT-1', 'BAS103'),
(3, 'amitkumar@gmail.com', 1, 2, 'IT-1', 'BBC101');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `subjectcode` varchar(55) CHARACTER SET latin1 NOT NULL,
  `subject` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `year`, `semester`, `subjectcode`, `subject`) VALUES
(1, 2, 3, 'KCS-301', 'Data Structure'),
(2, 2, 3, 'KAS-301', 'Technical Communication'),
(7, 2, 3, 'KCS-303', 'Discrete Structure And Theory Of Logic'),
(8, 2, 3, 'KCS-302', 'Computer Organization And Architecture'),
(9, 2, 3, 'KNC-301', 'Computer System Security'),
(10, 2, 3, 'KOE-033', 'Energy Science Course'),
(11, 2, 3, 'KCS-351', 'Data Structures Using C LAB'),
(12, 2, 3, 'KCS-352', 'Computer Organization LAB'),
(13, 2, 3, 'KCS-353', 'Discrete Structure And Logic LAB'),
(14, 1, 2, 'BAS101', 'Engineering Physics'),
(15, 1, 2, 'BAS103', 'Engineering Mathematics I'),
(16, 1, 2, 'BEE101', 'Fundamentals of Electrical Engineering'),
(17, 1, 2, 'BME101', 'Fundamentals of Mechanical Engineering'),
(18, 1, 2, 'KAS105', 'Soft Skill I'),
(19, 1, 2, 'BAS151', 'Engineering Physics Lab'),
(20, 1, 2, 'BAS155', 'English Language Lab'),
(21, 1, 2, 'BEE151', 'Basic Electrical Engineering Lab'),
(22, 1, 2, 'BCE151', 'Engineering Graphics & Design Lab'),
(23, 1, 2, 'BAS102', 'Engineering Chemistry'),
(24, 1, 2, 'BBC101', 'Fundamental Of Electronics Engineering'),
(25, 1, 2, 'BCS101', 'Programming For Problem Solving'),
(26, 1, 2, 'BAS104', 'Environment and Ecology'),
(27, 1, 2, 'BAS152', 'Engineering Chemistry Lab'),
(28, 1, 2, 'BCS151', 'Programming For Problem Solving Lab'),
(29, 1, 2, 'BBC151', 'Fundamental Of Electronics Engineering Lab'),
(30, 1, 2, 'BWS151', 'Workshop Practice Lab');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `section` varchar(11) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `urollno` bigint(13) DEFAULT NULL,
  `addno` varchar(9) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `feedback` int(11) NOT NULL DEFAULT 0,
  `activationcode` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `year`, `semester`, `section`, `fname`, `lname`, `email`, `urollno`, `addno`, `password`, `contactno`, `img`, `posting_date`, `feedback`, `activationcode`, `status`) VALUES
(13, NULL, NULL, NULL, 'Anuj', 'Kumar', 'test1@gmail.com', 2147483647, '21DLIT001', 'Test@123', '9876543210', 'IMG_20210512_143300__01 (1).jpg', '2021-08-09 18:30:00', 0, '', 0),
(17, 2, 3, 'IT-1', 'Yash', 'Gupta', 'test11@gmail.com', 2100910139009, '21DLIT004', 'Test@12345', '1234567890', 'DocScanner 9 Dec 2022 9-07 pm_page-0001.jpg', '2022-09-02 06:51:27', 1, '', 1),
(18, 1, 1, 'IT-1', 'Yashi', 'Gupta', 'yashgupta09111@gmail.com', 2100910139012, '21DLIT011', 'Test@12345', '1230456789', '20211210_231329.jpg', '2022-09-02 07:06:09', 0, '', 0),
(21, 2, 3, 'IT-1', 'Nimesh', 'Dixit', 'nimesh.dixit.26@gmail.com', 2100910319007, '21DLEC001', 'Test@12345', '6265167913', 'thumb (1).jpg', '2022-09-18 13:45:07', 0, '', 0),
(22, 2, 3, 'IT-2', 'Aman', 'Mishra', 'rockstaramanm@gmail.com', 2000910100015, '20CS110.', 'Test@12345', '7513259375', NULL, '2022-09-18 13:46:40', 0, '', 0),
(23, 3, 5, 'IT-1', 'Nimesh', 'Dixit', 'qwer@gmail.com', 2100910139089, '21IT058.', 'Test@12345', '1234567890', NULL, '2022-12-07 12:44:11', 0, '', 0),
(34, 2, 3, 'IT-1', 'Pranav', 'Agrawal', 'yashgupta0911@gmail.com', 2100910139091, '21DLIT091', 'Test@12345', '7905047835', NULL, '2022-12-15 11:42:16', 0, '2e666adb87b8083c7eec77be0ae2f547', 1),
(35, 1, 2, 'IT-1', 'Khyati', 'Srivastava', 'test111@gmail.com', 2100910139052, '21DLIT052', 'Test@12345', '0123456789', NULL, '2023-02-16 16:51:40', 0, '53bae7f1eb0e12db2f351f13d1da4d02', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseoutcomes`
--
ALTER TABLE `courseoutcomes`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respone`
--
ALTER TABLE `respone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selectedsubjects`
--
ALTER TABLE `selectedsubjects`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `subjectalloted`
--
ALTER TABLE `subjectalloted`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `urollno` (`urollno`),
  ADD UNIQUE KEY `addno` (`addno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courseoutcomes`
--
ALTER TABLE `courseoutcomes`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `respone`
--
ALTER TABLE `respone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `selectedsubjects`
--
ALTER TABLE `selectedsubjects`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjectalloted`
--
ALTER TABLE `subjectalloted`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
