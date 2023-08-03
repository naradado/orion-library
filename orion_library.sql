-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 08:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orion_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `book_id` int(10) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_isbn` varchar(50) NOT NULL,
  `book_author` int(4) NOT NULL,
  `book_publisher` int(4) NOT NULL,
  `book_cat` int(4) NOT NULL,
  `book_price` double NOT NULL,
  `book_print_date` date NOT NULL,
  `book_add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`book_id`, `book_name`, `book_isbn`, `book_author`, `book_publisher`, `book_cat`, `book_price`, `book_print_date`, `book_add_date`) VALUES
(1, 'A', '', 1, 4, 3, 0, '0000-00-00', '0000-00-00'),
(2, 'Advanced Mathematics', '', 2, 4, 2, 9000, '2021-09-15', '2023-08-03'),
(3, 'Physics for Kids', '45645656', 3, 5, 3, 1200, '2022-07-14', '2023-08-02'),
(4, 'MalalaSekara Sinhala-English Dictionary', '456565465', 2, 4, 4, 3000, '2023-06-13', '2023-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookcat`
--

CREATE TABLE `tbl_bookcat` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bookcat`
--

INSERT INTO `tbl_bookcat` (`cat_id`, `cat_name`) VALUES
(1, 'Fiction'),
(2, 'Action and adventure'),
(3, 'Biography'),
(4, 'Dictionary'),
(5, 'Math'),
(6, 'Science'),
(7, 'Business/economics');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(5) NOT NULL,
  `user_fname` varchar(120) NOT NULL,
  `user_lname` varchar(120) NOT NULL,
  `user_address` varchar(500) NOT NULL,
  `user_tel` varchar(15) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(500) NOT NULL,
  `user_roll_id` int(2) NOT NULL,
  `user_enabled` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_address`, `user_tel`, `user_email`, `user_password`, `user_roll_id`, `user_enabled`) VALUES
(1, 'Sandun', 'Perera', 'Colombo', '1234567890', 'abc@abc.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 0),
(2, 'Kamala', 'gfsg', 'Colombo', '1234567890', 'abc@abc.com', '51eac6b471a284d3341d8c0c63d0f1a286262a18', 3, 0),
(3, 'Saman', 'Alwis', 'Matara', '9876543210', 'saman@abc.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 3, 0),
(4, 'Chathura', 'perera', 'Piliyandala', '123', 'naradado@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 3, 1),
(5, 'abc', 'bcd', 'Matara', '123', 'abc@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_roll`
--

CREATE TABLE `user_roll` (
  `roll_id` int(2) NOT NULL,
  `roll_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_roll`
--

INSERT INTO `user_roll` (`roll_id`, `roll_name`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_bookcat`
--
ALTER TABLE `tbl_bookcat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_roll`
--
ALTER TABLE `user_roll`
  ADD PRIMARY KEY (`roll_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_bookcat`
--
ALTER TABLE `tbl_bookcat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_roll`
--
ALTER TABLE `user_roll`
  MODIFY `roll_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
