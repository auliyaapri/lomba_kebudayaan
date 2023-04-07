-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 05:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload_content`
--

CREATE TABLE `upload_content` (
  `id_konten` int(11) NOT NULL,
  `judul_konten` varchar(255) NOT NULL,
  `daerah` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kategori2` varchar(50) NOT NULL,
  `isi_konten` text NOT NULL,
  `gambar` text NOT NULL,
  `tgl_konten` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_content`
--

INSERT INTO `upload_content` (`id_konten`, `judul_konten`, `daerah`, `kategori`, `kategori2`, `isi_konten`, `gambar`, `tgl_konten`) VALUES
(1, 'Tari gambyong', 'jawa tengah', 'Tarian', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci possimus pariatur perspiciatis, similique nam officiis alias ex odit voluptatem repudiandae consequatur, et laboriosam modi laborum dolorum eos excepturi! Veniam, pariatur.', 'tari gambyong.jpg', '2023-04-12 00:00:00'),
(2, 'Makanan Kerak Telor', 'jakarta', 'Makanan', 'slider home', 'Kerak telur adalah makanan asli daerah Jakarta, dengan bahan-bahan beras ketan putih, telur ayam atau bebek, ebi yang disangrai kering ditambah bawang merah goreng, lalu diberi bumbu yang dihaluskan berupa kelapa sangrai, cabai merah, kencur, jahe, merica butiran, garam dan gula pasir.', 'kerak telor.jpg', '2023-04-06 00:00:00'),
(4, 'Anime Mantab', 'jawa tengah', 'Makanan', 'slider home', 'jhsaoidoiahdoiahoahd', 'kerak telor2.jpg', '2023-04-06 20:36:57'),
(19, 'Your name', 'jawa tengah', 'makanan', '', 'dsdsdsds', 'kimi_no_nawa.jpg', '2023-04-07 08:22:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload_content`
--
ALTER TABLE `upload_content`
  ADD PRIMARY KEY (`id_konten`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload_content`
--
ALTER TABLE `upload_content`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
