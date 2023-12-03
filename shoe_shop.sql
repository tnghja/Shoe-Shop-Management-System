-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 07:51 AM
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
-- Database: `shoe_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `address_details` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `default_address` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `object` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `object`) VALUES
(1, 'Hunter', 'Nam'),
(2, 'Sandal', 'Nam'),
(3, 'Giày Thể Thao', 'Nam'),
(4, 'Giày Chạy Bộ', 'Nam'),
(5, 'Hunter', 'Nữ'),
(6, 'Sandal', 'Nữ'),
(7, 'Giày Búp Bê', 'Nữ'),
(8, 'Giày Thể Thao', 'Bé Trai'),
(9, 'Sandal', 'Bé Trai'),
(10, 'Dép', 'Bé Trai'),
(11, 'Giày Búp Bê', 'Bé Gái'),
(12, 'Sandal', 'Bé Gái'),
(13, 'Giày Thể Thao', 'Bé Gái');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `color_name` varchar(50) DEFAULT NULL,
  `color_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `color_name`, `color_img`) VALUES
(1, 'Đen', 'https://vuanem.com/blog/wp-content/uploads/2022/10/y-nghia-mau-den.jpg'),
(2, 'Trắng', 'https://media1.nguoiduatin.vn/thumb_x600x600/media/duong-thi-thu-nga/2018/04/09/mau-trang.jpg'),
(3, 'Xanh dương', 'https://nguyenlieulammyphamvn.com/wp-content/uploads/2020/12/mau-xanh-duong-tan-nuoc.jpg'),
(4, 'Xanh lá', 'https://media1.nguoiduatin.vn/thumb_x600x600/media/duong-thi-thu-nga/2018/04/09/mau-xanh-la.jpg'),
(5, 'Đỏ', 'https://inanhoangha.com/public/upload/news/d8fcf24e1b6769bab87bad4883d6f079.png'),
(6, 'Vàng', 'https://vuanem.com/blog/wp-content/uploads/2022/10/mau-vang-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `color_has_sizes`
--

CREATE TABLE `color_has_sizes` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `color_has_sizes`
--

INSERT INTO `color_has_sizes` (`product_id`, `color_id`, `size_id`, `quantity`) VALUES
(1, 1, 1, 100),
(1, 1, 2, 100),
(1, 2, 1, 100),
(1, 2, 2, 100),
(2, 3, 1, 100),
(2, 3, 2, 200),
(2, 5, 1, 100),
(2, 5, 2, 100),
(2, 6, 1, 500),
(2, 6, 2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `customeraccount`
--

CREATE TABLE `customeraccount` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customeraccount`
--

INSERT INTO `customeraccount` (`id`, `firstname`, `lastname`, `email`, `phone_number`, `birthday`, `avatar`, `role`, `username`, `password`) VALUES
(1, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '0000-00-00', '[value-7]', '[value-8]', 'ti', 'ti'),
(2, NULL, NULL, 'tien.nguyen2283@hcmut.edu.vn', NULL, NULL, NULL, NULL, 'dauxanhmay', '$2y$10$euUa0D8SgHWM7skeZuhWiuTJ3II2GS.oBXuJJmGWYzPcMNXdfhtmi');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `address_details` varchar(255) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `total_money` varchar(50) DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `is_cart` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_date`, `province`, `district`, `address_details`, `fullname`, `phone_number`, `status`, `total_money`, `payment`, `customer_id`, `is_cart`) VALUES
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_has_product`
--

CREATE TABLE `order_has_product` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `product_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_has_product`
--

INSERT INTO `order_has_product` (`order_id`, `product_id`, `color_id`, `size_id`, `product_count`) VALUES
(3, 1, 1, 1, 0),
(3, 1, 1, 2, 1),
(3, 1, 2, 2, 6),
(3, 2, 3, 2, 17),
(3, 2, 6, 2, 26);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `avatar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `description`, `category_id`, `avatar`) VALUES
(1, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 1, 'https://product.hstatic.net/1000230642/product/hsm004700nau1_7895b4a780aa46d8a417f329bae3a8e2_1024x1024.jpg'),
(2, 'Giày Thể Thao Nam Biti\'s Hunter Core HSM005400', 550000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 1, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(3, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 1, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(4, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 1, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(5, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 1, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(6, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 1, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(7, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 1, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(8, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 1, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(9, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 1, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(10, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 1, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(11, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 1, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(12, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 4, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(13, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 5, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_has_colors`
--

CREATE TABLE `product_has_colors` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `product_img` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_has_colors`
--

INSERT INTO `product_has_colors` (`product_id`, `color_id`, `product_img`) VALUES
(1, 1, 'https://product.hstatic.net/1000230642/product/hsm004700nau1_7895b4a780aa46d8a417f329bae3a8e2_1024x1024.jpg'),
(1, 2, 'https://product.hstatic.net/1000230642/product/hsm004700xnh1_dd20d3f48ff348fbb87d1666379280c6.jpg'),
(2, 3, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(2, 5, 'https://product.hstatic.net/1000230642/product/https://product.hstatic.net/1000230642/product/hsm005400den1_bb2094ebb0ee462eb85910b63c5678ef_1024x1024.jpg'),
(2, 6, 'https://product.hstatic.net/1000230642/product/hsm005400xam1_482d9a1ccf3c46698c6c10c273d1c2a4_1024x1024.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `size_name` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size_name`) VALUES
(1, 24),
(2, 25),
(3, 26),
(4, 27),
(5, 28),
(6, 29),
(7, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_has_sizes`
--
ALTER TABLE `color_has_sizes`
  ADD PRIMARY KEY (`product_id`,`color_id`,`size_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `customeraccount`
--
ALTER TABLE `customeraccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_has_product`
--
ALTER TABLE `order_has_product`
  ADD PRIMARY KEY (`order_id`,`product_id`,`color_id`,`size_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_has_colors`
--
ALTER TABLE `product_has_colors`
  ADD PRIMARY KEY (`product_id`,`color_id`),
  ADD KEY `color_id` (`color_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customeraccount`
--
ALTER TABLE `customeraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `customeraccount` (`id`);

--
-- Constraints for table `color_has_sizes`
--
ALTER TABLE `color_has_sizes`
  ADD CONSTRAINT `color_has_sizes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `color_has_sizes_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `color_has_sizes_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orderdetails` (`id`),
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customeraccount` (`id`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customeraccount` (`id`);

--
-- Constraints for table `order_has_product`
--
ALTER TABLE `order_has_product`
  ADD CONSTRAINT `order_has_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orderdetails` (`id`),
  ADD CONSTRAINT `order_has_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_has_product_ibfk_3` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `order_has_product_ibfk_4` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `product_has_colors`
--
ALTER TABLE `product_has_colors`
  ADD CONSTRAINT `product_has_colors_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `product_has_colors_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
