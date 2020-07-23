-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 7 月 23 日 15:01
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d06_tamago`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tamago_table`
--

CREATE TABLE `tamago_table` (
  `id` int(12) NOT NULL,
  `etsuko_word` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `tamago_table`
--

INSERT INTO `tamago_table` (`id`, `etsuko_word`) VALUES
(1, 'んっ…'),
(2, 'そこ'),
(3, 'もっと'),
(4, 'まって'),
(5, 'とめないで'),
(6, 'そこ'),
(7, 'もっと'),
(8, 'んっ…'),
(9, 'だめ'),
(10, 'だめ'),
(11, 'だめ'),
(12, 'こわれちゃう');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `tamago_table`
--
ALTER TABLE `tamago_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `tamago_table`
--
ALTER TABLE `tamago_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
