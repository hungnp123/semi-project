-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 02, 2022 lúc 02:44 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `semi_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `,match`
--

CREATE TABLE `,match` (
  `match_id` int(11) NOT NULL,
  `first_team` int(100) NOT NULL,
  `second_team` int(100) NOT NULL,
  `first_result` int(11) NOT NULL,
  `second_result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `,match`
--

INSERT INTO `,match` (`match_id`, `first_team`, `second_team`, `first_result`, `second_result`) VALUES
(1, 8, 5, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calendar`
--

CREATE TABLE `calendar` (
  `calendar_id` int(11) NOT NULL,
  `leauge_name` varchar(100) NOT NULL,
  `first_team` int(100) NOT NULL,
  `second_team` int(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `club`
--

CREATE TABLE `club` (
  `club_id` int(11) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `club_img` varchar(100) NOT NULL,
  `club_national` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `club_playler` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `club_img`, `club_national`, `description`, `club_playler`) VALUES
(1, 'Manchester United', 'club1logo.jpg', 'UK', 'Manchester United Football Club is a professional football club based in Old Trafford, Greater Manch', 0),
(2, 'Manchester City', 'club2logo.jpg', 'UK', 'Manchester City Football Club is a professional football club based in Manchester, England.', 0),
(3, 'Chelsea', 'club3logo.jpg', 'UK', 'Chelsea Football Club is an English professional football club based in Fulham, London.', 0),
(4, 'Paris Saint-Germain', 'club4logo.jpg', 'France', 'Paris Saint-Germain Football Club is a professional football club based in Paris, France.', 0),
(5, 'Liverpool', 'club5logo.jpg', 'UK', 'Liverpool Football Club is a professional football club based in Liverpool, England,', 0),
(6, 'Tottenham Hotspur', 'club6logo.jpg', 'UK', 'Tottenham Hotspur Football Club, commonly known as Tottenham or Spurs, is an English professional football club based in London.', 0),
(7, 'Juventus', 'club7logo.jpg', 'Italy', 'Juventus Football Club, commonly known as Juventus or Juve is an Italian professional football club based in Turin, Piedmont.', 0),
(8, 'Barcelona', 'club8logo.jpg', 'Spain', 'Barcelona Football Club, commonly known as Barcelona, or simply Barça, is an accomplished football club based in Barcelona, Catalunya, Spain.', 0),
(9, 'Everton', 'club9logo.jpg', 'UK', 'Everton Football Club is a professional football club based in Liverpool, England', 0),
(10, 'Leicester City', 'club10logo.jpg', 'UK', 'Leicester City Football Club, also known as The Foxes, is a professional football team in the East Midlands, England based at the King Power Stadium in Leicester.', 0),
(11, 'Real Madrid', 'club11logo.jpg', 'Spain', 'Real Madrid Club de Fútbol, commonly known as Real Madrid, is a Spanish professional football club based in Madrid.', 0),
(12, 'Atlético de Madrid', 'club12logo.jpg', 'Spain', 'Club Atlético de Madrid, commonly known as Atlético Madrid, or simply Atlético, is a Spanish professional football club based in Madrid.', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `password` varchar(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `,match`
--
ALTER TABLE `,match`
  ADD PRIMARY KEY (`match_id`);

--
-- Chỉ mục cho bảng `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`calendar_id`);

--
-- Chỉ mục cho bảng `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `,match`
--
ALTER TABLE `,match`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `calendar`
--
ALTER TABLE `calendar`
  MODIFY `calendar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `,match`
--
ALTER TABLE `,match`
  ADD CONSTRAINT `,match_ibfk_1` FOREIGN KEY (`first_team`) REFERENCES `club` (`club_id`),
  ADD CONSTRAINT `,match_ibfk_2` FOREIGN KEY (`second_team`) REFERENCES `club` (`club_id`);

--
-- Các ràng buộc cho bảng `calendar`
--
ALTER TABLE `calendar`
  ADD CONSTRAINT `calendar_ibfk_1` FOREIGN KEY (`first_team`) REFERENCES `club` (`club_id`),
  ADD CONSTRAINT `calendar_ibfk_2` FOREIGN KEY (`second_team`) REFERENCES `club` (`club_id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
