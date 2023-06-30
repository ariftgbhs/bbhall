-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 01:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbhall`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `date`, `password`) VALUES
(1, 'Arif Islam', 'u1908038@student.cuet.ac.bd', '2023-06-30 09:53:36', '$2y$10$8khwOQwb3aGdvY9/7Y1WxOQQv4JUT9fz6AVTpLasXpLIFDvakWya6');

-- --------------------------------------------------------

--
-- Table structure for table `webmessages`
--

CREATE TABLE `webmessages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `seen` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `webmessages`
--

INSERT INTO `webmessages` (`id`, `name`, `email`, `department`, `phone`, `subject`, `message`, `date`, `seen`) VALUES
(1, 'Abid', 'abid@gmail.com', 'EEE', '01915664090', 'TEST', 'hello test', '2023-06-30 11:17:24', 0),
(2, 'Abid', 'abid@gmail.com', 'EEE', '01915664090', 'TEST', 'hello test', '2023-06-30 11:20:17', 0),
(3, 'Abid Hasan', 'abid@gmail.com', 'CSE', '01915664090', 'I need a seat in the hostel but I don\'t know how to apply', 'Hello, I need a seat in the hostel can you please help  me, its urgent.....', '2023-06-30 11:32:12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webmessages`
--
ALTER TABLE `webmessages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webmessages`
--
ALTER TABLE `webmessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
