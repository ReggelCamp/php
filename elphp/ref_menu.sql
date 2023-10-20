-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 04:58 PM
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
-- Database: `pointofsale`
--

-- --------------------------------------------------------

--
-- Table structure for table `ref_menu`
--

CREATE TABLE `ref_menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(1000) NOT NULL,
  `menu_desc` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_menu`
--

INSERT INTO `ref_menu` (`id`, `menu_name`, `menu_desc`, `price`) VALUES
(1, 'pork adobo', 'pork', 50),
(2, 'chicken adobo', 'chicken', 50),
(3, 'chicken adobo', 'chicken', 50),
(4, 'fried chicken', 'chicken', 40),
(5, 'sweet and sour pork', 'pork', 60),
(6, 'letchon', 'pork', 400),
(24, 'dried fish', 'fish', 10),
(25, 'fried fish', 'fish', 25),
(26, 'fried fish', 'fish', 25),
(27, 'fish soup', 'fish', 50),
(28, 'sweet and sour chicken', 'chicken', 60),
(29, 'rice', 'rice', 10),
(30, 'rice', 'rice', 10),
(31, 'fried rice', 'rice', 15),
(32, 'chaofan', 'rice', 100),
(33, 'hotdog', 'hotdog', 10),
(34, 'tocino', 'pork', 15),
(35, 'tocino', 'pork', 5),
(36, 'hotdog', 'pork', 10),
(37, 'hotdog', 'chicken', 10),
(38, 'hotdog', 'chicken', 10),
(39, 'chicken curry', 'chicken', 50),
(40, 'chicken curry', 'chicken', 50),
(41, 'chicken curry', 'chicken', 50),
(42, 'monngo', 'vegetables', 15),
(43, 'pork curry', 'pork', 50),
(44, 'nuggets', 'chicken', 50),
(45, 'nuggets', 'chicken', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ref_menu`
--
ALTER TABLE `ref_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ref_menu`
--
ALTER TABLE `ref_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
