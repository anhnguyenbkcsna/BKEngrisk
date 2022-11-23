-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2022 lúc 06:03 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bk_engrisk`
--
CREATE DATABASE IF NOT EXISTS `bk_engrisk` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bk_engrisk`;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baikiemtra`
--

CREATE TABLE `baikiemtra` (
  `MaKT` varchar(255) NOT NULL,
  `MaLH` varchar(255) NOT NULL,
  `HinhThuc` varchar(255) NOT NULL,
  `ThoiLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangcap`
--

CREATE TABLE `bangcap` (
  `BangCap` varchar(255) NOT NULL,
  `MaNV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chinhanh`
--

CREATE TABLE `chinhanh` (
  `MaCN` varchar(255) NOT NULL,
  `Ten` varchar(255) DEFAULT NULL,
  `SoNha` varchar(255) DEFAULT NULL,
  `Duong` varchar(255) DEFAULT NULL,
  `QuanHuyen` varchar(255) DEFAULT NULL,
  `TinhTP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chungchi`
--

CREATE TABLE `chungchi` (
  `NoiDung` varchar(255) NOT NULL,
  `MaCC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuongtrinhhoc`
--

CREATE TABLE `chuongtrinhhoc` (
  `Ten` varchar(255) NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `HocPhi` varchar(255) NOT NULL,
  `MucTieu` varchar(255) NOT NULL,
  `MaCT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congtac_nv`
--

CREATE TABLE `congtac_nv` (
  `MaNV` varchar(255) NOT NULL,
  `MaCN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `NgayDangKy` datetime NOT NULL,
  `MaLH` varchar(255) NOT NULL,
  `MaHV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangday`
--

CREATE TABLE `giangday` (
  `MaKH` varchar(255) NOT NULL,
  `MaNV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaotrinh`
--

CREATE TABLE `giaotrinh` (
  `MaGT` varchar(255) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `NamXuatBan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `Kinhnghiem` varchar(255) NOT NULL,
  `MaNV` varchar(255) NOT NULL,
  `ThanhTich` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocbong`
--

CREATE TABLE `hocbong` (
  `MaHB` varchar(255) NOT NULL,
  `DieuKien` varchar(255) NOT NULL,
  `PhanThuong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphi`
--

CREATE TABLE `hocphi` (
  `MaHP` varchar(255) NOT NULL,
  `MaCT` varchar(255) NOT NULL,
  `MaHV` varchar(255) NOT NULL,
  `PhuongThuc` int(4) NOT NULL,
  `TinhTrangThanhToan` varchar(24) NOT NULL,
  `NgayBatDau` varchar(255) NOT NULL,
  `NgayThanhToan` varchar(255) NOT NULL,
  `GiaTien` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocvien`
--

CREATE TABLE `hocvien` (
  `MaHV` varchar(255) NOT NULL,
  `Sodienthoai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketquahoctap`
--

CREATE TABLE `ketquahoctap` (
  `Diem` varchar(255) NOT NULL,
  `NgayCapNhat` varchar(255) NOT NULL,
  `MaHV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` varchar(255) NOT NULL,
  `NgayBatDau` varchar(255) NOT NULL,
  `NgayKetThuc` varchar(255) NOT NULL,
  `Loai` int(2) NOT NULL,
  `SoLuong` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muctieucth`
--

CREATE TABLE `muctieucth` (
  `MucTieu` varchar(255) NOT NULL,
  `MaCT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(255) NOT NULL,
  `Sodienthoai` int(11) DEFAULT NULL,
  `Luong` int(12) DEFAULT NULL,
  `GioLamViec` enum('8','9','10','11','12') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia_gt`
--

CREATE TABLE `tacgia_gt` (
  `Tacgia` varchar(255) NOT NULL,
  `MaGT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` varchar(255) NOT NULL,
  `Ho` varchar(255) DEFAULT NULL,
  `Ten` varchar(255) DEFAULT NULL,
  `Gioitinh` enum('male','female') DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Namsinh` int(11) DEFAULT NULL,
  `Sonha` varchar(255) DEFAULT NULL,
  `Duong` varchar(255) DEFAULT NULL,
  `Quanhuyen` varchar(255) DEFAULT NULL,
  `Tinhtp` varchar(255) DEFAULT NULL,
  `Sodienthoai` int(11) DEFAULT NULL,
  `TenDangNhap` varchar(255) DEFAULT NULL,
  `MatKhau` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoikhoabieubh`
--

CREATE TABLE `thoikhoabieubh` (
  `Ngay` enum('2','3','4','5','6','7','8') NOT NULL,
  `GioBatDau` int(11) NOT NULL,
  `GioKetThuc` int(11) NOT NULL,
  `MaBH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoikhoabieukh`
--

CREATE TABLE `thoikhoabieukh` (
  `NgayBatDau` varchar(255) NOT NULL,
  `NgayKetThuc` varchar(255) NOT NULL,
  `MaKH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trinhdo`
--

CREATE TABLE `trinhdo` (
  `TrinhDo` varchar(255) NOT NULL,
  `ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`MaCN`);

--
-- Chỉ mục cho bảng `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  ADD PRIMARY KEY (`MaCT`);

--
-- Chỉ mục cho bảng `giaotrinh`
--
ALTER TABLE `giaotrinh`
  ADD UNIQUE KEY `MaGT` (`MaGT`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `hocbong`
--
ALTER TABLE `hocbong`
  ADD PRIMARY KEY (`MaHB`);

--
-- Chỉ mục cho bảng `hocphi`
--
ALTER TABLE `hocphi`
  ADD PRIMARY KEY (`MaHP`,`MaCT`,`MaHV`);

--
-- Chỉ mục cho bảng `hocvien`
--
ALTER TABLE `hocvien`
  ADD PRIMARY KEY (`MaHV`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `tacgia_gt`
--
ALTER TABLE `tacgia_gt`
  ADD PRIMARY KEY (`MaGT`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hocvien`
--
ALTER TABLE `hocvien`
  ADD CONSTRAINT `hocvien_ibfk_1` FOREIGN KEY (`MaHV`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
