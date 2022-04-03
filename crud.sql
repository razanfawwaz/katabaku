-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 06:13 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `antonim`
--

CREATE TABLE `antonim` (
  `id_antonim` int(11) NOT NULL,
  `antonim` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antonim`
--

INSERT INTO `antonim` (`id_antonim`, `antonim`) VALUES
(19, 'tes'),
(20, 'anti radiasi'),
(21, 'ahiya');

-- --------------------------------------------------------

--
-- Table structure for table `baku`
--

CREATE TABLE `baku` (
  `id_baku` int(11) NOT NULL,
  `baku` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baku`
--

INSERT INTO `baku` (`id_baku`, `baku`) VALUES
(19, 'tes'),
(20, 'anti');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:editor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `name`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 1),
(2, 'editor', 'ab41949825606da179db7c89ddcedcc167b64847', 'editor', 2),
(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 1),
(4, 'editor', 'ab41949825606da179db7c89ddcedcc167b64847', 'editor', 2),
(5, 'razan', 'e63175514d3c00154b26fbd9e007896080e3cd94', 'razan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sinonim`
--

CREATE TABLE `sinonim` (
  `id_sinonim` int(11) NOT NULL,
  `sinonim` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinonim`
--

INSERT INTO `sinonim` (`id_sinonim`, `sinonim`) VALUES
(19, 'tes'),
(23, 'aaa'),
(24, 'aa'),
(25, 'wow'),
(26, 'wow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antonim`
--
ALTER TABLE `antonim`
  ADD PRIMARY KEY (`id_antonim`);

--
-- Indexes for table `baku`
--
ALTER TABLE `baku`
  ADD PRIMARY KEY (`id_baku`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sinonim`
--
ALTER TABLE `sinonim`
  ADD PRIMARY KEY (`id_sinonim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antonim`
--
ALTER TABLE `antonim`
  MODIFY `id_antonim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `baku`
--
ALTER TABLE `baku`
  MODIFY `id_baku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sinonim`
--
ALTER TABLE `sinonim`
  MODIFY `id_sinonim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
