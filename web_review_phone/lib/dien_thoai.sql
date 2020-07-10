-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 10, 2020 lúc 07:53 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dien_thoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `ID_BAI_VIET` int(11) NOT NULL,
  `ID_DIEN_THOAI` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `TITLE` varchar(1000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `NOI_DUNG_BAI_VIET` varchar(10000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TEN_TAC_GIA` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `NGAY_DANG_BAI_VIET` datetime DEFAULT NULL,
  `SO_LUOT_THICH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`ID_BAI_VIET`, `ID_DIEN_THOAI`, `ID_USER`, `TITLE`, `NOI_DUNG_BAI_VIET`, `TEN_TAC_GIA`, `NGAY_DANG_BAI_VIET`, `SO_LUOT_THICH`) VALUES
(1, 1, NULL, 'Sau bao nhiêu chờ đợi cũng như đồn đoán thì cuối cùng Apple đã chính thức giới thiệu bộ 3 siêu phẩm iPhone 11 mạnh mẽ nhất của mình vào tháng 9/2019. Có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ, đó chính là phiên bản iPhone 11 64G', '<div class=\"chitiet-review\">\r\n\r\n    \r\n        <h2>Sau bao nhiêu chờ đợi cũng như đồn đoán thì cuối cùng Apple đã chính thức giới thiệu bộ 3 siêu phẩm iPhone 11 mạnh mẽ nhất của mình vào tháng 9/2019. Có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ, đó chính là phiên bản iPhone 11 64G.</h2>\r\n\r\n                    <h3>Nâng cấp mạnh mẽ về camera</h3>\r\n\r\n            <p>Nói về nâng cấp thì camera chính là điểm có nhiều cải tiến nhất trên thế hệ iPhone mới.\r\nNếu như trước đây iPhone Xr chỉ có một camera thì nay với iPhone 11 chúng ta sẽ có tới hai camera ở mặt sau.</p>\r\n            <p style=\"text-align: center;\">\r\n                <img src=\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-tgdd42.jpg\">\r\n            </p>\r\n            <p style=\"text-align: center;\"><em><span style=\"text-align: center;\">\r\n                            </span></em></p>  \r\n                <h3></h3>\r\n\r\n            <p>Nếu như trước đây iPhone Xr chỉ có một camera thì nay với iPhone 11 chúng ta sẽ có tới hai camera ở mặt sau.</p>\r\n            <p style=\"text-align: center;\">\r\n                <img src=\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-114-1.jpg\">\r\n            </p>\r\n            <p style=\"text-align: center;\"><em><span style=\"text-align: center;\">\r\n                            </span></em></p>  \r\n                <h3></h3>\r\n\r\n            <p>Ngoài camera chính vẫn có độ phân giải 12 MP thì chúng ta sẽ có thêm một camera góc siêu rộng và cũng với độ phân giải tương tự.</p>\r\n            <p style=\"text-align: center;\">\r\n                <img src=\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-116.jpg\">\r\n            </p>\r\n            <p style=\"text-align: center;\"><em><span style=\"text-align: center;\">\r\n                Ảnh chụp chân dung với iPhone 11            </span></em></p>  \r\n                <h3></h3>\r\n\r\n            <p>Theo Apple thì việc chuyển đổi qua lại giữa hai ống kính thì sẽ không làm thay đổi màu sắc của bức ảnh.\r\nĐây là một điều được xem là bước ngoặt bởi những chiếc smartphone Android có nhiều camera hiện nay sẽ thường bị sai lệch về màu sắc khi chuyển đổi qua lại giữa các ống kính gây cảm giác khá khó chịu cho người dùng.</p>\r\n            <p style=\"text-align: center;\">\r\n                <img src=\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-tgdd7.jpg\">\r\n            </p>\r\n            <p style=\"text-align: center;\"><em><span style=\"text-align: center;\">\r\n                Ảnh chụp với Deep Fusion            </span></em></p>  \r\n                <h3></h3>\r\n\r\n            <p>Bên cạnh đó với iPhone 11 thì đây sẽ là lần đầu tiên Apple trang bị khả năng chụp đêm lên chiếc iPhone của mình.</p>\r\n            <p style=\"text-align: center;\">\r\n                <img src=\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-113.jpg\">\r\n            </p>\r\n            <p style=\"text-align: center;\"><em><span style=\"text-align: center;\">\r\n                Ảnh chụp với chế độ Night Mode            </span></em></p>  \r\n                <h3></h3>\r\n\r\n            <p>Theo trải nghiệm thì tính năng này hoạt động rất hiệu quả đặc biệt trong những môi trường cực kỳ thiếu sáng.</p>\r\n            <p style=\"text-align: center;\">\r\n                <img src=\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-112.jpg\">\r\n            </p>\r\n            <p style=\"text-align: center;\"><em><span style=\"text-align: center;\">\r\n                            </span></em></p>  \r\n                <h3></h3>\r\n\r\n            <p>Kích hoạt chế độ chụp đêm sẽ do iPhone tự quyết định việc của bạn chỉ cần đưa máy lên và chụp, rất đơn giản.</p>\r\n            <p style=\"text-align: center;\">\r\n                <img src=\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-.jpg\">\r\n            </p>\r\n            <p style=\"text-align: center;\"><em><span style=\"text-align: center;\">\r\n                Ảnh chụp chế độ góc siêu rộng            </span></em></p>  \r\n                <h3></h3>\r\n\r\n            <p>Năm nay Apple cũng đã nâng cấp độ phân giải camera trước nên 12 MP thay vì 7 MP như thế hệ trước đó.\r\nCamera trước cũng có một tính năng thông minh, khi bạn xoay ngang điện thoại nó sẽ tự kích hoạt chế độ selfie góc rộng để bạn có thể chụp với nhiều người hơn.\r\nNgoài ra Apple cũng giới thiệu tính năng quay video slow motion dành cho camera trước, điều mà Apple chưa từng trang bị cho những chiếc iPhone trước đây.</p>\r\n            <p style=\"text-align: center;\">\r\n                <img src=\"\">\r\n            </p>\r\n            <p style=\"text-align: center;\"><em><span style=\"text-align: center;\">\r\n                            </span></em></p>  \r\n        </div>', 'thinh', '2020-06-26 12:43:11', NULL),
(2, 2, NULL, NULL, NULL, 'dai', '2020-06-26 12:43:43', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bao_cao_binh_luan`
--

CREATE TABLE `bao_cao_binh_luan` (
  `ID_BAO_CAO` int(11) NOT NULL,
  `LOAI_BAO_CAO` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `MO_TA_BAO_CAO` varchar(1000) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bao_cao_binh_luan`
--

INSERT INTO `bao_cao_binh_luan` (`ID_BAO_CAO`, `LOAI_BAO_CAO`, `MO_TA_BAO_CAO`) VALUES
(1, 'Từ ngữ không phù hợp', NULL),
(2, 'Xác định sai thuộc tính', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ID_BINH_LUAN` int(11) NOT NULL,
  `ID_BAI_VIET` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `TEN_NGUOI_BINH_LUAN` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `NOI_DUNG_BINH_LUAN` varchar(500) COLLATE utf32_unicode_ci DEFAULT NULL,
  `NGAY_BINH_LUAN` datetime DEFAULT NULL,
  `PHAN_LOAI_BINH_LUAN` bit(1) DEFAULT NULL,
  `HIEN_THI_BINH_LUAN` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ID_BINH_LUAN`, `ID_BAI_VIET`, `ID_USER`, `TEN_NGUOI_BINH_LUAN`, `NOI_DUNG_BINH_LUAN`, `NGAY_BINH_LUAN`, `PHAN_LOAI_BINH_LUAN`, `HIEN_THI_BINH_LUAN`) VALUES
(1, 1, 5, 'thinh', 'Máy mới dùng 2 tháng, sạc pin xong máy nóng ran, không dùng nữa đi ngủ , sáng ra dùng được 20 phút máy lại nóng ran không hiểu nổi', '2020-06-26 12:51:07', b'0', b'1'),
(2, 1, 6, 'dai', 'Mới mua máy được 1 ngày, thấy mọi thứ vẫn ổn, pin xài đc lâu, camera chụp tốt. Màn hình nhạy, mọi thứ tốt.\r\n', '2020-06-26 12:51:07', b'1', b'1'),
(3, 1, 5, 'thinh', 'Bình luận thứ 2', '2020-07-05 23:04:51', b'0', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hinh_dien_thoai`
--

CREATE TABLE `cau_hinh_dien_thoai` (
  `ID_DIEN_THOAI` int(11) NOT NULL,
  `DO_PHAN_GIAI_MAN_HINH` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `CONG_NGHE_MAN_HINH` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `KICH_THUOC_MAN_HINH` float DEFAULT NULL,
  `DO_PHAN_GIAI_CAMERA_TRUOC` int(11) DEFAULT NULL,
  `DO_PHAN_GIAI_CAMERA_SAU` int(11) DEFAULT NULL,
  `QUAY_PHIM` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `CHIPSET` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TOC_DO_CPU` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `CHIP_DO_HOA_GPU` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `RAM` int(11) DEFAULT NULL,
  `ROM` int(11) DEFAULT NULL,
  `THE_NHO_NGOAI` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `CHAT_LIEU` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `KICH_THUOC_DIEN_THOAI` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TRONG_LUONG_DIEN_THOAI` int(11) DEFAULT NULL,
  `DUNG_LUONG_PIN` int(11) DEFAULT NULL,
  `LOAI_PIN` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `CONG_NGHE_PIN` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `SIM` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `WIFI` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `BLUETOOTH` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `CONG_KET_NOI_SAC` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `JACK_TAI_NGHE` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `CHUC_NANG_KHAC` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cau_hinh_dien_thoai`
--

INSERT INTO `cau_hinh_dien_thoai` (`ID_DIEN_THOAI`, `DO_PHAN_GIAI_MAN_HINH`, `CONG_NGHE_MAN_HINH`, `KICH_THUOC_MAN_HINH`, `DO_PHAN_GIAI_CAMERA_TRUOC`, `DO_PHAN_GIAI_CAMERA_SAU`, `QUAY_PHIM`, `CHIPSET`, `TOC_DO_CPU`, `CHIP_DO_HOA_GPU`, `RAM`, `ROM`, `THE_NHO_NGOAI`, `CHAT_LIEU`, `KICH_THUOC_DIEN_THOAI`, `TRONG_LUONG_DIEN_THOAI`, `DUNG_LUONG_PIN`, `LOAI_PIN`, `CONG_NGHE_PIN`, `SIM`, `WIFI`, `BLUETOOTH`, `CONG_KET_NOI_SAC`, `JACK_TAI_NGHE`, `CHUC_NANG_KHAC`) VALUES
(1, '828 x 1792 Pixels', 'IPS LCD', 6.1, 12, 12, 'Quay phim HD 720p@30fps, Quay phim FullHD 1080p@30fps, Quay phim FullHD 1080p@60fps, Quay phim FullHD 1080p@120fps, Quay phim FullHD 1080p@240fps, Quay phim 4K 2160p@24fps, Quay phim 4K 2160p@30fps, Quay phim 4K 2160p@60fps', 'Apple A13 Bionic 6 nhân', '2 nhân 2.65 GHz & 4 nhân 1.8 GHz', 'Apple GPU 4 nhân', 4, 64, 'Không', 'Khung nhôm & Mặt lưng kính cường lực', 'Dài 150.9 mm - Ngang 75.7 mm - Dày 8.3 mm', 194, 3110, 'Pin chuẩn Li-Ion', 'Tiết kiệm pin, Sạc pin nhanh, Sạc pin không dây', '1 eSIM & 1 Nano SIM', 'Wi-Fi 802.11 a/b/g/n/ac/ax, Dual-band, Wi-Fi hotsp', 'A2DP, LE, v5.0', 'Lightning', 'Lightning', NULL),
(2, 'Full HD+ (1080 x 2400 Pixels)', 'TFT LCD', 6.5, 16, 48, 'Quay phim HD 720p@30fps, Quay phim FullHD 1080p@30fps, Quay phim 4K 2160p@30fps', 'Snapdragon 665 8 nhân', '4 nhân 2.0 GHz & 4 nhân 1.8 GHz', 'Adreno 610', 8, 128, 'MicroSD, hỗ trợ tối đa 256 GB', 'Khung & Mặt lưng nhựa', 'Dài 162 mm - Ngang 75.5 mm - Dày 8.9 mm', 192, 5000, NULL, 'Tiết kiệm pin, Sạc pin nhanh', '2 Nano SIM', 'Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi Direct, ', 'A2DP, LE, v5.0', 'USB Type-C', '3.5 mm', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_bao_cao`
--

CREATE TABLE `chi_tiet_bao_cao` (
  `ID_CHI_TIET` int(11) NOT NULL,
  `ID_BINH_LUAN` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_BAO_CAO` int(11) DEFAULT NULL,
  `NGAY_BAO_CAO` datetime DEFAULT NULL,
  `NOI_DUNG_BAO_CAO` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TINH_TRANG_GIAI_QUYET` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_bao_cao`
--

INSERT INTO `chi_tiet_bao_cao` (`ID_CHI_TIET`, `ID_BINH_LUAN`, `ID_USER`, `ID_BAO_CAO`, `NGAY_BAO_CAO`, `NOI_DUNG_BAO_CAO`, `TINH_TRANG_GIAI_QUYET`) VALUES
(1, 2, 4, 1, '2020-06-26 13:01:20', NULL, b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cua_hang_ban_le`
--

CREATE TABLE `cua_hang_ban_le` (
  `ID_CUA_HANG` int(11) NOT NULL,
  `TEN_CUA_HANG` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `LINK_WEBSITE_CUA_HANG` char(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `LOGO_CUA_HANG` char(100) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cua_hang_ban_le`
--

INSERT INTO `cua_hang_ban_le` (`ID_CUA_HANG`, `TEN_CUA_HANG`, `LINK_WEBSITE_CUA_HANG`, `LOGO_CUA_HANG`) VALUES
(1, 'Thế giới đi động', 'thegioididong.com', 'logo-thegioididong-black.png'),
(2, 'FPT shop', 'fptshop.com.vn', 'logo-fptshop-white.png'),
(3, 'Di động thông minh', 'didongthongminh.vn', 'logo-didongthongminh.jpg'),
(4, 'Nguyễn Kim', 'nguyenkim.com', 'logo-Nguyenkim.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cung_cap`
--

CREATE TABLE `cung_cap` (
  `ID_CUA_HANG` int(11) NOT NULL,
  `ID_DIEN_THOAI` int(11) NOT NULL,
  `LINK_SAN_PHAM` char(225) COLLATE utf32_unicode_ci DEFAULT NULL,
  `NGAY_CAP_NHAT_LINK` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cung_cap`
--

INSERT INTO `cung_cap` (`ID_CUA_HANG`, `ID_DIEN_THOAI`, `LINK_SAN_PHAM`, `NGAY_CAP_NHAT_LINK`) VALUES
(1, 1, 'https://www.thegioididong.com/dtdd/iphone-11', '2020-06-26 12:33:09'),
(2, 1, 'https://fptshop.com.vn/dien-thoai/iphone-11-64gb', '2020-06-26 12:33:09'),
(3, 1, 'https://didongthongminh.vn/iphone-11-64gb-2019', '2020-06-26 12:35:12'),
(4, 1, 'https://www.nguyenkim.com/dien-thoai-iphone-11-64g', '2020-06-26 12:35:27'),
(1, 2, 'https://www.thegioididong.com/dtdd/oppo-a92', '2020-06-26 12:41:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dien_thoai`
--

CREATE TABLE `dien_thoai` (
  `ID_DIEN_THOAI` int(11) NOT NULL,
  `ID_HANG_SAN_XUAT` int(11) DEFAULT NULL,
  `TEN_DIEN_THOAI` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `GIA_CA_THI_TRUONG` float DEFAULT NULL,
  `DIEM_DANH_GIA` float DEFAULT NULL,
  `URL_HINH_ANh` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dien_thoai`
--

INSERT INTO `dien_thoai` (`ID_DIEN_THOAI`, `ID_HANG_SAN_XUAT`, `TEN_DIEN_THOAI`, `GIA_CA_THI_TRUONG`, `DIEM_DANH_GIA`, `URL_HINH_ANh`) VALUES
(1, 1, 'Iphone 11 red 64GB', 21990000, 10, 'iphone11.jpg'),
(2, 3, 'Oppo a92', 6490000, NULL, 'oppo-a92-white-600x600-400x400.jpg'),
(3, 3, 'Oppo Reno 10x Zoom', 6990000, 4, 'oppo-reno-10x-zoom-edition-green-400x400.jpg'),
(4, 3, 'OPPO Reno 2 pink', 7990000, NULL, 'oppo-reno-2-pink-400x400.jpg'),
(5, 2, 'Samsung Galaxy A21s', 5390000, 1, 'samsung-galaxy-a21s-055620-045659-400x400.jpg'),
(6, 2, 'Samsung Galaxy A51', 7790000, NULL, 'samsung-galaxy-a51-8gb-blue-600x600-400x400.jpg'),
(7, 2, 'Samsung Galaxy A70', 9990000, NULL, 'samsung-galaxy-a70-050220-050220-400x400.jpg'),
(8, 2, 'Samsung Galaxy A9', 10990000, NULL, 'samsung-galaxy-a9-2018-blue-400x400.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_san_xuat`
--

CREATE TABLE `hang_san_xuat` (
  `ID_HANG_SAN_XUAT` int(11) NOT NULL,
  `TEN_HANG_SAN_XUAT` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `QUOC_GIA` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `LOGO_HANG_SX` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_san_xuat`
--

INSERT INTO `hang_san_xuat` (`ID_HANG_SAN_XUAT`, `TEN_HANG_SAN_XUAT`, `QUOC_GIA`, `LOGO_HANG_SX`) VALUES
(1, 'IPHONE', NULL, 'logo-iphone.jpg'),
(2, 'SAMSUNG', NULL, 'logo-samsung.jpg'),
(3, 'OPPO', NULL, 'logo-oppo.png'),
(4, 'XIAOMI', NULL, 'logo-xiaomi.jpg'),
(5, 'VIVO', NULL, 'logo-vivo.jpg'),
(6, 'REALME', NULL, 'logo-realme.png'),
(7, 'VSMART', NULL, 'logo-vsmart.png'),
(8, 'NOKIA', NULL, 'logo-nokia.jpg'),
(9, 'HUAWEI', NULL, 'logo-huawei.jpg'),
(10, 'MOBELL', NULL, 'logo-mobell.jpg'),
(11, 'ITEL', NULL, 'logo-itel.jpg'),
(12, 'MASSTEL', NULL, 'logo-masstel.png'),
(13, 'BLACKBERRY', NULL, 'logo-blackberry.png'),
(14, 'COOLPAD', NULL, 'logo-coolpad.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lich_su_like`
--

CREATE TABLE `lich_su_like` (
  `ID_BINH_LUAN` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `NGAY_NHAN_LIKE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lich_su_like`
--

INSERT INTO `lich_su_like` (`ID_BINH_LUAN`, `ID_USER`, `NGAY_NHAN_LIKE`) VALUES
(1, 1, '2020-06-26 13:00:32'),
(1, 2, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noi_dung_bai_viet`
--

CREATE TABLE `noi_dung_bai_viet` (
  `ID_CHI_TIET_BV` int(11) NOT NULL,
  `ID_BAI_VIET` int(11) DEFAULT NULL,
  `TITLE_CTBV` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `NOI_DUNG` varchar(1000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `HINH_MINH_HOA` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `CAPTION_ANH` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `noi_dung_bai_viet`
--

INSERT INTO `noi_dung_bai_viet` (`ID_CHI_TIET_BV`, `ID_BAI_VIET`, `TITLE_CTBV`, `NOI_DUNG`, `HINH_MINH_HOA`, `CAPTION_ANH`) VALUES
(1, 1, 'Nâng cấp mạnh mẽ về camera', 'Nói về nâng cấp thì camera chính là điểm có nhiều cải tiến nhất trên thế hệ iPhone mới.\r\nNếu như trước đây iPhone Xr chỉ có một camera thì nay với iPhone 11 chúng ta sẽ có tới hai camera ở mặt sau.', 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-tgdd42.jpg', NULL),
(2, 1, NULL, 'Nếu như trước đây iPhone Xr chỉ có một camera thì nay với iPhone 11 chúng ta sẽ có tới hai camera ở mặt sau.', 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-114-1.jpg', NULL),
(3, 1, NULL, 'Ngoài camera chính vẫn có độ phân giải 12 MP thì chúng ta sẽ có thêm một camera góc siêu rộng và cũng với độ phân giải tương tự.', 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-116.jpg', 'Ảnh chụp chân dung với iPhone 11'),
(4, 1, NULL, 'Theo Apple thì việc chuyển đổi qua lại giữa hai ống kính thì sẽ không làm thay đổi màu sắc của bức ảnh.\r\nĐây là một điều được xem là bước ngoặt bởi những chiếc smartphone Android có nhiều camera hiện nay sẽ thường bị sai lệch về màu sắc khi chuyển đổi qua lại giữa các ống kính gây cảm giác khá khó chịu cho người dùng.', 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-tgdd7.jpg', 'Ảnh chụp với Deep Fusion'),
(5, 1, NULL, 'Bên cạnh đó với iPhone 11 thì đây sẽ là lần đầu tiên Apple trang bị khả năng chụp đêm lên chiếc iPhone của mình.', 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-113.jpg', 'Ảnh chụp với chế độ Night Mode'),
(6, 1, NULL, 'Theo trải nghiệm thì tính năng này hoạt động rất hiệu quả đặc biệt trong những môi trường cực kỳ thiếu sáng.', 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-112.jpg', NULL),
(7, 1, NULL, 'Kích hoạt chế độ chụp đêm sẽ do iPhone tự quyết định việc của bạn chỉ cần đưa máy lên và chụp, rất đơn giản.', 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-.jpg', 'Ảnh chụp chế độ góc siêu rộng'),
(8, 1, NULL, 'Năm nay Apple cũng đã nâng cấp độ phân giải camera trước nên 12 MP thay vì 7 MP như thế hệ trước đó.\r\nCamera trước cũng có một tính năng thông minh, khi bạn xoay ngang điện thoại nó sẽ tự kích hoạt chế độ selfie góc rộng để bạn có thể chụp với nhiều người hơn.\r\nNgoài ra Apple cũng giới thiệu tính năng quay video slow motion dành cho camera trước, điều mà Apple chưa từng trang bị cho những chiếc iPhone trước đây.', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_quyen`
--

CREATE TABLE `phan_quyen` (
  `ID_PHAN_QUYEN` int(11) NOT NULL,
  `TEN_PHAN_QUYEN` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_quyen`
--

INSERT INTO `phan_quyen` (`ID_PHAN_QUYEN`, `TEN_PHAN_QUYEN`) VALUES
(1, 'admin'),
(2, 'khachhang'),
(3, 'tacgia'),
(4, 'test');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `ID_PHAN_QUYEN` int(11) DEFAULT NULL,
  `USER_NAME` char(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `PASSWORD` char(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TRUY_CAP` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID_USER`, `ID_PHAN_QUYEN`, `USER_NAME`, `PASSWORD`, `TRUY_CAP`) VALUES
(1, 1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', b'1'),
(2, 2, 'khachhang', 'c4ca4238a0b923820dcc509a6f75849b', b'1'),
(3, 3, 'tacgia', 'c4ca4238a0b923820dcc509a6f75849b', b'1'),
(4, 4, 'test', 'c4ca4238a0b923820dcc509a6f75849b', b'0'),
(5, 2, 'thinh', 'c4ca4238a0b923820dcc509a6f75849b', b'1'),
(6, 2, 'dai', 'c4ca4238a0b923820dcc509a6f75849b', b'1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`ID_BAI_VIET`),
  ADD KEY `FK_BAI_VIET_RELATIONS_DIEN_THO` (`ID_DIEN_THOAI`);

--
-- Chỉ mục cho bảng `bao_cao_binh_luan`
--
ALTER TABLE `bao_cao_binh_luan`
  ADD PRIMARY KEY (`ID_BAO_CAO`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ID_BINH_LUAN`),
  ADD KEY `FK_BINH_LUA_RELATIONS_BAI_VIET` (`ID_BAI_VIET`);

--
-- Chỉ mục cho bảng `cau_hinh_dien_thoai`
--
ALTER TABLE `cau_hinh_dien_thoai`
  ADD PRIMARY KEY (`ID_DIEN_THOAI`);

--
-- Chỉ mục cho bảng `chi_tiet_bao_cao`
--
ALTER TABLE `chi_tiet_bao_cao`
  ADD PRIMARY KEY (`ID_CHI_TIET`),
  ADD KEY `FK_CHI_TIET_GIAI_QUYE_USER` (`ID_USER`),
  ADD KEY `FK_CHI_TIET_RELATIONS_BAO_CAO_` (`ID_BAO_CAO`),
  ADD KEY `FK_CHI_TIET_RELATIONS_BINH_LUA` (`ID_BINH_LUAN`);

--
-- Chỉ mục cho bảng `cua_hang_ban_le`
--
ALTER TABLE `cua_hang_ban_le`
  ADD PRIMARY KEY (`ID_CUA_HANG`);

--
-- Chỉ mục cho bảng `cung_cap`
--
ALTER TABLE `cung_cap`
  ADD KEY `FK_CUNG_CAP_CUNG_CAP_CUA_HANG` (`ID_CUA_HANG`),
  ADD KEY `FK_CUNG_CAP_CUNG_CAP2_DIEN_THO` (`ID_DIEN_THOAI`);

--
-- Chỉ mục cho bảng `dien_thoai`
--
ALTER TABLE `dien_thoai`
  ADD PRIMARY KEY (`ID_DIEN_THOAI`),
  ADD KEY `FK_DIEN_THO_RELATIONS_HANG_SAN` (`ID_HANG_SAN_XUAT`);

--
-- Chỉ mục cho bảng `hang_san_xuat`
--
ALTER TABLE `hang_san_xuat`
  ADD PRIMARY KEY (`ID_HANG_SAN_XUAT`);

--
-- Chỉ mục cho bảng `lich_su_like`
--
ALTER TABLE `lich_su_like`
  ADD KEY `FK_LICH_SU__LICH_SU_L_BINH_LUA` (`ID_BINH_LUAN`),
  ADD KEY `FK_LICH_SU__LICH_SU_L_USER` (`ID_USER`);

--
-- Chỉ mục cho bảng `noi_dung_bai_viet`
--
ALTER TABLE `noi_dung_bai_viet`
  ADD PRIMARY KEY (`ID_CHI_TIET_BV`),
  ADD KEY `FK_NOI_DUNG_RELATIONS_BAI_VIET` (`ID_BAI_VIET`);

--
-- Chỉ mục cho bảng `phan_quyen`
--
ALTER TABLE `phan_quyen`
  ADD PRIMARY KEY (`ID_PHAN_QUYEN`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `FK_USER_RELATIONS_PHAN_QUY` (`ID_PHAN_QUYEN`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `ID_BAI_VIET` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `bao_cao_binh_luan`
--
ALTER TABLE `bao_cao_binh_luan`
  MODIFY `ID_BAO_CAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ID_BINH_LUAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_bao_cao`
--
ALTER TABLE `chi_tiet_bao_cao`
  MODIFY `ID_CHI_TIET` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cua_hang_ban_le`
--
ALTER TABLE `cua_hang_ban_le`
  MODIFY `ID_CUA_HANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `dien_thoai`
--
ALTER TABLE `dien_thoai`
  MODIFY `ID_DIEN_THOAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hang_san_xuat`
--
ALTER TABLE `hang_san_xuat`
  MODIFY `ID_HANG_SAN_XUAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `noi_dung_bai_viet`
--
ALTER TABLE `noi_dung_bai_viet`
  MODIFY `ID_CHI_TIET_BV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `phan_quyen`
--
ALTER TABLE `phan_quyen`
  MODIFY `ID_PHAN_QUYEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD CONSTRAINT `FK_BAI_VIET_RELATIONS_DIEN_THO` FOREIGN KEY (`ID_DIEN_THOAI`) REFERENCES `dien_thoai` (`ID_DIEN_THOAI`);

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `FK_BINH_LUA_RELATIONS_BAI_VIET` FOREIGN KEY (`ID_BAI_VIET`) REFERENCES `bai_viet` (`ID_BAI_VIET`);

--
-- Các ràng buộc cho bảng `cau_hinh_dien_thoai`
--
ALTER TABLE `cau_hinh_dien_thoai`
  ADD CONSTRAINT `FK_CAU_HINH_RELATIONS_DIEN_THO` FOREIGN KEY (`ID_DIEN_THOAI`) REFERENCES `dien_thoai` (`ID_DIEN_THOAI`);

--
-- Các ràng buộc cho bảng `chi_tiet_bao_cao`
--
ALTER TABLE `chi_tiet_bao_cao`
  ADD CONSTRAINT `FK_CHI_TIET_GIAI_QUYE_USER` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_CHI_TIET_RELATIONS_BAO_CAO_` FOREIGN KEY (`ID_BAO_CAO`) REFERENCES `bao_cao_binh_luan` (`ID_BAO_CAO`),
  ADD CONSTRAINT `FK_CHI_TIET_RELATIONS_BINH_LUA` FOREIGN KEY (`ID_BINH_LUAN`) REFERENCES `binh_luan` (`ID_BINH_LUAN`);

--
-- Các ràng buộc cho bảng `cung_cap`
--
ALTER TABLE `cung_cap`
  ADD CONSTRAINT `FK_CUNG_CAP_CUNG_CAP2_DIEN_THO` FOREIGN KEY (`ID_DIEN_THOAI`) REFERENCES `dien_thoai` (`ID_DIEN_THOAI`),
  ADD CONSTRAINT `FK_CUNG_CAP_CUNG_CAP_CUA_HANG` FOREIGN KEY (`ID_CUA_HANG`) REFERENCES `cua_hang_ban_le` (`ID_CUA_HANG`);

--
-- Các ràng buộc cho bảng `dien_thoai`
--
ALTER TABLE `dien_thoai`
  ADD CONSTRAINT `FK_DIEN_THO_RELATIONS_HANG_SAN` FOREIGN KEY (`ID_HANG_SAN_XUAT`) REFERENCES `hang_san_xuat` (`ID_HANG_SAN_XUAT`);

--
-- Các ràng buộc cho bảng `lich_su_like`
--
ALTER TABLE `lich_su_like`
  ADD CONSTRAINT `FK_LICH_SU__LICH_SU_L_BINH_LUA` FOREIGN KEY (`ID_BINH_LUAN`) REFERENCES `binh_luan` (`ID_BINH_LUAN`),
  ADD CONSTRAINT `FK_LICH_SU__LICH_SU_L_USER` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Các ràng buộc cho bảng `noi_dung_bai_viet`
--
ALTER TABLE `noi_dung_bai_viet`
  ADD CONSTRAINT `FK_NOI_DUNG_RELATIONS_BAI_VIET` FOREIGN KEY (`ID_BAI_VIET`) REFERENCES `bai_viet` (`ID_BAI_VIET`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_USER_RELATIONS_PHAN_QUY` FOREIGN KEY (`ID_PHAN_QUYEN`) REFERENCES `phan_quyen` (`ID_PHAN_QUYEN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
