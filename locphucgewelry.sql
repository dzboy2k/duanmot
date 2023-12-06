-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2023 lúc 03:42 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

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
  `thoigian` datetime NOT NULL,
  `idkh` int(11) NOT NULL,
  `idspct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `noidung`, `thoigian`, `idkh`, `idspct`) VALUES
(2, 'đẹp quá ', '0000-00-00 00:00:00', 4, 15),
(3, 'đẹp', '0000-00-00 00:00:00', 4, 21),
(5, 'ád', '0000-00-00 00:00:00', 4, 21),
(6, 'ád', '0000-00-00 00:00:00', 4, 21),
(7, 'a', '0000-00-00 00:00:00', 4, 21),
(8, 'áddff', '0000-00-00 00:00:00', 4, 21),
(9, 'Đã mua và hài lòng', '0000-00-00 00:00:00', 19, 14),
(10, 'Giao hàng uy tín hơn người yêu cũ', '0000-00-00 00:00:00', 19, 14),
(12, 'Rất xinh nha, kết hợp với đồ cùng tone mà trông sang lắm.', '0000-00-00 00:00:00', 19, 35),
(15, 'Người', '0000-00-00 00:00:00', 19, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_chitietdh` int(11) NOT NULL,
  `soluongchitiet` int(11) NOT NULL,
  `giasp` float NOT NULL,
  `tongtien` float NOT NULL,
  `iddh` int(11) NOT NULL,
  `idspct` int(11) NOT NULL,
  `idchitietsize` int(11) NOT NULL,
  `idmagiamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id_chitietdh`, `soluongchitiet`, `giasp`, `tongtien`, `iddh`, `idspct`, `idchitietsize`, `idmagiamgia`) VALUES
(73, 1, 21000000, 21000000, 66, 20, 1, 1),
(74, 1, 12000000, 12000000, 67, 24, 1, 1),
(75, 1, 21000000, 21000000, 68, 20, 1, 1),
(76, 1, 4000000, 4000000, 69, 19, 1, 1),
(77, 1, 18000000, 18000000, 72, 22, 4, 1),
(78, 1, 4000000, 4000000, 76, 19, 1, 1),
(79, 1, 21000000, 21000000, 77, 20, 1, 1),
(80, 1, 4000000, 4000000, 82, 19, 1, 1),
(81, 1, 21000000, 21000000, 83, 20, 1, 1),
(82, 4, 123457000, 493828000, 84, 15, 4, 1),
(83, 1, 4000000, 4000000, 85, 19, 1, 1),
(84, 1, 123457000, 123457000, 86, 15, 4, 1),
(85, 1, 21000000, 21000000, 86, 20, 1, 1),
(86, 1, 12000000, 12000000, 86, 24, 1, 1),
(87, 9, 23709000, 213381000, 86, 14, 1, 1),
(88, 2, 4000000, 8000000, 86, 19, 1, 1),
(89, 99, 23709000, 2347190000, 88, 14, 1, 1);

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
(4, 2, '30-35cm'),
(5, 2, '35-40cm'),
(6, 2, '40-45cm'),
(7, 3, '50-55cm'),
(8, 3, '55-60cm'),
(9, 3, '60-65cm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id_dm` int(11) NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `hinhanhdm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id_dm`, `tendm`, `hinhanhdm`) VALUES
(1, 'Trang Sức Vàng', 'upload_img/1700793614DWR0037R-D01200048-thumbnail.jpg'),
(2, 'Trang Sức Kim Cương', 'upload_img/1700278278DFH0218AEW-WG01A-thumbnail.jpg'),
(5, 'Trang Sức Ngọc Trai', 'upload_img/1700278242nhanngoctrai1.jpg'),
(15, 'Trang Sức Bạc', 'upload_img/1700278603trangsucbac.jfif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_dh` int(11) NOT NULL,
  `diachinhan` varchar(255) NOT NULL,
  `sodienthoai` varchar(11) NOT NULL,
  `phuongthuctt` varchar(50) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idtientrinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_dh`, `diachinhan`, `sodienthoai`, `phuongthuctt`, `idkh`, `idtientrinh`) VALUES
(66, 'Hà Tây', '0918371361', 'Chuyển khoản', 10, 1),
(67, 'Cầu Giấy', '0918371361', 'Chuyển khoản', 10, 1),
(68, 'Hà Tây', '0918371361', 'Chuyển khoản', 10, 3),
(69, 'Hà Tây', '0918371361', 'Chuyển khoản', 10, 1),
(70, 'Thanh Xuân', '0918371361', 'Chuyển khoản', 10, 1),
(71, 'Thanh Xuân', '0918371361', 'Chuyển khoản', 10, 1),
(72, 'Cầu Giấy', '0918371361', 'Chuyển khoản', 10, 1),
(73, 'Thanh Xuân', '0918371361', 'Chuyển khoản', 10, 1),
(74, 'Thanh Xuân', '0918371361', 'Chuyển khoản', 10, 1),
(75, 'Thanh Xuân', '0918371361', 'Chuyển khoản', 10, 1),
(76, 'Hà Tây', '0918371361', 'Chuyển khoản', 10, 1),
(77, 'Cầu Giấy', '0918371361', 'Chuyển khoản', 10, 1),
(78, 'Hà Nội', '0918371361', 'Chuyển khoản', 10, 1),
(79, 'Hà Nội', '0918371361', 'Thanh toán tiền mặt khi nhận hàng', 10, 1),
(80, 'Hà Nội', '0918371361', 'Chuyển khoản', 10, 1),
(81, 'Hà Nội', '0918371361', 'Chuyển khoản', 10, 1),
(82, 'Hà Nội', '0918371361', 'Chuyển khoản', 10, 1),
(83, 'Hà Nội', '0918371361', 'Chuyển khoản', 10, 1),
(84, 'Hà Nội', '0918371361', 'Chuyển khoản', 10, 1),
(85, 'Hà Tây', '0918371361', 'Chuyển khoản', 10, 1),
(86, 'Cầu Giấy', '0918371361', 'Chuyển khoản', 10, 1),
(87, 'Cầu Giấy', '0918371361', 'Chuyển khoản', 10, 1),
(88, 'Hà Nội', '0987654321', 'Chuyển khoản', 19, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giamgia`
--

CREATE TABLE `giamgia` (
  `idgiamgia` int(11) NOT NULL,
  `magiamgia` varchar(255) NOT NULL,
  `giamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giamgia`
--

INSERT INTO `giamgia` (`idgiamgia`, `magiamgia`, `giamgia`) VALUES
(1, 'ph123$#', 10),
(2, 'ph123$#r', 12),
(3, 'ph123$#%', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `idgiohang` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `hinhanhspct` varchar(255) NOT NULL,
  `giasp` float NOT NULL,
  `slgiohang` int(11) NOT NULL,
  `tongtien` float NOT NULL,
  `idchitietsizesp` int(11) NOT NULL,
  `idspct` int(11) NOT NULL,
  `idkh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`idgiohang`, `tensp`, `hinhanhspct`, `giasp`, `slgiohang`, `tongtien`, `idchitietsizesp`, `idspct`, `idkh`) VALUES
(166, 'Nhẫn Vàng ', 'upload_img/1700311338LPW0040ARM-YG06A-hover.jpg', 12000000, 1, 12000000, 1, 24, 10),
(167, 'Vòng Kim Cương Huna', 'upload_img/1700311235KC_vongtay02.1.jpg', 78000000, 6, 468000000, 4, 23, 10),
(169, 'Bông tai vàng họa tiết đá hồng', 'upload_img/1701708511Vang_bongtai036.jpg', 3400000, 1, 3400000, 1, 35, 19);

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
  `tentk` varchar(20) NOT NULL,
  `hinhanhkh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `tenkh`, `email`, `sodienthoai`, `diachi`, `matkhau`, `ngaysinh`, `tentk`, `hinhanhkh`) VALUES
(1, 'Nguyễn Văn A', '', '', '', '12345', '2002-11-12', 'anv', ''),
(2, 'Nguyễn Văn B', '', '', '', '', '2003-11-12', '', ''),
(4, 'trang', 'dungncph44249@fpt.edu.vn', '1223', 'Cầu Giấy', 'trang123', '0000-00-00', '', 'admin/upload_img/1700038938a2.jpg'),
(10, 'nguyễn công hiếu', 'trangncph44249@fpt.edu.vn', '0918371361', '', '12345', '0000-00-00', '', 'admin/upload_img/1701657656logogame.png'),
(14, 'nguyễn công an', 'anncph44249@fpt.edu.vn', '0928762535', 'số nhà 108', 'an123', '0000-00-00', '', 'admin/upload_img/1700646229ảnh đz.jpg'),
(19, 'Minh Xinh', 'nguyetntmph44242@fpt.edu.vn', '0987654321', 'Số 2, Trịnh Văn Bô', '12345678', '2004-06-05', '', 'admin/upload_img/1701710694anh123.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id_nv` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `vaitro` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `hinhanhnv` varchar(255) NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `luong` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id_nv`, `hoten`, `tendangnhap`, `email`, `sdt`, `diachi`, `vaitro`, `matkhau`, `role`, `hinhanhnv`, `ngaysinh`, `luong`) VALUES
(1, 'Nguyễn Thi Minh Nguyệt', 'nguyetntm', 'nguyetntm@fpt.edu.vn', '', '', '', 'ceo1234', 2, '', NULL, 0),
(2, 'Nguyễn công trang', 'trangnc', '', '', '', 'nhân viên', 'nv1234', 1, '', NULL, 0),
(5, 'trang1', 'trangnc', 'trangncph44249@fpt.edu.vn', '0977600724', 'hà nội', 'nhân viên', '12', 0, 'upload_img/8511avatar_nguyet.jpg', '2023-11-01', 123),
(7, 'Nguyễn Tiến Dũng', 'dungnt', 'dung', '0345196423', 'Hà Nam', 'Nhân viên', '', 0, 'upload_img/6522avatar_nguyet.jpg ', '2004-08-11', 12000000);

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
(14, 12, 23709000, 'Nhẫn vàng sang trọng là tác phẩm nghệ thuật tinh xảo, là sự kết hợp hoàn hảo giữa nghệ thuật và đẳng cấp. Vòng tròn mảnh mai được làm từ vàng 18K, lấp lánh trong ánh sáng như tia nắng mặt trời. Viền nhẫn được chạm khắc tỉ mỉ với họa tiết tinh tế, tạo', 'Nhẫn Vàng Trơn', 'upload_img/1700277277DWR0037R-D01200048-thumbnail.jpg', 1),
(15, 12, 123457000, '', 'Vòng Vàng ý', 'upload_img/1700279405vongtayvang1.jpg', 2),
(16, 100, 4000000, 'Vòng chân vàng 18K với 70 viên đá quý tinh tế là tác phẩm nghệ thuật vô cùng sang trọng. Dây vòng chân mảnh mai, làm từ vàng 18 carat, nổi bật với ánh kim vàng quý phái. Mỗi viên đá quý, từ những viên nhỏ đến những viên lớn, được chọn lựa và đặt kỹ l', 'Vòng chân nữ vàng hồng ', 'upload_img/1701708907svongchan1.png', 3),
(19, 100, 4000000, 'Bông Tai vàng 24k của Hải Hồng được chế tác bởi những nghệ nhân lành nghề nhất, trải qua nhiều  bước gồm nhiều thao tác thủ công. Đây sẽ là sự lựa chọn tốt nhất cho bộ sưu tập trang sức của bạn....', 'Bông Tai Vàng', 'upload_img/1700278809DMP0140AEW-RG01A-thumbnail.jpg', 21),
(20, 122, 21000000, 'Một chiếc nhẫn đơn giản với đường viền trơn. Viên chủ và chiếc nhẫn kết hợp tạo thành bông hoa ở giữa đang nở rộ như tình yêu của bạn.', 'Nhẫn kim cương cầu hôn', 'upload_img/1700279047DWR0099ARW-WG01A-hover.jpg', 22),
(21, 32, 18000000, 'Sự kết hợp hài hòa giữa ngọc trai biển South Sea màu vàng kim tự nhiên và kim cương đã tạo nên một thiết kế sang trọng, tinh tế, tôn vinh vẻ đẹp kiêu sa, quý phái của chủ nhân.', 'Nhẫn Ngọc Trai Viha', 'upload_img/1700279550nhanngoctrai1.jpg', 23),
(22, 56, 18000000, 'Vòng kim cương nổi bật với thiết kế đột phá, vẫn bám sát ôm vào cổ tay với kiểu cách độc đáo. Lấy ý tưởng và cảm hứng từ vành đai sao thổ, mang vẻ đẹp tuyệt vời của vũ trụ. Một chiếc vòng mang sắc trắng lấp lánh phản chiếu ánh sáng từ nhiều viên kim ', 'Vòng Kim Cương', 'upload_img/1700311174KC_vongtay01.1.jpg', 24),
(23, 6, 78000000, 'Với nhiều viên kim cương dáng tròn size nhỏ trải dọc theo chiều dài của chiếc vòng kim cương. Điểm xuyến của chiếc vòng là các viên kim cương hình chữ nhật xếp tầng được sắp xếp thành hình chữ thập. Xung quanh là những viên kim cương dáng tròn bao qu', 'Vòng Kim Cương Huna', 'upload_img/1700311235KC_vongtay02.1.jpg', 24),
(24, 188, 12000000, 'Mẫu nhẫn vàng 14k kết hợp với ngọc trai Southsea vàng với vẻ đẹp đơn giản, tinh tế do Marian Pearls chế tác. Hãy liên hệ ngay với chúng tôi để sở hữu ngay mẫu nhẫn tuyệt vời này với mức giá vô cùng hấp dẫn nhé!', 'Nhẫn Vàng ', 'upload_img/1700311338LPW0040ARM-YG06A-hover.jpg', 1),
(25, 177, 1688890, 'Trong số các loại trang sức, nhẫn luôn được đánh giá là một trong những vật phẩm thiêng liêng nhất với con người bởi nó luôn mang những ý nghĩa đặc biệt trong từng trường hợp khác nhau. Từ đó, những mẫu nhẫn Nam được cho ra đời để mang những ý nghĩa ', 'Nhẫn Vàng 18K', 'upload_img/1700311499nhanvang1.jpg', 1),
(26, 120, 8000000, 'Nhẫn vàng sang trọng là tác phẩm nghệ thuật tinh xảo, là sự kết hợp hoàn hảo giữa nghệ thuật và đẳng cấp. Vòng tròn mảnh mai được làm từ vàng 18K, lấp lánh trong ánh sáng như tia nắng mặt trời. Viền nhẫn được chạm khắc tỉ mỉ với họa tiết tinh tế, tạo', 'Nhẫn vàng đính đá 16K', 'upload_img/1701707477VANG_nhan.01.1.jpg', 1),
(27, 120, 9000000, 'Nhẫn vàng sang trọng là tác phẩm nghệ thuật tinh xảo, là sự kết hợp hoàn hảo giữa nghệ thuật và đẳng cấp. Vòng tròn mảnh mai được làm từ vàng 18K, lấp lánh trong ánh sáng như tia nắng mặt trời. Viền nhẫn được chạm khắc tỉ mỉ với họa tiết tinh tế, tạo', 'Nhẫn vàng họa tiết sang trọng', 'upload_img/1701707536vang_nhan10.jpg', 1),
(28, 40, 12000000, 'Nhẫn vàng sang trọng là tác phẩm nghệ thuật tinh xảo, là sự kết hợp hoàn hảo giữa nghệ thuật và đẳng cấp. Vòng tròn mảnh mai được làm từ vàng 18K, lấp lánh trong ánh sáng như tia nắng mặt trời. Viền nhẫn được chạm khắc tỉ mỉ với họa tiết tinh tế, tạo', 'Nhẫn vàng hồng xoắn kết hợp bạc ', 'upload_img/1701707591Vang_nhan032.jpg', 1),
(29, 2, 190000000, 'Nhẫn vàng sang trọng kết hợp với viên ngọc trai trắng tinh khôi, tạo nên một tác phẩm nghệ thuật đẳng cấp và quyến rũ. Bức minh chứa đựng sự hoàn hảo trong sự kết hợp giữa vàng 18K và ngọc trai, tạo nên vẻ sang trọng, lôi cuốn và độc đáo. Ngọc trai l', 'Vẫn vàng hồng hoa cúc gắn ngọc trai bản giới hạn', 'upload_img/1701707661NT_nhan0112.jpg', 1),
(30, 120, 10000000, 'Nhẫn vàng nam là biểu tượng của sự lịch lãm và mạnh mẽ. Được chế tác từ vàng 18K, chiếc nhẫn mang đến sự sang trọng và đẳng cấp. Với kiểu dáng đơn giản và nam tính, bề mặt nhẫn có thể là một lớp phủ nhẹ hoặc có các đường chạm nhẹ, tạo điểm nhấn tinh ', 'Nhẫn vàng đá mặt vuông', 'upload_img/1701707866kc_nhannam023.jpg', 25),
(31, 20, 7100000, 'Nhẫn vàng nam là biểu tượng của sự lịch lãm và mạnh mẽ. Được chế tác từ vàng 18K, chiếc nhẫn mang đến sự sang trọng và đẳng cấp. Với kiểu dáng đơn giản và nam tính, bề mặt nhẫn có thể là một lớp phủ nhẹ hoặc có các đường chạm nhẹ, tạo điểm nhấn tinh ', 'Nhẫn vàng kết đá vuông ', 'upload_img/1701707951z4910221385043_892c5684767b554ff2e8f113363983a4.jpg', 25),
(32, 20, 6000000, 'Nhẫn vàng nam là biểu tượng của sự lịch lãm và mạnh mẽ. Được chế tác từ vàng 18K, chiếc nhẫn mang đến sự sang trọng và đẳng cấp. Với kiểu dáng đơn giản và nam tính, bề mặt nhẫn có thể là một lớp phủ nhẹ hoặc có các đường chạm nhẹ, tạo điểm nhấn tinh ', 'Nhẫn vàng họa tiết sọc', 'upload_img/1701708022Vang_nhan051.jpg', 25),
(33, 30, 9800000, 'Nhẫn vàng nam là biểu tượng của sự lịch lãm và mạnh mẽ. Được chế tác từ vàng 18K, chiếc nhẫn mang đến sự sang trọng và đẳng cấp. Với kiểu dáng đơn giản và nam tính, bề mặt nhẫn có thể là một lớp phủ nhẹ hoặc có các đường chạm nhẹ, tạo điểm nhấn tinh ', 'Nhẫn vàng nam 18K', 'upload_img/1701708089kc_nhannam025.jpg', 25),
(34, 200, 4500000, 'Nhẫn vàng nam là biểu tượng của sự lịch lãm và mạnh mẽ. Được chế tác từ vàng 18K, chiếc nhẫn mang đến sự sang trọng và đẳng cấp. Với kiểu dáng đơn giản và nam tính, bề mặt nhẫn có thể là một lớp phủ nhẹ hoặc có các đường chạm nhẹ, tạo điểm nhấn tinh ', 'Nhẫn vàng 16K nam', 'upload_img/1701708145DWR0037R-D01200048-thumbnail-hover.jpg', 25),
(35, 34, 3400000, 'Bông tai vàng sang trọng là tác phẩm nghệ thuật đẳng cấp, tôn lên vẻ đẹp quý phái và quyến rũ. Được chế tác từ vàng 18K, chiếc bông tai tỏa sáng trong ánh đèn như những tia nắng cuối cùng của ngày. Thiết kế tinh tế và phức tạp, với các chi tiết chạm ', 'Bông tai vàng họa tiết đá hồng', 'upload_img/1701708511Vang_bongtai036.jpg', 26);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `hinhanh` text NOT NULL,
  `luotxem` int(11) NOT NULL,
  `dacbiet` int(50) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `id_gt` int(11) NOT NULL,
  `id_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `tensp`, `hinhanh`, `luotxem`, `dacbiet`, `id_dm`, `id_gt`, `id_size`) VALUES
(1, 'Nhẫn Vàng', 'upload_img/1700313378DWR0037R-D01200048-thumbnail-hover.jpg', 124, 10, 1, 3, 1),
(2, 'Vòng Vàng', 'upload_img/1700313427VANG_vongco01.2.jpg', 120, 10, 1, 3, 2),
(3, 'Vòng Chân Kim Cương', 'upload_img/1700313499vongchankimcuong1.jfif', 140, 0, 1, 2, 3),
(21, 'Bông tai vàng', 'upload_img/1699866999CZ_PC.jpg', 120, 10, 1, 2, 1),
(22, 'Nhẫn kim cương', 'upload_img/1700041738DFH0109BRW-WG01A-model-hover.jfif', 90, 10, 2, 3, 1),
(23, 'Nhẫn Ngọc Trai', 'upload_img/1700313556nhanngoctrai1.jpg', 12, 15, 5, 3, 1),
(24, 'Vòng Kim Cương', 'upload_img/1700311103KC_vongtay01.1.jpg', 121, 10, 2, 3, 2),
(25, 'Nhẫn vàng nam', 'upload_img/1701707778nhanvang7.jpg', 20000, 0, 1, 1, 1),
(26, 'Bông tai vàng', 'upload_img/1701708426NT_bongtai012 (1).jpg', 1203, 0, 1, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id_size` int(11) NOT NULL,
  `tensptheosize` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id_size`, `tensptheosize`) VALUES
(1, 'size theo nhẫn '),
(2, 'size theo vòng tay '),
(3, 'size theo lắc chân ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tientrinh`
--

CREATE TABLE `tientrinh` (
  `idtientrinh` int(11) NOT NULL,
  `tentientrinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tientrinh`
--

INSERT INTO `tientrinh` (`idtientrinh`, `tentientrinh`) VALUES
(1, 'Chờ xử lý'),
(2, 'Đang giao'),
(3, 'Đã nhận hàng');

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
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_chitietdh`),
  ADD KEY `iddh` (`iddh`),
  ADD KEY `chitietdonhang_ibfk_2` (`idspct`),
  ADD KEY `idmagiamgia` (`idmagiamgia`),
  ADD KEY `idchitietsize` (`idchitietsize`);

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
  ADD KEY `idkh` (`idkh`),
  ADD KEY `idtientrinh` (`idtientrinh`);

--
-- Chỉ mục cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  ADD PRIMARY KEY (`idgiamgia`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idgiohang`),
  ADD KEY `idspct` (`idspct`),
  ADD KEY `idchitietsizesp` (`idchitietsizesp`),
  ADD KEY `idkh` (`idkh`);

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
  ADD PRIMARY KEY (`id_nv`);

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
  ADD KEY `id_gt` (`id_gt`),
  ADD KEY `id_size` (`id_size`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Chỉ mục cho bảng `tientrinh`
--
ALTER TABLE `tientrinh`
  ADD PRIMARY KEY (`idtientrinh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id_chitietdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `chitietsize`
--
ALTER TABLE `chitietsize`
  MODIFY `id_chitietsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  MODIFY `idgiamgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idgiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id_nv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanphamct`
--
ALTER TABLE `sanphamct`
  MODIFY `id_spct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tientrinh`
--
ALTER TABLE `tientrinh`
  MODIFY `idtientrinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `chitietdonhang_ibfk_3` FOREIGN KEY (`idmagiamgia`) REFERENCES `giamgia` (`idgiamgia`),
  ADD CONSTRAINT `chitietdonhang_ibfk_4` FOREIGN KEY (`idchitietsize`) REFERENCES `chitietsize` (`id_chitietsize`);

--
-- Các ràng buộc cho bảng `chitietsize`
--
ALTER TABLE `chitietsize`
  ADD CONSTRAINT `chitietsize_ibfk_1` FOREIGN KEY (`idsize`) REFERENCES `size` (`id_size`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`id_kh`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`idtientrinh`) REFERENCES `tientrinh` (`idtientrinh`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`idspct`) REFERENCES `sanphamct` (`id_spct`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`idchitietsizesp`) REFERENCES `chitietsize` (`id_chitietsize`),
  ADD CONSTRAINT `giohang_ibfk_3` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`id_kh`);

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
  ADD CONSTRAINT `san_pham_ibfk_2` FOREIGN KEY (`id_gt`) REFERENCES `gioitinh` (`id_gt`),
  ADD CONSTRAINT `san_pham_ibfk_3` FOREIGN KEY (`id_size`) REFERENCES `size` (`id_size`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
