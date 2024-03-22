-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2023 at 05:10 AM
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
-- Database: `full-app`
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
(3, 'Giày thể thao', 'Nam'),
(4, 'Hunter', 'Nữ'),
(7, 'Giày thể thao', 'Bé trai'),
(8, 'Sandal', 'Bé trai'),
(9, 'Dép', 'Bé trai'),
(10, 'Giày búp bê', 'Bé gái'),
(11, 'Sandal', 'Bé gái'),
(12, 'Giày thể thao', 'Bé gái'),
(13, 'GOSTO', 'Nữ'),
(14, 'Giày thời trang', 'Nữ');

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
(1, 'Trắng', 'https://htmlcolorcodes.com/assets/images/colors/white-color-solid-background-1920x1080.png'),
(2, 'Đen', 'https://htmlcolorcodes.com/assets/images/colors/matte-black-color-solid-background-1920x1080.png'),
(3, 'Đỏ', 'https://htmlcolorcodes.com/assets/images/colors/red-color-solid-background-1920x1080.png'),
(4, 'Vàng', 'https://htmlcolorcodes.com/assets/images/colors/pastel-yellow-color-solid-background-1920x1080.png'),
(5, 'Xanh dương', 'https://htmlcolorcodes.com/assets/images/colors/blue-color-solid-background-1920x1080.png'),
(6, 'Xanh lục', 'https://htmlcolorcodes.com/assets/images/colors/green-color-solid-background-1920x1080.png'),
(7, 'Nâu', 'https://htmlcolorcodes.com/assets/images/colors/light-brown-color-solid-background-1920x1080.png'),
(8, 'Xám', 'https://htmlcolorcodes.com/assets/images/colors/light-gray-color-solid-background-1920x1080.png'),
(9, 'Kem', 'https://htmlcolorcodes.com/assets/images/colors/cream-color-solid-background-1920x1080.png');

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
(1, 5, 16, 1),
(1, 5, 17, 20),
(1, 5, 18, 30),
(1, 5, 19, 10),
(1, 5, 20, 10),
(1, 5, 21, 10),
(1, 5, 22, 10),
(1, 7, 16, 0),
(1, 7, 17, 5),
(1, 7, 18, 23),
(1, 7, 19, 30),
(1, 7, 20, 10),
(1, 7, 21, 10),
(1, 7, 22, 10),
(2, 2, 16, 0),
(2, 2, 17, 5),
(2, 2, 18, 5),
(2, 2, 19, 0),
(2, 2, 20, 6),
(2, 2, 21, 34),
(2, 2, 22, 23),
(2, 8, 16, 32),
(2, 8, 17, 23),
(2, 8, 18, 22),
(2, 8, 19, 11),
(2, 8, 20, 11),
(2, 8, 21, 13),
(2, 8, 22, 4),
(3, 5, 16, 7),
(3, 5, 17, 12),
(3, 5, 18, 7),
(3, 5, 19, 14),
(3, 5, 20, 10),
(3, 5, 21, 7),
(3, 5, 22, 10),
(3, 8, 16, 9),
(3, 8, 17, 24),
(3, 8, 18, 12),
(3, 8, 19, 11),
(3, 8, 20, 12),
(3, 8, 21, 13),
(3, 8, 22, 14),
(3, 9, 16, 8),
(3, 9, 17, 15),
(3, 9, 18, 8),
(3, 9, 19, 0),
(3, 9, 20, 11),
(3, 9, 21, 0),
(3, 9, 22, 11),
(4, 2, 16, 21),
(4, 2, 17, 11),
(4, 2, 18, 7),
(4, 2, 19, 0),
(4, 2, 20, 10),
(4, 2, 21, 0),
(4, 2, 22, 11),
(5, 2, 16, 12),
(5, 2, 17, 0),
(5, 2, 18, 0),
(5, 2, 19, 10),
(5, 2, 20, 0),
(5, 2, 21, 0),
(5, 2, 22, 14),
(6, 2, 16, 10),
(6, 2, 17, 9),
(6, 2, 18, 10),
(6, 2, 19, 10),
(6, 2, 20, 0),
(6, 2, 21, 13),
(6, 2, 22, 0),
(7, 2, 16, 0),
(7, 2, 17, 11),
(7, 2, 18, 7),
(7, 2, 19, 9),
(7, 2, 20, 0),
(7, 2, 21, 11),
(7, 2, 22, 0),
(8, 5, 17, 11),
(8, 5, 18, 11),
(8, 5, 19, 0),
(8, 5, 20, 0),
(8, 5, 21, 0),
(8, 5, 22, 11),
(9, 2, 16, 0),
(9, 2, 17, 11),
(9, 2, 18, 43),
(9, 2, 19, 45),
(9, 2, 20, 12),
(9, 2, 21, 14),
(9, 2, 22, 19),
(9, 8, 16, 12),
(9, 8, 17, 23),
(9, 8, 18, 13),
(9, 8, 19, 15),
(9, 8, 20, 16),
(9, 8, 21, 16),
(9, 8, 22, 15),
(9, 9, 16, 0),
(9, 9, 17, 0),
(9, 9, 18, 0),
(9, 9, 19, 10),
(9, 9, 20, 0),
(9, 9, 21, 0),
(9, 9, 22, 0),
(10, 8, 16, 0),
(10, 8, 17, 0),
(10, 8, 18, 0),
(10, 8, 19, 0),
(10, 8, 20, 0),
(10, 8, 21, 0),
(10, 8, 22, 0),
(11, 2, 16, 10),
(11, 2, 17, 7),
(11, 2, 18, 0),
(11, 2, 19, 0),
(11, 2, 20, 11),
(11, 2, 21, 0),
(11, 2, 22, 0),
(12, 1, 16, 0),
(12, 1, 17, 9),
(12, 1, 18, 25),
(12, 1, 19, 14),
(12, 1, 20, 13),
(12, 1, 21, 43),
(12, 1, 22, 13),
(12, 7, 16, 42),
(12, 7, 17, 24),
(12, 7, 18, 25),
(12, 7, 19, 12),
(12, 7, 20, 13),
(12, 7, 21, 35),
(12, 7, 22, 13),
(13, 1, 16, 10),
(13, 1, 17, 7),
(13, 1, 18, 20),
(13, 1, 19, 10),
(13, 1, 20, 1),
(13, 1, 21, 4),
(13, 1, 22, 3),
(13, 2, 16, 10),
(13, 2, 17, 110),
(13, 2, 18, 0),
(13, 2, 19, 32),
(13, 2, 20, 10),
(13, 2, 21, 10),
(13, 2, 22, 0),
(13, 5, 16, 10),
(13, 5, 17, 8),
(13, 5, 18, 0),
(13, 5, 19, 10),
(13, 5, 20, 0),
(13, 5, 21, 0),
(13, 5, 22, 0),
(13, 9, 16, 10),
(13, 9, 17, 10),
(13, 9, 18, 10),
(13, 9, 19, 10),
(13, 9, 20, 10),
(13, 9, 21, 10),
(13, 9, 22, 10),
(14, 2, 17, 23),
(14, 2, 18, 10),
(14, 2, 19, 4),
(14, 2, 20, 0),
(14, 2, 21, 4),
(14, 7, 17, 0),
(14, 7, 18, 7),
(14, 7, 19, 0),
(14, 7, 20, 0),
(14, 7, 21, 9),
(14, 7, 22, 0),
(15, 1, 16, 0),
(15, 1, 17, 0),
(15, 1, 18, 0),
(15, 1, 19, 0),
(15, 1, 20, 0),
(15, 1, 21, 0),
(15, 5, 16, 0),
(15, 5, 17, 0),
(15, 5, 18, 0),
(15, 5, 19, 0),
(15, 5, 20, 0),
(15, 5, 21, 0),
(15, 8, 16, 0),
(15, 8, 17, 0),
(15, 8, 18, 0),
(15, 8, 19, 0),
(15, 8, 20, 0),
(15, 8, 21, 0),
(15, 8, 22, 0),
(16, 2, 16, 10),
(16, 2, 17, 10),
(16, 2, 18, 10),
(16, 2, 19, 10),
(16, 2, 20, 1),
(16, 2, 21, 10),
(16, 2, 22, 10),
(17, 2, 16, 12),
(17, 2, 17, 27),
(17, 2, 18, 0),
(17, 2, 19, 12),
(17, 2, 20, 14),
(17, 2, 21, 0),
(17, 2, 22, 14),
(18, 1, 16, 0),
(18, 1, 17, 8),
(18, 1, 18, 0),
(18, 1, 19, 7),
(18, 1, 20, 9),
(18, 1, 21, 0),
(18, 1, 22, 14),
(18, 2, 18, 1),
(18, 2, 19, 12),
(18, 2, 20, 10),
(18, 2, 21, 0),
(18, 2, 22, 0),
(18, 3, 17, 27),
(18, 3, 18, 0),
(18, 3, 19, 11),
(18, 3, 20, 0),
(19, 2, 16, 10),
(19, 2, 17, 10),
(19, 2, 18, 1),
(19, 2, 19, 10),
(19, 2, 20, 10),
(19, 2, 21, 10),
(19, 2, 22, 10),
(20, 2, 16, 10),
(20, 2, 17, 10),
(20, 2, 18, 10),
(20, 2, 19, 10),
(20, 2, 20, 10),
(20, 2, 21, 10),
(20, 2, 22, 10),
(21, 2, 15, 11),
(21, 2, 16, 0),
(21, 2, 17, 26),
(21, 2, 18, 0),
(21, 2, 19, 47),
(21, 2, 20, 0),
(21, 2, 21, 16),
(21, 2, 22, 11),
(22, 1, 16, 0),
(22, 1, 17, 0),
(22, 1, 18, 0),
(22, 1, 19, 0),
(22, 1, 20, 0),
(22, 1, 21, 0),
(22, 1, 22, 0),
(23, 1, 15, 10),
(23, 1, 16, 10),
(23, 1, 17, 10),
(23, 1, 18, 10),
(23, 1, 19, 10),
(23, 1, 20, 10),
(23, 1, 21, 110),
(23, 1, 22, 0),
(24, 2, 16, 0),
(24, 2, 17, 0),
(24, 2, 18, 0),
(24, 2, 19, 0),
(24, 2, 20, 0),
(24, 2, 21, 0),
(24, 2, 22, 0),
(25, 1, 16, 0),
(25, 1, 17, 0),
(25, 1, 18, 0),
(25, 1, 19, 0),
(25, 1, 20, 0),
(25, 1, 21, 0),
(25, 1, 22, 0),
(26, 2, 15, 18),
(26, 2, 16, 18),
(26, 2, 17, 16),
(26, 2, 18, 25),
(26, 2, 19, 23),
(26, 2, 20, 18),
(26, 2, 21, 25),
(26, 5, 15, 0),
(26, 5, 16, 23),
(26, 5, 17, 0),
(26, 5, 18, 23),
(26, 5, 19, 0),
(26, 5, 20, 0),
(26, 5, 21, 26),
(26, 7, 15, 42),
(26, 7, 16, 34),
(26, 7, 17, 13),
(26, 7, 18, 13),
(26, 7, 19, 13),
(26, 7, 20, 32),
(26, 7, 21, 13),
(27, 2, 15, 10),
(27, 2, 16, 10),
(27, 2, 17, 10),
(27, 2, 18, 10),
(27, 2, 19, 10),
(27, 2, 20, 20),
(27, 2, 21, 3),
(28, 8, 15, 0),
(28, 8, 16, 0),
(28, 8, 17, 0),
(28, 8, 18, 0),
(28, 8, 19, 0),
(28, 8, 20, 0),
(28, 8, 21, 0),
(29, 1, 17, 10),
(29, 1, 18, 20),
(29, 1, 19, 20),
(29, 1, 20, 30),
(29, 2, 15, 2),
(29, 2, 16, 20),
(29, 2, 17, 30),
(29, 2, 18, 10),
(29, 2, 19, 20),
(29, 2, 20, 10),
(30, 2, 14, 10),
(30, 2, 15, 23),
(30, 2, 16, 20),
(30, 2, 17, 10),
(30, 2, 18, 0),
(30, 2, 19, 12),
(30, 2, 20, 17),
(30, 2, 21, 0),
(30, 2, 22, 32),
(30, 8, 15, 10),
(30, 8, 16, 20),
(30, 8, 17, 3),
(30, 8, 18, 21),
(30, 8, 19, 6),
(30, 8, 20, 0),
(30, 8, 21, 10),
(30, 8, 22, 0),
(31, 1, 15, 10),
(31, 1, 16, 1),
(31, 1, 17, 1),
(31, 1, 18, 10),
(31, 1, 19, 10),
(31, 1, 20, 0),
(31, 1, 21, 10),
(31, 8, 15, 10),
(31, 8, 16, 10),
(31, 8, 17, 0),
(31, 8, 18, 10),
(31, 8, 19, 10),
(31, 8, 20, 10),
(31, 8, 21, 10),
(31, 8, 22, 10),
(32, 1, 12, 9),
(32, 1, 13, 16),
(32, 1, 14, 10),
(32, 1, 15, 12),
(32, 1, 16, 0),
(33, 3, 12, 13),
(33, 3, 13, 15),
(33, 3, 14, 0),
(33, 3, 15, 12),
(33, 3, 16, 0),
(33, 5, 12, 1),
(33, 5, 13, 10),
(33, 5, 14, 10),
(33, 5, 15, 10),
(33, 5, 16, 10),
(34, 2, 12, 0),
(34, 2, 13, 0),
(34, 2, 14, 0),
(34, 2, 15, 0),
(34, 2, 16, 0),
(34, 3, 12, 0),
(34, 3, 13, 0),
(34, 3, 14, 0),
(34, 3, 15, 0),
(34, 3, 16, 0),
(35, 1, 12, 8),
(35, 1, 13, 18),
(35, 1, 14, 7),
(35, 1, 15, 23),
(35, 1, 16, 0),
(36, 3, 12, 10),
(36, 3, 13, 13),
(36, 3, 14, 10),
(36, 3, 15, 12),
(36, 3, 16, 0),
(36, 4, 12, 32),
(36, 4, 13, 1),
(36, 4, 14, 32),
(36, 4, 15, 12),
(36, 4, 16, 23),
(37, 2, 12, 10),
(37, 2, 13, 10),
(37, 2, 14, 10),
(37, 2, 15, 10),
(37, 2, 16, 110),
(37, 2, 17, 0),
(38, 4, 12, 0),
(38, 4, 13, 0),
(38, 4, 14, 0),
(38, 4, 15, 0),
(38, 4, 16, 0),
(39, 2, 7, 10),
(39, 2, 8, 31),
(39, 2, 9, 11),
(39, 2, 10, 11),
(39, 2, 11, 11),
(39, 2, 12, 11),
(39, 2, 13, 0),
(39, 2, 14, 0),
(39, 5, 7, 11),
(39, 5, 8, 12),
(39, 5, 9, 0),
(39, 5, 10, 12),
(39, 5, 11, 0),
(39, 5, 12, 0),
(39, 5, 13, 0),
(39, 5, 14, 0),
(40, 2, 7, 20),
(40, 2, 8, 340),
(40, 2, 9, 0),
(40, 2, 10, 10),
(40, 2, 11, 20),
(40, 2, 12, 4),
(40, 2, 13, 50),
(40, 2, 14, 10),
(41, 2, 7, 10),
(41, 2, 8, 10),
(41, 2, 9, 10),
(41, 2, 10, 10),
(41, 2, 11, 2),
(41, 2, 12, 20),
(41, 2, 13, 20),
(41, 2, 14, 20),
(42, 7, 7, 20),
(42, 7, 8, 10),
(42, 7, 9, 20),
(42, 7, 10, 40),
(42, 7, 11, 0),
(42, 7, 12, 10),
(42, 7, 13, 20),
(42, 7, 14, 20),
(42, 8, 7, 40),
(42, 8, 8, 10),
(42, 8, 9, 10),
(42, 8, 10, 20),
(42, 8, 11, 10),
(42, 8, 12, 1),
(42, 8, 13, 1),
(42, 8, 14, 1),
(43, 4, 7, 1),
(43, 4, 8, 9),
(43, 4, 9, 16),
(43, 4, 10, 12),
(43, 4, 11, 12),
(43, 4, 12, 11),
(43, 4, 13, 0),
(43, 4, 14, 0),
(43, 5, 7, 12),
(43, 5, 8, 10),
(43, 5, 9, 12),
(43, 5, 10, 0),
(43, 5, 11, 12),
(43, 5, 12, 0),
(43, 5, 13, 0),
(43, 5, 14, 0),
(43, 8, 7, 13),
(43, 8, 8, 0),
(43, 8, 9, 16),
(43, 8, 10, 0),
(43, 8, 11, 0),
(43, 8, 12, 5),
(43, 8, 13, 0),
(43, 8, 14, 0),
(44, 1, 5, 10),
(44, 1, 6, 10),
(44, 1, 7, 10),
(44, 1, 8, 10),
(44, 1, 9, 10),
(44, 1, 10, 10),
(44, 1, 11, 0),
(44, 1, 12, 10),
(44, 1, 13, 10),
(44, 1, 14, 0),
(44, 3, 5, 0),
(44, 3, 6, 30),
(44, 3, 7, 20),
(44, 3, 8, 20),
(44, 3, 9, 0),
(44, 3, 10, 10),
(44, 3, 11, 10),
(44, 3, 12, 0),
(44, 3, 13, 0),
(44, 3, 14, 0),
(44, 5, 5, 10),
(44, 5, 6, 10),
(44, 5, 7, 10),
(44, 5, 8, 10),
(44, 5, 9, 0),
(44, 5, 10, 0),
(44, 5, 11, 0),
(44, 5, 12, 0),
(44, 5, 13, 0),
(44, 5, 14, 0),
(45, 2, 5, 10),
(45, 2, 6, 1),
(45, 2, 7, 10),
(45, 2, 8, 10),
(45, 2, 9, 10),
(45, 2, 10, 10),
(45, 2, 11, 10),
(45, 2, 12, 10),
(45, 2, 13, 10),
(45, 2, 14, 10),
(46, 3, 5, 10),
(46, 3, 6, 10),
(46, 3, 7, 10),
(46, 3, 8, 10),
(46, 3, 9, 0),
(46, 3, 10, 10),
(46, 3, 11, 10),
(46, 3, 12, 10),
(46, 3, 13, 20),
(46, 3, 14, 20),
(46, 9, 5, 20),
(46, 9, 6, 220),
(46, 9, 7, 0),
(46, 9, 8, 0),
(46, 9, 9, 0),
(46, 9, 10, 10),
(46, 9, 11, 20),
(46, 9, 12, 10),
(46, 9, 13, 20),
(46, 9, 14, 20),
(47, 3, 4, 20),
(47, 3, 5, 310),
(47, 3, 6, 10),
(47, 3, 7, 0),
(47, 3, 8, 11),
(47, 3, 9, 1),
(47, 3, 10, 10),
(47, 3, 11, 10),
(47, 3, 12, 10),
(47, 3, 13, 0),
(47, 3, 14, 10),
(48, 3, 5, 0),
(48, 3, 6, 0),
(48, 3, 7, 0),
(48, 3, 8, 0),
(48, 3, 9, 0),
(48, 3, 10, 0),
(48, 3, 11, 0),
(48, 3, 12, 0),
(48, 3, 13, 0),
(48, 3, 14, 0),
(49, 3, 5, 0),
(49, 3, 6, 0),
(49, 3, 7, 0),
(49, 3, 8, 0),
(49, 3, 9, 0),
(49, 3, 10, 0),
(49, 3, 11, 0),
(49, 3, 12, 0),
(49, 3, 13, 0),
(49, 3, 14, 0),
(49, 5, 5, 0),
(49, 5, 6, 0),
(49, 5, 7, 0),
(49, 5, 8, 0),
(49, 5, 9, 0),
(49, 5, 10, 0),
(49, 5, 11, 0),
(49, 5, 12, 0),
(49, 5, 13, 0),
(49, 5, 14, 0),
(50, 3, 7, 0),
(50, 3, 8, 0),
(50, 3, 9, 0),
(50, 3, 10, 0),
(50, 3, 11, 0),
(50, 3, 12, 0),
(50, 3, 13, 0),
(50, 3, 14, 0),
(51, 3, 2, 15),
(51, 3, 3, 0),
(51, 3, 4, 0),
(51, 3, 5, 0),
(51, 3, 6, 13),
(51, 3, 7, 11),
(51, 6, 2, 18),
(51, 6, 3, 0),
(51, 6, 4, 17),
(51, 6, 5, 0),
(51, 6, 6, 23),
(51, 6, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customeraccount`
--

CREATE TABLE `customeraccount` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `description`, `category_id`) VALUES
(1, 'Giày Thể Thao Nam Biti\'s Hunter STREET FESTIVE: FERIA COLLECTION HSM004700', 731000, 'Giày Thể Thao Nam Biti\'s Hunter Street HSM004700 là một trong những sản phẩm dành riêng cho phái mạnh được đông đảo khách hàng Việt Nam yêu thích. Không chỉ bởi thiết kế đẹp mắt và thời trang, đôi giày để lại ấn tượng khác biệt vì chất lượng, màu sắc và giá thành.', 1),
(2, 'Giày Thể Thao Nam Biti\'s Hunter CORE FESTIVE: DUSK COLLECTION HSM005400', 834000, 'Giày Thể Thao Nam Biti\'s Hunter Core HSM005400 là một lựa chọn giày thể thao dành cho nam cực kỳ lý tưởng mà bạn không thể bỏ qua trong năm nay. Bởi lẽ, sản phẩm vừa có thiết kế đẹp mắt kết hợp bảng màu thời trang và chất lượng chất liệu cao cấp và giá thành rất phải chăng.', 1),
(3, 'Giày Thể Thao Nam BITI\'S HUNTER X FESTIVE: GUARDIAN COLLECTION HSM004400', 981000, 'Nếu chưa tìm được đôi giày thể thao nào tốt thì chắc chắn Giày Thể Thao Nam Biti\'s Hunter X HSM004400 là một lựa chọn lý tưởng mà bạn không thể bỏ qua. Bởi lẽ, sản phẩm có thiết kế đẹp mắt, màu sắc thời trang, chất lượng cao cấp và giá thành phải chăng.', 1),
(4, 'Giày Thể Thao Nam Biti’s Hunter X Liteflex 2.0 - Midnight 2K23 HSM004401', 981000, 'Giày Thể Thao Nam Biti’s Hunter X Lite Flex 2.0 - Midnight 2K23 HSM004401 trong bộ sưu tập BITI\'S HUNTER STREET MIDNIGHT 2K23 được rất nhiều người tiêu dùng Việt mê mẩn ngay từ lần đầu tiên. Bởi, không chỉ có màu sắc đẹp mắt, sản phẩm còn có chất lượng cao cấp và giá thành phải chăng. \r\nĐế giày\r\nBiti’s ưu tiên lựa chọn chất liệu Phylon để chế tác nên đế giày thể thao trong bộ sưu tập mới mẻ này bởi nhiều ưu điểm nổi bật. Chẳng hạn như trọng lượng siêu nhẹ, độ đàn hồi cao, có khả năng uốn gấp tốt, ít nứt gãy dưới tác nhân bụi bẩn, không khí bình thường… Nhờ đó, người dùng không chỉ cảm thấy vô cùng thoải mái trong mỗi bước đi, mà còn ít đau nhức, nặng nề khi mang giày lâu hoặc vận động mạnh. \r\nĐồng thời, nhà sản xuất kết hợp thêm chất liệu cao su được chọn lọc cao cấp và xử lý cẩn thận sao cho đáp ứng tốt tất cả tiêu chuẩn cơ bản và quy trình cần thiết của thương hiệu. Qua đó giúp phần đế siêu bền, tăng độ ma sát tự nhiên để chống trơn trượt hiệu quả. \r\nThân giày\r\nThương hiệu Biti’s sử dụng chất liệu da cao cấp, có độ bền màu cao và không dễ bị bong tróc, phai màu. Điều này mang lại tính thẩm mỹ lâu dài cho sản phẩm.\r\nNgoài ra, HSM004401 còn có thêm hiệu ứng chuyển màu phản quang đẹp mê ly, xuất hiện lần đầu tiên trong bộ sưu tập Midnight, giúp người sử dụng trở nên nổi bật hơn trong đám đông, trong mắt người đối diện. \r\nMàu sắc\r\nGiày Thể Thao Nam Biti’s Hunter X phiên bản HSM004401 có 1 màu duy nhất là Đen.\r\nMàu sắc thực tế có thể chênh lệch khoảng 3 - 5 %.\r\nSize giày\r\nGiày Thể Thao Nam Biti’s Hunter X HSM004401 trong bộ sưu tập Midnight 2K23 có 6 size từ 39 đến 45.\r\nBảo hành\r\nBiti’s cam kết bảo hành 3 tháng với tất cả lỗi phát sinh liên quan đến nhà sản xuất. Riêng lỗi bung chỉ, đứt chỉ, bong keo…, Biti’s áp dụng chế độ bảo hành trọn đời.\r\nNgoài ra, khách hàng được đổi size trong vòng 7 ngày hay đổi sản phẩm lỗi trong vòng 7 ngày (kể từ thời điểm mua hàng và đáp ứng yêu cầu chính sách đổi trả quy định). \r\nTính năng và lợi ích nổi bật\r\nThiết kế phần da màu phản quang nổi bật, giúp tăng độ an toàn khi di chuyển ở những khu vực tối hoặc vào ban đêm.\r\nChất liệu đế Phylon kèm cao su êm nhẹ, bền chắc.\r\nChế độ bảo hành uy tín, minh bạch. \r\nPhát triển kiểu dáng, màu sắc giày thể thao HSM004401 theo hướng khai phóng tinh thần tự do nguyên bản để mọi người tự tin thể hiện cá tính và được sống với “Midnight” bằng cái tôi chính hiệu.\r\nSản phẩm bao gồm\r\nHộp đựng giày làm từ giấy bìa cứng cáp giúp bảo quản giày tốt hơn.\r\nĐôi giày\r\nDây giày\r\nGiấy gói.\r\nTúi chống ẩm.\r\nMong rằng những chia sẻ kể trên giúp bạn đọc có thêm nhiều thông tin hữu ích về phiên bản Giày Thể Thao HSM004401 thuộc bộ sưu tập BITI\'S HUNTER STREET MIDNIGHT 2K23 mà Biti’s đã dày công phát triển, đáp ứng khẩu hiệu “Hoang dã! Mạnh mẽ! Ấn tượng! Đầy táo bạo! Phá vỡ những quy chuẩn thông thường!”. Nếu còn bất kỳ thắc mắc nào khác cần được giải đáp hoặc muốn đặt mua ngay hôm nay, hãy liên hệ Biti’s qua website bitis.com.vn này nhé!', 1),
(5, 'Giày Thể Thao Nam Biti’s Hunter Street - Midnight 2K23 HSM004701', 731000, 'Giày thể thao nam Biti’s Hunter Street - Midnight 2K23 HSM004701 sở hữu ngôn ngữ thiết kế mới lạ, độc đáo và không kém phần sáng tạo. Với sự kết hợp chất liệu cùng màu sắc trẻ trung, hiện đại, tạo nên một nét đẹp đầy mê hoặc mà bất kỳ tín đồ thời trang nào cũng không thể bỏ qua.', 1),
(6, 'Giày Thể Thao Nam Biti’s Hunter X Dune - Midnight 2K23 HSM004200', 1256000, 'Giày thể thao nam Biti’s Hunter X Dune - Midnight 2K23 HSM004200 mang phong cách đặc trưng của sự táo bạo, ham muốn chinh phục của tuổi trẻ. Khi ra mắt, chắc chắn sản phẩm luôn là sự lựa chọn hàng đầu bởi sự năng động, trẻ trung, tiện dụng và dễ dàng kết hợp với nhiều trang phục cũng như phù hợp đi trong nhiều hoàn cảnh khác nhau.', 1),
(7, 'Giày Thể Thao Cao Cấp Nam Biti\'s Hunter Street đế #BÀO x VietMax: BEATER - Humble Edition HSM002100', 1275000, 'Giày Thể Thao Cao Cấp Nam Biti\'s Hunter Street đế #BÀO x VietMax: BEATER - Humble Edition HSM002100 là phiên bản giày thể thao chất lượng ấn tượng được nhiều người Việt săn đón trong thời gian vừa qua. Bởi, sản phẩm không chỉ có thiết kế độc đáo, màu sắc thời trang và giá thành hợp lý.', 1),
(8, 'Giày Thể Thao Cao Cấp Nam Biti\'s Hunter Street đế #BÀO x VietMax: BEATER - Hustle Edition HSM002200', 1178000, 'Giày Thể Thao Cao Cấp Nam Biti\'s Hunter Street đế #BÀO x VietMax: BEATER - Hustle Edition HSM002200 là một trong những sản phẩm nhận được đông đảo sự yêu thích của khách hàng Việt Nam ngay từ thời điểm ra mắt. Bởi không chỉ thiết kế thời trang, màu sắc ấn tượng, sản phẩm còn “ghi điểm” với giá thành hợp lý và chất lượng “miễn bàn”.', 1),
(9, 'Giày Thể Thao Nam Biti\'s Hunter X HSM003100', 981000, 'Sản phẩm Giày Thể Thao Nam Biti\'s Hunter X HSM003100 là một trong những sản phẩm được đông đảo khách hàng nam lựa chọn nhờ vào thiết kế đẹp mắt và sự chất lượng từ trong ra ngoài. Chần chờ gì nữa, mời bạn tìm hiểu thêm về sản phẩm thông qua bài viết dưới đây nhé!', 1),
(10, 'Giày Thể Thao Nam Biti\'s Hunter Core HSM002400', 736000, 'Ngay từ khi ra mắt, mẫu Giày Thể Thao Nam Biti\'s Hunter Core HSM002400 đã khiến bao chàng trai “xiêu lòng” vì vẻ ngoài năng động, cá tính, chuẩn men, cùng chất lượng tuyệt vời bên trong. Để tìm hiểu rõ hơn về sản phẩm, mời bạn cùng đọc qua những thông tin dưới đây.', 1),
(11, 'Giày Thể Thao Nam Biti’s Hunter Street HSM003900', 741000, 'Cùng nhau chào đón một thiết kế siêu mới và siêu hiện đại tới từ nhà Biti’s. Giày Thể Thao Nam Biti’s Hunter Street HSM003900 chính là một trong những lựa chọn hàng đầu của những con dân nghiện giày hiện nay. Cùng nhau tìm hiểu ngay dưới đây nhé!', 1),
(12, 'Giày Thể Thao Nam Biti\'s Hunter Core HSM003200', 834000, 'Yêu thích giày thể thao, thích chơi các môn thể thao hay đơn giản bạn thích mặc phong cách thể thao năng động, trẻ trung thì việc lựa chọn giày thể thao nam Biti\'s Hunter HSM003200 là điều đúng đắn. Giày được thiết kế với chất liệu vải thoáng khí, hiện đại trên từng chi tiết, mang đến cho bạn một phong cách thời trang thời thượng. ', 1),
(13, 'Giày Thể Thao Nam Biti’s Hunter HSM002900', 1305000, 'Mặc dù không quá cầu kỳ trong thời trang như phụ nữ nhưng phái mạnh cũng có một số phụ kiện thiết yếu trong tủ đồ của mình. Một item không thể thiếu của các chàng đó chính là đôi giày thể thao. Mẫu giày thể thao nam Biti’s Hunter HSM002900 có kiểu dáng rất hiện đại, trẻ trung, phù hợp cho đi chơi, dã ngoại và các hoạt động thể dục cho những tín đồ thời trang năng động. Mẫu giày cá tính này sẽ giúp các chàng trai khẳng định rõ nét phong cách cá nhân của chính mình.', 1),
(14, 'Giày Thể Thao Nam Biti’s Hunter Street - đế Bào Midnight 2K23 DSMH11000', 834000, 'Một trong những mẫu giày đế #BÀO hiện đang thịnh hành nhất tại Biti\'s phải kể đến giày thể thao nam Hunter Street đế #BÀO DSMH11000. Sản phẩm đơn giản nhưng ấn tượng với lối thiết kế phá cách mạnh mẽ, mang đến một làn gió mới cho các đấng mày râu. Sau hơn 40 năm tự hào đồng hành cùng các thế hệ Việt, Biti’s Hunter Street tự hào ra mắt đế #BÀO kết hợp cùng nghệ sĩ Việt Max với khao khát cùng người trẻ Việt in đậm dấu ấn trải nghiệm trên mọi mảnh đất, mọi đích đến trên đất Việt và toàn cầu.', 1),
(15, 'Giày Thể Thao Nam Biti\'s Hunter Tennis HSM000200', 853000, 'Một phiên bản cập nhật mới đến với các bạn chơi môn thể thao quần vợt từ nhà Biti\'s là Tennis HSM000200. Với thiết kế mới lạ và độc đáo hơn hẳn. Giày thể thao nam Biti\'s Hunter Tennis HSM000200 có trọng lượng nhẹ, tốc độ nhanh hơn, ổn định hơn, mang đến cho bạn cảm giác êm ái, thoải mái và nâng cao hiệu suất tập luyện cũng như thi đấu.', 1),
(16, 'Hunter Street đế BÀO x MARVEL Spiderman - Hunter-verse 2k23 edition HSM001898', 1324000, 'Giày thể thao Biti’s Hunter Street đế #BÀO MARVEL Spiderman, phiên bản Hunter-verse 2k23 HSM001898 dành cho nam hiện tại là phiên bản được mong đợi nhất hiện nay. Không chỉ \'ghi điểm\' với thiết kế nam tính và mạnh mẽ, sản phẩm còn có rất nhiều ưu điểm ấn tượng về chất lượng. Tìm hiểu chi tiết hơn tại đây nhé!', 1),
(17, '[Quà tặng cánh chim] Giày Thể Thao Nam Biti\'s Hunter Street Bloomin\' Central DSMH08500', 978750, 'Giày thể thao nam Biti\'s Hunter Street Bloomin\' Central DSMH08500 hiện đang là một mẫu giày mang thiết kế mới lạ, đẹp mắt với chất lượng cao cấp mà bạn không thể bỏ lỡ. Để biết thêm về sản phẩm, bạn hãy tham khảo nội dung ở phần dưới đây.', 1),
(18, '[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700', 1187000, 'Bạn mong muốn sở hữu cho mình một đôi giày siêu nhẹ, êm ái, mang phong cách mạnh mẽ và thời trang. Mẫu thể thao nam Hunter X DSMH09700 phiên bản kỷ niệm 40 năm chính là items mới hoàn toàn phù hợp dành cho bạn.', 1),
(19, 'Giày Thể Thao Nam Hunter X - X-NITE 22 Collection DSMH10500', 981000, 'Giày thể thao nam Hunter X - X-NITE 22 Collection DSMH10500 sở hữu thiết kế mạnh mẽ, lấy ý tưởng từ ánh sáng của pháo hoa và lửa. Cách phối màu đem lại cho người mang cảm giác tươi trẻ, tự do, phù hợp với hoạt động thể thao như đi bộ, chạy và các hoạt động khác.', 1),
(20, 'Giày Thể Thao Nam Hunter X - SPIKY COLLAR Collection DSMH10600', 784400, 'Giày Thể Thao Nam Hunter X - SPIKY COLLAR Collection DSMH10600 “ghi điểm” trong mắt người tiêu dùng không chỉ ở ngoại hình tinh gọn, mạnh mẽ; mà còn sở hữu chất lượng chất liệu cao cấp, bền bỉ. ', 1),
(21, 'Giày Thể Thao Nam Hunter X - Dune OTP Real edition HSM001200', 1305000, 'Giày Thể Thao Nam Hunter X - Dune OTP Real edition HSM001200 có thiết kế năng động, cá tính phù hợp với các bạn nam đam mê thời trang. Bạn hãy tham khảo thông tin dưới đây để biết thêm chi tiết về sản phẩm.', 1),
(22, 'Giày Thể Thao Nam Hunter X - Dune OTP Real White edition HSM001201', 1305000, 'Nếu bạn đang tìm mẫu giày có thiết kế năng động, chất lượng bền bỉ cho bạn trai mình thì đừng nên bỏ qua mẫu giày thể thao nam Hunter X - Dune OTP Real White edition HSM001201. Đây là một trong những dòng sản phẩm “hot” nhất tại Biti’s được nhiều khách hàng yêu thích. \r\n', 1),
(23, 'Giày Thể Thao Nam Biti\'s Hunter Street Z Collection DSMH06200', 814000, 'Một đôi giày thể thao chất lượng là một “người bạn đồng hành” không thể thiếu của những dân chơi thể thao chuyên nghiệp. Theo đó, nếu chưa biết lựa chọn mẫu giày nào phù hợp, bạn hãy cân nhắc sản phẩm “quốc dân” vừa được Biti’s trình làng: Giày Thể Thao Nam Biti\'s Hunter Street Z Collection DSMH06200. Cùng tìm hiểu chi tiết nhé!', 1),
(24, 'Giày Thể Thao Nam Biti\'s Hunter X Midnight EZ-STRAP DSMH07600', 1207000, 'Nếu chưa biết chọn mua đôi giày thể thao cho phái mạnh nào vừa chất lượng, vừa thu hút thì đừng ngần ngại sở hữu Giày Thể Thao Nam Biti\'s Hunter X Midnight EZ-STRAP DSMH07600. Bởi lẽ, sản phẩm “ghi điểm” ngay với diện mạo chất chơi, mạnh mẽ cùng nhiều ưu điểm nổi trội về màu sắc, chất liệu… Cùng tìm hiểu chi tiết hơn nhé! ', 1),
(25, 'Giày Thể Thao Nam Biti\'s Hunter X 1.0 Festive Armor - Phiên Bản Độc Quyền DSMH07701', 735750, 'Giày Thể Thao Nam Biti\'s Hunter X 1.0 Festive Armor - Phiên Bản Độc Quyền DSMH07701 mang thiết kế độc lạ, trẻ trung, năng động với những họa tiết sắc sảo, gai góc chắc chắn là một lựa chọn tuyệt vời cho những tín đồ thời trang. Để biết thêm về sản phẩm, bạn hãy tham khảo nội dung ở phần dưới đây.', 1),
(26, 'Sandal Si Cao Su Nam Biti\'s BRM000900', 399000, 'Không có mô tả.', 2),
(27, 'Sandal Eva Phun Nam Biti\'s BEM001500', 499000, 'Không có mô tả.', 2),
(28, 'Sandal Si Cao Su Nam DRM038500', 339000, 'Do màn hình và điều kiện ánh sáng khác nhau, màu sắc thực tế của sản phẩm có thể chênh lệch khoảng 3-5%', 2),
(29, 'Giày Thể Thao Thông Dụng Nam Biti\'s Basic BSM000600', 368000, 'Giày thể thao thông dụng nam Biti\'s Basic BSM000600 được xem là mẫu giày \"quốc dân\" chưa bao giờ ngừng hot. Mặc dù đã ra mắt từ rất lâu nhưng đây vẫn được xem là sự lựa chọn hàng đầu cho những bạn yêu thích sự đơn giản. Thiết kế giày full đen hoặc trắng sẽ là điểm nhấn làm rung động biết bao nhiêu tín đồ mê phong cách thời trang hiện đại, trẻ trung.\r\n', 3),
(30, 'Giày Thể Thao Nam Biti\'s DSM074500', 349000, 'Giày thể thao slip- on là thuật ngữ không còn xa lạ trong từ điển của những tín đồ thời trang. Những đôi giày slip -on trẻ trung, năng động hiện đang chiếm lĩnh thị trường thời trang và luôn được ưa chuộng. Không chỉ chinh phục trái tim khách hàng với kiểu dáng thời trang, mẫu mã đa dạng mà còn bởi sự tiện lợi và nhanh chóng chỉ cần xỏ chân vào không cần buộc dây phức tạp . Giày Thể Thao Nam Biti’s DSM0074500 cũng là một sự lựa chọn mà bạn cần phải cân nhắc.', 3),
(31, 'Giày Thể Thao Nam Biti\'s BSM000900', 751000, 'Giày Thể Thao Nam Biti\'s BSM000900 hiện là một trong những mẫu giày thể thao được đông đảo khách hàng tin tưởng thương hiệu Biti’s lựa chọn. Bởi lẽ, không chỉ sở hữu kiểu dáng năng động và nam tính, sản phẩm còn có chất lượng đế - quai cao cấp, độ bền bỉ cao. ', 3),
(32, 'Giày Thể Thao Nữ Biti\'s Hunter X DUNE FESTIVE: BLASTX HSW004201', 1207000, 'Nếu chưa chọn được đôi giày thể thao nào chất lượng, có giá hợp lý và chế độ bảo hành uy tín thì đừng ngần ngại tham khảo Giày Thể Thao Nữ Biti’s Hunter X HSW004201. Sản phẩm vừa có thiết kế đẹp mắt kèm màu phối thời trang, vừa bảo đảm chất lượng chất liệu cao cấp và độ bền, độ an toàn cao cho người sử dụng.', 4),
(33, 'Giày Thể Thao Nữ Biti’s Hunter Tennis HSW005200', 834000, 'Giày Thể Thao Nữ Biti’s Hunter Tennis HSW005200 được nhiều khách hàng Việt Nam đánh giá cao. Bởi, không chỉ có màu sắc nổi bật kèm thiết kế thời trang, sản phẩm còn vô vàn ưu điểm về chất liệu, giá thành, chế độ bảo hành…', 4),
(34, 'Giày Thể Thao Cao Cấp Nữ Biti\'s Hunter X Layered Upper DSWH02800', 987000, 'Bạn đang mong muốn sở hữu một đôi giày thể thao nữ vừa năng động vừa có sự êm ái khi vận động, di chuyển? Giày thể thao cao cấp nữ Biti\'s Hunter X Layered Upper DSWH02800 chính là lựa chọn phù hợp nhất bạn không nên bỏ qua. ', 4),
(35, 'Giày Thời Trang Nữ Gosto GFW018788', 1393000, 'Sản phẩm đẹp.', 13),
(36, 'Sandal Cao Gót Nữ Gosto GFW019100', 981000, 'Sandal Cao Gót Nữ Gosto GFW019100 hiện đang là một sản phẩm nổi bật của nhà Biti\'s. Sản phẩm không những có giá cả tốt mà còn sở hữu kiểu dáng đẹp, màu sắc tinh tế, chất liệu an toàn, cao cấp.', 13),
(37, 'Giày Bít Nữ SFW755880DEN (Đen)*', 462000, 'Do màn hình và điều kiện ánh sáng khác nhau, màu sắc thực tế của sản phẩm có thể chênh lệch khoảng 3-5%', 14),
(38, 'Giày Thời Trang Nữ Biti\'s SFW753880*', 442000, 'Không có mô tả.', 14),
(39, 'Giày Thể Thao Bé Trai Biti\'s BSB003800', 432000, 'Hiện nay Giày Thể Thao Bé Trai Biti\'s Bsb003800 là một mẫu giày chạy vô cùng nổi bật của nhà Biti’s, sản phẩm có mẫu thiết kế vô cùng thời trang, màu sắc kết hợp ăn ý và chất lượng vô cùng tuyệt vời cho các bé trai. ', 7),
(40, 'Giày Chạy Bé Trai Biti\'s BSB003299', 450000, 'Đối với các bé trai đang trong độ  tuổi hiếu động, phát triển nhanh về thể chất, việc đàu từ cho các bé về các môn thể thao, các dụng cụ và thời trang thể thao là một nguồn đầu tư vô cùng tốt giúp cho thể chất của các bé sau này. Giày Chạy Bé Trai Biti\'s BSB003299 hiện đang là một trong những sản phẩm siêu hot của nhà Biti’s dành cho các bé trai.\r\n', 7),
(41, 'Sandal Thể Thao Bé Trai Biti\'s BRB000799', 399000, 'Sandal Thể Thao Bé Trai Biti’s BRB000799 là một trong những sản phẩm giày dép chất lượng của thương hiệu Biti’s dành cho các bé trai. Vì đôi giày không chỉ làm từ chất liệu cao cấp, mà còn bảo đảm thiết kế thời trang, màu sắc đẹp mắt. ', 8),
(42, 'Sandal Eva Phun Bé Trai Biti\'s BEB001700', 299000, 'Không có mô tả.', 8),
(43, 'Dép Eva Phun E-Cloud Bé Trai Biti\'s BEB001800', 139000, 'Dép Eva Phun Bé Trai Biti\'s BEB001800 là sản phẩm dành cho bé trai có thiết kế đẹp, năng động, màu sắc rực rỡ, chất lượng cao cấp và vô cùng an toàn cho bé. Hãy cùng tìm hiểu ngay dưới đây nhé. ', 9),
(44, 'Giày búp bê bé gái DBB011311', 392000, 'Do màn hình và điều kiện ánh sáng khác nhau, màu sắc thực tế của sản phẩm có thể chênh lệch khoảng 3-5%', 10),
(45, 'Giày búp bê bé gái DBB011288DEN (Đen)*', 329000, 'Do màn hình và điều kiện ánh sáng khác nhau, màu sắc thực tế của sản phẩm có thể chênh lệch khoảng 3-5%', 10),
(46, 'Giày búp bê bé gái DBB011500', 334000, 'Do màn hình và điều kiện ánh sáng khác nhau, màu sắc thực tế của sản phẩm có thể chênh lệch khoảng 3-5%', 10),
(47, 'Sandal Si - Cao Su Bé Gái Biti\"s DTG075488*', 266000, 'Do màn hình và điều kiện ánh sáng khác nhau, màu sắc thực tế của sản phẩm có thể chênh lệch khoảng 3-5%.', 11),
(48, 'Sandal Pu Phun Bé Gái Biti\'s DPG001588*', 369000, 'Sản phẩm đẹp dành cho bé gái.', 11),
(49, 'Sandal Si Cao Su Bé Gái BRG000300', 499000, 'Sản phẩm đẹp.', 11),
(50, 'Giày Chạy Bé Gái Biti\'s BSG002701', 540000, 'Bạn đang cần mua cho bé một đôi giày chạy thể thao chất lượng, cá tính nhưng vẫn đảm bảo tính thời trang. Hãy tham khảo ngay mẫu Giày Chạy Bé Gái Biti’s BSG002701 với thiết kế đẹp mắt, màu sắc ấn tượng, chất liệu cao cấp mà giá lại rất hợp lý.', 12),
(51, 'Giày Thể Thao Bé Gái DSG141600', 388000, 'Do màn hình và điều kiện ánh sáng khác nhau, màu sắc thực tế của sản phẩm có thể chênh lệch khoảng 3-5%.', 12);

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
(1, 5, 'https://product.hstatic.net/1000230642/product/hsm004700xnh1_dd20d3f48ff348fbb87d1666379280c6_1024x1024.jpg'),
(1, 7, 'https://product.hstatic.net/1000230642/product/hsm004700nau1_7895b4a780aa46d8a417f329bae3a8e2_large.jpg'),
(2, 2, 'https://product.hstatic.net/1000230642/product/hsm005400den1_bb2094ebb0ee462eb85910b63c5678ef_1024x1024.jpg'),
(2, 8, 'https://product.hstatic.net/1000230642/product/hsm005400xam1_482d9a1ccf3c46698c6c10c273d1c2a4_1024x1024.jpg'),
(3, 5, 'https://product.hstatic.net/1000230642/product/hsm004400xnh1_a976df833b54489894a3506e48cb854b_1024x1024.jpg'),
(3, 8, 'https://product.hstatic.net/1000230642/product/hsm004400xam1_95a0fd0954fa444b9d9d488d1550b8d3_1024x1024.jpg'),
(3, 9, 'https://product.hstatic.net/1000230642/product/hsm004400kem1_c93e10abe0f44e409d819a050be47171_1024x1024.jpg'),
(4, 2, 'https://product.hstatic.net/1000230642/product/2_-_liteflex_9d6d478f34b7442eb49f0f4f503caef0_1024x1024.png'),
(5, 2, 'https://product.hstatic.net/1000230642/product/4_-_street_30d54e1a714249348ad428c30ca5ecad_1024x1024.png'),
(6, 2, 'https://product.hstatic.net/1000230642/product/3_-_dune_37f6cd6762004af4b8c3cf9ca5f72384_1024x1024.png'),
(7, 2, 'https://product.hstatic.net/1000230642/product/hinh_1__2__b46693e06eb448f7b89e72fe76540fcb_1024x1024.png'),
(8, 5, 'https://product.hstatic.net/1000230642/product/hinh_1__1__b69cefdb640647a59d193e497b7fa798_1024x1024.png'),
(9, 2, 'https://product.hstatic.net/1000230642/product/hsm003100den__2__c5e61a6576af49b1a87493cfb82e334c_1024x1024.jpg'),
(9, 8, 'https://product.hstatic.net/1000230642/product/hsm003100xam__2__5308eec6c1e8486d869c19119651acf4_1024x1024.jpg'),
(9, 9, 'https://product.hstatic.net/1000230642/product/hsm003100kem__2__21277445091e44e2908bc220ea3f5590_1024x1024.jpg'),
(10, 8, 'https://product.hstatic.net/1000230642/product/hsm002400xam__2__d383cc72e2024eca9110c701ee03133d_1024x1024.jpg'),
(11, 2, 'https://product.hstatic.net/1000230642/product/hsm003900den__2__6ea0b564456d432f84ffd18b461d1366_1024x1024.jpg'),
(12, 1, 'https://product.hstatic.net/1000230642/product/hsm003200trg__2__ab65b422f75f42fb84a43602b881c64b_1024x1024.jpg'),
(12, 7, 'https://product.hstatic.net/1000230642/product/hsm003200nau__2__f8ebda12a54e409f9b206379dfc415cd_1024x1024.jpg'),
(13, 1, 'https://product.hstatic.net/1000230642/product/hsm002900trg__2__b8c929af19e549e089788f9f85fb039a_1024x1024.jpg'),
(13, 2, 'https://product.hstatic.net/1000230642/product/hsm002900den__2__023f92cb59cc4ee9be579052ed260f1d_1024x1024.jpg'),
(13, 5, 'https://product.hstatic.net/1000230642/product/hsm002900xnh__2__a9627a7d564c49ffbfb00c5b8a4fd873_1024x1024.jpg'),
(13, 9, 'https://product.hstatic.net/1000230642/product/hsm002900kem__2__bf668b333b0641f0aa17a9b4f1a704ae_1024x1024.jpg'),
(14, 2, 'https://product.hstatic.net/1000230642/product/5_-_bao_1b1fcd07611141fcbdd406f2876530ad_1024x1024.png'),
(14, 7, 'https://product.hstatic.net/1000230642/product/_bao_nude-003_3701ac623539469c9d19c6512e70e257_1024x1024.png'),
(15, 1, 'https://product.hstatic.net/1000230642/product/hsm000200trg__2__c743a15eaf3848ccbf689f9f8ddd75d9_1024x1024.jpg'),
(15, 5, 'https://product.hstatic.net/1000230642/product/hsm000200xnh__2__9b3eb2ce648442b0ae5506781c8658df_268bb348ab58425f84184605f1d3a704_1024x1024.jpg'),
(15, 8, 'https://product.hstatic.net/1000230642/product/hsm000200xam__2__11a12126304d4faab67c6d037c0a66ba_1024x1024.jpg'),
(16, 2, 'https://product.hstatic.net/1000230642/product/08b_774a037f29d040d3bd57509f7ecd7e47_1024x1024.png'),
(17, 2, 'https://product.hstatic.net/1000230642/product/hao-nam-hunter-street-bloomin-central-dsmh08500den-den-7vy7y-color-den_9bc67f7ec91245c3a8c7c4dde07824d9_1024x1024.jpg'),
(18, 1, 'https://product.hstatic.net/1000230642/product/dsmh09700trg__2__c676c77da9e94da9a06dafb4b68b3495_1024x1024.jpg'),
(18, 2, 'https://product.hstatic.net/1000230642/product/dsmh09700den__2__d458637d0ef3421aaf9fdbf55b107f90_1024x1024.jpg'),
(18, 3, 'https://product.hstatic.net/1000230642/product/dsmh09700doo__2__741b1580fa8642f0b5a3501f63f7742b_1024x1024.jpg'),
(19, 2, 'https://product.hstatic.net/1000230642/product/hao-nam-hunter-x-x-nite-22-collection-dsmh10500den-den-06o1s-color-den_c2877e8fa1844ce2acb3b1457fb7cbf4_1024x1024.jpg'),
(20, 2, 'https://product.hstatic.net/1000230642/product/-nam-hunter-x-spiky-collar-collection-dsmh10600den-den-rh6cw-color-den_7dc616bfbeea404c87ab006713be3928_1024x1024.jpg'),
(21, 2, 'https://product.hstatic.net/1000230642/product/hsm001200den__2__5b334f3afd484a40bec4abe17b476c8f_1024x1024.jpg'),
(22, 1, 'https://product.hstatic.net/1000230642/product/hsm001201trg__2__1113dc9c516b4d6cb01c32bf663a96b2_1024x1024.jpg'),
(23, 1, 'https://product.hstatic.net/1000230642/product/dswh06200trg39_2__971ab4c67d94481ebdafa135434fd5ec_1024x1024.jpg'),
(24, 2, 'https://product.hstatic.net/1000230642/product/dsc_0113_4123401214dc4d0a9fee0b3ff3ad53fa_1024x1024.jpg'),
(25, 1, 'https://product.hstatic.net/1000230642/product/dsmh07701nau__3__11c5ad52fae548dd83a9d33ba7ed4a79_1024x1024.jpg'),
(26, 2, 'https://product.hstatic.net/1000230642/product/brm000900den1_e3c8a7b5cd884a39a6d185ae286dc2fb_1024x1024.jpg'),
(26, 5, 'https://product.hstatic.net/1000230642/product/brm000900xnh2_d72105a2b43a4a27a1ee27d9b67f9234_1024x1024.jpg'),
(26, 7, 'https://product.hstatic.net/1000230642/product/brm000900nau1_dd41574e889b43cea463bcd64231e905_1024x1024.jpg'),
(27, 2, 'https://product.hstatic.net/1000230642/product/bem001500den1_187bb7816a2446f4b64cb800bfe6ea5a_1024x1024.jpg'),
(28, 8, 'https://product.hstatic.net/1000230642/product/drm038500xam_7__9073a9d57103476b8b4294a18ab0bcd3_1024x1024.jpg'),
(29, 1, 'https://product.hstatic.net/1000230642/product/bsm000600trg__2__dc7ce618c3f14f9283a11fbff9e3b56a_1024x1024.jpg'),
(29, 2, 'https://product.hstatic.net/1000230642/product/bsm000600den__2__77fab7e22db04fdfac9bf6543e74612a_3f58b358b0a64aaaaaa20ddc8af0c849_1024x1024.jpg'),
(30, 2, 'https://product.hstatic.net/1000230642/product/giay-the-thao-nam-biti-s-dsm074500den-den-ld35m-color-den_976e670e055f496390b8ed30328f88b0_1024x1024.jpg'),
(30, 8, 'https://product.hstatic.net/1000230642/product/giay-the-thao-nam-biti-s-dsm074500xam-xam-ki3ao-color-xam_48d47fe2e55a46faa20b3aa959805102_1024x1024.jpg'),
(31, 1, 'https://product.hstatic.net/1000230642/product/bsm000900trg__2__e3dba88e5f0b457a882cc24e40a1519c_1024x1024.jpg'),
(31, 8, 'https://product.hstatic.net/1000230642/product/bsm000900xam__2__cc43b270697f414a9ad704953e77a179_1024x1024.jpg'),
(32, 1, 'https://product.hstatic.net/1000230642/product/z4954122735847_2d4c40e817e664ac817a19387a34513f_87b4e9a75c0543bcb2252dff93600b3a_1024x1024.jpg'),
(33, 3, 'https://product.hstatic.net/1000230642/product/hsw005200hog1_d552b5c3fa23466993bc592968160ede_1024x1024.jpg'),
(33, 5, 'https://product.hstatic.net/1000230642/product/hsw005200xdg1_2c733a30b43140dfb5365ce8951c8002_1024x1024.jpg'),
(34, 2, 'https://product.hstatic.net/1000230642/product/dsmh02800den_da31666a5dd84155b9bae230ba6c7272_1024x1024.png'),
(34, 3, 'https://product.hstatic.net/1000230642/product/z4389356487504_ae429d8976ecbdc5c47240cb7e632684_523d32d0a4a5410eb56b0ccc6a7e7b25_1024x1024.jpg'),
(35, 1, 'https://product.hstatic.net/1000230642/product/gfw018788den__2__46df99a480b1427ead3b0a8668d53075_1024x1024.jpg'),
(36, 3, 'https://product.hstatic.net/1000230642/product/gfw019100doo1_56247a3981a248c7b488d3b883535729_1024x1024.jpg'),
(36, 4, 'https://product.hstatic.net/1000230642/product/gfw019100vag1_9ea2404fa25a49f0bfb64feb3cec4ed8_1024x1024.jpg'),
(37, 2, 'https://product.hstatic.net/1000230642/product/sfw755880den__2__5ed74f3048b74258ad4c57c035c7a24b_1024x1024.jpg'),
(38, 4, 'https://product.hstatic.net/1000230642/product/ttn_3147_c161261f240d41e987ce52363eaafa95_1024x1024.jpg'),
(39, 2, 'https://product.hstatic.net/1000230642/product/bsb003800den1_101ccb9c11a148c7843786d8d50741c9_1024x1024.jpg'),
(39, 5, 'https://product.hstatic.net/1000230642/product/bsb003800xnh1_5c7d22c609b046bba86a1fae13818c1d_1024x1024.jpg'),
(40, 2, 'https://product.hstatic.net/1000230642/product/bsb003299den1_08912057c1be458194ed9c0bcaa708bb_1024x1024.jpg'),
(41, 2, 'https://product.hstatic.net/1000230642/product/brb000799den9_a9868f88762a4e84855a3a25f8e72c6a_1024x1024.jpg'),
(42, 7, 'https://product.hstatic.net/1000230642/product/beb001700reu1_345b78416b744f338d97f26299d4d1ec_1024x1024.jpg'),
(42, 8, 'https://product.hstatic.net/1000230642/product/beb001700xam1_af8fb8d169d7412d9945fd04cd9d4797_1024x1024.jpg'),
(43, 4, 'https://product.hstatic.net/1000230642/product/beb001800cam1_170264f0a0f94df6a94cec4c7e7f81a5_1024x1024.jpg'),
(43, 5, 'https://product.hstatic.net/1000230642/product/beb001800xdd1_798f112d4d6e475ea3ee6e81aaa29cd3_1024x1024.jpg'),
(43, 8, 'https://product.hstatic.net/1000230642/product/beb001800xam1_040bf07ffc8d40259153f9f030d864da_1024x1024.jpg'),
(44, 1, 'https://product.hstatic.net/1000230642/product/giay-bup-be-be-gai-dbb011311trg-trang-p8zht-color-trang_baf62e74b71b488f9ba6dbdb3b100bf2_1024x1024.jpg'),
(44, 3, 'https://product.hstatic.net/1000230642/product/giay-bup-be-be-gai-dbb011311hog-hong-7e7dj-color-hong_062d8e9e713d45b2931f4a867a41c332_1024x1024.jpg'),
(44, 5, 'https://product.hstatic.net/1000230642/product/giay-bup-be-be-gai-dbb011311xdg-xanh-duong-tqcqb-color-xanh-duong_aa5bef32d67b4bb3a0400a9ce0d2c56b_1024x1024.jpg'),
(45, 2, 'https://product.hstatic.net/1000230642/product/dbb011288den__2__97a06447ce5342178dfb7a26a65c0fe9_1024x1024.jpg'),
(46, 3, 'https://product.hstatic.net/1000230642/product/giay-bup-be-be-gai-dbb011500hog-hong-7fwc9-color-hong_df9e887e5626444981f28279e4a49c21_1024x1024.jpg'),
(46, 9, 'https://product.hstatic.net/1000230642/product/giay-bup-be-be-gai-dbb011500kem-kem-exqmz-color-kem_1238c781c55c41d796f4240161d5af2a_1024x1024.jpg'),
(47, 3, 'https://product.hstatic.net/1000230642/product/ttn_2929_9b57de56cb0a4e1ca15565f46174a29d_1024x1024.jpg'),
(48, 3, 'https://product.hstatic.net/1000230642/product/sandal-pu-phun-be-gai-biti-s-dpg001588cam-cam-hdxid-color-cam_f9aab5757a1443e783d71a35619eae80_1024x1024.jpg'),
(49, 3, 'https://product.hstatic.net/1000230642/product/brg000300hog__2__4b7b5b0c3a2042948512450c8d4a74d1_1024x1024.jpg'),
(49, 5, 'https://product.hstatic.net/1000230642/product/brg000300xdg__2__08aaf92298e541fbbc2c2ce5d2e63de2_1024x1024.jpg'),
(50, 3, 'https://product.hstatic.net/1000230642/product/bsg002701hog__2__cbf85b6cff644c9fbb5f05a624c42190_1024x1024.jpg'),
(51, 3, 'https://product.hstatic.net/1000230642/product/giay-the-thao-be-gai-dsg141600doo-do-tioy7-color-do_466421f5ef1e4b2d9c70202b95c5e90f_1024x1024.jpg'),
(51, 6, 'https://product.hstatic.net/1000230642/product/giay-the-thao-be-gai-dsg141600xam-xam-vwbi7-color-xam_5948d5b03d2142238f75c5a11ad21a07_1024x1024.jpg');

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
(7, 30),
(8, 31),
(9, 32),
(10, 33),
(11, 34),
(12, 35),
(13, 36),
(14, 37),
(15, 38),
(16, 39),
(17, 40),
(18, 41),
(19, 42),
(20, 43),
(21, 44),
(22, 45);

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
  ADD KEY `fk_category_id` (`category_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customeraccount`
--
ALTER TABLE `customeraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

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
