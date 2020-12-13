-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 09:01 AM
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
(19, '1606745154food-collage-various-fruits-vegetables-260nw-1114876307.jpg', '1606745154fresh-food-groceries-tray-box-wood-tabletop-banner-background_8087-2719.jpg', '1606745154banner_136 (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `giantmall`
--

CREATE TABLE `giantmall` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giantmall`
--

INSERT INTO `giantmall` (`id`, `title`, `price`, `img`) VALUES
(15, 'Chicken', 5.99, '16067395695f859812e5f14.jpg'),
(16, 'Chili', 10.89, '16067402305f85a61655624.jpg'),
(17, 'Banana', 3.99, '16067402745e888cd63c6f7.jpg'),
(18, 'Tomato', 5.8, '16068206435e888d16e45f7.jpg'),
(19, 'Papaya', 2.2, '16068207525f859c2e5ac95.jpg'),
(20, 'Granny-Smith Apple', 8.6, '16068217955e888cf6868fe.jpg'),
(21, 'Lemon', 5.15, '16068212585e888d0736677.jpg'),
(22, 'Plum', 12.5, '16068213745f85958ec8c5c.jpg'),
(23, 'Carrots', 4.25, '16068214875f8595fb5173e.jpg'),
(24, 'Pink-Lady Apple', 7.35, '16068220235f8596b391cc6.jpg'),
(25, 'Pineapple', 2.1, '16068221815f859a681cc45.jpg'),
(26, 'Mandarin Orange', 10.5, '16068305705f8598f93a9f5.jpg'),
(27, 'Grapefruit', 5.65, '16068307895f8599592d9a4.jpg'),
(28, 'Pomegranate', 8.25, '16068309115f8599cb6a9a5.jpg'),
(29, 'Peach', 5.85, '16068310295f859b3eb8f2c.jpg'),
(30, 'Passion', 6.15, '16068311065f859bca4711b.jpg'),
(31, 'Honeydew', 1.9, '16068311955f85ad7b3eec6.jpg'),
(32, 'Watermelon', 1.55, '16068312665f85ad05aa305.jpg'),
(33, 'Mango', 12.6, '16068313285f85acc7a812b.jpg'),
(34, 'Lime ', 12.2, '16068314145f85ac5f61ec1.jpg'),
(35, 'Kiwi', 19.6, '16068314835f85abd542228.jpg'),
(36, 'Asparagus', 21.2, '16068316015f85a8c1c0814.jpg'),
(37, 'Garlic', 7.85, '16068317065f85a5a03f858.jpg'),
(38, 'Eggplant', 8.35, '16068318535f85a767d9e65.jpg'),
(39, 'Ginger', 9.25, '16068319415f85a53fc20ad.jpg'),
(40, 'Mushroom', 5.2, '16068319995f85a4cd9b3d0.jpg'),
(41, 'Bell-Paper', 13.2, '16068320975f85a39ae880f.jpg'),
(42, 'Potato', 2.59, '16068321715f85a291b04b0.jpg'),
(43, 'Sweet-Potato', 4.25, '16068322235f85a2056a38f.jpg'),
(44, 'Red-Beet', 8.6, '16068323045f85a1641985d.jpg'),
(45, 'Zucchini', 4.35, '16068323885f85a0d6d9fd0.jpg'),
(46, 'Avocado', 19.3, '16068324725f859f52dce7e.jpg'),
(47, 'Leek', 7.5, '16068325475f859e9a82577.jpg'),
(48, 'Cucumber', 4.8, '16068326075f859d99e171d.jpg'),
(49, 'Cabbage', 1.8, '16068326895f859d238e936.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `heromarket`
--

CREATE TABLE `heromarket` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `heromarket`
--

INSERT INTO `heromarket` (`id`, `title`, `price`, `img`) VALUES
(14, 'Chicken', 7, '16068195465f859812e5f14.jpg'),
(15, 'Chili', 9.8, '16068195995f85a61655624.jpg'),
(16, 'Banana', 3.2, '16068196525e888cd63c6f7.jpg'),
(17, 'Tomato', 4.5, '16068206955e888d16e45f7.jpg'),
(18, 'Papaya', 2, '16068207895f859c2e5ac95.jpg'),
(19, 'Granny-Smith Apple', 6.95, '16068218365e888cf6868fe.jpg'),
(20, 'Lemon', 3.95, '16068213005e888d0736677.jpg'),
(21, 'Plum', 14.25, '16068214365f85958ec8c5c.jpg'),
(22, 'Carrots', 4.65, '16068215295f8595fb5173e.jpg'),
(23, 'Pink-Lady Apple', 8.65, '16068220975f8596b391cc6.jpg'),
(25, 'Mandarin Orange', 9.45, '16068306405f8598f93a9f5.jpg'),
(26, 'Grapefruit', 6.85, '16068307925f8599592d9a4.jpg'),
(27, 'Pomegranate', 6.95, '16068309005f8599cb6a9a5.jpg'),
(28, 'Peach', 4.85, '16068310245f859b3eb8f2c.jpg'),
(29, 'Passion', 7.15, '16068311105f859bca4711b.jpg'),
(30, 'Honeydew', 1.8, '16068311995f85ad7b3eec6.jpg'),
(31, 'Watermelon', 1.35, '16068312625f85ad05aa305.jpg'),
(32, 'Mango', 10.95, '16068313255f85acc7a812b.jpg'),
(33, 'Lime ', 10.5, '16068314125f85ac5f61ec1.jpg'),
(34, 'Kiwi', 18.75, '16068314795f85abd542228.jpg'),
(35, 'Asparagus', 7.55, '16068316045f85a8c1c0814.jpg'),
(36, 'Garlic', 9.85, '16068317045f85a5a03f858.jpg'),
(37, 'Eggplant', 7, '16068318515f85a767d9e65.jpg'),
(38, 'Ginger', 7.95, '16068319395f85a53fc20ad.jpg'),
(39, 'Mushroom', 5.7, '16068319975f85a4cd9b3d0.jpg'),
(40, 'Bell-Paper', 13.9, '16068321005f85a39ae880f.jpg'),
(41, 'Potato', 1.86, '16068321685f85a291b04b0.jpg'),
(42, 'Sweet-Potato', 2.95, '16068322195f85a2056a38f.jpg'),
(43, 'Red-Beet', 7.95, '16068322975f85a1641985d.jpg'),
(44, 'Zucchini', 4.26, '16068323855f85a0d6d9fd0.jpg'),
(45, 'Avocado', 19.86, '16068324755f859f52dce7e.jpg'),
(46, 'Leek', 7, '16068325455f859e9a82577.jpg'),
(47, 'Cucumber', 4.55, '16068326045f859d99e171d.jpg'),
(48, 'Cabbage', 2, '16068326905f859d3adb9e4.jpg'),
(49, 'Pineapple', 1.95, '16068327495f859a681cc45.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tesco`
--

CREATE TABLE `tesco` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tesco`
--

INSERT INTO `tesco` (`id`, `title`, `price`, `img`) VALUES
(11, 'Chicken', 6.5, '16068195165f859812e5f14.jpg'),
(12, 'Chili', 11, '16068195755f85a61655624.jpg'),
(13, 'Banana', 4.2, '16068196315e888cd63c6f7.jpg'),
(14, 'Tomato', 5.6, '16068206745e888d16e45f7.jpg'),
(15, 'Papaya', 2.3, '16068207695f859c2e5ac95.jpg'),
(16, 'Granny-Smith Apple', 7.5, '16068218115e888cf6868fe.jpg'),
(17, 'Lemon', 4.25, '16068212835e888d0736677.jpg'),
(18, 'Plum', 14.25, '16068213915f85958ec8c5c.jpg'),
(19, 'Carrots', 4.15, '16068215125f8595fb5173e.jpg'),
(20, 'Pink-Lady Apple', 8.4, '16068220645f8596b391cc6.jpg'),
(21, 'Pineapple', 1.85, '16068222165f859a681cc45.jpg'),
(23, 'Mandarin Orange', 9.55, '16068306125f8598f93a9f5.jpg'),
(24, 'Grapefruit', 6.45, '16068307855f8599592d9a4.jpg'),
(25, 'Pomegranate', 7.85, '16068309075f8599cb6a9a5.jpg'),
(26, 'Peach', 6.95, '16068310275f859b3eb8f2c.jpg'),
(27, 'Passion', 5.95, '16068311085f859bca4711b.jpg'),
(28, 'Honeydew', 2.1, '16068311975f85ad7b3eec6.jpg'),
(29, 'Watermelon', 1.45, '16068312645f85ad05aa305.jpg'),
(30, 'Mango', 11.35, '16068313275f85acc7a812b.jpg'),
(31, 'Lime ', 11.6, '16068314105f85ac5f61ec1.jpg'),
(32, 'Kiwi', 18.5, '16068314815f85abd542228.jpg'),
(33, 'Asparagus', 19.9, '16068316025f85a8c1c0814.jpg'),
(34, 'Garlic', 8.5, '16068317035f85a5a03f858.jpg'),
(35, 'Eggplant', 8.99, '16068318525f85a767d9e65.jpg'),
(36, 'Ginger', 8.75, '16068319405f85a53fc20ad.jpg'),
(37, 'Mushroom', 4.9, '16068319985f85a4cd9b3d0.jpg'),
(38, 'Bell-Paper', 14.2, '16068321025f85a39ae880f.jpg'),
(39, 'Potato', 5.45, '16068321695f85a291b04b0.jpg'),
(40, 'Sweet-Potato', 3.25, '16068322225f85a2056a38f.jpg'),
(41, 'Red-Beet', 8.3, '16068323025f85a1641985d.jpg'),
(42, 'Zucchini', 3.95, '16068323875f85a0d6d9fd0.jpg'),
(43, 'Avocado', 20.3, '16068324745f859f52dce7e.jpg'),
(44, 'Leek', 6.98, '16068325465f859e9a82577.jpg'),
(45, 'Cucumber', 3.9, '16068326065f859d99e171d.jpg'),
(46, 'Cabbage', 1.9, '16068326875f859d3adb9e4.jpg');

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
(20, 'Sujon Kumar Shil', 'sujon', '$2y$10$f/LQfsOPs5DOzJa4VAwWHOXVcfwwYf2tJSDuvLAHgeVvUYyanl38a', 'skssujon90@gmail.com', 0),
(21, 'Tesco Authority', 'Tesco', '$2y$10$2cYoEylw/JeLuKc9ER5xyeqyyaE4ZOoQYiYkFTdQkMXwMVSGSBqK2', 'tesco@gmail.com', 1),
(24, 'Hero Authority', 'Hero market', '$2y$10$CXIFj8IpyIkidLxcfIKuleOUWFUM6KRYE6pdAtqpzwekSkdXMg.lK', 'heromarket@gmail.com', 2),
(25, 'Giant Authority', 'Giant', '$2y$10$MGMtBws/2rDI/HOCeNavV.cYQDyIYwjyu/tBVRhJ1xVJbxLWpZ20q', 'giant@gmail.com', 3);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `giantmall`
--
ALTER TABLE `giantmall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `heromarket`
--
ALTER TABLE `heromarket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tesco`
--
ALTER TABLE `tesco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
