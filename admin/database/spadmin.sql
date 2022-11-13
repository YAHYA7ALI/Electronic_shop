-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 01:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `spadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password-confirmation` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `gender` int(255) NOT NULL,
  `dir` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstName`, `lastName`, `email`, `password`, `password-confirmation`, `img`, `gender`, `dir`) VALUES
(13, 'Yahya', 'Ali', 'yahya@gmail.com', 'bf279a692b17b3db565106f4653f4e62', '', 'IMG-20211103-WA0005.jpg', 1, 1),
(14, 'Yahya', 'Ali', 'yahya@gmail.com', 'c0d29696fc1eea771df60ff95a4772ff', '', '6ea6d91eb7ce9f076b81866912803421', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'sunglasses'),
(2, 'watches'),
(4, 'Dresses'),
(5, 'Men'),
(6, 'Women'),
(7, 'Back Bag'),
(8, 'Kids'),
(9, 'Accesories'),
(10, 'Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `view` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `messages`, `view`) VALUES
(24, 'Yahya Ali', 1023800994, 'yahya@gmail.com', 'MOhamed Ali Alshbliykmmmdsmlox', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `sale` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale`, `description`, `img`, `cat_id`) VALUES
(4, 'Dresses', 600, 10, 'Herschel Supply ca25', 'master-slide-04.jpg', 6),
(6, 'Master', 400, 50, 'This Good Master', 'master-slide-02.jpg', 6),
(7, 'Master', 600, 50, 'Herschel Supply ca25', 'master-slide-07.jpg', 7),
(8, 'Back Bag', 75, 10, 'Herschel Supply ca25', 'item-02.jpg', 7),
(9, 'Jacket', 2950, 10, 'Denim Jacket blue', 'item-03.jpg', 6),
(11, 'Short Jens', 1555, 10, 'Frayed Denim Sharts', 'item-07.jpg', 6),
(12, 'Colock ', 79, 10, 'Coach Slim Easton Black', 'item-08.jpg', 2),
(13, 'Tishrt', 50, 20, 'Herschel Supply ca25', 'item-14.jpg', 5),
(14, 'colock ', 60, 10, 'Coach Slim Easton Black', 'item-05.jpg', 2),
(15, 'White Shirt', 60, 10, 'Herschel Supply ca25', 'item-15.jpg', 6),
(16, 'shoes', 300, 20, 'This Good Shoes', 'item-06.jpg', 10),
(17, 'Tishrt', 50, 10, 'Herschel Supply ca25', 'item-12.jpg', 6),
(18, 'Back Bag', 40, 5, 'Herschel Supply ca25', 'item-01.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `possword-confirm` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `address`, `img`, `password`, `possword-confirm`, `gender`, `user`) VALUES
(3, 'Yahya', 'Ali', 'yahya@gmail.com', 'Egypt', 'IMG-20211103-WA0005.jpg', 'cee631121c2ec9232f3a2f028ad5c89b', '', 1, 0),
(5, 'Amira', 'Ali', 'amira@gmail.com', 'Egypt', 'item-03.jpg', 'e93028bdc1aacdfb3687181f2031765d', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);
COMMIT;
