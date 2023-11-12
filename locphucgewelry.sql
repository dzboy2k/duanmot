-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2023 lúc 03:13 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `locphucgewelry`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `thoigian` date NOT NULL,
  `idkh` int(11) NOT NULL,
  `idspct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `noidung`, `thoigian`, `idkh`, `idspct`) VALUES
(1, 'Đẹp', '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ceo`
--

CREATE TABLE `ceo` (
  `id_ceo` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `tendn` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `vaitro` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ceo`
--

INSERT INTO `ceo` (`id_ceo`, `hoten`, `tendn`, `email`, `sdt`, `diachi`, `vaitro`, `matkhau`) VALUES
(1, 'Nguyễn Thi Minh Nguyệt', 'nguyetntm', 'nguyetntm', '', '', '', '12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_chitietdh` int(11) NOT NULL,
  `soluongchitiet` int(11) NOT NULL,
  `giasp` float NOT NULL,
  `tongtien` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `iddh` int(11) NOT NULL,
  `idspct` int(11) NOT NULL,
  `idmagiamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id_chitietdh`, `soluongchitiet`, `giasp`, `tongtien`, `soluong`, `iddh`, `idspct`, `idmagiamgia`) VALUES
(1, 12, 23500000, 117500000, 5, 1, 1, 1),
(2, 0, 0, 0, 6, 2, 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsize`
--

CREATE TABLE `chitietsize` (
  `id_chitietsize` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `bankinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsize`
--

INSERT INTO `chitietsize` (`id_chitietsize`, `idsize`, `bankinh`) VALUES
(1, 1, '10-15cm'),
(2, 1, '15-20cm'),
(3, 1, '20-25cm'),
(4, 2, '30-40cm'),
(5, 2, '40-50cm'),
(6, 2, '50-60cm'),
(7, 3, '60-70cm'),
(8, 3, '70-80cm'),
(9, 3, '80-85cm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id_dm` int(11) NOT NULL,
  `tendm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id_dm`, `tendm`) VALUES
(1, 'Trang Sức Vàng'),
(2, 'Trang Sức Kim Cương'),
(5, 'Trang Sức Đá Quý'),
(13, 'quần áo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_dh` int(11) NOT NULL,
  `diachinhan` varchar(255) NOT NULL,
  `sodienthoai` varchar(11) NOT NULL,
  `phuongthuctt` varchar(50) NOT NULL,
  `idkh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_dh`, `diachinhan`, `sodienthoai`, `phuongthuctt`, `idkh`) VALUES
(1, 'Hà Nội', '', '', 1),
(2, 'Hòa Bình', '098765431', 'Tiền mặt', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giamgia`
--

CREATE TABLE `giamgia` (
  `idgiamgia` int(11) NOT NULL,
  `magiamgia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giamgia`
--

INSERT INTO `giamgia` (`idgiamgia`, `magiamgia`) VALUES
(1, 'ph123$#'),
(2, 'ph123$#r'),
(3, 'ph123$#%');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh`
--

CREATE TABLE `gioitinh` (
  `id_gt` int(11) NOT NULL,
  `ten_gt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gioitinh`
--

INSERT INTO `gioitinh` (`id_gt`, `ten_gt`) VALUES
(1, 'nam'),
(2, 'Nữ'),
(3, 'cả hai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `matkhau` varchar(30) NOT NULL,
  `ngaysinh` date NOT NULL,
  `tentk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `tenkh`, `email`, `sodienthoai`, `diachi`, `matkhau`, `ngaysinh`, `tentk`) VALUES
(1, 'Nguyễn Văn A', '', '', '', '', '0000-00-00', ''),
(2, 'Nguyễn Văn B', '', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id_nv` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `hinh_anhnv` varchar(250) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `vaitro` varchar(50) NOT NULL,
  `matkhau` varchar(20) NOT NULL,
  `id_ceo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id_nv`, `hoten`, `hinh_anhnv`, `tendangnhap`, `email`, `sdt`, `diachi`, `vaitro`, `matkhau`, `id_ceo`) VALUES
(3, 'Nguyễn Công Trang', '', 'trangnc', 'trangncph44249@fpt.edu.vn', '', '', '', '1234', 1),
(4, 'Nguyễn Tiến Dũng', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamct`
--

CREATE TABLE `sanphamct` (
  `id_spct` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` float NOT NULL,
  `mota` varchar(250) NOT NULL,
  `tenspchitiet` varchar(50) NOT NULL,
  `hinhanhchitiet` varchar(250) NOT NULL,
  `idsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphamct`
--

INSERT INTO `sanphamct` (`id_spct`, `soluong`, `gia`, `mota`, `tenspchitiet`, `hinhanhchitiet`, `idsp`) VALUES
(1, 120, 23500000, 'Đẹp', 'Nhẫn Trơn', 'upload_img/1699324595mg1.jpg', 1),
(2, 120, 21000000, 'Đẹp', 'Nhẫn Bóng', '', 1),
(6, 0, 1000, '', 'bạc', 'upload_img/1699324793lt2.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `hinhanh` text NOT NULL,
  `luotxem` int(11) NOT NULL,
  `dacbiet` varchar(50) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `id_gt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `tensp`, `hinhanh`, `luotxem`, `dacbiet`, `id_dm`, `id_gt`) VALUES
(1, 'Nhẫn Vàng', '', 12, 'Còn Hàng', 1, 3),
(2, 'Vòng Tay Vàng', '', 123, 'Còn Hàng', 1, 3),
(3, 'Vòng Cổ Vàng', '', 140, 'Còn Hàng', 1, 3),
(4, 'Lắc Chân Vàng', '', 120, 'Còn Hàng', 1, 2),
(5, 'Nhẫn Kim Cương', '', 120, 'Còn Hàng', 2, 3),
(6, 'Nhẫn Mặt Đá Quý', '', 209, 'Còn Hàng', 5, 3),
(10, 'iphone', 'upload_img/1699278401ms2.jpg', 120, 'còn hàng', 13, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id_size` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id_size`, `id_sp`) VALUES
(1, 1),
(2, 2),
(3, 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `idkh` (`idkh`,`idspct`),
  ADD KEY `idspct` (`idspct`);

--
-- Chỉ mục cho bảng `ceo`
--
ALTER TABLE `ceo`
  ADD PRIMARY KEY (`id_ceo`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_chitietdh`),
  ADD KEY `iddh` (`iddh`),
  ADD KEY `chitietdonhang_ibfk_2` (`idspct`),
  ADD KEY `idmagiamgia` (`idmagiamgia`);

--
-- Chỉ mục cho bảng `chitietsize`
--
ALTER TABLE `chitietsize`
  ADD PRIMARY KEY (`id_chitietsize`),
  ADD KEY `idsize` (`idsize`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_dh`),
  ADD KEY `idkh` (`idkh`);

--
-- Chỉ mục cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  ADD PRIMARY KEY (`idgiamgia`);

--
-- Chỉ mục cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  ADD PRIMARY KEY (`id_gt`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id_nv`),
  ADD KEY `id_ceo` (`id_ceo`);

--
-- Chỉ mục cho bảng `sanphamct`
--
ALTER TABLE `sanphamct`
  ADD PRIMARY KEY (`id_spct`),
  ADD KEY `idsp` (`idsp`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_dm` (`id_dm`),
  ADD KEY `id_gt` (`id_gt`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`),
  ADD KEY `id_sp` (`id_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ceo`
--
ALTER TABLE `ceo`
  MODIFY `id_ceo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id_chitietdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitietsize`
--
ALTER TABLE `chitietsize`
  MODIFY `id_chitietsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  MODIFY `idgiamgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id_nv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanphamct`
--
ALTER TABLE `sanphamct`
  MODIFY `id_spct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`id_kh`),
  ADD CONSTRAINT `binhluan_ibfk_3` FOREIGN KEY (`idspct`) REFERENCES `sanphamct` (`id_spct`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`iddh`) REFERENCES `donhang` (`id_dh`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`idspct`) REFERENCES `sanphamct` (`id_spct`),
  ADD CONSTRAINT `chitietdonhang_ibfk_3` FOREIGN KEY (`idmagiamgia`) REFERENCES `giamgia` (`idgiamgia`);

--
-- Các ràng buộc cho bảng `chitietsize`
--
ALTER TABLE `chitietsize`
  ADD CONSTRAINT `chitietsize_ibfk_1` FOREIGN KEY (`idsize`) REFERENCES `size` (`id_size`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`id_kh`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`id_ceo`) REFERENCES `ceo` (`id_ceo`);

--
-- Các ràng buộc cho bảng `sanphamct`
--
ALTER TABLE `sanphamct`
  ADD CONSTRAINT `sanphamct_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `san_pham` (`id_sp`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danh_muc` (`id_dm`),
  ADD CONSTRAINT `san_pham_ibfk_2` FOREIGN KEY (`id_gt`) REFERENCES `gioitinh` (`id_gt`);

--
-- Các ràng buộc cho bảng `size`
--
ALTER TABLE `size`
  ADD CONSTRAINT `size_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
