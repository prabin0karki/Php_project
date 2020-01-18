-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2017 at 03:42 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_number` decimal(10,0) NOT NULL,
  `gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `address`, `email`, `username`, `password`, `phone_number`, `gender`) VALUES
(1, 'prabin karki', 'kathmandu', 'pkkarki18@gmail.com', 'prabin', '0192023a7bbd73250516f069df18b500', '9861487381', 'male'),
(5, 'kabi karki', '', 'kabi@gmail.com', 'kabi', '0192023a7bbd73250516f069df18b500', '9803382754', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisement`
--

CREATE TABLE `tbl_advertisement` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  `feature_image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `short_description` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `slider_key` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_advertisement`
--

INSERT INTO `tbl_advertisement` (`id`, `status`, `created_date`, `created_by`, `modified_by`, `modified_date`, `feature_image`, `content`, `short_description`, `title`, `slider_key`) VALUES
(1, 1, '2017-09-09 13:21:41', 'kabi', '', '0000-00-00 00:00:00', '-1684699485.jpg', 'rxtcyuvibhojpdsaz5xrctyvubinzexrctvybunimozexrctvybunimobunixctvyb', 'as the situation of nepal honda car is suitable for nepal', 'Honda is the best car for nepal', 1),
(2, 1, '2017-09-09 14:55:20', 'kabi', '', '0000-00-00 00:00:00', 'FB_IMG_14568018480858597.jpg', 'the most beautiful house of the bkt is in sell', '2 storage house is in sell', 'hose is in sel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `rank` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `rank`, `status`, `created_by`, `modified_by`, `created_date`, `modified_date`) VALUES
(19, 'sports', 1, '1', 'kabi', '', '2017-09-09', '0000-00-00'),
(21, 'politice', 2, '1', 'kabi', '', '2017-09-09', '0000-00-00'),
(22, 'Movies', 3, '1', 'kabi', '', '2017-09-09', '0000-00-00'),
(23, 'Education', 4, '1', 'kabi', '', '2017-09-09', '0000-00-00'),
(24, 'Election', 5, '0', 'kabi', '', '2017-09-09', '0000-00-00'),
(25, 'Games', 6, '1', 'kabi', '', '2017-09-09', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `like` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `news_id`, `name`, `email`, `comment`, `comment_date`, `like`, `dislike`, `status`) VALUES
(25, 10, 'thapa', 'thapaanil@hotmail.com', 'hi baby\r\n', '2017-09-08 18:01:08', 0, 0, 0),
(26, 10, 'diwash', 'diwash@gmail.com', 'k xa bhai', '2017-09-08 18:03:07', 0, 0, 0),
(27, 17, 'prabin', 'pkkarki18@gmail.com', 'this is the pic of class 11\r\n', '2017-09-09 14:58:18', 0, 0, 0),
(28, 13, 'hari ', 'hari@gmail.com', 'yao football ho', '2017-09-10 04:07:47', 0, 0, 0),
(29, 13, 'ghana', 'ghana@hotmail.com', 'kun player ho yao', '2017-09-10 04:08:23', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `message_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `message`, `message_date`) VALUES
(3, 'prabin', 'pkkarki18@gmail.com', 'yao pages ramro xa', '2017-09-09 06:48:16'),
(4, 'krishna', 'krishna@gmail.com', 'ho shai ho', '2017-09-09 06:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `short_description` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `slider_key` tinyint(1) NOT NULL,
  `feature_image` varchar(254) NOT NULL,
  `view_count` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `breaking_key` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `category_id`, `title`, `short_description`, `content`, `status`, `slider_key`, `feature_image`, `view_count`, `created_by`, `modified_by`, `created_date`, `modified_date`, `breaking_key`) VALUES
(13, 19, 'Todays football game', 'the most waited game of the seasion FCB vs Real', '<p>Ral play well but Fcb played good as a result Fcb win by 3 goals</p>\r\n', 1, 1, 'besty.png', 5, 'kabi', '', '2017-09-09', '0000-00-00', 1),
(14, 19, 'Nepali football game', 'today is napal vs india', '<p>both team played good but india loose by 3 goals</p>\r\n', 1, 1, 'dimaria.png', 1, 'kabi', '', '2017-09-09', '0000-00-00', 1),
(15, 21, 'About our PM', 'our pm die', '<p>our pm die today because of coc</p>\r\n', 1, 1, 'download.jpg', 0, 'kabi', '', '2017-09-09', '0000-00-00', 1),
(16, 22, 'Chaka panja 2', 'chaka manja 2 is going to release', '<p>bcjkbdskjcbchjdsbcjksdbsfuibdkjcbdwjbfwbjbwije2bi</p>\r\n', 1, 1, 'IMG_8454.PNG', 0, 'kabi', '', '2017-09-09', '0000-00-00', 1),
(17, 23, 'BSC.Csit', 'Bsccsit result have been published', '<p>all student of the bsccit 2071 batch have passed there fourth semester</p>\r\n', 1, 1, 'FB_IMG_14568016004774997.jpg', 2, 'kabi', '', '2017-09-09', '0000-00-00', 1),
(18, 25, 'COC', 'Clash of the clan is the most used game', '<p>now it is the top 1 android game</p>\r\n', 1, 1, '20161120194330.jpg', 0, 'kabi', '', '2017-09-09', '0000-00-00', 1),
(19, 22, 'Best movie', 'Best Movie of the year goes to loot 2', '<p>loot 2 is the best movie of the year acording to the people choice</p>\r\n', 1, 1, 'FB_IMG_14568015583068183.jpg', 0, 'kabi', '', '2017-09-09', '0000-00-00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_advertisement`
--
ALTER TABLE `tbl_advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_2` (`category_name`),
  ADD KEY `category_name` (`category_name`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_advertisement`
--
ALTER TABLE `tbl_advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
