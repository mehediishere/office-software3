-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 01:38 PM
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
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `id` int(11) NOT NULL,
  `branch` int(10) NOT NULL,
  `deposit` double(20,2) NOT NULL,
  `last_deposit` date NOT NULL DEFAULT current_timestamp(),
  `withdraw` double(20,2) NOT NULL,
  `last_withdraw` date NOT NULL DEFAULT current_timestamp(),
  `expense` double(20,2) NOT NULL,
  `last_expense` date NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`id`, `branch`, `deposit`, `last_deposit`, `withdraw`, `last_withdraw`, `expense`, `last_expense`, `date`) VALUES
(1, 1, 20000.00, '2022-09-08', 20000.00, '2022-09-08', 20000.00, '2022-09-08', '2022-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `total_users` int(10) NOT NULL,
  `last_added` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch`, `total_users`, `last_added`, `date`) VALUES
(1, 'malibagh', 1, '2022-09-07', '2022-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `branch` int(10) NOT NULL,
  `user` int(10) NOT NULL,
  `deposit_date` date NOT NULL,
  `amount` double(20,2) NOT NULL,
  `deposit_with` varchar(50) NOT NULL,
  `deposit_details` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `status_change_date` date NOT NULL,
  `approved_by` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `invoice` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `amount` double(20,2) NOT NULL,
  `details` text NOT NULL,
  `expense_date` date NOT NULL,
  `proof` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `branch`, `user`, `invoice`, `category`, `amount`, `details`, `expense_date`, `proof`, `date`) VALUES
(10, 1, 0, 85235, 4, 123.00, '', '2022-09-08', 'not-available.png', '2022-09-08'),
(11, 1, 0, 3344, 6, 4000.00, '', '2022-09-06', 'not-available.png', '2022-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `id` int(11) NOT NULL,
  `branch` int(10) NOT NULL,
  `user` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense_category`
--

INSERT INTO `expense_category` (`id`, `branch`, `user`, `category`, `details`, `date`) VALUES
(4, 1, 0, 'Lunch', 'no details', '2022-09-08'),
(6, 1, 0, 'Travel', 'bus, car, bike travel for office purpose ', '2022-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `id` int(11) NOT NULL,
  `branch` int(10) NOT NULL,
  `user` int(10) NOT NULL,
  `fund_type` varchar(50) NOT NULL,
  `amount` double(20,2) NOT NULL,
  `payment_with` varchar(50) NOT NULL,
  `payment_details` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `status_change_date` date NOT NULL,
  `approved_by` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `branch` int(10) NOT NULL,
  `balance` double(20,2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(14) NOT NULL,
  `address` text NOT NULL,
  `details` text NOT NULL,
  `img` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `branch`, `balance`, `name`, `password`, `email`, `phone`, `address`, `details`, `img`, `date`, `status`) VALUES
(1, 1, 200.00, 'mehedi', '1234', 'mehedi@mail.com', 1957586942, 'ECSU CAMPUS BOX\n1704 WEEKSVILLE ROAD\nELIZABETH CITY, NC 27909', '', '', '2022-09-07', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `branch` int(10) NOT NULL,
  `user` int(10) NOT NULL,
  `withdraw_date` date NOT NULL,
  `amount` double(20,2) NOT NULL,
  `withdraw_with` varchar(50) NOT NULL,
  `withdraw_details` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `status_change_date` date NOT NULL,
  `approved_by` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
