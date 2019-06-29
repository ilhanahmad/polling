-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 08:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polling`
--

-- --------------------------------------------------------

--
-- Table structure for table `poll_data`
--

CREATE TABLE `poll_data` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `votes` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll_data`
--

INSERT INTO `poll_data` (`id`, `author`, `votes`, `date_time`) VALUES
(1, 'Charles Dickens', 5, '2019-06-29 04:12:10'),
(2, 'Miguel de Cervantes', 1, '2019-06-29 02:13:11'),
(3, 'J.R.R. Tolkien', 4, '2019-06-29 02:13:11'),
(4, 'Antoine de Saint-Exuper', 7, '2019-06-29 09:25:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poll_data`
--
ALTER TABLE `poll_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poll_data`
--
ALTER TABLE `poll_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
