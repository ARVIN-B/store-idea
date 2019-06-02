-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 07:43 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devil`
--

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE `idea` (
  `owner` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `pic` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `idea`
--

INSERT INTO `idea` (`owner`, `pic`, `name`, `description`) VALUES
('ARVIN', 'img/IMG_20160228_011219.jpg', 'devil', 'Ø§ÛŒØ¯Ù‡ Ø´Ù…Ø§Ø±Ù‡ 1'),
('ARVIN', 'img/IMG_20160126_232449.jpg', 'bb', 'bbbbbb'),
('aryan', 'img/images (1).jpg', 'name', ' cccccc'),
('reza', 'img/IMG_20160310_131024.jpg', 'ddd', 'ddddddd'),
('arvin', 'img/IMG_20160127_003847.jpg', 'hhhh', 'aaaaaaaaaaaaaa'),
('aryan', 'img/812235180_371153.jpg', 'ggg', '4444444');

-- --------------------------------------------------------

--
-- Table structure for table `ver`
--

CREATE TABLE `ver` (
  `name` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `username` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `birthyear` int(2) NOT NULL,
  `birthmonth` int(2) NOT NULL,
  `birthday` int(4) NOT NULL,
  `sex` varchar(6) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tell` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `ver`
--

INSERT INTO `ver` (`name`, `email`, `username`, `password`, `birthyear`, `birthmonth`, `birthday`, `sex`, `tell`, `image`) VALUES
('aryan', 'a@gmail.com', 'aryan', '123', 1379, 6, 1, 'male', '09136973173', '../img/UserPic/1.jpg'),
('ARVIN', 'arvin.k.beheshti@gmail.com', 'ARVIN', '123', 1377, 5, 9, 'male', '09136304789', '../img/UserPic/images (1).jpg'),
('reza', 'r@gmail.com', 'reza', '123', 1377, 3, 11, 'male', '1111', '../img/UserPic/images.jpg');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
