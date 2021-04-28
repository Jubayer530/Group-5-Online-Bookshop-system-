-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 11:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jubayer`
--

-- --------------------------------------------------------

--
-- Table structure for table `addorder`
--

CREATE TABLE `addorder` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addorder`
--

INSERT INTO `addorder` (`id`, `username`, `bookname`, `mobile`, `email`, `address`) VALUES
(1, 'Jubayer', 'ABC', '2147483647', 'rootsahamed@gmail.com', 'Bashundhara Residential area,dhaka,Bangladesh'),
(60, 'Sabbir', 'Feluda', '030403403400', 'rootsahamed@gmail.com', 'Dhanmondi');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Abrar Ragib', 'abrar', '1234aa#'),
(2, 'Abrar Ragib', 'ragib', '654321'),
(3, 'Jubayer Ahamed', 'Jubayer', '111aa#');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_man_add`
--

CREATE TABLE `delivery_man_add` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_man_add`
--

INSERT INTO `delivery_man_add` (`id`, `name`, `uname`, `pass`, `gender`, `email`, `mobile`) VALUES
(1, 'Abrar', 'sdeadad', '125478', 'male', 'abcde22@gmail.com', '14544456'),
(2, 'Jubayer Ahamed', 'Roots', '12334444', 'male', 'jubayer22ahamed@gmail.com', '012030320303');

-- --------------------------------------------------------

--
-- Table structure for table `seller_add`
--

CREATE TABLE `seller_add` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_add`
--

INSERT INTO `seller_add` (`id`, `name`, `uname`, `pass`, `gender`, `email`, `mobile`) VALUES
(1, 'Abrar', 'abrar', '123456', 'male', 'dksksdks@gmail.com', '934934349344'),
(2, 'Boss', 'boss', '34334343', 'male', 'djfdnfdkfnmdk@gmail.com', '49349349394');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `dob` text NOT NULL,
  `phone` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `country`, `email`, `dob`, `phone`, `gender`, `nid`) VALUES
(1, 'Jubayer Ahamed', 'Jubayer', '111aa#', 'Bangladesh', 'jubayer22ahamed@gmail.com', '7-May-1980', '018983939391', 'Male', '2147483647'),
(14, 'Sabbir Ahamed', 'Sabbir', 'aa222#', 'Bangladesh', 'sabbir22ahamed@gmail.com', '4-May-1976', '88001743525590', 'Male', '2323242344245000'),
(50, 'Abrar Ragib', 'abrar', '1234aa#', 'Bangladesh', 'abrarragib@gmail.com', '20/6/1996', '92949949394', '', '39439439439439493');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addorder`
--
ALTER TABLE `addorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_man_add`
--
ALTER TABLE `delivery_man_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_add`
--
ALTER TABLE `seller_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addorder`
--
ALTER TABLE `addorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery_man_add`
--
ALTER TABLE `delivery_man_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seller_add`
--
ALTER TABLE `seller_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
