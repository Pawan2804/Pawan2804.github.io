-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 02:27 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `User_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`User_id`, `username`, `password`) VALUES
(1, 'p', '1');

-- --------------------------------------------------------

--
-- Table structure for table `book_signup`
--

CREATE TABLE `book_signup` (
  `Post_id` int(11) NOT NULL,
  `First_name` varchar(40) NOT NULL,
  `Last_name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_no` bigint(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Date_and_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `book_type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_signup`
--

INSERT INTO `book_signup` (`Post_id`, `First_name`, `Last_name`, `Email`, `Phone_no`, `description`, `image`, `Date_and_Time`, `book_type`) VALUES
(71, '', '', '', 0, '', '', '2019-10-16 14:21:13', 'non fiction'),
(72, '', '', '', 0, '', '', '2019-10-16 14:21:40', 'non fiction'),
(73, 'Pawan', 'V', 'pawangohan98@gmail.com', 9739285834, 'OHH MY GSADSAZDAS', 'WhatsApp Image 2019-10-14 at 17.07.11.jpeg', '2019-10-16 14:22:45', 'non fiction'),
(74, '', '', '', 0, '', '', '2019-10-16 15:13:06', 'Fiction'),
(75, 'Pawan', 'v', 'PAWANGOHAN98@GMAIL.COM', 9739285834, 'VFDBFDBGDNFGNFNFNFN', 'WhatsApp Image 2019-10-14 at 17.07.11.jpeg', '2019-10-17 10:04:58', 'Fiction');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `book_signup`
--
ALTER TABLE `book_signup`
  ADD PRIMARY KEY (`Post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_signup`
--
ALTER TABLE `book_signup`
  MODIFY `Post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
