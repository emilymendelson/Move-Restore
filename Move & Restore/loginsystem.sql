-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2020 at 04:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `exercises` text NOT NULL,
  `comments` mediumtext NOT NULL,
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `uid`, `exercises`, `comments`, `date`) VALUES
(10, '19', 'test', 'test', '2020-06-30'),
(11, '21', 'Test 123', 'Test 123', '2020-06-30'),
(12, '19', 'Testing', 'Testing', '2020-06-30'),
(14, '19', 'Jumping Jacks', 'I was able to complete more jumping jacks than yesterday.', '2020-07-01'),
(16, '19', 'Push up', 'I did 10 push ups!', '2020-06-30'),
(17, '19', 'Push ups', 'I did 20 push-ups', '2020-06-30'),
(21, '19', 'Testing date', 'Testing date', '2020-07-01'),
(22, '19', 'Testing date again', 'Testing date again', 'Wednesday, July 1, 2020'),
(23, '19', '- Testing 123\r\n- Test 123\r\n', '- Testing 123\r\n- Test 123\r\n- Hello', 'Wednesday, July 1, 2020'),
(24, '19', 'slrkglajed', 'afklnawlfk', 'Wednesday, July 1, 2020'),
(25, '19', 'Push ups', 'My back is hurting, but I did 10 push ups today', 'Wednesday, July 1, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(17, 'bob12345', 'bob@gmail.com', '$2y$10$0fyXCI4ZEJpypXlfqlvAkOqyVmsvFaJjTFNPbwzgDf7cw8Fr4BKeK'),
(18, 'Emily14', '17ecm1@queensu.com', '$2y$10$MEID987Iu8aXIH1fmS66TubVpqZo49NJVZJ7M7o6qkLa32mVMS1Yq'),
(19, 'Emily', 'emilymendelson14@gmail.com', '$2y$10$LGCcY9mrUaEpTvTV8n5X7u5D97T084VHZeFYbpERe3L.qvD8B6TTm'),
(20, 'Essmandelbaum', 'Essmandelbaum@gmail.com', '$2y$10$dUB5Gm889qaIWNCm8jt9a.fTR5YSm2njfWQLKsJFNtm7q3mUwgLG6'),
(21, 'test', 'test@gmail.ca', '$2y$10$zh/ZkHSrCc.LGWSatG0sFuTmOM3ipWGyjidqZIFt/EdqCKBNwTJX.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
