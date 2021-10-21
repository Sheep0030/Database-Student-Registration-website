-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 02:57 PM
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
-- Database: `students_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_data`
--

CREATE TABLE `address_data` (
  `Address_Number` varchar(32) NOT NULL,
  `Owner_Name` varchar(32) DEFAULT NULL,
  `Owner_Contact` varchar(32) DEFAULT NULL,
  `Sub_dist` varchar(32) NOT NULL,
  `Province` varchar(32) NOT NULL,
  `City` varchar(32) NOT NULL,
  `Postal_Code` int(5) NOT NULL,
  `Street` varchar(32) NOT NULL,
  `Building` varchar(32) DEFAULT NULL,
  `Other` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address_data`
--

INSERT INTO `address_data` (`Address_Number`, `Owner_Name`, `Owner_Contact`, `Sub_dist`, `Province`, `City`, `Postal_Code`, `Street`, `Building`, `Other`) VALUES
('1034', 'Thomas Yellowsnow', '034-256-3412', 'Bang Rak', 'Bangkok', 'Bangkok', 10150, 'Krung Thon Buri', 'MahaNakhon', 'First Tower,Room 34'),
('104/345', 'Lucus Shower', '071-354-6976', 'Pathum Wan', 'Bangkok', 'Bangkok', 10600, 'Charoen Krung', 'Parque', '-'),
('110/38', '-', '-', 'Nonthaburi', 'Nonthaburi', 'Nonthaburi', 11000, 'Ratanathibes Saimar Mueang', '-', '-'),
('122/54', 'Mac Throat', '031-634-3746', 'Bang Kapi', 'Bangkok', 'Bangkok', 10100, 'Ngam Wong Wan', '-', '-'),
('123/2', '-', '-', 'Ban mod', 'Bangkok', 'Bangkok', 10140, 'Pachautid', '-', '-'),
('1234', 'Sean Brain', '079-345-6776', 'Sai Ma', 'Nonthaburi', 'Nonthaburi', 10180, 'Krung Thep', '-', '-'),
('17/10', '-', '-', 'Bangkok', 'Bangkok', 'Bangkok', 10250, 'Pattanakarn Road', 'Vivid Tower Condo', 'First Tower,Room 10'),
('17/23', '-', '', 'Bangkok', 'Bangkok', 'Bangkok', 10250, 'Pattanakarn Road', 'Vivid Tower Condo', 'First Tower,Room 23'),
('17/50', '-', '-', 'Bangkok', 'Bangkok', 'Bangkok', 10250, 'Pattanakarn Road', 'Vivid Tower Condo', 'First Tower,Room 50'),
('2219/12', 'But Niratpattanasai', '-', 'Bangkapi', 'Bangkok', 'Bangkapi', 10310, 'New Phetburi Bangkapi Huai Khwan', '-', '-'),
('231/2', 'Porntip Prapanpoj', '-', 'Kanchanaburi', 'Kanchanaburi', 'Kanchanaburi', 71000, 'Baan Nua', 'Muang Karnchanaburi', '-'),
('34/54', '-', '-', 'Nonthaburi', 'Nonthaburi', 'Nonthaburi', 10210, 'Gp 6 Soi Chinkate Ngarmvongvan', '-', '-'),
('3459', 'Jame MonHunt', '046-431-3413', 'Laem Fa Pha', 'Samutprakarn', 'Samutprakarn', 10400, 'Sukhumvit', '-', '-'),
('3541', 'Sasha Lovecomputer', '041-349-2879', 'Phra Nakhon', 'Bangkok', 'Bangkok', 10130, 'Kanlapaphruek', 'The Unique', 'Third Tower,Room 41'),
('402/6', 'Sinn Montri', '', 'Bangkok', 'Bangkok', 'Bangkok', 10200, 'Prachathipatai Road Baanpanthom', '3', '-'),
('4587', 'Steeve Minecraft', '013-347-3749', 'Khao Din', 'Krabi', 'Krabi', 10700, 'Khiao Khai Ka', '-', '-'),
('50/7', '-', '-', 'Bangkok', 'Bangkok', 'Bangkok', 10700, 'Boromrajchonnee', '-', '-'),
('54', '-', '-', 'Chumphon', ' Chumphon', 'Pathio', 86230, 'Thung Wua laen Beach Road', '-', '-'),
('571/84', 'Clara Peet', '078-546-7989', 'Bang Rak', 'Bangkok', 'Bangkok', 10160, 'Khao San', 'The Excel Hideaway Ratchada', '-'),
('9845', 'Benjamin Sheep', '098-786-6433', 'Maha Chai', 'SamutSakhorn', 'SamutSakhorn', 10200, 'Kanchanaphisek', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_ID` int(4) NOT NULL,
  `Course_ID` int(4) NOT NULL,
  `Teacher_ID` int(4) NOT NULL,
  `Class_Section` int(2) NOT NULL,
  `Class_Status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Class_ID`, `Course_ID`, `Teacher_ID`, `Class_Section`, `Class_Status`) VALUES
(75, 5632, 3422, 54, 'Open'),
(1000, 1231, 8001, 31, 'Open'),
(1001, 3201, 1631, 21, 'Full'),
(1002, 9101, 7001, 11, 'Open'),
(1003, 5501, 4001, 11, 'Closed'),
(1004, 7106, 3061, 11, 'Full'),
(1112, 5667, 3241, 46, 'Full'),
(1232, 2344, 7001, 21, 'Open'),
(2000, 1231, 1001, 32, 'Open'),
(2001, 3201, 3001, 22, 'Full'),
(2093, 3421, 3245, 25, 'Closed'),
(2310, 5673, 2003, 78, 'Closed'),
(3001, 1401, 9001, 33, 'Open'),
(3003, 3213, 1093, 23, 'Full'),
(3231, 4522, 7321, 11, 'Full'),
(3234, 2341, 1234, 1, 'Open'),
(4001, 8101, 2001, 14, 'Open'),
(4321, 3456, 7389, 21, 'Open'),
(4443, 8765, 7389, 98, 'Open'),
(5432, 5543, 9002, 13, 'Closed');

-- --------------------------------------------------------

--
-- Table structure for table `class_gpa_data`
--

CREATE TABLE `class_gpa_data` (
  `Subject_Name` varchar(64) NOT NULL,
  `Students_ID` varchar(10) NOT NULL,
  `Semester` varchar(32) NOT NULL,
  `GPA` float NOT NULL,
  `Comment` varchar(64) DEFAULT NULL,
  `Credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_gpa_data`
--

INSERT INTO `class_gpa_data` (`Subject_Name`, `Students_ID`, `Semester`, `GPA`, `Comment`, `Credit`) VALUES
('Chemistry', '6101003400', '2/2021', 3.8, 'Sleepy but still got good grade', 4),
('Chemistry', '6101003405', '2/2019', 2.76, 'Good student', 4),
('Digital Culture', '6101003406', '1/2017', 4, 'Professional in this subject', 1),
('Digital Culture', '6204003404', '2/2018', 4, 'Professional in this subject', 1),
('English', '6101003401', '1/2021', 3.87, 'Sleepy but still got good grade', 3),
('English', '6102003402', '1/2021', 3.45, 'Good student', 3),
('English', '6301003402', '2/2021', 3.45, 'Good student', 3),
('Geochemistry', '6101003404', '1/2020', 3.21, 'Good student', 1),
('German', '6204003404', '1/2019', 2.88, 'Good student', 2),
('German', '6204003405', '1/2018', 4, 'Professional in this subject', 2),
('History', '6201003401', '2/2021', 3.15, 'Good student', 2),
('History', '6203003402', '1/2021', 2.68, 'Not pay attention in class', 2),
('History', '6204003403', '1/2021', 2.98, 'Good student', 2),
('Language Arts', '6001003402', '1/2016', 2.45, 'Not pay attention in class', 2),
('Language Arts', '6001003403', '1/2018', 3.29, 'Good student', 2),
('Math', '6101003401', '2/2021', 4, 'Professional in this subject', 4),
('Math', '6102003403', '1/2021', 3.55, 'Sleepy but still got good grade', 4),
('Math', '6207050348', '1/2020', 2.45, 'Not pay attention in class', 4),
('Math', '6301003401', '1/2021', 3.85, 'Sleepy but still got good grade', 4),
('Math', '6301003401', '2/2021', 2.65, 'Not pay attention in class', 4),
('Math', '6301003403', '1/2021', 4, 'Professional in this subject', 4),
('Music', '6001003403', '1/2020', 3.1, 'Good student', 1),
('Music', '6001003406', '1/2019', 2.99, 'Not pay attention in class', 1),
('Photography', '6101003400', '2/2019', 3.23, 'Good student', 3),
('Photography', '6101003404', '1/2021', 4, 'Professional in this subject', 3),
('Public Law', '6001003406', '2/2020', 3.05, 'Good student', 2),
('Public Law', '6101003405', '1/2018', 3.02, 'Good student', 2),
('Robotics', '6001003402', '2/2019', 3.78, 'Sleepy but still got good grade', 1),
('Robotics', '6204003406', '2/2020', 2.76, 'Not pay attention in class', 1),
('Science', '6102003403', '2/2021', 3.49, 'Good student', 4),
('Science', '6201003401', '1/2021', 3.39, 'Good student', 4),
('Science', '6204003403', '2/2021', 3.64, 'Good student', 4),
('Social', '6203003402', '2/2021', 3.65, 'Sleepy but still got good grade', 2),
('Statistics', '6204003405', '2/2021', 3.67, 'Sleepy but still got good grade', 3),
('Statistics', '6204003406', '1/2020', 3.21, 'Good student', 3),
('Thai', '6102003402', '2/2021', 4, 'Professional in this subject', 1),
('Thai', '6301003402', '1/2021', 4, 'Professional in this subject', 1),
('Thai', '6301003403', '2/2021', 3.67, 'Sleepy but still got good grade', 1),
('Zoology', '6001003402', '2/2017', 3.78, 'Sleepy but still got good grade', 3),
('Zoology', '6101003406', '1/2018', 2.76, 'Good student', 3);

-- --------------------------------------------------------

--
-- Table structure for table `class_register`
--

CREATE TABLE `class_register` (
  `Register_ID` int(10) NOT NULL,
  `Students_ID` varchar(10) NOT NULL,
  `Class_ID` int(4) NOT NULL,
  `Register_Date` date NOT NULL,
  `Register_Status` varchar(32) NOT NULL,
  `Semester_R` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_register`
--

INSERT INTO `class_register` (`Register_ID`, `Students_ID`, `Class_ID`, `Register_Date`, `Register_Status`, `Semester_R`) VALUES
(1, '6207050348', 3234, '2020-06-03', 'Accepted', '1/2021'),
(2, '6301003401', 1000, '2020-01-13', 'Accepted', '2/2021'),
(3, '6301003402', 2000, '2020-01-13', 'Accepted', '1/2019'),
(4, '6301003403', 1001, '2020-01-25', 'Denied', '2/2019'),
(5, '6201003401', 2001, '2019-01-13', 'Accepted', '1/2018'),
(6, '6203003402', 1002, '2019-03-25', 'Accepted', '1/2018'),
(7, '6204003403', 1003, '2019-04-25', 'Denied', '2/2018'),
(8, '6101003401', 3001, '2018-01-30', 'Accepted', '1/2019'),
(9, '6102003402', 4001, '2018-02-13', 'Accepted', '2/2019'),
(10, '6102003403', 1004, '2018-02-25', 'Accepted', '1/2021'),
(12, '6001003402', 3234, '2018-06-03', 'Accepted', '2/2018'),
(13, '6001003403', 2001, '2020-02-09', 'Denied', '1/2020'),
(14, '6001003406', 3234, '2019-11-21', 'Accepted', '2/2019'),
(15, '6101003400', 2093, '2018-06-03', 'Denied', '2/2018'),
(16, '6101003404', 3231, '2019-08-12', 'Denied', '1/2019'),
(17, '6101003405', 3234, '2019-06-11', 'Accepted', '2/2016'),
(18, '6101003406', 3234, '2018-01-31', 'Accepted', '1/2018'),
(19, '6204003404', 5432, '2020-03-03', 'Denied', '1/2020'),
(20, '6204003405', 3234, '2020-02-06', 'Accepted', '1/2020'),
(21, '6204003406', 3003, '2019-01-03', 'Denied', '1/2019');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_ID` int(4) NOT NULL,
  `Department_ID` int(3) NOT NULL,
  `Course_Name` varchar(64) NOT NULL,
  `Course_Description` varchar(1024) DEFAULT NULL,
  `Credits` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_ID`, `Department_ID`, `Course_Name`, `Course_Description`, `Credits`) VALUES
(1231, 103, 'Database Systems', 'Covered topics: Database concepts, SQL databases, NOSQL databases.', 3),
(1401, 202, 'Engineering', 'Senior Project Apply advanced knowledge to create graduation project.', 4),
(2341, 100, 'Data Models', '-', 2),
(2344, 701, 'Theory of technology', 'World technology history', 2),
(3201, 302, 'Calculus II', 'In this course, we will cover the topic of advanced integral techniques, ...', 2),
(3213, 111, 'History', 'Covered topics: History of the world', 1),
(3421, 102, 'Biology I', 'Covered topics: Animal, plant and world', 3),
(3456, 201, 'Mechanical', 'Machine in factory', 3),
(4522, 444, 'Theory of dance', 'Basic of dance', 4),
(5501, 901, 'Business Analysis', 'Lets explore real-world business models and become rich together.', 2),
(5543, 301, 'Law and Crime', 'Covered topics: Law in daily life', 3),
(5632, 411, 'German Language', '-', 2),
(5667, 121, 'History of music', '-', 2),
(5673, 902, 'How to use account Program', '-', 1),
(7106, 801, 'Japanese Language 1', 'Learn basic Japanese language and common Japanese culture.', 1),
(8101, 401, 'Creative Thinking', 'Unlock your limit and let your imagination guide you.', 3),
(8765, 333, 'How to teach', 'Project teach people', 1),
(9101, 202, 'Physical Educations', 'Sports play and physical health improvements.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_support`
--

CREATE TABLE `customer_support` (
  `Support_ID` int(10) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Type` varchar(32) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Department_ID` int(3) NOT NULL,
  `Details` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_support`
--

INSERT INTO `customer_support` (`Support_ID`, `ID`, `Name`, `Type`, `Email`, `Department_ID`, `Details`) VALUES
(1, '6207050348', 'Bow', 'Student', 'Bow@email.com', 100, 'Want to drop'),
(2, '6204003403', 'Wagee', 'Student', 'zorroar@email.com', 103, 'Want to change class'),
(3, '1001', 'Nongsand Shower', 'Teacher', 'Nongsand@email.com', 103, 'Want to add more class'),
(4, '8001', 'Thanawat KungKai', 'Teacher', 'Thanawat@email.com', 801, 'Computer in 301 room is not working'),
(5, '3', 'Annop', 'Guardian', 'annop2537@coolmail.com', 103, 'Wrong lastname'),
(6, '10', 'Maneerat', 'Guardian', 'eer43@gmail.com', 303, 'Wrong name'),
(7, '6203003402', 'Kantawit', 'Student', 'kankan@email.com', 401, 'Want to drop'),
(8, '6301003401', 'Pong', 'Student', 'pongbanana@email.com', 103, 'Wrong firstname'),
(9, '1234', 'SheepBanana', 'Teacher', 'erwd@email.com', 100, 'Want to delete my course'),
(10, '6102003403', 'Aum', 'Student', 'mineaum@email.com', 303, 'Want to chang class');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_ID` int(3) NOT NULL,
  `Department_Name` varchar(64) NOT NULL,
  `Department_Manager_Name` varchar(32) NOT NULL,
  `Department_Manager_Cell_Number` varchar(32) NOT NULL,
  `Department_Manager_Email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_ID`, `Department_Name`, `Department_Manager_Name`, `Department_Manager_Cell_Number`, `Department_Manager_Email`) VALUES
(100, 'Computer Science', 'Sheepo Tomoki', '098-231-1111', 'CPsssE@email.com'),
(101, 'Department of Chemical Engineering', 'Nattawut Damrongsak', '02-362-4870', 'nattawut.dam@staff.uni.com'),
(102, 'Chemistry and Biochemistry', 'Tommie Adams', '074-231-5673', 'Che_Bio@email.com'),
(103, 'Department of Computer Engineering', 'Nongyao Jampahom', '02-470-9388', 'nongyao.jam@staff.uni.com'),
(111, 'Department of History', 'Shelley Cook', '02-344-6778', 'History@email.com'),
(121, 'Department of Music', 'Vivien Blackmore', '564-3456-4566', 'Music@email.com'),
(201, 'Department of Mechanical Engineering', 'Kirby Delacruz', '087-345-1231', 'M_Eng@email.com'),
(202, 'Department of Civil Technology Education', 'Saksirin Charenwong', '02-162-4467', 'saksirin.charen@staff.uni.com'),
(212, 'Department of Psychology', 'Yanis Rhodes', '081-342-5678', 'Psy@email.com'),
(301, 'Crime, Law and Society Program', 'Karol Li', '453-234-3245', 'CLSP@email.com'),
(302, 'Department of Mathematics', 'Kamnuang Jodrakon', '02-718-2214', 'kamnuang.jod@staff.uni.com'),
(303, 'Department of Microbiology', 'Thanadon Mungman', '02-286-7505', 'thanadon.mung@staff.uni.com'),
(333, 'Department of Teacher Education', 'Benas Johnston', '096-543-3451', 'Teach@email.com'),
(401, 'School of Architecture and Design', 'Johnson Ramirez', '084-135-6532', 'johnson.r@staff.uni.com'),
(411, 'Department of German and Russian Studies', 'Mira Philip', '086-345-2456', 'German@email.com'),
(444, 'Department of Theatre and Dance', 'Fathima Salazar', '043-456-2222', 'TandD@email.com'),
(701, 'School of Information Technology', 'Law D. Roger', '093-051-8296', 'law.roger@staff.uni.com'),
(801, 'School of Liberal Arts', 'Min Min Tien', '090-230-6123', 'minmin.tien@staff.uni.com'),
(901, 'Faculty of Economics', 'Maekmai Chaikhong', '02-741-3600', 'maekmai.chai@staff.uni.com'),
(902, 'Accounting', 'Gracie-Mae Hobbs', '032-324-3213', 'Account@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `guardian_data`
--

CREATE TABLE `guardian_data` (
  `Guardian_ID` int(5) NOT NULL,
  `Address_Number` varchar(35) NOT NULL,
  `Guardian_FirstName` varchar(32) NOT NULL,
  `Guardian_MiddleName` varchar(32) DEFAULT NULL,
  `Guardian_LastName` varchar(32) NOT NULL,
  `Cell_Number` varchar(32) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Gender` varchar(32) NOT NULL,
  `BirthDate` date NOT NULL,
  `Register_Date` date NOT NULL,
  `Password_G` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guardian_data`
--

INSERT INTO `guardian_data` (`Guardian_ID`, `Address_Number`, `Guardian_FirstName`, `Guardian_MiddleName`, `Guardian_LastName`, `Cell_Number`, `Email`, `Gender`, `BirthDate`, `Register_Date`, `Password_G`) VALUES
(1, '123/2', 'Andwn', '-', 'Tomoya', '098-212-2312', 'DFEA@email.com', 'Female', '1987-06-12', '2021-06-03', 'bbbbbbbb1'),
(2, '1034', 'Somchai', '-', 'Tamsangob', '02-467-5599', 'derf@email.com', 'Male', '1964-04-02', '2021-04-06', 'bbbbbbbb2'),
(3, '3541', 'Annop', '-', 'Krungsawat', '082-463-2537', 'annop2537@coolmail.com', 'Male', '1979-08-06', '2021-03-14', 'bbbbbbbb3'),
(4, '1234', 'Pongpat', '-', 'Udonanusorn', '094-014-4326', 'pongpat.karnchang@yeehaw.com', 'Male', '1982-03-18', '2021-06-24', 'bbbbbbbb4'),
(5, '571/84', 'Mary', 'Ann', 'Clovers', '096-859-1045', 'mary.c@zmail.com', 'Female', '1976-01-23', '2021-06-24', 'bbbbbbbb5'),
(6, '122/54', 'Natcha', '-', 'Kasemsaan', '081-333-8913', 'eerer@email.com', 'Female', '1971-07-29', '2019-06-18', 'bbbbbbbb6'),
(7, '3459', 'Fahsai', '-', 'Somboongaya', '092-502-4140', 'fahsai.ptd@zmail.com', 'Male', '1986-01-09', '2018-06-16', 'bbbbbbbb7'),
(8, '104/345', 'Jonathan', '-', 'Joesons', '095-941-7394', 'jojoeadventure@coolmail.com', 'Male', '1980-04-04', '2017-06-19', 'bbbbbbbb8'),
(9, '9845', 'Thamma', '-', 'Gaipob', '085-111-2036', 'sdccc@email.com', 'Male', '1975-12-31', '2019-06-17', 'bbbbbbbb9'),
(10, '4587', 'Maneerat', '-', 'Arunbergfah', '091-847-6482', 'eer43@gmail.com', 'Female', '1968-05-17', '2018-06-16', 'bbbbbbbb10'),
(11, '17/10', 'Bianka', '-', 'Mackay', '453-567-2311', 'Mackay@email.com', 'Female', '1976-02-12', '2021-06-03', 'bbbbbbbb11'),
(12, '17/23', 'Gemma', 'Lee', 'Lozano', '043-234-7545', 'Gemma@email.com', 'Female', '1972-12-12', '2021-06-03', 'bbbbbbbb12'),
(13, '17/50', 'Elsie', '-', 'Broughton', '342-345-4534', 'Elsie@email.com', 'Female', '1971-09-15', '2021-06-03', 'bbbbbbbb13'),
(14, '2219/12', 'Cheyanne', 'Jr', 'Paterson', '043-234-2345', 'Cheyanne@email.com', 'Female', '1975-12-21', '2021-06-03', 'bbbbbbbb14'),
(15, '231/2', 'Jonathon', '-', 'Oconnell', '099-342-3456', 'Jonathon@email.com', 'Male', '1971-11-11', '2021-06-03', 'bbbbbbbb15'),
(16, '34/54', 'Theon', '-', 'Oliver', '090-332-6543', 'Theon@email.com', 'Male', '1974-11-12', '2021-06-03', 'bbbbbbbb16'),
(17, '50/7', 'Huzaifah', 'Chan', 'Power', '056-234-5435', 'Chan@email.com', 'Male', '1973-01-23', '2021-06-03', 'bbbbbbbb17'),
(18, '54', 'Simone', '-', 'Salgado', '065-543-2341', 'Salgado@email.com', 'Male', '1971-04-23', '2021-06-03', 'bbbbbbbb18'),
(19, '50/7', 'Rohaan', '-', 'Montgomery', '011-434-5567', 'Montgomery@email.com', 'Male', '1973-06-10', '2021-06-03', 'bbbbbbbb19'),
(20, '110/38', 'Ameen', 'Kim', 'Willis', '076-563-2345', 'Kim@email.com', 'Male', '1975-03-21', '2021-06-03', 'bbbbbbbb20');

-- --------------------------------------------------------

--
-- Table structure for table `payment_data`
--

CREATE TABLE `payment_data` (
  `Payment_ID` int(11) NOT NULL,
  `Register_ID` int(10) NOT NULL,
  `Payment_Type` varchar(32) NOT NULL,
  `Payer_Name` varchar(32) NOT NULL,
  `Payment_Status` varchar(32) NOT NULL,
  `Due_Date` date NOT NULL,
  `Payment_Date` date NOT NULL,
  `Amount` float NOT NULL,
  `Scholarship_Type` varchar(64) NOT NULL,
  `Scholarship_Amount` float NOT NULL,
  `Bill_ID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_data`
--

INSERT INTO `payment_data` (`Payment_ID`, `Register_ID`, `Payment_Type`, `Payer_Name`, `Payment_Status`, `Due_Date`, `Payment_Date`, `Amount`, `Scholarship_Type`, `Scholarship_Amount`, `Bill_ID`) VALUES
(1, 1, 'Online Payment', 'Soraya', 'Success', '2020-06-05', '2020-02-05', 22000, 'Transfer', 3000, 465738234),
(2, 2, 'Cash', 'Pong Yellow Banana', 'Success', '2020-01-31', '2020-01-16', 50000, 'Full tuition', 200000, 633101123),
(3, 3, 'Online transaction', 'Annop', 'Failed', '2020-01-31', '0000-00-00', 50000, 'Full tuition', 200000, 633102234),
(4, 4, 'Online transaction', 'Pongpat', 'Pending', '2020-01-31', '0000-00-00', 50000, 'Community Service', 500000, 633103345),
(5, 5, 'Online transaction', 'Mary', 'Pending', '2019-01-31', '0000-00-00', 75000, 'Transfer', 550000, 623101456),
(6, 6, 'Cash', 'Kantawit Sore Throat', 'Success', '2019-03-31', '0000-00-00', 50000, 'Full tuition', 200000, 623102567),
(7, 7, 'Online transaction', 'Fahsai', 'Pending', '2021-04-11', '0000-00-00', 75000, 'Prestigious', 350000, 623103678),
(8, 8, 'Online transaction', 'Jonathan', 'Failed', '2018-01-31', '0000-00-00', 75000, 'Transfer', 550000, 613101789),
(9, 9, 'Cash', 'Fon Scary Sheep', 'Success', '0000-00-00', '2018-02-19', 75000, 'Prestigious', 350000, 613102890),
(10, 10, 'Online transaction', 'Maneerat', 'Success', '2021-04-06', '2021-05-03', 50000, 'Community Service', 500000, 613103901);

-- --------------------------------------------------------

--
-- Table structure for table `students_data`
--

CREATE TABLE `students_data` (
  `Students_ID` varchar(10) NOT NULL,
  `Address_Number` varchar(35) NOT NULL,
  `Department_ID` int(3) NOT NULL,
  `Students_FirstName` varchar(32) NOT NULL,
  `Students_MiddleName` varchar(32) DEFAULT NULL,
  `Students_LastName` varchar(32) NOT NULL,
  `Cell_Number` varchar(32) NOT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `Gender` varchar(32) NOT NULL,
  `BirthDate` date NOT NULL,
  `Register_Date` date NOT NULL,
  `GPAX` float NOT NULL,
  `HighSchool_Name` varchar(64) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_data`
--

INSERT INTO `students_data` (`Students_ID`, `Address_Number`, `Department_ID`, `Students_FirstName`, `Students_MiddleName`, `Students_LastName`, `Cell_Number`, `Email`, `Gender`, `BirthDate`, `Register_Date`, `GPAX`, `HighSchool_Name`, `Password`, `Year`) VALUES
('6001003402', '122/54', 902, 'Soraya', '-', 'Cline', '436-654-4563', 'Soraya@email.com', 'Female', '2001-09-30', '2021-01-04', 3.42, 'SheepZoo', 'Sorayagoodbye', '1'),
('6001003403', '17/10', 444, 'Chante', '-', 'Patrick', '456-435-2342', 'Chante@email.com', 'Female', '2001-12-31', '2021-01-02', 3.09, 'HowtoGentleman', 'Chante4987', '1'),
('6001003406', '17/23', 411, 'Ammara', '-', 'Jackson', '032-434-3247', 'Ammara@email.com', 'Female', '1999-07-03', '2018-09-20', 4, 'SaraLopFon', 'Ammaraasd212', '4'),
('6101003400', '34/54', 201, 'Arianne', '-', 'Sullivan', '035-342-1234', 'Arianne@email.com', 'Male', '2001-10-03', '2020-01-11', 3.45, 'SuanFruit', 'Arianne456', '2'),
('6101003401', '104/345', 103, 'Sand', '-', 'Shower', '063-314-4315', 'sandza@email.com', 'Male', '1999-01-18', '2018-01-28', 3.57, 'LionKing', 'nitisand1150', '4'),
('6101003404', '231/2', 212, 'Ronald', '-', 'Levy', '053-234-1266', 'Ronald@email.com', 'Male', '2000-12-12', '2019-08-21', 2.89, 'SaraLopFon', 'Ronaldaddddd', '3'),
('6101003405', '2219/12', 301, 'Ceri', '-', 'Mcclure', '047-654-3456', 'Ceri@email.com', 'Female', '2000-01-01', '2019-11-12', 2.99, 'SaraPatKongKuki', 'Cerieieiei', '3'),
('6101003406', '17/50', 333, 'Joss', '-', 'Gallagher', '023-456-7543', 'Joss@email.com', 'Female', '1999-11-03', '2018-01-01', 3, 'Assumation', 'Joss343241', '4'),
('6102003402', '9845', 202, 'Fon', 'Scary', 'Sheep', '046-674-7664', 'sheep@email.com', 'Female', '1999-04-22', '2018-02-11', 3.75, 'SheepZoo', 'sheepfon1001', '4'),
('6102003403', '4587', 303, 'Aum', 'Jr.', 'Minecraft', '067-431-3563', 'mineaum@email.com', 'Female', '1999-08-16', '2018-02-13', 3.49, 'HowtoGentleman', 'aumman007', '4'),
('6201003401', '571/84', 701, 'Mighty', '-', 'Peet', '065-679-4621', 'strongpeet@email.com', 'Male', '2000-07-03', '2019-01-07', 3.5, 'SuanFruit', 'peet556789', '3'),
('6203003402', '122/54', 401, 'Kantawit', 'Sore', 'Throat', '043-641-6749', 'kankan@email.com', 'Male', '2000-02-14', '2019-03-21', 3.45, 'SaraPatKongKuki', 'kantawit2543', '3'),
('6204003403', '3459', 103, 'Wagee', 'Love', 'MonHunt', '057-931-3156', 'zorroar@email.com', 'Female', '2000-12-31', '2019-04-14', 4, 'SaraLopFon', 'WageeMon555', '3'),
('6204003404', '54', 102, 'Fardeen', '-', 'Brewer', '234-453-2341', 'Fardeen@email.com', 'Male', '2002-09-12', '2021-01-01', 2.67, 'LionKing', 'Fardeenasdee', '1'),
('6204003405', '50/7', 111, 'Jonas', '-', 'Rosales', '042-123-5342', 'Jonas@email.com', 'Male', '2002-11-21', '2021-02-01', 3.5, 'SheepZoo', 'Jonassda34', '1'),
('6204003406', '402/6', 121, 'Reese', '-', 'Butt', '032-456-3451', 'Reese@email.com', 'Male', '2001-03-03', '2020-11-02', 3.12, 'HowtoGentleman', 'Reese2312', '2'),
('6207050348', '123/2', 100, 'Bow', '-', 'Snadfarery', '043-232-1232', 'Bow@email.com', 'Male', '2001-02-03', '2020-01-01', 3.97, 'SaraPatKongKuki', 'Bow23w2121', '2'),
('6301003401', '123/2', 103, 'Pong', 'Yellow', 'Banana', '017-315-3453', 'pongbanana@email.com', 'Male', '2001-05-24', '2020-01-01', 0, 'SuanFruit', 'pong1123424', '2'),
('6301003402', '1034', 103, 'Chatchapon', '-', 'Lovecomputer', '069-696-6996', 'ryu69@email.com', 'Female', '2002-02-28', '2021-01-03', 0, 'SaraPatKongKuki', 'ryuinw6996', '1'),
('6301003403', '3541', 103, 'Boom', 'Big', 'Brain', '093-866-6413', 'boom69@email.com', 'Male', '2001-12-06', '2020-01-17', 0, 'Assumation', 'boomboom555', '2');

-- --------------------------------------------------------

--
-- Table structure for table `student_guardian_data`
--

CREATE TABLE `student_guardian_data` (
  `Students_ID` varchar(10) NOT NULL,
  `Guardian_ID` int(5) NOT NULL,
  `Relation_Type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_guardian_data`
--

INSERT INTO `student_guardian_data` (`Students_ID`, `Guardian_ID`, `Relation_Type`) VALUES
('6001003402', 20, 'Father'),
('6001003403', 19, 'Uncle'),
('6001003406', 18, 'Father'),
('6101003400', 14, 'Mother'),
('6101003401', 8, 'Uncle'),
('6101003404', 15, 'Uncle'),
('6101003405', 16, 'Uncle'),
('6101003406', 17, 'Father'),
('6102003402', 9, 'Mother'),
('6102003403', 10, 'Mother'),
('6201003401', 5, 'Mother'),
('6203003402', 6, 'Mother'),
('6204003403', 7, 'Uncle'),
('6204003404', 11, 'Mother'),
('6204003405', 12, 'Mother'),
('6204003406', 13, 'Aunt'),
('6207050348', 1, 'Mother'),
('6301003401', 2, 'Father'),
('6301003402', 3, 'Uncle'),
('6301003403', 4, 'Father');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_ID` int(4) NOT NULL,
  `Department_ID` int(3) NOT NULL,
  `Teacher_Name` varchar(32) NOT NULL,
  `Teacher_Cell_Number` varchar(32) NOT NULL,
  `Teacher_Email` varchar(64) NOT NULL,
  `Password_T` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_ID`, `Department_ID`, `Teacher_Name`, `Teacher_Cell_Number`, `Teacher_Email`, `Password_T`) VALUES
(1001, 103, 'Nongsand Shower', '079-677-3144', 'Nongsand@email.com', 'aaaaaaaa1'),
(1093, 111, 'Motosuchi Jari', '202-555-0158', 'Jari@email.com', 'aaaaaaaa2'),
(1234, 100, 'SheepBanana', '234-231-2312', 'erwd@email.com', 'aaaaaaaa3'),
(1631, 101, 'Chakkapon Paisleep', '067-978-3178', 'Chakkapon@email.com', 'aaaaaaaa4'),
(2001, 202, 'Sirin Pompai', '054-465-1254', 'Sirin@email.com', 'aaaaaaaa5'),
(2003, 902, 'Eddison England', '202-555-0161', 'Eddison@email.com', 'aaaaaaaa6'),
(3001, 302, 'Sasawut Siriokgoogle', '097-134-3456', 'Sasawut@email.com', 'aaaaaaaa7'),
(3061, 303, 'Korrapit Pitti', '051-254-2698', 'Korrapit@email.com', 'aaaaaaaa8'),
(3241, 121, 'Nora Mene', '202-555-0117', 'Mene@email.com', 'aaaaaaaa9'),
(3245, 102, 'Vicky Rios', '202-555-0115', 'Vicky@email.com', 'aaaaaaaa10'),
(3422, 411, 'Wakiyashi Bunranore', '202-555-0111', 'Wakiyashi@email.com', 'aaaaaaaa11'),
(4001, 401, 'Saiparn Baiyoke', '079-974-1111', 'Saiparn@email.com', 'aaaaaaaa12'),
(4302, 212, 'Kamidate Atsukayo', '202-555-0141', 'Kamidate@email.com', 'aaaaaaaa13'),
(7001, 701, 'Jonathan Math', '041-694-3614', 'Jonathan@email.com', 'aaaaaaaa14'),
(7321, 444, 'SheepBaOtsuguchi Shoshigenana', '202-555-0101', 'SheepBaOtsuguchi@email.com', 'aaaaaaaa15'),
(7389, 333, 'Komura Nonomi', '202-555-0128', 'Komura@email.com', 'aaaaaaaa16'),
(8001, 801, 'Thanawat KungKai', '037-349-3455', 'Thanawat@email.com', 'aaaaaaaa17'),
(8342, 201, 'Caitlyn Atkinson', '202-555-0199', 'Caitlyn@email.com', 'aaaaaaaa18'),
(9001, 901, 'Jade Worawit', '067-794-1354', 'Jade@email.com', 'aaaaaaaa19'),
(9002, 301, 'Fukuwagi Yoshikazu', '202-555-0189', 'Fukuwagi@email.com', 'aaaaaaaa20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_data`
--
ALTER TABLE `address_data`
  ADD PRIMARY KEY (`Address_Number`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Class_ID`),
  ADD UNIQUE KEY `Class_ID` (`Class_ID`),
  ADD KEY `Class_Course_FK` (`Course_ID`),
  ADD KEY `Class_Teacher_FK` (`Teacher_ID`);

--
-- Indexes for table `class_gpa_data`
--
ALTER TABLE `class_gpa_data`
  ADD PRIMARY KEY (`Subject_Name`,`Students_ID`,`Semester`),
  ADD KEY `C_G_D_Student_FK` (`Students_ID`);

--
-- Indexes for table `class_register`
--
ALTER TABLE `class_register`
  ADD PRIMARY KEY (`Register_ID`),
  ADD KEY `Class_R_Students_FK` (`Students_ID`),
  ADD KEY `Class_Re_FK` (`Class_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_ID`),
  ADD UNIQUE KEY `Course_ID` (`Course_ID`),
  ADD KEY `Course_Department_FK` (`Department_ID`);

--
-- Indexes for table `customer_support`
--
ALTER TABLE `customer_support`
  ADD PRIMARY KEY (`Support_ID`),
  ADD KEY `C_Support_Department_FK` (`Department_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_ID`),
  ADD UNIQUE KEY `Department_ID` (`Department_ID`),
  ADD UNIQUE KEY `Department_Name` (`Department_Name`),
  ADD UNIQUE KEY `Department_Manager_Cell_Number` (`Department_Manager_Cell_Number`),
  ADD UNIQUE KEY `Department_Manager_Email` (`Department_Manager_Email`);

--
-- Indexes for table `guardian_data`
--
ALTER TABLE `guardian_data`
  ADD PRIMARY KEY (`Guardian_ID`),
  ADD UNIQUE KEY `Cell_Number` (`Cell_Number`),
  ADD UNIQUE KEY `Password_G` (`Password_G`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Guardian_Address_FK` (`Address_Number`);

--
-- Indexes for table `payment_data`
--
ALTER TABLE `payment_data`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD UNIQUE KEY `Bill_ID` (`Bill_ID`),
  ADD KEY `Payment_Regis_FK` (`Register_ID`);

--
-- Indexes for table `students_data`
--
ALTER TABLE `students_data`
  ADD PRIMARY KEY (`Students_ID`),
  ADD UNIQUE KEY `Students_ID` (`Students_ID`),
  ADD UNIQUE KEY `Cell_Number` (`Cell_Number`),
  ADD UNIQUE KEY `Password` (`Password`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Student_Address_FK` (`Address_Number`),
  ADD KEY `Student_Department_FK` (`Department_ID`);

--
-- Indexes for table `student_guardian_data`
--
ALTER TABLE `student_guardian_data`
  ADD PRIMARY KEY (`Students_ID`,`Guardian_ID`),
  ADD KEY `S_G_D_Guardian_ID` (`Guardian_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_ID`),
  ADD UNIQUE KEY `Teacher_ID` (`Teacher_ID`),
  ADD UNIQUE KEY `Teacher_Cell_Number` (`Teacher_Cell_Number`),
  ADD UNIQUE KEY `Teacher_Email` (`Teacher_Email`),
  ADD UNIQUE KEY `Password_T` (`Password_T`),
  ADD KEY `Teacher_Department_FK` (`Department_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_register`
--
ALTER TABLE `class_register`
  MODIFY `Register_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer_support`
--
ALTER TABLE `customer_support`
  MODIFY `Support_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `guardian_data`
--
ALTER TABLE `guardian_data`
  MODIFY `Guardian_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payment_data`
--
ALTER TABLE `payment_data`
  MODIFY `Payment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `Class_Course_FK` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Class_Teacher_FK` FOREIGN KEY (`Teacher_ID`) REFERENCES `teacher` (`Teacher_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_gpa_data`
--
ALTER TABLE `class_gpa_data`
  ADD CONSTRAINT `C_G_D_Student_FK` FOREIGN KEY (`Students_ID`) REFERENCES `students_data` (`Students_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_register`
--
ALTER TABLE `class_register`
  ADD CONSTRAINT `Class_R_Students_FK` FOREIGN KEY (`Students_ID`) REFERENCES `students_data` (`Students_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Class_Re_FK` FOREIGN KEY (`Class_ID`) REFERENCES `class` (`Class_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `Course_Department_FK` FOREIGN KEY (`Department_ID`) REFERENCES `department` (`Department_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_support`
--
ALTER TABLE `customer_support`
  ADD CONSTRAINT `C_Support_Department_FK` FOREIGN KEY (`Department_ID`) REFERENCES `department` (`Department_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guardian_data`
--
ALTER TABLE `guardian_data`
  ADD CONSTRAINT `Guardian_Address_FK` FOREIGN KEY (`Address_Number`) REFERENCES `address_data` (`Address_Number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_data`
--
ALTER TABLE `payment_data`
  ADD CONSTRAINT `Payment_Regis_FK` FOREIGN KEY (`Register_ID`) REFERENCES `class_register` (`Register_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students_data`
--
ALTER TABLE `students_data`
  ADD CONSTRAINT `Student_Address_FK` FOREIGN KEY (`Address_Number`) REFERENCES `address_data` (`Address_Number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Student_Department_FK` FOREIGN KEY (`Department_ID`) REFERENCES `department` (`Department_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_guardian_data`
--
ALTER TABLE `student_guardian_data`
  ADD CONSTRAINT `S_G_D_Guardian_ID` FOREIGN KEY (`Guardian_ID`) REFERENCES `guardian_data` (`Guardian_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `S_G_D_Student_ID` FOREIGN KEY (`Students_ID`) REFERENCES `students_data` (`Students_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `Teacher_Department_FK` FOREIGN KEY (`Department_ID`) REFERENCES `department` (`Department_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
