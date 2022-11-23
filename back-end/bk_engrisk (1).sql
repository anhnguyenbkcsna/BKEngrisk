-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2022 lúc 06:18 AM
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
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `baikiemtra`;
CREATE TABLE IF NOT EXISTS `baikiemtra` (
  `MaKT` varchar(255) NOT NULL,
  `MaLH` varchar(255) NOT NULL,
  `HinhThuc` varchar(255) NOT NULL,
  `ThoiLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangcap`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `bangcap`;
CREATE TABLE IF NOT EXISTS `bangcap` (
  `BangCap` varchar(255) NOT NULL,
  `MaNV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chinhanh`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `chinhanh`;
CREATE TABLE IF NOT EXISTS `chinhanh` (
  `MaCN` varchar(255) NOT NULL,
  `Ten` varchar(255) DEFAULT NULL,
  `SoNha` varchar(255) DEFAULT NULL,
  `Duong` varchar(255) DEFAULT NULL,
  `QuanHuyen` varchar(255) DEFAULT NULL,
  `TinhTP` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`MaCN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chungchi`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `chungchi`;
CREATE TABLE IF NOT EXISTS `chungchi` (
  `NoiDung` varchar(255) NOT NULL,
  `MaCC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuongtrinhhoc`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `chuongtrinhhoc`;
CREATE TABLE IF NOT EXISTS `chuongtrinhhoc` (
  `Ten` varchar(255) NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `HocPhi` varchar(255) NOT NULL,
  `MucTieu` varchar(255) NOT NULL,
  `MaCT` varchar(255) NOT NULL,
  PRIMARY KEY (`MaCT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congtac_nv`
--
-- Tạo: Th10 23, 2022 lúc 05:13 AM
--

DROP TABLE IF EXISTS `congtac_nv`;
CREATE TABLE IF NOT EXISTS `congtac_nv` (
  `MaNV` varchar(255) NOT NULL,
  `MaCN` varchar(255) NOT NULL,
  PRIMARY KEY (`MaNV`,`MaCN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `dangky`;
CREATE TABLE IF NOT EXISTS `dangky` (
  `NgayDangKy` datetime NOT NULL,
  `MaLH` varchar(255) NOT NULL,
  `MaHV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangday`
--
-- Tạo: Th10 23, 2022 lúc 05:15 AM
--

DROP TABLE IF EXISTS `giangday`;
CREATE TABLE IF NOT EXISTS `giangday` (
  `MaKH` varchar(255) NOT NULL,
  `MaNV` varchar(255) NOT NULL,
  PRIMARY KEY (`MaKH`,`MaNV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaotrinh`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `giaotrinh`;
CREATE TABLE IF NOT EXISTS `giaotrinh` (
  `MaGT` varchar(255) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `NamXuatBan` int(11) DEFAULT NULL,
  UNIQUE KEY `MaGT` (`MaGT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `giaovien`;
CREATE TABLE IF NOT EXISTS `giaovien` (
  `Kinhnghiem` varchar(255) NOT NULL,
  `MaNV` varchar(255) NOT NULL,
  `ThanhTich` varchar(255) NOT NULL,
  PRIMARY KEY (`MaNV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocbong`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `hocbong`;
CREATE TABLE IF NOT EXISTS `hocbong` (
  `MaHB` varchar(255) NOT NULL,
  `DieuKien` varchar(255) NOT NULL,
  `PhanThuong` varchar(255) NOT NULL,
  PRIMARY KEY (`MaHB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphi`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `hocphi`;
CREATE TABLE IF NOT EXISTS `hocphi` (
  `MaHP` varchar(255) NOT NULL,
  `MaCT` varchar(255) NOT NULL,
  `MaHV` varchar(255) NOT NULL,
  `PhuongThuc` int(4) NOT NULL,
  `TinhTrangThanhToan` varchar(24) NOT NULL,
  `NgayBatDau` varchar(255) NOT NULL,
  `NgayThanhToan` varchar(255) NOT NULL,
  `GiaTien` int(9) NOT NULL,
  PRIMARY KEY (`MaHP`,`MaCT`,`MaHV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocvien`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `hocvien`;
CREATE TABLE IF NOT EXISTS `hocvien` (
  `MaHV` varchar(255) NOT NULL,
  `Sodienthoai` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaHV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketquahoctap`
--
-- Tạo: Th10 23, 2022 lúc 05:15 AM
--

DROP TABLE IF EXISTS `ketquahoctap`;
CREATE TABLE IF NOT EXISTS `ketquahoctap` (
  `Diem` varchar(255) NOT NULL,
  `NgayCapNhat` varchar(255) NOT NULL,
  `MaHV` varchar(255) NOT NULL,
  PRIMARY KEY (`MaHV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `khuyenmai`;
CREATE TABLE IF NOT EXISTS `khuyenmai` (
  `MaKM` varchar(255) NOT NULL,
  `NgayBatDau` varchar(255) NOT NULL,
  `NgayKetThuc` varchar(255) NOT NULL,
  `Loai` int(2) NOT NULL,
  `SoLuong` int(100) NOT NULL,
  PRIMARY KEY (`MaKM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muctieucth`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `muctieucth`;
CREATE TABLE IF NOT EXISTS `muctieucth` (
  `MucTieu` varchar(255) NOT NULL,
  `MaCT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `MaNV` varchar(255) NOT NULL,
  `Sodienthoai` int(11) DEFAULT NULL,
  `Luong` int(12) DEFAULT NULL,
  `GioLamViec` enum('8','9','10','11','12') DEFAULT NULL,
  PRIMARY KEY (`MaNV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia_gt`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `tacgia_gt`;
CREATE TABLE IF NOT EXISTS `tacgia_gt` (
  `Tacgia` varchar(255) NOT NULL,
  `MaGT` varchar(255) NOT NULL,
  PRIMARY KEY (`MaGT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
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
  `role` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoikhoabieubh`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `thoikhoabieubh`;
CREATE TABLE IF NOT EXISTS `thoikhoabieubh` (
  `Ngay` enum('2','3','4','5','6','7','8') NOT NULL,
  `GioBatDau` int(11) NOT NULL,
  `GioKetThuc` int(11) NOT NULL,
  `MaBH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoikhoabieukh`
--
-- Tạo: Th10 23, 2022 lúc 05:09 AM
--

DROP TABLE IF EXISTS `thoikhoabieukh`;
CREATE TABLE IF NOT EXISTS `thoikhoabieukh` (
  `NgayBatDau` varchar(255) NOT NULL,
  `NgayKetThuc` varchar(255) NOT NULL,
  `MaKH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trinhdo`
--
-- Tạo: Th10 23, 2022 lúc 05:16 AM
--

DROP TABLE IF EXISTS `trinhdo`;
CREATE TABLE IF NOT EXISTS `trinhdo` (
  `TrinhDo` varchar(255) NOT NULL,
  `ID` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giaotrinh`
--
ALTER TABLE `tacgia_gt`
  ADD CONSTRAINT `tacgia_ibfk_1` FOREIGN KEY (`MaGT`) REFERENCES `giaotrinh` (`MaGT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD CONSTRAINT `giaovien_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `trinhdo`
  ADD CONSTRAINT `trinhdo_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
