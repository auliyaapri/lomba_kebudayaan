-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 04:05 PM
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
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'user', 'user', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `upload_content`
--

CREATE TABLE `upload_content` (
  `id_konten` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
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

INSERT INTO `upload_content` (`id_konten`, `id_user`, `judul_konten`, `daerah`, `kategori`, `kategori2`, `isi_konten`, `gambar`, `tgl_konten`) VALUES
(1, 1, 'Kerak Telor', 'jakarta', 'makanan', 'slider_home', 'Kerak telor, Betawi\r\nPerbesar\r\nKerak telor, Betawi. (Liputan6.com/Wikimedia Commons/Warta Kota)\r\nLiputan6.com, Jakarta - Kerak telor adalah makanan khas Betawi. Cara membuat kerak telor bisa dilakukan dalam waktu singkat dan gampang banget. Siapkah bahan-bahan utama cara membuat kerak telornya.\r\n\r\nEnam+00:59VIDEO: Viral Emak-Emak Ngamuk Tak Terima Antrian BBM Diserobot Sesama Emak-Emak\r\nBahan cara membuat kerak telor adalah yang paling utama telur, nasi, kelapa sangrai, beras ketan, cabai bubuk atau bubuk cabai, garam, dan gula pasir. Cara membuat kerak telor bisa dengan telur ayam atau telur bebek, sesuaikan dengan selera.\r\n\r\nCara membuat kerak telor, kocok telur beserta bumbunya. Tumis bumbu halus, goreng dengan wajan maupun teflon. Pastikan saat menggoreng telur beserta bumbu, sampai bawahnya agak gosong dan berkerak.', 'kerak_telor1.jpg', '2023-04-12 10:30:12'),
(2, 0, 'Ketoprak', 'jakarta', 'makanan', 'slider_home', 'Ketoprak adalah salah satu jenis makanan khas Indonesia yang menggunakan ketupat yang mudah dijumpai. Biasanya, ketoprak dijajakan menggunakan kereta dorong di jalan-jalan atau kaki lima. Makanan khas ini banyak ditemui di kota Jakarta', 'ketoprak.jpg', '2023-04-12 11:49:49'),
(3, 0, 'Soto Betawi', 'jakarta', 'makanan', '', 'Soto Betawi merupakan soto yang khas dari daerah DKI Jakarta. Seperti halnya Soto Madura dan Soto Sulung, soto Betawi juga menggunakan jeroan. Selain jeroan, sering kali organ-organ lain juga disertakan, seperti mata, terpedo, dan juga hati. Daging sapi juga menjadi bahan campuran dalam soto Betawi', 'soto1.jpg', '2023-04-12 11:50:52'),
(4, 0, 'Tari Lenggang Nyai', 'jakarta', 'tarian', 'slider_home', 'Tari Lenggang Nyai merupakan tarian kreasi baru yang diambil dari cerita rakyat Betawi. Nama ‘Lenggang Nyai’ berasal dari kata “lenggang” yang mempunyai arti “melenggak – lenggok” dan kata “Nyai” yang di ambil dari kisah hidup Nyai Dasimah. Tarian ini kerap disebut dengan Tari Betawi yang diciptakan tahun 1998 oleh seorang seniman asal Yogyakarta bernama Wiwik Widiastuti. Tarian Lenggang Nyai tercipta dari proses perpaduan kebudayaan,  seperti budaya Tionghoa, dan sebagainya. Ciri khas penggunaan suara musik pengiringnya riang, serta gerakan tari yang lemah gemulai.', 'tari-lenggang-nyai.jpg', '2023-04-12 11:52:56'),
(5, 0, 'Tari Sirih Kuning', 'jakarta', 'tarian', '', 'Tari Sirih Kuning adalah tarian asal Betawi. Biasanya ditampilkan bersama alunan musik gambang kromong. Salah satu tujuan tari sirih kuning adalah mengiringi prosesi pernikahan adat Betawi. Tarian ini juga ditujukan untuk menyambut tamu atau sebagai simbol pergaulan muda mudi Betawi', 'tari-sirih-kuning.jpg', '2023-04-12 11:54:18'),
(6, 0, 'Tari Topeng Betawi', 'jakarta', 'tarian', '', 'Tari Topeng Betawi merupakan salah satu pertunjukan kesenian tradisional yang berasal dari masyarakat Betawi. Tarian ini biasanya dibawakan saat pementasan teater rakyat Topeng Betawi, bersamaan dengan musik, nyanyian, bebodoran (lawak), dan lakon (drama).', 'tari-topeng-betawi.jpg', '2023-04-12 11:55:24'),
(7, 0, 'Gambang Kromong', 'jakarta', 'alat musik', '', 'Gambang Kromong\r\nGambang kromong adalah sejenis orkes yang memadukan gamelan dengan alat-alat musik Tionghoa, seperti sukong, tehyan, dan kongahyan. Sebutan gambang kromong diambil dari nama dua buah alat perkusi, yaitu gambang dan kromong.', 'gambang_kromong1.jpg', '2023-04-12 11:56:37'),
(8, 0, 'Tehyan', 'jakarta', 'alat musik', '', 'Tehyan adalah alat musik gesek yang terbuat dari kayu jati dengan tabung resonansi yang terbuat dari batok kelapa, dan dilengkapi Senar. Alat musik tradisional etnis tionghoa ini menghasilkan nada-nada tinggi, biasanya dimainkan dengan alat-alat musik lainnya dalam musik orkes gambang.', 'alat-musik-tehyan.jpg', '2023-04-12 12:23:44'),
(9, 0, 'Gong', 'jakarta', 'makanan', '', 'Gong merupakan sebuah alat musik pukul yang terkenal di Asia Tenggara dan Asia Timur. Gong ini digunakan untuk alat musik tradisional. Saat ini tidak banyak lagi perajin gong seperti ini. Gong yang telah ditempa belum dapat ditentukan nadanya. Nada gong baru terbentuk setelah dibilas dan dibersihkan.', 'alat-musik-gong.jpg', '2023-04-12 12:25:01'),
(10, 0, 'Gong', 'jakarta', 'alat musik', '', 'Gong merupakan sebuah alat musik pukul yang terkenal di Asia Tenggara dan Asia Timur. Gong ini digunakan untuk alat musik tradisional. Saat ini tidak banyak lagi perajin gong seperti ini. Gong yang telah ditempa belum dapat ditentukan nadanya. Nada gong baru terbentuk setelah dibilas dan dibersihkan.', 'alat-musik-gong.jpg', '2023-04-12 12:25:25'),
(11, 0, 'Lotek', 'jawa barat', 'makanan', '', 'lotek adalah salah satu makanan tradisional yang telah ada sejak dulu kala. Lotek ini berisikan sayuran yang dibumbui oleh bumbu kacang, disajikan dengan lontong atau nasi hangat, serta dengan kerupuk dan bawang goreng.', 'lotek.jpg', '2023-04-12 12:26:40'),
(12, 0, 'Seblak ', 'jawa barat', 'makanan', '', 'Seblak adalah makanan Indonesia yang dikenal berasal dari Bandung, Jawa Barat dengan cita rasa gurih dan pedas. Terbuat dari kerupuk basah yang dimasak dengan sayuran dan sumber protein seperti telur, ayam, boga bahari, atau olahan daging sapi, dan dimasak dengan kencur.', 'seblak.jpg', '2023-04-12 12:29:46'),
(13, 0, 'Karedok ', 'jawa barat', 'makanan', '', 'Karedok adalah salah satu makanan Khas Sunda, dibuat dengan bahan-bahan sayuran mentah antara lain; mentimun, tauge, kembang kol, kacang panjang, daun kemangi dan terong.', 'karedok.jpg', '2023-04-12 12:30:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `upload_content`
--
ALTER TABLE `upload_content`
  ADD PRIMARY KEY (`id_konten`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upload_content`
--
ALTER TABLE `upload_content`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
