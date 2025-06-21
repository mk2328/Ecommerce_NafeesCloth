-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2025 at 09:21 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `maincat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`maincat_id`, `cat_name`, `description`) VALUES
(1, 'Women', 'Unstitched Women\'s Clothing – Premium quality fabrics with elegant prints and embroidery, perfect for custom styling. Ideal for casual, formal, and festive wear!'),
(2, 'Kids', 'Unstitched Kids\' Collection – Soft, comfortable fabrics with fun prints and vibrant colors, perfect for every occasion!'),
(3, 'Fragrances', 'A wide range of premium perfumes and colognes for both men and women, designed to leave a lasting impression with every scent.'),
(4, 'Cosmetics', 'Beauty and skincare products designed to enhance your natural beauty, including skincare, makeup, and lip care essentials.');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(37, 'Muskan Kamran', 'mk@gmail.com', '06655376452', 'query', 'hello', '2025-03-19 19:16:56'),
(38, 'Muskan Kamran', 'mk@gmail.com', '06655376452', 'query', 'hello', '2025-03-19 19:16:56'),
(39, 'Ahmad', 'admad@gmail.com', '099887766', 'complain', '', '2025-03-20 19:09:55'),
(40, 'Ahmad', 'admad@gmail.com', '099887766', 'complain', '', '2025-03-20 19:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `order_notes` text DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `zip_code`, `order_notes`, `total_price`, `order_date`) VALUES
(1, 'Muskan', 'Kamran', 'mk@gmail.com', '03322657481', 'Abc street, sector 11k', '', '12345', 'nothing', 0.00, '2025-03-13 19:28:35'),
(4, 'New', 'User', 'user@gmail.com', '1234566789', 'customer address', 'karachi', '12345', 'no', 13700.00, '2025-03-13 19:46:16'),
(5, 'Maryam', 'Kamran', 'maryam@gmail.com', '1234567890', 'address', 'karachi', '1355', '', 13000.00, '2025-03-13 19:56:00'),
(6, 'Maryam', 'Kamran', 'maryam@gmail.com', '1234567890', 'address', 'karachi', '1355', 'hello', 13000.00, '2025-03-13 19:56:42'),
(7, 'Maryam', 'Kamran', 'maryam@gmail.com', '1234567890', 'address', 'karachi', '1355', 'hello', 13000.00, '2025-03-13 20:01:19'),
(8, 'check', 'no', 'check@gmail.com', '1234', 'address', 'khi', '3456', 'nhh', 13000.00, '2025-03-13 20:06:18'),
(9, 'check', 'no', 'check@gmail.com', '1234', 'address', 'khi', '3456', 'nhh', 13000.00, '2025-03-13 20:06:20'),
(10, 'check', 'no', 'check@gmail.com', '1234', 'address', 'khi', '3456', 'nhh', 13000.00, '2025-03-13 20:06:23'),
(11, 'fist', 'last', 'first@gmail.com', '1426462', 'jgfuy', 'bjg', '4546', 'mn', 0.00, '2025-03-13 20:08:21'),
(12, 'Order', 'nn', 'order@gmail.com', '1267768', 'bjhgyu', 'yuyhiuk', '6757', 'hjh', 0.00, '2025-03-13 20:11:59'),
(13, 'Order', 'mnbmb', 'order@gmail.com', '5465464', 'jhggu', 'jhkjkj', '655', 'bnjh', 9400.00, '2025-03-13 20:13:06'),
(14, 'Hello', 'mnknj', 'hello@gmail.com', '76876', 'mnbjh', 'jgj', '6876', 'hbj', 9400.00, '2025-03-13 20:15:04'),
(15, 'Muhib', 'kamran', 'muhib@gmail.com', '12345667888', 'abcd', 'khi', '66565', 'gcfg', 4500.00, '2025-03-13 20:33:29'),
(16, 'Maryam ', 'Kamran', 'maryam@gmail.com', '03322567481', 'abc street, north karachi', 'Karachi', '12345', '', 8600.00, '2025-03-17 16:19:52'),
(17, 'Maryam ', 'Kamran', 'maryam@gmail.com', '03322567481', 'abc street, north karachi', 'Karachi', '12345', '', 8600.00, '2025-03-17 16:20:03'),
(18, 'Maryam ', 'Kamran', 'maryam@gmail.com', '03322567481', 'abc street, north karachi', 'Karachi', '12345', '', 8600.00, '2025-03-17 16:21:44'),
(19, 'User', 'hun', 'user@gmail.com', '977871676111', 'address', 'khi', '767', 'nbjhb', 8600.00, '2025-03-17 16:27:30'),
(20, 'Checking', 'hello', 'check@gmail.com', '123456789', 'check address', 'khi', '1234', 'hi', 12700.00, '2025-03-18 16:34:26'),
(21, 'whatsapp', 'check', 'whatsapp@gmail.com', '123456789', 'abcd', 'khi', '3535', 'kjkj', 7400.00, '2025-03-18 16:45:28'),
(22, 'Muskan ', 'Kamran', 'mk@gmail.com', '09988776655', 'mk address', 'Karachi', '12345', 'Order should be handled carefullt', 9000.00, '2025-03-20 20:10:33'),
(23, 'Muskan ', 'Kamran', 'mk@gmail.com', '09988776655', 'mk address', 'Karachi', '12345', 'Order should be handled carefullt', 9000.00, '2025-03-20 20:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `product_name`, `product_image`, `quantity`, `price`, `subtotal`, `product_id`) VALUES
(1, 4, 'women1', 'assets/images/women/women1.jpeg', 2, 2500.00, 5000.00, 177),
(2, 4, 'women7', 'assets/images/women/women7.jpeg', 3, 2900.00, 8700.00, 183),
(3, 5, 'women6', 'assets/images/women/women6.jpeg', 2, 3200.00, 6400.00, 182),
(4, 5, 'women11', 'assets/images/women/women11.jpeg', 2, 3300.00, 6600.00, 187),
(5, 6, 'women6', 'assets/images/women/women6.jpeg', 2, 3200.00, 6400.00, 182),
(6, 6, 'women11', 'assets/images/women/women11.jpeg', 2, 3300.00, 6600.00, 187),
(7, 7, 'women6', 'assets/images/women/women6.jpeg', 2, 3200.00, 6400.00, 182),
(8, 7, 'women11', 'assets/images/women/women11.jpeg', 2, 3300.00, 6600.00, 187),
(9, 8, 'women6', 'assets/images/women/women6.jpeg', 2, 3200.00, 6400.00, 182),
(10, 8, 'women11', 'assets/images/women/women11.jpeg', 2, 3300.00, 6600.00, 187),
(11, 13, 'women2', 'assets/images/women/women2.jpeg', 2, 2700.00, 5400.00, 178),
(12, 13, 'kids11', 'assets/images/kids/kids11.jpeg', 2, 2000.00, 4000.00, 222),
(13, 14, 'women2', 'assets/images/women/women2.jpeg', 2, 2700.00, 5400.00, 178),
(14, 14, 'kids11', 'assets/images/kids/kids11.jpeg', 2, 2000.00, 4000.00, 222),
(15, 15, 'women1', 'assets/images/women/women1.jpeg', 1, 2500.00, 2500.00, 177),
(16, 15, 'kids6', 'assets/images/kids/kids6.jpeg', 1, 2000.00, 2000.00, 217),
(17, 16, 'women2', 'assets/images/women/women2.jpeg', 2, 2700.00, 5400.00, 178),
(18, 16, 'women6', 'assets/images/women/women6.jpeg', 1, 3200.00, 3200.00, 182),
(19, 17, 'women2', 'assets/images/women/women2.jpeg', 2, 2700.00, 5400.00, 178),
(20, 17, 'women6', 'assets/images/women/women6.jpeg', 1, 3200.00, 3200.00, 182),
(21, 18, 'women2', 'assets/images/women/women2.jpeg', 2, 2700.00, 5400.00, 178),
(22, 18, 'women6', 'assets/images/women/women6.jpeg', 1, 3200.00, 3200.00, 182),
(23, 19, 'women2', 'assets/images/women/women2.jpeg', 2, 2700.00, 5400.00, 178),
(24, 19, 'women6', 'assets/images/women/women6.jpeg', 1, 3200.00, 3200.00, 182),
(25, 20, 'kids2', 'assets/images/kids/kids2.jpeg', 3, 2100.00, 6300.00, 213),
(26, 20, 'women6', 'assets/images/women/women6.jpeg', 2, 3200.00, 6400.00, 182),
(27, 21, 'women6', 'assets/images/women/women6.jpeg', 1, 3200.00, 3200.00, 182),
(28, 21, 'kids2', 'assets/images/kids/kids2.jpeg', 2, 2100.00, 4200.00, 213),
(29, 22, 'women3', 'assets/images/women/women3.jpeg', 3, 3000.00, 9000.00, 179),
(30, 23, 'women3', 'assets/images/women/women3.jpeg', 3, 3000.00, 9000.00, 179);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `description`, `unit_price`, `subcat_id`, `image`, `qty`) VALUES
(177, 'women1', 'Stylish embroidered dress', 2500, 1, 'assets/images/women/women1.jpeg', NULL),
(178, 'women2', 'Elegant red outfit for formal wear', 2700, 1, 'assets/images/women/women2.jpeg', NULL),
(179, 'women3', 'Trendy blue dress with dupatta', 3000, 1, 'assets/images/women/women3.jpeg', NULL),
(180, 'women4', 'Casual printed dress', 2200, 1, 'assets/images/women/women4.jpeg', NULL),
(181, 'women5', 'Dark green embroidered suit', 2800, 1, 'assets/images/women/women5.jpeg', NULL),
(182, 'women6', 'Multi-color traditional outfit', 3200, 1, 'assets/images/women/women6.jpeg', NULL),
(183, 'women7', 'Stylish purple floral dress', 2900, 1, 'assets/images/women/women7.jpeg', NULL),
(184, 'women8', 'Classic black and gold dress', 3100, 1, 'assets/images/women/women8.jpeg', NULL),
(185, 'women9', 'Light-colored elegant outfit', 2700, 1, 'assets/images/women/women9.jpeg', NULL),
(186, 'women10', 'Chic printed casual wear', 2600, 1, 'assets/images/women/women10.jpeg', NULL),
(187, 'women11', 'Embroidered black dress with dupatta', 3300, 1, 'assets/images/women/women11.jpeg', NULL),
(188, 'women12', 'Vibrant summer dress', 2400, 1, 'assets/images/women/women12.jpeg', NULL),
(189, 'women13', 'Ethnic red suit', 2900, 1, 'assets/images/women/women13.jpeg', NULL),
(190, 'women14', 'Traditional green dress', 3100, 1, 'assets/images/women/women14.jpeg', NULL),
(191, 'women15', 'Maroon outfit with embroidery', 2800, 1, 'assets/images/women/women15.jpeg', NULL),
(192, 'women16', 'Red designer dress', 3500, 1, 'assets/images/women/women16.jpeg', NULL),
(193, 'women17', 'Printed long kurta', 2500, 1, 'assets/images/women/women17.jpeg', NULL),
(194, 'women18', 'Classic beige and black dress', 2900, 1, 'assets/images/women/women18.jpeg', NULL),
(195, 'women19', 'Floral printed dress', 3200, 1, 'assets/images/women/women19.jpeg', NULL),
(196, 'women20', 'Trendy traditional wear', 2700, 1, 'assets/images/women/women20.jpeg', NULL),
(197, 'women21', 'Blue embroidered party wear', 3400, 1, 'assets/images/women/women21.jpeg', NULL),
(198, 'women22', 'Soft pastel colored dress', 2600, 1, 'assets/images/women/women22.jpeg', NULL),
(199, 'women23', 'Stylish dark floral outfit', 3000, 1, 'assets/images/women/women23.jpeg', NULL),
(200, 'women24', 'Classic ethnic wear', 2800, 1, 'assets/images/women/women24.jpeg', NULL),
(201, 'women25', 'Black floral printed dress', 3200, 1, 'assets/images/women/women25.jpeg', NULL),
(202, 'women26', 'Dark blue formal dress', 3100, 1, 'assets/images/women/women26.jpeg', NULL),
(203, 'women27', 'Modern ethnic printed suit', 2900, 1, 'assets/images/women/women27.jpeg', NULL),
(204, 'women28', 'Mustard colored traditional dress', 2600, 1, 'assets/images/women/women28.jpeg', NULL),
(205, 'women29', 'Designer embroidered dress', 3500, 1, 'assets/images/women/women29.jpeg', NULL),
(206, 'women30', 'Chic golden outfit', 3300, 1, 'assets/images/women/women30.jpeg', NULL),
(207, 'women31', 'Trendy blue kurta', 2700, 1, 'assets/images/women/women31.jpeg', NULL),
(208, 'women32', 'Classic black formal dress', 3000, 1, 'assets/images/women/women32.jpeg', NULL),
(209, 'women33', 'Embroidered blue dress with dupatta', 3400, 1, 'assets/images/women/women33.jpeg', NULL),
(210, 'women34', 'Pastel ethnic dress', 2800, 1, 'assets/images/women/women34.jpeg', NULL),
(211, 'women35', 'Traditional printed dress', 3200, 1, 'assets/images/women/women35.jpeg', NULL),
(212, 'kids1', 'Trendy purple outfit for kids', 2000, 2, 'assets/images/kids/kids1.jpeg', NULL),
(213, 'kids2', 'Elegant beige dress for formal occasions', 2100, 2, 'assets/images/kids/kids2.jpeg', NULL),
(214, 'kids3', 'Stylish black dress with embroidery', 2200, 2, 'assets/images/kids/kids3.jpeg', NULL),
(215, 'kids4', 'Pink polka dot outfit', 1900, 2, 'assets/images/kids/kids4.jpeg', NULL),
(216, 'kids5', 'Blue traditional dress for kids', 2300, 2, 'assets/images/kids/kids5.jpeg', NULL),
(217, 'kids6', 'Mustard colored ethnic wear', 2000, 2, 'assets/images/kids/kids6.jpeg', NULL),
(218, 'kids7', 'Green embroidered outfit', 2100, 2, 'assets/images/kids/kids7.jpeg', NULL),
(219, 'kids8', 'Gray checkered outfit for kids', 2200, 2, 'assets/images/kids/kids8.jpeg', NULL),
(220, 'kids9', 'Bright blue stylish dress', 2300, 2, 'assets/images/kids/kids9.jpeg', NULL),
(221, 'kids10', 'Purple printed dress', 1900, 2, 'assets/images/kids/kids10.jpeg', NULL),
(222, 'kids11', 'Orange traditional outfit', 2000, 2, 'assets/images/kids/kids11.jpeg', NULL),
(223, 'kids12', 'Lavender and gold ethnic suit', 2100, 2, 'assets/images/kids/kids12.jpeg', NULL),
(224, 'kids13', 'Royal blue embroidered dress', 2300, 2, 'assets/images/kids/kids13.jpeg', NULL),
(225, 'kids14', 'Green floral printed outfit', 1900, 2, 'assets/images/kids/kids14.jpeg', NULL),
(226, 'kids15', 'Olive-colored traditional dress', 2200, 2, 'assets/images/kids/kids15.jpeg', NULL),
(227, 'kids16', 'Sky blue chic outfit', 2000, 2, 'assets/images/kids/kids16.jpeg', NULL),
(228, 'kids17', 'Brown embroidered traditional dress', 2100, 2, 'assets/images/kids/kids17.jpeg', NULL),
(229, 'kids18', 'White and blue floral outfit', 2300, 2, 'assets/images/kids/kids18.jpeg', NULL),
(230, 'kids19', 'Blue traditional wear with golden detailing', 2400, 2, 'assets/images/kids/kids19.jpeg', NULL),
(231, 'kids20', 'Pink stylish dress for girls', 1900, 2, 'assets/images/kids/kids20.jpeg', NULL),
(232, 'kids21', 'Classic beige and pink traditional outfit', 2100, 2, 'assets/images/kids/kids21.jpeg', NULL),
(233, 'kids22', 'Light green outfit with dupatta', 2200, 2, 'assets/images/kids/kids22.jpeg', NULL),
(234, 'kids23', 'Pastel shaded printed outfit', 2000, 2, 'assets/images/kids/kids23.jpeg', NULL),
(235, 'kids24', 'Blue and gold ethnic dress', 2300, 2, 'assets/images/kids/kids24.jpeg', NULL),
(236, 'kids25', 'Green casual printed outfit', 2100, 2, 'assets/images/kids/kids25.jpeg', NULL),
(237, 'kids26', 'Orange and blue stylish dress', 2400, 2, 'assets/images/kids/kids26.jpeg', NULL),
(239, 'Test new', 'hello hi', 100, 2, 'assets/images/kids/hero.jpg', 200),
(240, 'My product', 'dress hy ye', 200, 1, 'assets/images/women/dress.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `phone_no`, `address`, `role`) VALUES
(1, 'Muskan Kamran', 'muskankamran65@gmail.com', 'muskan12', '123', '0333-6578945', 'abcd', 'customer'),
(2, 'Maryam', 'maryam@gmail.com', 'maryam12', '123', '0333-6578945', 'abcd', 'customer'),
(3, 'Text', 'text@gmail.com', 'text12', '123', '03322748593', 'abcd', 'customer'),
(4, 'New User', 'new@gmail.com', 'new12', '123', '035557278181', 'abcd', 'customer'),
(5, 'Admin', 'admin@gmail.com', 'admin123', '123', '09988776655', 'admin address', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `fullname`, `username`, `email`, `phone`, `address`, `password`, `created_at`, `role`) VALUES
(1, 'Muskan Kamran', 'mk123', 'mk@gmail.com', '03322456789', 'mk address', '$2y$10$Ou2qoctHIuBN3F7l6TbZIOtg6ccrZfqF8fChxSczDJ6QdBuWK3ivq', '2025-03-19 19:40:06', NULL),
(2, 'User', 'user12', 'user@gmail.com', '09988776655', 'user address', '$2y$10$XSEsWvrmK19cwtTT6FkR.eaSd7o9dNNkxakFaDen1zG/kOIfUWsa.', '2025-03-19 19:43:37', NULL),
(6, 'Admin', 'admin1234', 'admin12@gmail.com', '09988776655', 'admin address', '$2y$10$vuyv1PWW.GgqGw4Fb84VnuC81y7pqgFILDY3JR3F4OB7Ri7w6peay', '2025-03-19 20:01:28', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `w_id` int(11) NOT NULL,
  `date_added` date NOT NULL,
  `cust_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`maincat_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_p_scID` (`subcat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `fk_wl_prodid` (`product_id`),
  ADD KEY `fk_wl_usersid` (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `maincat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_main_category` FOREIGN KEY (`subcat_id`) REFERENCES `categories` (`maincat_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_wl_prodid` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `fk_wl_usersid` FOREIGN KEY (`cust_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
