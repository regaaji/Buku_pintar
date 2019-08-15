-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2019 at 12:55 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_pintar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `created_at`, `updated_at`) VALUES
(1, 'rega', '$2y$10$3ED3w/4e1l7jVQjr0eKNvezcfmkLWC.MhUR.2bbbBg74CAnXdFmb.', 'Rega Aji', '2019-07-20 12:03:58', '2019-07-14 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Komik', '2019-07-07 17:00:00', '2019-07-14 17:00:00'),
(2, 'Sejarah', '2019-07-14 17:00:00', '2019-07-14 17:00:00'),
(3, 'Olahraga', '2019-08-02 10:40:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(11) NOT NULL,
  `nama_kurir` varchar(100) NOT NULL,
  `tarif_kurir` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama_kurir`, `tarif_kurir`, `created_at`, `updated_at`) VALUES
(1, 'JNE', 15000, '2019-07-23 12:11:16', '2019-07-22 17:00:00'),
(2, 'POS', 20000, '2019-07-23 12:11:05', '2019-07-22 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(100) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `username`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`, `created_at`, `updated_at`) VALUES
(1, 'aan', 'aan@gmail.com', '$2y$10$p3YBh4aaVJMsqpFpQfiVB.srDnJX3y1pFFipRvDq5MaI7gkCHuezG', 'Aan AMJ AYE', '085235149501', 'karangan', '2019-08-03 06:04:40', '2019-07-14 17:00:00'),
(2, 'aji', 'aji@gmail.com', '$2y$10$51.9bgnNCuP7MfBH3mHIhewZUcDi3zmx1p6nUiIE1TxfsRwlNx38y', 'aji', '0843325545221', 'mojo tugu ', '2019-07-27 03:29:04', '2019-07-14 17:00:00'),
(7, 'sonata', 'sonata@gmail.com', '$2y$10$3xflzNC/qtPlaFTkjOoYwOfvu.IJu.9YHQtF.bOD05gcJ/MCQcPnO', 'sonata', '085235149501', 'karangsoko', '2019-07-22 09:11:48', '0000-00-00 00:00:00'),
(8, 'wahyu', 'wahyu@gmail.com', '$2y$10$jMg53nOLlafEp5uZsuT88.vsP9SnUQKfKER55vIfpmKZ/sr8WJyiC', 'wahyu', '0892328372837', 'karangan', '2019-07-29 12:22:41', '0000-00-00 00:00:00'),
(9, 'fira', 'fira@gmail.com', '$2y$10$2YHUJ./Y7A7q7bMZ7G6uvuXHnd.FaonFV2IYR9LbtxtudhxSeJmmq', 'fira', '102109289183', 'karangan', '2019-07-29 12:35:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_kurir` int(10) NOT NULL,
  `tanggal_pembelian` varchar(100) NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kurir` varchar(100) NOT NULL,
  `tarif` int(100) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_kurir`, `tanggal_pembelian`, `total_pembelian`, `nama_kurir`, `tarif`, `alamat_pengiriman`, `status_pembelian`, `created_at`, `updated_at`) VALUES
(13, 7, 2, '24-07-2019', 100000, 'POS', 20000, 'asas', 1, '2019-07-25 12:18:56', '0000-00-00 00:00:00'),
(14, 7, 1, '24-07-2019', 95000, 'JNE', 15000, 'karangan', 1, '2019-07-25 12:18:56', '0000-00-00 00:00:00'),
(15, 7, 1, '24-07-2019', 335000, 'JNE', 15000, 'asas', 1, '2019-07-25 11:55:23', '0000-00-00 00:00:00'),
(16, 7, 1, '30-07-2019', 95000, 'JNE', 15000, 'weewew', 0, '2019-07-30 07:18:24', '0000-00-00 00:00:00'),
(17, 7, 2, '30-07-2019', 100000, 'POS', 20000, 'klklklk', 2, '2019-07-30 09:16:25', '0000-00-00 00:00:00'),
(18, 9, 2, '03-08-2019', 72960, 'POS', 20000, 'karangan', 1, '2019-08-03 11:21:01', '0000-00-00 00:00:00'),
(19, 9, 1, '05-08-2019', 135000, 'JNE', 15000, 'karangan', 2, '2019-08-05 01:44:26', '0000-00-00 00:00:00'),
(20, 9, 1, '05-08-2019', 135000, 'JNE', 15000, 'karangan', 2, '2019-08-05 12:23:19', '0000-00-00 00:00:00'),
(21, 9, 3, '15-08-2019', 90000, 'COD', 10000, 'karangan', 1, '2019-08-15 09:23:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `subharga` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `subharga`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '', 0, 0, '2019-07-17 03:42:15', '2019-07-14 17:00:00'),
(2, 1, 2, 1, '', 0, 0, '2019-07-17 03:42:18', '2019-07-14 17:00:00'),
(8, 13, 2, 2, 'One Piece', 40000, 80000, '2019-07-24 12:43:22', '0000-00-00 00:00:00'),
(9, 14, 2, 2, 'One Piece', 40000, 80000, '2019-07-24 12:44:32', '0000-00-00 00:00:00'),
(10, 15, 2, 8, 'One Piece', 40000, 320000, '2019-07-24 12:50:17', '0000-00-00 00:00:00'),
(11, 0, 2, 2, 'One Piece', 40000, 80000, '2019-07-30 07:18:24', '0000-00-00 00:00:00'),
(12, 17, 2, 2, 'One Piece', 40000, 80000, '2019-07-30 07:32:04', '0000-00-00 00:00:00'),
(13, 18, 11, 1, 'History Of Madura: Sejarah, Budaya Dan Ajaran Luhur', 52960, 52960, '2019-08-03 11:19:25', '0000-00-00 00:00:00'),
(14, 19, 2, 3, 'One Piece', 40000, 120000, '2019-08-05 01:44:07', '0000-00-00 00:00:00'),
(15, 20, 2, 3, 'One Piece', 40000, 120000, '2019-08-05 12:22:43', '0000-00-00 00:00:00'),
(16, 21, 16, 2, 'Dragon Ball Super', 40000, 80000, '2019-08-15 09:23:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `nama_penulis` varchar(100) NOT NULL,
  `harga_produk` int(100) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `detail_produk` text NOT NULL,
  `stok_produk` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori_id`, `nama_produk`, `nama_penulis`, `harga_produk`, `foto_produk`, `deskripsi_produk`, `detail_produk`, `stok_produk`, `created_at`, `updated_at`) VALUES
(1, 1, 'Naruto', 'Masashi Kishimoto', 20000, 'naruto.jpg', 'Untuk memburu Jiraiya yang menyusup ke Amegakure, Pain, pemimpin Akatsuki, dan Konan akhirnya mulai bergerak! Ternyata, identitas Pain yang penuh misteri itu adalah orang yang dikenal baik oleh Jiraiya! Sebenarnya, apa hubungan mereka dan apa kemampuan mengerikan Pain?', 'Jumlah Halaman : 171, Tanggal Terbit : 24 Jan 2017, Bahasa : Indonesia, Penerbit : Elex Media Komputindo, Berat : 0.10 kg, Lebar : 15.5 cm, Panjang : 17 cm.', 10, '2019-07-28 12:56:16', '2019-07-14 17:00:00'),
(11, 2, 'History Of Madura: Sejarah, Budaya Dan Ajaran Luhur', 'Drs.H.Muhammad Syamsuddin', 52960, 'madura1.jpg', 'Buku ini menyajikan sejarah Madura dari awal hingga masa kini. Tersaji dalam buku ini system masyarakat, agama, bahasa, budaya, juga struktur sosial dan politik masyarakat Madura. Tidak lupa, disajikan ajaran-ajaran luhur masyarakat Madura yang sampai saat ini masih dipegang teguh oleh sebagian masyarakat Madura, baik yang masih tinggal di Madura maupun yang sudah menetap di pulau atau daerah lain.', 'Jumlah Halaman: 288, Tanggal Terbit: 14 Jun 2019, Bahasa: Indonesia, Penerbit: Araska Publisher, Berat: 0.291 kg, Lebar: 14 cm, dan Panjang: 21 cm,', 9, '2019-08-03 11:19:25', '0000-00-00 00:00:00'),
(12, 2, 'Hitam Putih Majapahit', 'Sri Wintala Achmad', 47920, 'majapahit.png', 'Buku ini menyajikan sejarah Kerajaan besar di Nusantara, yaitu Majapahit. Disajikan dari awal mula pendirian kerajaan oleh Dyah Wijaya, kejayaan di bawah kekuasaan Hayam Wuruk hingga keruntuhan dengan pecahnya Majapahit menjadi dua bagian, yaitu Majapahit Kulon dan Majapahit Wetan.', 'Jumlah Halaman : 298, Tanggal Terbit : 27 Jun 2019, Bahasa : Indonesia, Penerbit : Araska Publisher, Berat : 0.289 kg, Lebar : 14 cm, dan Panjang : 21 cm.', 12, '2019-08-09 02:20:26', '0000-00-00 00:00:00'),
(13, 2, 'Sejarah Umat Manusia', 'HENRIK WILLEM VAN LOON', 190000, 'manusia.jpg', 'Sejarah Umat Manusia karya Hendrik Van Loon diterbitkan pertama kali pada tahun 1921, dan menerima penghargaan John Newberry pada 1922. Buku yang Anda baca ini sudah dimutakhirkan isinya hingga ke era sosial media oleh Robert Sullivan, seorang penulis sejarah, sehingga menjadi sebuah buku sejarah manusia terlengkap dari sisi linimasa, namun tetap sederhana dan menyenangkan untuk dibaca semua orang dan usia.', 'Jumlah Halaman : 772, Tanggal Terbit : 20 Mei 2019, Bahasa :  Indonesia, Penerbit : Elex Media Komputindo, Berat : 0.650 kg, Lebar : 14 cm, Panjang : 21 cm', 0, '2019-08-09 01:28:21', '0000-00-00 00:00:00'),
(14, 1, 'One Punch Man', 'Yusuke Murata', 25000, 'man.jpg', 'Garou yang pergi dari markas Asosiasi Monster memulihkan tubuhnya terlebih dahulu. Bukannya menemukan Hero, ternyata dia malah bertemu lagi dengan Tareo, bocah yang pernah dia tolong. Saat itu, muncullah kedua monster yang ditugaskan untuk mengawasinya. Pertarungan pun tak terelakkan antara sang Pemburu Hero dan monster.', 'Jumlah Halaman : 200, Tanggal Terbit : 7 Agt 2019, Bahasa : Indonesia, Penerbit : Elex Media Komputindo, Berat : 0.120 kg, Lebar : 11.4 cm, dan Panjang : 17.2 cm.', 0, '2019-08-09 01:39:50', '0000-00-00 00:00:00'),
(15, 1, 'One Piece', 'Eiichiro Oda', 25000, 'one_piece.jpg', 'Semua detail rencana pembunuhan Mom terkuak! Untuk bisa melukai Mom yang fisiknya kokoh, mereka harus menyerang kelemahannya, tapi… menghadapi masalah pelik itu, apa rencana Luffy dan kawan-kawan akan berhasil? Inilah kisah petualangan di lautan, One Piece!!', 'Jumlah Halaman : 216, Tanggal Terbit : 31 Okt 2018, Bahasa : Indonesia, Penerbit : Elex Media Komputindo, Berat : 0.088 kg, Lebar : 17.2 cm, Panjang : 11.4 cm.', 15, '2019-08-09 02:33:29', '0000-00-00 00:00:00'),
(16, 1, 'Dragon Ball Super', 'Yoshitaka Nagayama', 40000, 'super.jpg', 'Trunks ditangkap oleh Kaioshin penguasa waktu. Penggunaan mesin waktu adalah kejahatan besar, dan untuk menebus kesalahannya, Trunks harus membantu Kaioshin sebagai agennya untuk memperbaiki perubahan dalam sejarah. Tak mereka sangka, masalah yang harus Trunks bantu tangani adalah masalah besar yang bisa mengancam seluruh dunia. Dimensi Kegelapan tempat para penyihir jahat selama ini terkurung akan terbuka.', 'Jumlah Halaman : 184, Tanggal Terbit : 14 Agt 2019, Bahasa : Indonesia, Penerbit : Elex Media Komputindo, Berat : 0.120 kg, Lebar : 12 cm, dan Panjang : 18 cm.', 28, '2019-08-15 09:23:51', '0000-00-00 00:00:00'),
(17, 2, 'Tahta Di Timur Jawa', 'Zainollah Ahmad', 83000, 'takhta.jpg', 'Tahta Di Timur Jawa', 'Jumlah Halaman : 324, Tanggal Terbit : 29 Mar 2019, Bahasa : Indonesia, Penerbit : Matapadi Pressindo, Berat : 0.325 kg, Lebar : 14 cm, dan Panjang, 21 cm.', 12, '2019-08-12 10:28:59', '0000-00-00 00:00:00'),
(18, 1, 'Nanatsu no Taizai', 'Nakaba Suzuki', 25000, 'nana.jpg', 'Hari terakhir Seven Deadly Sins! Chandler mendekati Deadly Sins yang mengalami luka-luka. Pada saat semua orang bersiap sedia mati menghadapi amukan yang bahkan melampaui Ten Commandments, para raja legendaris bangkit berdiri. \r\n\r\nTapi, harapan itu menjadi hampa, masa depan tertutup ke arah kegelapan. Ini akibat keputusan yang tidak seharusnya diambil oleh Meliodas demi menukarnya dengan Elizabeth. Tiga bintang kejahatan mengerumuni tahta raja iblis. Klan dewi bangkit. Dendam bertahun-tahun mengundang perang suci.', 'Jumlah Halaman : 192, Tanggal Terbit : 14 Agt 2019, Bahasa : Indonesia, Penerbit : Elex Media Komputindo, Berat : 0.120 kg, Lebar : 11.4 cm, dan Panjang : 17.2 cm.', 12, '2019-08-13 02:37:56', '0000-00-00 00:00:00'),
(19, 1, 'Tokyo Ghoul', 'Sui Ishida', 55000, 'tokyo.jpg', '“Aku jadi suka padamu!” Ketika korban telah banyak berjatuhan di tengah pertempuran untuk mengeliminasi keluarga Tsukiyama, tanpa terduga “One-eyed Owl” datang menyerang!\r\n\r\nDari pandangan yang terhalang, mengalir keluar rasa cinta yang selama ini tersembunyi.\r\n\r\nTetesan yang menggelinding jatuh mengikuti alurnya yang terakhir, menembus kalbu sang terkasih, meninggalkan sebentuk rasa yang tak punya tempat untuk kembali.\r\n\r\nKetika kegelapan menyelimuti Tokyo, kedua “One-eyed” mulai menampakkan cahayanya, seperti sepasang bola mata yang bahkan enggan untuk berkedip…', 'Jumlah Halaman : 224, Tanggal Terbit : 24 Jul 2019, Bahasa : Indonesia, Penerbit : m&c!, Berat : 0.130 kg, Lebar : 11.4 cm, Panjang : 17.2 cm.', 10, '2019-08-13 02:42:39', '0000-00-00 00:00:00'),
(20, 2, 'Sejarah Pangeran Dipenegoro', 'Wardiman Djojonegoro', 70000, 'pan.jpg', 'SEJARAH Ringkas Pengeran Diponegoro dan Perang Jawa, 1825-1830 mengisahkan secara singkat riwayat hidup Pangeran Diponegoro (1785-1855) dan Perang Jawa (1825-1830). Secara khusus dimaksudkan untuk membantu pengajar pendidikan tingkat dasar untuk lebih mengenal sejarah Diponegoro dan Perang Jawa, buku ini didasarkan pada berbagai arsip, kepustakaan, autobiografi Pangeran Diponegoro (Babad Diponegoro), dan buku Peter Carey, Kuasa Ramalan; Pangeran Diponegoro dan Akhir Tatatnan Lama di Jawa, 1785-1855', 'Jumlah Halaman : 218, Tanggal Terbit : 29 Apr 2019, Bahasa : Indonesia, Penerbit : Kepustakaan Populer Gramedia, Berat : 0.160 kg, Lebar : 13.5 cm, dan Panjang : 20 cm.', 10, '2019-08-13 03:18:00', '0000-00-00 00:00:00'),
(21, 2, 'Seri Tempo: Sudirman (New)', 'Tempo', 49800, 'sudirman.jpg', '“Yang sakit itu Soedirman, tapi Panglima Besar tidak pernah sakit.” Pagi itu, 19 Desember 1948, Panglima Besar bangkit dan memutuskan memimpin pasukan keluar dari Yogyakarta, mengkonsolidasikan tentara, dan mempertahankan Republik dengan bergerilya.\r\n\r\nPanglima Besar sudah terikat sumpah: haram menyerah bagi tentara. Karena ikrar inilah Soedirman menolak bujukan Sukarno untuk berdiam di Yogyakarta. Dengan separuh paru-paru, ia memimpin gerilya. Selama delapan bulan, dengan ditandu, ia keluar-masuk hutan.\r\n\r\nDi medan gerilya, Panglima Besar dipercaya bisa bersembunyi dari kejaran Bekanda. Mampu menyembuhkan orang sakit sdan-konon-menjatuhkan pesawat terbang dengan meniupkan bubuk merica. Aktivis Hizbul Wathan, mantan guru, dan peletak dasar kultur TNI yang ironisnya dulu sempat berkata, “Saya cacat, tak layak masuk tentara.” Dialah Soedirman: panglima, martir.\r\n\r\nKisah tentang Soedirman adalah jilid kedua seri “Tokoh Militer” yang diangkat dari liputan khusus Majalah Berita Mingguan Tempo November 2012. Serial ini mengups, menguak, dan membongkar mitos dan berbagai sisi kehidupan para pewira milite yang dinilai menguah sejarah.', 'Jumlah Halaman : 174, Tanggal Terbit : 24 Okt 2016, Bahasa : Indonesia, Penerbit : Kepustakaan Populer Gramedia, Berat : 0.5000 kg, Lebar : 15 cm, dan Panjang : 23 cm.', 10, '2019-08-13 03:22:12', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
