-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 06:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_atw`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deskripsi` text DEFAULT NULL,
  `pemasok` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`, `deskripsi`, `pemasok`) VALUES
(2, 'Kemeja', '2020-11-14 07:28:56', '2020-11-15 10:58:05', 'percobaan 2', 'naimah'),
(4, 'Tas', NULL, '2020-11-14 07:29:34', NULL, NULL),
(5, 'Parfum', NULL, '2020-11-14 07:29:34', NULL, NULL),
(6, 'Sepatu', NULL, '2020-11-14 07:29:47', NULL, NULL),
(7, 'Jam Tangan', NULL, '2020-11-14 07:29:47', NULL, NULL),
(9, 'Jawellery', '2020-11-14 02:03:40', '2020-11-14 02:03:40', 'emas murni', 'Naimah'),
(10, 'Flatshoes', '2020-11-15 10:59:33', '2020-11-15 10:59:33', 'percobaan2', 'Suci fitriani'),
(11, 'Topi', '2020-11-15 11:00:34', '2020-11-15 11:00:34', 'hj', 'naimah'),
(14, 'Gamis', '2020-11-16 02:14:01', '2020-11-16 02:14:41', 'gamis dengan bahan katun yang sejuk dan aman bersih', 'leni');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `berat`, `deskripsi`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'Heart Sweater hoodie wanita Mocca', 45000, 2, '**Welcome Reseller & Dropship**\r\n\r\n👚 all size fit to L\r\n👚 Warna : Sesuai Pict\r\n👚 Material fleece\r\n\r\n\r\n\r\n\r\n#fashionterbaru #jaketwanita#jaketcewekterbaru #sweater #sweaterwanita #sweaterhoodie #vnbnbhoodiewanitakeren #switer #hudihudie#jaket #freeongkir#bajuwanita #jaketwanita #rajuttebal #rajut #Hoodiepria #hoodiecowok', 4, '2020-11-13 05:40:59', '2020-11-13 05:43:27'),
(2, 'SWEATER HOODIE WANITA TOM&JERRY/SWEATER LUCU MOTIF KARTUN BAHAN BABYTERRY', 22999, 9, 'BAHAN:BABYTERRY GOOD QUALITY\r\n\r\n\r\nSIZE:L\r\nLINGKARAN DADA:92CM\r\nPanjang:52cm\r\n\r\n99%READY Y SAY.....BURUAN DIORDER SAY SBLM KEHABISAN...\r\n\r\n🚫 MOHON DIBACA TERLEBIH DAHULU SEBELUM MELAKUKAN PEMBELIAN 🚫\r\n\r\n- JIKA ADA KESALAHAN DALAM PENGIRIMAN TOLONG LAMPIRKAN VIDEO KETIKA PAKET DIBUKA DAN SILAHKAN LANGSUNG MENGHUBUNGI WA ADMIN\r\n\r\n- JIKA TIDAK MELAMPIRKAN YANG KAMI MINTA, CASE AKAN KAMI CANCEL KARNA TIDAK MEMENUHI SYARAT :)\r\nJADI MOHON KERJA SAMANYA YA, AGAR SEGERA KAMI PROSES :)\r\n\r\n🚫 TIDAK MENERIMA PESANAN MELALUI CATATAN DAN CHAT 🚫\r\n\r\nContoh : Pesan 5 PUTIH , tapi DICATATAN PINK 1 , MUSTARD 2 , ARMY 1, NAVY 1\r\n\r\nDikarenakan agar stock kami tetap balance ( seimbang / tidak kacau ), jika sudah membeli berarti anda SETUJU dengan\r\nketentuan dan syarat yang sudah kami berikan :)\r\n\r\n🚫 MOHON UNTUK MENGISI ALAMAT TUJUAN DENGAN LENGKAP DAN BENAR, DI SARANKAN DENGAN RT/RW DAN JUGA KODE POS DAN SERTAKAN NO HANDPHONE YANG SELALU AKTIF! 🚫\r\n\r\nAgar dapat di hubungi jika ada kendala dalam proses pencarian lokasi penerimaan\r\npaket:)\r\n\r\n💰 MEMBELI = SETUJU 💰\r\n\r\n✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈✈\r\n📦 PENGIRIMAN SENIN - SABTU 📦\r\n( SABTU ORDERAN YANG MASUK DIATAS JAM 13.00 , AKAN KAMI PROSES DI HARI SENIN )\r\n📦 BARANG DIKIRIM H+1 SETELAH TRANSFER 📦\r\n📦 JIKA ADA BARANG YANG KOSONG / HABIS MAKA AKAN KAMI INFOKAN TERLRBIH DAHULU 📦\r\n\r\n🥳📦 M I N G G U 🥳 L I B U R 📦🥳\r\n\r\n💰 WELCOME RESSELER & DROPSHIPPER 💰\r\n\r\nHAPPY SHOPPING SAY...😁🙏SALAM P&F FASHION\r\n\r\n#bajuwanita #jualbaju #rokfashion #tumblrtee#jualkaos #jualtumblrtee #bajutumblr #tokobajuonline #tumblrtee #tshirt #bajudistro #ringertee #oneck ', NULL, '2020-11-13 07:00:42', '2020-11-13 07:03:10'),
(9, 'Piyama Wanita', 32000, 175, 'BAHAN MICRO\r\nALL SIZE\r\nABG - DEWASA\r\nAda kantong di bagian bawah baju sebelah kanan\r\n\r\nLingkar baju = 96-98 cm\r\nPanjang atasan = 61 cm\r\nPanjang Celana = 84 cm\r\nCelana pinggang karet bisa sampai kurang lbh 90cm jika di tarik maksimal', 30, '2020-11-15 10:22:42', '2020-11-16 10:38:08'),
(12, 'Jam Tangan Olivia Burton Groovy Blooms Candy Pink Midi Dial OB16AN04', 1200000, 500, 'Deskripsi Jam Tangan Olivia Burton Groovy Blooms Candy Pink Midi Dial OB16AN04\r\nHi,\r\nPRODUK INI BERGARANSI BATERAI SEUMUR HIDUP! :)\r\n\r\n>>>>>DETAIL PRODUK <<<<<\r\nPink & floral roman dial\r\nYellow gold ion-plated stainless steel case\r\nCandy pink vegan strap\r\nQuartz Movement\r\nWater resistance 1 ATM\r\nDiameter 30mm\r\n\r\n\r\nKENAPA BELI DARI THE WATCH CO ?\r\nThe Watch Co. adalah distributor resmi untuk brand jam tangan; Daniel Wellington, Timex, Olivia Burton, Komono, D1 Milano, Adidas dan beberapa produk lainnya di Indonesia. Semua produk-produk kami dijamin 100% ORIGINAL.\r\n\r\n>>>>>KETENTUAN GARANSI <<<<<\r\n. Garansi baterai seumur hidup (meskipun kartu garansi telah habis masa berlakunya)\r\n. Free service mesin jam + free biaya jasa selama 1 tahun.\r\n. Disc 40% untuk pergantian sparepart jam (diluar kerusakan mesin).\r\n\r\n>>>>>PROSES ORDER <<<<<\r\nMaksimal Order Pukul 13:00 WIB ya.\r\n((Order yang diterima diluar jam tersebut, maka akan kami proses pada hari berikutnya)).\r\n\r\n>>>>>PROSES PENGIRIMAN <<<<<\r\nInstant kurir kami kirimkan serentak pukul 14:00 WIB.\r\nResi JNE akan di update pukul 17:00 WIB.\r\n\r\nTerima Kasih atas kepercayaan Anda dan Selamat Berbelanja :)', 1, '2020-11-16 10:36:29', '2020-11-16 10:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `diskon` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `nama`, `diskon`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Promo Lenstore 11.11', '60%', 'Promo puncak pada tanggal 11 november 2020', '2020-11-16 08:18:01', '2020-11-16 08:25:27'),
(2, 'tahun baru', '50%', 'g', '2020-11-16 08:23:36', '2020-11-16 08:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(22, 'Leni Suryani', 'Lenisuryani', '$2y$10$GL9KJy1xfjbc88kY3Hz2LubVbI16YGbQNDP8a3TFIs/0Iw4iXFs6S', 'Lenisuryani170@gmail.com', NULL, '2020-11-15 10:09:51', '2020-11-16 10:30:14'),
(26, 'Naimah Nurhayati', 'Nai Daulay', '$2y$10$2Rp24gXv9snwxK9wyyKH9eIjdClnKk9MpDJ2qsdDWZj.BEWkcxH7K', 'Naimah@gmail.com', NULL, '2020-11-16 08:29:09', '2020-11-16 08:29:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
