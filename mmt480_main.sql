-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 02:04 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmt480_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Type` text NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Email`, `Password`, `Type`, `Date`, `Time`) VALUES
(1, 'kanwar', 'kanwar.dani@gmail.com', 'kanwar', 'Admin', '2020-06-04', '27:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `questions` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `questions`, `reply`) VALUES
(2, 'what is your kanwar?', 'my name is kanwar'),
(4, 'wahts your qualification?', 'Software engineer'),
(6, 'how i can help you?', 'i need and office to run my startupt where i can develp softwares and manage my teams'),
(7, 'what is valye of 2/2 ?', '1'),
(8, 'What is multidrug-resistant tuberculosis and how do we control it?', 'The bacteria that cause tuberculosis (TB) can develop resistance to the antimicrobial drugs used to '),
(9, ' What is the process of Data Analysis?', 'Data has been the buzzword for ages now. Either the data being generated from large-scale enterprise'),
(10, 'Why is Data Analytics important?', 'Data Analytics has a key role in improving your business.'),
(11, 'What is Data Analytics for Beginners?', 'Data Analytics refers to the techniques used to analyze data to enhance productivity and business ga'),
(12, 'What are the tools used in Data Analytics?', 'With the increasing demand for Data Analytics in the market, many tools have emerged with various fu'),
(13, 'How to Become a Data Analyst?', 'Data analysts translate numbers into plain English.  A Data Analyst delivers value to their companie'),
(16, 'i want to know you', 'ask'),
(17, 'i want to know you', 'ask 2'),
(18, 'i want to know you', 'ask 3'),
(19, 'ok', 'okay '),
(20, 'hi', 'hi, how are you'),
(21, 'hi', 'hi, how are you');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `questions` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `questions`, `email`) VALUES
(2, 'i want to know you', 'kanwar7262@gmail.com'),
(3, 'i want to ghfdghknow you', 'kanwar7262@gmail.com'),
(4, 'i fdghf to ghfdghknow you', 'kanwar7262@gmail.com'),
(5, 'gfdsg', 'fgdfasg@gmail.com'),
(7, 'dfgdf', 'hjgsfjhadshf@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`(44));

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
