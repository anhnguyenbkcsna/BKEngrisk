-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2022 lúc 07:53 AM
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

DROP TABLE IF EXISTS `bangcap`;
CREATE TABLE IF NOT EXISTS `bangcap` (
  `BangCap` varchar(255) NOT NULL,
  `MaNV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chinhanh`
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

DROP TABLE IF EXISTS `chungchi`;
CREATE TABLE IF NOT EXISTS `chungchi` (
  `NoiDung` varchar(255) NOT NULL,
  `MaCC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuongtrinhhoc`
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
-- Cấu trúc bảng cho bảng `cn_cth`
--

DROP TABLE IF EXISTS `cn_cth`;
CREATE TABLE IF NOT EXISTS `cn_cth` (
  `chinhanhMaCN` varchar(255) NOT NULL,
  `MaCT` varchar(255) NOT NULL,
  PRIMARY KEY (`chinhanhMaCN`,`MaCT`),
  KEY `MaCT` (`MaCT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cn_nv`
--

DROP TABLE IF EXISTS `cn_nv`;
CREATE TABLE IF NOT EXISTS `cn_nv` (
  `chinhanhMaCN` varchar(255) NOT NULL,
  `MaNV` varchar(255) NOT NULL,
  PRIMARY KEY (`chinhanhMaCN`,`MaNV`),
  KEY `cn_nv_ibfk_1` (`MaNV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congtac_nv`
--

DROP TABLE IF EXISTS `congtac_nv`;
CREATE TABLE IF NOT EXISTS `congtac_nv` (
  `MaNV` varchar(255) NOT NULL,
  `MaCN` varchar(255) NOT NULL,
  PRIMARY KEY (`MaNV`,`MaCN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cth_kh`
--

DROP TABLE IF EXISTS `cth_kh`;
CREATE TABLE IF NOT EXISTS `cth_kh` (
  `MaCT` varchar(255) NOT NULL,
  `MaKH` varchar(255) NOT NULL,
  PRIMARY KEY (`MaCT`,`MaKH`),
  KEY `cth_kh_ibfk_2` (`MaKH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
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

DROP TABLE IF EXISTS `giangday`;
CREATE TABLE IF NOT EXISTS `giangday` (
  `MaLH` varchar(255) NOT NULL,
  `MaNV` varchar(255) NOT NULL,
  PRIMARY KEY (`MaLH`,`MaNV`),
  KEY `giangday_ibfk_1` (`MaNV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaotrinh`
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

DROP TABLE IF EXISTS `ketquahoctap`;
CREATE TABLE IF NOT EXISTS `ketquahoctap` (
  `Diem` varchar(255) NOT NULL,
  `NgayCapNhat` varchar(255) NOT NULL,
  `MaHV` varchar(255) NOT NULL,
  PRIMARY KEY (`MaHV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
--

DROP TABLE IF EXISTS `khoahoc`;
CREATE TABLE IF NOT EXISTS `khoahoc` (
  `MaKH` varchar(255) NOT NULL,
  `SiSo` int(11) NOT NULL,
  `MaCN` varchar(255) NOT NULL,
  PRIMARY KEY (`MaKH`,`MaCN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
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
-- Cấu trúc bảng cho bảng `kh_lh`
--

DROP TABLE IF EXISTS `kh_lh`;
CREATE TABLE IF NOT EXISTS `kh_lh` (
  `MaKH` varchar(255) NOT NULL,
  `MaLH` varchar(255) NOT NULL,
  PRIMARY KEY (`MaKH`,`MaLH`),
  KEY `kh_lh_ibfk_2` (`MaLH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

DROP TABLE IF EXISTS `lophoc`;
CREATE TABLE IF NOT EXISTS `lophoc` (
  `MaLH` varchar(255) NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  PRIMARY KEY (`MaLH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muctieucth`
--

DROP TABLE IF EXISTS `muctieucth`;
CREATE TABLE IF NOT EXISTS `muctieucth` (
  `MucTieu` varchar(255) NOT NULL,
  `MaCT` varchar(255) NOT NULL,
  PRIMARY KEY (`MaCT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
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
-- Cấu trúc bảng cho bảng `sudung`
--

DROP TABLE IF EXISTS `sudung`;
CREATE TABLE IF NOT EXISTS `sudung` (
  `MaGT` varchar(255) NOT NULL,
  `MaCT` varchar(255) NOT NULL,
  PRIMARY KEY (`MaGT`,`MaCT`),
  KEY `sudung_ibfk_1` (`MaCT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia_gt`
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
-- Các ràng buộc cho bảng `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  ADD CONSTRAINT `chuongtrinhhoc_ibfk_1` FOREIGN KEY (`MaCT`) REFERENCES `muctieucth` (`MaCT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `cn_cth`
--
ALTER TABLE `cn_cth`
  ADD CONSTRAINT `cn_cth_ibfk_1` FOREIGN KEY (`MaCT`) REFERENCES `chuongtrinhhoc` (`MaCT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cn_cth_ibfk_2` FOREIGN KEY (`chinhanhMaCN`) REFERENCES `chinhanh` (`MaCN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `cn_nv`
--
ALTER TABLE `cn_nv`
  ADD CONSTRAINT `cn_nv_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cn_nv_ibfk_2` FOREIGN KEY (`chinhanhMaCN`) REFERENCES `chinhanh` (`MaCN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `cth_kh`
--
ALTER TABLE `cth_kh`
  ADD CONSTRAINT `cth_kh_ibfk_1` FOREIGN KEY (`MaCT`) REFERENCES `chuongtrinhhoc` (`MaCT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cth_kh_ibfk_2` FOREIGN KEY (`MaKH`) REFERENCES `khoahoc` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giangday`
--
ALTER TABLE `giangday`
  ADD CONSTRAINT `giangday_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `giaovien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giangday_ibfk_2` FOREIGN KEY (`MaLH`) REFERENCES `lophoc` (`MaLH`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Các ràng buộc cho bảng `ketquahoctap`
--
ALTER TABLE `ketquahoctap`
  ADD CONSTRAINT `ketquahoctap_ibfk_1` FOREIGN KEY (`MaHV`) REFERENCES `hocvien` (`MaHV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `kh_lh`
--
ALTER TABLE `kh_lh`
  ADD CONSTRAINT `kh_lh_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khoahoc` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kh_lh_ibfk_2` FOREIGN KEY (`MaLH`) REFERENCES `lophoc` (`MaLH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sudung`
--
ALTER TABLE `sudung`
  ADD CONSTRAINT `sudung_ibfk_1` FOREIGN KEY (`MaCT`) REFERENCES `chuongtrinhhoc` (`MaCT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sudung_ibfk_2` FOREIGN KEY (`MaGT`) REFERENCES `giaotrinh` (`MaGT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tacgia_gt`
--
ALTER TABLE `tacgia_gt`
  ADD CONSTRAINT `tacgia_gt_ibfk_1` FOREIGN KEY (`MaGT`) REFERENCES `giaotrinh` (`MaGT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `trinhdo`
--
ALTER TABLE `trinhdo`
  ADD CONSTRAINT `trinhdo_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
