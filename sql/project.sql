-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-06-05 11:01:37
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project`
--

-- --------------------------------------------------------

--
-- 資料表結構 `images`
--

CREATE TABLE `images` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pic_name` varchar(255) NOT NULL,
  `vaild` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `images`
--

INSERT INTO `images` (`id`, `name`, `pic_name`, `vaild`) VALUES
(0, 'user', 'user.png', 1),
(1, 'profilepic', 'profilepic.jpg', 1),
(2, 'image1', 'image1.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `locations`
--

CREATE TABLE `locations` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `locations`
--

INSERT INTO `locations` (`id`, `name`, `city_id`) VALUES
(1, '臺北市', 'TWTWCT1'),
(2, '彰化縣', 'TWTWCT10'),
(3, '南投縣', 'TWTWCT11'),
(4, '嘉義市', 'TWTWCT12'),
(5, '嘉義縣', 'TWTWCT13'),
(6, '雲林縣', 'TWTWCT14'),
(7, '臺南市', 'TWTWCT15'),
(8, '高雄市', 'TWTWCT16'),
(9, '澎湖縣', 'TWTWCT17'),
(10, '屏東縣', 'TWTWCT18'),
(11, '臺東縣', 'TWTWCT19'),
(12, '基隆市', 'TWTWCT2'),
(13, '花蓮縣', 'TWTWCT20'),
(14, '金門縣', 'TWTWCT21'),
(15, '連江縣', 'TWTWCT22'),
(16, '新北市', 'TWTWCT3'),
(17, '宜蘭縣', 'TWTWCT4'),
(18, '新竹市', 'TWTWCT5'),
(19, '新竹縣', 'TWTWCT6'),
(20, '桃園市', 'TWTWCT7'),
(21, '苗栗縣', 'TWTWCT8'),
(22, '臺中市', 'TWTWCT9');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT '流水號',
  `memberid` varchar(50) NOT NULL COMMENT '會員編號',
  `name` varchar(30) DEFAULT NULL COMMENT '使用者名字',
  `images_id` int(255) NOT NULL DEFAULT 0,
  `images_name` varchar(255) DEFAULT NULL COMMENT '使用者照片',
  `gender` enum('女性','男性','其他','') DEFAULT NULL COMMENT '性別',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `account` varchar(50) NOT NULL COMMENT '帳號',
  `password` varchar(50) NOT NULL COMMENT '密碼',
  `phone` varchar(30) DEFAULT NULL COMMENT '電話',
  `email` varchar(50) DEFAULT NULL COMMENT '信箱',
  `location` varchar(30) DEFAULT NULL COMMENT '城市',
  `carrierid` varchar(50) DEFAULT NULL COMMENT '電子發票載具',
  `created_at` datetime DEFAULT current_timestamp() COMMENT '資料建立日期',
  `valid` tinyint(4) NOT NULL DEFAULT 1 COMMENT '使用者資料狀態'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `memberid`, `name`, `images_id`, `images_name`, `gender`, `birthday`, `account`, `password`, `phone`, `email`, `location`, `carrierid`, `created_at`, `valid`) VALUES
(1, '', 'Maggie', 0, NULL, '女性', '1995-11-11', 'maggie@yahoo.com.tw', '12345', '0919952222', 'maggie@yahoo.com.tw', '新北市', NULL, '2024-06-03 09:22:38', 0),
(2, '', 'Vivi', 0, NULL, '女性', '1925-01-01', 'vivi@gmail.com', 'password', '0943111322', 'vivi@gmail.com', '桃園市', NULL, '2024-05-22 09:22:38', 1),
(3, '', 'Davin', 0, NULL, '男性', '1991-04-12', 'davin@gmail.com', '12345', '0919237444', 'davin@gmail.com', '新北市', NULL, '2024-06-03 10:16:03', 0),
(4, '', 'Clara', 0, NULL, '女性', '1994-04-22', 'clara@yahoo.com.tw', '12345', '0931526426', 'clara@yahoo.com.tw', '台北市', NULL, '2024-04-12 10:16:30', 1),
(5, '', 'Ann', 0, NULL, '女性', '1992-12-24', 'ann@yahoo.com.tw', '12345', '0945231535', 'ann@yahoo.com.tw', '高雄市', NULL, '2024-04-23 21:11:32', 1),
(6, '', 'Kobe', 0, NULL, '男性', '1994-10-04', 'kobe@yahoo.com.tw', '12345', '0925245246', 'kobe@yahoo.com.tw', '台中市', NULL, '2024-06-13 10:19:34', 1),
(7, '', 'Jason', 0, NULL, '男性', '1993-03-14', 'jason@yahoo.com.tw', '12345', '0936574677', 'jason@yahoo.com.tw', '宜蘭縣', NULL, '2024-04-11 18:12:54', 1),
(8, '', 'Angela ', 0, NULL, '女性', '1990-07-02', 'angela@yahoo.com.tw', '12345', '0953573573', 'angela@yahoo.com.tw', '桃園市', NULL, '2024-05-23 11:17:32', 1),
(9, '', 'Gill', 0, NULL, '女性', '1999-02-05', 'gill@hotmail.com', '12345', '0911856560', 'gill@hotmail.com', '台北市', NULL, '2024-06-06 10:17:49', 1),
(10, '', 'Jocelyn ', 0, NULL, '女性', '2001-04-18', 'jocelyn@hotmail.com', '12345', '0967650453', 'jocelyn@hotmail.com', '台北市', NULL, '2024-06-04 11:19:25', 1),
(11, '', 'Kowei ', 0, NULL, '女性', '2003-08-09', 'kowei@hotmail.com', 'X00000', '0914114556', 'kowei@hotmail.com', '台北市', NULL, '2024-06-05 18:18:52', 1),
(12, '', 'Chester ', 0, NULL, '男性', '1988-06-30', 'chester@yahoo.com.tw', 'X00000', '0976763325', 'chester@yahoo.com.tw', '新北市', NULL, '2024-06-06 11:19:00', 0),
(13, '', 'Whitney  ', 0, NULL, '女性', '2003-11-24', 'whitney@yahoo.com.tw', 'X00000', '0957764766', 'whitney@yahoo.com.tw', '台北市', NULL, '2024-05-23 18:17:32', 0),
(14, '', 'Dolly ', 0, NULL, '女性', '1997-09-04', 'dolly@hotmail.com', 'X00000', '0966878531', 'dolly@hotmail.com', '基隆市', NULL, '2024-06-06 10:17:49', 1),
(15, '', 'Zoe ', 0, NULL, '女性', '1994-06-11', 'zoe@hotmail.com', 'X00000', '0970679052', 'zoe@hotmail.com', '台北市', NULL, '2024-06-02 20:19:46', 1),
(16, '', 'Tina ', 0, NULL, '女性', '1998-09-04', 'tina@hotmail.com', 'X00000', '0943234235', 'tina@hotmail.com', '台北市', NULL, '2023-12-21 10:18:06', 1),
(17, '', 'Carina ', 0, NULL, '女性', '1998-12-07', 'carina@gmail.com', 'X00000', '0935467855', 'carina@gmail.com', '桃園市', NULL, '2024-05-10 20:18:24', 1),
(18, '', 'Ethan', 0, NULL, '男性', '1988-08-14', 'Ethan@gmail.com', 'X00000', '0977987332', 'Ethan@gmail.com', '桃園市', NULL, '2023-11-09 11:37:00', 1),
(19, '', 'Stanley', 0, NULL, '男性', '1993-05-16', 'stanley@gmail.com', 'X00000', '0954459755', 'stanley@gmail.com', '桃園市', NULL, '2024-02-02 10:16:47', 1),
(20, '', 'Rickey', 0, NULL, '男性', '1995-04-14', 'rickey@gmail.com', 'X00000', '0950056323', 'rickey@gmail.com', '桃園市', NULL, '2023-06-08 15:30:15', 1),
(21, '', 'Oliva', 0, NULL, '女性', '2018-01-01', '', '12345', '0911999432', 'oliva@yahoo.com', '臺北市', NULL, '2024-06-04 10:01:31', 1),
(22, '', 'Eddy', 0, NULL, '男性', '1999-01-01', '', '12345', '0988982000', 'eddy@yahoo.com.tw', '苗栗縣', NULL, '2024-06-04 12:24:37', 1),
(23, '', 'Maggie', 0, NULL, '女性', '1989-01-01', '', '12345', '0900003222', 'maggie@gmail.com', '新竹縣', NULL, '2024-06-04 14:28:14', 1),
(24, '', 'Nancy', 0, NULL, '女性', '2013-02-15', '', '12345', '0943865833', 'nancy@yahoo.com.tw', '宜蘭縣', NULL, '2024-06-04 15:02:41', 1),
(25, '', 'vivian', 0, NULL, '女性', '2019-01-01', '', '12345', '0964321455', 'vivian@gmail.com', '新竹縣', NULL, '2024-06-04 16:38:09', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `images`
--
ALTER TABLE `images`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
