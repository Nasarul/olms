-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 09:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `napd_olms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bg`
--

CREATE TABLE `bg` (
  `id` int(11) NOT NULL,
  `bg` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bg`
--

INSERT INTO `bg` (`id`, `bg`) VALUES
(1, 'A(+)'),
(2, 'A(-)'),
(3, 'B(+)'),
(4, 'B(-)'),
(5, 'O(+)'),
(6, 'O(-)'),
(7, 'AB(+)'),
(8, 'AB(-)');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `adm_id` int(6) NOT NULL,
  `adm_name` text NOT NULL,
  `adm_email` varchar(60) NOT NULL,
  `adm_mobile` varchar(16) NOT NULL,
  `adm_username` varchar(40) NOT NULL,
  `adm_password` varchar(60) NOT NULL,
  `adm_created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `ppt` varchar(200) NOT NULL,
  `discription` varchar(800) NOT NULL,
  `thumbnail` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`id`, `name`, `duration`) VALUES
(1, 'Post Graduate Diploma in ICT for Development ', '01 January, 2021 to 30 December, 2021'),
(2, 'Special Foundation Training Course for BCS (Health) Cadre Officers', '20 February, 2022 - 17 April, 2022'),
(3, 'Microsoft Project', '06 February, 2022 to 23 February, 2022'),
(4, 'Cyber Security ', '06 February, 2022 to 03 March, 2022'),
(5, 'Development Planning and Project Management (DPPM)', '13 February, 2022 to 03 March, 2022'),
(6, 'Post Graduate Diploma in Development Planning', '23 January, 2022 to 31 December, 2022'),
(7, 'Special Foundation Training Course for Non-Cadre Officers ', '16 January, 2022 to 16 March, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `id` int(10) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `organization` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` text NOT NULL,
  `dob` date NOT NULL,
  `bg` varchar(15) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`id`, `roll`, `name`, `designation`, `organization`, `email`, `mobile`, `dob`, `bg`, `image`) VALUES
(1, '18', 'Md. Nasarul Hasan', 'Personal Officer', 'Cabinet Division', 'nasarulhasan@gmail.com', '01552457194', '1970-01-01', 'A(+)', 0x313634343733303239315f363536382e6a7067),
(3, '33', 'Hasan Mia', 'Personal Of', 'Cabinet D', 'afrozanajnin@gmail.com', '4444444444', '1920-02-11', 'AB(-)', 0x313634343733303331395f393038312e6a7067),
(4, '80', 'Afroza Najnin Asha', 'Professor of Home', 'Home Ministry', 'afrozanajnin@gmail.com', '01682477099', '2020-02-02', 'AB(+)', 0x313634343733303237305f393934392e6a7067),
(5, '44', 'Sadia Sultana', 'Personal ', 'Dhaka University, Bangladesh', 'osmangani@gmail.com', '5555555555', '2022-02-28', 'O(+)', 0x313634343736353436365f393833302e6a7067),
(6, '221', 'Asha Bibi', 'Personal  ouiu', 'Dhaka University', 'nasarulhasandfadfadfadf@gmail.com', '2342300000', '2022-02-26', 'A(+)', 0x313634343736363733305f373638302e6a7067),
(7, '66', 'Md. Nasarul Hasan', 'Personal Officer', 'Rajshahi University', 'miran@gmail.com', '01552457194', '2222-02-22', 'A(+)', 0x313634343737313436355f383835392e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`id`, `name`, `code`) VALUES
(1, 'Fundamentals of Information and Communication Technology and Programming Language', 'ICT-101'),
(2, 'Multimedia System Design', 'ICT-111'),
(3, 'Networking and Data Communication', 'ICT-107'),
(4, 'System Analysis and Design', 'ICT-103'),
(5, 'Database Management System & Design', 'ICT-105');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `organization` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`id`, `name`, `designation`, `organization`, `email`, `mobile`, `image`) VALUES
(7, 'Md. Nasarul Hasan', 'Personal Officer', 'Cabinet Division', 'nasarulhasandfadfadfadf@gmail.com', '01552457194', '1644730556_6268.jpg'),
(8, 'Afroza Najnin Asha', 'Professor of House', 'Dhaka University', 'afrozanajnin@gmail.com', '01682477099', '1644730623_5880.jpg'),
(10, 'Md. Tanjidul Hasan Rayyan', 'Class One', 'Little Angle School', 'tamjidul@gmail.com', '01682477099', '1644730650_6517.jpg'),
(11, 'Md. Thamidul Hasan', 'Class Seven', 'Udayon School', 'thamidulhasan@gmail.com', '88888888888', '1644730669_1700.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `name`, `pass`, `created_at`) VALUES
(1, 'hasan', 'hasan', '2022-02-08 12:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `tblvideo`
--

CREATE TABLE `tblvideo` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `discription` varchar(800) NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bg`
--
ALTER TABLE `bg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvideo`
--
ALTER TABLE `tblvideo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bg`
--
ALTER TABLE `bg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `adm_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblvideo`
--
ALTER TABLE `tblvideo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
