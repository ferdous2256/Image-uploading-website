-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 04:56 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `pref`
--

CREATE TABLE `pref` (
  `id` bigint(20) NOT NULL,
  `Nature` varchar(10) NOT NULL,
  `Car` varchar(10) NOT NULL,
  `Person` varchar(10) NOT NULL,
  `Tech` varchar(10) NOT NULL,
  `Animal` varchar(10) NOT NULL,
  `Movies` varchar(10) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pref`
--

INSERT INTO `pref` (`id`, `Nature`, `Car`, `Person`, `Tech`, `Animal`, `Movies`, `user_id`) VALUES
(1, 'Nature', 'car', 'Person', 'Tech', 'Animal', 'movie', 5),
(2, 'Nature', 'car', 'Person', 'Tech', 'Animal', '', 6),
(3, 'Nature', 'car', 'Person', 'Tech', 'Animal', 'movie', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photos`
--

CREATE TABLE `tbl_photos` (
  `img_id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `img_type` varchar(255) NOT NULL,
  `img_title` varchar(255) NOT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_photos`
--

INSERT INTO `tbl_photos` (`img_id`, `user_id`, `img_name`, `img_path`, `img_type`, `img_title`, `Type`) VALUES
(32, 3, 'pjimage-14-1589363766.jpg', 'img/pjimage-14-1589363766.jpg', 'Animal', 'tiger', 'Animal'),
(33, 3, 'download4.jpg', 'img/download4.jpg', 'Car', 'benz', 'Car'),
(34, 3, 'dwayne-the-rock-.jpg', 'img/dwayne-the-rock-.jpg', 'Person', 'rock', 'Person'),
(35, 3, '30212411048_2a1d7200e2_z-1.jpg', 'img/30212411048_2a1d7200e2_z-1.jpg', 'Tech', 'robot', 'Tech'),
(36, 3, '132670.jpg', 'img/132670.jpg', 'Movies', 'far from home', 'Movies'),
(37, 2, 'download1.jpg', 'img/download1.jpg', 'Nature', 'reg', 'Nature'),
(38, 2, 'Depositphotos_336730000_l-2015.jpg', 'img/Depositphotos_336730000_l-2015.jpg', 'Person', 'person', 'Person'),
(39, 2, 'movieposter_en.jpg', 'img/movieposter_en.jpg', 'Movies', 'free guy', 'Movies'),
(40, 2, 'mach-e.jpg', 'img/mach-e.jpg', 'Car', 'mach', 'Car'),
(41, 4, 'download.jpg', 'img/download.jpg', 'Nature', 'nature', 'Nature'),
(42, 4, 'the-matrix-resurrections-poster_1637173124.jpg', 'img/the-matrix-resurrections-poster_1637173124.jpg', 'Movies', 'matix', 'Movies'),
(43, 3, 'download.jpg', 'img/download.jpg', 'Nature', 'lake', 'Nature');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Number` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Number`, `Email`, `Password`) VALUES
(1, 'ferdous', 1953020190, 'mdferdous000@gmail.com', 'ferdouskhan'),
(2, 'Md Ferdous', 1953020190, 'mdferdousss@gmail.com', '111111'),
(3, 'Md Ferdous', 1953020190, 'm@gmail.com', '121212'),
(4, 'Md Ferdous', 1953020190, 'f@gmail.com', '123456'),
(6, 'Pranto', 19632658, 'p@gmail.com', '112233'),
(7, 'md ferdous', 1953201090, 'ferdous@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pref`
--
ALTER TABLE `pref`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pref`
--
ALTER TABLE `pref`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
