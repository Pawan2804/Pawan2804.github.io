-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 06:40 PM
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
  `Date_and_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_signup`
--

INSERT INTO `book_signup` (`Post_id`, `First_name`, `Last_name`, `Email`, `Phone_no`, `description`, `image`, `Date_and_Time`) VALUES
(63, '3dedff', 'xscdv', '  xc vc', 435456546, 'rggbgfnbgfhbgfn', 'IMG_20180428_225221.jpg', '2019-08-31 11:47:43'),
(65, 'Pawan', 'V', 'pawangohan98@gmail.com', 223243, 'Good Book', 'marks card 10 pawan 001.jpg', '2019-09-15 16:23:24'),
(66, 'Rekha', 'V', 'rekha@gmail.com', 342455, 'Good Book', 'pawan 10th marks card 2 001.jpg', '2019-09-15 16:38:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_signup`
--
ALTER TABLE `book_signup`
  ADD PRIMARY KEY (`Post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_signup`
--
ALTER TABLE `book_signup`
  MODIFY `Post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
