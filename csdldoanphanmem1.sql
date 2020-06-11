-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2019 lúc 12:55 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopsakura`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdh`
--

CREATE TABLE `chitietdh` (
  `id` int(10) NOT NULL,
  `MaDH` int(10) NOT NULL,
  `MaSP` varchar(10) NOT NULL,
  `SoLuong` int(100) NOT NULL,
  `DonGia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` varchar(10) NOT NULL,
  `TenDM` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
('DM01', 'Sản Phẩm Dưỡng Da'),
('DM02', 'Sản Phẩm Chăm Sóc Body'),
('DM03', 'Sản Phẩm Chăm Sóc Tóc'),
('DM04', 'Sản Phẩm Trang điểm'),
('DM05', 'Thực Phẩm Chức Năng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` int(10) NOT NULL,
  `idTK` varchar(10) NOT NULL,
  `MaTTDH` varchar(10) NOT NULL,
  `MaPT` varchar(10) NOT NULL,
  `TenNguoiNhan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(12) NOT NULL,
  `NgayDat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `TongTien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanviengiaohang`
--

CREATE TABLE `nhanviengiaohang` (
  `ID` varchar(10) NOT NULL,
  `MaDH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MAPQ` varchar(10) NOT NULL,
  `Quyen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`MAPQ`, `Quyen`) VALUES
('PQ01', 'admin'),
('PQ02', 'KhachHang'),
('PQ03', 'NhanVienBanHang'),
('PQ04', 'NhanVienKho'),
('PQ05', 'NhanVienGiaoHang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `MaPT` varchar(10) NOT NULL,
  `TenPhuongThuc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phuongthucthanhtoan`
--

INSERT INTO `phuongthucthanhtoan` (`MaPT`, `TenPhuongThuc`) VALUES
('PT01', 'Thanh Toán Trực Tiếp'),
('PT02', 'Thanh Toán Chuyển Khoản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(10) NOT NULL,
  `TenSP` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaDM` varchar(10) NOT NULL,
  `DonGia` varchar(255) NOT NULL,
  `SoLuongCon` int(100) NOT NULL,
  `HinhAnh` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaDM`, `DonGia`, `SoLuongCon`, `HinhAnh`) VALUES
('SP01', 'Tinh Chất Trị Mâm Melano CC', 'DM01', '280000', 20, 'tinh-chat-melano-cc-mo-tham-nam-tan-nhang-20mlk_img_220x220_0dff4c_fit_center.jpg'),
('SP02', 'Son giữ màu lâu trôi Mac Đỏ', 'DM03', '350000', 30, 'son-li-giu-mau-mac-ruby-woo-mau-do-3g_1_img_300x300_b798dd_fit_center.jpg'),
('SP03', 'Son Lì Dạng kem màu đỏ tươi', 'DM03', '320000', 20, 'son-li-dang-kem-bourjois-mau-do-01-personne-ne-rouge-7-7ml_img_220x220_0dff4c_fit_center.jpg'),
('SP04', 'Nước tẩy trang Lapocepay', 'DM03', '300000', 10, 'nuoc-tay-trang-la-roche-posay-danh-cho-da-nhay-cam-400ml_img_300x300_b798dd_fit_center.jpg'),
('SP05', 'Nước hoa Kelvin Cleain', 'DM02', '1050000', 5, 'nuoc-hoa-calvin-klein-one-edt-200ml_img_220x220_0dff4c_fit_center.jpg'),
('SP06', 'Tinh chất chống nắng', 'DM05', '240000', 30, 'tinh-chat-chong-nang-hieu-chinh-sac-da-sunplay-50g_img_220x220_0dff4c_fit_center.jpg');
('SP07', 'Tinh chất dưỡng da', 'DM05', '240000', 30, 'tinh-chat-chong-nang-hieu-chinh-sac-da-sunplay-50g_img_220x220_0dff4c_fit_center.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `HoTen` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(12) NOT NULL,
  `MAPQ` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`ID`, `username`, `password`, `HoTen`, `DiaChi`, `SDT`, `MAPQ`) VALUES
('ID01', 'admin', '123456', 'Nguyễn Văn Tuấn', '5 Thanh Long, Thanh Bình, Hải Châu, Đà Nẵng', '0988777668', 'PQ01'),
('ID02', 'user01', '999999', 'Nguyễn Thị Ngọc', '76 Tôn Đản, Thành Phố Đà Nẵng', '0865438766', 'PQ02'),
('ID03', 'user02', '111111', 'Ngô Ngọc Hòa', '78 Trần Thánh Tông, Sơn Trà, Thành phố Đà Nẫng', '0245747939', 'PQ02'),
('ID04', 'NV01', '123456', 'Ngô Thi Thu Thủy', '87 Nguyễn Thái Học, Tam Kỳ, Quảng Nam', '0345789994', 'PQ03'),
('ID05', 'NV02', '987654', 'Trần Công Tuấn', '8 Trần Hưng Đạo, Sơn Trà , Đà Nẵng', '0958475839', 'PQ03'),
('ID06', 'NV03', '1234567', 'Thẹn Ngọc Trâm', '9 Cao Thắng, Thành phố Đà Nẵng ', '0985683023', 'PQ04'),
('ID07', 'NV04', '0000000', 'Mai Thị Tườnng Vy', 'Minh Trí, Việt Yên, Bắc Giang', '0359205028', 'PQ05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrangdonhang`
--

CREATE TABLE `tinhtrangdonhang` (
  `MaTTDH` varchar(10) NOT NULL,
  `TenTTDH` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tinhtrangdonhang`
--

INSERT INTO `tinhtrangdonhang` (`MaTTDH`, `TenTTDH`) VALUES
('TT01', 'Đã Tiếp Nhận Đơn Hàng'),
('TT02', 'Đã giao cho Shiper'),
('TT03', 'Giao Hàng thành công'),
('TT04', 'Đã Nhận tiền từ Shipper'),
('TT05', 'Đơn hàng bị hoàn trả');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaSP` (`MaSP`),
  ADD KEY `MaDH` (`MaDH`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `ID` (`idTK`),
  ADD KEY `MaPTTT` (`MaPT`),
  ADD KEY `MaTTDH` (`MaTTDH`);

--
-- Chỉ mục cho bảng `nhanviengiaohang`
--
ALTER TABLE `nhanviengiaohang`
  ADD KEY `ID` (`ID`),
  ADD KEY `MaDH` (`MaDH`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MAPQ`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`MaPT`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MAPQ` (`MAPQ`);

--
-- Chỉ mục cho bảng `tinhtrangdonhang`
--
ALTER TABLE `tinhtrangdonhang`
  ADD PRIMARY KEY (`MaTTDH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD CONSTRAINT `chitietdh_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitietdh_ibfk_3` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idTK`) REFERENCES `taikhoan` (`ID`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`MaPT`) REFERENCES `phuongthucthanhtoan` (`MaPT`),
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`MaTTDH`) REFERENCES `tinhtrangdonhang` (`MaTTDH`);

--
-- Các ràng buộc cho bảng `nhanviengiaohang`
--
ALTER TABLE `nhanviengiaohang`
  ADD CONSTRAINT `nhanviengiaohang_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `taikhoan` (`ID`),
  ADD CONSTRAINT `nhanviengiaohang_ibfk_2` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MAPQ`) REFERENCES `phanquyen` (`MAPQ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
