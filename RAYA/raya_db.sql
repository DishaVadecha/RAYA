-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 10:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raya_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('yakeen', 'yakeen'),
('raveena', 'raveena'),
('kalp', 'kalp'),
('disha', 'disha'),
('ABC', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `name` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`name`, `user`, `price`, `type`, `image`) VALUES
('Teddy Diaper Cake', 'disha', 1000, 'babyshower', 'images/bsp1.jpg'),
('Teddy Diaper Cake', 'kalp', 1000, 'babyshower', 'images/bsp1.jpg'),
('Floral Bouquet', 'ABC', 1800, 'floral', 'images/fb5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `type`, `image`) VALUES
(1, 'Teddy Diaper Cake', 1000, 'babyshower', 'images/bsp1.jpg'),
(2, 'Baby Boy Packing', 3000, 'babyshower', 'images/bsp2.jpg'),
(3, 'Wedding Chocolate Bouquet', 2000, 'chocolate', 'images/cb4.jpg'),
(4, 'House Warming Chocolate Bouquet', 2000, 'chocolate', 'images/cb6.jpg'),
(5, 'Floral Bouquet', 1800, 'floral', 'images/fb5.jpg'),
(6, 'Groom Trousseau Packing', 3500, 'trousseau', 'images/tp1.jpg'),
(7, 'Troussaue Packing (Red)', 1800, 'trousseau', 'images/tp2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `town`, `email`, `password`, `balance`) VALUES
(1, 'yakeen', 'California', 'ysj@gmail.com', 'yakeen', 2000),
(2, 'raveena', 'Mumbai', 'ravu@gmail.com', 'raveena', 2000),
(3, 'kalp', 'Guwahati', 'kalpvadecha@yahoo.com', 'kalp', 1000),
(4, 'disha', 'Mumbai', 'disha@gmail.com', 'disha', 1000),
(5, 'ABC', 'Mumbai', 'abc@gmail.com', 'abc', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
