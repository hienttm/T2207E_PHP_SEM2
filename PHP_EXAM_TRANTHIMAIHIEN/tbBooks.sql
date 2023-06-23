-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:8889
-- Thời gian đã tạo: Th6 02, 2023 lúc 12:21 PM
-- Phiên bản máy phục vụ: 5.7.34
-- Phiên bản PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `T2207E_PHP_EXAM`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbBooks`
--

CREATE TABLE `tbBooks` (
  `bookid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(55) NOT NULL,
  `ISBN` varchar(25) NOT NULL,
  `pub_year` smallint(6) NOT NULL DEFAULT '0',
  `available` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbBooks`
--

INSERT INTO `tbBooks` (`bookid`, `authorid`, `title`, `ISBN`, `pub_year`, `available`) VALUES
(1, 0, 'PHP Programming', 'PHP05', 0, 1),
(2, 0, 'SQL Database', 'SQL01', 0, 1),
(3, 1, 'C# Programming', 'C#01', 2023, 1),
(4, 0, 'CLEAN CODE', 'CLC02', 0, 1),
(5, 0, 'JAVA Programming', 'JAVA01', 2023, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbBooks`
--
ALTER TABLE `tbBooks`
  ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbBooks`
--
ALTER TABLE `tbBooks`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
