-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-12-22 04:28:06
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `php_1222_f14`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `matching_table`
--

CREATE TABLE `matching_table` (
  `id` int(11) NOT NULL,
  `nickname` varchar(128) NOT NULL,
  `birthday` date NOT NULL,
  `live` varchar(128) NOT NULL,
  `froms` varchar(128) NOT NULL,
  `education` varchar(128) NOT NULL,
  `occupation` varchar(128) NOT NULL,
  `height` int(11) NOT NULL,
  `bodyShape` varchar(128) NOT NULL,
  `smoking` varchar(128) NOT NULL,
  `marital_status` varchar(128) NOT NULL,
  `children` varchar(128) NOT NULL,
  `matching_expectations` varchar(128) NOT NULL,
  `marriage_intention` varchar(128) NOT NULL,
  `interesting` varchar(128) NOT NULL,
  `picture` mediumblob NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `matching_table`
--

INSERT INTO `matching_table` (`id`, `nickname`, `birthday`, `live`, `froms`, `education`, `occupation`, `height`, `bodyShape`, `smoking`, `marital_status`, `children`, `matching_expectations`, `marriage_intention`, `interesting`, `picture`, `created_at`, `updated_at`) VALUES
(5, 'テスト', '2023-12-28', 'あ', '福岡', 'junior_college', '営業', 136, 'muscular', 'quit_if_disliked', 'single', 'none', '連絡を重ねてから', 'maybe', 'ゴルフ', 0x433a5c78616d70705c746d705c706870433444372e746d70, '2023-12-22 07:53:37', '2023-12-22 07:53:37'),
(6, 'テスト', '2023-12-22', '福岡', '福岡', 'graduate_school', '営業', 130, 'muscular', 'quit_if_disliked', 'single', 'yes', '連絡を重ねてから', 'maybe', 'ゴルフ', 0x696d672f6c6f676f2d77686974652e706e67, '2023-12-22 11:50:58', '2023-12-22 11:50:58'),
(7, 'テスト', '2023-12-06', '福岡', '福岡', 'graduate_school', '営業', 130, 'glamour', 'quit_if_disliked', 'widowed', 'none', '連絡を重ねてから', 'interested', 'ゴルフ', 0x696d672f6c6f676f2d77686974652e706e67, '2023-12-22 12:05:28', '2023-12-22 12:05:28'),
(8, 'テスト', '2023-12-29', '福岡', '福岡', 'university', '営業', 130, 'average', 'no_in_front_of_non_smoker', 'single', 'yes', '連絡を重ねてから', 'maybe', 'ゴルフ', 0x696d672f6c6f676f2d626c61636b2e706e67, '2023-12-22 12:07:04', '2023-12-22 12:07:04');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `matching_table`
--
ALTER TABLE `matching_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `matching_table`
--
ALTER TABLE `matching_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
