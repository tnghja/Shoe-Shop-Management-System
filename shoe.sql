-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2023 lúc 04:28 AM
-- Phiên bản máy phục vụ: 8.0.34
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
--

CREATE TABLE `address` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `address_details` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `default_address` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `address`
--

INSERT INTO `address` (`id`, `user_id`, `fullname`, `province`, `district`, `address_details`, `phone_number`, `default_address`) VALUES
(4, 4, NULL, 'Tỉnh Quảng Ninh', 'Thị xã Đông Triều', '123 Hai Bà Trưng PleiKu Gia Lai', '0987654321', 1),
(5, 5, NULL, 'Tỉnh Tuyên Quang', 'Huyện Lâm Bình', '123 Ba Đình Hà Nội Lạng Sơn', '01598753213', 1),
(6, 3, 'Nguyễn Trương Phước', 'Tỉnh Bắc Giang', 'Huyện Tân Yên', '123 A', '098765432', 0),
(21, 3, 'TOi ten la', 'Tỉnh Bắc Ninh', 'Huyện Yên Phong', 'chung ta la', '123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `category_name` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `object` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
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
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id` int NOT NULL,
  `color_name` varchar(50) DEFAULT NULL,
  `color_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `color`
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
-- Cấu trúc bảng cho bảng `color_has_sizes`
--

CREATE TABLE `color_has_sizes` (
  `product_id` int NOT NULL,
  `color_id` int NOT NULL,
  `size_id` int NOT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `color_has_sizes`
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
-- Cấu trúc bảng cho bảng `customeraccount`
--

CREATE TABLE `customeraccount` (
  `id` int NOT NULL,
  `name` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `customeraccount`
--

INSERT INTO `customeraccount` (`id`, `name`, `email`, `phone_number`, `birthday`, `avatar`, `role`, `username`, `password`) VALUES
(2, NULL, 'tien.nguyen2283@hcmut.edu.vn', NULL, NULL, NULL, NULL, 'dauxanhmay', '$2y$10$euUa0D8SgHWM7skeZuhWiuTJ3II2GS.oBXuJJmGWYzPcMNXdfhtmi'),
(3, 'Nguyễn Trương Phước Thọ', 'u1@gmail.com', '098765432', '2007-04-01', NULL, NULL, 'u1', '$2y$10$wV/2lbiioseByEHJm1454OpaIWMYjZG6qd/e19KpiIui9YpJaibx.'),
(4, 'Thọ Nguyễn Trương Phước ', 'u2@gmail.com', '0987654321', '2024-01-12', NULL, NULL, 'u2', '$2y$10$yVqI0ZHHDhVV2mr9brjcm.4w9kHc2G/KrxfbF5VukSdWZYzSvacCC'),
(5, 'Alex Nguyễn', 'u3@gmail.com', '01598753213', '2023-11-08', NULL, NULL, 'u3', '$2y$10$Cs6PMHlAfm4FYz.4M4qi6OgpokEz.lqCmgu2rwRCKJfS8fuoEm1Ra');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notification`
--

CREATE TABLE `notification` (
  `id` int NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `order_id` int DEFAULT NULL,
  `customer_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `address_details` varchar(255) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `total_money` varchar(50) DEFAULT NULL,
  `payment` int DEFAULT NULL,
  `customer_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_date`, `province`, `district`, `address_details`, `fullname`, `phone_number`, `status`, `total_money`, `payment`, `customer_id`) VALUES
(1, '2023-11-01 22:06:22', 'Thành phố Hà Nội', 'Quận Ba Đình', '152 Ha Noi daz\r\n', 'Tho nguyen truong phuoc', '097856412', 0, '1234', 1234, 3),
(2, '2023-12-21 22:37:50', 'Thành phố Hà Nội1', 'Quận Ba Đình1', 'Thành phố Hà Nội1 Quận Ba Đình1', 'Nguyen Truong Phuoc Tho', '9876543212', 1, '1234', 1234, 3),
(3, '2023-12-21 22:37:50', 'Thành phố Hà Nội2', 'Quận Ba Đình2', 'Thành phố Hà Nội2 Quận Ba Đình2', 'Nguyen Truong Phuoc Tho', '19876543212', 2, '12345', 12354, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_has_product`
--

CREATE TABLE `order_has_product` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `color_id` int NOT NULL,
  `size_id` int NOT NULL,
  `product_count` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `order_has_product`
--

INSERT INTO `order_has_product` (`order_id`, `product_id`, `color_id`, `size_id`, `product_count`) VALUES
(1, 1, 2, 1, 2),
(1, 2, 3, 1, 3),
(1, 2, 6, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `o_d`
-- (See below for the actual view)
--
CREATE TABLE `o_d` (
`order_id` int
,`product_name` varchar(100)
,`color_name` varchar(50)
,`product_count` int
,`price` int
,`payment` int
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `description` mediumtext,
  `category_id` int DEFAULT NULL,
  `avatar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `product`
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
-- Cấu trúc bảng cho bảng `product_has_colors`
--

CREATE TABLE `product_has_colors` (
  `product_id` int NOT NULL,
  `color_id` int NOT NULL,
  `product_img` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `product_has_colors`
--

INSERT INTO `product_has_colors` (`product_id`, `color_id`, `product_img`) VALUES
(1, 1, 'https://product.hstatic.net/1000230642/product/hsm004700nau1_7895b4a780aa46d8a417f329bae3a8e2_1024x1024.jpg'),
(1, 2, 'https://product.hstatic.net/1000230642/product/hsm004700xnh1_dd20d3f48ff348fbb87d1666379280c6.jpg'),
(2, 3, 'https://product.hstatic.net/1000230642/product/hsm005400cam1_16acaa1c175842b79d6a789c42467b38_1024x1024.jpg'),
(2, 5, 'https://product.hstatic.net/1000230642/product/https://product.hstatic.net/1000230642/product/hsm005400den1_bb2094ebb0ee462eb85910b63c5678ef_1024x1024.jpg'),
(2, 6, 'https://product.hstatic.net/1000230642/product/hsm005400xam1_482d9a1ccf3c46698c6c10c273d1c2a4_1024x1024.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id` int NOT NULL,
  `size_name` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `size_name`) VALUES
(1, 24),
(2, 25),
(3, 26),
(4, 27),
(5, 28),
(6, 29),
(7, 30);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `o_d`
--
DROP TABLE IF EXISTS `o_d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `o_d`  AS SELECT `order_has_product`.`order_id` AS `order_id`, `product`.`product_name` AS `product_name`, `color`.`color_name` AS `color_name`, `order_has_product`.`product_count` AS `product_count`, `product`.`price` AS `price`, `orderdetails`.`payment` AS `payment` FROM (((`order_has_product` join `orderdetails` on((`order_has_product`.`order_id` = `orderdetails`.`id`))) join `product` on((`order_has_product`.`product_id` = `product`.`id`))) join `color` on((`color`.`id` = `order_has_product`.`color_id`))) WHERE (`order_has_product`.`order_id` = 1) ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `color_has_sizes`
--
ALTER TABLE `color_has_sizes`
  ADD PRIMARY KEY (`product_id`,`color_id`,`size_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Chỉ mục cho bảng `customeraccount`
--
ALTER TABLE `customeraccount`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `order_has_product`
--
ALTER TABLE `order_has_product`
  ADD PRIMARY KEY (`order_id`,`product_id`,`color_id`,`size_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `product_has_colors`
--
ALTER TABLE `product_has_colors`
  ADD PRIMARY KEY (`product_id`,`color_id`),
  ADD KEY `color_id` (`color_id`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `address`
--
ALTER TABLE `address`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `customeraccount`
--
ALTER TABLE `customeraccount`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `customeraccount` (`id`);

--
-- Các ràng buộc cho bảng `color_has_sizes`
--
ALTER TABLE `color_has_sizes`
  ADD CONSTRAINT `color_has_sizes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `color_has_sizes_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `color_has_sizes_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`);

--
-- Các ràng buộc cho bảng `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orderdetails` (`id`),
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customeraccount` (`id`);

--
-- Các ràng buộc cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customeraccount` (`id`);

--
-- Các ràng buộc cho bảng `order_has_product`
--
ALTER TABLE `order_has_product`
  ADD CONSTRAINT `order_has_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orderdetails` (`id`),
  ADD CONSTRAINT `order_has_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_has_product_ibfk_3` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `order_has_product_ibfk_4` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `product_has_colors`
--
ALTER TABLE `product_has_colors`
  ADD CONSTRAINT `product_has_colors_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `product_has_colors_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
