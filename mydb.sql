-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 03, 2019 at 05:12 PM
-- Server version: 10.1.41-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.20-2+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytbl`
--

CREATE TABLE `mytbl` (
  `id` int(11) NOT NULL,
  `todo` varchar(225) NOT NULL,
  `date` datetime NOT NULL,
  `tik` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytbl`
--

INSERT INTO `mytbl` (`id`, `todo`, `date`, `tik`) VALUES
(195, 'nimisha\r\n', '2019-09-02 11:01:36', 0),
(196, 'done', '2019-09-03 16:53:42', 1),
(200, 'Complete the project', '2019-09-03 16:53:16', 1),
(201, 'Test', '2019-09-03 16:53:12', 0),
(202, 'Get ID', '2019-09-03 16:53:02', 1),
(203, 'Get ID', '2019-09-02 11:01:41', 1),
(204, 'Exam', '2019-09-03 16:53:19', 1),
(205, 'Result', '2019-09-02 11:01:43', 1),
(211, 'Did', '2019-09-02 11:01:34', 0),
(223, 'meet', '2019-08-31 19:35:52', 1),
(226, 'Get', '2019-08-31 19:35:50', 0),
(233, 'get train', '2019-08-31 19:36:37', 1),
(234, 'trip', '2019-08-31 21:24:34', 0),
(235, 'gone', '2019-08-31 22:45:22', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytbl`
--
ALTER TABLE `mytbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mytbl`
--
ALTER TABLE `mytbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
