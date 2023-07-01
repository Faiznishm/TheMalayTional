-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2023 at 04:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_dir`
--

CREATE TABLE `admin_dir` (
  `a_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_dir`
--

INSERT INTO `admin_dir` (`a_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `commentbar`
--

CREATE TABLE `commentbar` (
  `id` bigint(255) NOT NULL,
  `user_id` int(222) NOT NULL,
  `text` text NOT NULL,
  `date_time` varchar(222) NOT NULL,
  `recipy_id` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentbar`
--

INSERT INTO `commentbar` (`id`, `user_id`, `text`, `date_time`, `recipy_id`) VALUES
(49, 25, ' Good recipe for family!', ' 02:25AM 1-Jul-2023 ', 64),
(50, 28, ' One of the best recipe here :)', ' 02:26AM 1-Jul-2023 ', 64);

-- --------------------------------------------------------

--
-- Table structure for table `full_recipy`
--

CREATE TABLE `full_recipy` (
  `id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `title_text` text NOT NULL,
  `image` varchar(222) NOT NULL,
  `ing_text` text NOT NULL,
  `disc` text NOT NULL,
  `rid` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `full_recipy`
--

INSERT INTO `full_recipy` (`id`, `title`, `title_text`, `image`, `ing_text`, `disc`, `rid`) VALUES
(17, 'Nasi Kerabu', 'Nasi Kerabu is a very popular dish in Kelantan and Terengganu, due to its popularity, it can now be found throughout all of Malaysia. Its rice has a unique blue colour which gives a subtle fragrance and is topped with various fresh vegetables. It is a healthy, attractive and delicious dish. ', '649f3233615aa.jpg', '½ kg fresh coconut milk<br>7 shallots½ garlic clove<br>3 large onions<br>15 dry chili stalks<br>1 inch ginger<br>1 stick of lemongrass<br>1 piece of sour cream<br>2 tablespoons of sugar<br>A little Gula Melaka<br>2 tablespoons budu<br>Salt', 'Testing', 'K12');

-- --------------------------------------------------------

--
-- Table structure for table `post_rating`
--

CREATE TABLE `post_rating` (
  `rating_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_number` int(11) NOT NULL,
  `total_points` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_rating`
--

INSERT INTO `post_rating` (`rating_id`, `post_id`, `rating_number`, `total_points`, `created`, `modified`, `status`) VALUES
(12, 1, 7, 32, '2017-11-07 16:32:12', '2023-07-01 16:27:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `rid` int(222) NOT NULL,
  `rimage` varchar(222) NOT NULL,
  `resname` varchar(222) NOT NULL,
  `rtext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`rid`, `rimage`, `resname`, `rtext`) VALUES
(63, '649f33b36219e.png', 'Johor Food', 'State of Johor is famous as a state that has many interesting places and also delicious food'),
(64, '649f344facd96.png', 'Kelantan Food', 'Kelantan is a famous state with nasi kerabu, budu, akok and also nasi dagang');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(244) NOT NULL,
  `lastname` varchar(244) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_id`, `firstname`, `lastname`, `email`, `password`) VALUES
(25, 'Isham', 'Fareez', 'isham@gmail.com', '1234'),
(27, 'Muhd', 'Hariz', 'hariz99@gmail.com', '1234'),
(28, 'Muhd', 'Faiz', 'faizmk@gmail.com', '1234'),
(31, 'Michael', 'Jordan', 'mjordan@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_dir`
--
ALTER TABLE `admin_dir`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `commentbar`
--
ALTER TABLE `commentbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `full_recipy`
--
ALTER TABLE `full_recipy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_rating`
--
ALTER TABLE `post_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_dir`
--
ALTER TABLE `admin_dir`
  MODIFY `a_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commentbar`
--
ALTER TABLE `commentbar`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `full_recipy`
--
ALTER TABLE `full_recipy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `post_rating`
--
ALTER TABLE `post_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `rid` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
