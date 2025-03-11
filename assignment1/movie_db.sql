-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2025 at 10:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `rating` decimal(3,1) DEFAULT NULL,
  `poster_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `genre`, `release_date`, `rating`, `poster_url`) VALUES
(1, 'The Shawshank Redemption', 'Drama', '1994-09-23', '9.3', 'The_Shawshank_Redemption.jpg'),
(2, 'The Godfather', 'Crime', '1972-03-24', '9.2', 'The_Godfather.jpg'),
(3, 'The Dark Knight', 'Action', '2008-07-18', '9.0', 'The_Dark_Knight.jpg'),
(4, 'Pulp Fiction', 'Crime', '1994-10-14', '8.9', 'Pulp_Fiction.jpg'),
(5, 'Schindler\'s List', 'Biography', '1993-12-15', '8.9', 'Schindlers_List.jpg'),
(6, 'The Lord of the Rings: The Return of the King', 'Fantasy', '2003-12-17', '8.9', 'TLOTR_The_Return_of_the_King.jpg'),
(7, 'Forrest Gump', 'Drama', '1994-07-06', '8.8', 'Forrest_Gump.jpg'),
(8, 'Inception', 'Sci-Fi', '2010-07-16', '8.8', 'Inception.jpg'),
(9, 'Fight Club', 'Drama', '1999-10-15', '8.8', 'Fight_Club.jpg'),
(10, 'The Matrix', 'Sci-Fi', '1999-03-31', '8.7', 'The_Matrix.jpg'),
(11, 'Goodfellas', 'Crime', '1990-09-19', '8.7', 'Goodfellas.jpg'),
(12, 'The Empire Strikes Back', 'Sci-Fi', '1980-05-21', '8.7', 'The_Empire_Strikes_Back.jpg'),
(13, 'The Lord of the Rings: The Fellowship of the Ring', 'Fantasy', '2001-12-19', '8.8', 'TLOTR_The_Fellowship_of_the_Ring.jpg'),
(14, 'Interstellar', 'Sci-Fi', '2014-11-07', '8.6', 'Interstellar.jpg'),
(15, 'The Silence of the Lambs', 'Thriller', '1991-02-14', '8.6', 'The_Silence_of_the_Lambs.jpg'),
(16, 'Saving Private Ryan', 'War', '1998-07-24', '8.6', 'Saving_Private_Ryan.jpg'),
(17, 'The Green Mile', 'Drama', '1999-12-10', '8.6', 'The_Green_Mile.jpg'),
(18, 'Se7en', 'Thriller', '1995-09-22', '8.6', 'Se7en.jpg'),
(19, 'Gladiator', 'Action', '2000-05-05', '8.5', 'Gladiator.jpg'),
(20, 'The Prestige', 'Drama', '2006-10-20', '8.5', 'The_Prestige.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
