-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 06:36 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `SoThuTu` int(11) NOT NULL,
  `MaHoaDon` varchar(50) NOT NULL,
  `masanpham` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `TrangThai` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHoaDon` varchar(50) NOT NULL,
  `TenTaiKhoan` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `diachigiaohang` int(11) NOT NULL,
  `sodienthoaigiaohang` text NOT NULL,
  `ngaylap` date NOT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoaiSanPham` varchar(50) NOT NULL,
  `TenLoaisanpham` varchar(50) NOT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSanPham`, `TenLoaisanpham`, `trangthai`) VALUES
('Loai1', 'Quần áo', 1),
('Loai2', 'Giày thể thao', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`MaLoai`, `TenLoai`) VALUES
(0, 'Khách hàng'),
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `HoTen` varchar(50) NOT NULL,
  `Emai` varchar(255) NOT NULL,
  `TenTaiKhoan` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `TrangThai` tinyint(1) NOT NULL,
  `LoaiTaiKhoan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`HoTen`, `Emai`, `TenTaiKhoan`, `MatKhau`, `TrangThai`, `LoaiTaiKhoan`) VALUES
('Thor', 'a@b.c', 'kh1', '123', 1, 0),
('Võ Huỳnh Thanh Phong', 'mrcafein@gmail.com', 'administrator', '123', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `mancc` varchar(10) NOT NULL,
  `tenncc` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`mancc`, `tenncc`) VALUES
('NCC1', 'Nike'),
('NCC2', 'Jordan'),
('NCC3', 'Converse'),
('NCC4', 'CANALI'),
('NCC5', 'BRIONI'),
('NCC6', 'ZEGNA');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` varchar(50) NOT NULL,
  `tensanpham` varchar(50) NOT NULL,
  `mota` varchar(500) NOT NULL,
  `hinhanh` varchar(500) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `loaisanpham` varchar(50) NOT NULL,
  `trangthaisanpham` tinyint(1) NOT NULL,
  `Mancc` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `tensanpham`, `mota`, `hinhanh`, `soluong`, `dongia`, `loaisanpham`, `trangthaisanpham`, `Mancc`) VALUES
('2', 'Vest xanh', 'Ä‘áº¹p mÃ  máº¯c', '../HinhAnh/a2.png', 10, 1700000, 'Loai1', 1, 'NCC4'),
('1', 'Vest xanh', 'Ä‘áº¹p mÃ  máº¯c', '../HinhAnh/a2.png', 10, 1700000, 'Loai1', 1, 'NCC4'),
('3', 'Vest mÃ u kem', 'Ä‘áº¹p mÃ  máº¯c', '../HinhAnh/a8.png', 10, 1400000, 'Loai1', 1, 'NCC5'),
('4', 'Äáº§m cam', 'Ä‘áº¹p mÃ  máº¯c tÃ½ xÃ­u', '../HinhAnh/a7.png', 10, 1900000, 'Loai1', 1, 'NCC6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`SoThuTu`,`MaHoaDon`,`masanpham`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHoaDon`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoaiSanPham`);

--
-- Indexes for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`TenTaiKhoan`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`mancc`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
