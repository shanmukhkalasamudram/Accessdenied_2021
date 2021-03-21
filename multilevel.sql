-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 03:49 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multilevel`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` int(11) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`firstname`, `lastname`, `email`, `password`, `phone`, `role`) VALUES
('harsha', 'valla', 'harshadreamz2000@gmail.com', 'hack123', 630123547, 'ceo'),
('shanmukh', 'ba', 'hack@gmail', 'hack1234', 1234567890, 'employee'),
('bhanti', 'budem', 'budem@gmail.com', 'hack123', 123456798, 'employee'),
('hr', 'head', 'hr@gmail.com', 'hack123', 1234567890, 'hr'),
('project', 'head', 'project@gmail.com', 'hack123', 1234567890, 'projecthead');

-- --------------------------------------------------------

--
-- Table structure for table `enter`
--

CREATE TABLE `enter` (
  `email` text NOT NULL,
  `projectname` text NOT NULL,
  `share` text NOT NULL,
  `amount` text NOT NULL,
  `goals` text NOT NULL,
  `abstract` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enter`
--

INSERT INTO `enter` (`email`, `projectname`, `share`, `amount`, `goals`, `abstract`, `id`) VALUES
('budem@gmail.com', 'habibi', '50', '45', 'nothing', 'ha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enterceo`
--

CREATE TABLE `enterceo` (
  `email` text NOT NULL,
  `projectname` text NOT NULL,
  `abstract` text NOT NULL,
  `share` text NOT NULL,
  `amount` text NOT NULL,
  `goals` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enterceo`
--

INSERT INTO `enterceo` (`email`, `projectname`, `abstract`, `share`, `amount`, `goals`, `id`) VALUES
('budem@gmail.com', 'habibi', 'ha', '50', '45', 'nothing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enterhr`
--

CREATE TABLE `enterhr` (
  `email` text NOT NULL,
  `projectname` text NOT NULL,
  `abstract` text NOT NULL,
  `share` text NOT NULL,
  `amount` text NOT NULL,
  `goals` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enterhr`
--

INSERT INTO `enterhr` (`email`, `projectname`, `abstract`, `share`, `amount`, `goals`, `id`) VALUES
('budem@gmail.com', 'habibi', 'habibi', '40', '50000', 'habibi', 0),
('budem@gmail.com', 'habibi', 'ha', '50', '45', 'nothing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `email` text NOT NULL,
  `projectname` text NOT NULL,
  `abstract` text NOT NULL,
  `amount` text NOT NULL,
  `goals` text NOT NULL,
  `id` int(11) NOT NULL,
  `share` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`email`, `projectname`, `abstract`, `amount`, `goals`, `id`, `share`) VALUES
('budem@gmail.com', 'habibi', 'ha', '45', 'nothing', 0, '50'),
('budem@gmail.com', 'habibi', 'ha', '45', 'nothing', 0, '50');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` int(11) NOT NULL,
  `role` text NOT NULL,
  `date` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`firstname`, `lastname`, `email`, `password`, `phone`, `role`, `date`, `id`) VALUES
('shashank', 'bude', 'access@gmail.com', 'hack123', 1234567898, 'employee', '2021-03-20 21:19:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `email` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `password` text NOT NULL,
  `phone` int(11) NOT NULL,
  `role` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
