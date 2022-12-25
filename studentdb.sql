-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 12:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `c_id` int(11) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `Faculty` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `lecturer` varchar(50) NOT NULL,
  `description` varchar(7000) NOT NULL,
  `com_status` varchar(50) DEFAULT 'null',
  `p_id` varchar(50) DEFAULT 'Null'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `a_no`, `Faculty`, `Department`, `lecturer`, `description`, `com_status`, `p_id`) VALUES
(9, 0, 'Education', 'Education', 'Education', 'jnbfddgbjio', 'null', 'Null'),
(10, 0, 'Education', 'Education', 'Education', 'h9gjnono', 'null', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `lectureruser`
--

CREATE TABLE `lectureruser` (
  `u_name` varchar(50) NOT NULL,
  `u_id` int(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lectureruser`
--

INSERT INTO `lectureruser` (`u_name`, `u_id`, `u_pass`) VALUES
('Dr Adewole', 11234, 'host');

-- --------------------------------------------------------

--
-- Table structure for table `schoolfaculties`
--

CREATE TABLE `schoolfaculties` (
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolfaculties`
--

INSERT INTO `schoolfaculties` (`location`) VALUES
('Education'),
('law'),
('Science');

-- --------------------------------------------------------

--
-- Table structure for table `studentuser`
--

CREATE TABLE `studentuser` (
  `u_name` varchar(50) NOT NULL,
  `u_id` int(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentuser`
--

INSERT INTO `studentuser` (`u_name`, `u_id`, `u_pass`) VALUES
('olalekan rilwan', 160805051, 'host');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `lectureruser`
--
ALTER TABLE `lectureruser`
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- Indexes for table `schoolfaculties`
--
ALTER TABLE `schoolfaculties`
  ADD UNIQUE KEY `location` (`location`);

--
-- Indexes for table `studentuser`
--
ALTER TABLE `studentuser`
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
