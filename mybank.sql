-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 11:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farzi_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `accountno` varchar(15) DEFAULT NULL,
  `deposit` int(11) DEFAULT NULL,
  `withdraw` int(11) DEFAULT NULL,
  `t_savings` int(11) DEFAULT NULL,
  `date_` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`accountno`, `deposit`, `withdraw`, `t_savings`, `date_`) VALUES
('592127632151207', 1000, 0, 14522, '2022-09-05 21:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `state_branch` varchar(30) DEFAULT NULL,
  `branchno` int(11) NOT NULL,
  `ifsc` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`state_branch`, `branchno`, `ifsc`) VALUES
('Haryana', 7000, '00DB55656'),
('West Bengal', 8000, '00DB55656'),
('Jharkhand', 8001, '00DB55656'),
('Karnataka', 8002, '00DB55656'),
('Kerala', 8003, '00DB55656'),
('Madhya Pradesh', 8004, '00DB55656'),
('Maharashtra', 8005, '00DB55656'),
('Arunachal Pradesh', 8006, '00DB58006'),
('Chhattisgarh', 8008, '00DB55656'),
('Meghalaya', 8011, '00DB55656'),
('Mizoram', 8012, '00DB55656'),
('Nagaland', 8013, '00DB55656'),
('Odisha', 8014, '00DB55656'),
('Punjab', 8015, '00DB55656'),
('Rajasthan', 8016, '00DB55656'),
('Sikkim', 8017, '00DB55656'),
('Tamil Nadu', 8018, '00DB55656'),
('Telangana', 8019, '00DB55656'),
('Tripura', 8020, '00DB55656'),
('Uttarakhand', 8021, '00DB55656'),
('Uttar Pradesh', 8022, '00DB55656'),
('Andhra Pradesh', 8040, '0010DB58040'),
('Goa', 8070, '00DB55656'),
('Jammu and Kashmir', 8080, '00DB55656'),
('Manipur', 8088, '00DB55656'),
('Himachal Pradesh', 8700, '00DB55656'),
('Gujarat', 8750, '00DB55656'),
('Assam', 8778, '00DB58778'),
('Bihar', 8800, '00DB55656');

-- --------------------------------------------------------

--
-- Table structure for table `newaccount`
--

CREATE TABLE `newaccount` (
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `adhaar` varchar(15) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `accountno` varchar(15) NOT NULL,
  `t_savings` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newaccount`
--

INSERT INTO `newaccount` (`fname`, `lname`, `email`, `city`, `state`, `zip`, `address`, `adhaar`, `gender`, `dob`, `phone`, `accountno`, `t_savings`) VALUES
('Eileen', 'Mascarenhas', 'a208.eileenmas@gmail.com', 'Mumbai', 'Andhra Pradesh', 400079, 'C 22/2 BMC colony Parksite Vik', '512551125565315', 'Female', '2022-09-14', 2147483647, '592127632151207', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usersignup`
--

CREATE TABLE `usersignup` (
  `uname` varchar(30) NOT NULL,
  `pswd` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`uname`, `pswd`, `reg_date`) VALUES
('leo', '0f759dd1ea6c4c76cedc299039ca4f', '2022-09-05 19:43:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`branchno`);

--
-- Indexes for table `newaccount`
--
ALTER TABLE `newaccount`
  ADD PRIMARY KEY (`accountno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
