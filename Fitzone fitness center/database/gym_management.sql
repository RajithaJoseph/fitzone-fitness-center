-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2024 at 08:06 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `class`, `date`, `time`) VALUES
(3, 'sddsv', 'sdvds@dsd', 'Pilates', '2024-11-10', '10.00-12.00'),
(4, 'sddsv', 'sdvds@dsd', 'Pilates', '2024-11-10', '10.00-12.00'),
(6, 'rajitha', 'rajitha@mail', 'Yoga', '2024-11-23', '08.00-10.00'),
(7, 'rajitha', 'rajitha@mail', 'Pilates', '2024-11-05', '01.00-03.00'),
(40, 'rajitha', 'hvf@gj', 'Yoga', '2024-11-30', '10.00-12.00'),
(41, 'rajitha', 'rajitha@mail', 'Yoga', '2024-11-30', '10.00-12.00'),
(42, 'rajitha', 'rajitha@mail', 'Pilates', '2024-12-01', '08.00-10.00');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

DROP TABLE IF EXISTS `queries`;
CREATE TABLE IF NOT EXISTS `queries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `response` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `message`, `response`) VALUES
(8, 'dsfgsdfs', 'sdf@sdfsdfs', 'sdfsdfsdf', 'dgdg'),
(6, 'regreg', 'rgrega2@ssef', 'sdfsdf', ''),
(7, 'retertr', 'terta@fdfd', 'dfgdfgdf', ''),
(9, 'rajitha', 'ad@sd', 'asfdasf', 'dsfd'),
(10, 'jvsdfgafsa', 'rajitha@mail', 'sdfdsfsdf', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Staff','Admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `password`, `role`) VALUES
(21, 'rajitha', 'rajitha@mail', '$2y$10$Q1Nae45eHovYSVQ6nOq5oOx9nTIJfWsepWuim4UgQJttVk3HuQuS.', 'Admin'),
(23, 'rajitha2', 'rajitha2@mail', '$2y$10$oVJZ1YjRpQ.EiIxJIdzAFe08dU9tG6tomNxb2LZsggYvo0YihxtSK', 'Staff'),
(11, 'dfg', 'fdg@sg', '$2y$10$tI2diMUrELQxAB0ik7fiA.GYTTCTS2WhYGCQNFX31yTPNG4eF646.', 'Admin'),
(22, 'rajitha', 'rajitha1@mail', '$2y$10$F5zUFCI56xC.rQdxRCoGgut1s4b4VeOMigzS9HYafkFGn.a4dzDXi', 'Admin'),
(24, 'raijtha', 'rajitha@mail123', '$2y$10$Y/NRof32CfNbtlovVSYE6eNU/JpCClXtC8m193xz0wFVIc0WddQVi', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `membership` text NOT NULL,
  `usertype` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user',
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `dob`, `gender`, `address`, `email`, `membership`, `usertype`, `password`) VALUES
(3, 'asdsd', '2024-11-12', 'asdasdas', 'sdfsdfsd', 'mail@mail', 'VIP', 'user', '$2y$10$QTqJzplqwWeSb2RAKUFRB.i21zgaMfSmsr08anOoM1U4oQ6w.CrLu'),
(4, 'dsfsd', '2024-11-06', 'sdfsd', 'sdfdsf@fsd', 'sdfsdf@dd', 'qqqqqqqqqqqqqqqqqqqqq', 'user', '$2y$10$WV.wFFz.sG.QHHEl7YgBTeiJnrx3lna6RSLkLeUu/dT072css8kEG'),
(6, 'user2', '2024-11-22', 'aasd', 'asd', 'sd2@fs', 'premium', 'user', '$2y$10$aKi2hNfisx1ecETHH2TFD.Zf/gVjOj4yOFwlJq2UNlmnM8m..qGOK'),
(7, 'dgdfg', '2024-11-06', 'dfgdf', 'fdgdfg', 'dfg@sdfsd', 'basic', 'user', '$2y$10$27.a0CVCk920Md/gzaLY2OQGmv.1LZWVqIBLsjAk0n6MCBksA/Qjy'),
(8, 'asdas', '2024-11-16', 'as', 'asd', 'as@saa', 'premium', 'user', '$2y$10$siMEDL7iI4BrCOtEcuKM8OnjgeVN.P98s0HDP8P017DqpWAV.GR6y'),
(9, 'sdfsdf', '2024-11-21', 'dsfsdf', 'sdfds', 'WD@dasd', 'basic', 'user', '$2y$10$wdWyOITFHVExzDkYubJ09eZDCXEdswpMOHssTa1UmzwgSYs00qh1.'),
(10, 'dgdfgd', '2024-11-20', 'gfdfgfdg', 'dfgdfg', 'sdd@fdsfs', 'basic', 'user', '$2y$10$wNz0ggN9mWn/bg2Wa9RUkeh5mdcceY91ekI/LFrS1MrHfXYuTV84S'),
(11, 'sdfdsf', '2024-11-15', 'dsfdsf', 'dfdf', 'df@fdd', 'basic', 'user', '$2y$10$obFYyuOtQ5n3RFRqwC1GiuCMCAOVm9QpLgcw9o3s3.iORYXqrD8LO'),
(12, 'sdfsdf', '2024-11-21', 'sdf', 'sdfs', 'dfs@dfs', 'basic', 'user', '$2y$10$IqQp4M2K0y4MoM61MRR7e.6YflWNtbgSnjEeyfSdps1VA8M34ImfO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
