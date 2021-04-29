-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 11:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `b_name`) VALUES
(1, 'CSE'),
(2, 'ECE'),
(3, 'EEE'),
(4, 'ME'),
(5, 'CE');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `s_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@edu.in', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_no` int(11) NOT NULL,
  `s_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll_no` int(5) NOT NULL,
  `course` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_no`, `s_id`, `name`, `roll_no`, `course`, `year`, `email`, `password`) VALUES
(1, 202001, 'Arpit Raj', 3, 'CE', '1st Year', 'arpitraj@edu.in', '1234'),
(2, 202002, 'Aman Agarwal', 5, 'CSE', '2nd Year', 'aman@aol.com', '1234'),
(3, 202003, 'Rahul Keshari', 15, 'ECE', '3rd  Year', 'rahul@rj.in', '1234'),
(4, 202004, 'Abid Ansari', 2, 'EEE', '4th  Year', 'abid@ab.in', '1234'),
(6, 202006, 'Sameer Singh', 20, 'ME', '2nd Year', 'sameer@edu.in', '1234'),
(7, 202007, 'Aman Agarwal', 8, 'CSE', '4th Year', 'aman@edu.in', '1234'),
(8, 202008, 'Hamid Alam', 21, 'CE', '3rd Year', 'hamid@edu.in', '1234'),
(9, 202009, 'Pooja Agarwal', 12, 'ECE', '3rd Year', 'pooja@edu.in', '1234'),
(10, 202010, 'Himanshu Gupta', 23, 'CE', '2nd Year', 'himanshu@edu.in', '4567');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `sl_no` int(10) NOT NULL,
  `day` varchar(10) NOT NULL,
  `p1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  `p3` varchar(50) NOT NULL,
  `p4` varchar(50) NOT NULL,
  `p5` varchar(50) NOT NULL,
  `p6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`sl_no`, `day`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`) VALUES
(1, 'Monday', 'Electronics Device, ATS Sir', 'Electronics Device, ATS Sir', 'DSD, MB Maam ', 'COA, AB Sir', 'Network Theory, VK Sir', 'ESP, VK Sir'),
(2, 'Tuesday ', 'C, SMT Sir', 'C, SMT Sir', 'ESP, SMD Sir', 'SDP, SVM Maam ', 'Engineering Drawing, AM Sir', 'Data Structure, ANP Sir'),
(3, 'Wednesday ', 'Engineering Physics, LSP Maam', 'Mechanics, HST Sir', 'C Lab, VS, LM Sir', 'C Lab, VS, LM Sir', 'Engineering Mathematics, KC Sir', 'ESP, SMD Sir'),
(4, 'Thursday ', 'Engineering Mathematics, KC Sir', 'Data Structure, ANP', 'Python, PMS Sir', 'Python, PMS Sir', 'Engineering Drawing, AM Sir', 'Engineering Mathematics, KC Sir'),
(5, 'Friday ', 'Physics Lab, BP, STM Sir', 'Physics Lab, BP, STM Sir', 'C, SMT Sir', 'Engineering Mathematics, KC Sir', 'Mechanics, HST Sir', 'ESP, SMD Sir');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `sl_no` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `p1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  `p3` varchar(50) NOT NULL,
  `p4` varchar(50) NOT NULL,
  `p5` varchar(50) NOT NULL,
  `p6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`sl_no`, `day`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`) VALUES
(1, 'Monday', 'Electronics Device, ATS Sir', 'Electronics Device, ATS Sir', 'DSD, MB Maam ', 'COA, AB Sir', 'Network Theory, VK Sir', 'ESP, VK Sir'),
(2, 'Tuesday ', 'Mathematics, CP Sir', 'Network Theory, SNK Sir', 'Power Electronics, BMK Sir', 'SDP, AMD Sir', 'Electronics Device Lab, BM, TP sir', 'Electronics Device Lab, BM, TP sir'),
(3, 'Wednesday ', 'DSD Lab, MB, LC Sir', 'DSD Lab, MB, LC Sir', 'Power Electronics, BMK Sir', 'COA Lab, AB, NM Sir', 'COA Lab, AB, NM Sir', 'Mathematics, CP Sir'),
(4, 'Thursday ', 'Python, PC Ma\'am ', 'Network Theory, SNK Sir', 'Electronics Device, ATS Sir', 'Analog Electronics, AT Sir', 'Microprocessor, BM Ma\'am ', 'DSD, MB Ma\'am '),
(5, 'Friday ', 'Analog Electronics Lab, AT, SM Sir', 'Analog Electronics Lab, AT, SM Sir', 'Microprocessor Lab, BM, ATP Sir', 'Microprocessor Lab, BM, ATP Sir', 'Python Lab, PC, PM Sir', 'Python Lab, PC, PM Sir');

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE `table3` (
  `sl_no` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `p1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  `p3` varchar(50) NOT NULL,
  `p4` varchar(50) NOT NULL,
  `p5` varchar(50) NOT NULL,
  `p6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table3`
--

INSERT INTO `table3` (`sl_no`, `day`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`) VALUES
(1, 'Monday', 'Transformer & Generator, PM Sir', 'DSD, BM', 'DSD, BM', 'EEM, SK Sir', 'ECA, AT Sir', 'SDP, PS Sir'),
(2, 'Tuesday ', 'Transformer & Generator, PM Sir', 'DSD Lab, BM, LM Sir', 'DSD Lab, BM, LM Sir', 'AEC, AG Sir', 'AEC, AG Sir', 'ESP, AM Sir'),
(3, 'Wednesday ', 'Data Structure, VM Ma\'am ', 'EEM, SK Sir', 'EEM, SK Sir', 'ECA, AT Sir', 'AEC Lab, AG, BK Sir', 'AEC Lab, AG, BK Sir'),
(4, 'Thursday ', 'Transformer & Generator, PM Sir', 'Data Structure Lab, VM, AK Sir', 'Data Structure Lab, VM, AK Sir', 'DSD, LM Ma\'am ', 'Mathematics, ABK Sir', 'ESP, AM Sir'),
(5, 'Friday ', 'Mathematics, ABK Sir', 'Mathematics, ABK Sir', 'EEM, SK Sir', 'AEC, AG Sir', 'AEC, AG Sir', 'Transformer & Generator, PM Sir');

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE `table4` (
  `sl_no` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `p1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  `p3` varchar(50) NOT NULL,
  `p4` varchar(50) NOT NULL,
  `p5` varchar(50) NOT NULL,
  `p6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`sl_no`, `day`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`) VALUES
(1, 'Monday ', 'TMC, SRK Sir', 'TOM, SDW Sir', 'DME-I, SHG Sir', 'DME-I, SHG SirHT', 'HT, VNR Sir', 'ESP, ARP Maam '),
(2, 'Tuesday ', 'HT, HSS Sir', 'HT, HSS Sir', 'MQC, KAM Ma\'am ', 'TOM-II, SDW Sir', 'TMC, SRK Sir', 'Python, RNY Sir'),
(3, 'Wednesday ', 'TOM-II, SDW Sir', 'MQC, KAM Ma\'am ', 'TMC, SRK Sir', 'HT, HSS Sir', 'MQC KAM Ma\'am ', 'DME-I, SHG Sir'),
(4, 'Thursday ', 'MQC, KAM Ma\'am ', 'TMC, SRK Sir', 'HT, HSS Sir', 'DME-I, SHG Sir', 'TOM-II, SDW, JSS', 'Python, RNY Sir'),
(5, 'Friday', 'DME-I, SHG Sir', 'TMC, SRK Sir', 'TOM-II, SDW Sir', 'MQC, KAM Ma\'am ', 'SDP, VRV Sir', 'ESP, ARP Ma\'am ');

-- --------------------------------------------------------

--
-- Table structure for table `table5`
--

CREATE TABLE `table5` (
  `sl_no` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `p1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  `p3` varchar(50) NOT NULL,
  `p4` varchar(50) NOT NULL,
  `p5` varchar(50) NOT NULL,
  `p6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table5`
--

INSERT INTO `table5` (`sl_no`, `day`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`) VALUES
(1, 'Monday ', 'PSC, HSN Sir', 'PSC, HSN SIr', 'SEDD-II, SMH Sir', 'OE-II, PS Sir', 'ES, AF Sir', 'FE, GPK Sir'),
(2, 'Tuesday ', 'SEDD-II C.Lab, SMH Sir', 'SEDD-II C.Lab, SMH Sir', 'OE-II, KRP Sir', 'ES, AF Sir', 'FET, MMS Sir', 'FE, MA Sir'),
(3, 'Wednesday ', 'FE, MA Sir', 'FET, MMS Sir', 'OE-III, RPS Sir', 'SEDD-II C.Lab, SMH Sir', 'SEDD-II C.Lab, SMH Sir', 'FE, GPK Sir'),
(4, 'Thursday ', 'OE-III, RPS Sir', 'PSC, HSN Sir', 'FET, MMS Sir', 'OE-II, KPS Sir', 'FE,MAK Sir', 'ESP, MPC Sir'),
(5, 'Fridays ', 'OE_II, RPS Sir', 'PSC, HSN Sir', 'OE-III, PMS Sir', 'ES, AFK Sir', 'FET, MMS Sir', 'SDP, DK Sir');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `s_no` int(11) NOT NULL,
  `t_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`s_no`, `t_id`, `name`, `email`, `subject`, `password`) VALUES
(1, 202101, 'Sudhir Roy', 'roysudhir@edu.in', 'Data Science ', '1234'),
(2, 202102, 'Amrit Sharma', 'amrit@edu.in', 'Python ', '1234'),
(3, 202103, 'Sumit Ghosh ', 'sumit@edu.in', 'Data Structure', '1234'),
(4, 202104, 'Lalit Kumar', 'lalit@edu.in', 'DBMS', '1234'),
(5, 202105, 'Abhishek Banerjee ', 'abk@edu.in', 'Electronics Device', '1234'),
(6, 202106, 'Manas Banerjee ', 'manas@edu.in', 'Digital System Design', '1234'),
(7, 202107, 'Vivek kumar', 'vivek@edu.in', 'ESP', '1234'),
(8, 202108, 'Arvind Mondal', 'arvind@edu.in', 'SDP', '1234'),
(9, 202109, 'Chyan Choudhary ', 'chayan@edu.in', 'Mathematics ', '1234'),
(10, 202110, 'Sanjeet Karmakar ', 'sanjeet@edu.in', 'Network Theory', '1234'),
(11, 202111, 'Ashish Ranjan', 'ashish@edu.in', 'Mechanics', '4321'),
(12, 202112, 'Anirudh Gupta', 'gupta@edu.in', 'DSD', '7890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `table3`
--
ALTER TABLE `table3`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `table4`
--
ALTER TABLE `table4`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `table5`
--
ALTER TABLE `table5`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table3`
--
ALTER TABLE `table3`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table4`
--
ALTER TABLE `table4`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table5`
--
ALTER TABLE `table5`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
