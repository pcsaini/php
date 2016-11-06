-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2016 at 04:07 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(100) NOT NULL,
  `book_name` varchar(64) NOT NULL,
  `isbn_no` int(10) NOT NULL,
  `author` varchar(32) NOT NULL,
  `edition` int(10) NOT NULL,
  `no_of_copies` int(10) NOT NULL,
  `book_category_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `isbn_no`, `author`, `edition`, `no_of_copies`, `book_category_id`) VALUES
(1, 'C++ How to Program', 1234567, 'Harvey Deitel and Paul Deitel', 2, 10, 2),
(2, 'C How to Program', 12345455, 'Harvey Deitel and Paul Deitel', 3, 10, 2),
(3, 'Handbook of Physics', 1234167, 'Arihant Publications', 4, 12, 3),
(4, 'Object Oriented Programming using Java', 1234233, 'Simon Kindol', 1, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE IF NOT EXISTS `book_category` (
  `book_category_id` int(10) NOT NULL,
  `book_category_name` varchar(34) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`book_category_id`, `book_category_name`) VALUES
(1, 'Computer Science'),
(2, 'C Programming'),
(3, 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `book_code`
--

CREATE TABLE IF NOT EXISTS `book_code` (
  `book_id` int(100) NOT NULL,
  `book_code` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE IF NOT EXISTS `issue_book` (
  `user_id` int(100) NOT NULL,
  `book_id` int(100) NOT NULL,
  `issue_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `return_date` int(32) NOT NULL,
  `issue_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register_book`
--

CREATE TABLE IF NOT EXISTS `register_book` (
  `user_id` int(100) NOT NULL,
  `book_id` int(100) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `register_status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `return_book`
--

CREATE TABLE IF NOT EXISTS `return_book` (
  `user_id` int(100) NOT NULL,
  `book_id` int(100) NOT NULL,
  `issue_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `return_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `return_status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(100) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `profile_pic` varchar(32) NOT NULL,
  `address` varchar(100) NOT NULL,
  `registered_book` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `gender`, `contact_number`, `profile_pic`, `address`, `registered_book`) VALUES
(1, 'test', 'cc03e747a6afbbcbf8be7668acfebee5', 'test', '123', 'test@gmail.com', 'Male', 9887554425, '5.png', 'Ahmedabad', 2),
(2, 'pcsaini', 'ff4e3b8f1c31b80faf1d87a8df848886', 'Prem Chand ', 'Saini', 'premchandsaini81@gmail.com', 'Male', 9887554425, 'cmy.png', 'IIIT Vadodara', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`book_category_id`);

--
-- Indexes for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD PRIMARY KEY (`issue_date`);

--
-- Indexes for table `register_book`
--
ALTER TABLE `register_book`
  ADD PRIMARY KEY (`register_date`);

--
-- Indexes for table `return_book`
--
ALTER TABLE `return_book`
  ADD PRIMARY KEY (`return_date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `book_category_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
