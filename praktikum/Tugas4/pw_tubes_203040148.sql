-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 08:57 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040148`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(40) NOT NULL,
  `Judul` varchar(40) NOT NULL,
  `Pengarang` varchar(40) NOT NULL,
  `Terbit` varchar(40) NOT NULL,
  `Dimensi` varchar(40) NOT NULL,
  `ISBN` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `Gambar`, `Judul`, `Pengarang`, `Terbit`, `Dimensi`, `ISBN`) VALUES
(1, '1.png', 'SELENA', 'Tere Liye', '2020', '368 halaman', '9786020639512'),
(2, '2.png', 'Misteri Terakhir #1', 'S. Mara Gd', '6 Apr 2020', '448 Halaman', '9786020637112'),
(3, '3.png', 'Nebula', 'Tere Liye', '2020', '376 halaman', '9786020639536'),
(4, '4.png', 'After the Funeral', 'Agatha Christie', '27 Desember 2017', '336 halaman', '9789792234343'),
(5, '5.png', 'Ganjil Genap', 'Almira Bastari', 'Februari 2020', '344 halaman', '-'),
(6, '6.png', 'Tokyo & Perayaan', 'Ruth Pricilia Angelinae', '2020', '208 halaman', '9786020640853'),
(7, '7.png', 'Segi Tiga', 'Sapardi Djoko Damono', 'Maret 2020', '328 halaman', '9786020639246'),
(8, '8.png', 'Ibuk', 'Iwan Setyawan', '2017', '289 halaman', '9786020329987'),
(9, '9.png', 'Laut Bercerita', 'Leila S. Chudori', 'Desember 2017', '379 halaman', '-'),
(10, '10.png', 'Defending Jacob', 'William Landay', 'Desember 2017', '484 halaman', '9786020451558');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
