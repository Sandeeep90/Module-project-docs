-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 04:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrishop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulkorder`
--

CREATE TABLE `bulkorder` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `qty` int(30) NOT NULL,
  `email` varchar(150) NOT NULL,
  `formername` varchar(50) NOT NULL,
  `status` varchar(150) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `total` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `shipping_status` varchar(255) NOT NULL,
  `order_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cardname` varchar(255) NOT NULL,
  `cardnumb` int(16) NOT NULL,
  `emonth` int(2) NOT NULL,
  `eyear` int(4) NOT NULL,
  `cvv` int(3) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bulkorder`
--

INSERT INTO `bulkorder` (`id`, `name`, `address`, `category`, `productname`, `qty`, `email`, `formername`, `status`, `city`, `state`, `zip`, `total`, `order_status`, `shipping_status`, `order_at`, `cardname`, `cardnumb`, `emonth`, `eyear`, `cvv`, `price`) VALUES
(52, 'antony', 'chennai', 'fruits', 'dragonfruit', 25, 'antony@gmail.com', 'veeran', 'ACCEPT', 'chennai', 'tamilnadu', '600035', 20000, 'COMPLETE', 'COMPLETE', '2023-12-15 08:59:44', 'antony', 1, 1, 1, 1, 800),
(53, 'antony', 'chennai', 'fruits', 'dragonfruit', 30, 'antony@gmail.com', 'veeran', 'REJECT', 'chennai', 'tamilnadu', '600035', 24000, 'REFUND', 'REJECT', '2023-12-15 09:03:44', 'antony', 1, 1, 1, 1, 800),
(54, 'vanitha', 'delhi', 'veg', 'tomato', 45, 'vanitha123@gmail.com', 'ramya', 'REJECT', 'delhi', 'delhi', '123456', 6750, 'REFUND', 'REJECT', '2023-12-15 09:11:52', 'vanitha', 1212121, 12, 1, 1, 150),
(55, 'antony', 'chennai', 'fruits', 'dragonfruit', 10, 'antony@gmail.com', 'veeran', 'REJECT', 'chennai', 'tn', '600254', 8000, 'REFUND', 'REJECT', '2024-01-10 03:01:10', 'antony', 1, 1, 1, 1, 800);

-- --------------------------------------------------------

--
-- Table structure for table `former`
--

CREATE TABLE `former` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `former`
--

INSERT INTO `former` (`id`, `name`, `email`, `password`, `role`, `image`) VALUES
(14, 'ramya', 'ramya@gmail.com', '123456', 'former', 'profile_1446203623.jpg'),
(15, 'vijay', 'vijay123@gmail.com', '444444', 'former', 'profile_26373315.jpg'),
(16, 'veeran', 'veeran@gmail.com', '555555', 'former', 'cac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_at` datetime NOT NULL,
  `email` varchar(150) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumb` int(16) NOT NULL,
  `emonth` int(2) NOT NULL,
  `eyear` int(4) NOT NULL,
  `cvv` int(3) NOT NULL,
  `userid` int(255) NOT NULL,
  `shipping_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `customer_id`, `amount`, `name`, `address`, `city`, `state`, `zip`, `country`, `payment_type`, `order_status`, `order_at`, `email`, `cardname`, `cardnumb`, `emonth`, `eyear`, `cvv`, `userid`, `shipping_status`) VALUES
(205, 2, 1300, 'mani', '45 sivaji 2nd street', 'vellore', 'bangalore', '12546', 'india', 'PAYPAL', 'COMPLETE', '2023-12-16 06:02:32', 'ramya@gmail.com', 'mani', 1, 1, 1, 1, 51, 'PENDING'),
(206, 2, 900, 'antony', 'no 12, ramasamy street, ram apartment', 'salem', 'bangalore', '123456', 'india', 'PAYPAL', 'COMPLETE', '2023-12-16 06:05:07', 'vanitha123@gmail.com', 'antony', 1, 1, 1, 1, 51, 'PENDING'),
(207, 2, 9750, 'antony', '45 sivaji 2nd street', 'chennai', 'tamilnadu', '600035', 'india', 'PAYPAL', 'COMPLETE', '2023-12-16 06:06:29', 'antony@gmail.com', 'antony', 1, 1, 1, 1, 51, 'PENDING'),
(208, 2, 3650, 'antony', 'no 12, ramasamy street, ram apartment', 'vellore', 'tamilnadu', '15248', 'india', 'PAYPAL', 'COMPLETE', '2023-12-16 06:10:34', 'antony@gmail.com', 'antony', 1, 1, 1, 1, 51, 'PENDING'),
(209, 2, 236, 'antony', 'chennai', 'chennai', 'tn', '600254', 'india', 'PAYPAL', 'COMPLETE', '2024-01-10 03:57:15', 'antony@gmail.com', 'antony', 1, 1, 1, 1, 51, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `userid` int(255) NOT NULL,
  `shipping_status` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `totalprice` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`id`, `order_id`, `product_id`, `item_price`, `quantity`, `name`, `userid`, `shipping_status`, `order_status`, `totalprice`) VALUES
(290, 207, 34, 150, 10, 'antony', 51, 'COMPLETE', 'COMPLETE', 1500),
(291, 207, 35, 147, 50, 'antony', 51, 'COMPLETE', 'COMPLETE', 7350),
(292, 207, 36, 500, 1, 'antony', 51, 'COMPLETE', 'COMPLETE', 500),
(293, 207, 37, 400, 1, 'antony', 51, 'COMPLETE', 'COMPLETE', 400),
(294, 208, 33, 350, 10, 'antony', 51, 'REJECTED', 'REFUND', 3500),
(295, 208, 34, 150, 1, 'antony', 51, 'COMPLETE', 'COMPLETE', 150),
(296, 209, 30, 236, 1, 'antony', 51, 'PENDING', 'COMPLETE', 236);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(8) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `category` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `formerid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `productname`, `code`, `image`, `price`, `category`, `name`, `formerid`) VALUES
(30, 'chilly', '45dfef', 'chilly.jpg', 236.00, 'veg', 'vijay', 53),
(32, 'guava', '343dfd', 'guava.jpg', 150.00, 'fruits', 'vijay', 53),
(33, 'orange', 'ff4782', 'orange.jpg', 350.00, 'veg', 'vijay', 53),
(34, 'tomato', 'tomato584', 'tomato.jpg', 150.00, 'veg', 'ramya', 52),
(35, 'bananaa', 'bana459', 'of8.png', 147.00, 'fruits', 'ramya', 52),
(36, 'bottleguard', 'BOTT123', 'bottleguard.jpg', 500.00, 'veg', 'ramya', 52),
(37, 'orange', 'ORG147', 'orange.jpg', 400.00, 'fruits', 'ramya', 52),
(38, 'green', 'GRE145', 'of10.png', 100.00, 'veg', 'vijay', 53),
(39, 'dragonfruit', 'DRG001', 'dragonfruit.jpg', 800.00, 'fruits', 'veeran', 54);

-- --------------------------------------------------------

--
-- Table structure for table `temp_cart`
--

CREATE TABLE `temp_cart` (
  `id` int(255) NOT NULL,
  `productid` int(255) NOT NULL,
  `userid` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temp_cart`
--

INSERT INTO `temp_cart` (`id`, `productid`, `userid`, `qty`, `price`, `status`) VALUES
(276, 39, 3, 1, 800, 'oncart'),
(277, 38, 3, 1, 100, 'oncart'),
(279, 38, 51, 1, 100, 'oncart');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `image`) VALUES
(50, 'vanitha', 'vanitha123@gmail.com', '123456', 'user', 'maxresdefault.jpg'),
(51, 'antony', 'antony@gmail.com', '456789', 'user', '1.jpg'),
(52, 'ramya', 'ramya@gmail.com', '123456', 'former', 'profile_1446203623.jpg'),
(53, 'vijay', 'vijay123@gmail.com', '444444', 'former', 'profile_26373315.jpg'),
(54, 'veeran', 'veeran@gmail.com', '555555', 'former', 'cac.jpg'),
(55, 'manikandan', 'mani@gmail.com', '123456', 'user', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulkorder`
--
ALTER TABLE `bulkorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `former`
--
ALTER TABLE `former`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `temp_cart`
--
ALTER TABLE `temp_cart`
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
-- AUTO_INCREMENT for table `bulkorder`
--
ALTER TABLE `bulkorder`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `former`
--
ALTER TABLE `former`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=365;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `temp_cart`
--
ALTER TABLE `temp_cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
