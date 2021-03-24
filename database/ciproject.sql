-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 02:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproject`
--

CREATE TABLE `addproject` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `project_file` varchar(225) NOT NULL,
  `approve` varchar(11) NOT NULL DEFAULT 'approved',
  `id` int(11) NOT NULL,
  `date` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addproject`
--

INSERT INTO `addproject` (`project_id`, `project_name`, `description`, `project_file`, `approve`, `id`, `date`) VALUES
(0, 'Revolution.', 'Create an AI powered module using python', '20210228_225903.png', 'rejected', 6, '2021-03-21'),
(2, 'Php mysql', 'create a website only use with js,php,mysql', '', 'rejected', 7, '2021-03-19'),
(3, 'Traffic control management system', 'By using Python create this project', '', 'approved', 6, '2021-03-20'),
(15, 'Stock Management System', 'Create a trading web page with graphs with php and reactjs ', 'Philips_invoice.pdf', 'approved', 7, '2021-03-27'),
(16, 'java web application project', 'by using java, python', '', 'rejected', 7, '2021-03-22'),
(17, 'sfgeg', 'hshth', '', 'rejected', 7, '2021-03-27'),
(18, 'java application project', 'coding with js', '5606a574-3e9c-4586-9b28-da9ffb17d15d.pdf', 'rejected', 7, '2021-03-27'),
(19, 'Crime rate prediction', 'Make a web application by using React.js and php ', 'Capture.JPG', 'approved', 6, '2021-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `userName` varchar(120) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `userName`, `password`) VALUES
(1, 'admin', 'Test@12345');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(200) DEFAULT NULL,
  `lastName` varchar(200) DEFAULT NULL,
  `emailId` varchar(200) DEFAULT NULL,
  `mobileNumber` varchar(12) DEFAULT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `isActive` int(1) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `firstName`, `lastName`, `emailId`, `mobileNumber`, `userPassword`, `regDate`, `isActive`, `lastUpdationDate`) VALUES
(6, 'anamika', 'dash', 'mishra@outlook.com', '4567897435', 'aaaaaa', '2021-03-18 04:32:51', 1, '2021-03-18 04:34:43'),
(7, 'aswin', 'samal', 'samal@gmail.com', '3456787654', 'aaaaaa', '2021-03-18 04:33:32', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproject`
--
ALTER TABLE `addproject`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproject`
--
ALTER TABLE `addproject`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
