-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 04:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivymoda`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `img_banner` varchar(50) DEFAULT NULL,
  `name_banner` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `img_banner`, `name_banner`) VALUES
(1, 'slider5.jpg', 'Giảm giá 50%'),
(2, 'slider6.jpg', 'giamgia 40%'),
(3, 'slider3.jpg', 'giamgia 45%'),
(4, 'slider4.jpg', 'giamgia 55%'),
(5, 'slider1.jpg', 'Giảm giá 70%'),
(6, 'card.png', 'Giảm giá 50%');

-- --------------------------------------------------------

--
-- Table structure for table `ct_donhang`
--

CREATE TABLE `ct_donhang` (
  `id_donhang` int(10) DEFAULT NULL,
  `id_ct` int(11) NOT NULL,
  `id_sanpham` int(10) DEFAULT NULL,
  `soluongsp` int(11) DEFAULT NULL,
  `ngaydat` text DEFAULT NULL,
  `size` varchar(4) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `ngaynhan` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `ghichu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ct_donhang`
--

INSERT INTO `ct_donhang` (`id_donhang`, `id_ct`, `id_sanpham`, `soluongsp`, `ngaydat`, `size`, `amount`, `ngaynhan`, `payment`, `ghichu`) VALUES
(61, 86, 4, 1, '2023-09-24', NULL, 180000, NULL, 'Thanh toán khi giao hàng', ''),
(62, 87, 5, 1, '2023-09-24', NULL, 180000, '27 Tháng 9 2023', 'Thanh toán khi giao hàng', ''),
(63, 88, 1, 3, '2023-09-25', NULL, 540000, '29 Tháng 9 2023', 'Thanh toán khi giao hàng', ''),
(63, 89, 56, 1, '2023-09-25', NULL, 130000, '29 Tháng 9 2023', 'Thanh toán khi giao hàng', ''),
(64, 90, 2, 1, '2023-09-25', '', 160000, '29 Tháng 9 2023', 'Thanh toán khi giao hàng', ''),
(65, 91, 5, 2, '2023-09-25', 'XL', 360000, '29 Tháng 9 2023', 'Thanh toán khi giao hàng', '');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `danhmuc` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `danhmuc`) VALUES
(1, 'Quần nam'),
(2, 'Áo nam'),
(3, 'Quần nữ'),
(4, 'Áo nữ'),
(5, 'Đầm nữ'),
(6, 'Quần trẻ em'),
(7, 'Áo trẻ em');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(10) NOT NULL,
  `id_kh` int(10) DEFAULT NULL,
  `tong` int(20) DEFAULT NULL,
  `id_tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `id_kh`, `tong`, `id_tinhtrang`) VALUES
(61, 5, 180000, 1),
(62, 6, 180000, 1),
(63, 7, 670000, 1),
(64, 8, 160000, 1),
(65, 9, 360000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_kh` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `diachi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id_kh`, `id_user`, `name`, `sdt`, `email`, `diachi`) VALUES
(5, 1, 'VU DINH BA', '0395566099', 'baokyeu12345@gmail.com', 'Quảng Ninh'),
(6, 1, 'VU DINH BA', '0395566099', 'baokyeu12345@gmail.com', 'Quảng Ninh'),
(7, 1, 'VU DINH BA', '0395566099', 'baokyeu12345@gmail.com', 'Quảng Ninh'),
(8, 1, 'VU DINH BA', '0395566099', 'baokyeu12345@gmail.com', 'Quảng Ninh'),
(9, 1, 'VU DINH BA', '0395566099', 'baokyeu12345@gmail.com', 'Quảng Ninh');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(5) NOT NULL,
  `user` varchar(20) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `full_name` varchar(20) DEFAULT NULL,
  `sodienthoai` varchar(11) NOT NULL,
  `lv` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `user`, `pass`, `full_name`, `sodienthoai`, `lv`) VALUES
(2, 'admin1', 'e10adc3949ba59abbe56e057f20f883e', 'VU DINH BA', '0395566099', 1),
(3, 'nv1', 'b81fbabe373a8a0a80df5da5602e702e', 'NguyenVanA', '0325612632', 2),
(5, 'LanAnh', 'f4cc399f0effd13c888e310ea2cf5399', 'DucAnhANH', '0324421445', 2),
(8, 'admin3', 'e10adc3949ba59abbe56e057f20f883e', ' VU VAN THIEN', '0325612632', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(80) DEFAULT NULL,
  `img` varchar(80) DEFAULT NULL,
  `gia` decimal(11,0) DEFAULT NULL,
  `trangthai` varchar(50) DEFAULT NULL,
  `tonkho` int(11) DEFAULT NULL,
  `xuatxu` varchar(25) DEFAULT NULL,
  `id_danhmuc` int(11) DEFAULT NULL,
  `ngaytao` varchar(50) DEFAULT NULL,
  `nguoitao` varchar(50) DEFAULT NULL,
  `daban` int(20) DEFAULT NULL,
  `loaisanpham` varchar(80) NOT NULL,
  `Id_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `img`, `gia`, `trangthai`, `tonkho`, `xuatxu`, `id_danhmuc`, `ngaytao`, `nguoitao`, `daban`, `loaisanpham`, `Id_size`) VALUES
(1, 'Áo Polo Sữa', 'polo1.jpg', '180000', 'Đã về kho', 12, 'Korea', 2, '2023/09/19', 'admin', 0, 'Áo polo nam', 1),
(2, 'Áo Polo trắng', 'polo2.jpg', '160000', 'Đã về kho', 5, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 2),
(3, 'Áo Polo đen', 'polo3.jpg', '160000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 3),
(4, 'Áo Polo lục', 'polo4.jpg', '180000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 4),
(5, 'Áo Polo xanhdương', 'polo5.jpg', '180000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 5),
(6, 'Áo Polo kẻ_xọc', 'polo6.jpg', '150000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 6),
(7, 'Áo Polo xanhđậm', 'polo7.jpg', '160000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 7),
(8, 'Áo Polo nâu', 'polo8.jpg', '180000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 8),
(9, 'Áo Polo kẻ_nâu', 'poloke1.jpg', '180000', 'Đang nhập về khoĐã về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 9),
(10, 'Áo Polo kẻ_xám', 'poloke2.jpg', '160000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 10),
(11, 'Áo Polo lá_đỏ', 'poloke3.jpg', '150000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 11),
(12, 'Áo Polo kẻ_đỏ', 'poloke4.jpg', '160000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 12),
(13, 'Áo Sơ mi đen ', 'aosomi1.jpg', '210000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', 13),
(14, 'Áo Sơ mi kẻ_xanh', 'aosomi2.jpg', '210000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', 14),
(15, 'Áo Sơ mi chấm_bi', 'aosomi3.jpg', '200000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', 15),
(16, 'Áo Sơ mi kẻ_caro', 'aosomi4.jpg', '180000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', 16),
(17, 'Áo Sơ mi trắng', 'aosomi5.jpg', '210000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', 17),
(18, 'Áo Sơ mi sữa', 'aosomi6.jpg', '200000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', 18),
(19, 'Áo Sơ mi kiểu_da', 'aosomi7.jpg', '180000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', 19),
(20, 'Áo sơ mi Regular', 'aosomireguloar.jpg', '80000', 'Đã về kho', 10, 'HÃ n Quá»‘c', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', 20),
(21, 'Áo Thun đen-Soul', 'aothun1.jpg', '120000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', 21),
(22, 'Áo thun trắng', 'aothun2.jpg', '100000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', 22),
(23, 'Áo Thun kẻ_xanh', 'aothun3.jpg', '100000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', 23),
(24, 'Áo Thun trắng-autuma', 'aothun4.jpg', '120000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', 24),
(25, 'Áo Thun nâu_xám-Soul', 'aothun5.jpg', '120000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', 25),
(26, 'Áo Thun nâu', 'aothun6.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', 26),
(27, 'Áo Thun đen-triangle', 'aothun7.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', 27),
(28, 'Áo Thun trắng-metagent', 'aothun8.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', 28),
(29, 'Áo Thun xanh-metagent', 'aothun9.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', 29),
(30, 'Áo Thun đen', 'aothun10.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', 30),
(31, 'Áo Thun đen-humanity', 'aothun11.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', 31),
(32, 'Áo Thun đen-patriots', 'aothun12.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', 32),
(41, 'Áo công sở vàng', 'aocongsovang.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo công sở', 41),
(42, 'Áo công sở xanh', 'aocongsoxanh.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo công sở', 42),
(43, 'Áo kiểu be', 'aokieube.jpg', '130000', 'Đã về kho', 12, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 43),
(44, 'Áo kiểu be vàng', 'aokieubevang.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 44),
(45, 'Áo lụa cam đỏ', 'aoluacamdo.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 45),
(46, 'Áo lụa đen', 'aoluaden.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 46),
(47, 'Áo lụa tím', 'aoluatim.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 47),
(48, 'Áo lụa trắng', 'aoluatrang.jpg', '130000', 'Đang nhập vê kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 48),
(49, 'Áo lụa vàng', 'aoluavang.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 49),
(50, 'Áo peplum hồng', 'aopeplumhong.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 50),
(51, 'Áo peplum trắng', 'aopeplumtrang.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 51),
(52, 'Áo blazer-croptop_vàng', 'blazer-croptop_vang.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 52),
(53, 'Áo blazer-croptop_xanh', 'blazer-croptop_xanh.jpg', '130000', 'Đã về kho', 15, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 53),
(54, 'Set jumpsuit_đen', 'setjumpsuitden.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 54),
(55, 'Set jumpsuit_nâu', 'setjumpsuitnau.jpg', '130000', 'Đã về kho', 15, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', 55),
(56, 'Áo sơ mi ren lưới Daisy vàng', 'aosominu.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', 56),
(57, 'Áo sơ mi croptop_trắng', 'aosomicroptop.jpg', '130000', 'Đã về kho', 4, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', 57),
(58, 'Áo sơ mi tencel_be', 'aosomitencelbe.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', 58),
(59, 'Áo sơ mi tencel_tím', 'aosomitenceltim.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', 59),
(60, 'Áo sơ mi tencel_xanh', 'aosomitencelxanh.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', 60),
(61, 'Áo sơ mi vàng thắt nơ', 'aosomi-that-no.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', 61),
(62, 'Áo sơ mi croptop_xanh', 'aosomicroptopxanh.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', 62),
(63, 'Áo thun đen', 'aothunden.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', 63),
(64, 'Áo thun be', 'aothunbe.jpg', '130000', 'Đã về kho', 5, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', 64),
(65, 'Áo thun bloome', 'aothunbloome.jpg', '130000', 'Đã về kho', 5, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', 65),
(66, 'Áo thun bloome be', 'aothunbloomebe.jpg', '130000', 'Đã về kho', 3, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', 66),
(67, 'Áo thun bloome hồng', 'aothunbloomehong.jpg', '130000', 'Đã về kho', 5, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', 67),
(68, 'Áo thun bloome trắng', 'aothunbloometrang.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', 68),
(69, 'Áo thun thời tiết', 'aothunhoatiet.jpg', '130000', 'Đã về kho', 12, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', 69),
(70, 'Áo thun hồng', 'aothunhong.jpg', '130000', 'Đã về kho', 12, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', 70),
(71, 'Áo thun xanh tảo', 'aothunxanhtao.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', 71),
(72, 'Áo Polo chiho-đen', 'aopolochiho-den.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo polo trẻ em', 72),
(73, 'Áo Polo chiho-trắng', 'aopolochiho.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo polo trẻ em', 73),
(74, 'Áo Polo kẻ', 'aopoloke.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo polo trẻ em', 74),
(75, 'Áo Polo xẻ gấu', 'aopoloxegau.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo polo trẻ em', 75),
(76, 'Áo sơ mi họa tiết', 'aosomihoatiet.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo sơ mi trẻ em', 76),
(77, 'Áo sơ mi kẻ ngắn', 'aosomikengan.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo sơ mi trẻ em', 77),
(78, 'Áo sơ mi tay ngắn', 'aosomitayngan.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo sơ mi trẻ em', 78),
(79, 'Áo sơ mi túi giả', 'aosomituigia.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo sơ mi trẻ em', 79),
(80, 'Áo thun baby', 'aothunbaby.jpg', '120000', 'Đã về kho', 10, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo yhun trẻ em', 80),
(81, 'Áo thun chữ', 'aothunchu.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo thun trẻ em', 81),
(82, 'Áo thun dino', 'aothundino.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo thun trẻ em', 82),
(83, 'Áo thun xanh lơ', 'aothunxanhlo.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo thun trẻ em', 83),
(84, 'Quần bò slim', 'quanboslim.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 1, '2023/09/05', 'admin', 0, 'Quần bò nam', 84),
(85, 'Quần bò slim-fit', 'quanboslimfit.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 1, '2023/09/19', 'admin', 0, 'Quần bò nam', 85),
(86, 'Quần jeans', 'quanjeans.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 1, '2023/09/05', 'admin', 0, 'Quần jeans nam', 86),
(87, 'Quần sooc jeans', 'quansoocjeans.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 1, '2023/09/05', 'admin', 0, 'Quần jeans nam', 87),
(88, 'Quần tây xám', 'quantayxam.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 1, '2023/09/05', 'admin', 0, 'Quần tây nam', 88),
(89, 'Quần tây nâu', 'quantaynau.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 1, '2023/09/05', 'admin', 0, 'Quần tây nam', 89),
(90, 'Quần baggy trắng', 'quanbaggy.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần baggy nữ', 90),
(91, 'Quần baggy be', 'quanbaggybe.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần baggy nữ', 91),
(92, 'Quần baggy đen', 'quanbaggyden.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần baggy nữ', 92),
(93, 'Quần jeans', 'quanjean.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần jeans nữ', 93),
(94, 'Quần jeans baggy', 'quanjeansbaggy.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần jeans nữ', 94),
(95, 'Quần sooc tím', 'quansooctim.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần sooc nữ', 95),
(96, 'Quần dài ống rộng đỏ', 'quandaiongrong.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần dài nữ', 96),
(97, 'Quần dài ống rộng hồng', 'quanxuongdai.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần dài nữ', 97),
(98, 'Quần kaki hình', 'quankakihinh.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 6, '2023/09/05', 'admin', 0, 'Quần kaki trẻ em', 98),
(99, 'Quần kaki xanh tím', 'quankakixanhtim.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 6, '2023/09/05', 'admin', 0, 'Quần kaki trẻ em', 99),
(100, 'Quần regular xanh', 'quanregularxanh.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 6, '2023/09/05', 'admin', 0, 'Quần sooc trẻ em', 100),
(101, 'Quần sooc be', 'quansoocbe.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 6, '2023/09/05', 'admin', 0, 'Quần sooc trẻ em', 101),
(102, 'Quần sooc kẻ', 'quansoocke.jpg', '150000', 'Đã về kho', 5, 'Viet Nam', 6, '2023/09/06', 'admin', 0, 'quan sooc tre em', 102);

-- --------------------------------------------------------

--
-- Table structure for table `size_product`
--

CREATE TABLE `size_product` (
  `Id_size` int(11) NOT NULL,
  `SL_size_M` int(11) DEFAULT NULL,
  `SL_size_L` int(11) DEFAULT NULL,
  `SL_size_XL` int(11) DEFAULT NULL,
  `SL_size_XXL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `size_product`
--

INSERT INTO `size_product` (`Id_size`, `SL_size_M`, `SL_size_L`, `SL_size_XL`, `SL_size_XXL`) VALUES
(1, 2, 1, 0, 4),
(2, 2, 3, 1, 2),
(3, 2, 1, 1, 3),
(4, 2, 1, 4, 2),
(5, 2, 1, 4, 5),
(6, 2, 1, 3, 2),
(7, 1, 2, 1, 5),
(8, 3, 2, 1, 1),
(9, 3, 2, 2, 3),
(10, 2, 1, 4, 3),
(11, 2, 1, 4, 3),
(12, 2, 1, 4, 3),
(13, 2, 1, 4, 3),
(14, 2, 1, 4, 3),
(15, 2, 1, 4, 3),
(16, 2, 1, 4, 3),
(17, 2, 1, 4, 3),
(18, 2, 1, 4, 3),
(19, 2, 1, 4, 3),
(20, 2, 1, 4, 3),
(21, 2, 1, 4, 3),
(22, 2, 1, 4, 3),
(23, 2, 1, 4, 3),
(24, 2, 1, 4, 3),
(25, 2, 1, 4, 3),
(26, 2, 1, 4, 3),
(27, 2, 1, 4, 3),
(28, 2, 1, 4, 3),
(29, 2, 2, 1, 4),
(30, 2, 1, 4, 3),
(31, 2, 1, 4, 3),
(32, 2, 1, 4, 3),
(33, 2, 1, 4, 3),
(34, 2, 1, 4, 3),
(35, 2, 1, 4, 3),
(36, 2, 1, 4, 3),
(37, 2, 1, 4, 3),
(38, 2, 1, 4, 3),
(39, 2, 1, 4, 3),
(40, 2, 1, 4, 3),
(41, 2, 1, 4, 3),
(42, 2, 1, 4, 3),
(43, 2, 1, 4, 3),
(44, 2, 1, 4, 3),
(45, 2, 1, 4, 3),
(46, 2, 1, 4, 3),
(47, 2, 1, 4, 3),
(48, 2, 1, 4, 3),
(49, 2, 1, 4, 3),
(50, 2, 1, 4, 3),
(51, 2, 1, 4, 3),
(52, 2, 1, 4, 3),
(53, 2, 1, 4, 3),
(54, 2, 1, 4, 3),
(55, 2, 1, 4, 3),
(56, 2, 1, 4, 3),
(57, 2, 1, 4, 3),
(58, 2, 1, 4, 3),
(59, 2, 1, 4, 3),
(60, 2, 1, 4, 3),
(61, 2, 1, 4, 3),
(62, 2, 1, 4, 3),
(63, 2, 1, 4, 3),
(64, 2, 1, 4, 3),
(65, 2, 1, 4, 3),
(66, 2, 1, 4, 3),
(67, 2, 1, 4, 3),
(68, 2, 1, 4, 3),
(69, 2, 1, 4, 3),
(70, 2, 1, 4, 3),
(71, 2, 1, 4, 3),
(72, 2, 1, 4, 3),
(73, 2, 1, 4, 3),
(74, 2, 1, 4, 3),
(75, 2, 1, 4, 3),
(76, 2, 1, 4, 3),
(77, 2, 1, 4, 3),
(78, 2, 1, 4, 3),
(79, 2, 1, 4, 3),
(80, 2, 1, 4, 3),
(81, 2, 1, 4, 3),
(82, 2, 1, 4, 3),
(83, 2, 1, 4, 3),
(84, 2, 1, 4, 3),
(85, 2, 1, 4, 3),
(86, 2, 1, 4, 3),
(87, 2, 1, 4, 3),
(88, 2, 1, 4, 3),
(89, 2, 1, 4, 3),
(90, 2, 1, 4, 3),
(91, 2, 1, 4, 3),
(92, 2, 1, 4, 3),
(93, 2, 1, 4, 3),
(94, 2, 1, 4, 3),
(95, 2, 1, 4, 3),
(96, 2, 1, 4, 3),
(97, 2, 1, 4, 3),
(98, 2, 1, 4, 3),
(99, 2, 1, 4, 3),
(100, 2, 1, 4, 3),
(101, 2, 1, 4, 3),
(102, 2, 1, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `gioitinh` varchar(15) DEFAULT NULL,
  `ngaytao` varchar(50) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id_user`, `name`, `pass`, `email`, `sdt`, `gioitinh`, `ngaytao`, `diachi`) VALUES
(1, 'VU DINH BA', 'e10adc3949ba59abbe56e057f20f883e', 'baokyeu12345@gmail.com', '0395566099', 'Nam', '2023-09-13', 'Quảng Ninh'),
(2, 'DucAnh', 'e10adc3949ba59abbe56e057f20f883e', 'baokyeu12345@gmail.com', '0395566080', 'Nam', '2023-09-14', 'Hà Nội'),
(3, 'Nguyen Duc Anh', 'e10adc3949ba59abbe56e057f20f883e', 'Ducanh123@gmail.com', '0395566111', 'Nam', '2023-09-14', 'Hồ Gươm'),
(4, 'VU DINH BA', 'e10adc3949ba59abbe56e057f20f883e', 'baokyeu12345@gmail.com', '0395511111', 'Nam', '2023-09-14', 'Quảng Ninh');

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `id_tinhtrang` int(11) NOT NULL,
  `tinhtrang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`id_tinhtrang`, `tinhtrang`) VALUES
(1, 'Chưa duyệt'),
(2, 'Đã duyệt'),
(3, 'Đang giao hàng'),
(4, 'Nhận thành công'),
(5, 'Đã giao hàng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `ct_donhang`
--
ALTER TABLE `ct_donhang`
  ADD PRIMARY KEY (`id_ct`),
  ADD KEY `fk_ctdonhang1` (`id_sanpham`),
  ADD KEY `fk_ctdonhang` (`id_donhang`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `fk_donhang` (`id_kh`),
  ADD KEY `fk_tinhtrang` (`id_tinhtrang`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_kh`),
  ADD KEY `fk_taikhoan` (`id_user`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `fk_tenbang` (`id_danhmuc`),
  ADD KEY `fk_size` (`Id_size`);

--
-- Indexes for table `size_product`
--
ALTER TABLE `size_product`
  ADD PRIMARY KEY (`Id_size`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`id_tinhtrang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ct_donhang`
--
ALTER TABLE `ct_donhang`
  MODIFY `id_ct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `size_product`
--
ALTER TABLE `size_product`
  MODIFY `Id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ct_donhang`
--
ALTER TABLE `ct_donhang`
  ADD CONSTRAINT `fk_ctdonhang` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id_donhang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ctdonhang1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_donhang` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`id_kh`),
  ADD CONSTRAINT `fk_tinhtrang` FOREIGN KEY (`id_tinhtrang`) REFERENCES `tinhtrang` (`id_tinhtrang`);

--
-- Constraints for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD CONSTRAINT `fk_taikhoan` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_size` FOREIGN KEY (`Id_size`) REFERENCES `size_product` (`Id_size`),
  ADD CONSTRAINT `fk_tenbang` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
