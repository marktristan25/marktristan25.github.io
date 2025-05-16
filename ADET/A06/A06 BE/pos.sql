-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2025 at 10:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(4) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `name`) VALUES
(1, 'Tumi'),
(2, 'Bellroy'),
(3, 'Herschel'),
(4, 'Samsonite');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(4) NOT NULL,
  `categoryID` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `isAvailable` varchar(6) NOT NULL DEFAULT 'true',
  `price` int(11) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `name`, `isAvailable`, `price`, `img`) VALUES
(1, 1, 'Junior Crossbody', 'true', 25990, 'bags/tumi1.jpg'),
(2, 1, 'Voyageur', 'true', 31990, 'bags/tumi2.jpg'),
(3, 1, 'Alpha Bravo', 'true', 15990, 'bags/tumi3.jpg'),
(4, 1, 'Tumi Harrison', 'true', 23990, 'bags/tumi4.jpg'),
(5, 1, 'Voyageur', 'true', 23990, 'bags/tumi5.jpg'),
(6, 1, 'Tumi Alpha Sling', 'true', 19990, 'bags/tumi6.jpg'),
(7, 1, 'Voyageur Crossbody', 'true', 33990, 'bags/tumi7.jpg'),
(8, 1, 'Tumi Alpha Portfolio', 'true', 11990, 'bags/tumi8.jpg'),
(9, 1, 'Voyageur Tote', 'true', 30990, 'bags/tumi9.jpg'),
(10, 1, 'Voyageur Tote', 'true', 37990, 'bags/tumi10.jpg'),
(11, 1, 'Alpha Bravo Sling Backpack', 'true', 23990, 'bags/tumi11.jpg'),
(12, 1, 'Alpha Bravo Academy Brief', 'true', 37990, 'bags/tumi12.jpg'),
(13, 2, 'Venture Ready Sling', '1', 4432, 'bags/bellroy1.avif'),
(14, 2, 'Lite Travel Pack', '1', 8876, 'bags/bellroy2.avif'),
(15, 2, 'Transit Workpack', '1', 3779, 'bags/bellroy3.avif'),
(16, 2, 'Lite Belt Bag', '1', 9887, 'bags/bellroy4.avif'),
(17, 2, 'Venture Sling 6L', '1', 7886, 'bags/bellroy5.avif'),
(18, 2, 'Tokyo Work Bag', '1', 3442, 'bags/bellroy6.avif'),
(19, 3, 'Hershell Heritage', '1', 4876, 'bags/h1.webp'),
(20, 3, 'Hershell Classic', '1', 3256, 'bags/h2.webp'),
(21, 3, 'Pop Quiz Backpack', '1', 4889, 'bags/h3.webp'),
(22, 3, 'Hershell Retreat', '1', 6754, 'bags/h4.webp'),
(23, 3, 'Hershell Lite America', '1', 8634, 'bags/h5.webp'),
(24, 3, 'Hershell Heritage 24L', '1', 4977, 'bags/h6.webp'),
(25, 3, 'Hershell Heritage 26L', '1', 4532, 'bags/h7.webp'),
(26, 4, 'Mobile Solution Eco', '1', 10250, 'bags/samsonite1.jpg'),
(27, 4, 'MK X SAMSONITE', '1', 26550, 'bags/samsonite2.jpg'),
(28, 4, 'Karissas 2', '1', 4220, 'bags/samsonite3.jpg'),
(29, 4, 'Urban Packer', '1', 18840, 'bags/samsonite4.jpg'),
(30, 4, 'Devlinea', '1', 14407, 'bags/samsonite5.jpg'),
(31, 4, 'Markston', '1', 10582, 'bags/samsonite6.jpg'),
(32, 4, 'Haaper', '1', 12707, 'bags/samsonite7.jpg'),
(33, 4, 'Locus Eco', '1', 11950, 'bags/samsonite8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
