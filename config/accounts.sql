-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 12:56 PM
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
(1, 1, 25000.00, '2022-09-08', 15000.00, '2022-09-08', 20000.00, '2022-09-08', '2022-09-08'),
(2, 2, 31000.00, '2022-09-08', 32000.00, '2022-09-08', 33000.00, '2022-09-08', '2022-09-08');

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
(1, 'malibagh', 1, '2022-09-07', '2022-09-07'),
(2, 'gulshan', 1, '2022-09-08', '2022-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `branch` int(10) NOT NULL,
  `details` text NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `deposit_date` date NOT NULL,
  `receipt` varchar(100) NOT NULL,
  `payment_option` varchar(20) NOT NULL,
  `cash_receiver` varchar(50) NOT NULL,
  `bank_account_holder` varchar(50) NOT NULL,
  `bank_acc_number` varchar(30) NOT NULL,
  `bank_name` varchar(20) NOT NULL,
  `bank_branch` text NOT NULL,
  `bank_route` varchar(20) NOT NULL,
  `mobile_bank` varchar(50) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `mobile_txid` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `approval_date` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `branch`, `details`, `amount`, `deposit_date`, `receipt`, `payment_option`, `cash_receiver`, `bank_account_holder`, `bank_acc_number`, `bank_name`, `bank_branch`, `bank_route`, `mobile_bank`, `mobile_number`, `mobile_txid`, `status`, `approval_date`, `date`) VALUES
(1, 1, 'no details', 5000.00, '2022-09-08', '1662792327118invoice receipt.png', 'bank', '', 'Sahadat Hossan', '21586322598544', 'Sonali Bank', 'Mirpur sonali branch', '24451', '', '', '', 'pending', '0000-00-00', '2022-09-10'),
(2, 1, 'no details', 5000.00, '2022-09-08', '1662792327118invoice receipt.png', 'mobile', '', '', '', '', '', '', 'bkash', '01598658655', 'AXTH55825855', 'pending', '0000-00-00', '2022-09-10'),
(3, 2, 'no details', 5000.00, '2022-09-08', '1662792327118invoice receipt.png', 'mobile', '', '', '', '', '', '', 'bkash', '01598658655', 'AXTH55825855', 'pending', '0000-00-00', '2022-09-10');

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
-- Table structure for table `fund_request`
--

CREATE TABLE `fund_request` (
  `id` int(11) NOT NULL,
  `branch` int(10) NOT NULL,
  `request_branch` int(11) NOT NULL,
  `details` text NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `request_date` date NOT NULL,
  `payment_option` varchar(20) NOT NULL,
  `request_from` varchar(50) NOT NULL,
  `bank_account_holder` varchar(50) NOT NULL,
  `bank_acc_number` varchar(30) NOT NULL,
  `bank_name` varchar(20) NOT NULL,
  `bank_branch` text NOT NULL,
  `bank_route` varchar(20) NOT NULL,
  `mobile_bank` varchar(50) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `mobile_txid` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `approval_date` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fund_request`
--

INSERT INTO `fund_request` (`id`, `branch`, `request_branch`, `details`, `amount`, `request_date`, `payment_option`, `request_from`, `bank_account_holder`, `bank_acc_number`, `bank_name`, `bank_branch`, `bank_route`, `mobile_bank`, `mobile_number`, `mobile_txid`, `status`, `approval_date`, `date`) VALUES
(8, 1, 2, 'no details', 2333.00, '2022-09-10', 'cash', 'Alim vai', '', '', '', '', '', '', '', '', 'accepted', '2022-09-11', '2022-09-10');

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
(1, 1, 200.00, 'mehedi', '1234', 'mehedi@mail.com', 1957586942, 'ECSU CAMPUS BOX\n1704 WEEKSVILLE ROAD\nELIZABETH CITY, NC 27909', '', '', '2022-09-07', 'active'),
(2, 2, 200.00, 'pino', '1234', 'pino@mail.com', 1575656322, 'SCSU CAMPUS BOX\r\n1704 WEEKSVILLE ROAD\r\nELIZABETH CITY, NC 27909', '', '', '2022-09-09', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `branch` int(10) NOT NULL,
  `details` text NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `withdraw_date` date NOT NULL,
  `payment_option` varchar(20) NOT NULL,
  `withdraw_from` varchar(50) NOT NULL,
  `bank_account_holder` varchar(50) NOT NULL,
  `bank_acc_number` varchar(30) NOT NULL,
  `bank_name` varchar(20) NOT NULL,
  `bank_branch` text NOT NULL,
  `bank_route` varchar(20) NOT NULL,
  `mobile_bank` varchar(50) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `mobile_txid` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `approval_date` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `branch`, `details`, `amount`, `withdraw_date`, `payment_option`, `withdraw_from`, `bank_account_holder`, `bank_acc_number`, `bank_name`, `bank_branch`, `bank_route`, `mobile_bank`, `mobile_number`, `mobile_txid`, `status`, `approval_date`, `date`) VALUES
(4, 2, 'no details', 2000.00, '0000-00-00', 'cash', 'sarafat vai', '', '', '', '', '', '', '', '', 'pending', '0000-00-00', '2022-09-10'),
(5, 2, 'no details', 2000.00, '0000-00-00', 'cash', 'Alim vai', '', '', '', '', '', '', '', '', 'pending', '0000-00-00', '2022-09-10'),
(6, 1, 'new client safayet', 3000.00, '2022-09-15', 'cash', 'sarafat vai', '', '', '', '', '', '', '', '', 'pending', '0000-00-00', '2022-09-10');

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
-- Indexes for table `fund_request`
--
ALTER TABLE `fund_request`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `fund_request`
--
ALTER TABLE `fund_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
