-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2016 at 11:10 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riset_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(4, 'test', 'test lagi', '2016-10-27 03:16:36', '2016-10-27 03:16:36'),
(5, 'coba', 'boca', '2016-10-27 03:22:48', '2016-10-27 03:22:48'),
(6, 'coba', 'boca', '2016-10-27 03:23:05', '2016-10-27 03:23:05'),
(7, 'Halo ', 'coders', '2016-10-27 04:52:38', '2016-10-27 04:52:38'),
(8, 'hai ', 'Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.', '2016-10-29 21:05:16', '2016-10-29 21:05:16'),
(9, 'hello', 'asdsd', '2016-11-01 08:33:10', '2016-11-01 08:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_09_27_185824_create_table_blog', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tumbnail`
--

CREATE TABLE `tumbnail` (
  `idImg` int(11) NOT NULL,
  `path` varchar(30) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tumbnail`
--

INSERT INTO `tumbnail` (`idImg`, `path`, `id`) VALUES
(1, 'test.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role` varchar(15) DEFAULT NULL,
  `image` varchar(60) DEFAULT 'image.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `image`) VALUES
(3, 'faisal', NULL, 'faisaal.ishak921@outlook.com', '$2y$10$zlcoOfn9zN10S3gr8tJKmebuETAK7GqLMGhff9qqxoYlbt8Lh/QOK', 'P0UtePsbQsjuGdjnunioJjlemKqG7o5DJ7rCChM5wQBVK3yhaUxd0dR3bSpU', '2016-12-09 05:48:48', '2016-12-08 22:48:48', 'koki', 'image.png'),
(4, 'Ronaldo', NULL, 'ronaldo@unikom.ac.id', '$2y$10$gOrXdqznkZJzr6FX3iQ2Fu7yBJZadStFDuhbAvC1E7Te4FE1EEsT6', 'q4BcTJ80wHoZYBbwwnwT0GqRkQHeLuwuu2UbjtWGtKhf3WV0LT0vZ1i2scP2', '2016-12-05 07:07:04', '2016-12-05 00:07:04', 'pantry', 'image.png'),
(5, 'faisalis', NULL, 'faisalishak@outlook.com', '$2y$10$KIRqje9ldaBXT1o8mRbMxOVGLGBBh.vYV4VT3KrJkt0fAcwLe4OIO', NULL, '2016-12-04 10:44:34', '2016-12-04 10:44:34', NULL, 'image.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tumbnail`
--
ALTER TABLE `tumbnail`
  ADD PRIMARY KEY (`idImg`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tumbnail`
--
ALTER TABLE `tumbnail`
  MODIFY `idImg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tumbnail`
--
ALTER TABLE `tumbnail`
  ADD CONSTRAINT `tumbnail_ibfk_1` FOREIGN KEY (`id`) REFERENCES `blog_post` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
