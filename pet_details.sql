-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 11:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `size` varchar(50) NOT NULL,
  `health_status` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `name`, `age`, `breed`, `size`, `health_status`, `description`, `image`, `role`) VALUES
(1, 'adminGPON', 4, 'dog', '5ft', 'good', 'perfect', 'forest.jpeg', 'Dog'),
(2, 'adminGPON', 4, 'dog', '5ft', 'good', 'perfect', 'forest.jpeg', 'Dog'),
(3, 'Dog', 2, 'Dog', '2ft', 'perfect', 'to goood', 'garden.jpeg', 'Cat'),
(4, 'sushant yadav', 2, 'dog', '2ft', 'good', 'sffdgfgd', 'agr.jpeg', 'Dog'),
(5, 'sushant yadav', 2, 'dog', '2ft', 'good', 'sffdgfgd', 'agr.jpeg', 'Dog'),
(6, 'Bibek Yadav', 33, 'parrot', '5ft', 'perfect', 'fffff', 'garden.jpeg', 'Cat'),
(7, 'Shidharth Yadav', 4, 'Cat', '5ft', 'perfect', 'Description', 'river.png', 'Birds & Other'),
(8, 'Virat Kohli', 5, 'dog', '2ft', 'good', 'Descript43eerrerrion', 'river.png', 'Cat'),
(9, 'Virat Kohli', 5, 'dog', '5ft', 'good', 'Description', 'forest.jpeg', 'Cat'),
(10, 'ram', 2, 'parrot', '2ft', 'perfect', 'Description', 'forest.jpeg', 'Cat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
