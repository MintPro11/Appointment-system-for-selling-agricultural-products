-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 06:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginadminuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_user`
--

CREATE TABLE `form_user` (
  `id_form` int(5) NOT NULL,
  `date1` date NOT NULL,
  `time1` time NOT NULL,
  `name1` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `form_user`
--

INSERT INTO `form_user` (`id_form`, `date1`, `time1`, `name1`, `phone`, `unit`, `status`) VALUES
(3, '2023-03-31', '09:40:00', 'Jorndan mithison', '0872395621', 'มันสำปะหลังและอ้อย', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `userlevel` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `userlevel`) VALUES
(1, 'admin12345', '827ccb0eea8a706c4c34a16891f84e7b', 'Watnachai', 'Manikham', 'a'),
(5, 'toto6666', 'e9510081ac30ffa83f10b68cde1cac07', 'Jorndan', 'mithison', 'm'),
(6, 'sun9999', 'fa246d0262c3925617b0c72bb20eeb1d', 'punyarit', 'klapachen', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_user`
--
ALTER TABLE `form_user`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_user`
--
ALTER TABLE `form_user`
  MODIFY `id_form` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
