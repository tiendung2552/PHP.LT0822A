-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 03:01 PM
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
-- Table structure for table `ct_donhang`
--

CREATE TABLE `ct_donhang` (
  `id_donhang` int(10) DEFAULT NULL,
  `id_ct` int(11) NOT NULL,
  `id_sanpham` int(10) DEFAULT NULL,
  `tensanpham` varchar(50) DEFAULT NULL,
  `soluongsp` int(11) DEFAULT NULL,
  `don_gia` int(20) DEFAULT NULL,
  `ngaydat` text DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `ghichu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_kh` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `diachi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id_kh`, `name`, `sdt`, `email`, `diachi`) VALUES
(1, 'VU DINH BA', '0395566099', 'baokyeu12345@gmail.com', 'Quảng Ninh'),
(2, 'DucAnh', '0395566080', 'baokyeu12345@gmail.com', 'Hà Nội'),
(3, 'Nguyen Duc Anh', '0395566111', 'Ducanh123@gmail.com', 'Hồ Gươm Nội Bài'),
(4, 'VU DINH BA', '0395511111', 'baokyeu12345@gmail.com', 'Quảng Ninh');

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
(5, 'LanAnh', '14e1b600b1fd579f47433b88e8d85291', 'DucAnh', '0324421445', 2),
(7, 'admin2', 'e10adc3949ba59abbe56e057f20f883e', 'VU DINH BA', '0325612632', 1);

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
(1, 'Áo Polo Sữa', 'polo1.jpg', '180000', 'Đã về kho', 12, 'Korea', 2, '2023-09-19', 'admin', 0, 'Áo polo nam', 1),
(2, 'Áo Polo trắng', 'polo2.jpg', '160000', 'Đã về kho', 5, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 2),
(3, 'Áo Polo đen', 'polo3.jpg', '160000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 3),
(4, 'Áo Polo lục', 'polo4.jpg', '180000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 4),
(5, 'Áo Polo xanhdương', 'polo5.jpg', '180000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 5),
(6, 'Áo Polo kẻ_xọc', 'polo6.jpg', '150000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', 6),
(7, 'Áo Polo xanhđậm', 'polo7.jpg', '160000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', NULL),
(8, 'Áo Polo nâu', 'polo8.jpg', '180000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', NULL),
(9, 'Áo Polo kẻ_nâu', 'poloke1.jpg', '180000', 'Đang nhập về khoĐã về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', NULL),
(10, 'Áo Polo kẻ_xám', 'poloke2.jpg', '160000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', NULL),
(11, 'Áo Polo lá_đỏ', 'poloke3.jpg', '150000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', NULL),
(12, 'Áo Polo kẻ_đỏ', 'poloke4.jpg', '160000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo polo nam', NULL),
(13, 'Áo Sơ mi đen ', 'aosomi1.jpg', '210000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', NULL),
(14, 'Áo Sơ mi kẻ_xanh', 'aosomi2.jpg', '210000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', NULL),
(15, 'Áo Sơ mi chấm_bi', 'aosomi3.jpg', '200000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', NULL),
(16, 'Áo Sơ mi kẻ_caro', 'aosomi4.jpg', '180000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', NULL),
(17, 'Áo Sơ mi trắng', 'aosomi5.jpg', '210000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', NULL),
(18, 'Áo Sơ mi sữa', 'aosomi6.jpg', '200000', 'Đang nhập về kho', 0, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', NULL),
(19, 'Áo Sơ mi kiểu_da', 'aosomi7.jpg', '180000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', NULL),
(20, 'Áo sơ mi Regular', 'aosomireguloar.jpg', '80000', 'Đã về kho', 10, 'HÃ n Quá»‘c', 2, '2023/09/03', 'admin', 0, 'Áo sơ mi nam', NULL),
(21, 'Áo Thun đen-Soul', 'aothun1.jpg', '120000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', NULL),
(22, 'Áo thun trắng', 'aothun2.jpg', '100000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', NULL),
(23, 'Áo Thun kẻ_xanh', 'aothun3.jpg', '100000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', NULL),
(24, 'Áo Thun trắng-autuma', 'aothun4.jpg', '120000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', NULL),
(25, 'Áo Thun nâu_xám-Soul', 'aothun5.jpg', '120000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', NULL),
(26, 'Áo Thun nâu', 'aothun6.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', NULL),
(27, 'Áo Thun đen-triangle', 'aothun7.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', NULL),
(28, 'Áo Thun trắng-metagent', 'aothun8.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', NULL),
(29, 'Áo Thun xanh-metagent', 'aothun9.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', NULL),
(30, 'Áo Thun đen', 'aothun10.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', NULL),
(31, 'Áo Thun đen-humanity', 'aothun11.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', NULL),
(32, 'Áo Thun đen-patriots', 'aothun12.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 2, '2023/09/03', 'admin', 0, 'Áo thun nam', NULL),
(41, 'Áo công sở vàng', 'aocongsovang.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo công sở', NULL),
(42, 'Áo công sở xanh', 'aocongsoxanh.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo công sở', NULL),
(43, 'Áo kiểu be', 'aokieube.jpg', '130000', 'Đã về kho', 12, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(44, 'Áo kiểu be vàng', 'aokieubevang.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(45, 'Áo lụa cam đỏ', 'aoluacamdo.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(46, 'Áo lụa đen', 'aoluaden.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(47, 'Áo lụa tím', 'aoluatim.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(48, 'Áo lụa trắng', 'aoluatrang.jpg', '130000', 'Đang nhập vê kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(49, 'Áo lụa vàng', 'aoluavang.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(50, 'Áo peplum hồng', 'aopeplumhong.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(51, 'Áo peplum trắng', 'aopeplumtrang.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(52, 'Áo blazer-croptop_vàng', 'blazer-croptop_vang.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(53, 'Áo blazer-croptop_xanh', 'blazer-croptop_xanh.jpg', '130000', 'Đã về kho', 15, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(54, 'Set jumpsuit_đen', 'setjumpsuitden.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(55, 'Set jumpsuit_nâu', 'setjumpsuitnau.jpg', '130000', 'Đã về kho', 15, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo kiểu nữ', NULL),
(56, 'Áo sơ mi ren lưới Daisy vàng', 'aosominu.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', NULL),
(57, 'Áo sơ mi croptop_trắng', 'aosomicroptop.jpg', '130000', 'Đã về kho', 4, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', NULL),
(58, 'Áo sơ mi tencel_be', 'aosomitencelbe.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', NULL),
(59, 'Áo sơ mi tencel_tím', 'aosomitenceltim.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', NULL),
(60, 'Áo sơ mi tencel_xanh', 'aosomitencelxanh.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', NULL),
(61, 'Áo sơ mi vàng thắt nơ', 'aosomi-that-no.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', NULL),
(62, 'Áo sơ mi croptop_xanh', 'aosomicroptopxanh.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo sơ mi nữ', NULL),
(63, 'Áo thun đen', 'aothunden.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', NULL),
(64, 'Áo thun be', 'aothunbe.jpg', '130000', 'Đã về kho', 5, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', NULL),
(65, 'Áo thun bloome', 'aothunbloome.jpg', '130000', 'Đã về kho', 5, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', NULL),
(66, 'Áo thun bloome be', 'aothunbloomebe.jpg', '130000', 'Đã về kho', 3, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', NULL),
(67, 'Áo thun bloome hồng', 'aothunbloomehong.jpg', '130000', 'Đã về kho', 5, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', NULL),
(68, 'Áo thun bloome trắng', 'aothunbloometrang.jpg', '130000', 'Đã về kho', 10, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', NULL),
(69, 'Áo thun thời tiết', 'aothunhoatiet.jpg', '130000', 'Đã về kho', 12, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', NULL),
(70, 'Áo thun hồng', 'aothunhong.jpg', '130000', 'Đã về kho', 12, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', NULL),
(71, 'Áo thun xanh tảo', 'aothunxanhtao.jpg', '130000', 'Đang nhập về kho', 0, 'Hàn Quốc', 4, '2023/09/04', 'admin', 0, 'Áo thun nữ', NULL),
(72, 'Áo Polo chiho-đen', 'aopolochiho-den.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo polo trẻ em', NULL),
(73, 'Áo Polo chiho-trắng', 'aopolochiho.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo polo trẻ em', NULL),
(74, 'Áo Polo kẻ', 'aopoloke.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo polo trẻ em', NULL),
(75, 'Áo Polo xẻ gấu', 'aopoloxegau.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo polo trẻ em', NULL),
(76, 'Áo sơ mi họa tiết', 'aosomihoatiet.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo sơ mi trẻ em', NULL),
(77, 'Áo sơ mi kẻ ngắn', 'aosomikengan.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo sơ mi trẻ em', NULL),
(78, 'Áo sơ mi tay ngắn', 'aosomitayngan.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo sơ mi trẻ em', NULL),
(79, 'Áo sơ mi túi giả', 'aosomituigia.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo sơ mi trẻ em', NULL),
(80, 'Áo thun baby', 'aothunbaby.jpg', '120000', 'Đã về kho', 10, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo yhun trẻ em', NULL),
(81, 'Áo thun chữ', 'aothunchu.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo thun trẻ em', NULL),
(82, 'Áo thun dino', 'aothundino.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo thun trẻ em', NULL),
(83, 'Áo thun xanh lơ', 'aothunxanhlo.jpg', '120000', 'Đã về kho', 12, 'Việt Nam', 7, '2023/09/05', 'admin', 0, 'Áo thun trẻ em', NULL),
(84, 'Quần bò slim', 'quanboslim.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 1, '2023/09/05', 'admin', 0, 'Quần bò nam', NULL),
(85, 'Quần bò slim-fit', 'quanboslimfit.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 1, '2023-09-19', 'admin', 0, 'Quần bò nam', NULL),
(86, 'Quần jeans', 'quanjeans.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 1, '2023/09/05', 'admin', 0, 'Quần jeans nam', NULL),
(87, 'Quần sooc jeans', 'quansoocjeans.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 1, '2023/09/05', 'admin', 0, 'Quần jeans nam', NULL),
(88, 'Quần tây xám', 'quantayxam.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 1, '2023/09/05', 'admin', 0, 'Quần tây nam', NULL),
(89, 'Quần tây nâu', 'quantaynau.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 1, '2023/09/05', 'admin', 0, 'Quần tây nam', NULL),
(90, 'Quần baggy trắng', 'quanbaggy.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần baggy nữ', NULL),
(91, 'Quần baggy be', 'quanbaggybe.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần baggy nữ', NULL),
(92, 'Quần baggy đen', 'quanbaggyden.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần baggy nữ', NULL),
(93, 'Quần jeans', 'quanjean.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần jeans nữ', NULL),
(94, 'Quần jeans baggy', 'quanjeansbaggy.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần jeans nữ', NULL),
(95, 'Quần sooc tím', 'quansooctim.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần sooc nữ', NULL),
(96, 'Quần dài ống rộng đỏ', 'quandaiongrong.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần dài nữ', NULL),
(97, 'Quần dài ống rộng hồng', 'quanxuongdai.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 3, '2023/09/05', 'admin', 0, 'Quần dài nữ', NULL),
(98, 'Quần kaki hình', 'quankakihinh.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 6, '2023/09/05', 'admin', 0, 'Quần kaki trẻ em', NULL),
(99, 'Quần kaki xanh tím', 'quankakixanhtim.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 6, '2023/09/05', 'admin', 0, 'Quần kaki trẻ em', NULL),
(100, 'Quần regular xanh', 'quanregularxanh.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 6, '2023/09/05', 'admin', 0, 'Quần sooc trẻ em', NULL),
(101, 'Quần sooc be', 'quansoocbe.jpg', '320000', 'Đã về kho', 8, 'Việt Nam', 6, '2023/09/05', 'admin', 0, 'Quần sooc trẻ em', NULL),
(102, 'Quần sooc kẻ', 'quansoocke.jpg', '150000', 'Đã về kho', 5, 'Viet Nam', NULL, '2023-09-06', 'admin', NULL, 'quan sooc tre em', NULL);

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
(2, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL);

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
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id_kh`);

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
-- AUTO_INCREMENT for table `ct_donhang`
--
ALTER TABLE `ct_donhang`
  MODIFY `id_ct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `size_product`
--
ALTER TABLE `size_product`
  MODIFY `Id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_size` FOREIGN KEY (`Id_size`) REFERENCES `size_product` (`Id_size`),
  ADD CONSTRAINT `fk_tenbang` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
