-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 05:03 PM
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
(5, 'Charity and Kanya Scheme Foundation', ' Parakaj Foundation', 'WordPress,Bootstrap,PHP,jQuery,Ajax,javascript', 'parakaj.png', '2025-01-22 15:36:03'),
(6, ' Service Provider Project', ' Portfolio', 'wordpress,bootstrap,php,javascript', 'digital.png', '2025-01-22 15:38:14'),
(7, 'All Staff Management Project', 'Portfolio', 'react,node.js,mongoDB', 'flowchanger.png', '2025-01-22 15:39:23'),
(8, ' Smoking Products Project', 'Portfolio', 'wordpress,html,css,js,php', 'smoking.png', '2025-01-22 15:40:36'),
(9, 'Trading Frontend Project', 'Portfolio', 'react,redux', 'materio.png', '2025-01-22 15:41:32'),
(10, ' Woman Wear Products Website', 'Portfolio', 'shopify,Javascript', 'wear.png', '2025-01-22 15:42:35'),
(11, ' Sports West Athletic Club Website', 'Sports West', 'Wordpress,php,Javascript,Bootstrap', 'sports-west.png', '2025-01-22 15:43:58'),
(12, 'Entertainment Website', 'Entertainment Inc.', 'MERN Stack Development', 'entertainment.png', '2025-01-22 15:45:07'),
(13, 'House Accessories Website', ' Empire EWF', 'Shopify,Javascript', 'empire-ewf.png', '2025-01-22 15:46:17'),
(14, 'Seafood Website', ' Seafood Inc.', 'Shopify,Javascript,Bootstrap', 'seafood.png', '2025-01-22 15:47:35'),
(15, 'BIKES & ACCESSORIES Website', 'VeloZoo', 'Magento,html,css', 'velozoo.png', '2025-01-22 15:48:37'),
(16, 'Pet Products | Accessory Website', 'Ruffy', 'Shopify', 'ruffy.png', '2025-01-22 15:49:36'),
(17, ' Web Services Provider Website', 'Brisbane Web Services', 'Laravel,Bootstrap', 'brisbane.png', '2025-01-22 15:51:18'),
(18, 'Online Food Store', ' Food Mart', 'React', 'food.png', '2025-01-22 15:52:27'),
(19, ' Mart & Grocery Store', 'Mart', 'React,Redux', 'react-app.png', '2025-01-22 15:53:14'),
(20, ' Customer & Lead Generator Website', 'LeadGen', 'Next.js,MongoDB', 'react-app1.png', '2025-01-22 15:54:38'),
(21, ' Simple Blog Page Website', ' Blog', 'React,Node.js,MongoDB', 'blog-app.png', '2025-01-22 15:57:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
