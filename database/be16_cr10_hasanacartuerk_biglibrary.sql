-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 09:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be16_cr10_hasanacartuerk_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be16_cr10_hasanacartuerk_biglibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `be16_cr10_hasanacartuerk_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `title` varchar(80) NOT NULL,
  `image` varchar(100) NOT NULL,
  `short_description` varchar(100) NOT NULL,
  `type` varchar(40) NOT NULL,
  `author_first_name` varchar(80) NOT NULL,
  `author_last_name` varchar(80) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `publisher_address` varchar(100) NOT NULL,
  `publish_date` date DEFAULT NULL,
  `status` enum('available','reserved') DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `title`, `image`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(42, '3864907799', 'Angular', '62d25b7309e5a.png', 'Grundlagen, fortgeschrittene Themen und Best Practices – inkl. RxJS, NgRx und PWA (iX Edition)', 'Book', 'Ferdinand', 'Malcher', 'dpunkt.verlag GmbH', 'Wieblinger Weg 17, 69123 Heidelberg', '2020-10-15', 'available'),
(43, '1491952024', 'Javascript', '62d25da06b956.png', 'The Definitive Guide: Master the Worlds Most used Programming Language', 'Book', 'David', 'Flanagan', 'O Reilly Media', '1005 Gravenstein Highway North Sebastopol, CA 95472', '2020-06-09', 'reserved'),
(44, '180107187X', 'PHP 8 Programming', '62d25eab52e91.png', 'Tips, Tricks and Best Practices: A practical guide to PHP 8 features, usage changes, and advanced pr', 'Book', 'Doug', 'Bierer', 'Packt Publishing', 'Livery Place, 35 Livery Street, Birmingham', '2021-08-27', 'available'),
(45, '1800566158', 'The Art of Modern PHP 8', '62d25f4ba24e2.png', 'Learn how to write modern, performant, and enterprise-ready code with the latest PHP features and pr', 'Book', 'Joseph', 'Edmonds', 'Packt Publishing', 'Livery Place, 35 Livery Street, Birmingham', '2021-10-26', 'available'),
(46, '1800562527', 'JavaScript from Beginner to Professional', '62d25fd96371b.png', 'Learn JavaScript quickly by building fun, interactive, and dynamic web apps, games, and pages', 'Book', 'Laurence Lars', 'Svekis', 'Packt Publishing', 'Livery Place, 35 Livery Street, Birmingham', '2021-12-15', 'available'),
(47, '1492037656', 'TypeScript Programming', '62d2609fa6ae7.png', 'Making Your JavaScript Applications Scale', 'Book', 'Boris', 'Cherny', 'O Reilly Media', '1005 Gravenstein Highway North Sebastopol, CA 95472', '2019-05-21', 'reserved'),
(48, '1492056359', 'Python', '62d2616d9c5b8.png', 'Fluent Python, Clear, Concise, and Effective Programming', 'Book', 'Luciano', 'Ramalho', 'O Reilly Media', '1005 Gravenstein Highway North Sebastopol, CA 95472', '2022-05-10', 'available'),
(49, '0137673620', 'Core Java', '62d262521cd25.png', 'Fundamentals Oracle Press Java, 1, Band 1', 'Book', 'Cay S.', 'Horstmann', 'Addison Wesley', '501 Boylston St Ste 900 Boston, MA', '2021-12-21', 'available'),
(50, '26323995', 'Der Staatsanwalt', '62d263e69c01a.png', 'Es ist später Abend, als die wohlhabende Kunstsammlerin Anna Köstner ihre Villa betritt. Sofort fäll', 'DVD', 'Michael', 'Kreindl', 'Studio Hamburg', 'Jenfelder Allee 80, Hamburg', '2016-08-19', 'available'),
(51, '2918390372', 'Symfony 5', '62d2651c3c860.png', 'Is it possible to quickly build a modern web application and love the process', 'Book', 'Fabien', 'Potencier', 'SENSIO SA', '1751 Richardson Street Suite, 4206 Montreal', '2019-11-08', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
