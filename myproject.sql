-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2026 at 02:01 PM
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
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Qualification` varchar(100) DEFAULT NULL,
  `CGPA` varchar(50) DEFAULT NULL,
  `Courses` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Mobile`, `Qualification`, `CGPA`, `Courses`) VALUES
(1, 'Pragathi Chithiravel  ', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'M.Sc.Computer Science'),
(26, 'Pragathi Chithiravel ', 'pragathivel05@gmail.com', '6375879567', 'BCA', '8.39', 'B.A.Tamil'),
(27, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '2147483647', 'BCA', '8.39', 'B.Sc.Bio-chemistry'),
(28, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '2147483647', 'BCA', '8.39', 'B.A.Tamil'),
(30, 'Pragathi Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'M.Sc.Computer Science'),
(31, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(32, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(33, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(34, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(35, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(36, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(37, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(38, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(39, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(40, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(41, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(42, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(43, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(44, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(45, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(46, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(47, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(48, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(49, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(50, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(51, 'Gnanasri Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.A.Tamil'),
(52, 'Pavithra K', 'pavi@gmail.com', '9678377767', 'BCA', '9.39', 'B.Sc.Computer science'),
(53, 'Pavithra K', 'pavi@gmail.com', '9678377767', 'BCA', '9.39', 'M.Sc.Computer Science'),
(54, 'Pavithra K', 'pavi@gmail.com', '9678377767', 'BCA', '9.39', 'B.A.Tamil'),
(55, 'Pavithra K', 'pavi@gmail.com', '9678377767', 'BCA', '9.39', 'B.A.Tamil'),
(56, 'Pavithra K', 'pavi@gmail.com', '9678377767', 'BCA', '9.39', 'B.A.Tamil'),
(57, 'Pragathi Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'M.Sc.Microbiology'),
(58, 'Pragathi Chithiravel', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8.39', 'B.Ed'),
(59, 'Pragathi Chithiravel ', 'pragathivel05@gmail.com', '6379580793', 'BCA', '9', 'B.A.Tamil'),
(60, 'Pragathi Chithiravel  ', 'pragathivel05@gmail.com', '6379580793', 'BCA', '8', 'B.A.Tamil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
