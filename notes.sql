-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 09:10 AM
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
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `note`, `created_at`, `updated_at`, `status`) VALUES
(1, 51, 'MAKE IT SHORTER', '2024-11-06 12:59:15', '2024-11-06 14:02:16', 'False'),
(2, 51, 'Traveling is more than just visiting new places; it\'s about experiencing different cultures', '2024-11-06 13:03:47', '2024-11-06 14:02:39', 'False'),
(3, 51, 'HAPPY MONDAY', '2024-11-06 13:06:33', '2024-11-06 14:02:41', 'False'),
(4, 51, 'TEST', '2024-11-06 13:06:52', '2024-11-06 14:02:42', 'False'),
(5, 51, 'MMM', '2024-11-06 13:08:18', '2024-11-06 14:02:43', 'False'),
(6, 51, 'YEEEEEEEE', '2024-11-06 13:09:22', '2024-11-06 14:02:43', 'False'),
(7, 51, 'Finally it\'s Working', '2024-11-06 13:16:25', '2024-11-06 13:16:25', 'True'),
(8, 51, 'PROJECT IS DONE', '2024-11-06 14:11:47', '2024-11-06 14:11:47', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `notes_created` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `Email`, `password`, `notes_created`) VALUES
(1, 'haag.emmalee', 'jkilback@example.org', 'Vandervort', 0),
(2, 'grimes.gilda', 'viola81@example.net', 'Dooley', 0),
(3, 'kutch.martina', 'delphia99@example.net', 'Barrows', 0),
(4, 'kellen58', 'kilback.henry@example.net', 'Cole', 0),
(5, 'saul49', 'ehauck@example.org', 'Marks', 0),
(6, 'zjohnston', 'tkoelpin@example.org', 'Hammes', 0),
(7, 'emilie.tremblay', 'johnston.mabelle@example.com', 'Hansen', 0),
(8, 'ispencer', 'romaguera.tomasa@example.com', 'Johns', 0),
(9, 'maegan24', 'xzavier.eichmann@example.com', 'Doyle', 0),
(10, 'tchristiansen', 'tristin10@example.org', 'Feil', 0),
(11, 'dmonahan', 'ydare@example.com', 'O\'Connell', 0),
(12, 'rmitchell', 'laila.bashirian@example.net', 'Hodkiewicz', 0),
(13, 'louisa.dooley', 'sgibson@example.net', 'Prohaska', 0),
(14, 'corwin.kennith', 'valentine.blanda@example.net', 'Parisian', 0),
(15, 'pinkie05', 'xaufderhar@example.net', 'Graham', 0),
(16, 'nellie96', 'danyka13@example.net', 'Waters', 0),
(17, 'rosalyn.lang', 'sofia70@example.com', 'Homenick', 0),
(18, 'hertha22', 'erin95@example.org', 'Wisozk', 0),
(19, 'terry70', 'barney46@example.com', 'Daugherty', 0),
(20, 'hbaumbach', 'goodwin.kenny@example.net', 'Conn', 0),
(21, 'bbergstrom', 'bbahringer@example.net', 'Boyer', 0),
(22, 'cbarrows', 'eskiles@example.net', 'Hyatt', 0),
(23, 'adelia56', 'strosin.hunter@example.org', 'Heaney', 0),
(24, 'bernardo.sawayn', 'uwintheiser@example.net', 'Bartoletti', 0),
(25, 'brandt39', 'angelo.ryan@example.com', 'Koss', 0),
(26, 'ratke.ludie', 'xzavier.schulist@example.com', 'Roob', 0),
(27, 'oleta.lynch', 'rice.cielo@example.org', 'Keebler', 0),
(28, 'alena72', 'xbosco@example.org', 'Cole', 0),
(29, 'erica76', 'schaefer.jerel@example.com', 'Rice', 0),
(30, 'amie.howe', 'jean51@example.net', 'Mertz', 0),
(31, 'ikunze', 'zleuschke@example.org', 'Effertz', 0),
(32, 'jprosacco', 'o\'kon.leilani@example.org', 'Stark', 0),
(33, 'bashirian.dusty', 'juanita26@example.net', 'Hilpert', 0),
(34, 'treichert', 'ugoldner@example.net', 'Bailey', 0),
(35, 'ejohnston', 'vhamill@example.com', 'Goodwin', 0),
(36, 'moore.samanta', 'guiseppe.steuber@example.com', 'Runte', 0),
(37, 'fskiles', 'lucinda.bartoletti@example.com', 'Will', 0),
(38, 'sincere02', 'zena.robel@example.net', 'Hermann', 0),
(39, 'torp.neha', 'sanford.peter@example.net', 'Cremin', 0),
(40, 'stuart89', 'lucie14@example.org', 'Herzog', 0),
(41, 'kbrekke', 'annabelle.borer@example.com', 'Morissette', 0),
(42, 'gregorio.wolf', 'gaylord.gayle@example.com', 'Keeling', 0),
(43, 'brent39', 'koch.marjory@example.org', 'Harber', 0),
(44, 'reichert.modesta', 'claudine.kub@example.net', 'Schulist', 0),
(45, 'ubotsford', 'tanner.kulas@example.com', 'Witting', 0),
(46, 'erling.lynch', 'hartmann.jacky@example.net', 'Yundt', 0),
(47, 'estelle86', 'hirthe.wilfredo@example.org', 'Kuhlman', 0),
(48, 'kirlin.queenie', 'dexter.macejkovic@example.net', 'Heidenreich', 0),
(49, 'alexander.cole', 'quitzon.mallie@example.net', 'Kihn', 0),
(50, 'fadel.mozell', 'donnelly.mark@example.net', 'D\'Amore', 0),
(51, 'Y A S I R', 'qywe@mailinator.com', '123', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
