-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 05:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `jenis_buku` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `img` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `create_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `jenis_buku`, `penulis`, `penerbit`, `img`, `description`, `tahun_terbit`, `create_upload`) VALUES
(1, 'Si penggembala', 'Cerita Rakyat', 'Diki Setiawan', 'PT. Dikset Digital Technology', '../../assets/img/dumy.jpg', 'Si penggembala yang sangat periang dan memiliki hati yang baik dan tulus dalam membantu orang yang sedang dalam kesulitan.', '2023', '2023-10-09'),
(2, 'Anak Domba yg tersesat', 'Motivation', 'Diki Setiawan', 'PT. Dikset Digital Technology', '../../assets/img/dumy.jpg', 'Ini My Habbit dalam aktifitas sehari-hari, memanage waktu sebaik mungkin dan efektif.', '2023', '2023-10-04'),
(3, 'Si kancil', 'Cerita Rakyat', 'Fahmi sovi s.b', 'PT. Dikset Digital Technology', '../../assets/img/dumy.jpg', 'Kecil-kecil seperti sikancil, sebut orang dahulu kepada anak yang berbadan kecil dan pendek namun sangat pandai dan lincah.', '2023', '2023-10-09'),
(4, 'Pintar Membaca Al-quran', 'Islami', 'Diki Setiawan', 'PT. Dikset Digital Technology', '../../assets/img/dumy.jpg', 'Buku ini sangat cocok untuk anak-anak yang masih awam dalam belajar al-quran. mudah dipahami dan praktis.', '2023', '2023-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `harga` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
