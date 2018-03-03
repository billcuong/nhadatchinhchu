-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2018 at 05:15 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_starupdb_old`
--

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `PROVINCE_ID` int(4) UNSIGNED NOT NULL,
  `PROVINCE_NAME` varchar(50) NOT NULL,
  `PROVINCE_STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`PROVINCE_ID`, `PROVINCE_NAME`, `PROVINCE_STATUS`) VALUES
(249, 'Tp. Hồ Chí Minh', 'Enabled'),
(250, 'Hà Nội', 'Enabled'),
(251, 'Đà Nẵng', 'Enabled'),
(252, 'Yên Bái', 'Enabled'),
(253, 'Vĩnh Phúc', 'Enabled'),
(254, 'Vĩnh Long', 'Enabled'),
(255, 'Tuyên Quang', 'Enabled'),
(256, 'Trà Vinh', 'Enabled'),
(257, 'Tiền Giang', 'Enabled'),
(258, 'Thừa Thiên Huế', 'Enabled'),
(259, 'Thanh Hóa', 'Enabled'),
(260, 'Thái Nguyên', 'Enabled'),
(261, 'Thái Bình', 'Enabled'),
(262, 'Tây Ninh', 'Enabled'),
(263, 'Sơn La', 'Enabled'),
(264, 'Sóc Trăng', 'Enabled'),
(265, 'Quảng Trị', 'Enabled'),
(266, 'Quảng Ninh', 'Enabled'),
(267, 'Quảng Ngãi', 'Enabled'),
(268, 'Quảng Nam', 'Enabled'),
(269, 'Quảng Bình', 'Enabled'),
(270, 'Phú Yên', 'Enabled'),
(271, 'Phú Thọ', 'Enabled'),
(272, 'Ninh Thuận', 'Enabled'),
(273, 'Ninh Bình', 'Enabled'),
(274, 'Nghệ An', 'Enabled'),
(275, 'Nam Định', 'Enabled'),
(276, 'Long An', 'Enabled'),
(277, 'Lào Cai', 'Enabled'),
(278, 'Lạng Sơn', 'Enabled'),
(279, 'Lâm Đồng', 'Enabled'),
(280, 'Lai Châu', 'Enabled'),
(281, 'Kon Tum', 'Enabled'),
(282, 'Kiên Giang', 'Enabled'),
(283, 'Khánh Hòa', 'Enabled'),
(284, 'Hưng Yên', 'Enabled'),
(285, 'Hòa Bình', 'Enabled'),
(286, 'Hậu Giang', 'Enabled'),
(287, 'Hải Dương', 'Enabled'),
(288, 'Hà Tĩnh', 'Enabled'),
(289, 'Hà Nam', 'Enabled'),
(290, 'Hà Giang', 'Enabled'),
(291, 'Gia Lai', 'Enabled'),
(292, 'Đồng Tháp', 'Enabled'),
(293, 'Đồng Nai', 'Enabled'),
(294, 'Điện Biên', 'Enabled'),
(295, 'Đăk Nông', 'Enabled'),
(296, 'Đăk Lăk', 'Enabled'),
(297, 'Cao Bằng', 'Enabled'),
(298, 'Cà Mau', 'Enabled'),
(299, 'Bình Thuận', 'Enabled'),
(300, 'Bình Phước', 'Enabled'),
(301, 'Bình Dương', 'Enabled'),
(302, 'Bình Định', 'Enabled'),
(303, 'Bến Tre', 'Enabled'),
(304, 'Bắc Ninh', 'Enabled'),
(305, 'Bạc Liêu', 'Enabled'),
(306, 'Bắc Kạn', 'Enabled'),
(307, 'Bắc Giang', 'Enabled'),
(308, 'Bà Rịa Vũng Tàu', 'Enabled'),
(309, 'An Giang', 'Enabled'),
(310, 'Hải Phòng', 'Enabled'),
(311, 'Cần Thơ', 'Enabled'),
(312, 'Hà Tây', 'Enabled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`PROVINCE_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
