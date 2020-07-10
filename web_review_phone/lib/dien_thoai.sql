-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 11, 2020 lúc 12:48 AM
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
  `TITLE` text COLLATE utf32_unicode_ci DEFAULT NULL,
  `NOI_DUNG_BAI_VIET` longtext COLLATE utf32_unicode_ci DEFAULT NULL,
  `TEN_TAC_GIA` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `NGAY_DANG_BAI_VIET` datetime DEFAULT NULL,
  `SO_LUOT_THICH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`ID_BAI_VIET`, `ID_DIEN_THOAI`, `ID_USER`, `TITLE`, `NOI_DUNG_BAI_VIET`, `TEN_TAC_GIA`, `NGAY_DANG_BAI_VIET`, `SO_LUOT_THICH`) VALUES
(1, 1, 3, 'Sau bao nhiêu chờ đợi cũng như đồn đoán thì cuối cùng Apple đã chính thức giới thiệu bộ 3 siêu phẩm iPhone 11 mạnh mẽ nhất của mình vào tháng 9/2019. Có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như chiếc iPhone Xr năm ngoái, đó chính là phiên bản iPhone 11 64GB.', '<div class=\\\"chitiet-review\\\">            <h2>Sau bao nhiêu chờ đợi cũng như đồn đoán thì cuối cùng Apple đã chính thức giới thiệu bộ 3 siêu phẩm iPhone 11 mạnh mẽ nhất của mình vào tháng 9/2019. Có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ, đó chính là phiên bản iPhone 11 64G.</h2>                    <h3>Nâng cấp mạnh mẽ về camera</h3>            <p>Nói về nâng cấp thì camera chính là điểm có nhiều cải tiến nhất trên thế hệ iPhone mới.Nếu như trước đây iPhone Xr chỉ có một camera thì nay với iPhone 11 chúng ta sẽ có tới hai camera ở mặt sau.</p>            <p style=\\\"text-align: center;\\\">                <img src=\\\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-tgdd42.jpg\\\">            </p>            <p style=\\\"text-align: center;\\\"><em><span style=\\\"text-align: center;\\\">                            </span></em></p>                  <h3></h3>            <p>Nếu như trước đây iPhone Xr chỉ có một camera thì nay với iPhone 11 chúng ta sẽ có tới hai camera ở mặt sau.</p>            <p style=\\\"text-align: center;\\\">                <img src=\\\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-114-1.jpg\\\">            </p>            <p style=\\\"text-align: center;\\\"><em><span style=\\\"text-align: center;\\\">                            </span></em></p>                  <h3></h3>            <p>Ngoài camera chính vẫn có độ phân giải 12 MP thì chúng ta sẽ có thêm một camera góc siêu rộng và cũng với độ phân giải tương tự.</p>            <p style=\\\"text-align: center;\\\">                <img src=\\\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-116.jpg\\\">            </p>            <p style=\\\"text-align: center;\\\"><em><span style=\\\"text-align: center;\\\">                Ảnh chụp chân dung với iPhone 11            </span></em></p>                  <h3></h3>            <p>Theo Apple thì việc chuyển đổi qua lại giữa hai ống kính thì sẽ không làm thay đổi màu sắc của bức ảnh.Đây là một điều được xem là bước ngoặt bởi những chiếc smartphone Android có nhiều camera hiện nay sẽ thường bị sai lệch về màu sắc khi chuyển đổi qua lại giữa các ống kính gây cảm giác khá khó chịu cho người dùng.</p>            <p style=\\\"text-align: center;\\\">                <img src=\\\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-tgdd7.jpg\\\">            </p>            <p style=\\\"text-align: center;\\\"><em><span style=\\\"text-align: center;\\\">                Ảnh chụp với Deep Fusion            </span></em></p>                  <h3></h3>            <p>Bên cạnh đó với iPhone 11 thì đây sẽ là lần đầu tiên Apple trang bị khả năng chụp đêm lên chiếc iPhone của mình.</p>            <p style=\\\"text-align: center;\\\">                <img src=\\\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-113.jpg\\\">            </p>            <p style=\\\"text-align: center;\\\"><em><span style=\\\"text-align: center;\\\">                Ảnh chụp với chế độ Night Mode            </span></em></p>                  <h3></h3>            <p>Theo trải nghiệm thì tính năng này hoạt động rất hiệu quả đặc biệt trong những môi trường cực kỳ thiếu sáng.</p>            <p style=\\\"text-align: center;\\\">                <img src=\\\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-112.jpg\\\">            </p>            <p style=\\\"text-align: center;\\\"><em><span style=\\\"text-align: center;\\\">                            </span></em></p>                  <h3></h3>            <p>Kích hoạt chế độ chụp đêm sẽ do iPhone tự quyết định việc của bạn chỉ cần đưa máy lên và chụp, rất đơn giản.</p>            <p style=\\\"text-align: center;\\\">                <img src=\\\"https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-.jpg\\\">            </p>            <p style=\\\"text-align: center;\\\"><em><span style=\\\"text-align: center;\\\">                Ảnh chụp chế độ góc siêu rộng            </span></em></p>                  <h3></h3>            <p>Năm nay Apple cũng đã nâng cấp độ phân giải camera trước nên 12 MP thay vì 7 MP như thế hệ trước đó.Camera trước cũng có một tính năng thông minh, khi bạn xoay ngang điện thoại nó sẽ tự kích hoạt chế độ selfie góc rộng để bạn có thể chụp với nhiều người hơn.Ngoài ra Apple cũng giới thiệu tính năng quay video slow motion dành cho camera trước, điều mà Apple chưa từng trang bị cho những chiếc iPhone trước đây.</p>            <p style=\\\"text-align: center;\\\">                <img src=\\\"\\\">            </p>            <p style=\\\"text-align: center;\\\"><em><span style=\\\"text-align: center;\\\">                            </span></em></p>          </div>\r\n', 'tacgia', '2020-07-11 04:43:38', NULL),
(2, 2, 3, 'Để tìm kiếm một chiếc smartphone có hiệu năng mạnh mẽ và có thể sử dụng mượt mà trong 2-3 năm tới thì không có chiếc máy nào xứng đang hơn chiếc iPhone 11 Pro Max 512GB mới ra mắt trong năm 2019 của Apple.', '<h2>Để t&igrave;m kiếm một chiếc smartphone c&oacute; hiệu năng mạnh mẽ v&agrave; c&oacute; thể sử dụng mượt m&agrave; trong 2-3 năm tới th&igrave; kh&ocirc;ng c&oacute; chiếc m&aacute;y n&agrave;o xứng đang hơn chiếc iPhone 11 Pro Max 512GB mới ra mắt trong năm 2019 của Apple.</h2>\r\n\r\n<h3>Hiệu năng &quot;đ&egrave; bẹp&quot; mọi đối thủ</h3>\r\n\r\n<p>iPhone 11 Pro Max 512GB năm nay sử dụng chip Apple A13 Bionic mới nhất, nhanh v&agrave; tiết kiệm điện hơn so với A12 năm ngo&aacute;i.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd10.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Trải nghiệm chơi game\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd10.jpg\" /></a></p>\r\n\r\n<p>M&aacute;y cũng sở hữu ri&ecirc;ng một con chip&nbsp;AI Neural Engine sẽ phụ tr&aacute;ch c&aacute;c t&iacute;nh năng xử l&yacute; h&igrave;nh ảnh như Deep Fusion v&agrave; Night Mode.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Điểm hiệu năng Antutu Benchmark\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-1.jpg\" /></a></p>\r\n\r\n<p><em>Điểm Geekbench của iPhone 11 Pro Max</em></p>\r\n\r\n<p>Theo Apple th&igrave; đ&acirc;y l&agrave; điện thoại th&ocirc;ng minh c&oacute; hiệu suất nhanh nhất thế giới ở thời điểm ra mắt.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd12.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Hiệu năng mạnh mẽ\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd12.jpg\" /></a></p>\r\n\r\n<p>Cụ thể, hiệu năng của bộ vi xử l&yacute; A13 Bionic mới của Apple c&oacute; sức mạnh vượt trội, nhanh hơn đến 20% v&agrave; tiết ki&ecirc;m điện đến 40% so với chip A12, mang đến cho&nbsp;bạn trải nghiệm mượt m&agrave;, ổn định tất cả c&aacute;c t&aacute;c vụ, đa nhiệm.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd8.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Giao diện iOS 13 mới\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd8.jpg\" /></a></p>\r\n\r\n<p>M&aacute;y sẽ chạy tr&ecirc;n phi&ecirc;n bản iOS 13 mới với nhiều t&iacute;nh năng tiện dụng gi&uacute;p bạn khai th&aacute;c chiếc <a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\">iPhone</a> của m&igrave;nh hiệu quả hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd9.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Giao diện iOS 13 mới\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd9.jpg\" /></a></p>\r\n\r\n<p><em>iOS 13 mới tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p>Năm nay Face ID cũng được cải thiện để c&oacute; thể nhận dạng ở nhiều g&oacute;c kh&aacute;c nhau mang lại trải nghiệm mở kh&oacute;a tốt hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd11.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Giao diện màn hình chính\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd11.jpg\" /></a></p>\r\n\r\n<p>C&ocirc;ng nghệ Haptic Engine mới sẽ dựa tr&ecirc;n thời gian ấn v&agrave; giữ icon để hiện l&ecirc;n những menu chức năng kh&aacute;c nhau thay v&igrave; dựa v&agrave;o lực ấn như 3D Touch.</p>\r\n\r\n<h3>Camera l&agrave; điểm nhấn đ&aacute;ng ch&uacute; &yacute;</h3>\r\n\r\n<p>Tại buổi ra mắt chiếc iPhone mới của m&igrave;nh, Apple d&agrave;nh rất nhiều thời gian để giới thiệu bộ 3 camera ho&agrave;n to&agrave;n mới tr&ecirc;n chiếc&nbsp;iPhone 11 Pro Max.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd22.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Giao diện camera\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd22.jpg\" /></a></p>\r\n\r\n<p>V&agrave; quả thực camera ch&iacute;nh l&agrave; điểm n&acirc;ng cấp đ&aacute;ng gi&aacute; nhất tr&ecirc;n chiếc&nbsp;iPhone 11 Pro Max.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb16-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Ảnh chụp bằng camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb16-1.jpg\" /></a></p>\r\n\r\n<p><em>Ảnh chụp bằng camera sau tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p>Chiếc iPhone n&agrave;y sẽ c&oacute; 3 camera với&nbsp;1 camera ch&iacute;nh g&oacute;c rộng 12 MP, 1 camera tele 12 MP v&agrave; 1 camera <a href=\"https://www.thegioididong.com/dtdd-camera-goc-rong\" target=\"_blank\">g&oacute;c si&ecirc;u rộng</a> 12 MP.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb3-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Ảnh chụp bằng camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb3-2.jpg\" /></a></p>\r\n\r\n<p><em>Ảnh chụp bằng camera sau tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p>C&aacute;c camera n&agrave;y đều c&oacute; sự li&ecirc;n hệ mật thiết với nhau v&igrave; vậy khi người d&ugrave;ng chuyển đổi giữa c&aacute;c loại camera, th&igrave; độ s&aacute;ng hay m&agrave;u sắc của bức ảnh hầu như kh&ocirc;ng thay đổi nhiều.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd19.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Chế độ Night Mode mới\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd19.jpg\" /></a></p>\r\n\r\n<p><em>Chế độ Night Mode mới</em></p>\r\n\r\n<p>Đ&acirc;y l&agrave; điềm m&agrave; chưa một chiếc smartphone Android n&agrave;o c&oacute; nhiều camera hiện nay c&oacute; thể l&agrave;m tốt hơn iPhone 11 Pro Max.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb17-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Ảnh chụp bằng chế độ Night Mode mới\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb17-1.jpg\" /></a></p>\r\n\r\n<p><em>Sự kh&aacute;c biệt với Night Mode tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p>Ngo&agrave;i ra tr&ecirc;n chiếc iPhone n&agrave;y c&ograve;n c&oacute; th&ecirc;m chế độ chụp đ&ecirc;m Night Mode gi&uacute;p cải thiện r&otilde; rệt chất lượng chụp ảnh trong điều kiện thiếu s&aacute;ng của những chiếc iPhone.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb1-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Ảnh chụp chế độ cơ bản\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb1-1.jpg\" /></a></p>\r\n\r\n<p><em>Ảnh chụp chế độ cơ bản b&igrave;nh thường với camera ch&iacute;nh</em></p>\r\n\r\n<p>Những bức ảnh với chế độ Night Mode c&oacute; chất lượng rất tốt, đủ sắc n&eacute;t, m&agrave;u sắc tuyệt vời, độ tương phản xuất sắc v&agrave; độ phơi s&aacute;ng rất c&acirc;n bằng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd16.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Giao diện chuyển đổi các ống kính camera\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd16.jpg\" /></a></p>\r\n\r\n<p>Khả năng quay video tr&ecirc;n iPhone từ trước tới nay vẫn được đ&aacute;nh gi&aacute; rất cao v&agrave; năm nay Apple n&acirc;ng cấp l&ecirc;n độ ph&acirc;n giải 4K 60fps sẽ l&agrave; một tin kh&ocirc;ng thể vui hơn d&agrave;nh cho những bạn hay quay video tr&ecirc;n chiếc iPhone của m&igrave;nh.</p>\r\n\r\n<h3>Camera trước độ ph&acirc;n giải cao hơn</h3>\r\n\r\n<p>12 MP v&agrave; độ ph&acirc;n giải mới của camera trước tr&ecirc;n chiếc&nbsp;iPhone 11 Pro Max, n&oacute; cao hơn kh&aacute; nhiều nếu so s&aacute;nh với 7 MP tr&ecirc;n những chiếc iPhone năm ngo&aacute;i.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb5-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Camera trước\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb5-1.jpg\" /></a></p>\r\n\r\n<p>Giờ đ&acirc;y người d&ugrave;ng sẽ c&oacute; những bức ảnh selfie với độ chi tiết cao hơn v&agrave; đặc biệt c&ograve;n c&oacute; thể quay video 4K với ch&iacute;nh camera trước của m&aacute;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb2-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | So sánh chất lượng ảnh selfie\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb2-1.jpg\" /></a></p>\r\n\r\n<p><em>Anh selfie tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p>Những ai l&agrave; t&iacute;n đồ của selfie th&igrave; cũng c&oacute; thể tự tin hơn khi chụp h&igrave;nh với camera trước của iPhone 11 Pro Max với t&iacute;nh năng selfie g&oacute;c rộng m&agrave; Apple vừa trang bị.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd13.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Giao diện chụp ảnh\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd13.jpg\" /></a></p>\r\n\r\n<p>T&iacute;nh năng n&agrave;y sẽ tự động k&iacute;ch hoạt khi n&agrave;o bạn xoay ngang chiếc iPhone của m&igrave;nh, vậy l&agrave; từ nay bạn kh&ocirc;ng cần mang theo gậy selfie với chiếc iPhone mới của m&igrave;nh rồi nh&eacute;!</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd1.gif\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Ảnh chụp Slofie bằng camera trước\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd1.gif\" /></a></p>\r\n\r\n<p>Th&ecirc;m một trang bị kh&aacute;c kh&aacute; th&uacute; vị l&agrave; khả năng quay video si&ecirc;u chậm slofie với camera trước của m&aacute;y để bạn c&oacute; thể s&aacute;ng tạo nhiều video vui vẻ hơn.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/tren-tay-va-danh-gia-nhanh-iphone-xs-max-tai-viet-nam-1118861\" target=\"_blank\">Tr&ecirc;n tay v&agrave; đ&aacute;nh gi&aacute; nhanh iPhone Xs Max tại Việt Nam: Sức h&uacute;t kh&oacute; cưỡng</a></p>\r\n\r\n<h3>Pin lớn thoải m&aacute;i cả ng&agrave;y</h3>\r\n\r\n<p>iPhone 11 Pro Max 512GB sở hữu vi&ecirc;n pin c&oacute; dung lượng lớn hơn 25% so với <a href=\"https://www.thegioididong.com/dtdd/iphone-xs-max\" target=\"_blank\">iPhone Xs Max</a> năm ngo&aacute;i nhờ vậy m&agrave; thời gian sử dụng pin cũng được cải thiện đ&aacute;ng kể.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd7.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Thời lượng pin\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd7.jpg\" /></a></p>\r\n\r\n<p>Apple c&ocirc;ng bố chiếc iPhone mới n&agrave;y sẽ cho thời gian d&ugrave;ng pin nhiều hơn 5 tiếng so với iPhone Xs Max nhưng thực tế con số n&agrave;y c&ograve;n tốt hơn thế.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd6.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Giao diện thời lượng pin trên iOS 13\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd6.jpg\" /></a></p>\r\n\r\n<p>Nếu bạn chỉ sử dụng ở mức b&igrave;nh thường, &iacute;t chơi game th&igrave; chiếc iPhone n&agrave;y ho&agrave;n to&agrave;n c&oacute; thể đ&aacute;p ứng l&ecirc;n tới 2 ng&agrave;y sử dụng cho bạn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd5.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Thời lượng sử dụng pin lâu\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd5.jpg\" /></a></p>\r\n\r\n<p>C&ograve;n nếu nhu cầu nhiều hơn th&igrave; việc đ&aacute;p ứng với cường độ cao từ s&aacute;ng tới tối cũng kh&ocirc;ng phải l&agrave; điều g&igrave; qu&aacute; kh&oacute; khăn với chiếc m&aacute;y n&agrave;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd4.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Công nghệ sạc nhanh 18W\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd4.jpg\" /></a></p>\r\n\r\n<p>Tin vui l&agrave; năm nay bạn đ&atilde; được Apple tặng k&egrave;m <a href=\"https://www.thegioididong.com/dtdd?f=sac-pin-nhanh\" target=\"_blank\">sạc nhanh</a> 18W b&ecirc;n trong hộp m&aacute;y gi&uacute;p bạn sạc được 50% pin chỉ trong v&ograve;ng 30 ph&uacute;t.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;&nbsp;iPhone 11 Pro Max 512GB cũng hỗ trợ sạc nhanh kh&ocirc;ng d&acirc;y l&ecirc;n tới 10W để bạn c&oacute; thể sử dụng hằng ng&agrave;y.</p>\r\n\r\n<h3>Vẫn c&ograve;n nhiều cải tiến m&agrave; bạn n&ecirc;n biết</h3>\r\n\r\n<p>iPhone 11 Pro Max đ&atilde; giải quyết được t&igrave;nh trạng để lại nhiều mồ h&ocirc;i v&agrave; dấu v&acirc;n tay trong qu&aacute; tr&igrave;nh sử dụng tr&ecirc;n những chiếc iPhone đời trước với mặt lưng được ho&agrave;n thiện dưới dạng k&iacute;nh mờ.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd3.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Thiết kế kính không để lại mồ hôi, dấu vân tay\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd3.jpg\" /></a></p>\r\n\r\n<p>Đặc biệt, m&agrave;u sắc của iPhone 11 Pro Max rất hấp dẫn, bao gồm xanh b&oacute;ng đ&ecirc;m, x&aacute;m kh&ocirc;ng gian, bạc v&agrave; v&agrave;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Trải nghiệm giải trí\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd2.jpg\" /></a></p>\r\n\r\n<p>Theo Apple th&igrave; k&iacute;nh m&agrave; h&atilde;ng sử dụng tr&ecirc;n chiếc iPhone n&agrave;y l&agrave; loại k&iacute;nh bền nhất từ trước tới nay từng được sử dụng cho smartphone.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/danh-gia-iphone-xs-max-review-dang-mua-1128868\" target=\"_blank\">Đ&aacute;nh gi&aacute; chi tiết iPhone Xs Max: Qu&aacute; x&aacute; đ&atilde;! C&oacute; tiền n&ecirc;n mua liền!</a></p>\r\n\r\n<p>Để tăng khả năng <a href=\"https://www.thegioididong.com/dtdd?f=chong-nuoc-bui\" target=\"_blank\">chống nước</a> cho m&aacute;y th&igrave; h&atilde;ng cũng n&oacute;i rằng đ&atilde; ho&agrave;n thiện c&aacute;c chi tiết một c&aacute;ch bền bỉ hơn để m&aacute;y c&oacute; thể chịu được độ s&acirc;u l&ecirc;n tới 4m.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210654/iphone-11-pro-max-512gb-tgdd1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 512GB | Trải nghiệm cầm nắm, thao tác\" src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd1.jpg\" /></a></p>\r\n\r\n<p>Bạn cảm thấy thế n&agrave;o về những trang bị tr&ecirc;n chiếc iPhone cao cấp nhất trong năm 2019, c&ograve;n chần chờ g&igrave; nữa m&agrave; kh&ocirc;ng đặt mua ngay cho m&igrave;nh một chiếc về trải nghiệm đi n&agrave;o!</p>\r\n', '', '2020-07-11 00:00:00', NULL),
(3, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 5, 3, 'Sau rất nhiều chờ đợi thì Samsung Galaxy Fold - chiếc smartphone màn hình gập đầu tiên của Samsung cũng đã chính thức trình làng với thiết kế mới lạ.', '<h2>Sau rất nhiều chờ đợi th&igrave;&nbsp;Samsung Galaxy Fold&nbsp;- chiếc smartphone&nbsp;&nbsp;m&agrave;n h&igrave;nh gập đầu ti&ecirc;n của Samsung cũng đ&atilde; ch&iacute;nh thức tr&igrave;nh l&agrave;ng với thiết kế mới lạ.</h2>\r\n\r\n<h3>Thiết kế 2 m&agrave;n h&igrave;nh, m&agrave;n h&igrave;nh uốn dẻo</h3>\r\n\r\n<p>Samsung Galaxy Fold kh&ocirc;ng chỉ sở hữu một m&agrave;n h&igrave;nh c&oacute; thể uốn dẻo m&agrave; c&ograve;n c&oacute; một m&agrave;n h&igrave;nh ri&ecirc;ng, để c&oacute; thể sử dụng độc lập khi&nbsp;gập m&aacute;y lại.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198158/samsung-galaxy-fold-tgdd-14.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế của điện thoại Samsung Galaxy Fold chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-14.jpg\" /></a></p>\r\n\r\n<p>Khi m&agrave; những chiếc smartphone gần đ&acirc;y đang ng&agrave;y c&agrave;ng c&oacute; thiết kế giống nhau th&igrave; sự ra đời của&nbsp;Samsung Galaxy Fold thực sự tạo n&ecirc;n l&agrave;n gi&oacute; mới tr&ecirc;n thị trường.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198158/samsung-galaxy-fold-tgdd-15.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế mặt lưng của điện thoại Samsung Galaxy Fold chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-15.jpg\" /></a></p>\r\n\r\n<p>Bạn sẽ c&oacute; một m&agrave;n h&igrave;nh với k&iacute;ch thước 7.3 inch gi&uacute;p bạn c&oacute; thể sử dụng rất thoải m&aacute;i như một chiếc <a href=\"https://www.thegioididong.com/may-tinh-bang-samsung\" target=\"_blank\">m&aacute;y t&iacute;nh bảng</a>.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/tren-tay-galaxy-fold-tai-viet-nam-1222056\" target=\"_blank\">Tr&ecirc;n tay Galaxy Fold tại Việt Nam: &#39;C&aacute;nh bướm&#39; liệu c&oacute; sức sống m&atilde;nh liệt?</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198158/samsung-galaxy-fold-tgdd-6.jpg\" onclick=\"return false;\"><img alt=\"Trải nghiệm sử dụng của điện thoại Samsung Galaxy Fold chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-6.jpg\" /></a></p>\r\n\r\n<p>Khi gập m&aacute;y lại th&igrave; bạn c&oacute; thể sử dụng m&agrave;n h&igrave;nh 4.6 inch như những chiếc smartphone hiện nay.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Thoải m&aacute;i sử dụng nhiều ứng dụng c&ugrave;ng l&uacute;c</h3>\r\n\r\n<p>Việc sở hữu một thiết bị c&oacute; m&agrave;n h&igrave;nh lớn th&igrave; người d&ugrave;ng sẽ c&oacute; một trải nghiệm xem phim hay chơi game thoải m&aacute;i hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198158/samsung-galaxy-fold-tgdd-3.jpg\" onclick=\"return false;\"><img alt=\"Màn hình của điện thoại Samsung Galaxy Fold chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-3.jpg\" /></a></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute; bạn cũng c&oacute; thể tận dụng m&agrave;n h&igrave;nh n&agrave;y để sử dụng song song nhiều ứng dụng c&ugrave;ng l&uacute;c một c&aacute;ch kh&aacute; dễ d&agrave;ng.</p>\r\n\r\n<h3>Hiệu năng đứng đầu bảng</h3>\r\n\r\n<p>Chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-samsung\" target=\"_blank\">smartphone Samsung</a> mới được trang bị cấu h&igrave;nh mạnh mẽ nhất của thế giới Android trong năm 2019 ch&iacute;nh l&agrave;&nbsp;chipset Snapdragon 855 mạnh mẽ c&ugrave;ng với RAM l&ecirc;n đến 12 GB.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198158/samsung-galaxy-fold-tgdd-5-2.jpg\" onclick=\"return false;\"><img alt=\"Điểm hiệu năng Antutu của điện thoại Samsung Galaxy Fold chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-5-2.jpg\" /></a></p>\r\n\r\n<p>Bộ nhớ trong của m&aacute;y cũng c&oacute; dung lượng khủng l&ecirc;n tới 512 GB thoải m&aacute;i cho bạn c&agrave;i đặt game, ứng dụng cũng như lưu trữ dữ liệu c&aacute; nh&acirc;n.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198158/samsung-galaxy-fold-tgdd-10.jpg\" onclick=\"return false;\"><img alt=\"Cấu hình mạnh mẽ của điện thoại Samsung Galaxy Fold chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-10.jpg\" /></a></p>\r\n\r\n<p>Tất nhi&ecirc;n m&aacute;y sẽ được c&agrave;i đặt sẵn hệ điều h&agrave;nh Android 9.0(Pie)&nbsp;mang lại sự tối ưu hiệu quả, trải nghiệm mượt m&agrave;.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198158/samsung-galaxy-fold-tgdd-9.jpg\" onclick=\"return false;\"><img alt=\"Cấu hình của điện thoại Samsung Galaxy Fold chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-9.jpg\" /></a></p>\r\n\r\n<p>Tr&ecirc;n Galaxy Fold, những ứng dụng như WhatsApp, Microsoft Office v&agrave; YouTube đều được tối ưu h&oacute;a để ph&ugrave; hợp với loại m&agrave;n h&igrave;nh mới.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198158/samsung-galaxy-fold-tgdd-2.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế màn hình của điện thoại Samsung Galaxy Fold chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-2.jpg\" /></a></p>\r\n\r\n<h3>C&oacute; tới 6 camera tr&ecirc;n m&aacute;y</h3>\r\n\r\n<p>Samsung Galaxy Fold sở hữu bộ 3 camera ch&iacute;nh ở mặt lưng với khả năng chụp ảnh ch&acirc;n dung cũng như hỗ trợ ống k&iacute;nh g&oacute;c rộng cho chụp phong cảnh.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198158/samsung-galaxy-fold-tgdd-12.jpg\" onclick=\"return false;\"><img alt=\"Camera sau của điện thoại Samsung Galaxy Fold chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-12.jpg\" /></a></p>\r\n\r\n<p>Camera trước l&agrave; cụm camera k&eacute;p v&agrave; m&aacute;y c&ograve;n c&oacute; th&ecirc;m một camera đặt ở m&agrave;n h&igrave;nh phụ gi&uacute;p bạn vẫn c&oacute; thể selfie ngay cả khi gập m&aacute;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198158/samsung-galaxy-fold-tgdd-4.jpg\" onclick=\"return false;\"><img alt=\"Camera trước của điện thoại Samsung Galaxy Fold chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-4.jpg\" /></a></p>\r\n\r\n<p>Ảnh chụp từ camera của chiếc điện thoại Samsung Galaxy Fold cho chất lượng tốt, m&agrave;u sắc trung thực c&ugrave;ng nhiều hiệu ứng l&agrave;m đẹp, x&oacute;a ph&ocirc;ng độc đ&aacute;o.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-7-1.jpg\" />Ảnh chụp g&oacute;c si&ecirc;u rộng tr&ecirc;n Samsung Galaxy Fold</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-8-1.jpg\" />Ảnh chụp g&oacute;c rộng 1x tr&ecirc;n Samsung Galaxy Fold</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-1-2.jpg\" />Ảnh chụp g&oacute;c thường 2x tr&ecirc;n Samsung Galaxy Fold</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-2-2.jpg\" /></p>\r\n\r\n<p>Ảnh chụp ch&acirc;n dung x&oacute;a ph&ocirc;ng tr&ecirc;n Samsung Galaxy Fold</p>\r\n\r\n<h3>Dung lượng pin lớn</h3>\r\n\r\n<p>M&aacute;y c&oacute; 2 vi&ecirc;n pin được ph&acirc;n t&aacute;ch ngay ở phần bản lề điện thoại đem lại tổng dung lượng 4.380 mAh hứa hẹn đ&aacute;p ứng đủ nhu cầu cả ng&agrave;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198158/samsung-galaxy-fold-tgdd-5.jpg\" onclick=\"return false;\"><img alt=\"Thời lượng pin của điện thoại Samsung Galaxy Fold chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-5.jpg\" /></a></p>\r\n\r\n<p>Tất nhi&ecirc;n để sạc đầy cho vi&ecirc;n pin c&oacute; dung lượng kh&aacute; lớn th&igrave; Samsung cũng trang bị cho m&aacute;y khả năng sạc nhanh gi&uacute;p bạn r&uacute;t ngắn được thời gian nạp đầy năng lượng cho m&aacute;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198158/samsung-galaxy-fold-tgdd-1.jpg\" onclick=\"return false;\"><img alt=\"Thời lượng pin của điện thoại Samsung Galaxy Fold chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-tgdd-1.jpg\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '2020-07-11 00:00:00', NULL),
(5, 6, 3, 'Cuối cùng sau bao nhiêu thời gian chờ đợi, chiếc điện thoại Samsung Galaxy Z Flip đã được Samsung ra mắt tại sự kiện Unpacked 2020. Siêu phẩm với thiết kế màn hình gập vỏ sò độc đáo, hiệu năng tuyệt đỉnh cùng nhiều công nghệ thời thượng, dẫn dầu 2020.', '<h2>Cuối c&ugrave;ng sau bao nhi&ecirc;u thời gian chờ đợi, chiếc điện thoại&nbsp;Samsung Galaxy Z Flip&nbsp;đ&atilde; được&nbsp;Samsung&nbsp;ra mắt tại sự kiện&nbsp;Unpacked 2020. Si&ecirc;u phẩm với thiết kế m&agrave;n h&igrave;nh gập vỏ s&ograve; độc đ&aacute;o, hiệu năng tuyệt đỉnh c&ugrave;ng nhiều c&ocirc;ng nghệ thời thượng, dẫn dầu 2020.</h2>\r\n\r\n<h3>Đột ph&aacute; với thiết kế m&agrave;n h&igrave;nh gập</h3>\r\n\r\n<p>Samsung Galaxy Z Flip được thiết kế với kiểu d&aacute;ng m&agrave;n h&igrave;nh gập lấy &yacute; tưởng từ d&ograve;ng sản phẩm&nbsp;Galaxy Fold&nbsp;từng g&acirc;y nhiều tiếng vang trong năm 2019.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd4-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Khả năng gập với nhiều góc độ khác nhau\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd4-1.jpg\" /></a></p>\r\n\r\n<p>Tuy nhi&ecirc;n điểm kh&aacute;c biệt l&agrave; m&agrave;n h&igrave;nh của Z Flip được&nbsp;thiết kế gập theo chiều dọc, khiến cho tổng thể m&aacute;y c&oacute; thể nằm gọn trong l&ograve;ng b&agrave;n tay của người d&ugrave;ng như một phụ kiện thời trang cao cấp.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd2-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Đột phá thiết kế màn hình gập\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd2-1.jpg\" /></a></p>\r\n\r\n<p>Bản lề của m&aacute;y cũng c&oacute; khả năng gập - mở với nhiều g&oacute;c độ kh&aacute;c nhau, khi thiết bị ở trạng th&aacute;i mở một nửa, m&agrave;n h&igrave;nh sẽ tự động chia th&agrave;nh hai m&agrave;n h&igrave;nh 4 inch vừa đủ để bạn c&oacute; thể dễ d&agrave;ng xem h&igrave;nh ảnh, nội dung hoặc video ở nửa tr&ecirc;n của m&agrave;n h&igrave;nh v&agrave; thao t&aacute;c điều khiển ch&uacute;ng ở nửa dưới.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd5-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Thiết kế bản lề mới với độ bền cao\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd5-1.jpg\" /></a></p>\r\n\r\n<p>Trải nghiệm sử dụng Samsung Galaxy Z Flip linh hoạt nhờ kết cấu bản lề mới hiện đại, c&oacute; khả năng chống bụi bẩn tốt hơn. Tuy vẫn c&oacute; vết gấp giữa m&agrave;n h&igrave;nh Galaxy Z Flip nhưng ho&agrave;n to&agrave;n kh&ocirc;ng ảnh hưởng đến trải nghiệm người d&ugrave;ng.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute; c&ocirc;ng nghệ n&agrave;y c&ograve;n cho ph&eacute;p Samsung Galaxy Z Flip c&oacute; thể dễ d&agrave;ng gập mở với độ bền l&ecirc;n tới hơn 200.000 lần, mở ra một thập kỷ mới của sự s&aacute;ng tạo d&agrave;nh cho&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;m&agrave;n h&igrave;nh gập.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd11-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Thiết kế gọn nhẹ\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd11-2.jpg\" /></a></p>\r\n\r\n<p>Khi mở m&aacute;y hết cỡ, m&agrave;n h&igrave;nh của m&aacute;y c&oacute; k&iacute;ch thước 6.7 inch, đ&acirc;y l&agrave; m&agrave;n h&igrave;nh c&oacute; thiết kế gập vỏ s&ograve; bằng k&iacute;nh đầu ti&ecirc;n tr&ecirc;n thế giới với thiết kế&nbsp;m&agrave;n h&igrave;nh tr&agrave;n viền với camera kho&eacute;t lỗ.&nbsp;</p>\r\n\r\n<p>Galaxy Z Flip sở hữu m&agrave;n h&igrave;nh Infinity Flex với c&ocirc;ng nghệ k&iacute;nh uốn dẻo Ultra Thin Glass (UTG) độc đ&aacute;o từ Samsung, c&ocirc;ng nghệ n&agrave;y gi&uacute;p m&aacute;y mỏng hơn, cho cảm gi&aacute;c cầm nắm sang trọng v&agrave; cao cấp.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd10-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Màn hình giải trí sắc nét\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd10-2.jpg\" /></a></p>\r\n\r\n<p>Sử dụng tấm nền Dynamic AMOLED độ ph&acirc;n giải Full HD+ tỉ lệ m&agrave;n h&igrave;nh 21.9:9 độc đ&aacute;o nhất hiện nay, hỗ trợ HDR10+ gi&uacute;p cho từng h&igrave;nh ảnh m&agrave; bạn xem sống động tr&ecirc;n từng chi tiết, sắc n&eacute;t tr&ecirc;n từng chuyển động mang đến m&agrave;u sắc sống động ch&acirc;n thật.</p>\r\n\r\n<h3>N&acirc;ng cấp camera k&eacute;p, chụp ảnh ban đ&ecirc;m ấn tượng</h3>\r\n\r\n<p>Samsung Galaxy Z Flip được trang bị camera k&eacute;p c&ugrave;ng độ ph&acirc;n giải 12 MP với khẩu độ lần lượt l&agrave; f/1.8 v&agrave; f/2.2 c&oacute; hỗ trợ chống rung quang học OIS cho khả năng chụp h&igrave;nh thiếu s&aacute;ng tốt đi k&egrave;m c&ocirc;ng nghệ chụp ảnh bằng cử chỉ, dễ d&agrave;ng ghi lại mọi khoảnh khắc hằng ng&agrave;y.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd8-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Camera kép ấn tượng\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd8-1.jpg\" /></a></p>\r\n\r\n<p>C&ocirc;ng nghệ nhận diện AI gi&uacute;p m&aacute;y c&oacute; thể nhận biết được nhiều chủ thể kh&aacute;c nhau qua đ&oacute; tối ưu c&aacute;c th&ocirc;ng số kỹ thuật để cho ra những tấm h&igrave;nh sắc n&eacute;t, độ chi tiết cao c&ugrave;ng m&agrave;u sắc sống động.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd12.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Trải nghiệm camera \" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd12.jpg\" /></a></p>\r\n\r\n<p>Camera trước của m&aacute;y c&oacute; độ ph&acirc;n giải 10 MP với khẩu độ f2.4 được bố tr&iacute; dạng đục lỗ ở ch&iacute;nh giữa m&agrave;n h&igrave;nh cũng tương tự như Galaxy S20, đ&aacute;p ứng tốt nhu cầu chụp ảnh selfie, quay video với chất lượng tốt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-15-1.jpg\" />Ảnh chụp g&oacute;c si&ecirc;u rộng 0.5x tr&ecirc;n Samsung Galaxy Z Flip</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-14-1.jpg\" />Ảnh chụp g&oacute;c thường 1x tr&ecirc;n Samsung Galaxy Z Flip</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-16-1.jpg\" />Ảnh chụp chế độ zoom 2x tr&ecirc;n Samsung Galaxy Z Flip</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-17-1.jpg\" />Ảnh chụp chế độ zoom 4x tr&ecirc;n&nbsp;Samsung Galaxy Z Flip</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-18-1.jpg\" /></p>\r\n\r\n<p>Ảnh chụp chế độ zoom 8x tr&ecirc;n&nbsp;Samsung Galaxy Z Flip</p>\r\n\r\n<p>Khi gập m&aacute;y lại bạn cũng c&oacute; thể chụp ảnh với m&agrave;n h&igrave;nh phụ k&iacute;ch thước 1.1 inch, thỏa th&iacute;ch trải nghiệm selfie chất lượng với bộ đ&ocirc;i camera k&eacute;p ở mặt sau.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd12-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Trải nghiệm chụp ảnh\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd12-2.jpg\" /></a></p>\r\n\r\n<h3>Hiệu năng đỉnh cao với Snapdragon 855 Plus</h3>\r\n\r\n<p>Samsung Galaxy Z Flip được trang bị con chip mạnh mẽ Snapdragon 855 Plus đi k&egrave;m với m&aacute;y l&agrave; dung lượng RAM 8 GB v&agrave; bộ nhớ trong l&ecirc;n đến 256 GB.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd9-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Điểm Antutu Benchmark\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd9-1.jpg\" /></a></p>\r\n\r\n<p>Mặc d&ugrave; kh&ocirc;ng qu&aacute; nổi trội như so với si&ecirc;u phẩm&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s20\" target=\"_blank\">Samsung Galaxy S20</a>&nbsp;nhưng vẫn đủ để đảm bảo Z Flip lu&ocirc;n chạy mượt m&agrave; c&aacute;c ứng dụng nặng. Th&ocirc;ng số n&agrave;y cũng thuộc h&agrave;ng top trong thế giới Android đầu 2020.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd3-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Hiệu năng đỉnh cao\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd3-1.jpg\" /></a></p>\r\n\r\n<p>Chiếc m&aacute;y m&agrave;n h&igrave;nh gập của Samsung được trang bị bộ nhớ trong chuẩn UFS 3.0 được đ&aacute;nh gi&aacute; cho tốc độ cực nhanh, c&oacute; thể s&aacute;nh ngang với SSD tr&ecirc;n m&aacute;y t&iacute;nh c&aacute; nh&acirc;n. Tốc độ ổ cứng nhanh kết hợp với vi xử l&yacute; hiệu năng mạnh mẽ g&oacute;p phần l&agrave;m cho m&aacute;y xử l&yacute; mượt m&agrave;, nhanh ch&oacute;ng hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd9-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Khay sim\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd9-2.jpg\" /></a></p>\r\n\r\n<p>Galaxy Z Flip được c&agrave;i đặt sẵn hệ điều h&agrave;nh Android 10 t&ugrave;y biến tr&ecirc;n giao diện OneUI 2.0 mới nhất, đồng thời Samsung cũng tối ưu giao điện cho chế độ m&aacute;y gập lại, gập 1 nửa cho người d&ugrave;ng trải nghiệm mới lạ v&agrave; tuyệt vời hơn.</p>\r\n\r\n<h3>Thời lượng pin tốt đi k&egrave;m sạc kh&ocirc;ng d&acirc;y thời thượng</h3>\r\n\r\n<p>Thời lượng pin cũng l&agrave; điểm mạnh của Samsung Galaxy Z Flip khi được trang bị vi&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd?f=pin-khung-3000-mah\" target=\"_blank\">pin lớn</a>&nbsp;dung lượng&nbsp;3300 mAh, c&oacute; hỗ trợ c&ocirc;ng nghệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd?f=sac-pin-nhanh\" target=\"_blank\">sạc nhanh</a>&nbsp;15W gi&uacute;p giảm đ&aacute;ng kể thời gian sạc đầy pin cho m&aacute;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd17.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Thời lượng pin tốt \" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd17.jpg\" /></a></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute; smartphone Galaxy c&ograve;n được trang bị c&ocirc;ng nghệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd?f=sac-khong-day\" target=\"_blank\">sạc kh&ocirc;ng d&acirc;y</a>&nbsp;hiện đại, kh&aacute; tiện lợi v&agrave; gọn g&agrave;ng kh&ocirc;ng cần phải lo sợ bị đứt d&acirc;y hay r&ograve; rỉ điện như c&aacute;c phương thức sạc truyền thống kh&aacute;c.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/dtdd?f=bao-mat-van-tay\" target=\"_blank\">Cảm biến v&acirc;n tay</a>&nbsp;của m&aacute;y được đặt ở cạnh b&ecirc;n, kh&ocirc;ng được t&iacute;ch hợp b&ecirc;n trong m&agrave;n h&igrave;nh đổi lại m&aacute;y lại c&oacute; khả năng nhận diện nhanh v&agrave; ch&iacute;nh x&aacute;c cũng như độ bảo mật cao hơn so với cảm biến v&acirc;n tay trong m&agrave;n h&igrave;nh.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd1-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Cảm biến vân tay\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd1-2.jpg\" /></a></p>\r\n\r\n<p>T&oacute;m lại, Galaxy Z Flip l&agrave; sản phẩm mang đẳng cấp kh&aacute;c biệt tiếp theo của Samsung kể từ khi ra mắt chiếc Galaxy Fold. Chiếc m&aacute;y sở hữu đầy đủ c&aacute;c yếu tố: Thời trang, kh&aacute;c lạ, c&ocirc;ng nghệ đỉnh cao.</p>\r\n\r\n<p>Chắc chắn sẽ g&acirc;y hứng th&uacute; với anh em y&ecirc;u c&ocirc;ng nghệ hoặc những ai muốn trở n&ecirc;n thật tự tin khi sở hữu một thiết bị đặc biệt v&agrave; cao cấp so với thế giới c&ograve;n lại.</p>\r\n', '', '2020-07-11 00:00:00', NULL),
(6, 7, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `bai_viet` (`ID_BAI_VIET`, `ID_DIEN_THOAI`, `ID_USER`, `TITLE`, `NOI_DUNG_BAI_VIET`, `TEN_TAC_GIA`, `NGAY_DANG_BAI_VIET`, `SO_LUOT_THICH`) VALUES
(7, 8, 3, 'iPhone 11 Pro Max 256GB là chiếc iPhone cao cấp nhất trong bộ 3 iPhone Apple giới thiệu trong năm 2019 và quả thực chiếc smartphone này mang trong mình nhiều trang bị xứng đáng với tên gọi \"Pro\".', '<h2>iPhone 11 Pro Max 256GB l&agrave; chiếc iPhone cao cấp nhất trong bộ 3 iPhone Apple giới thiệu trong năm 2019 v&agrave; quả thực chiếc smartphone n&agrave;y mang trong m&igrave;nh nhiều trang bị xứng đ&aacute;ng với t&ecirc;n gọi &quot;Pro&quot;.</h2>\r\n\r\n<h3>Pro về camera sau</h3>\r\n\r\n<p>Camera l&agrave; một trong những điểm n&acirc;ng cấp mạnh mẽ nhất năm nay Apple mang đến cho chiếc&nbsp;iPhone 11 Pro Max.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd15-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Thiết kế camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd15-1.jpg\" /></a></p>\r\n\r\n<p>Đ&oacute; l&agrave; lần đầu ti&ecirc;n một chiếc iPhone sở hữu tới 3 camera ở mặt sau với 3 ti&ecirc;u cự kh&aacute;c nhau m&agrave; người ta vẫn gọi l&agrave; &quot;từ nh&agrave; tới trường&quot; đ&aacute;p ứng mọi nhu cầu nhiếp ảnh của người d&ugrave;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd22.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Giao diện chụp ảnh\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd22.jpg\" /></a></p>\r\n\r\n<p>Ngo&agrave;i một camera g&oacute;c rộng v&agrave; một camera tele vốn dĩ đ&atilde; xuất hiện từ thời iPhone 7 Plus th&igrave; năm nay&nbsp;iPhone 11 Pro Max được trang bị th&ecirc;m một ống k&iacute;nh g&oacute;c si&ecirc;u rộng nữa.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd10-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp chân dung bằng camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd10-1.jpg\" /></a></p>\r\n\r\n<p><em>Ảnh chụp bằng camera sau tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p>Ống k&iacute;nh n&agrave;y sẽ thực sự hữu &iacute;ch khi bạn muốn lấy được nhiều chi tiết hơn khi đứng c&ugrave;ng một vị tr&iacute; chụp m&agrave; kh&ocirc;ng cần phải di chuyển ra xa chủ thể.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd16-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp bằng camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd16-1.jpg\" /></a></p>\r\n\r\n<p><em>Ảnh chụp bằng camera sau tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p>Kh&ocirc;ng chỉ n&acirc;ng cấp về mặt phần cứng m&agrave; phần mềm b&ecirc;n trong m&aacute;y cũng được bổ sung th&ecirc;m nhiều t&iacute;nh năng đ&aacute;ng gi&aacute; kh&aacute;c.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd19.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Chế độ Night Mode mới\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd19.jpg\" /></a></p>\r\n\r\n<p><em>Chế độ Night Mode mới</em></p>\r\n\r\n<p>Đ&oacute; l&agrave; chế độ chụp đ&ecirc;m gi&uacute;p m&aacute;y khắc phục ho&agrave;n to&agrave;n &quot;yếu điểm&quot; chụp đ&ecirc;m kh&ocirc;ng tốt vốn bị ph&agrave;n n&agrave;n kh&aacute; nhiều tới từ người d&ugrave;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd8-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp bằng chế độ Night Mode\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd8-1.jpg\" /></a></p>\r\n\r\n<p><em>Ảnh chụp chế độ Night Mode mới</em></p>\r\n\r\n<p>iPhone năm nay thực sự l&agrave; một sự &quot;lột x&aacute;c&quot; của Apple về camera chụp đ&ecirc;m khi những bức ảnh cho ra c&oacute; độ s&aacute;ng v&agrave; chi tiết cao hơn hẳn nếu đem so với chiếc iPhone Xs Max năm ngo&aacute;i.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd17-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp chế độ cơ bản\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd17-1.jpg\" /></a></p>\r\n\r\n<p><em>Ảnh chụp chế độ cơ bản tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p>Apple cũng mang lại một trải nghiệm rất th&ocirc;ng minh khi tất cả m&aacute;y sẽ tự động quyết định khi n&agrave;o chụp đ&ecirc;m khi n&agrave;o kh&ocirc;ng v&agrave; việc của bạn chỉ l&agrave; đưa l&ecirc;n v&agrave; chụp th&ocirc;i.</p>\r\n\r\n<p>Chế độ ch&acirc;n dung kh&ocirc;ng chỉ tốt hơn trong việc lấy n&eacute;t v&agrave;o đối tượng muốn chụp, m&agrave; c&ograve;n hoạt động được ở khoảng c&aacute;ch &#39;b&igrave;nh thường&#39; nhờ sự trợ gi&uacute;p của cảm biến độ s&acirc;u.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd16.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Giao diện chuyển đổi các ống kính camera\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd16.jpg\" /></a></p>\r\n\r\n<p>Khả năng quay video n&acirc;ng cấp đ&aacute;ng kể với chế độ 4K 60fps gi&uacute;p bạn&nbsp;c&oacute; thể quay những thước phim chuy&ecirc;n nghiệp bằng iPhone v&agrave; chỉnh sửa trực tiếp tr&ecirc;n m&aacute;y.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/danh-gia-chi-tiet-iphone-11-pro-max-1199526\" target=\"_blank\">Đ&aacute;nh gi&aacute; chi tiết iPhone 11 Pro Max: Chiếc smartphone đỉnh nhất 2019?</a></p>\r\n\r\n<h3>Pro lu&ocirc;n cả camera trước</h3>\r\n\r\n<p>Kh&ocirc;ng chỉ c&oacute; camera sau được n&acirc;ng cấp m&agrave; camera selfie tr&ecirc;n iPhone 11 Pro Max cũng được n&acirc;ng l&ecirc;n độ ph&acirc;n giải 12 MP thay v&igrave; 7 MP như trước.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd15.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Trải nghiệm cầm nắm\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd15.jpg\" /></a></p>\r\n\r\n<p>Camera trước năm nay c&ograve;n c&oacute; th&ecirc;m t&iacute;nh năng selfie g&oacute;c rộng rất th&iacute;ch hợp cho c&aacute;c bạn đi chơi v&agrave; chụp h&igrave;nh một nh&oacute;m đ&ocirc;ng người.</p>\r\n\r\n<p>Theo đ&oacute; th&igrave; khi bạn xoay ngang chiếc điện thoại th&igrave; iPhone sẽ lập tức chuyển qua chế độ selfie g&oacute;c rộng để bạn c&oacute; thể chụp m&agrave; kh&ocirc;ng cần tới gậy tự sướng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd12-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp selfie\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd12-1.jpg\" /></a></p>\r\n\r\n<p>Camera n&agrave;y cũng hỗ trợ quay video với độ ph&acirc;n giải l&ecirc;n tới 4K rất ph&ugrave; hợp với những bạn th&iacute;ch l&agrave;m vlog hay quay video vui vẻ để đăng l&ecirc;n mạng x&atilde; hội.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd1.gif\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp Slofie bằng camera trước\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd1.gif\" /></a></p>\r\n\r\n<p>Tất nhi&ecirc;n cũng kh&ocirc;ng thể bỏ qua t&iacute;nh năng&nbsp;quay video slow motion (quay chậm) gi&uacute;p bạn c&oacute; được những video&nbsp; th&uacute; vị v&agrave; vui vẻ với bạn b&egrave;.</p>\r\n\r\n<h3>Pro về hiệu năng</h3>\r\n\r\n<p>Tất nhi&ecirc;n rồi, một chiếc iPhone mới ra bao giờ cũng sẽ đứng đầu danh s&aacute;ch những chiếc m&aacute;y c&oacute; hiệu năng tốt nhất hiện nay v&agrave; với&nbsp;iPhone 11 Pro Max 256GB cũng kh&ocirc;ng phải l&agrave; ngoại lệ.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd10.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Trải nghiệm chơi game\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd10.jpg\" /></a></p>\r\n\r\n<p>Cung cấp sức mạnh cho m&aacute;y kh&ocirc;ng ai kh&aacute;c ch&iacute;nh l&agrave; con chip&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-chip-apple-a13-bionic-tren-iphone-11-n-1197492\" target=\"_blank\">Apple A13 Bionic</a>, con chip mạnh mẽ nhất d&agrave;nh cho những chiếc iPhone trong năm 2019.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-22.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Điểm hiệu năng Antutu Benchmark\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-22.jpg\" /></a></p>\r\n\r\n<p><em>Điểm Geekbench của iPhone 11 Pro Max</em></p>\r\n\r\n<p>Bộ nhớ trong lớn l&ecirc;n tới 256 GB gi&uacute;p bạn thoải m&aacute;i quay video 4K, chụp h&igrave;nh độ ph&acirc;n giải cao hay tải game v&agrave; ứng dụng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd9.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Giao diện iOS 13 mới\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd9.jpg\" /></a></p>\r\n\r\n<p>Đi k&egrave;m với chiếc iPhone mới n&agrave;y sẽ l&agrave; hệ điều h&agrave;nh iOS 13 mới mẻ với nhiều t&iacute;nh năng được người d&ugrave;ng mong chờ từ l&acirc;u như chế độ Dark Mode mới, khả năng kết nối 2 tai nghe AirPods c&ugrave;ng l&uacute;c...</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd8.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Giao diện iOS 13 mới\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd8.jpg\" /></a></p>\r\n\r\n<p>Mọi game v&agrave; ứng dụng tr&ecirc;n iPhone 11 Pro Max hoạt động rất mượt m&agrave; v&agrave; ổn định, bạn hầu như sẽ kh&ocirc;ng thấy bất cứ độ trễ n&agrave;o trong qu&aacute; tr&igrave;nh sử dụng.</p>\r\n\r\n<h3>Pro về thời lượng pin</h3>\r\n\r\n<p>Đ&acirc;y l&agrave;&nbsp;chiếc iPhone c&oacute; dung lượng pin lớn nhất từ trước tới nay m&agrave; Apple từng sản xuất.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd7.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Thời lượng sử dụng pin\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd7.jpg\" /></a></p>\r\n\r\n<p>Theo tuy&ecirc;n bố từ h&atilde;ng th&igrave; iPhone 11 Pro Max c&oacute; thời lượng pin l&acirc;u hơn 5 giờ so với iPhone XS Max v&agrave; trải nghiệm thực tế c&ograve;n tốt hơn thế nhiều.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd6.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Thời lượng sử dụng pin trên chế độ Dark Mode\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd6.jpg\" /></a></p>\r\n\r\n<p>Bạn c&oacute; thể sử dụng m&aacute;y thoải m&aacute;i từ s&aacute;ng tới tối m&agrave; kh&ocirc;ng cần phải bận t&acirc;m về việc nạp năng lượng cho m&aacute;y giữa chừng.</p>\r\n\r\n<p>Năm nay &quot;T&aacute;o khuyết&quot; cũng đ&atilde; lắng nghe người d&ugrave;ng hơn khi trang bị sẵn b&ecirc;n trong hộp của m&aacute;y một củ sạc nhanh 18W gi&uacute;p bạn r&uacute;t ngắn được đ&aacute;ng kể thời gian chờ sạc pin.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd5.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Thời lượng pin\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd5.jpg\" /></a></p>\r\n\r\n<p>T&iacute;nh năng sạc kh&ocirc;ng d&acirc;y vẫn được duy tr&igrave;&nbsp;v&agrave; thậm ch&iacute; l&agrave; <a href=\"https://www.thegioididong.com/dtdd?f=sac-pin-nhanh\" target=\"_blank\">sạc nhanh</a> kh&ocirc;ng d&acirc;y để bạn c&oacute; thể sử dụng hằng ng&agrave;y.</p>\r\n\r\n<h3>Những n&acirc;ng cấp đ&aacute;ng gi&aacute; kh&aacute;c</h3>\r\n\r\n<p>iPhone năm nay vẫn c&oacute; thiết kế khung viền th&eacute;p cứng c&aacute;p c&ugrave;ng 2 mặt k&iacute;nh nhưng để hạn chế tối đa mồ h&ocirc;i v&agrave; dấu v&acirc;n tay th&igrave; năm nay Apple đ&atilde; ho&agrave;n thiện cho chiếc&nbsp;iPhone 11 Pro Max 256GB mặt lưng dạng k&iacute;nh mờ.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd4.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Thiết kế mặt lưng kính cao cấp\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd4.jpg\" /></a></p>\r\n\r\n<p>Đặc biệt, m&agrave;u sắc của iPhone 11 Pro Max rất hấp dẫn, bao gồm xanh b&oacute;ng đ&ecirc;m, x&aacute;m kh&ocirc;ng gian, bạc v&agrave; v&agrave;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd3.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Thiết kế mặt lưng kính mở chống bám mồ hôi, dấu vân tay\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd3.jpg\" /></a></p>\r\n\r\n<p>M&agrave;n h&igrave;nh tr&ecirc;n iPhone l&agrave; một trong những điểm đ&aacute;ng tiền v&agrave; iPhone 11 Pro Max sở hữu m&agrave;n h&igrave;nh đảm bảo được ti&ecirc;u ch&iacute; n&agrave;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Trải nghiệm giải trí trên màn hình sắc nét\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd2.jpg\" /></a></p>\r\n\r\n<p>Một trong những điểm quan trọng được n&acirc;ng cấp trong m&agrave;n h&igrave;nh đ&oacute; l&agrave; khả năng ph&aacute;t nội dung Dolby Vision.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Công nghệ màn hình Super Retina XDR\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd1.jpg\" /></a></p>\r\n\r\n<p>iPhone thường đạt được độ s&aacute;ng 800 nits, nhưng với Dolby Vision mọi thứ thậm ch&iacute; c&ograve;n ấn tượng hơn (l&ecirc;n tới 1200 nits, theo Apple).</p>\r\n\r\n<p>Với những trang bị kể tr&ecirc;n th&igrave; iPhone 11 Pro Max năm nay sẽ lại b&aacute;n chạy v&agrave; mang về th&agrave;nh c&ocirc;ng lớn cho Apple.</p>\r\n', '', '2020-07-11 00:00:00', NULL);

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
(2, 'Full HD+ (1080 x 2400 Pixels)', 'TFT LCD', 6.5, 16, 48, 'Quay phim HD 720p@30fps, Quay phim FullHD 1080p@30fps, Quay phim 4K 2160p@30fps', 'Snapdragon 665 8 nhân', '4 nhân 2.0 GHz & 4 nhân 1.8 GHz', 'Adreno 610', 8, 128, 'MicroSD, hỗ trợ tối đa 256 GB', 'Khung & Mặt lưng nhựa', 'Dài 162 mm - Ngang 75.5 mm - Dày 8.9 mm', 192, 5000, NULL, 'Tiết kiệm pin, Sạc pin nhanh', '2 Nano SIM', 'Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi Direct, ', 'A2DP, LE, v5.0', 'USB Type-C', '3.5 mm', NULL),
(4, '828 x 1792 Pixels', 'IPS LCD', 6.1, 12, 12, 'Quay phim HD 720p@30fps, Quay phim FullHD 1080p@30fps, Quay phim FullHD 1080p@60fps, Quay phim FullHD 1080p@120fps, Quay phim FullHD 1080p@240fps, Quay phim 4K 2160p@24fps, Quay phim 4K 2160p@30fps, Quay phim 4K 2160p@60fps', 'Apple A13 Bionic 6 nhân', '2 nhân 2.65 GHz & 4 nhân 1.8 GHz', 'Apple GPU 4 nhân', 4, 64, 'Không', 'Khung nhôm & Mặt lưng kính cường lực', 'Dài 150.9 mm - Ngang 75.7 mm - Dày 8.3 mm', 194, 3110, 'Pin chuẩn Li-Ion', 'Tiết kiệm pin, Sạc pin nhanh, Sạc pin không dây', '1 eSIM & 1 Nano SIM', 'Wi-Fi 802.11 a/b/g/n/ac/ax, Dual-band, Wi-Fi hotsp', 'A2DP, LE, v5.0', 'Lightning', 'Lightning', NULL),
(5, '828 x 1792 Pixels', 'IPS LCD', 6.1, 12, 12, 'Quay phim HD 720p@30fps, Quay phim FullHD 1080p@30fps, Quay phim FullHD 1080p@60fps, Quay phim FullHD 1080p@120fps, Quay phim FullHD 1080p@240fps, Quay phim 4K 2160p@24fps, Quay phim 4K 2160p@30fps, Quay phim 4K 2160p@60fps', 'Apple A13 Bionic 6 nhân', '2 nhân 2.65 GHz & 4 nhân 1.8 GHz', 'Apple GPU 4 nhân', 4, 64, 'Không', 'Khung nhôm & Mặt lưng kính cường lực', 'Dài 150.9 mm - Ngang 75.7 mm - Dày 8.3 mm', 194, 3110, 'Pin chuẩn Li-Ion', 'Tiết kiệm pin, Sạc pin nhanh, Sạc pin không dây', '1 eSIM & 1 Nano SIM', 'Wi-Fi 802.11 a/b/g/n/ac/ax, Dual-band, Wi-Fi hotsp', 'A2DP, LE, v5.0', 'Lightning', 'Lightning', NULL),
(6, 'Full HD+ (1080 x 2400 Pixels)', 'TFT LCD', 6.5, 16, 48, 'Quay phim HD 720p@30fps, Quay phim FullHD 1080p@30fps, Quay phim 4K 2160p@30fps', 'Snapdragon 665 8 nhân', '4 nhân 2.0 GHz & 4 nhân 1.8 GHz', 'Adreno 610', 8, 128, 'MicroSD, hỗ trợ tối đa 256 GB', 'Khung & Mặt lưng nhựa', 'Dài 162 mm - Ngang 75.5 mm - Dày 8.9 mm', 192, 5000, NULL, 'Tiết kiệm pin, Sạc pin nhanh', '2 Nano SIM', 'Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi Direct, ', 'A2DP, LE, v5.0', 'USB Type-C', '3.5 mm', NULL),
(7, 'Full HD+ (1080 x 2400 Pixels)', 'TFT LCD', 6.5, 16, 48, 'Quay phim HD 720p@30fps, Quay phim FullHD 1080p@30fps, Quay phim 4K 2160p@30fps', 'Snapdragon 665 8 nhân', '4 nhân 2.0 GHz & 4 nhân 1.8 GHz', 'Adreno 610', 8, 128, 'MicroSD, hỗ trợ tối đa 256 GB', 'Khung & Mặt lưng nhựa', 'Dài 162 mm - Ngang 75.5 mm - Dày 8.9 mm', 192, 5000, NULL, 'Tiết kiệm pin, Sạc pin nhanh', '2 Nano SIM', 'Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi Direct, ', 'A2DP, LE, v5.0', 'USB Type-C', '3.5 mm', NULL),
(8, 'Full HD+ (1080 x 2400 Pixels)', 'TFT LCD', 6.5, 16, 48, 'Quay phim HD 720p@30fps, Quay phim FullHD 1080p@30fps, Quay phim 4K 2160p@30fps', 'Snapdragon 665 8 nhân', '4 nhân 2.0 GHz & 4 nhân 1.8 GHz', 'Adreno 610', 8, 128, 'MicroSD, hỗ trợ tối đa 256 GB', 'Khung & Mặt lưng nhựa', 'Dài 162 mm - Ngang 75.5 mm - Dày 8.9 mm', 192, 5000, NULL, 'Tiết kiệm pin, Sạc pin nhanh', '2 Nano SIM', 'Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi Direct, ', 'A2DP, LE, v5.0', 'USB Type-C', '3.5 mm', NULL);

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
(1, 'Thế giới đi động', 'https://www.thegioididong.com/', 'upload/100720111951.png'),
(2, 'FPT shop', 'https://fptshop.com.vn/', 'upload/100720112045.png'),
(3, 'Di động thông minh', 'https://didongthongminh.vn/', 'upload/100720112110.jpg'),
(4, 'Nguyễn Kim', 'https://www.nguyenkim.com/', 'upload/100720112153.png');

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
(1, 2, 'https://www.thegioididong.com/dtdd/iphone-11-pro-max-512gb', '2020-07-11 00:00:00'),
(1, 1, 'https://www.thegioididong.com/dtdd/iphone-11', '2020-07-11 00:00:00'),
(1, 4, 'https://www.thegioididong.com/dtdd/samsung-galaxy-a21s', '2020-07-11 00:00:00'),
(1, 5, 'https://www.thegioididong.com/dtdd/samsung-galaxy-fold', '2020-07-11 00:00:00'),
(1, 6, 'https://www.thegioididong.com/dtdd/samsung-galaxy-z-flip', '2020-07-11 00:00:00'),
(1, 7, 'https://www.thegioididong.com/dtdd/oppo-reno3-pro', '2020-07-11 00:00:00'),
(1, 8, 'https://www.thegioididong.com/dtdd/iphone-11-pro-max-256gb', '2020-07-11 00:00:00');

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
(1, 1, 'Iphone 11 red 64GB', 21990000, NULL, 'upload/100720112609.png'),
(2, 1, 'iPhone 11 Pro Max 512GB', 41990000, NULL, 'upload/100720112722.png'),
(4, 2, 'Samsung Galaxy A21s', 5690000, NULL, 'upload/100720113101.png'),
(5, 2, 'Samsung Galaxy Fold', 50000000, NULL, 'upload/100720113210.png'),
(6, 2, 'Samsung Galaxy Z Flip', 36000000, NULL, 'upload/100720113251.png'),
(7, 3, 'OPPO Reno3 Pro', 14990000, NULL, 'upload/100720113502.png'),
(8, 1, 'iPhone 11 Pro Max 256GB', 37990000, NULL, 'upload/110720121208.png');

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
  MODIFY `ID_BAI_VIET` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `bao_cao_binh_luan`
--
ALTER TABLE `bao_cao_binh_luan`
  MODIFY `ID_BAO_CAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ID_BINH_LUAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_bao_cao`
--
ALTER TABLE `chi_tiet_bao_cao`
  MODIFY `ID_CHI_TIET` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT cho bảng `phan_quyen`
--
ALTER TABLE `phan_quyen`
  MODIFY `ID_PHAN_QUYEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_USER_RELATIONS_PHAN_QUY` FOREIGN KEY (`ID_PHAN_QUYEN`) REFERENCES `phan_quyen` (`ID_PHAN_QUYEN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
