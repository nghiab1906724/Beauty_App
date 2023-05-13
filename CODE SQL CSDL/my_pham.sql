-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 12, 2023 lúc 09:38 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `my_pham`
--
CREATE DATABASE IF NOT EXISTS `my_pham` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `my_pham`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hd`
--

CREATE TABLE `chi_tiet_hd` (
  `maHD` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `stt` tinyint(4) NOT NULL,
  `barCode` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `giaGoc` int(11) NOT NULL,
  `phanTramDaGiam` tinyint(4) NOT NULL DEFAULT 0,
  `SLMua` tinyint(4) NOT NULL,
  `loHang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_hd`
--

INSERT INTO `chi_tiet_hd` (`maHD`, `sdt`, `stt`, `barCode`, `giaGoc`, `phanTramDaGiam`, `SLMua`, `loHang`) VALUES
('1680086565', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('1680092993', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('1680151401', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('1680152926', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('1680152975', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('1680154533', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('1680154704', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('1680155916', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('1680156149', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('1680156476', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('1680156629', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('1680157513', '0911971536', 1, '8935006539273', 185000, 0, 2, 'LH001'),
('1680881020', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('1682496009', '0859091199', 1, '6902395498919', 219000, 32, 1, 'LH002'),
('1682763230', '0859091199', 1, '6902395498919', 219000, 32, 1, 'LH002'),
('1682763756', '0859091199', 1, '8935006539754', 185000, 0, 2, 'LH003'),
('1682765536', '0859091199', 1, '8935006539273', 185000, 19, 1, 'LH001'),
('1682765672', '0859091199', 1, '8935006539273', 185000, 19, 1, 'LH001'),
('1682766072', '0859091199', 1, '8935006539273', 185000, 19, 1, 'LH001'),
('1683097757', '0859091199', 1, '8935006539273', 185000, 19, 1, 'LH001'),
('1683098154', '0911971536', 1, '6902395498919', 219000, 32, 1, 'LH002'),
('1683792662', '0859091199', 1, '8935006539273', 185000, 20, 1, 'LH001'),
('1683876680', '0911971536', 1, '6902395498919', 219000, 32, 1, 'LH002'),
('2', '0911971536', 1, '8935006539273', 185000, 0, 1, 'LH001'),
('2', '0911971536', 2, '8935006541672', 185000, 0, 1, NULL),
('3', '0911971536', 1, '8935006539754', 185000, 0, 2, 'LH003'),
('3', '0911971536', 2, '8935006542938', 185000, 0, 3, NULL),
('4', '0911971536', 1, '6928820030240', 219000, 0, 1, NULL),
('5', '0911971536', 1, '6928820030240', 219000, 30, 2, NULL),
('5', '0911971536', 2, '8935006539754', 185000, 0, 3, 'LH003'),
('6', '0911971536', 1, '6928820030240', 219000, 30, 2, NULL),
('6', '0911971536', 2, '8935006539754', 185000, 0, 3, 'LH003'),
('7', '0911971536', 1, '8935006539273', 185000, 0, 2, 'LH001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `maDM` tinyint(4) NOT NULL,
  `danhMuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sapXep` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`maDM`, `danhMuc`, `sapXep`) VALUES
(1, 'Làm sạch', 1),
(2, 'Dưỡng ẩm', 2),
(3, 'Chống nắng', 3),
(4, 'Mặt nạ', 4),
(5, 'Tẩy tế bào chết', 5),
(6, 'Các sản phẩm khác', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_sp`
--

CREATE TABLE `dong_sp` (
  `maDong` smallint(6) NOT NULL,
  `tenDong` text COLLATE utf8_unicode_ci NOT NULL,
  `hsd` smallint(6) NOT NULL,
  `maLoai` smallint(6) NOT NULL,
  `maTH` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dong_sp`
--

INSERT INTO `dong_sp` (`maDong`, `tenDong`, `hsd`, `maLoai`, `maTH`) VALUES
(1, 'Tinh Chất Chống Nắng Sunplay Hiệu Chỉnh Sắc Da', 1095, 14, 7),
(2, 'Nước Tẩy Trang L\'Oreal', 1095, 2, 8),
(3, 'Kem Dưỡng Senka Cấp Ẩm Chuyên Sâu Deep Moist Cream', 730, 8, 22),
(4, 'Gel Rửa Mặt Cosrx Tràm Trà, 0.5% BHA Có Độ pH Thấp', 730, 1, 26),
(5, 'Gel Rửa Mặt La Roche-Posay Dành Cho Da Dầu, Nhạy Cảm', 730, 1, 11),
(6, 'Sữa Rửa Mặt Simple Giúp Da Sạch Thoáng', 730, 1, 20),
(7, 'Nước Tẩy Trang Bioderma', 1095, 2, 16),
(8, 'Nước Tẩy Trang Senka Cấp Ẩm, Dưỡng Sáng Da', 1095, 2, 22),
(9, 'Kem Dưỡng Ẩm Neutrogena Cấp Nước ', 1095, 8, 13),
(10, 'Dung Dịch Tẩy Da Chết Paula’s Choice BHA 2%', 730, 23, 15),
(11, 'Kem Dưỡng La Roche-Posay Giảm Mụn, Ngừa Vết Thâm', 730, 24, 11),
(12, 'Xịt Khoáng La Roche-Posay', 1095, 25, 11),
(13, 'Sữa Chống Nắng Sunplay Skin Aqua', 1095, 15, 7),
(14, 'Nước Tẩy Trang La Roche-Posay', 1095, 2, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `sdt` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `barCode` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `soLuongSP` tinyint(4) NOT NULL,
  `chon` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang`
--

INSERT INTO `gio_hang` (`sdt`, `barCode`, `soLuongSP`, `chon`) VALUES
('0393201893', '6928820030240', 2, 1),
('0842381421', '8935006539273', 1, 1),
('0842381421', '8935006539754', 3, 0),
('0859091199', '6928820030240', 1, 0),
('0911971536', '3337872411991', 1, 0),
('0911971536', '4550516705198', 1, 0),
('0911971536', '8935006539273', 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `maHD` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `hoTenNhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdtNhan` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `dc` text COLLATE utf8_unicode_ci NOT NULL,
  `ngayTao` date NOT NULL DEFAULT current_timestamp(),
  `ngayGiao` date DEFAULT NULL,
  `tamTinh` int(11) NOT NULL DEFAULT 0,
  `phiVC` int(11) NOT NULL DEFAULT 25000,
  `trangThaiHD` tinyint(4) NOT NULL DEFAULT 1,
  `pThucTT` tinyint(4) NOT NULL DEFAULT 1,
  `trangThaiTT` tinyint(1) NOT NULL DEFAULT 0,
  `ghiChu` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`maHD`, `sdt`, `hoTenNhan`, `sdtNhan`, `dc`, `ngayTao`, `ngayGiao`, `tamTinh`, `phiVC`, `trangThaiHD`, `pThucTT`, `trangThaiTT`, `ghiChu`) VALUES
('1680086565', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-29', NULL, 185000, 25000, 4, 2, 1, NULL),
('1680092993', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-29', NULL, 629150, 25000, 1, 2, 0, NULL),
('1680151401', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-30', NULL, 360200, 25000, 1, 3, 0, NULL),
('1680152926', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-30', NULL, 185000, 25000, 1, 3, 0, NULL),
('1680152975', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-30', NULL, 185000, 25000, 1, 3, 0, NULL),
('1680154533', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-30', NULL, 185000, 25000, 1, 3, 1, NULL),
('1680154704', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-30', NULL, 185000, 25000, 1, 3, 1, NULL),
('1680155916', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-30', NULL, 185000, 25000, 1, 2, 1, NULL),
('1680156149', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-30', NULL, 185000, 25000, 1, 2, 1, NULL),
('1680156476', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-30', NULL, 185000, 25000, 1, 2, 0, NULL),
('1680156629', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-30', NULL, 185000, 25000, 1, 2, 0, NULL),
('1680157513', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-30', NULL, 370000, 25000, 1, 2, 1, NULL),
('1680881020', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-04-07', NULL, 185000, 25000, 2, 2, 1, NULL),
('1682496009', '0859091199', 'Lê Văn Trí', '0393277289', 'Chợ Ba Hồ, Xã Vĩnh Hòa Hưng Bắc, Huyện Gò Quao, Tỉnh Kiên Giang', '2023-04-26', NULL, 148920, 25000, 2, 1, 0, NULL),
('1682763230', '0859091199', 'Lê Văn Trí', '0393277289', 'Chợ Ba Hồ, Xã Vĩnh Hòa Hưng Bắc, Huyện Gò Quao, Tỉnh Kiên Giang', '2023-04-29', NULL, 148920, 25000, 1, 1, 0, NULL),
('1682763756', '0859091199', 'Lê Văn Trí', '0393277289', 'Chợ Ba Hồ, Xã Vĩnh Hòa Hưng Bắc, Huyện Gò Quao, Tỉnh Kiên Giang', '2023-04-29', NULL, 370000, 25000, 1, 2, 1, NULL),
('1682765536', '0859091199', 'Lê Văn Trí', '0393277289', 'Chợ Ba Hồ, Xã Vĩnh Hòa Hưng Bắc, Huyện Gò Quao, Tỉnh Kiên Giang', '2023-04-29', NULL, 149850, 25000, 1, 1, 0, NULL),
('1682765672', '0859091199', 'Lê Văn Trí', '0393277289', 'Chợ Ba Hồ, Xã Vĩnh Hòa Hưng Bắc, Huyện Gò Quao, Tỉnh Kiên Giang', '2023-04-29', NULL, 149850, 25000, 1, 1, 0, NULL),
('1682766072', '0859091199', 'Đặng Hữu Lộc', '0392123124', 'KTX A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-04-29', NULL, 149850, 25000, 1, 1, 0, NULL),
('1683097757', '0859091199', 'Đặng Hữu Lộc', '0392123124', 'KTX A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-05-03', NULL, 149850, 25000, 1, 1, 0, NULL),
('1683098154', '0911971536', 'Nguyễn Thành Luân', '0345854601', 'Chợ Bình Đại, Xã Thạnh Trị, Huyện Bình Đại, Tỉnh Bến Tre', '2023-05-03', NULL, 148920, 25000, 1, 2, 1, NULL),
('1683792662', '0859091199', 'Đặng Hữu Lộc', '0392123124', 'KTX A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-05-11', NULL, 148000, 25000, 2, 2, 1, NULL),
('1683876680', '0911971536', 'Nguyễn Thành Luân', '0345854601', 'Chợ Bình Đại, Xã Thạnh Trị, Huyện Bình Đại, Tỉnh Bến Tre', '2023-05-12', NULL, 148920, 25000, 1, 3, 1, NULL),
('2', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-24', NULL, 370000, 0, 4, 1, 1, NULL),
('3', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-25', NULL, 925000, 0, 1, 1, 0, NULL),
('4', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-28', NULL, 219000, 0, 1, 1, 0, NULL),
('5', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-28', NULL, 861600, 0, 1, 1, 0, NULL),
('6', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-28', NULL, 861600, 25000, 1, 1, 0, NULL),
('7', '0911971536', 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', '2023-03-28', NULL, 814150, 25000, 1, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_da`
--

CREATE TABLE `loai_da` (
  `ID` int(11) NOT NULL,
  `loaiDa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dacDiem` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `loiKhuyen` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_da`
--

INSERT INTO `loai_da` (`ID`, `loaiDa`, `dacDiem`, `loiKhuyen`) VALUES
(1, 'Da khô', 'Da khô là loại da dễ bị khô và thường cảm thấy căng và thô ráp tại một số vùng.\r\nKhi bị khô, da thường trở nên nhạy cảm; tuy nhiên, da nhạy cảm không phải lúc nào cũng liên quan đến tình trạng khô da.\r\nCác đường nhăn do khô da xuất hiện, dẫn đến sự lão hóa da sớm và hình thành các nếp nhăn.\r\nCác nguyên nhân bên ngoài gây khô da(tia UV, thời tiết khắc nghiệt như nóng, lạnh hoặc khô) đều làm tổn thương đến hàng rào lipid bảo vệ bề mặt da. Một khi hàng rào lipid bị phá vỡ, độ ẩm trên bề mặt da dễ dàng thoát ra ngoài và các chất giữ ẩm cũng dễ dàng bị mất đi. Khi các nhân tố giữ ẩm tự nhiên bị suy giảm, da không thể giữ được lượng nước cần thiết và trở nên khô hơn cho đến khi chúng được bổ sung, và khi hàng rào lipid được phục hồi.\r\nNgoài ra còn có các nguyên nhân bên trong như yếu tố di truyền, nội tiết tố, tuổi tác, chế độ ăn uống cũng có thể là nguyên nhân dẫn đến khô da.', 'Cần có phương pháp chăm sóc da toàn diện dành cho da mặt bị khô và rất khô bao gồm việc sử dụng sữa rửa mặt, kem dưỡng ẩm và kem chống nắng thích hợp. Các loại sữa rửa mặt nhiều nước có bổ sung các nhân tố giữ độ ẩm thích hợp sử dụng cho da khô đến rất khô, trong khi sữa rửa mặt nhiều dầu lý tưởng dùng chăm sóc cho da rất khô và khô nghiêm trọng, kể cả trường hợp bị Viêm da cơ địa. Bạn cần phải tránh dùng các loại xà phòng mạnh để không làm mất đi các lipid tự nhiên trong da gây khô da.\r\nChìa khóa của việc dưỡng ẩm cho da khô đến rất khô là bổ sung các nhân tố giữ ẩm tự nhiên giúp hút và giữ ẩm cho lớp sừng trên da, hoặc cho các lớp da phía trên. Điều này giúp ngăn chặn da bị khô, làm giảm cảm giác thô ráp trên da và làm da bớt căng.\r\nDùng các sản phẩm chăm sóc da không chứa hương liệu, phẩm màu và chất bảo quản paraben để tránh gây kích ứng.\r\nGiảm thời gian tiếp xúc với nước nóng bằng cách tắm nhanh hơn thay vì tắm lâu như thói quen.\r\nTránh các dòng không khí khô bằng cách hạn chế thời gian ở ngoài trời với thời tiết nóng và lạnh.'),
(2, 'Da thường', 'Da thường là loại da khỏe mạnh, có sự cân bằng tốt, không quá khô hoặc quá nhờn. Nếu như may mắn sở hữu da thường thì xin chúc mừng bạn đã sở hữu một làn da hoàn hảo. Nhưng làm thế nào để nhận biết được da của mình có phải là da thường hay thuộc các loại da khác? Theo như các chuyên gia da liễu, da thường là loại da ít có vấn đề nhất. Ví dụ như mụn, mẩn đỏ, nám, tàn nhang,..Khi sờ vào da thường bạn sẽ cảm nhận được nó rất sạch và mượt mà. Vùng chữ T (trán, cằm, mũi) ở da thường có thể có một ít dầu. Thế nhưng, độ ẩm và dầu trên da vẫn đảm bảo ở mức cân bằng.\r\nTính đàn hồi: làn da mịn màng, mang tính đàn hồi, căng mọng.\r\nĐộ nhạy cảm: Da thường khoẻ mạnh rất khoẻ, ít khi lên mụn. Làn da trông tràn đầy sức sống\r\nMàu sắc:Làn da khỏe mạnh cực kỳ hồng hào, tươi tắn\r\nĐộ ẩm: làn da thường đủ ẩm, da không bị xạm hay nhờn', 'Bụi bẩn là nguyên nhân khiến bít tắc lỗ chân lông gây mụn và viêm nhiễm. Vì thế, làn da nào cũng cần phải luôn được giữ sạch sẽ. Rửa mặt sạch sẽ là bước không thể thiếu khi chăm sóc da thường. Thành phần trong sữa rửa mặt sẽ giúp bạn loại bỏ bụi bẩn ngoài môi trường, bã nhờn trên da.\r\nChúng ta thường hay quên mất việc tẩy tế bào chết cho làn da. Đây là một sai lầm khi chăm sóc da mà rất nhiều người mắc phải. Tế bào chết cũng là một trong những tác nhân gây bít lỗ chân lông khiến da bị mụn. Việc thường xuyên tẩy da chết định kỳ còn giúp da bạn trở nên sáng hơn.\r\nĐừng nghĩ rằng da thường có độ ẩm cân bằng thì mình không cung cấp nữa. Bởi nhiều yếu tố tác động, thỉnh thoảng da sẽ mất đi độ ẩm nhưng cơ thể chưa kịp cung cấp. Nếu lúc này bạn không cấp ẩm cho da, làn da của bạn sẽ dễ bị khô. Bạn có thể cấp ẩm cho da bằng xịt khoáng hoặc các loại mặt nạ, serum sau đó khóa ẩm lại bằng kem dưỡng để làn da được chăm sóc toàn diện nhất.\r\nKhẩu phần ăn hàng ngày và chế độ nghỉ ngơi đều có thể ảnh hưởng đến sức khỏe của làn da. Bạn nên tăng cường nhiều thực phẩm giàu vitamin, chất xơ, chất khoáng. Uống đủ 2 lít nước mỗi ngày. Hạn chế thức khuya hoặc sử dụng các chất kích thích, các loại nước uống có gas, có cồn. Đồng thời, bạn nên tập luyện thể thao thường xuyên. Hoạt động mạnh sẽ giúp máu huyết lưu thông, thúc đẩy sự trao đổi chất. Da sẽ luôn hồng hào và khỏe mạnh.'),
(3, 'Da dầu', 'Da dầu (hay còn có tên gọi khác là da nhờn) là tình trạng các tuyến bã nhờn nằm bên dưới bề mặt da tiết ra quá nhiều dầu hơn mức cần thiết. Trong đó, bã nhờn là một hỗn hợp được tạo ra từ chất béo. Trên thực tế, bã nhờn đóng một vai trò quan trọng đối với sự khỏe mạnh của làn da và mái tóc. Chúng có lợi trong việc cung cấp cho da độ ẩm nhất định và giữ cho tóc luôn bóng mượt, chắc khỏe. Tuy nhiên, việc lượng dầu được sản sinh quá mức dẫn đến tình trạng da dầu.\r\nDa mặt bạn trông lúc nào cũng bóng nhờn - do việc hoạt động quá mức của các tuyến bã gây nên.\r\nLỗ chân lông của bạn sẽ to ra - lỗ chân lông nổi rõ hơn ở vùng chữ T (mũi, cằm và trán) là “điểm đặc trưng” của làn da dầu. Vốn dĩ, chúng được tạo ra bởi các lỗ chân lông bị tắc.\r\nBạn sẽ dễ bị nổi mụn viêm - do bã nhờn được tiết ra quá mức, làm tắc nghẽn lỗ chân lông, hệ lụy là có thể dẫn đến tình trạng nổi mụn trên da.\r\nDa xuất hiện mụn đầu đen - ngoài mụn viêm đỏ, da nhờn cũng có thể hình thành mụn đầu đen. Chúng được tạo ra bởi bã nhờn dư thừa ở đáy nang lông của da. Khi bã nhờn tiếp xúc với không khí, nó sẽ bị oxy hóa và chuyển sang màu đen tạo ra thứ gọi là mụn đầu đen.\r\nDa của bạn luôn cảm thấy nhờn rít - một sự thật hiển nhiên rằng, làn da nhờn của bạn sẽ luôn có nhiều dầu nhờn trên mặt. Nó không bao giờ có cảm giác căng, khô hoặc bong tróc do khô.\r\nDa để lại vết dầu - Cụ thể, mỗi khi bạn tình cờ chạm da mặt vào vật gì đó, da sẽ để lại vết dầu trên bề mặt (ví dụ như bề mặt điện thoại).\r\nTrang điểm sẽ vất vả hơn - khi da quá nhiều dầu, các lớp trang điểm sẽ trôi đi loang lổ, đồng nghĩa là bạn phải trang điểm lại nhiều lần trong ngày.\r\nDa dầu thường có xu hướng di truyền qua các thế hệ, tức là nếu ba mẹ bạn có làn da dầu, khả năng khá cao là bạn cũng sẽ thừa hưởng những tuyến bã nhờn này.\r\nDa tiết nhiều dầu nhờn ở độ tuổi thanh thiếu niên. Khi càng lớn tuổi, da sẽ càng ít tiết dầu hơn, tuyến bã nhờn lúc này cũng kém hoạt động hơn so với khi bạn còn trẻ.\r\nNếu ví tính di truyền và tuổi tác là những yếu tố “ngầm”, tác động đến làn da dầu của bạn, thì môi trường là yếu tố ảnh hưởng đến làn da dầu một cách rõ rệt nhất. Cụ thể, da chúng ta thường dễ trở nên bóng nhờn với lớp dầu thừa vào mùa hè hoặc ở những nơi trời nắng nóng, khí hậu ẩm.\r\nNhững lỗ chân lông có thể bị giãn nở do tuổi tác, cân nặng hoặc cũng có thể do da đã bị nổi mụn trước đó. Bởi lẽ, những tuyến bã nhờn nằm dưới các lỗ chân lông, nên lỗ chân lông lớn có thể sẽ làm da bạn đổ nhiều dầu hơn so với những làn da với các lỗ chân lông bình thường.\r\nNếu bạn rửa mặt hoặc tẩy tế bào chết cho da quá thường xuyên sẽ khiến da bạn đổ dầu nhiều hơn.\r\nThêm vào đó, việc không thoa kem chống nắng có thể khiến da của bạn bị khô, dẫn đến việc da trở nên bóng dầu. Cho nên, hãy chắc rằng bạn luôn bôi kem chống nắng mỗi ngày như một cách chăm sóc da dầu.', 'Trước hết, hãy rửa mặt sạch với tần suất hai lần một ngày. Với làn da nhiều dầu, điều bạn cần chính là có một thói quen làm sạch để da luôn trong điều kiện tốt nhất, đồng thời sử dụng các sản phẩm không chứa dầu.\r\nTiếp theo, bạn nên sử dụng kem dưỡng ẩm phù hợp và không gây bí tắc cho làn da và một điều quan trọng là không rửa mặt quá kỹ.\r\nHãy cẩn thận với những động tác tay có thể đem đến bụi bẩn, dầu nhờn lên mặt bạn. Những vật dụng hay chạm vào da như khăn mặt, khẩu trang, gối mền cũng cần được chú ý làm sạch thường xuyên.\r\nTránh thức ăn có lượng đường cao hoặc chứa nhiều dầu'),
(4, 'Da hỗn hợp', 'Giống như tên gọi, da hỗn hợp được hiểu là sự kết hợp của nhiều hơn một loại da trên cùng một khuôn mặt, điển hình là da dầu và khô. Trong đó, vùng da chữ T (vùng quanh trán và cánh mũi) thường xuyên đổ dầu, trong khi vùng da chữ U (hai bên gò má) lại khá khô, không đổ dầu.\r\nBản chất của làn da hỗn hợp là do sự mất cân bằng lipid-nước trên da, có chỗ sẽ khô quá mức gây bong tróc da và có chỗ sẽ tiết dầu nhiều quá mức. Việc mất cân bằng này có thể có nhiều nguyên nhân như di truyền, phải sống trong áp lực, môi trường ô nhiễm hoặc sử dụng các loại thuốc sẽ có những ảnh hưởng nhất định đến việc điều tiết dầu trên da.', 'Rửa mặt là bước cơ bản đầu tiên và cần thiết trong quy trình chăm sóc da. Tuy nhiên, da hỗn hợp cần một sản phẩm làm sạch vừa đủ để đảm bảo rằng da được loại bỏ những bụi bẩn bám trên da và lớp dầu tiết ra từ vùng chữ T. Trong khi đó, ở vùng da chữ U da bạn không bị làm khô quá mức, một lượng dầu nhất định vẫn phải được duy trì để da được cân bằng độ ẩm. Một sản phẩm có bảng thành phần đơn giản, dịu nhẹ, không chứa xà phòng sẽ phù hợp cho làn da của bạn.\r\nBí quyết của việc tẩy tế bào chết cho làn da hỗn hợp là hãy thật nhẹ nhàng.\r\nKhi bạn có một làn da “khó chiều” như da hỗn hợp, không đủ độ ẩm sẽ khiến bạn phải khó chịu khi những vùng da khô trở nên bong tróc, khô ráp. Bạn nên lựa chọn những sản phẩm cấp ẩm có kết cấu mỏng nhẹ, giúp da có đủ độ ẩm cần thiết mà không gây nhờn rít, bít tắc lỗ chân lông nhất là vùng chữ T hay đổ dầu.\r\nChính vì vậy, lời khuyên dành cho bạn chính là sử dụng kem chống nắng có chỉ số SPF ở mức 30 đến 50 hoặc hơn mỗi ngày, đặc biệt khi bạn phải tiếp xúc trực tiếp với ánh mặt trời. Cụ thể, bạn nên sử dụng kem chống nắng trước khi ra ngoài khoảng 20 đến 30 phút để kem chống nắng có thể phát huy tác dụng tốt nhất để bảo vệ làn da của bạn. Nhưng ngay cả khi không tiếp xúc trực tiếp với ánh mặt trời, hãy bôi kem chống nắng thường xuyên để bảo vệ da của bạn tốt nhất.\r\nTrong chu trình chăm sóc da hỗn hợp hãy làm quen với một khái niệm khá mới lạ - “multi-masking”. Bởi làn da của bạn cần nhiều hơn một loại mặt nạ, mỗi vùng da có những vấn đề cũng như những nhu cầu riêng mà một loại mặt nạ không thể cung cấp đủ dưỡng chất cũng như giải quyết hết các vấn đề. Do đó, việc đắp nhiều loại mặt nạ trên từng vùng da riêng được biết đến như một cách chăm sóc da sinh ra dành cho làn da hỗn hợp.'),
(5, 'Da nhạy cảm', 'Mặc dù làn da nhạy cảm có thể xuất hiện ở moi nơi trên cơ thể, nhưng rõ ràng nhất là ở vùng mặt. Tình trạng da nhạy cảm xuất hiện khi hàng rào chức năng tự nhiên của da bị tổn thương, gây mất nước và cho phép các tác nhân bên ngoài xâm nhập trong da. Các triệu chứng này nặng hơn ở vùng mặt do da mặt tiếp xúc nhiều với ánh nắng mặt trời, một số thành phần trong mỹ phẩm và chất làm sạch da.\r\nCác triệu chứng của da mặt nhạy cảm có thể là: \r\nDa bong tróc, mẩn đỏ, phát ban, sưng, đóng vảy và sần sùi.\r\nĐi kèm với các cảm giác da ngứa, nóng, căng và bị kích ứng.\r\nDa mặt nhạy cảm quá mức phổ biến ở phụ nữ hơn đàn ông, có thể liên quan đến việc sử dụng mỹ phẩm và độ tuổi, diễn ra cùng với sự tăng cường mất nước thông qua biểu bì (TEWL). Các triệu chứng xảy ra khi sử dụng các sản phẩm lên da và có thể xuất hiện ngay lập tức, hoặc sau vài giờ hay vài ngày. Bao gồm cảm giác kiến bò và nóng, có thể kèm theo mẩn đỏ (ban đỏ), da đóng vảy và mụn mủ. Sử dụng các sản phẩm với các thành phần thích ứng với da tốt giúp làm giảm tác động của tình trạng này. \r\nDa lão hóa cũng có xu hướng nhạy cảm, lớp biểu bì mỏng và sự tổng hợp lipid giảm có thể dẫn đến các hàng rào chức năng bị tổn thương. Sự tụt giảm nồng độ các chất như Hyaluronic Axit - chất cấp nước cho các lớp của da và coenzyme Q10 - chất cung cấp năng lượng cho tế bào, cải thiện chức năng tái tạo da, sẽ làm trầm trọng thêm tình trạng của da. Kết quả là xuất hiện chân chim và nếp nhăn với làn da khô, đỏ và ngứa. \r\nDa mặt có thể bị ảnh hưởng bởi các chất gây dị ứng từ mặt trời. Chúng có các triệu chứng tương tự như da nhạy cảm, bao gồm mẩn đỏ và ngứa, và còn có các triệu chứng khác như bị sưng, phát ban, bỏng rộp và mụn mủ. Bên cạnh các chất gây dị ứng từ mặt trời, bao gồm Polymorphous Light Eruption (PLE), được gây ra bởi tia UV, thì các thành phần trong mỹ phẩm cũng có thể là một nhân tố.', 'Một chế độ ăn giàu các chất ô xi hóa ví dụ vitamin A,C, E và các loại dầu thực vật tự nhiên hay dầu cá có thể giúp làn da phục hồi lại tình trạng khỏe mạnh.\r\nSử dụng kem chống nắng thường xuyên để tránh các ảnh hưởng gây hại, nên tránh tiếp xúc trực tiếp với mặt trời vào khoảng từ 11h sáng đến 3h chiều. Khi lựa chọn sản phẩm kem chống nắng, tránh các sản phẩm có chứa các chất gây kích ứng da như hương liệu.\r\nTrước khi lựa chọn và sử dụng mỹ phẩm cho làn da nhạy cảm, cần thực hiện kiểm tra trước, ví dụ bôi sản phẩm vào vùng mềm mại ở khuỷu tay và đánh giá vùng da này sau 24 tiếng\r\n'),
(6, 'Da mụn', 'Mụn là những nốt có kích thước khác nhau, nổi cộm trên da. Thông thường sẽ xuất hiện ở các vị trí như mặt, lưng, cổ, ngực, mông,... Các nốt mụn không gây đau (thuộc tình trạng nhẹ), sưng tấy, viêm đỏ (thuộc tình trạng trung bình) hoặc rất đau nhức, có bọc mủ bên trong kèm lây lan đỏ ra các vùng xung quanh (thuộc tình trạng nặng). Mụn là bệnh lý về da liễu thường gặp ở mọi lứa tuổi, đặc biệt là tuổi dậy thì và thanh thiếu niên. Tuy chúng không ảnh hưởng gì nhiều đến sức khỏe nhưng gây khá nhiều sự bất tiện cho cuộc sống hằng ngày, làm mất vẻ tự tin cho nhiều người. Vậy nên  đối với làn da nhạy cảm này bạn cần phải có các bước chăm sóc da mụn chuyên biệt.*\r\nNguyên nhân chủ yếu gây mụn là do hoạt động quá mức của nội tiết tố làm tăng sự tiết dầu nhờn trên da khiến lỗ chân lông bị tắc nghẽn. Giai đoạn cơ thể thay đổi hàm lượng nội tiết tố là khi bước vào tuổi dậy thì (xuất hiện ở cả nam giới và nữ giới). Bên cạnh đó, những yếu tố ngoại sinh cũng có thể khiến mụn xuất hiện như thay đổi thời tiết bất thường, dùng thực phẩm cay nóng, uống nước ngọt, có gas, chất kích thích như cà phê, môi trường nhiều bụi bẩn, nguồn nước sử dụng hàng ngày bị nhiễm kim loại nặng, không đảm bảo vệ sinh. Tần suất trang điểm quá nhiều và không tẩy trang kỹ lưỡng là nguyên do gây mụn thường thấy ở phái đẹp. Khi đó, do chăm sóc da không đúng cách sẽ làm tăng tiết bã nhờn, viêm nang lông và hình thành nên mụn.', 'Xây dựng lối sống, sinh hoạt lành mạnh, khoa học điều độ giúp ngăn ngừa mụn tái phát. Luyện tập thói quen ngủ sớm (ngủ lúc 22h mỗi ngày), ngủ đủ giấc 8 tiếng/ngày để đủ thời gian cho hệ bài tiết hoạt động đào thải. Hạn chế tối đa ăn thực phẩm chứa nhiều dầu mỡ, cay nóng vì chúng làm tăng sự tiết nhờn trên làn da làm tắc nghẽn lỗ chân lông dẫn đến mụn hình thành. Uống đủ nước và bổ sung rau củ, trái cây để cung cấp đủ vitamin và khoáng chất nhằm tăng sức đề kháng cho cơ thể. Giữ cho tinh thần thoải mái, tránh bị căng thẳng, áp lực quá mức để không nổi mụn. \r\nThường xuyên tẩy trang cho làn da vào mỗi cuối ngày, kể cả khi không ra ngoài hoặc không trang điểm. Sau bước tẩy trang, nên sử dụng thêm sữa rửa mặt giúp loại bỏ bã nhờn, bụi bẩn trên da mặt, giúp da dẻ trông thông thoáng và sạch sâu. Duy trì vệ sinh da bằng sữa rửa mặt có độ PH phù hợp, cung cấp đủ độ ẩm 2 lần/ngày (sáng và tối). Tuy nhiên, không được nhầm lẫn rằng rửa mặt nhiều lần và càng lâu là tốt hơn. Bởi vì rửa mặt quá 3 lần/ngày sẽ làm mất cân bằng độ ẩm khiến da mặt nổi mụn nhiều hơn.\r\nKhông được tự ý chích nặn mụn tại nhà vì nếu áp dụng sai phương pháp sẽ khiến tình trạng da trở nên tổn thương nghiêm trọng hơn. Đối với da mụn, nên có các bước skincare cho da dầu mụn phù hợp. Kiên trì đắp mặt nạ đất sét 2 lần/tuần để hút bã nhờn, thu nhỏ lỗ chân lông, ngăn ngừa tiết dầu hiệu quả. Tẩy tế bào chết thường xuyên 2-3 lần mỗi tuần là bước quan trọng giúp loại bỏ da chết và được tái tạo mới. Bạn cần chú ý thoa đều hình xoắn ốc nhẹ nhàng để tránh gây tổn thương, chảy xệ da.\r\nLựa chọn, sử dụng mỹ phẩm phù hợp là cách để ngăn mụn quay trở lại. Đối với da mụn thì nên sử dụng những sản phẩm có nguồn gốc từ thiên nhiên, chất lượng, thành phần lành tính chuyên trị mụn (như tràm trà, bí đao, rau má, diếp cá). Có khả năng thẩm thấu nhanh, không gây nặng, bí da mặt, dễ có nguy cơ kích ứng.\r\nBạn nên thoa kem chống nắng dành cho da mụn thường xuyên kể cả khi ở nhà. Chỉ số SPF phù hợp cho làn da mụn là từ 30+ đến 50+. Ngoài ra, cần chú ý che chắn kỹ càng khi ra nắng (mặc thêm áo khoác chống nắng, đeo kính chống tia UV, đội mũ vành rộng tránh nắng chiếu trực tiếp vô mặt) để bảo vệ da tốt nhất. Để kỹ lưỡng hơn nữa thì tránh ra đường vào khoảng thời gian từ 10h-16h hàng ngày.  \r\nHiện nay có rất nhiều loại thuốc bôi ngoài da dạng kem, dạng gel được áp dụng trong điều trị các loại mụn, hạn chế viêm nhiễm, ngăn ngừa mụn tái phát. Thuốc bôi trị mụn thường có một hoặc một số thành phần như Retinol, Benzoyl Peroxide, Salicylic Acid, Azelaic Acid,… Tuy nhiên, để đảm bảo an toàn và điều trị hiệu quả, bạn nên tham vấn ý kiến của bác sĩ da liễu khi lựa chọn thuốc.\r\nNếu tình trạng mụn quá nặng với nhiều mụn mủ, mụn viêm, bạn nên đến ngay chuyên gia da liễu để được thăm khám và chữa trị kịp thời để tránh tình trạng mụn nặng hơn gây thâm, sẹo rỗ,...'),
(7, 'Da nhiễm sắc tố', 'Tăng sắc tố da là một thuật ngữ y học dùng để chỉ những vùng da bị tăng sắc tố dẫn đến tình trạng sẫm màu. Có đa dạng các loại hình tăng sắc tố mà ta thường gặp như: nám, tàn nhang, đồi mồi,...\r\nTăng sắc tố da là một tình trạng mà các mảng/đốm da trở nên sẫm màu hơn so với vùng da xung quanh. Điều này thường xảy ra khi hắc tố melanin (sắc tố quyết định màu sắc của làn da) bị dư thừa. Chứng tăng sắc tố da có thể ảnh hưởng đến bất kỳ màu da hay chủng tộc nào.\r\nNguyên nhân dẫn đến tình trạng tăng sắc tố da chủ yếu đến từ tác động của môi trường bên ngoài(tia UV) cùng một vài yếu tố khác như hormone và tuổi tác.', 'Chống nắng là bước chăm sóc da quan trọng nhất mà bạn có thể làm để giúp ngăn ngừa quá trình tăng sắc tố da. Điều quan trọng cần nhớ là ánh nắng mặt trời có thể ảnh hưởng đến da ngay cả trong những ngày trời nhiều mây. Vì vậy, hãy cung cấp cho làn da của bạn sự bảo vệ cần thiết hàng ngày cũng như giúp giảm thiểu tình trạng tăng sắc tố da ở mức thấp nhất bằng cách sử dụng kem chống nắng chất lượng tốt với chỉ số SPF từ 30 trở lên và thoa lại sau mỗi 2 giờ.\r\nNgoài ra, hãy cố gắng tránh ra đường những giờ nắng gắt nhất và mặc quần áo bảo vệ, đeo kính chống nắng bất cứ khi nào có thể.\r\nMột số hoạt chất thường có trong các sản phẩm bôi ngoài da như Tranexamic Acid, Retinoids, Axit Kojic, Axit Glycolic, Axit Azelaic, Vitamin C, B-Resorcino… Những thành phần này đều có khả năng ức chế ức chế tyrosinase - enzyme làm giảm sự sản sinh melanin quá mức.'),
(8, 'Da lão hóa', 'Kể từ độ tuổi 25, các dấu hiệu lão hóa đầu tiên bắt đầu xuất hiện trên bề mặt da. Các đường nhăn xuất hiện trước, và sau đó là nếp nhăn, và sự giảm thể tích và giảm mật độ của da có thể nhận thấy được. \r\nLão hóa da là dấu hiệu suy giảm chức năng của da, khiến độ đàn hồi của da giảm đi và các mô liên kết bắt đầu yếu dần, kết cấu collagen, elastine cũng dần trở nên lỏng lẻo. Quá trình lão hóa sẽ dẫn tới sự suy giảm chức năng của da, thể tích da, mật độ da, đặc biệt là collagen mất đi đến 1% mỗi năm ở phụ nữ.\r\nNhững nghiên cứu đã chỉ ra rằng, tác hại của rượu, bia còn ảnh hưởng trầm trọng đến da khiến da dễ tổn thương hơn khi ra nắng, làm bạn già nhanh hơn.Việc ăn quá nhiều đường sẽ khiến quá trình glycation diễn ra nhanh hơn, lúc này, các tế bào phải hoạt động tích cực hơn cho quá trình trao đổi chất của cơ thể, các phân tử đường lúc này sẽ liên kết với protein tạo ra glycation, khiến mật độ collagen trên da giảm đi nhanh chóng. Thiếu hụt Collagen, như một điều tất yếu, sẽ khiến da kém đàn hồi, hình thành các nếp nhăn từ nông đến sâu, báo hiệu cho một quá trình lão hóa đang sắp diễn ra trên cơ thể bạn.\r\nThức quá khuya hay lười vận động sẽ khiến cho hệ tuần hoàn của cơ thể và hệ thần kinh dễ bị rối loạn. Các hắc sắc tố melanin cũng hình thành nhanh hơn, da bắt đầu xuất hiện các vết thâm sạm, nám, tàn nhang,...\r\nNgoài những tác động từ lối sống và chế độ ăn uống, gen di truyền cũng là một yếu tố hết sức quan trọng quyết định việc quá trình lão hóa của bạn diễn ra nhanh hay chậm.\r\nCác tia cực tím có trong ánh nắng mặt trời có thể gây tổn thương đến lớp biểu bì da, phá hủy liên kết các sợi elastin dưới da, là nguyên nhân hàng đầu gây nên sạm, nám, tàng nhan, các nếp nhăn từ nông đến sâu.\r\nRửa mặt quá mạnh hoặc tác động vật lý đến da trong một thời gian liên tục có thể khiến da chảy xệ và hình thành các nếp nhăn sớm. Để hạn chế việc này, bạn nên massage da nhẹ nhàng hằng ngày với các loại tinh dầu dưỡng da theo chuyển động tròn và theo hướng từ dưới lên trên để làn da săn chắc và mịn màng hơn.\r\nTrong thuốc lá thường có chứa nicotin- thủ phạm hàng đầu khiến làn da lão hóa nhanh chóng. Hút thuốc trong một thời gian dài và liên tục thì làn da của bạn không chỉ trở nên kém đàn hồi hơn mà quá trình lão hóa cũng diễn ra nhanh hơn, những tổn thương trên da cũng xuất hiện với tần suất dày đặc hơn.', 'Bạn cần có một chế độ ăn uống và thói quen sinh hoạt lành mạnh, chống nắng thật kĩ và bổ sung các loại thực phẩm chức năng sẽ giúp bạn làm chậm quá trình lão hóa sớm cho da.\r\nLàm sạch da thật kĩ và bổ sung retinoids vào chu trình dưỡng da cũng giúp bạn ngăn ngừa lão hóa một cách hiệu quả.\r\nBạn nên ưu tiên những sản phẩm có chứa vitamin C, Retinoids, AHA, BHA, Collagen, Hyaluronic Acid, Ceramide sẽ giúp cải thiện những dấu hiệu lão hóa trên da một cách hiệu quả.\r\nHãy tham khảo nhiều bài tập massage nâng cơ mặt phù hợp, dành 5 phút mỗi ngày để thực hiện tại nhà. Bạn có thể kết hợp cùng các loại kem massage cho da mặt để hiệu quả nhanh và tác động sâu hơn. Kiên trì thực hiện trong một thời gian bạn sẽ thấy làn da cải thiện rất nhiều, săn chắc và trẻ trung hơn.\r\nBổ sung các loại thực phẩm giàu lectin, vitamin A, vitamin C, Beta- Carotine (Có nhiều trong đậu nành, cà rốt, cá hồi và các loại trái cây có múi như cam, quýt, bưởi,...) hoặc các loại thực phẩm chức năng có chứa collagen để hỗ trợ quá trình chống lão hóa cho da một cách hiệu quả.\r\nTập thể dục giúp máu huyết lưu thông, phòng tránh các căn bệnh xuất hiện, cơ thể khỏe mạnh và ngăn ngừa lão hóa xuất hiện. \r\nCách chống lão hóa cho da nhất định phải tránh xa thuốc lá nhé.\r\nĐây là một điều cực kỳ quan trọng nhưng nhiều bạn vẫn chưa nhận ra. Khi tâm trạng thoải mái sẽ giúp các cơ quan hoạt động bình thường, chống lại việc oxy hóa diễn ra nhanh hơn. Muốn trẻ lâu hãy luôn vui vẻ bạn nhé.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sp`
--

CREATE TABLE `loai_sp` (
  `maLoai` smallint(6) NOT NULL,
  `loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maDM` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_sp`
--

INSERT INTO `loai_sp` (`maLoai`, `loai`, `maDM`) VALUES
(1, 'Sữa rửa mặt', 1),
(2, 'Nước tẩy trang', 1),
(3, 'Dầu tẩy trang', 1),
(4, 'Sáp tẩy trang', 1),
(5, 'Khăn tẩy trang', 1),
(6, 'Sửa tắm', 1),
(7, 'Dầu gội', 1),
(8, 'Kem dưỡng ẩm', 2),
(9, 'Sữa dưỡng ẩm', 2),
(10, 'Gel dưỡng ẩm', 2),
(11, 'Dầu dưỡng', 2),
(12, 'Kem dưỡng body', 2),
(13, 'Son dưỡng', 2),
(14, 'Kem chống nắng', 3),
(15, 'Sữa chống nắng', 3),
(16, 'Xịt chống nắng', 3),
(17, 'Chống nắng body', 3),
(18, 'Mặt nạ rửa trôi', 4),
(19, 'Mặt nạ giấy', 4),
(20, 'Mặt nạ lột', 4),
(21, 'Mặt nạ ngủ', 4),
(22, 'Tẩy tế bào chết vật lý', 5),
(23, 'Tẩy tế bào chết hóa học', 5),
(24, 'Kem trị mụn', 6),
(25, 'Xịt khoáng', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lo_hang`
--

CREATE TABLE `lo_hang` (
  `maLo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `barCode` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `ngaySX` date NOT NULL,
  `ngayNhap` date NOT NULL DEFAULT current_timestamp(),
  `soLuong` int(11) NOT NULL,
  `giaNhap` int(11) NOT NULL,
  `noiSX` tinyint(4) NOT NULL,
  `soLuongConLai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lo_hang`
--

INSERT INTO `lo_hang` (`maLo`, `barCode`, `ngaySX`, `ngayNhap`, `soLuong`, `giaNhap`, `noiSX`, `soLuongConLai`) VALUES
('LH001', '8935006539273', '2020-07-01', '2020-07-26', 50, 5000000, 1, 28),
('LH002', '6902395498919', '2022-01-01', '2022-04-26', 20, 2000000, 1, 16),
('LH003', '8935006539754', '2022-04-22', '2022-04-26', 20, 2000000, 1, 18),
('LH004', '8935006539273', '2021-01-01', '2021-04-26', 30, 3000000, 1, 30),
('LH005', '8935006541672', '2023-05-01', '2023-05-11', 30, 3000000, 1, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `momo`
--

CREATE TABLE `momo` (
  `id` int(11) NOT NULL,
  `partnerCode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `orderId` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `requestId` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `orderInfo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `orderType` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `transId` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payType` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `signature` text COLLATE utf8_unicode_ci NOT NULL,
  `sdt` char(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `momo`
--

INSERT INTO `momo` (`id`, `partnerCode`, `orderId`, `requestId`, `amount`, `orderInfo`, `orderType`, `transId`, `payType`, `signature`, `sdt`) VALUES
(1, 'MOMOBKUN20180529', '1680156149', '1680156150', 210000, 'Thanh toán qua MoMo', 'momo_wallet', '2943909094', 'napas', '2d854013376e555998d78f8ae121bba4194b1d4b0be61ce39e20f7f9cf10767c', '0911971536'),
(2, 'MOMOBKUN20180529', '1680157513', '1680157514', 395000, 'Thanh toán qua MoMo', 'momo_wallet', '2943924305', 'napas', 'f18b6597fe0f0fb32265909cae35e510107874ed2e51780c15085b1889cc8a16', '0911971536'),
(3, 'MOMOBKUN20180529', '1680881020', '1680881021', 210000, 'Thanh toán qua MoMo', 'momo_wallet', '2948963211', 'napas', 'c26891aee438f9c4467cb4c6a285806b1e00b26bba1b2f1fa9a4446d896b2341', '0911971536'),
(4, 'MOMOBKUN20180529', '1682763756', '1682763757', 395000, 'Thanh toán qua MoMo', 'momo_wallet', '2964773047', 'napas', '1a093265691ae8e2b52a5cbe3e923b827708cc3202c490c81f19ac5798d11a89', '0859091199'),
(5, 'MOMOBKUN20180529', '1683098154', '1683098155', 173920, 'Thanh toán qua MoMo', 'momo_wallet', '2967660590', 'napas', '7a648b6de3fe692ab3a6c6b7b80021351dffe58023d5753018a2721effafd3a2', '0911971536'),
(6, 'MOMOBKUN20180529', '1683792662', '1683792662', 173000, 'Thanh toán qua MoMo', 'momo_wallet', '2976379948', 'napas', '60d877e216ecad8f5e1387c1e1c24fc956ae58a4ddee5949de4c6252b96cb0d4', '0859091199');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nsx`
--

CREATE TABLE `nsx` (
  `maNSX` smallint(6) NOT NULL,
  `nsx` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `xuatXu` tinyint(4) NOT NULL,
  `diaChi` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nsx`
--

INSERT INTO `nsx` (`maNSX`, `nsx`, `xuatXu`, `diaChi`) VALUES
(1, 'ROHTO-MENTHOLATUM', 3, NULL),
(3, 'L\'ORÉAL', 4, NULL),
(4, 'BEIERSDORF AG', 7, ''),
(5, 'LANCÔME ', 4, ''),
(6, 'SHISEIDO ', 3, NULL),
(7, ' P&G', 5, NULL),
(8, 'Tập đoàn Johnson & Johnson', 5, NULL),
(9, 'ESTEE LAUDER', 5, ''),
(11, 'GALDERMA LABORATORIES', 12, ''),
(12, 'BIODERMA ', 4, NULL),
(13, 'AMORE PACIFIC', 11, ''),
(14, 'WHISH COMPANY', 11, ''),
(15, 'COSRX ', 11, NULL),
(16, 'PAULA\'S CHOICE', 5, ''),
(17, 'TẬP ĐOÀN UNILEVER', 6, NULL),
(18, 'DECIEM', 12, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuong_thuc_tt`
--

CREATE TABLE `phuong_thuc_tt` (
  `maPT` tinyint(4) NOT NULL,
  `phuongThucTT` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuong_thuc_tt`
--

INSERT INTO `phuong_thuc_tt` (`maPT`, `phuongThucTT`) VALUES
(1, 'Thanh toán bằng tiền mặt khi nhận hàng'),
(2, 'Thanh toán qua MoMo'),
(3, 'Thanh toán VNPAY');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quoc_gia`
--

CREATE TABLE `quoc_gia` (
  `maQG` tinyint(4) NOT NULL,
  `quocGia` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quoc_gia`
--

INSERT INTO `quoc_gia` (`maQG`, `quocGia`) VALUES
(1, 'Việt Nam'),
(2, 'Trung Quốc'),
(3, 'Nhật Bản'),
(4, 'Pháp'),
(5, 'Mỹ'),
(6, 'Anh'),
(7, 'Đức'),
(8, 'Thái Lan'),
(9, 'Đài Loan'),
(10, 'Úc'),
(11, 'Hàn Quốc'),
(12, 'Canada');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `barCode` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `sanPham` text COLLATE utf8_unicode_ci NOT NULL,
  `giaBan` int(11) NOT NULL,
  `phanTramGiam` tinyint(4) NOT NULL DEFAULT 0,
  `linkAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `maDong` smallint(6) NOT NULL,
  `dungTich` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `thanhPhan` text COLLATE utf8_unicode_ci NOT NULL,
  `dacTinh` text COLLATE utf8_unicode_ci NOT NULL,
  `congDung` text COLLATE utf8_unicode_ci NOT NULL,
  `cachDung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`barCode`, `sanPham`, `giaBan`, `phanTramGiam`, `linkAnh`, `maDong`, `dungTich`, `thanhPhan`, `dacTinh`, `congDung`, `cachDung`) VALUES
('3337872411083', 'Effaclar Purifying Foaming Gel For Oily Sensitive Skin', 395000, 25, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/3337872411083', 5, '200ml', 'Aqua / Water, Sodium Laureth Sulfate, Peg-8, Coco-Betaine, Hexylene Glycol, Sodium Chloride, Peg-120 Methyl Glucose Dioleate, Zinc Pca, Sodium Hydroxide, Citric Acid, Sodium Benzoate, Phenoxyethanol, Caprylyl Glycol, Parfum / Fragrance', 'Không chứa Paraben, chất tạo màu, xà phòng, cồn, an toàn cho làn da nhạy cảm.\r\nCông thức không chứa dầu (oil-free) nên rất thích hợp cho da dầu.', 'Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.', 'Làm ẩm da với nước ấm, cho một lượng vừa đủ sản phẩm ra tay, tạo bọt, thoa sản phẩm lên mặt, tránh vùng da quanh mắt.\r\nMassage nhẹ nhàng, sau đó rửa sạch lại với nước và thấm khô da.\r\nSử dụng hằng ngày vào buổi sáng và tối.'),
('3337872411991', 'Effaclar Purifying Foaming Gel For Oily Sensitive Skin', 595000, 20, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/3337872411991', 5, '400ml', 'Aqua / Water, Sodium Laureth Sulfate, Peg-8, Coco-Betaine, Hexylene Glycol, Sodium Chloride, Peg-120 Methyl Glucose Dioleate, Zinc Pca, Sodium Hydroxide, Citric Acid, Sodium Benzoate, Phenoxyethanol, Caprylyl Glycol, Parfum / Fragrance', 'La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin có công thức được lựa chọn kĩ càng với các thành phần hoạt tính dịu nhẹ, phù hợp cho làn da dầu, mụn & nhạy cảm:', 'Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.', 'Làm ẩm da với nước ấm, cho một lượng vừa đủ sản phẩm ra tay, tạo bọt, thoa sản phẩm lên mặt, tránh vùng da quanh mắt.\r\nMassage nhẹ nhàng, sau đó rửa sạch lại với nước và thấm khô da.\r\nSử dụng hằng ngày vào buổi sáng và tối.'),
('3337875565783', 'Serozinc Zinc Sulfate Solution Cleansing, Soothing', 475000, 20, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/3337875565783', 12, '300ml', 'Aqua, Sodium Chloride, Zinc Sulfate.', 'An toàn cho mọi loại da, đặc biệt là da nhạy cảm', 'Xịt khoáng La-Roche Posay Serozinc Zinc Sulfate Solution Cleansing, Soothing đến từ thương hiệu dược mỹ phẩm La Roche-Posay được thiết kế dành riêng cho làn da dầu, các vấn đề về mụn nhằm hỗ trợ chống oxy hóa cho da, giảm sưng viêm, bóng nhờn đáng kể mang đến làn da khô thoáng, mịn màng suốt cả ngày dài.', 'Dùng nhiều lần trong ngày.\r\nĐặt chai nước khoáng song song mặt, cách mặt khoảng 20cm.\r\nXịt đều 1-2 vòng khắp gương mặt.\r\nVỗ nhẹ và thấm phần nước khoáng còn đọng lại bằng bông tẩy trang hoặc khăn giấy.'),
('3337875598071', 'Effaclar Duo+', 475000, 20, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/3337875598071', 11, '40ml', 'Aqua / Water, Glycerin, Dimethicone, Isocetyl Stearate, Niacinamide, Isopropyl Lauroyl Sarcosinate, Silica, Ammonium Polyacryldimethyltauramide / Ammonium Polyacryloyldimethyl, Taurate, Methyl Methacrylate Crosspolymer, Potassium Cetyl Phosphate, Zinc Pca, Glyceryl Stearate Se, Isohexadecane, Sodium Hydroxide, Myristyl Myristate, 2-Oleamido-1,3-Octadecanediol, Nylon-12, Linoleic Acid, Disodium Edta, Capryloyl Salicylic Acid, Caprylyl Glycol, Xanthan Gum, Polysorbate 80, Acrylamide/Sodium Acryloyldimethyltaurate Copolymer, Pentaerythrityl Tetra-Di-T-Butyl Hydroxyhydrocinnamate, Salicylic Acid, Piroctone Olamine, Parfum / Fragrance.', 'Giải quyết các tình trạng da:\r\nDa mụn trung bình đến nghiêm trọng (sưng viêm).\r\nDa dễ bị vết thâm sau mụn và thường xuyên tái phát mụn.', 'Kem Dưỡng La Roche-Posay Giảm Mụn, Ngừa Vết Thâm 40ml là dòng kem dưỡng đến từ thương hiệu dược mỹ phẩm La Roche-Posay, chứa hoạt chất Aqua Posae Filiformis, giúp cân bằng hệ vi sinh vật trên da, ngăn chặn sự hoạt động của vi khuẩn không có lợi gây hại cho da & giúp giảm mụn nhanh hơn. Sản phẩm chăm sóc da mụn toàn diện, với công thức giảm mụn hiệu quả trong vòng 12h, ngăn ngừa mụn tái phát & ngăn ngừa vết thâm sau mụn.', 'Làm sạch da kỹ càng (khuyên dùng Gel rửa mặt La Roche-Posay Effaclar Purifying Foaming Gel).\r\nThoa một lớp kem mỏng lên toàn mặt mỗi ngày 2 lần vào buổi sáng và tối. Chỉ cần một lượng kem nhỏ.\r\nTránh để sản phẩm dính vào mắt, mũi, miệng hoặc trên bất kỳ vùng da nào bị tổn thương để tránh gây kích ứng. Nếu tiếp xúc xảy ra, rửa sạch khu vực ngay lập tức và kỹ lưỡng.\r\nThoa Kem Dưỡng La Roche-Posay Effaclar Duo Plus để giúp da giảm mụn hiệu quả trong vòng 12h, ngăn ngừa mụn tái phát & ngăn ngừa vết thâm sau mụn.\r\nNên kết hợp sử dụng với Kem giảm mụn chuyên biệt Effaclar A.I. La Roche-Posay để đạt hiệu quả tối ưu.'),
('3401575645851', 'Sébium H2O', 525000, 25, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/3401575645851', 7, '500ml', 'Water (Aqua), Peg-6 Caprylic/Capric Glycerides, Sodium Citrate , Zinc Gluconate, Copper Sulfate, Ginkgo Biloba Extract – Chiết Xuất Lá Bạch Quả, Mannitol, Xylitol, Rhamnose, Fructooligosaccharides, Propylene Glycol, Citric Acid, Disodium Edta, Cetrimonium Bromide, Fragrance (Parfum).', 'Nước Tẩy Trang Bioderma Sébium H2O được bào chế chuyên biệt dành cho làn da dầu & hỗn hợp, có khả năng \"bắt chước\" các thành phần tự nhiên của làn da để loại bỏ lớp trang điểm một cách tối ưu nhất, trong khi vẫn duy trì được độ cân bằng pH và độ ẩm tự nhiên của da, bảo đảm an toàn cho kể cả những làn da nhạy cảm nhất.', 'Nước Tẩy Trang Bioderma Sébium H2O là sản phẩm tẩy trang dành cho da dầu, da hỗn hợp đến từ thương hiệu dược mỹ phẩm Bioderma, được ứng dụng công nghệ Micellar đình đám giúp loại bỏ lớp trang điểm cùng bụi bẩn và dầu thừa trên da hiệu quả mà không gây khô căng hay nhờn rít, tạo cảm giác thông thoáng cho da sau một ngày dài mệt mỏi.', 'BƯỚC 1: Thấm Sébium H2O lên bông tẩy trang.\r\nBƯỚC 2: Nhẹ nhàng làm sạch và / hoặc tẩy trang vùng mặt.\r\nBƯỚC 3: Không cần rửa lại với nước.'),
('4550516705198', 'Deep Moist Cream', 235000, 37, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/4550516705198', 3, '50g', 'Water (Aqua), Dipropylene Glycol, Glycerin, Butylene Glycol, Dimethicone, Isododecane, Cetyl Alcohol, Silica, Sodium Acrylates Crosspolymer 2, Triethylhexanoin, Myristyl Myristate, Peg 6, Peg 32, Glyceryl Stearate Se, Dimethylacrylamide.', 'Sản phẩm phù hợp với mọi loại da.', 'Sản phẩm được ứng dụng công nghệ chuyển hóa kem độc quyền giúp chất kem dưỡng dễ dàng chuyển hóa thành phân tử siêu nhỏ để các dưỡng chất nhanh chóng thấm sâu vào da, cung cấp nước và độ ẩm cho da đem đến làn da mịn màng, căng mướt, tràn đầy sức sống.', 'Sử dụng sau bước tinh chất. \r\nLấy một lượng kem dưỡng vừa đủ thoa khắp mặt và massage nhẹ nhàng. \r\nSử dụng đều đặn mỗi ngày để mang lại hiệu quả. \r\nCó thể sử dụng như mặt nạ ngủ bằng cách thoa một lớp dày trên mặt để qua đêm và rửa lại với nước.'),
('4710032515538', 'Hydro Boost Hyaluronic Acid Nourishing Cream (Cho Da Khô)', 440000, 26, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/4710032515538', 9, '50g', 'Water, Glycerin, Isopropyl Palmitate, Cetyl Alcohol, Cetearyl Olivate, Sorbitan Olivate, C10-30 Cholesterol/Lanosterol Esters, Caprylyl Glycol, Ethylhexylglycerin, Betaine, Dimethicone, Palmitic Acid, Stearic Acid, Polyacrylate Crosspolymer-6, Pentylene Glycol, Sodium PCA, Fructose, Sodium Hyaluronate, Sodium Lactate, Urea, Sodium Hydroxide, Citric Acid, PCA, 1,2-Hexanediol, Maltose, Ceramide NP, Serine, Alanine, Sodium Chloride, Trehalose, Glycine, Allantoin, Glutamic Acid, Lysine HCl, Arginine, Threonine, Tropolone, Glucose, Proline', 'Sản phẩm phù hợp với mọi loại da đặc biệt da khô.\r\nKhông gây mụn, không dầu, không mùi, không màu, không chứa Ethanol.', 'Kem Dưỡng Ẩm Neutrogena Cấp Nước Cho Da Khô 50g là kem dưỡng đến từ thương hiệu mỹ phẩm Neutrogena của Mỹ, được tăng cường với phức hợp nhân tố giữ ẩm tự nhiên (NMF) để củng cố hàng rào bảo vệ da, cung cấp thêm 5 lần hydrat hóa, bổ sung cho làn da bị mất nước, làm dịu da, tái tạo làn da khô ráp, làm mềm và mịn kết cấu da không đồng đều và làm lộ ra làn da sáng khỏe rõ rệt trong 2 tuần.', 'Sử dụng sau bước tinh chất dưỡng da.\r\nLấy một lượng kem nhỏ thoa trực tiếp lên da mặt, mát xa nhẹ nhàng để sản phẩm thẩm thấu vào da.'),
('4891080614470', 'Hydro Boost Hyaluronic Acid Water Gel', 370000, 26, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/4891080614470', 9, '50g', 'Water, Glycerin, Dimethicone, Cetearyl Olivate, Sorbitan Olivate, Polyacrylate Crosspolymer-6, Betaine, Caprylyl Glycol, Synthetic Beeswax, Ethylhexylglycerin, Pentylene Glycol, Sodium PCA, Fructose, Dimethicone Crosspolymer, Sodium Hyaluronate, Dimethiconol, Sodium Lactate, Urea, Citric Acid, PCA, Fragrance, Sodium Hydroxide, Maltose, Serine, Alanine, Glycine, Sodium Chloride, Trehalose, Allantoin, Glutamic Acid, Lysine HCL, Threonine, Arginine, Glucose, Proline, Cl42090.', 'Với công thức chăm sóc da cải tiến và đã qua kiểm nghiệm da liễu, Kem Dưỡng Ẩm Neutrogena Hydro Boost Water Gel 50g giúp kích hoạt khả năng tiềm ẩn của làn da - tự sản sinh ra hàm lượng Hyaluronic Acid tự nhiên của hàng triệu tế bào da, từ đó mang lại độ ẩm dồi dào và dài lâu hơn, duy trì làn da thật ẩm mịn và căng mướt. Sản phẩm phù hợp cho cả nam lẫn nữ và đặc biệt lý tưởng cho làn da từ thường đến dầu, da đang gặp tình trạng thiếu nước.', 'Kem Dưỡng Ẩm Neutrogena Hydro Boost Water Gel 50g là kem dưỡng ẩm đến từ thương hiệu mỹ phẩm Neutrogena của Mỹ, bảo vệ độ ẩm cho da mạnh hơn 80% cùng với công thức 1% các yếu tố giữ ẩm tự nhiên chứa Hyaluronic Acid, Axit Amin và chất điện giải. Kết cấu nhẹ thích hợp sử dụng hàng ngày.', 'Sử dụng sau bước tinh chất dưỡng da.\r\nLấy một lượng kem nhỏ thoa trực tiếp lên da mặt, mát xa nhẹ nhàng để sản phẩm thẩm thấu vào da.'),
('4909978150211', 'All Clear Water Micellar Formula Bright', 109000, 20, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/4909978150211', 8, '230ml', 'Water (Aqua), Dipropylene Glycol, Peg-8, Peg/Ppg-50/40 Dimethyl Etherm, Glycerin, Phenoxyethanol, Methylparaben, Sodium Citrate, Potassium Cocoyl Glutamate, Citric Acid, Sodium Metaphosphate,..', 'Sản phẩm phù hợp cho mọi loại da, đặc biệt là da thường và da khô.', 'Nước Tẩy Trang Senka All Clear Water Micellar Formula là dòng sản phẩm tẩy trang dạng nước từ thương hiệu mỹ phẩm SENKA Nhật Bản, với công thức Micellar giúp giúp làm sạch bụi bẩn, bã nhờn, lớp trang điểm lâu trôi tận sâu lỗ chân lông một cách hiệu quả mà vẫn dịu nhẹ cho làn da. Đặc biệt, mỗi phân loại được bổ sung các chiết xuất thiên nhiên giúp nuôi dưỡng và hỗ trợ cải thiện từng vấn đề về da riêng biệt.', 'Bước 1: Làm sạch tay\r\nBước 2: Thấm một lượng sản phẩm vừa đủ ra bông tẩy trang.\r\nBước 3: Nhẹ nhàng lau sạch lớp trang điểm, không cần rửa lại bằng nước.'),
('5011451103863', 'Kind To Skin Refreshing Facial Wash Gel', 132000, 25, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/5011451103863', 6, '150g', 'Aqua, Cocamidopropyl Betaine, Propylene Glycol, Hydroxypropyl Methylcellulose, Panthenol, Disodium EDTA, Hydroxypropyl Cyclodextrin, Iodopropynyl Butylcarbamate, Pantolactone, Phenoxyethanol, Sodium Benzoate, Sodium Chloride, Sodium Hydroxide, Tocopheryl Acetate.', 'KHÔNG có nước hoa hoặc màu nhân tạo, KHÔNG có hóa chất mạnh, KHÔNG cồn, KHÔNG xà phòng, KHÔNG paraben và KHÔNG phthalates.', 'Sữa Rửa Mặt Simple Refreshing Facial Wash là sản phẩm sữa rửa mặt dạng gel dành cho mọi loại da nổi tiếng của thương hiệu mỹ phẩm Simple. Với công thức dịu nhẹ không chứa xà phòng cùng thành phần Pro-Vitamin B5 và Vitamin E, sản phẩm giúp làm sạch da hiệu quả, cuốn đi chất nhờn, bụi bẩn và các tạp chất khác mà không gây kích ứng, cho da mềm mịn, đồng thời mang lại cảm giác tươi mát và sạch thoáng cho da.', 'Nên sử dụng sữa rửa mặt 2 lần mỗi ngày vào buổi sáng và tối.\r\nSau khi tẩy trang, làm ướt mặt với nước, cho một lượng nhỏ sữa rửa mặt vào lòng bàn tay và tạo bọt, sau đó massage nhẹ nhàng toàn bộ khuôn mặt rồi rửa sạch mặt lại với nước ấm. Tránh để sữa rửa mặt dính vào vùng mắt.\r\nSau khi rửa mặt dùng toner để cân bằng da và sử dụng các bước tiếp theo của chu trình dưỡng da.'),
('655439020107', 'Skin Perfecting 2% BHA Liquid', 949000, 30, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/655439020107', 10, '118ml', 'Water (Aqua), Methylpropanediol (hydration), Butylene Glycol (hydration), Salicylic Acid (beta hydroxy acid/exfoliant), Polysorbate 20 (stabilizer), Camellia Oleifera Leaf Extract (green tea/skin calming/antioxidant), Sodium Hydroxide (pH balancer), Tetrasodium EDTA (stabilizer)', 'Không hương liệu, không chất tạo màu, không làm mài mòn hay tổn thương da nhờ công thức đột phá.', 'Dung Dịch Loại Bỏ Tế Bào Chết Paula’s Choice Skin Perfecting 2% BHA Liquid Exfoliant đến từ thương hiệu dược mỹ phẩm Paula\'s Choice nổi tiếng của Mỹ là sản phẩm tẩy tế bào chết hóa học với nồng độ 2% BHA (Salicylic Acid) giúp làm sạch sâu lỗ chân lông, cải thiện tình trạng mụn ẩn - mụn đầu đen, đồng thời làm mờ nếp nhăn sâu, cải thiện tông màu da, mang lại cho bạn làn da sáng mịn, rạng rỡ và khỏe mạnh. Công thức sản phẩm dịu nhẹ, không gây bào mòn da, dễ dàng thẩm thấu mà không làm bít tắc lỗ chân lông.', 'Sử dụng mỗi ngày 1 đến 2 lần sau bước rửa mặt và toner.\r\nNhẹ nhàng đổ Dung Dịch Tẩy Da Chết Paula’s Choice BHA 2% ra tấm bông tẩy trang rồi thoa đều lên toàn bộ khuôn mặt, bao gồm cả vùng mắt (tránh tác động trực tiếp vào mi và lông mi). Bên cạnh đó, có thể dùng tay để apply trực tiếp lên da.\r\nKhông cần rửa lại bằng nước. '),
('655439020169', 'Skin Perfecting 2% BHA Liquid', 399000, 30, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/655439020169', 10, '30ml', 'Water (Aqua), Methylpropanediol (hydration), Butylene Glycol (hydration), Salicylic Acid (beta hydroxy acid/exfoliant), Polysorbate 20 (stabilizer), Camellia Oleifera Leaf Extract (green tea/skin calming/antioxidant), Sodium Hydroxide (pH balancer), Tetrasodium EDTA (stabilizer)', 'Không hương liệu, không chất tạo màu, không làm mài mòn hay tổn thương da nhờ công thức đột phá.', 'Dung Dịch Loại Bỏ Tế Bào Chết Paula’s Choice Skin Perfecting 2% BHA Liquid Exfoliant đến từ thương hiệu dược mỹ phẩm Paula\'s Choice nổi tiếng của Mỹ là sản phẩm tẩy tế bào chết hóa học với nồng độ 2% BHA (Salicylic Acid) giúp làm sạch sâu lỗ chân lông, cải thiện tình trạng mụn ẩn - mụn đầu đen, đồng thời làm mờ nếp nhăn sâu, cải thiện tông màu da, mang lại cho bạn làn da sáng mịn, rạng rỡ và khỏe mạnh. Công thức sản phẩm dịu nhẹ, không gây bào mòn da, dễ dàng thẩm thấu mà không làm bít tắc lỗ chân lông.', 'Sử dụng mỗi ngày 1 đến 2 lần sau bước rửa mặt và toner.\r\nNhẹ nhàng đổ Dung Dịch Tẩy Da Chết Paula’s Choice BHA 2% ra tấm bông tẩy trang rồi thoa đều lên toàn bộ khuôn mặt, bao gồm cả vùng mắt (tránh tác động trực tiếp vào mi và lông mi). Bên cạnh đó, có thể dùng tay để apply trực tiếp lên da.\r\nKhông cần rửa lại bằng nước. '),
('6902395498919', 'Micellar Water 3-in-1 Deep Cleansing Even For Sensitive Skin', 219000, 32, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/6902395498919', 2, '400ml', 'Aqua / Water, Cyclopentasiloxane, Isohexadecane, Potassium Phosphate, Sodium Chloride, Dipotassium Phosphate, Disodium Edta, Decyl Glucoside, Hexylene Glycol, Polyaminopropyl Biguanide, CI 61565 / Green 6', 'Có hai lớp chất lỏng giúp hòa tan chất bẩn và loại bỏ toàn bộ lớp trang điểm hiệu quả, kể cả lớp trang điểm lâu trôi và không thấm nước chỉ trong một bước.', 'Ứng dụng công nghệ Micellar dịu nhẹ giúp làm sạch da, lấy đi bụi bẩn, dầu thừa và cặn trang điểm chỉ trong một bước, mang lại làn da thông thoáng, mềm mượt mà không hề khô căng.', 'Lắc đều sản phẩm Nước Tẩy Trang L\'Oreal trước khi sử dụng.\r\nĐổ nước tẩy trang thấm ướt vừa đủ lên miếng bông tẩy trang.\r\nNhẹ nhàng lau lên mặt, mắt và môi theo chuyển động tròn (Riêng đối với vùng mắt, bạn hãy giữ miếng bông tẩy trang trên mắt vài giây để nước tẩy trang thấm sâu và cuốn đi lớp make-up dễ dàng hơn).\r\nSử dụng để tẩy trang nhanh (không cần rửa lại với nước) khi bận rộn hoặc ở những nơi thiếu nước: khi đi du lịch, đi spa, đi gym, v.v...\r\nKhuyến khích sử dụng quy trình chăm sóc da hoàn chỉnh để có hiệu quả dưỡng da tốt nhất (Nước tẩy trang - Sữa rửa mặt - Nước hoa hồng - Kem dưỡng).'),
('6928820030226', 'Micellar Water 3-in-1 Refreshing Even For Sensitive Skin', 219000, 20, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/6928820030226', 2, '400ml', ' Aqua / Water, Hexylene Glycol, Glycerin, Poloxamer 184, Disodium Cocoamphodiacetate, Disodium Edta, BHT , Polyaminopropyl Biguanide', 'Nước khoáng lấy từ những ngọn núi ở Pháp: làm dịu và giúp làn da trông tươi tắn lên sau khi tẩy trang.', 'Ứng dụng công nghệ Micellar dịu nhẹ giúp làm sạch da, lấy đi bụi bẩn, dầu thừa và cặn trang điểm chỉ trong một bước, mang lại làn da thông thoáng, mềm mượt mà không hề khô căng.', 'Lắc đều sản phẩm Nước Tẩy Trang L\'Oreal trước khi sử dụng.\r\nĐổ nước tẩy trang thấm ướt vừa đủ lên miếng bông tẩy trang.\r\nNhẹ nhàng lau lên mặt, mắt và môi theo chuyển động tròn (Riêng đối với vùng mắt, bạn hãy giữ miếng bông tẩy trang trên mắt vài giây để nước tẩy trang thấm sâu và cuốn đi lớp make-up dễ dàng hơn).\r\nSử dụng để tẩy trang nhanh (không cần rửa lại với nước) khi bận rộn hoặc ở những nơi thiếu nước: khi đi du lịch, đi spa, đi gym, v.v...\r\nKhuyến khích sử dụng quy trình chăm sóc da hoàn chỉnh để có hiệu quả dưỡng da tốt nhất (Nước tẩy trang - Sữa rửa mặt - Nước hoa hồng - Kem dưỡng).'),
('6928820030240', 'Micellar Water 3-in-1 Moisturizing Even For Sensitive Skin', 219000, 30, '/resources/views/img/SanPham/6928820030240.jpg', 2, '400ml', 'Aqua / Water, Hexylene Glycol, Glycerin, Rosa Gallica Flower Extract, Sorbitol, Poloxamer 184, Disodium Cocoamphodiacetate, Disodium Edta, Propylene Glycol, BHT , Polyaminopropyl Biguanide', 'Chiết xuất hoa hồng Pháp: cân bằng độ ẩm & làm mềm mịn da, làn da vẫn đủ độ ẩm sau khi tẩy trang.', 'Ứng dụng công nghệ Micellar dịu nhẹ giúp làm sạch da, lấy đi bụi bẩn, dầu thừa và cặn trang điểm chỉ trong một bước, mang lại làn da thông thoáng, mềm mượt mà không hề khô căng.', 'Lắc đều sản phẩm Nước Tẩy Trang L\'Oreal trước khi sử dụng.\r\nĐổ nước tẩy trang thấm ướt vừa đủ lên miếng bông tẩy trang.\r\nNhẹ nhàng lau lên mặt, mắt và môi theo chuyển động tròn (Riêng đối với vùng mắt, bạn hãy giữ miếng bông tẩy trang trên mắt vài giây để nước tẩy trang thấm sâu và cuốn đi lớp make-up dễ dàng hơn).\r\nSử dụng để tẩy trang nhanh (không cần rửa lại với nước) khi bận rộn hoặc ở những nơi thiếu nước: khi đi du lịch, đi spa, đi gym, v.v...\r\nKhuyến khích sử dụng quy trình chăm sóc da hoàn chỉnh để có hiệu quả dưỡng da tốt nhất (Nước tẩy trang - Sữa rửa mặt - Nước hoa hồng - Kem dưỡng).'),
('8809416470511', 'Low pH Good Morning Gel Cleanser', 339000, 64, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/8809416470511', 4, '150ml', 'Water, Cocamidopropyl Betaine, Sodium Lauroyl Methyl Isethionate, Polysorbate 20, Styrax Japonicus Branch/Fruit/Leaf Extract. Butylene Glycol, Saccharomyces Ferment, Cryptomeria Japonica Leaf Extract, Nelumbo Nucifera Leaf Extract, Pinus Palustris Leaf Extract. Ulmus Davidiana Root Extract, Oenothera Biennis (Evening Primrose) Flower Extract. Pueraria Lobata Root Extract, Melaleuca Alternifolia (Tea Tree) Leaf Oil, Allantoin, Caprylyl Glycol. Ethylhexylglycerin, Betaine Salicylate, Citric Acid, Ethyl Hexanediol, 1,2-Hexanediol, Trisodium Ethylenediamine Disuccinate, Sodium Benzoate, Disodium EDTA', 'Sản phẩm phù hợp với mọi loại da. Đặc biệt da nhạy cảm, da khô và da mụn.', 'Gel Rửa Mặt Cosrx Tràm Trà, 0.5% BHA Có Độ pH Thấp 150ml là dòng sữa rửa mặt đến từ thương hiệu mỹ phẩm Cosrx của Hàn Quốc, với độ pH lý tưởng 4.5 - 5.5 sản phẩm an toàn và dịu nhẹ trên mọi làn da ngay cả làn da nhạy cảm và da mụn. Gel rửa mặt chứa 0,5% BHA tự nhiên và chiết xuất tràm trà làm sạch sâu lỗ chân lông, hỗ trợ kháng khuẩn, làm sạch mụn đồng thời tẩy da chết nhẹ nhàng.', 'Sử dụng sản phẩm Gel Rửa Mặt Cosrx Tràm Trà, 0.5% BHA Có Độ pH Thấp 2 lần/ngày vào buổi sáng và buổi tối, sau bước tẩy trang.\r\nLàm ướt vùng da mặt, sau đó lấy một lượng vừa đủ Gel Rửa Mặt Cosrx cho vào lòng bàn tay và tạo bọt.\r\nMassage nhẹ nhàng lên mặt để bắt đầu quá trình làm sạch da (tránh vùng mắt và miệng).\r\nRửa sạch da lại bằng nước sạch hoặc nước ấm.\r\nTiếp tục với các sản phẩm tiếp theo trong chu trình dưỡng da.'),
('8935006538283', 'Skin Aqua Clear White SPF50+ PA++++', 208000, 20, 'http://localhost/Beauty_App/resources\\views\\img\\SanPham/8935006538283', 13, '55g', 'Water, Cyclopentasiloxane, Zinc Oxide, Ethylhexyl Methoxycinnamate, Methyl Methacrylate Crosspolymer, Dimethicone, PEG-9 Polydimethylsiloxyethyl Dimethicone, Simmondsia Chinensis (Jojoba) Seed Oil, Isononyl Isononanoate, Talc, Triethylhexyl Trimellitate, Phenyl Methicone, Ascorbyl Glucoside, Tocopheryl Acetate, Sodium Hyaluronate, Arginine, Niacinamide, Ceramide NP, Trimethylsiloxysilicate, Glycol Dimethacrylate Crosspolymer, Hydrated Silica, Butylene Glycol, Diethylamino Hydroxybenzoyl Hexyl Benzoate, Bis-Ethylhexyloxyphenol Methoxyphenyl Triazine, Hydrogen Dimethicone, Polystyrene, Polyvinyl Alcohol, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Disodium EDTA, Triethanolamine.', 'Sản phẩm phù hợp cho da dầu, hỗn hợp dầu, da thường', 'Giúp chống nắng mạnh mẽ và bền bì trên da, đồng thời hạn chế tình trạng mất nước và duy trì độ ẩm tối ưu. Đặc biệt, sản phẩm còn có công dụng kiểm soát bã nhờn và dưỡng da sáng mịn đều màu, là giải pháp lý tưởng dành cho các cô nàng da dầu nhờn trong mùa hè nóng bức', 'Thoa đều sản phẩm trước khi ra nắng.\r\nDùng hàng ngày để bảo vệ da tốt nhất.\r\nSau khi ra mồ hôi nhiều, thoa lại để có hiệu quả tốt hơn.'),
('8935006539273', 'Skin Aqua Tone Up UV Essence Lavender SPF50+/PA++++', 185000, 20, 'https://media.hasaki.vn/catalog/product/f/a/facebook-dynamic-tinh-chat-chong-nang-sunplay-hieu-chinh-sac-da-50g-tim-1673253499_img_358x358_843626_fit_center.jpg', 1, '50g', 'Water,Ethylhexyl Methoxycinnamate, Butylene Glycol, Phenyl Trimethicone, Titanium Dioxide, Diethylamino Hydroxybenzoy Hexyl Benzoate, Methyl Methacrylate Crosspolymer, Sodium Hyaluronate, Magnesium Ascorbyl Phosphate, Pearl Powder, Bis-PEG-18 Methyl Ether Dimethyl Silane, Acrylates Copolymer, Polyglyceryl-2 Triisostearate, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Polystyrene, Glycol Dimethacrylate Crosspolymer, Silica, Alumina, Synthetic Fluorphlogopite, Tin Oxide, Bis-Ethylhexyloxyphenol Methoxyphenyl Triazine, Polysorbate 60, Ammonium Acryloyldimethyltaurate/VP Copolymer, PEG-12 Dimethicone, Polyvinyl Alcohol, Triethanolamine, Xanthan Gum, Disodium EDTA, Phenoxyethanol, Ethylhexylglycerin, BHT, Fragrance, CI 42090, CI 73360.', 'Không chứa cồn\r\nKhông gây khô da\r\nDịu nhẹ cho da nhạy cảm', 'Khả năng chống nắng cực đỉnh (SPF 50+ PA++++)\r\nGiữ ẩm và dưỡng sáng da tối ưu (nhờ thành phần dưỡng ẩm Hyaluronic Acid và Vitamin C)\r\nKhả năng hiệu chỉnh sắc da và nâng tone da rạng rỡ.', 'Làm sạch da với sữa rửa mặt trước khi dùng.\r\nThoa một lượng vừa đủ và đều khắp vùng da cần được bảo vệ. Nên dùng hàng ngày trước khi ra nắng để bảo vệ da tốt nhất.\r\nKhi ra mồ hôi nhiều, nên thoa lại để duy trì hiệu quả chống nắng.'),
('8935006539754', 'Skin Aqua Tone Up UV Essence Mint Green SPF50+ PA++++', 185000, 0, 'https://media.hasaki.vn/catalog/product/f/a/facebook-dynamic-tinh-chat-chong-nang-sunplay-hieu-chinh-sac-da-50g-xanh-1673255790_img_358x358_843626_fit_center.jpg', 1, '50g', 'Water, Ethylhexyl Methoxycinnamate, Butylene Glycol, Phenyl Trimethicone, Titanium Dioxide, Polysorbate 60, Diethylamino Hydroxybenzoyl Hexyl Benzoate, Methyl Methacrylate Crosspolymer, Sodium Hyaluronate, Magnesium Ascorbyl Phosphat, Pearl Powder, Bis-PEG-18 Methyl Ether, Dimethyl Silane, Acrylates Copolymer, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Polystyrene, Glycol Dimethacrylate Crosspolymer, Silica, Alumina, Synthetic Fluorphlogopite, Tin Oxide, Bis-Ethylhexyloxyphenol Methoxyphenyl Triazine, Ammonium Acryloyldimethyltaurate/VP Copolymer, PEG-12 Dimethicone, Polyvinyl Alcohol, Triethanolamine, Xanthan Gum, Disodium EDTA, Phenoxyethanol, Ethylhexylglycerin, BHT, Fragrance, CI 19140, CI 42090.', 'Kết cấu dạng tinh chất mỏng nhẹ\r\nKhông nhờn rít giúp da luôn ẩm mượt.', 'CHỐNG NẮNG HIỆU QUẢ VỚI: PA++++ tăng cường chống mọi loại tia UVA (gây đen sạm, nám, tàn nhang, nếp nhăn, đốm nâu,...) và SPF50+ ngăn tia UVB (gây rát da, cháy nắng,...)\r\nHIỆU CHỈNH SẮC DA: Nhờ sắc xanh Mint tươi mát kết hợp giữa sắc xanh dương và xanh lá giúp hiệu chỉnh các khuyết điểm & vùng da ửng đỏ, nâng tông da sáng trong veo\r\nTẠO HIỆU ỨNG TRONG SUỐT 3D: Các hạt ngọc trai siêu mịn phản chiếu ánh sáng đa chiều cho da trong suốt, rạng rỡ\r\nGIỮ ẨM VÀ DƯỠNG SÁNG DA: Thành phần dưỡng ẩm Hyaluronic Acid giúp duy trì độ ẩm tự nhiên, kết hợp Vitamin C dưỡng da sáng mịn\r\nKhả năng chịu nước và mồ hôi cao, giúp duy trì khả năng bảo vệ làn da suốt nhiều giờ liền\r\nSản phẩm được thiết kế dành riêng cho da mặt, thích hợp sử dụng hằng ngày và có thể dùng làm lớp lót trang điểm.', 'Làm sạch da với sữa rửa mặt trước khi dùng.\r\nThoa một lượng vừa đủ và đều khắp vùng da cần được bảo vệ. Nên dùng hàng ngày trước khi ra nắng để bảo vệ da tốt nhất.\r\nKhi ra mồ hôi nhiều, nên thoa lại để duy trì hiệu quả chống nắng.'),
('8935006541672', 'Skin Aqua Tone Up UV Essence SPF50+ PA++++ - Happiness Aura Rose Color', 185000, 0, 'https://media.hasaki.vn/catalog/product/f/a/facebook-dynamic-tinh-chat-chong-nang-sunplay-hieu-chinh-sac-da-50g-hong-1655967921_img_358x358_843626_fit_center.jpg', 1, '50g', 'Water, Ethylhexyl Methoxycinnamate, Butylene Glycol, Phenyl Trimethicone, Titanium Dioxide, Polysorbate 60, Diethylamino Hydroxybenzoyl Hexyl Benzoate, Methyl Methacrylate Crosspolymer, Pearl Powder, Bis-Ethylhexyloxyphenol Methoxyphenyl Triazine, Magnesium Ascorbyl Phosphate, Sodium Hyaluronate, Tocopherol, Ammonium Acryloyldimethyltaurate/VP Copolymer, Silica, PEG-12 Dimethicone, Polystyrene, Xanthan Gum, Disodium EDTA, Alumina, Tin Oxide, Bis-PEG-18 Methyl Ether Dimethyl Silane, Glycol Dimethacrylate Crosspolymer, Acrylates Copolymer, Synthetic Fluorphlogopite, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Triethanolamine, Polyvinyl Alcohol, Fragrance, Ethylhexylglycerin, BHT, Phenoxyethanol, CI 45370, CI 77491.', 'Đặc biệt phù hợp cho những người có tông da tái xanh.', 'CHỐNG NẮNG HIỆU QUẢ VỚI: PA++++ tăng cường chống mọi loại tia UVA (gây đen sạm, nám, tàn nhang, nếp nhăn, đốm nâu,...) và SPF50+ ngăn tia UVB (gây rát da, cháy nắng,...).\r\n\r\nHIỆU CHỈNH SẮC DA: Sự hòa quyện sắc hồng đậm và sắc vỏ cam nhạt tạo nên màu cánh hồng giúp hiệu chỉnh tông da tái xanh, che phủ khuyết điểm tự nhiên\r\nTẠO HIỆU ỨNG TRONG SUỐT 3D: Các hạt ngọc trai siêu mịn phản chiếu ánh sáng đa chiều cho da trong suốt, rạng rỡ\r\nGIỮ ẨM VÀ DƯỠNG SÁNG DA: Thành phần dưỡng ẩm Hyaluronic Acid giúp duy trì độ ẩm tự nhiên, kết hợp Vitamin C dưỡng da sáng mịn\r\nKhả năng chịu nước và mồ hôi cao, giúp duy trì khả năng bảo vệ làn da suốt nhiều giờ liền\r\nSản phẩm được thiết kế dành riêng cho da mặt, thích hợp sử dụng hằng ngày và có thể dùng làm lớp lót trang điểm', 'Làm sạch da với sữa rửa mặt trước khi dùng\r\nThoa một lượng vừa đủ và đều khắp vùng da cần được bảo vệ. Nên dùng hàng ngày trước khi ra nắng để bảo vệ da tốt nhất\r\nKhi ra mồ hôi nhiều, nên thoa lại để duy trì hiệu quả chống nắng'),
('8935006542938', 'Skin Aqua Tone Up UV Essence SPF50+ PA++++ - Latte Beige', 185000, 0, 'https://media.hasaki.vn/catalog/product/f/a/facebook-dynamic-tinh-chat-chong-nang-sunplay-hieu-chinh-sac-da-50g-cam-1651135438_img_358x358_843626_fit_center.jpg', 1, '50g', 'Water, Ethylhexyl Methoxycinnamate, Butylene Glycol, Talc, Triethylhexanoin, Diethylamino Hydroxybenzoyl Hexyl Benzoate, Bis-Ethylhexyloxyphenol Methoxyphenyl Triazine, Methyl Methacrylate Crosspolymer, Bis-Isobutyl PEG/PPG-10/7/Dimethicone Copolymer, Bis-PEG-18 Methyl Ether Dimethyl Silane, PEG-40 Stearate, Synthetic Fluorphlogopite, Tin Oxide, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Silica, Alumina, Mica, Ammonium Acryloyldimethyltaurate/VP Copolymer, Triethanolamine, Sodium Hyaluronate (HA), Magnesium Ascorbyl Phosphate, Xanthan Gum, Disodium EDTA, Ethylhexylglycerin, Pearl Powder, Methylene Bis-Benzotriazolyl Tetramethylbutylphenol, Glycol Dimethacrylate Crosspolymer, Decyl Glucoside, Polystyrene, Polyvinyl Alcohol, Propylene Glycol, Phenoxyethanol, Fragrance, CI 77491, CI 77492, CI 77499, CI 77891.', 'Dành cho da có khuyết điểm như lỗ chân lông to, da sạm & xỉn màu.', 'CHỐNG NẮNG HIỆU QUẢ VỚI: PA++++ tăng cường chống mọi loại tia UVA (gây đen sạm, nám, tàn nhang, nếp nhăn, đốm nâu,...) và SPF50+ ngăn tia UVB (gây rát da, cháy nắng,...)\r\nHIỆU CHỈNH SẮC DA: Sự hoà quyện sắc cam đầy năng lượng và màu bọt sữa vani tinh khôi tạo nên sắc kem Latte Beige giúp che phủ khuyết điểm tự nhiên, cho làn da mộc thêm đều màu, rạng rỡ, kết hợp hương Latte dịu ngọt đón nắng mai\r\nTẠO HIỆU ỨNG TRONG SUỐT 3D: Các hạt ngọc trai siêu mịn phản chiếu ánh sáng đa chiều cho da trong suốt, rạng rỡ cùng chất kem mịn giúp che phủ lỗ chân lông. Da mướt mịn như phủ một lớp sương mai\r\nGIỮ ẨM VÀ DƯỠNG SÁNG DA: Thành phần dưỡng ẩm Hyaluronic Acid giúp duy trì độ ẩm tự nhiên, kết hợp Vitamin C dưỡng da sáng mịn\r\nKhả năng chịu nước và mồ hôi cao, giúp duy trì khả năng bảo vệ làn da suốt nhiều giờ liền\r\nSản phẩm được thiết kế dành riêng cho da mặt, thích hợp sử dụng hằng ngày và có thể dùng làm lớp lót trang điểm', 'Làm sạch da với sữa rửa mặt trước khi dùng\r\nThoa một lượng vừa đủ và đều khắp vùng da cần được bảo vệ. Nên dùng hàng ngày trước khi ra nắng để bảo vệ da tốt nhất\r\nKhi ra mồ hôi nhiều, nên thoa lại để duy trì hiệu quả chống nắng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sp_loai_da`
--

CREATE TABLE `sp_loai_da` (
  `barCode` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `loaiDa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sp_loai_da`
--

INSERT INTO `sp_loai_da` (`barCode`, `loaiDa`) VALUES
('3337872411083', 6),
('3337875565783', 6),
('3337875598071', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `sdt` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `mk` text COLLATE utf8_unicode_ci NOT NULL,
  `hoTen` text COLLATE utf8_unicode_ci NOT NULL,
  `gioiTinh` tinyint(1) NOT NULL DEFAULT 0,
  `ngaySinh` date NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaiTK` bit(1) NOT NULL DEFAULT b'1',
  `trangThai` tinyint(1) NOT NULL DEFAULT 1,
  `loaiDa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`sdt`, `mk`, `hoTen`, `gioiTinh`, `ngaySinh`, `email`, `loaiTK`, `trangThai`, `loaiDa`) VALUES
('0123456789', '6d071901727aec1ba6d8e2497ef5b709', 'Admin', 0, '0001-01-01', '', b'0', 1, NULL),
('0393201893', 'e10adc3949ba59abbe56e057f20f883e', 'Trương Triệu Vỹ', 0, '2009-06-29', '', b'1', 1, NULL),
('0842381421', '6d071901727aec1ba6d8e2497ef5b709', 'Trương Trung Hiếu', 0, '2001-04-22', '', b'0', 1, 6),
('0859091199', '0d59ea092bb63b8000ddc5fe02188f4d', 'Trương Hoài An', 0, '2001-01-01', '', b'1', 1, 6),
('0911971536', 'e10adc3949ba59abbe56e057f20f883e', 'Trương Hiếu Nghĩa', 0, '2001-04-22', NULL, b'1', 1, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_gh`
--

CREATE TABLE `thong_tin_gh` (
  `sdt` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `maDC` int(11) NOT NULL,
  `hoTenNhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdtNhan` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `dcNhan` text COLLATE utf8_unicode_ci NOT NULL,
  `macDinh` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_gh`
--

INSERT INTO `thong_tin_gh` (`sdt`, `maDC`, `hoTenNhan`, `sdtNhan`, `dcNhan`, `macDinh`) VALUES
('0859091199', 1, 'Lê Văn Trí', '0393277289', 'Chợ Ba Hồ, Xã Vĩnh Hòa Hưng Bắc, Huyện Gò Quao, Tỉnh Kiên Giang', 0),
('0911971536', 1, 'Trương Hiếu Nghĩa', '0911971536', 'Ký túc xá A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', 0),
('0859091199', 2, 'Đặng Hữu Lộc', '0392123124', 'KTX A, Đại học Cần Thơ, Phường Xuân Khánh, Quận Ninh Kiều, Thành phố Cần Thơ', 1),
('0911971536', 2, 'Nguyễn Thành Luân', '0345854601', 'Chợ Bình Đại, Xã Thạnh Trị, Huyện Bình Đại, Tỉnh Bến Tre', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuong_hieu`
--

CREATE TABLE `thuong_hieu` (
  `maTH` smallint(6) NOT NULL,
  `thuongHieu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maNSX` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuong_hieu`
--

INSERT INTO `thuong_hieu` (`maTH`, `thuongHieu`, `maNSX`) VALUES
(1, 'HADA LABO', 1),
(2, 'ACNES', 1),
(3, 'OXY', 1),
(7, 'SUNPLAY', 1),
(8, 'L\'ORÉAL', 3),
(9, 'LANCÔME', 3),
(10, 'VICHY', 3),
(11, ' LA ROCHE POSAY', 3),
(12, 'OLAY', 7),
(13, 'NEUTROGENA', 8),
(14, 'THE ORDINARY', 18),
(15, 'PAULA\'S CHOICE', 16),
(16, 'BIODERMA', 12),
(17, 'NIVEA', 4),
(18, 'EUCERIN', 4),
(19, 'CETAPHIL ', 11),
(20, 'SIMPLE', 17),
(21, 'SHISEIDO', 6),
(22, 'SENKA', 6),
(23, 'ANESSA ', 6),
(24, 'INNISFREE ', 13),
(25, 'KLAIRS ', 14),
(26, 'COSRX ', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang-thai_hd`
--

CREATE TABLE `trang-thai_hd` (
  `maTT` tinyint(4) NOT NULL,
  `trangThai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trang-thai_hd`
--

INSERT INTO `trang-thai_hd` (`maTT`, `trangThai`) VALUES
(1, 'Mới đặt'),
(2, 'Đang xử lý'),
(3, 'Đang giao'),
(4, 'Thành công'),
(5, 'Đã hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnpay`
--

CREATE TABLE `vnpay` (
  `id` int(11) NOT NULL,
  `vnp_Amount` int(11) NOT NULL,
  `vnp_BankCode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_BankTranNo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_CardType` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_OrderInfo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_PayDate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_TmnCode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_TransactionNo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_TxnRef` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_SecureHash` text COLLATE utf8_unicode_ci NOT NULL,
  `sdt` char(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vnpay`
--

INSERT INTO `vnpay` (`id`, `vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_CardType`, `vnp_OrderInfo`, `vnp_PayDate`, `vnp_TmnCode`, `vnp_TransactionNo`, `vnp_TxnRef`, `vnp_SecureHash`, `sdt`) VALUES
(1, 21000000, 'NCB', 'VNP13979601', 'ATM', 'Thanh toán qua VNPAY', '20230330123628', '7OZY22ID', '13979601', '1680154533', '16cbb95ae44a6f4896a4754427d0e7ae2cd476464def7d50d96a0b8f7f5f8021bfc8ca499349200c777f26ab60e53248f1d61031c588abe2596d49ae77e22623', '0911971536'),
(2, 210000, 'NCB', 'VNP13979602', 'ATM', 'Thanh toán qua VNPAY', '20230330123909', '7OZY22ID', '13979602', '1680154704', 'b873cc0f2cff90c9ad40d5e73fa9f4a7c808dd806774b78c4a452a8470a01ddf0adf746efaf204171f683be35e9114e83bf30b75bbc4d9a2b25d7ddde376c388', '0911971536'),
(3, 173920, 'NCB', 'VNP14010938', 'ATM', 'Thanh toán qua VNPAY', '20230512143212', '7OZY22ID', '14010938', '1683876680', 'bff6047306d81d958afa51200f9563d01496df3142de8e8782b6786f7e61898fdea1e3c2b5acd54456312d77acd27c65c598cb751a1e8efdd1613d40b7024bfa', '0911971536');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_hd`
--
ALTER TABLE `chi_tiet_hd`
  ADD PRIMARY KEY (`maHD`,`stt`,`sdt`),
  ADD KEY `sdt` (`sdt`,`maHD`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`maDM`);

--
-- Chỉ mục cho bảng `dong_sp`
--
ALTER TABLE `dong_sp`
  ADD PRIMARY KEY (`maDong`),
  ADD KEY `maLoai` (`maLoai`),
  ADD KEY `maTH` (`maTH`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`sdt`,`barCode`),
  ADD KEY `barCode` (`barCode`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`maHD`,`sdt`),
  ADD KEY `trangThaiHD` (`trangThaiHD`),
  ADD KEY `sdt` (`sdt`),
  ADD KEY `pThucTT` (`pThucTT`);

--
-- Chỉ mục cho bảng `loai_da`
--
ALTER TABLE `loai_da`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`maLoai`),
  ADD KEY `maDM` (`maDM`);

--
-- Chỉ mục cho bảng `lo_hang`
--
ALTER TABLE `lo_hang`
  ADD PRIMARY KEY (`maLo`),
  ADD KEY `barCode` (`barCode`),
  ADD KEY `noiSX` (`noiSX`);

--
-- Chỉ mục cho bảng `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sdt` (`sdt`),
  ADD KEY `momo_ibfk_1` (`sdt`,`orderId`);

--
-- Chỉ mục cho bảng `nsx`
--
ALTER TABLE `nsx`
  ADD PRIMARY KEY (`maNSX`),
  ADD KEY `xuatXu` (`xuatXu`);

--
-- Chỉ mục cho bảng `phuong_thuc_tt`
--
ALTER TABLE `phuong_thuc_tt`
  ADD PRIMARY KEY (`maPT`);

--
-- Chỉ mục cho bảng `quoc_gia`
--
ALTER TABLE `quoc_gia`
  ADD PRIMARY KEY (`maQG`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`barCode`),
  ADD KEY `maDong` (`maDong`);

--
-- Chỉ mục cho bảng `sp_loai_da`
--
ALTER TABLE `sp_loai_da`
  ADD PRIMARY KEY (`barCode`,`loaiDa`),
  ADD KEY `loaiDa` (`loaiDa`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`sdt`),
  ADD KEY `loaiDa` (`loaiDa`);

--
-- Chỉ mục cho bảng `thong_tin_gh`
--
ALTER TABLE `thong_tin_gh`
  ADD PRIMARY KEY (`maDC`,`sdt`),
  ADD KEY `sdt` (`sdt`);

--
-- Chỉ mục cho bảng `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  ADD PRIMARY KEY (`maTH`),
  ADD KEY `maNSX` (`maNSX`);

--
-- Chỉ mục cho bảng `trang-thai_hd`
--
ALTER TABLE `trang-thai_hd`
  ADD PRIMARY KEY (`maTT`);

--
-- Chỉ mục cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vnp_TxnRef` (`vnp_TxnRef`,`sdt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `maDM` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dong_sp`
--
ALTER TABLE `dong_sp`
  MODIFY `maDong` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `loai_da`
--
ALTER TABLE `loai_da`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `maLoai` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `momo`
--
ALTER TABLE `momo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nsx`
--
ALTER TABLE `nsx`
  MODIFY `maNSX` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `phuong_thuc_tt`
--
ALTER TABLE `phuong_thuc_tt`
  MODIFY `maPT` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `quoc_gia`
--
ALTER TABLE `quoc_gia`
  MODIFY `maQG` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `thong_tin_gh`
--
ALTER TABLE `thong_tin_gh`
  MODIFY `maDC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `maTH` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `trang-thai_hd`
--
ALTER TABLE `trang-thai_hd`
  MODIFY `maTT` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_hd`
--
ALTER TABLE `chi_tiet_hd`
  ADD CONSTRAINT `chi_tiet_hd_ibfk_1` FOREIGN KEY (`sdt`,`maHD`) REFERENCES `hoa_don` (`sdt`, `maHD`);

--
-- Các ràng buộc cho bảng `dong_sp`
--
ALTER TABLE `dong_sp`
  ADD CONSTRAINT `dong_sp_ibfk_3` FOREIGN KEY (`maLoai`) REFERENCES `loai_sp` (`maLoai`),
  ADD CONSTRAINT `dong_sp_ibfk_4` FOREIGN KEY (`maTH`) REFERENCES `thuong_hieu` (`maTH`);

--
-- Các ràng buộc cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`sdt`) REFERENCES `tai_khoan` (`sdt`),
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`barCode`) REFERENCES `san_pham` (`barCode`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`trangThaiHD`) REFERENCES `trang-thai_hd` (`maTT`),
  ADD CONSTRAINT `hoa_don_ibfk_3` FOREIGN KEY (`sdt`) REFERENCES `tai_khoan` (`sdt`),
  ADD CONSTRAINT `hoa_don_ibfk_4` FOREIGN KEY (`pThucTT`) REFERENCES `phuong_thuc_tt` (`maPT`);

--
-- Các ràng buộc cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD CONSTRAINT `loai_sp_ibfk_1` FOREIGN KEY (`maDM`) REFERENCES `danh_muc` (`maDM`);

--
-- Các ràng buộc cho bảng `lo_hang`
--
ALTER TABLE `lo_hang`
  ADD CONSTRAINT `lo_hang_ibfk_1` FOREIGN KEY (`barCode`) REFERENCES `san_pham` (`barCode`),
  ADD CONSTRAINT `lo_hang_ibfk_2` FOREIGN KEY (`noiSX`) REFERENCES `quoc_gia` (`maQG`);

--
-- Các ràng buộc cho bảng `momo`
--
ALTER TABLE `momo`
  ADD CONSTRAINT `momo_ibfk_1` FOREIGN KEY (`sdt`,`orderId`) REFERENCES `hoa_don` (`sdt`, `maHD`);

--
-- Các ràng buộc cho bảng `nsx`
--
ALTER TABLE `nsx`
  ADD CONSTRAINT `nsx_ibfk_1` FOREIGN KEY (`xuatXu`) REFERENCES `quoc_gia` (`maQG`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`maDong`) REFERENCES `dong_sp` (`maDong`);

--
-- Các ràng buộc cho bảng `sp_loai_da`
--
ALTER TABLE `sp_loai_da`
  ADD CONSTRAINT `sp_loai_da_ibfk_1` FOREIGN KEY (`barCode`) REFERENCES `san_pham` (`barCode`),
  ADD CONSTRAINT `sp_loai_da_ibfk_2` FOREIGN KEY (`loaiDa`) REFERENCES `loai_da` (`ID`);

--
-- Các ràng buộc cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD CONSTRAINT `tai_khoan_ibfk_1` FOREIGN KEY (`loaiDa`) REFERENCES `loai_da` (`ID`);

--
-- Các ràng buộc cho bảng `thong_tin_gh`
--
ALTER TABLE `thong_tin_gh`
  ADD CONSTRAINT `thong_tin_gh_ibfk_1` FOREIGN KEY (`sdt`) REFERENCES `tai_khoan` (`sdt`);

--
-- Các ràng buộc cho bảng `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  ADD CONSTRAINT `thuong_hieu_ibfk_1` FOREIGN KEY (`maNSX`) REFERENCES `nsx` (`maNSX`);

--
-- Các ràng buộc cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD CONSTRAINT `vnpay_ibfk_1` FOREIGN KEY (`vnp_TxnRef`,`sdt`) REFERENCES `hoa_don` (`maHD`, `sdt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
