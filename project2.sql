-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 08:24 PM
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
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `email`, `message`) VALUES
(1, 'max jsambo', 'maxjambomw@gmail.com', 'we need your help\r\n'),
(2, 'max jsambo', 'maxjambomw@gmail.com', 'we need your help\r\n'),
(3, 'max jsambo', 'maxjambomw@gmail.com', 'we need your help\r\n'),
(4, 'angella mhango', 'ammmhango@gmail.com', 'hey there its working'),
(5, 'uteka5', 'ammmhango@gmail.com', 'go out');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imgsrc` varchar(500) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `progress` int(100) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `links` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `imgsrc`, `description`, `progress`, `title`, `links`) VALUES
(1, 'web.jpg', 'This is a website designed for college accommodation. It focuses on helping students find on-campus and off-campus accommodation without necessarily visiting the place.', 50, 'Student Accommodation Website', 'home.html'),
(2, 'port3.jpg', 'This is my portfolio. It includes all the necessary information concerning my career. This will help collaborators as well as other interested third parties to have a clear picture of what I do and what I get involved in. The portfolio will make it easy for possible employers and partners to easily find me.', 60, 'My Portfolio', 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) NOT NULL,
  `name` varchar(240) NOT NULL,
  `description` varchar(500) NOT NULL,
  `proficiency` int(100) NOT NULL,
  `text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `description`, `proficiency`, `text`) VALUES
(1, 'HTML', 'Hypertext Markup Language', 90, 'HTML is the standard markup language for creating web pages'),
(1, 'CSS', 'Cascading Style Sheets', 85, 'CSS is a style sheet language used for describing the look and formatting of a document written in HTML'),
(1, 'JavaScript', 'Programming Language', 70, 'JavaScript is a high-level, interpreted programming language that enables interactive web pages and web applications.'),
(1, 'Java', 'Programming Language', 65, 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.'),
(1, 'Python', 'Programming language', 50, 'Python is a popular high-level programming language known for its simplicity and readability.'),
(1, 'GitHub', 'Version Control System', 80, 'GitHub is where over 100 million developers shape the future of software, together.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
