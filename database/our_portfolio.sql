-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2025 at 05:14 PM
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
-- Database: `our_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blogTitle` varchar(255) NOT NULL,
  `blogContent` text NOT NULL,
  `blogImage` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blogTitle`, `blogContent`, `blogImage`, `createdAt`) VALUES
(4, 'The Magic of Entertainment Websites', 'Discover how modern entertainment websites engage users with dynamic content and vibrant designs to provide seamless experiences.', 'entertainment.png', '2025-01-21 15:57:08'),
(5, 'Innovative Ideas for House Accessories Websites', 'Learn how house accessories websites blend functionality and aesthetics to cater to modern homeowners.', 'empire-ewf.png', '2025-01-21 15:57:34'),
(6, 'Building Trustworthy Seafood Websites', 'Explore how seafood websites ensure freshness, trust, and convenience for customers looking for premium products.', 'seafood.png', '2025-01-21 15:58:04'),
(7, 'Crafting Modern Bike & Accessory Websites', 'Unveil the strategies behind creating engaging bike and accessory websites that boost sales and brand loyalty.', 'velozoo.png', '2025-01-21 15:58:34'),
(8, 'Elevating Pet Product Websites for Happy Pets', 'Discover how pet product websites cater to owners by providing easy navigation, quality items, and valuable tips.', 'ruffy.png', '2025-01-21 16:00:15'),
(9, 'Online Food Stores: Simplifying Culinary Needs', 'Explore how online food stores offer convenience, variety, and freshness in a few clicks to busy food lovers.', 'react-app.png', '2025-01-21 16:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(250) NOT NULL,
  `projectName` varchar(250) NOT NULL,
  `clientName` varchar(250) NOT NULL,
  `inputTechnologies` text NOT NULL,
  `portfolioImage` varchar(250) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `projectName`, `clientName`, `inputTechnologies`, `portfolioImage`, `createdAt`) VALUES
(1, '', 'test', 'html,css,bootstrap', 'Online Grocery Store.png', '2025-01-20 18:10:57'),
(2, 'test', 'test', 'html,css,bootstrap', 'Online Grocery Store.png', '2025-01-20 18:12:06'),
(3, 'test', 'test', 'html,css,bootstrap', 'Online Grocery Store.png', '2025-01-20 18:17:56'),
(4, 'Whilemina Burton', 'Randall Raymond', 'html,css,php', 'ewf.png', '2025-01-21 12:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'suman', 'suman123@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'sumanverma', 'suman123@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'sara', 'suman@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(4, 'Sandeep Verma', 'sandeepkumar941732@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
