-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 05:33 PM
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
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id_user` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `nomor_rekening` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `tgl_membership` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id_user`, `nama_paket`, `nama_pembeli`, `keterangan`, `harga`, `nomor_rekening`, `bank`, `gambar`, `tgl_membership`) VALUES
(1, 'basic', 'apriwiguna', 'Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 7 hari saja.', 'Rp. 15.000', 'BCA 19210483', 'ovo', 'apri_bukti.jpg', '2023-04-16 13:50:52'),
(3, 'standard', 'Dindarp', 'Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 3 hari saja.', 'Rp. 10.000', 'BCA 19210483', 'ovo', 'Screenshot_(8).png', '2023-04-16 18:11:23'),
(4, 'standard', 'iraa', 'Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 3 hari saja.', 'Rp. 10.000', 'BCA 19210483', 'ovo', 'sf.jpeg', '2023-04-16 18:12:01'),
(5, 'standard', 'aqila', 'Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 3 hari saja.', 'Rp. 10.000', 'BCA 19210483', 'ovo', 'download.jpeg', '2023-04-16 18:14:15'),
(6, 'pro', 'Rieskahas', 'Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 2 minggu saja. ', 'Rp. 20.000', 'BCA 19210483', 'ovo', 'WI.jpg', '2023-04-16 18:33:55'),
(7, 'standard', 'Noval', 'Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 3 hari saja.', 'Rp. 10.000', 'BCA 19210483', 'dana', '', '2023-04-16 18:48:14'),
(8, 'pro', 'adella', 'Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 2 minggu saja. ', 'Rp. 20.000', 'BCA 19210483', 'ovo', 'WhatsApp_Image_2023-04-16_at_21_31_04_(1).jpeg', '2023-04-16 19:16:22'),
(9, 'pro', 'Atma', 'Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 2 minggu saja. ', 'Rp. 20.000', 'BCA 19210483', 'dana', 'default_jpg.jpg', '2023-04-16 19:37:41'),
(10, '', '', '', '', '', '', '', '2023-04-16 20:02:40'),
(11, 'pro', 'Bayu', 'Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 2 minggu saja. ', 'Rp. 20.000', 'BCA 19210483', 'dana', 'Screenshot_2023-04-13_232748.png', '2023-04-16 20:02:41'),
(17, 'pro', 'april123', 'Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 2 minggu saja. ', 'Rp. 20.000', 'BCA 19210483', 'ovo', 'fc5061ec4be5621f530267ae4fa7b4411.jpg', '2023-04-16 22:26:18'),
(18, 'basic', 'resaaa07', 'Pada paket ini pengguna bisa menambahkan artikel dalam batas waktu hanya berlaku 7 hari saja.', 'Rp. 15.000', 'BCA 19210483', 'ovo', 'bt21_chimi.jpg', '2023-04-17 08:51:02');

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
(1, 'Auliya Apriwiguna', 'apriwiguna', '2910', 2),
(3, 'Dinda Rahma Putri', 'Dindarp', 'asdfghjkl', 2),
(4, 'savira tri yuniar', 'iraa', 'pira10', 2),
(5, 'Aqila Fathimah A', 'aqila', 'aqilasbi', 2),
(6, 'Rieska Tri Hastuti', 'Rieskahas', 'shelby14', 2),
(7, 'Naufal ulwan ismail', 'Noval', '12345678', 2),
(8, 'Adella Nurramadhini', 'adella', '1sampai100', 2),
(9, 'Nur wijoyo ', 'Atma', '345', 2),
(10, 'Muhammad bayu', 'Bayu', '123', 2),
(11, 'Muhammad bayu', 'Bayu', '123', 2),
(17, 'Apriliani Hidayati', 'april123', 'bsi', 2),
(18, 'Resa Zultia', 'resaaa07', '123456', 2);

-- --------------------------------------------------------

--
-- Table structure for table `upload_content`
--

CREATE TABLE `upload_content` (
  `id_konten` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_penulis` varchar(80) NOT NULL,
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

INSERT INTO `upload_content` (`id_konten`, `id_user`, `nama_penulis`, `judul_konten`, `daerah`, `kategori`, `kategori2`, `isi_konten`, `gambar`, `tgl_konten`) VALUES
(1, 1, 'apriwiguna', 'Kerak Telor', 'jakarta', 'makanan', '', 'Kerak telur adalah makanan asli daerah Jakarta, dengan bahan-bahan beras ketan putih, telur ayam atau bebek, ebi yang disangrai kering ditambah bawang merah goreng, lalu diberi bumbu yang dihaluskan berupa kelapa sangrai, cabai merah, kencur, jahe, merica butiran, garam dan gula pasir.', 'kerak-telor1.jpg', '2023-04-16 13:52:31'),
(2, 1, 'apriwiguna', 'Ketoprak', 'jakarta', 'makanan', '', 'Daerah asal makanan ketoprak masih menjadi perdebatan. Ada yang mengatakan bahwa makanan ini berasal dari Jakarta, dan yang lain mengatakan bahwa makanan ini berasal dari Cirebon.\r\neski diduga berasal dari kedua daerah tersebut, makanan ketoprak lebih terkenal di Jakarta. Anda dapat menemukan banyak penjual ketoprak berjejer di pinggir jalan, bahkan saat malam hari. Cita rasa bumbu kacang dari ketoprak mirip dengan gado-gado yang nikmat.\r\n\r\nTapi, tahukah Anda dari mana asal nama ketoprak ini? Dikutip dari laman pergikuliner.com, nama makanan ini diambil dari bunyi yang dikeluarkan saat piring terjatuh. Disebutkan bahwa awalnya penjual makanan mencoba membuat satu makanan yang berbeda dengan harapan agar laris dijual.\r\n\r\nIa membuat makanan dengan mencampur bumbu dari bawang putih, kacang tanah, dan cabai yang kemudian diulek menjadi satu lalu disiram di atas bahan-bahan yang saat itu ia miliki, yaitu bihun, tahu, dan ketupat.\r\n\r\nSetelah selesai membuat makanan tersebut, tangannya tergelincir dan makanan yang dibuatnya terjatuh. Piring yang terlepas dari tangannya mendarat dan mengeluarkan bunyi ‘ketuprang’. Oleh karena itu, makanan yang dibuatnya kemudian diberi nama ketoprak. Tapi, ada juga yang bilang jika nama ketoprak sendiri merupakan singkatan dari ketupat dan toge yang digeprak.', 'ketoprak.jpeg', '2023-04-16 14:05:29'),
(3, 1, 'apriwiguna', 'Soto Betawi', 'jakarta', 'makanan', '', 'Soto Betawi adalah soto khas DKI Jakarta yang disajikan dengan kuah santan. Soto gurih dengan kuah santan ini berisi daging sapi. Selain daging sapi, isian Soto Betawi juga terdiri dari jeroan sapi dan organ sapi lainnya, seperti mata sapi, torpedo, dan hati.  \r\nSaat disajikan, soto ini biasanya ditambahkan dengan tomat, seledri, bawang goreng, dan emping. Bersama dengan nasi hangat, sambal, jeruk nipis dan acar, soto ini pun semakin nikmat disantap. Ya, itulah soto Betawi. Soto dengan rasa yang cenderung berbeda dari soto-soto lainnya ini adalah salah satu warisan kuliner negeri yang harus kita lindungi', 'soto-betawi.jpeg', '2023-04-16 14:08:58'),
(4, 1, 'apriwiguna', 'Gado – gado', 'jakarta', 'makanan', '', 'Gado-Gado merupakan sajian khas Betawi yang terdiri dari berbagai campuran sayuran, tempe, tahu, kentang, dan telur rebus lalu disajikan dengan siraman bumbu kacang nan gurih. Sayuran yang digunakan antara lain kangkung, bayam, labu siam, kacang panjang, kubis, dan taoge. Sebagai pendampingnya terdapat kerupuk, potongan lontong, ketupat, atau nasi putih.\r\nSepintas, tampilan gado-gado memiliki kemiripan dengan beberapa makanan khas daerah lain, seperti lotek (Jawa Barat dan Jawa Tengah) atau pecel (Jawa Timur). Bedanya, bumbu kacangnya gado-gado tidak menggunakan kencur seperti lotek dan pecel. Sedangkan untuk isiannya, gado-gado tidak hanya menggunakan sayuran, tetapi menambahkan telur, tahu, tempe, dan kentang sebagai isiannya. Tidak ada yang tahu persis asal-muasal gado-gado, namun sebagian besar referensi bebas cenderung mengasosiasikan gado-gado sebagai hidangan asli Betawi. Kata \'gado-gado\' dalam kamus Besar Bahasa Indonesia (KBBI) berarti makanan yang terdiri atas sayur-sayuran, kentang, tempe, tahu, telur rebus, dan lain-lain diberi bumbu sambal kacang dan sebagainya. Gado-gado dalam KBBI juga diartikan sebagai \'campur aduk, tidak karuan\'.', 'gado-gado.jpg', '2023-04-16 16:28:04'),
(17, 5, 'aqila', 'Gambyong', 'jawa tengah', 'tarian', '', 'Gambyong merupakan salah satu bentuk tarian Jawa klasik yang berasal-mula dari wilayah Surakarta dan biasanya dibawakan untuk pertunjukan atau menyambut tamu.', '13_Jawa_Tengah_-_Tari_Gambyong.jpg', '2023-04-16 18:23:23'),
(18, 5, 'aqila', 'Golek', 'jawa tengah', 'tarian', '', 'Tari Golek Menak merupakan salah satu jenis tari klasik gaya Yogyakarta yang diciptakan oleh Sri Sultan Hamengkubuwono IX. Penciptaan tari Golek Menak berawal dari ide Sri Sultan Hamengkubuwono IX setelah menyaksikan pertunjukkan Wayang Golek Menak yang dipentaskan oleh seorang dalang dari daerah Kedu pada tahun 1941.', 'tari_golek.jpg', '2023-04-16 18:29:25'),
(19, 5, 'aqila', 'Serimpi', 'jawa tengah', 'tarian', '', 'Tari Serimpi yang merupakan tari klasik asal Jawa Tengah. Tari klasik sendiri mempunyai arti sebuah tarian yang mencapai tingkat keindahan yang tinggi dan sudah ada sejak zaman masyarakat feodal serta lahir dan tumbuh di kalangan keraton. \r\nTari yang sudah banyak dipentaskan ini memiliki gerak gemulai yang menggambarkan kesopanan, kehalusan budi, serta kelemahlembutan yang dipersembahkan dari gerakan yang pelan serta anggun dengan diiringi suara musik gamelan.', '14_Yogyakarta_-_Tari_Serimpi.jpg', '2023-04-16 18:32:27'),
(20, 5, 'aqila', 'Bondan', 'jawa tengah', 'tarian', '', 'Tari Bondan adalah tari yang terlahir dari kebudayaan masyarakat Surakarta masa silam. Tarian ini mengisahkan tentang seorang ibu yang mengasuh anaknya, memberikan kasih sayang, dan merawat bayinya hingga besar.', 'tari_bondan_jateng.jpg', '2023-04-16 18:35:28'),
(23, 3, 'Dindarp', 'Lenggang Nyai', 'jakarta', 'tarian', '', 'Tari Lenggang Nyai merupakan tarian kreasi baru yang diambil dari cerita rakyat Betawi. Nama ‘Lenggang Nyai’ berasal dari kata “lenggang” yang mempunyai arti “melenggak – lenggok” dan kata “Nyai” yang di ambil dari kisah hidup Nyai Dasimah. Tarian ini kerap disebut dengan Tari Betawi yang diciptakan tahun 1998 oleh seorang seniman asal Yogyakarta bernama Wiwik Widiastuti. Tarian Lenggang Nyai tercipta dari proses perpaduan kebudayaan,  seperti budaya Tionghoa, dan sebagainya. Ciri khas penggunaan suara musik pengiringnya riang, serta gerakan tari yang lemah gemulai.', 'tari-lenggang-nyai.jpg', '2023-04-16 18:51:29'),
(24, 3, 'Dindarp', 'Sirih Kuning', 'jakarta', 'tarian', '', 'Tari Sirih Kuning adalah tarian asal Betawi. Biasanya ditampilkan bersama alunan musik gambang kromong. Salah satu tujuan tari sirih kuning adalah mengiringi prosesi pernikahan adat Betawi. Tarian ini juga ditujukan untuk menyambut tamu atau sebagai simbol pergaulan muda mudi Betawi', 'tari-sirih-kuning.jpg', '2023-04-16 18:53:21'),
(25, 3, 'Dindarp', 'Topeng betawi', 'jakarta', 'tarian', 'slider_home', 'Tari Topeng Betawi merupakan salah satu pertunjukan kesenian tradisional yang berasal dari masyarakat Betawi. Tarian ini biasanya dibawakan saat pementasan teater rakyat Topeng Betawi, bersamaan dengan musik, nyanyian, bebodoran (lawak), dan lakon (drama).', 'tari-topeng-betawi.jpg', '2023-04-16 18:54:03'),
(26, 3, 'Dindarp', 'Japin Betawi', 'jakarta', 'tarian', '', 'Tari Japin Betawi merupakan wujud dari perpaduan berbagai budaya yang ada di Jakarta, khususnya campuran dari tarian Melayu yang dipengaruhi budaya Arab. Kostum yang digunakan oleh tarian ini menggunakan kerudung yang merupakan busana khas Melayu. Tari ini bersifat edukatif sehingga digemari oleh banyak orang.', 'WhatsApp_Image_2023-04-16_at_19_25_50.jpeg', '2023-04-16 19:26:34'),
(27, 6, 'Rieskahas', 'GAMBANG KROMONG', 'jakarta', 'alat musik', '', 'Gambang kromong adalah sejenis orkes yang memadukan gamelan dengan alat-alat musik Tionghoa, seperti sukong, tehyan, dan kongahyan. Sebutan gambang kromong diambil dari nama dua buah alat perkusi, yaitu gambang dan kromong. Gambang kromong pertama kali muncul hanya bernama gambang. Namun sejak awal abad ke-20 menjadi gambang kromong karena ada penambahan instrumen berupa kromong. ', 'Gambang_kromong.jpg', '2023-04-16 19:34:13'),
(28, 6, 'Rieskahas', 'TEHYAN', 'jakarta', 'alat musik', '', 'Tehyan adalah alat musik gesek yang terbuat dari kayu jati dengan tabung resonansi yang terbuat dari batok kelapa, dan dilengkapi Senar. Alat musik tradisional etnis tionghoa ini menghasilkan nada-nada tinggi, biasanya dimainkan dengan alat-alat musik lainnya dalam musik orkes gambang.', 'Tehyan.jpg', '2023-04-16 19:35:45'),
(29, 6, 'Rieskahas', 'GONG', 'jakarta', 'alat musik', '', 'Gong merupakan sebuah alat musik pukul yang terkenal di Asia Tenggara dan Asia Timur. Gong ini digunakan untuk alat musik tradisional. Saat ini tidak banyak lagi perajin gong seperti ini. Gong yang telah ditempa belum dapat ditentukan nadanya. Nada gong baru terbentuk setelah dibilas dan dibersihkan.', 'Gong.jpg', '2023-04-16 19:37:04'),
(30, 6, 'Rieskahas', 'GENDANG', 'jakarta', 'alat musik', 'slider_home', 'Menurut sejarahnya, alat musik Gendang atau juga dikenal Kendhang berasal dari Jawa Tengah dan Jawa Barat. Kemudian, Gendang menyebar dan banyak dikenal oleh beberapa pemain musik di beberapa daerah Jawa, Sumatera, bahkan Kalimantan. Gendang pada dasarnya dimainkan sebagai pengatur irama lagu. Cara memainkan Gendang adalah dengan ditabuh secara bergantian dan teratur. Gendang dibuat dengan dua kepala, sehingga menabuhnya dapat dilakukan secara bergantian.', 'Gendang.jpg', '2023-04-16 19:38:47'),
(31, 7, 'Noval', 'Bonang', 'jawa tengah', 'alat musik', '', 'Alat musik bonang merupakan alat musik tradisional asal jawa tengah, Alat musik bonang merupakan salah satu instrumen yang digunakan dalam pertunjukan musik gamelan Jawa, Bali dan Sunda.\r\n\r\nAlat musik bonang adalah alat musik pukul yang terbuat dari bahan logam, seperti kuningan, perunggu atau besi. Ciri khas alat musik ini adalah memiliki tonjolan di atasnya yang disebut juga dengan pencu atau penclon yang dipukul dengan dua pemukul khusus. Pemukul ini biasanya terbuat dari tongkat berlapis yang juga disebut dengan sebutan Bindhi.\r\n\r\nMenurut sejarahnya alat musik ini tentu akan banyak berkaitan dengan era transisi Hindu-Buddha. Alat musik bonang dinamakan sesuai dengan bunyinya yaitu nong-nang yang dalam bahasa Jawa berarti penunjuk arah “di situ-di sini” .\r\n\r\nsesuai dengan asal katanya yaitu nong-nang fungsi utamanya adalah sebagai petunjuk arah dari suatu gending atau lagu gamelan. Selain itu, ada juga yang mengartikannya sebagai singkatan bon yang berarti babon dan nang yang berarti penang yang artinya sebagai induk kemenangan.', 'bonang.jpg', '2023-04-16 19:58:07'),
(32, 7, 'Noval', 'Saron', 'jawa tengah', 'alat musik', '', 'Alat musik Saron ini merupakan suatu kesenian tradisional yang lahir dan kemudian berkembang di pulau Jawa. Dan telah diketahui bahwasanya instrumen alat musik ini juga pertama kali sudah dimainkan didalam suatu pertunjukan yang diadakan di Candi Borobudur pada abad yang ke 9.\r\n\r\nDan sebelumnya juga, instrumen alat musik yang khas dari kesenian Jawa ini sudah sempat diduga juga berasal dari suatu dekomposisi instrumen gangsa gambang. Tetapi dugaan tersebut kemudian dibantahkan oleh Mantle Hood, dengan cara mengaitkannya dengan preferensi oktaf tunggal dari bentuk dan juga karakteristik irama pada pathet tersebut.\r\n\r\nSaron merupakan salah satu alat musik tradisional yang berasal dari Jawa Tengah. Dimana bunyi dari alat musik ini bisa menghasilkan nada 1 oktaf lebih tinggi dibandingkan dengan demung, dan juga memiliki ukuran fisik yang masih jauh lebih kecil.', 'saron.jpg', '2023-04-16 20:04:38'),
(33, 11, 'Bayu', 'Remo', 'jawa timur', 'tarian', '', 'Tari Remo berasal dari daerah Jombang Jawa Timur. Tarian ini diciptakan oleh seorang pengamen dan dalam perkembangannya, tari Remo sangat dikagumi oleh masyarakat Jawa Timur. Kini tari Remo menjadi salah satu tarian pembuka setiap pertunjukan kesenian Ludruk di Jawa Timur.\r\nJika dillihat dari gerak kaki yang energik, maka kita temukan keunikan dari Tari Remo. Kesan yang dihadirkan sangat sarat dengan suasana ceria dan bahagia. Busana atau kostum yang menjadi properti tari Remo yang dikenal terdapat tiga jenis yakni:\r\n1.Gaya Surabayan,\r\n2.Gaya Jombangan,\r\n3.dan Gaya Sawunggaling.', 'Tari-Remo.jpg', '2023-04-16 20:09:26'),
(34, 7, 'Noval', 'Kenong', 'jawa tengah', 'alat musik', '', 'Alat musik Kenong mampu diartikan sebagai alat musik tradisional khas Jawa yg dimainkan dgn cara dipukul pada kepingan menonjol di cuilan tengahnya.\r\n\r\nAlat musik Kenong merupakan alat musik Gamelan yg tergolong ke dlm keluarga ‘pencon’, yg tergolong di dalamnya mirip gong, bonang, & kethuk.\r\n\r\nDi dlm pendengaran masyarakat Jawa, suara Kenong terdengar berbunyi ning-nong, maka tidak aneh jikalau penamaan alat musik tradisional ini diketahui sebagai Kenong. Dan di dlm kesenian Gamelan, suara Kenong mengisi di antara sela-sela suara instrumen Kempul.', 'kenong.jpeg', '2023-04-16 20:10:16'),
(35, 11, 'Bayu', 'Jaranan Buto', 'jawa timur', 'tarian', '', 'Tari Jaranan Buto adalah salah satu kesenian tari yang juga berasal dari Banyuwangi. Kata Buto dalam tari ini berarti raksasa sedangkan kata jaranan berarti kuda. Dalam masyarakat Jawa, Jaranan Buto memiliki arti kuda lumping raksasa. Dinamakan raksasa karena yang menarikan tari ini sebanyak 16 sampai 20 orang. Namun, tarian ini sudah jarang dilakukan sehingga tidak dikenal banyak orang. Pertunjukan tari jaranan buto ini hanya ada ketika ada acara khitanan ataupun pernikahan.\r\nTari jaranan buto ini dibawakan oleh kaum lelaki dan mereka memakai make up yang sangat menyeramkan. Wajah mereka yang menyeramkan ini diambil dari kisah Menak Jinggo, seorang raksasa di sejarah budaya Jawa. Tarian ini diiringi oleh music kendang, boning, kecer, gong, dan terompet. Gerakan dalam tarian ini juga cuku ekstrim karena terkadang ada adegan perkelahian. Tak jarang penarinya pun akan kesurupan karena dimasuki roh setan. Ini juga yang menjadi salah satu ciri khas tari jaranan buto.', 'Tari-Jaranan-Buto.jpg', '2023-04-16 20:13:11'),
(36, 7, 'Noval', 'Demung', 'jawa tengah', 'alat musik', '', 'Demung adalah alat musik tradisional Jawa Tengah yang masih termasuk di dalam keluarga balungan.\r\n\r\nDalam pagelaran musik gamelan, biasanya terdapat dua jenis demung, yaitu demung dengan nada pelog dan slendro.\r\n\r\nMeskipun bentuknya cukup besar, namun demung justru menghasilkan nada oktaf terendah dalam alat musik balungan.\r\n\r\nDemung biasanya terbuat dari logam kuningan, dan kamu cukup memukulnya dengan alat pemukul khusus untuk memainkannya.\r\n\r\nPada gendhing Gangsaran yang menggambarkan kondisi peperangan misalnya, demung ditabuh dengan keras dan cepat. Sedangkan gendhing Gati ditabuh lambat namun keras.', 'demung.jpg', '2023-04-16 20:14:52'),
(37, 11, 'Bayu', 'Topeng Malangan', 'jawa timur', 'tarian', 'slider_home', 'Tarian Jawa Timur lainnya adalah Tari topeng Malangan disebut juga Wayang Topeng Malangan. Tarian ini sebenarnya adalah salah satu pertunjukan seni yang berdiri dari abad 8 Masehi. Karena tarian ini sudah lama dilestarikan oleh masyarakat Jawa Timur, Kementerian Pendidikan dan Kebudayaan menetapkannya sebagai warisan budaya Takbenda. Terdapat 8 kesenian dari Jawa Timur yang ditetapkan sebagai warisan budaya.\r\nTarian ini dibuka dengan Tarian Topeng Bangtih atau Tari Beskalan Lanang. Tarian ini dibawakan oleh penari yang menjadi lakon Panji. Adegan atau gerakan tarinya adalah Jejer Jawa, gerakan Perang Gagal, Adegan Gunung Sari Patrajaya, Gerakan Jejer Sabrang, adegan Peang Buruh, dan Bubaran.', 'Tari-Topeng-Malangan.jpg', '2023-04-16 20:15:06'),
(38, 11, 'Bayu', 'Reog Ponorogo', 'jawa timur', 'tarian', '', 'Reog Ponorogo adalah salah satu kesenian dari Jawa Timur yang sudah terkenal di penjuru dunia. Tari Reog ini berasal dari daerah Ponorogo, Jawa Timur. Tarian yang sangat epic ini dibawakan oleh beberapa wanita dan pria, biasanya berjumlah 6 orang atau 8 orang.\r\nTarian ini termasuk salah satu tarian yang memiliki durasi lama. Hal tersebut dikarenakan terdapat beberapa fase dalam tarian Reog Ponorogo ini. Tarian ini memiliki sejarah yakni gerakan tariannya berasal dari suatu perjalanan. Perjalanan yang diceritakan di sini adalah oleh Prabu Kelana Sewandana. Sang Prabu melakukan perjalanan untuk mencari kekasih hatinya. Perjalanan tersebut dilakukan oleh Prabu Kelana bersama dengan Bujangganong, yakni prajurit dan patihnya. Kekasih yang dicari oleh Prabu Kelana bernama Dwi Sanggalangit yang merupakan Putri dari Kediri.\r\nDiceritakan bahwa sang Putri hanya akan menerima cinta Prabu Kelana jika Prabu dapat menciptakan suatu kesenian. Hingga akhirnya terciptalah tarian Reog ini yang dilakukan oleh para prajurit. Berikut adalah daftar orang yang menarikan tari Reog; Prabu Kelono Sewandono, Patih Bujangganong. Selain itu prajuritnya adalah Jathil, Warok, dan Pembarong.\r\nTarian Jawa Timur Reog Ponorogo memiliki satu ciri khas yakni penggunaan topeng yang sangat besar. Topeng ini mirip seperti Barongsai namun ukurannya lebih besar dengan berat 50 kg. ukurannya yang sangat berat dapat dengan mudah dibawa oleh penari dengan giginya. Namun, para penari rog ponorogo ini sudah terlatih selama 10 tahun, jadi keahliannya tidak perlu diragukan.', 'Reog-Ponorogo-1200x771.jpg', '2023-04-16 20:17:29'),
(39, 4, 'iraa', 'Soto Kudus', 'jawa tengah', 'makanan', '', 'Soto Kudus adalah soto yang berasal dari Kudus, Jawa Tengah . Soto kudus, hampir mirip dengan soto Lamongan, soto kudus berisi suwiran ayam dan taoge. Terkadang soto kudus juga menggunakan daging kerbau dan kuahnya lebih bening.', '70b59c146daff9caf53baa4f2f880fce_Soto_Kudus_744_419.jpg', '2023-04-16 21:35:39'),
(40, 8, 'adella', 'TARI MERAK', 'jawa barat', 'tarian', '', 'Tari Merak merupakan salah satu ragam tarian kreasi baru yang mengekpresikan kehidupan binatang, yaitu burung merak.', '1200px-DSC_0624_yuri.jpg', '2023-04-16 21:42:24'),
(41, 4, 'iraa', 'Gudeg', 'jawa tengah', 'makanan', 'slider_home', 'Gudeg adalah hidangan khas Provinsi Daerah Istimewa Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan. Perlu waktu berjam-jam untuk membuat hidangan ini. Warna cokelat biasanya dihasilkan oleh daun jati yang dimasak bersamaan.', 'jwgiwgsirs5vwzbobopu.jpg', '2023-04-16 21:49:29'),
(42, 8, 'adella', 'TARI JAIPONG', 'jawa barat', 'tarian', '', 'Tari Jaipong merupakan salah satu tari tradisional dari Jawa Barat. Pada awal perkembangannya Tari Jaipong muncul di Bandung dan Karawang. Sebagai kesenian Jabar, Tari Jaipong juga merupakan gabungan dari tiga kesenian lain, yaitu Ketuk Tilu, Wayang Golek, dan Pencak Silat.', 'kesenian-jawa-barat-tari-jaipong-yang-mendunia_169.jpeg', '2023-04-16 21:50:50'),
(43, 8, 'adella', 'TARI SINTREN', 'jawa barat', 'tarian', '', 'Tarian ini disebut mengandung unsur magis sehingga tidak boleh untuk dibuat mainan. Tari sintren ini biasanya dibawakan oleh seorang wanita yang mengenakan kostum khusus dan berkacamata hitam, sebelum melakukan tarian ini biasanya sang penari akan masuk ke dalam sebuah kurungan yang ditutup oleh kain.\r\nNama sintren yang ada pada tarian ini ternyata merupakan gabungan dari dua kata yakni si dan tren yang mana dalam bahasa Jawa kata si merupakan sebuah ungkapan panggilan yang memiliki arti ia atau dia, sedangkan kata tren berasal dari kata tri atau putri sehingga sintren memiliki arti si putri atau sang penari.', 'download_(7).jpg', '2023-04-16 21:59:07'),
(44, 4, 'iraa', 'Sate Ambal', 'jawa tengah', 'makanan', '', 'Sate Ambal adalah salah satu kuliner khas Kabupaten Kebumen. Yang membedakan sate ayam dengan daerah lain adalah selain daging ayam nya yang empuk kalau digigit juga pada bumbu saosnya yang dibuat dari tempe rebus yang di haluskan, aroma dari tempe inilah yang menjadi ciri khas sate ambal.', 'Resep-Sate-Ambal.jpeg', '2023-04-16 22:00:18'),
(45, 4, 'iraa', 'Nasi Tiwul', 'jawa tengah', 'makanan', '', 'Nasi Tiwul adalah panganan pokok khas Jawa sebagai pengganti nasi yang berbahan dasar ketela pohon atau singkong.', 'photo-tiwul-61a34b9662a70428cb0032c3.jpg', '2023-04-16 22:05:55'),
(47, 17, 'april123', 'Angklung ', 'jawa barat', 'alat musik', '', 'Angklung merupakan salah satu alat musik bernada ganda yang berkembang secara tradisional di wilayah Jawa Barat.\r\n\r\nAlat musik ini dibuat dari bahan bambu yang dimainkannya dengan cara digoyang. Suara yang dihasilkan angklung ini berasal dari benturan badan pipa bambu yang menghasilkan suara getar berupa susunan nada 2 (dua), 3 (tiga), hingga 4 (empat) nada pada tiap ukurannya, baik kecil maupun besar.\r\n\r\nBerdasarkan Dictionary of the Sunda Language karya dari Jonathan Rigg yang terbit di Batavia pada tahun 1862, tercatat bahwasanya angklung merupakan alat musik yang terbuat dari pipa bambu yang dipotong ujungnya sehingga menyerupai sebuah pipa-pipa dalam suatu organ. Setelah itu pipa itu diikat bersamaan ke dalam satu bingkai.\r\n\r\nAlat musik angklung telah tercatat menjadi sebuah karya agung warisan budaya lisan dan nonbendawi manusia dari UNESCO sejak November tahun 2010.', 'angklung4.jpg', '2023-04-17 05:35:54'),
(48, 17, 'april123', 'Tarawangsa', 'jawa barat', 'alat musik', '', 'Tarawangsa adalah alat musik tradisional yang berasal dari Jawa Barat dan dimainkan dengan cara digesek. Kehadiran alat musik yang satu ini ternyata lebih tua dibandingkan dengan alat musik rebab. Hal tersebut dapat dibuktikan dari adanya naskah kuno yang menyebutkan alat musik tarawangsa.\r\n\r\nAlat musik ini bisa ditemukan di beberapa wilayah yang ada di Jawa Barat dan juga Banten. Mulai dari daerah Sumedang, Banjaran, Cipatujah, Kanekes, dan lainnya.\r\n\r\nResonator tarawangsa terbuat dari kayu berleher panjang dengan jumlah dawai antara 2 sampai 3 utas. Walaupun alat musik tersebut mempunyai dua-tiga dawai. Tapi hanya ada satu dawai yang dimainkan dengan cara digesek. Selebihnya, dawai yang lainnya akan dimainkan dengan cara dipetik menggunakan jari telunjuk sebelah kiri.', 'tarawangsa.gif', '2023-04-17 05:46:49'),
(49, 17, 'april123', 'Calung', 'jawa barat', 'alat musik', '', 'Calung adalah waditra jenis alat pukul yang terbuat dari bahan bambu. Pada mulanya waditra ini merupakan seni kalangenan (bersifat hobi), namun pada perkembangannya Calung telah menjadi seni pertunjukkan yang populer.\r\n\r\nIstilah Calung berasal dari kata ca= maca(baca), lung= linglung (bingung). Di masa lampau waditra Calung disajikan sebagai alat mandiri (tunggal) dan biasa dimainkan di tempat-tempat sepi oleh orang-orang yang sedang menunggu padi di ladang ataupun sawah. Bagi orang yang memainkannya, Calung merupakan musik pelipur lara atau pelipur hati yang sedang bingung (haté nu keur liwung).\r\n\r\nWaditra Calung terdiri dari 3 macam yaitu Calung Rantay, Calung Gambang dan Calung Jingjing.', 'calung.jpg', '2023-04-17 05:57:57'),
(50, 17, 'april123', 'Rebab', 'jawa barat', 'alat musik', '', 'Rebab merupakan alat musik tradisional dari Jawa Barat yang sudah dikenal sejak abad ke-8. Alat musik ini dulunya dibawa oleh para pedagang dari Timur Tengah yang datang ke Indonesia.\r\n \r\n\r\nUkuran rebab biasanya kecil, badannya bulat, bagian depan yang tercakup dalam suatu membran seperti perkamen atau kulit domba dan memiliki leher panjang terpasang. Ada leher tipis panjang dengan pegbox pada akhir dan ada satu, dua atau tiga senar. Tidak ada papan nada. Alat musik ini dibuat tegak, baik bertumpu di pangkuan atau di lantai. Busurnya biasanya lebih melengkung daripada biola.\r\n\r\n\r\nIstilah rebab berasal dari kata Rabab yang berasal dari Bahasa Persia dan memiliki arti sedih. Pengertian tersebut sesuai dengan jenis lagu yang kerap dimainkan menggunakan rebab, yaitu lagu sedih atau ngalengis. Alat musik rebab juga biasa disebut sebagai lengek, yang artinya gesek atau keset. Sedangkan orang yang memainkan rebab disebut sebagai “ngalengek”, yang artinya memainkan rebab.\r\n\r\n\r\nDulu, alat musik rebab dibuat dari bahan dasar tembaga dan mempunyai tiga senar atau dawai. Akan tetapi, seiring berjalannya waktu rebab dibuat menggunakan bahan kayu yang berbentuk busur panah. Alat musik ini sendiri dimainkan dengan cara digesek seperti biola, hanya saja tidak diangkat ke bahu.', 'rebab.png', '2023-04-17 06:16:53'),
(51, 18, 'resaaa07', 'Lotek', 'jawa barat', 'makanan', '', 'Lotek adalah salah satu makanan tradisional yang telah ada sejak dulu kala. Lotek ini berisikan sayuran yang dibumbui oleh bumbu kacang, disajikan dengan lontong atau nasi hangat, serta dengan kerupuk dan bawang goreng.', 'lotek.jpg', '2023-04-17 09:47:13'),
(52, 18, 'resaaa07', 'Seblak', 'jawa barat', 'makanan', '', 'Seblak adalah makanan Indonesia yang dikenal berasal dari Bandung, Jawa Barat dengan cita rasa gurih dan pedas. Terbuat dari kerupuk basah yang dimasak dengan sayuran dan sumber protein seperti telur, ayam, boga bahari, atau olahan daging sapi, dan dimasak dengan kencur.', 'seblak.jpg', '2023-04-17 09:53:25'),
(53, 18, 'resaaa07', 'Karedok', 'jawa barat', 'makanan', '', 'Karedook adalah salah satu makanan khas Sunda, dibuat dengan bahan-bahan sayuran mentah antara lain: mentimun, tauge, kembang kol, kacang panjang, daun kemangi, dan terong.', 'karedok.jpg', '2023-04-17 09:55:13'),
(54, 18, 'resaaa07', 'Asinan Bogor', 'jawa barat', 'makanan', '', 'Asinan adalah suatu makanan yang dibuat melalui fermentasi anaerob atau dengan cara merendamnya ke dalam cuka. Fermentasi dalam air asin dapat menghasilkan makanan, sehingga disebut dengan asinan. Bahkan, prosedur fermentasi tersebut menghasilkan perubahan tekstur makanan dan rasanya juga.', 'asinan_bogor.jpg', '2023-04-17 09:58:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id_user`);

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
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `upload_content`
--
ALTER TABLE `upload_content`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
