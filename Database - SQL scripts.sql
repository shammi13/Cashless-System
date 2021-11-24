-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 09:53 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tictechtoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE `canteen` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `item_type` varchar(50) DEFAULT NULL,
  `item_cost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`item_id`, `item_name`, `item_type`, `item_cost`) VALUES
(1001, 'icecream', 'healthy', 100),
(1002, 'sandwich', 'unhealthy', 30),
(1003, 'salad', 'healthy', 50),
(1004, 'samosa', 'unhealthy', 25),
(1005, 'maggi', 'unhealthy', 20),
(1006, 'juice', 'healthy', 30);

-- --------------------------------------------------------

--
-- Table structure for table `deitary_habits`
--

CREATE TABLE `deitary_habits` (
  `s_id` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(10) NOT NULL,
  `healthy` int(11) NOT NULL,
  `unhealthy` int(11) NOT NULL,
  `total_expenditure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deitary_habits`
--

INSERT INTO `deitary_habits` (`s_id`, `year`, `month`, `healthy`, `unhealthy`, `total_expenditure`) VALUES
(0, 2020, 11, 10, 1, 300),
(0, 0, 2020, 10, 1, 500),
(1, 2020, 11, 0, 0, 0),
(2, 2020, 11, 0, 0, 0),
(1, 2020, 11, 0, 0, 0),
(2, 2020, 11, 0, 0, 0),
(1, 2020, 11, 0, 0, 100),
(2, 2020, 11, 0, 0, 0),
(3, 2020, 11, 0, 20, 500),
(0, 2020, 11, 0, 0, 0),
(0, 2020, 11, 0, 0, 0),
(0, 2020, 11, 0, 0, 0),
(0, 2020, 11, 0, 0, 0),
(1, 2020, 11, 4, 9, 0),
(1, 2020, 11, 0, 0, 0),
(1, 2020, 11, 0, 0, 0),
(1, 2020, 11, 10, 0, 0),
(1, 2020, 11, 0, 0, 0),
(2, 2020, 11, 0, 0, 0),
(3, 2020, 11, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parent_login`
--

CREATE TABLE `parent_login` (
  `par_id` int(11) NOT NULL,
  `par_pass` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent_login`
--

INSERT INTO `parent_login` (`par_id`, `par_pass`) VALUES
(501, 'qqqq'),
(502, 'xxxx'),
(503, 'pppp'),
(504, 'zzzz');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `canteen_limit` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `total_expenditure` int(11) NOT NULL,
  `healthy` int(11) NOT NULL,
  `unhealthy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`s_id`, `s_name`, `p_id`, `p_name`, `canteen_limit`, `balance`, `total_expenditure`, `healthy`, `unhealthy`) VALUES
(1, 'jash', 501, 'xyz', 500, 1500, 150, 10, 6),
(2, 'vidhi', 501, 'abc', 1000, 3000, 850, 2, 16),
(3, 'mahir', 501, 'pqr', 200, 4800, 450, 0, 0),
(4, 'krunal', 504, 'abc', 500, 10000, 3000, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `s_id` int(11) NOT NULL,
  `s_password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`s_id`, `s_password`) VALUES
(1, '123'),
(2, '21'),
(3, 'abcd'),
(4, 'pqrs'),
(5, 'wxyz');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `t_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(45) NOT NULL,
  `cost` int(11) NOT NULL,
  `time` date NOT NULL,
  `item_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`t_id`, `s_id`, `p_id`, `p_name`, `cost`, `time`, `item_type`) VALUES
(202, 1, 1001, 'canteen', 500, '2020-11-11', ''),
(203, 1, 1002, '', 400, '2020-12-12', 'events'),
(204, 2, 1003, '', 500, '2020-10-12', 'events'),
(205, 2, 1004, '', 100, '2020-10-12', 'canteen'),
(206, 3, 1001, '', 500, '2020-11-11', 'events'),
(207, 1, 2001, 'clip-board', 100, '2020-11-08', 'stationary'),
(208, 1, 1001, 'icecream', 100, '2020-11-08', 'canteen'),
(209, 1, 1003, 'salad', 50, '2020-11-08', 'canteen'),
(210, 1, 2001, 'clip-board', 100, '2020-11-08', 'stationary'),
(211, 1, 1003, 'salad', 50, '2020-11-08', 'canteen'),
(212, 1, 3002, 'Picnic', 50, '2020-11-08', 'events'),
(213, 1, 1003, 'salad', 50, '2020-11-08', 'canteen'),
(214, 1, 2001, 'clip-board', 100, '2020-11-08', 'stationary'),
(215, 1, 2001, 'clip-board', 100, '2020-11-01', 'stationary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canteen`
--
ALTER TABLE `canteen`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `parent_login`
--
ALTER TABLE `parent_login`
  ADD PRIMARY KEY (`par_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
