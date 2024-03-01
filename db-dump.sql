-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 01:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `company_name` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` text NOT NULL,
  `marketing` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `company_name`, `phone`, `message`, `marketing`) VALUES
(1, 'aaaaaaaa', 'aaa@aaa.com', '', '2147483647', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
(2, 'Andrey', 'test@testing.com', 'Netmatters', '44', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
(3, 'Andrey', 'test@test.com', 'testcompany', '+44 0774132', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
(4, 'Andrew', 'test@test.com', 'test', '0878878762', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
(5, 'test', 'test@gmail.com', 'testcompany2', '07700101011', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
(6, 'bob', 'good@day.com', 'testing', '0101010101', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
(7, 'andrey', 'aiuiuu@gmail.com', 'testststs', '0128390132', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
(8, 'submit', 'at@this.com', 'yourself', '07772732123', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
(9, 'asdasdasd', 'aaaasd@asdasd.com', 'testststs', '10912371809', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
(10, 'test', 'aasd@aasdad.com', 'testcompany', '123123', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
(11, 'testing', 'check@box.com', 'checkbox', '01102222233', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 1),
(12, 'nocheck', 'test@icloud.com', 'nomarketing', '01920199132', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_alt` varchar(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `read_time` varchar(255) NOT NULL,
  `info` varchar(500) NOT NULL,
  `type` varchar(255) NOT NULL,
  `author_image` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `image_alt`, `title`, `read_time`, `info`, `type`, `author_image`, `author_name`, `date`, `counter`) VALUES
(1, 'img/how-are-mobile-Zikv.jpg', '5 mobile application benefits', 'How are Mobile Applications Benefiting the...', '- 4 minute read', 'In the modern world, it is common practice that our days are becoming filled with short breaks in...', 'news', 'img/netmatters-ltd-VXAv.png', 'Netmatters', '12th October 2023', 1),
(2, 'img/mid-level-web-developer-HAEH.jpg', 'job vacancy mid level web-developer', 'Mid-Level Web Developer', '', 'Salary Range 25-37k DOE + Bonus + Benefits Hours 40 hours per week, Mon - Fri. Flexible working hour...', 'careers', 'img/rebecca-moore-1fh7.jpg', 'Rebecca Moore', '27th September 2023', 2),
(3, 'img/senior-web-developer-8f6n.jpg', 'job vacancy senior web-developer', 'Senior Web Developer / Systems Architect', '', 'Salary Range &#xa3;40-50k DOE + Bonus + Benefits Hours 40 hours per week, Mon - Fri. Flexible working hou...', 'careers', 'img/bethany-shakespeare-F6Iu.jpg', 'Bethany Shakespeare', '27th September 2023', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
