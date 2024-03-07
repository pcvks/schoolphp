-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 05:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Cid` int(3) NOT NULL,
  `classname` varchar(8) DEFAULT NULL,
  `subject_id` int(3) DEFAULT NULL,
  `teacher_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Cid`, `classname`, `subject_id`, `teacher_id`) VALUES
(27, '7/1', 46, 29),
(30, '7/4', 46, 29),
(31, '7/1', 47, 30),
(32, '7/2', 47, 30),
(34, '7/2', 48, 31),
(35, '7/2', 46, 29),
(37, '7/2', 51, 33),
(38, '7/5', 47, 30);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `s_score` int(3) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `s_score`, `grade`, `timestamp`) VALUES
(18, 91, 'A', '2024-01-22 22:33:57'),
(19, 89, 'B+', '2024-01-22 22:34:04'),
(20, 85, 'B', '2024-01-22 22:34:09'),
(21, 76, 'C+', '2024-01-22 22:34:15'),
(22, 70, 'C', '2024-01-22 22:34:19'),
(23, 60, 'D+', '2024-01-22 22:34:29'),
(24, 54, 'D', '2024-01-22 22:34:35'),
(25, 49, 'F', '2024-01-22 22:34:44'),
(26, 91, 'A', '2024-01-31 19:21:27'),
(27, 49, 'F', '2024-01-31 19:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_Id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `sub_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_Id`, `teacher_id`, `sub_name`) VALUES
(46, 29, 'ຄະນິດສາດ'),
(47, 30, 'ຟີຊິກສາດ'),
(48, 31, 'ເຄມີສາດ'),
(49, 29, 'ພາສາລາວ-ວັນນະຄະດີ'),
(51, 33, 'ປະຫວັດສາດ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `age` int(2) DEFAULT NULL,
  `village` varchar(20) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `province` varchar(20) DEFAULT NULL,
  `u_phone` varchar(11) NOT NULL,
  `f_name` varchar(20) DEFAULT NULL,
  `f_phone` varchar(11) DEFAULT NULL,
  `m_name` varchar(20) NOT NULL,
  `m_phone` varchar(11) DEFAULT NULL,
  `mobile_phone` varchar(11) DEFAULT NULL,
  `income` int(11) DEFAULT NULL,
  `in_reason` varchar(20) DEFAULT NULL,
  `expenditure` int(11) DEFAULT NULL,
  `ex_reason` varchar(30) DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT 1 COMMENT '1:student; 2:parents; 3:teacher; 4:admin;',
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `gender`, `birthday`, `email`, `password`, `age`, `village`, `district`, `province`, `u_phone`, `f_name`, `f_phone`, `m_name`, `m_phone`, `mobile_phone`, `income`, `in_reason`, `expenditure`, `ex_reason`, `role`, `timestamp`) VALUES
(26, NULL, NULL, NULL, NULL, 'kangserpobtsuasvaaj@gmail.com', 'e6ec13b23cfbb81e8e953f08b746b640', NULL, NULL, NULL, NULL, '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 4, '2024-01-22 23:17:16'),
(29, 'ສົມສີ', 'ສົມລີ', 'ຊາຍ', '2024-01-02', 'somsy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 30, 'ດົງໂດກ', 'ໄຊທານີ', 'ນະຄອນຫຼວງວຽງຈັນ', '0207654892', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 3, '2024-01-22 23:17:16'),
(30, 'ສົມຫວັງ', 'ສົມລີ', 'ຊາຍ', '2024-01-01', 'somvang@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 25, 'ດົງໂດກ', 'ໄຊທານີ', 'ນະຄອນຫຼວງວຽງຈັນ', '0207654892', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 3, '2024-01-22 23:17:16'),
(31, 'ບຸນມີ', 'ສົມສີ', 'ຊາຍ', '2024-01-15', 'bounmy@gmail.com', '41525af98cffe913d396c83bdd493181', 28, 'ດົງໂດກ', 'ໄຊທານີ', 'ນະຄອນຫຼວງວຽງຈັນ', '02076523892', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 3, '2024-01-22 23:17:16'),
(32, 'ມະນີວອນ', 'ພອນປະເສີດ', 'ຊາຍ', '2024-01-17', 'maneevone@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 34, 'ນ້ຳຮອນ', 'ໝື່ນ', 'ວຽງຈັນ', '0207654892', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 3, '2024-01-22 23:17:16'),
(33, 'ບຸນມີ', 'ອິນທະວົງ', 'ຊາຍ', '2024-01-03', 'bounmy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 18, 'ດົງໂດກ', 'ໄຊທານີ', 'ນະຄອນຫຼວງວຽງຈັນ', '0207654892', 'ອິນທະວົງ', '0207654892', 'ສົມມະລີ', '0207654892', '0207654892', 2500000, 'ຈ່າຍແລ້ວ', NULL, NULL, 1, '2024-01-22 23:17:16'),
(34, 'tester', 'tester', 'ຍິງ', '2024-01-24', 'tester@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 19, 'ດົງໂດກ', 'ໄຊທານີ', 'ນະຄອນຫຼວງວຽງຈັນ', '0207654892', '', '0207654892', 'ສົມມະລີ', '0207654892', '0207654892', 2500000, 'ຈ່າຍແລ້ວ', NULL, NULL, 1, '2024-01-22 23:17:16'),
(37, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, '', NULL, NULL, NULL, NULL, 2500000, 'ຊື້ໂຕະແລະຕັ່ງຈຳນວນ 3 ຊຸດ', 1, '2024-01-22 23:32:59'),
(38, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, '', NULL, NULL, NULL, NULL, 100000, 'ຊື້ເຫຼັກຕະປູ', 1, '2024-01-22 23:33:33'),
(39, 'ສົມສີ', 'ສົມລີ', 'ຍິງ', '2024-01-03', 'kangserpobtsuasvaaj@gmail.com', 'f595c73758c759e0b68d75d33099ffb8', 51, 'ດົງໂດກ', 'ໄຊທານີ', 'ນະຄອນຫຼວງວຽງຈັນ', '0207654892', 'ອິນທະວົງ', '0207654892', 'ສົມມະລີ', '0207654892', '0207654892', 260000, 'ຈ່າຍແລ້ວ', NULL, NULL, 1, '2024-01-23 18:27:19'),
(40, 'tester', 'tester', 'ອື່ນໆ', '2024-02-07', 'tester@gamilc.omt', '01013e5a1aa842c1cefe0953920a3ae6', 22, 'tester', 'tester', 'ອັດຕະປື', 'tester', 'tester', 'tester', 'tester', 'tester', 'tester', 2100000, 'ຈ່າຍແລ້ວ', NULL, NULL, 1, '2024-02-13 18:14:04'),
(41, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, '', NULL, NULL, NULL, NULL, 2500000, 'ຊື້ອຸປະກອນໃນຫ້ອງຮຽນ', 1, '2024-02-13 18:15:48'),
(42, 'tester', 'tester', 'ອື່ນໆ', '2001-12-05', 'tester@gamilc.omt', '8eb9085df3582fdf7db3050bb5eefca5', 22, 'ດົງໂດກ', 'ໄຊທານີ', 'ນະຄອນຫຼວງວຽງຈັນ', '02076589225', 'ກ່າງເສີ', '0304491740', 'teset', 'twes', '0304491740', 2500000, 'ຈ່າຍແລ້ວ', NULL, NULL, 1, '2024-02-18 22:36:32'),
(43, 'tester', 'ACADEMIA', 'ຊາຍ', '2001-12-05', 'english.academia30@gmail.com', '63ea78f508574fa7393f67268ef9275f', 25, 'ດົງໂດກ', 'ໄຊທານີ', 'ບໍ່ແກ້ວ', '02076589225', 'tester', 'tester', 'tester', 'twes', '0304491740', 2100000, 'ຈ່າຍແລ້ວ', NULL, NULL, 1, '2024-02-20 19:19:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `Cid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
