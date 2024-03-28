-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 04:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmlink`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `full_name`, `email`, `message`, `created_at`) VALUES
(10, 'okemwa', 'fake@gmail.com', 'ee', '2024-03-27 19:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `employee_type` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `location` varchar(255) NOT NULL,
  `farmer_type` varchar(50) NOT NULL,
  `goods` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `username`, `email`, `phone`, `location`, `farmer_type`, `goods`, `password`, `created_at`) VALUES
(19, 'mmmmm', 'alexnokemwa@gmail.com', '1231111111', 'ronga', 'individual', 'beans', '$2y$10$H5Hbl3NW1IoB703qSDdT3u2jMSneOLXt6cd3/Q2QReztSrbH10JNy', '2024-03-17 10:40:56'),
(20, 'alex', 'aaaaa@gmail.com', '3333', 'uuuu', 'individual', 'hhyhy', '$2y$10$XHXp2Pp7fpcXATIdoH/tD.A3CbJ9isPGkkxnQMTV3YCZG3prFabiW', '2024-03-27 15:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `managerkeys`
--

CREATE TABLE `managerkeys` (
  `id` int(11) NOT NULL,
  `managerkeys` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `managerkeys`
--

INSERT INTO `managerkeys` (`id`, `managerkeys`, `created_at`) VALUES
(1, '1', '2024-03-09 00:16:19'),
(2, '2', '2024-03-09 00:16:19'),
(3, '3', '2024-03-09 00:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `uniquekey` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `order_type` varchar(255) NOT NULL,
  `pickup_location` varchar(255) NOT NULL,
  `delivery_location` varchar(255) NOT NULL,
  `goods_type` varchar(50) NOT NULL,
  `goods_weight` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `farmer_id`, `order_type`, `pickup_location`, `delivery_location`, `goods_type`, `goods_weight`, `total_price`, `payment_status`, `created_at`) VALUES
(23, 20, '', 'cuea', 'cuea', 'cereals', 1, 10.00, 'ontransit', '2024-03-27 15:15:35'),
(24, 19, '', 'bomas', 'rongai', 'perishables', 14, 140.00, 'ontransit', '2024-03-27 16:53:38'),
(25, 19, '', 'gataka', 'gataka', 'perishables', 50, 500.00, 'active', '2024-03-27 17:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `orderscart`
--

CREATE TABLE `orderscart` (
  `order_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `order_type` varchar(255) NOT NULL,
  `pickup_location` varchar(255) NOT NULL,
  `delivery_location` varchar(255) NOT NULL,
  `goods_type` varchar(50) NOT NULL,
  `goods_weight` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderscart`
--

INSERT INTO `orderscart` (`order_id`, `farmer_id`, `order_type`, `pickup_location`, `delivery_location`, `goods_type`, `goods_weight`, `total_price`, `payment_status`, `created_at`) VALUES
(10, 20, 'farm input', 'rongai', 'gataka', 'perishables', 1, 10.00, 'ontransit', '2024-03-27 15:30:31'),
(11, 19, 'farm input', 'rongai', 'rongai', 'cereals', 14, 140.00, 'ontransit', '2024-03-27 16:53:21'),
(12, 19, 'market outlet', 'rongai', 'bomas', 'perishables', 14, 140.00, 'Pending', '2024-03-27 17:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `orderstates`
--

CREATE TABLE `orderstates` (
  `id` int(11) NOT NULL,
  `states` varchar(255) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderstates`
--

INSERT INTO `orderstates` (`id`, `states`, `payment`, `order_id`) VALUES
(1, 'Pending', 0.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `ID` int(11) NOT NULL,
  `MerchantRequestID` varchar(500) NOT NULL,
  `CheckoutRequestID` varchar(500) NOT NULL,
  `ResultCode` varchar(500) NOT NULL,
  `Amount` int(11) NOT NULL,
  `MpesaReceiptNumber` varchar(500) NOT NULL,
  `PhoneNumber` varchar(500) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managerkeys`
--
ALTER TABLE `managerkeys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `farmer_id` (`farmer_id`);

--
-- Indexes for table `orderscart`
--
ALTER TABLE `orderscart`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orderstates`
--
ALTER TABLE `orderstates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `managerkeys`
--
ALTER TABLE `managerkeys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orderscart`
--
ALTER TABLE `orderscart`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orderstates`
--
ALTER TABLE `orderstates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`);

--
-- Constraints for table `orderstates`
--
ALTER TABLE `orderstates`
  ADD CONSTRAINT `orderstates_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `farmers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
