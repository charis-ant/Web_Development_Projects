-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 01:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `email`, `subject`, `message`) VALUES
('Marty Byrde', 'martybyrde@mail.com', 'Prices', 'Marty is a main character in the Netflix series, Ozark. He is the husband of Wendy Byrde, father of both Charlotte and Jonah Byrde, and a financial advisor turned money launderer.'),
('Wendy Byrde', 'wendybyrde@mail.com', 'Price Negotiation', 'Wendy Byrde is a main character in the Netflix series, Ozark. She is portrayed by Laura Linney.'),
('Troy Barnes', 'tbone@mail.com', 'venue ventilation', 'Troy Barnes is a graduate from both Riverside High School and Greendale Community College. A popular figure at Riverside, Troy was the star quarterback of the football team and also the prom king.'),
('Annalise Harkness', 'annalise.k@mail.com', 'Conference duration', 'Annalise Harkness, (formerly Keating), born Anna Mae, is one of the main characters of How to Get Away with Murder.'),
('Michael Scott', 'michaelscarn@mail.com', 'very happy', 'Michael Scott is a fictional character, who is manager to the Scranton Branch of Dunder Mifflin Inc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
