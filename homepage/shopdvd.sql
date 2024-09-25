-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 04:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopdvd`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `aid` int(3) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `alastname` varchar(50) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`aid`, `aname`, `alastname`, `age`, `gender`) VALUES
(0, 'gdf', 'fh', 15, 'Male'),
(1, 'fhnf', 'dfhg', 33, 'Female'),
(2, 'ghjhg', 'jgh', 44, 'Female'),
(3, 'หกดเ', 'เกดเ', 51, 'Male'),
(4, 'fhgf', 'fhg', 23, 'Female'),
(12, 'เก', 'เกด', 0, 'Male'),
(35, '', '', 0, 'Male'),
(99, '', '', 0, 'Male'),
(165, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `dvd_movies`
--

CREATE TABLE `dvd_movies` (
  `movie_id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `release_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvd_movies`
--

INSERT INTO `dvd_movies` (`movie_id`, `title`, `genre`, `price`, `release_date`) VALUES
(1, 'แม่นาค1', 'ดราม่า', 453.50, '2024-09-13'),
(2, 'แม่นาค2', 'ดราม่า', 145.50, '2024-05-24'),
(3, 'เกด', 'เกด', 465.84, '2024-06-06'),
(4, '้ดเ', 'กดเ', 987.65, '2021-03-19'),
(5, 'ด้ดเ', 'ด้เ', 253.20, '2019-02-07'),
(707, 'hdf', 'ดราม่า', 90.00, '2024-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` int(3) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mlastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `mname`, `mlastname`, `address`, `telephone`) VALUES
(0, '', '', '', 0),
(1, 'fs', 'fsd', 'fsd', 0),
(110, 'uraiwan', 'inyaem', 'pathumthani', 898944631),
(111, 'nanfa', 'sontornjerawat', 'bangkok', 928192297),
(112, 'supavinee', 'vijittamee', 'nonthaburi', 802376045),
(113, 'picharn', 'lakben', 'nonthaburi', 971346205),
(114, 'ug', 'kongthong', 'pathumthani', 810126012);

-- --------------------------------------------------------

--
-- Table structure for table `member_movie`
--

CREATE TABLE `member_movie` (
  `buy_id` int(3) NOT NULL,
  `quantity` int(3) DEFAULT NULL,
  `member_id` int(3) NOT NULL,
  `movie_id` int(3) NOT NULL,
  `buy_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movie_actor`
--

CREATE TABLE `movie_actor` (
  `movie_id` int(3) NOT NULL,
  `aid` int(3) NOT NULL,
  `am_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `dvd_movies`
--
ALTER TABLE `dvd_movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `member_movie`
--
ALTER TABLE `member_movie`
  ADD PRIMARY KEY (`buy_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movie_actor`
--
ALTER TABLE `movie_actor`
  ADD PRIMARY KEY (`am_id`),
  ADD KEY `member_id` (`movie_id`),
  ADD KEY `actor_id` (`aid`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dvd_movies`
--
ALTER TABLE `dvd_movies`
  MODIFY `movie_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=714;

--
-- AUTO_INCREMENT for table `member_movie`
--
ALTER TABLE `member_movie`
  MODIFY `buy_id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
