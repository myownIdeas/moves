-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2016 at 10:10 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movers`
--

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `id` int(50) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`id`, `f_name`, `mobile`, `email`, `text`, `created_at`, `updated_at`) VALUES
(1, 'waqas', '3333', '3333', '33', '2016-05-29 11:37:45', '2016-05-29 11:37:45'),
(2, 'a', 'a', 'a', 'a', '2016-05-28 07:00:00', '2016-05-29 06:23:22'),
(3, 'waqas', '3333333333', 'muhammad.waqas7265@gmail.com', 'ddd', '2016-05-29 16:57:36', '2016-05-29 16:57:36'),
(4, 'waqas', '3333333333', 'muhammad.waqas7265@gmail.com', 'ddd', '2016-05-29 16:59:01', '2016-05-29 16:59:01'),
(5, 'waqas', '3333333333', 'muhammad.waqas7265@gmail.com', 'ddd', '2016-05-29 17:01:58', '2016-05-29 17:01:58'),
(6, 'waqas', '3333333333', 'muhammad.waqas7265@gmail.com', 'ddd', '2016-05-29 17:04:41', '2016-05-29 17:04:41'),
(7, 'a', 'a', 'a', 'a', '2016-05-29 17:19:32', '2016-05-29 17:19:32'),
(8, 'a', 'a', 'a', 'a', '2016-05-29 17:21:09', '2016-05-29 17:21:09'),
(9, 'waqas', '3333333333', 'a', 's', '2016-06-01 22:12:16', '2016-06-01 22:12:16'),
(10, 'waqas', '3333333333', 'a', 's', '2016-06-01 22:13:04', '2016-06-01 22:13:04'),
(11, 'waqas', '3333333333', 'a', 's', '2016-06-01 22:14:02', '2016-06-01 22:14:02'),
(12, 'waqas', '3333333333', 'a', 's', '2016-06-01 22:15:46', '2016-06-01 22:15:46'),
(13, 'a', 'a', 'a', 'a', '2016-06-01 22:16:51', '2016-06-01 22:16:51'),
(14, 'a', 'a', 'a', 'a', '2016-06-01 22:19:54', '2016-06-01 22:19:54'),
(15, 'a', 'a', 'a', 'a', '2016-06-01 22:20:36', '2016-06-01 22:20:36'),
(16, 'a', 'a', 'a', 'a', '2016-06-01 22:21:55', '2016-06-01 22:21:55'),
(17, 'a', 'a', 'a', 'a', '2016-06-01 22:23:05', '2016-06-01 22:23:05'),
(18, 'waqas', '3333333333', '3333', 'z', '2016-06-01 22:23:20', '2016-06-01 22:23:20'),
(19, 'waqas', '3333333333', '3333', 'z', '2016-06-01 22:23:42', '2016-06-01 22:23:42'),
(20, 'a', 'a', 'a', 'a', '2016-06-01 22:23:55', '2016-06-01 22:23:55'),
(21, 'tesing', 'tesign', 'tesing', 'texting', '2016-06-02 15:03:45', '2016-06-02 15:03:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
