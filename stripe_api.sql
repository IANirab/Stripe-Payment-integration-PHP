-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 07:51 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stripe api`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `id` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `creat_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `first_name`, `last_name`, `email`, `creat_date`) VALUES
('cus_DfFbj7ceTPmlwM', 'Istiaq ', 'Nirab', 'project@gmail.com', '2018-09-24 20:32:14'),
('cus_DfFFT4Ad7OBz6N', 'Istiaq ', 'Nirab', 'project@gmail.com', '2018-09-24 20:10:22'),
('cus_DfHhI0L3KIYYGS', 'Istiaq ', 'Nirab', 'project@gmail.com', '2018-09-24 22:41:48'),
('cus_DfHoHLUwZYeKpp', 'Istiaq ', 'Nirab', 'project@gmail.com', '2018-09-24 22:49:17'),
('cus_DfJ67lSOJp9YOk', 'Istiaq ', 'Nirab', 'project@gmail.com', '2018-09-25 00:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trans`
--

CREATE TABLE `tbl_trans` (
  `id` varchar(200) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `product` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `currency` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `creat_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_trans`
--

INSERT INTO `tbl_trans` (`id`, `userid`, `product`, `amount`, `currency`, `status`, `creat_date`) VALUES
('ch_1DDxFJAyYKpnWlmbo1OiEoAs', 'cus_DfHoHLUwZYeKpp', 'Intro To React Course', '5000', 'usd', 'succeeded', '2018-09-24 22:49:17'),
('ch_1DDyUIAyYKpnWlmbTeEBBKyi', 'cus_DfJ67lSOJp9YOk', 'Intro To React Course', '5000', 'usd', 'succeeded', '2018-09-25 00:08:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
