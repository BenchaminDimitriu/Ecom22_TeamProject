-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 09:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopmart`
--
CREATE DATABASE IF NOT EXISTS `shopmart` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shopmart`;

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

DROP TABLE IF EXISTS `buyer`;
CREATE TABLE `buyer` (
  `buyer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buyer_fname` varchar(50) NOT NULL,
  `buyer_lname` varchar(50) NOT NULL,
  `buyer_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buyer_id`, `user_id`, `buyer_fname`, `buyer_lname`, `buyer_email`) VALUES
(1, 3, 'buyer1', 'b1', 'b1@gmail.com'),
(2, 4, 'b2', 'b2', 'b2@gmail.com'),
(3, 5, 'buyer3', 'bb3', 'b3@gmail.com ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('cart','paid','shipped','watchlist') NOT NULL DEFAULT 'cart',
  `qty` int(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`, `status`, `qty`, `price`) VALUES
(16, 5, 3, 'watchlist', 1, 500.99),
(19, 5, 4, 'cart', 1, 40.99);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `buyer_id`, `seller_id`, `title`, `message`) VALUES
(4, 2, 1, 'About this ', 'Hello '),
(5, 2, 1, 'Question about', 'For item...'),
(6, 2, 2, 'Is this product', 'Washable with... '),
(7, 3, 3, 'Discount?', 'Can I negotiate the price for item#? '),
(8, 3, 3, 'About item...', 'The price is non-negotiable');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_description` varchar(100) NOT NULL,
  `item_image` varchar(50) NOT NULL,
  `item_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `user_id`, `seller_id`, `item_name`, `item_description`, `item_image`, `item_price`) VALUES
(2, 1, 1, 'Greek Amphora', 'Ancient vessel form used as a storage jar', '636ebd66c61df.jpg', 300.99),
(3, 2, 2, 'Commode', 'A chest of drawers or chiffonier of a decorative', '636ebdb7144db.jpg', 500.99),
(4, 2, 2, 'Brass Planter Pot ', 'Used for growing plants', '636ebde038d64.jpg', 40.99),
(5, 1, 1, 'Greek Vase ', 'Knock off Greek Amphora', '637272e27cd68.jpg', 12.99),
(6, 1, 1, 'Commode', 'A replica', '6384d815dd371.jpg', 15.99),
(7, 6, 3, 'Typewriter', 'Part of the Martin Howard Collection', '6386398f84715.jpg', 172.99);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(63) NOT NULL,
  `secret_key` varchar(20) DEFAULT NULL,
  `role` enum('buyer','seller') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password_hash`, `secret_key`, `role`) VALUES
(1, 'seller1', '$2y$10$zBs/SyOug5MX3vunTRnNr.NuOrxRl48Y3DgHIVfgL2uPNA1u1lfBC', NULL, 'seller'),
(2, 'seller2', '$2y$10$Wm5qrVciVlrAE1khrQKfKeBkblPKQ/WVh4jNYPFSIBZMcwcvqF2nq', NULL, 'seller'),
(3, 'buyer1', '$2y$10$oINKO7x/t8nyhcASASnnr.OXXRqk1yTe46ePW242WpMg.3RpkfA2C', NULL, 'buyer'),
(4, 'buyer2', '$2y$10$iNYhlhyvdHBIJeeMGtVu3.sBwkZrVAaa7HiIwiphTc5Zp64pPEw3S', 'WFIMQPPTZN5XJWF7', 'buyer'),
(5, 'buyer3', '$2y$10$VsJTEAkWLVEFOU6HMHBhXOzEm3Sv6B2yQD4ucD3tv0EObNjdihCHS', '7TMJMLTIM2OXSOEH', 'buyer'),
(6, 'seller3', '$2y$10$Lfvw6lkC4fbKqEHA/chynu4/JqCdElOr.OnxPEQRobx.lz5dpZAUq', 'RNRMIM5B2EVNSXYC', 'seller'),
(7, 'buyer4', '$2y$10$PMxZ.LSIwxtBsONgz5ehFu7utBUrCEt8qxdh6AYWsHBenfibkFMnC', '26SZFO24CRZ5S6HS', 'buyer');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('cart','paid','shipped') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `status`) VALUES
(3, 4, 'cart'),
(4, 3, 'cart');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_id`, `item_id`, `qty`, `price`) VALUES
(34, 3, 2, 1, '300.99'),
(35, 3, 2, 1, '300.99'),
(36, 4, 2, 1, '300.99');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seller_fname` varchar(50) NOT NULL,
  `seller_lname` varchar(50) NOT NULL,
  `seller_email` varchar(50) NOT NULL,
  `seller_totalSold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `user_id`, `seller_fname`, `seller_lname`, `seller_email`, `seller_totalSold`) VALUES
(1, 1, 'seller1', 's1', 's1@gmail.com', NULL),
(2, 2, 'seller2', 's2', 's2@gmail.com', NULL),
(3, 6, 'seller3', 's3', 's3@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyer_id`),
  ADD KEY `buyer_to_login` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_to_item` (`item_id`),
  ADD KEY `cart_to_login` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `contact_to_buyer` (`buyer_id`),
  ADD KEY `contact_to_seller` (`seller_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_to_seller` (`seller_id`),
  ADD KEY `item_to_login` (`user_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_to_user` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `order_detail_to_order` (`order_id`),
  ADD KEY `order_detail_to_item` (`item_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`),
  ADD KEY `seller_to_login` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_to_login` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_to_item` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`),
  ADD CONSTRAINT `cart_to_login` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_to_buyer` FOREIGN KEY (`buyer_id`) REFERENCES `buyer` (`buyer_id`),
  ADD CONSTRAINT `contact_to_seller` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_to_login` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`),
  ADD CONSTRAINT `item_to_seller` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_to_user` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_to_item` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`),
  ADD CONSTRAINT `order_detail_to_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_to_login` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
