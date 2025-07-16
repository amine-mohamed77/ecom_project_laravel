
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2025 at 01:39 PM
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
-- Database: `e_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `descrption` text DEFAULT NULL,
  `url_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `descrption`, `url_image`, `created_at`, `updated_at`) VALUES
(1, 'Camera', 'High-quality cameras to capture your best moments.', 'assets/img/products/camera.jpg', NULL, NULL),
(2, 'Food', 'Fresh and delicious food products for all tastes.', 'assets/img/products/food.webp', NULL, NULL),
(3, 'Makeup', 'A wide range of makeup products for all skin types.', 'assets/img/products/makeup-cosmetics.webp', NULL, NULL),
(4, 'Electronics', 'Latest electronic devices including phones and laptops.', 'assets/img/products/electronics.jpg', NULL, NULL),
(5, 'Watches', 'Elegant and modern watches for men and women.', 'assets/img/products/watch.jpg', NULL, NULL),
(6, 'Bags', 'Stylish and practical bags for daily use.', 'assets/img/products/bage.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;





-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2025 at 01:37 PM
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
-- Database: `e_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `descraption` text DEFAULT NULL,
  `imagepath` text DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `descraption`, `imagepath`, `quantity`, `price`, `created_at`, `updated_at`, `category_id`) VALUES
(19, 'Canon EOS 90D', 'High-resolution DSLR camera', 'assets/img/products/Canon_EOS_90D.jpg', 15, 899.99, NULL, NULL, 1),
(20, 'Margherita Pizza', 'Classic pizza with fresh tomatoes and mozzarella', 'assets/img/products/Margherita-Pizza.webp', 50, 8.50, NULL, NULL, 2),
(21, 'Lipstick Set', 'Matte lipstick set with multiple colors', 'assets/img/products/makeup_product.webp', 30, 25.00, NULL, NULL, 3),
(22, 'iPhone 14', 'Latest Apple smartphone with powerful features', 'assets/img/products/iphone14.jpg', 20, 999.99, NULL, NULL, 4),
(23, 'Rolex Watch', 'Luxury watch for special occasions', 'assets/img/products/watch_rolex.jpg', 5, 1250.00, NULL, NULL, 5),
(24, 'Leather Backpack', 'Durable and stylish leather backpack', 'assets\\img\\products/bage_prodct.jpg', 10, 70.00, NULL, NULL, 6);

-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
