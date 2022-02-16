-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 03:21 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notice`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice_store`
--

CREATE TABLE `notice_store` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_store`
--

INSERT INTO `notice_store` (`id`, `title`, `description`, `date`) VALUES
(4, 'New Admission', 'Daffodil International University (DIU) is a recognized private university in Bangladesh.Daffodil International University came into being on 24th January ..Daffodil International University (DIU) is a recognized private university in Bangladesh.Daffodil International University came into being on 24th January ..Daffodil International University (DIU) is a recognized private university in Bangladesh.Daffodil International University came into being on 24th January ..', '2021-09-15'),
(5, 'Summer admission', 'Undergraduate ProgramsUndergraduate Admission Deadlines Postgraduate ProgramsMPSM Admission Deadlines.\r\nUndergraduate ProgramsUndergraduate Admission Deadlines Postgraduate ProgramsMPSM Admission Deadlines.\r\nUndergraduate ProgramsUndergraduate Admission Deadlines Postgraduate ProgramsMPSM Admission Deadlines.\r\nUndergraduate ProgramsUndergraduate Admission Deadlines Postgraduate ProgramsMPSM Admission Deadlines.', '2021-09-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice_store`
--
ALTER TABLE `notice_store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice_store`
--
ALTER TABLE `notice_store`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
