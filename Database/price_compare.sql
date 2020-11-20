-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 01:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `price_compare`
--

-- --------------------------------------------------------

--
-- Table structure for table `banar`
--

CREATE TABLE `banar` (
  `id` int(11) NOT NULL,
  `banar1` varchar(255) NOT NULL,
  `banar2` varchar(255) NOT NULL,
  `banar3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banar`
--

INSERT INTO `banar` (`id`, `banar1`, `banar2`, `banar3`) VALUES
(16, '1605805898wosiwosi-hero-banner.jpg', '1605805898banner.png', '1605805898Banner-1920x900.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `giantmall`
--

CREATE TABLE `giantmall` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giantmall`
--

INSERT INTO `giantmall` (`id`, `title`, `price`, `img`) VALUES
(3, 'am', 35435, '16057896695e9186d90930a.jpg'),
(4, 'sdfsdfdf', 345, '16057896875e9186b77ffe5.jpg'),
(5, 'camera', 2352, '1605801232image-1.jpg'),
(6, 'Projector', 324, '1605801254image-2.jpg'),
(7, 'Leptop', 352, '1605801271image-3.jpg'),
(8, 'Jackfood', 255, '16058048695e918e5e69637.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `heromarket`
--

CREATE TABLE `heromarket` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `heromarket`
--

INSERT INTO `heromarket` (`id`, `title`, `price`, `img`) VALUES
(3, 'am', 35435, '16057896695e9186d90930a.jpg'),
(4, 'sdfsdfdf', 345, '16057896875e9186b77ffe5.jpg'),
(5, 'camera', 2352, '1605801232image-1.jpg'),
(6, 'Projector', 324, '1605801254image-2.jpg'),
(7, 'Leptop', 352, '1605801271image-3.jpg'),
(8, 'Jackfood', 255, '16058048695e918e5e69637.jpg'),
(12, 'kola', 2352354, '16057414605e888cd63c6f7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tesco`
--

CREATE TABLE `tesco` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tesco`
--

INSERT INTO `tesco` (`id`, `title`, `price`, `img`) VALUES
(3, 'am', 35435, '16057896695e9186d90930a.jpg'),
(4, 'sdfsdfdf', 345, '16057896875e9186b77ffe5.jpg'),
(5, 'camera', 2352, '1605801232image-1.jpg'),
(6, 'Projector', 324, '1605801254image-2.jpg'),
(7, 'Leptop', 352, '1605801271image-3.jpg'),
(8, 'Jackfood', 255, '16058048695e918e5e69637.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `role`) VALUES
(12, 'sopon', 'sopon', '$2y$10$n3UsBrMOGLoOLxXYrDAu3.ufQcv/nreivLXqsZZjGH.NQbW9wpUAe', 'sopon@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banar`
--
ALTER TABLE `banar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giantmall`
--
ALTER TABLE `giantmall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heromarket`
--
ALTER TABLE `heromarket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tesco`
--
ALTER TABLE `tesco`
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
-- AUTO_INCREMENT for table `banar`
--
ALTER TABLE `banar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `giantmall`
--
ALTER TABLE `giantmall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `heromarket`
--
ALTER TABLE `heromarket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tesco`
--
ALTER TABLE `tesco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
