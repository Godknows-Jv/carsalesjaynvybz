-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 08, 2024 at 11:03 PM
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
-- Database: `car_sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients_orders`
--

CREATE TABLE `clients_orders` (
  `email` varchar(60) NOT NULL,
  `customer_name` varchar(90) NOT NULL,
  `product` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients_orders`
--

INSERT INTO `clients_orders` (`email`, `customer_name`, `product`, `quantity`, `payment_type`, `date`) VALUES
('nyandorog781@gmail.com', 'GODKNOWS NYANDORO', 'Gray Car', 3, 'Credit Card', '2024-04-08 19:11:00'),
('nyandorog781@gmail.com', 'GODKNOWS NYANDORO', 'Gray Car', 3, 'Credit Card', '2024-04-08 19:12:53'),
('nyandorog781@gmail.com', 'GODKNOWS NYANDORO', 'Gray Car', 3, 'Credit Card', '2024-04-08 19:14:50'),
('nyandorog781@gmail.com', 'GODKNOWS NYANDORO', 'Gray Car', 3, 'Credit Card', '2024-04-08 19:16:11'),
('nyandorog781@gmail.com', 'GODKNOWS NYANDORO', 'Gray Car', 3, 'Credit Card', '2024-04-08 19:17:28'),
('nyandorog781@gmail.com', 'GODKNOWS NYANDORO', 'Gray Car', 3, 'Credit Card', '2024-04-08 19:20:19'),
('nyandorog781@gmail.com', 'GODKNOWS NYANDORO', 'Gray Car', 3, 'Credit Card', '2024-04-08 19:21:11'),
('nyandorog781@gmail.com', 'GODKNOWS NYANDORO', 'Gray Car', 3, 'Bank Transfer', '2024-04-08 19:33:41'),
('nyandorog781@gmail.com', 'Godknows', 'Aud 2024 version', 1, 'Bank Transfer', '2024-04-08 20:04:03'),
('nyandorog781@gmail.com', 'tapiwa', 'Benz 2024 version', 2, 'Bank Transfer', '2024-04-08 20:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_number` int(11) NOT NULL,
  `image` blob NOT NULL,
  `description` varchar(100) NOT NULL,
  `rating` int(4) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_number`, `image`, `description`, `rating`, `price`) VALUES
(1, 0x696d616765732f6d617872657364656661756c745f342e6a7067, 'Lime green XIIM car', 4, '$20,000'),
(2, 0x696d616765732f46726f6e742d616e676c652d766965772d6f662d79656c6c6f772d323032332d43686576792d547261696c626c617a65722d686967686c69676874696e672d6974732d72656c656173652d646174652d616e642d70726963652e6a7067, 'Yellow Cheverolet 2023', 3, '$7,000'),
(3, 0x696d616765732f424d572e6a7067, 'Blue BMW APINA', 5, '$80,000'),
(4, 0x696d616765732f6166702d3531373931393732322d31365f392e6a7067, 'Red electric car', 4, '$120,000'),
(5, 0x696d616765732f7265642e6a7067, 'Red Twin Cab', 4, '$40,000'),
(6, 0x696d616765732f3935353934362e6a7067, 'GMD Twin Cab new shape', 5, '$90,000'),
(7, 0x696d616765732f4f49502e6a706567, 'Race high-speed car', 5, '$120,000'),
(8, 0x696d616765732f6d617872657364656661756c745f322e6a7067, 'Lamboghin X3', 5, '$200,000'),
(9, 0x696d616765732f636174676f72792e6a7067, 'Gray Aud car 2024', 4, '$30,000'),
(10, 0x696d616765732f6d617872657364656661756c745f332e6a7067, 'Orange Cheap Car 2023', 3, '$12,000'),
(11, 0x696d616765732f636174332e6a7067, 'GMD Twin Cab', 4, '$90,000'),
(12, 0x696d616765732f636174322e6a706567, 'Benz 2020 version', 5, '$100,000'),
(13, 0x696d616765732f6d617872657364656661756c745f342e6a7067, 'Lime green XIIM car', 4, '$20,000'),
(15, 0x696d616765732f424d572e6a7067, 'Blue BMW APINA', 5, '$80,000'),
(49, 0x696d616765732f7265642e6a7067, 'Red GMC CAR', 5, '45000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(20) NOT NULL,
  `level` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `level`, `password`) VALUES
(9, 'langa', 'nyandorog781@gmail.com', 779318924, '1', '2003'),
(10, 'Godknows', 'nyayayaya@gmail.com', 788282828, '2', '2003'),
(11, 'Tawanda', 'tawanda781@gmail.com', 929393939, '2', 'nyandoro'),
(12, 'malvin', 'marerewrer@gmail.com', 49944949, '2', '2003'),
(13, 'mitchell', 'mimymudziviri@15', 772457328, '1', 'swanky@15'),
(14, 'cathrine', 'cathrine@gmail.com', 2147483647, '2', 'cathth'),
(15, 'Last', 'me@gmail.com', 779319824, '2', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients_orders`
--
ALTER TABLE `clients_orders`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
