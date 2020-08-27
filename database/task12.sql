-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 08:56 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task12`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` tinyblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `itemname`, `description`, `image`) VALUES
(68, 'ddddddddddd', 'dddddddddddddddd', 0x46425f494d475f313437383236363731313839312e6a7067),
(69, 'rrrrrrrrr', 'rrrrrrrrrrrrrrr', 0x46425f494d475f313437383232333331373636382e6a7067),
(70, 'hola', 'holalalla', 0x46425f494d475f313437373134303735333835332e6a7067),
(71, 'mounir', 'hksflskdfjks', 0x46425f494d475f313437383232333331373636382e6a7067),
(72, 'jhjhsdfhj', ';lmmgf;kgd', 0x46425f494d475f313437383232333331373636382e6a7067),
(73, 'hhhh', 'hahaha', 0x46425f494d475f313437373134303735333835332e6a7067),
(74, 'jjkkk', 'l;xklcx', 0x46425f494d475f313437373134303735333835332e6a7067),
(75, 'mo', 'momomoom', 0x46425f494d475f313437373638363532373832322e6a7067),
(77, 'rrrrrrrrrrrrrrrrrrrrrrrrrrr', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrr', 0x46425f494d475f313437383232333331373636382e6a7067),
(79, 'slkgkljkf', ';djfglkd', 0x46425f494d475f313437383838303636353232352e6a7067),
(80, ';jcg;khj;', ',.cvm.,nbcv', 0x46425f494d475f313437383236363731313839312e6a7067),
(81, 'zijdiflskfdj', 'kjsdkjffhskjd', 0x46425f494d475f313437383236363731313839312e6a7067),
(82, 'jjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjjjjj', 0x46425f494d475f313437383232333331373636382e6a7067),
(84, 'd', 'd', 0x46425f494d475f313437383838303636353232352e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`) VALUES
(21, 'mohammed', '01069084993', 'mo@mo.mo', '6adbae8c894eee14931a69b021d6fca6a64932db'),
(22, 'eslam', '01020', 'hhh@kmnx', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(23, 'm', 'm', 'm@m.m', '6b0d31c0d563223024da45691584643ac78c96e8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
